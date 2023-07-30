# OpenAPI\Client\ContractsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContractsResource()**](ContractsResourceApi.md#createContractsResource) | **POST** /3/contracts/ | Create a contract |
| [**createinvoice()**](ContractsResourceApi.md#createinvoice) | **PUT** /3/contracts/{DocumentNumber}/createinvoice | Create invoice from contract |
| [**finish()**](ContractsResourceApi.md#finish) | **PUT** /3/contracts/{DocumentNumber}/finish | Set a contract as finished |
| [**getContractsResource()**](ContractsResourceApi.md#getContractsResource) | **GET** /3/contracts/{DocumentNumber} | Retrieve a single contract |
| [**increaseinvoicecount()**](ContractsResourceApi.md#increaseinvoicecount) | **PUT** /3/contracts/{DocumentNumber}/increaseinvoicecount | Increases the invoice count without creating an invoice |
| [**listContractsResource()**](ContractsResourceApi.md#listContractsResource) | **GET** /3/contracts/ | Retrieve a list of contracts |
| [**updateContractsResource()**](ContractsResourceApi.md#updateContractsResource) | **PUT** /3/contracts/{DocumentNumber} | Update a contract |


## `createContractsResource()`

```php
createContractsResource($contract): \OpenAPI\Client\Model\ContractWrap
```

Create a contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract = new \OpenAPI\Client\Model\ContractWrap(); // \OpenAPI\Client\Model\ContractWrap | contract to create

try {
    $result = $apiInstance->createContractsResource($contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsResourceApi->createContractsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract** | [**\OpenAPI\Client\Model\ContractWrap**](../Model/ContractWrap.md)| contract to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContractWrap**](../Model/ContractWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createinvoice()`

```php
createinvoice($document_number): \OpenAPI\Client\Model\InvoiceWrap
```

Create invoice from contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the contract

try {
    $result = $apiInstance->createinvoice($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsResourceApi->createinvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the contract | |

### Return type

[**\OpenAPI\Client\Model\InvoiceWrap**](../Model/InvoiceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finish()`

```php
finish($document_number): \OpenAPI\Client\Model\ContractWrap
```

Set a contract as finished

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the contract

try {
    $result = $apiInstance->finish($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsResourceApi->finish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the contract | |

### Return type

[**\OpenAPI\Client\Model\ContractWrap**](../Model/ContractWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContractsResource()`

```php
getContractsResource($document_number): \OpenAPI\Client\Model\ContractWrap
```

Retrieve a single contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the contract

try {
    $result = $apiInstance->getContractsResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsResourceApi->getContractsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the contract | |

### Return type

[**\OpenAPI\Client\Model\ContractWrap**](../Model/ContractWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `increaseinvoicecount()`

```php
increaseinvoicecount($document_number): \OpenAPI\Client\Model\ContractWrap
```

Increases the invoice count without creating an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the contract

try {
    $result = $apiInstance->increaseinvoicecount($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsResourceApi->increaseinvoicecount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the contract | |

### Return type

[**\OpenAPI\Client\Model\ContractWrap**](../Model/ContractWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContractsResource()`

```php
listContractsResource($filter): \OpenAPI\Client\Model\ContractListItemList
```

Retrieve a list of contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | possibility to filter contracts

try {
    $result = $apiInstance->listContractsResource($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsResourceApi->listContractsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| possibility to filter contracts | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContractListItemList**](../Model/ContractListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContractsResource()`

```php
updateContractsResource($document_number, $contract): \OpenAPI\Client\Model\ContractWrap
```

Update a contract

Note that there are two approaches for updating the rows on a contract.   If RowId is not specified on any row, the rows will be mapped and updated in the order in which they are set in the array. All rows that should remain on the contract needs to be provided.   If RowId is specified on one or more rows the following goes: Corresponding row with that id will be updated. The rows without RowId will be interpreted as new rows. If a row should not be updated but remain on the contract then specify only RowId like { \"RowId\": 123 }, otherwise it will be removed. Note that new RowIds are generated for all rows every time a contract is updated.   When the InvoiceDiscount value is set on the rows and the Contract, the value set on the Contract takes precedence over the row-level InvoiceDiscount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the contract
$contract = new \OpenAPI\Client\Model\ContractWrap(); // \OpenAPI\Client\Model\ContractWrap | contract to update

try {
    $result = $apiInstance->updateContractsResource($document_number, $contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsResourceApi->updateContractsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the contract | |
| **contract** | [**\OpenAPI\Client\Model\ContractWrap**](../Model/ContractWrap.md)| contract to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContractWrap**](../Model/ContractWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
