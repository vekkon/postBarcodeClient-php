<?php
/**
 * ReturnInfoType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Vekkon
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Vekkon\PostBarcodeClient\Model;

use \ArrayAccess;
use \Vekkon\PostBarcodeClient\ObjectSerializer;

/**
 * ReturnInfoType Class Doc Comment
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Vekkon
 */
class ReturnInfoType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'ReturnInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $types = [
        'return_note' => 'bool',
        'instruction_for_returns' => 'bool',
        'return_service' => 'string',
        'customer_id_return_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $formats = [
        'return_note' => null,
        'instruction_for_returns' => null,
        'return_service' => null,
        'customer_id_return_address' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function types()
    {
        return self::$types;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function formats()
    {
        return self::$formats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'return_note' => 'returnNote',
        'instruction_for_returns' => 'instructionForReturns',
        'return_service' => 'returnService',
        'customer_id_return_address' => 'customerIDReturnAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'return_note' => 'setReturnNote',
        'instruction_for_returns' => 'setInstructionForReturns',
        'return_service' => 'setReturnService',
        'customer_id_return_address' => 'setCustomerIdReturnAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'return_note' => 'getReturnNote',
        'instruction_for_returns' => 'getInstructionForReturns',
        'return_service' => 'getReturnService',
        'customer_id_return_address' => 'getCustomerIdReturnAddress'
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
        return self::$modelName;
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
        $this->container['return_note'] = isset($data['return_note']) ? $data['return_note'] : false;
        $this->container['instruction_for_returns'] = isset($data['instruction_for_returns']) ? $data['instruction_for_returns'] : false;
        $this->container['return_service'] = isset($data['return_service']) ? $data['return_service'] : null;
        $this->container['customer_id_return_address'] = isset($data['customer_id_return_address']) ? $data['customer_id_return_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['return_note'] === null) {
            $invalidProperties[] = "'return_note' can't be null";
        }
        if ($this->container['instruction_for_returns'] === null) {
            $invalidProperties[] = "'instruction_for_returns' can't be null";
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
     * Gets return_note
     *
     * @return bool
     */
    public function getReturnNote()
    {
        return $this->container['return_note'];
    }

    /**
     * Sets return_note
     *
     * @param bool $return_note return_note
     *
     * @return $this
     */
    public function setReturnNote($return_note)
    {
        $this->container['return_note'] = $return_note;

        return $this;
    }

    /**
     * Gets instruction_for_returns
     *
     * @return bool
     */
    public function getInstructionForReturns()
    {
        return $this->container['instruction_for_returns'];
    }

    /**
     * Sets instruction_for_returns
     *
     * @param bool $instruction_for_returns instruction_for_returns
     *
     * @return $this
     */
    public function setInstructionForReturns($instruction_for_returns)
    {
        $this->container['instruction_for_returns'] = $instruction_for_returns;

        return $this;
    }

    /**
     * Gets return_service
     *
     * @return string
     */
    public function getReturnService()
    {
        return $this->container['return_service'];
    }

    /**
     * Sets return_service
     *
     * @param string $return_service return_service
     *
     * @return $this
     */
    public function setReturnService($return_service)
    {
        $this->container['return_service'] = $return_service;

        return $this;
    }

    /**
     * Gets customer_id_return_address
     *
     * @return string
     */
    public function getCustomerIdReturnAddress()
    {
        return $this->container['customer_id_return_address'];
    }

    /**
     * Sets customer_id_return_address
     *
     * @param string $customer_id_return_address customer_id_return_address
     *
     * @return $this
     */
    public function setCustomerIdReturnAddress($customer_id_return_address)
    {
        $this->container['customer_id_return_address'] = $customer_id_return_address;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
