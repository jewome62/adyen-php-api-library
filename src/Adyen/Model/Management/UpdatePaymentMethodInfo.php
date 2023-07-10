<?php

/**
 * Management API
 *
 * The version of the OpenAPI document: 1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Management;

use \ArrayAccess;
use Adyen\Model\Management\ObjectSerializer;

/**
 * UpdatePaymentMethodInfo Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdatePaymentMethodInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdatePaymentMethodInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'countries' => 'string[]',
        'currencies' => 'string[]',
        'customRoutingFlags' => 'string[]',
        'enabled' => 'bool',
        'shopperStatement' => '\Adyen\Model\Management\ShopperStatement',
        'storeIds' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'countries' => null,
        'currencies' => null,
        'customRoutingFlags' => null,
        'enabled' => null,
        'shopperStatement' => null,
        'storeIds' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'countries' => false,
        'currencies' => false,
        'customRoutingFlags' => false,
        'enabled' => false,
        'shopperStatement' => false,
        'storeIds' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'countries' => 'countries',
        'currencies' => 'currencies',
        'customRoutingFlags' => 'customRoutingFlags',
        'enabled' => 'enabled',
        'shopperStatement' => 'shopperStatement',
        'storeIds' => 'storeIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'countries' => 'setCountries',
        'currencies' => 'setCurrencies',
        'customRoutingFlags' => 'setCustomRoutingFlags',
        'enabled' => 'setEnabled',
        'shopperStatement' => 'setShopperStatement',
        'storeIds' => 'setStoreIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'countries' => 'getCountries',
        'currencies' => 'getCurrencies',
        'customRoutingFlags' => 'getCustomRoutingFlags',
        'enabled' => 'getEnabled',
        'shopperStatement' => 'getShopperStatement',
        'storeIds' => 'getStoreIds'
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
        $this->setIfExists('countries', $data ?? [], null);
        $this->setIfExists('currencies', $data ?? [], null);
        $this->setIfExists('customRoutingFlags', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('shopperStatement', $data ?? [], null);
        $this->setIfExists('storeIds', $data ?? [], null);
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
     * Gets countries
     *
     * @return string[]|null
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param string[]|null $countries The list of countries where a payment method is available. By default, all countries supported by the payment method.
     *
     * @return self
     */
    public function setCountries($countries)
    {
        if (is_null($countries)) {
            throw new \InvalidArgumentException('non-nullable countries cannot be null');
        }
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets currencies
     *
     * @return string[]|null
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     *
     * @param string[]|null $currencies The list of currencies that a payment method supports. By default, all currencies supported by the payment method.
     *
     * @return self
     */
    public function setCurrencies($currencies)
    {
        if (is_null($currencies)) {
            throw new \InvalidArgumentException('non-nullable currencies cannot be null');
        }
        $this->container['currencies'] = $currencies;

        return $this;
    }

    /**
     * Gets customRoutingFlags
     *
     * @return string[]|null
     */
    public function getCustomRoutingFlags()
    {
        return $this->container['customRoutingFlags'];
    }

    /**
     * Sets customRoutingFlags
     *
     * @param string[]|null $customRoutingFlags Custom routing flags for acquirer routing.
     *
     * @return self
     */
    public function setCustomRoutingFlags($customRoutingFlags)
    {
        if (is_null($customRoutingFlags)) {
            throw new \InvalidArgumentException('non-nullable customRoutingFlags cannot be null');
        }
        $this->container['customRoutingFlags'] = $customRoutingFlags;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Indicates whether the payment method is enabled (**true**) or disabled (**false**).
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets shopperStatement
     *
     * @return \Adyen\Model\Management\ShopperStatement|null
     */
    public function getShopperStatement()
    {
        return $this->container['shopperStatement'];
    }

    /**
     * Sets shopperStatement
     *
     * @param \Adyen\Model\Management\ShopperStatement|null $shopperStatement shopperStatement
     *
     * @return self
     */
    public function setShopperStatement($shopperStatement)
    {
        if (is_null($shopperStatement)) {
            throw new \InvalidArgumentException('non-nullable shopperStatement cannot be null');
        }
        $this->container['shopperStatement'] = $shopperStatement;

        return $this;
    }

    /**
     * Gets storeIds
     *
     * @return string[]|null
     */
    public function getStoreIds()
    {
        return $this->container['storeIds'];
    }

    /**
     * Sets storeIds
     *
     * @param string[]|null $storeIds The list of stores for this payment method
     *
     * @return self
     */
    public function setStoreIds($storeIds)
    {
        if (is_null($storeIds)) {
            throw new \InvalidArgumentException('non-nullable storeIds cannot be null');
        }
        $this->container['storeIds'] = $storeIds;

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
}