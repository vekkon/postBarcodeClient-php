<?php
/**
 * ReplacementRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DIGITAL COMMERCE BARCODE API
 *
 * Digital Commerce Swiss Post web REST API for the generation of the address label. With the \"Generate address label\" request, the combinations of selected basic and additional services/delivery instructions will be tested automatically, whether or not you have already done this yourself beforehand. With the \"Generate address label\" operation, the mailing data (e.g. COD amount) is also validated. For the \"Parcels\", \"Express\" and \"Solutions\" service groups, the mailing data is automatically transferred to DataTransfer. This means that you receive the same benefits as you would under DataTransfer. API documentation https://developer.post.ch/en/digital-commerce-api
 *
 * OpenAPI spec version: 1.2
 * Contact: digitalintegration@post.ch
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.51
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
 * ReplacementRequest Class Doc Comment
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReplacementRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReplacementRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'language' => '\Vekkon\PostBarcodeClient\Model\Language',
        'customer_details' => '\Vekkon\PostBarcodeClient\Model\ReplacementCustomerDetails',
        'send_replacement' => '\Vekkon\PostBarcodeClient\Model\ExchangeLabelDefinition',
        'return_to_warehouse' => '\Vekkon\PostBarcodeClient\Model\ReplacementLabelDefinition',
        'send_repaired' => '\Vekkon\PostBarcodeClient\Model\ExchangeLabelDefinition',
        'return_replacement' => '\Vekkon\PostBarcodeClient\Model\ReplacementLabelDefinition'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'language' => null,
        'customer_details' => null,
        'send_replacement' => null,
        'return_to_warehouse' => null,
        'send_repaired' => null,
        'return_replacement' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'language' => 'language',
        'customer_details' => 'customerDetails',
        'send_replacement' => 'sendReplacement',
        'return_to_warehouse' => 'returnToWarehouse',
        'send_repaired' => 'sendRepaired',
        'return_replacement' => 'returnReplacement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language' => 'setLanguage',
        'customer_details' => 'setCustomerDetails',
        'send_replacement' => 'setSendReplacement',
        'return_to_warehouse' => 'setReturnToWarehouse',
        'send_repaired' => 'setSendRepaired',
        'return_replacement' => 'setReturnReplacement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language' => 'getLanguage',
        'customer_details' => 'getCustomerDetails',
        'send_replacement' => 'getSendReplacement',
        'return_to_warehouse' => 'getReturnToWarehouse',
        'send_repaired' => 'getSendRepaired',
        'return_replacement' => 'getReturnReplacement'
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
        return self::$swaggerModelName;
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['customer_details'] = isset($data['customer_details']) ? $data['customer_details'] : null;
        $this->container['send_replacement'] = isset($data['send_replacement']) ? $data['send_replacement'] : null;
        $this->container['return_to_warehouse'] = isset($data['return_to_warehouse']) ? $data['return_to_warehouse'] : null;
        $this->container['send_repaired'] = isset($data['send_repaired']) ? $data['send_repaired'] : null;
        $this->container['return_replacement'] = isset($data['return_replacement']) ? $data['return_replacement'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['customer_details'] === null) {
            $invalidProperties[] = "'customer_details' can't be null";
        }
        if ($this->container['send_replacement'] === null) {
            $invalidProperties[] = "'send_replacement' can't be null";
        }
        if ($this->container['return_to_warehouse'] === null) {
            $invalidProperties[] = "'return_to_warehouse' can't be null";
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
     * Gets language
     *
     * @return \Vekkon\PostBarcodeClient\Model\Language
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Vekkon\PostBarcodeClient\Model\Language $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \Vekkon\PostBarcodeClient\Model\ReplacementCustomerDetails
     */
    public function getCustomerDetails()
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \Vekkon\PostBarcodeClient\Model\ReplacementCustomerDetails $customer_details customer_details
     *
     * @return $this
     */
    public function setCustomerDetails($customer_details)
    {
        $this->container['customer_details'] = $customer_details;

        return $this;
    }

    /**
     * Gets send_replacement
     *
     * @return \Vekkon\PostBarcodeClient\Model\ExchangeLabelDefinition
     */
    public function getSendReplacement()
    {
        return $this->container['send_replacement'];
    }

    /**
     * Sets send_replacement
     *
     * @param \Vekkon\PostBarcodeClient\Model\ExchangeLabelDefinition $send_replacement send_replacement
     *
     * @return $this
     */
    public function setSendReplacement($send_replacement)
    {
        $this->container['send_replacement'] = $send_replacement;

        return $this;
    }

    /**
     * Gets return_to_warehouse
     *
     * @return \Vekkon\PostBarcodeClient\Model\ReplacementLabelDefinition
     */
    public function getReturnToWarehouse()
    {
        return $this->container['return_to_warehouse'];
    }

    /**
     * Sets return_to_warehouse
     *
     * @param \Vekkon\PostBarcodeClient\Model\ReplacementLabelDefinition $return_to_warehouse return_to_warehouse
     *
     * @return $this
     */
    public function setReturnToWarehouse($return_to_warehouse)
    {
        $this->container['return_to_warehouse'] = $return_to_warehouse;

        return $this;
    }

    /**
     * Gets send_repaired
     *
     * @return \Vekkon\PostBarcodeClient\Model\ExchangeLabelDefinition
     */
    public function getSendRepaired()
    {
        return $this->container['send_repaired'];
    }

    /**
     * Sets send_repaired
     *
     * @param \Vekkon\PostBarcodeClient\Model\ExchangeLabelDefinition $send_repaired send_repaired
     *
     * @return $this
     */
    public function setSendRepaired($send_repaired)
    {
        $this->container['send_repaired'] = $send_repaired;

        return $this;
    }

    /**
     * Gets return_replacement
     *
     * @return \Vekkon\PostBarcodeClient\Model\ReplacementLabelDefinition
     */
    public function getReturnReplacement()
    {
        return $this->container['return_replacement'];
    }

    /**
     * Sets return_replacement
     *
     * @param \Vekkon\PostBarcodeClient\Model\ReplacementLabelDefinition $return_replacement return_replacement
     *
     * @return $this
     */
    public function setReturnReplacement($return_replacement)
    {
        $this->container['return_replacement'] = $return_replacement;

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
