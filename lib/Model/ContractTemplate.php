<?php
/**
 * ContractTemplate
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
 * ContractTemplate Class Doc Comment
 *
 * @category Class
 * @package  FortnoxApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContractTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContractTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_url' => 'string',
        'administration_fee' => 'float',
        'contract_length' => 'int',
        'freight' => 'float',
        'invoice_interval' => 'int',
        'invoice_rows' => '\FortnoxApi\Model\ContractTemplateInvoiceRow[]',
        'continuous' => 'bool',
        'our_reference' => 'string',
        'print_template' => 'string',
        'remarks' => 'string',
        'template_name' => 'string',
        'template_number' => 'int',
        'terms_of_delivery' => 'string',
        'terms_of_payment' => 'string',
        'way_of_delivery' => 'string'
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
        'administration_fee' => 'double',
        'contract_length' => 'int32',
        'freight' => 'double',
        'invoice_interval' => 'int32',
        'invoice_rows' => null,
        'continuous' => null,
        'our_reference' => null,
        'print_template' => null,
        'remarks' => null,
        'template_name' => null,
        'template_number' => 'int32',
        'terms_of_delivery' => null,
        'terms_of_payment' => null,
        'way_of_delivery' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_url' => false,
		'administration_fee' => false,
		'contract_length' => false,
		'freight' => false,
		'invoice_interval' => false,
		'invoice_rows' => false,
		'continuous' => false,
		'our_reference' => false,
		'print_template' => false,
		'remarks' => false,
		'template_name' => false,
		'template_number' => false,
		'terms_of_delivery' => false,
		'terms_of_payment' => false,
		'way_of_delivery' => false
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
        'administration_fee' => 'AdministrationFee',
        'contract_length' => 'ContractLength',
        'freight' => 'Freight',
        'invoice_interval' => 'InvoiceInterval',
        'invoice_rows' => 'InvoiceRows',
        'continuous' => 'Continuous',
        'our_reference' => 'OurReference',
        'print_template' => 'PrintTemplate',
        'remarks' => 'Remarks',
        'template_name' => 'TemplateName',
        'template_number' => 'TemplateNumber',
        'terms_of_delivery' => 'TermsOfDelivery',
        'terms_of_payment' => 'TermsOfPayment',
        'way_of_delivery' => 'WayOfDelivery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_url' => 'setAtUrl',
        'administration_fee' => 'setAdministrationFee',
        'contract_length' => 'setContractLength',
        'freight' => 'setFreight',
        'invoice_interval' => 'setInvoiceInterval',
        'invoice_rows' => 'setInvoiceRows',
        'continuous' => 'setContinuous',
        'our_reference' => 'setOurReference',
        'print_template' => 'setPrintTemplate',
        'remarks' => 'setRemarks',
        'template_name' => 'setTemplateName',
        'template_number' => 'setTemplateNumber',
        'terms_of_delivery' => 'setTermsOfDelivery',
        'terms_of_payment' => 'setTermsOfPayment',
        'way_of_delivery' => 'setWayOfDelivery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_url' => 'getAtUrl',
        'administration_fee' => 'getAdministrationFee',
        'contract_length' => 'getContractLength',
        'freight' => 'getFreight',
        'invoice_interval' => 'getInvoiceInterval',
        'invoice_rows' => 'getInvoiceRows',
        'continuous' => 'getContinuous',
        'our_reference' => 'getOurReference',
        'print_template' => 'getPrintTemplate',
        'remarks' => 'getRemarks',
        'template_name' => 'getTemplateName',
        'template_number' => 'getTemplateNumber',
        'terms_of_delivery' => 'getTermsOfDelivery',
        'terms_of_payment' => 'getTermsOfPayment',
        'way_of_delivery' => 'getWayOfDelivery'
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
        $this->setIfExists('administration_fee', $data ?? [], null);
        $this->setIfExists('contract_length', $data ?? [], null);
        $this->setIfExists('freight', $data ?? [], null);
        $this->setIfExists('invoice_interval', $data ?? [], null);
        $this->setIfExists('invoice_rows', $data ?? [], null);
        $this->setIfExists('continuous', $data ?? [], null);
        $this->setIfExists('our_reference', $data ?? [], null);
        $this->setIfExists('print_template', $data ?? [], null);
        $this->setIfExists('remarks', $data ?? [], null);
        $this->setIfExists('template_name', $data ?? [], null);
        $this->setIfExists('template_number', $data ?? [], null);
        $this->setIfExists('terms_of_delivery', $data ?? [], null);
        $this->setIfExists('terms_of_payment', $data ?? [], null);
        $this->setIfExists('way_of_delivery', $data ?? [], null);
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

        if (!is_null($this->container['our_reference']) && (mb_strlen($this->container['our_reference']) > 25)) {
            $invalidProperties[] = "invalid value for 'our_reference', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['our_reference']) && (mb_strlen($this->container['our_reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'our_reference', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) > 1024)) {
            $invalidProperties[] = "invalid value for 'remarks', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) < 0)) {
            $invalidProperties[] = "invalid value for 'remarks', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['template_name'] === null) {
            $invalidProperties[] = "'template_name' can't be null";
        }
        if ((mb_strlen($this->container['template_name']) > 1024)) {
            $invalidProperties[] = "invalid value for 'template_name', the character length must be smaller than or equal to 1024.";
        }

        if ((mb_strlen($this->container['template_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'template_name', the character length must be bigger than or equal to 1.";
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
     * Gets administration_fee
     *
     * @return float|null
     */
    public function getAdministrationFee()
    {
        return $this->container['administration_fee'];
    }

    /**
     * Sets administration_fee
     *
     * @param float|null $administration_fee administration_fee
     *
     * @return self
     */
    public function setAdministrationFee($administration_fee)
    {
        if (is_null($administration_fee)) {
            throw new \InvalidArgumentException('non-nullable administration_fee cannot be null');
        }
        $this->container['administration_fee'] = $administration_fee;

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
            throw new \InvalidArgumentException('invalid value for $contract_length when calling ContractTemplate., must be smaller than or equal to 9999.');
        }
        if (($contract_length < 1)) {
            throw new \InvalidArgumentException('invalid value for $contract_length when calling ContractTemplate., must be bigger than or equal to 1.');
        }

        $this->container['contract_length'] = $contract_length;

        return $this;
    }

    /**
     * Gets freight
     *
     * @return float|null
     */
    public function getFreight()
    {
        return $this->container['freight'];
    }

    /**
     * Sets freight
     *
     * @param float|null $freight freight
     *
     * @return self
     */
    public function setFreight($freight)
    {
        if (is_null($freight)) {
            throw new \InvalidArgumentException('non-nullable freight cannot be null');
        }
        $this->container['freight'] = $freight;

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
            throw new \InvalidArgumentException('invalid value for $invoice_interval when calling ContractTemplate., must be smaller than or equal to 9999.');
        }
        if (($invoice_interval < 1)) {
            throw new \InvalidArgumentException('invalid value for $invoice_interval when calling ContractTemplate., must be bigger than or equal to 1.');
        }

        $this->container['invoice_interval'] = $invoice_interval;

        return $this;
    }

    /**
     * Gets invoice_rows
     *
     * @return \FortnoxApi\Model\ContractTemplateInvoiceRow[]|null
     */
    public function getInvoiceRows()
    {
        return $this->container['invoice_rows'];
    }

    /**
     * Sets invoice_rows
     *
     * @param \FortnoxApi\Model\ContractTemplateInvoiceRow[]|null $invoice_rows invoice_rows
     *
     * @return self
     */
    public function setInvoiceRows($invoice_rows)
    {
        if (is_null($invoice_rows)) {
            throw new \InvalidArgumentException('non-nullable invoice_rows cannot be null');
        }
        $this->container['invoice_rows'] = $invoice_rows;

        return $this;
    }

    /**
     * Gets continuous
     *
     * @return bool|null
     */
    public function getContinuous()
    {
        return $this->container['continuous'];
    }

    /**
     * Sets continuous
     *
     * @param bool|null $continuous continuous
     *
     * @return self
     */
    public function setContinuous($continuous)
    {
        if (is_null($continuous)) {
            throw new \InvalidArgumentException('non-nullable continuous cannot be null');
        }
        $this->container['continuous'] = $continuous;

        return $this;
    }

    /**
     * Gets our_reference
     *
     * @return string|null
     */
    public function getOurReference()
    {
        return $this->container['our_reference'];
    }

    /**
     * Sets our_reference
     *
     * @param string|null $our_reference our_reference
     *
     * @return self
     */
    public function setOurReference($our_reference)
    {
        if (is_null($our_reference)) {
            throw new \InvalidArgumentException('non-nullable our_reference cannot be null');
        }
        if ((mb_strlen($our_reference) > 25)) {
            throw new \InvalidArgumentException('invalid length for $our_reference when calling ContractTemplate., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($our_reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $our_reference when calling ContractTemplate., must be bigger than or equal to 0.');
        }

        $this->container['our_reference'] = $our_reference;

        return $this;
    }

    /**
     * Gets print_template
     *
     * @return string|null
     */
    public function getPrintTemplate()
    {
        return $this->container['print_template'];
    }

    /**
     * Sets print_template
     *
     * @param string|null $print_template print_template
     *
     * @return self
     */
    public function setPrintTemplate($print_template)
    {
        if (is_null($print_template)) {
            throw new \InvalidArgumentException('non-nullable print_template cannot be null');
        }
        $this->container['print_template'] = $print_template;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string|null $remarks remarks
     *
     * @return self
     */
    public function setRemarks($remarks)
    {
        if (is_null($remarks)) {
            throw new \InvalidArgumentException('non-nullable remarks cannot be null');
        }
        if ((mb_strlen($remarks) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $remarks when calling ContractTemplate., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($remarks) < 0)) {
            throw new \InvalidArgumentException('invalid length for $remarks when calling ContractTemplate., must be bigger than or equal to 0.');
        }

        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets template_name
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     *
     * @param string $template_name template_name
     *
     * @return self
     */
    public function setTemplateName($template_name)
    {
        if (is_null($template_name)) {
            throw new \InvalidArgumentException('non-nullable template_name cannot be null');
        }
        if ((mb_strlen($template_name) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $template_name when calling ContractTemplate., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($template_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $template_name when calling ContractTemplate., must be bigger than or equal to 1.');
        }

        $this->container['template_name'] = $template_name;

        return $this;
    }

    /**
     * Gets template_number
     *
     * @return int|null
     */
    public function getTemplateNumber()
    {
        return $this->container['template_number'];
    }

    /**
     * Sets template_number
     *
     * @param int|null $template_number template_number
     *
     * @return self
     */
    public function setTemplateNumber($template_number)
    {
        if (is_null($template_number)) {
            throw new \InvalidArgumentException('non-nullable template_number cannot be null');
        }
        $this->container['template_number'] = $template_number;

        return $this;
    }

    /**
     * Gets terms_of_delivery
     *
     * @return string|null
     */
    public function getTermsOfDelivery()
    {
        return $this->container['terms_of_delivery'];
    }

    /**
     * Sets terms_of_delivery
     *
     * @param string|null $terms_of_delivery terms_of_delivery
     *
     * @return self
     */
    public function setTermsOfDelivery($terms_of_delivery)
    {
        if (is_null($terms_of_delivery)) {
            throw new \InvalidArgumentException('non-nullable terms_of_delivery cannot be null');
        }
        $this->container['terms_of_delivery'] = $terms_of_delivery;

        return $this;
    }

    /**
     * Gets terms_of_payment
     *
     * @return string|null
     */
    public function getTermsOfPayment()
    {
        return $this->container['terms_of_payment'];
    }

    /**
     * Sets terms_of_payment
     *
     * @param string|null $terms_of_payment terms_of_payment
     *
     * @return self
     */
    public function setTermsOfPayment($terms_of_payment)
    {
        if (is_null($terms_of_payment)) {
            throw new \InvalidArgumentException('non-nullable terms_of_payment cannot be null');
        }
        $this->container['terms_of_payment'] = $terms_of_payment;

        return $this;
    }

    /**
     * Gets way_of_delivery
     *
     * @return string|null
     */
    public function getWayOfDelivery()
    {
        return $this->container['way_of_delivery'];
    }

    /**
     * Sets way_of_delivery
     *
     * @param string|null $way_of_delivery way_of_delivery
     *
     * @return self
     */
    public function setWayOfDelivery($way_of_delivery)
    {
        if (is_null($way_of_delivery)) {
            throw new \InvalidArgumentException('non-nullable way_of_delivery cannot be null');
        }
        $this->container['way_of_delivery'] = $way_of_delivery;

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


