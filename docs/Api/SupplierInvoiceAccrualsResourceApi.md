# FortnoxApi\SupplierInvoiceAccrualsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupplierInvoiceAccrualsResource()**](SupplierInvoiceAccrualsResourceApi.md#createSupplierInvoiceAccrualsResource) | **POST** /3/supplierinvoiceaccruals/ | Create a supplier invoice accrual |
| [**getSupplierInvoiceAccrualsResource()**](SupplierInvoiceAccrualsResourceApi.md#getSupplierInvoiceAccrualsResource) | **GET** /3/supplierinvoiceaccruals/{SupplierInvoiceNumber} | Retrieve a single supplier invoice accrual |
| [**listSupplierInvoiceAccrualsResource()**](SupplierInvoiceAccrualsResourceApi.md#listSupplierInvoiceAccrualsResource) | **GET** /3/supplierinvoiceaccruals/ | Retrieve a list of supplier invoice accruals |
| [**removeSupplierInvoiceAccrualsResource()**](SupplierInvoiceAccrualsResourceApi.md#removeSupplierInvoiceAccrualsResource) | **DELETE** /3/supplierinvoiceaccruals/{SupplierInvoiceNumber} | Remove a supplier invoice accrual |
| [**updateSupplierInvoiceAccrualsResource()**](SupplierInvoiceAccrualsResourceApi.md#updateSupplierInvoiceAccrualsResource) | **PUT** /3/supplierinvoiceaccruals/{SupplierInvoiceNumber} | Update a supplier invoice accrual |


## `createSupplierInvoiceAccrualsResource()`

```php
createSupplierInvoiceAccrualsResource($supplier_invoice_accrual): \FortnoxApi\Model\SupplierInvoiceAccrualWrap
```

Create a supplier invoice accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SupplierInvoiceAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_accrual = new \FortnoxApi\Model\SupplierInvoiceAccrualWrap(); // \FortnoxApi\Model\SupplierInvoiceAccrualWrap | to create

try {
    $result = $apiInstance->createSupplierInvoiceAccrualsResource($supplier_invoice_accrual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceAccrualsResourceApi->createSupplierInvoiceAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_invoice_accrual** | [**\FortnoxApi\Model\SupplierInvoiceAccrualWrap**](../Model/SupplierInvoiceAccrualWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\SupplierInvoiceAccrualWrap**](../Model/SupplierInvoiceAccrualWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierInvoiceAccrualsResource()`

```php
getSupplierInvoiceAccrualsResource($supplier_invoice_number): \FortnoxApi\Model\SupplierInvoiceAccrualWrap
```

Retrieve a single supplier invoice accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SupplierInvoiceAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_number = 56; // int | identifies the supplier invoice accrual

try {
    $result = $apiInstance->getSupplierInvoiceAccrualsResource($supplier_invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceAccrualsResourceApi->getSupplierInvoiceAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_invoice_number** | **int**| identifies the supplier invoice accrual | |

### Return type

[**\FortnoxApi\Model\SupplierInvoiceAccrualWrap**](../Model/SupplierInvoiceAccrualWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSupplierInvoiceAccrualsResource()`

```php
listSupplierInvoiceAccrualsResource(): \FortnoxApi\Model\SupplierInvoiceAccrualListItemList
```

Retrieve a list of supplier invoice accruals

The supplier invoice accruals register can return a list of records or a single record. By specifying a SupplierInvoiceNumber in the URL, a single record will be returned. Not specifying a SupplierInvoiceNumber will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SupplierInvoiceAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listSupplierInvoiceAccrualsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceAccrualsResourceApi->listSupplierInvoiceAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\SupplierInvoiceAccrualListItemList**](../Model/SupplierInvoiceAccrualListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeSupplierInvoiceAccrualsResource()`

```php
removeSupplierInvoiceAccrualsResource($supplier_invoice_number)
```

Remove a supplier invoice accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SupplierInvoiceAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_number = 56; // int | identifies the supplier invoice accrual

try {
    $apiInstance->removeSupplierInvoiceAccrualsResource($supplier_invoice_number);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceAccrualsResourceApi->removeSupplierInvoiceAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_invoice_number** | **int**| identifies the supplier invoice accrual | |

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

## `updateSupplierInvoiceAccrualsResource()`

```php
updateSupplierInvoiceAccrualsResource($supplier_invoice_number, $supplier_invoice_accrual): \FortnoxApi\Model\SupplierInvoiceAccrualWrap
```

Update a supplier invoice accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SupplierInvoiceAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_number = 56; // int | identifies the supplier invoice accrual
$supplier_invoice_accrual = new \FortnoxApi\Model\SupplierInvoiceAccrualWrap(); // \FortnoxApi\Model\SupplierInvoiceAccrualWrap | to update

try {
    $result = $apiInstance->updateSupplierInvoiceAccrualsResource($supplier_invoice_number, $supplier_invoice_accrual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceAccrualsResourceApi->updateSupplierInvoiceAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_invoice_number** | **int**| identifies the supplier invoice accrual | |
| **supplier_invoice_accrual** | [**\FortnoxApi\Model\SupplierInvoiceAccrualWrap**](../Model/SupplierInvoiceAccrualWrap.md)| to update | [optional] |

### Return type

[**\FortnoxApi\Model\SupplierInvoiceAccrualWrap**](../Model/SupplierInvoiceAccrualWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
