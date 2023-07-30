# FortnoxApi\PredefinedAccountsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPredefinedAccountsResource()**](PredefinedAccountsResourceApi.md#getPredefinedAccountsResource) | **GET** /3/predefinedaccounts/{name} | Retrieve information for a specific account type |
| [**listPredefinedAccountsResource()**](PredefinedAccountsResourceApi.md#listPredefinedAccountsResource) | **GET** /3/predefinedaccounts/ | Retrieve a list of all predefined accounts |
| [**updatePredefinedAccountsResource()**](PredefinedAccountsResourceApi.md#updatePredefinedAccountsResource) | **PUT** /3/predefinedaccounts/{name} | Update a Predefined Account |


## `getPredefinedAccountsResource()`

```php
getPredefinedAccountsResource($name): \FortnoxApi\Model\PredefinedAccountWrap
```

Retrieve information for a specific account type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PredefinedAccountsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | identifies the predefined account

try {
    $result = $apiInstance->getPredefinedAccountsResource($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedAccountsResourceApi->getPredefinedAccountsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| identifies the predefined account | |

### Return type

[**\FortnoxApi\Model\PredefinedAccountWrap**](../Model/PredefinedAccountWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPredefinedAccountsResource()`

```php
listPredefinedAccountsResource(): \FortnoxApi\Model\PredefinedAccountList
```

Retrieve a list of all predefined accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PredefinedAccountsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listPredefinedAccountsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedAccountsResourceApi->listPredefinedAccountsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FortnoxApi\Model\PredefinedAccountList**](../Model/PredefinedAccountList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePredefinedAccountsResource()`

```php
updatePredefinedAccountsResource($name, $predefined_account): \FortnoxApi\Model\PredefinedAccountWrap
```

Update a Predefined Account

An endpoint for updating a Predefined Account. Predefined Accounts are identified by their <em>name</em>-field, and as such must be unique.  Some Predefined Accounts distinguish between Goods and Services.  In this case, the former retains the original name whereas the latter ends with a 2. Such as <em>SALES</em> and <em>SALES2</em>.  Accounts are chosen from the Account Registry, and if you have EasyVat enabled then the new EasyVat Predefined Accounts (<em>SALES_25_SE</em>, etc.) have certain restrictions on the accounts that can be selected.  Refer to the table below.   <table>      <caption>Account restrictions when EasyVat has been enabled.</caption>      <tr>          <th>Name</th>          <th>VAT Code</th>          <th>Restrictions</th>      </tr>      <tr>          <td>SALES_25_SE</td>          <td>MP1</td>          <td>Must have a compatible VAT Code.</td>      </tr>      <tr>          <td>SALES_12_SE</td>          <td>MP2</td>          <td>Must have a compatible VAT Code.</td>      </tr>      <tr>          <td>SALES_6_SE</td>          <td>MP3</td>          <td>Must have a compatible VAT Code.</td>      </tr>      <tr>          <td>SALES_0_SE</td>          <td>MF</td>          <td>Must have a compatible VAT Code.</td>      </tr>  </table>   This endpoint can produce errors, some of which may only be relevant for EasyVat. Refer to the table below.  <table>      <caption>Errors that can be raised by this endpoint.</caption>      <tr>          <th>Error Code</th>          <th>HTTP Code</th>          <th>Description</th>          <th>Solution</th>      </tr>      <tr>          <td>2001265</td>          <td>400</td>          <td>The provided account is invalid. It either has not been provided, does not exist, or is inactive.</td>          <td>Verify that an account has been provided and that it exists and is active.</td>      </tr>      <tr>          <td>2002462</td>          <td>400</td>          <td>The account is not in a valid format.</td>          <td>Verify that the format of the account is correct. It has to consist of 4 digits.</td>      </tr>      <tr>          <td>2000729</td>          <td>400</td>          <td>A Predefined Account has not been provided.</td>          <td>Verify that a valid Predefined Account has been provided as a PATH-parameter.</td>      </tr>      <tr>          <td>2004052</td>          <td>400</td>          <td>The provided account has an incompatible VAT Code. Only applies if EasyVat has been enabled.</td>          <td>Verify that the provided account has a VAT Code that is compatible with the selected Predefined Account. Refer to the table above for more information about compatibility.</td>      </tr>  </table>   If you have activated EasyVat, you can read more about how to use the new Predefined Accounts with your documents in their respective api documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FortnoxApi\Api\PredefinedAccountsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | identifies the predefined account
$predefined_account = new \FortnoxApi\Model\PredefinedAccountWrap(); // \FortnoxApi\Model\PredefinedAccountWrap | predefined account to update

try {
    $result = $apiInstance->updatePredefinedAccountsResource($name, $predefined_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedAccountsResourceApi->updatePredefinedAccountsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| identifies the predefined account | |
| **predefined_account** | [**\FortnoxApi\Model\PredefinedAccountWrap**](../Model/PredefinedAccountWrap.md)| predefined account to update | [optional] |

### Return type

[**\FortnoxApi\Model\PredefinedAccountWrap**](../Model/PredefinedAccountWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
