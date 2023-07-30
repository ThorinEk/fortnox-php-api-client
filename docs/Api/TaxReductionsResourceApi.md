# OpenAPI\Client\TaxReductionsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTaxReductionsResource()**](TaxReductionsResourceApi.md#createTaxReductionsResource) | **POST** /3/taxreductions | Create a Tax Reduction |
| [**getTaxReductionsResource()**](TaxReductionsResourceApi.md#getTaxReductionsResource) | **GET** /3/taxreductions/{Id} | Retrieve a single tax reduction |
| [**listTaxReductionsResource()**](TaxReductionsResourceApi.md#listTaxReductionsResource) | **GET** /3/taxreductions | Retrieve a list of tax reductions |
| [**removeTaxReductionsResource()**](TaxReductionsResourceApi.md#removeTaxReductionsResource) | **DELETE** /3/taxreductions/{Id} | Remove a tax reduction |
| [**updateTaxReductionsResource()**](TaxReductionsResourceApi.md#updateTaxReductionsResource) | **PUT** /3/taxreductions/{Id} | Update a tax reduction |


## `createTaxReductionsResource()`

```php
createTaxReductionsResource($tax_reduction): \OpenAPI\Client\Model\TaxReductionWrap
```

Create a Tax Reduction

Note that different types of tax reduction, i.e. ROT, RUT, or Green Technology, applications work differently.  When creating an application for Green Technology, the field <em>TaxReductionAmounts</em> becomes mandatory as  it is used to determine how much of the asked amount is intended for which type of work. Similarly, the <em>AskedAmount</em>  field of the <em>TaxReduction</em> becomes optional, as it will always be considered to be equal to the sum of the <em>TaxReductionAmounts</em>.   For the other types, ROT and RUT, this field is not required and should be omitted.   Unlike earlier iterations of this endpoint, specifying the type of reduction for the provided <em>TaxReduction</em> (e.g. ROT, RUT, or Green)  is not necessary as this value will always be equal to the type set on the provided document instead.   This endpoint can raise a variety of validation errors, some of which are only relevant for Green Technology applications.  Those errors will always return an HTTP Code of 400 and include, but are not limited to, those shown below:   <table>      <caption>Errors that can be raised by this endpoint.</caption>      <tr>          <th>Error Code</th>          <th>Types</th>          <th>Description</th>          <th>Solution</th>      </tr>      <tr>          <td>2000600</td>          <td>ROT, RUT, GREEN</td>          <td>The provided Social Security Number is already in use for this document.</td>          <td>Verify that the Social Security Number is different from any other applicants already added.</td>      </tr>      <tr>          <td>2004217, 2004218</td>          <td>ROT, RUT, GREEN</td>          <td>The total asked amount of the application is either in an invalid format or is negative.</td>          <td>Verify that the <em>AskedAmount</em>-field is a positive number (0 is valid for Green Technology) and that it is an integer.</td>      </tr>      <tr>          <td>2004209</td>          <td>GREEN</td>          <td>The <em>WorkType</em>-field contains a work type that is not valid for the given type of reduction.</td>          <td>Ensure that the <em>WorkType</em> contains a valid type of work for Green Technology.</td>      </tr>      <tr>          <td>2004263</td>          <td>GREEN</td>          <td>The <em>TaxReductionAmounts</em>-field is missing for a Green Technology application.</td>          <td>Ensure that the field is included, that it is an array, and that each contained object denotes a specific type's asked amount.</td>      </tr>      <tr>          <td>2004262</td>          <td>GREEN</td>          <td>There are more than one object denoting the asked amount for the same type in the <em>TaxReductionAmounts</em>-field.</td>          <td>Ensure that there is only one object denoting the asked amount per type contained in the array.</td>      </tr>  </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxReductionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_reduction = new \OpenAPI\Client\Model\TaxReductionWrap(); // \OpenAPI\Client\Model\TaxReductionWrap | to create

try {
    $result = $apiInstance->createTaxReductionsResource($tax_reduction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxReductionsResourceApi->createTaxReductionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_reduction** | [**\OpenAPI\Client\Model\TaxReductionWrap**](../Model/TaxReductionWrap.md)| to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaxReductionWrap**](../Model/TaxReductionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxReductionsResource()`

```php
getTaxReductionsResource($id): \OpenAPI\Client\Model\TaxReductionWrap
```

Retrieve a single tax reduction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxReductionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | identifies the tax reduction

try {
    $result = $apiInstance->getTaxReductionsResource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxReductionsResourceApi->getTaxReductionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifies the tax reduction | |

### Return type

[**\OpenAPI\Client\Model\TaxReductionWrap**](../Model/TaxReductionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTaxReductionsResource()`

```php
listTaxReductionsResource($filter): \OpenAPI\Client\Model\TaxReductionListItemList
```

Retrieve a list of tax reductions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxReductionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | possibility to filter tax reductions

try {
    $result = $apiInstance->listTaxReductionsResource($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxReductionsResourceApi->listTaxReductionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| possibility to filter tax reductions | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaxReductionListItemList**](../Model/TaxReductionListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTaxReductionsResource()`

```php
removeTaxReductionsResource($id)
```

Remove a tax reduction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxReductionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | identifies the tax reduction

try {
    $apiInstance->removeTaxReductionsResource($id);
} catch (Exception $e) {
    echo 'Exception when calling TaxReductionsResourceApi->removeTaxReductionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifies the tax reduction | |

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

## `updateTaxReductionsResource()`

```php
updateTaxReductionsResource($id, $tax_reduction): \OpenAPI\Client\Model\TaxReductionWrap
```

Update a tax reduction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxReductionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | identifies the tax reduction
$tax_reduction = new \OpenAPI\Client\Model\TaxReductionWrap(); // \OpenAPI\Client\Model\TaxReductionWrap | to update

try {
    $result = $apiInstance->updateTaxReductionsResource($id, $tax_reduction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxReductionsResourceApi->updateTaxReductionsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifies the tax reduction | |
| **tax_reduction** | [**\OpenAPI\Client\Model\TaxReductionWrap**](../Model/TaxReductionWrap.md)| to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaxReductionWrap**](../Model/TaxReductionWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
