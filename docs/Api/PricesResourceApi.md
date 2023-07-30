# FortnoxApi\PricesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPricesResource()**](PricesResourceApi.md#createPricesResource) | **POST** /3/prices/ | Create a price |
| [**getFirstPrice()**](PricesResourceApi.md#getFirstPrice) | **GET** /3/prices/{PriceList}/{ArticleNumber} | Retrieve the first price for the specified article |
| [**getPricesResource()**](PricesResourceApi.md#getPricesResource) | **GET** /3/prices/{PriceList}/{ArticleNumber}/{FromQuantity} | Retrieve a price for a specified article |
| [**listPricesResource()**](PricesResourceApi.md#listPricesResource) | **GET** /3/prices/sublist/{PriceList}/{ArticleNumber} | Retrieve a list of articles with all their prices in the specified price list |
| [**removePricesResource()**](PricesResourceApi.md#removePricesResource) | **DELETE** /3/prices/{PriceList}/{ArticleNumber}/{FromQuantity} | Delete a single price |
| [**updatePricesResource()**](PricesResourceApi.md#updatePricesResource) | **PUT** /3/prices/{PriceList}/{ArticleNumber}/{FromQuantity} | Update a price |
| [**updatePricesResource1()**](PricesResourceApi.md#updatePricesResource1) | **PUT** /3/prices/{PriceList}/{ArticleNumber} | Update the first price in the specified article |


## `createPricesResource()`

```php
createPricesResource($price): \FortnoxApi\Model\PriceWrap
```

Create a price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PricesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price = new \FortnoxApi\Model\PriceWrap(); // \FortnoxApi\Model\PriceWrap | price to create

try {
    $result = $apiInstance->createPricesResource($price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesResourceApi->createPricesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price** | [**\FortnoxApi\Model\PriceWrap**](../Model/PriceWrap.md)| price to create | [optional] |

### Return type

[**\FortnoxApi\Model\PriceWrap**](../Model/PriceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFirstPrice()`

```php
getFirstPrice($price_list, $article_number): \FortnoxApi\Model\PriceWrap
```

Retrieve the first price for the specified article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PricesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list = 'price_list_example'; // string | identifies the price list
$article_number = 'article_number_example'; // string | identifies the article

try {
    $result = $apiInstance->getFirstPrice($price_list, $article_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesResourceApi->getFirstPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_list** | **string**| identifies the price list | |
| **article_number** | **string**| identifies the article | |

### Return type

[**\FortnoxApi\Model\PriceWrap**](../Model/PriceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPricesResource()`

```php
getPricesResource($price_list, $article_number, $from_quantity): \FortnoxApi\Model\PriceWrap
```

Retrieve a price for a specified article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PricesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list = 'price_list_example'; // string | identifies the price list
$article_number = 'article_number_example'; // string | identifies the article
$from_quantity = 3.4; // float | identifies from quantity

try {
    $result = $apiInstance->getPricesResource($price_list, $article_number, $from_quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesResourceApi->getPricesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_list** | **string**| identifies the price list | |
| **article_number** | **string**| identifies the article | |
| **from_quantity** | **float**| identifies from quantity | |

### Return type

[**\FortnoxApi\Model\PriceWrap**](../Model/PriceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPricesResource()`

```php
listPricesResource($price_list, $article_number): \FortnoxApi\Model\PriceListItemList
```

Retrieve a list of articles with all their prices in the specified price list

The list contains a slimmer version of the prices. To get a full entity, use the GET with a price list, article number and from quantity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PricesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list = 'price_list_example'; // string | identifies the price list of the prices
$article_number = 'article_number_example'; // string | identifies the article number of the prices

try {
    $result = $apiInstance->listPricesResource($price_list, $article_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesResourceApi->listPricesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_list** | **string**| identifies the price list of the prices | |
| **article_number** | **string**| identifies the article number of the prices | |

### Return type

[**\FortnoxApi\Model\PriceListItemList**](../Model/PriceListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePricesResource()`

```php
removePricesResource($price_list, $article_number, $from_quantity)
```

Delete a single price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PricesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list = 'price_list_example'; // string | identifies the price list
$article_number = 'article_number_example'; // string | identifies the article number
$from_quantity = 3.4; // float | identifies the from quantity

try {
    $apiInstance->removePricesResource($price_list, $article_number, $from_quantity);
} catch (Exception $e) {
    echo 'Exception when calling PricesResourceApi->removePricesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_list** | **string**| identifies the price list | |
| **article_number** | **string**| identifies the article number | |
| **from_quantity** | **float**| identifies the from quantity | |

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

## `updatePricesResource()`

```php
updatePricesResource($price_list, $article_number, $from_quantity, $price): \FortnoxApi\Model\PriceWrap
```

Update a price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PricesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list = 'price_list_example'; // string | identifies the price list
$article_number = 'article_number_example'; // string | identifies the article number
$from_quantity = 3.4; // float | identifies the from quantity
$price = new \FortnoxApi\Model\PriceWrap(); // \FortnoxApi\Model\PriceWrap | price to update

try {
    $result = $apiInstance->updatePricesResource($price_list, $article_number, $from_quantity, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesResourceApi->updatePricesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_list** | **string**| identifies the price list | |
| **article_number** | **string**| identifies the article number | |
| **from_quantity** | **float**| identifies the from quantity | |
| **price** | [**\FortnoxApi\Model\PriceWrap**](../Model/PriceWrap.md)| price to update | [optional] |

### Return type

[**\FortnoxApi\Model\PriceWrap**](../Model/PriceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePricesResource1()`

```php
updatePricesResource1($price_list, $article_number, $price): \FortnoxApi\Model\PriceWrap
```

Update the first price in the specified article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PricesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list = 'price_list_example'; // string | identifies the price list
$article_number = 'article_number_example'; // string | identifies the article number
$price = new \FortnoxApi\Model\PriceWrap(); // \FortnoxApi\Model\PriceWrap | price to update

try {
    $result = $apiInstance->updatePricesResource1($price_list, $article_number, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesResourceApi->updatePricesResource1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_list** | **string**| identifies the price list | |
| **article_number** | **string**| identifies the article number | |
| **price** | [**\FortnoxApi\Model\PriceWrap**](../Model/PriceWrap.md)| price to update | [optional] |

### Return type

[**\FortnoxApi\Model\PriceWrap**](../Model/PriceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
