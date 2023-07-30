# FortnoxApi\ArticlesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**callList()**](ArticlesResourceApi.md#callList) | **GET** /api/time/articles-v1 | Get full article registrations that match filter |


## `callList()`

```php
callList($from_date, $to_date, $customer_ids, $project_ids, $include_registrations_without_project, $item_ids, $cost_center_ids, $owner_ids, $invoiced, $in_invoice_basis, $internal_articles, $non_invoiceable, $include_non_invoiceable_price): \FortnoxApi\Model\BaseArticleRegistration[]
```

Get full article registrations that match filter

<p>  <b>Response property descriptions:</b><br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>id</i></b> - The unique id of a basic common combination of article registrations. (The basic common combination means \"user/purchase date/customer/project/cost center\", which leads to a dialog with several article registrations.)<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>purchaseDate</i></b> - The date on which the article is purchased or registered for charging.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>ownerId</i></b> - The user ID who creates the basic common combination.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>version</i></b> - The version of the basic common combination (article dialog) being updated, which is used for handling the concurrency issue.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b><i>registrationType</i></b> - It is always \"ARTICLE\" for article list endpoint.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;    <b>Sub-Class - ArticleRegistration:</b><br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>id</i></b> - The unique id of an article registration.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>registrationId</i></b> - The id of the basic common combination.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>orderIndex</i></b> - the order index for the article registration in regard of the common combination.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>ownerId</i></b> - The user ID who owns the article registration.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>totalQuantity</i></b> - The quantity of the article.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>unitPrice</i></b> - The unit price connected to the article registration, which might be locked on an invoice/order basis or for non-invoiceable.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>unitCost</i></b> - The unit cost connected to the article registration, which might be locked on an invoice/order basis.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>invoiceBasisId</i></b> - The ID of invoice/order basis which is used for creating an invoice/order.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>nonInvoiceable</i></b> - If the article registration would be ignored for charging or not.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>note</i></b> - The note on the article registration.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>documentId</i></b> - The document ID which includes the article registration and is created in Invoicing application.<br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <b><i>documentType</i></b> - The document type which could be \"invoice\" or \"order\".  </p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\ArticlesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the search span, the max of which should be 1 year to the end date (\"toDate\").  Example: 2022-11-01
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the search span, the max of which should be 1 year back to the start date (\"fromDate\").  Example: 2022-11-30
$customer_ids = array('customer_ids_example'); // string[] | An array of customer IDs which are being used in database and in one-to-one relation with customer numbers.  Example: 100,101,102
$project_ids = array('project_ids_example'); // string[] | An array of project IDs.  Example: p1,p2,p3
$include_registrations_without_project = True; // bool | If the article registration without project is included, or not.
$item_ids = array('item_ids_example'); // string[] | An array of article IDs.  Example: s1,s2,s3
$cost_center_ids = array('cost_center_ids_example'); // string[] | An array of cost center IDs.  Example: cc1,cc2,cc3
$owner_ids = array('owner_ids_example'); // string[] | An array of user ids who own the article registrations.  Example: 1,2,3
$invoiced = True; // bool | If a document is created with the article registration, or not.
$in_invoice_basis = True; // bool | If the article registration is locked on an invoice basis, or not.
$internal_articles = True; // bool | If the article registration is internal, which is registered on an internal customer, or not.
$non_invoiceable = True; // bool | If the article registration has been moved to non-invoiceable, or not.
$include_non_invoiceable_price = True; // bool | If the price of the non-invoiceable article registration is included, or not.

try {
    $result = $apiInstance->callList($from_date, $to_date, $customer_ids, $project_ids, $include_registrations_without_project, $item_ids, $cost_center_ids, $owner_ids, $invoiced, $in_invoice_basis, $internal_articles, $non_invoiceable, $include_non_invoiceable_price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesResourceApi->callList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**| The start date of the search span, the max of which should be 1 year to the end date (\&quot;toDate\&quot;).  Example: 2022-11-01 | [optional] |
| **to_date** | **\DateTime**| The end date of the search span, the max of which should be 1 year back to the start date (\&quot;fromDate\&quot;).  Example: 2022-11-30 | [optional] |
| **customer_ids** | [**string[]**](../Model/string.md)| An array of customer IDs which are being used in database and in one-to-one relation with customer numbers.  Example: 100,101,102 | [optional] |
| **project_ids** | [**string[]**](../Model/string.md)| An array of project IDs.  Example: p1,p2,p3 | [optional] |
| **include_registrations_without_project** | **bool**| If the article registration without project is included, or not. | [optional] |
| **item_ids** | [**string[]**](../Model/string.md)| An array of article IDs.  Example: s1,s2,s3 | [optional] |
| **cost_center_ids** | [**string[]**](../Model/string.md)| An array of cost center IDs.  Example: cc1,cc2,cc3 | [optional] |
| **owner_ids** | [**string[]**](../Model/string.md)| An array of user ids who own the article registrations.  Example: 1,2,3 | [optional] |
| **invoiced** | **bool**| If a document is created with the article registration, or not. | [optional] |
| **in_invoice_basis** | **bool**| If the article registration is locked on an invoice basis, or not. | [optional] |
| **internal_articles** | **bool**| If the article registration is internal, which is registered on an internal customer, or not. | [optional] |
| **non_invoiceable** | **bool**| If the article registration has been moved to non-invoiceable, or not. | [optional] |
| **include_non_invoiceable_price** | **bool**| If the price of the non-invoiceable article registration is included, or not. | [optional] |

### Return type

[**\FortnoxApi\Model\BaseArticleRegistration[]**](../Model/BaseArticleRegistration.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
