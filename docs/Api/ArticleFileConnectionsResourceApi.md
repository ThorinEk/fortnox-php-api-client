# FortnoxApi\ArticleFileConnectionsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createArticleFileConnectionsResource()**](ArticleFileConnectionsResourceApi.md#createArticleFileConnectionsResource) | **POST** /3/articlefileconnections/ | Create an article file connection |
| [**getArticleFileConnectionsResource()**](ArticleFileConnectionsResourceApi.md#getArticleFileConnectionsResource) | **GET** /3/articlefileconnections/{FileId} | Retrieve a single article file connection |
| [**listArticleFileConnectionsResource()**](ArticleFileConnectionsResourceApi.md#listArticleFileConnectionsResource) | **GET** /3/articlefileconnections/ | Retrieve a list of article file connections |
| [**removeArticleFileConnectionsResource()**](ArticleFileConnectionsResourceApi.md#removeArticleFileConnectionsResource) | **DELETE** /3/articlefileconnections/{FileId} | Remove an article file connection |


## `createArticleFileConnectionsResource()`

```php
createArticleFileConnectionsResource($article_file_connection): \FortnoxApi\Model\ArticleFileConnectionWrap
```

Create an article file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ArticleFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_file_connection = new \FortnoxApi\Model\ArticleFileConnectionWrap(); // \FortnoxApi\Model\ArticleFileConnectionWrap | to create

try {
    $result = $apiInstance->createArticleFileConnectionsResource($article_file_connection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleFileConnectionsResourceApi->createArticleFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **article_file_connection** | [**\FortnoxApi\Model\ArticleFileConnectionWrap**](../Model/ArticleFileConnectionWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\ArticleFileConnectionWrap**](../Model/ArticleFileConnectionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticleFileConnectionsResource()`

```php
getArticleFileConnectionsResource($file_id): \FortnoxApi\Model\ArticleFileConnectionWrap
```

Retrieve a single article file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ArticleFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | identifies the article file connection

try {
    $result = $apiInstance->getArticleFileConnectionsResource($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleFileConnectionsResourceApi->getArticleFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| identifies the article file connection | |

### Return type

[**\FortnoxApi\Model\ArticleFileConnectionWrap**](../Model/ArticleFileConnectionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listArticleFileConnectionsResource()`

```php
listArticleFileConnectionsResource(): \FortnoxApi\Model\ArticleFileConnectionListItemWrap
```

Retrieve a list of article file connections

The article file connections register can return a list of records or a single record. By specifying a FileId in the URL, a single record will be returned. Not specifying a FileId will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ArticleFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listArticleFileConnectionsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleFileConnectionsResourceApi->listArticleFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\ArticleFileConnectionListItemWrap**](../Model/ArticleFileConnectionListItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeArticleFileConnectionsResource()`

```php
removeArticleFileConnectionsResource($file_id)
```

Remove an article file connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ArticleFileConnectionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | identifies the article file connection

try {
    $apiInstance->removeArticleFileConnectionsResource($file_id);
} catch (Exception $e) {
    echo 'Exception when calling ArticleFileConnectionsResourceApi->removeArticleFileConnectionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| identifies the article file connection | |

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
