# FortnoxApi\OffersResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOffersResource()**](OffersResourceApi.md#cancelOffersResource) | **PUT** /3/offers/{DocumentNumber}/cancel | Cancels given offer |
| [**createOffersResource()**](OffersResourceApi.md#createOffersResource) | **POST** /3/offers/ | Create an offer |
| [**createorder()**](OffersResourceApi.md#createorder) | **PUT** /3/offers/{DocumentNumber}/createorder | Create order out of given offer |
| [**emailOffersResource()**](OffersResourceApi.md#emailOffersResource) | **GET** /3/offers/{DocumentNumber}/email | Send given offer as email |
| [**externalprint()**](OffersResourceApi.md#externalprint) | **PUT** /3/offers/{DocumentNumber}/externalprint | Set given offer as sent |
| [**getOffersResource()**](OffersResourceApi.md#getOffersResource) | **GET** /3/offers/{DocumentNumber} | Retrieve a single offer |
| [**listOffersResource()**](OffersResourceApi.md#listOffersResource) | **GET** /3/offers/ | Retrieve a list of offers |
| [**previewOffersResource()**](OffersResourceApi.md#previewOffersResource) | **GET** /3/offers/{DocumentNumber}/preview | Preview given offer |
| [**printOffersResource()**](OffersResourceApi.md#printOffersResource) | **GET** /3/offers/{DocumentNumber}/print | Print given offer |
| [**updateOffersResource()**](OffersResourceApi.md#updateOffersResource) | **PUT** /3/offers/{DocumentNumber} | Update an offer |


## `cancelOffersResource()`

```php
cancelOffersResource($document_number): \FortnoxApi\Model\OfferWrap
```

Cancels given offer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OffersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the offer

try {
    $result = $apiInstance->cancelOffersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersResourceApi->cancelOffersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the offer | |

### Return type

[**\FortnoxApi\Model\OfferWrap**](../Model/OfferWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOffersResource()`

```php
createOffersResource($offer): \FortnoxApi\Model\OfferWrap
```

Create an offer

An endpoint for creating an offer.   Should you have EasyVat enabled, it is mandatory to provide an account in the request should you use a custom VAT rate.   This endpoint can produce errors, some of which may only be relevant for EasyVat. Refer to the table below.  <table>  <caption>Errors that can be raised by this endpoint.</caption>    <tr>     <th>Error Code</th>     <th>HTTP Code</th>     <th>Description</th>     <th>Solution</th>    </tr>    <tr>     <td>2004167</td>     <td>400</td>     <td>An account must be provided when using a custom VAT rate and EasyVat has been enabled.</td>     <td>Supply each row which has a custom VAT rate with an account.</td>    </tr>  </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OffersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer = new \FortnoxApi\Model\OfferWrap(); // \FortnoxApi\Model\OfferWrap | to create

try {
    $result = $apiInstance->createOffersResource($offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersResourceApi->createOffersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer** | [**\FortnoxApi\Model\OfferWrap**](../Model/OfferWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\OfferWrap**](../Model/OfferWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createorder()`

```php
createorder($document_number): \FortnoxApi\Model\OrderWrap
```

Create order out of given offer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OffersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the offer

try {
    $result = $apiInstance->createorder($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersResourceApi->createorder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the offer | |

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

## `emailOffersResource()`

```php
emailOffersResource($document_number): \FortnoxApi\Model\OfferWrap
```

Send given offer as email

You can use the properties in the EmailInformation to customize the e-mail message on each offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OffersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the offer

try {
    $result = $apiInstance->emailOffersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersResourceApi->emailOffersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the offer | |

### Return type

[**\FortnoxApi\Model\OfferWrap**](../Model/OfferWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalprint()`

```php
externalprint($document_number): \FortnoxApi\Model\OfferWrap
```

Set given offer as sent

Use this endpoint to set offer as sent, without generating an offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OffersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the offer

try {
    $result = $apiInstance->externalprint($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersResourceApi->externalprint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the offer | |

### Return type

[**\FortnoxApi\Model\OfferWrap**](../Model/OfferWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersResource()`

```php
getOffersResource($document_number): \FortnoxApi\Model\OfferWrap
```

Retrieve a single offer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OffersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the offer

try {
    $result = $apiInstance->getOffersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersResourceApi->getOffersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the offer | |

### Return type

[**\FortnoxApi\Model\OfferWrap**](../Model/OfferWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOffersResource()`

```php
listOffersResource($filter, $customername, $customernumber, $documentnumber, $costcenter, $label, $fromdate, $todate, $project, $sent, $notcompleted, $ourreference, $yourreference, $lastmodified, $sortby): \FortnoxApi\Model\OfferListItemList
```

Retrieve a list of offers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OffersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | possibility to filter offers
$customername = 'customername_example'; // string | filter by customer name
$customernumber = 'customernumber_example'; // string | filter by customer number
$documentnumber = 'documentnumber_example'; // string | filter by document number
$costcenter = 'costcenter_example'; // string | filter by cost center
$label = 'label_example'; // string | filter by label
$fromdate = 'fromdate_example'; // string | filter by from date
$todate = 'todate_example'; // string | filter by to date
$project = 'project_example'; // string | filter by project
$sent = True; // bool | filter by sent
$notcompleted = True; // bool | filter by not completed
$ourreference = 'ourreference_example'; // string | filter by our reference
$yourreference = 'yourreference_example'; // string | filter by your reference
$lastmodified = 'lastmodified_example'; // string | filter by last modified
$sortby = 'sortby_example'; // string | sort returned list of offers

try {
    $result = $apiInstance->listOffersResource($filter, $customername, $customernumber, $documentnumber, $costcenter, $label, $fromdate, $todate, $project, $sent, $notcompleted, $ourreference, $yourreference, $lastmodified, $sortby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersResourceApi->listOffersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| possibility to filter offers | [optional] |
| **customername** | **string**| filter by customer name | [optional] |
| **customernumber** | **string**| filter by customer number | [optional] |
| **documentnumber** | **string**| filter by document number | [optional] |
| **costcenter** | **string**| filter by cost center | [optional] |
| **label** | **string**| filter by label | [optional] |
| **fromdate** | **string**| filter by from date | [optional] |
| **todate** | **string**| filter by to date | [optional] |
| **project** | **string**| filter by project | [optional] |
| **sent** | **bool**| filter by sent | [optional] |
| **notcompleted** | **bool**| filter by not completed | [optional] |
| **ourreference** | **string**| filter by our reference | [optional] |
| **yourreference** | **string**| filter by your reference | [optional] |
| **lastmodified** | **string**| filter by last modified | [optional] |
| **sortby** | **string**| sort returned list of offers | [optional] |

### Return type

[**\FortnoxApi\Model\OfferListItemList**](../Model/OfferListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewOffersResource()`

```php
previewOffersResource($document_number): string
```

Preview given offer

The difference between this and the print-endpoint is that property Sent is not set to TRUE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OffersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the offer

try {
    $result = $apiInstance->previewOffersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersResourceApi->previewOffersResource: ', $e->getMessage(), PHP_EOL;
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

## `printOffersResource()`

```php
printOffersResource($document_number): string
```

Print given offer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OffersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the offer

try {
    $result = $apiInstance->printOffersResource($document_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersResourceApi->printOffersResource: ', $e->getMessage(), PHP_EOL;
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

## `updateOffersResource()`

```php
updateOffersResource($document_number, $offer): \FortnoxApi\Model\OfferWrap
```

Update an offer

Note that there are two approaches for updating the rows on an offer.   If RowId is not specified on any row, the rows will be mapped and updated in the order in which they are set in the array. All rows that should remain on the offer needs to be provided.   If RowId is specified on one or more rows the following goes: Corresponding row with that id will be updated. The rows without RowId will be interpreted as new rows. If a row should not be updated but remain on the offer then specify only RowId like { \"RowId\": 123 }, otherwise it will be removed. Note that new RowIds are generated for all rows every time an offer is updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\OffersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = 'document_number_example'; // string | identifies the offer
$offer = new \FortnoxApi\Model\OfferWrap(); // \FortnoxApi\Model\OfferWrap | to update

try {
    $result = $apiInstance->updateOffersResource($document_number, $offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersResourceApi->updateOffersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_number** | **string**| identifies the offer | |
| **offer** | [**\FortnoxApi\Model\OfferWrap**](../Model/OfferWrap.md)| to update | [optional] |

### Return type

[**\FortnoxApi\Model\OfferWrap**](../Model/OfferWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
