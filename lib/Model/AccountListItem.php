<?php
/**
 * AccountListItem
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
 * AccountListItem Class Doc Comment
 *
 * @category Class
 * @package  FortnoxApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_url' => 'string',
        'active' => 'bool',
        'balance_brought_forward' => 'float',
        'cost_center' => 'string',
        'cost_center_settings' => 'string',
        'description' => 'string',
        'number' => 'int',
        'project' => 'string',
        'project_settings' => 'string',
        'sru' => 'int',
        'year' => 'int',
        'vat_code' => 'string'
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
        'active' => null,
        'balance_brought_forward' => 'double',
        'cost_center' => null,
        'cost_center_settings' => null,
        'description' => null,
        'number' => 'int32',
        'project' => null,
        'project_settings' => null,
        'sru' => 'int32',
        'year' => 'int32',
        'vat_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_url' => false,
		'active' => false,
		'balance_brought_forward' => false,
		'cost_center' => false,
		'cost_center_settings' => false,
		'description' => false,
		'number' => false,
		'project' => false,
		'project_settings' => false,
		'sru' => false,
		'year' => false,
		'vat_code' => false
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
        'active' => 'Active',
        'balance_brought_forward' => 'BalanceBroughtForward',
        'cost_center' => 'CostCenter',
        'cost_center_settings' => 'CostCenterSettings',
        'description' => 'Description',
        'number' => 'Number',
        'project' => 'Project',
        'project_settings' => 'ProjectSettings',
        'sru' => 'SRU',
        'year' => 'Year',
        'vat_code' => 'VATCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_url' => 'setAtUrl',
        'active' => 'setActive',
        'balance_brought_forward' => 'setBalanceBroughtForward',
        'cost_center' => 'setCostCenter',
        'cost_center_settings' => 'setCostCenterSettings',
        'description' => 'setDescription',
        'number' => 'setNumber',
        'project' => 'setProject',
        'project_settings' => 'setProjectSettings',
        'sru' => 'setSru',
        'year' => 'setYear',
        'vat_code' => 'setVatCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_url' => 'getAtUrl',
        'active' => 'getActive',
        'balance_brought_forward' => 'getBalanceBroughtForward',
        'cost_center' => 'getCostCenter',
        'cost_center_settings' => 'getCostCenterSettings',
        'description' => 'getDescription',
        'number' => 'getNumber',
        'project' => 'getProject',
        'project_settings' => 'getProjectSettings',
        'sru' => 'getSru',
        'year' => 'getYear',
        'vat_code' => 'getVatCode'
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

    public const COST_CENTER_SETTINGS_ALLOWED = 'ALLOWED';
    public const COST_CENTER_SETTINGS_MANDATORY = 'MANDATORY';
    public const COST_CENTER_SETTINGS_NOTALLOWED = 'NOTALLOWED';
    public const PROJECT_SETTINGS_ALLOWED = 'ALLOWED';
    public const PROJECT_SETTINGS_MANDATORY = 'MANDATORY';
    public const PROJECT_SETTINGS_NOTALLOWED = 'NOTALLOWED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCostCenterSettingsAllowableValues()
    {
        return [
            self::COST_CENTER_SETTINGS_ALLOWED,
            self::COST_CENTER_SETTINGS_MANDATORY,
            self::COST_CENTER_SETTINGS_NOTALLOWED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProjectSettingsAllowableValues()
    {
        return [
            self::PROJECT_SETTINGS_ALLOWED,
            self::PROJECT_SETTINGS_MANDATORY,
            self::PROJECT_SETTINGS_NOTALLOWED,
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
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('balance_brought_forward', $data ?? [], null);
        $this->setIfExists('cost_center', $data ?? [], null);
        $this->setIfExists('cost_center_settings', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('project', $data ?? [], null);
        $this->setIfExists('project_settings', $data ?? [], null);
        $this->setIfExists('sru', $data ?? [], null);
        $this->setIfExists('year', $data ?? [], null);
        $this->setIfExists('vat_code', $data ?? [], null);
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

        $allowedValues = $this->getCostCenterSettingsAllowableValues();
        if (!is_null($this->container['cost_center_settings']) && !in_array($this->container['cost_center_settings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cost_center_settings', must be one of '%s'",
                $this->container['cost_center_settings'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if (($this->container['number'] > 9999)) {
            $invalidProperties[] = "invalid value for 'number', must be smaller than or equal to 9999.";
        }

        if (($this->container['number'] < 1000)) {
            $invalidProperties[] = "invalid value for 'number', must be bigger than or equal to 1000.";
        }

        $allowedValues = $this->getProjectSettingsAllowableValues();
        if (!is_null($this->container['project_settings']) && !in_array($this->container['project_settings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'project_settings', must be one of '%s'",
                $this->container['project_settings'],
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
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets balance_brought_forward
     *
     * @return float|null
     */
    public function getBalanceBroughtForward()
    {
        return $this->container['balance_brought_forward'];
    }

    /**
     * Sets balance_brought_forward
     *
     * @param float|null $balance_brought_forward balance_brought_forward
     *
     * @return self
     */
    public function setBalanceBroughtForward($balance_brought_forward)
    {
        if (is_null($balance_brought_forward)) {
            throw new \InvalidArgumentException('non-nullable balance_brought_forward cannot be null');
        }
        $this->container['balance_brought_forward'] = $balance_brought_forward;

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
     * Gets cost_center_settings
     *
     * @return string|null
     */
    public function getCostCenterSettings()
    {
        return $this->container['cost_center_settings'];
    }

    /**
     * Sets cost_center_settings
     *
     * @param string|null $cost_center_settings cost_center_settings
     *
     * @return self
     */
    public function setCostCenterSettings($cost_center_settings)
    {
        if (is_null($cost_center_settings)) {
            throw new \InvalidArgumentException('non-nullable cost_center_settings cannot be null');
        }
        $allowedValues = $this->getCostCenterSettingsAllowableValues();
        if (!in_array($cost_center_settings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cost_center_settings', must be one of '%s'",
                    $cost_center_settings,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cost_center_settings'] = $cost_center_settings;

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
        if ((mb_strlen($description) > 200)) {
            throw new \InvalidArgumentException('invalid length for $description when calling AccountListItem., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling AccountListItem., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }

        if (($number > 9999)) {
            throw new \InvalidArgumentException('invalid value for $number when calling AccountListItem., must be smaller than or equal to 9999.');
        }
        if (($number < 1000)) {
            throw new \InvalidArgumentException('invalid value for $number when calling AccountListItem., must be bigger than or equal to 1000.');
        }

        $this->container['number'] = $number;

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
     * Gets project_settings
     *
     * @return string|null
     */
    public function getProjectSettings()
    {
        return $this->container['project_settings'];
    }

    /**
     * Sets project_settings
     *
     * @param string|null $project_settings project_settings
     *
     * @return self
     */
    public function setProjectSettings($project_settings)
    {
        if (is_null($project_settings)) {
            throw new \InvalidArgumentException('non-nullable project_settings cannot be null');
        }
        $allowedValues = $this->getProjectSettingsAllowableValues();
        if (!in_array($project_settings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'project_settings', must be one of '%s'",
                    $project_settings,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['project_settings'] = $project_settings;

        return $this;
    }

    /**
     * Gets sru
     *
     * @return int|null
     */
    public function getSru()
    {
        return $this->container['sru'];
    }

    /**
     * Sets sru
     *
     * @param int|null $sru sru
     *
     * @return self
     */
    public function setSru($sru)
    {
        if (is_null($sru)) {
            throw new \InvalidArgumentException('non-nullable sru cannot be null');
        }
        $this->container['sru'] = $sru;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int|null
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int|null $year year
     *
     * @return self
     */
    public function setYear($year)
    {
        if (is_null($year)) {
            throw new \InvalidArgumentException('non-nullable year cannot be null');
        }
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets vat_code
     *
     * @return string|null
     */
    public function getVatCode()
    {
        return $this->container['vat_code'];
    }

    /**
     * Sets vat_code
     *
     * @param string|null $vat_code vat_code
     *
     * @return self
     */
    public function setVatCode($vat_code)
    {
        if (is_null($vat_code)) {
            throw new \InvalidArgumentException('non-nullable vat_code cannot be null');
        }
        $this->container['vat_code'] = $vat_code;

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


