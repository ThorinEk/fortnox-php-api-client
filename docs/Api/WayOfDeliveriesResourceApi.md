# OpenAPI\Client\WayOfDeliveriesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWayOfDeliveriesResource()**](WayOfDeliveriesResourceApi.md#createWayOfDeliveriesResource) | **POST** /3/wayofdeliveries | Create a way of delivery |
| [**getWayOfDeliveriesResource()**](WayOfDeliveriesResourceApi.md#getWayOfDeliveriesResource) | **GET** /3/wayofdeliveries/{Code} | Retrieve a single way of delivery |
| [**listWayOfDeliveriesResource()**](WayOfDeliveriesResourceApi.md#listWayOfDeliveriesResource) | **GET** /3/wayofdeliveries | Retrieve a list of way of deliveries |
| [**removeWayOfDeliveriesResource()**](WayOfDeliveriesResourceApi.md#removeWayOfDeliveriesResource) | **DELETE** /3/wayofdeliveries/{Code} | Remove a way of delivery |
| [**updateWayOfDeliveriesResource()**](WayOfDeliveriesResourceApi.md#updateWayOfDeliveriesResource) | **PUT** /3/wayofdeliveries/{Code} | Update a way of delivery |


## `createWayOfDeliveriesResource()`

```php
createWayOfDeliveriesResource($way_of_delivery): \OpenAPI\Client\Model\WayOfDeliveryWrap
```

Create a way of delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WayOfDeliveriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$way_of_delivery = new \OpenAPI\Client\Model\WayOfDeliveryWrap(); // \OpenAPI\Client\Model\WayOfDeliveryWrap | way of delivery to create

try {
    $result = $apiInstance->createWayOfDeliveriesResource($way_of_delivery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WayOfDeliveriesResourceApi->createWayOfDeliveriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **way_of_delivery** | [**\OpenAPI\Client\Model\WayOfDeliveryWrap**](../Model/WayOfDeliveryWrap.md)| way of delivery to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\WayOfDeliveryWrap**](../Model/WayOfDeliveryWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWayOfDeliveriesResource()`

```php
getWayOfDeliveriesResource($code): \OpenAPI\Client\Model\WayOfDeliveryWrap
```

Retrieve a single way of delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WayOfDeliveriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the way of delivery

try {
    $result = $apiInstance->getWayOfDeliveriesResource($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WayOfDeliveriesResourceApi->getWayOfDeliveriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the way of delivery | |

### Return type

[**\OpenAPI\Client\Model\WayOfDeliveryWrap**](../Model/WayOfDeliveryWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWayOfDeliveriesResource()`

```php
listWayOfDeliveriesResource(): \OpenAPI\Client\Model\WayOfDeliveryList
```

Retrieve a list of way of deliveries

The way of delivery register can return a list of records or a single record. By specifying a Code in the URL, a single record will be returned. Not specifying a Code will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WayOfDeliveriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listWayOfDeliveriesResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WayOfDeliveriesResourceApi->listWayOfDeliveriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WayOfDeliveryList**](../Model/WayOfDeliveryList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeWayOfDeliveriesResource()`

```php
removeWayOfDeliveriesResource($code)
```

Remove a way of delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WayOfDeliveriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the way of delivery

try {
    $apiInstance->removeWayOfDeliveriesResource($code);
} catch (Exception $e) {
    echo 'Exception when calling WayOfDeliveriesResourceApi->removeWayOfDeliveriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the way of delivery | |

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

## `updateWayOfDeliveriesResource()`

```php
updateWayOfDeliveriesResource($code, $way_of_delivery): \OpenAPI\Client\Model\WayOfDeliveryWrap
```

Update a way of delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WayOfDeliveriesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the way of delivery
$way_of_delivery = new \OpenAPI\Client\Model\WayOfDeliveryWrap(); // \OpenAPI\Client\Model\WayOfDeliveryWrap | way of delivery to update

try {
    $result = $apiInstance->updateWayOfDeliveriesResource($code, $way_of_delivery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WayOfDeliveriesResourceApi->updateWayOfDeliveriesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the way of delivery | |
| **way_of_delivery** | [**\OpenAPI\Client\Model\WayOfDeliveryWrap**](../Model/WayOfDeliveryWrap.md)| way of delivery to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\WayOfDeliveryWrap**](../Model/WayOfDeliveryWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
