# Kimono\IngestionsApi

All URIs are relative to https://api.us2.kimonocloud.com/v2/interop/data, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelIngestion()**](IngestionsApi.md#cancelIngestion) | **DELETE** /ingestions/{id} | Cancel an Ingestion by id |
| [**createIngestion()**](IngestionsApi.md#createIngestion) | **POST** /ingestions | Create an Ingestion |
| [**findIngestion()**](IngestionsApi.md#findIngestion) | **GET** /ingestions/{id} | Find an Ingestion by id |
| [**listIngestions()**](IngestionsApi.md#listIngestions) | **GET** /ingestions | List Ingestions |


## `cancelIngestion()`

```php
cancelIngestion($id): \Kimono\Model\Ingestion
```

Cancel an Ingestion by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\IngestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of the Ingestion to cancel

try {
    $result = $apiInstance->cancelIngestion($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IngestionsApi->cancelIngestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id of the Ingestion to cancel | |

### Return type

[**\Kimono\Model\Ingestion**](../Model/Ingestion.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIngestion()`

```php
createIngestion($body): \Kimono\Model\IngestionResponse
```

Create an Ingestion

Create an Ingestion. Use the resulting session_token to send Load messages containing raw data to be transformed by the Ingestion Pipeline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\IngestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Kimono\Model\Ingestion(); // \Kimono\Model\Ingestion | Ingestion to create

try {
    $result = $apiInstance->createIngestion($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IngestionsApi->createIngestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Kimono\Model\Ingestion**](../Model/Ingestion.md)| Ingestion to create | |

### Return type

[**\Kimono\Model\IngestionResponse**](../Model/IngestionResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findIngestion()`

```php
findIngestion($id): \Kimono\Model\IngestionResponse
```

Find an Ingestion by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\IngestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of the Ingestion to find

try {
    $result = $apiInstance->findIngestion($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IngestionsApi->findIngestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id of the Ingestion to find | |

### Return type

[**\Kimono\Model\IngestionResponse**](../Model/IngestionResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIngestions()`

```php
listIngestions($page, $page_size): \Kimono\Model\IngestionsResponse
```

List Ingestions

Get a list of Ingestions. By default only incomplete Ingestions from the Ingestion Queue are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\IngestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listIngestions($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IngestionsApi->listIngestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\IngestionsResponse**](../Model/IngestionsResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
