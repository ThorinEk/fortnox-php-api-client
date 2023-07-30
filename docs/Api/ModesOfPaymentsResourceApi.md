# FortnoxApi\ModesOfPaymentsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createModesOfPaymentsResource()**](ModesOfPaymentsResourceApi.md#createModesOfPaymentsResource) | **POST** /3/modesofpayments | Create a mode of payment |
| [**getModesOfPaymentsResource()**](ModesOfPaymentsResourceApi.md#getModesOfPaymentsResource) | **GET** /3/modesofpayments/{Code} | Retrieve a single mode of payment |
| [**listModesOfPaymentsResource()**](ModesOfPaymentsResourceApi.md#listModesOfPaymentsResource) | **GET** /3/modesofpayments | Retrieve a list of modes of payments |
| [**updateModesOfPaymentsResource()**](ModesOfPaymentsResourceApi.md#updateModesOfPaymentsResource) | **PUT** /3/modesofpayments/{Code} | Update a mode of payment |


## `createModesOfPaymentsResource()`

```php
createModesOfPaymentsResource($mode_of_payment): \FortnoxApi\Model\ModeOfPaymentWrap
```

Create a mode of payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ModesOfPaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mode_of_payment = new \FortnoxApi\Model\ModeOfPaymentWrap(); // \FortnoxApi\Model\ModeOfPaymentWrap | to create

try {
    $result = $apiInstance->createModesOfPaymentsResource($mode_of_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModesOfPaymentsResourceApi->createModesOfPaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mode_of_payment** | [**\FortnoxApi\Model\ModeOfPaymentWrap**](../Model/ModeOfPaymentWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\ModeOfPaymentWrap**](../Model/ModeOfPaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModesOfPaymentsResource()`

```php
getModesOfPaymentsResource($code): \FortnoxApi\Model\ModeOfPaymentWrap
```

Retrieve a single mode of payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ModesOfPaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the mode of payment

try {
    $result = $apiInstance->getModesOfPaymentsResource($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModesOfPaymentsResourceApi->getModesOfPaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the mode of payment | |

### Return type

[**\FortnoxApi\Model\ModeOfPaymentWrap**](../Model/ModeOfPaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listModesOfPaymentsResource()`

```php
listModesOfPaymentsResource(): \FortnoxApi\Model\ModeOfPaymentList
```

Retrieve a list of modes of payments

The modes of payments register can return a list of records or a single record. By specifying a Code in the URL, a single record will be returned. Not specifying a Code will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ModesOfPaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listModesOfPaymentsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModesOfPaymentsResourceApi->listModesOfPaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\ModeOfPaymentList**](../Model/ModeOfPaymentList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateModesOfPaymentsResource()`

```php
updateModesOfPaymentsResource($code, $unit): \FortnoxApi\Model\ModeOfPaymentWrap
```

Update a mode of payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ModesOfPaymentsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the mode of payment
$unit = new \FortnoxApi\Model\ModeOfPaymentWrap(); // \FortnoxApi\Model\ModeOfPaymentWrap | mode of payment to update

try {
    $result = $apiInstance->updateModesOfPaymentsResource($code, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModesOfPaymentsResourceApi->updateModesOfPaymentsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the mode of payment | |
| **unit** | [**\FortnoxApi\Model\ModeOfPaymentWrap**](../Model/ModeOfPaymentWrap.md)| mode of payment to update | [optional] |

### Return type

[**\FortnoxApi\Model\ModeOfPaymentWrap**](../Model/ModeOfPaymentWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
