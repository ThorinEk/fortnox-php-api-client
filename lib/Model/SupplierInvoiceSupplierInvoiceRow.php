<?php
/**
 * SupplierInvoiceSupplierInvoiceRow
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
 * SupplierInvoiceSupplierInvoiceRow Class Doc Comment
 *
 * @category Class
 * @package  FortnoxApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupplierInvoiceSupplierInvoiceRow implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SupplierInvoice_SupplierInvoiceRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => 'int',
        'article_number' => 'string',
        'code' => 'string',
        'cost_center' => 'string',
        'account_description' => 'string',
        'item_description' => 'string',
        'debit' => 'float',
        'debit_currency' => 'float',
        'credit' => 'float',
        'credit_currency' => 'float',
        'project' => 'string',
        'transaction_information' => 'string',
        'price' => 'float',
        'quantity' => 'int',
        'total' => 'float',
        'unit' => 'string',
        'stock_point_code' => 'string',
        'stock_location_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account' => 'int32',
        'article_number' => null,
        'code' => null,
        'cost_center' => null,
        'account_description' => null,
        'item_description' => null,
        'debit' => 'double',
        'debit_currency' => 'double',
        'credit' => 'double',
        'credit_currency' => 'double',
        'project' => null,
        'transaction_information' => null,
        'price' => 'double',
        'quantity' => 'int32',
        'total' => 'double',
        'unit' => null,
        'stock_point_code' => null,
        'stock_location_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account' => false,
		'article_number' => false,
		'code' => false,
		'cost_center' => false,
		'account_description' => false,
		'item_description' => false,
		'debit' => false,
		'debit_currency' => false,
		'credit' => false,
		'credit_currency' => false,
		'project' => false,
		'transaction_information' => false,
		'price' => false,
		'quantity' => false,
		'total' => false,
		'unit' => false,
		'stock_point_code' => false,
		'stock_location_code' => false
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
        'account' => 'Account',
        'article_number' => 'ArticleNumber',
        'code' => 'Code',
        'cost_center' => 'CostCenter',
        'account_description' => 'AccountDescription',
        'item_description' => 'ItemDescription',
        'debit' => 'Debit',
        'debit_currency' => 'DebitCurrency',
        'credit' => 'Credit',
        'credit_currency' => 'CreditCurrency',
        'project' => 'Project',
        'transaction_information' => 'TransactionInformation',
        'price' => 'Price',
        'quantity' => 'Quantity',
        'total' => 'Total',
        'unit' => 'Unit',
        'stock_point_code' => 'StockPointCode',
        'stock_location_code' => 'StockLocationCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'article_number' => 'setArticleNumber',
        'code' => 'setCode',
        'cost_center' => 'setCostCenter',
        'account_description' => 'setAccountDescription',
        'item_description' => 'setItemDescription',
        'debit' => 'setDebit',
        'debit_currency' => 'setDebitCurrency',
        'credit' => 'setCredit',
        'credit_currency' => 'setCreditCurrency',
        'project' => 'setProject',
        'transaction_information' => 'setTransactionInformation',
        'price' => 'setPrice',
        'quantity' => 'setQuantity',
        'total' => 'setTotal',
        'unit' => 'setUnit',
        'stock_point_code' => 'setStockPointCode',
        'stock_location_code' => 'setStockLocationCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'article_number' => 'getArticleNumber',
        'code' => 'getCode',
        'cost_center' => 'getCostCenter',
        'account_description' => 'getAccountDescription',
        'item_description' => 'getItemDescription',
        'debit' => 'getDebit',
        'debit_currency' => 'getDebitCurrency',
        'credit' => 'getCredit',
        'credit_currency' => 'getCreditCurrency',
        'project' => 'getProject',
        'transaction_information' => 'getTransactionInformation',
        'price' => 'getPrice',
        'quantity' => 'getQuantity',
        'total' => 'getTotal',
        'unit' => 'getUnit',
        'stock_point_code' => 'getStockPointCode',
        'stock_location_code' => 'getStockLocationCode'
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

    public const CODE_TOT = 'TOT';
    public const CODE_VAT = 'VAT';
    public const CODE_FRT = 'FRT';
    public const CODE_AFE = 'AFE';
    public const CODE_ROV = 'ROV';
    public const CODE_CND = 'CND';
    public const CODE_CNC = 'CNC';
    public const CODE_PRD = 'PRD';
    public const CODE_PRC = 'PRC';
    public const CODE_SRD = 'SRD';
    public const CODE_SRC = 'SRC';
    public const CODE_PRE = 'PRE';
    public const CODE_GWB = 'GWB';
    public const CODE_ACC = 'ACC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_TOT,
            self::CODE_VAT,
            self::CODE_FRT,
            self::CODE_AFE,
            self::CODE_ROV,
            self::CODE_CND,
            self::CODE_CNC,
            self::CODE_PRD,
            self::CODE_PRC,
            self::CODE_SRD,
            self::CODE_SRC,
            self::CODE_PRE,
            self::CODE_GWB,
            self::CODE_ACC,
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
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('article_number', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('cost_center', $data ?? [], null);
        $this->setIfExists('account_description', $data ?? [], null);
        $this->setIfExists('item_description', $data ?? [], null);
        $this->setIfExists('debit', $data ?? [], null);
        $this->setIfExists('debit_currency', $data ?? [], null);
        $this->setIfExists('credit', $data ?? [], null);
        $this->setIfExists('credit_currency', $data ?? [], null);
        $this->setIfExists('project', $data ?? [], null);
        $this->setIfExists('transaction_information', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('stock_point_code', $data ?? [], null);
        $this->setIfExists('stock_location_code', $data ?? [], null);
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

        if (!is_null($this->container['account']) && ($this->container['account'] > 9999)) {
            $invalidProperties[] = "invalid value for 'account', must be smaller than or equal to 9999.";
        }

        if (!is_null($this->container['account']) && ($this->container['account'] < 1000)) {
            $invalidProperties[] = "invalid value for 'account', must be bigger than or equal to 1000.";
        }

        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $this->container['code'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['transaction_information']) && (mb_strlen($this->container['transaction_information']) > 100)) {
            $invalidProperties[] = "invalid value for 'transaction_information', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['transaction_information']) && (mb_strlen($this->container['transaction_information']) < 0)) {
            $invalidProperties[] = "invalid value for 'transaction_information', the character length must be bigger than or equal to 0.";
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
     * Gets account
     *
     * @return int|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param int|null $account account
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }

        if (($account > 9999)) {
            throw new \InvalidArgumentException('invalid value for $account when calling SupplierInvoiceSupplierInvoiceRow., must be smaller than or equal to 9999.');
        }
        if (($account < 1000)) {
            throw new \InvalidArgumentException('invalid value for $account when calling SupplierInvoiceSupplierInvoiceRow., must be bigger than or equal to 1000.');
        }

        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets article_number
     *
     * @return string|null
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     *
     * @param string|null $article_number article_number
     *
     * @return self
     */
    public function setArticleNumber($article_number)
    {
        if (is_null($article_number)) {
            throw new \InvalidArgumentException('non-nullable article_number cannot be null');
        }
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

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
     * Gets account_description
     *
     * @return string|null
     */
    public function getAccountDescription()
    {
        return $this->container['account_description'];
    }

    /**
     * Sets account_description
     *
     * @param string|null $account_description account_description
     *
     * @return self
     */
    public function setAccountDescription($account_description)
    {
        if (is_null($account_description)) {
            throw new \InvalidArgumentException('non-nullable account_description cannot be null');
        }
        $this->container['account_description'] = $account_description;

        return $this;
    }

    /**
     * Gets item_description
     *
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     *
     * @param string|null $item_description item_description
     *
     * @return self
     */
    public function setItemDescription($item_description)
    {
        if (is_null($item_description)) {
            throw new \InvalidArgumentException('non-nullable item_description cannot be null');
        }
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets debit
     *
     * @return float|null
     */
    public function getDebit()
    {
        return $this->container['debit'];
    }

    /**
     * Sets debit
     *
     * @param float|null $debit debit
     *
     * @return self
     */
    public function setDebit($debit)
    {
        if (is_null($debit)) {
            throw new \InvalidArgumentException('non-nullable debit cannot be null');
        }
        $this->container['debit'] = $debit;

        return $this;
    }

    /**
     * Gets debit_currency
     *
     * @return float|null
     */
    public function getDebitCurrency()
    {
        return $this->container['debit_currency'];
    }

    /**
     * Sets debit_currency
     *
     * @param float|null $debit_currency debit_currency
     *
     * @return self
     */
    public function setDebitCurrency($debit_currency)
    {
        if (is_null($debit_currency)) {
            throw new \InvalidArgumentException('non-nullable debit_currency cannot be null');
        }
        $this->container['debit_currency'] = $debit_currency;

        return $this;
    }

    /**
     * Gets credit
     *
     * @return float|null
     */
    public function getCredit()
    {
        return $this->container['credit'];
    }

    /**
     * Sets credit
     *
     * @param float|null $credit credit
     *
     * @return self
     */
    public function setCredit($credit)
    {
        if (is_null($credit)) {
            throw new \InvalidArgumentException('non-nullable credit cannot be null');
        }
        $this->container['credit'] = $credit;

        return $this;
    }

    /**
     * Gets credit_currency
     *
     * @return float|null
     */
    public function getCreditCurrency()
    {
        return $this->container['credit_currency'];
    }

    /**
     * Sets credit_currency
     *
     * @param float|null $credit_currency credit_currency
     *
     * @return self
     */
    public function setCreditCurrency($credit_currency)
    {
        if (is_null($credit_currency)) {
            throw new \InvalidArgumentException('non-nullable credit_currency cannot be null');
        }
        $this->container['credit_currency'] = $credit_currency;

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
     * Gets transaction_information
     *
     * @return string|null
     */
    public function getTransactionInformation()
    {
        return $this->container['transaction_information'];
    }

    /**
     * Sets transaction_information
     *
     * @param string|null $transaction_information transaction_information
     *
     * @return self
     */
    public function setTransactionInformation($transaction_information)
    {
        if (is_null($transaction_information)) {
            throw new \InvalidArgumentException('non-nullable transaction_information cannot be null');
        }
        if ((mb_strlen($transaction_information) > 100)) {
            throw new \InvalidArgumentException('invalid length for $transaction_information when calling SupplierInvoiceSupplierInvoiceRow., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($transaction_information) < 0)) {
            throw new \InvalidArgumentException('invalid length for $transaction_information when calling SupplierInvoiceSupplierInvoiceRow., must be bigger than or equal to 0.');
        }

        $this->container['transaction_information'] = $transaction_information;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total total
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
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        $this->container['unit'] = $unit;

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
     * Gets stock_location_code
     *
     * @return string|null
     */
    public function getStockLocationCode()
    {
        return $this->container['stock_location_code'];
    }

    /**
     * Sets stock_location_code
     *
     * @param string|null $stock_location_code stock_location_code
     *
     * @return self
     */
    public function setStockLocationCode($stock_location_code)
    {
        if (is_null($stock_location_code)) {
            throw new \InvalidArgumentException('non-nullable stock_location_code cannot be null');
        }
        $this->container['stock_location_code'] = $stock_location_code;

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


