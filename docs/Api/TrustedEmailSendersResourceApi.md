# OpenAPI\Client\TrustedEmailSendersResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTrustedEmailSendersResource()**](TrustedEmailSendersResourceApi.md#createTrustedEmailSendersResource) | **POST** /3/emailsenders/trusted | Add a new email address as trusted |
| [**getTrustedEmailSendersResource()**](TrustedEmailSendersResourceApi.md#getTrustedEmailSendersResource) | **GET** /3/emailsenders/ | Retrieve a list of all trusted and rejected senders |
| [**removeTrustedEmailSendersResource()**](TrustedEmailSendersResourceApi.md#removeTrustedEmailSendersResource) | **DELETE** /3/emailsenders/trusted/{Id} | Delete an email address from the trusted senders list |


## `createTrustedEmailSendersResource()`

```php
createTrustedEmailSendersResource($trusted_email_sender): \OpenAPI\Client\Model\TrustedEmailSenderTrustedSenderWrap
```

Add a new email address as trusted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrustedEmailSendersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trusted_email_sender = new \OpenAPI\Client\Model\TrustedEmailSenderTrustedSenderWrap(); // \OpenAPI\Client\Model\TrustedEmailSenderTrustedSenderWrap | trusted email sender to create

try {
    $result = $apiInstance->createTrustedEmailSendersResource($trusted_email_sender);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrustedEmailSendersResourceApi->createTrustedEmailSendersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trusted_email_sender** | [**\OpenAPI\Client\Model\TrustedEmailSenderTrustedSenderWrap**](../Model/TrustedEmailSenderTrustedSenderWrap.md)| trusted email sender to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrustedEmailSenderTrustedSenderWrap**](../Model/TrustedEmailSenderTrustedSenderWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrustedEmailSendersResource()`

```php
getTrustedEmailSendersResource(): \OpenAPI\Client\Model\TrustedEmailSenderWrap
```

Retrieve a list of all trusted and rejected senders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrustedEmailSendersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTrustedEmailSendersResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrustedEmailSendersResourceApi->getTrustedEmailSendersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TrustedEmailSenderWrap**](../Model/TrustedEmailSenderWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTrustedEmailSendersResource()`

```php
removeTrustedEmailSendersResource($id)
```

Delete an email address from the trusted senders list

Provide an id matching an email to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrustedEmailSendersResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | identifies the trusted email sender to delete

try {
    $apiInstance->removeTrustedEmailSendersResource($id);
} catch (Exception $e) {
    echo 'Exception when calling TrustedEmailSendersResourceApi->removeTrustedEmailSendersResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifies the trusted email sender to delete | |

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
