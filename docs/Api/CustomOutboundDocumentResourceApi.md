# OpenAPI\Client\CustomOutboundDocumentResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**get()**](CustomOutboundDocumentResourceApi.md#get) | **GET** /api/warehouse/documentdeliveries/custom/outbound-v1/{type}/{id} | Get custom outbound document |
| [**release()**](CustomOutboundDocumentResourceApi.md#release) | **PUT** /api/warehouse/documentdeliveries/custom/outbound-v1/{type}/{id}/release | Release custom outbound document |
| [**save()**](CustomOutboundDocumentResourceApi.md#save) | **PUT** /api/warehouse/documentdeliveries/custom/outbound-v1/{type}/{id} | Save a custom outbound document |
| [**voidDocument()**](CustomOutboundDocumentResourceApi.md#voidDocument) | **PUT** /api/warehouse/documentdeliveries/custom/outbound-v1/{type}/{id}/void | Void custom outbound document |


## `get()`

```php
get($type, $id): \OpenAPI\Client\Model\CustomOutboundDocument
```

Get custom outbound document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomOutboundDocumentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | document type
$id = 'id_example'; // string | document id

try {
    $result = $apiInstance->get($type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomOutboundDocumentResourceApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| document type | |
| **id** | **string**| document id | |

### Return type

[**\OpenAPI\Client\Model\CustomOutboundDocument**](../Model/CustomOutboundDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `release()`

```php
release($type, $id)
```

Release custom outbound document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomOutboundDocumentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | document type
$id = 'id_example'; // string | document id

try {
    $apiInstance->release($type, $id);
} catch (Exception $e) {
    echo 'Exception when calling CustomOutboundDocumentResourceApi->release: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| document type | |
| **id** | **string**| document id | |

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

## `save()`

```php
save($type, $id, $document): \OpenAPI\Client\Model\CustomOutboundDocument
```

Save a custom outbound document

<br>  If type is not known, it will be registered as belonging to the OUTBOUND category.<br>  If type is an existing custom document type of category INBOUND an error is thrown.<br>  If type is invalid an error is thrown.<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomOutboundDocumentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | the type of the custom outbound document, min 1 character, max 25 characters, may contain letters A-Z, digits 0-9, underscore (_), and dash (-). Always stored as upper case.
$id = 'id_example'; // string | the id of the custom outbound document, min 1 character, max 25 characters, may only contain digits 0-9
$document = new \OpenAPI\Client\Model\CustomOutboundDocument(); // \OpenAPI\Client\Model\CustomOutboundDocument | the <code>CustomOutboundDocument</code> to create

try {
    $result = $apiInstance->save($type, $id, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomOutboundDocumentResourceApi->save: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| the type of the custom outbound document, min 1 character, max 25 characters, may contain letters A-Z, digits 0-9, underscore (_), and dash (-). Always stored as upper case. | |
| **id** | **string**| the id of the custom outbound document, min 1 character, max 25 characters, may only contain digits 0-9 | |
| **document** | [**\OpenAPI\Client\Model\CustomOutboundDocument**](../Model/CustomOutboundDocument.md)| the &lt;code&gt;CustomOutboundDocument&lt;/code&gt; to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomOutboundDocument**](../Model/CustomOutboundDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidDocument()`

```php
voidDocument($type, $id, $force)
```

Void custom outbound document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomOutboundDocumentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | document type
$id = 'id_example'; // string | document id
$force = True; // bool | true if the document should be voided even if the document has connected outbounds, defaults to false.

try {
    $apiInstance->voidDocument($type, $id, $force);
} catch (Exception $e) {
    echo 'Exception when calling CustomOutboundDocumentResourceApi->voidDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| document type | |
| **id** | **string**| document id | |
| **force** | **bool**| true if the document should be voided even if the document has connected outbounds, defaults to false. | [optional] |

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
