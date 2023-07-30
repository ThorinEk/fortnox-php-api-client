# OpenAPI\Client\FinanceInvoicesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFinanceInvoicesResource()**](FinanceInvoicesResourceApi.md#createFinanceInvoicesResource) | **POST** /3/noxfinansinvoices/ | Send an invoice with Fortnox Finans |
| [**getFinanceInvoicesResource()**](FinanceInvoicesResourceApi.md#getFinanceInvoicesResource) | **GET** /3/noxfinansinvoices/{Number} | Retrieve a single invoice payment |
| [**pause()**](FinanceInvoicesResourceApi.md#pause) | **PUT** /3/noxfinansinvoices/{Number}/pause | Action Pause |
| [**reportPayment()**](FinanceInvoicesResourceApi.md#reportPayment) | **PUT** /3/noxfinansinvoices/{Number}/report-payment | Action Report Payment |
| [**stop()**](FinanceInvoicesResourceApi.md#stop) | **PUT** /3/noxfinansinvoices/{Number}/stop | Action Stop |
| [**takeFees()**](FinanceInvoicesResourceApi.md#takeFees) | **PUT** /3/noxfinansinvoices/{Number}/take-fees | Action Take Fees |
| [**unpause()**](FinanceInvoicesResourceApi.md#unpause) | **PUT** /3/noxfinansinvoices/{Number}/unpause | Action Unpause |


## `createFinanceInvoicesResource()`

```php
createFinanceInvoicesResource($payload): \OpenAPI\Client\Model\InvoiceResponseWrap
```

Send an invoice with Fortnox Finans

<p>  When sending an invoice with Fortnox Finans you will get the invoice status returned if everything succeeded,  if there were any problems, an error will be returned.  <p>  Please note that it can take 1 min to several hours before you will get back status, OCR number and link to  PDF document, meanwhile the invoice will have status UNKNOWN or NOT_AUTHORIZED.  <p>  Fortnox Finans is currently only accepting invoices in SEK  <p>  <i>Parameters in the body:</i>  <ul>      <li><b>InvoiceNumber</b>: the invoice number for the invoice which should be sent with Fortnox Finans</li>      <li><b>SendMethod</b>: how to send the invoice; EMAIL, LETTER, EINVOICE or NONE</li>      <li><b>Service</b>: which service to use; LEDGERBASE or REMINDER</li>  </ul>  <p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinanceInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payload = new \OpenAPI\Client\Model\CreatePayloadWrap(); // \OpenAPI\Client\Model\CreatePayloadWrap | The payload for sending an invoice with  Fortnox Finans

try {
    $result = $apiInstance->createFinanceInvoicesResource($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceInvoicesResourceApi->createFinanceInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\OpenAPI\Client\Model\CreatePayloadWrap**](../Model/CreatePayloadWrap.md)| The payload for sending an invoice with  Fortnox Finans | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceResponseWrap**](../Model/InvoiceResponseWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinanceInvoicesResource()`

```php
getFinanceInvoicesResource($number): \OpenAPI\Client\Model\InvoiceResponseWrap
```

Retrieve a single invoice payment

<p>  Retrieves the status and balance of an invoice sent to Fortnox Finans.  You need to supply the invoice number in Fortox to retrieve the invoice.  <p>  <b>Note that</b> invoices sent with the old &quot;Noxbox&quot; platform will not have the &quot;ServiceName&quot;  property in the response. This new property is added to the response if the invoice is  sent with the new finance service.  <p>  Response explanation for <b>Service</b> and <b>ServiceName</b>  <p>  <b>Service:</b>  <ul>      <li><b>LEDGERBASE</b>: if the invoice is sent by using the old &quot;Noxbox&quot; platform, or the new finance service with the subtypes &quot;Service Full&quot; or &quot;Service Light&quot;. These services are explained above in the &quot;Fortnox Finans services&quot; section</li>      <li><b>REMINDER</b>: If the invoice is sent by the new finance service, with the service Reminder Service</li>  </ul>  <p>  <b>ServiceName</b> (only provided for <u>new finance service</u> invoices):  <ul>      <li><b>SERVICE_FULL</b>: Ledgerbase service <u>with</u> automatic reminders is used</li>      <li><b>SERVICE_LIGHT</b>: Ledgerbase service <u>without</u> automatic reminders is used.</li>      <li><b>REMINDER_SERVICE</b>: Reminder service is used</li>  </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinanceInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 'number_example'; // string | The Fortnox invoice number

try {
    $result = $apiInstance->getFinanceInvoicesResource($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceInvoicesResourceApi->getFinanceInvoicesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| The Fortnox invoice number | |

### Return type

[**\OpenAPI\Client\Model\InvoiceResponseWrap**](../Model/InvoiceResponseWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pause()`

```php
pause($number, $payload): \OpenAPI\Client\Model\InvoiceResponseWrap
```

Action Pause

<p>  Pauses an invoice for up to 60 days. Pause means that Fortnox Finans reminder process will stop for the invoice. All invoices which have the status OPEN can be paused.  <p>  <i>Parameters in the body:</i>  <ul>      <li><b>PausedUntilDate</b>: the invoice will be paused to and including this date.</li>  </ul>  <p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinanceInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 'number_example'; // string | The Fortnox invoice number
$payload = new \OpenAPI\Client\Model\PausePayloadWrap(); // \OpenAPI\Client\Model\PausePayloadWrap | The payload for sending an invoice with  Fortnox Finans

try {
    $result = $apiInstance->pause($number, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceInvoicesResourceApi->pause: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| The Fortnox invoice number | |
| **payload** | [**\OpenAPI\Client\Model\PausePayloadWrap**](../Model/PausePayloadWrap.md)| The payload for sending an invoice with  Fortnox Finans | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceResponseWrap**](../Model/InvoiceResponseWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportPayment()`

```php
reportPayment($number, $payload): \OpenAPI\Client\Model\InvoiceResponseWrap
```

Action Report Payment

<p>  If a customer has paid some or all of the capital on an invoice directly to the client, this can be reported  for bookkeeping purposes and reported to Fortnox Finans to actually deduct the paid amount from the invoice.  <p>  <b>Note:</b> this action is <b>not</b> available for invoices sent by the old Noxbox platform  <p>  <i>Parameters in the body:</i>  <ul>      <li><b>ClientTakesFees</b>: a boolean indicating if the client should take the customer fees or not.</li>      <li><b>BookkeepPaymentInFortnox</b>: a boolean indicating if the payment should be bookkept in Fortnox or not. Usually the payment should be bookkept.</li>      <li><b>ReportToFinance</b>: a boolean indicating if the payment should be reported to Fortnox Finans or not. Usually the payment should be reported.</li>      <li><b>PaymentAmount</b>: a decimal field with the amount to report.</li>      <li><b>PaymentMethodCode</b>: a string with the method code (e.g. BG, PG or other). Could be omitted if BookkeepPaymentInFortnox is false.</li>      <li><b>PaymentMethodAccount</b>: an integer with the account number to bookkeep the payment on (e.g. 1920 or other). Could be omitted if BookkeepPaymentInFortnox is false.</li>  </ul>  <p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinanceInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 'number_example'; // string | The Fortnox invoice number
$payload = new \OpenAPI\Client\Model\ReportPaymentPayload(); // \OpenAPI\Client\Model\ReportPaymentPayload | The payload for sending an invoice with  Fortnox Finans

try {
    $result = $apiInstance->reportPayment($number, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceInvoicesResourceApi->reportPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| The Fortnox invoice number | |
| **payload** | [**\OpenAPI\Client\Model\ReportPaymentPayload**](../Model/ReportPaymentPayload.md)| The payload for sending an invoice with  Fortnox Finans | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceResponseWrap**](../Model/InvoiceResponseWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stop()`

```php
stop($number): \OpenAPI\Client\Model\InvoiceResponseWrap
```

Action Stop

<p>  Removes the invoice from Fortnox Finans process. The invoice can still be handled manually, but no further automatic process will be applied  <p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinanceInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 'number_example'; // string | The Fortnox invoice number

try {
    $result = $apiInstance->stop($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceInvoicesResourceApi->stop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| The Fortnox invoice number | |

### Return type

[**\OpenAPI\Client\Model\InvoiceResponseWrap**](../Model/InvoiceResponseWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `takeFees()`

```php
takeFees($number): \OpenAPI\Client\Model\InvoiceResponseWrap
```

Action Take Fees

<p>  If fees have been added to an invoice, e.g. reminder fees, the client can choose to pay those fees instead of letting the customer pay.  <p>  <b>Note:</b> this action is <b>not</b> available for invoices sent by the old Noxbox platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinanceInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 'number_example'; // string | The Fortnox invoice number

try {
    $result = $apiInstance->takeFees($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceInvoicesResourceApi->takeFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| The Fortnox invoice number | |

### Return type

[**\OpenAPI\Client\Model\InvoiceResponseWrap**](../Model/InvoiceResponseWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unpause()`

```php
unpause($number): \OpenAPI\Client\Model\InvoiceResponseWrap
```

Action Unpause

<p>  Unpauses a paused invoice. If the invoice is manually paused, then this action will remove the pause status immediately. Invoices which are paused by the system cannot be unpaused.  <p>  <b>Note:</b> this action is <b>not</b> available for invoices sent by the old Noxbox platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinanceInvoicesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 'number_example'; // string | The Fortnox invoice number

try {
    $result = $apiInstance->unpause($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceInvoicesResourceApi->unpause: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| The Fortnox invoice number | |

### Return type

[**\OpenAPI\Client\Model\InvoiceResponseWrap**](../Model/InvoiceResponseWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
