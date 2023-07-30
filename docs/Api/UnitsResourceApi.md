# FortnoxApi\UnitsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUnitsResource()**](UnitsResourceApi.md#createUnitsResource) | **POST** /3/units | Create a unit |
| [**getUnitsResource()**](UnitsResourceApi.md#getUnitsResource) | **GET** /3/units/{Code} | Retrieve a single unit |
| [**listUnitsResource()**](UnitsResourceApi.md#listUnitsResource) | **GET** /3/units | Retrieve a list of units |
| [**removeUnitsResource()**](UnitsResourceApi.md#removeUnitsResource) | **DELETE** /3/units/{Code} | Remove a unit |
| [**updateUnitsResource()**](UnitsResourceApi.md#updateUnitsResource) | **PUT** /3/units/{Code} | Update a unit |


## `createUnitsResource()`

```php
createUnitsResource($unit): \FortnoxApi\Model\UnitWrap
```

Create a unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\UnitsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit = new \FortnoxApi\Model\UnitWrap(); // \FortnoxApi\Model\UnitWrap | to create

try {
    $result = $apiInstance->createUnitsResource($unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsResourceApi->createUnitsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unit** | [**\FortnoxApi\Model\UnitWrap**](../Model/UnitWrap.md)| to create | [optional] |

### Return type

[**\FortnoxApi\Model\UnitWrap**](../Model/UnitWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnitsResource()`

```php
getUnitsResource($code): \FortnoxApi\Model\UnitWrap
```

Retrieve a single unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\UnitsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the unit

try {
    $result = $apiInstance->getUnitsResource($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsResourceApi->getUnitsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the unit | |

### Return type

[**\FortnoxApi\Model\UnitWrap**](../Model/UnitWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUnitsResource()`

```php
listUnitsResource(): \FortnoxApi\Model\UnitList
```

Retrieve a list of units

The units register can return a list of records or a single record. By specifying a Code in the URL, a single record will be returned. Not specifying a Code will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\UnitsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listUnitsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsResourceApi->listUnitsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\UnitList**](../Model/UnitList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeUnitsResource()`

```php
removeUnitsResource($code)
```

Remove a unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\UnitsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the unit

try {
    $apiInstance->removeUnitsResource($code);
} catch (Exception $e) {
    echo 'Exception when calling UnitsResourceApi->removeUnitsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the unit | |

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

## `updateUnitsResource()`

```php
updateUnitsResource($code, $unit): \FortnoxApi\Model\UnitWrap
```

Update a unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\UnitsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | identifies the unit
$unit = new \FortnoxApi\Model\UnitWrap(); // \FortnoxApi\Model\UnitWrap | unit to update

try {
    $result = $apiInstance->updateUnitsResource($code, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsResourceApi->updateUnitsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| identifies the unit | |
| **unit** | [**\FortnoxApi\Model\UnitWrap**](../Model/UnitWrap.md)| unit to update | [optional] |

### Return type

[**\FortnoxApi\Model\UnitWrap**](../Model/UnitWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
