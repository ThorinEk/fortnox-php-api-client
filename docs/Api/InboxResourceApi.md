# FortnoxApi\InboxResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFileByIdInboxResource()**](InboxResourceApi.md#getFileByIdInboxResource) | **GET** /3/inbox/{Id} | Retrieve a single file |
| [**getInboxResource()**](InboxResourceApi.md#getInboxResource) | **GET** /3/inbox/ | Retrieve the root folder containing files and folders |
| [**removeInboxResource()**](InboxResourceApi.md#removeInboxResource) | **DELETE** /3/inbox/{Id} | Remove a file or folder |
| [**upload()**](InboxResourceApi.md#upload) | **POST** /3/inbox/ | Upload a file |


## `getFileByIdInboxResource()`

```php
getFileByIdInboxResource($id): string
```

Retrieve a single file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InboxResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | identifies the folder

try {
    $result = $apiInstance->getFileByIdInboxResource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxResourceApi->getFileByIdInboxResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| identifies the folder | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxResource()`

```php
getInboxResource(): \FortnoxApi\Model\FolderWrap
```

Retrieve the root folder containing files and folders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InboxResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInboxResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxResourceApi->getInboxResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\FolderWrap**](../Model/FolderWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeInboxResource()`

```php
removeInboxResource($id)
```

Remove a file or folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InboxResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | identifies the file to remove

try {
    $apiInstance->removeInboxResource($id);
} catch (Exception $e) {
    echo 'Exception when calling InboxResourceApi->removeInboxResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| identifies the file to remove | |

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

## `upload()`

```php
upload($folder_id, $path, $file): \FortnoxApi\Model\FolderFileRowWrap
```

Upload a file

Upload a file to a specific subdirectory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InboxResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = 'folder_id_example'; // string | folder id
$path = 'path_example'; // string | path
$file = array('key' => new \stdClass); // object | file

try {
    $result = $apiInstance->upload($folder_id, $path, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxResourceApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**| folder id | [optional] |
| **path** | **string**| path | [optional] |
| **file** | [**object**](../Model/object.md)| file | [optional] |

### Return type

[**\FortnoxApi\Model\FolderFileRowWrap**](../Model/FolderFileRowWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
