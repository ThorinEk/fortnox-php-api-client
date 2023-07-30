# FortnoxApi\EmployeesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmployeesResource()**](EmployeesResourceApi.md#createEmployeesResource) | **POST** /3/employees/ | Create a new employee |
| [**getEmployeesResource()**](EmployeesResourceApi.md#getEmployeesResource) | **GET** /3/employees/{EmployeeId} | Retrieve a specific employee |
| [**listEmployeesResource()**](EmployeesResourceApi.md#listEmployeesResource) | **GET** /3/employees/ | Retrieve a list of employees |
| [**updateEmployeesResource()**](EmployeesResourceApi.md#updateEmployeesResource) | **PUT** /3/employees/{EmployeeId} | Update employee |


## `createEmployeesResource()`

```php
createEmployeesResource($employee): \FortnoxApi\Model\EmployeeWrap
```

Create a new employee

EmployeeId is optional. If not supplied the program will generate a unique id.   Only one of DatedSchedules and ScheduleId may be supplied. If DatedSchedules are supplied  it must have one and only one record where FirstDay = '1970-01-01'.  All FirstDay values must greater or equal to '1970-01-01' and unique.   If DatedWages is supplied neither MonthlySalary nor HourlyPay may be supplied. If  MonthlySalary or HourlyPay are supplied, DatedWages may not be supplied.  If DatedWages are supplied it must have one and only one record where FirstDay = '1970-01-01'.  All FirstDay values must greater or equal to '1970-01-01' and unique.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\EmployeesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee = new \FortnoxApi\Model\EmployeeWrap(); // \FortnoxApi\Model\EmployeeWrap | employee to create

try {
    $result = $apiInstance->createEmployeesResource($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesResourceApi->createEmployeesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | [**\FortnoxApi\Model\EmployeeWrap**](../Model/EmployeeWrap.md)| employee to create | [optional] |

### Return type

[**\FortnoxApi\Model\EmployeeWrap**](../Model/EmployeeWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmployeesResource()`

```php
getEmployeesResource($employee_id): \FortnoxApi\Model\EmployeeWrap
```

Retrieve a specific employee

ScheduleId, MonthlySalary and HourlyPay reflect current values, all  ScheduleIds are returned in DatedSchedules and all MonthlySalary and  HourlyPay pairs are returned in DatedWages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\EmployeesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee_id = 'employee_id_example'; // string | identifies the employee

try {
    $result = $apiInstance->getEmployeesResource($employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesResourceApi->getEmployeesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| identifies the employee | |

### Return type

[**\FortnoxApi\Model\EmployeeWrap**](../Model/EmployeeWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmployeesResource()`

```php
listEmployeesResource(): \FortnoxApi\Model\EmployeeListItemWrap
```

Retrieve a list of employees

ScheduleId, MonthlySalary and HourlyPay reflect current values, all  ScheduleIds are returned in DatedSchedules and all MonthlySalary and  HourlyPay pairs are returned in DatedWages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\EmployeesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listEmployeesResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesResourceApi->listEmployeesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\EmployeeListItemWrap**](../Model/EmployeeListItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployeesResource()`

```php
updateEmployeesResource($employee_id, $employee): \FortnoxApi\Model\EmployeeWrap
```

Update employee

Only one of DatedSchedules and ScheduleId may be supplied. If DatedSchedules are supplied  it must have one and only one record where FirstDay = '1970-01-01'.  All FirstDay values must greater or equal to '1970-01-01' and unique.   If DatedWages is supplied neither MonthlySalary nor HourlyPay may be supplied. If  MonthlySalary or HourlyPay are supplied, DatedWages may not be supplied.  If DatedWages are supplied it must have one and only one record where FirstDay = '1970-01-01'.  All FirstDay values must greater or equal to '1970-01-01' and unique.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\EmployeesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee_id = 'employee_id_example'; // string | identifies the employee
$employee = new \FortnoxApi\Model\EmployeeWrap(); // \FortnoxApi\Model\EmployeeWrap | employee to update

try {
    $result = $apiInstance->updateEmployeesResource($employee_id, $employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesResourceApi->updateEmployeesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| identifies the employee | |
| **employee** | [**\FortnoxApi\Model\EmployeeWrap**](../Model/EmployeeWrap.md)| employee to update | [optional] |

### Return type

[**\FortnoxApi\Model\EmployeeWrap**](../Model/EmployeeWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
