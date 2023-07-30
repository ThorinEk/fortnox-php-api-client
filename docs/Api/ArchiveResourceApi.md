# OpenAPI\Client\ArchiveResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFileById()**](ArchiveResourceApi.md#getFileById) | **GET** /3/archive/{id} | Retrieve a single file |
| [**getFolder()**](ArchiveResourceApi.md#getFolder) | **GET** /3/archive/ | Retrieve folder or file |
| [**removeById()**](ArchiveResourceApi.md#removeById) | **DELETE** /3/archive/{id} | Delete a single file |
| [**removeByPath()**](ArchiveResourceApi.md#removeByPath) | **DELETE** /3/archive/ | Remove files |
| [**uploadFile()**](ArchiveResourceApi.md#uploadFile) | **POST** /3/archive/ | Upload a file to a specific subdirectory |


## `getFileById()`

```php
getFileById($id, $fileid): string
```

Retrieve a single file

Providing fileId will return given file from fileattachments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ArchiveResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | identifies the file
$fileid = 'fileid_example'; // string | fileId from fileattachments

try {
    $result = $apiInstance->getFileById($id, $fileid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveResourceApi->getFileById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| identifies the file | |
| **fileid** | **string**| fileId from fileattachments | [optional] |

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

## `getFolder()`

```php
getFolder($path, $fileid): \OpenAPI\Client\Model\FolderWrap
```

Retrieve folder or file

If no path is provided the root will be returned.  Providing fileId will return given file from fileattachments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ArchiveResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string | name of folder
$fileid = 'fileid_example'; // string | fileId from fileattachments

try {
    $result = $apiInstance->getFolder($path, $fileid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveResourceApi->getFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| name of folder | [optional] |
| **fileid** | **string**| fileId from fileattachments | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderWrap**](../Model/FolderWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeById()`

```php
removeById($id)
```

Delete a single file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ArchiveResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | identifies file/folder to remove

try {
    $apiInstance->removeById($id);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveResourceApi->removeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| identifies file/folder to remove | |

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

## `removeByPath()`

```php
removeByPath($path)
```

Remove files

Please note that removing a folder will also resulting in removal of all the contents within!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ArchiveResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string | identifies file/folder to remove

try {
    $apiInstance->removeByPath($path);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveResourceApi->removeByPath: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| identifies file/folder to remove | [optional] |

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

## `uploadFile()`

```php
uploadFile($path, $folderid, $file): \OpenAPI\Client\Model\FolderFileRowWrap
```

Upload a file to a specific subdirectory

If not path or folderId is provided, the file will be uploaded to the root directory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ArchiveResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string | name of folder
$folderid = 'folderid_example'; // string | id of folder
$file = array('key' => new \stdClass); // object | file to uplad

try {
    $result = $apiInstance->uploadFile($path, $folderid, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveResourceApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| name of folder | [optional] |
| **folderid** | **string**| id of folder | [optional] |
| **file** | [**object**](../Model/object.md)| file to uplad | [optional] |

### Return type

[**\OpenAPI\Client\Model\FolderFileRowWrap**](../Model/FolderFileRowWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
