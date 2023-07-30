# FortnoxApi\CurrenciesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCurrenciesResource()**](CurrenciesResourceApi.md#createCurrenciesResource) | **POST** /3/currencies | Create a currency |
| [**getCurrenciesResource()**](CurrenciesResourceApi.md#getCurrenciesResource) | **GET** /3/currencies/{Code} | Retrieve a single currency |
| [**listCurrenciesResource()**](CurrenciesResourceApi.md#listCurrenciesResource) | **GET** /3/currencies | Retrieve a list of currencies |
| [**removeCurrenciesResource()**](CurrenciesResourceApi.md#removeCurrenciesResource) | **DELETE** /3/currencies/{Code} | Remove a currency |
| [**updateCurrenciesResource()**](CurrenciesResourceApi.md#updateCurrenciesResource) | **PUT** /3/currencies/{Code} | Update a currency |


## `createCurrenciesResource()`

```php
createCurrenciesResource($currency): \FortnoxApi\Model\CurrencyWrap
```

Create a currency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CurrenciesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = new \FortnoxApi\Model\CurrencyWrap(); // \FortnoxApi\Model\CurrencyWrap | currency to create

try {
    $result = $apiInstance->createCurrenciesResource($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesResourceApi->createCurrenciesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | [**\FortnoxApi\Model\CurrencyWrap**](../Model/CurrencyWrap.md)| currency to create | [optional] |

### Return type

[**\FortnoxApi\Model\CurrencyWrap**](../Model/CurrencyWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrenciesResource()`

```php
getCurrenciesResource($code): \FortnoxApi\Model\CurrencyWrap
```

Retrieve a single currency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CurrenciesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies currency

try {
    $result = $apiInstance->getCurrenciesResource($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesResourceApi->getCurrenciesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies currency | |

### Return type

[**\FortnoxApi\Model\CurrencyWrap**](../Model/CurrencyWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCurrenciesResource()`

```php
listCurrenciesResource(): \FortnoxApi\Model\CurrencyList
```

Retrieve a list of currencies

The currency register can return a list of records or a single record. By specifying a Code in the URL, a single record will be returned. Not specifying a Code will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CurrenciesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listCurrenciesResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesResourceApi->listCurrenciesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\CurrencyList**](../Model/CurrencyList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCurrenciesResource()`

```php
removeCurrenciesResource($code)
```

Remove a currency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CurrenciesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the currency

try {
    $apiInstance->removeCurrenciesResource($code);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesResourceApi->removeCurrenciesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the currency | |

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

## `updateCurrenciesResource()`

```php
updateCurrenciesResource($code, $currency): \FortnoxApi\Model\CurrencyWrap
```

Update a currency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CurrenciesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the currency
$currency = new \FortnoxApi\Model\CurrencyWrap(); // \FortnoxApi\Model\CurrencyWrap | to update

try {
    $result = $apiInstance->updateCurrenciesResource($code, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesResourceApi->updateCurrenciesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the currency | |
| **currency** | [**\FortnoxApi\Model\CurrencyWrap**](../Model/CurrencyWrap.md)| to update | [optional] |

### Return type

[**\FortnoxApi\Model\CurrencyWrap**](../Model/CurrencyWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
