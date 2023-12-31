<?php
/**
 * ArticleRegistration
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
 * ArticleRegistration Class Doc Comment
 *
 * @category Class
 * @package  FortnoxApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ArticleRegistration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ArticleRegistration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'total_quantity' => 'float',
        'unit_cost' => 'float',
        'unit_price' => 'float',
        'order_index' => 'int',
        'item' => '\FortnoxApi\Model\TRItem',
        'invoice_text' => 'string',
        'note' => 'string',
        'time_locked' => 'bool',
        'invoice_basis_id' => 'int',
        'non_invoiceable' => 'bool',
        'document_id' => 'int',
        'document_type' => 'string',
        'owner_id' => 'string',
        'created_by' => 'string',
        'created_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'total_quantity' => null,
        'unit_cost' => null,
        'unit_price' => null,
        'order_index' => 'int32',
        'item' => null,
        'invoice_text' => null,
        'note' => null,
        'time_locked' => null,
        'invoice_basis_id' => 'int64',
        'non_invoiceable' => null,
        'document_id' => 'int64',
        'document_type' => null,
        'owner_id' => null,
        'created_by' => null,
        'created_time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'total_quantity' => false,
		'unit_cost' => false,
		'unit_price' => false,
		'order_index' => false,
		'item' => false,
		'invoice_text' => false,
		'note' => false,
		'time_locked' => false,
		'invoice_basis_id' => false,
		'non_invoiceable' => false,
		'document_id' => false,
		'document_type' => false,
		'owner_id' => false,
		'created_by' => false,
		'created_time' => false
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
        'id' => 'id',
        'total_quantity' => 'totalQuantity',
        'unit_cost' => 'unitCost',
        'unit_price' => 'unitPrice',
        'order_index' => 'orderIndex',
        'item' => 'item',
        'invoice_text' => 'invoiceText',
        'note' => 'note',
        'time_locked' => 'timeLocked',
        'invoice_basis_id' => 'invoiceBasisId',
        'non_invoiceable' => 'nonInvoiceable',
        'document_id' => 'documentId',
        'document_type' => 'documentType',
        'owner_id' => 'ownerId',
        'created_by' => 'createdBy',
        'created_time' => 'createdTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'total_quantity' => 'setTotalQuantity',
        'unit_cost' => 'setUnitCost',
        'unit_price' => 'setUnitPrice',
        'order_index' => 'setOrderIndex',
        'item' => 'setItem',
        'invoice_text' => 'setInvoiceText',
        'note' => 'setNote',
        'time_locked' => 'setTimeLocked',
        'invoice_basis_id' => 'setInvoiceBasisId',
        'non_invoiceable' => 'setNonInvoiceable',
        'document_id' => 'setDocumentId',
        'document_type' => 'setDocumentType',
        'owner_id' => 'setOwnerId',
        'created_by' => 'setCreatedBy',
        'created_time' => 'setCreatedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'total_quantity' => 'getTotalQuantity',
        'unit_cost' => 'getUnitCost',
        'unit_price' => 'getUnitPrice',
        'order_index' => 'getOrderIndex',
        'item' => 'getItem',
        'invoice_text' => 'getInvoiceText',
        'note' => 'getNote',
        'time_locked' => 'getTimeLocked',
        'invoice_basis_id' => 'getInvoiceBasisId',
        'non_invoiceable' => 'getNonInvoiceable',
        'document_id' => 'getDocumentId',
        'document_type' => 'getDocumentType',
        'owner_id' => 'getOwnerId',
        'created_by' => 'getCreatedBy',
        'created_time' => 'getCreatedTime'
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

    public const DOCUMENT_TYPE_ORDER = 'order';
    public const DOCUMENT_TYPE_INVOICE = 'invoice';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_ORDER,
            self::DOCUMENT_TYPE_INVOICE,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('total_quantity', $data ?? [], null);
        $this->setIfExists('unit_cost', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
        $this->setIfExists('order_index', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
        $this->setIfExists('invoice_text', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('time_locked', $data ?? [], null);
        $this->setIfExists('invoice_basis_id', $data ?? [], null);
        $this->setIfExists('non_invoiceable', $data ?? [], null);
        $this->setIfExists('document_id', $data ?? [], null);
        $this->setIfExists('document_type', $data ?? [], null);
        $this->setIfExists('owner_id', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('created_time', $data ?? [], null);
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

        if (!is_null($this->container['invoice_text']) && (mb_strlen($this->container['invoice_text']) > 1000)) {
            $invalidProperties[] = "invalid value for 'invoice_text', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['invoice_text']) && (mb_strlen($this->container['invoice_text']) < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_text', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 1000)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) < 0)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'document_type', must be one of '%s'",
                $this->container['document_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets total_quantity
     *
     * @return float|null
     */
    public function getTotalQuantity()
    {
        return $this->container['total_quantity'];
    }

    /**
     * Sets total_quantity
     *
     * @param float|null $total_quantity total_quantity
     *
     * @return self
     */
    public function setTotalQuantity($total_quantity)
    {
        if (is_null($total_quantity)) {
            throw new \InvalidArgumentException('non-nullable total_quantity cannot be null');
        }
        $this->container['total_quantity'] = $total_quantity;

        return $this;
    }

    /**
     * Gets unit_cost
     *
     * @return float|null
     */
    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    /**
     * Sets unit_cost
     *
     * @param float|null $unit_cost unit_cost
     *
     * @return self
     */
    public function setUnitCost($unit_cost)
    {
        if (is_null($unit_cost)) {
            throw new \InvalidArgumentException('non-nullable unit_cost cannot be null');
        }
        $this->container['unit_cost'] = $unit_cost;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        if (is_null($unit_price)) {
            throw new \InvalidArgumentException('non-nullable unit_price cannot be null');
        }
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets order_index
     *
     * @return int|null
     */
    public function getOrderIndex()
    {
        return $this->container['order_index'];
    }

    /**
     * Sets order_index
     *
     * @param int|null $order_index order_index
     *
     * @return self
     */
    public function setOrderIndex($order_index)
    {
        if (is_null($order_index)) {
            throw new \InvalidArgumentException('non-nullable order_index cannot be null');
        }
        $this->container['order_index'] = $order_index;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \FortnoxApi\Model\TRItem|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \FortnoxApi\Model\TRItem|null $item item
     *
     * @return self
     */
    public function setItem($item)
    {
        if (is_null($item)) {
            throw new \InvalidArgumentException('non-nullable item cannot be null');
        }
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets invoice_text
     *
     * @return string|null
     */
    public function getInvoiceText()
    {
        return $this->container['invoice_text'];
    }

    /**
     * Sets invoice_text
     *
     * @param string|null $invoice_text invoice_text
     *
     * @return self
     */
    public function setInvoiceText($invoice_text)
    {
        if (is_null($invoice_text)) {
            throw new \InvalidArgumentException('non-nullable invoice_text cannot be null');
        }
        if ((mb_strlen($invoice_text) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $invoice_text when calling ArticleRegistration., must be smaller than or equal to 1000.');
        }
        if ((mb_strlen($invoice_text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $invoice_text when calling ArticleRegistration., must be bigger than or equal to 0.');
        }

        $this->container['invoice_text'] = $invoice_text;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        if ((mb_strlen($note) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $note when calling ArticleRegistration., must be smaller than or equal to 1000.');
        }
        if ((mb_strlen($note) < 0)) {
            throw new \InvalidArgumentException('invalid length for $note when calling ArticleRegistration., must be bigger than or equal to 0.');
        }

        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets time_locked
     *
     * @return bool|null
     */
    public function getTimeLocked()
    {
        return $this->container['time_locked'];
    }

    /**
     * Sets time_locked
     *
     * @param bool|null $time_locked time_locked
     *
     * @return self
     */
    public function setTimeLocked($time_locked)
    {
        if (is_null($time_locked)) {
            throw new \InvalidArgumentException('non-nullable time_locked cannot be null');
        }
        $this->container['time_locked'] = $time_locked;

        return $this;
    }

    /**
     * Gets invoice_basis_id
     *
     * @return int|null
     */
    public function getInvoiceBasisId()
    {
        return $this->container['invoice_basis_id'];
    }

    /**
     * Sets invoice_basis_id
     *
     * @param int|null $invoice_basis_id invoice_basis_id
     *
     * @return self
     */
    public function setInvoiceBasisId($invoice_basis_id)
    {
        if (is_null($invoice_basis_id)) {
            throw new \InvalidArgumentException('non-nullable invoice_basis_id cannot be null');
        }
        $this->container['invoice_basis_id'] = $invoice_basis_id;

        return $this;
    }

    /**
     * Gets non_invoiceable
     *
     * @return bool|null
     */
    public function getNonInvoiceable()
    {
        return $this->container['non_invoiceable'];
    }

    /**
     * Sets non_invoiceable
     *
     * @param bool|null $non_invoiceable non_invoiceable
     *
     * @return self
     */
    public function setNonInvoiceable($non_invoiceable)
    {
        if (is_null($non_invoiceable)) {
            throw new \InvalidArgumentException('non-nullable non_invoiceable cannot be null');
        }
        $this->container['non_invoiceable'] = $non_invoiceable;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return int|null
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param int|null $document_id document_id
     *
     * @return self
     */
    public function setDocumentId($document_id)
    {
        if (is_null($document_id)) {
            throw new \InvalidArgumentException('non-nullable document_id cannot be null');
        }
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string|null
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string|null $document_type document_type
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        if (is_null($document_type)) {
            throw new \InvalidArgumentException('non-nullable document_type cannot be null');
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'document_type', must be one of '%s'",
                    $document_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id owner_id
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        if (is_null($owner_id)) {
            throw new \InvalidArgumentException('non-nullable owner_id cannot be null');
        }
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (is_null($created_by)) {
            throw new \InvalidArgumentException('non-nullable created_by cannot be null');
        }
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime|null
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime|null $created_time created_time
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        if (is_null($created_time)) {
            throw new \InvalidArgumentException('non-nullable created_time cannot be null');
        }
        $this->container['created_time'] = $created_time;

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


