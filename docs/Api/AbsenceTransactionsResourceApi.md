# FortnoxApi\AbsenceTransactionsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAbsenceTransactionsResource()**](AbsenceTransactionsResourceApi.md#createAbsenceTransactionsResource) | **POST** /3/absencetransactions | Create a new absence transaction |
| [**getAbsenceTransactionsResource()**](AbsenceTransactionsResourceApi.md#getAbsenceTransactionsResource) | **GET** /3/absencetransactions/{id} | Retrieve a specific absence transaction |
| [**getAbsenceTransactionsResource1()**](AbsenceTransactionsResourceApi.md#getAbsenceTransactionsResource1) | **GET** /3/absencetransactions/{EmployeeId}/{Date}/{Code} | Retrieve absence transactions |
| [**listAbsenceTransactionsResource()**](AbsenceTransactionsResourceApi.md#listAbsenceTransactionsResource) | **GET** /3/absencetransactions | Lists all absence transactions |
| [**remove()**](AbsenceTransactionsResourceApi.md#remove) | **DELETE** /3/absencetransactions/{id} | Delete an absence transaction |
| [**updateAbsenceTransactionsResource()**](AbsenceTransactionsResourceApi.md#updateAbsenceTransactionsResource) | **PUT** /3/absencetransactions/{id} | Update a single absence transaction |


## `createAbsenceTransactionsResource()`

```php
createAbsenceTransactionsResource($absence_transactions_payload): \FortnoxApi\Model\AbsenceTransactionSingleItemWrap
```

Create a new absence transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AbsenceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$absence_transactions_payload = new \FortnoxApi\Model\AbsenceTransactionPayloadWrap(); // \FortnoxApi\Model\AbsenceTransactionPayloadWrap | to create

try {
    $result = $apiInstance->createAbsenceTransactionsResource($absence_transactions_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTransactionsResourceApi->createAbsenceTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **absence_transactions_payload** | [**\FortnoxApi\Model\AbsenceTransactionPayloadWrap**](../Model/AbsenceTransactionPayloadWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\AbsenceTransactionSingleItemWrap**](../Model/AbsenceTransactionSingleItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAbsenceTransactionsResource()`

```php
getAbsenceTransactionsResource($id): \FortnoxApi\Model\AbsenceTransactionSingleItemWrap
```

Retrieve a specific absence transaction

Retrieves a specific transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AbsenceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | identifies the transaction

try {
    $result = $apiInstance->getAbsenceTransactionsResource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTransactionsResourceApi->getAbsenceTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| identifies the transaction | |

### Return type

[**\FortnoxApi\Model\AbsenceTransactionSingleItemWrap**](../Model/AbsenceTransactionSingleItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAbsenceTransactionsResource1()`

```php
getAbsenceTransactionsResource1($employee_id, $date, $code): \FortnoxApi\Model\AbsenceTransactionListItemWrap
```

Retrieve absence transactions

Retrieves a list of absence transactions for an employee on a specific date and cause code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AbsenceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee_id = 'employee_id_example'; // string | identifies the employee
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | of the absence transaction
$code = 'code_example'; // string | status code of the absence transaction

try {
    $result = $apiInstance->getAbsenceTransactionsResource1($employee_id, $date, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTransactionsResourceApi->getAbsenceTransactionsResource1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| identifies the employee | |
| **date** | **\DateTime**| of the absence transaction | |
| **code** | **string**| status code of the absence transaction | |

### Return type

[**\FortnoxApi\Model\AbsenceTransactionListItemWrap**](../Model/AbsenceTransactionListItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAbsenceTransactionsResource()`

```php
listAbsenceTransactionsResource($employeeid, $date): \FortnoxApi\Model\AbsenceTransactionListItemWrap
```

Lists all absence transactions

Supports query-string parameters <strong>employeeid</strong> and <strong>date</strong> for filtering the result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AbsenceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employeeid = 'employeeid_example'; // string | filter by employee id
$date = 'date_example'; // string | filter by date

try {
    $result = $apiInstance->listAbsenceTransactionsResource($employeeid, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTransactionsResourceApi->listAbsenceTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employeeid** | **string**| filter by employee id | [optional] |
| **date** | **string**| filter by date | [optional] |

### Return type

[**\FortnoxApi\Model\AbsenceTransactionListItemWrap**](../Model/AbsenceTransactionListItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remove()`

```php
remove($id): \FortnoxApi\Model\AbsenceTransactionSingleItemWrap
```

Delete an absence transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AbsenceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | identifies the transaction

try {
    $result = $apiInstance->remove($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTransactionsResourceApi->remove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| identifies the transaction | |

### Return type

[**\FortnoxApi\Model\AbsenceTransactionSingleItemWrap**](../Model/AbsenceTransactionSingleItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAbsenceTransactionsResource()`

```php
updateAbsenceTransactionsResource($id, $absence_transactions_payload): \FortnoxApi\Model\AbsenceTransactionSingleItemWrap
```

Update a single absence transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AbsenceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | identifies the transaction
$absence_transactions_payload = new \FortnoxApi\Model\AbsenceTransactionPayloadWrap(); // \FortnoxApi\Model\AbsenceTransactionPayloadWrap | to update

try {
    $result = $apiInstance->updateAbsenceTransactionsResource($id, $absence_transactions_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTransactionsResourceApi->updateAbsenceTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| identifies the transaction | |
| **absence_transactions_payload** | [**\FortnoxApi\Model\AbsenceTransactionPayloadWrap**](../Model/AbsenceTransactionPayloadWrap.md)| to update | [optional] |

### Return type

[**\FortnoxApi\Model\AbsenceTransactionSingleItemWrap**](../Model/AbsenceTransactionSingleItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
