# OpenAPI\Client\CustomerReferencesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomerReferencesResource()**](CustomerReferencesResourceApi.md#createCustomerReferencesResource) | **POST** /3/customerreferences/ | Create a customer reference row |
| [**getCustomerReferencesResource()**](CustomerReferencesResourceApi.md#getCustomerReferencesResource) | **GET** /3/customerreferences/{CustomerReferenceRowId} | Retrieve a customer reference row |
| [**listCustomerReferencesResource()**](CustomerReferencesResourceApi.md#listCustomerReferencesResource) | **GET** /3/customerreferences/ | Retrieve a list of customers reference rows |
| [**removeCustomerReferencesResource()**](CustomerReferencesResourceApi.md#removeCustomerReferencesResource) | **DELETE** /3/customerreferences/{CustomerReferenceRowId} | Delete a customer reference row |
| [**updateCustomerReferencesResource()**](CustomerReferencesResourceApi.md#updateCustomerReferencesResource) | **PUT** /3/customerreferences/{CustomerReferenceRowId} | Update a customer reference row |


## `createCustomerReferencesResource()`

```php
createCustomerReferencesResource($customer_reference_row): \OpenAPI\Client\Model\CustomerReferenceWrap
```

Create a customer reference row

</p>  <p>The created customer reference row will be returned if everything succeeded, if there was any problems an error will be returned.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerReferencesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_reference_row = new \OpenAPI\Client\Model\CustomerReferenceCustomerReferenceRowWrap(); // \OpenAPI\Client\Model\CustomerReferenceCustomerReferenceRowWrap | customer reference row to create

try {
    $result = $apiInstance->createCustomerReferencesResource($customer_reference_row);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReferencesResourceApi->createCustomerReferencesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_reference_row** | [**\OpenAPI\Client\Model\CustomerReferenceCustomerReferenceRowWrap**](../Model/CustomerReferenceCustomerReferenceRowWrap.md)| customer reference row to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomerReferenceWrap**](../Model/CustomerReferenceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerReferencesResource()`

```php
getCustomerReferencesResource($customer_reference_row_id): \OpenAPI\Client\Model\CustomerReferenceWrap
```

Retrieve a customer reference row

</p>  <p>You need to supply the unique customer reference row id that was returned when the customer reference row was created or retrieved from the list of customer reference rows.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerReferencesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_reference_row_id = 'customer_reference_row_id_example'; // string | identifies the customer reference row

try {
    $result = $apiInstance->getCustomerReferencesResource($customer_reference_row_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReferencesResourceApi->getCustomerReferencesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_reference_row_id** | **string**| identifies the customer reference row | |

### Return type

[**\OpenAPI\Client\Model\CustomerReferenceWrap**](../Model/CustomerReferenceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomerReferencesResource()`

```php
listCustomerReferencesResource($customer): \OpenAPI\Client\Model\CustomerReferenceWrap
```

Retrieve a list of customers reference rows

</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerReferencesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer = 'customer_example'; // string | possibility to filter by customer number

try {
    $result = $apiInstance->listCustomerReferencesResource($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReferencesResourceApi->listCustomerReferencesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| possibility to filter by customer number | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomerReferenceWrap**](../Model/CustomerReferenceWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCustomerReferencesResource()`

```php
removeCustomerReferencesResource($customer_reference_row_id)
```

Delete a customer reference row

</p>  <p>Deletes the customer reference row permanently. If everything succeeded the response will be of the type 204, No content and the response body will be empty.</p>  <p>If there was any problems an error will be returned.</p>  <p>You need to supply the unique customer reference row id of the customer reference row that you want to delete.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerReferencesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_reference_row_id = 'customer_reference_row_id_example'; // string | identifies the customer reference row

try {
    $apiInstance->removeCustomerReferencesResource($customer_reference_row_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReferencesResourceApi->removeCustomerReferencesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_reference_row_id** | **string**| identifies the customer reference row | |

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

## `updateCustomerReferencesResource()`

```php
updateCustomerReferencesResource($customer_reference_row_id, $customer_reference_row): \OpenAPI\Client\Model\CustomerWrap
```

Update a customer reference row

</p>  <p>The updated customer reference row will be returned if everything succeeded, if there was any problems an error will be returned.</p>  <p>You need to supply the unique customer reference row id of the customer reference row that you want to update.</p>  <p>Only the properties provided in the request body will be updated, properties not provided will be left unchanged.</p>  <p>CustomerNumber cannot be changed by this request.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomerReferencesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_reference_row_id = 'customer_reference_row_id_example'; // string | identifies the customer reference row
$customer_reference_row = new \OpenAPI\Client\Model\CustomerReferenceCustomerReferenceRowWrap(); // \OpenAPI\Client\Model\CustomerReferenceCustomerReferenceRowWrap | customer reference row to update

try {
    $result = $apiInstance->updateCustomerReferencesResource($customer_reference_row_id, $customer_reference_row);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReferencesResourceApi->updateCustomerReferencesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_reference_row_id** | **string**| identifies the customer reference row | |
| **customer_reference_row** | [**\OpenAPI\Client\Model\CustomerReferenceCustomerReferenceRowWrap**](../Model/CustomerReferenceCustomerReferenceRowWrap.md)| customer reference row to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomerWrap**](../Model/CustomerWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
