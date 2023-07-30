<?php
/**
 * ArticleListItem
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
 * ArticleListItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ArticleListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ArticleListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_url' => 'string',
        'article_number' => 'string',
        'description' => 'string',
        'disposable_quantity' => 'string',
        'ean' => 'string',
        'housework' => 'bool',
        'purchase_price' => 'string',
        'sales_price' => 'string',
        'quantity_in_stock' => 'float',
        'reserved_quantity' => 'string',
        'stock_place' => 'string',
        'stock_value' => 'string',
        'unit' => 'string',
        'vat' => 'string',
        'webshop_article' => 'bool'
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
        'article_number' => null,
        'description' => null,
        'disposable_quantity' => null,
        'ean' => null,
        'housework' => null,
        'purchase_price' => null,
        'sales_price' => null,
        'quantity_in_stock' => 'double',
        'reserved_quantity' => null,
        'stock_place' => null,
        'stock_value' => null,
        'unit' => null,
        'vat' => null,
        'webshop_article' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_url' => false,
		'article_number' => false,
		'description' => false,
		'disposable_quantity' => false,
		'ean' => false,
		'housework' => false,
		'purchase_price' => false,
		'sales_price' => false,
		'quantity_in_stock' => false,
		'reserved_quantity' => false,
		'stock_place' => false,
		'stock_value' => false,
		'unit' => false,
		'vat' => false,
		'webshop_article' => false
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
        'article_number' => 'ArticleNumber',
        'description' => 'Description',
        'disposable_quantity' => 'DisposableQuantity',
        'ean' => 'EAN',
        'housework' => 'Housework',
        'purchase_price' => 'PurchasePrice',
        'sales_price' => 'SalesPrice',
        'quantity_in_stock' => 'QuantityInStock',
        'reserved_quantity' => 'ReservedQuantity',
        'stock_place' => 'StockPlace',
        'stock_value' => 'StockValue',
        'unit' => 'Unit',
        'vat' => 'VAT',
        'webshop_article' => 'WebshopArticle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_url' => 'setAtUrl',
        'article_number' => 'setArticleNumber',
        'description' => 'setDescription',
        'disposable_quantity' => 'setDisposableQuantity',
        'ean' => 'setEan',
        'housework' => 'setHousework',
        'purchase_price' => 'setPurchasePrice',
        'sales_price' => 'setSalesPrice',
        'quantity_in_stock' => 'setQuantityInStock',
        'reserved_quantity' => 'setReservedQuantity',
        'stock_place' => 'setStockPlace',
        'stock_value' => 'setStockValue',
        'unit' => 'setUnit',
        'vat' => 'setVat',
        'webshop_article' => 'setWebshopArticle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_url' => 'getAtUrl',
        'article_number' => 'getArticleNumber',
        'description' => 'getDescription',
        'disposable_quantity' => 'getDisposableQuantity',
        'ean' => 'getEan',
        'housework' => 'getHousework',
        'purchase_price' => 'getPurchasePrice',
        'sales_price' => 'getSalesPrice',
        'quantity_in_stock' => 'getQuantityInStock',
        'reserved_quantity' => 'getReservedQuantity',
        'stock_place' => 'getStockPlace',
        'stock_value' => 'getStockValue',
        'unit' => 'getUnit',
        'vat' => 'getVat',
        'webshop_article' => 'getWebshopArticle'
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
        $this->setIfExists('article_number', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('disposable_quantity', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('housework', $data ?? [], null);
        $this->setIfExists('purchase_price', $data ?? [], null);
        $this->setIfExists('sales_price', $data ?? [], null);
        $this->setIfExists('quantity_in_stock', $data ?? [], null);
        $this->setIfExists('reserved_quantity', $data ?? [], null);
        $this->setIfExists('stock_place', $data ?? [], null);
        $this->setIfExists('stock_value', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('webshop_article', $data ?? [], null);
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

        if (!is_null($this->container['article_number']) && (mb_strlen($this->container['article_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'article_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['article_number']) && (mb_strlen($this->container['article_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'article_number', the character length must be bigger than or equal to 0.";
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

        if (!is_null($this->container['ean']) && (mb_strlen($this->container['ean']) > 30)) {
            $invalidProperties[] = "invalid value for 'ean', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['ean']) && (mb_strlen($this->container['ean']) < 0)) {
            $invalidProperties[] = "invalid value for 'ean', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['stock_place']) && (mb_strlen($this->container['stock_place']) > 100)) {
            $invalidProperties[] = "invalid value for 'stock_place', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['stock_place']) && (mb_strlen($this->container['stock_place']) < 0)) {
            $invalidProperties[] = "invalid value for 'stock_place', the character length must be bigger than or equal to 0.";
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
        if ((mb_strlen($article_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $article_number when calling ArticleListItem., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($article_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $article_number when calling ArticleListItem., must be bigger than or equal to 0.');
        }

        $this->container['article_number'] = $article_number;

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
            throw new \InvalidArgumentException('invalid length for $description when calling ArticleListItem., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ArticleListItem., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets disposable_quantity
     *
     * @return string|null
     */
    public function getDisposableQuantity()
    {
        return $this->container['disposable_quantity'];
    }

    /**
     * Sets disposable_quantity
     *
     * @param string|null $disposable_quantity disposable_quantity
     *
     * @return self
     */
    public function setDisposableQuantity($disposable_quantity)
    {
        if (is_null($disposable_quantity)) {
            throw new \InvalidArgumentException('non-nullable disposable_quantity cannot be null');
        }
        $this->container['disposable_quantity'] = $disposable_quantity;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean ean
     *
     * @return self
     */
    public function setEan($ean)
    {
        if (is_null($ean)) {
            throw new \InvalidArgumentException('non-nullable ean cannot be null');
        }
        if ((mb_strlen($ean) > 30)) {
            throw new \InvalidArgumentException('invalid length for $ean when calling ArticleListItem., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($ean) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ean when calling ArticleListItem., must be bigger than or equal to 0.');
        }

        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets housework
     *
     * @return bool|null
     */
    public function getHousework()
    {
        return $this->container['housework'];
    }

    /**
     * Sets housework
     *
     * @param bool|null $housework housework
     *
     * @return self
     */
    public function setHousework($housework)
    {
        if (is_null($housework)) {
            throw new \InvalidArgumentException('non-nullable housework cannot be null');
        }
        $this->container['housework'] = $housework;

        return $this;
    }

    /**
     * Gets purchase_price
     *
     * @return string|null
     */
    public function getPurchasePrice()
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param string|null $purchase_price purchase_price
     *
     * @return self
     */
    public function setPurchasePrice($purchase_price)
    {
        if (is_null($purchase_price)) {
            throw new \InvalidArgumentException('non-nullable purchase_price cannot be null');
        }
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets sales_price
     *
     * @return string|null
     */
    public function getSalesPrice()
    {
        return $this->container['sales_price'];
    }

    /**
     * Sets sales_price
     *
     * @param string|null $sales_price sales_price
     *
     * @return self
     */
    public function setSalesPrice($sales_price)
    {
        if (is_null($sales_price)) {
            throw new \InvalidArgumentException('non-nullable sales_price cannot be null');
        }
        $this->container['sales_price'] = $sales_price;

        return $this;
    }

    /**
     * Gets quantity_in_stock
     *
     * @return float|null
     */
    public function getQuantityInStock()
    {
        return $this->container['quantity_in_stock'];
    }

    /**
     * Sets quantity_in_stock
     *
     * @param float|null $quantity_in_stock quantity_in_stock
     *
     * @return self
     */
    public function setQuantityInStock($quantity_in_stock)
    {
        if (is_null($quantity_in_stock)) {
            throw new \InvalidArgumentException('non-nullable quantity_in_stock cannot be null');
        }
        $this->container['quantity_in_stock'] = $quantity_in_stock;

        return $this;
    }

    /**
     * Gets reserved_quantity
     *
     * @return string|null
     */
    public function getReservedQuantity()
    {
        return $this->container['reserved_quantity'];
    }

    /**
     * Sets reserved_quantity
     *
     * @param string|null $reserved_quantity reserved_quantity
     *
     * @return self
     */
    public function setReservedQuantity($reserved_quantity)
    {
        if (is_null($reserved_quantity)) {
            throw new \InvalidArgumentException('non-nullable reserved_quantity cannot be null');
        }
        $this->container['reserved_quantity'] = $reserved_quantity;

        return $this;
    }

    /**
     * Gets stock_place
     *
     * @return string|null
     */
    public function getStockPlace()
    {
        return $this->container['stock_place'];
    }

    /**
     * Sets stock_place
     *
     * @param string|null $stock_place stock_place
     *
     * @return self
     */
    public function setStockPlace($stock_place)
    {
        if (is_null($stock_place)) {
            throw new \InvalidArgumentException('non-nullable stock_place cannot be null');
        }
        if ((mb_strlen($stock_place) > 100)) {
            throw new \InvalidArgumentException('invalid length for $stock_place when calling ArticleListItem., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($stock_place) < 0)) {
            throw new \InvalidArgumentException('invalid length for $stock_place when calling ArticleListItem., must be bigger than or equal to 0.');
        }

        $this->container['stock_place'] = $stock_place;

        return $this;
    }

    /**
     * Gets stock_value
     *
     * @return string|null
     */
    public function getStockValue()
    {
        return $this->container['stock_value'];
    }

    /**
     * Sets stock_value
     *
     * @param string|null $stock_value stock_value
     *
     * @return self
     */
    public function setStockValue($stock_value)
    {
        if (is_null($stock_value)) {
            throw new \InvalidArgumentException('non-nullable stock_value cannot be null');
        }
        $this->container['stock_value'] = $stock_value;

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
     * Gets vat
     *
     * @return string|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string|null $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        if (is_null($vat)) {
            throw new \InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets webshop_article
     *
     * @return bool|null
     */
    public function getWebshopArticle()
    {
        return $this->container['webshop_article'];
    }

    /**
     * Sets webshop_article
     *
     * @param bool|null $webshop_article webshop_article
     *
     * @return self
     */
    public function setWebshopArticle($webshop_article)
    {
        if (is_null($webshop_article)) {
            throw new \InvalidArgumentException('non-nullable webshop_article cannot be null');
        }
        $this->container['webshop_article'] = $webshop_article;

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


