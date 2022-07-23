# OpenAPI\Client\SchoolsApi

All URIs are relative to https://api.clever.com/v3.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCoursesForSchool()**](SchoolsApi.md#getCoursesForSchool) | **GET** /schools/{id}/courses | 
[**getDistrictForSchool()**](SchoolsApi.md#getDistrictForSchool) | **GET** /schools/{id}/district | 
[**getSchool()**](SchoolsApi.md#getSchool) | **GET** /schools/{id} | 
[**getSchools()**](SchoolsApi.md#getSchools) | **GET** /schools | 
[**getSectionsForSchool()**](SchoolsApi.md#getSectionsForSchool) | **GET** /schools/{id}/sections | 
[**getTermsForSchool()**](SchoolsApi.md#getTermsForSchool) | **GET** /schools/{id}/terms | 
[**getUsersForSchool()**](SchoolsApi.md#getUsersForSchool) | **GET** /schools/{id}/users | 


## `getCoursesForSchool()`

```php
getCoursesForSchool($id, $limit, $starting_after, $ending_before): \OpenAPI\Client\Model\CoursesResponse
```



Returns the courses for a school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$limit = 56; // int
$starting_after = 'starting_after_example'; // string
$ending_before = 'ending_before_example'; // string

try {
    $result = $apiInstance->getCoursesForSchool($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getCoursesForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CoursesResponse**](../Model/CoursesResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDistrictForSchool()`

```php
getDistrictForSchool($id): \OpenAPI\Client\Model\DistrictResponse
```



Returns the district for a school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getDistrictForSchool($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getDistrictForSchool: ', $e->getMessage(), PHP_EOL;
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

## `getSchool()`

```php
getSchool($id): \OpenAPI\Client\Model\SchoolResponse
```



Returns a specific school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getSchool($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchools()`

```php
getSchools($limit, $starting_after, $ending_before, $count): \OpenAPI\Client\Model\SchoolsResponse
```



Returns a list of schools

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$starting_after = 'starting_after_example'; // string
$ending_before = 'ending_before_example'; // string
$count = 'count_example'; // string

try {
    $result = $apiInstance->getSchools($limit, $starting_after, $ending_before, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getSchools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]
 **count** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSectionsForSchool()`

```php
getSectionsForSchool($id, $limit, $starting_after, $ending_before): \OpenAPI\Client\Model\SectionsResponse
```



Returns the sections for a school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$limit = 56; // int
$starting_after = 'starting_after_example'; // string
$ending_before = 'ending_before_example'; // string

try {
    $result = $apiInstance->getSectionsForSchool($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getSectionsForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTermsForSchool()`

```php
getTermsForSchool($id, $limit, $starting_after, $ending_before): \OpenAPI\Client\Model\TermsResponse
```



Returns the terms for a school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$limit = 56; // int
$starting_after = 'starting_after_example'; // string
$ending_before = 'ending_before_example'; // string

try {
    $result = $apiInstance->getTermsForSchool($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getTermsForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TermsResponse**](../Model/TermsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersForSchool()`

```php
getUsersForSchool($id, $role, $primary, $limit, $starting_after, $ending_before): \OpenAPI\Client\Model\UsersResponse
```



Returns the staff, student, and/or teacher users for a school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$role = 'role_example'; // string
$primary = 'primary_example'; // string
$limit = 56; // int
$starting_after = 'starting_after_example'; // string
$ending_before = 'ending_before_example'; // string

try {
    $result = $apiInstance->getUsersForSchool($id, $role, $primary, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getUsersForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **role** | **string**|  | [optional]
 **primary** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
