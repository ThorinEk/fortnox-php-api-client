# OpenAPI\Client\ContractTemplatesResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContractTemplatesResource()**](ContractTemplatesResourceApi.md#createContractTemplatesResource) | **POST** /3/contracttemplates/ | Create a contract template |
| [**getContractTemplatesResource()**](ContractTemplatesResourceApi.md#getContractTemplatesResource) | **GET** /3/contracttemplates/{TemplateNumber} | Retrieve a single contract template |
| [**listContractTemplatesResource()**](ContractTemplatesResourceApi.md#listContractTemplatesResource) | **GET** /3/contracttemplates/ | Retrieve a list of contract templates |
| [**updateContractTemplatesResource()**](ContractTemplatesResourceApi.md#updateContractTemplatesResource) | **PUT** /3/contracttemplates/{TemplateNumber} | Update a contract template |


## `createContractTemplatesResource()`

```php
createContractTemplatesResource($contract_template): \OpenAPI\Client\Model\ContractTemplateWrap
```

Create a contract template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractTemplatesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_template = new \OpenAPI\Client\Model\ContractTemplateWrap(); // \OpenAPI\Client\Model\ContractTemplateWrap | contract template to create

try {
    $result = $apiInstance->createContractTemplatesResource($contract_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTemplatesResourceApi->createContractTemplatesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_template** | [**\OpenAPI\Client\Model\ContractTemplateWrap**](../Model/ContractTemplateWrap.md)| contract template to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContractTemplateWrap**](../Model/ContractTemplateWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContractTemplatesResource()`

```php
getContractTemplatesResource($template_number): \OpenAPI\Client\Model\ContractTemplateWrap
```

Retrieve a single contract template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractTemplatesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_number = 56; // int | identifies the contract template

try {
    $result = $apiInstance->getContractTemplatesResource($template_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTemplatesResourceApi->getContractTemplatesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_number** | **int**| identifies the contract template | |

### Return type

[**\OpenAPI\Client\Model\ContractTemplateWrap**](../Model/ContractTemplateWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContractTemplatesResource()`

```php
listContractTemplatesResource(): \OpenAPI\Client\Model\ContractTemplateListItemList
```

Retrieve a list of contract templates

The contract template resource can return a list of records or a single record. By specifying a TemplateNumber in the URL, a single record will be returned. Not specifying a TemplateNumber will return a list of records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractTemplatesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listContractTemplatesResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTemplatesResourceApi->listContractTemplatesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ContractTemplateListItemList**](../Model/ContractTemplateListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContractTemplatesResource()`

```php
updateContractTemplatesResource($template_number, $contract_template): \OpenAPI\Client\Model\ContractTemplateWrap
```

Update a contract template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContractTemplatesResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_number = 56; // int | identifies the contract template
$contract_template = new \OpenAPI\Client\Model\ContractTemplateWrap(); // \OpenAPI\Client\Model\ContractTemplateWrap | contract template to update

try {
    $result = $apiInstance->updateContractTemplatesResource($template_number, $contract_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTemplatesResourceApi->updateContractTemplatesResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_number** | **int**| identifies the contract template | |
| **contract_template** | [**\OpenAPI\Client\Model\ContractTemplateWrap**](../Model/ContractTemplateWrap.md)| contract template to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContractTemplateWrap**](../Model/ContractTemplateWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
