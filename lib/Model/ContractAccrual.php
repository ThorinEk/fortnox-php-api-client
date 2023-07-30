<?php
/**
 * ContractAccrual
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
 * ContractAccrual Class Doc Comment
 *
 * @category Class
 * @package  FortnoxApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContractAccrual implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContractAccrual';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_url' => 'string',
        'accrual_account' => 'int',
        'cost_account' => 'int',
        'description' => 'string',
        'accrual_rows' => '\FortnoxApi\Model\ContractAccrualAccrualRow[]',
        'document_number' => 'int',
        'period' => 'string',
        'times' => 'int',
        'total' => 'float',
        'vat_included' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'at_url' => null,
        'accrual_account' => 'int32',
        'cost_account' => 'int32',
        'description' => null,
        'accrual_rows' => null,
        'document_number' => 'int32',
        'period' => null,
        'times' => 'int32',
        'total' => 'double',
        'vat_included' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_url' => false,
		'accrual_account' => false,
		'cost_account' => false,
		'description' => false,
		'accrual_rows' => false,
		'document_number' => false,
		'period' => false,
		'times' => false,
		'total' => false,
		'vat_included' => false
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
        'at_url' => '@url',
        'accrual_account' => 'AccrualAccount',
        'cost_account' => 'CostAccount',
        'description' => 'Description',
        'accrual_rows' => 'AccrualRows',
        'document_number' => 'DocumentNumber',
        'period' => 'Period',
        'times' => 'Times',
        'total' => 'Total',
        'vat_included' => 'VATIncluded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_url' => 'setAtUrl',
        'accrual_account' => 'setAccrualAccount',
        'cost_account' => 'setCostAccount',
        'description' => 'setDescription',
        'accrual_rows' => 'setAccrualRows',
        'document_number' => 'setDocumentNumber',
        'period' => 'setPeriod',
        'times' => 'setTimes',
        'total' => 'setTotal',
        'vat_included' => 'setVatIncluded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_url' => 'getAtUrl',
        'accrual_account' => 'getAccrualAccount',
        'cost_account' => 'getCostAccount',
        'description' => 'getDescription',
        'accrual_rows' => 'getAccrualRows',
        'document_number' => 'getDocumentNumber',
        'period' => 'getPeriod',
        'times' => 'getTimes',
        'total' => 'getTotal',
        'vat_included' => 'getVatIncluded'
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

    public const PERIOD_MONTHLY = 'MONTHLY';
    public const PERIOD_BIMONTHLY = 'BIMONTHLY';
    public const PERIOD_QUARTERLY = 'QUARTERLY';
    public const PERIOD_SEMIANNUALLY = 'SEMIANNUALLY';
    public const PERIOD_ANNUALLY = 'ANNUALLY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_MONTHLY,
            self::PERIOD_BIMONTHLY,
            self::PERIOD_QUARTERLY,
            self::PERIOD_SEMIANNUALLY,
            self::PERIOD_ANNUALLY,
        ];
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
        $this->setIfExists('at_url', $data ?? [], null);
        $this->setIfExists('accrual_account', $data ?? [], null);
        $this->setIfExists('cost_account', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('accrual_rows', $data ?? [], null);
        $this->setIfExists('document_number', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('times', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('vat_included', $data ?? [], null);
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

        if ($this->container['accrual_account'] === null) {
            $invalidProperties[] = "'accrual_account' can't be null";
        }
        if (($this->container['accrual_account'] > 9999)) {
            $invalidProperties[] = "invalid value for 'accrual_account', must be smaller than or equal to 9999.";
        }

        if (($this->container['accrual_account'] < 1000)) {
            $invalidProperties[] = "invalid value for 'accrual_account', must be bigger than or equal to 1000.";
        }

        if ($this->container['cost_account'] === null) {
            $invalidProperties[] = "'cost_account' can't be null";
        }
        if (($this->container['cost_account'] > 9999)) {
            $invalidProperties[] = "invalid value for 'cost_account', must be smaller than or equal to 9999.";
        }

        if (($this->container['cost_account'] < 1000)) {
            $invalidProperties[] = "invalid value for 'cost_account', must be bigger than or equal to 1000.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['accrual_rows'] === null) {
            $invalidProperties[] = "'accrual_rows' can't be null";
        }
        if ((count($this->container['accrual_rows']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'accrual_rows', number of items must be less than or equal to 2147483647.";
        }

        if ((count($this->container['accrual_rows']) < 2)) {
            $invalidProperties[] = "invalid value for 'accrual_rows', number of items must be greater than or equal to 2.";
        }

        if ($this->container['document_number'] === null) {
            $invalidProperties[] = "'document_number' can't be null";
        }
        $allowedValues = $this->getPeriodAllowableValues();
        if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'period', must be one of '%s'",
                $this->container['period'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
     * Gets at_url
     *
     * @return string|null
     */
    public function getAtUrl()
    {
        return $this->container['at_url'];
    }

    /**
     * Sets at_url
     *
     * @param string|null $at_url at_url
     *
     * @return self
     */
    public function setAtUrl($at_url)
    {
        if (is_null($at_url)) {
            throw new \InvalidArgumentException('non-nullable at_url cannot be null');
        }
        $this->container['at_url'] = $at_url;

        return $this;
    }

    /**
     * Gets accrual_account
     *
     * @return int
     */
    public function getAccrualAccount()
    {
        return $this->container['accrual_account'];
    }

    /**
     * Sets accrual_account
     *
     * @param int $accrual_account accrual_account
     *
     * @return self
     */
    public function setAccrualAccount($accrual_account)
    {
        if (is_null($accrual_account)) {
            throw new \InvalidArgumentException('non-nullable accrual_account cannot be null');
        }

        if (($accrual_account > 9999)) {
            throw new \InvalidArgumentException('invalid value for $accrual_account when calling ContractAccrual., must be smaller than or equal to 9999.');
        }
        if (($accrual_account < 1000)) {
            throw new \InvalidArgumentException('invalid value for $accrual_account when calling ContractAccrual., must be bigger than or equal to 1000.');
        }

        $this->container['accrual_account'] = $accrual_account;

        return $this;
    }

    /**
     * Gets cost_account
     *
     * @return int
     */
    public function getCostAccount()
    {
        return $this->container['cost_account'];
    }

    /**
     * Sets cost_account
     *
     * @param int $cost_account cost_account
     *
     * @return self
     */
    public function setCostAccount($cost_account)
    {
        if (is_null($cost_account)) {
            throw new \InvalidArgumentException('non-nullable cost_account cannot be null');
        }

        if (($cost_account > 9999)) {
            throw new \InvalidArgumentException('invalid value for $cost_account when calling ContractAccrual., must be smaller than or equal to 9999.');
        }
        if (($cost_account < 1000)) {
            throw new \InvalidArgumentException('invalid value for $cost_account when calling ContractAccrual., must be bigger than or equal to 1000.');
        }

        $this->container['cost_account'] = $cost_account;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets accrual_rows
     *
     * @return \FortnoxApi\Model\ContractAccrualAccrualRow[]
     */
    public function getAccrualRows()
    {
        return $this->container['accrual_rows'];
    }

    /**
     * Sets accrual_rows
     *
     * @param \FortnoxApi\Model\ContractAccrualAccrualRow[] $accrual_rows accrual_rows
     *
     * @return self
     */
    public function setAccrualRows($accrual_rows)
    {
        if (is_null($accrual_rows)) {
            throw new \InvalidArgumentException('non-nullable accrual_rows cannot be null');
        }

        if ((count($accrual_rows) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $accrual_rows when calling ContractAccrual., number of items must be less than or equal to 2147483647.');
        }
        if ((count($accrual_rows) < 2)) {
            throw new \InvalidArgumentException('invalid length for $accrual_rows when calling ContractAccrual., number of items must be greater than or equal to 2.');
        }
        $this->container['accrual_rows'] = $accrual_rows;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return int
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param int $document_number document_number
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        if (is_null($document_number)) {
            throw new \InvalidArgumentException('non-nullable document_number cannot be null');
        }
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string|null $period period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        if (is_null($period)) {
            throw new \InvalidArgumentException('non-nullable period cannot be null');
        }
        $allowedValues = $this->getPeriodAllowableValues();
        if (!in_array($period, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'period', must be one of '%s'",
                    $period,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets times
     *
     * @return int|null
     */
    public function getTimes()
    {
        return $this->container['times'];
    }

    /**
     * Sets times
     *
     * @param int|null $times times
     *
     * @return self
     */
    public function setTimes($times)
    {
        if (is_null($times)) {
            throw new \InvalidArgumentException('non-nullable times cannot be null');
        }
        $this->container['times'] = $times;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets vat_included
     *
     * @return bool|null
     */
    public function getVatIncluded()
    {
        return $this->container['vat_included'];
    }

    /**
     * Sets vat_included
     *
     * @param bool|null $vat_included vat_included
     *
     * @return self
     */
    public function setVatIncluded($vat_included)
    {
        if (is_null($vat_included)) {
            throw new \InvalidArgumentException('non-nullable vat_included cannot be null');
        }
        $this->container['vat_included'] = $vat_included;

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


