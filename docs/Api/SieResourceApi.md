# FortnoxApi\SieResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSieResource()**](SieResourceApi.md#getSieResource) | **GET** /3/sie/{Type} | Retrieve a SIE file |


## `getSieResource()`

```php
getSieResource($type, $financial_year)
```

Retrieve a SIE file

Retrieves a SIE file as streamed content

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\SieResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | type
$financial_year = 56; // int | financialYear

try {
    $apiInstance->getSieResource($type, $financial_year);
} catch (Exception $e) {
    echo 'Exception when calling SieResourceApi->getSieResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| type | |
| **financial_year** | **int**| financialYear | [optional] |

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
