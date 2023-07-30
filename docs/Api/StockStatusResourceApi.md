# OpenAPI\Client\StockStatusResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStockBalance()**](StockStatusResourceApi.md#getStockBalance) | **GET** /api/warehouse/status-v1/stockbalance | Get stock balance |


## `getStockBalance()`

```php
getStockBalance($item_ids, $stock_point_codes): \OpenAPI\Client\Model\StockBalance[]
```

Get stock balance

Get stock balance for one or more items for each stockpoint  with (inbound- or outbound-) deliveries.   Returns a list of <code>itemId</code>, <code>stockPointCode</code>,  <code>availableStock</code>, <code>inStock</code>.   (The difference between <code>availableStock</code> and <code>inStock</code>  is the reserved amount.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockStatusResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_ids = array('item_ids_example'); // string[] | A comma-separated list of itemIds.
$stock_point_codes = array('stock_point_codes_example'); // string[] | Optional filter on stock point codes (comma-separated).

try {
    $result = $apiInstance->getStockBalance($item_ids, $stock_point_codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockStatusResourceApi->getStockBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_ids** | [**string[]**](../Model/string.md)| A comma-separated list of itemIds. | [optional] |
| **stock_point_codes** | [**string[]**](../Model/string.md)| Optional filter on stock point codes (comma-separated). | [optional] |

### Return type

[**\OpenAPI\Client\Model\StockBalance[]**](../Model/StockBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
