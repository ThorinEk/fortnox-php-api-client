# FortnoxApi\SupplierInvoiceExternalUrlConnectionsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupplierInvoiceExternalUrlConnectionsResource()**](SupplierInvoiceExternalUrlConnectionsResourceApi.md#createSupplierInvoiceExternalUrlConnectionsResource) | **POST** /3/supplierinvoiceexternalurlconnections | Create a supplier invoice external URL connection |
| [**deleteSupplierInvoiceExternalUrlConnectionsResource()**](SupplierInvoiceExternalUrlConnectionsResourceApi.md#deleteSupplierInvoiceExternalUrlConnectionsResource) | **DELETE** /3/supplierinvoiceexternalurlconnections/{Id} | Remove a supplier invoice external URL connection |
| [**getSupplierInvoiceExternalUrlConnectionsResource()**](SupplierInvoiceExternalUrlConnectionsResourceApi.md#getSupplierInvoiceExternalUrlConnectionsResource) | **GET** /3/supplierinvoiceexternalurlconnections/{Id} | Retrieve a single supplier invoice external URL connection |
| [**updateSupplierInvoiceExternalUrlConnectionsResource()**](SupplierInvoiceExternalUrlConnectionsResourceApi.md#updateSupplierInvoiceExternalUrlConnectionsResource) | **PUT** /3/supplierinvoiceexternalurlconnections/{Id} | Update a supplier invoice external URL connection |


## `createSupplierInvoiceExternalUrlConnectionsResource()`

```php
createSupplierInvoiceExternalUrlConnectionsResource($request): \FortnoxApi\Model\SupplierInvoiceExternalURLConnectionSingle
```

Create a supplier invoice external URL connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SupplierInvoiceExternalUrlConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \FortnoxApi\Model\SupplierInvoiceExternalURLConnectionUpdate(); // \FortnoxApi\Model\SupplierInvoiceExternalURLConnectionUpdate | request

try {
    $result = $apiInstance->createSupplierInvoiceExternalUrlConnectionsResource($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceExternalUrlConnectionsResourceApi->createSupplierInvoiceExternalUrlConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request** | [**\FortnoxApi\Model\SupplierInvoiceExternalURLConnectionUpdate**](../Model/SupplierInvoiceExternalURLConnectionUpdate.md)| request | [optional] |

### Return type

[**\FortnoxApi\Model\SupplierInvoiceExternalURLConnectionSingle**](../Model/SupplierInvoiceExternalURLConnectionSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSupplierInvoiceExternalUrlConnectionsResource()`

```php
deleteSupplierInvoiceExternalUrlConnectionsResource($id)
```

Remove a supplier invoice external URL connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SupplierInvoiceExternalUrlConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $apiInstance->deleteSupplierInvoiceExternalUrlConnectionsResource($id);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceExternalUrlConnectionsResourceApi->deleteSupplierInvoiceExternalUrlConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| id | |

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

## `getSupplierInvoiceExternalUrlConnectionsResource()`

```php
getSupplierInvoiceExternalUrlConnectionsResource($id): \FortnoxApi\Model\SupplierInvoiceExternalURLConnectionSingle
```

Retrieve a single supplier invoice external URL connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SupplierInvoiceExternalUrlConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->getSupplierInvoiceExternalUrlConnectionsResource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceExternalUrlConnectionsResourceApi->getSupplierInvoiceExternalUrlConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| id | |

### Return type

[**\FortnoxApi\Model\SupplierInvoiceExternalURLConnectionSingle**](../Model/SupplierInvoiceExternalURLConnectionSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSupplierInvoiceExternalUrlConnectionsResource()`

```php
updateSupplierInvoiceExternalUrlConnectionsResource($id, $request): \FortnoxApi\Model\SupplierInvoiceExternalURLConnectionSingle
```

Update a supplier invoice external URL connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SupplierInvoiceExternalUrlConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$request = new \FortnoxApi\Model\SupplierInvoiceExternalURLConnectionUpdate(); // \FortnoxApi\Model\SupplierInvoiceExternalURLConnectionUpdate | request

try {
    $result = $apiInstance->updateSupplierInvoiceExternalUrlConnectionsResource($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceExternalUrlConnectionsResourceApi->updateSupplierInvoiceExternalUrlConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| id | |
| **request** | [**\FortnoxApi\Model\SupplierInvoiceExternalURLConnectionUpdate**](../Model/SupplierInvoiceExternalURLConnectionUpdate.md)| request | [optional] |

### Return type

[**\FortnoxApi\Model\SupplierInvoiceExternalURLConnectionSingle**](../Model/SupplierInvoiceExternalURLConnectionSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
