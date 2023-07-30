# FortnoxApi\PurchaseOrderResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchUpdateResponseState()**](PurchaseOrderResourceApi.md#batchUpdateResponseState) | **PUT** /api/warehouse/purchaseorders-v1/response | Update response states |
| [**createPurchaseOrderResource()**](PurchaseOrderResourceApi.md#createPurchaseOrderResource) | **POST** /api/warehouse/purchaseorders-v1 | Create Purchase Order |
| [**getAllPurchaseOrderResource()**](PurchaseOrderResourceApi.md#getAllPurchaseOrderResource) | **GET** /api/warehouse/purchaseorders-v1 | List Purchase Orders |
| [**getAttachedNotes()**](PurchaseOrderResourceApi.md#getAttachedNotes) | **GET** /api/warehouse/purchaseorders-v1/{id}/notes | Get notes |
| [**getCsvReport()**](PurchaseOrderResourceApi.md#getCsvReport) | **GET** /api/warehouse/purchaseorders-v1/csv | Get CSV list of Purchase Orders |
| [**getMatchedDocuments()**](PurchaseOrderResourceApi.md#getMatchedDocuments) | **GET** /api/warehouse/purchaseorders-v1/{id}/matches | List matched documents |
| [**getPurchaseOrderResource()**](PurchaseOrderResourceApi.md#getPurchaseOrderResource) | **GET** /api/warehouse/purchaseorders-v1/{id} | Get Purchase Order |
| [**sendPurchaseOrder()**](PurchaseOrderResourceApi.md#sendPurchaseOrder) | **POST** /api/warehouse/purchaseorders-v1/{id}/send | Send purchase order via email |
| [**sendPurchaseOrders()**](PurchaseOrderResourceApi.md#sendPurchaseOrders) | **POST** /api/warehouse/purchaseorders-v1/sendpurchaseorders | Sends multiple purchase orders via email |
| [**setDropshipManuallyCompleted()**](PurchaseOrderResourceApi.md#setDropshipManuallyCompleted) | **PUT** /api/warehouse/purchaseorders-v1/{id}/dropshipcomplete | Manually complete dropship order |
| [**setManuallyCompleted()**](PurchaseOrderResourceApi.md#setManuallyCompleted) | **PUT** /api/warehouse/purchaseorders-v1/{id}/complete | Manually complete Purchase Order |
| [**updatePurchaseOrderResource()**](PurchaseOrderResourceApi.md#updatePurchaseOrderResource) | **PUT** /api/warehouse/purchaseorders-v1/{id} | Update Purchase Order |
| [**updateResponseState()**](PurchaseOrderResourceApi.md#updateResponseState) | **PUT** /api/warehouse/purchaseorders-v1/{id}/response | Update response state |
| [**voidDocumentPurchaseOrderResource()**](PurchaseOrderResourceApi.md#voidDocumentPurchaseOrderResource) | **PUT** /api/warehouse/purchaseorders-v1/{id}/void | Void Purchase Order |


## `batchUpdateResponseState()`

```php
batchUpdateResponseState($ids, $response_state_change): \FortnoxApi\Model\PurchaseOrder[]
```

Update response states

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array(56); // int[] | List of purchase order ids.
$response_state_change = new \FortnoxApi\Model\ResponseStateChange(); // \FortnoxApi\Model\ResponseStateChange | The new response state.

try {
    $result = $apiInstance->batchUpdateResponseState($ids, $response_state_change);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->batchUpdateResponseState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)| List of purchase order ids. | [optional] |
| **response_state_change** | [**\FortnoxApi\Model\ResponseStateChange**](../Model/ResponseStateChange.md)| The new response state. | [optional] |

### Return type

[**\FortnoxApi\Model\PurchaseOrder[]**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPurchaseOrderResource()`

```php
createPurchaseOrderResource($purchase_order): \FortnoxApi\Model\PurchaseOrder
```

Create Purchase Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchase_order = new \FortnoxApi\Model\PurchaseOrder(); // \FortnoxApi\Model\PurchaseOrder | <code>PurchaseOrder</code> document.

try {
    $result = $apiInstance->createPurchaseOrderResource($purchase_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->createPurchaseOrderResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | [**\FortnoxApi\Model\PurchaseOrder**](../Model/PurchaseOrder.md)| &lt;code&gt;PurchaseOrder&lt;/code&gt; document. | [optional] |

### Return type

[**\FortnoxApi\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPurchaseOrderResource()`

```php
getAllPurchaseOrderResource($q, $supplier_number, $state, $item_id, $purchase_type, $internal_reference, $note): \FortnoxApi\Model\PurchaseOrder[]
```

List Purchase Orders

<p>      List purchase orders matching the given parameters.  </p>  <p>      Sortable fields:      <code>id</code>,      <code>supplier_number</code>,      <code>order_date</code>,      <code>internal_reference</code>,      <code>response_state</code>,      <code>delivery_date</code>  </p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | Include only documents where `id` or `internalReference`-field contains the given text (case-insensitive).
$supplier_number = 'supplier_number_example'; // string | Include only documents with the given `supplierNumber`.
$state = 'state_example'; // string | Include only documents with the given `purchaseOrderState`.
$item_id = 'item_id_example'; // string | Include only documents with the given `itemId`.
$purchase_type = 'purchase_type_example'; // string | Include only documents with the given `purchaseType`
$internal_reference = 'internal_reference_example'; // string | Include only documents where `internalReference' contains the given text (case-insensitive).
$note = 'note_example'; // string | Include only documents where `note`-field contains the given text (case-insensitive).

try {
    $result = $apiInstance->getAllPurchaseOrderResource($q, $supplier_number, $state, $item_id, $purchase_type, $internal_reference, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->getAllPurchaseOrderResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Include only documents where &#x60;id&#x60; or &#x60;internalReference&#x60;-field contains the given text (case-insensitive). | [optional] |
| **supplier_number** | **string**| Include only documents with the given &#x60;supplierNumber&#x60;. | [optional] |
| **state** | **string**| Include only documents with the given &#x60;purchaseOrderState&#x60;. | [optional] |
| **item_id** | **string**| Include only documents with the given &#x60;itemId&#x60;. | [optional] |
| **purchase_type** | **string**| Include only documents with the given &#x60;purchaseType&#x60; | [optional] |
| **internal_reference** | **string**| Include only documents where &#x60;internalReference&#39; contains the given text (case-insensitive). | [optional] |
| **note** | **string**| Include only documents where &#x60;note&#x60;-field contains the given text (case-insensitive). | [optional] |

### Return type

[**\FortnoxApi\Model\PurchaseOrder[]**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachedNotes()`

```php
getAttachedNotes($id): \FortnoxApi\Model\PurchaseOrderRowNote[]
```

Get notes

Get notes for a purchase order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Purchase order id.

try {
    $result = $apiInstance->getAttachedNotes($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->getAttachedNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Purchase order id. | |

### Return type

[**\FortnoxApi\Model\PurchaseOrderRowNote[]**](../Model/PurchaseOrderRowNote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCsvReport()`

```php
getCsvReport($q, $supplier_number, $state, $item_id, $purchase_type, $internal_reference, $note, $show_purchase_type_column): string
```

Get CSV list of Purchase Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | Include only documents where `id` or `internalReference`-field contains the given text (case-insensitive).
$supplier_number = 'supplier_number_example'; // string | Include only documents with the given `supplierNumber`.
$state = 'state_example'; // string | Include only documents with the given `purchaseOrderState`.
$item_id = 'item_id_example'; // string | Include only documents with the given `itemId`.
$purchase_type = 'purchase_type_example'; // string | Include only documents with the given `purchaseType`
$internal_reference = 'internal_reference_example'; // string | Include only documents where `internalReference' contains the given text (case-insensitive).
$note = 'note_example'; // string | Include only documents where `note`-field contains the given text (case-insensitive).
$show_purchase_type_column = True; // bool | True to include the purchase type column, default is false.

try {
    $result = $apiInstance->getCsvReport($q, $supplier_number, $state, $item_id, $purchase_type, $internal_reference, $note, $show_purchase_type_column);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->getCsvReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Include only documents where &#x60;id&#x60; or &#x60;internalReference&#x60;-field contains the given text (case-insensitive). | [optional] |
| **supplier_number** | **string**| Include only documents with the given &#x60;supplierNumber&#x60;. | [optional] |
| **state** | **string**| Include only documents with the given &#x60;purchaseOrderState&#x60;. | [optional] |
| **item_id** | **string**| Include only documents with the given &#x60;itemId&#x60;. | [optional] |
| **purchase_type** | **string**| Include only documents with the given &#x60;purchaseType&#x60; | [optional] |
| **internal_reference** | **string**| Include only documents where &#x60;internalReference&#39; contains the given text (case-insensitive). | [optional] |
| **note** | **string**| Include only documents where &#x60;note&#x60;-field contains the given text (case-insensitive). | [optional] |
| **show_purchase_type_column** | **bool**| True to include the purchase type column, default is false. | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMatchedDocuments()`

```php
getMatchedDocuments($id): \FortnoxApi\Model\DocumentReference[]
```

List matched documents

Get a list of <code>DocumentReference</code> of linked/connected purchase orders to incoming goods and/or invoice document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Purchase order id.

try {
    $result = $apiInstance->getMatchedDocuments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->getMatchedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Purchase order id. | |

### Return type

[**\FortnoxApi\Model\DocumentReference[]**](../Model/DocumentReference.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseOrderResource()`

```php
getPurchaseOrderResource($id, $ignore_incoming_goods_id): \FortnoxApi\Model\PurchaseOrder
```

Get Purchase Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Purchase order id.
$ignore_incoming_goods_id = 56; // int | used for calculating the remaining ordered quantity. null will take the received quantity from all incoming goods

try {
    $result = $apiInstance->getPurchaseOrderResource($id, $ignore_incoming_goods_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->getPurchaseOrderResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Purchase order id. | |
| **ignore_incoming_goods_id** | **int**| used for calculating the remaining ordered quantity. null will take the received quantity from all incoming goods | [optional] |

### Return type

[**\FortnoxApi\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPurchaseOrder()`

```php
sendPurchaseOrder($id, $settings)
```

Send purchase order via email

Sends the purchase order with the specified <code>id</code> to the recipient and sets the purchase order state to SENT

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Purchase order id.
$settings = new \FortnoxApi\Model\PurchaseOrderMailSettings(); // \FortnoxApi\Model\PurchaseOrderMailSettings | see <code>PurchaseOrderMailSettings</code>

try {
    $apiInstance->sendPurchaseOrder($id, $settings);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->sendPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Purchase order id. | |
| **settings** | [**\FortnoxApi\Model\PurchaseOrderMailSettings**](../Model/PurchaseOrderMailSettings.md)| see &lt;code&gt;PurchaseOrderMailSettings&lt;/code&gt; | [optional] |

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

## `sendPurchaseOrders()`

```php
sendPurchaseOrders($purchase_order_ids)
```

Sends multiple purchase orders via email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchase_order_ids = array(56); // int[] | List of Purchase order ids.

try {
    $apiInstance->sendPurchaseOrders($purchase_order_ids);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->sendPurchaseOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order_ids** | [**int[]**](../Model/int.md)| List of Purchase order ids. | [optional] |

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

## `setDropshipManuallyCompleted()`

```php
setDropshipManuallyCompleted($id): \FortnoxApi\Model\ReleaseParentOrder
```

Manually complete dropship order

The dropship order will be treated as fully received.  Any remaining quantity will be ignored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Purchase order id.

try {
    $result = $apiInstance->setDropshipManuallyCompleted($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->setDropshipManuallyCompleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Purchase order id. | |

### Return type

[**\FortnoxApi\Model\ReleaseParentOrder**](../Model/ReleaseParentOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setManuallyCompleted()`

```php
setManuallyCompleted($id)
```

Manually complete Purchase Order

The purchase order will be treated as fully received.  Any remaining quantity will be ignored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Purchase order id.

try {
    $apiInstance->setManuallyCompleted($id);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->setManuallyCompleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Purchase order id. | |

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

## `updatePurchaseOrderResource()`

```php
updatePurchaseOrderResource($id, $purchase_order): \FortnoxApi\Model\PurchaseOrder
```

Update Purchase Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Purchase order id.
$purchase_order = new \FortnoxApi\Model\PurchaseOrder(); // \FortnoxApi\Model\PurchaseOrder | The <code>PurchaseOrder</code> document.

try {
    $result = $apiInstance->updatePurchaseOrderResource($id, $purchase_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->updatePurchaseOrderResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Purchase order id. | |
| **purchase_order** | [**\FortnoxApi\Model\PurchaseOrder**](../Model/PurchaseOrder.md)| The &lt;code&gt;PurchaseOrder&lt;/code&gt; document. | [optional] |

### Return type

[**\FortnoxApi\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateResponseState()`

```php
updateResponseState($id, $response_state_change): \FortnoxApi\Model\PurchaseOrder
```

Update response state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Purchase order id.
$response_state_change = new \FortnoxApi\Model\ResponseStateChange(); // \FortnoxApi\Model\ResponseStateChange | The new response state.

try {
    $result = $apiInstance->updateResponseState($id, $response_state_change);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->updateResponseState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Purchase order id. | |
| **response_state_change** | [**\FortnoxApi\Model\ResponseStateChange**](../Model/ResponseStateChange.md)| The new response state. | [optional] |

### Return type

[**\FortnoxApi\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidDocumentPurchaseOrderResource()`

```php
voidDocumentPurchaseOrderResource($id)
```

Void Purchase Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PurchaseOrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Purchase order id.

try {
    $apiInstance->voidDocumentPurchaseOrderResource($id);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderResourceApi->voidDocumentPurchaseOrderResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Purchase order id. | |

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
