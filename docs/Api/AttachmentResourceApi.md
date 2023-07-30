# FortnoxApi\AttachmentResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attach()**](AttachmentResourceApi.md#attach) | **POST** /api/fileattachments/attachments-v1 | Attach files to one or more entities |
| [**detach()**](AttachmentResourceApi.md#detach) | **DELETE** /api/fileattachments/attachments-v1/{attachmentId} | Detach file |
| [**getAttachments()**](AttachmentResourceApi.md#getAttachments) | **GET** /api/fileattachments/attachments-v1 | Get attached files on an entity |
| [**getNumberOfAttachmentsForEntity()**](AttachmentResourceApi.md#getNumberOfAttachmentsForEntity) | **GET** /api/fileattachments/attachments-v1/numberofattachments | List number of attachments |
| [**updateAttachment()**](AttachmentResourceApi.md#updateAttachment) | **PUT** /api/fileattachments/attachments-v1/{attachmentId} | Update attachment |
| [**validateIncludedOnSend()**](AttachmentResourceApi.md#validateIncludedOnSend) | **POST** /api/fileattachments/attachments-v1/validateincludedonsend | Validates a list of attachments that will be included on send |


## `attach()`

```php
attach($attachments): \FortnoxApi\Model\Attachment[]
```

Attach files to one or more entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AttachmentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachments = array(new \FortnoxApi\Model\Attachment()); // \FortnoxApi\Model\Attachment[] | A list of attachments

try {
    $result = $apiInstance->attach($attachments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentResourceApi->attach: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachments** | [**\FortnoxApi\Model\Attachment[]**](../Model/Attachment.md)| A list of attachments | [optional] |

### Return type

[**\FortnoxApi\Model\Attachment[]**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `detach()`

```php
detach($attachment_id)
```

Detach file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AttachmentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = 'attachment_id_example'; // string | id of the attachment to be detached

try {
    $apiInstance->detach($attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentResourceApi->detach: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment_id** | **string**| id of the attachment to be detached | |

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

## `getAttachments()`

```php
getAttachments($entityid, $entitytype): \FortnoxApi\Model\Attachment[]
```

Get attached files on an entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AttachmentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entityid = array(56); // int[] | ids of the entities whose attachments should be fetched
$entitytype = 'entitytype_example'; // string | type of the entities whose attachments should be fetched

try {
    $result = $apiInstance->getAttachments($entityid, $entitytype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentResourceApi->getAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entityid** | [**int[]**](../Model/int.md)| ids of the entities whose attachments should be fetched | |
| **entitytype** | **string**| type of the entities whose attachments should be fetched | |

### Return type

[**\FortnoxApi\Model\Attachment[]**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNumberOfAttachmentsForEntity()`

```php
getNumberOfAttachmentsForEntity($entityids, $entitytype): \FortnoxApi\Model\NumberOfAttachments[]
```

List number of attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AttachmentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entityids = array(56); // int[] | ids of the entities to look for number of attachments on
$entitytype = 'entitytype_example'; // string | type of the entities  to look for number of attachments on

try {
    $result = $apiInstance->getNumberOfAttachmentsForEntity($entityids, $entitytype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentResourceApi->getNumberOfAttachmentsForEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entityids** | [**int[]**](../Model/int.md)| ids of the entities to look for number of attachments on | |
| **entitytype** | **string**| type of the entities  to look for number of attachments on | |

### Return type

[**\FortnoxApi\Model\NumberOfAttachments[]**](../Model/NumberOfAttachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAttachment()`

```php
updateAttachment($attachment_id, $attachment): \FortnoxApi\Model\Attachment
```

Update attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AttachmentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = 'attachment_id_example'; // string | id of the attachment to be updated
$attachment = new \FortnoxApi\Model\Attachment(); // \FortnoxApi\Model\Attachment | an attachment

try {
    $result = $apiInstance->updateAttachment($attachment_id, $attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentResourceApi->updateAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment_id** | **string**| id of the attachment to be updated | |
| **attachment** | [**\FortnoxApi\Model\Attachment**](../Model/Attachment.md)| an attachment | [optional] |

### Return type

[**\FortnoxApi\Model\Attachment**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateIncludedOnSend()`

```php
validateIncludedOnSend($attachments)
```

Validates a list of attachments that will be included on send

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AttachmentResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachments = array(new \FortnoxApi\Model\Attachment()); // \FortnoxApi\Model\Attachment[] | a list of Attachments

try {
    $apiInstance->validateIncludedOnSend($attachments);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentResourceApi->validateIncludedOnSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachments** | [**\FortnoxApi\Model\Attachment[]**](../Model/Attachment.md)| a list of Attachments | [optional] |

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
