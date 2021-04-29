# Swagger\Client\DataApi

All URIs are relative to *https://api.clever.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContactsForUser**](DataApi.md#getcontactsforuser) | **GET** /users/{id}/mycontacts | 
[**getCourse**](DataApi.md#getcourse) | **GET** /courses/{id} | 
[**getCourseForSection**](DataApi.md#getcourseforsection) | **GET** /sections/{id}/course | 
[**getCourses**](DataApi.md#getcourses) | **GET** /courses | 
[**getCoursesForResource**](DataApi.md#getcoursesforresource) | **GET** /resources/{id}/courses | 
[**getCoursesForSchool**](DataApi.md#getcoursesforschool) | **GET** /schools/{id}/courses | 
[**getDistrict**](DataApi.md#getdistrict) | **GET** /districts/{id} | 
[**getDistrictForCourse**](DataApi.md#getdistrictforcourse) | **GET** /courses/{id}/district | 
[**getDistrictForSchool**](DataApi.md#getdistrictforschool) | **GET** /schools/{id}/district | 
[**getDistrictForSection**](DataApi.md#getdistrictforsection) | **GET** /sections/{id}/district | 
[**getDistrictForTerm**](DataApi.md#getdistrictforterm) | **GET** /terms/{id}/district | 
[**getDistrictForUser**](DataApi.md#getdistrictforuser) | **GET** /users/{id}/district | 
[**getDistricts**](DataApi.md#getdistricts) | **GET** /districts | 
[**getResource**](DataApi.md#getresource) | **GET** /resources/{id} | 
[**getResources**](DataApi.md#getresources) | **GET** /resources | 
[**getResourcesForCourse**](DataApi.md#getresourcesforcourse) | **GET** /courses/{id}/resources | 
[**getResourcesForSection**](DataApi.md#getresourcesforsection) | **GET** /sections/{id}/resources | 
[**getResourcesForUser**](DataApi.md#getresourcesforuser) | **GET** /users/{id}/resources | 
[**getSchool**](DataApi.md#getschool) | **GET** /schools/{id} | 
[**getSchoolForSection**](DataApi.md#getschoolforsection) | **GET** /sections/{id}/school | 
[**getSchools**](DataApi.md#getschools) | **GET** /schools | 
[**getSchoolsForCourse**](DataApi.md#getschoolsforcourse) | **GET** /courses/{id}/schools | 
[**getSchoolsForTerm**](DataApi.md#getschoolsforterm) | **GET** /terms/{id}/schools | 
[**getSchoolsForUser**](DataApi.md#getschoolsforuser) | **GET** /users/{id}/schools | 
[**getSection**](DataApi.md#getsection) | **GET** /sections/{id} | 
[**getSections**](DataApi.md#getsections) | **GET** /sections | 
[**getSectionsForCourse**](DataApi.md#getsectionsforcourse) | **GET** /courses/{id}/sections | 
[**getSectionsForResource**](DataApi.md#getsectionsforresource) | **GET** /resources/{id}/sections | 
[**getSectionsForSchool**](DataApi.md#getsectionsforschool) | **GET** /schools/{id}/sections | 
[**getSectionsForTerm**](DataApi.md#getsectionsforterm) | **GET** /terms/{id}/sections | 
[**getSectionsForUser**](DataApi.md#getsectionsforuser) | **GET** /users/{id}/sections | 
[**getStudentsForUser**](DataApi.md#getstudentsforuser) | **GET** /users/{id}/mystudents | 
[**getTeachersForUser**](DataApi.md#getteachersforuser) | **GET** /users/{id}/myteachers | 
[**getTerm**](DataApi.md#getterm) | **GET** /terms/{id} | 
[**getTermForSection**](DataApi.md#gettermforsection) | **GET** /sections/{id}/term | 
[**getTerms**](DataApi.md#getterms) | **GET** /terms | 
[**getTermsForSchool**](DataApi.md#gettermsforschool) | **GET** /schools/{id}/terms | 
[**getUser**](DataApi.md#getuser) | **GET** /users/{id} | 
[**getUsers**](DataApi.md#getusers) | **GET** /users | 
[**getUsersForResource**](DataApi.md#getusersforresource) | **GET** /resources/{id}/users | 
[**getUsersForSchool**](DataApi.md#getusersforschool) | **GET** /schools/{id}/users | 
[**getUsersForSection**](DataApi.md#getusersforsection) | **GET** /sections/{id}/users | 

# **getContactsForUser**
> \Swagger\Client\Model\UsersResponse getContactsForUser($id, $limit, $starting_after, $ending_before)



Returns the contact users for a student user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getContactsForUser($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getContactsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCourse**
> \Swagger\Client\Model\CourseResponse getCourse($id)



Returns a specific course

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getCourse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CourseResponse**](../Model/CourseResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCourseForSection**
> \Swagger\Client\Model\CourseResponse getCourseForSection($id)



Returns the course for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getCourseForSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getCourseForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CourseResponse**](../Model/CourseResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCourses**
> \Swagger\Client\Model\CoursesResponse getCourses($limit, $starting_after, $ending_before, $count)



Returns a list of courses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 
$count = "count_example"; // string | 

try {
    $result = $apiInstance->getCourses($limit, $starting_after, $ending_before, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getCourses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]
 **count** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CoursesResponse**](../Model/CoursesResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCoursesForResource**
> \Swagger\Client\Model\CoursesResponse getCoursesForResource($id, $limit, $starting_after, $ending_before)



Returns the courses for a resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getCoursesForResource($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getCoursesForResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CoursesResponse**](../Model/CoursesResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCoursesForSchool**
> \Swagger\Client\Model\CoursesResponse getCoursesForSchool($id, $limit, $starting_after, $ending_before)



Returns the courses for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getCoursesForSchool($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getCoursesForSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CoursesResponse**](../Model/CoursesResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrict**
> \Swagger\Client\Model\DistrictResponse getDistrict($id)



Returns a specific district

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDistrict($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrict: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForCourse**
> \Swagger\Client\Model\DistrictResponse getDistrictForCourse($id)



Returns the district for a course

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDistrictForCourse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForSchool**
> \Swagger\Client\Model\DistrictResponse getDistrictForSchool($id)



Returns the district for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDistrictForSchool($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForSection**
> \Swagger\Client\Model\DistrictResponse getDistrictForSection($id)



Returns the district for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDistrictForSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForTerm**
> \Swagger\Client\Model\DistrictResponse getDistrictForTerm($id)



Returns the district for a term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDistrictForTerm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForUser**
> \Swagger\Client\Model\DistrictResponse getDistrictForUser($id)



Returns the district for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDistrictForUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistricts**
> \Swagger\Client\Model\DistrictsResponse getDistricts($count)



Returns a list of districts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = "count_example"; // string | 

try {
    $result = $apiInstance->getDistricts($count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistricts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DistrictsResponse**](../Model/DistrictsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getResource**
> \Swagger\Client\Model\ResourceResponse getResource($id)



Returns a specific resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getResource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ResourceResponse**](../Model/ResourceResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getResources**
> \Swagger\Client\Model\ResourcesResponse getResources($limit, $starting_after, $ending_before)



Returns a list of resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getResources($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResourcesResponse**](../Model/ResourcesResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getResourcesForCourse**
> \Swagger\Client\Model\ResourcesResponse getResourcesForCourse($id, $limit, $starting_after, $ending_before)



Returns the resources for a course

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getResourcesForCourse($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getResourcesForCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResourcesResponse**](../Model/ResourcesResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getResourcesForSection**
> \Swagger\Client\Model\ResourcesResponse getResourcesForSection($id, $limit, $starting_after, $ending_before)



Returns the resources for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getResourcesForSection($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getResourcesForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResourcesResponse**](../Model/ResourcesResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getResourcesForUser**
> \Swagger\Client\Model\ResourcesResponse getResourcesForUser($id, $limit, $starting_after, $ending_before)



Returns the resources for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getResourcesForUser($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getResourcesForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResourcesResponse**](../Model/ResourcesResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchool**
> \Swagger\Client\Model\SchoolResponse getSchool($id)



Returns a specific school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSchool($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolForSection**
> \Swagger\Client\Model\SchoolResponse getSchoolForSection($id)



Returns the school for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSchoolForSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchools**
> \Swagger\Client\Model\SchoolsResponse getSchools($limit, $starting_after, $ending_before, $count)



Returns a list of schools

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 
$count = "count_example"; // string | 

try {
    $result = $apiInstance->getSchools($limit, $starting_after, $ending_before, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]
 **count** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolsForCourse**
> \Swagger\Client\Model\SchoolsResponse getSchoolsForCourse($id, $limit, $starting_after, $ending_before)



Returns the schools for a course

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getSchoolsForCourse($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolsForCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolsForTerm**
> \Swagger\Client\Model\SchoolsResponse getSchoolsForTerm($id, $limit, $starting_after, $ending_before)



Returns the schools for a term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getSchoolsForTerm($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolsForTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolsForUser**
> \Swagger\Client\Model\SchoolsResponse getSchoolsForUser($id, $primary, $limit, $starting_after, $ending_before)



Returns the schools for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$primary = "primary_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getSchoolsForUser($id, $primary, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **primary** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSection**
> \Swagger\Client\Model\SectionResponse getSection($id)



Returns a specific section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SectionResponse**](../Model/SectionResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSections**
> \Swagger\Client\Model\SectionsResponse getSections($limit, $starting_after, $ending_before, $count)



Returns a list of sections

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 
$count = "count_example"; // string | 

try {
    $result = $apiInstance->getSections($limit, $starting_after, $ending_before, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]
 **count** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionsForCourse**
> \Swagger\Client\Model\SectionsResponse getSectionsForCourse($id, $limit, $starting_after, $ending_before)



Returns the sections for a course

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getSectionsForCourse($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSectionsForCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionsForResource**
> \Swagger\Client\Model\SectionsResponse getSectionsForResource($id, $limit, $starting_after, $ending_before)



Returns the sections for a resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getSectionsForResource($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSectionsForResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionsForSchool**
> \Swagger\Client\Model\SectionsResponse getSectionsForSchool($id, $limit, $starting_after, $ending_before)



Returns the sections for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getSectionsForSchool($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSectionsForSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionsForTerm**
> \Swagger\Client\Model\SectionsResponse getSectionsForTerm($id, $limit, $starting_after, $ending_before)



Returns the sections for a term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getSectionsForTerm($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSectionsForTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionsForUser**
> \Swagger\Client\Model\SectionsResponse getSectionsForUser($id, $limit, $starting_after, $ending_before)



Returns the sections for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getSectionsForUser($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSectionsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentsForUser**
> \Swagger\Client\Model\UsersResponse getStudentsForUser($id, $limit, $starting_after, $ending_before)



Returns the student users for a teacher or contact user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getStudentsForUser($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getStudentsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTeachersForUser**
> \Swagger\Client\Model\UsersResponse getTeachersForUser($id, $limit, $starting_after, $ending_before)



Returns the teacher users for a student user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getTeachersForUser($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTeachersForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTerm**
> \Swagger\Client\Model\TermResponse getTerm($id)



Returns a specific term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getTerm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TermResponse**](../Model/TermResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTermForSection**
> \Swagger\Client\Model\TermResponse getTermForSection($id)



Returns the term for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getTermForSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTermForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TermResponse**](../Model/TermResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTerms**
> \Swagger\Client\Model\TermsResponse getTerms($limit, $starting_after, $ending_before, $count)



Returns a list of terms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 
$count = "count_example"; // string | 

try {
    $result = $apiInstance->getTerms($limit, $starting_after, $ending_before, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]
 **count** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TermsResponse**](../Model/TermsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTermsForSchool**
> \Swagger\Client\Model\TermsResponse getTermsForSchool($id, $limit, $starting_after, $ending_before)



Returns the terms for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getTermsForSchool($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTermsForSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TermsResponse**](../Model/TermsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUser**
> \Swagger\Client\Model\UserResponse getUser($id)



Returns a specific user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUsers**
> \Swagger\Client\Model\UsersResponse getUsers($limit, $role, $starting_after, $ending_before, $count)



Returns a list of contact, district admin, staff, student, and/or teacher users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | 
$role = "role_example"; // string | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 
$count = "count_example"; // string | 

try {
    $result = $apiInstance->getUsers($limit, $role, $starting_after, $ending_before, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **role** | **string**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]
 **count** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUsersForResource**
> \Swagger\Client\Model\UsersResponse getUsersForResource($id, $role, $limit, $starting_after, $ending_before)



Returns the student and/or teacher users for a resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$role = "role_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getUsersForResource($id, $role, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getUsersForResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **role** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUsersForSchool**
> \Swagger\Client\Model\UsersResponse getUsersForSchool($id, $role, $primary, $limit, $starting_after, $ending_before)



Returns the staff, student, and/or teacher users for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$role = "role_example"; // string | 
$primary = "primary_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getUsersForSchool($id, $role, $primary, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getUsersForSchool: ', $e->getMessage(), PHP_EOL;
}
?>
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

[**\Swagger\Client\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUsersForSection**
> \Swagger\Client\Model\UsersResponse getUsersForSection($id, $role, $limit, $starting_after, $ending_before)



Returns the student and/or teacher users for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$role = "role_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $apiInstance->getUsersForSection($id, $role, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getUsersForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **role** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

