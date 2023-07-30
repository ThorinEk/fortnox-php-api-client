# FortnoxApi\AccountChartsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAccountChartsResource()**](AccountChartsResourceApi.md#listAccountChartsResource) | **GET** /3/accountcharts | List all account charts |


## `listAccountChartsResource()`

```php
listAccountChartsResource(): \FortnoxApi\Model\AccountChartWrap
```

List all account charts

Retrieves a list of all the available account charts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\AccountChartsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listAccountChartsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountChartsResourceApi->listAccountChartsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\AccountChartWrap**](../Model/AccountChartWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
