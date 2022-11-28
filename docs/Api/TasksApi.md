# Kimono\TasksApi

All URIs are relative to https://api.us2.kimonocloud.com/v2/interop/data, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acknowledgeTask()**](TasksApi.md#acknowledgeTask) | **PUT** /tasks/{id}/ack | Acknowledge Task |
| [**listTasks()**](TasksApi.md#listTasks) | **GET** /tasks | List Tasks |


## `acknowledgeTask()`

```php
acknowledgeTask($id, $task_ack)
```

Acknowledge Task

Each Task that is returned from `listTasks` must be acknowledged to remove it from the Task Queue. If a Task is not acknowledged in a timely fashion Kimono may consider it to have timed-out and will return it in the next `listTasks` response for an Integration tenant. See [Tasks](doc:interop-data-api-tasks) for details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of the Task to acknowledge
$task_ack = new \Kimono\Model\TaskAck(); // \Kimono\Model\TaskAck | Parameters describing how to acknowledge the Task

try {
    $apiInstance->acknowledgeTask($id, $task_ack);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->acknowledgeTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id of the Task to acknowledge | |
| **task_ack** | [**\Kimono\Model\TaskAck**](../Model/TaskAck.md)| Parameters describing how to acknowledge the Task | [optional] |

### Return type

void (empty response body)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTasks()`

```php
listTasks($page, $page_size): \Kimono\Model\TasksResponse
```

List Tasks

Get the next batch of Tasks for the authenticated actor. The number of Tasks returned is determined by Kimono and may change from time to time. See [Tasks](doc:interop-data-api-tasks) for details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listTasks($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->listTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specify the page number (defaults to 0) | [optional] |
| **page_size** | **int**| Specify the page_size (defaults to the maximum page size) | [optional] |

### Return type

[**\Kimono\Model\TasksResponse**](../Model/TasksResponse.md)

### Authorization

[Actor](../../README.md#Actor)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
