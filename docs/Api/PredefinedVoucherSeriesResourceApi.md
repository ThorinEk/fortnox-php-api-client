# FortnoxApi\PredefinedVoucherSeriesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPredefinedVoucherSeriesResource()**](PredefinedVoucherSeriesResourceApi.md#getPredefinedVoucherSeriesResource) | **GET** /3/predefinedvoucherseries/{Name} | Retrieve a specific predefined voucher series |
| [**listPredefinedVoucherSeriesResource()**](PredefinedVoucherSeriesResourceApi.md#listPredefinedVoucherSeriesResource) | **GET** /3/predefinedvoucherseries/ | Retrieve a list of predefined voucher series |
| [**updatePredefinedVoucherSeriesResource()**](PredefinedVoucherSeriesResourceApi.md#updatePredefinedVoucherSeriesResource) | **PUT** /3/predefinedvoucherseries/{Name} | Update a predefined voucher series |


## `getPredefinedVoucherSeriesResource()`

```php
getPredefinedVoucherSeriesResource($name): \FortnoxApi\Model\PredefinedVoucherSeriesWrap
```

Retrieve a specific predefined voucher series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PredefinedVoucherSeriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | identifies the predefined voucher series

try {
    $result = $apiInstance->getPredefinedVoucherSeriesResource($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedVoucherSeriesResourceApi->getPredefinedVoucherSeriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| identifies the predefined voucher series | |

### Return type

[**\FortnoxApi\Model\PredefinedVoucherSeriesWrap**](../Model/PredefinedVoucherSeriesWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPredefinedVoucherSeriesResource()`

```php
listPredefinedVoucherSeriesResource(): \FortnoxApi\Model\PredefinedVoucherSeriesList
```

Retrieve a list of predefined voucher series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PredefinedVoucherSeriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listPredefinedVoucherSeriesResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedVoucherSeriesResourceApi->listPredefinedVoucherSeriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\PredefinedVoucherSeriesList**](../Model/PredefinedVoucherSeriesList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePredefinedVoucherSeriesResource()`

```php
updatePredefinedVoucherSeriesResource($name, $predefined_voucher_series): \FortnoxApi\Model\PredefinedVoucherSeriesWrap
```

Update a predefined voucher series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PredefinedVoucherSeriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | identifies the predefined voucher series
$predefined_voucher_series = new \FortnoxApi\Model\PredefinedVoucherSeriesWrap(); // \FortnoxApi\Model\PredefinedVoucherSeriesWrap | predefined voucher series to update

try {
    $result = $apiInstance->updatePredefinedVoucherSeriesResource($name, $predefined_voucher_series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedVoucherSeriesResourceApi->updatePredefinedVoucherSeriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| identifies the predefined voucher series | |
| **predefined_voucher_series** | [**\FortnoxApi\Model\PredefinedVoucherSeriesWrap**](../Model/PredefinedVoucherSeriesWrap.md)| predefined voucher series to update | [optional] |

### Return type

[**\FortnoxApi\Model\PredefinedVoucherSeriesWrap**](../Model/PredefinedVoucherSeriesWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
