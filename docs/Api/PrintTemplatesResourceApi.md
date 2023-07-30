# FortnoxApi\PrintTemplatesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listPrintTemplatesResource()**](PrintTemplatesResourceApi.md#listPrintTemplatesResource) | **GET** /3/printtemplates | Retrieve a list of print templates |


## `listPrintTemplatesResource()`

```php
listPrintTemplatesResource(): \FortnoxApi\Model\PrintTemplateList
```

Retrieve a list of print templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PrintTemplatesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listPrintTemplatesResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrintTemplatesResourceApi->listPrintTemplatesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\PrintTemplateList**](../Model/PrintTemplateList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
