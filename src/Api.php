<?php

namespace Clever;

use Clever\Exceptions\ApiException;
use Clever\Exceptions\Exception;
use Clever\Exceptions\InvalidRequestException;
use Clever\Exceptions\AuthenticationException;

class Api extends ApiRequest
{

    function __construct($token)
    {
        $this->setToken($token);
    }


    protected $objectMap = [
        "district"      => "\\Clever\\District",
        "school"        => "\\Clever\\School",
        "section"       => "\\Clever\\Section",
        "teacher"       => "\\Clever\\Teacher",
        "student"       => "\\Clever\\Student",
        "event"         => "\\Clever\\Event",
        "status"        => "\\Clever\\Status",
        "school_admins" => "\\Clever\\SchoolAdmin",
        "district_admins" => "\\Clever\\DistrictAdmin"
    ];


    function newObject($type, $id, array $data = [])
    {
        if (class_exists($type)) {
            $object = new $type($this->token, $id, $this->logger);
            if ($data) {
                $object = $this->unmarshal($object, $data);
            }
        }

        return $object;
    }


    function __call($name, $args = [])
    {
        // if ($name =='teacher'){
        //     ddng('teacher', $args);
        // }
        if (isset($this->objectMap[$name])) {
            $object = $this->objectMap[$name];
            $Obj = new $object($args[0] ?? null, function ($url, array $query = []) {
                list($body, $code) = $this->ping($url, $query);
                if ($code != 200) {
                    return json_decode($body, true);
                }

                return json_decode($body, true);
            });

            return $Obj->retrieve();
        }
    }


    function school_admins($id = false)
    {
        $url = 'school_admins';
        if ($id)
        {
            $url = $url.'/'.$id;
        }
        list($body) = $this->ping($url, []);
        $data = json_decode($body, true);

        return $data;
    }


    function districts()
    {
        list($body, $code) = $this->ping('districts', []);
        if ($code != 200) {
            $this->relayApiError(new ApiException($body, $code));
        }
        $data = json_decode($body, true);

        return $data;
    }

    function districtAdmins($id = false) {
        $url = 'district_admins';
        if ($id) {
            $url = $url.'/'.$id;
        }
        list($body, $code) = $this->ping('district_admins', []);
        $data = json_decode($body, true);

        return $data;
    }

    function getUrl($url) {
        list($body, $code) = $this->ping($url, []);
        $data = json_decode($body, true);
        return $data;
    }

    function relayApiError(ApiException $e)
    {
        switch ($e->getCode()) {
            case 400:
            case 404:
                $e = new InvalidRequestException($e->getMessage(), $e->getCode(), $e);
                break;
            case 401:
                $e = new AuthenticationException($e->getMessage(), $e->getCode(), $e);
                break;
            case 402:
                $e = new InvalidRequestException($e->getMessage(), $e->getCode(), $e);
                break;
            default:
                $e = new Exception($e->getMessage(), $e->getCode(), $e);
                break;
        }

        if ($this->logger instanceof Log\LoggerInterface) {
            $this->logger->error($e->getMessage(), [
                "APIBASE" => static::APIBASE,
                "VERSION" => static::VERSION,
            ]);
        }

        throw $e;
    }

}
