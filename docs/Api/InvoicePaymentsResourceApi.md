# FortnoxApi\InvoicePaymentsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookkeep()**](InvoicePaymentsResourceApi.md#bookkeep) | **PUT** /3/invoicepayments/{Number}/bookkeep | Bookkeep an invoice payment |
| [**createInvoicePaymentsResource()**](InvoicePaymentsResourceApi.md#createInvoicePaymentsResource) | **POST** /3/invoicepayments/ | Create an invoice payment |
| [**getInvoicePaymentsResource()**](InvoicePaymentsResourceApi.md#getInvoicePaymentsResource) | **GET** /3/invoicepayments/{Number} | Retrieve a single invoice payment |
| [**listInvoicePaymentsResource()**](InvoicePaymentsResourceApi.md#listInvoicePaymentsResource) | **GET** /3/invoicepayments/ | Retrieve a list of invoice payments |
| [**removeInvoicePaymentsResource()**](InvoicePaymentsResourceApi.md#removeInvoicePaymentsResource) | **DELETE** /3/invoicepayments/{Number} | Remove an invoice payment |
| [**updateInvoicePaymentsResource()**](InvoicePaymentsResourceApi.md#updateInvoicePaymentsResource) | **PUT** /3/invoicepayments/{Number} | Update an invoice payment |


## `bookkeep()`

```php
bookkeep($number, $invoice_payment): \FortnoxApi\Model\InvoicePaymentWrap
```

Bookkeep an invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 'number_example'; // string | identifies the invoice payment
$invoice_payment = new \FortnoxApi\Model\InvoicePaymentWrap(); // \FortnoxApi\Model\InvoicePaymentWrap | invoice payment to update

try {
    $result = $apiInstance->bookkeep($number, $invoice_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsResourceApi->bookkeep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| identifies the invoice payment | |
| **invoice_payment** | [**\FortnoxApi\Model\InvoicePaymentWrap**](../Model/InvoicePaymentWrap.md)| invoice payment to update | [optional] |

### Return type

[**\FortnoxApi\Model\InvoicePaymentWrap**](../Model/InvoicePaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoicePaymentsResource()`

```php
createInvoicePaymentsResource($invoice_payment): \FortnoxApi\Model\InvoicePaymentWrap
```

Create an invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_payment = new \FortnoxApi\Model\InvoicePaymentWrap(); // \FortnoxApi\Model\InvoicePaymentWrap | invoice payment to create

try {
    $result = $apiInstance->createInvoicePaymentsResource($invoice_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsResourceApi->createInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_payment** | [**\FortnoxApi\Model\InvoicePaymentWrap**](../Model/InvoicePaymentWrap.md)| invoice payment to create | [optional] |

### Return type

[**\FortnoxApi\Model\InvoicePaymentWrap**](../Model/InvoicePaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoicePaymentsResource()`

```php
getInvoicePaymentsResource($number): \FortnoxApi\Model\InvoicePaymentWrap
```

Retrieve a single invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 'number_example'; // string | identifies the invoice payment

try {
    $result = $apiInstance->getInvoicePaymentsResource($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsResourceApi->getInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| identifies the invoice payment | |

### Return type

[**\FortnoxApi\Model\InvoicePaymentWrap**](../Model/InvoicePaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoicePaymentsResource()`

```php
listInvoicePaymentsResource($invoicenumber, $lastmodified, $sortby): \FortnoxApi\Model\InvoicePaymentListItemList
```

Retrieve a list of invoice payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoicenumber = 56; // int | filter by invoice number
$lastmodified = 'lastmodified_example'; // string | filter by last modified
$sortby = 'sortby_example'; // string | field to sort returned list on

try {
    $result = $apiInstance->listInvoicePaymentsResource($invoicenumber, $lastmodified, $sortby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsResourceApi->listInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoicenumber** | **int**| filter by invoice number | [optional] |
| **lastmodified** | **string**| filter by last modified | [optional] |
| **sortby** | **string**| field to sort returned list on | [optional] |

### Return type

[**\FortnoxApi\Model\InvoicePaymentListItemList**](../Model/InvoicePaymentListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeInvoicePaymentsResource()`

```php
removeInvoicePaymentsResource($number)
```

Remove an invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 'number_example'; // string | identifies the invoice payment

try {
    $apiInstance->removeInvoicePaymentsResource($number);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsResourceApi->removeInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| identifies the invoice payment | |

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

## `updateInvoicePaymentsResource()`

```php
updateInvoicePaymentsResource($number, $invoice_payment): \FortnoxApi\Model\InvoicePaymentWrap
```

Update an invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicePaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 'number_example'; // string | identifies the invoice payment
$invoice_payment = new \FortnoxApi\Model\InvoicePaymentWrap(); // \FortnoxApi\Model\InvoicePaymentWrap | invoice payment to update

try {
    $result = $apiInstance->updateInvoicePaymentsResource($number, $invoice_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsResourceApi->updateInvoicePaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| identifies the invoice payment | |
| **invoice_payment** | [**\FortnoxApi\Model\InvoicePaymentWrap**](../Model/InvoicePaymentWrap.md)| invoice payment to update | [optional] |

### Return type

[**\FortnoxApi\Model\InvoicePaymentWrap**](../Model/InvoicePaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
