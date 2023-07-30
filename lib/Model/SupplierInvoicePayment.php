<?php
/**
 * SupplierInvoicePayment
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
 * SupplierInvoicePayment Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupplierInvoicePayment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SupplierInvoicePayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_url' => 'string',
        'amount' => 'float',
        'amount_currency' => 'float',
        'booked' => 'bool',
        'currency' => 'string',
        'currency_rate' => 'float',
        'currency_unit' => 'float',
        'information' => 'string',
        'invoice_number' => 'string',
        'invoice_due_date' => '\DateTime',
        'invoice_ocr' => 'string',
        'invoice_supplier_name' => 'string',
        'invoice_supplier_number' => 'string',
        'invoice_total' => 'string',
        'mode_of_payment' => 'string',
        'number' => 'int',
        'payment_date' => '\DateTime',
        'source' => 'string',
        'voucher_number' => 'int',
        'voucher_series' => 'string',
        'voucher_year' => 'int',
        'write_offs' => '\OpenAPI\Client\Model\SupplierInvoicePaymentWriteOff[]'
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
        'amount' => 'double',
        'amount_currency' => 'double',
        'booked' => null,
        'currency' => null,
        'currency_rate' => 'double',
        'currency_unit' => 'double',
        'information' => null,
        'invoice_number' => null,
        'invoice_due_date' => 'date',
        'invoice_ocr' => null,
        'invoice_supplier_name' => null,
        'invoice_supplier_number' => null,
        'invoice_total' => null,
        'mode_of_payment' => null,
        'number' => 'int32',
        'payment_date' => 'date',
        'source' => null,
        'voucher_number' => 'int32',
        'voucher_series' => null,
        'voucher_year' => 'int32',
        'write_offs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_url' => false,
		'amount' => false,
		'amount_currency' => false,
		'booked' => false,
		'currency' => false,
		'currency_rate' => false,
		'currency_unit' => false,
		'information' => false,
		'invoice_number' => false,
		'invoice_due_date' => false,
		'invoice_ocr' => false,
		'invoice_supplier_name' => false,
		'invoice_supplier_number' => false,
		'invoice_total' => false,
		'mode_of_payment' => false,
		'number' => false,
		'payment_date' => false,
		'source' => false,
		'voucher_number' => false,
		'voucher_series' => false,
		'voucher_year' => false,
		'write_offs' => false
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
        'amount' => 'Amount',
        'amount_currency' => 'AmountCurrency',
        'booked' => 'Booked',
        'currency' => 'Currency',
        'currency_rate' => 'CurrencyRate',
        'currency_unit' => 'CurrencyUnit',
        'information' => 'Information',
        'invoice_number' => 'InvoiceNumber',
        'invoice_due_date' => 'InvoiceDueDate',
        'invoice_ocr' => 'InvoiceOCR',
        'invoice_supplier_name' => 'InvoiceSupplierName',
        'invoice_supplier_number' => 'InvoiceSupplierNumber',
        'invoice_total' => 'InvoiceTotal',
        'mode_of_payment' => 'ModeOfPayment',
        'number' => 'Number',
        'payment_date' => 'PaymentDate',
        'source' => 'Source',
        'voucher_number' => 'VoucherNumber',
        'voucher_series' => 'VoucherSeries',
        'voucher_year' => 'VoucherYear',
        'write_offs' => 'WriteOffs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_url' => 'setAtUrl',
        'amount' => 'setAmount',
        'amount_currency' => 'setAmountCurrency',
        'booked' => 'setBooked',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
        'currency_unit' => 'setCurrencyUnit',
        'information' => 'setInformation',
        'invoice_number' => 'setInvoiceNumber',
        'invoice_due_date' => 'setInvoiceDueDate',
        'invoice_ocr' => 'setInvoiceOcr',
        'invoice_supplier_name' => 'setInvoiceSupplierName',
        'invoice_supplier_number' => 'setInvoiceSupplierNumber',
        'invoice_total' => 'setInvoiceTotal',
        'mode_of_payment' => 'setModeOfPayment',
        'number' => 'setNumber',
        'payment_date' => 'setPaymentDate',
        'source' => 'setSource',
        'voucher_number' => 'setVoucherNumber',
        'voucher_series' => 'setVoucherSeries',
        'voucher_year' => 'setVoucherYear',
        'write_offs' => 'setWriteOffs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_url' => 'getAtUrl',
        'amount' => 'getAmount',
        'amount_currency' => 'getAmountCurrency',
        'booked' => 'getBooked',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
        'currency_unit' => 'getCurrencyUnit',
        'information' => 'getInformation',
        'invoice_number' => 'getInvoiceNumber',
        'invoice_due_date' => 'getInvoiceDueDate',
        'invoice_ocr' => 'getInvoiceOcr',
        'invoice_supplier_name' => 'getInvoiceSupplierName',
        'invoice_supplier_number' => 'getInvoiceSupplierNumber',
        'invoice_total' => 'getInvoiceTotal',
        'mode_of_payment' => 'getModeOfPayment',
        'number' => 'getNumber',
        'payment_date' => 'getPaymentDate',
        'source' => 'getSource',
        'voucher_number' => 'getVoucherNumber',
        'voucher_series' => 'getVoucherSeries',
        'voucher_year' => 'getVoucherYear',
        'write_offs' => 'getWriteOffs'
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

    public const SOURCE_MANUAL = 'manual';
    public const SOURCE_DIRECT = 'direct';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_MANUAL,
            self::SOURCE_DIRECT,
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('amount_currency', $data ?? [], null);
        $this->setIfExists('booked', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('currency_rate', $data ?? [], null);
        $this->setIfExists('currency_unit', $data ?? [], null);
        $this->setIfExists('information', $data ?? [], null);
        $this->setIfExists('invoice_number', $data ?? [], null);
        $this->setIfExists('invoice_due_date', $data ?? [], null);
        $this->setIfExists('invoice_ocr', $data ?? [], null);
        $this->setIfExists('invoice_supplier_name', $data ?? [], null);
        $this->setIfExists('invoice_supplier_number', $data ?? [], null);
        $this->setIfExists('invoice_total', $data ?? [], null);
        $this->setIfExists('mode_of_payment', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('payment_date', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('voucher_number', $data ?? [], null);
        $this->setIfExists('voucher_series', $data ?? [], null);
        $this->setIfExists('voucher_year', $data ?? [], null);
        $this->setIfExists('write_offs', $data ?? [], null);
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

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['invoice_number'] === null) {
            $invalidProperties[] = "'invoice_number' can't be null";
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source', must be one of '%s'",
                $this->container['source'],
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
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
     * Gets amount_currency
     *
     * @return float|null
     */
    public function getAmountCurrency()
    {
        return $this->container['amount_currency'];
    }

    /**
     * Sets amount_currency
     *
     * @param float|null $amount_currency amount_currency
     *
     * @return self
     */
    public function setAmountCurrency($amount_currency)
    {
        if (is_null($amount_currency)) {
            throw new \InvalidArgumentException('non-nullable amount_currency cannot be null');
        }
        $this->container['amount_currency'] = $amount_currency;

        return $this;
    }

    /**
     * Gets booked
     *
     * @return bool|null
     */
    public function getBooked()
    {
        return $this->container['booked'];
    }

    /**
     * Sets booked
     *
     * @param bool|null $booked booked
     *
     * @return self
     */
    public function setBooked($booked)
    {
        if (is_null($booked)) {
            throw new \InvalidArgumentException('non-nullable booked cannot be null');
        }
        $this->container['booked'] = $booked;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling SupplierInvoicePayment., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling SupplierInvoicePayment., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currency_rate
     *
     * @return float|null
     */
    public function getCurrencyRate()
    {
        return $this->container['currency_rate'];
    }

    /**
     * Sets currency_rate
     *
     * @param float|null $currency_rate currency_rate
     *
     * @return self
     */
    public function setCurrencyRate($currency_rate)
    {
        if (is_null($currency_rate)) {
            throw new \InvalidArgumentException('non-nullable currency_rate cannot be null');
        }
        $this->container['currency_rate'] = $currency_rate;

        return $this;
    }

    /**
     * Gets currency_unit
     *
     * @return float|null
     */
    public function getCurrencyUnit()
    {
        return $this->container['currency_unit'];
    }

    /**
     * Sets currency_unit
     *
     * @param float|null $currency_unit currency_unit
     *
     * @return self
     */
    public function setCurrencyUnit($currency_unit)
    {
        if (is_null($currency_unit)) {
            throw new \InvalidArgumentException('non-nullable currency_unit cannot be null');
        }
        $this->container['currency_unit'] = $currency_unit;

        return $this;
    }

    /**
     * Gets information
     *
     * @return string|null
     */
    public function getInformation()
    {
        return $this->container['information'];
    }

    /**
     * Sets information
     *
     * @param string|null $information information
     *
     * @return self
     */
    public function setInformation($information)
    {
        if (is_null($information)) {
            throw new \InvalidArgumentException('non-nullable information cannot be null');
        }
        $this->container['information'] = $information;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number invoice_number
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number)
    {
        if (is_null($invoice_number)) {
            throw new \InvalidArgumentException('non-nullable invoice_number cannot be null');
        }
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_due_date
     *
     * @return \DateTime|null
     */
    public function getInvoiceDueDate()
    {
        return $this->container['invoice_due_date'];
    }

    /**
     * Sets invoice_due_date
     *
     * @param \DateTime|null $invoice_due_date invoice_due_date
     *
     * @return self
     */
    public function setInvoiceDueDate($invoice_due_date)
    {
        if (is_null($invoice_due_date)) {
            throw new \InvalidArgumentException('non-nullable invoice_due_date cannot be null');
        }
        $this->container['invoice_due_date'] = $invoice_due_date;

        return $this;
    }

    /**
     * Gets invoice_ocr
     *
     * @return string|null
     */
    public function getInvoiceOcr()
    {
        return $this->container['invoice_ocr'];
    }

    /**
     * Sets invoice_ocr
     *
     * @param string|null $invoice_ocr invoice_ocr
     *
     * @return self
     */
    public function setInvoiceOcr($invoice_ocr)
    {
        if (is_null($invoice_ocr)) {
            throw new \InvalidArgumentException('non-nullable invoice_ocr cannot be null');
        }
        $this->container['invoice_ocr'] = $invoice_ocr;

        return $this;
    }

    /**
     * Gets invoice_supplier_name
     *
     * @return string|null
     */
    public function getInvoiceSupplierName()
    {
        return $this->container['invoice_supplier_name'];
    }

    /**
     * Sets invoice_supplier_name
     *
     * @param string|null $invoice_supplier_name invoice_supplier_name
     *
     * @return self
     */
    public function setInvoiceSupplierName($invoice_supplier_name)
    {
        if (is_null($invoice_supplier_name)) {
            throw new \InvalidArgumentException('non-nullable invoice_supplier_name cannot be null');
        }
        $this->container['invoice_supplier_name'] = $invoice_supplier_name;

        return $this;
    }

    /**
     * Gets invoice_supplier_number
     *
     * @return string|null
     */
    public function getInvoiceSupplierNumber()
    {
        return $this->container['invoice_supplier_number'];
    }

    /**
     * Sets invoice_supplier_number
     *
     * @param string|null $invoice_supplier_number invoice_supplier_number
     *
     * @return self
     */
    public function setInvoiceSupplierNumber($invoice_supplier_number)
    {
        if (is_null($invoice_supplier_number)) {
            throw new \InvalidArgumentException('non-nullable invoice_supplier_number cannot be null');
        }
        $this->container['invoice_supplier_number'] = $invoice_supplier_number;

        return $this;
    }

    /**
     * Gets invoice_total
     *
     * @return string|null
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total
     *
     * @param string|null $invoice_total invoice_total
     *
     * @return self
     */
    public function setInvoiceTotal($invoice_total)
    {
        if (is_null($invoice_total)) {
            throw new \InvalidArgumentException('non-nullable invoice_total cannot be null');
        }
        $this->container['invoice_total'] = $invoice_total;

        return $this;
    }

    /**
     * Gets mode_of_payment
     *
     * @return string|null
     */
    public function getModeOfPayment()
    {
        return $this->container['mode_of_payment'];
    }

    /**
     * Sets mode_of_payment
     *
     * @param string|null $mode_of_payment mode_of_payment
     *
     * @return self
     */
    public function setModeOfPayment($mode_of_payment)
    {
        if (is_null($mode_of_payment)) {
            throw new \InvalidArgumentException('non-nullable mode_of_payment cannot be null');
        }
        $this->container['mode_of_payment'] = $mode_of_payment;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number number
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
     * Gets payment_date
     *
     * @return \DateTime|null
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime|null $payment_date payment_date
     *
     * @return self
     */
    public function setPaymentDate($payment_date)
    {
        if (is_null($payment_date)) {
            throw new \InvalidArgumentException('non-nullable payment_date cannot be null');
        }
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source', must be one of '%s'",
                    $source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets voucher_number
     *
     * @return int|null
     */
    public function getVoucherNumber()
    {
        return $this->container['voucher_number'];
    }

    /**
     * Sets voucher_number
     *
     * @param int|null $voucher_number voucher_number
     *
     * @return self
     */
    public function setVoucherNumber($voucher_number)
    {
        if (is_null($voucher_number)) {
            throw new \InvalidArgumentException('non-nullable voucher_number cannot be null');
        }
        $this->container['voucher_number'] = $voucher_number;

        return $this;
    }

    /**
     * Gets voucher_series
     *
     * @return string|null
     */
    public function getVoucherSeries()
    {
        return $this->container['voucher_series'];
    }

    /**
     * Sets voucher_series
     *
     * @param string|null $voucher_series voucher_series
     *
     * @return self
     */
    public function setVoucherSeries($voucher_series)
    {
        if (is_null($voucher_series)) {
            throw new \InvalidArgumentException('non-nullable voucher_series cannot be null');
        }
        $this->container['voucher_series'] = $voucher_series;

        return $this;
    }

    /**
     * Gets voucher_year
     *
     * @return int|null
     */
    public function getVoucherYear()
    {
        return $this->container['voucher_year'];
    }

    /**
     * Sets voucher_year
     *
     * @param int|null $voucher_year voucher_year
     *
     * @return self
     */
    public function setVoucherYear($voucher_year)
    {
        if (is_null($voucher_year)) {
            throw new \InvalidArgumentException('non-nullable voucher_year cannot be null');
        }
        $this->container['voucher_year'] = $voucher_year;

        return $this;
    }

    /**
     * Gets write_offs
     *
     * @return \OpenAPI\Client\Model\SupplierInvoicePaymentWriteOff[]|null
     */
    public function getWriteOffs()
    {
        return $this->container['write_offs'];
    }

    /**
     * Sets write_offs
     *
     * @param \OpenAPI\Client\Model\SupplierInvoicePaymentWriteOff[]|null $write_offs write_offs
     *
     * @return self
     */
    public function setWriteOffs($write_offs)
    {
        if (is_null($write_offs)) {
            throw new \InvalidArgumentException('non-nullable write_offs cannot be null');
        }
        $this->container['write_offs'] = $write_offs;

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


