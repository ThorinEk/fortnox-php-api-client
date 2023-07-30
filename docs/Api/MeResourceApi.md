# FortnoxApi\MeResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMeResource()**](MeResourceApi.md#getMeResource) | **GET** /3/me | Retrieve user information  Use this endpoint to retrieve user information related to the used access token |


## `getMeResource()`

```php
getMeResource(): \FortnoxApi\Model\MeWrap
```

Retrieve user information  Use this endpoint to retrieve user information related to the used access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\MeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMeResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeResourceApi->getMeResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\MeWrap**](../Model/MeWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
