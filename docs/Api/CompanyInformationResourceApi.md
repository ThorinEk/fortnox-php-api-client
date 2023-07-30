# OpenAPI\Client\CompanyInformationResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCompanyInformationResource()**](CompanyInformationResourceApi.md#getCompanyInformationResource) | **GET** /3/companyinformation | Retrieve the Company Information |


## `getCompanyInformationResource()`

```php
getCompanyInformationResource(): \OpenAPI\Client\Model\CompanyInfoWrap
```

Retrieve the Company Information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompanyInformationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCompanyInformationResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyInformationResourceApi->getCompanyInformationResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CompanyInfoWrap**](../Model/CompanyInfoWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
