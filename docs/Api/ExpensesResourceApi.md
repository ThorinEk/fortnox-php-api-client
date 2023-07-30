# FortnoxApi\ExpensesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createExpensesResource()**](ExpensesResourceApi.md#createExpensesResource) | **POST** /3/expenses/ | Create an expense |
| [**getExpensesResource()**](ExpensesResourceApi.md#getExpensesResource) | **GET** /3/expenses/{ExpenseCode} | Retrieve an expense |
| [**listExpensesResource()**](ExpensesResourceApi.md#listExpensesResource) | **GET** /3/expenses/ | Retrieve expenses |


## `createExpensesResource()`

```php
createExpensesResource($expense): \FortnoxApi\Model\ExpenseWrap
```

Create an expense

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ExpensesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expense = new \FortnoxApi\Model\ExpenseWrap(); // \FortnoxApi\Model\ExpenseWrap | expense to create

try {
    $result = $apiInstance->createExpensesResource($expense);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpensesResourceApi->createExpensesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expense** | [**\FortnoxApi\Model\ExpenseWrap**](../Model/ExpenseWrap.md)| expense to create | [optional] |

### Return type

[**\FortnoxApi\Model\ExpenseWrap**](../Model/ExpenseWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpensesResource()`

```php
getExpensesResource($expense_code): \FortnoxApi\Model\ExpenseWrap
```

Retrieve an expense

Retrieves expense information for specified expense.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ExpensesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expense_code = 'expense_code_example'; // string | expenseCode

try {
    $result = $apiInstance->getExpensesResource($expense_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpensesResourceApi->getExpensesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expense_code** | **string**| expenseCode | |

### Return type

[**\FortnoxApi\Model\ExpenseWrap**](../Model/ExpenseWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listExpensesResource()`

```php
listExpensesResource(): \FortnoxApi\Model\ExpenseListItemWrap
```

Retrieve expenses

Retrieve expense codes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ExpensesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listExpensesResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpensesResourceApi->listExpensesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\ExpenseListItemWrap**](../Model/ExpenseListItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
