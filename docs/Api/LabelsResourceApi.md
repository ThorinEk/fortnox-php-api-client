# OpenAPI\Client\LabelsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLabelsResource()**](LabelsResourceApi.md#createLabelsResource) | **POST** /3/labels | Create a label |
| [**listLabelsResource()**](LabelsResourceApi.md#listLabelsResource) | **GET** /3/labels | Retrieve a list of labels |
| [**removeLabelsResource()**](LabelsResourceApi.md#removeLabelsResource) | **DELETE** /3/labels/{Id} | Delete a label |
| [**updateLabelsResource()**](LabelsResourceApi.md#updateLabelsResource) | **PUT** /3/labels/{Id} | Update a label |


## `createLabelsResource()`

```php
createLabelsResource($label): \OpenAPI\Client\Model\LabelWrap
```

Create a label

The created label will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LabelsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$label = new \OpenAPI\Client\Model\LabelWrap(); // \OpenAPI\Client\Model\LabelWrap | to create

try {
    $result = $apiInstance->createLabelsResource($label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsResourceApi->createLabelsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label** | [**\OpenAPI\Client\Model\LabelWrap**](../Model/LabelWrap.md)| to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\LabelWrap**](../Model/LabelWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLabelsResource()`

```php
listLabelsResource(): \OpenAPI\Client\Model\LabelList
```

Retrieve a list of labels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LabelsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listLabelsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsResourceApi->listLabelsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LabelList**](../Model/LabelList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeLabelsResource()`

```php
removeLabelsResource($id)
```

Delete a label

Deletes the label and its connection to documents permanently.  You need to supply the unique label id that was returned when the label was created or retrieved from the list of labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LabelsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | identifies the label

try {
    $apiInstance->removeLabelsResource($id);
} catch (Exception $e) {
    echo 'Exception when calling LabelsResourceApi->removeLabelsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifies the label | |

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

## `updateLabelsResource()`

```php
updateLabelsResource($id, $label): \OpenAPI\Client\Model\LabelWrap
```

Update a label

Updates the specified label with the values provided in the properties. Any property not provided will be left unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LabelsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | identifies the label
$label = new \OpenAPI\Client\Model\LabelWrap(); // \OpenAPI\Client\Model\LabelWrap | to update

try {
    $result = $apiInstance->updateLabelsResource($id, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsResourceApi->updateLabelsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifies the label | |
| **label** | [**\OpenAPI\Client\Model\LabelWrap**](../Model/LabelWrap.md)| to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\LabelWrap**](../Model/LabelWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
