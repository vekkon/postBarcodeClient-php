<?php
/**
 * ServiceCodeAttributes
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
 * ServiceCodeAttributes Class Doc Comment
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceCodeAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceCodeAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'przl' => 'string[]',
        'free_text' => 'string',
        'delivery_date' => '\DateTime',
        'parcel_no' => 'int',
        'parcel_total' => 'int',
        'delivery_place' => 'string',
        'pro_clima' => 'bool',
        'return_info' => '\Vekkon\PostBarcodeClient\Model\ReturnInfoType',
        'weight' => 'int',
        'unnumbers' => '\Vekkon\PostBarcodeClient\Model\UNNumbers',
        'dispatch_info' => '\Vekkon\PostBarcodeClient\Model\DispatchInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'przl' => null,
        'free_text' => null,
        'delivery_date' => 'date-time',
        'parcel_no' => 'int32',
        'parcel_total' => 'int32',
        'delivery_place' => null,
        'pro_clima' => null,
        'return_info' => null,
        'weight' => 'int32',
        'unnumbers' => null,
        'dispatch_info' => null
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
        'przl' => 'przl',
        'free_text' => 'freeText',
        'delivery_date' => 'deliveryDate',
        'parcel_no' => 'parcelNo',
        'parcel_total' => 'parcelTotal',
        'delivery_place' => 'deliveryPlace',
        'pro_clima' => 'proClima',
        'return_info' => 'returnInfo',
        'weight' => 'weight',
        'unnumbers' => 'unnumbers',
        'dispatch_info' => 'dispatchInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'przl' => 'setPrzl',
        'free_text' => 'setFreeText',
        'delivery_date' => 'setDeliveryDate',
        'parcel_no' => 'setParcelNo',
        'parcel_total' => 'setParcelTotal',
        'delivery_place' => 'setDeliveryPlace',
        'pro_clima' => 'setProClima',
        'return_info' => 'setReturnInfo',
        'weight' => 'setWeight',
        'unnumbers' => 'setUnnumbers',
        'dispatch_info' => 'setDispatchInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'przl' => 'getPrzl',
        'free_text' => 'getFreeText',
        'delivery_date' => 'getDeliveryDate',
        'parcel_no' => 'getParcelNo',
        'parcel_total' => 'getParcelTotal',
        'delivery_place' => 'getDeliveryPlace',
        'pro_clima' => 'getProClima',
        'return_info' => 'getReturnInfo',
        'weight' => 'getWeight',
        'unnumbers' => 'getUnnumbers',
        'dispatch_info' => 'getDispatchInfo'
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
        $this->container['przl'] = isset($data['przl']) ? $data['przl'] : null;
        $this->container['free_text'] = isset($data['free_text']) ? $data['free_text'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['parcel_no'] = isset($data['parcel_no']) ? $data['parcel_no'] : null;
        $this->container['parcel_total'] = isset($data['parcel_total']) ? $data['parcel_total'] : null;
        $this->container['delivery_place'] = isset($data['delivery_place']) ? $data['delivery_place'] : null;
        $this->container['pro_clima'] = isset($data['pro_clima']) ? $data['pro_clima'] : false;
        $this->container['return_info'] = isset($data['return_info']) ? $data['return_info'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['unnumbers'] = isset($data['unnumbers']) ? $data['unnumbers'] : null;
        $this->container['dispatch_info'] = isset($data['dispatch_info']) ? $data['dispatch_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['przl'] === null) {
            $invalidProperties[] = "'przl' can't be null";
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
     * Gets przl
     *
     * @return string[]
     */
    public function getPrzl()
    {
        return $this->container['przl'];
    }

    /**
     * Sets przl
     *
     * @param string[] $przl przl
     *
     * @return $this
     */
    public function setPrzl($przl)
    {
        $this->container['przl'] = $przl;

        return $this;
    }

    /**
     * Gets free_text
     *
     * @return string
     */
    public function getFreeText()
    {
        return $this->container['free_text'];
    }

    /**
     * Sets free_text
     *
     * @param string $free_text free_text
     *
     * @return $this
     */
    public function setFreeText($free_text)
    {
        $this->container['free_text'] = $free_text;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime $delivery_date delivery_date
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets parcel_no
     *
     * @return int
     */
    public function getParcelNo()
    {
        return $this->container['parcel_no'];
    }

    /**
     * Sets parcel_no
     *
     * @param int $parcel_no parcel_no
     *
     * @return $this
     */
    public function setParcelNo($parcel_no)
    {
        $this->container['parcel_no'] = $parcel_no;

        return $this;
    }

    /**
     * Gets parcel_total
     *
     * @return int
     */
    public function getParcelTotal()
    {
        return $this->container['parcel_total'];
    }

    /**
     * Sets parcel_total
     *
     * @param int $parcel_total parcel_total
     *
     * @return $this
     */
    public function setParcelTotal($parcel_total)
    {
        $this->container['parcel_total'] = $parcel_total;

        return $this;
    }

    /**
     * Gets delivery_place
     *
     * @return string
     */
    public function getDeliveryPlace()
    {
        return $this->container['delivery_place'];
    }

    /**
     * Sets delivery_place
     *
     * @param string $delivery_place delivery_place
     *
     * @return $this
     */
    public function setDeliveryPlace($delivery_place)
    {
        $this->container['delivery_place'] = $delivery_place;

        return $this;
    }

    /**
     * Gets pro_clima
     *
     * @return bool
     */
    public function getProClima()
    {
        return $this->container['pro_clima'];
    }

    /**
     * Sets pro_clima
     *
     * @param bool $pro_clima pro_clima
     *
     * @return $this
     */
    public function setProClima($pro_clima)
    {
        $this->container['pro_clima'] = $pro_clima;

        return $this;
    }

    /**
     * Gets return_info
     *
     * @return \Vekkon\PostBarcodeClient\Model\ReturnInfoType
     */
    public function getReturnInfo()
    {
        return $this->container['return_info'];
    }

    /**
     * Sets return_info
     *
     * @param \Vekkon\PostBarcodeClient\Model\ReturnInfoType $return_info return_info
     *
     * @return $this
     */
    public function setReturnInfo($return_info)
    {
        $this->container['return_info'] = $return_info;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int $weight Weight in gramms.
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets unnumbers
     *
     * @return \Vekkon\PostBarcodeClient\Model\UNNumbers
     */
    public function getUnnumbers()
    {
        return $this->container['unnumbers'];
    }

    /**
     * Sets unnumbers
     *
     * @param \Vekkon\PostBarcodeClient\Model\UNNumbers $unnumbers unnumbers
     *
     * @return $this
     */
    public function setUnnumbers($unnumbers)
    {
        $this->container['unnumbers'] = $unnumbers;

        return $this;
    }

    /**
     * Gets dispatch_info
     *
     * @return \Vekkon\PostBarcodeClient\Model\DispatchInfo
     */
    public function getDispatchInfo()
    {
        return $this->container['dispatch_info'];
    }

    /**
     * Sets dispatch_info
     *
     * @param \Vekkon\PostBarcodeClient\Model\DispatchInfo $dispatch_info dispatch_info
     *
     * @return $this
     */
    public function setDispatchInfo($dispatch_info)
    {
        $this->container['dispatch_info'] = $dispatch_info;

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
