# OpenAPI\Client\VouchersResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVouchersResource()**](VouchersResourceApi.md#createVouchersResource) | **POST** /3/vouchers/ | Create a voucher |
| [**getVouchersResource()**](VouchersResourceApi.md#getVouchersResource) | **GET** /3/vouchers/{VoucherSeries}/{VoucherNumber} | Retrieve a specific voucher |
| [**listSeries()**](VouchersResourceApi.md#listSeries) | **GET** /3/vouchers/sublist/{VoucherSeries} | Retrieve a list of vouchers for a specific series |
| [**listVouchersResource()**](VouchersResourceApi.md#listVouchersResource) | **GET** /3/vouchers/ | Retrieve all vouchers |


## `createVouchersResource()`

```php
createVouchersResource($financialyear, $voucher): \OpenAPI\Client\Model\VoucherWrap
```

Create a voucher

The created voucher will be returned if everything succeeded, if there was any problems an error will be returned.  If no query param is used the voucher will be created in the preselected financial year. Go to the financialyears endpoint to read on how to retreive the Financial year id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VouchersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$financialyear = 56; // int | Financial year id, used to determine which financial year the voucher is created in
$voucher = new \OpenAPI\Client\Model\VoucherWrap(); // \OpenAPI\Client\Model\VoucherWrap | voucher to create

try {
    $result = $apiInstance->createVouchersResource($financialyear, $voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersResourceApi->createVouchersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **financialyear** | **int**| Financial year id, used to determine which financial year the voucher is created in | [optional] |
| **voucher** | [**\OpenAPI\Client\Model\VoucherWrap**](../Model/VoucherWrap.md)| voucher to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\VoucherWrap**](../Model/VoucherWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVouchersResource()`

```php
getVouchersResource($voucher_series, $voucher_number, $financialyear): \OpenAPI\Client\Model\VoucherWrap
```

Retrieve a specific voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VouchersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_series = 'voucher_series_example'; // string | identifies the voucher series
$voucher_number = 56; // int | identifies the voucher number
$financialyear = 56; // int | filter on financial year

try {
    $result = $apiInstance->getVouchersResource($voucher_series, $voucher_number, $financialyear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersResourceApi->getVouchersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_series** | **string**| identifies the voucher series | |
| **voucher_number** | **int**| identifies the voucher number | |
| **financialyear** | **int**| filter on financial year | [optional] |

### Return type

[**\OpenAPI\Client\Model\VoucherWrap**](../Model/VoucherWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSeries()`

```php
listSeries($voucher_series, $financialyear): \OpenAPI\Client\Model\VoucherListItemList
```

Retrieve a list of vouchers for a specific series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VouchersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_series = 'voucher_series_example'; // string | identifies the voucher series
$financialyear = 56; // int | filter on financial year

try {
    $result = $apiInstance->listSeries($voucher_series, $financialyear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersResourceApi->listSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_series** | **string**| identifies the voucher series | |
| **financialyear** | **int**| filter on financial year | [optional] |

### Return type

[**\OpenAPI\Client\Model\VoucherListItemList**](../Model/VoucherListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVouchersResource()`

```php
listVouchersResource($financialyear): \OpenAPI\Client\Model\VoucherListItemList
```

Retrieve all vouchers

Note that vouchers have two keys, one for voucher series and one for voucher number. The financial year is also specified for each voucher, this is due to the same voucher series and number is used each year.  To get a unique voucher you need the voucher series, the voucher number and the financial year. These properties will always be returned where ever vouchers is used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VouchersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$financialyear = 56; // int | filter on financial year

try {
    $result = $apiInstance->listVouchersResource($financialyear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersResourceApi->listVouchersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **financialyear** | **int**| filter on financial year | [optional] |

### Return type

[**\OpenAPI\Client\Model\VoucherListItemList**](../Model/VoucherListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
