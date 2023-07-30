# FortnoxApi\AssetsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeManualObValue()**](AssetsResourceApi.md#changeManualObValue) | **PUT** /3/assets/{GivenNumber} | Change manual OB value of an Asset |
| [**createAssetsResource()**](AssetsResourceApi.md#createAssetsResource) | **POST** /3/assets/ | Create an Asset |
| [**deleteAssetsResource()**](AssetsResourceApi.md#deleteAssetsResource) | **DELETE** /3/assets/{GivenNumber} | Delete or Void an Asset |
| [**depreciate()**](AssetsResourceApi.md#depreciate) | **POST** /3/assets/depreciate | Perform a Depreciation of an Asset |
| [**getAssetsResource()**](AssetsResourceApi.md#getAssetsResource) | **GET** /3/assets/{GivenNumber} | Retrieve a single asset |
| [**getDeprecationList()**](AssetsResourceApi.md#getDeprecationList) | **GET** /3/assets/depreciations/{ToDate} | Assets depreciation list |
| [**listAssetsResource()**](AssetsResourceApi.md#listAssetsResource) | **GET** /3/assets/ | Retrieve a list of assets |
| [**scrap()**](AssetsResourceApi.md#scrap) | **PUT** /3/assets/scrap/{GivenNumber} | Scrap an Asset |
| [**sell()**](AssetsResourceApi.md#sell) | **PUT** /3/assets/sell/{GivenNumber} | Sell an Asset |
| [**writeDown()**](AssetsResourceApi.md#writeDown) | **PUT** /3/assets/writedown/{GivenNumber} | Write down an Asset |
| [**writeUp()**](AssetsResourceApi.md#writeUp) | **PUT** /3/assets/writeup/{GivenNumber} | Write up an Asset |


## `changeManualObValue()`

```php
changeManualObValue($given_number, $asset): \FortnoxApi\Model\AssetSingle
```

Change manual OB value of an Asset

The updated asset will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$asset = new \FortnoxApi\Model\ManualObAsset(); // \FortnoxApi\Model\ManualObAsset | asset

try {
    $result = $apiInstance->changeManualObValue($given_number, $asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->changeManualObValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **string**| Asset number | |
| **asset** | [**\FortnoxApi\Model\ManualObAsset**](../Model/ManualObAsset.md)| asset | [optional] |

### Return type

[**\FortnoxApi\Model\AssetSingle**](../Model/AssetSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAssetsResource()`

```php
createAssetsResource($asset): \FortnoxApi\Model\AssetSingle
```

Create an Asset

The created asset will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = new \FortnoxApi\Model\CreateAssetWrap(); // \FortnoxApi\Model\CreateAssetWrap | asset

try {
    $result = $apiInstance->createAssetsResource($asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->createAssetsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | [**\FortnoxApi\Model\CreateAssetWrap**](../Model/CreateAssetWrap.md)| asset | [optional] |

### Return type

[**\FortnoxApi\Model\AssetSingle**](../Model/AssetSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssetsResource()`

```php
deleteAssetsResource($given_number, $request)
```

Delete or Void an Asset

By specifying a {GivenNumber} in the URL a single &quot;Not active&quot; asset or asset with a type &quot;Not depreciable&quot; can be deleted. By specifying a {GivenNumber} in the URL a single &quot;Active&quot; or &quot;Fully depreciated&quot; assets can be voided and in this case in request body voiddate should be provided, otherwise it will use todays date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$request = new \FortnoxApi\Model\DeleteWrap(); // \FortnoxApi\Model\DeleteWrap | request

try {
    $apiInstance->deleteAssetsResource($given_number, $request);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->deleteAssetsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **string**| Asset number | |
| **request** | [**\FortnoxApi\Model\DeleteWrap**](../Model/DeleteWrap.md)| request | [optional] |

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

## `depreciate()`

```php
depreciate($body): \FortnoxApi\Model\DepreciationResponseWrap
```

Perform a Depreciation of an Asset

The created vouchers list will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \FortnoxApi\Model\DepreciationWrap(); // \FortnoxApi\Model\DepreciationWrap | body

try {
    $result = $apiInstance->depreciate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->depreciate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\FortnoxApi\Model\DepreciationWrap**](../Model/DepreciationWrap.md)| body | [optional] |

### Return type

[**\FortnoxApi\Model\DepreciationResponseWrap**](../Model/DepreciationResponseWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetsResource()`

```php
getAssetsResource($given_number): \FortnoxApi\Model\AssetSingle
```

Retrieve a single asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number

try {
    $result = $apiInstance->getAssetsResource($given_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->getAssetsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **string**| Asset number | |

### Return type

[**\FortnoxApi\Model\AssetSingle**](../Model/AssetSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeprecationList()`

```php
getDeprecationList($to_date): \FortnoxApi\Model\ListAssetWrap
```

Assets depreciation list

Retrieves a list of assets to depreciate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$to_date = 'to_date_example'; // string | toDate

try {
    $result = $apiInstance->getDeprecationList($to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->getDeprecationList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **to_date** | **string**| toDate | |

### Return type

[**\FortnoxApi\Model\ListAssetWrap**](../Model/ListAssetWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssetsResource()`

```php
listAssetsResource(): \FortnoxApi\Model\ListAssetWrap
```

Retrieve a list of assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listAssetsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->listAssetsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\ListAssetWrap**](../Model/ListAssetWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scrap()`

```php
scrap($given_number, $asset): \FortnoxApi\Model\AssetSingle
```

Scrap an Asset

The updated asset will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$asset = new \FortnoxApi\Model\ScrapWrap(); // \FortnoxApi\Model\ScrapWrap | asset

try {
    $result = $apiInstance->scrap($given_number, $asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->scrap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **string**| Asset number | |
| **asset** | [**\FortnoxApi\Model\ScrapWrap**](../Model/ScrapWrap.md)| asset | [optional] |

### Return type

[**\FortnoxApi\Model\AssetSingle**](../Model/AssetSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sell()`

```php
sell($given_number, $asset): \FortnoxApi\Model\AssetSingle
```

Sell an Asset

Partial sell or full sell of an asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$asset = new \FortnoxApi\Model\SellWrap(); // \FortnoxApi\Model\SellWrap | asset

try {
    $result = $apiInstance->sell($given_number, $asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->sell: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **string**| Asset number | |
| **asset** | [**\FortnoxApi\Model\SellWrap**](../Model/SellWrap.md)| asset | [optional] |

### Return type

[**\FortnoxApi\Model\AssetSingle**](../Model/AssetSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `writeDown()`

```php
writeDown($given_number, $asset): \FortnoxApi\Model\AssetSingle
```

Write down an Asset

The updated asset will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$asset = new \FortnoxApi\Model\WriteDownWrap(); // \FortnoxApi\Model\WriteDownWrap | asset

try {
    $result = $apiInstance->writeDown($given_number, $asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->writeDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **string**| Asset number | |
| **asset** | [**\FortnoxApi\Model\WriteDownWrap**](../Model/WriteDownWrap.md)| asset | [optional] |

### Return type

[**\FortnoxApi\Model\AssetSingle**](../Model/AssetSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `writeUp()`

```php
writeUp($given_number, $asset): \FortnoxApi\Model\AssetSingle
```

Write up an Asset

The updated asset will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$asset = new \FortnoxApi\Model\WriteUpWrap(); // \FortnoxApi\Model\WriteUpWrap | asset

try {
    $result = $apiInstance->writeUp($given_number, $asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsResourceApi->writeUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **given_number** | **string**| Asset number | |
| **asset** | [**\FortnoxApi\Model\WriteUpWrap**](../Model/WriteUpWrap.md)| asset | [optional] |

### Return type

[**\FortnoxApi\Model\AssetSingle**](../Model/AssetSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
