# OpenAPIClient-php

This project is entirely generated automatically based on the OpenAPI specification for Fortnox. It was generated to be used as an HTTP client in Albia Sweden AB's customer portal.

# Documentation 

The Fortnox API is organized around REST. This means that we’ve designed it to have resource-oriented URLs and be as predictable as possible for you as developer.

It also means that we use HTTP status codes when something goes wrong and HTTP verbs understod by many API clients around the web.

We use a modified version of OAuth2 for authentication to offer a secure way for both you and our users to interact.

The API is generally built to support both XML and JSON but in this documentation all the examples will be in JSON.

We encourage you to read all the articles in the [Guides & Good to Know section](https://www.fortnox.se/developer/guides-and-good-to-know/)</a> first, before going forward and learning about the different resources.

This to ensure you get an understanding of some of the shared components of the API such as parameters and error handling.

## Rate limits

The limit per access-token is 25 requests per 5 seconds. This equals to 300 requests per minute.

[Read more about this here.](https://www.fortnox.se/developer/guides-and-good-to-know/rate-limits-for-fortnox-api/)

## Query parameters

Use query parameters with the ?-character and separate parameters with the &-character. 

**Example:**
 GET - https://api.fortnox.se/3/invoices?accountnumberfrom=3000&accountnumberto=4000
Read more about our parameters [here](https://www.fortnox.se/developer/guides-and-good-to-know/parameters/)


Search the documentation using the search field in the top left corner.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AbsenceTransactionsResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$absence_transactions_payload = new \OpenAPI\Client\Model\AbsenceTransactionPayloadWrap(); // \OpenAPI\Client\Model\AbsenceTransactionPayloadWrap | to create

try {
    $result = $apiInstance->createAbsenceTransactionsResource($absence_transactions_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTransactionsResourceApi->createAbsenceTransactionsResource: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AbsenceTransactionsResourceApi* | [**createAbsenceTransactionsResource**](docs/Api/AbsenceTransactionsResourceApi.md#createabsencetransactionsresource) | **POST** /3/absencetransactions | Create a new absence transaction
*AbsenceTransactionsResourceApi* | [**getAbsenceTransactionsResource**](docs/Api/AbsenceTransactionsResourceApi.md#getabsencetransactionsresource) | **GET** /3/absencetransactions/{id} | Retrieve a specific absence transaction
*AbsenceTransactionsResourceApi* | [**getAbsenceTransactionsResource1**](docs/Api/AbsenceTransactionsResourceApi.md#getabsencetransactionsresource1) | **GET** /3/absencetransactions/{EmployeeId}/{Date}/{Code} | Retrieve absence transactions
*AbsenceTransactionsResourceApi* | [**listAbsenceTransactionsResource**](docs/Api/AbsenceTransactionsResourceApi.md#listabsencetransactionsresource) | **GET** /3/absencetransactions | Lists all absence transactions
*AbsenceTransactionsResourceApi* | [**remove**](docs/Api/AbsenceTransactionsResourceApi.md#remove) | **DELETE** /3/absencetransactions/{id} | Delete an absence transaction
*AbsenceTransactionsResourceApi* | [**updateAbsenceTransactionsResource**](docs/Api/AbsenceTransactionsResourceApi.md#updateabsencetransactionsresource) | **PUT** /3/absencetransactions/{id} | Update a single absence transaction
*AccountChartsResourceApi* | [**listAccountChartsResource**](docs/Api/AccountChartsResourceApi.md#listaccountchartsresource) | **GET** /3/accountcharts | List all account charts
*AccountsResourceApi* | [**createAccountsResource**](docs/Api/AccountsResourceApi.md#createaccountsresource) | **POST** /3/accounts/ | Create an account
*AccountsResourceApi* | [**getAccountsResource**](docs/Api/AccountsResourceApi.md#getaccountsresource) | **GET** /3/accounts/{Number} | Retrieve an account
*AccountsResourceApi* | [**listAccountsResource**](docs/Api/AccountsResourceApi.md#listaccountsresource) | **GET** /3/accounts/ | List all accounts
*AccountsResourceApi* | [**updateAccountsResource**](docs/Api/AccountsResourceApi.md#updateaccountsresource) | **PUT** /3/accounts/{Number} | Update an account
*ArchiveResourceApi* | [**getFileById**](docs/Api/ArchiveResourceApi.md#getfilebyid) | **GET** /3/archive/{id} | Retrieve a single file
*ArchiveResourceApi* | [**getFolder**](docs/Api/ArchiveResourceApi.md#getfolder) | **GET** /3/archive/ | Retrieve folder or file
*ArchiveResourceApi* | [**removeById**](docs/Api/ArchiveResourceApi.md#removebyid) | **DELETE** /3/archive/{id} | Delete a single file
*ArchiveResourceApi* | [**removeByPath**](docs/Api/ArchiveResourceApi.md#removebypath) | **DELETE** /3/archive/ | Remove files
*ArchiveResourceApi* | [**uploadFile**](docs/Api/ArchiveResourceApi.md#uploadfile) | **POST** /3/archive/ | Upload a file to a specific subdirectory
*ArticleFileConnectionsResourceApi* | [**createArticleFileConnectionsResource**](docs/Api/ArticleFileConnectionsResourceApi.md#createarticlefileconnectionsresource) | **POST** /3/articlefileconnections/ | Create an article file connection
*ArticleFileConnectionsResourceApi* | [**getArticleFileConnectionsResource**](docs/Api/ArticleFileConnectionsResourceApi.md#getarticlefileconnectionsresource) | **GET** /3/articlefileconnections/{FileId} | Retrieve a single article file connection
*ArticleFileConnectionsResourceApi* | [**listArticleFileConnectionsResource**](docs/Api/ArticleFileConnectionsResourceApi.md#listarticlefileconnectionsresource) | **GET** /3/articlefileconnections/ | Retrieve a list of article file connections
*ArticleFileConnectionsResourceApi* | [**removeArticleFileConnectionsResource**](docs/Api/ArticleFileConnectionsResourceApi.md#removearticlefileconnectionsresource) | **DELETE** /3/articlefileconnections/{FileId} | Remove an article file connection
*ArticlesResourceApi* | [**callList**](docs/Api/ArticlesResourceApi.md#calllist) | **GET** /api/time/articles-v1 | Get full article registrations that match filter
*ArticlesResourceArticlesApi* | [**createArticlesResourceArticles**](docs/Api/ArticlesResourceArticlesApi.md#createarticlesresourcearticles) | **POST** /3/articles | Create an article
*ArticlesResourceArticlesApi* | [**getArticlesResourceArticles**](docs/Api/ArticlesResourceArticlesApi.md#getarticlesresourcearticles) | **GET** /3/articles/{ArticleNumber} | Retrieve an article
*ArticlesResourceArticlesApi* | [**listArticlesResourceArticles**](docs/Api/ArticlesResourceArticlesApi.md#listarticlesresourcearticles) | **GET** /3/articles | Retrieve a list of articles
*ArticlesResourceArticlesApi* | [**removeArticlesResourceArticles**](docs/Api/ArticlesResourceArticlesApi.md#removearticlesresourcearticles) | **DELETE** /3/articles/{ArticleNumber} | Delete an article
*ArticlesResourceArticlesApi* | [**updateArticlesResourceArticles**](docs/Api/ArticlesResourceArticlesApi.md#updatearticlesresourcearticles) | **PUT** /3/articles/{ArticleNumber} | Update an article
*AssetFileConnectionResourceApi* | [**createAssetFileConnectionResource**](docs/Api/AssetFileConnectionResourceApi.md#createassetfileconnectionresource) | **POST** /3/assetfileconnections | Create an asset file connection
*AssetFileConnectionResourceApi* | [**deleteAssetFileConnectionResource**](docs/Api/AssetFileConnectionResourceApi.md#deleteassetfileconnectionresource) | **DELETE** /3/assetfileconnections/{fileId} | Remove an asset file connection
*AssetFileConnectionResourceApi* | [**getAllAssetFileConnectionResource**](docs/Api/AssetFileConnectionResourceApi.md#getallassetfileconnectionresource) | **GET** /3/assetfileconnections | Retrieve a list of asset file connections
*AssetTypesResourceApi* | [**createAssetTypesResource**](docs/Api/AssetTypesResourceApi.md#createassettypesresource) | **POST** /3/assets/types/{id} | Create an asset type
*AssetTypesResourceApi* | [**deleteAssetTypesResource**](docs/Api/AssetTypesResourceApi.md#deleteassettypesresource) | **DELETE** /3/assets/types/{id} | Delete an asset type
*AssetTypesResourceApi* | [**getAllAssetTypesResource**](docs/Api/AssetTypesResourceApi.md#getallassettypesresource) | **GET** /3/assets/types/ | Retrieve a list of asset types
*AssetTypesResourceApi* | [**getAssetTypesResource**](docs/Api/AssetTypesResourceApi.md#getassettypesresource) | **GET** /3/assets/types/{id} | Retrieve an asset type
*AssetTypesResourceApi* | [**updateAssetTypesResource**](docs/Api/AssetTypesResourceApi.md#updateassettypesresource) | **PUT** /3/assets/types/{id} | Update an asset type
*AssetsResourceApi* | [**changeManualObValue**](docs/Api/AssetsResourceApi.md#changemanualobvalue) | **PUT** /3/assets/{GivenNumber} | Change manual OB value of an Asset
*AssetsResourceApi* | [**createAssetsResource**](docs/Api/AssetsResourceApi.md#createassetsresource) | **POST** /3/assets/ | Create an Asset
*AssetsResourceApi* | [**deleteAssetsResource**](docs/Api/AssetsResourceApi.md#deleteassetsresource) | **DELETE** /3/assets/{GivenNumber} | Delete or Void an Asset
*AssetsResourceApi* | [**depreciate**](docs/Api/AssetsResourceApi.md#depreciate) | **POST** /3/assets/depreciate | Perform a Depreciation of an Asset
*AssetsResourceApi* | [**getAssetsResource**](docs/Api/AssetsResourceApi.md#getassetsresource) | **GET** /3/assets/{GivenNumber} | Retrieve a single asset
*AssetsResourceApi* | [**getDeprecationList**](docs/Api/AssetsResourceApi.md#getdeprecationlist) | **GET** /3/assets/depreciations/{ToDate} | Assets depreciation list
*AssetsResourceApi* | [**listAssetsResource**](docs/Api/AssetsResourceApi.md#listassetsresource) | **GET** /3/assets/ | Retrieve a list of assets
*AssetsResourceApi* | [**scrap**](docs/Api/AssetsResourceApi.md#scrap) | **PUT** /3/assets/scrap/{GivenNumber} | Scrap an Asset
*AssetsResourceApi* | [**sell**](docs/Api/AssetsResourceApi.md#sell) | **PUT** /3/assets/sell/{GivenNumber} | Sell an Asset
*AssetsResourceApi* | [**writeDown**](docs/Api/AssetsResourceApi.md#writedown) | **PUT** /3/assets/writedown/{GivenNumber} | Write down an Asset
*AssetsResourceApi* | [**writeUp**](docs/Api/AssetsResourceApi.md#writeup) | **PUT** /3/assets/writeup/{GivenNumber} | Write up an Asset
*AttachmentResourceApi* | [**attach**](docs/Api/AttachmentResourceApi.md#attach) | **POST** /api/fileattachments/attachments-v1 | Attach files to one or more entities
*AttachmentResourceApi* | [**detach**](docs/Api/AttachmentResourceApi.md#detach) | **DELETE** /api/fileattachments/attachments-v1/{attachmentId} | Detach file
*AttachmentResourceApi* | [**getAttachments**](docs/Api/AttachmentResourceApi.md#getattachments) | **GET** /api/fileattachments/attachments-v1 | Get attached files on an entity
*AttachmentResourceApi* | [**getNumberOfAttachmentsForEntity**](docs/Api/AttachmentResourceApi.md#getnumberofattachmentsforentity) | **GET** /api/fileattachments/attachments-v1/numberofattachments | List number of attachments
*AttachmentResourceApi* | [**updateAttachment**](docs/Api/AttachmentResourceApi.md#updateattachment) | **PUT** /api/fileattachments/attachments-v1/{attachmentId} | Update attachment
*AttachmentResourceApi* | [**validateIncludedOnSend**](docs/Api/AttachmentResourceApi.md#validateincludedonsend) | **POST** /api/fileattachments/attachments-v1/validateincludedonsend | Validates a list of attachments that will be included on send
*AttendanceTransactionsResourceApi* | [**createAttendanceTransactionsResource**](docs/Api/AttendanceTransactionsResourceApi.md#createattendancetransactionsresource) | **POST** /3/attendancetransactions | Create a new attendance transaction
*AttendanceTransactionsResourceApi* | [**getAttendanceTransactionsResource**](docs/Api/AttendanceTransactionsResourceApi.md#getattendancetransactionsresource) | **GET** /3/attendancetransactions/{id} | Retrieve a specific attendance transaction
*AttendanceTransactionsResourceApi* | [**listAttendanceTransactionsResource**](docs/Api/AttendanceTransactionsResourceApi.md#listattendancetransactionsresource) | **GET** /3/attendancetransactions | Lists all attendance transactions
*AttendanceTransactionsResourceApi* | [**updateAttendanceTransactionsResource**](docs/Api/AttendanceTransactionsResourceApi.md#updateattendancetransactionsresource) | **PUT** /3/attendancetransactions/{id} | Update a single attendance transaction
*CompanyInformationResourceApi* | [**getCompanyInformationResource**](docs/Api/CompanyInformationResourceApi.md#getcompanyinformationresource) | **GET** /3/companyinformation | Retrieve the Company Information
*CompanySettingsResourceApi* | [**getCompanySettingsResource**](docs/Api/CompanySettingsResourceApi.md#getcompanysettingsresource) | **GET** /3/settings/company/ | Retrieve the company settings
*ContractAccrualsResourceApi* | [**createContractAccrualsResource**](docs/Api/ContractAccrualsResourceApi.md#createcontractaccrualsresource) | **POST** /3/contractaccruals/ | Create a contract accrual
*ContractAccrualsResourceApi* | [**getContractAccrualsResource**](docs/Api/ContractAccrualsResourceApi.md#getcontractaccrualsresource) | **GET** /3/contractaccruals/{DocumentNumber} | Retrieve a single contract accrual
*ContractAccrualsResourceApi* | [**listContractAccrualsResource**](docs/Api/ContractAccrualsResourceApi.md#listcontractaccrualsresource) | **GET** /3/contractaccruals/ | Retrieve a list of contract accruals
*ContractAccrualsResourceApi* | [**removeContractAccrualsResource**](docs/Api/ContractAccrualsResourceApi.md#removecontractaccrualsresource) | **DELETE** /3/contractaccruals/{DocumentNumber} | Remove a contract accrual
*ContractAccrualsResourceApi* | [**updateContractAccrualsResource**](docs/Api/ContractAccrualsResourceApi.md#updatecontractaccrualsresource) | **PUT** /3/contractaccruals/{DocumentNumber} | Update a contract accrual
*ContractTemplatesResourceApi* | [**createContractTemplatesResource**](docs/Api/ContractTemplatesResourceApi.md#createcontracttemplatesresource) | **POST** /3/contracttemplates/ | Create a contract template
*ContractTemplatesResourceApi* | [**getContractTemplatesResource**](docs/Api/ContractTemplatesResourceApi.md#getcontracttemplatesresource) | **GET** /3/contracttemplates/{TemplateNumber} | Retrieve a single contract template
*ContractTemplatesResourceApi* | [**listContractTemplatesResource**](docs/Api/ContractTemplatesResourceApi.md#listcontracttemplatesresource) | **GET** /3/contracttemplates/ | Retrieve a list of contract templates
*ContractTemplatesResourceApi* | [**updateContractTemplatesResource**](docs/Api/ContractTemplatesResourceApi.md#updatecontracttemplatesresource) | **PUT** /3/contracttemplates/{TemplateNumber} | Update a contract template
*ContractsResourceApi* | [**createContractsResource**](docs/Api/ContractsResourceApi.md#createcontractsresource) | **POST** /3/contracts/ | Create a contract
*ContractsResourceApi* | [**createinvoice**](docs/Api/ContractsResourceApi.md#createinvoice) | **PUT** /3/contracts/{DocumentNumber}/createinvoice | Create invoice from contract
*ContractsResourceApi* | [**finish**](docs/Api/ContractsResourceApi.md#finish) | **PUT** /3/contracts/{DocumentNumber}/finish | Set a contract as finished
*ContractsResourceApi* | [**getContractsResource**](docs/Api/ContractsResourceApi.md#getcontractsresource) | **GET** /3/contracts/{DocumentNumber} | Retrieve a single contract
*ContractsResourceApi* | [**increaseinvoicecount**](docs/Api/ContractsResourceApi.md#increaseinvoicecount) | **PUT** /3/contracts/{DocumentNumber}/increaseinvoicecount | Increases the invoice count without creating an invoice
*ContractsResourceApi* | [**listContractsResource**](docs/Api/ContractsResourceApi.md#listcontractsresource) | **GET** /3/contracts/ | Retrieve a list of contracts
*ContractsResourceApi* | [**updateContractsResource**](docs/Api/ContractsResourceApi.md#updatecontractsresource) | **PUT** /3/contracts/{DocumentNumber} | Update a contract
*CostCentersResourceApi* | [**createCostCentersResource**](docs/Api/CostCentersResourceApi.md#createcostcentersresource) | **POST** /3/costcenters | Create a cost center
*CostCentersResourceApi* | [**getCostCentersResource**](docs/Api/CostCentersResourceApi.md#getcostcentersresource) | **GET** /3/costcenters/{Code} | Retrieve a single cost center
*CostCentersResourceApi* | [**listCostCentersResource**](docs/Api/CostCentersResourceApi.md#listcostcentersresource) | **GET** /3/costcenters | Retrieve a list of cost centers
*CostCentersResourceApi* | [**removeCostCentersResource**](docs/Api/CostCentersResourceApi.md#removecostcentersresource) | **DELETE** /3/costcenters/{Code} | Remove a cost center
*CostCentersResourceApi* | [**updateCostCentersResource**](docs/Api/CostCentersResourceApi.md#updatecostcentersresource) | **PUT** /3/costcenters/{Code} | Update a cost center
*CurrenciesResourceApi* | [**createCurrenciesResource**](docs/Api/CurrenciesResourceApi.md#createcurrenciesresource) | **POST** /3/currencies | Create a currency
*CurrenciesResourceApi* | [**getCurrenciesResource**](docs/Api/CurrenciesResourceApi.md#getcurrenciesresource) | **GET** /3/currencies/{Code} | Retrieve a single currency
*CurrenciesResourceApi* | [**listCurrenciesResource**](docs/Api/CurrenciesResourceApi.md#listcurrenciesresource) | **GET** /3/currencies | Retrieve a list of currencies
*CurrenciesResourceApi* | [**removeCurrenciesResource**](docs/Api/CurrenciesResourceApi.md#removecurrenciesresource) | **DELETE** /3/currencies/{Code} | Remove a currency
*CurrenciesResourceApi* | [**updateCurrenciesResource**](docs/Api/CurrenciesResourceApi.md#updatecurrenciesresource) | **PUT** /3/currencies/{Code} | Update a currency
*CustomDocumentTypeResourceApi* | [**createCustomDocumentTypeResource**](docs/Api/CustomDocumentTypeResourceApi.md#createcustomdocumenttyperesource) | **POST** /api/warehouse/documentdeliveries/custom/documenttypes-v1 | Create custom document type
*CustomDocumentTypeResourceApi* | [**getAllCustomDocumentTypeResource**](docs/Api/CustomDocumentTypeResourceApi.md#getallcustomdocumenttyperesource) | **GET** /api/warehouse/documentdeliveries/custom/documenttypes-v1 | List custom document types
*CustomDocumentTypeResourceApi* | [**getCustomDocumentTypeResource**](docs/Api/CustomDocumentTypeResourceApi.md#getcustomdocumenttyperesource) | **GET** /api/warehouse/documentdeliveries/custom/documenttypes-v1/{type} | Get custom document type
*CustomInboundDocumentResourceApi* | [**getCustomInboundDocumentResource**](docs/Api/CustomInboundDocumentResourceApi.md#getcustominbounddocumentresource) | **GET** /api/warehouse/documentdeliveries/custom/inbound-v1/{type}/{id} | Get custom inbound document
*CustomInboundDocumentResourceApi* | [**releaseCustomInboundDocumentResource**](docs/Api/CustomInboundDocumentResourceApi.md#releasecustominbounddocumentresource) | **PUT** /api/warehouse/documentdeliveries/custom/inbound-v1/{type}/{id}/release | Release custom inbound document
*CustomInboundDocumentResourceApi* | [**saveCustomInboundDocumentResource**](docs/Api/CustomInboundDocumentResourceApi.md#savecustominbounddocumentresource) | **PUT** /api/warehouse/documentdeliveries/custom/inbound-v1/{type}/{id} | Save custom inbound document
*CustomInboundDocumentResourceApi* | [**voidDocumentCustomInboundDocumentResource**](docs/Api/CustomInboundDocumentResourceApi.md#voiddocumentcustominbounddocumentresource) | **PUT** /api/warehouse/documentdeliveries/custom/inbound-v1/{type}/{id}/void | Void custom inbound document
*CustomOutboundDocumentResourceApi* | [**get**](docs/Api/CustomOutboundDocumentResourceApi.md#get) | **GET** /api/warehouse/documentdeliveries/custom/outbound-v1/{type}/{id} | Get custom outbound document
*CustomOutboundDocumentResourceApi* | [**release**](docs/Api/CustomOutboundDocumentResourceApi.md#release) | **PUT** /api/warehouse/documentdeliveries/custom/outbound-v1/{type}/{id}/release | Release custom outbound document
*CustomOutboundDocumentResourceApi* | [**save**](docs/Api/CustomOutboundDocumentResourceApi.md#save) | **PUT** /api/warehouse/documentdeliveries/custom/outbound-v1/{type}/{id} | Save a custom outbound document
*CustomOutboundDocumentResourceApi* | [**voidDocument**](docs/Api/CustomOutboundDocumentResourceApi.md#voiddocument) | **PUT** /api/warehouse/documentdeliveries/custom/outbound-v1/{type}/{id}/void | Void custom outbound document
*CustomerReferencesResourceApi* | [**createCustomerReferencesResource**](docs/Api/CustomerReferencesResourceApi.md#createcustomerreferencesresource) | **POST** /3/customerreferences/ | Create a customer reference row
*CustomerReferencesResourceApi* | [**getCustomerReferencesResource**](docs/Api/CustomerReferencesResourceApi.md#getcustomerreferencesresource) | **GET** /3/customerreferences/{CustomerReferenceRowId} | Retrieve a customer reference row
*CustomerReferencesResourceApi* | [**listCustomerReferencesResource**](docs/Api/CustomerReferencesResourceApi.md#listcustomerreferencesresource) | **GET** /3/customerreferences/ | Retrieve a list of customers reference rows
*CustomerReferencesResourceApi* | [**removeCustomerReferencesResource**](docs/Api/CustomerReferencesResourceApi.md#removecustomerreferencesresource) | **DELETE** /3/customerreferences/{CustomerReferenceRowId} | Delete a customer reference row
*CustomerReferencesResourceApi* | [**updateCustomerReferencesResource**](docs/Api/CustomerReferencesResourceApi.md#updatecustomerreferencesresource) | **PUT** /3/customerreferences/{CustomerReferenceRowId} | Update a customer reference row
*CustomersResourceApi* | [**createCustomersResource**](docs/Api/CustomersResourceApi.md#createcustomersresource) | **POST** /3/customers/ | Create a customer
*CustomersResourceApi* | [**getCustomersResource**](docs/Api/CustomersResourceApi.md#getcustomersresource) | **GET** /3/customers/{CustomerNumber} | Retrieve a customer
*CustomersResourceApi* | [**listCustomersResource**](docs/Api/CustomersResourceApi.md#listcustomersresource) | **GET** /3/customers/ | Retrieve a list of customers
*CustomersResourceApi* | [**removeCustomersResource**](docs/Api/CustomersResourceApi.md#removecustomersresource) | **DELETE** /3/customers/{CustomerNumber} | Delete a customer
*CustomersResourceApi* | [**updateCustomersResource**](docs/Api/CustomersResourceApi.md#updatecustomersresource) | **PUT** /3/customers/{CustomerNumber} | Update a customer
*EUVatLimitRegulationResourceApi* | [**getEUVatLimitRegulationResource**](docs/Api/EUVatLimitRegulationResourceApi.md#geteuvatlimitregulationresource) | **GET** /3/euvatlimitregulation/ | Retrieve details about eu vat limit
*EmployeesResourceApi* | [**createEmployeesResource**](docs/Api/EmployeesResourceApi.md#createemployeesresource) | **POST** /3/employees/ | Create a new employee
*EmployeesResourceApi* | [**getEmployeesResource**](docs/Api/EmployeesResourceApi.md#getemployeesresource) | **GET** /3/employees/{EmployeeId} | Retrieve a specific employee
*EmployeesResourceApi* | [**listEmployeesResource**](docs/Api/EmployeesResourceApi.md#listemployeesresource) | **GET** /3/employees/ | Retrieve a list of employees
*EmployeesResourceApi* | [**updateEmployeesResource**](docs/Api/EmployeesResourceApi.md#updateemployeesresource) | **PUT** /3/employees/{EmployeeId} | Update employee
*ExpensesResourceApi* | [**createExpensesResource**](docs/Api/ExpensesResourceApi.md#createexpensesresource) | **POST** /3/expenses/ | Create an expense
*ExpensesResourceApi* | [**getExpensesResource**](docs/Api/ExpensesResourceApi.md#getexpensesresource) | **GET** /3/expenses/{ExpenseCode} | Retrieve an expense
*ExpensesResourceApi* | [**listExpensesResource**](docs/Api/ExpensesResourceApi.md#listexpensesresource) | **GET** /3/expenses/ | Retrieve expenses
*FinanceInvoicesResourceApi* | [**createFinanceInvoicesResource**](docs/Api/FinanceInvoicesResourceApi.md#createfinanceinvoicesresource) | **POST** /3/noxfinansinvoices/ | Send an invoice with Fortnox Finans
*FinanceInvoicesResourceApi* | [**getFinanceInvoicesResource**](docs/Api/FinanceInvoicesResourceApi.md#getfinanceinvoicesresource) | **GET** /3/noxfinansinvoices/{Number} | Retrieve a single invoice payment
*FinanceInvoicesResourceApi* | [**pause**](docs/Api/FinanceInvoicesResourceApi.md#pause) | **PUT** /3/noxfinansinvoices/{Number}/pause | Action Pause
*FinanceInvoicesResourceApi* | [**reportPayment**](docs/Api/FinanceInvoicesResourceApi.md#reportpayment) | **PUT** /3/noxfinansinvoices/{Number}/report-payment | Action Report Payment
*FinanceInvoicesResourceApi* | [**stop**](docs/Api/FinanceInvoicesResourceApi.md#stop) | **PUT** /3/noxfinansinvoices/{Number}/stop | Action Stop
*FinanceInvoicesResourceApi* | [**takeFees**](docs/Api/FinanceInvoicesResourceApi.md#takefees) | **PUT** /3/noxfinansinvoices/{Number}/take-fees | Action Take Fees
*FinanceInvoicesResourceApi* | [**unpause**](docs/Api/FinanceInvoicesResourceApi.md#unpause) | **PUT** /3/noxfinansinvoices/{Number}/unpause | Action Unpause
*FinancialYearsResourceApi* | [**createFinancialYearsResource**](docs/Api/FinancialYearsResourceApi.md#createfinancialyearsresource) | **POST** /3/financialyears | Create a financial year
*FinancialYearsResourceApi* | [**getByDate**](docs/Api/FinancialYearsResourceApi.md#getbydate) | **GET** /3/financialyears | Retrieve a list of financial years
*FinancialYearsResourceApi* | [**getById**](docs/Api/FinancialYearsResourceApi.md#getbyid) | **GET** /3/financialyears/{Id} | Retrieve financial year by id
*InboxResourceApi* | [**getFileByIdInboxResource**](docs/Api/InboxResourceApi.md#getfilebyidinboxresource) | **GET** /3/inbox/{Id} | Retrieve a single file
*InboxResourceApi* | [**getInboxResource**](docs/Api/InboxResourceApi.md#getinboxresource) | **GET** /3/inbox/ | Retrieve the root folder containing files and folders
*InboxResourceApi* | [**removeInboxResource**](docs/Api/InboxResourceApi.md#removeinboxresource) | **DELETE** /3/inbox/{Id} | Remove a file or folder
*InboxResourceApi* | [**upload**](docs/Api/InboxResourceApi.md#upload) | **POST** /3/inbox/ | Upload a file
*IncomingGoodsResourceApi* | [**completed**](docs/Api/IncomingGoodsResourceApi.md#completed) | **PUT** /api/warehouse/incominggoods-v1/{id}/completed | Complete Incoming Goods document
*IncomingGoodsResourceApi* | [**createIncomingGoodsResource**](docs/Api/IncomingGoodsResourceApi.md#createincominggoodsresource) | **POST** /api/warehouse/incominggoods-v1/ | Create Incoming Goods document
*IncomingGoodsResourceApi* | [**getAllIncomingGoodsResource**](docs/Api/IncomingGoodsResourceApi.md#getallincominggoodsresource) | **GET** /api/warehouse/incominggoods-v1/ | List Incoming Goods Documents
*IncomingGoodsResourceApi* | [**getIncomingGoodsResource**](docs/Api/IncomingGoodsResourceApi.md#getincominggoodsresource) | **GET** /api/warehouse/incominggoods-v1/{id} | Get Incoming Goods document
*IncomingGoodsResourceApi* | [**releaseIncomingGoodsResource**](docs/Api/IncomingGoodsResourceApi.md#releaseincominggoodsresource) | **PUT** /api/warehouse/incominggoods-v1/{id}/release | Release Incoming Goods document
*IncomingGoodsResourceApi* | [**saveIncomingGoodsResource**](docs/Api/IncomingGoodsResourceApi.md#saveincominggoodsresource) | **PUT** /api/warehouse/incominggoods-v1/{id} | Update Incoming Goods document
*IncomingGoodsResourceApi* | [**voidDocumentIncomingGoodsResource**](docs/Api/IncomingGoodsResourceApi.md#voiddocumentincominggoodsresource) | **PUT** /api/warehouse/incominggoods-v1/{id}/void | Void Incoming Goods document
*InvoiceAccrualsResourceApi* | [**createInvoiceAccrualsResource**](docs/Api/InvoiceAccrualsResourceApi.md#createinvoiceaccrualsresource) | **POST** /3/invoiceaccruals/ | Create an invoice accrual
*InvoiceAccrualsResourceApi* | [**getInvoiceAccrualsResource**](docs/Api/InvoiceAccrualsResourceApi.md#getinvoiceaccrualsresource) | **GET** /3/invoiceaccruals/{InvoiceNumber} | Retrieve a single invoice accrual
*InvoiceAccrualsResourceApi* | [**listInvoiceAccrualsResource**](docs/Api/InvoiceAccrualsResourceApi.md#listinvoiceaccrualsresource) | **GET** /3/invoiceaccruals/ | Retrieve a list of invoice accruals
*InvoiceAccrualsResourceApi* | [**removeInvoiceAccrualsResource**](docs/Api/InvoiceAccrualsResourceApi.md#removeinvoiceaccrualsresource) | **DELETE** /3/invoiceaccruals/{InvoiceNumber} | Remove an invoice accrual
*InvoiceAccrualsResourceApi* | [**updateInvoiceAccrualsResource**](docs/Api/InvoiceAccrualsResourceApi.md#updateinvoiceaccrualsresource) | **PUT** /3/invoiceaccruals/{InvoiceNumber} | Update an invoice accrual
*InvoicePaymentsResourceApi* | [**bookkeep**](docs/Api/InvoicePaymentsResourceApi.md#bookkeep) | **PUT** /3/invoicepayments/{Number}/bookkeep | Bookkeep an invoice payment
*InvoicePaymentsResourceApi* | [**createInvoicePaymentsResource**](docs/Api/InvoicePaymentsResourceApi.md#createinvoicepaymentsresource) | **POST** /3/invoicepayments/ | Create an invoice payment
*InvoicePaymentsResourceApi* | [**getInvoicePaymentsResource**](docs/Api/InvoicePaymentsResourceApi.md#getinvoicepaymentsresource) | **GET** /3/invoicepayments/{Number} | Retrieve a single invoice payment
*InvoicePaymentsResourceApi* | [**listInvoicePaymentsResource**](docs/Api/InvoicePaymentsResourceApi.md#listinvoicepaymentsresource) | **GET** /3/invoicepayments/ | Retrieve a list of invoice payments
*InvoicePaymentsResourceApi* | [**removeInvoicePaymentsResource**](docs/Api/InvoicePaymentsResourceApi.md#removeinvoicepaymentsresource) | **DELETE** /3/invoicepayments/{Number} | Remove an invoice payment
*InvoicePaymentsResourceApi* | [**updateInvoicePaymentsResource**](docs/Api/InvoicePaymentsResourceApi.md#updateinvoicepaymentsresource) | **PUT** /3/invoicepayments/{Number} | Update an invoice payment
*InvoicesResourceApi* | [**bookkeepInvoicesResource**](docs/Api/InvoicesResourceApi.md#bookkeepinvoicesresource) | **PUT** /3/invoices/{DocumentNumber}/bookkeep | Bookkeep an invoice
*InvoicesResourceApi* | [**callPrint**](docs/Api/InvoicesResourceApi.md#callprint) | **GET** /3/invoices/{DocumentNumber}/print | Print an invoice
*InvoicesResourceApi* | [**cancel**](docs/Api/InvoicesResourceApi.md#cancel) | **PUT** /3/invoices/{DocumentNumber}/cancel | Cancel an invoice
*InvoicesResourceApi* | [**createInvoicesResource**](docs/Api/InvoicesResourceApi.md#createinvoicesresource) | **POST** /3/invoices | Create an invoice
*InvoicesResourceApi* | [**credit**](docs/Api/InvoicesResourceApi.md#credit) | **PUT** /3/invoices/{DocumentNumber}/credit | Credit an invoice
*InvoicesResourceApi* | [**eInvoice**](docs/Api/InvoicesResourceApi.md#einvoice) | **GET** /3/invoices/{DocumentNumber}/einvoice | Send an invoice as e-invoice
*InvoicesResourceApi* | [**ePrint**](docs/Api/InvoicesResourceApi.md#eprint) | **GET** /3/invoices/{DocumentNumber}/eprint | Send an invoice as e-print
*InvoicesResourceApi* | [**email**](docs/Api/InvoicesResourceApi.md#email) | **GET** /3/invoices/{DocumentNumber}/email | Send an invoice as email
*InvoicesResourceApi* | [**externalPrint**](docs/Api/InvoicesResourceApi.md#externalprint) | **PUT** /3/invoices/{DocumentNumber}/externalprint | Set an invoice as sent
*InvoicesResourceApi* | [**getInvoicesResource**](docs/Api/InvoicesResourceApi.md#getinvoicesresource) | **GET** /3/invoices/{DocumentNumber} | Retrieve a single invoice
*InvoicesResourceApi* | [**listInvoicesResource**](docs/Api/InvoicesResourceApi.md#listinvoicesresource) | **GET** /3/invoices | Retrieve a list of invoices
*InvoicesResourceApi* | [**preview**](docs/Api/InvoicesResourceApi.md#preview) | **GET** /3/invoices/{DocumentNumber}/preview | Preview an invoice
*InvoicesResourceApi* | [**printReminder**](docs/Api/InvoicesResourceApi.md#printreminder) | **GET** /3/invoices/{DocumentNumber}/printreminder | Print an invoice as reminder
*InvoicesResourceApi* | [**updateInvoicesResource**](docs/Api/InvoicesResourceApi.md#updateinvoicesresource) | **PUT** /3/invoices/{DocumentNumber} | Update an invoice
*InvoicesResourceApi* | [**warehouseReady**](docs/Api/InvoicesResourceApi.md#warehouseready) | **PUT** /3/invoices/{DocumentNumber}/warehouseready | Set an invoice as done
*LabelsResourceApi* | [**createLabelsResource**](docs/Api/LabelsResourceApi.md#createlabelsresource) | **POST** /3/labels | Create a label
*LabelsResourceApi* | [**listLabelsResource**](docs/Api/LabelsResourceApi.md#listlabelsresource) | **GET** /3/labels | Retrieve a list of labels
*LabelsResourceApi* | [**removeLabelsResource**](docs/Api/LabelsResourceApi.md#removelabelsresource) | **DELETE** /3/labels/{Id} | Delete a label
*LabelsResourceApi* | [**updateLabelsResource**](docs/Api/LabelsResourceApi.md#updatelabelsresource) | **PUT** /3/labels/{Id} | Update a label
*LockedPeriodResourceApi* | [**getLockedPeriodResource**](docs/Api/LockedPeriodResourceApi.md#getlockedperiodresource) | **GET** /3/settings/lockedperiod/ | Retrieve the locked period
*MeResourceApi* | [**getMeResource**](docs/Api/MeResourceApi.md#getmeresource) | **GET** /3/me | Retrieve user information  Use this endpoint to retrieve user information related to the used access token
*ModesOfPaymentsResourceApi* | [**createModesOfPaymentsResource**](docs/Api/ModesOfPaymentsResourceApi.md#createmodesofpaymentsresource) | **POST** /3/modesofpayments | Create a mode of payment
*ModesOfPaymentsResourceApi* | [**getModesOfPaymentsResource**](docs/Api/ModesOfPaymentsResourceApi.md#getmodesofpaymentsresource) | **GET** /3/modesofpayments/{Code} | Retrieve a single mode of payment
*ModesOfPaymentsResourceApi* | [**listModesOfPaymentsResource**](docs/Api/ModesOfPaymentsResourceApi.md#listmodesofpaymentsresource) | **GET** /3/modesofpayments | Retrieve a list of modes of payments
*ModesOfPaymentsResourceApi* | [**updateModesOfPaymentsResource**](docs/Api/ModesOfPaymentsResourceApi.md#updatemodesofpaymentsresource) | **PUT** /3/modesofpayments/{Code} | Update a mode of payment
*OffersResourceApi* | [**cancelOffersResource**](docs/Api/OffersResourceApi.md#canceloffersresource) | **PUT** /3/offers/{DocumentNumber}/cancel | Cancels given offer
*OffersResourceApi* | [**createOffersResource**](docs/Api/OffersResourceApi.md#createoffersresource) | **POST** /3/offers/ | Create an offer
*OffersResourceApi* | [**createorder**](docs/Api/OffersResourceApi.md#createorder) | **PUT** /3/offers/{DocumentNumber}/createorder | Create order out of given offer
*OffersResourceApi* | [**emailOffersResource**](docs/Api/OffersResourceApi.md#emailoffersresource) | **GET** /3/offers/{DocumentNumber}/email | Send given offer as email
*OffersResourceApi* | [**externalprint**](docs/Api/OffersResourceApi.md#externalprint) | **PUT** /3/offers/{DocumentNumber}/externalprint | Set given offer as sent
*OffersResourceApi* | [**getOffersResource**](docs/Api/OffersResourceApi.md#getoffersresource) | **GET** /3/offers/{DocumentNumber} | Retrieve a single offer
*OffersResourceApi* | [**listOffersResource**](docs/Api/OffersResourceApi.md#listoffersresource) | **GET** /3/offers/ | Retrieve a list of offers
*OffersResourceApi* | [**previewOffersResource**](docs/Api/OffersResourceApi.md#previewoffersresource) | **GET** /3/offers/{DocumentNumber}/preview | Preview given offer
*OffersResourceApi* | [**printOffersResource**](docs/Api/OffersResourceApi.md#printoffersresource) | **GET** /3/offers/{DocumentNumber}/print | Print given offer
*OffersResourceApi* | [**updateOffersResource**](docs/Api/OffersResourceApi.md#updateoffersresource) | **PUT** /3/offers/{DocumentNumber} | Update an offer
*OrdersResourceApi* | [**cancelOrdersResource**](docs/Api/OrdersResourceApi.md#cancelordersresource) | **PUT** /3/orders/{DocumentNumber}/cancel | Cancels given order
*OrdersResourceApi* | [**createOrdersResource**](docs/Api/OrdersResourceApi.md#createordersresource) | **POST** /3/orders/ | Create a new order
*OrdersResourceApi* | [**createinvoiceOrdersResource**](docs/Api/OrdersResourceApi.md#createinvoiceordersresource) | **PUT** /3/orders/{DocumentNumber}/createinvoice | Create invoice out of given order
*OrdersResourceApi* | [**emailOrdersResource**](docs/Api/OrdersResourceApi.md#emailordersresource) | **GET** /3/orders/{DocumentNumber}/email | Send given order as email
*OrdersResourceApi* | [**externalprintOrdersResource**](docs/Api/OrdersResourceApi.md#externalprintordersresource) | **PUT** /3/orders/{DocumentNumber}/externalprint | Set given order as sent
*OrdersResourceApi* | [**getOrdersResource**](docs/Api/OrdersResourceApi.md#getordersresource) | **GET** /3/orders/{DocumentNumber} | Retrieve a single order
*OrdersResourceApi* | [**listOrdersResource**](docs/Api/OrdersResourceApi.md#listordersresource) | **GET** /3/orders/ | Retrieve a list of orders
*OrdersResourceApi* | [**previewOrdersResource**](docs/Api/OrdersResourceApi.md#previewordersresource) | **GET** /3/orders/{DocumentNumber}/preview | Preview given offer
*OrdersResourceApi* | [**printOrdersResource**](docs/Api/OrdersResourceApi.md#printordersresource) | **GET** /3/orders/{DocumentNumber}/print | Print given order
*OrdersResourceApi* | [**updateOrdersResource**](docs/Api/OrdersResourceApi.md#updateordersresource) | **PUT** /3/orders/{DocumentNumber} | Update an order
*PredefinedAccountsResourceApi* | [**getPredefinedAccountsResource**](docs/Api/PredefinedAccountsResourceApi.md#getpredefinedaccountsresource) | **GET** /3/predefinedaccounts/{name} | Retrieve information for a specific account type
*PredefinedAccountsResourceApi* | [**listPredefinedAccountsResource**](docs/Api/PredefinedAccountsResourceApi.md#listpredefinedaccountsresource) | **GET** /3/predefinedaccounts/ | Retrieve a list of all predefined accounts
*PredefinedAccountsResourceApi* | [**updatePredefinedAccountsResource**](docs/Api/PredefinedAccountsResourceApi.md#updatepredefinedaccountsresource) | **PUT** /3/predefinedaccounts/{name} | Update a Predefined Account
*PredefinedVoucherSeriesResourceApi* | [**getPredefinedVoucherSeriesResource**](docs/Api/PredefinedVoucherSeriesResourceApi.md#getpredefinedvoucherseriesresource) | **GET** /3/predefinedvoucherseries/{Name} | Retrieve a specific predefined voucher series
*PredefinedVoucherSeriesResourceApi* | [**listPredefinedVoucherSeriesResource**](docs/Api/PredefinedVoucherSeriesResourceApi.md#listpredefinedvoucherseriesresource) | **GET** /3/predefinedvoucherseries/ | Retrieve a list of predefined voucher series
*PredefinedVoucherSeriesResourceApi* | [**updatePredefinedVoucherSeriesResource**](docs/Api/PredefinedVoucherSeriesResourceApi.md#updatepredefinedvoucherseriesresource) | **PUT** /3/predefinedvoucherseries/{Name} | Update a predefined voucher series
*PriceListsResourceApi* | [**createPriceListsResource**](docs/Api/PriceListsResourceApi.md#createpricelistsresource) | **POST** /3/pricelists | Create a price list
*PriceListsResourceApi* | [**getPriceListsResource**](docs/Api/PriceListsResourceApi.md#getpricelistsresource) | **GET** /3/pricelists/{Code} | Retrieve a single price list
*PriceListsResourceApi* | [**listPriceListsResource**](docs/Api/PriceListsResourceApi.md#listpricelistsresource) | **GET** /3/pricelists | Retrieve a list of price lists
*PriceListsResourceApi* | [**updatePriceListsResource**](docs/Api/PriceListsResourceApi.md#updatepricelistsresource) | **PUT** /3/pricelists/{Code} | Update a price list
*PricesResourceApi* | [**createPricesResource**](docs/Api/PricesResourceApi.md#createpricesresource) | **POST** /3/prices/ | Create a price
*PricesResourceApi* | [**getFirstPrice**](docs/Api/PricesResourceApi.md#getfirstprice) | **GET** /3/prices/{PriceList}/{ArticleNumber} | Retrieve the first price for the specified article
*PricesResourceApi* | [**getPricesResource**](docs/Api/PricesResourceApi.md#getpricesresource) | **GET** /3/prices/{PriceList}/{ArticleNumber}/{FromQuantity} | Retrieve a price for a specified article
*PricesResourceApi* | [**listPricesResource**](docs/Api/PricesResourceApi.md#listpricesresource) | **GET** /3/prices/sublist/{PriceList}/{ArticleNumber} | Retrieve a list of articles with all their prices in the specified price list
*PricesResourceApi* | [**removePricesResource**](docs/Api/PricesResourceApi.md#removepricesresource) | **DELETE** /3/prices/{PriceList}/{ArticleNumber}/{FromQuantity} | Delete a single price
*PricesResourceApi* | [**updatePricesResource**](docs/Api/PricesResourceApi.md#updatepricesresource) | **PUT** /3/prices/{PriceList}/{ArticleNumber}/{FromQuantity} | Update a price
*PricesResourceApi* | [**updatePricesResource1**](docs/Api/PricesResourceApi.md#updatepricesresource1) | **PUT** /3/prices/{PriceList}/{ArticleNumber} | Update the first price in the specified article
*PrintTemplatesResourceApi* | [**listPrintTemplatesResource**](docs/Api/PrintTemplatesResourceApi.md#listprinttemplatesresource) | **GET** /3/printtemplates | Retrieve a list of print templates
*ProjectsResourceApi* | [**createProjectsResource**](docs/Api/ProjectsResourceApi.md#createprojectsresource) | **POST** /3/projects | Create a project
*ProjectsResourceApi* | [**getProjectsResource**](docs/Api/ProjectsResourceApi.md#getprojectsresource) | **GET** /3/projects/{ProjectNumber} | Retrieve a single project
*ProjectsResourceApi* | [**listProjectsResource**](docs/Api/ProjectsResourceApi.md#listprojectsresource) | **GET** /3/projects | Retrieve a list of projects
*ProjectsResourceApi* | [**removeProjectsResource**](docs/Api/ProjectsResourceApi.md#removeprojectsresource) | **DELETE** /3/projects/{ProjectNumber} | Remove a project
*ProjectsResourceApi* | [**updateProjectsResource**](docs/Api/ProjectsResourceApi.md#updateprojectsresource) | **PUT** /3/projects/{ProjectNumber} | Update a project
*PurchaseOrderResourceApi* | [**batchUpdateResponseState**](docs/Api/PurchaseOrderResourceApi.md#batchupdateresponsestate) | **PUT** /api/warehouse/purchaseorders-v1/response | Update response states
*PurchaseOrderResourceApi* | [**createPurchaseOrderResource**](docs/Api/PurchaseOrderResourceApi.md#createpurchaseorderresource) | **POST** /api/warehouse/purchaseorders-v1 | Create Purchase Order
*PurchaseOrderResourceApi* | [**getAllPurchaseOrderResource**](docs/Api/PurchaseOrderResourceApi.md#getallpurchaseorderresource) | **GET** /api/warehouse/purchaseorders-v1 | List Purchase Orders
*PurchaseOrderResourceApi* | [**getAttachedNotes**](docs/Api/PurchaseOrderResourceApi.md#getattachednotes) | **GET** /api/warehouse/purchaseorders-v1/{id}/notes | Get notes
*PurchaseOrderResourceApi* | [**getCsvReport**](docs/Api/PurchaseOrderResourceApi.md#getcsvreport) | **GET** /api/warehouse/purchaseorders-v1/csv | Get CSV list of Purchase Orders
*PurchaseOrderResourceApi* | [**getMatchedDocuments**](docs/Api/PurchaseOrderResourceApi.md#getmatcheddocuments) | **GET** /api/warehouse/purchaseorders-v1/{id}/matches | List matched documents
*PurchaseOrderResourceApi* | [**getPurchaseOrderResource**](docs/Api/PurchaseOrderResourceApi.md#getpurchaseorderresource) | **GET** /api/warehouse/purchaseorders-v1/{id} | Get Purchase Order
*PurchaseOrderResourceApi* | [**sendPurchaseOrder**](docs/Api/PurchaseOrderResourceApi.md#sendpurchaseorder) | **POST** /api/warehouse/purchaseorders-v1/{id}/send | Send purchase order via email
*PurchaseOrderResourceApi* | [**sendPurchaseOrders**](docs/Api/PurchaseOrderResourceApi.md#sendpurchaseorders) | **POST** /api/warehouse/purchaseorders-v1/sendpurchaseorders | Sends multiple purchase orders via email
*PurchaseOrderResourceApi* | [**setDropshipManuallyCompleted**](docs/Api/PurchaseOrderResourceApi.md#setdropshipmanuallycompleted) | **PUT** /api/warehouse/purchaseorders-v1/{id}/dropshipcomplete | Manually complete dropship order
*PurchaseOrderResourceApi* | [**setManuallyCompleted**](docs/Api/PurchaseOrderResourceApi.md#setmanuallycompleted) | **PUT** /api/warehouse/purchaseorders-v1/{id}/complete | Manually complete Purchase Order
*PurchaseOrderResourceApi* | [**updatePurchaseOrderResource**](docs/Api/PurchaseOrderResourceApi.md#updatepurchaseorderresource) | **PUT** /api/warehouse/purchaseorders-v1/{id} | Update Purchase Order
*PurchaseOrderResourceApi* | [**updateResponseState**](docs/Api/PurchaseOrderResourceApi.md#updateresponsestate) | **PUT** /api/warehouse/purchaseorders-v1/{id}/response | Update response state
*PurchaseOrderResourceApi* | [**voidDocumentPurchaseOrderResource**](docs/Api/PurchaseOrderResourceApi.md#voiddocumentpurchaseorderresource) | **PUT** /api/warehouse/purchaseorders-v1/{id}/void | Void Purchase Order
*RegistrationsResourceApi* | [**listRegistrationsResource**](docs/Api/RegistrationsResourceApi.md#listregistrationsresource) | **GET** /api/time/registrations-v2 | Get time/absence registrations that match filter
*SalaryTransactionsResourceApi* | [**createSalaryTransactionsResource**](docs/Api/SalaryTransactionsResourceApi.md#createsalarytransactionsresource) | **POST** /3/salarytransactions | Create a new salary transaction for an employee
*SalaryTransactionsResourceApi* | [**deleteSalaryTransactionsResource**](docs/Api/SalaryTransactionsResourceApi.md#deletesalarytransactionsresource) | **DELETE** /3/salarytransactions/{SalaryRow} | Delete a single salary transaction
*SalaryTransactionsResourceApi* | [**getSalaryTransactionsResource**](docs/Api/SalaryTransactionsResourceApi.md#getsalarytransactionsresource) | **GET** /3/salarytransactions/{SalaryRow} | Retrieve a single salary transaction
*SalaryTransactionsResourceApi* | [**listSalaryTransactionsResource**](docs/Api/SalaryTransactionsResourceApi.md#listsalarytransactionsresource) | **GET** /3/salarytransactions | List all salary transactions for all employees
*SalaryTransactionsResourceApi* | [**updateSalaryTransactionsResource**](docs/Api/SalaryTransactionsResourceApi.md#updatesalarytransactionsresource) | **PUT** /3/salarytransactions/{SalaryRow} | Update a salary transaction
*ScheduleTimesResourceApi* | [**getScheduleTimesResource**](docs/Api/ScheduleTimesResourceApi.md#getscheduletimesresource) | **GET** /3/scheduletimes/{EmployeeId}/{Date} | Retrieve a specific schedule time
*ScheduleTimesResourceApi* | [**reset**](docs/Api/ScheduleTimesResourceApi.md#reset) | **PUT** /3/scheduletimes/{EmployeeId}/{Date}/resetday | Reset schedule time
*ScheduleTimesResourceApi* | [**updateScheduleTimesResource**](docs/Api/ScheduleTimesResourceApi.md#updatescheduletimesresource) | **PUT** /3/scheduletimes/{EmployeeId}/{Date} | Update a schedule time
*SieResourceApi* | [**getSieResource**](docs/Api/SieResourceApi.md#getsieresource) | **GET** /3/sie/{Type} | Retrieve a SIE file
*StockPointResourceApi* | [**appendStockLocations**](docs/Api/StockPointResourceApi.md#appendstocklocations) | **POST** /api/warehouse/stockpoints-v1/{id} | Append stock locations
*StockPointResourceApi* | [**create**](docs/Api/StockPointResourceApi.md#create) | **POST** /api/warehouse/stockpoints-v1 | Create stock point
*StockPointResourceApi* | [**delete**](docs/Api/StockPointResourceApi.md#delete) | **DELETE** /api/warehouse/stockpoints-v1/{id} | Delete stock point
*StockPointResourceApi* | [**getAll**](docs/Api/StockPointResourceApi.md#getall) | **GET** /api/warehouse/stockpoints-v1 | List stock points
*StockPointResourceApi* | [**getByAmbiguousId**](docs/Api/StockPointResourceApi.md#getbyambiguousid) | **GET** /api/warehouse/stockpoints-v1/{id} | Get stock point
*StockPointResourceApi* | [**getMany**](docs/Api/StockPointResourceApi.md#getmany) | **GET** /api/warehouse/stockpoints-v1/multi | Get stock points
*StockPointResourceApi* | [**getStockLocationsByAmbiguousId**](docs/Api/StockPointResourceApi.md#getstocklocationsbyambiguousid) | **GET** /api/warehouse/stockpoints-v1/{id}/stocklocations | Get stock locations
*StockPointResourceApi* | [**update**](docs/Api/StockPointResourceApi.md#update) | **PUT** /api/warehouse/stockpoints-v1/{id} | Update stock point
*StockStatusResourceApi* | [**getStockBalance**](docs/Api/StockStatusResourceApi.md#getstockbalance) | **GET** /api/warehouse/status-v1/stockbalance | Get stock balance
*StockTakingResourceApi* | [**addStockTakingRows**](docs/Api/StockTakingResourceApi.md#addstocktakingrows) | **POST** /api/warehouse/stocktaking-v1/{id}/rows | Add rows
*StockTakingResourceApi* | [**addStockTakingRowsByFilter**](docs/Api/StockTakingResourceApi.md#addstocktakingrowsbyfilter) | **POST** /api/warehouse/stocktaking-v1/{id}/addrows | Add rows by filter
*StockTakingResourceApi* | [**createStockTakingResource**](docs/Api/StockTakingResourceApi.md#createstocktakingresource) | **POST** /api/warehouse/stocktaking-v1 | Create stock taking
*StockTakingResourceApi* | [**deleteStockTaking**](docs/Api/StockTakingResourceApi.md#deletestocktaking) | **DELETE** /api/warehouse/stocktaking-v1/{id} | Delete Stock Taking document
*StockTakingResourceApi* | [**deleteStockTakingRow**](docs/Api/StockTakingResourceApi.md#deletestocktakingrow) | **DELETE** /api/warehouse/stocktaking-v1/{id}/rows/{rowId:.*} | Delete row
*StockTakingResourceApi* | [**deleteStockTakingRowByFilter**](docs/Api/StockTakingResourceApi.md#deletestocktakingrowbyfilter) | **DELETE** /api/warehouse/stocktaking-v1/{id}/rows | Delete rows by filter
*StockTakingResourceApi* | [**getAllStockTakingResource**](docs/Api/StockTakingResourceApi.md#getallstocktakingresource) | **GET** /api/warehouse/stocktaking-v1 | List stock takings
*StockTakingResourceApi* | [**getCandidateRows**](docs/Api/StockTakingResourceApi.md#getcandidaterows) | **GET** /api/warehouse/stocktaking-v1/{id}/candidates | Get candidate rows
*StockTakingResourceApi* | [**getRows**](docs/Api/StockTakingResourceApi.md#getrows) | **GET** /api/warehouse/stocktaking-v1/{id}/rows | Get Stock Taking Rows
*StockTakingResourceApi* | [**getStockTakingResource**](docs/Api/StockTakingResourceApi.md#getstocktakingresource) | **GET** /api/warehouse/stocktaking-v1/{id} | Get Stock Taking document
*StockTakingResourceApi* | [**releaseStockTakingResource**](docs/Api/StockTakingResourceApi.md#releasestocktakingresource) | **PUT** /api/warehouse/stocktaking-v1/{id}/release | Release Stock Taking document
*StockTakingResourceApi* | [**updateStockTakingResource**](docs/Api/StockTakingResourceApi.md#updatestocktakingresource) | **PUT** /api/warehouse/stocktaking-v1/{id} | Update a stock taking
*StockTakingResourceApi* | [**voidStockTaking**](docs/Api/StockTakingResourceApi.md#voidstocktaking) | **PUT** /api/warehouse/stocktaking-v1/{id}/void | Void Stock Taking document
*SupplierInvoiceAccrualsResourceApi* | [**createSupplierInvoiceAccrualsResource**](docs/Api/SupplierInvoiceAccrualsResourceApi.md#createsupplierinvoiceaccrualsresource) | **POST** /3/supplierinvoiceaccruals/ | Create a supplier invoice accrual
*SupplierInvoiceAccrualsResourceApi* | [**getSupplierInvoiceAccrualsResource**](docs/Api/SupplierInvoiceAccrualsResourceApi.md#getsupplierinvoiceaccrualsresource) | **GET** /3/supplierinvoiceaccruals/{SupplierInvoiceNumber} | Retrieve a single supplier invoice accrual
*SupplierInvoiceAccrualsResourceApi* | [**listSupplierInvoiceAccrualsResource**](docs/Api/SupplierInvoiceAccrualsResourceApi.md#listsupplierinvoiceaccrualsresource) | **GET** /3/supplierinvoiceaccruals/ | Retrieve a list of supplier invoice accruals
*SupplierInvoiceAccrualsResourceApi* | [**removeSupplierInvoiceAccrualsResource**](docs/Api/SupplierInvoiceAccrualsResourceApi.md#removesupplierinvoiceaccrualsresource) | **DELETE** /3/supplierinvoiceaccruals/{SupplierInvoiceNumber} | Remove a supplier invoice accrual
*SupplierInvoiceAccrualsResourceApi* | [**updateSupplierInvoiceAccrualsResource**](docs/Api/SupplierInvoiceAccrualsResourceApi.md#updatesupplierinvoiceaccrualsresource) | **PUT** /3/supplierinvoiceaccruals/{SupplierInvoiceNumber} | Update a supplier invoice accrual
*SupplierInvoiceExternalUrlConnectionsResourceApi* | [**createSupplierInvoiceExternalUrlConnectionsResource**](docs/Api/SupplierInvoiceExternalUrlConnectionsResourceApi.md#createsupplierinvoiceexternalurlconnectionsresource) | **POST** /3/supplierinvoiceexternalurlconnections | Create a supplier invoice external URL connection
*SupplierInvoiceExternalUrlConnectionsResourceApi* | [**deleteSupplierInvoiceExternalUrlConnectionsResource**](docs/Api/SupplierInvoiceExternalUrlConnectionsResourceApi.md#deletesupplierinvoiceexternalurlconnectionsresource) | **DELETE** /3/supplierinvoiceexternalurlconnections/{Id} | Remove a supplier invoice external URL connection
*SupplierInvoiceExternalUrlConnectionsResourceApi* | [**getSupplierInvoiceExternalUrlConnectionsResource**](docs/Api/SupplierInvoiceExternalUrlConnectionsResourceApi.md#getsupplierinvoiceexternalurlconnectionsresource) | **GET** /3/supplierinvoiceexternalurlconnections/{Id} | Retrieve a single supplier invoice external URL connection
*SupplierInvoiceExternalUrlConnectionsResourceApi* | [**updateSupplierInvoiceExternalUrlConnectionsResource**](docs/Api/SupplierInvoiceExternalUrlConnectionsResourceApi.md#updatesupplierinvoiceexternalurlconnectionsresource) | **PUT** /3/supplierinvoiceexternalurlconnections/{Id} | Update a supplier invoice external URL connection
*SupplierInvoiceFileConnectionsResourceApi* | [**createSupplierInvoiceFileConnectionsResource**](docs/Api/SupplierInvoiceFileConnectionsResourceApi.md#createsupplierinvoicefileconnectionsresource) | **POST** /3/supplierinvoicefileconnections/ | Create an supplier invoice file connection
*SupplierInvoiceFileConnectionsResourceApi* | [**getSupplierInvoiceFileConnectionsResource**](docs/Api/SupplierInvoiceFileConnectionsResourceApi.md#getsupplierinvoicefileconnectionsresource) | **GET** /3/supplierinvoicefileconnections/{FileId} | Retrieve a single supplier invoice file connection
*SupplierInvoiceFileConnectionsResourceApi* | [**listSupplierInvoiceFileConnectionsResource**](docs/Api/SupplierInvoiceFileConnectionsResourceApi.md#listsupplierinvoicefileconnectionsresource) | **GET** /3/supplierinvoicefileconnections/ | Retrieve a list of supplier invoice file connections
*SupplierInvoiceFileConnectionsResourceApi* | [**removeSupplierInvoiceFileConnectionsResource**](docs/Api/SupplierInvoiceFileConnectionsResourceApi.md#removesupplierinvoicefileconnectionsresource) | **DELETE** /3/supplierinvoicefileconnections/{FileId} | Remove an supplier invoice file connection
*SupplierInvoicePaymentsResourceApi* | [**bookkeepSupplierInvoicePaymentsResource**](docs/Api/SupplierInvoicePaymentsResourceApi.md#bookkeepsupplierinvoicepaymentsresource) | **PUT** /3/supplierinvoicepayments/{Number}/bookkeep | Bookkeep a supplier invoice payment
*SupplierInvoicePaymentsResourceApi* | [**createSupplierInvoicePaymentsResource**](docs/Api/SupplierInvoicePaymentsResourceApi.md#createsupplierinvoicepaymentsresource) | **POST** /3/supplierinvoicepayments/ | Create a supplier invoice payment
*SupplierInvoicePaymentsResourceApi* | [**getSupplierInvoicePaymentsResource**](docs/Api/SupplierInvoicePaymentsResourceApi.md#getsupplierinvoicepaymentsresource) | **GET** /3/supplierinvoicepayments/{Number} | Retrieve a single supplier invoice payment
*SupplierInvoicePaymentsResourceApi* | [**listSupplierInvoicePaymentsResource**](docs/Api/SupplierInvoicePaymentsResourceApi.md#listsupplierinvoicepaymentsresource) | **GET** /3/supplierinvoicepayments/ | Retrieve a list of supplier invoice payments
*SupplierInvoicePaymentsResourceApi* | [**removeSupplierInvoicePaymentsResource**](docs/Api/SupplierInvoicePaymentsResourceApi.md#removesupplierinvoicepaymentsresource) | **DELETE** /3/supplierinvoicepayments/{Number} | Remove a supplier invoice payment
*SupplierInvoicePaymentsResourceApi* | [**updateSupplierInvoicePaymentsResource**](docs/Api/SupplierInvoicePaymentsResourceApi.md#updatesupplierinvoicepaymentsresource) | **PUT** /3/supplierinvoicepayments/{Number} | Update a supplier invoice payment
*SupplierInvoicesResourceApi* | [**approvalbookkeep**](docs/Api/SupplierInvoicesResourceApi.md#approvalbookkeep) | **PUT** /3/supplierinvoices/{GivenNumber}/approvalbookkeep | Approval of bookkeep of given supplier invoice
*SupplierInvoicesResourceApi* | [**approvalpayment**](docs/Api/SupplierInvoicesResourceApi.md#approvalpayment) | **PUT** /3/supplierinvoices/{GivenNumber}/approvalpayment | Approval of payment of given supplier invoice
*SupplierInvoicesResourceApi* | [**bookkeepSupplierInvoicesResource**](docs/Api/SupplierInvoicesResourceApi.md#bookkeepsupplierinvoicesresource) | **PUT** /3/supplierinvoices/{GivenNumber}/bookkeep | Bookkeep given supplier invoice
*SupplierInvoicesResourceApi* | [**cancelSupplierInvoicesResource**](docs/Api/SupplierInvoicesResourceApi.md#cancelsupplierinvoicesresource) | **PUT** /3/supplierinvoices/{GivenNumber}/cancel | Cancels given supplier invoice
*SupplierInvoicesResourceApi* | [**createSupplierInvoicesResource**](docs/Api/SupplierInvoicesResourceApi.md#createsupplierinvoicesresource) | **POST** /3/supplierinvoices/ | Create a supplier invoice
*SupplierInvoicesResourceApi* | [**creditSupplierInvoicesResource**](docs/Api/SupplierInvoicesResourceApi.md#creditsupplierinvoicesresource) | **PUT** /3/supplierinvoices/{GivenNumber}/credit | Credit given supplier invoice
*SupplierInvoicesResourceApi* | [**getSupplierInvoicesResource**](docs/Api/SupplierInvoicesResourceApi.md#getsupplierinvoicesresource) | **GET** /3/supplierinvoices/{GivenNumber} | Retrieve a single supplier invoice
*SupplierInvoicesResourceApi* | [**listSupplierInvoicesResource**](docs/Api/SupplierInvoicesResourceApi.md#listsupplierinvoicesresource) | **GET** /3/supplierinvoices/ | Retrieve a list of supplier invoices
*SupplierInvoicesResourceApi* | [**updateSupplierInvoicesResource**](docs/Api/SupplierInvoicesResourceApi.md#updatesupplierinvoicesresource) | **PUT** /3/supplierinvoices/{GivenNumber} | Update a supplier invoice
*SuppliersResourceApi* | [**createSuppliersResource**](docs/Api/SuppliersResourceApi.md#createsuppliersresource) | **POST** /3/suppliers | Create a supplier
*SuppliersResourceApi* | [**getSuppliersResource**](docs/Api/SuppliersResourceApi.md#getsuppliersresource) | **GET** /3/suppliers/{SupplierNumber} | Retrieve a single supplier
*SuppliersResourceApi* | [**listSuppliersResource**](docs/Api/SuppliersResourceApi.md#listsuppliersresource) | **GET** /3/suppliers | Retrieve a list of suppliers
*SuppliersResourceApi* | [**updateSuppliersResource**](docs/Api/SuppliersResourceApi.md#updatesuppliersresource) | **PUT** /3/suppliers/{SupplierNumber} | Update a supplier
*TaxReductionsResourceApi* | [**createTaxReductionsResource**](docs/Api/TaxReductionsResourceApi.md#createtaxreductionsresource) | **POST** /3/taxreductions | Create a Tax Reduction
*TaxReductionsResourceApi* | [**getTaxReductionsResource**](docs/Api/TaxReductionsResourceApi.md#gettaxreductionsresource) | **GET** /3/taxreductions/{Id} | Retrieve a single tax reduction
*TaxReductionsResourceApi* | [**listTaxReductionsResource**](docs/Api/TaxReductionsResourceApi.md#listtaxreductionsresource) | **GET** /3/taxreductions | Retrieve a list of tax reductions
*TaxReductionsResourceApi* | [**removeTaxReductionsResource**](docs/Api/TaxReductionsResourceApi.md#removetaxreductionsresource) | **DELETE** /3/taxreductions/{Id} | Remove a tax reduction
*TaxReductionsResourceApi* | [**updateTaxReductionsResource**](docs/Api/TaxReductionsResourceApi.md#updatetaxreductionsresource) | **PUT** /3/taxreductions/{Id} | Update a tax reduction
*TenantResourceApi* | [**getTenant**](docs/Api/TenantResourceApi.md#gettenant) | **GET** /api/warehouse/tenants-v4 | Get Warehouse activation status
*TermsOfDeliveriesResourceApi* | [**createTermsOfDeliveriesResource**](docs/Api/TermsOfDeliveriesResourceApi.md#createtermsofdeliveriesresource) | **POST** /3/termsofdeliveries | Create a terms of delivery
*TermsOfDeliveriesResourceApi* | [**getTermsOfDeliveriesResource**](docs/Api/TermsOfDeliveriesResourceApi.md#gettermsofdeliveriesresource) | **GET** /3/termsofdeliveries/{Code} | Retrieve a single terms of delivery
*TermsOfDeliveriesResourceApi* | [**listTermsOfDeliveriesResource**](docs/Api/TermsOfDeliveriesResourceApi.md#listtermsofdeliveriesresource) | **GET** /3/termsofdeliveries | Retrieve a list of terms of deliveries
*TermsOfDeliveriesResourceApi* | [**updateTermsOfDeliveriesResource**](docs/Api/TermsOfDeliveriesResourceApi.md#updatetermsofdeliveriesresource) | **PUT** /3/termsofdeliveries/{Code} | Update a terms of delivery
*TermsOfPaymentsResourceApi* | [**createTermsOfPaymentsResource**](docs/Api/TermsOfPaymentsResourceApi.md#createtermsofpaymentsresource) | **POST** /3/termsofpayments | Create a term of payment
*TermsOfPaymentsResourceApi* | [**getTermsOfPaymentsResource**](docs/Api/TermsOfPaymentsResourceApi.md#gettermsofpaymentsresource) | **GET** /3/termsofpayments/{Code} | Retrieve a single terms of payment
*TermsOfPaymentsResourceApi* | [**listTermsOfPaymentsResource**](docs/Api/TermsOfPaymentsResourceApi.md#listtermsofpaymentsresource) | **GET** /3/termsofpayments | Retrieve a list of all terms of payments
*TermsOfPaymentsResourceApi* | [**removeTermsOfPaymentsResource**](docs/Api/TermsOfPaymentsResourceApi.md#removetermsofpaymentsresource) | **DELETE** /3/termsofpayments/{Code} | Remove a term of payment
*TermsOfPaymentsResourceApi* | [**updateTermsOfPaymentsResource**](docs/Api/TermsOfPaymentsResourceApi.md#updatetermsofpaymentsresource) | **PUT** /3/termsofpayments/{Code} | Update a term of payment
*TrustedEmailSendersResourceApi* | [**createTrustedEmailSendersResource**](docs/Api/TrustedEmailSendersResourceApi.md#createtrustedemailsendersresource) | **POST** /3/emailsenders/trusted | Add a new email address as trusted
*TrustedEmailSendersResourceApi* | [**getTrustedEmailSendersResource**](docs/Api/TrustedEmailSendersResourceApi.md#gettrustedemailsendersresource) | **GET** /3/emailsenders/ | Retrieve a list of all trusted and rejected senders
*TrustedEmailSendersResourceApi* | [**removeTrustedEmailSendersResource**](docs/Api/TrustedEmailSendersResourceApi.md#removetrustedemailsendersresource) | **DELETE** /3/emailsenders/trusted/{Id} | Delete an email address from the trusted senders list
*UnitsResourceApi* | [**createUnitsResource**](docs/Api/UnitsResourceApi.md#createunitsresource) | **POST** /3/units | Create a unit
*UnitsResourceApi* | [**getUnitsResource**](docs/Api/UnitsResourceApi.md#getunitsresource) | **GET** /3/units/{Code} | Retrieve a single unit
*UnitsResourceApi* | [**listUnitsResource**](docs/Api/UnitsResourceApi.md#listunitsresource) | **GET** /3/units | Retrieve a list of units
*UnitsResourceApi* | [**removeUnitsResource**](docs/Api/UnitsResourceApi.md#removeunitsresource) | **DELETE** /3/units/{Code} | Remove a unit
*UnitsResourceApi* | [**updateUnitsResource**](docs/Api/UnitsResourceApi.md#updateunitsresource) | **PUT** /3/units/{Code} | Update a unit
*VacationDebtBasisResourceApi* | [**getVacationDebtBasisResource**](docs/Api/VacationDebtBasisResourceApi.md#getvacationdebtbasisresource) | **GET** /3/vacationdebtbasis/{Year}/{Month} | Retrieve a specific vacation debt basis for a posted voucher
*VoucherFileConnectionsResourceApi* | [**createVoucherFileConnectionsResource**](docs/Api/VoucherFileConnectionsResourceApi.md#createvoucherfileconnectionsresource) | **POST** /3/voucherfileconnections/ | Create a voucher file connection
*VoucherFileConnectionsResourceApi* | [**getVoucherFileConnectionsResource**](docs/Api/VoucherFileConnectionsResourceApi.md#getvoucherfileconnectionsresource) | **GET** /3/voucherfileconnections/{FileId} | Retrieve a single voucher file connection
*VoucherFileConnectionsResourceApi* | [**listVoucherFileConnectionsResource**](docs/Api/VoucherFileConnectionsResourceApi.md#listvoucherfileconnectionsresource) | **GET** /3/voucherfileconnections/ | Retrieve a list of voucher file connections
*VoucherFileConnectionsResourceApi* | [**removeVoucherFileConnectionsResource**](docs/Api/VoucherFileConnectionsResourceApi.md#removevoucherfileconnectionsresource) | **DELETE** /3/voucherfileconnections/{FileId} | Remove a voucher file connection
*VoucherSeriesResourceApi* | [**createVoucherSeriesResource**](docs/Api/VoucherSeriesResourceApi.md#createvoucherseriesresource) | **POST** /3/voucherseries | Create a voucher series
*VoucherSeriesResourceApi* | [**getVoucherSeriesResource**](docs/Api/VoucherSeriesResourceApi.md#getvoucherseriesresource) | **GET** /3/voucherseries/{Code} | Retrieve a single voucher series
*VoucherSeriesResourceApi* | [**listVoucherSeriesResource**](docs/Api/VoucherSeriesResourceApi.md#listvoucherseriesresource) | **GET** /3/voucherseries | Retrieve a list of voucher series
*VoucherSeriesResourceApi* | [**updateVoucherSeriesResource**](docs/Api/VoucherSeriesResourceApi.md#updatevoucherseriesresource) | **PUT** /3/voucherseries/{Code} | Update a voucher series
*VouchersResourceApi* | [**createVouchersResource**](docs/Api/VouchersResourceApi.md#createvouchersresource) | **POST** /3/vouchers/ | Create a voucher
*VouchersResourceApi* | [**getVouchersResource**](docs/Api/VouchersResourceApi.md#getvouchersresource) | **GET** /3/vouchers/{VoucherSeries}/{VoucherNumber} | Retrieve a specific voucher
*VouchersResourceApi* | [**listSeries**](docs/Api/VouchersResourceApi.md#listseries) | **GET** /3/vouchers/sublist/{VoucherSeries} | Retrieve a list of vouchers for a specific series
*VouchersResourceApi* | [**listVouchersResource**](docs/Api/VouchersResourceApi.md#listvouchersresource) | **GET** /3/vouchers/ | Retrieve all vouchers
*WayOfDeliveriesResourceApi* | [**createWayOfDeliveriesResource**](docs/Api/WayOfDeliveriesResourceApi.md#createwayofdeliveriesresource) | **POST** /3/wayofdeliveries | Create a way of delivery
*WayOfDeliveriesResourceApi* | [**getWayOfDeliveriesResource**](docs/Api/WayOfDeliveriesResourceApi.md#getwayofdeliveriesresource) | **GET** /3/wayofdeliveries/{Code} | Retrieve a single way of delivery
*WayOfDeliveriesResourceApi* | [**listWayOfDeliveriesResource**](docs/Api/WayOfDeliveriesResourceApi.md#listwayofdeliveriesresource) | **GET** /3/wayofdeliveries | Retrieve a list of way of deliveries
*WayOfDeliveriesResourceApi* | [**removeWayOfDeliveriesResource**](docs/Api/WayOfDeliveriesResourceApi.md#removewayofdeliveriesresource) | **DELETE** /3/wayofdeliveries/{Code} | Remove a way of delivery
*WayOfDeliveriesResourceApi* | [**updateWayOfDeliveriesResource**](docs/Api/WayOfDeliveriesResourceApi.md#updatewayofdeliveriesresource) | **PUT** /3/wayofdeliveries/{Code} | Update a way of delivery

## Models

- [AbsenceTransactionListItem](docs/Model/AbsenceTransactionListItem.md)
- [AbsenceTransactionListItemWrap](docs/Model/AbsenceTransactionListItemWrap.md)
- [AbsenceTransactionPayload](docs/Model/AbsenceTransactionPayload.md)
- [AbsenceTransactionPayloadWrap](docs/Model/AbsenceTransactionPayloadWrap.md)
- [AbsenceTransactionSingleItem](docs/Model/AbsenceTransactionSingleItem.md)
- [AbsenceTransactionSingleItemWrap](docs/Model/AbsenceTransactionSingleItemWrap.md)
- [AccountChart](docs/Model/AccountChart.md)
- [AccountChartWrap](docs/Model/AccountChartWrap.md)
- [AccountListItem](docs/Model/AccountListItem.md)
- [AccountListItemWrap](docs/Model/AccountListItemWrap.md)
- [AccountPayload](docs/Model/AccountPayload.md)
- [AccountPayloadOpeningQuantities](docs/Model/AccountPayloadOpeningQuantities.md)
- [AccountPayloadWrap](docs/Model/AccountPayloadWrap.md)
- [AccountSingleItem](docs/Model/AccountSingleItem.md)
- [AccountSingleItemOpeningQuantities](docs/Model/AccountSingleItemOpeningQuantities.md)
- [AccountSingleItemWrap](docs/Model/AccountSingleItemWrap.md)
- [Article](docs/Model/Article.md)
- [ArticleFileConnection](docs/Model/ArticleFileConnection.md)
- [ArticleFileConnectionListItem](docs/Model/ArticleFileConnectionListItem.md)
- [ArticleFileConnectionListItemWrap](docs/Model/ArticleFileConnectionListItemWrap.md)
- [ArticleFileConnectionWrap](docs/Model/ArticleFileConnectionWrap.md)
- [ArticleListItem](docs/Model/ArticleListItem.md)
- [ArticleListItemList](docs/Model/ArticleListItemList.md)
- [ArticleRegistration](docs/Model/ArticleRegistration.md)
- [ArticleWrap](docs/Model/ArticleWrap.md)
- [Asset](docs/Model/Asset.md)
- [AssetFileConnection](docs/Model/AssetFileConnection.md)
- [AssetFileConnectionResponse](docs/Model/AssetFileConnectionResponse.md)
- [AssetSingle](docs/Model/AssetSingle.md)
- [AssetType](docs/Model/AssetType.md)
- [AssetTypeWrapList](docs/Model/AssetTypeWrapList.md)
- [AssetTypeWrapSingle](docs/Model/AssetTypeWrapSingle.md)
- [Attachment](docs/Model/Attachment.md)
- [AttendanceTransaction](docs/Model/AttendanceTransaction.md)
- [AttendanceTransactionListItem](docs/Model/AttendanceTransactionListItem.md)
- [AttendanceTransactionListItemList](docs/Model/AttendanceTransactionListItemList.md)
- [AttendanceTransactionWrap](docs/Model/AttendanceTransactionWrap.md)
- [AverageCost](docs/Model/AverageCost.md)
- [BaseArticleRegistration](docs/Model/BaseArticleRegistration.md)
- [CompanyInfo](docs/Model/CompanyInfo.md)
- [CompanyInfoWrap](docs/Model/CompanyInfoWrap.md)
- [CompanySettings](docs/Model/CompanySettings.md)
- [CompanySettingsWrap](docs/Model/CompanySettingsWrap.md)
- [Contract](docs/Model/Contract.md)
- [ContractAccrual](docs/Model/ContractAccrual.md)
- [ContractAccrualAccrualRow](docs/Model/ContractAccrualAccrualRow.md)
- [ContractAccrualListItem](docs/Model/ContractAccrualListItem.md)
- [ContractAccrualListItemList](docs/Model/ContractAccrualListItemList.md)
- [ContractAccrualWrap](docs/Model/ContractAccrualWrap.md)
- [ContractEmailInformation](docs/Model/ContractEmailInformation.md)
- [ContractInvoiceRow](docs/Model/ContractInvoiceRow.md)
- [ContractListItem](docs/Model/ContractListItem.md)
- [ContractListItemList](docs/Model/ContractListItemList.md)
- [ContractTemplate](docs/Model/ContractTemplate.md)
- [ContractTemplateInvoiceRow](docs/Model/ContractTemplateInvoiceRow.md)
- [ContractTemplateListItem](docs/Model/ContractTemplateListItem.md)
- [ContractTemplateListItemList](docs/Model/ContractTemplateListItemList.md)
- [ContractTemplateWrap](docs/Model/ContractTemplateWrap.md)
- [ContractWrap](docs/Model/ContractWrap.md)
- [CostCenter](docs/Model/CostCenter.md)
- [CostCenterList](docs/Model/CostCenterList.md)
- [CostCenterWrap](docs/Model/CostCenterWrap.md)
- [CreateAsset](docs/Model/CreateAsset.md)
- [CreateAssetFileConnection](docs/Model/CreateAssetFileConnection.md)
- [CreateAssetWrap](docs/Model/CreateAssetWrap.md)
- [CreatePayload](docs/Model/CreatePayload.md)
- [CreatePayloadWrap](docs/Model/CreatePayloadWrap.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyList](docs/Model/CurrencyList.md)
- [CurrencyWrap](docs/Model/CurrencyWrap.md)
- [CustomDocumentType](docs/Model/CustomDocumentType.md)
- [CustomInboundDocument](docs/Model/CustomInboundDocument.md)
- [CustomInboundDocumentRow](docs/Model/CustomInboundDocumentRow.md)
- [CustomOutboundDocument](docs/Model/CustomOutboundDocument.md)
- [CustomOutboundDocumentRow](docs/Model/CustomOutboundDocumentRow.md)
- [Customer](docs/Model/Customer.md)
- [CustomerDefaultDeliveryTypes](docs/Model/CustomerDefaultDeliveryTypes.md)
- [CustomerDefaultTemplates](docs/Model/CustomerDefaultTemplates.md)
- [CustomerListItem](docs/Model/CustomerListItem.md)
- [CustomerListItemList](docs/Model/CustomerListItemList.md)
- [CustomerReference](docs/Model/CustomerReference.md)
- [CustomerReferenceCustomerReferenceRow](docs/Model/CustomerReferenceCustomerReferenceRow.md)
- [CustomerReferenceCustomerReferenceRowWrap](docs/Model/CustomerReferenceCustomerReferenceRowWrap.md)
- [CustomerReferenceWrap](docs/Model/CustomerReferenceWrap.md)
- [CustomerWrap](docs/Model/CustomerWrap.md)
- [Delete](docs/Model/Delete.md)
- [DeleteWrap](docs/Model/DeleteWrap.md)
- [Depreciation](docs/Model/Depreciation.md)
- [DepreciationResponse](docs/Model/DepreciationResponse.md)
- [DepreciationResponseWrap](docs/Model/DepreciationResponseWrap.md)
- [DepreciationWrap](docs/Model/DepreciationWrap.md)
- [DetailedRegistration](docs/Model/DetailedRegistration.md)
- [DocumentReference](docs/Model/DocumentReference.md)
- [EUVatLimitRegulation](docs/Model/EUVatLimitRegulation.md)
- [EUVatLimitRegulationWrap](docs/Model/EUVatLimitRegulationWrap.md)
- [Employee](docs/Model/Employee.md)
- [EmployeeDatedSchedule](docs/Model/EmployeeDatedSchedule.md)
- [EmployeeDatedWage](docs/Model/EmployeeDatedWage.md)
- [EmployeeListItem](docs/Model/EmployeeListItem.md)
- [EmployeeListItemWrap](docs/Model/EmployeeListItemWrap.md)
- [EmployeeWrap](docs/Model/EmployeeWrap.md)
- [Expense](docs/Model/Expense.md)
- [ExpenseListItem](docs/Model/ExpenseListItem.md)
- [ExpenseListItemWrap](docs/Model/ExpenseListItemWrap.md)
- [ExpenseWrap](docs/Model/ExpenseWrap.md)
- [FinancialYear](docs/Model/FinancialYear.md)
- [FinancialYearWrap](docs/Model/FinancialYearWrap.md)
- [FinancialYearWrapList](docs/Model/FinancialYearWrapList.md)
- [Folder](docs/Model/Folder.md)
- [FolderFileRow](docs/Model/FolderFileRow.md)
- [FolderFileRowWrap](docs/Model/FolderFileRowWrap.md)
- [FolderFolderRow](docs/Model/FolderFolderRow.md)
- [FolderWrap](docs/Model/FolderWrap.md)
- [History](docs/Model/History.md)
- [IncomingGoods](docs/Model/IncomingGoods.md)
- [IncomingGoodsListRow](docs/Model/IncomingGoodsListRow.md)
- [IncomingGoodsRow](docs/Model/IncomingGoodsRow.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceAccrual](docs/Model/InvoiceAccrual.md)
- [InvoiceAccrualInvoiceAccrualRow](docs/Model/InvoiceAccrualInvoiceAccrualRow.md)
- [InvoiceAccrualListItem](docs/Model/InvoiceAccrualListItem.md)
- [InvoiceAccrualListItemList](docs/Model/InvoiceAccrualListItemList.md)
- [InvoiceAccrualWrap](docs/Model/InvoiceAccrualWrap.md)
- [InvoiceEDIInformation](docs/Model/InvoiceEDIInformation.md)
- [InvoiceEmailInformation](docs/Model/InvoiceEmailInformation.md)
- [InvoiceInvoiceRow](docs/Model/InvoiceInvoiceRow.md)
- [InvoiceLabel](docs/Model/InvoiceLabel.md)
- [InvoiceListItem](docs/Model/InvoiceListItem.md)
- [InvoiceListItemWrap](docs/Model/InvoiceListItemWrap.md)
- [InvoicePayload](docs/Model/InvoicePayload.md)
- [InvoicePayloadEDIInformation](docs/Model/InvoicePayloadEDIInformation.md)
- [InvoicePayloadEmailInformation](docs/Model/InvoicePayloadEmailInformation.md)
- [InvoicePayloadInvoiceRow](docs/Model/InvoicePayloadInvoiceRow.md)
- [InvoicePayloadLabel](docs/Model/InvoicePayloadLabel.md)
- [InvoicePayloadWrap](docs/Model/InvoicePayloadWrap.md)
- [InvoicePayment](docs/Model/InvoicePayment.md)
- [InvoicePaymentListItem](docs/Model/InvoicePaymentListItem.md)
- [InvoicePaymentListItemList](docs/Model/InvoicePaymentListItemList.md)
- [InvoicePaymentWrap](docs/Model/InvoicePaymentWrap.md)
- [InvoicePaymentWriteOff](docs/Model/InvoicePaymentWriteOff.md)
- [InvoiceResponse](docs/Model/InvoiceResponse.md)
- [InvoiceResponseWrap](docs/Model/InvoiceResponseWrap.md)
- [InvoiceWrap](docs/Model/InvoiceWrap.md)
- [Label](docs/Model/Label.md)
- [LabelList](docs/Model/LabelList.md)
- [LabelWrap](docs/Model/LabelWrap.md)
- [ListAsset](docs/Model/ListAsset.md)
- [ListAssetWrap](docs/Model/ListAssetWrap.md)
- [LockedPeriod](docs/Model/LockedPeriod.md)
- [LockedPeriodWrap](docs/Model/LockedPeriodWrap.md)
- [ManualObAsset](docs/Model/ManualObAsset.md)
- [Me](docs/Model/Me.md)
- [MeWrap](docs/Model/MeWrap.md)
- [MetaInformation](docs/Model/MetaInformation.md)
- [ModeOfPayment](docs/Model/ModeOfPayment.md)
- [ModeOfPaymentList](docs/Model/ModeOfPaymentList.md)
- [ModeOfPaymentWrap](docs/Model/ModeOfPaymentWrap.md)
- [NumberOfAttachments](docs/Model/NumberOfAttachments.md)
- [Offer](docs/Model/Offer.md)
- [OfferEmailInformation](docs/Model/OfferEmailInformation.md)
- [OfferLabel](docs/Model/OfferLabel.md)
- [OfferListItem](docs/Model/OfferListItem.md)
- [OfferListItemList](docs/Model/OfferListItemList.md)
- [OfferOfferRow](docs/Model/OfferOfferRow.md)
- [OfferWrap](docs/Model/OfferWrap.md)
- [Order](docs/Model/Order.md)
- [OrderEmailInformation](docs/Model/OrderEmailInformation.md)
- [OrderLabel](docs/Model/OrderLabel.md)
- [OrderListItem](docs/Model/OrderListItem.md)
- [OrderListItemList](docs/Model/OrderListItemList.md)
- [OrderOrderRow](docs/Model/OrderOrderRow.md)
- [OrderWrap](docs/Model/OrderWrap.md)
- [PausePayload](docs/Model/PausePayload.md)
- [PausePayloadWrap](docs/Model/PausePayloadWrap.md)
- [PredefinedAccount](docs/Model/PredefinedAccount.md)
- [PredefinedAccountList](docs/Model/PredefinedAccountList.md)
- [PredefinedAccountWrap](docs/Model/PredefinedAccountWrap.md)
- [PredefinedVoucherSeries](docs/Model/PredefinedVoucherSeries.md)
- [PredefinedVoucherSeriesList](docs/Model/PredefinedVoucherSeriesList.md)
- [PredefinedVoucherSeriesWrap](docs/Model/PredefinedVoucherSeriesWrap.md)
- [Price](docs/Model/Price.md)
- [PriceList](docs/Model/PriceList.md)
- [PriceListItem](docs/Model/PriceListItem.md)
- [PriceListItemList](docs/Model/PriceListItemList.md)
- [PriceListList](docs/Model/PriceListList.md)
- [PriceListWrap](docs/Model/PriceListWrap.md)
- [PriceWrap](docs/Model/PriceWrap.md)
- [PrintTemplate](docs/Model/PrintTemplate.md)
- [PrintTemplateList](docs/Model/PrintTemplateList.md)
- [Project](docs/Model/Project.md)
- [ProjectListItem](docs/Model/ProjectListItem.md)
- [ProjectListItemList](docs/Model/ProjectListItemList.md)
- [ProjectWrap](docs/Model/ProjectWrap.md)
- [PurchaseOrder](docs/Model/PurchaseOrder.md)
- [PurchaseOrderMailSettings](docs/Model/PurchaseOrderMailSettings.md)
- [PurchaseOrderRow](docs/Model/PurchaseOrderRow.md)
- [PurchaseOrderRowNote](docs/Model/PurchaseOrderRowNote.md)
- [RegistrationCode](docs/Model/RegistrationCode.md)
- [ReleaseParentOrder](docs/Model/ReleaseParentOrder.md)
- [ReportPaymentPayload](docs/Model/ReportPaymentPayload.md)
- [ResponseStateChange](docs/Model/ResponseStateChange.md)
- [SalaryTransaction](docs/Model/SalaryTransaction.md)
- [SalaryTransactionListItem](docs/Model/SalaryTransactionListItem.md)
- [SalaryTransactionListItemList](docs/Model/SalaryTransactionListItemList.md)
- [SalaryTransactionWrap](docs/Model/SalaryTransactionWrap.md)
- [ScheduleTime](docs/Model/ScheduleTime.md)
- [ScheduleTimeWrap](docs/Model/ScheduleTimeWrap.md)
- [Scrap](docs/Model/Scrap.md)
- [ScrapWrap](docs/Model/ScrapWrap.md)
- [Sell](docs/Model/Sell.md)
- [SellWrap](docs/Model/SellWrap.md)
- [StockBalance](docs/Model/StockBalance.md)
- [StockLocation](docs/Model/StockLocation.md)
- [StockPoint](docs/Model/StockPoint.md)
- [StockTaking](docs/Model/StockTaking.md)
- [StockTakingRow](docs/Model/StockTakingRow.md)
- [Supplier](docs/Model/Supplier.md)
- [SupplierInvoice](docs/Model/SupplierInvoice.md)
- [SupplierInvoiceAccrual](docs/Model/SupplierInvoiceAccrual.md)
- [SupplierInvoiceAccrualListItem](docs/Model/SupplierInvoiceAccrualListItem.md)
- [SupplierInvoiceAccrualListItemList](docs/Model/SupplierInvoiceAccrualListItemList.md)
- [SupplierInvoiceAccrualSupplierInvoiceAccrualRows](docs/Model/SupplierInvoiceAccrualSupplierInvoiceAccrualRows.md)
- [SupplierInvoiceAccrualWrap](docs/Model/SupplierInvoiceAccrualWrap.md)
- [SupplierInvoiceExternalURLConnection](docs/Model/SupplierInvoiceExternalURLConnection.md)
- [SupplierInvoiceExternalURLConnectionSingle](docs/Model/SupplierInvoiceExternalURLConnectionSingle.md)
- [SupplierInvoiceExternalURLConnectionUpdate](docs/Model/SupplierInvoiceExternalURLConnectionUpdate.md)
- [SupplierInvoiceFileConnection](docs/Model/SupplierInvoiceFileConnection.md)
- [SupplierInvoiceFileConnectionList](docs/Model/SupplierInvoiceFileConnectionList.md)
- [SupplierInvoiceFileConnectionWrap](docs/Model/SupplierInvoiceFileConnectionWrap.md)
- [SupplierInvoiceListItem](docs/Model/SupplierInvoiceListItem.md)
- [SupplierInvoiceListItemVoucher](docs/Model/SupplierInvoiceListItemVoucher.md)
- [SupplierInvoiceListItemWrap](docs/Model/SupplierInvoiceListItemWrap.md)
- [SupplierInvoicePayment](docs/Model/SupplierInvoicePayment.md)
- [SupplierInvoicePaymentListItem](docs/Model/SupplierInvoicePaymentListItem.md)
- [SupplierInvoicePaymentListItemList](docs/Model/SupplierInvoicePaymentListItemList.md)
- [SupplierInvoicePaymentWrap](docs/Model/SupplierInvoicePaymentWrap.md)
- [SupplierInvoicePaymentWriteOff](docs/Model/SupplierInvoicePaymentWriteOff.md)
- [SupplierInvoiceSupplierInvoiceRow](docs/Model/SupplierInvoiceSupplierInvoiceRow.md)
- [SupplierInvoiceVoucher](docs/Model/SupplierInvoiceVoucher.md)
- [SupplierInvoiceWrap](docs/Model/SupplierInvoiceWrap.md)
- [SupplierListItem](docs/Model/SupplierListItem.md)
- [SupplierListItemList](docs/Model/SupplierListItemList.md)
- [SupplierWrap](docs/Model/SupplierWrap.md)
- [TRCostCenter](docs/Model/TRCostCenter.md)
- [TRCustomer](docs/Model/TRCustomer.md)
- [TRItem](docs/Model/TRItem.md)
- [TRItemPrice](docs/Model/TRItemPrice.md)
- [TRProject](docs/Model/TRProject.md)
- [TaxReduction](docs/Model/TaxReduction.md)
- [TaxReductionListItem](docs/Model/TaxReductionListItem.md)
- [TaxReductionListItemList](docs/Model/TaxReductionListItemList.md)
- [TaxReductionTaxReductionAmount](docs/Model/TaxReductionTaxReductionAmount.md)
- [TaxReductionWrap](docs/Model/TaxReductionWrap.md)
- [TenantInfo](docs/Model/TenantInfo.md)
- [TermsOfDelivery](docs/Model/TermsOfDelivery.md)
- [TermsOfDeliveryList](docs/Model/TermsOfDeliveryList.md)
- [TermsOfDeliveryWrap](docs/Model/TermsOfDeliveryWrap.md)
- [TermsOfPayment](docs/Model/TermsOfPayment.md)
- [TermsOfPaymentList](docs/Model/TermsOfPaymentList.md)
- [TermsOfPaymentWrap](docs/Model/TermsOfPaymentWrap.md)
- [TrustedEmailSender](docs/Model/TrustedEmailSender.md)
- [TrustedEmailSenderRejectedSender](docs/Model/TrustedEmailSenderRejectedSender.md)
- [TrustedEmailSenderTrustedSender](docs/Model/TrustedEmailSenderTrustedSender.md)
- [TrustedEmailSenderTrustedSenderWrap](docs/Model/TrustedEmailSenderTrustedSenderWrap.md)
- [TrustedEmailSenderWrap](docs/Model/TrustedEmailSenderWrap.md)
- [Unit](docs/Model/Unit.md)
- [UnitList](docs/Model/UnitList.md)
- [UnitWrap](docs/Model/UnitWrap.md)
- [UpdateAsset](docs/Model/UpdateAsset.md)
- [UpdateAssetWrap](docs/Model/UpdateAssetWrap.md)
- [VacationDebtBasis](docs/Model/VacationDebtBasis.md)
- [VacationDebtBasisEmployee](docs/Model/VacationDebtBasisEmployee.md)
- [VacationDebtBasisWrap](docs/Model/VacationDebtBasisWrap.md)
- [Voucher](docs/Model/Voucher.md)
- [VoucherFileConnection](docs/Model/VoucherFileConnection.md)
- [VoucherFileConnectionList](docs/Model/VoucherFileConnectionList.md)
- [VoucherFileConnectionWrap](docs/Model/VoucherFileConnectionWrap.md)
- [VoucherListItem](docs/Model/VoucherListItem.md)
- [VoucherListItemList](docs/Model/VoucherListItemList.md)
- [VoucherSeries](docs/Model/VoucherSeries.md)
- [VoucherSeriesApprover](docs/Model/VoucherSeriesApprover.md)
- [VoucherSeriesListItem](docs/Model/VoucherSeriesListItem.md)
- [VoucherSeriesListItemApprover](docs/Model/VoucherSeriesListItemApprover.md)
- [VoucherSeriesListItemList](docs/Model/VoucherSeriesListItemList.md)
- [VoucherSeriesWrap](docs/Model/VoucherSeriesWrap.md)
- [VoucherVoucherRow](docs/Model/VoucherVoucherRow.md)
- [VoucherWrap](docs/Model/VoucherWrap.md)
- [WayOfDelivery](docs/Model/WayOfDelivery.md)
- [WayOfDeliveryList](docs/Model/WayOfDeliveryList.md)
- [WayOfDeliveryWrap](docs/Model/WayOfDeliveryWrap.md)
- [WriteDown](docs/Model/WriteDown.md)
- [WriteDownWrap](docs/Model/WriteDownWrap.md)
- [WriteUp](docs/Model/WriteUp.md)
- [WriteUpWrap](docs/Model/WriteUpWrap.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
