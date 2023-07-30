# OpenAPI\Client\TenantResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTenant()**](TenantResourceApi.md#getTenant) | **GET** /api/warehouse/tenants-v4 | Get Warehouse activation status |


## `getTenant()`

```php
getTenant(): \OpenAPI\Client\Model\TenantInfo
```

Get Warehouse activation status

Check if current tenant has activated Fortnox Warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTenant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantResourceApi->getTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TenantInfo**](../Model/TenantInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
