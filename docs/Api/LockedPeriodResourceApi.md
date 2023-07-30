# FortnoxApi\LockedPeriodResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLockedPeriodResource()**](LockedPeriodResourceApi.md#getLockedPeriodResource) | **GET** /3/settings/lockedperiod/ | Retrieve the locked period |


## `getLockedPeriodResource()`

```php
getLockedPeriodResource(): \FortnoxApi\Model\LockedPeriodWrap
```

Retrieve the locked period

If no date is returned, no period is locked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\LockedPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLockedPeriodResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LockedPeriodResourceApi->getLockedPeriodResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\LockedPeriodWrap**](../Model/LockedPeriodWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
