<?php
/**
 * SingleBarcodesResponseItem
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
 * SingleBarcodesResponseItem Class Doc Comment
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SingleBarcodesResponseItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SingleBarcodesResponseItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ident_code' => 'string',
        'barcodes' => 'string[]',
        'item_id' => 'string',
        'errors' => '\Vekkon\PostBarcodeClient\Model\MessagesType',
        'warnings' => '\Vekkon\PostBarcodeClient\Model\MessagesType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ident_code' => null,
        'barcodes' => 'byte',
        'item_id' => null,
        'errors' => null,
        'warnings' => null
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
        'ident_code' => 'identCode',
        'barcodes' => 'barcodes',
        'item_id' => 'itemID',
        'errors' => 'errors',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ident_code' => 'setIdentCode',
        'barcodes' => 'setBarcodes',
        'item_id' => 'setItemId',
        'errors' => 'setErrors',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ident_code' => 'getIdentCode',
        'barcodes' => 'getBarcodes',
        'item_id' => 'getItemId',
        'errors' => 'getErrors',
        'warnings' => 'getWarnings'
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
        $this->container['ident_code'] = isset($data['ident_code']) ? $data['ident_code'] : null;
        $this->container['barcodes'] = isset($data['barcodes']) ? $data['barcodes'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
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
     * Gets ident_code
     *
     * @return string
     */
    public function getIdentCode()
    {
        return $this->container['ident_code'];
    }

    /**
     * Sets ident_code
     *
     * @param string $ident_code ident_code
     *
     * @return $this
     */
    public function setIdentCode($ident_code)
    {
        $this->container['ident_code'] = $ident_code;

        return $this;
    }

    /**
     * Gets barcodes
     *
     * @return string[]
     */
    public function getBarcodes()
    {
        return $this->container['barcodes'];
    }

    /**
     * Sets barcodes
     *
     * @param string[] $barcodes barcodes
     *
     * @return $this
     */
    public function setBarcodes($barcodes)
    {
        $this->container['barcodes'] = $barcodes;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id item_id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Vekkon\PostBarcodeClient\Model\MessagesType
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Vekkon\PostBarcodeClient\Model\MessagesType $errors errors
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \Vekkon\PostBarcodeClient\Model\MessagesType
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Vekkon\PostBarcodeClient\Model\MessagesType $warnings warnings
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

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
