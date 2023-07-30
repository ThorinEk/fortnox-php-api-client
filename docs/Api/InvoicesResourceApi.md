# FortnoxApi\InvoicesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookkeepInvoicesResource()**](InvoicesResourceApi.md#bookkeepInvoicesResource) | **PUT** /3/invoices/{DocumentNumber}/bookkeep | Bookkeep an invoice |
| [**callPrint()**](InvoicesResourceApi.md#callPrint) | **GET** /3/invoices/{DocumentNumber}/print | Print an invoice |
| [**cancel()**](InvoicesResourceApi.md#cancel) | **PUT** /3/invoices/{DocumentNumber}/cancel | Cancel an invoice |
| [**createInvoicesResource()**](InvoicesResourceApi.md#createInvoicesResource) | **POST** /3/invoices | Create an invoice |
| [**credit()**](InvoicesResourceApi.md#credit) | **PUT** /3/invoices/{DocumentNumber}/credit | Credit an invoice |
| [**eInvoice()**](InvoicesResourceApi.md#eInvoice) | **GET** /3/invoices/{DocumentNumber}/einvoice | Send an invoice as e-invoice |
| [**ePrint()**](InvoicesResourceApi.md#ePrint) | **GET** /3/invoices/{DocumentNumber}/eprint | Send an invoice as e-print |
| [**email()**](InvoicesResourceApi.md#email) | **GET** /3/invoices/{DocumentNumber}/email | Send an invoice as email |
| [**externalPrint()**](InvoicesResourceApi.md#externalPrint) | **PUT** /3/invoices/{DocumentNumber}/externalprint | Set an invoice as sent |
| [**getInvoicesResource()**](InvoicesResourceApi.md#getInvoicesResource) | **GET** /3/invoices/{DocumentNumber} | Retrieve a single invoice |
| [**listInvoicesResource()**](InvoicesResourceApi.md#listInvoicesResource) | **GET** /3/invoices | Retrieve a list of invoices |
| [**preview()**](InvoicesResourceApi.md#preview) | **GET** /3/invoices/{DocumentNumber}/preview | Preview an invoice |
| [**printReminder()**](InvoicesResourceApi.md#printReminder) | **GET** /3/invoices/{DocumentNumber}/printreminder | Print an invoice as reminder |
| [**updateInvoicesResource()**](InvoicesResourceApi.md#updateInvoicesResource) | **PUT** /3/invoices/{DocumentNumber} | Update an invoice |
| [**warehouseReady()**](InvoicesResourceApi.md#warehouseReady) | **PUT** /3/invoices/{DocumentNumber}/warehouseready | Set an invoice as done |


## `bookkeepInvoicesResource()`

```php
bookkeepInvoicesResource($document_number): \FortnoxApi\Model\InvoiceWrap
```

Bookkeep an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->bookkeepInvoicesResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->bookkeepInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `callPrint()`

```php
callPrint($document_number): string
```

Print an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->callPrint($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->callPrint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `cancel()`

```php
cancel($document_number): \FortnoxApi\Model\InvoiceWrap
```

Cancel an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->cancel($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `createInvoicesResource()`

```php
createInvoicesResource($invoice_payload): \FortnoxApi\Model\InvoiceWrap
```

Create an invoice

An endpoint for creating an invoice. While it is possible to create an invoice without rows, we encourage you to add them if you can.  Omitted values in the payload will be supplied by Predefined values which can be edited in the Fortnox account settings.  Note that Predefined values will always be overwritten by values provided through the API.   Should you have EasyVat enabled, it is mandatory to provide an account in the request should you use a custom VAT rate.   This endpoint can produce errors, some of which may only be relevant for EasyVat. Refer to the table below.  <table>  <caption>Errors that can be raised by this endpoint.</caption>    <tr>     <th>Error Code</th>     <th>HTTP Code</th>     <th>Description</th>     <th>Solution</th>    </tr>    <tr>     <td>2004167</td>     <td>400</td>     <td>An account must be provided when using a custom VAT rate and EasyVat has been enabled.</td>     <td>Supply each row which has a custom VAT rate with an account.</td>    </tr>  </table>   Note: The <b>EuQuarterlyReport</b> property will become obsolete at 2021-12-01.  This property is currently used by the <b>Quarterly</b> report as one of the conditions that determine if an invoice  should be included in the report or not.  A new version of the <b>Quarterly</b> report is released at 2021-12-01. In the new report, this property will not be  used when determining if an invoice should be included in the report or not, with one exception: if the invoice  is created before 2021-12-01, and this property is false, the invoice will be excluded from the report.  For invoices created 2021-12-01 and later, this property will have no effect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_payload = new \FortnoxApi\Model\InvoicePayloadWrap(); // \FortnoxApi\Model\InvoicePayloadWrap | payload

try {
    $result = $apiInstance->createInvoicesResource($invoice_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->createInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_payload** | [**\FortnoxApi\Model\InvoicePayloadWrap**](../Model/InvoicePayloadWrap.md)| payload | [optional] |

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

## `credit()`

```php
credit($document_number): \FortnoxApi\Model\InvoiceWrap
```

Credit an invoice

The created credit invoice will be referenced in the property CreditInvoiceReference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->credit($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->credit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `eInvoice()`

```php
eInvoice($document_number): \FortnoxApi\Model\InvoiceWrap
```

Send an invoice as e-invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->eInvoice($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->eInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `ePrint()`

```php
ePrint($document_number): \FortnoxApi\Model\InvoiceWrap
```

Send an invoice as e-print

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->ePrint($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->ePrint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `email()`

```php
email($document_number): \FortnoxApi\Model\InvoiceWrap
```

Send an invoice as email

You can use the properties in the EmailInformation to customize the e-mail message on each invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->email($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->email: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `externalPrint()`

```php
externalPrint($document_number): \FortnoxApi\Model\InvoiceWrap
```

Set an invoice as sent

Use this endpoint to set invoice as sent, without generating an invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->externalPrint($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->externalPrint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `getInvoicesResource()`

```php
getInvoicesResource($document_number): \FortnoxApi\Model\InvoiceWrap
```

Retrieve a single invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->getInvoicesResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->getInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `listInvoicesResource()`

```php
listInvoicesResource($filter, $costcenter, $customername, $customernumber, $label, $documentnumber, $fromdate, $todate, $fromfinalpaydate, $tofinalpaydate, $lastmodified, $notcompleted, $ocr, $ourreference, $project, $sent, $externalinvoicereference1, $externalinvoicereference2, $yourreference, $invoicetype, $articlenumber, $articledescription, $currency, $accountnumberfrom, $accountnumberto, $yourordernumber, $credit, $sortby): \FortnoxApi\Model\InvoiceListItemWrap
```

Retrieve a list of invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | possibility to filter invoices
$costcenter = 'costcenter_example'; // string
$customername = 'customername_example'; // string
$customernumber = 'customernumber_example'; // string
$label = 'label_example'; // string
$documentnumber = 'documentnumber_example'; // string
$fromdate = 'fromdate_example'; // string
$todate = 'todate_example'; // string
$fromfinalpaydate = 'fromfinalpaydate_example'; // string
$tofinalpaydate = 'tofinalpaydate_example'; // string
$lastmodified = 'lastmodified_example'; // string
$notcompleted = 'notcompleted_example'; // string
$ocr = 'ocr_example'; // string
$ourreference = 'ourreference_example'; // string
$project = 'project_example'; // string
$sent = 'sent_example'; // string
$externalinvoicereference1 = 'externalinvoicereference1_example'; // string
$externalinvoicereference2 = 'externalinvoicereference2_example'; // string
$yourreference = 'yourreference_example'; // string
$invoicetype = 'invoicetype_example'; // string
$articlenumber = 'articlenumber_example'; // string
$articledescription = 'articledescription_example'; // string
$currency = 'currency_example'; // string
$accountnumberfrom = 'accountnumberfrom_example'; // string
$accountnumberto = 'accountnumberto_example'; // string
$yourordernumber = 'yourordernumber_example'; // string
$credit = 'credit_example'; // string
$sortby = 'sortby_example'; // string | field to sort returned list on

try {
    $result = $apiInstance->listInvoicesResource($filter, $costcenter, $customername, $customernumber, $label, $documentnumber, $fromdate, $todate, $fromfinalpaydate, $tofinalpaydate, $lastmodified, $notcompleted, $ocr, $ourreference, $project, $sent, $externalinvoicereference1, $externalinvoicereference2, $yourreference, $invoicetype, $articlenumber, $articledescription, $currency, $accountnumberfrom, $accountnumberto, $yourordernumber, $credit, $sortby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->listInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| possibility to filter invoices | [optional] |
| **costcenter** | **string**|  | [optional] |
| **customername** | **string**|  | [optional] |
| **customernumber** | **string**|  | [optional] |
| **label** | **string**|  | [optional] |
| **documentnumber** | **string**|  | [optional] |
| **fromdate** | **string**|  | [optional] |
| **todate** | **string**|  | [optional] |
| **fromfinalpaydate** | **string**|  | [optional] |
| **tofinalpaydate** | **string**|  | [optional] |
| **lastmodified** | **string**|  | [optional] |
| **notcompleted** | **string**|  | [optional] |
| **ocr** | **string**|  | [optional] |
| **ourreference** | **string**|  | [optional] |
| **project** | **string**|  | [optional] |
| **sent** | **string**|  | [optional] |
| **externalinvoicereference1** | **string**|  | [optional] |
| **externalinvoicereference2** | **string**|  | [optional] |
| **yourreference** | **string**|  | [optional] |
| **invoicetype** | **string**|  | [optional] |
| **articlenumber** | **string**|  | [optional] |
| **articledescription** | **string**|  | [optional] |
| **currency** | **string**|  | [optional] |
| **accountnumberfrom** | **string**|  | [optional] |
| **accountnumberto** | **string**|  | [optional] |
| **yourordernumber** | **string**|  | [optional] |
| **credit** | **string**|  | [optional] |
| **sortby** | **string**| field to sort returned list on | [optional] |

### Return type

[**\FortnoxApi\Model\InvoiceListItemWrap**](../Model/InvoiceListItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `preview()`

```php
preview($document_number): string
```

Preview an invoice

The difference between this and the print-endpoint is that property Sent is not set to TRUE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->preview($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->preview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `printReminder()`

```php
printReminder($document_number): string
```

Print an invoice as reminder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->printReminder($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->printReminder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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

## `updateInvoicesResource()`

```php
updateInvoicesResource($document_number, $invoice_payload): \FortnoxApi\Model\InvoiceWrap
```

Update an invoice

Note that there are two approaches for updating the rows on an invoice.   If RowId is not specified on any row, the rows will be mapped and updated in the order in which they are set in the array. All rows that should remain on the invoice needs to be provided.   If RowId is specified on one or more rows the following goes: Corresponding row with that id will be updated. The rows without RowId will be interpreted as new rows. If a row should not be updated but remain on the invoice then specify only RowId like { \"RowId\": 123 }, otherwise it will be removed. Note that new RowIds are generated for all rows every time an invoice is updated.   Note: The <b>EuQuarterlyReport</b> property will become obsolete at 2021-12-01.  This property is currently used by the <b>Quarterly</b> report as one of the conditions that determine if an invoice  should be included in the report or not.  A new version of the <b>Quarterly</b> report is released at 2021-12-01. In the new report, this property will not be  used when determining if an invoice should be included in the report or not, with one exception: if the invoice  is created before 2021-12-01, and this property is false, the invoice will be excluded from the report.  For invoices created 2021-12-01 and later, this property will have no effect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice
$invoice_payload = new \FortnoxApi\Model\InvoicePayloadWrap(); // \FortnoxApi\Model\InvoicePayloadWrap | payload

try {
    $result = $apiInstance->updateInvoicesResource($document_number, $invoice_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->updateInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |
| **invoice_payload** | [**\FortnoxApi\Model\InvoicePayloadWrap**](../Model/InvoicePayloadWrap.md)| payload | [optional] |

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

## `warehouseReady()`

```php
warehouseReady($document_number): \FortnoxApi\Model\InvoiceWrap
```

Set an invoice as done

Used for marking a document as ready in the warehouse module. DeliveryState needs to be set to &quot;delivery&quot;.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\InvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the invoice

try {
    $result = $apiInstance->warehouseReady($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesResourceApi->warehouseReady: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the invoice | |

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
