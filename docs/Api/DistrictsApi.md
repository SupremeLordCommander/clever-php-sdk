# OpenAPI\Client\DistrictsApi

All URIs are relative to https://api.clever.com/v3.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDistrict()**](DistrictsApi.md#getDistrict) | **GET** /districts/{id} | 
[**getDistricts()**](DistrictsApi.md#getDistricts) | **GET** /districts | 


## `getDistrict()`

```php
getDistrict($id): \OpenAPI\Client\Model\DistrictResponse
```



Returns a specific district

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DistrictsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getDistrict($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictsApi->getDistrict: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDistricts()`

```php
getDistricts($count): \OpenAPI\Client\Model\DistrictsResponse
```



Returns a list of districts. In practice this will only return the one district associated with the bearer token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DistrictsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 'count_example'; // string

try {
    $result = $apiInstance->getDistricts($count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictsApi->getDistricts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DistrictsResponse**](../Model/DistrictsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
