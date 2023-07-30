# FortnoxApi\CompanySettingsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCompanySettingsResource()**](CompanySettingsResourceApi.md#getCompanySettingsResource) | **GET** /3/settings/company/ | Retrieve the company settings |


## `getCompanySettingsResource()`

```php
getCompanySettingsResource(): \FortnoxApi\Model\CompanySettingsWrap
```

Retrieve the company settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\CompanySettingsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCompanySettingsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsResourceApi->getCompanySettingsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\CompanySettingsWrap**](../Model/CompanySettingsWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
