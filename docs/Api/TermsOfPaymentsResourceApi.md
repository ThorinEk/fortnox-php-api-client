# OpenAPI\Client\TermsOfPaymentsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTermsOfPaymentsResource()**](TermsOfPaymentsResourceApi.md#createTermsOfPaymentsResource) | **POST** /3/termsofpayments | Create a term of payment |
| [**getTermsOfPaymentsResource()**](TermsOfPaymentsResourceApi.md#getTermsOfPaymentsResource) | **GET** /3/termsofpayments/{Code} | Retrieve a single terms of payment |
| [**listTermsOfPaymentsResource()**](TermsOfPaymentsResourceApi.md#listTermsOfPaymentsResource) | **GET** /3/termsofpayments | Retrieve a list of all terms of payments |
| [**removeTermsOfPaymentsResource()**](TermsOfPaymentsResourceApi.md#removeTermsOfPaymentsResource) | **DELETE** /3/termsofpayments/{Code} | Remove a term of payment |
| [**updateTermsOfPaymentsResource()**](TermsOfPaymentsResourceApi.md#updateTermsOfPaymentsResource) | **PUT** /3/termsofpayments/{Code} | Update a term of payment |


## `createTermsOfPaymentsResource()`

```php
createTermsOfPaymentsResource($terms_of_payment): \OpenAPI\Client\Model\TermsOfPaymentWrap
```

Create a term of payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermsOfPaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$terms_of_payment = new \OpenAPI\Client\Model\TermsOfPaymentWrap(); // \OpenAPI\Client\Model\TermsOfPaymentWrap | to create

try {
    $result = $apiInstance->createTermsOfPaymentsResource($terms_of_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfPaymentsResourceApi->createTermsOfPaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **terms_of_payment** | [**\OpenAPI\Client\Model\TermsOfPaymentWrap**](../Model/TermsOfPaymentWrap.md)| to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\TermsOfPaymentWrap**](../Model/TermsOfPaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTermsOfPaymentsResource()`

```php
getTermsOfPaymentsResource($code): \OpenAPI\Client\Model\TermsOfPaymentWrap
```

Retrieve a single terms of payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermsOfPaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the terms of payment

try {
    $result = $apiInstance->getTermsOfPaymentsResource($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfPaymentsResourceApi->getTermsOfPaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the terms of payment | |

### Return type

[**\OpenAPI\Client\Model\TermsOfPaymentWrap**](../Model/TermsOfPaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTermsOfPaymentsResource()`

```php
listTermsOfPaymentsResource(): \OpenAPI\Client\Model\TermsOfPaymentList
```

Retrieve a list of all terms of payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermsOfPaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listTermsOfPaymentsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfPaymentsResourceApi->listTermsOfPaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TermsOfPaymentList**](../Model/TermsOfPaymentList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTermsOfPaymentsResource()`

```php
removeTermsOfPaymentsResource($code)
```

Remove a term of payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermsOfPaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the terms of payment

try {
    $apiInstance->removeTermsOfPaymentsResource($code);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfPaymentsResourceApi->removeTermsOfPaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the terms of payment | |

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

## `updateTermsOfPaymentsResource()`

```php
updateTermsOfPaymentsResource($code, $term_of_payment): \OpenAPI\Client\Model\TermsOfPaymentWrap
```

Update a term of payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermsOfPaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the term of payment
$term_of_payment = new \OpenAPI\Client\Model\TermsOfPaymentWrap(); // \OpenAPI\Client\Model\TermsOfPaymentWrap | term of payment to update

try {
    $result = $apiInstance->updateTermsOfPaymentsResource($code, $term_of_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfPaymentsResourceApi->updateTermsOfPaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the term of payment | |
| **term_of_payment** | [**\OpenAPI\Client\Model\TermsOfPaymentWrap**](../Model/TermsOfPaymentWrap.md)| term of payment to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\TermsOfPaymentWrap**](../Model/TermsOfPaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
