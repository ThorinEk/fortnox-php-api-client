<?php
/**
 * SalaryTransaction
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
 * SalaryTransaction Class Doc Comment
 *
 * @category Class
 * @package  FortnoxApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SalaryTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SalaryTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'string',
        'salary_code' => 'string',
        'salary_row' => 'int',
        'date' => '\DateTime',
        'number' => 'string',
        'amount' => 'string',
        'total' => 'string',
        'expense' => 'string',
        'vat' => 'string',
        'text_row' => 'string',
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
        'employee_id' => null,
        'salary_code' => null,
        'salary_row' => 'int32',
        'date' => 'date',
        'number' => null,
        'amount' => null,
        'total' => null,
        'expense' => null,
        'vat' => null,
        'text_row' => null,
        'cost_center' => null,
        'project' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'employee_id' => false,
		'salary_code' => false,
		'salary_row' => false,
		'date' => false,
		'number' => false,
		'amount' => false,
		'total' => false,
		'expense' => false,
		'vat' => false,
		'text_row' => false,
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
        'employee_id' => 'EmployeeId',
        'salary_code' => 'SalaryCode',
        'salary_row' => 'SalaryRow',
        'date' => 'Date',
        'number' => 'Number',
        'amount' => 'Amount',
        'total' => 'Total',
        'expense' => 'Expense',
        'vat' => 'VAT',
        'text_row' => 'TextRow',
        'cost_center' => 'CostCenter',
        'project' => 'Project'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'salary_code' => 'setSalaryCode',
        'salary_row' => 'setSalaryRow',
        'date' => 'setDate',
        'number' => 'setNumber',
        'amount' => 'setAmount',
        'total' => 'setTotal',
        'expense' => 'setExpense',
        'vat' => 'setVat',
        'text_row' => 'setTextRow',
        'cost_center' => 'setCostCenter',
        'project' => 'setProject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'salary_code' => 'getSalaryCode',
        'salary_row' => 'getSalaryRow',
        'date' => 'getDate',
        'number' => 'getNumber',
        'amount' => 'getAmount',
        'total' => 'getTotal',
        'expense' => 'getExpense',
        'vat' => 'getVat',
        'text_row' => 'getTextRow',
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
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('salary_code', $data ?? [], null);
        $this->setIfExists('salary_row', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('expense', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('text_row', $data ?? [], null);
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
        if ($this->container['salary_code'] === null) {
            $invalidProperties[] = "'salary_code' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if (!is_null($this->container['expense']) && (mb_strlen($this->container['expense']) > 6)) {
            $invalidProperties[] = "invalid value for 'expense', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['expense']) && (mb_strlen($this->container['expense']) < 0)) {
            $invalidProperties[] = "invalid value for 'expense', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['text_row']) && (mb_strlen($this->container['text_row']) > 40)) {
            $invalidProperties[] = "invalid value for 'text_row', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['text_row']) && (mb_strlen($this->container['text_row']) < 0)) {
            $invalidProperties[] = "invalid value for 'text_row', the character length must be bigger than or equal to 0.";
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
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets salary_code
     *
     * @return string
     */
    public function getSalaryCode()
    {
        return $this->container['salary_code'];
    }

    /**
     * Sets salary_code
     *
     * @param string $salary_code salary_code
     *
     * @return self
     */
    public function setSalaryCode($salary_code)
    {
        if (is_null($salary_code)) {
            throw new \InvalidArgumentException('non-nullable salary_code cannot be null');
        }
        $this->container['salary_code'] = $salary_code;

        return $this;
    }

    /**
     * Gets salary_row
     *
     * @return int|null
     */
    public function getSalaryRow()
    {
        return $this->container['salary_row'];
    }

    /**
     * Sets salary_row
     *
     * @param int|null $salary_row salary_row
     *
     * @return self
     */
    public function setSalaryRow($salary_row)
    {
        if (is_null($salary_row)) {
            throw new \InvalidArgumentException('non-nullable salary_row cannot be null');
        }
        $this->container['salary_row'] = $salary_row;

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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string|null $total total
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
     * Gets expense
     *
     * @return string|null
     */
    public function getExpense()
    {
        return $this->container['expense'];
    }

    /**
     * Sets expense
     *
     * @param string|null $expense expense
     *
     * @return self
     */
    public function setExpense($expense)
    {
        if (is_null($expense)) {
            throw new \InvalidArgumentException('non-nullable expense cannot be null');
        }
        if ((mb_strlen($expense) > 6)) {
            throw new \InvalidArgumentException('invalid length for $expense when calling SalaryTransaction., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($expense) < 0)) {
            throw new \InvalidArgumentException('invalid length for $expense when calling SalaryTransaction., must be bigger than or equal to 0.');
        }

        $this->container['expense'] = $expense;

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
     * Gets text_row
     *
     * @return string|null
     */
    public function getTextRow()
    {
        return $this->container['text_row'];
    }

    /**
     * Sets text_row
     *
     * @param string|null $text_row text_row
     *
     * @return self
     */
    public function setTextRow($text_row)
    {
        if (is_null($text_row)) {
            throw new \InvalidArgumentException('non-nullable text_row cannot be null');
        }
        if ((mb_strlen($text_row) > 40)) {
            throw new \InvalidArgumentException('invalid length for $text_row when calling SalaryTransaction., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($text_row) < 0)) {
            throw new \InvalidArgumentException('invalid length for $text_row when calling SalaryTransaction., must be bigger than or equal to 0.');
        }

        $this->container['text_row'] = $text_row;

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


