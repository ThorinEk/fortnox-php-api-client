# OpenAPI\Client\SupplierInvoiceFileConnectionsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupplierInvoiceFileConnectionsResource()**](SupplierInvoiceFileConnectionsResourceApi.md#createSupplierInvoiceFileConnectionsResource) | **POST** /3/supplierinvoicefileconnections/ | Create an supplier invoice file connection |
| [**getSupplierInvoiceFileConnectionsResource()**](SupplierInvoiceFileConnectionsResourceApi.md#getSupplierInvoiceFileConnectionsResource) | **GET** /3/supplierinvoicefileconnections/{FileId} | Retrieve a single supplier invoice file connection |
| [**listSupplierInvoiceFileConnectionsResource()**](SupplierInvoiceFileConnectionsResourceApi.md#listSupplierInvoiceFileConnectionsResource) | **GET** /3/supplierinvoicefileconnections/ | Retrieve a list of supplier invoice file connections |
| [**removeSupplierInvoiceFileConnectionsResource()**](SupplierInvoiceFileConnectionsResourceApi.md#removeSupplierInvoiceFileConnectionsResource) | **DELETE** /3/supplierinvoicefileconnections/{FileId} | Remove an supplier invoice file connection |


## `createSupplierInvoiceFileConnectionsResource()`

```php
createSupplierInvoiceFileConnectionsResource($file_connection): \OpenAPI\Client\Model\SupplierInvoiceFileConnectionWrap
```

Create an supplier invoice file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoiceFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_connection = new \OpenAPI\Client\Model\SupplierInvoiceFileConnectionWrap(); // \OpenAPI\Client\Model\SupplierInvoiceFileConnectionWrap | supplier invoice file connection to create

try {
    $result = $apiInstance->createSupplierInvoiceFileConnectionsResource($file_connection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceFileConnectionsResourceApi->createSupplierInvoiceFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_connection** | [**\OpenAPI\Client\Model\SupplierInvoiceFileConnectionWrap**](../Model/SupplierInvoiceFileConnectionWrap.md)| supplier invoice file connection to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceFileConnectionWrap**](../Model/SupplierInvoiceFileConnectionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierInvoiceFileConnectionsResource()`

```php
getSupplierInvoiceFileConnectionsResource($file_id): \OpenAPI\Client\Model\SupplierInvoiceFileConnectionWrap
```

Retrieve a single supplier invoice file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoiceFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | identifies the file connection

try {
    $result = $apiInstance->getSupplierInvoiceFileConnectionsResource($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceFileConnectionsResourceApi->getSupplierInvoiceFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| identifies the file connection | |

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceFileConnectionWrap**](../Model/SupplierInvoiceFileConnectionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSupplierInvoiceFileConnectionsResource()`

```php
listSupplierInvoiceFileConnectionsResource(): \OpenAPI\Client\Model\SupplierInvoiceFileConnectionList
```

Retrieve a list of supplier invoice file connections

The supplier invoice file connections register can return a list of records or a single record. By specifying a FileId in the URL, a single record will be returned. Not specifying a FileId will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoiceFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listSupplierInvoiceFileConnectionsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceFileConnectionsResourceApi->listSupplierInvoiceFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SupplierInvoiceFileConnectionList**](../Model/SupplierInvoiceFileConnectionList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeSupplierInvoiceFileConnectionsResource()`

```php
removeSupplierInvoiceFileConnectionsResource($file_id)
```

Remove an supplier invoice file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SupplierInvoiceFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | identifies the supplier invoice file connection

try {
    $apiInstance->removeSupplierInvoiceFileConnectionsResource($file_id);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceFileConnectionsResourceApi->removeSupplierInvoiceFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| identifies the supplier invoice file connection | |

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
