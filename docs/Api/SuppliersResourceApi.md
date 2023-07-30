# OpenAPI\Client\SuppliersResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSuppliersResource()**](SuppliersResourceApi.md#createSuppliersResource) | **POST** /3/suppliers | Create a supplier |
| [**getSuppliersResource()**](SuppliersResourceApi.md#getSuppliersResource) | **GET** /3/suppliers/{SupplierNumber} | Retrieve a single supplier |
| [**listSuppliersResource()**](SuppliersResourceApi.md#listSuppliersResource) | **GET** /3/suppliers | Retrieve a list of suppliers |
| [**updateSuppliersResource()**](SuppliersResourceApi.md#updateSuppliersResource) | **PUT** /3/suppliers/{SupplierNumber} | Update a supplier |


## `createSuppliersResource()`

```php
createSuppliersResource($supplier): \OpenAPI\Client\Model\SupplierWrap
```

Create a supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SuppliersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier = new \OpenAPI\Client\Model\SupplierWrap(); // \OpenAPI\Client\Model\SupplierWrap | to create

try {
    $result = $apiInstance->createSuppliersResource($supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersResourceApi->createSuppliersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | [**\OpenAPI\Client\Model\SupplierWrap**](../Model/SupplierWrap.md)| to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplierWrap**](../Model/SupplierWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuppliersResource()`

```php
getSuppliersResource($supplier_number): \OpenAPI\Client\Model\SupplierWrap
```

Retrieve a single supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SuppliersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_number = 'supplier_number_example'; // string | identifies the supplier

try {
    $result = $apiInstance->getSuppliersResource($supplier_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersResourceApi->getSuppliersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_number** | **string**| identifies the supplier | |

### Return type

[**\OpenAPI\Client\Model\SupplierWrap**](../Model/SupplierWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSuppliersResource()`

```php
listSuppliersResource(): \OpenAPI\Client\Model\SupplierListItemList
```

Retrieve a list of suppliers

The supplier register can return a list of records or a single record. By specifying a SupplierNumber in the URL, a single record will be returned. Not specifying a SupplierNumber will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SuppliersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listSuppliersResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersResourceApi->listSuppliersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SupplierListItemList**](../Model/SupplierListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSuppliersResource()`

```php
updateSuppliersResource($supplier_number, $supplier): \OpenAPI\Client\Model\SupplierWrap
```

Update a supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SuppliersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_number = 'supplier_number_example'; // string | identifies the supplier
$supplier = new \OpenAPI\Client\Model\SupplierWrap(); // \OpenAPI\Client\Model\SupplierWrap | to update

try {
    $result = $apiInstance->updateSuppliersResource($supplier_number, $supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersResourceApi->updateSuppliersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier_number** | **string**| identifies the supplier | |
| **supplier** | [**\OpenAPI\Client\Model\SupplierWrap**](../Model/SupplierWrap.md)| to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplierWrap**](../Model/SupplierWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
