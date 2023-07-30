# FortnoxApi\AttendanceTransactionsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAttendanceTransactionsResource()**](AttendanceTransactionsResourceApi.md#createAttendanceTransactionsResource) | **POST** /3/attendancetransactions | Create a new attendance transaction |
| [**getAttendanceTransactionsResource()**](AttendanceTransactionsResourceApi.md#getAttendanceTransactionsResource) | **GET** /3/attendancetransactions/{id} | Retrieve a specific attendance transaction |
| [**listAttendanceTransactionsResource()**](AttendanceTransactionsResourceApi.md#listAttendanceTransactionsResource) | **GET** /3/attendancetransactions | Lists all attendance transactions |
| [**updateAttendanceTransactionsResource()**](AttendanceTransactionsResourceApi.md#updateAttendanceTransactionsResource) | **PUT** /3/attendancetransactions/{id} | Update a single attendance transaction |


## `createAttendanceTransactionsResource()`

```php
createAttendanceTransactionsResource($attendance_transaction): \FortnoxApi\Model\AttendanceTransactionWrap
```

Create a new attendance transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AttendanceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attendance_transaction = new \FortnoxApi\Model\AttendanceTransactionWrap(); // \FortnoxApi\Model\AttendanceTransactionWrap | attendance transaction to create

try {
    $result = $apiInstance->createAttendanceTransactionsResource($attendance_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceTransactionsResourceApi->createAttendanceTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attendance_transaction** | [**\FortnoxApi\Model\AttendanceTransactionWrap**](../Model/AttendanceTransactionWrap.md)| attendance transaction to create | [optional] |

### Return type

[**\FortnoxApi\Model\AttendanceTransactionWrap**](../Model/AttendanceTransactionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttendanceTransactionsResource()`

```php
getAttendanceTransactionsResource($id): \FortnoxApi\Model\AttendanceTransactionWrap
```

Retrieve a specific attendance transaction

Retrieves a specific transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AttendanceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | identifies the transaction

try {
    $result = $apiInstance->getAttendanceTransactionsResource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceTransactionsResourceApi->getAttendanceTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| identifies the transaction | |

### Return type

[**\FortnoxApi\Model\AttendanceTransactionWrap**](../Model/AttendanceTransactionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAttendanceTransactionsResource()`

```php
listAttendanceTransactionsResource($employeeid, $date): \FortnoxApi\Model\AttendanceTransactionListItemList
```

Lists all attendance transactions

Supports query-string parameters <strong>employeeid</strong> and <strong>date</strong> for filtering the result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AttendanceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employeeid = 'employeeid_example'; // string | filter by employee id
$date = 'date_example'; // string | filter by date

try {
    $result = $apiInstance->listAttendanceTransactionsResource($employeeid, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceTransactionsResourceApi->listAttendanceTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employeeid** | **string**| filter by employee id | [optional] |
| **date** | **string**| filter by date | [optional] |

### Return type

[**\FortnoxApi\Model\AttendanceTransactionListItemList**](../Model/AttendanceTransactionListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAttendanceTransactionsResource()`

```php
updateAttendanceTransactionsResource($id, $attendance_transaction): \FortnoxApi\Model\AttendanceTransactionWrap
```

Update a single attendance transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AttendanceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | identifies the transaction
$attendance_transaction = new \FortnoxApi\Model\AttendanceTransactionWrap(); // \FortnoxApi\Model\AttendanceTransactionWrap | to update

try {
    $result = $apiInstance->updateAttendanceTransactionsResource($id, $attendance_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceTransactionsResourceApi->updateAttendanceTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| identifies the transaction | |
| **attendance_transaction** | [**\FortnoxApi\Model\AttendanceTransactionWrap**](../Model/AttendanceTransactionWrap.md)| to update | [optional] |

### Return type

[**\FortnoxApi\Model\AttendanceTransactionWrap**](../Model/AttendanceTransactionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
