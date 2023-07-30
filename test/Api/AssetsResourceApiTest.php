<?php
/**
 * AssetsResourceApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client\Test\Api;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * AssetsResourceApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AssetsResourceApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for changeManualObValue
     *
     * Change manual OB value of an Asset.
     *
     */
    public function testChangeManualObValue()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for createAssetsResource
     *
     * Create an Asset.
     *
     */
    public function testCreateAssetsResource()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for deleteAssetsResource
     *
     * Delete or Void an Asset.
     *
     */
    public function testDeleteAssetsResource()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for depreciate
     *
     * Perform a Depreciation of an Asset.
     *
     */
    public function testDepreciate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getAssetsResource
     *
     * Retrieve a single asset.
     *
     */
    public function testGetAssetsResource()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getDeprecationList
     *
     * Assets depreciation list.
     *
     */
    public function testGetDeprecationList()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for listAssetsResource
     *
     * Retrieve a list of assets.
     *
     */
    public function testListAssetsResource()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for scrap
     *
     * Scrap an Asset.
     *
     */
    public function testScrap()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for sell
     *
     * Sell an Asset.
     *
     */
    public function testSell()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for writeDown
     *
     * Write down an Asset.
     *
     */
    public function testWriteDown()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for writeUp
     *
     * Write up an Asset.
     *
     */
    public function testWriteUp()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}