<?php
/**
 * ArticlesResourceApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * # Documentation   The Fortnox API is organized around REST. This means that we’ve designed it to have resource-oriented URLs and be as predictable as possible for you as developer.  It also means that we use HTTP status codes when something goes wrong and HTTP verbs understod by many API clients around the web.  We use a modified version of OAuth2 for authentication to offer a secure way for both you and our users to interact.  The API is generally built to support both XML and JSON but in this documentation all the examples will be in JSON.  We encourage you to read all the articles in the [Guides & Good to Know section](https://www.fortnox.se/developer/guides-and-good-to-know/)</a> first, before going forward and learning about the different resources.  This to ensure you get an understanding of some of the shared components of the API such as parameters and error handling.  ## Rate limits  The limit per access-token is 25 requests per 5 seconds. This equals to 300 requests per minute.  [Read more about this here.](https://www.fortnox.se/developer/guides-and-good-to-know/rate-limits-for-fortnox-api/)  ## Query parameters  Use query parameters with the ?-character and separate parameters with the &-character.   **Example:**  GET - https://api.fortnox.se/3/invoices?accountnumberfrom=3000&accountnumberto=4000 Read more about our parameters [here](https://www.fortnox.se/developer/guides-and-good-to-know/parameters/)   Search the documentation using the search field in the top left corner.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * ArticlesResourceApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ArticlesResourceApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'callList' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation callList
     *
     * Get full article registrations that match filter
     *
     * @param  \DateTime $from_date The start date of the search span, the max of which should be 1 year to the end date (\&quot;toDate\&quot;).  Example: 2022-11-01 (optional)
     * @param  \DateTime $to_date The end date of the search span, the max of which should be 1 year back to the start date (\&quot;fromDate\&quot;).  Example: 2022-11-30 (optional)
     * @param  string[] $customer_ids An array of customer IDs which are being used in database and in one-to-one relation with customer numbers.  Example: 100,101,102 (optional)
     * @param  string[] $project_ids An array of project IDs.  Example: p1,p2,p3 (optional)
     * @param  bool $include_registrations_without_project If the article registration without project is included, or not. (optional)
     * @param  string[] $item_ids An array of article IDs.  Example: s1,s2,s3 (optional)
     * @param  string[] $cost_center_ids An array of cost center IDs.  Example: cc1,cc2,cc3 (optional)
     * @param  string[] $owner_ids An array of user ids who own the article registrations.  Example: 1,2,3 (optional)
     * @param  bool $invoiced If a document is created with the article registration, or not. (optional)
     * @param  bool $in_invoice_basis If the article registration is locked on an invoice basis, or not. (optional)
     * @param  bool $internal_articles If the article registration is internal, which is registered on an internal customer, or not. (optional)
     * @param  bool $non_invoiceable If the article registration has been moved to non-invoiceable, or not. (optional)
     * @param  bool $include_non_invoiceable_price If the price of the non-invoiceable article registration is included, or not. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['callList'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\BaseArticleRegistration[]
     */
    public function callList($from_date = null, $to_date = null, $customer_ids = null, $project_ids = null, $include_registrations_without_project = null, $item_ids = null, $cost_center_ids = null, $owner_ids = null, $invoiced = null, $in_invoice_basis = null, $internal_articles = null, $non_invoiceable = null, $include_non_invoiceable_price = null, string $contentType = self::contentTypes['callList'][0])
    {
        list($response) = $this->callListWithHttpInfo($from_date, $to_date, $customer_ids, $project_ids, $include_registrations_without_project, $item_ids, $cost_center_ids, $owner_ids, $invoiced, $in_invoice_basis, $internal_articles, $non_invoiceable, $include_non_invoiceable_price, $contentType);
        return $response;
    }

    /**
     * Operation callListWithHttpInfo
     *
     * Get full article registrations that match filter
     *
     * @param  \DateTime $from_date The start date of the search span, the max of which should be 1 year to the end date (\&quot;toDate\&quot;).  Example: 2022-11-01 (optional)
     * @param  \DateTime $to_date The end date of the search span, the max of which should be 1 year back to the start date (\&quot;fromDate\&quot;).  Example: 2022-11-30 (optional)
     * @param  string[] $customer_ids An array of customer IDs which are being used in database and in one-to-one relation with customer numbers.  Example: 100,101,102 (optional)
     * @param  string[] $project_ids An array of project IDs.  Example: p1,p2,p3 (optional)
     * @param  bool $include_registrations_without_project If the article registration without project is included, or not. (optional)
     * @param  string[] $item_ids An array of article IDs.  Example: s1,s2,s3 (optional)
     * @param  string[] $cost_center_ids An array of cost center IDs.  Example: cc1,cc2,cc3 (optional)
     * @param  string[] $owner_ids An array of user ids who own the article registrations.  Example: 1,2,3 (optional)
     * @param  bool $invoiced If a document is created with the article registration, or not. (optional)
     * @param  bool $in_invoice_basis If the article registration is locked on an invoice basis, or not. (optional)
     * @param  bool $internal_articles If the article registration is internal, which is registered on an internal customer, or not. (optional)
     * @param  bool $non_invoiceable If the article registration has been moved to non-invoiceable, or not. (optional)
     * @param  bool $include_non_invoiceable_price If the price of the non-invoiceable article registration is included, or not. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['callList'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\BaseArticleRegistration[], HTTP status code, HTTP response headers (array of strings)
     */
    public function callListWithHttpInfo($from_date = null, $to_date = null, $customer_ids = null, $project_ids = null, $include_registrations_without_project = null, $item_ids = null, $cost_center_ids = null, $owner_ids = null, $invoiced = null, $in_invoice_basis = null, $internal_articles = null, $non_invoiceable = null, $include_non_invoiceable_price = null, string $contentType = self::contentTypes['callList'][0])
    {
        $request = $this->callListRequest($from_date, $to_date, $customer_ids, $project_ids, $include_registrations_without_project, $item_ids, $cost_center_ids, $owner_ids, $invoiced, $in_invoice_basis, $internal_articles, $non_invoiceable, $include_non_invoiceable_price, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\BaseArticleRegistration[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\BaseArticleRegistration[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\BaseArticleRegistration[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\BaseArticleRegistration[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\BaseArticleRegistration[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation callListAsync
     *
     * Get full article registrations that match filter
     *
     * @param  \DateTime $from_date The start date of the search span, the max of which should be 1 year to the end date (\&quot;toDate\&quot;).  Example: 2022-11-01 (optional)
     * @param  \DateTime $to_date The end date of the search span, the max of which should be 1 year back to the start date (\&quot;fromDate\&quot;).  Example: 2022-11-30 (optional)
     * @param  string[] $customer_ids An array of customer IDs which are being used in database and in one-to-one relation with customer numbers.  Example: 100,101,102 (optional)
     * @param  string[] $project_ids An array of project IDs.  Example: p1,p2,p3 (optional)
     * @param  bool $include_registrations_without_project If the article registration without project is included, or not. (optional)
     * @param  string[] $item_ids An array of article IDs.  Example: s1,s2,s3 (optional)
     * @param  string[] $cost_center_ids An array of cost center IDs.  Example: cc1,cc2,cc3 (optional)
     * @param  string[] $owner_ids An array of user ids who own the article registrations.  Example: 1,2,3 (optional)
     * @param  bool $invoiced If a document is created with the article registration, or not. (optional)
     * @param  bool $in_invoice_basis If the article registration is locked on an invoice basis, or not. (optional)
     * @param  bool $internal_articles If the article registration is internal, which is registered on an internal customer, or not. (optional)
     * @param  bool $non_invoiceable If the article registration has been moved to non-invoiceable, or not. (optional)
     * @param  bool $include_non_invoiceable_price If the price of the non-invoiceable article registration is included, or not. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['callList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callListAsync($from_date = null, $to_date = null, $customer_ids = null, $project_ids = null, $include_registrations_without_project = null, $item_ids = null, $cost_center_ids = null, $owner_ids = null, $invoiced = null, $in_invoice_basis = null, $internal_articles = null, $non_invoiceable = null, $include_non_invoiceable_price = null, string $contentType = self::contentTypes['callList'][0])
    {
        return $this->callListAsyncWithHttpInfo($from_date, $to_date, $customer_ids, $project_ids, $include_registrations_without_project, $item_ids, $cost_center_ids, $owner_ids, $invoiced, $in_invoice_basis, $internal_articles, $non_invoiceable, $include_non_invoiceable_price, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callListAsyncWithHttpInfo
     *
     * Get full article registrations that match filter
     *
     * @param  \DateTime $from_date The start date of the search span, the max of which should be 1 year to the end date (\&quot;toDate\&quot;).  Example: 2022-11-01 (optional)
     * @param  \DateTime $to_date The end date of the search span, the max of which should be 1 year back to the start date (\&quot;fromDate\&quot;).  Example: 2022-11-30 (optional)
     * @param  string[] $customer_ids An array of customer IDs which are being used in database and in one-to-one relation with customer numbers.  Example: 100,101,102 (optional)
     * @param  string[] $project_ids An array of project IDs.  Example: p1,p2,p3 (optional)
     * @param  bool $include_registrations_without_project If the article registration without project is included, or not. (optional)
     * @param  string[] $item_ids An array of article IDs.  Example: s1,s2,s3 (optional)
     * @param  string[] $cost_center_ids An array of cost center IDs.  Example: cc1,cc2,cc3 (optional)
     * @param  string[] $owner_ids An array of user ids who own the article registrations.  Example: 1,2,3 (optional)
     * @param  bool $invoiced If a document is created with the article registration, or not. (optional)
     * @param  bool $in_invoice_basis If the article registration is locked on an invoice basis, or not. (optional)
     * @param  bool $internal_articles If the article registration is internal, which is registered on an internal customer, or not. (optional)
     * @param  bool $non_invoiceable If the article registration has been moved to non-invoiceable, or not. (optional)
     * @param  bool $include_non_invoiceable_price If the price of the non-invoiceable article registration is included, or not. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['callList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callListAsyncWithHttpInfo($from_date = null, $to_date = null, $customer_ids = null, $project_ids = null, $include_registrations_without_project = null, $item_ids = null, $cost_center_ids = null, $owner_ids = null, $invoiced = null, $in_invoice_basis = null, $internal_articles = null, $non_invoiceable = null, $include_non_invoiceable_price = null, string $contentType = self::contentTypes['callList'][0])
    {
        $returnType = '\OpenAPI\Client\Model\BaseArticleRegistration[]';
        $request = $this->callListRequest($from_date, $to_date, $customer_ids, $project_ids, $include_registrations_without_project, $item_ids, $cost_center_ids, $owner_ids, $invoiced, $in_invoice_basis, $internal_articles, $non_invoiceable, $include_non_invoiceable_price, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'callList'
     *
     * @param  \DateTime $from_date The start date of the search span, the max of which should be 1 year to the end date (\&quot;toDate\&quot;).  Example: 2022-11-01 (optional)
     * @param  \DateTime $to_date The end date of the search span, the max of which should be 1 year back to the start date (\&quot;fromDate\&quot;).  Example: 2022-11-30 (optional)
     * @param  string[] $customer_ids An array of customer IDs which are being used in database and in one-to-one relation with customer numbers.  Example: 100,101,102 (optional)
     * @param  string[] $project_ids An array of project IDs.  Example: p1,p2,p3 (optional)
     * @param  bool $include_registrations_without_project If the article registration without project is included, or not. (optional)
     * @param  string[] $item_ids An array of article IDs.  Example: s1,s2,s3 (optional)
     * @param  string[] $cost_center_ids An array of cost center IDs.  Example: cc1,cc2,cc3 (optional)
     * @param  string[] $owner_ids An array of user ids who own the article registrations.  Example: 1,2,3 (optional)
     * @param  bool $invoiced If a document is created with the article registration, or not. (optional)
     * @param  bool $in_invoice_basis If the article registration is locked on an invoice basis, or not. (optional)
     * @param  bool $internal_articles If the article registration is internal, which is registered on an internal customer, or not. (optional)
     * @param  bool $non_invoiceable If the article registration has been moved to non-invoiceable, or not. (optional)
     * @param  bool $include_non_invoiceable_price If the price of the non-invoiceable article registration is included, or not. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['callList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function callListRequest($from_date = null, $to_date = null, $customer_ids = null, $project_ids = null, $include_registrations_without_project = null, $item_ids = null, $cost_center_ids = null, $owner_ids = null, $invoiced = null, $in_invoice_basis = null, $internal_articles = null, $non_invoiceable = null, $include_non_invoiceable_price = null, string $contentType = self::contentTypes['callList'][0])
    {















        $resourcePath = '/api/time/articles-v1';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $from_date,
            'fromDate', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $to_date,
            'toDate', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $customer_ids,
            'customerIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $project_ids,
            'projectIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_registrations_without_project,
            'includeRegistrationsWithoutProject', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $item_ids,
            'itemIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cost_center_ids,
            'costCenterIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $owner_ids,
            'ownerIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $invoiced,
            'invoiced', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $in_invoice_basis,
            'inInvoiceBasis', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $internal_articles,
            'internalArticles', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $non_invoiceable,
            'nonInvoiceable', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_non_invoiceable_price,
            'includeNonInvoiceablePrice', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}