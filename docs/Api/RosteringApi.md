# Kimono\RosteringApi

All URIs are relative to https://api.us2.kimonocloud.com/v2/interop/data, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findCourse()**](RosteringApi.md#findCourse) | **GET** /rostering/courses/{id} | Find a Course by $sys.id |
| [**findLEA()**](RosteringApi.md#findLEA) | **GET** /rostering/leas/{id} | Find an LEA-type Org by $sys.id |
| [**findOrg()**](RosteringApi.md#findOrg) | **GET** /rostering/orgs/{id} | Find an Org by $sys.id |
| [**findPerson()**](RosteringApi.md#findPerson) | **GET** /rostering/persons/{id} | Find a Person by $sys.id |
| [**findSection()**](RosteringApi.md#findSection) | **GET** /rostering/sections/{id} | Find a Section by $sys.id |
| [**findTerm()**](RosteringApi.md#findTerm) | **GET** /rostering/terms/{id} | Find a Term by $sys.id |
| [**listCourses()**](RosteringApi.md#listCourses) | **GET** /rostering/courses | List all Courses |
| [**listCoursesForOrg()**](RosteringApi.md#listCoursesForOrg) | **GET** /rostering/orgs/{id}/courses | List Courses that belong to an Org |
| [**listLEAs()**](RosteringApi.md#listLEAs) | **GET** /rostering/leas | List all LEA-type Orgs |
| [**listOrgs()**](RosteringApi.md#listOrgs) | **GET** /rostering/orgs | List all Orgs |
| [**listPersons()**](RosteringApi.md#listPersons) | **GET** /rostering/persons | Get all Persons |
| [**listSchools()**](RosteringApi.md#listSchools) | **GET** /rostering/schools | List all School-type Orgs |
| [**listSections()**](RosteringApi.md#listSections) | **GET** /rostering/sections | List all Sections |
| [**listSectionsForOrg()**](RosteringApi.md#listSectionsForOrg) | **GET** /rostering/orgs/{id}/sections | List Sections that belong to an Org |
| [**listStudents()**](RosteringApi.md#listStudents) | **GET** /rostering/students | List all Student-type Persons |
| [**listStudentsForOrg()**](RosteringApi.md#listStudentsForOrg) | **GET** /rostering/orgs/{id}/students | List Students that are members of an Org |
| [**listTeachers()**](RosteringApi.md#listTeachers) | **GET** /rostering/teachers | List all Teacher-type Persons |
| [**listTeachersForOrg()**](RosteringApi.md#listTeachersForOrg) | **GET** /rostering/orgs/{id}/teachers | List Teachers that are members of an Org |
| [**listTerms()**](RosteringApi.md#listTerms) | **GET** /rostering/terms | List all Terms |
| [**listTermsForOrg()**](RosteringApi.md#listTermsForOrg) | **GET** /rostering/orgs/{id}/terms | List Terms that belong to an Org |


## `findCourse()`

```php
findCourse($id): \Kimono\Model\Course
```

Find a Course by $sys.id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the Course to find

try {
    $result = $apiInstance->findCourse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->findCourse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the Course to find | |

### Return type

[**\Kimono\Model\Course**](../Model/Course.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findLEA()`

```php
findLEA($id): \Kimono\Model\Org
```

Find an LEA-type Org by $sys.id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the LEA

try {
    $result = $apiInstance->findLEA($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->findLEA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the LEA | |

### Return type

[**\Kimono\Model\Org**](../Model/Org.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findOrg()`

```php
findOrg($id): \Kimono\Model\OrgResponse
```

Find an Org by $sys.id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the object

try {
    $result = $apiInstance->findOrg($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->findOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the object | |

### Return type

[**\Kimono\Model\OrgResponse**](../Model/OrgResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findPerson()`

```php
findPerson($id): \Kimono\Model\Person
```

Find a Person by $sys.id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the Person to find

try {
    $result = $apiInstance->findPerson($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->findPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the Person to find | |

### Return type

[**\Kimono\Model\Person**](../Model/Person.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findSection()`

```php
findSection($id): \Kimono\Model\Section
```

Find a Section by $sys.id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the Section to find

try {
    $result = $apiInstance->findSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->findSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the Section to find | |

### Return type

[**\Kimono\Model\Section**](../Model/Section.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findTerm()`

```php
findTerm($id): \Kimono\Model\Term
```

Find a Term by $sys.id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the Term to find

try {
    $result = $apiInstance->findTerm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->findTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the Term to find | |

### Return type

[**\Kimono\Model\Term**](../Model/Term.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCourses()`

```php
listCourses($page, $page_size): \Kimono\Model\CoursesResponse
```

List all Courses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listCourses($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listCourses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\CoursesResponse**](../Model/CoursesResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCoursesForOrg()`

```php
listCoursesForOrg($id, $page, $page_size): \Kimono\Model\CoursesResponse
```

List Courses that belong to an Org

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the Org
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listCoursesForOrg($id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listCoursesForOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the Org | |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\CoursesResponse**](../Model/CoursesResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLEAs()`

```php
listLEAs($page, $page_size): \Kimono\Model\OrgsResponse
```

List all LEA-type Orgs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listLEAs($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listLEAs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\OrgsResponse**](../Model/OrgsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrgs()`

```php
listOrgs($page, $page_size): \Kimono\Model\OrgsResponse
```

List all Orgs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listOrgs($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listOrgs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\OrgsResponse**](../Model/OrgsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPersons()`

```php
listPersons($page, $page_size): \Kimono\Model\PersonsResponse
```

Get all Persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listPersons($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\PersonsResponse**](../Model/PersonsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSchools()`

```php
listSchools($page, $page_size): \Kimono\Model\OrgsResponse
```

List all School-type Orgs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listSchools($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listSchools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\OrgsResponse**](../Model/OrgsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSections()`

```php
listSections($page, $page_size): \Kimono\Model\SectionsResponse
```

List all Sections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listSections($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listSections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSectionsForOrg()`

```php
listSectionsForOrg($id, $page, $page_size): \Kimono\Model\SectionsResponse
```

List Sections that belong to an Org

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the Org
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listSectionsForOrg($id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listSectionsForOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the Org | |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStudents()`

```php
listStudents($page, $page_size): \Kimono\Model\PersonsResponse
```

List all Student-type Persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listStudents($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listStudents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\PersonsResponse**](../Model/PersonsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStudentsForOrg()`

```php
listStudentsForOrg($id, $page, $page_size): \Kimono\Model\PersonsResponse
```

List Students that are members of an Org

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the Org
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listStudentsForOrg($id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listStudentsForOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the Org | |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\PersonsResponse**](../Model/PersonsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTeachers()`

```php
listTeachers($page, $page_size): \Kimono\Model\PersonsResponse
```

List all Teacher-type Persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listTeachers($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listTeachers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\PersonsResponse**](../Model/PersonsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTeachersForOrg()`

```php
listTeachersForOrg($id, $page, $page_size): \Kimono\Model\PersonsResponse
```

List Teachers that are members of an Org

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the Org
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listTeachersForOrg($id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listTeachersForOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the Org | |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\PersonsResponse**](../Model/PersonsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTerms()`

```php
listTerms($page, $page_size): \Kimono\Model\TermsResponse
```

List all Terms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listTerms($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\TermsResponse**](../Model/TermsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTermsForOrg()`

```php
listTermsForOrg($id, $page, $page_size): \Kimono\Model\TermsResponse
```

List Terms that belong to an Org

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\RosteringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | $sys.id of the Org
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listTermsForOrg($id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RosteringApi->listTermsForOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| $sys.id of the Org | |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\TermsResponse**](../Model/TermsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
