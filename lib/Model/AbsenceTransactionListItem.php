<?php
/**
 * AbsenceTransactionListItem
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
 * AbsenceTransactionListItem Class Doc Comment
 *
 * @category Class
 * @package  FortnoxApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AbsenceTransactionListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AbsenceTransactionListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_url' => 'string',
        'id' => 'string',
        'employee_id' => 'string',
        'cause_code' => 'string',
        'date' => '\DateTime',
        'extent' => 'float',
        'hours' => 'float',
        'holiday_entitling' => 'bool',
        'cost_center' => 'string',
        'project' => 'string'
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
        'id' => 'uuid',
        'employee_id' => null,
        'cause_code' => null,
        'date' => 'date',
        'extent' => 'float',
        'hours' => 'float',
        'holiday_entitling' => null,
        'cost_center' => null,
        'project' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_url' => false,
		'id' => false,
		'employee_id' => false,
		'cause_code' => false,
		'date' => false,
		'extent' => false,
		'hours' => false,
		'holiday_entitling' => false,
		'cost_center' => false,
		'project' => false
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
        'id' => 'id',
        'employee_id' => 'EmployeeId',
        'cause_code' => 'CauseCode',
        'date' => 'Date',
        'extent' => 'Extent',
        'hours' => 'Hours',
        'holiday_entitling' => 'HolidayEntitling',
        'cost_center' => 'CostCenter',
        'project' => 'Project'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_url' => 'setAtUrl',
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'cause_code' => 'setCauseCode',
        'date' => 'setDate',
        'extent' => 'setExtent',
        'hours' => 'setHours',
        'holiday_entitling' => 'setHolidayEntitling',
        'cost_center' => 'setCostCenter',
        'project' => 'setProject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_url' => 'getAtUrl',
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'cause_code' => 'getCauseCode',
        'date' => 'getDate',
        'extent' => 'getExtent',
        'hours' => 'getHours',
        'holiday_entitling' => 'getHolidayEntitling',
        'cost_center' => 'getCostCenter',
        'project' => 'getProject'
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

    public const CAUSE_CODE_ASK = 'ASK';
    public const CAUSE_CODE_FPE = 'FPE';
    public const CAUSE_CODE_FRA = 'FRA';
    public const CAUSE_CODE_HAV = 'HAV';
    public const CAUSE_CODE_KOM = 'KOM';
    public const CAUSE_CODE_MIL = 'MIL';
    public const CAUSE_CODE_NAR = 'NAR';
    public const CAUSE_CODE_OS1 = 'OS1';
    public const CAUSE_CODE_OS2 = 'OS2';
    public const CAUSE_CODE_OS3 = 'OS3';
    public const CAUSE_CODE_OS4 = 'OS4';
    public const CAUSE_CODE_OS5 = 'OS5';
    public const CAUSE_CODE_PAP = 'PAP';
    public const CAUSE_CODE_PEM = 'PEM';
    public const CAUSE_CODE_PER = 'PER';
    public const CAUSE_CODE_SEM = 'SEM';
    public const CAUSE_CODE_SJK = 'SJK';
    public const CAUSE_CODE_SMB = 'SMB';
    public const CAUSE_CODE_SVE = 'SVE';
    public const CAUSE_CODE_TJL = 'TJL';
    public const CAUSE_CODE_UTB = 'UTB';
    public const CAUSE_CODE_VAB = 'VAB';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCauseCodeAllowableValues()
    {
        return [
            self::CAUSE_CODE_ASK,
            self::CAUSE_CODE_FPE,
            self::CAUSE_CODE_FRA,
            self::CAUSE_CODE_HAV,
            self::CAUSE_CODE_KOM,
            self::CAUSE_CODE_MIL,
            self::CAUSE_CODE_NAR,
            self::CAUSE_CODE_OS1,
            self::CAUSE_CODE_OS2,
            self::CAUSE_CODE_OS3,
            self::CAUSE_CODE_OS4,
            self::CAUSE_CODE_OS5,
            self::CAUSE_CODE_PAP,
            self::CAUSE_CODE_PEM,
            self::CAUSE_CODE_PER,
            self::CAUSE_CODE_SEM,
            self::CAUSE_CODE_SJK,
            self::CAUSE_CODE_SMB,
            self::CAUSE_CODE_SVE,
            self::CAUSE_CODE_TJL,
            self::CAUSE_CODE_UTB,
            self::CAUSE_CODE_VAB,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('cause_code', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('extent', $data ?? [], null);
        $this->setIfExists('hours', $data ?? [], null);
        $this->setIfExists('holiday_entitling', $data ?? [], null);
        $this->setIfExists('cost_center', $data ?? [], null);
        $this->setIfExists('project', $data ?? [], null);
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

        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
        }
        if ((mb_strlen($this->container['employee_id']) > 15)) {
            $invalidProperties[] = "invalid value for 'employee_id', the character length must be smaller than or equal to 15.";
        }

        if ((mb_strlen($this->container['employee_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'employee_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['cause_code'] === null) {
            $invalidProperties[] = "'cause_code' can't be null";
        }
        $allowedValues = $this->getCauseCodeAllowableValues();
        if (!is_null($this->container['cause_code']) && !in_array($this->container['cause_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cause_code', must be one of '%s'",
                $this->container['cause_code'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['cause_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'cause_code', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['cause_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'cause_code', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
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
     * Gets employee_id
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string $employee_id employee_id
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        if ((mb_strlen($employee_id) > 15)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling AbsenceTransactionListItem., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($employee_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling AbsenceTransactionListItem., must be bigger than or equal to 1.');
        }

        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets cause_code
     *
     * @return string
     */
    public function getCauseCode()
    {
        return $this->container['cause_code'];
    }

    /**
     * Sets cause_code
     *
     * @param string $cause_code cause_code
     *
     * @return self
     */
    public function setCauseCode($cause_code)
    {
        if (is_null($cause_code)) {
            throw new \InvalidArgumentException('non-nullable cause_code cannot be null');
        }
        $allowedValues = $this->getCauseCodeAllowableValues();
        if (!in_array($cause_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cause_code', must be one of '%s'",
                    $cause_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($cause_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $cause_code when calling AbsenceTransactionListItem., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($cause_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $cause_code when calling AbsenceTransactionListItem., must be bigger than or equal to 3.');
        }

        $this->container['cause_code'] = $cause_code;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
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
     * Gets extent
     *
     * @return float|null
     */
    public function getExtent()
    {
        return $this->container['extent'];
    }

    /**
     * Sets extent
     *
     * @param float|null $extent extent
     *
     * @return self
     */
    public function setExtent($extent)
    {
        if (is_null($extent)) {
            throw new \InvalidArgumentException('non-nullable extent cannot be null');
        }
        $this->container['extent'] = $extent;

        return $this;
    }

    /**
     * Gets hours
     *
     * @return float|null
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param float|null $hours hours
     *
     * @return self
     */
    public function setHours($hours)
    {
        if (is_null($hours)) {
            throw new \InvalidArgumentException('non-nullable hours cannot be null');
        }
        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets holiday_entitling
     *
     * @return bool|null
     */
    public function getHolidayEntitling()
    {
        return $this->container['holiday_entitling'];
    }

    /**
     * Sets holiday_entitling
     *
     * @param bool|null $holiday_entitling holiday_entitling
     *
     * @return self
     */
    public function setHolidayEntitling($holiday_entitling)
    {
        if (is_null($holiday_entitling)) {
            throw new \InvalidArgumentException('non-nullable holiday_entitling cannot be null');
        }
        $this->container['holiday_entitling'] = $holiday_entitling;

        return $this;
    }

    /**
     * Gets cost_center
     *
     * @return string|null
     */
    public function getCostCenter()
    {
        return $this->container['cost_center'];
    }

    /**
     * Sets cost_center
     *
     * @param string|null $cost_center cost_center
     *
     * @return self
     */
    public function setCostCenter($cost_center)
    {
        if (is_null($cost_center)) {
            throw new \InvalidArgumentException('non-nullable cost_center cannot be null');
        }
        $this->container['cost_center'] = $cost_center;

        return $this;
    }

    /**
     * Gets project
     *
     * @return string|null
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param string|null $project project
     *
     * @return self
     */
    public function setProject($project)
    {
        if (is_null($project)) {
            throw new \InvalidArgumentException('non-nullable project cannot be null');
        }
        $this->container['project'] = $project;

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


