<?php
/**
 * ReportPaymentPayload
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FortnoxApi
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

namespace FortnoxApi\Model;

use \ArrayAccess;
use \FortnoxApi\ObjectSerializer;

/**
 * ReportPaymentPayload Class Doc Comment
 *
 * @category Class
 * @package  FortnoxApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReportPaymentPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportPaymentPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_takes_fees' => 'bool',
        'bookkeep_payment_in_fortnox' => 'bool',
        'report_to_finance' => 'bool',
        'payment_amount' => 'float',
        'payment_method_code' => 'string',
        'payment_method_account' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'client_takes_fees' => null,
        'bookkeep_payment_in_fortnox' => null,
        'report_to_finance' => null,
        'payment_amount' => 'float',
        'payment_method_code' => null,
        'payment_method_account' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'client_takes_fees' => false,
		'bookkeep_payment_in_fortnox' => false,
		'report_to_finance' => false,
		'payment_amount' => false,
		'payment_method_code' => false,
		'payment_method_account' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'client_takes_fees' => 'ClientTakesFees',
        'bookkeep_payment_in_fortnox' => 'BookkeepPaymentInFortnox',
        'report_to_finance' => 'ReportToFinance',
        'payment_amount' => 'PaymentAmount',
        'payment_method_code' => 'PaymentMethodCode',
        'payment_method_account' => 'PaymentMethodAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_takes_fees' => 'setClientTakesFees',
        'bookkeep_payment_in_fortnox' => 'setBookkeepPaymentInFortnox',
        'report_to_finance' => 'setReportToFinance',
        'payment_amount' => 'setPaymentAmount',
        'payment_method_code' => 'setPaymentMethodCode',
        'payment_method_account' => 'setPaymentMethodAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_takes_fees' => 'getClientTakesFees',
        'bookkeep_payment_in_fortnox' => 'getBookkeepPaymentInFortnox',
        'report_to_finance' => 'getReportToFinance',
        'payment_amount' => 'getPaymentAmount',
        'payment_method_code' => 'getPaymentMethodCode',
        'payment_method_account' => 'getPaymentMethodAccount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('client_takes_fees', $data ?? [], null);
        $this->setIfExists('bookkeep_payment_in_fortnox', $data ?? [], null);
        $this->setIfExists('report_to_finance', $data ?? [], null);
        $this->setIfExists('payment_amount', $data ?? [], null);
        $this->setIfExists('payment_method_code', $data ?? [], null);
        $this->setIfExists('payment_method_account', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_takes_fees'] === null) {
            $invalidProperties[] = "'client_takes_fees' can't be null";
        }
        if ($this->container['bookkeep_payment_in_fortnox'] === null) {
            $invalidProperties[] = "'bookkeep_payment_in_fortnox' can't be null";
        }
        if ($this->container['report_to_finance'] === null) {
            $invalidProperties[] = "'report_to_finance' can't be null";
        }
        if ($this->container['payment_amount'] === null) {
            $invalidProperties[] = "'payment_amount' can't be null";
        }
        if ($this->container['payment_method_code'] === null) {
            $invalidProperties[] = "'payment_method_code' can't be null";
        }
        if ($this->container['payment_method_account'] === null) {
            $invalidProperties[] = "'payment_method_account' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets client_takes_fees
     *
     * @return bool
     */
    public function getClientTakesFees()
    {
        return $this->container['client_takes_fees'];
    }

    /**
     * Sets client_takes_fees
     *
     * @param bool $client_takes_fees client_takes_fees
     *
     * @return self
     */
    public function setClientTakesFees($client_takes_fees)
    {
        if (is_null($client_takes_fees)) {
            throw new \InvalidArgumentException('non-nullable client_takes_fees cannot be null');
        }
        $this->container['client_takes_fees'] = $client_takes_fees;

        return $this;
    }

    /**
     * Gets bookkeep_payment_in_fortnox
     *
     * @return bool
     */
    public function getBookkeepPaymentInFortnox()
    {
        return $this->container['bookkeep_payment_in_fortnox'];
    }

    /**
     * Sets bookkeep_payment_in_fortnox
     *
     * @param bool $bookkeep_payment_in_fortnox bookkeep_payment_in_fortnox
     *
     * @return self
     */
    public function setBookkeepPaymentInFortnox($bookkeep_payment_in_fortnox)
    {
        if (is_null($bookkeep_payment_in_fortnox)) {
            throw new \InvalidArgumentException('non-nullable bookkeep_payment_in_fortnox cannot be null');
        }
        $this->container['bookkeep_payment_in_fortnox'] = $bookkeep_payment_in_fortnox;

        return $this;
    }

    /**
     * Gets report_to_finance
     *
     * @return bool
     */
    public function getReportToFinance()
    {
        return $this->container['report_to_finance'];
    }

    /**
     * Sets report_to_finance
     *
     * @param bool $report_to_finance report_to_finance
     *
     * @return self
     */
    public function setReportToFinance($report_to_finance)
    {
        if (is_null($report_to_finance)) {
            throw new \InvalidArgumentException('non-nullable report_to_finance cannot be null');
        }
        $this->container['report_to_finance'] = $report_to_finance;

        return $this;
    }

    /**
     * Gets payment_amount
     *
     * @return float
     */
    public function getPaymentAmount()
    {
        return $this->container['payment_amount'];
    }

    /**
     * Sets payment_amount
     *
     * @param float $payment_amount payment_amount
     *
     * @return self
     */
    public function setPaymentAmount($payment_amount)
    {
        if (is_null($payment_amount)) {
            throw new \InvalidArgumentException('non-nullable payment_amount cannot be null');
        }
        $this->container['payment_amount'] = $payment_amount;

        return $this;
    }

    /**
     * Gets payment_method_code
     *
     * @return string
     */
    public function getPaymentMethodCode()
    {
        return $this->container['payment_method_code'];
    }

    /**
     * Sets payment_method_code
     *
     * @param string $payment_method_code payment_method_code
     *
     * @return self
     */
    public function setPaymentMethodCode($payment_method_code)
    {
        if (is_null($payment_method_code)) {
            throw new \InvalidArgumentException('non-nullable payment_method_code cannot be null');
        }
        $this->container['payment_method_code'] = $payment_method_code;

        return $this;
    }

    /**
     * Gets payment_method_account
     *
     * @return string
     */
    public function getPaymentMethodAccount()
    {
        return $this->container['payment_method_account'];
    }

    /**
     * Sets payment_method_account
     *
     * @param string $payment_method_account payment_method_account
     *
     * @return self
     */
    public function setPaymentMethodAccount($payment_method_account)
    {
        if (is_null($payment_method_account)) {
            throw new \InvalidArgumentException('non-nullable payment_method_account cannot be null');
        }
        $this->container['payment_method_account'] = $payment_method_account;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


