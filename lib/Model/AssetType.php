<?php
/**
 * AssetType
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
 * AssetType Class Doc Comment
 *
 * @category Class
 * @package  FortnoxApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AssetType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AssetType';

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
        'notes' => 'string',
        'type' => 'int',
        'in_use' => 'bool',
        'account_asset_id' => 'int',
        'account_value_loss_id' => 'int',
        'account_sale_loss_id' => 'int',
        'account_sale_win_id' => 'int',
        'account_revaluation_id' => 'int',
        'account_write_down_ack_id' => 'int',
        'account_write_down_id' => 'int',
        'account_depreciation_id' => 'int',
        'account_asset' => 'int',
        'account_value_loss' => 'int',
        'account_sale_loss' => 'int',
        'account_sale_win' => 'int',
        'account_revaluation' => 'int',
        'account_write_down_ack' => 'int',
        'account_write_down' => 'int',
        'account_depreciation' => 'int'
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
        'notes' => null,
        'type' => 'int32',
        'in_use' => null,
        'account_asset_id' => 'int32',
        'account_value_loss_id' => 'int32',
        'account_sale_loss_id' => 'int32',
        'account_sale_win_id' => 'int32',
        'account_revaluation_id' => 'int32',
        'account_write_down_ack_id' => 'int32',
        'account_write_down_id' => 'int32',
        'account_depreciation_id' => 'int32',
        'account_asset' => 'int32',
        'account_value_loss' => 'int32',
        'account_sale_loss' => 'int32',
        'account_sale_win' => 'int32',
        'account_revaluation' => 'int32',
        'account_write_down_ack' => 'int32',
        'account_write_down' => 'int32',
        'account_depreciation' => 'int32'
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
		'notes' => false,
		'type' => false,
		'in_use' => false,
		'account_asset_id' => false,
		'account_value_loss_id' => false,
		'account_sale_loss_id' => false,
		'account_sale_win_id' => false,
		'account_revaluation_id' => false,
		'account_write_down_ack_id' => false,
		'account_write_down_id' => false,
		'account_depreciation_id' => false,
		'account_asset' => false,
		'account_value_loss' => false,
		'account_sale_loss' => false,
		'account_sale_win' => false,
		'account_revaluation' => false,
		'account_write_down_ack' => false,
		'account_write_down' => false,
		'account_depreciation' => false
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
        'notes' => 'Notes',
        'type' => 'Type',
        'in_use' => 'InUse',
        'account_asset_id' => 'AccountAssetId',
        'account_value_loss_id' => 'AccountValueLossId',
        'account_sale_loss_id' => 'AccountSaleLossId',
        'account_sale_win_id' => 'AccountSaleWinId',
        'account_revaluation_id' => 'AccountRevaluationId',
        'account_write_down_ack_id' => 'AccountWriteDownAckId',
        'account_write_down_id' => 'AccountWriteDownId',
        'account_depreciation_id' => 'AccountDepreciationId',
        'account_asset' => 'AccountAsset',
        'account_value_loss' => 'AccountValueLoss',
        'account_sale_loss' => 'AccountSaleLoss',
        'account_sale_win' => 'AccountSaleWin',
        'account_revaluation' => 'AccountRevaluation',
        'account_write_down_ack' => 'AccountWriteDownAck',
        'account_write_down' => 'AccountWriteDown',
        'account_depreciation' => 'AccountDepreciation'
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
        'notes' => 'setNotes',
        'type' => 'setType',
        'in_use' => 'setInUse',
        'account_asset_id' => 'setAccountAssetId',
        'account_value_loss_id' => 'setAccountValueLossId',
        'account_sale_loss_id' => 'setAccountSaleLossId',
        'account_sale_win_id' => 'setAccountSaleWinId',
        'account_revaluation_id' => 'setAccountRevaluationId',
        'account_write_down_ack_id' => 'setAccountWriteDownAckId',
        'account_write_down_id' => 'setAccountWriteDownId',
        'account_depreciation_id' => 'setAccountDepreciationId',
        'account_asset' => 'setAccountAsset',
        'account_value_loss' => 'setAccountValueLoss',
        'account_sale_loss' => 'setAccountSaleLoss',
        'account_sale_win' => 'setAccountSaleWin',
        'account_revaluation' => 'setAccountRevaluation',
        'account_write_down_ack' => 'setAccountWriteDownAck',
        'account_write_down' => 'setAccountWriteDown',
        'account_depreciation' => 'setAccountDepreciation'
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
        'notes' => 'getNotes',
        'type' => 'getType',
        'in_use' => 'getInUse',
        'account_asset_id' => 'getAccountAssetId',
        'account_value_loss_id' => 'getAccountValueLossId',
        'account_sale_loss_id' => 'getAccountSaleLossId',
        'account_sale_win_id' => 'getAccountSaleWinId',
        'account_revaluation_id' => 'getAccountRevaluationId',
        'account_write_down_ack_id' => 'getAccountWriteDownAckId',
        'account_write_down_id' => 'getAccountWriteDownId',
        'account_depreciation_id' => 'getAccountDepreciationId',
        'account_asset' => 'getAccountAsset',
        'account_value_loss' => 'getAccountValueLoss',
        'account_sale_loss' => 'getAccountSaleLoss',
        'account_sale_win' => 'getAccountSaleWin',
        'account_revaluation' => 'getAccountRevaluation',
        'account_write_down_ack' => 'getAccountWriteDownAck',
        'account_write_down' => 'getAccountWriteDown',
        'account_depreciation' => 'getAccountDepreciation'
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
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('in_use', $data ?? [], null);
        $this->setIfExists('account_asset_id', $data ?? [], null);
        $this->setIfExists('account_value_loss_id', $data ?? [], null);
        $this->setIfExists('account_sale_loss_id', $data ?? [], null);
        $this->setIfExists('account_sale_win_id', $data ?? [], null);
        $this->setIfExists('account_revaluation_id', $data ?? [], null);
        $this->setIfExists('account_write_down_ack_id', $data ?? [], null);
        $this->setIfExists('account_write_down_id', $data ?? [], null);
        $this->setIfExists('account_depreciation_id', $data ?? [], null);
        $this->setIfExists('account_asset', $data ?? [], null);
        $this->setIfExists('account_value_loss', $data ?? [], null);
        $this->setIfExists('account_sale_loss', $data ?? [], null);
        $this->setIfExists('account_sale_win', $data ?? [], null);
        $this->setIfExists('account_revaluation', $data ?? [], null);
        $this->setIfExists('account_write_down_ack', $data ?? [], null);
        $this->setIfExists('account_write_down', $data ?? [], null);
        $this->setIfExists('account_depreciation', $data ?? [], null);
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
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type type
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
     * Gets in_use
     *
     * @return bool|null
     */
    public function getInUse()
    {
        return $this->container['in_use'];
    }

    /**
     * Sets in_use
     *
     * @param bool|null $in_use in_use
     *
     * @return self
     */
    public function setInUse($in_use)
    {
        if (is_null($in_use)) {
            throw new \InvalidArgumentException('non-nullable in_use cannot be null');
        }
        $this->container['in_use'] = $in_use;

        return $this;
    }

    /**
     * Gets account_asset_id
     *
     * @return int|null
     */
    public function getAccountAssetId()
    {
        return $this->container['account_asset_id'];
    }

    /**
     * Sets account_asset_id
     *
     * @param int|null $account_asset_id account_asset_id
     *
     * @return self
     */
    public function setAccountAssetId($account_asset_id)
    {
        if (is_null($account_asset_id)) {
            throw new \InvalidArgumentException('non-nullable account_asset_id cannot be null');
        }
        $this->container['account_asset_id'] = $account_asset_id;

        return $this;
    }

    /**
     * Gets account_value_loss_id
     *
     * @return int|null
     */
    public function getAccountValueLossId()
    {
        return $this->container['account_value_loss_id'];
    }

    /**
     * Sets account_value_loss_id
     *
     * @param int|null $account_value_loss_id account_value_loss_id
     *
     * @return self
     */
    public function setAccountValueLossId($account_value_loss_id)
    {
        if (is_null($account_value_loss_id)) {
            throw new \InvalidArgumentException('non-nullable account_value_loss_id cannot be null');
        }
        $this->container['account_value_loss_id'] = $account_value_loss_id;

        return $this;
    }

    /**
     * Gets account_sale_loss_id
     *
     * @return int|null
     */
    public function getAccountSaleLossId()
    {
        return $this->container['account_sale_loss_id'];
    }

    /**
     * Sets account_sale_loss_id
     *
     * @param int|null $account_sale_loss_id account_sale_loss_id
     *
     * @return self
     */
    public function setAccountSaleLossId($account_sale_loss_id)
    {
        if (is_null($account_sale_loss_id)) {
            throw new \InvalidArgumentException('non-nullable account_sale_loss_id cannot be null');
        }
        $this->container['account_sale_loss_id'] = $account_sale_loss_id;

        return $this;
    }

    /**
     * Gets account_sale_win_id
     *
     * @return int|null
     */
    public function getAccountSaleWinId()
    {
        return $this->container['account_sale_win_id'];
    }

    /**
     * Sets account_sale_win_id
     *
     * @param int|null $account_sale_win_id account_sale_win_id
     *
     * @return self
     */
    public function setAccountSaleWinId($account_sale_win_id)
    {
        if (is_null($account_sale_win_id)) {
            throw new \InvalidArgumentException('non-nullable account_sale_win_id cannot be null');
        }
        $this->container['account_sale_win_id'] = $account_sale_win_id;

        return $this;
    }

    /**
     * Gets account_revaluation_id
     *
     * @return int|null
     */
    public function getAccountRevaluationId()
    {
        return $this->container['account_revaluation_id'];
    }

    /**
     * Sets account_revaluation_id
     *
     * @param int|null $account_revaluation_id account_revaluation_id
     *
     * @return self
     */
    public function setAccountRevaluationId($account_revaluation_id)
    {
        if (is_null($account_revaluation_id)) {
            throw new \InvalidArgumentException('non-nullable account_revaluation_id cannot be null');
        }
        $this->container['account_revaluation_id'] = $account_revaluation_id;

        return $this;
    }

    /**
     * Gets account_write_down_ack_id
     *
     * @return int|null
     */
    public function getAccountWriteDownAckId()
    {
        return $this->container['account_write_down_ack_id'];
    }

    /**
     * Sets account_write_down_ack_id
     *
     * @param int|null $account_write_down_ack_id account_write_down_ack_id
     *
     * @return self
     */
    public function setAccountWriteDownAckId($account_write_down_ack_id)
    {
        if (is_null($account_write_down_ack_id)) {
            throw new \InvalidArgumentException('non-nullable account_write_down_ack_id cannot be null');
        }
        $this->container['account_write_down_ack_id'] = $account_write_down_ack_id;

        return $this;
    }

    /**
     * Gets account_write_down_id
     *
     * @return int|null
     */
    public function getAccountWriteDownId()
    {
        return $this->container['account_write_down_id'];
    }

    /**
     * Sets account_write_down_id
     *
     * @param int|null $account_write_down_id account_write_down_id
     *
     * @return self
     */
    public function setAccountWriteDownId($account_write_down_id)
    {
        if (is_null($account_write_down_id)) {
            throw new \InvalidArgumentException('non-nullable account_write_down_id cannot be null');
        }
        $this->container['account_write_down_id'] = $account_write_down_id;

        return $this;
    }

    /**
     * Gets account_depreciation_id
     *
     * @return int|null
     */
    public function getAccountDepreciationId()
    {
        return $this->container['account_depreciation_id'];
    }

    /**
     * Sets account_depreciation_id
     *
     * @param int|null $account_depreciation_id account_depreciation_id
     *
     * @return self
     */
    public function setAccountDepreciationId($account_depreciation_id)
    {
        if (is_null($account_depreciation_id)) {
            throw new \InvalidArgumentException('non-nullable account_depreciation_id cannot be null');
        }
        $this->container['account_depreciation_id'] = $account_depreciation_id;

        return $this;
    }

    /**
     * Gets account_asset
     *
     * @return int|null
     */
    public function getAccountAsset()
    {
        return $this->container['account_asset'];
    }

    /**
     * Sets account_asset
     *
     * @param int|null $account_asset account_asset
     *
     * @return self
     */
    public function setAccountAsset($account_asset)
    {
        if (is_null($account_asset)) {
            throw new \InvalidArgumentException('non-nullable account_asset cannot be null');
        }
        $this->container['account_asset'] = $account_asset;

        return $this;
    }

    /**
     * Gets account_value_loss
     *
     * @return int|null
     */
    public function getAccountValueLoss()
    {
        return $this->container['account_value_loss'];
    }

    /**
     * Sets account_value_loss
     *
     * @param int|null $account_value_loss account_value_loss
     *
     * @return self
     */
    public function setAccountValueLoss($account_value_loss)
    {
        if (is_null($account_value_loss)) {
            throw new \InvalidArgumentException('non-nullable account_value_loss cannot be null');
        }
        $this->container['account_value_loss'] = $account_value_loss;

        return $this;
    }

    /**
     * Gets account_sale_loss
     *
     * @return int|null
     */
    public function getAccountSaleLoss()
    {
        return $this->container['account_sale_loss'];
    }

    /**
     * Sets account_sale_loss
     *
     * @param int|null $account_sale_loss account_sale_loss
     *
     * @return self
     */
    public function setAccountSaleLoss($account_sale_loss)
    {
        if (is_null($account_sale_loss)) {
            throw new \InvalidArgumentException('non-nullable account_sale_loss cannot be null');
        }
        $this->container['account_sale_loss'] = $account_sale_loss;

        return $this;
    }

    /**
     * Gets account_sale_win
     *
     * @return int|null
     */
    public function getAccountSaleWin()
    {
        return $this->container['account_sale_win'];
    }

    /**
     * Sets account_sale_win
     *
     * @param int|null $account_sale_win account_sale_win
     *
     * @return self
     */
    public function setAccountSaleWin($account_sale_win)
    {
        if (is_null($account_sale_win)) {
            throw new \InvalidArgumentException('non-nullable account_sale_win cannot be null');
        }
        $this->container['account_sale_win'] = $account_sale_win;

        return $this;
    }

    /**
     * Gets account_revaluation
     *
     * @return int|null
     */
    public function getAccountRevaluation()
    {
        return $this->container['account_revaluation'];
    }

    /**
     * Sets account_revaluation
     *
     * @param int|null $account_revaluation account_revaluation
     *
     * @return self
     */
    public function setAccountRevaluation($account_revaluation)
    {
        if (is_null($account_revaluation)) {
            throw new \InvalidArgumentException('non-nullable account_revaluation cannot be null');
        }
        $this->container['account_revaluation'] = $account_revaluation;

        return $this;
    }

    /**
     * Gets account_write_down_ack
     *
     * @return int|null
     */
    public function getAccountWriteDownAck()
    {
        return $this->container['account_write_down_ack'];
    }

    /**
     * Sets account_write_down_ack
     *
     * @param int|null $account_write_down_ack account_write_down_ack
     *
     * @return self
     */
    public function setAccountWriteDownAck($account_write_down_ack)
    {
        if (is_null($account_write_down_ack)) {
            throw new \InvalidArgumentException('non-nullable account_write_down_ack cannot be null');
        }
        $this->container['account_write_down_ack'] = $account_write_down_ack;

        return $this;
    }

    /**
     * Gets account_write_down
     *
     * @return int|null
     */
    public function getAccountWriteDown()
    {
        return $this->container['account_write_down'];
    }

    /**
     * Sets account_write_down
     *
     * @param int|null $account_write_down account_write_down
     *
     * @return self
     */
    public function setAccountWriteDown($account_write_down)
    {
        if (is_null($account_write_down)) {
            throw new \InvalidArgumentException('non-nullable account_write_down cannot be null');
        }
        $this->container['account_write_down'] = $account_write_down;

        return $this;
    }

    /**
     * Gets account_depreciation
     *
     * @return int|null
     */
    public function getAccountDepreciation()
    {
        return $this->container['account_depreciation'];
    }

    /**
     * Sets account_depreciation
     *
     * @param int|null $account_depreciation account_depreciation
     *
     * @return self
     */
    public function setAccountDepreciation($account_depreciation)
    {
        if (is_null($account_depreciation)) {
            throw new \InvalidArgumentException('non-nullable account_depreciation cannot be null');
        }
        $this->container['account_depreciation'] = $account_depreciation;

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


