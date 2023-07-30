# FortnoxApi\VacationDebtBasisResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getVacationDebtBasisResource()**](VacationDebtBasisResourceApi.md#getVacationDebtBasisResource) | **GET** /3/vacationdebtbasis/{Year}/{Month} | Retrieve a specific vacation debt basis for a posted voucher |


## `getVacationDebtBasisResource()`

```php
getVacationDebtBasisResource($year, $month): \FortnoxApi\Model\VacationDebtBasisWrap
```

Retrieve a specific vacation debt basis for a posted voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\VacationDebtBasisResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$year = 56; // int
$month = 56; // int

try {
    $result = $apiInstance->getVacationDebtBasisResource($year, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VacationDebtBasisResourceApi->getVacationDebtBasisResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **year** | **int**|  | |
| **month** | **int**|  | |

### Return type

[**\FortnoxApi\Model\VacationDebtBasisWrap**](../Model/VacationDebtBasisWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
