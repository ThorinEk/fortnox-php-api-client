# OpenAPI\Client\CostCentersResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCostCentersResource()**](CostCentersResourceApi.md#createCostCentersResource) | **POST** /3/costcenters | Create a cost center |
| [**getCostCentersResource()**](CostCentersResourceApi.md#getCostCentersResource) | **GET** /3/costcenters/{Code} | Retrieve a single cost center |
| [**listCostCentersResource()**](CostCentersResourceApi.md#listCostCentersResource) | **GET** /3/costcenters | Retrieve a list of cost centers |
| [**removeCostCentersResource()**](CostCentersResourceApi.md#removeCostCentersResource) | **DELETE** /3/costcenters/{Code} | Remove a cost center |
| [**updateCostCentersResource()**](CostCentersResourceApi.md#updateCostCentersResource) | **PUT** /3/costcenters/{Code} | Update a cost center |


## `createCostCentersResource()`

```php
createCostCentersResource($cost_center): \OpenAPI\Client\Model\CostCenterWrap
```

Create a cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CostCentersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cost_center = new \OpenAPI\Client\Model\CostCenterWrap(); // \OpenAPI\Client\Model\CostCenterWrap | cost center to create

try {
    $result = $apiInstance->createCostCentersResource($cost_center);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersResourceApi->createCostCentersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cost_center** | [**\OpenAPI\Client\Model\CostCenterWrap**](../Model/CostCenterWrap.md)| cost center to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\CostCenterWrap**](../Model/CostCenterWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCostCentersResource()`

```php
getCostCentersResource($code): \OpenAPI\Client\Model\CostCenterWrap
```

Retrieve a single cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CostCentersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the cost center

try {
    $result = $apiInstance->getCostCentersResource($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersResourceApi->getCostCentersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the cost center | |

### Return type

[**\OpenAPI\Client\Model\CostCenterWrap**](../Model/CostCenterWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCostCentersResource()`

```php
listCostCentersResource(): \OpenAPI\Client\Model\CostCenterList
```

Retrieve a list of cost centers

The cost centers register can return a list of records or a single record. By specifying a Code in the URL, a single record will be returned. Not specifying a Code will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CostCentersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listCostCentersResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersResourceApi->listCostCentersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CostCenterList**](../Model/CostCenterList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCostCentersResource()`

```php
removeCostCentersResource($code)
```

Remove a cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CostCentersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the cost center to remove

try {
    $apiInstance->removeCostCentersResource($code);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersResourceApi->removeCostCentersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the cost center to remove | |

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

## `updateCostCentersResource()`

```php
updateCostCentersResource($code, $cost_center): \OpenAPI\Client\Model\CostCenterWrap
```

Update a cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CostCentersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the cost center
$cost_center = new \OpenAPI\Client\Model\CostCenterWrap(); // \OpenAPI\Client\Model\CostCenterWrap | cost center to update

try {
    $result = $apiInstance->updateCostCentersResource($code, $cost_center);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersResourceApi->updateCostCentersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the cost center | |
| **cost_center** | [**\OpenAPI\Client\Model\CostCenterWrap**](../Model/CostCenterWrap.md)| cost center to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\CostCenterWrap**](../Model/CostCenterWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
