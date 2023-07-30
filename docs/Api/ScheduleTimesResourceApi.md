# FortnoxApi\ScheduleTimesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getScheduleTimesResource()**](ScheduleTimesResourceApi.md#getScheduleTimesResource) | **GET** /3/scheduletimes/{EmployeeId}/{Date} | Retrieve a specific schedule time |
| [**reset()**](ScheduleTimesResourceApi.md#reset) | **PUT** /3/scheduletimes/{EmployeeId}/{Date}/resetday | Reset schedule time |
| [**updateScheduleTimesResource()**](ScheduleTimesResourceApi.md#updateScheduleTimesResource) | **PUT** /3/scheduletimes/{EmployeeId}/{Date} | Update a schedule time |


## `getScheduleTimesResource()`

```php
getScheduleTimesResource($employee_id, $date): \FortnoxApi\Model\ScheduleTimeWrap
```

Retrieve a specific schedule time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ScheduleTimesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee_id = 'employee_id_example'; // string | identifies the employee
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | identifies the date

try {
    $result = $apiInstance->getScheduleTimesResource($employee_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleTimesResourceApi->getScheduleTimesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| identifies the employee | |
| **date** | **\DateTime**| identifies the date | |

### Return type

[**\FortnoxApi\Model\ScheduleTimeWrap**](../Model/ScheduleTimeWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reset()`

```php
reset($employee_id, $date): \FortnoxApi\Model\ScheduleTimeWrap
```

Reset schedule time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ScheduleTimesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee_id = 'employee_id_example'; // string | identifies the employee
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | identifies the date

try {
    $result = $apiInstance->reset($employee_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleTimesResourceApi->reset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| identifies the employee | |
| **date** | **\DateTime**| identifies the date | |

### Return type

[**\FortnoxApi\Model\ScheduleTimeWrap**](../Model/ScheduleTimeWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScheduleTimesResource()`

```php
updateScheduleTimesResource($employee_id, $date, $schedule_time): \FortnoxApi\Model\ScheduleTimeWrap
```

Update a schedule time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ScheduleTimesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee_id = 'employee_id_example'; // string | identifies the employee
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | identifies the date
$schedule_time = new \FortnoxApi\Model\ScheduleTimeWrap(); // \FortnoxApi\Model\ScheduleTimeWrap | to update

try {
    $result = $apiInstance->updateScheduleTimesResource($employee_id, $date, $schedule_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleTimesResourceApi->updateScheduleTimesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| identifies the employee | |
| **date** | **\DateTime**| identifies the date | |
| **schedule_time** | [**\FortnoxApi\Model\ScheduleTimeWrap**](../Model/ScheduleTimeWrap.md)| to update | [optional] |

### Return type

[**\FortnoxApi\Model\ScheduleTimeWrap**](../Model/ScheduleTimeWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
