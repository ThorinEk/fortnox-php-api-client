# OpenAPI\Client\StockTakingResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addStockTakingRows()**](StockTakingResourceApi.md#addStockTakingRows) | **POST** /api/warehouse/stocktaking-v1/{id}/rows | Add rows |
| [**addStockTakingRowsByFilter()**](StockTakingResourceApi.md#addStockTakingRowsByFilter) | **POST** /api/warehouse/stocktaking-v1/{id}/addrows | Add rows by filter |
| [**createStockTakingResource()**](StockTakingResourceApi.md#createStockTakingResource) | **POST** /api/warehouse/stocktaking-v1 | Create stock taking |
| [**deleteStockTaking()**](StockTakingResourceApi.md#deleteStockTaking) | **DELETE** /api/warehouse/stocktaking-v1/{id} | Delete Stock Taking document |
| [**deleteStockTakingRow()**](StockTakingResourceApi.md#deleteStockTakingRow) | **DELETE** /api/warehouse/stocktaking-v1/{id}/rows/{rowId:.*} | Delete row |
| [**deleteStockTakingRowByFilter()**](StockTakingResourceApi.md#deleteStockTakingRowByFilter) | **DELETE** /api/warehouse/stocktaking-v1/{id}/rows | Delete rows by filter |
| [**getAllStockTakingResource()**](StockTakingResourceApi.md#getAllStockTakingResource) | **GET** /api/warehouse/stocktaking-v1 | List stock takings |
| [**getCandidateRows()**](StockTakingResourceApi.md#getCandidateRows) | **GET** /api/warehouse/stocktaking-v1/{id}/candidates | Get candidate rows |
| [**getRows()**](StockTakingResourceApi.md#getRows) | **GET** /api/warehouse/stocktaking-v1/{id}/rows | Get Stock Taking Rows |
| [**getStockTakingResource()**](StockTakingResourceApi.md#getStockTakingResource) | **GET** /api/warehouse/stocktaking-v1/{id} | Get Stock Taking document |
| [**releaseStockTakingResource()**](StockTakingResourceApi.md#releaseStockTakingResource) | **PUT** /api/warehouse/stocktaking-v1/{id}/release | Release Stock Taking document |
| [**updateStockTakingResource()**](StockTakingResourceApi.md#updateStockTakingResource) | **PUT** /api/warehouse/stocktaking-v1/{id} | Update a stock taking |
| [**voidStockTaking()**](StockTakingResourceApi.md#voidStockTaking) | **PUT** /api/warehouse/stocktaking-v1/{id}/void | Void Stock Taking document |


## `addStockTakingRows()`

```php
addStockTakingRows($id, $rows)
```

Add rows

Add rows to a stock taking.  If you add an already existing row noting happens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.
$rows = array(new \OpenAPI\Client\Model\StockTakingRow()); // \OpenAPI\Client\Model\StockTakingRow[] | A list of <code>StockTakingRows</code>.

try {
    $apiInstance->addStockTakingRows($id, $rows);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->addStockTakingRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |
| **rows** | [**\OpenAPI\Client\Model\StockTakingRow[]**](../Model/StockTakingRow.md)| A list of &lt;code&gt;StockTakingRows&lt;/code&gt;. | [optional] |

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

## `addStockTakingRowsByFilter()`

```php
addStockTakingRowsByFilter($id, $item_ids, $supplier_numbers, $stock_point_ids, $stock_location_ids, $transaction_date, $item_id_search, $item_description_search, $exclude_zero_balance_items, $exclude_non_inbound_items): int
```

Add rows by filter

Add all matching candidate rows to a stock taking, as specified by filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.
$item_ids = array('item_ids_example'); // string[]
$supplier_numbers = array('supplier_numbers_example'); // string[]
$stock_point_ids = array('stock_point_ids_example'); // string[]
$stock_location_ids = array('stock_location_ids_example'); // string[]
$transaction_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$item_id_search = 'item_id_search_example'; // string
$item_description_search = 'item_description_search_example'; // string
$exclude_zero_balance_items = True; // bool
$exclude_non_inbound_items = True; // bool

try {
    $result = $apiInstance->addStockTakingRowsByFilter($id, $item_ids, $supplier_numbers, $stock_point_ids, $stock_location_ids, $transaction_date, $item_id_search, $item_description_search, $exclude_zero_balance_items, $exclude_non_inbound_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->addStockTakingRowsByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |
| **item_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_numbers** | [**string[]**](../Model/string.md)|  | [optional] |
| **stock_point_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **stock_location_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **transaction_date** | **\DateTime**|  | [optional] |
| **item_id_search** | **string**|  | [optional] |
| **item_description_search** | **string**|  | [optional] |
| **exclude_zero_balance_items** | **bool**|  | [optional] |
| **exclude_non_inbound_items** | **bool**|  | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStockTakingResource()`

```php
createStockTakingResource($stock_taking): \OpenAPI\Client\Model\StockTaking
```

Create stock taking

Create a new Stock Taking document.  The only mandatory fields are <code>name</code> and <code>responsible</code>.  <code>state</code> will be set to <code>planning</code> for a newly created document.   The <code>date</code>-field is not mandatory for documents in state <code>planning</code>.  However, when you update the state to <code>started</code> you have to provide a date.   <code>name</code> is a descriptive name of the stock taking.   <code>responsible</code> is the name of the responsible for the stock taking.   <code>rows</code> are added after creation by using the addRows-method.   <code>projectId</code> and <code>costCenterCode</code> are used for book-keeping, when the  Stock Taking document is released.   The field <code>usingStockPoints</code> is set from Warehouse system settings upon creation.  If multiple stockpoints is used, then the rows will be per item-stockPoint-stockLocation.  If multiple stockpoints is NOT used, then the rows will be per item-stockLocation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stock_taking = new \OpenAPI\Client\Model\StockTaking(); // \OpenAPI\Client\Model\StockTaking | stock taking

try {
    $result = $apiInstance->createStockTakingResource($stock_taking);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->createStockTakingResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stock_taking** | [**\OpenAPI\Client\Model\StockTaking**](../Model/StockTaking.md)| stock taking | [optional] |

### Return type

[**\OpenAPI\Client\Model\StockTaking**](../Model/StockTaking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStockTaking()`

```php
deleteStockTaking($id)
```

Delete Stock Taking document

Permanently deletes a Stock Taking document and its rows.   Only for documents in state <code>planning</code> and <code>started</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.

try {
    $apiInstance->deleteStockTaking($id);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->deleteStockTaking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |

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

## `deleteStockTakingRow()`

```php
deleteStockTakingRow($id, $row_id): int
```

Delete row

Remove single row by id from the Stock Taking document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.
$row_id = 'row_id_example'; // string | row id

try {
    $result = $apiInstance->deleteStockTakingRow($id, $row_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->deleteStockTakingRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |
| **row_id** | **string**| row id | |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStockTakingRowByFilter()`

```php
deleteStockTakingRowByFilter($id, $item_ids, $supplier_numbers, $stock_point_ids, $stock_location_ids, $transaction_date, $item_id_search, $item_description_search, $exclude_zero_balance_items): int
```

Delete rows by filter

Remove all rows matching the filter parameters from the Stock Taking document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.
$item_ids = array('item_ids_example'); // string[]
$supplier_numbers = array('supplier_numbers_example'); // string[]
$stock_point_ids = array('stock_point_ids_example'); // string[]
$stock_location_ids = array('stock_location_ids_example'); // string[]
$transaction_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$item_id_search = 'item_id_search_example'; // string
$item_description_search = 'item_description_search_example'; // string
$exclude_zero_balance_items = True; // bool

try {
    $result = $apiInstance->deleteStockTakingRowByFilter($id, $item_ids, $supplier_numbers, $stock_point_ids, $stock_location_ids, $transaction_date, $item_id_search, $item_description_search, $exclude_zero_balance_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->deleteStockTakingRowByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |
| **item_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_numbers** | [**string[]**](../Model/string.md)|  | [optional] |
| **stock_point_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **stock_location_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **transaction_date** | **\DateTime**|  | [optional] |
| **item_id_search** | **string**|  | [optional] |
| **item_description_search** | **string**|  | [optional] |
| **exclude_zero_balance_items** | **bool**|  | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllStockTakingResource()`

```php
getAllStockTakingResource($state, $item_id): \OpenAPI\Client\Model\StockTaking[]
```

List stock takings

<p>      Sortable fields:      <code>id</code>,      <code>name</code>,      <code>date</code>,      <code>responsible</code>,      <code>state</code>  </p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$state = 'state_example'; // string | Include only stock takings with the given state.
$item_id = 'item_id_example'; // string | Include only stock takings with the given item.

try {
    $result = $apiInstance->getAllStockTakingResource($state, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->getAllStockTakingResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **state** | **string**| Include only stock takings with the given state. | [optional] |
| **item_id** | **string**| Include only stock takings with the given item. | [optional] |

### Return type

[**\OpenAPI\Client\Model\StockTaking[]**](../Model/StockTaking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCandidateRows()`

```php
getCandidateRows($id, $item_ids, $supplier_numbers, $stock_point_ids, $stock_location_ids, $transaction_date, $item_id_search, $item_description_search, $exclude_zero_balance_items, $include_non_inbound_items): \OpenAPI\Client\Model\StockTakingRow[]
```

Get candidate rows

A candidate row is a combination of itemId, stockPointId and stockLocationId  that can be added to the Stock Taking document.   Rows already added to the Stock Taking are excluded from this list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.
$item_ids = array('item_ids_example'); // string[]
$supplier_numbers = array('supplier_numbers_example'); // string[]
$stock_point_ids = array('stock_point_ids_example'); // string[]
$stock_location_ids = array('stock_location_ids_example'); // string[]
$transaction_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$item_id_search = 'item_id_search_example'; // string
$item_description_search = 'item_description_search_example'; // string
$exclude_zero_balance_items = True; // bool
$include_non_inbound_items = True; // bool | Include items that do not exist on inbound deliveries.

try {
    $result = $apiInstance->getCandidateRows($id, $item_ids, $supplier_numbers, $stock_point_ids, $stock_location_ids, $transaction_date, $item_id_search, $item_description_search, $exclude_zero_balance_items, $include_non_inbound_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->getCandidateRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |
| **item_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_numbers** | [**string[]**](../Model/string.md)|  | [optional] |
| **stock_point_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **stock_location_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **transaction_date** | **\DateTime**|  | [optional] |
| **item_id_search** | **string**|  | [optional] |
| **item_description_search** | **string**|  | [optional] |
| **exclude_zero_balance_items** | **bool**|  | [optional] |
| **include_non_inbound_items** | **bool**| Include items that do not exist on inbound deliveries. | [optional] |

### Return type

[**\OpenAPI\Client\Model\StockTakingRow[]**](../Model/StockTakingRow.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRows()`

```php
getRows($id, $item_ids, $supplier_numbers, $stock_point_ids, $stock_location_ids, $transaction_date, $item_id_search, $item_description_search, $exclude_zero_balance_items, $secondarysortby, $secondaryorder, $state_filter, $starting_row_no, $starting_item_id): \OpenAPI\Client\Model\StockTakingRow[]
```

Get Stock Taking Rows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.
$item_ids = array('item_ids_example'); // string[]
$supplier_numbers = array('supplier_numbers_example'); // string[]
$stock_point_ids = array('stock_point_ids_example'); // string[]
$stock_location_ids = array('stock_location_ids_example'); // string[]
$transaction_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$item_id_search = 'item_id_search_example'; // string
$item_description_search = 'item_description_search_example'; // string
$exclude_zero_balance_items = True; // bool
$secondarysortby = 'secondarysortby_example'; // string | Secondary sorting column
$secondaryorder = 'secondaryorder_example'; // string | Secondary sorting order
$state_filter = 'state_filter_example'; // string
$starting_row_no = 56; // int | the row number to start the search from, used with startingItemId to jump to specific rows, can be empty
$starting_item_id = 'starting_item_id_example'; // string | the itemId that should be on top of the rows list (used to jump to specific row), can be empty

try {
    $result = $apiInstance->getRows($id, $item_ids, $supplier_numbers, $stock_point_ids, $stock_location_ids, $transaction_date, $item_id_search, $item_description_search, $exclude_zero_balance_items, $secondarysortby, $secondaryorder, $state_filter, $starting_row_no, $starting_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->getRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |
| **item_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_numbers** | [**string[]**](../Model/string.md)|  | [optional] |
| **stock_point_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **stock_location_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **transaction_date** | **\DateTime**|  | [optional] |
| **item_id_search** | **string**|  | [optional] |
| **item_description_search** | **string**|  | [optional] |
| **exclude_zero_balance_items** | **bool**|  | [optional] |
| **secondarysortby** | **string**| Secondary sorting column | [optional] |
| **secondaryorder** | **string**| Secondary sorting order | [optional] |
| **state_filter** | **string**|  | [optional] |
| **starting_row_no** | **int**| the row number to start the search from, used with startingItemId to jump to specific rows, can be empty | [optional] |
| **starting_item_id** | **string**| the itemId that should be on top of the rows list (used to jump to specific row), can be empty | [optional] |

### Return type

[**\OpenAPI\Client\Model\StockTakingRow[]**](../Model/StockTakingRow.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStockTakingResource()`

```php
getStockTakingResource($id): \OpenAPI\Client\Model\StockTaking
```

Get Stock Taking document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.

try {
    $result = $apiInstance->getStockTakingResource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->getStockTakingResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |

### Return type

[**\OpenAPI\Client\Model\StockTaking**](../Model/StockTaking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseStockTakingResource()`

```php
releaseStockTakingResource($id)
```

Release Stock Taking document

The document will be locked and bookkept.  The Stock Taking document state will be set to <code>completed</code>.  The stock amount will be adjusted according to the stock taken quantity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.

try {
    $apiInstance->releaseStockTakingResource($id);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->releaseStockTakingResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |

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

## `updateStockTakingResource()`

```php
updateStockTakingResource($id, $stock_taking): \OpenAPI\Client\Model\StockTaking
```

Update a stock taking

Updates can only be done when state is <code>planning</code> or <code>started</code>.   All updatable fields (<code>date</code>, <code>name</code>, <code>responsible</code>,  <code>state</code>, <code>sortingId</code>, <code>costCenterCode</code>, <code>projectId</code>)  in the document head are set to supplied values.   You cannot set <code>state</code> to <code>completed</code> or <code>voided</code>. Use endpoints  release or void for this.   The <code>date</code>-field is mandatory for documents in state <code>started</code>.   When state is <code>started</code> you use this endpoint for setting the stock taken quantity.  Only existing rows can be updated - no new rows will be created (use the addRows endpoint for this).  Only the supplied rows will be updated. I.e. you don't have to send in <strong>all</strong>  document rows - just supply the rows you want to set stockTakenQuantity for. Just make sure  to always include all the fields from the document head as mentioned above.   The mandatory fields on the (optionally supplied) rows are: <code>itemId</code>,  <code>stockPointId</code>, <code>stockLocationId</code>.  Fields <code>countedBy</code> and <code>stockTakenQuantity</code> are technically  not mandatory, but will be set to null if you don't supply them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.
$stock_taking = new \OpenAPI\Client\Model\StockTaking(); // \OpenAPI\Client\Model\StockTaking | stock taking

try {
    $result = $apiInstance->updateStockTakingResource($id, $stock_taking);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->updateStockTakingResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |
| **stock_taking** | [**\OpenAPI\Client\Model\StockTaking**](../Model/StockTaking.md)| stock taking | [optional] |

### Return type

[**\OpenAPI\Client\Model\StockTaking**](../Model/StockTaking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidStockTaking()`

```php
voidStockTaking($id)
```

Void Stock Taking document

Sets the Stock Taking document state to <code>voided</code>.   Only documents in state <code>planning</code> and <code>started</code>  can be voided. A <code>completed</code> document may not be voided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StockTakingResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Stock Taking document id.

try {
    $apiInstance->voidStockTaking($id);
} catch (Exception $e) {
    echo 'Exception when calling StockTakingResourceApi->voidStockTaking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Stock Taking document id. | |

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
