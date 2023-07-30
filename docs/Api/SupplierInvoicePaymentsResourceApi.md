# OpenAPI\Client\SupplierInvoicePaymentsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookkeepSupplierInvoicePaymentsResource()**](SupplierInvoicePaymentsResourceApi.md#bookkeepSupplierInvoicePaymentsResource) | **PUT** /3/supplierinvoicepayments/{Number}/bookkeep | Bookkeep a supplier invoice payment |
| [**createSupplierInvoicePaymentsResource()**](SupplierInvoicePaymentsResourceApi.md#createSupplierInvoicePaymentsResource) | **POST** /3/supplierinvoicepayments/ | Create a supplier invoice payment |
| [**getSupplierInvoicePaymentsResource()**](SupplierInvoicePaymentsResourceApi.md#getSupplierInvoicePaymentsResource) | **GET** /3/supplierinvoicepayments/{Number} | Retrieve a single supplier invoice payment |
| [**listSupplierInvoicePaymentsResource()**](SupplierInvoicePaymentsResourceApi.md#listSupplierInvoicePaymentsResource) | **GET** /3/supplierinvoicepayments/ | Retrieve a list of supplier invoice payments |
| [**removeSupplierInvoicePaymentsResource()**](SupplierInvoicePaymentsResourceApi.md#removeSupplierInvoicePaymentsResource) | **DELETE** /3/supplierinvoicepayments/{Number} | Remove a supplier invoice payment |
| [**updateSupplierInvoicePaymentsResource()**](SupplierInvoicePaymentsResourceApi.md#updateSupplierInvoicePaymentsResource) | **PUT** /3/supplierinvoicepayments/{Number} | Update a supplier invoice payment |


## `bookkeepSupplierInvoicePaymentsResource()`

```php
bookkeepSupplierInvoicePaymentsResource($number): \OpenAPI\Client\Model\SupplierInvoicePaymentWrap
```

Bookkeep a supplier invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 56; // int | identifies the supplier invoice payment

try {
    $result = $apiInstance->bookkeepSupplierInvoicePaymentsResource($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicePaymentsResourceApi->bookkeepSupplierInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| identifies the supplier invoice payment | |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoicePaymentWrap**](../Model/SupplierInvoicePaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSupplierInvoicePaymentsResource()`

```php
createSupplierInvoicePaymentsResource($supplier_invoice_payment): \OpenAPI\Client\Model\SupplierInvoicePaymentWrap
```

Create a supplier invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_payment = new \OpenAPI\Client\Model\SupplierInvoicePaymentWrap(); // \OpenAPI\Client\Model\SupplierInvoicePaymentWrap | to create

try {
    $result = $apiInstance->createSupplierInvoicePaymentsResource($supplier_invoice_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicePaymentsResourceApi->createSupplierInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_invoice_payment** | [**\OpenAPI\Client\Model\SupplierInvoicePaymentWrap**](../Model/SupplierInvoicePaymentWrap.md)| to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoicePaymentWrap**](../Model/SupplierInvoicePaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierInvoicePaymentsResource()`

```php
getSupplierInvoicePaymentsResource($number): \OpenAPI\Client\Model\SupplierInvoicePaymentWrap
```

Retrieve a single supplier invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 56; // int | identifies the supplier invoice payment

try {
    $result = $apiInstance->getSupplierInvoicePaymentsResource($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicePaymentsResourceApi->getSupplierInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| identifies the supplier invoice payment | |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoicePaymentWrap**](../Model/SupplierInvoicePaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSupplierInvoicePaymentsResource()`

```php
listSupplierInvoicePaymentsResource(): \OpenAPI\Client\Model\SupplierInvoicePaymentListItemList
```

Retrieve a list of supplier invoice payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listSupplierInvoicePaymentsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicePaymentsResourceApi->listSupplierInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SupplierInvoicePaymentListItemList**](../Model/SupplierInvoicePaymentListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeSupplierInvoicePaymentsResource()`

```php
removeSupplierInvoicePaymentsResource($number)
```

Remove a supplier invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 56; // int | identifies the supplier invoice payment

try {
    $apiInstance->removeSupplierInvoicePaymentsResource($number);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicePaymentsResourceApi->removeSupplierInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| identifies the supplier invoice payment | |

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

## `updateSupplierInvoicePaymentsResource()`

```php
updateSupplierInvoicePaymentsResource($number, $supplier_invoice_payment): \OpenAPI\Client\Model\SupplierInvoicePaymentWrap
```

Update a supplier invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 56; // int | identifies the supplier invoice payment
$supplier_invoice_payment = new \OpenAPI\Client\Model\SupplierInvoicePaymentWrap(); // \OpenAPI\Client\Model\SupplierInvoicePaymentWrap | to update

try {
    $result = $apiInstance->updateSupplierInvoicePaymentsResource($number, $supplier_invoice_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicePaymentsResourceApi->updateSupplierInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| identifies the supplier invoice payment | |
| **supplier_invoice_payment** | [**\OpenAPI\Client\Model\SupplierInvoicePaymentWrap**](../Model/SupplierInvoicePaymentWrap.md)| to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoicePaymentWrap**](../Model/SupplierInvoicePaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
