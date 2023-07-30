# FortnoxApi\EUVatLimitRegulationResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEUVatLimitRegulationResource()**](EUVatLimitRegulationResourceApi.md#getEUVatLimitRegulationResource) | **GET** /3/euvatlimitregulation/ | Retrieve details about eu vat limit |


## `getEUVatLimitRegulationResource()`

```php
getEUVatLimitRegulationResource($year): \FortnoxApi\Model\EUVatLimitRegulationWrap
```

Retrieve details about eu vat limit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\EUVatLimitRegulationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$year = 56; // int | eu vat limit regulation for year, if not provided than this will be set to current year

try {
    $result = $apiInstance->getEUVatLimitRegulationResource($year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EUVatLimitRegulationResourceApi->getEUVatLimitRegulationResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **year** | **int**| eu vat limit regulation for year, if not provided than this will be set to current year | [optional] |

### Return type

[**\FortnoxApi\Model\EUVatLimitRegulationWrap**](../Model/EUVatLimitRegulationWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
