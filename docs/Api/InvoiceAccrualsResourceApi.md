# FortnoxApi\InvoiceAccrualsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvoiceAccrualsResource()**](InvoiceAccrualsResourceApi.md#createInvoiceAccrualsResource) | **POST** /3/invoiceaccruals/ | Create an invoice accrual |
| [**getInvoiceAccrualsResource()**](InvoiceAccrualsResourceApi.md#getInvoiceAccrualsResource) | **GET** /3/invoiceaccruals/{InvoiceNumber} | Retrieve a single invoice accrual |
| [**listInvoiceAccrualsResource()**](InvoiceAccrualsResourceApi.md#listInvoiceAccrualsResource) | **GET** /3/invoiceaccruals/ | Retrieve a list of invoice accruals |
| [**removeInvoiceAccrualsResource()**](InvoiceAccrualsResourceApi.md#removeInvoiceAccrualsResource) | **DELETE** /3/invoiceaccruals/{InvoiceNumber} | Remove an invoice accrual |
| [**updateInvoiceAccrualsResource()**](InvoiceAccrualsResourceApi.md#updateInvoiceAccrualsResource) | **PUT** /3/invoiceaccruals/{InvoiceNumber} | Update an invoice accrual |


## `createInvoiceAccrualsResource()`

```php
createInvoiceAccrualsResource($invoice_accrual): \FortnoxApi\Model\InvoiceAccrualWrap
```

Create an invoice accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoiceAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_accrual = new \FortnoxApi\Model\InvoiceAccrualWrap(); // \FortnoxApi\Model\InvoiceAccrualWrap | invoice accrual to create

try {
    $result = $apiInstance->createInvoiceAccrualsResource($invoice_accrual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceAccrualsResourceApi->createInvoiceAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_accrual** | [**\FortnoxApi\Model\InvoiceAccrualWrap**](../Model/InvoiceAccrualWrap.md)| invoice accrual to create | [optional] |

### Return type

[**\FortnoxApi\Model\InvoiceAccrualWrap**](../Model/InvoiceAccrualWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceAccrualsResource()`

```php
getInvoiceAccrualsResource($invoice_number): \FortnoxApi\Model\InvoiceAccrualWrap
```

Retrieve a single invoice accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoiceAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_number = 56; // int | identifies the invoice accrual

try {
    $result = $apiInstance->getInvoiceAccrualsResource($invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceAccrualsResourceApi->getInvoiceAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_number** | **int**| identifies the invoice accrual | |

### Return type

[**\FortnoxApi\Model\InvoiceAccrualWrap**](../Model/InvoiceAccrualWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoiceAccrualsResource()`

```php
listInvoiceAccrualsResource(): \FortnoxApi\Model\InvoiceAccrualListItemList
```

Retrieve a list of invoice accruals

The invoice accruals register can return a list of records or a single record. By specifying a InvoiceNumber in the URL, a single record will be returned. Not specifying a InvoiceNumber will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoiceAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listInvoiceAccrualsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceAccrualsResourceApi->listInvoiceAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\InvoiceAccrualListItemList**](../Model/InvoiceAccrualListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeInvoiceAccrualsResource()`

```php
removeInvoiceAccrualsResource($invoice_number)
```

Remove an invoice accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoiceAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_number = 56; // int | identifies the invoice accrual

try {
    $apiInstance->removeInvoiceAccrualsResource($invoice_number);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceAccrualsResourceApi->removeInvoiceAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_number** | **int**| identifies the invoice accrual | |

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

## `updateInvoiceAccrualsResource()`

```php
updateInvoiceAccrualsResource($invoice_number, $invoice_accrual): \FortnoxApi\Model\InvoiceAccrualWrap
```

Update an invoice accrual

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoiceAccrualsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_number = 56; // int | identifies the invoice accrual
$invoice_accrual = new \FortnoxApi\Model\InvoiceAccrualWrap(); // \FortnoxApi\Model\InvoiceAccrualWrap | invoice accrual to update

try {
    $result = $apiInstance->updateInvoiceAccrualsResource($invoice_number, $invoice_accrual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceAccrualsResourceApi->updateInvoiceAccrualsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_number** | **int**| identifies the invoice accrual | |
| **invoice_accrual** | [**\FortnoxApi\Model\InvoiceAccrualWrap**](../Model/InvoiceAccrualWrap.md)| invoice accrual to update | [optional] |

### Return type

[**\FortnoxApi\Model\InvoiceAccrualWrap**](../Model/InvoiceAccrualWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
