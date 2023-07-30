# OpenAPI\Client\FinancialYearsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFinancialYearsResource()**](FinancialYearsResourceApi.md#createFinancialYearsResource) | **POST** /3/financialyears | Create a financial year |
| [**getByDate()**](FinancialYearsResourceApi.md#getByDate) | **GET** /3/financialyears | Retrieve a list of financial years |
| [**getById()**](FinancialYearsResourceApi.md#getById) | **GET** /3/financialyears/{Id} | Retrieve financial year by id |


## `createFinancialYearsResource()`

```php
createFinancialYearsResource($financial_year): \OpenAPI\Client\Model\FinancialYearWrap
```

Create a financial year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinancialYearsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$financial_year = new \OpenAPI\Client\Model\FinancialYearWrap(); // \OpenAPI\Client\Model\FinancialYearWrap | to create

try {
    $result = $apiInstance->createFinancialYearsResource($financial_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialYearsResourceApi->createFinancialYearsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **financial_year** | [**\OpenAPI\Client\Model\FinancialYearWrap**](../Model/FinancialYearWrap.md)| to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\FinancialYearWrap**](../Model/FinancialYearWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByDate()`

```php
getByDate($date): \OpenAPI\Client\Model\FinancialYearWrapList
```

Retrieve a list of financial years

Add the query param to filter on specific date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinancialYearsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | date to filter on, for example 2020-06-30

try {
    $result = $apiInstance->getByDate($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialYearsResourceApi->getByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **\DateTime**| date to filter on, for example 2020-06-30 | [optional] |

### Return type

[**\OpenAPI\Client\Model\FinancialYearWrapList**](../Model/FinancialYearWrapList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getById()`

```php
getById($id): \OpenAPI\Client\Model\FinancialYearWrap
```

Retrieve financial year by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinancialYearsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | identifies the year

try {
    $result = $apiInstance->getById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialYearsResourceApi->getById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifies the year | |

### Return type

[**\OpenAPI\Client\Model\FinancialYearWrap**](../Model/FinancialYearWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
