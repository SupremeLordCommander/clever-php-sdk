# Swagger\Client\EventsApi

All URIs are relative to *https://api.clever.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEvent**](EventsApi.md#getevent) | **GET** /events/{id} | 
[**getEvents**](EventsApi.md#getevents) | **GET** /events | 

# **getEvent**
> \Swagger\Client\Model\EventResponse getEvent($id)



Returns the specific event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getEvents**
> \Swagger\Client\Model\EventsResponse getEvents($limit, $starting_after, $ending_before, $school, $record_type)



Returns a list of events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 
$school = "school_example"; // string | 
$record_type = array("record_type_example"); // string[] | 

try {
    $result = $apiInstance->getEvents($limit, $starting_after, $ending_before, $school, $record_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]
 **school** | **string**|  | [optional]
 **record_type** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EventsResponse**](../Model/EventsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

