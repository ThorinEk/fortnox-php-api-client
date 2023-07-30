# OpenAPI\Client\AccountsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccountsResource()**](AccountsResourceApi.md#createAccountsResource) | **POST** /3/accounts/ | Create an account |
| [**getAccountsResource()**](AccountsResourceApi.md#getAccountsResource) | **GET** /3/accounts/{Number} | Retrieve an account |
| [**listAccountsResource()**](AccountsResourceApi.md#listAccountsResource) | **GET** /3/accounts/ | List all accounts |
| [**updateAccountsResource()**](AccountsResourceApi.md#updateAccountsResource) | **PUT** /3/accounts/{Number} | Update an account |


## `createAccountsResource()`

```php
createAccountsResource($financialyear, $account_payload): \OpenAPI\Client\Model\AccountSingleItemWrap
```

Create an account

The created account will be returned if everything succeeded, if there was any problems an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$financialyear = 56; // int | financial year to create account against
$account_payload = new \OpenAPI\Client\Model\AccountPayloadWrap(); // \OpenAPI\Client\Model\AccountPayloadWrap | account to create

try {
    $result = $apiInstance->createAccountsResource($financialyear, $account_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsResourceApi->createAccountsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **financialyear** | **int**| financial year to create account against | [optional] |
| **account_payload** | [**\OpenAPI\Client\Model\AccountPayloadWrap**](../Model/AccountPayloadWrap.md)| account to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountSingleItemWrap**](../Model/AccountSingleItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountsResource()`

```php
getAccountsResource($number): \OpenAPI\Client\Model\AccountSingleItemWrap
```

Retrieve an account

Retrieves the details of an account. You need to supply the unique account number that was returned when the account was created or retrieved from the list of accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 56; // int | identifies the account

try {
    $result = $apiInstance->getAccountsResource($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsResourceApi->getAccountsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| identifies the account | |

### Return type

[**\OpenAPI\Client\Model\AccountSingleItemWrap**](../Model/AccountSingleItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountsResource()`

```php
listAccountsResource($lastmodified, $sru, $sortby): \OpenAPI\Client\Model\AccountListItemWrap
```

List all accounts

The accounts are returned sorted by account number with the lowest number appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lastmodified = 'lastmodified_example'; // string
$sru = 56; // int
$sortby = 'sortby_example'; // string | field to sort returned list on

try {
    $result = $apiInstance->listAccountsResource($lastmodified, $sru, $sortby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsResourceApi->listAccountsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lastmodified** | **string**|  | [optional] |
| **sru** | **int**|  | [optional] |
| **sortby** | **string**| field to sort returned list on | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountListItemWrap**](../Model/AccountListItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountsResource()`

```php
updateAccountsResource($number, $financialyear, $account_payload): \OpenAPI\Client\Model\AccountSingleItemWrap
```

Update an account

Updates the specified account with the values provided in the properties. Any property not provided will be left unchanged.  Note that even though the account number is writeable you can&acute;t change the number of an existing account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 56; // int | identifies the account
$financialyear = 56; // int | financial year to update account against
$account_payload = new \OpenAPI\Client\Model\AccountPayloadWrap(); // \OpenAPI\Client\Model\AccountPayloadWrap | account to update

try {
    $result = $apiInstance->updateAccountsResource($number, $financialyear, $account_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsResourceApi->updateAccountsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| identifies the account | |
| **financialyear** | **int**| financial year to update account against | [optional] |
| **account_payload** | [**\OpenAPI\Client\Model\AccountPayloadWrap**](../Model/AccountPayloadWrap.md)| account to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountSingleItemWrap**](../Model/AccountSingleItemWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
