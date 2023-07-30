<?php
/**
 * IncomingGoods
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
 * IncomingGoods Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IncomingGoods implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IncomingGoods';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'has_delivery_note' => 'bool',
        'delivery_note_id' => 'string',
        'supplier_number' => 'string',
        'rows' => '\OpenAPI\Client\Model\IncomingGoodsRow[]',
        'date' => '\DateTime',
        'released' => 'bool',
        'note' => 'string',
        'completed' => 'bool',
        'stock_point_id' => 'string',
        'stock_point_code' => 'string',
        'stock_point_name' => 'string',
        'voided' => 'bool',
        'project_id' => 'string',
        'cost_center_code' => 'string',
        'supplier_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'has_delivery_note' => null,
        'delivery_note_id' => null,
        'supplier_number' => null,
        'rows' => null,
        'date' => 'date',
        'released' => null,
        'note' => null,
        'completed' => null,
        'stock_point_id' => 'uuid',
        'stock_point_code' => null,
        'stock_point_name' => null,
        'voided' => null,
        'project_id' => null,
        'cost_center_code' => null,
        'supplier_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'has_delivery_note' => false,
		'delivery_note_id' => false,
		'supplier_number' => false,
		'rows' => false,
		'date' => false,
		'released' => false,
		'note' => false,
		'completed' => false,
		'stock_point_id' => false,
		'stock_point_code' => false,
		'stock_point_name' => false,
		'voided' => false,
		'project_id' => false,
		'cost_center_code' => false,
		'supplier_name' => false
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
        'has_delivery_note' => 'hasDeliveryNote',
        'delivery_note_id' => 'deliveryNoteId',
        'supplier_number' => 'supplierNumber',
        'rows' => 'rows',
        'date' => 'date',
        'released' => 'released',
        'note' => 'note',
        'completed' => 'completed',
        'stock_point_id' => 'stockPointId',
        'stock_point_code' => 'stockPointCode',
        'stock_point_name' => 'stockPointName',
        'voided' => 'voided',
        'project_id' => 'projectId',
        'cost_center_code' => 'costCenterCode',
        'supplier_name' => 'supplierName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'has_delivery_note' => 'setHasDeliveryNote',
        'delivery_note_id' => 'setDeliveryNoteId',
        'supplier_number' => 'setSupplierNumber',
        'rows' => 'setRows',
        'date' => 'setDate',
        'released' => 'setReleased',
        'note' => 'setNote',
        'completed' => 'setCompleted',
        'stock_point_id' => 'setStockPointId',
        'stock_point_code' => 'setStockPointCode',
        'stock_point_name' => 'setStockPointName',
        'voided' => 'setVoided',
        'project_id' => 'setProjectId',
        'cost_center_code' => 'setCostCenterCode',
        'supplier_name' => 'setSupplierName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'has_delivery_note' => 'getHasDeliveryNote',
        'delivery_note_id' => 'getDeliveryNoteId',
        'supplier_number' => 'getSupplierNumber',
        'rows' => 'getRows',
        'date' => 'getDate',
        'released' => 'getReleased',
        'note' => 'getNote',
        'completed' => 'getCompleted',
        'stock_point_id' => 'getStockPointId',
        'stock_point_code' => 'getStockPointCode',
        'stock_point_name' => 'getStockPointName',
        'voided' => 'getVoided',
        'project_id' => 'getProjectId',
        'cost_center_code' => 'getCostCenterCode',
        'supplier_name' => 'getSupplierName'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('has_delivery_note', $data ?? [], null);
        $this->setIfExists('delivery_note_id', $data ?? [], null);
        $this->setIfExists('supplier_number', $data ?? [], null);
        $this->setIfExists('rows', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('released', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('completed', $data ?? [], null);
        $this->setIfExists('stock_point_id', $data ?? [], null);
        $this->setIfExists('stock_point_code', $data ?? [], null);
        $this->setIfExists('stock_point_name', $data ?? [], null);
        $this->setIfExists('voided', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('cost_center_code', $data ?? [], null);
        $this->setIfExists('supplier_name', $data ?? [], null);
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

        if ($this->container['delivery_note_id'] === null) {
            $invalidProperties[] = "'delivery_note_id' can't be null";
        }
        if ((mb_strlen($this->container['delivery_note_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'delivery_note_id', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['delivery_note_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'delivery_note_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['supplier_number']) && (mb_strlen($this->container['supplier_number']) > 1024)) {
            $invalidProperties[] = "invalid value for 'supplier_number', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['supplier_number']) && (mb_strlen($this->container['supplier_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'supplier_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 1000)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) < 0)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['supplier_name']) && (mb_strlen($this->container['supplier_name']) > 1024)) {
            $invalidProperties[] = "invalid value for 'supplier_name', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['supplier_name']) && (mb_strlen($this->container['supplier_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'supplier_name', the character length must be bigger than or equal to 0.";
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
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
     * Gets has_delivery_note
     *
     * @return bool|null
     */
    public function getHasDeliveryNote()
    {
        return $this->container['has_delivery_note'];
    }

    /**
     * Sets has_delivery_note
     *
     * @param bool|null $has_delivery_note has_delivery_note
     *
     * @return self
     */
    public function setHasDeliveryNote($has_delivery_note)
    {
        if (is_null($has_delivery_note)) {
            throw new \InvalidArgumentException('non-nullable has_delivery_note cannot be null');
        }
        $this->container['has_delivery_note'] = $has_delivery_note;

        return $this;
    }

    /**
     * Gets delivery_note_id
     *
     * @return string
     */
    public function getDeliveryNoteId()
    {
        return $this->container['delivery_note_id'];
    }

    /**
     * Sets delivery_note_id
     *
     * @param string $delivery_note_id delivery_note_id
     *
     * @return self
     */
    public function setDeliveryNoteId($delivery_note_id)
    {
        if (is_null($delivery_note_id)) {
            throw new \InvalidArgumentException('non-nullable delivery_note_id cannot be null');
        }
        if ((mb_strlen($delivery_note_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $delivery_note_id when calling IncomingGoods., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($delivery_note_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $delivery_note_id when calling IncomingGoods., must be bigger than or equal to 1.');
        }

        $this->container['delivery_note_id'] = $delivery_note_id;

        return $this;
    }

    /**
     * Gets supplier_number
     *
     * @return string|null
     */
    public function getSupplierNumber()
    {
        return $this->container['supplier_number'];
    }

    /**
     * Sets supplier_number
     *
     * @param string|null $supplier_number supplier_number
     *
     * @return self
     */
    public function setSupplierNumber($supplier_number)
    {
        if (is_null($supplier_number)) {
            throw new \InvalidArgumentException('non-nullable supplier_number cannot be null');
        }
        if ((mb_strlen($supplier_number) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $supplier_number when calling IncomingGoods., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($supplier_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $supplier_number when calling IncomingGoods., must be bigger than or equal to 0.');
        }

        $this->container['supplier_number'] = $supplier_number;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \OpenAPI\Client\Model\IncomingGoodsRow[]|null
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \OpenAPI\Client\Model\IncomingGoodsRow[]|null $rows rows
     *
     * @return self
     */
    public function setRows($rows)
    {
        if (is_null($rows)) {
            throw new \InvalidArgumentException('non-nullable rows cannot be null');
        }
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets released
     *
     * @return bool|null
     */
    public function getReleased()
    {
        return $this->container['released'];
    }

    /**
     * Sets released
     *
     * @param bool|null $released released
     *
     * @return self
     */
    public function setReleased($released)
    {
        if (is_null($released)) {
            throw new \InvalidArgumentException('non-nullable released cannot be null');
        }
        $this->container['released'] = $released;

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
            throw new \InvalidArgumentException('invalid length for $note when calling IncomingGoods., must be smaller than or equal to 1000.');
        }
        if ((mb_strlen($note) < 0)) {
            throw new \InvalidArgumentException('invalid length for $note when calling IncomingGoods., must be bigger than or equal to 0.');
        }

        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return bool|null
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool|null $completed completed
     *
     * @return self
     */
    public function setCompleted($completed)
    {
        if (is_null($completed)) {
            throw new \InvalidArgumentException('non-nullable completed cannot be null');
        }
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets stock_point_id
     *
     * @return string|null
     */
    public function getStockPointId()
    {
        return $this->container['stock_point_id'];
    }

    /**
     * Sets stock_point_id
     *
     * @param string|null $stock_point_id stock_point_id
     *
     * @return self
     */
    public function setStockPointId($stock_point_id)
    {
        if (is_null($stock_point_id)) {
            throw new \InvalidArgumentException('non-nullable stock_point_id cannot be null');
        }
        $this->container['stock_point_id'] = $stock_point_id;

        return $this;
    }

    /**
     * Gets stock_point_code
     *
     * @return string|null
     */
    public function getStockPointCode()
    {
        return $this->container['stock_point_code'];
    }

    /**
     * Sets stock_point_code
     *
     * @param string|null $stock_point_code stock_point_code
     *
     * @return self
     */
    public function setStockPointCode($stock_point_code)
    {
        if (is_null($stock_point_code)) {
            throw new \InvalidArgumentException('non-nullable stock_point_code cannot be null');
        }
        $this->container['stock_point_code'] = $stock_point_code;

        return $this;
    }

    /**
     * Gets stock_point_name
     *
     * @return string|null
     */
    public function getStockPointName()
    {
        return $this->container['stock_point_name'];
    }

    /**
     * Sets stock_point_name
     *
     * @param string|null $stock_point_name stock_point_name
     *
     * @return self
     */
    public function setStockPointName($stock_point_name)
    {
        if (is_null($stock_point_name)) {
            throw new \InvalidArgumentException('non-nullable stock_point_name cannot be null');
        }
        $this->container['stock_point_name'] = $stock_point_name;

        return $this;
    }

    /**
     * Gets voided
     *
     * @return bool|null
     */
    public function getVoided()
    {
        return $this->container['voided'];
    }

    /**
     * Sets voided
     *
     * @param bool|null $voided voided
     *
     * @return self
     */
    public function setVoided($voided)
    {
        if (is_null($voided)) {
            throw new \InvalidArgumentException('non-nullable voided cannot be null');
        }
        $this->container['voided'] = $voided;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string|null $project_id project_id
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        if (is_null($project_id)) {
            throw new \InvalidArgumentException('non-nullable project_id cannot be null');
        }
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets cost_center_code
     *
     * @return string|null
     */
    public function getCostCenterCode()
    {
        return $this->container['cost_center_code'];
    }

    /**
     * Sets cost_center_code
     *
     * @param string|null $cost_center_code cost_center_code
     *
     * @return self
     */
    public function setCostCenterCode($cost_center_code)
    {
        if (is_null($cost_center_code)) {
            throw new \InvalidArgumentException('non-nullable cost_center_code cannot be null');
        }
        $this->container['cost_center_code'] = $cost_center_code;

        return $this;
    }

    /**
     * Gets supplier_name
     *
     * @return string|null
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     *
     * @param string|null $supplier_name supplier_name
     *
     * @return self
     */
    public function setSupplierName($supplier_name)
    {
        if (is_null($supplier_name)) {
            throw new \InvalidArgumentException('non-nullable supplier_name cannot be null');
        }
        if ((mb_strlen($supplier_name) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $supplier_name when calling IncomingGoods., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($supplier_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $supplier_name when calling IncomingGoods., must be bigger than or equal to 0.');
        }

        $this->container['supplier_name'] = $supplier_name;

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

