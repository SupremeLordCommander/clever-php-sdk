<?php
/**
 * User: jlawrence
 * Date: 5/27/16
 * Time: 10:04 AM.
 */
namespace Clever;
use Exception;

class SSO
{
    public static $base              = 'https://clever.com/oauth';
    public static $oauthTokenUrl     = 'https://clever.com/oauth/tokens';
    public static $oauthAuthorizeUrl = 'https://clever.com/oauth/authorize';
    public static $apiMe = 'https://api.clever.com';

    protected $_auth;

    public function __construct($auth = null)
    {
        $this->_auth = $auth;
    }


    /**
     * @param array|null $override_options
     *
     * @return array
     */
    public function setOptions(array $override_options = null)
    {
        $options = array(
            'client_id'                  => $override_options['clientId'],
            'client_secret'              => $override_options['clientSecret'],
            'clever_redirect_url'        => $override_options['clientRedirect'],
            'clever_oauth_tokens_url'    => self::$oauthTokenUrl,
            'clever_oauth_authorize_url' => self::$oauthAuthorizeUrl,
            'clever_api_me_url'          => self::$apiMe.'/me',
        );
        if (isset($override_options)) {
            array_merge($options, $override_options);
        }

        // Clever redirect URIs must be preregistered on your developer dashboard.
        if ( ! empty($options['client_id']) && ! empty($options['client_secret']) && ! empty($options['clever_redirect_url'])) {
            $this->_auth = $options;
            return $this;
        } else {

            die('Cannot communicate with Clever without configuration.');
        }
    }


    /**
     * Exchanges a $code value received in a $client_redirect for a bearer token.
     *
     * @param string $code    OAuth 2.0 exchange code received when our OAuth redirect was triggered
     * @param array  $options Options used for Clever API requests
     *
     * @throws Exception if the bearer token cannot be retrieved
     *
     * @return string $bearer_token  The string value of a user's OAuth 2.0 access token
     */

    /**
     * @param string $code
     *
     * @return string $bearer_token  The string value of a user's OAuth 2.0 access token
     */
    public function exchangeCodeForBearerToken($code)
    {
        $data            = array(
            'code'         => $code,
            'grant_type'   => 'authorization_code',
            'redirect_uri' => $this->_auth['clever_redirect_url'],
        );
        $request_options = array('method' => 'POST', 'data' => $data);
        $response        = $this->requestFromClever($this->_auth['clever_oauth_tokens_url'], $request_options, $this->_auth);
        // Evaluate if the response is successful
        if ($response && $response['response_code'] && $response['response_code'] == '200') {
            $bearer_token = $response['response']['access_token'];

            $this->_auth['bearer_token'] = $bearer_token;
            return $this;
        } else {
            // Handle condition when $code cannot be exchanged for bearer token from Clever
            die('Cannot retrieve bearer token.');
        }
    }


    /**
     * Uses the specified bearer token to retrieve the /me response for the user.
     *
     *
     * @throws Exception if the /me API response cannot be retrieved
     *
     * @return array $oauth_response  Hash of Clever's response when identifying a bearer token's owner
     */
    public function retrieveMeResponse()
    {
        $request_options = array('method' => 'GET', 'bearer_token' => $this->_auth['bearer_token']);
        $response        = $this->requestFromClever($this->_auth['clever_api_me_url'], $request_options);
        // Evaluate if the response is successful
        if ($response && $response['response_code'] && $response['response_code'] == '200') {
            $oauth_response = $response['response'];

            return $oauth_response;
        } else {
            // Handle condition when /me response cannot be retrieved for bearer token
            die('Could not retrieve /me response for bearer token.');
        }
    }


    /**
     * General-purpose HTTP wrapper for working with the Clever API.
     *
     * @param string $url             The fully-qualified URL that the request will be issued to
     * @param array  $request_options Hash of options pertinent to the specific request
     * @param array  $clever_options  Hash of options more generally associated with Clever API requests
     *
     * @throws Exception when the HTTP library, cURL, cannot issue the request
     *
     * @return array $normalized_response  A structured hash with pertinent response & request details
     */
    public function requestFromClever($url, array $request_options)
    {
        $ch              = curl_init($url);
        $request_headers = array('Accept: application/json');
        if (array_key_exists('bearer_token', $this->_auth)) {
            $auth_header       = 'Authorization: Bearer '.$this->_auth['bearer_token'];
            $request_headers[] = $auth_header;
        } else {
            // When we don't have a bearer token, assume we're performing client auth.
            curl_setopt($ch, CURLOPT_USERPWD, $this->_auth['client_id'].':'.$this->_auth['client_secret']);
        }
        if ($request_options && array_key_exists('method', $request_options) && $request_options['method'] == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            if ($request_options['data']) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $request_options['data']);
            }
        }
        // Set prepared HTTP headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $raw_response    = curl_exec($ch);
        $parsed_response = json_decode($raw_response, true);
        $curl_info       = curl_getinfo($ch);

        // Provide the HTTP response code for easy error handling.
        $response_code = $curl_info['http_code'];

        if ($curl_error = curl_errno($ch)) {
            $error_message = curl_strerror($curl_error);
            die("cURL failure #{$curl_error}: {$error_message}");
        }

        // Prepare the parsed and raw response for further use.
        $normalized_response = array(
            'response_code' => $response_code,
            'response'      => $parsed_response,
            'raw_response'  => $raw_response,
            'curl_info'     => $curl_info
        );

        return $normalized_response;
    }
}
