# OpenAPI\Client\ContractAccrualsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContractAccrualsResource()**](ContractAccrualsResourceApi.md#createContractAccrualsResource) | **POST** /3/contractaccruals/ | Create a contract accrual |
| [**getContractAccrualsResource()**](ContractAccrualsResourceApi.md#getContractAccrualsResource) | **GET** /3/contractaccruals/{DocumentNumber} | Retrieve a single contract accrual |
| [**listContractAccrualsResource()**](ContractAccrualsResourceApi.md#listContractAccrualsResource) | **GET** /3/contractaccruals/ | Retrieve a list of contract accruals |
| [**removeContractAccrualsResource()**](ContractAccrualsResourceApi.md#removeContractAccrualsResource) | **DELETE** /3/contractaccruals/{DocumentNumber} | Remove a contract accrual |
| [**updateContractAccrualsResource()**](ContractAccrualsResourceApi.md#updateContractAccrualsResource) | **PUT** /3/contractaccruals/{DocumentNumber} | Update a contract accrual |


## `createContractAccrualsResource()`

```php
createContractAccrualsResource($contract_accrual): \OpenAPI\Client\Model\ContractAccrualWrap
```

Create a contract accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_accrual = new \OpenAPI\Client\Model\ContractAccrualWrap(); // \OpenAPI\Client\Model\ContractAccrualWrap | contract accrual to create

try {
    $result = $apiInstance->createContractAccrualsResource($contract_accrual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractAccrualsResourceApi->createContractAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_accrual** | [**\OpenAPI\Client\Model\ContractAccrualWrap**](../Model/ContractAccrualWrap.md)| contract accrual to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContractAccrualWrap**](../Model/ContractAccrualWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContractAccrualsResource()`

```php
getContractAccrualsResource($document_number): \OpenAPI\Client\Model\ContractAccrualWrap
```

Retrieve a single contract accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 56; // int | identifies the contract accrual

try {
    $result = $apiInstance->getContractAccrualsResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractAccrualsResourceApi->getContractAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **int**| identifies the contract accrual | |

### Return type

[**\OpenAPI\Client\Model\ContractAccrualWrap**](../Model/ContractAccrualWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContractAccrualsResource()`

```php
listContractAccrualsResource(): \OpenAPI\Client\Model\ContractAccrualListItemList
```

Retrieve a list of contract accruals

The contract accruals register can return a list of records or a single record. By specifying a DocumentNumber in the URL, a single record will be returned. Not specifying a DocumentNumber will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listContractAccrualsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractAccrualsResourceApi->listContractAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ContractAccrualListItemList**](../Model/ContractAccrualListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeContractAccrualsResource()`

```php
removeContractAccrualsResource($document_number)
```

Remove a contract accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 56; // int | identifies the contract accrual

try {
    $apiInstance->removeContractAccrualsResource($document_number);
} catch (Exception $e) {
    echo 'Exception when calling ContractAccrualsResourceApi->removeContractAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **int**| identifies the contract accrual | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContractAccrualsResource()`

```php
updateContractAccrualsResource($document_number, $contract_accrual): \OpenAPI\Client\Model\ContractAccrualWrap
```

Update a contract accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 56; // int | identifies the contract accrual
$contract_accrual = new \OpenAPI\Client\Model\ContractAccrualWrap(); // \OpenAPI\Client\Model\ContractAccrualWrap | contract accrual to update

try {
    $result = $apiInstance->updateContractAccrualsResource($document_number, $contract_accrual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractAccrualsResourceApi->updateContractAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **int**| identifies the contract accrual | |
| **contract_accrual** | [**\OpenAPI\Client\Model\ContractAccrualWrap**](../Model/ContractAccrualWrap.md)| contract accrual to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContractAccrualWrap**](../Model/ContractAccrualWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
