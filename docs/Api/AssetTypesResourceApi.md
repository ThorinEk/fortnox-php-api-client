# FortnoxApi\AssetTypesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAssetTypesResource()**](AssetTypesResourceApi.md#createAssetTypesResource) | **POST** /3/assets/types/{id} | Create an asset type |
| [**deleteAssetTypesResource()**](AssetTypesResourceApi.md#deleteAssetTypesResource) | **DELETE** /3/assets/types/{id} | Delete an asset type |
| [**getAllAssetTypesResource()**](AssetTypesResourceApi.md#getAllAssetTypesResource) | **GET** /3/assets/types/ | Retrieve a list of asset types |
| [**getAssetTypesResource()**](AssetTypesResourceApi.md#getAssetTypesResource) | **GET** /3/assets/types/{id} | Retrieve an asset type |
| [**updateAssetTypesResource()**](AssetTypesResourceApi.md#updateAssetTypesResource) | **PUT** /3/assets/types/{id} | Update an asset type |


## `createAssetTypesResource()`

```php
createAssetTypesResource($id, $create_asset_request): \FortnoxApi\Model\AssetTypeWrapSingle
```

Create an asset type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetTypesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$create_asset_request = new \FortnoxApi\Model\CreateAssetWrap(); // \FortnoxApi\Model\CreateAssetWrap | request

try {
    $result = $apiInstance->createAssetTypesResource($id, $create_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesResourceApi->createAssetTypesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| id | |
| **create_asset_request** | [**\FortnoxApi\Model\CreateAssetWrap**](../Model/CreateAssetWrap.md)| request | [optional] |

### Return type

[**\FortnoxApi\Model\AssetTypeWrapSingle**](../Model/AssetTypeWrapSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssetTypesResource()`

```php
deleteAssetTypesResource($id)
```

Delete an asset type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetTypesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $apiInstance->deleteAssetTypesResource($id);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesResourceApi->deleteAssetTypesResource: ', $e->getMessage(), PHP_EOL;
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

## `getAllAssetTypesResource()`

```php
getAllAssetTypesResource(): \FortnoxApi\Model\AssetTypeWrapList
```

Retrieve a list of asset types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetTypesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllAssetTypesResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesResourceApi->getAllAssetTypesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\AssetTypeWrapList**](../Model/AssetTypeWrapList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetTypesResource()`

```php
getAssetTypesResource($id): \FortnoxApi\Model\AssetTypeWrapSingle
```

Retrieve an asset type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetTypesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->getAssetTypesResource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesResourceApi->getAssetTypesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| id | |

### Return type

[**\FortnoxApi\Model\AssetTypeWrapSingle**](../Model/AssetTypeWrapSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssetTypesResource()`

```php
updateAssetTypesResource($id, $update_asset_request): \FortnoxApi\Model\AssetTypeWrapSingle
```

Update an asset type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetTypesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$update_asset_request = new \FortnoxApi\Model\UpdateAssetWrap(); // \FortnoxApi\Model\UpdateAssetWrap | request

try {
    $result = $apiInstance->updateAssetTypesResource($id, $update_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypesResourceApi->updateAssetTypesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| id | |
| **update_asset_request** | [**\FortnoxApi\Model\UpdateAssetWrap**](../Model/UpdateAssetWrap.md)| request | [optional] |

### Return type

[**\FortnoxApi\Model\AssetTypeWrapSingle**](../Model/AssetTypeWrapSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
