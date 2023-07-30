# OpenAPI\Client\ProjectsResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectsResource()**](ProjectsResourceApi.md#createProjectsResource) | **POST** /3/projects | Create a project |
| [**getProjectsResource()**](ProjectsResourceApi.md#getProjectsResource) | **GET** /3/projects/{ProjectNumber} | Retrieve a single project |
| [**listProjectsResource()**](ProjectsResourceApi.md#listProjectsResource) | **GET** /3/projects | Retrieve a list of projects |
| [**removeProjectsResource()**](ProjectsResourceApi.md#removeProjectsResource) | **DELETE** /3/projects/{ProjectNumber} | Remove a project |
| [**updateProjectsResource()**](ProjectsResourceApi.md#updateProjectsResource) | **PUT** /3/projects/{ProjectNumber} | Update a project |


## `createProjectsResource()`

```php
createProjectsResource($project): \OpenAPI\Client\Model\ProjectWrap
```

Create a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project = new \OpenAPI\Client\Model\ProjectWrap(); // \OpenAPI\Client\Model\ProjectWrap | to create

try {
    $result = $apiInstance->createProjectsResource($project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsResourceApi->createProjectsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project** | [**\OpenAPI\Client\Model\ProjectWrap**](../Model/ProjectWrap.md)| to create | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectWrap**](../Model/ProjectWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectsResource()`

```php
getProjectsResource($project_number): \OpenAPI\Client\Model\ProjectWrap
```

Retrieve a single project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_number = 56; // int | identifies the project

try {
    $result = $apiInstance->getProjectsResource($project_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsResourceApi->getProjectsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_number** | **int**| identifies the project | |

### Return type

[**\OpenAPI\Client\Model\ProjectWrap**](../Model/ProjectWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProjectsResource()`

```php
listProjectsResource(): \OpenAPI\Client\Model\ProjectListItemList
```

Retrieve a list of projects

The project register can return a list of records or a single record. By specifying a ProjectNumber in the URL, a single record will be returned. If no ProjectNumber is provided, a list of records will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listProjectsResource();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsResourceApi->listProjectsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ProjectListItemList**](../Model/ProjectListItemList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeProjectsResource()`

```php
removeProjectsResource($project_number)
```

Remove a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_number = 56; // int | identifies the project

try {
    $apiInstance->removeProjectsResource($project_number);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsResourceApi->removeProjectsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_number** | **int**| identifies the project | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectsResource()`

```php
updateProjectsResource($project_number, $project): \OpenAPI\Client\Model\ProjectWrap
```

Update a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_number = 56; // int | identifies the project
$project = new \OpenAPI\Client\Model\ProjectWrap(); // \OpenAPI\Client\Model\ProjectWrap | to update

try {
    $result = $apiInstance->updateProjectsResource($project_number, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsResourceApi->updateProjectsResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_number** | **int**| identifies the project | |
| **project** | [**\OpenAPI\Client\Model\ProjectWrap**](../Model/ProjectWrap.md)| to update | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectWrap**](../Model/ProjectWrap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
