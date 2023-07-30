<?php
/**
 * CustomerListItem
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
 * CustomerListItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_url' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'customer_number' => 'string',
        'email' => 'string',
        'name' => 'string',
        'organisation_number' => 'string',
        'phone' => 'string',
        'zip_code' => 'string'
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
        'address1' => null,
        'address2' => null,
        'city' => null,
        'customer_number' => null,
        'email' => null,
        'name' => null,
        'organisation_number' => null,
        'phone' => null,
        'zip_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_url' => false,
		'address1' => false,
		'address2' => false,
		'city' => false,
		'customer_number' => false,
		'email' => false,
		'name' => false,
		'organisation_number' => false,
		'phone' => false,
		'zip_code' => false
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
        'address1' => 'Address1',
        'address2' => 'Address2',
        'city' => 'City',
        'customer_number' => 'CustomerNumber',
        'email' => 'Email',
        'name' => 'Name',
        'organisation_number' => 'OrganisationNumber',
        'phone' => 'Phone',
        'zip_code' => 'ZipCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_url' => 'setAtUrl',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'customer_number' => 'setCustomerNumber',
        'email' => 'setEmail',
        'name' => 'setName',
        'organisation_number' => 'setOrganisationNumber',
        'phone' => 'setPhone',
        'zip_code' => 'setZipCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_url' => 'getAtUrl',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'customer_number' => 'getCustomerNumber',
        'email' => 'getEmail',
        'name' => 'getName',
        'organisation_number' => 'getOrganisationNumber',
        'phone' => 'getPhone',
        'zip_code' => 'getZipCode'
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
        $this->setIfExists('address1', $data ?? [], null);
        $this->setIfExists('address2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('customer_number', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('organisation_number', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('zip_code', $data ?? [], null);
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

        if (!is_null($this->container['address1']) && (mb_strlen($this->container['address1']) > 1024)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['address1']) && (mb_strlen($this->container['address1']) < 0)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) > 1024)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) < 0)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 1024)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['customer_number']) && (mb_strlen($this->container['customer_number']) > 1024)) {
            $invalidProperties[] = "invalid value for 'customer_number', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['customer_number']) && (mb_strlen($this->container['customer_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'customer_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 1024)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 1024)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['organisation_number']) && (mb_strlen($this->container['organisation_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'organisation_number', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['organisation_number']) && (mb_strlen($this->container['organisation_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'organisation_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 1024)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 0)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['zip_code']) && (mb_strlen($this->container['zip_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'zip_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['zip_code']) && (mb_strlen($this->container['zip_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'zip_code', the character length must be bigger than or equal to 0.";
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
     * Gets address1
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string|null $address1 address1
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        if (is_null($address1)) {
            throw new \InvalidArgumentException('non-nullable address1 cannot be null');
        }
        if ((mb_strlen($address1) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling CustomerListItem., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($address1) < 0)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling CustomerListItem., must be bigger than or equal to 0.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 address2
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        if (is_null($address2)) {
            throw new \InvalidArgumentException('non-nullable address2 cannot be null');
        }
        if ((mb_strlen($address2) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling CustomerListItem., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($address2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling CustomerListItem., must be bigger than or equal to 0.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $city when calling CustomerListItem., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling CustomerListItem., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string|null
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string|null $customer_number customer_number
     *
     * @return self
     */
    public function setCustomerNumber($customer_number)
    {
        if (is_null($customer_number)) {
            throw new \InvalidArgumentException('non-nullable customer_number cannot be null');
        }
        if ((mb_strlen($customer_number) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $customer_number when calling CustomerListItem., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($customer_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $customer_number when calling CustomerListItem., must be bigger than or equal to 0.');
        }

        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $email when calling CustomerListItem., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling CustomerListItem., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CustomerListItem., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CustomerListItem., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets organisation_number
     *
     * @return string|null
     */
    public function getOrganisationNumber()
    {
        return $this->container['organisation_number'];
    }

    /**
     * Sets organisation_number
     *
     * @param string|null $organisation_number organisation_number
     *
     * @return self
     */
    public function setOrganisationNumber($organisation_number)
    {
        if (is_null($organisation_number)) {
            throw new \InvalidArgumentException('non-nullable organisation_number cannot be null');
        }
        if ((mb_strlen($organisation_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $organisation_number when calling CustomerListItem., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($organisation_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $organisation_number when calling CustomerListItem., must be bigger than or equal to 0.');
        }

        $this->container['organisation_number'] = $organisation_number;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        if ((mb_strlen($phone) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling CustomerListItem., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($phone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling CustomerListItem., must be bigger than or equal to 0.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code zip_code
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        if (is_null($zip_code)) {
            throw new \InvalidArgumentException('non-nullable zip_code cannot be null');
        }
        if ((mb_strlen($zip_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $zip_code when calling CustomerListItem., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($zip_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $zip_code when calling CustomerListItem., must be bigger than or equal to 0.');
        }

        $this->container['zip_code'] = $zip_code;

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


