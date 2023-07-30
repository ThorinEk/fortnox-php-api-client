# OpenAPI\Client\AssetsResourceApi

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
changeManualObValue($given_number, $asset): \OpenAPI\Client\Model\AssetSingle
```

Change manual OB value of an Asset

The updated asset will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$asset = new \OpenAPI\Client\Model\ManualObAsset(); // \OpenAPI\Client\Model\ManualObAsset | asset

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
| **asset** | [**\OpenAPI\Client\Model\ManualObAsset**](../Model/ManualObAsset.md)| asset | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetSingle**](../Model/AssetSingle.md)

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
createAssetsResource($asset): \OpenAPI\Client\Model\AssetSingle
```

Create an Asset

The created asset will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = new \OpenAPI\Client\Model\CreateAssetWrap(); // \OpenAPI\Client\Model\CreateAssetWrap | asset

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
| **asset** | [**\OpenAPI\Client\Model\CreateAssetWrap**](../Model/CreateAssetWrap.md)| asset | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetSingle**](../Model/AssetSingle.md)

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



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$request = new \OpenAPI\Client\Model\DeleteWrap(); // \OpenAPI\Client\Model\DeleteWrap | request

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
| **request** | [**\OpenAPI\Client\Model\DeleteWrap**](../Model/DeleteWrap.md)| request | [optional] |

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
depreciate($body): \OpenAPI\Client\Model\DepreciationResponseWrap
```

Perform a Depreciation of an Asset

The created vouchers list will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DepreciationWrap(); // \OpenAPI\Client\Model\DepreciationWrap | body

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
| **body** | [**\OpenAPI\Client\Model\DepreciationWrap**](../Model/DepreciationWrap.md)| body | [optional] |

### Return type

[**\OpenAPI\Client\Model\DepreciationResponseWrap**](../Model/DepreciationResponseWrap.md)

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
getAssetsResource($given_number): \OpenAPI\Client\Model\AssetSingle
```

Retrieve a single asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
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

[**\OpenAPI\Client\Model\AssetSingle**](../Model/AssetSingle.md)

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
getDeprecationList($to_date): \OpenAPI\Client\Model\ListAssetWrap
```

Assets depreciation list

Retrieves a list of assets to depreciate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
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

[**\OpenAPI\Client\Model\ListAssetWrap**](../Model/ListAssetWrap.md)

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
listAssetsResource(): \OpenAPI\Client\Model\ListAssetWrap
```

Retrieve a list of assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
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

[**\OpenAPI\Client\Model\ListAssetWrap**](../Model/ListAssetWrap.md)

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
scrap($given_number, $asset): \OpenAPI\Client\Model\AssetSingle
```

Scrap an Asset

The updated asset will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$asset = new \OpenAPI\Client\Model\ScrapWrap(); // \OpenAPI\Client\Model\ScrapWrap | asset

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
| **asset** | [**\OpenAPI\Client\Model\ScrapWrap**](../Model/ScrapWrap.md)| asset | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetSingle**](../Model/AssetSingle.md)

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
sell($given_number, $asset): \OpenAPI\Client\Model\AssetSingle
```

Sell an Asset

Partial sell or full sell of an asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$asset = new \OpenAPI\Client\Model\SellWrap(); // \OpenAPI\Client\Model\SellWrap | asset

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
| **asset** | [**\OpenAPI\Client\Model\SellWrap**](../Model/SellWrap.md)| asset | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetSingle**](../Model/AssetSingle.md)

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
writeDown($given_number, $asset): \OpenAPI\Client\Model\AssetSingle
```

Write down an Asset

The updated asset will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$asset = new \OpenAPI\Client\Model\WriteDownWrap(); // \OpenAPI\Client\Model\WriteDownWrap | asset

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
| **asset** | [**\OpenAPI\Client\Model\WriteDownWrap**](../Model/WriteDownWrap.md)| asset | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetSingle**](../Model/AssetSingle.md)

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
writeUp($given_number, $asset): \OpenAPI\Client\Model\AssetSingle
```

Write up an Asset

The updated asset will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AssetsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$given_number = 'given_number_example'; // string | Asset number
$asset = new \OpenAPI\Client\Model\WriteUpWrap(); // \OpenAPI\Client\Model\WriteUpWrap | asset

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
| **asset** | [**\OpenAPI\Client\Model\WriteUpWrap**](../Model/WriteUpWrap.md)| asset | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetSingle**](../Model/AssetSingle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
