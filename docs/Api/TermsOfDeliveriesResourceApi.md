# FortnoxApi\TermsOfDeliveriesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTermsOfDeliveriesResource()**](TermsOfDeliveriesResourceApi.md#createTermsOfDeliveriesResource) | **POST** /3/termsofdeliveries | Create a terms of delivery |
| [**getTermsOfDeliveriesResource()**](TermsOfDeliveriesResourceApi.md#getTermsOfDeliveriesResource) | **GET** /3/termsofdeliveries/{Code} | Retrieve a single terms of delivery |
| [**listTermsOfDeliveriesResource()**](TermsOfDeliveriesResourceApi.md#listTermsOfDeliveriesResource) | **GET** /3/termsofdeliveries | Retrieve a list of terms of deliveries |
| [**updateTermsOfDeliveriesResource()**](TermsOfDeliveriesResourceApi.md#updateTermsOfDeliveriesResource) | **PUT** /3/termsofdeliveries/{Code} | Update a terms of delivery |


## `createTermsOfDeliveriesResource()`

```php
createTermsOfDeliveriesResource($term_of_delivery): \FortnoxApi\Model\TermsOfDeliveryWrap
```

Create a terms of delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\TermsOfDeliveriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$term_of_delivery = new \FortnoxApi\Model\TermsOfDeliveryWrap(); // \FortnoxApi\Model\TermsOfDeliveryWrap | to create

try {
    $result = $apiInstance->createTermsOfDeliveriesResource($term_of_delivery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfDeliveriesResourceApi->createTermsOfDeliveriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **term_of_delivery** | [**\FortnoxApi\Model\TermsOfDeliveryWrap**](../Model/TermsOfDeliveryWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\TermsOfDeliveryWrap**](../Model/TermsOfDeliveryWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTermsOfDeliveriesResource()`

```php
getTermsOfDeliveriesResource($code): \FortnoxApi\Model\TermsOfDeliveryWrap
```

Retrieve a single terms of delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\TermsOfDeliveriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the terms of delivery

try {
    $result = $apiInstance->getTermsOfDeliveriesResource($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfDeliveriesResourceApi->getTermsOfDeliveriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the terms of delivery | |

### Return type

[**\FortnoxApi\Model\TermsOfDeliveryWrap**](../Model/TermsOfDeliveryWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTermsOfDeliveriesResource()`

```php
listTermsOfDeliveriesResource(): \FortnoxApi\Model\TermsOfDeliveryList
```

Retrieve a list of terms of deliveries

The terms of deliveries register can return a list of records or a single record. By specifying a Code in the URL, a single record will be returned. Not specifying a Code will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\TermsOfDeliveriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listTermsOfDeliveriesResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfDeliveriesResourceApi->listTermsOfDeliveriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\TermsOfDeliveryList**](../Model/TermsOfDeliveryList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTermsOfDeliveriesResource()`

```php
updateTermsOfDeliveriesResource($code, $terms_of_delivery): \FortnoxApi\Model\TermsOfDeliveryWrap
```

Update a terms of delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\TermsOfDeliveriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the terms of delivery
$terms_of_delivery = new \FortnoxApi\Model\TermsOfDeliveryWrap(); // \FortnoxApi\Model\TermsOfDeliveryWrap | to update

try {
    $result = $apiInstance->updateTermsOfDeliveriesResource($code, $terms_of_delivery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfDeliveriesResourceApi->updateTermsOfDeliveriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the terms of delivery | |
| **terms_of_delivery** | [**\FortnoxApi\Model\TermsOfDeliveryWrap**](../Model/TermsOfDeliveryWrap.md)| to update | [optional] |

### Return type

[**\FortnoxApi\Model\TermsOfDeliveryWrap**](../Model/TermsOfDeliveryWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
