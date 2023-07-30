# OpenAPI\Client\IncomingGoodsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**completed()**](IncomingGoodsResourceApi.md#completed) | **PUT** /api/warehouse/incominggoods-v1/{id}/completed | Complete Incoming Goods document |
| [**createIncomingGoodsResource()**](IncomingGoodsResourceApi.md#createIncomingGoodsResource) | **POST** /api/warehouse/incominggoods-v1/ | Create Incoming Goods document |
| [**getAllIncomingGoodsResource()**](IncomingGoodsResourceApi.md#getAllIncomingGoodsResource) | **GET** /api/warehouse/incominggoods-v1/ | List Incoming Goods Documents |
| [**getIncomingGoodsResource()**](IncomingGoodsResourceApi.md#getIncomingGoodsResource) | **GET** /api/warehouse/incominggoods-v1/{id} | Get Incoming Goods document |
| [**releaseIncomingGoodsResource()**](IncomingGoodsResourceApi.md#releaseIncomingGoodsResource) | **PUT** /api/warehouse/incominggoods-v1/{id}/release | Release Incoming Goods document |
| [**saveIncomingGoodsResource()**](IncomingGoodsResourceApi.md#saveIncomingGoodsResource) | **PUT** /api/warehouse/incominggoods-v1/{id} | Update Incoming Goods document |
| [**voidDocumentIncomingGoodsResource()**](IncomingGoodsResourceApi.md#voidDocumentIncomingGoodsResource) | **PUT** /api/warehouse/incominggoods-v1/{id}/void | Void Incoming Goods document |


## `completed()`

```php
completed($id, $booking_date)
```

Complete Incoming Goods document

Mark a released Incoming Goods document as Completed.  Bookkeeping will be finalized.  A Completed Incoming Goods document cannot be matched against  any more Supplier Invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncomingGoodsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Incoming goods document id.
$booking_date = 'booking_date_example'; // string | Date for bookkeeping in format `\"YYYY-MM-DD\"`. Must be between document's release date (inclusive) and today's date (inclusive).

try {
    $apiInstance->completed($id, $booking_date);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsResourceApi->completed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Incoming goods document id. | |
| **booking_date** | **string**| Date for bookkeeping in format &#x60;\&quot;YYYY-MM-DD\&quot;&#x60;. Must be between document&#39;s release date (inclusive) and today&#39;s date (inclusive). | [optional] |

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

## `createIncomingGoodsResource()`

```php
createIncomingGoodsResource($incoming_goods): \OpenAPI\Client\Model\IncomingGoods
```

Create Incoming Goods document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncomingGoodsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$incoming_goods = new \OpenAPI\Client\Model\IncomingGoods(); // \OpenAPI\Client\Model\IncomingGoods | The <code>IncomingGoods</code> document.

try {
    $result = $apiInstance->createIncomingGoodsResource($incoming_goods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsResourceApi->createIncomingGoodsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incoming_goods** | [**\OpenAPI\Client\Model\IncomingGoods**](../Model/IncomingGoods.md)| The &lt;code&gt;IncomingGoods&lt;/code&gt; document. | [optional] |

### Return type

[**\OpenAPI\Client\Model\IncomingGoods**](../Model/IncomingGoods.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllIncomingGoodsResource()`

```php
getAllIncomingGoodsResource($released, $completed, $voided, $supplier_number, $item_id, $note, $delivery_note, $q): \OpenAPI\Client\Model\IncomingGoodsListRow[]
```

List Incoming Goods Documents

<p>      List incoming goods documents matching the given parameters.  </p>  <p>      Sortable fields:      <code>id</code>,      <code>has_delivery_note</code>,      <code>delivery_note_id</code>,      <code>supplier_number</code>,      <code>date</code>  </p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncomingGoodsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$released = True; // bool | `true` to include only released documents.  `false` to include only non-released documents.
$completed = True; // bool | `true` to include only completed documents.  `false` to include only non-completed documents.
$voided = True; // bool | `true` to include only voided documents.  `false` to include only non-voided documents.
$supplier_number = 'supplier_number_example'; // string | Include only documents with the given `supplierNumber`.
$item_id = 'item_id_example'; // string | Include only documents with the given `itemId`.
$note = 'note_example'; // string | Include only documents where `note`-field contains the given text (case-insensitive).
$delivery_note = 'delivery_note_example'; // string | Include only documents where `deliveryNote`-field contains the given text (case-insensitive).
$q = 'q_example'; // string | Include only documents where `id` or `deliveryNote`-field contains the given text (case-insensitive).

try {
    $result = $apiInstance->getAllIncomingGoodsResource($released, $completed, $voided, $supplier_number, $item_id, $note, $delivery_note, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsResourceApi->getAllIncomingGoodsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **released** | **bool**| &#x60;true&#x60; to include only released documents.  &#x60;false&#x60; to include only non-released documents. | [optional] |
| **completed** | **bool**| &#x60;true&#x60; to include only completed documents.  &#x60;false&#x60; to include only non-completed documents. | [optional] |
| **voided** | **bool**| &#x60;true&#x60; to include only voided documents.  &#x60;false&#x60; to include only non-voided documents. | [optional] |
| **supplier_number** | **string**| Include only documents with the given &#x60;supplierNumber&#x60;. | [optional] |
| **item_id** | **string**| Include only documents with the given &#x60;itemId&#x60;. | [optional] |
| **note** | **string**| Include only documents where &#x60;note&#x60;-field contains the given text (case-insensitive). | [optional] |
| **delivery_note** | **string**| Include only documents where &#x60;deliveryNote&#x60;-field contains the given text (case-insensitive). | [optional] |
| **q** | **string**| Include only documents where &#x60;id&#x60; or &#x60;deliveryNote&#x60;-field contains the given text (case-insensitive). | [optional] |

### Return type

[**\OpenAPI\Client\Model\IncomingGoodsListRow[]**](../Model/IncomingGoodsListRow.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncomingGoodsResource()`

```php
getIncomingGoodsResource($id, $ignore_supplier_invoice_id): \OpenAPI\Client\Model\IncomingGoods
```

Get Incoming Goods document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncomingGoodsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Incoming goods document id.
$ignore_supplier_invoice_id = 56; // int | This Supplier Invoice id will be excluded when calculating the takenQuantity.

try {
    $result = $apiInstance->getIncomingGoodsResource($id, $ignore_supplier_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsResourceApi->getIncomingGoodsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Incoming goods document id. | |
| **ignore_supplier_invoice_id** | **int**| This Supplier Invoice id will be excluded when calculating the takenQuantity. | [optional] |

### Return type

[**\OpenAPI\Client\Model\IncomingGoods**](../Model/IncomingGoods.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseIncomingGoodsResource()`

```php
releaseIncomingGoodsResource($id)
```

Release Incoming Goods document

The document will be locked and bookkept.  The inbound deliveries will affect available stock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncomingGoodsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Incoming goods document id.

try {
    $apiInstance->releaseIncomingGoodsResource($id);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsResourceApi->releaseIncomingGoodsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Incoming goods document id. | |

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

## `saveIncomingGoodsResource()`

```php
saveIncomingGoodsResource($id, $incoming_goods): \OpenAPI\Client\Model\IncomingGoods
```

Update Incoming Goods document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncomingGoodsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Incoming goods document id.
$incoming_goods = new \OpenAPI\Client\Model\IncomingGoods(); // \OpenAPI\Client\Model\IncomingGoods | The <code>IncomingGoods</code> document.

try {
    $result = $apiInstance->saveIncomingGoodsResource($id, $incoming_goods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsResourceApi->saveIncomingGoodsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Incoming goods document id. | |
| **incoming_goods** | [**\OpenAPI\Client\Model\IncomingGoods**](../Model/IncomingGoods.md)| The &lt;code&gt;IncomingGoods&lt;/code&gt; document. | [optional] |

### Return type

[**\OpenAPI\Client\Model\IncomingGoods**](../Model/IncomingGoods.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidDocumentIncomingGoodsResource()`

```php
voidDocumentIncomingGoodsResource($id)
```

Void Incoming Goods document

Void a document.  If an Incoming Goods document has been Completed, or matched against  Supplier Invoice, it cannot be voided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncomingGoodsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Incoming goods document id.

try {
    $apiInstance->voidDocumentIncomingGoodsResource($id);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsResourceApi->voidDocumentIncomingGoodsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Incoming goods document id. | |

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
