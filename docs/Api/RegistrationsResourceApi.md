# FortnoxApi\RegistrationsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listRegistrationsResource()**](RegistrationsResourceApi.md#listRegistrationsResource) | **GET** /api/time/registrations-v2 | Get time/absence registrations that match filter |


## `listRegistrationsResource()`

```php
listRegistrationsResource($from_date, $to_date, $customer_ids, $project_ids, $service_ids, $cost_center_ids, $reg_codes, $user_ids, $include_registrations_without_project, $invoiced, $in_invoice_basis, $internal_time, $non_invoiceable, $include_non_invoiceable_charge_hours): \FortnoxApi\Model\DetailedRegistration[]
```

Get time/absence registrations that match filter

<p>  <b>Response property descriptions:</b><br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>id</i></b> - The unique id of the registration.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>userId</i></b> - The user ID who owns the registration.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>workedDate</i></b> - The date for which the registration is created.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>workedHours</i></b> - The time spent, or the time of absence.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>invoiceText</i></b> - The text to be included in the invoice/order basis which would be used to create an invoice/order.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>note</i></b> - The note on the registration.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>chargeHours</i></b> - The time to be invoiced, or 0 for the absence, or locked for non-invoiceable.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>childId</i></b> - The child ID related to the absence registration of parental leave (FPE), which comes from Payroll application.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>nonInvoiceable</i></b> - If the registration would be ignored for charging or not.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>invoiceBasisId</i></b> - The ID of invoice/order basis which is used for creating an invoice/order.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>documentId</i></b> - The document ID which includes the registration and is created in Invoicing application.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>documentType</i></b> - The document type which could be \"invoice\" or \"order\".<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>unitCost</i></b> - The unit cost from the registration owner who takes the work.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>unitPrice</i></b> - The unit price for the service on the registration, which comes in priority from \"invoice/order basis\", \"price group\" or \"service\".  <p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\RegistrationsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the search span, the max of which should be 1 year to the end date (\"toDate\").  Example: 2022-11-01
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the search span, the max of which should be 1 year back to the start date (\"fromDate\").  Example: 2022-11-30
$customer_ids = array('customer_ids_example'); // string[] | An array of customer IDs which are being used in database and in one-to-one relation with customer numbers.  Example: 100,101,102
$project_ids = array('project_ids_example'); // string[] | An array of project IDs.  Example: p1,p2,p3
$service_ids = array('service_ids_example'); // string[] | An array of service IDs.  Example: s1,s2,s3
$cost_center_ids = array('cost_center_ids_example'); // string[] | An array of cost center IDs.  Example: cc1,cc2,cc3
$reg_codes = array('reg_codes_example'); // string[] | An array of registration codes.  Example: TID,SEM,FPE
$user_ids = array('user_ids_example'); // string[] | An array of user IDs that time/absence registrations belong to.  Example: 1,2,3
$include_registrations_without_project = True; // bool | If the time/absence registration without project is included, or not.
$invoiced = True; // bool | If a document is created with the time/absence registration, or not.
$in_invoice_basis = True; // bool | If the time/absence registration is locked on an invoice basis, or not.
$internal_time = True; // bool | If the time/absence registration is internal, which is registered on an internal customer, or not.
$non_invoiceable = True; // bool | If the time/absence registration has been moved to non-invoiceable, or not.
$include_non_invoiceable_charge_hours = True; // bool | If the price of the non-invoiceable time/absence registration is included, or not.

try {
    $result = $apiInstance->listRegistrationsResource($from_date, $to_date, $customer_ids, $project_ids, $service_ids, $cost_center_ids, $reg_codes, $user_ids, $include_registrations_without_project, $invoiced, $in_invoice_basis, $internal_time, $non_invoiceable, $include_non_invoiceable_charge_hours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsResourceApi->listRegistrationsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**| The start date of the search span, the max of which should be 1 year to the end date (\&quot;toDate\&quot;).  Example: 2022-11-01 | [optional] |
| **to_date** | **\DateTime**| The end date of the search span, the max of which should be 1 year back to the start date (\&quot;fromDate\&quot;).  Example: 2022-11-30 | [optional] |
| **customer_ids** | [**string[]**](../Model/string.md)| An array of customer IDs which are being used in database and in one-to-one relation with customer numbers.  Example: 100,101,102 | [optional] |
| **project_ids** | [**string[]**](../Model/string.md)| An array of project IDs.  Example: p1,p2,p3 | [optional] |
| **service_ids** | [**string[]**](../Model/string.md)| An array of service IDs.  Example: s1,s2,s3 | [optional] |
| **cost_center_ids** | [**string[]**](../Model/string.md)| An array of cost center IDs.  Example: cc1,cc2,cc3 | [optional] |
| **reg_codes** | [**string[]**](../Model/string.md)| An array of registration codes.  Example: TID,SEM,FPE | [optional] |
| **user_ids** | [**string[]**](../Model/string.md)| An array of user IDs that time/absence registrations belong to.  Example: 1,2,3 | [optional] |
| **include_registrations_without_project** | **bool**| If the time/absence registration without project is included, or not. | [optional] |
| **invoiced** | **bool**| If a document is created with the time/absence registration, or not. | [optional] |
| **in_invoice_basis** | **bool**| If the time/absence registration is locked on an invoice basis, or not. | [optional] |
| **internal_time** | **bool**| If the time/absence registration is internal, which is registered on an internal customer, or not. | [optional] |
| **non_invoiceable** | **bool**| If the time/absence registration has been moved to non-invoiceable, or not. | [optional] |
| **include_non_invoiceable_charge_hours** | **bool**| If the price of the non-invoiceable time/absence registration is included, or not. | [optional] |

### Return type

[**\FortnoxApi\Model\DetailedRegistration[]**](../Model/DetailedRegistration.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
