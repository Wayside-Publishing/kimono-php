# Kimono\GradesApi

All URIs are relative to https://api.us2.kimonocloud.com/v2/interop/data, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listGradingCategories()**](GradesApi.md#listGradingCategories) | **GET** /grades/categories | List all Grading Categories |


## `listGradingCategories()`

```php
listGradingCategories($page, $page_size): \Kimono\Model\GradingCategorysResponse
```

List all Grading Categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\GradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listGradingCategories($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradesApi->listGradingCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\GradingCategorysResponse**](../Model/GradingCategorysResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
