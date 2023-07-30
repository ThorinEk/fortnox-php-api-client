# FortnoxApi\VoucherSeriesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVoucherSeriesResource()**](VoucherSeriesResourceApi.md#createVoucherSeriesResource) | **POST** /3/voucherseries | Create a voucher series |
| [**getVoucherSeriesResource()**](VoucherSeriesResourceApi.md#getVoucherSeriesResource) | **GET** /3/voucherseries/{Code} | Retrieve a single voucher series |
| [**listVoucherSeriesResource()**](VoucherSeriesResourceApi.md#listVoucherSeriesResource) | **GET** /3/voucherseries | Retrieve a list of voucher series |
| [**updateVoucherSeriesResource()**](VoucherSeriesResourceApi.md#updateVoucherSeriesResource) | **PUT** /3/voucherseries/{Code} | Update a voucher series |


## `createVoucherSeriesResource()`

```php
createVoucherSeriesResource($voucher_series): \FortnoxApi\Model\VoucherSeriesWrap
```

Create a voucher series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\VoucherSeriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_series = new \FortnoxApi\Model\VoucherSeriesWrap(); // \FortnoxApi\Model\VoucherSeriesWrap | to create

try {
    $result = $apiInstance->createVoucherSeriesResource($voucher_series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherSeriesResourceApi->createVoucherSeriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_series** | [**\FortnoxApi\Model\VoucherSeriesWrap**](../Model/VoucherSeriesWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\VoucherSeriesWrap**](../Model/VoucherSeriesWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucherSeriesResource()`

```php
getVoucherSeriesResource($code): \FortnoxApi\Model\VoucherSeriesWrap
```

Retrieve a single voucher series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\VoucherSeriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the voucher series

try {
    $result = $apiInstance->getVoucherSeriesResource($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherSeriesResourceApi->getVoucherSeriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the voucher series | |

### Return type

[**\FortnoxApi\Model\VoucherSeriesWrap**](../Model/VoucherSeriesWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVoucherSeriesResource()`

```php
listVoucherSeriesResource(): \FortnoxApi\Model\VoucherSeriesListItemList
```

Retrieve a list of voucher series

The voucher series register can return a list of records or a single record. By specifying a Code in the URL, a single record will be returned. Not specifying a Code will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\VoucherSeriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listVoucherSeriesResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherSeriesResourceApi->listVoucherSeriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\VoucherSeriesListItemList**](../Model/VoucherSeriesListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVoucherSeriesResource()`

```php
updateVoucherSeriesResource($code, $voucher_series): \FortnoxApi\Model\VoucherSeriesWrap
```

Update a voucher series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\VoucherSeriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the voucher series
$voucher_series = new \FortnoxApi\Model\VoucherSeriesWrap(); // \FortnoxApi\Model\VoucherSeriesWrap | to update

try {
    $result = $apiInstance->updateVoucherSeriesResource($code, $voucher_series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherSeriesResourceApi->updateVoucherSeriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the voucher series | |
| **voucher_series** | [**\FortnoxApi\Model\VoucherSeriesWrap**](../Model/VoucherSeriesWrap.md)| to update | [optional] |

### Return type

[**\FortnoxApi\Model\VoucherSeriesWrap**](../Model/VoucherSeriesWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
