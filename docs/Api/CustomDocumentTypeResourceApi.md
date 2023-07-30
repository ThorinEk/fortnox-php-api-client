# FortnoxApi\CustomDocumentTypeResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomDocumentTypeResource()**](CustomDocumentTypeResourceApi.md#createCustomDocumentTypeResource) | **POST** /api/warehouse/documentdeliveries/custom/documenttypes-v1 | Create custom document type |
| [**getAllCustomDocumentTypeResource()**](CustomDocumentTypeResourceApi.md#getAllCustomDocumentTypeResource) | **GET** /api/warehouse/documentdeliveries/custom/documenttypes-v1 | List custom document types |
| [**getCustomDocumentTypeResource()**](CustomDocumentTypeResourceApi.md#getCustomDocumentTypeResource) | **GET** /api/warehouse/documentdeliveries/custom/documenttypes-v1/{type} | Get custom document type |


## `createCustomDocumentTypeResource()`

```php
createCustomDocumentTypeResource($custom_document_type): int
```

Create custom document type

Create type, if it doesn't already exists. Note that new custom document types are  created automatically when you create custom documents, so normally  you do not need to call this method.   Throws HTTP 400 <code>referenceTypeNotAllowed</code> if the name of the type is not allowed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CustomDocumentTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_document_type = new \FortnoxApi\Model\CustomDocumentType(); // \FortnoxApi\Model\CustomDocumentType | The <code>CustomDocumentType</code>.

try {
    $result = $apiInstance->createCustomDocumentTypeResource($custom_document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomDocumentTypeResourceApi->createCustomDocumentTypeResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_document_type** | [**\FortnoxApi\Model\CustomDocumentType**](../Model/CustomDocumentType.md)| The &lt;code&gt;CustomDocumentType&lt;/code&gt;. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCustomDocumentTypeResource()`

```php
getAllCustomDocumentTypeResource(): \FortnoxApi\Model\CustomDocumentType[]
```

List custom document types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CustomDocumentTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllCustomDocumentTypeResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomDocumentTypeResourceApi->getAllCustomDocumentTypeResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\CustomDocumentType[]**](../Model/CustomDocumentType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomDocumentTypeResource()`

```php
getCustomDocumentTypeResource($type): \FortnoxApi\Model\CustomDocumentType
```

Get custom document type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CustomDocumentTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | the name of the reference type

try {
    $result = $apiInstance->getCustomDocumentTypeResource($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomDocumentTypeResourceApi->getCustomDocumentTypeResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| the name of the reference type | |

### Return type

[**\FortnoxApi\Model\CustomDocumentType**](../Model/CustomDocumentType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
