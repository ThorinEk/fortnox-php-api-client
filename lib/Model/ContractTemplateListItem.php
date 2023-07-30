<?php
/**
 * ContractTemplateListItem
 *
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ContractTemplateListItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContractTemplateListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContractTemplateListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_url' => 'string',
        'contract_length' => 'int',
        'contract_template' => 'int',
        'contract_template_name' => 'string',
        'invoice_interval' => 'int'
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
        'contract_length' => 'int32',
        'contract_template' => 'int32',
        'contract_template_name' => null,
        'invoice_interval' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_url' => false,
		'contract_length' => false,
		'contract_template' => false,
		'contract_template_name' => false,
		'invoice_interval' => false
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
        'contract_length' => 'ContractLength',
        'contract_template' => 'ContractTemplate',
        'contract_template_name' => 'ContractTemplateName',
        'invoice_interval' => 'InvoiceInterval'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_url' => 'setAtUrl',
        'contract_length' => 'setContractLength',
        'contract_template' => 'setContractTemplate',
        'contract_template_name' => 'setContractTemplateName',
        'invoice_interval' => 'setInvoiceInterval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_url' => 'getAtUrl',
        'contract_length' => 'getContractLength',
        'contract_template' => 'getContractTemplate',
        'contract_template_name' => 'getContractTemplateName',
        'invoice_interval' => 'getInvoiceInterval'
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
        $this->setIfExists('at_url', $data ?? [], null);
        $this->setIfExists('contract_length', $data ?? [], null);
        $this->setIfExists('contract_template', $data ?? [], null);
        $this->setIfExists('contract_template_name', $data ?? [], null);
        $this->setIfExists('invoice_interval', $data ?? [], null);
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

        if (!is_null($this->container['contract_length']) && ($this->container['contract_length'] > 9999)) {
            $invalidProperties[] = "invalid value for 'contract_length', must be smaller than or equal to 9999.";
        }

        if (!is_null($this->container['contract_length']) && ($this->container['contract_length'] < 1)) {
            $invalidProperties[] = "invalid value for 'contract_length', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['invoice_interval']) && ($this->container['invoice_interval'] > 9999)) {
            $invalidProperties[] = "invalid value for 'invoice_interval', must be smaller than or equal to 9999.";
        }

        if (!is_null($this->container['invoice_interval']) && ($this->container['invoice_interval'] < 1)) {
            $invalidProperties[] = "invalid value for 'invoice_interval', must be bigger than or equal to 1.";
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
     * Gets contract_length
     *
     * @return int|null
     */
    public function getContractLength()
    {
        return $this->container['contract_length'];
    }

    /**
     * Sets contract_length
     *
     * @param int|null $contract_length contract_length
     *
     * @return self
     */
    public function setContractLength($contract_length)
    {
        if (is_null($contract_length)) {
            throw new \InvalidArgumentException('non-nullable contract_length cannot be null');
        }

        if (($contract_length > 9999)) {
            throw new \InvalidArgumentException('invalid value for $contract_length when calling ContractTemplateListItem., must be smaller than or equal to 9999.');
        }
        if (($contract_length < 1)) {
            throw new \InvalidArgumentException('invalid value for $contract_length when calling ContractTemplateListItem., must be bigger than or equal to 1.');
        }

        $this->container['contract_length'] = $contract_length;

        return $this;
    }

    /**
     * Gets contract_template
     *
     * @return int|null
     */
    public function getContractTemplate()
    {
        return $this->container['contract_template'];
    }

    /**
     * Sets contract_template
     *
     * @param int|null $contract_template contract_template
     *
     * @return self
     */
    public function setContractTemplate($contract_template)
    {
        if (is_null($contract_template)) {
            throw new \InvalidArgumentException('non-nullable contract_template cannot be null');
        }
        $this->container['contract_template'] = $contract_template;

        return $this;
    }

    /**
     * Gets contract_template_name
     *
     * @return string|null
     */
    public function getContractTemplateName()
    {
        return $this->container['contract_template_name'];
    }

    /**
     * Sets contract_template_name
     *
     * @param string|null $contract_template_name contract_template_name
     *
     * @return self
     */
    public function setContractTemplateName($contract_template_name)
    {
        if (is_null($contract_template_name)) {
            throw new \InvalidArgumentException('non-nullable contract_template_name cannot be null');
        }
        $this->container['contract_template_name'] = $contract_template_name;

        return $this;
    }

    /**
     * Gets invoice_interval
     *
     * @return int|null
     */
    public function getInvoiceInterval()
    {
        return $this->container['invoice_interval'];
    }

    /**
     * Sets invoice_interval
     *
     * @param int|null $invoice_interval invoice_interval
     *
     * @return self
     */
    public function setInvoiceInterval($invoice_interval)
    {
        if (is_null($invoice_interval)) {
            throw new \InvalidArgumentException('non-nullable invoice_interval cannot be null');
        }

        if (($invoice_interval > 9999)) {
            throw new \InvalidArgumentException('invalid value for $invoice_interval when calling ContractTemplateListItem., must be smaller than or equal to 9999.');
        }
        if (($invoice_interval < 1)) {
            throw new \InvalidArgumentException('invalid value for $invoice_interval when calling ContractTemplateListItem., must be bigger than or equal to 1.');
        }

        $this->container['invoice_interval'] = $invoice_interval;

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

