<?php
/**
 * Asset
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
 * Asset Class Doc Comment
 *
 * @category Class
 * @package  FortnoxApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Asset implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Asset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_url' => 'string',
        'id' => 'int',
        'number' => 'string',
        'description' => 'string',
        'status' => 'string',
        'status_id' => 'string',
        'cost_center' => 'string',
        'project' => 'string',
        'type' => 'string',
        'type_id' => 'int',
        'depreciation_method' => 'int',
        'acquisition_value' => 'int',
        'depreciate_to_residual_value' => 'int',
        'acquisition_date' => 'string',
        'acquisition_start' => 'string',
        'depreciation_final' => 'string',
        'depreciated_to' => 'string',
        'manual_ob' => 'int',
        'notes' => 'string',
        'reference' => 'string',
        'brand' => 'string',
        'insured_number' => 'string',
        'insured_with' => 'string',
        'group' => 'string',
        'room' => 'string',
        'placement' => 'string',
        'department' => 'string',
        'history' => '\FortnoxApi\Model\History[]'
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
        'id' => 'int32',
        'number' => null,
        'description' => null,
        'status' => null,
        'status_id' => null,
        'cost_center' => null,
        'project' => null,
        'type' => null,
        'type_id' => 'int32',
        'depreciation_method' => 'int32',
        'acquisition_value' => 'int32',
        'depreciate_to_residual_value' => 'int32',
        'acquisition_date' => null,
        'acquisition_start' => null,
        'depreciation_final' => null,
        'depreciated_to' => null,
        'manual_ob' => 'int32',
        'notes' => null,
        'reference' => null,
        'brand' => null,
        'insured_number' => null,
        'insured_with' => null,
        'group' => null,
        'room' => null,
        'placement' => null,
        'department' => null,
        'history' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_url' => false,
		'id' => false,
		'number' => false,
		'description' => false,
		'status' => false,
		'status_id' => false,
		'cost_center' => false,
		'project' => false,
		'type' => false,
		'type_id' => false,
		'depreciation_method' => false,
		'acquisition_value' => false,
		'depreciate_to_residual_value' => false,
		'acquisition_date' => false,
		'acquisition_start' => false,
		'depreciation_final' => false,
		'depreciated_to' => false,
		'manual_ob' => false,
		'notes' => false,
		'reference' => false,
		'brand' => false,
		'insured_number' => false,
		'insured_with' => false,
		'group' => false,
		'room' => false,
		'placement' => false,
		'department' => false,
		'history' => false
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
        'id' => 'Id',
        'number' => 'Number',
        'description' => 'Description',
        'status' => 'Status',
        'status_id' => 'StatusId',
        'cost_center' => 'CostCenter',
        'project' => 'Project',
        'type' => 'Type',
        'type_id' => 'TypeId',
        'depreciation_method' => 'DepreciationMethod',
        'acquisition_value' => 'AcquisitionValue',
        'depreciate_to_residual_value' => 'DepreciateToResidualValue',
        'acquisition_date' => 'AcquisitionDate',
        'acquisition_start' => 'AcquisitionStart',
        'depreciation_final' => 'DepreciationFinal',
        'depreciated_to' => 'DepreciatedTo',
        'manual_ob' => 'ManualOb',
        'notes' => 'Notes',
        'reference' => 'Reference',
        'brand' => 'Brand',
        'insured_number' => 'InsuredNumber',
        'insured_with' => 'InsuredWith',
        'group' => 'Group',
        'room' => 'Room',
        'placement' => 'Placement',
        'department' => 'Department',
        'history' => 'History'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_url' => 'setAtUrl',
        'id' => 'setId',
        'number' => 'setNumber',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'status_id' => 'setStatusId',
        'cost_center' => 'setCostCenter',
        'project' => 'setProject',
        'type' => 'setType',
        'type_id' => 'setTypeId',
        'depreciation_method' => 'setDepreciationMethod',
        'acquisition_value' => 'setAcquisitionValue',
        'depreciate_to_residual_value' => 'setDepreciateToResidualValue',
        'acquisition_date' => 'setAcquisitionDate',
        'acquisition_start' => 'setAcquisitionStart',
        'depreciation_final' => 'setDepreciationFinal',
        'depreciated_to' => 'setDepreciatedTo',
        'manual_ob' => 'setManualOb',
        'notes' => 'setNotes',
        'reference' => 'setReference',
        'brand' => 'setBrand',
        'insured_number' => 'setInsuredNumber',
        'insured_with' => 'setInsuredWith',
        'group' => 'setGroup',
        'room' => 'setRoom',
        'placement' => 'setPlacement',
        'department' => 'setDepartment',
        'history' => 'setHistory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_url' => 'getAtUrl',
        'id' => 'getId',
        'number' => 'getNumber',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'status_id' => 'getStatusId',
        'cost_center' => 'getCostCenter',
        'project' => 'getProject',
        'type' => 'getType',
        'type_id' => 'getTypeId',
        'depreciation_method' => 'getDepreciationMethod',
        'acquisition_value' => 'getAcquisitionValue',
        'depreciate_to_residual_value' => 'getDepreciateToResidualValue',
        'acquisition_date' => 'getAcquisitionDate',
        'acquisition_start' => 'getAcquisitionStart',
        'depreciation_final' => 'getDepreciationFinal',
        'depreciated_to' => 'getDepreciatedTo',
        'manual_ob' => 'getManualOb',
        'notes' => 'getNotes',
        'reference' => 'getReference',
        'brand' => 'getBrand',
        'insured_number' => 'getInsuredNumber',
        'insured_with' => 'getInsuredWith',
        'group' => 'getGroup',
        'room' => 'getRoom',
        'placement' => 'getPlacement',
        'department' => 'getDepartment',
        'history' => 'getHistory'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_id', $data ?? [], null);
        $this->setIfExists('cost_center', $data ?? [], null);
        $this->setIfExists('project', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('depreciation_method', $data ?? [], null);
        $this->setIfExists('acquisition_value', $data ?? [], null);
        $this->setIfExists('depreciate_to_residual_value', $data ?? [], null);
        $this->setIfExists('acquisition_date', $data ?? [], null);
        $this->setIfExists('acquisition_start', $data ?? [], null);
        $this->setIfExists('depreciation_final', $data ?? [], null);
        $this->setIfExists('depreciated_to', $data ?? [], null);
        $this->setIfExists('manual_ob', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('insured_number', $data ?? [], null);
        $this->setIfExists('insured_with', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('room', $data ?? [], null);
        $this->setIfExists('placement', $data ?? [], null);
        $this->setIfExists('department', $data ?? [], null);
        $this->setIfExists('history', $data ?? [], null);
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
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return string|null
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param string|null $status_id status_id
     *
     * @return self
     */
    public function setStatusId($status_id)
    {
        if (is_null($status_id)) {
            throw new \InvalidArgumentException('non-nullable status_id cannot be null');
        }
        $this->container['status_id'] = $status_id;

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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int|null $type_id type_id
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        if (is_null($type_id)) {
            throw new \InvalidArgumentException('non-nullable type_id cannot be null');
        }
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets depreciation_method
     *
     * @return int|null
     */
    public function getDepreciationMethod()
    {
        return $this->container['depreciation_method'];
    }

    /**
     * Sets depreciation_method
     *
     * @param int|null $depreciation_method depreciation_method
     *
     * @return self
     */
    public function setDepreciationMethod($depreciation_method)
    {
        if (is_null($depreciation_method)) {
            throw new \InvalidArgumentException('non-nullable depreciation_method cannot be null');
        }
        $this->container['depreciation_method'] = $depreciation_method;

        return $this;
    }

    /**
     * Gets acquisition_value
     *
     * @return int|null
     */
    public function getAcquisitionValue()
    {
        return $this->container['acquisition_value'];
    }

    /**
     * Sets acquisition_value
     *
     * @param int|null $acquisition_value acquisition_value
     *
     * @return self
     */
    public function setAcquisitionValue($acquisition_value)
    {
        if (is_null($acquisition_value)) {
            throw new \InvalidArgumentException('non-nullable acquisition_value cannot be null');
        }
        $this->container['acquisition_value'] = $acquisition_value;

        return $this;
    }

    /**
     * Gets depreciate_to_residual_value
     *
     * @return int|null
     */
    public function getDepreciateToResidualValue()
    {
        return $this->container['depreciate_to_residual_value'];
    }

    /**
     * Sets depreciate_to_residual_value
     *
     * @param int|null $depreciate_to_residual_value depreciate_to_residual_value
     *
     * @return self
     */
    public function setDepreciateToResidualValue($depreciate_to_residual_value)
    {
        if (is_null($depreciate_to_residual_value)) {
            throw new \InvalidArgumentException('non-nullable depreciate_to_residual_value cannot be null');
        }
        $this->container['depreciate_to_residual_value'] = $depreciate_to_residual_value;

        return $this;
    }

    /**
     * Gets acquisition_date
     *
     * @return string|null
     */
    public function getAcquisitionDate()
    {
        return $this->container['acquisition_date'];
    }

    /**
     * Sets acquisition_date
     *
     * @param string|null $acquisition_date acquisition_date
     *
     * @return self
     */
    public function setAcquisitionDate($acquisition_date)
    {
        if (is_null($acquisition_date)) {
            throw new \InvalidArgumentException('non-nullable acquisition_date cannot be null');
        }
        $this->container['acquisition_date'] = $acquisition_date;

        return $this;
    }

    /**
     * Gets acquisition_start
     *
     * @return string|null
     */
    public function getAcquisitionStart()
    {
        return $this->container['acquisition_start'];
    }

    /**
     * Sets acquisition_start
     *
     * @param string|null $acquisition_start acquisition_start
     *
     * @return self
     */
    public function setAcquisitionStart($acquisition_start)
    {
        if (is_null($acquisition_start)) {
            throw new \InvalidArgumentException('non-nullable acquisition_start cannot be null');
        }
        $this->container['acquisition_start'] = $acquisition_start;

        return $this;
    }

    /**
     * Gets depreciation_final
     *
     * @return string|null
     */
    public function getDepreciationFinal()
    {
        return $this->container['depreciation_final'];
    }

    /**
     * Sets depreciation_final
     *
     * @param string|null $depreciation_final depreciation_final
     *
     * @return self
     */
    public function setDepreciationFinal($depreciation_final)
    {
        if (is_null($depreciation_final)) {
            throw new \InvalidArgumentException('non-nullable depreciation_final cannot be null');
        }
        $this->container['depreciation_final'] = $depreciation_final;

        return $this;
    }

    /**
     * Gets depreciated_to
     *
     * @return string|null
     */
    public function getDepreciatedTo()
    {
        return $this->container['depreciated_to'];
    }

    /**
     * Sets depreciated_to
     *
     * @param string|null $depreciated_to depreciated_to
     *
     * @return self
     */
    public function setDepreciatedTo($depreciated_to)
    {
        if (is_null($depreciated_to)) {
            throw new \InvalidArgumentException('non-nullable depreciated_to cannot be null');
        }
        $this->container['depreciated_to'] = $depreciated_to;

        return $this;
    }

    /**
     * Gets manual_ob
     *
     * @return int|null
     */
    public function getManualOb()
    {
        return $this->container['manual_ob'];
    }

    /**
     * Sets manual_ob
     *
     * @param int|null $manual_ob manual_ob
     *
     * @return self
     */
    public function setManualOb($manual_ob)
    {
        if (is_null($manual_ob)) {
            throw new \InvalidArgumentException('non-nullable manual_ob cannot be null');
        }
        $this->container['manual_ob'] = $manual_ob;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand brand
     *
     * @return self
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets insured_number
     *
     * @return string|null
     */
    public function getInsuredNumber()
    {
        return $this->container['insured_number'];
    }

    /**
     * Sets insured_number
     *
     * @param string|null $insured_number insured_number
     *
     * @return self
     */
    public function setInsuredNumber($insured_number)
    {
        if (is_null($insured_number)) {
            throw new \InvalidArgumentException('non-nullable insured_number cannot be null');
        }
        $this->container['insured_number'] = $insured_number;

        return $this;
    }

    /**
     * Gets insured_with
     *
     * @return string|null
     */
    public function getInsuredWith()
    {
        return $this->container['insured_with'];
    }

    /**
     * Sets insured_with
     *
     * @param string|null $insured_with insured_with
     *
     * @return self
     */
    public function setInsuredWith($insured_with)
    {
        if (is_null($insured_with)) {
            throw new \InvalidArgumentException('non-nullable insured_with cannot be null');
        }
        $this->container['insured_with'] = $insured_with;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets room
     *
     * @return string|null
     */
    public function getRoom()
    {
        return $this->container['room'];
    }

    /**
     * Sets room
     *
     * @param string|null $room room
     *
     * @return self
     */
    public function setRoom($room)
    {
        if (is_null($room)) {
            throw new \InvalidArgumentException('non-nullable room cannot be null');
        }
        $this->container['room'] = $room;

        return $this;
    }

    /**
     * Gets placement
     *
     * @return string|null
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement
     *
     * @param string|null $placement placement
     *
     * @return self
     */
    public function setPlacement($placement)
    {
        if (is_null($placement)) {
            throw new \InvalidArgumentException('non-nullable placement cannot be null');
        }
        $this->container['placement'] = $placement;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string|null $department department
     *
     * @return self
     */
    public function setDepartment($department)
    {
        if (is_null($department)) {
            throw new \InvalidArgumentException('non-nullable department cannot be null');
        }
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets history
     *
     * @return \FortnoxApi\Model\History[]|null
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param \FortnoxApi\Model\History[]|null $history history
     *
     * @return self
     */
    public function setHistory($history)
    {
        if (is_null($history)) {
            throw new \InvalidArgumentException('non-nullable history cannot be null');
        }
        $this->container['history'] = $history;

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


