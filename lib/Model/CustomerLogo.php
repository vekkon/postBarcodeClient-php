<?php
/**
 * CustomerLogo
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
 * CustomerLogo Class Doc Comment
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerLogo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerLogo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'image' => 'string',
        'format' => 'string',
        'rotation' => 'int',
        'aspect_ratio' => 'string',
        'horizontal_align' => 'string',
        'vertical_align' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'image' => 'byte',
        'format' => null,
        'rotation' => 'int32',
        'aspect_ratio' => null,
        'horizontal_align' => null,
        'vertical_align' => null
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
        'image' => 'image',
        'format' => 'format',
        'rotation' => 'rotation',
        'aspect_ratio' => 'aspectRatio',
        'horizontal_align' => 'horizontalAlign',
        'vertical_align' => 'verticalAlign'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image' => 'setImage',
        'format' => 'setFormat',
        'rotation' => 'setRotation',
        'aspect_ratio' => 'setAspectRatio',
        'horizontal_align' => 'setHorizontalAlign',
        'vertical_align' => 'setVerticalAlign'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image' => 'getImage',
        'format' => 'getFormat',
        'rotation' => 'getRotation',
        'aspect_ratio' => 'getAspectRatio',
        'horizontal_align' => 'getHorizontalAlign',
        'vertical_align' => 'getVerticalAlign'
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

    const ROTATION_0 = 0;
    const ROTATION_90 = 90;
    const ROTATION_180 = 180;
    const ROTATION_270 = 270;
    const ASPECT_RATIO_EXPAND = 'EXPAND';
    const ASPECT_RATIO_KEEP = 'KEEP';
    const HORIZONTAL_ALIGN_WITH_CONTENT = 'WITH_CONTENT';
    const HORIZONTAL_ALIGN_LEFT = 'LEFT';
    const VERTICAL_ALIGN_TOP = 'TOP';
    const VERTICAL_ALIGN_MIDDLE = 'MIDDLE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRotationAllowableValues()
    {
        return [
            self::ROTATION_0,
            self::ROTATION_90,
            self::ROTATION_180,
            self::ROTATION_270,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAspectRatioAllowableValues()
    {
        return [
            self::ASPECT_RATIO_EXPAND,
            self::ASPECT_RATIO_KEEP,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHorizontalAlignAllowableValues()
    {
        return [
            self::HORIZONTAL_ALIGN_WITH_CONTENT,
            self::HORIZONTAL_ALIGN_LEFT,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerticalAlignAllowableValues()
    {
        return [
            self::VERTICAL_ALIGN_TOP
            self::VERTICAL_ALIGN_MIDDLE
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
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['rotation'] = isset($data['rotation']) ? $data['rotation'] : null;
        $this->container['aspect_ratio'] = isset($data['aspect_ratio']) ? $data['aspect_ratio'] : null;
        $this->container['horizontal_align'] = isset($data['horizontal_align']) ? $data['horizontal_align'] : null;
        $this->container['vertical_align'] = isset($data['vertical_align']) ? $data['vertical_align'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        $allowedValues = $this->getRotationAllowableValues();
        if (!is_null($this->container['rotation']) && !in_array($this->container['rotation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rotation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAspectRatioAllowableValues();
        if (!is_null($this->container['aspect_ratio']) && !in_array($this->container['aspect_ratio'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'aspect_ratio', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHorizontalAlignAllowableValues();
        if (!is_null($this->container['horizontal_align']) && !in_array($this->container['horizontal_align'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'horizontal_align', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVerticalAlignAllowableValues();
        if (!is_null($this->container['vertical_align']) && !in_array($this->container['vertical_align'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'vertical_align', must be one of '%s'",
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
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets rotation
     *
     * @return int
     */
    public function getRotation()
    {
        return $this->container['rotation'];
    }

    /**
     * Sets rotation
     *
     * @param int $rotation Default value is 270.
     *
     * @return $this
     */
    public function setRotation($rotation)
    {
        $allowedValues = $this->getRotationAllowableValues();
        if (!is_null($rotation) && !in_array($rotation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rotation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rotation'] = $rotation;

        return $this;
    }

    /**
     * Gets aspect_ratio
     *
     * @return string
     */
    public function getAspectRatio()
    {
        return $this->container['aspect_ratio'];
    }

    /**
     * Sets aspect_ratio
     *
     * @param string $aspect_ratio aspect_ratio
     *
     * @return $this
     */
    public function setAspectRatio($aspect_ratio)
    {
        $allowedValues = $this->getAspectRatioAllowableValues();
        if (!is_null($aspect_ratio) && !in_array($aspect_ratio, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'aspect_ratio', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['aspect_ratio'] = $aspect_ratio;

        return $this;
    }

    /**
     * Gets horizontal_align
     *
     * @return string
     */
    public function getHorizontalAlign()
    {
        return $this->container['horizontal_align'];
    }

    /**
     * Sets horizontal_align
     *
     * @param string $horizontal_align horizontal_align
     *
     * @return $this
     */
    public function setHorizontalAlign($horizontal_align)
    {
        $allowedValues = $this->getHorizontalAlignAllowableValues();
        if (!is_null($horizontal_align) && !in_array($horizontal_align, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'horizontal_align', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['horizontal_align'] = $horizontal_align;

        return $this;
    }

    /**
     * Gets vertical_align
     *
     * @return string
     */
    public function getVerticalAlign()
    {
        return $this->container['vertical_align'];
    }

    /**
     * Sets vertical_align
     *
     * @param string $vertical_align vertical_align
     *
     * @return $this
     */
    public function setVerticalAlign($vertical_align)
    {
        $allowedValues = $this->getVerticalAlignAllowableValues();
        if (!is_null($vertical_align) && !in_array($vertical_align, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'vertical_align', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vertical_align'] = $vertical_align;

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
