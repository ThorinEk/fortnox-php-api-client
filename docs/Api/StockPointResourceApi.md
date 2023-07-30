# FortnoxApi\StockPointResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appendStockLocations()**](StockPointResourceApi.md#appendStockLocations) | **POST** /api/warehouse/stockpoints-v1/{id} | Append stock locations |
| [**create()**](StockPointResourceApi.md#create) | **POST** /api/warehouse/stockpoints-v1 | Create stock point |
| [**delete()**](StockPointResourceApi.md#delete) | **DELETE** /api/warehouse/stockpoints-v1/{id} | Delete stock point |
| [**getAll()**](StockPointResourceApi.md#getAll) | **GET** /api/warehouse/stockpoints-v1 | List stock points |
| [**getByAmbiguousId()**](StockPointResourceApi.md#getByAmbiguousId) | **GET** /api/warehouse/stockpoints-v1/{id} | Get stock point |
| [**getMany()**](StockPointResourceApi.md#getMany) | **GET** /api/warehouse/stockpoints-v1/multi | Get stock points |
| [**getStockLocationsByAmbiguousId()**](StockPointResourceApi.md#getStockLocationsByAmbiguousId) | **GET** /api/warehouse/stockpoints-v1/{id}/stocklocations | Get stock locations |
| [**update()**](StockPointResourceApi.md#update) | **PUT** /api/warehouse/stockpoints-v1/{id} | Update stock point |


## `appendStockLocations()`

```php
appendStockLocations($id, $stock_locations): \FortnoxApi\Model\StockLocation[]
```

Append stock locations

Add new stock locations to specific <code>StockPoint</code>.   If you include an already existing stock location code, it will be ignored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\StockPointResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | stock point id
$stock_locations = array(new \FortnoxApi\Model\StockLocation()); // \FortnoxApi\Model\StockLocation[] | A list of <code>StockLocations</code> to append.

try {
    $result = $apiInstance->appendStockLocations($id, $stock_locations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockPointResourceApi->appendStockLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| stock point id | |
| **stock_locations** | [**\FortnoxApi\Model\StockLocation[]**](../Model/StockLocation.md)| A list of &lt;code&gt;StockLocations&lt;/code&gt; to append. | [optional] |

### Return type

[**\FortnoxApi\Model\StockLocation[]**](../Model/StockLocation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `create()`

```php
create($stock_point): \FortnoxApi\Model\StockPoint
```

Create stock point

Both <code>code</code> and <code>name</code> are mandatory.   If you want to set a custom delivery address for this stock point,  you must remember to set <code>usingCompanyAddress</code> to <code>false</code>.   Returns 400 <code>alreadyexists</code> if a stock point with same code already exists.   Returns 400 <code>duplicatestocklocations</code> if two or more stock locations have the same code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\StockPointResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_point = new \FortnoxApi\Model\StockPoint(); // \FortnoxApi\Model\StockPoint | stock point

try {
    $result = $apiInstance->create($stock_point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockPointResourceApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stock_point** | [**\FortnoxApi\Model\StockPoint**](../Model/StockPoint.md)| stock point | [optional] |

### Return type

[**\FortnoxApi\Model\StockPoint**](../Model/StockPoint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($id): \FortnoxApi\Model\StockPoint
```

Delete stock point

Note that it is not allowed to delete a stock point that is in use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\StockPointResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id

try {
    $result = $apiInstance->delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockPointResourceApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |

### Return type

[**\FortnoxApi\Model\StockPoint**](../Model/StockPoint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAll()`

```php
getAll($q, $state): \FortnoxApi\Model\StockPoint[]
```

List stock points

List stock points, optionally include a query parameter `q` to filter on stock point code or name.   Use query param `state` to filter on ACTIVE, INACTIVE or ALL (default is to include only ACTIVE stock points).   Stock locations are NOT included in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\StockPointResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | filters on stock point code or name.
$state = 'state_example'; // string | filter on stock point state

try {
    $result = $apiInstance->getAll($q, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockPointResourceApi->getAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| filters on stock point code or name. | [optional] |
| **state** | **string**| filter on stock point state | [optional] |

### Return type

[**\FortnoxApi\Model\StockPoint[]**](../Model/StockPoint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByAmbiguousId()`

```php
getByAmbiguousId($id): \FortnoxApi\Model\StockPoint
```

Get stock point

Get stock point by id or code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\StockPointResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | stock point code, or stock point id

try {
    $result = $apiInstance->getByAmbiguousId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockPointResourceApi->getByAmbiguousId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| stock point code, or stock point id | |

### Return type

[**\FortnoxApi\Model\StockPoint**](../Model/StockPoint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMany()`

```php
getMany($ids, $state): \FortnoxApi\Model\StockPoint[]
```

Get stock points

Get stock points by IDs.   Use query param `state` to filter on ACTIVE, INACTIVE or ALL (default is to include ALL stock points).   Stock locations are NOT included in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\StockPointResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array('ids_example'); // string[] | stock point ids (comma separated list of UUIDs)
$state = 'state_example'; // string | filter on <code>StockPointState</code>, default is to include ALL stock points.

try {
    $result = $apiInstance->getMany($ids, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockPointResourceApi->getMany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)| stock point ids (comma separated list of UUIDs) | [optional] |
| **state** | **string**| filter on &lt;code&gt;StockPointState&lt;/code&gt;, default is to include ALL stock points. | [optional] |

### Return type

[**\FortnoxApi\Model\StockPoint[]**](../Model/StockPoint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStockLocationsByAmbiguousId()`

```php
getStockLocationsByAmbiguousId($id, $q): \FortnoxApi\Model\StockLocation[]
```

Get stock locations

List stock locations for a specific stock point.   Optionally include a query parameter `q` to filter on stock location code or name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\StockPointResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | stock point id or code
$q = 'q_example'; // string | filters on stock location code or name.

try {
    $result = $apiInstance->getStockLocationsByAmbiguousId($id, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockPointResourceApi->getStockLocationsByAmbiguousId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| stock point id or code | |
| **q** | **string**| filters on stock location code or name. | [optional] |

### Return type

[**\FortnoxApi\Model\StockLocation[]**](../Model/StockLocation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `update()`

```php
update($id, $stock_point): \FortnoxApi\Model\StockPoint
```

Update stock point

Remember to supply the complete representation of stock point including stock locations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\StockPointResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id
$stock_point = new \FortnoxApi\Model\StockPoint(); // \FortnoxApi\Model\StockPoint | complete representation of stock point including stock locations.

try {
    $result = $apiInstance->update($id, $stock_point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockPointResourceApi->update: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |
| **stock_point** | [**\FortnoxApi\Model\StockPoint**](../Model/StockPoint.md)| complete representation of stock point including stock locations. | [optional] |

### Return type

[**\FortnoxApi\Model\StockPoint**](../Model/StockPoint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
