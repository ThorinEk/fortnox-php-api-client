# FortnoxApi\OrdersResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOrdersResource()**](OrdersResourceApi.md#cancelOrdersResource) | **PUT** /3/orders/{DocumentNumber}/cancel | Cancels given order |
| [**createOrdersResource()**](OrdersResourceApi.md#createOrdersResource) | **POST** /3/orders/ | Create a new order |
| [**createinvoiceOrdersResource()**](OrdersResourceApi.md#createinvoiceOrdersResource) | **PUT** /3/orders/{DocumentNumber}/createinvoice | Create invoice out of given order |
| [**emailOrdersResource()**](OrdersResourceApi.md#emailOrdersResource) | **GET** /3/orders/{DocumentNumber}/email | Send given order as email |
| [**externalprintOrdersResource()**](OrdersResourceApi.md#externalprintOrdersResource) | **PUT** /3/orders/{DocumentNumber}/externalprint | Set given order as sent |
| [**getOrdersResource()**](OrdersResourceApi.md#getOrdersResource) | **GET** /3/orders/{DocumentNumber} | Retrieve a single order |
| [**listOrdersResource()**](OrdersResourceApi.md#listOrdersResource) | **GET** /3/orders/ | Retrieve a list of orders |
| [**previewOrdersResource()**](OrdersResourceApi.md#previewOrdersResource) | **GET** /3/orders/{DocumentNumber}/preview | Preview given offer |
| [**printOrdersResource()**](OrdersResourceApi.md#printOrdersResource) | **GET** /3/orders/{DocumentNumber}/print | Print given order |
| [**updateOrdersResource()**](OrdersResourceApi.md#updateOrdersResource) | **PUT** /3/orders/{DocumentNumber} | Update an order |


## `cancelOrdersResource()`

```php
cancelOrdersResource($document_number): \FortnoxApi\Model\OrderWrap
```

Cancels given order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OrdersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the order

try {
    $result = $apiInstance->cancelOrdersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersResourceApi->cancelOrdersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the order | |

### Return type

[**\FortnoxApi\Model\OrderWrap**](../Model/OrderWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrdersResource()`

```php
createOrdersResource($order): \FortnoxApi\Model\OrderWrap
```

Create a new order

An endpoint for creating an order.   Should you have EasyVat enabled, it is mandatory to provide an account in the request should you use a custom VAT rate.   This endpoint can produce errors, some of which may only be relevant for EasyVat. Refer to the table below.  <table>  <caption>Errors that can be raised by this endpoint.</caption>    <tr>     <th>Error Code</th>     <th>HTTP Code</th>     <th>Description</th>     <th>Solution</th>    </tr>    <tr>     <td>2004167</td>     <td>400</td>     <td>An account must be provided when using a custom VAT rate and EasyVat has been enabled.</td>     <td>Supply each row which has a custom VAT rate with an account.</td>    </tr>  </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OrdersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order = new \FortnoxApi\Model\OrderWrap(); // \FortnoxApi\Model\OrderWrap | order to create

try {
    $result = $apiInstance->createOrdersResource($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersResourceApi->createOrdersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order** | [**\FortnoxApi\Model\OrderWrap**](../Model/OrderWrap.md)| order to create | [optional] |

### Return type

[**\FortnoxApi\Model\OrderWrap**](../Model/OrderWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createinvoiceOrdersResource()`

```php
createinvoiceOrdersResource($document_number): \FortnoxApi\Model\InvoiceWrap
```

Create invoice out of given order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OrdersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the order

try {
    $result = $apiInstance->createinvoiceOrdersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersResourceApi->createinvoiceOrdersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the order | |

### Return type

[**\FortnoxApi\Model\InvoiceWrap**](../Model/InvoiceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailOrdersResource()`

```php
emailOrdersResource($document_number): \FortnoxApi\Model\OrderWrap
```

Send given order as email

You can use the properties in the EmailInformation to customize the e-mail message on each order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OrdersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the order

try {
    $result = $apiInstance->emailOrdersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersResourceApi->emailOrdersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the order | |

### Return type

[**\FortnoxApi\Model\OrderWrap**](../Model/OrderWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalprintOrdersResource()`

```php
externalprintOrdersResource($document_number): \FortnoxApi\Model\OrderWrap
```

Set given order as sent

Use this endpoint to set order as sent, without generating an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OrdersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the order

try {
    $result = $apiInstance->externalprintOrdersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersResourceApi->externalprintOrdersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the order | |

### Return type

[**\FortnoxApi\Model\OrderWrap**](../Model/OrderWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersResource()`

```php
getOrdersResource($document_number): \FortnoxApi\Model\OrderWrap
```

Retrieve a single order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OrdersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the order

try {
    $result = $apiInstance->getOrdersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersResourceApi->getOrdersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the order | |

### Return type

[**\FortnoxApi\Model\OrderWrap**](../Model/OrderWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrdersResource()`

```php
listOrdersResource($filter, $customername, $customernumber, $label, $documentnumber, $externalinvoicereference1, $externalinvoicereference2, $fromdate, $todate, $costcenter, $project, $sent, $notcompleted, $ourreference, $yourreference, $lastmodified, $ordertype, $sortby): \FortnoxApi\Model\OrderListItemList
```

Retrieve a list of orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OrdersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | possibility to filter orders
$customername = 'customername_example'; // string | filter by customer name
$customernumber = 'customernumber_example'; // string | filter by customer number
$label = 'label_example'; // string | filter by label
$documentnumber = 'documentnumber_example'; // string | filter by document number
$externalinvoicereference1 = 'externalinvoicereference1_example'; // string | filter by external invoice reference 1
$externalinvoicereference2 = 'externalinvoicereference2_example'; // string | filter by external invoice reference 2
$fromdate = 'fromdate_example'; // string | filter by from date
$todate = 'todate_example'; // string | filter by to date
$costcenter = 'costcenter_example'; // string | filter by cost center
$project = 'project_example'; // string | filter by project
$sent = True; // bool | filter by sent
$notcompleted = True; // bool | filter by not completed
$ourreference = 'ourreference_example'; // string | filter by ourreference
$yourreference = 'yourreference_example'; // string | filter by your reference
$lastmodified = 'lastmodified_example'; // string | filter by lastmodified
$ordertype = 'ordertype_example'; // string | filter by order type
$sortby = 'sortby_example'; // string | field to sort returned list

try {
    $result = $apiInstance->listOrdersResource($filter, $customername, $customernumber, $label, $documentnumber, $externalinvoicereference1, $externalinvoicereference2, $fromdate, $todate, $costcenter, $project, $sent, $notcompleted, $ourreference, $yourreference, $lastmodified, $ordertype, $sortby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersResourceApi->listOrdersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| possibility to filter orders | [optional] |
| **customername** | **string**| filter by customer name | [optional] |
| **customernumber** | **string**| filter by customer number | [optional] |
| **label** | **string**| filter by label | [optional] |
| **documentnumber** | **string**| filter by document number | [optional] |
| **externalinvoicereference1** | **string**| filter by external invoice reference 1 | [optional] |
| **externalinvoicereference2** | **string**| filter by external invoice reference 2 | [optional] |
| **fromdate** | **string**| filter by from date | [optional] |
| **todate** | **string**| filter by to date | [optional] |
| **costcenter** | **string**| filter by cost center | [optional] |
| **project** | **string**| filter by project | [optional] |
| **sent** | **bool**| filter by sent | [optional] |
| **notcompleted** | **bool**| filter by not completed | [optional] |
| **ourreference** | **string**| filter by ourreference | [optional] |
| **yourreference** | **string**| filter by your reference | [optional] |
| **lastmodified** | **string**| filter by lastmodified | [optional] |
| **ordertype** | **string**| filter by order type | [optional] |
| **sortby** | **string**| field to sort returned list | [optional] |

### Return type

[**\FortnoxApi\Model\OrderListItemList**](../Model/OrderListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewOrdersResource()`

```php
previewOrdersResource($document_number): string
```

Preview given offer

The difference between this and the print-endpoint is that property Sent is not set to TRUE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OrdersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the offer

try {
    $result = $apiInstance->previewOrdersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersResourceApi->previewOrdersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the offer | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `printOrdersResource()`

```php
printOrdersResource($document_number): string
```

Print given order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OrdersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the order

try {
    $result = $apiInstance->printOrdersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersResourceApi->printOrdersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the order | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrdersResource()`

```php
updateOrdersResource($document_number, $order): \FortnoxApi\Model\OrderWrap
```

Update an order

Note that there are two approaches for updating the rows on an order.   If RowId is not specified on any row, the rows will be mapped and updated in the order in which they are set in the array. All rows that should remain on the order needs to be provided.   If RowId is specified on one or more rows the following goes: Corresponding row with that id will be updated. The rows without RowId will be interpreted as new rows. If a row should not be updated but remain on the order then specify only RowId like { \"RowId\": 123 }, otherwise it will be removed. Note that new RowIds are generated for all rows every time an order is updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OrdersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the order
$order = new \FortnoxApi\Model\OrderWrap(); // \FortnoxApi\Model\OrderWrap | order to update

try {
    $result = $apiInstance->updateOrdersResource($document_number, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersResourceApi->updateOrdersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the order | |
| **order** | [**\FortnoxApi\Model\OrderWrap**](../Model/OrderWrap.md)| order to update | [optional] |

### Return type

[**\FortnoxApi\Model\OrderWrap**](../Model/OrderWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
