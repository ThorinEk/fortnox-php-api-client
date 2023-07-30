# FortnoxApi\CustomInboundDocumentResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomInboundDocumentResource()**](CustomInboundDocumentResourceApi.md#getCustomInboundDocumentResource) | **GET** /api/warehouse/documentdeliveries/custom/inbound-v1/{type}/{id} | Get custom inbound document |
| [**releaseCustomInboundDocumentResource()**](CustomInboundDocumentResourceApi.md#releaseCustomInboundDocumentResource) | **PUT** /api/warehouse/documentdeliveries/custom/inbound-v1/{type}/{id}/release | Release custom inbound document |
| [**saveCustomInboundDocumentResource()**](CustomInboundDocumentResourceApi.md#saveCustomInboundDocumentResource) | **PUT** /api/warehouse/documentdeliveries/custom/inbound-v1/{type}/{id} | Save custom inbound document |
| [**voidDocumentCustomInboundDocumentResource()**](CustomInboundDocumentResourceApi.md#voidDocumentCustomInboundDocumentResource) | **PUT** /api/warehouse/documentdeliveries/custom/inbound-v1/{type}/{id}/void | Void custom inbound document |


## `getCustomInboundDocumentResource()`

```php
getCustomInboundDocumentResource($type, $id): \FortnoxApi\Model\CustomInboundDocument
```

Get custom inbound document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CustomInboundDocumentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Document type.
$id = 'id_example'; // string | Document id.

try {
    $result = $apiInstance->getCustomInboundDocumentResource($type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomInboundDocumentResourceApi->getCustomInboundDocumentResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Document type. | |
| **id** | **string**| Document id. | |

### Return type

[**\FortnoxApi\Model\CustomInboundDocument**](../Model/CustomInboundDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseCustomInboundDocumentResource()`

```php
releaseCustomInboundDocumentResource($type, $id)
```

Release custom inbound document

The document will be locked and bookkept.  The inbound deliveries will affect available stock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CustomInboundDocumentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | document type
$id = 'id_example'; // string | document id

try {
    $apiInstance->releaseCustomInboundDocumentResource($type, $id);
} catch (Exception $e) {
    echo 'Exception when calling CustomInboundDocumentResourceApi->releaseCustomInboundDocumentResource: ', $e->getMessage(), PHP_EOL;
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

## `saveCustomInboundDocumentResource()`

```php
saveCustomInboundDocumentResource($type, $id, $document): \FortnoxApi\Model\CustomInboundDocument
```

Save custom inbound document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CustomInboundDocumentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | min 1 character, max 25 characters, may contain letters A-Z, digits 0-9, underscore (_), and dash (-), type is case-insensitive  <blockquote><pre>       Type is a custom name/reference of the document that will be used to reference the document type <br>       * If type is not known, it will be registered as belonging to the INBOUND category. <br>       * If type is an existing custom document type of category OUTBOUND an error is thrown. <br>       * If type is invalid an error is thrown. <br>  </pre></blockquote>
$id = 'id_example'; // string | min 1 character, max 25 characters, may only contain digits 0-9
$document = new \FortnoxApi\Model\CustomInboundDocument(); // \FortnoxApi\Model\CustomInboundDocument | the <code>CustomInboundDocument</code> to create

try {
    $result = $apiInstance->saveCustomInboundDocumentResource($type, $id, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomInboundDocumentResourceApi->saveCustomInboundDocumentResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| min 1 character, max 25 characters, may contain letters A-Z, digits 0-9, underscore (_), and dash (-), type is case-insensitive  &lt;blockquote&gt;&lt;pre&gt;       Type is a custom name/reference of the document that will be used to reference the document type &lt;br&gt;       * If type is not known, it will be registered as belonging to the INBOUND category. &lt;br&gt;       * If type is an existing custom document type of category OUTBOUND an error is thrown. &lt;br&gt;       * If type is invalid an error is thrown. &lt;br&gt;  &lt;/pre&gt;&lt;/blockquote&gt; | |
| **id** | **string**| min 1 character, max 25 characters, may only contain digits 0-9 | |
| **document** | [**\FortnoxApi\Model\CustomInboundDocument**](../Model/CustomInboundDocument.md)| the &lt;code&gt;CustomInboundDocument&lt;/code&gt; to create | [optional] |

### Return type

[**\FortnoxApi\Model\CustomInboundDocument**](../Model/CustomInboundDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidDocumentCustomInboundDocumentResource()`

```php
voidDocumentCustomInboundDocumentResource($type, $id, $force)
```

Void custom inbound document

Voiding a document will undo the possible stock changes that the document had made,  note that the document and the transactions created are not deleted. Some limitations apply, see below.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CustomInboundDocumentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | document type
$id = 'id_example'; // string | document id
$force = True; // bool | true if the document should be voided even if the document has connected outbounds, defaults to false.

try {
    $apiInstance->voidDocumentCustomInboundDocumentResource($type, $id, $force);
} catch (Exception $e) {
    echo 'Exception when calling CustomInboundDocumentResourceApi->voidDocumentCustomInboundDocumentResource: ', $e->getMessage(), PHP_EOL;
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
