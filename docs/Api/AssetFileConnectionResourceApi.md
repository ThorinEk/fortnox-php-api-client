# FortnoxApi\AssetFileConnectionResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAssetFileConnectionResource()**](AssetFileConnectionResourceApi.md#createAssetFileConnectionResource) | **POST** /3/assetfileconnections | Create an asset file connection |
| [**deleteAssetFileConnectionResource()**](AssetFileConnectionResourceApi.md#deleteAssetFileConnectionResource) | **DELETE** /3/assetfileconnections/{fileId} | Remove an asset file connection |
| [**getAllAssetFileConnectionResource()**](AssetFileConnectionResourceApi.md#getAllAssetFileConnectionResource) | **GET** /3/assetfileconnections | Retrieve a list of asset file connections |


## `createAssetFileConnectionResource()`

```php
createAssetFileConnectionResource($asset_file_connection): \FortnoxApi\Model\AssetFileConnection
```

Create an asset file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetFileConnectionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset_file_connection = new \FortnoxApi\Model\CreateAssetFileConnection(); // \FortnoxApi\Model\CreateAssetFileConnection | asset file connection

try {
    $result = $apiInstance->createAssetFileConnectionResource($asset_file_connection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetFileConnectionResourceApi->createAssetFileConnectionResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_file_connection** | [**\FortnoxApi\Model\CreateAssetFileConnection**](../Model/CreateAssetFileConnection.md)| asset file connection | [optional] |

### Return type

[**\FortnoxApi\Model\AssetFileConnection**](../Model/AssetFileConnection.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssetFileConnectionResource()`

```php
deleteAssetFileConnectionResource($file_id)
```

Remove an asset file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetFileConnectionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | fileId

try {
    $apiInstance->deleteAssetFileConnectionResource($file_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetFileConnectionResourceApi->deleteAssetFileConnectionResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| fileId | |

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

## `getAllAssetFileConnectionResource()`

```php
getAllAssetFileConnectionResource(): \FortnoxApi\Model\AssetFileConnectionResponse
```

Retrieve a list of asset file connections

The asset register can return a list of assets or a single asset. By specifying a FileId in the URL, a single asset will be returned. Not specifying a FileId will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetFileConnectionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllAssetFileConnectionResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetFileConnectionResourceApi->getAllAssetFileConnectionResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\AssetFileConnectionResponse**](../Model/AssetFileConnectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
