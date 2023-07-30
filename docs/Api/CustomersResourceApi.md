# OpenAPI\Client\CustomersResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomersResource()**](CustomersResourceApi.md#createCustomersResource) | **POST** /3/customers/ | Create a customer |
| [**getCustomersResource()**](CustomersResourceApi.md#getCustomersResource) | **GET** /3/customers/{CustomerNumber} | Retrieve a customer |
| [**listCustomersResource()**](CustomersResourceApi.md#listCustomersResource) | **GET** /3/customers/ | Retrieve a list of customers |
| [**removeCustomersResource()**](CustomersResourceApi.md#removeCustomersResource) | **DELETE** /3/customers/{CustomerNumber} | Delete a customer |
| [**updateCustomersResource()**](CustomersResourceApi.md#updateCustomersResource) | **PUT** /3/customers/{CustomerNumber} | Update a customer |


## `createCustomersResource()`

```php
createCustomersResource($customer): \OpenAPI\Client\Model\CustomerWrap
```

Create a customer

The created customer will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer = new \OpenAPI\Client\Model\CustomerWrap(); // \OpenAPI\Client\Model\CustomerWrap | customer to create

try {
    $result = $apiInstance->createCustomersResource($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersResourceApi->createCustomersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | [**\OpenAPI\Client\Model\CustomerWrap**](../Model/CustomerWrap.md)| customer to create | [optional] |

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

## `getCustomersResource()`

```php
getCustomersResource($customer_number): \OpenAPI\Client\Model\CustomerWrap
```

Retrieve a customer

You need to supply the unique customer number that was returned when the customer was created or retrieved from the list of customers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 'customer_number_example'; // string | identifies the customer

try {
    $result = $apiInstance->getCustomersResource($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersResourceApi->getCustomersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_number** | **string**| identifies the customer | |

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

## `listCustomersResource()`

```php
listCustomersResource($filter, $customernumber, $name, $zipcode, $city, $email, $phone, $organisationnumber, $gln, $glndelivery, $lastmodified, $sortby): \OpenAPI\Client\Model\CustomerListItemList
```

Retrieve a list of customers

The customers are returned sorted by customer number with the lowest number appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | possibility to filter customers
$customernumber = 'customernumber_example'; // string | filter by customer number
$name = 'name_example'; // string | filter by name
$zipcode = 'zipcode_example'; // string | filter by zip code
$city = 'city_example'; // string | filter by city
$email = 'email_example'; // string | filter by email
$phone = 'phone_example'; // string | filter by phone
$organisationnumber = 'organisationnumber_example'; // string | filter by organisation number
$gln = 'gln_example'; // string | filter by gln
$glndelivery = 'glndelivery_example'; // string | filter by gln delivery
$lastmodified = 'lastmodified_example'; // string | filter by last modified
$sortby = 'sortby_example'; // string | field to sort returned list

try {
    $result = $apiInstance->listCustomersResource($filter, $customernumber, $name, $zipcode, $city, $email, $phone, $organisationnumber, $gln, $glndelivery, $lastmodified, $sortby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersResourceApi->listCustomersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| possibility to filter customers | [optional] |
| **customernumber** | **string**| filter by customer number | [optional] |
| **name** | **string**| filter by name | [optional] |
| **zipcode** | **string**| filter by zip code | [optional] |
| **city** | **string**| filter by city | [optional] |
| **email** | **string**| filter by email | [optional] |
| **phone** | **string**| filter by phone | [optional] |
| **organisationnumber** | **string**| filter by organisation number | [optional] |
| **gln** | **string**| filter by gln | [optional] |
| **glndelivery** | **string**| filter by gln delivery | [optional] |
| **lastmodified** | **string**| filter by last modified | [optional] |
| **sortby** | **string**| field to sort returned list | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomerListItemList**](../Model/CustomerListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCustomersResource()`

```php
removeCustomersResource($customer_number)
```

Delete a customer

Deletes the customer permanently. If everything succeeded the response will be of the type 204 \\u2013 No content and the response body will be empty. If there was any problems an error will be returned.  You need to supply the unique customer number of the customer that you want to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 'customer_number_example'; // string | identifies the customer

try {
    $apiInstance->removeCustomersResource($customer_number);
} catch (Exception $e) {
    echo 'Exception when calling CustomersResourceApi->removeCustomersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_number** | **string**| identifies the customer | |

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

## `updateCustomersResource()`

```php
updateCustomersResource($customer_number, $customer): \OpenAPI\Client\Model\CustomerWrap
```

Update a customer

<p>The updated customer will be returned if everything succeeded, if there was any problems an error will be returned.</p>  <p>You need to supply the unique customer number of the customer that you want to update.</p>  <p>Only the properties provided in the request body will be updated, properties not provided will left unchanged.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 'customer_number_example'; // string | identifies the customer
$customer = new \OpenAPI\Client\Model\CustomerWrap(); // \OpenAPI\Client\Model\CustomerWrap | customer to update

try {
    $result = $apiInstance->updateCustomersResource($customer_number, $customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersResourceApi->updateCustomersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_number** | **string**| identifies the customer | |
| **customer** | [**\OpenAPI\Client\Model\CustomerWrap**](../Model/CustomerWrap.md)| customer to update | [optional] |

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
