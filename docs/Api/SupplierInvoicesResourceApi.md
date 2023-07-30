# OpenAPI\Client\SupplierInvoicesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approvalbookkeep()**](SupplierInvoicesResourceApi.md#approvalbookkeep) | **PUT** /3/supplierinvoices/{GivenNumber}/approvalbookkeep | Approval of bookkeep of given supplier invoice |
| [**approvalpayment()**](SupplierInvoicesResourceApi.md#approvalpayment) | **PUT** /3/supplierinvoices/{GivenNumber}/approvalpayment | Approval of payment of given supplier invoice |
| [**bookkeepSupplierInvoicesResource()**](SupplierInvoicesResourceApi.md#bookkeepSupplierInvoicesResource) | **PUT** /3/supplierinvoices/{GivenNumber}/bookkeep | Bookkeep given supplier invoice |
| [**cancelSupplierInvoicesResource()**](SupplierInvoicesResourceApi.md#cancelSupplierInvoicesResource) | **PUT** /3/supplierinvoices/{GivenNumber}/cancel | Cancels given supplier invoice |
| [**createSupplierInvoicesResource()**](SupplierInvoicesResourceApi.md#createSupplierInvoicesResource) | **POST** /3/supplierinvoices/ | Create a supplier invoice |
| [**creditSupplierInvoicesResource()**](SupplierInvoicesResourceApi.md#creditSupplierInvoicesResource) | **PUT** /3/supplierinvoices/{GivenNumber}/credit | Credit given supplier invoice |
| [**getSupplierInvoicesResource()**](SupplierInvoicesResourceApi.md#getSupplierInvoicesResource) | **GET** /3/supplierinvoices/{GivenNumber} | Retrieve a single supplier invoice |
| [**listSupplierInvoicesResource()**](SupplierInvoicesResourceApi.md#listSupplierInvoicesResource) | **GET** /3/supplierinvoices/ | Retrieve a list of supplier invoices |
| [**updateSupplierInvoicesResource()**](SupplierInvoicesResourceApi.md#updateSupplierInvoicesResource) | **PUT** /3/supplierinvoices/{GivenNumber} | Update a supplier invoice |


## `approvalbookkeep()`

```php
approvalbookkeep($given_number): \OpenAPI\Client\Model\SupplierInvoiceWrap
```

Approval of bookkeep of given supplier invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 56; // int | identifies the invoice

try {
    $result = $apiInstance->approvalbookkeep($given_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesResourceApi->approvalbookkeep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **int**| identifies the invoice | |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceWrap**](../Model/SupplierInvoiceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approvalpayment()`

```php
approvalpayment($given_number): \OpenAPI\Client\Model\SupplierInvoiceWrap
```

Approval of payment of given supplier invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 56; // int | identifies the invoice

try {
    $result = $apiInstance->approvalpayment($given_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesResourceApi->approvalpayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **int**| identifies the invoice | |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceWrap**](../Model/SupplierInvoiceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookkeepSupplierInvoicesResource()`

```php
bookkeepSupplierInvoicesResource($given_number): \OpenAPI\Client\Model\SupplierInvoiceWrap
```

Bookkeep given supplier invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 56; // int | identifies the invoice

try {
    $result = $apiInstance->bookkeepSupplierInvoicesResource($given_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesResourceApi->bookkeepSupplierInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **int**| identifies the invoice | |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceWrap**](../Model/SupplierInvoiceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelSupplierInvoicesResource()`

```php
cancelSupplierInvoicesResource($given_number): \OpenAPI\Client\Model\SupplierInvoiceWrap
```

Cancels given supplier invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 56; // int | identifies the invoice

try {
    $result = $apiInstance->cancelSupplierInvoicesResource($given_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesResourceApi->cancelSupplierInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **int**| identifies the invoice | |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceWrap**](../Model/SupplierInvoiceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSupplierInvoicesResource()`

```php
createSupplierInvoicesResource($supplier_invoice): \OpenAPI\Client\Model\SupplierInvoiceWrap
```

Create a supplier invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice = new \OpenAPI\Client\Model\SupplierInvoiceWrap(); // \OpenAPI\Client\Model\SupplierInvoiceWrap | supplier invoice to create

try {
    $result = $apiInstance->createSupplierInvoicesResource($supplier_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesResourceApi->createSupplierInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_invoice** | [**\OpenAPI\Client\Model\SupplierInvoiceWrap**](../Model/SupplierInvoiceWrap.md)| supplier invoice to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceWrap**](../Model/SupplierInvoiceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditSupplierInvoicesResource()`

```php
creditSupplierInvoicesResource($given_number): \OpenAPI\Client\Model\SupplierInvoiceWrap
```

Credit given supplier invoice

The created credit invoice will be referenced in the property CreditReference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 56; // int | identifies the invoice

try {
    $result = $apiInstance->creditSupplierInvoicesResource($given_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesResourceApi->creditSupplierInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **int**| identifies the invoice | |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceWrap**](../Model/SupplierInvoiceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierInvoicesResource()`

```php
getSupplierInvoicesResource($given_number): \OpenAPI\Client\Model\SupplierInvoiceWrap
```

Retrieve a single supplier invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 56; // int | identifies the invoice

try {
    $result = $apiInstance->getSupplierInvoicesResource($given_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesResourceApi->getSupplierInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **int**| identifies the invoice | |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceWrap**](../Model/SupplierInvoiceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSupplierInvoicesResource()`

```php
listSupplierInvoicesResource($filter): \OpenAPI\Client\Model\SupplierInvoiceListItemWrap
```

Retrieve a list of supplier invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | possibility to filter supplier invoices

try {
    $result = $apiInstance->listSupplierInvoicesResource($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesResourceApi->listSupplierInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| possibility to filter supplier invoices | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceListItemWrap**](../Model/SupplierInvoiceListItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSupplierInvoicesResource()`

```php
updateSupplierInvoicesResource($given_number, $supplier_invoice): \OpenAPI\Client\Model\SupplierInvoiceWrap
```

Update a supplier invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 56; // int | identifies the invoice
$supplier_invoice = new \OpenAPI\Client\Model\SupplierInvoiceWrap(); // \OpenAPI\Client\Model\SupplierInvoiceWrap | supplier invoice to update

try {
    $result = $apiInstance->updateSupplierInvoicesResource($given_number, $supplier_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesResourceApi->updateSupplierInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **int**| identifies the invoice | |
| **supplier_invoice** | [**\OpenAPI\Client\Model\SupplierInvoiceWrap**](../Model/SupplierInvoiceWrap.md)| supplier invoice to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceWrap**](../Model/SupplierInvoiceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
