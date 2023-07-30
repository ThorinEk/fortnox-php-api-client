# FortnoxApi\SalaryTransactionsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSalaryTransactionsResource()**](SalaryTransactionsResourceApi.md#createSalaryTransactionsResource) | **POST** /3/salarytransactions | Create a new salary transaction for an employee |
| [**deleteSalaryTransactionsResource()**](SalaryTransactionsResourceApi.md#deleteSalaryTransactionsResource) | **DELETE** /3/salarytransactions/{SalaryRow} | Delete a single salary transaction |
| [**getSalaryTransactionsResource()**](SalaryTransactionsResourceApi.md#getSalaryTransactionsResource) | **GET** /3/salarytransactions/{SalaryRow} | Retrieve a single salary transaction |
| [**listSalaryTransactionsResource()**](SalaryTransactionsResourceApi.md#listSalaryTransactionsResource) | **GET** /3/salarytransactions | List all salary transactions for all employees |
| [**updateSalaryTransactionsResource()**](SalaryTransactionsResourceApi.md#updateSalaryTransactionsResource) | **PUT** /3/salarytransactions/{SalaryRow} | Update a salary transaction |


## `createSalaryTransactionsResource()`

```php
createSalaryTransactionsResource($salary_transaction): \FortnoxApi\Model\SalaryTransactionWrap
```

Create a new salary transaction for an employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SalaryTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salary_transaction = new \FortnoxApi\Model\SalaryTransactionWrap(); // \FortnoxApi\Model\SalaryTransactionWrap | to create

try {
    $result = $apiInstance->createSalaryTransactionsResource($salary_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryTransactionsResourceApi->createSalaryTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salary_transaction** | [**\FortnoxApi\Model\SalaryTransactionWrap**](../Model/SalaryTransactionWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\SalaryTransactionWrap**](../Model/SalaryTransactionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSalaryTransactionsResource()`

```php
deleteSalaryTransactionsResource($salary_row): \FortnoxApi\Model\SalaryTransactionWrap
```

Delete a single salary transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SalaryTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salary_row = 56; // int | identifies the salary transaction

try {
    $result = $apiInstance->deleteSalaryTransactionsResource($salary_row);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryTransactionsResourceApi->deleteSalaryTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salary_row** | **int**| identifies the salary transaction | |

### Return type

[**\FortnoxApi\Model\SalaryTransactionWrap**](../Model/SalaryTransactionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalaryTransactionsResource()`

```php
getSalaryTransactionsResource($salary_row): \FortnoxApi\Model\SalaryTransactionWrap
```

Retrieve a single salary transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SalaryTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salary_row = 56; // int | identifies the salary transaction

try {
    $result = $apiInstance->getSalaryTransactionsResource($salary_row);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryTransactionsResourceApi->getSalaryTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salary_row** | **int**| identifies the salary transaction | |

### Return type

[**\FortnoxApi\Model\SalaryTransactionWrap**](../Model/SalaryTransactionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalaryTransactionsResource()`

```php
listSalaryTransactionsResource($employee_id, $date): \FortnoxApi\Model\SalaryTransactionListItemList
```

List all salary transactions for all employees

Supports query-string parameters <b>employeeid</b> and <b>date</b> for filtering the result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SalaryTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee_id = 'employee_id_example'; // string | filter on employeeId
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | filter on date

try {
    $result = $apiInstance->listSalaryTransactionsResource($employee_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryTransactionsResourceApi->listSalaryTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| filter on employeeId | [optional] |
| **date** | **\DateTime**| filter on date | [optional] |

### Return type

[**\FortnoxApi\Model\SalaryTransactionListItemList**](../Model/SalaryTransactionListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSalaryTransactionsResource()`

```php
updateSalaryTransactionsResource($salary_row, $salary_transaction): \FortnoxApi\Model\SalaryTransactionWrap
```

Update a salary transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SalaryTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salary_row = 56; // int | identifies the salary transaction
$salary_transaction = new \FortnoxApi\Model\SalaryTransactionWrap(); // \FortnoxApi\Model\SalaryTransactionWrap | to update

try {
    $result = $apiInstance->updateSalaryTransactionsResource($salary_row, $salary_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryTransactionsResourceApi->updateSalaryTransactionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salary_row** | **int**| identifies the salary transaction | |
| **salary_transaction** | [**\FortnoxApi\Model\SalaryTransactionWrap**](../Model/SalaryTransactionWrap.md)| to update | [optional] |

### Return type

[**\FortnoxApi\Model\SalaryTransactionWrap**](../Model/SalaryTransactionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
