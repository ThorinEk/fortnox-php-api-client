# OpenAPI\Client\ArticlesResourceArticlesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createArticlesResourceArticles()**](ArticlesResourceArticlesApi.md#createArticlesResourceArticles) | **POST** /3/articles | Create an article |
| [**getArticlesResourceArticles()**](ArticlesResourceArticlesApi.md#getArticlesResourceArticles) | **GET** /3/articles/{ArticleNumber} | Retrieve an article |
| [**listArticlesResourceArticles()**](ArticlesResourceArticlesApi.md#listArticlesResourceArticles) | **GET** /3/articles | Retrieve a list of articles |
| [**removeArticlesResourceArticles()**](ArticlesResourceArticlesApi.md#removeArticlesResourceArticles) | **DELETE** /3/articles/{ArticleNumber} | Delete an article |
| [**updateArticlesResourceArticles()**](ArticlesResourceArticlesApi.md#updateArticlesResourceArticles) | **PUT** /3/articles/{ArticleNumber} | Update an article |


## `createArticlesResourceArticles()`

```php
createArticlesResourceArticles($article): \OpenAPI\Client\Model\ArticleWrap
```

Create an article

The created article will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ArticlesResourceArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article = new \OpenAPI\Client\Model\ArticleWrap(); // \OpenAPI\Client\Model\ArticleWrap | to create

try {
    $result = $apiInstance->createArticlesResourceArticles($article);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesResourceArticlesApi->createArticlesResourceArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **article** | [**\OpenAPI\Client\Model\ArticleWrap**](../Model/ArticleWrap.md)| to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\ArticleWrap**](../Model/ArticleWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticlesResourceArticles()`

```php
getArticlesResourceArticles($article_number): \OpenAPI\Client\Model\ArticleWrap
```

Retrieve an article

Retrieves the details of an article. You need to supply the unique article number that was returned when the article was created or retrieved from the list of articles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ArticlesResourceArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_number = 56; // int | identifies the article

try {
    $result = $apiInstance->getArticlesResourceArticles($article_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesResourceArticlesApi->getArticlesResourceArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **article_number** | **int**| identifies the article | |

### Return type

[**\OpenAPI\Client\Model\ArticleWrap**](../Model/ArticleWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listArticlesResourceArticles()`

```php
listArticlesResourceArticles($filter, $articlenumber, $description, $ean, $suppliernumber, $manufacturer, $manufacturerarticlenumber, $webshop, $lastmodified, $sortby): \OpenAPI\Client\Model\ArticleListItemList
```

Retrieve a list of articles

Retrieves a list of articles. The articles are returned sorted by article number with the lowest number appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ArticlesResourceArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | possibility to filter supplier invoices
$articlenumber = 'articlenumber_example'; // string | filter by article number
$description = 'description_example'; // string | filter by description
$ean = 'ean_example'; // string | filter by ean
$suppliernumber = 'suppliernumber_example'; // string | filter by supplier number
$manufacturer = 'manufacturer_example'; // string | filter by manufacturer
$manufacturerarticlenumber = 'manufacturerarticlenumber_example'; // string | filter by manufacturerarticlenumber
$webshop = 'webshop_example'; // string | filter by web shop
$lastmodified = 'lastmodified_example'; // string | filter by lastmodified
$sortby = 'sortby_example'; // string | field to sort returned list

try {
    $result = $apiInstance->listArticlesResourceArticles($filter, $articlenumber, $description, $ean, $suppliernumber, $manufacturer, $manufacturerarticlenumber, $webshop, $lastmodified, $sortby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesResourceArticlesApi->listArticlesResourceArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| possibility to filter supplier invoices | [optional] |
| **articlenumber** | **string**| filter by article number | [optional] |
| **description** | **string**| filter by description | [optional] |
| **ean** | **string**| filter by ean | [optional] |
| **suppliernumber** | **string**| filter by supplier number | [optional] |
| **manufacturer** | **string**| filter by manufacturer | [optional] |
| **manufacturerarticlenumber** | **string**| filter by manufacturerarticlenumber | [optional] |
| **webshop** | **string**| filter by web shop | [optional] |
| **lastmodified** | **string**| filter by lastmodified | [optional] |
| **sortby** | **string**| field to sort returned list | [optional] |

### Return type

[**\OpenAPI\Client\Model\ArticleListItemList**](../Model/ArticleListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeArticlesResourceArticles()`

```php
removeArticlesResourceArticles($article_number)
```

Delete an article

<p>Deletes the article permanently.</p>  <p>You need to supply the unique article number that was returned when the article was created or retrieved from the list of articles.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ArticlesResourceArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_number = 56; // int | identifies the article

try {
    $apiInstance->removeArticlesResourceArticles($article_number);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesResourceArticlesApi->removeArticlesResourceArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **article_number** | **int**| identifies the article | |

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

## `updateArticlesResourceArticles()`

```php
updateArticlesResourceArticles($article_number, $article): \OpenAPI\Client\Model\ArticleWrap
```

Update an article

Updates the specified article with the values provided in the properties. Any property not provided will be left unchanged.  You need to supply the unique article number that was returned when the article was created or retrieved from the list of articles.  Note that even though the article number is writeable you can not change the number of an existing article.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ArticlesResourceArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_number = 56; // int | identifies the article
$article = new \OpenAPI\Client\Model\ArticleWrap(); // \OpenAPI\Client\Model\ArticleWrap | to update

try {
    $result = $apiInstance->updateArticlesResourceArticles($article_number, $article);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesResourceArticlesApi->updateArticlesResourceArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **article_number** | **int**| identifies the article | |
| **article** | [**\OpenAPI\Client\Model\ArticleWrap**](../Model/ArticleWrap.md)| to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\ArticleWrap**](../Model/ArticleWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
