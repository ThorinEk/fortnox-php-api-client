# FortnoxApi\VoucherFileConnectionsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVoucherFileConnectionsResource()**](VoucherFileConnectionsResourceApi.md#createVoucherFileConnectionsResource) | **POST** /3/voucherfileconnections/ | Create a voucher file connection |
| [**getVoucherFileConnectionsResource()**](VoucherFileConnectionsResourceApi.md#getVoucherFileConnectionsResource) | **GET** /3/voucherfileconnections/{FileId} | Retrieve a single voucher file connection |
| [**listVoucherFileConnectionsResource()**](VoucherFileConnectionsResourceApi.md#listVoucherFileConnectionsResource) | **GET** /3/voucherfileconnections/ | Retrieve a list of voucher file connections |
| [**removeVoucherFileConnectionsResource()**](VoucherFileConnectionsResourceApi.md#removeVoucherFileConnectionsResource) | **DELETE** /3/voucherfileconnections/{FileId} | Remove a voucher file connection |


## `createVoucherFileConnectionsResource()`

```php
createVoucherFileConnectionsResource($voucher_file_connection): \FortnoxApi\Model\VoucherFileConnectionWrap
```

Create a voucher file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\VoucherFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_file_connection = new \FortnoxApi\Model\VoucherFileConnectionWrap(); // \FortnoxApi\Model\VoucherFileConnectionWrap | to create

try {
    $result = $apiInstance->createVoucherFileConnectionsResource($voucher_file_connection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherFileConnectionsResourceApi->createVoucherFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_file_connection** | [**\FortnoxApi\Model\VoucherFileConnectionWrap**](../Model/VoucherFileConnectionWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\VoucherFileConnectionWrap**](../Model/VoucherFileConnectionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucherFileConnectionsResource()`

```php
getVoucherFileConnectionsResource($file_id): \FortnoxApi\Model\VoucherFileConnectionWrap
```

Retrieve a single voucher file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\VoucherFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | identifies the voucher file connection

try {
    $result = $apiInstance->getVoucherFileConnectionsResource($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherFileConnectionsResourceApi->getVoucherFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| identifies the voucher file connection | |

### Return type

[**\FortnoxApi\Model\VoucherFileConnectionWrap**](../Model/VoucherFileConnectionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVoucherFileConnectionsResource()`

```php
listVoucherFileConnectionsResource(): \FortnoxApi\Model\VoucherFileConnectionList
```

Retrieve a list of voucher file connections

The voucher file connections register can return a list of records or a single record. By specifying a FileId in the URL, a single record will be returned. Not specifying a FileId will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\VoucherFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listVoucherFileConnectionsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherFileConnectionsResourceApi->listVoucherFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\VoucherFileConnectionList**](../Model/VoucherFileConnectionList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeVoucherFileConnectionsResource()`

```php
removeVoucherFileConnectionsResource($file_id)
```

Remove a voucher file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\VoucherFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | identifies the voucher file connection

try {
    $apiInstance->removeVoucherFileConnectionsResource($file_id);
} catch (Exception $e) {
    echo 'Exception when calling VoucherFileConnectionsResourceApi->removeVoucherFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| identifies the voucher file connection | |

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
