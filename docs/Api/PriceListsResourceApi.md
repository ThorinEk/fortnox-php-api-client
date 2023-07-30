# FortnoxApi\PriceListsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPriceListsResource()**](PriceListsResourceApi.md#createPriceListsResource) | **POST** /3/pricelists | Create a price list |
| [**getPriceListsResource()**](PriceListsResourceApi.md#getPriceListsResource) | **GET** /3/pricelists/{Code} | Retrieve a single price list |
| [**listPriceListsResource()**](PriceListsResourceApi.md#listPriceListsResource) | **GET** /3/pricelists | Retrieve a list of price lists |
| [**updatePriceListsResource()**](PriceListsResourceApi.md#updatePriceListsResource) | **PUT** /3/pricelists/{Code} | Update a price list |


## `createPriceListsResource()`

```php
createPriceListsResource($price_list): \FortnoxApi\Model\PriceListWrap
```

Create a price list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PriceListsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$price_list = new \FortnoxApi\Model\PriceListWrap(); // \FortnoxApi\Model\PriceListWrap | to create

try {
    $result = $apiInstance->createPriceListsResource($price_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsResourceApi->createPriceListsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_list** | [**\FortnoxApi\Model\PriceListWrap**](../Model/PriceListWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\PriceListWrap**](../Model/PriceListWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListsResource()`

```php
getPriceListsResource($code): \FortnoxApi\Model\PriceListWrap
```

Retrieve a single price list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PriceListsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the price list

try {
    $result = $apiInstance->getPriceListsResource($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsResourceApi->getPriceListsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the price list | |

### Return type

[**\FortnoxApi\Model\PriceListWrap**](../Model/PriceListWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPriceListsResource()`

```php
listPriceListsResource(): \FortnoxApi\Model\PriceListList
```

Retrieve a list of price lists

The price lists register can return a list of records or a single record. By specifying a Code in the URL, a single record will be returned. Not specifying a Code will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PriceListsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listPriceListsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsResourceApi->listPriceListsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\PriceListList**](../Model/PriceListList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePriceListsResource()`

```php
updatePriceListsResource($code, $price_list): \FortnoxApi\Model\PriceListWrap
```

Update a price list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PriceListsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the price list
$price_list = new \FortnoxApi\Model\PriceListWrap(); // \FortnoxApi\Model\PriceListWrap | price list to update

try {
    $result = $apiInstance->updatePriceListsResource($code, $price_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsResourceApi->updatePriceListsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the price list | |
| **price_list** | [**\FortnoxApi\Model\PriceListWrap**](../Model/PriceListWrap.md)| price list to update | [optional] |

### Return type

[**\FortnoxApi\Model\PriceListWrap**](../Model/PriceListWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
