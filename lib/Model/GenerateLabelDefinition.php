<?php
/**
 * GenerateLabelDefinition
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
 * GenerateLabelDefinition Class Doc Comment
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Vekkon
 */
class GenerateLabelDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'GenerateLabelDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $types = [
        'label_layout' => 'string',
        'print_addresses' => 'string',
        'image_file_type' => 'string',
        'image_resolution' => 'int',
        'print_preview' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $formats = [
        'label_layout' => null,
        'print_addresses' => null,
        'image_file_type' => null,
        'image_resolution' => 'int32',
        'print_preview' => null
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
        'label_layout' => 'labelLayout',
        'print_addresses' => 'printAddresses',
        'image_file_type' => 'imageFileType',
        'image_resolution' => 'imageResolution',
        'print_preview' => 'printPreview'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_layout' => 'setLabelLayout',
        'print_addresses' => 'setPrintAddresses',
        'image_file_type' => 'setImageFileType',
        'image_resolution' => 'setImageResolution',
        'print_preview' => 'setPrintPreview'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_layout' => 'getLabelLayout',
        'print_addresses' => 'getPrintAddresses',
        'image_file_type' => 'getImageFileType',
        'image_resolution' => 'getImageResolution',
        'print_preview' => 'getPrintPreview'
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

    const PRINT_ADDRESSES_NONE = 'NONE';
    const PRINT_ADDRESSES_ONLY_RECIPIENT = 'ONLY_RECIPIENT';
    const PRINT_ADDRESSES_ONLY_CUSTOMER = 'ONLY_CUSTOMER';
    const PRINT_ADDRESSES_RECIPIENT_AND_CUSTOMER = 'RECIPIENT_AND_CUSTOMER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrintAddressesAllowableValues()
    {
        return [
            self::PRINT_ADDRESSES_NONE,
            self::PRINT_ADDRESSES_ONLY_RECIPIENT,
            self::PRINT_ADDRESSES_ONLY_CUSTOMER,
            self::PRINT_ADDRESSES_RECIPIENT_AND_CUSTOMER,
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
        $this->container['label_layout'] = isset($data['label_layout']) ? $data['label_layout'] : null;
        $this->container['print_addresses'] = isset($data['print_addresses']) ? $data['print_addresses'] : null;
        $this->container['image_file_type'] = isset($data['image_file_type']) ? $data['image_file_type'] : null;
        $this->container['image_resolution'] = isset($data['image_resolution']) ? $data['image_resolution'] : null;
        $this->container['print_preview'] = isset($data['print_preview']) ? $data['print_preview'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['label_layout'] === null) {
            $invalidProperties[] = "'label_layout' can't be null";
        }
        $allowedValues = $this->getPrintAddressesAllowableValues();
        if (!is_null($this->container['print_addresses']) && !in_array($this->container['print_addresses'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'print_addresses', must be one of '%s'",
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
     * Gets label_layout
     *
     * @return string
     */
    public function getLabelLayout()
    {
        return $this->container['label_layout'];
    }

    /**
     * Sets label_layout
     *
     * @param string $label_layout label_layout
     *
     * @return $this
     */
    public function setLabelLayout($label_layout)
    {
        $this->container['label_layout'] = $label_layout;

        return $this;
    }

    /**
     * Gets print_addresses
     *
     * @return string
     */
    public function getPrintAddresses()
    {
        return $this->container['print_addresses'];
    }

    /**
     * Sets print_addresses
     *
     * @param string $print_addresses Enumeration to indicated whether addresses are printed or not.
     *
     * @return $this
     */
    public function setPrintAddresses($print_addresses)
    {
        $allowedValues = $this->getPrintAddressesAllowableValues();
        if (!is_null($print_addresses) && !in_array($print_addresses, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'print_addresses', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['print_addresses'] = $print_addresses;

        return $this;
    }

    /**
     * Gets image_file_type
     *
     * @return string
     */
    public function getImageFileType()
    {
        return $this->container['image_file_type'];
    }

    /**
     * Sets image_file_type
     *
     * @param string $image_file_type Defines valid formats of images.
     *
     * @return $this
     */
    public function setImageFileType($image_file_type)
    {
        $this->container['image_file_type'] = $image_file_type;

        return $this;
    }

    /**
     * Gets image_resolution
     *
     * @return int
     */
    public function getImageResolution()
    {
        return $this->container['image_resolution'];
    }

    /**
     * Sets image_resolution
     *
     * @param int $image_resolution image_resolution
     *
     * @return $this
     */
    public function setImageResolution($image_resolution)
    {
        $this->container['image_resolution'] = $image_resolution;

        return $this;
    }

    /**
     * Gets print_preview
     *
     * @return bool
     */
    public function getPrintPreview()
    {
        return $this->container['print_preview'];
    }

    /**
     * Sets print_preview
     *
     * @param bool $print_preview print_preview
     *
     * @return $this
     */
    public function setPrintPreview($print_preview)
    {
        $this->container['print_preview'] = $print_preview;

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
