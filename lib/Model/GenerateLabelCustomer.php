<?php
/**
 * GenerateLabelCustomer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GenerateLabelCustomer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GenerateLabelCustomer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GenerateLabelCustomer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name1' => 'string',
        'name2' => 'string',
        'street' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'country' => 'string',
        'logo' => 'string',
        'logo_format' => 'string',
        'logo_rotation' => 'int',
        'logo_aspect_ratio' => 'string',
        'logo_horizontal_align' => 'string',
        'logo_vertical_align' => 'string',
        'domicile_post_office' => 'string',
        'pobox' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name1' => null,
        'name2' => null,
        'street' => null,
        'zip' => null,
        'city' => null,
        'country' => null,
        'logo' => 'byte',
        'logo_format' => null,
        'logo_rotation' => 'int32',
        'logo_aspect_ratio' => null,
        'logo_horizontal_align' => null,
        'logo_vertical_align' => null,
        'domicile_post_office' => null,
        'pobox' => null
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
        'name1' => 'name1',
        'name2' => 'name2',
        'street' => 'street',
        'zip' => 'zip',
        'city' => 'city',
        'country' => 'country',
        'logo' => 'logo',
        'logo_format' => 'logoFormat',
        'logo_rotation' => 'logoRotation',
        'logo_aspect_ratio' => 'logoAspectRatio',
        'logo_horizontal_align' => 'logoHorizontalAlign',
        'logo_vertical_align' => 'logoVerticalAlign',
        'domicile_post_office' => 'domicilePostOffice',
        'pobox' => 'pobox'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name1' => 'setName1',
        'name2' => 'setName2',
        'street' => 'setStreet',
        'zip' => 'setZip',
        'city' => 'setCity',
        'country' => 'setCountry',
        'logo' => 'setLogo',
        'logo_format' => 'setLogoFormat',
        'logo_rotation' => 'setLogoRotation',
        'logo_aspect_ratio' => 'setLogoAspectRatio',
        'logo_horizontal_align' => 'setLogoHorizontalAlign',
        'logo_vertical_align' => 'setLogoVerticalAlign',
        'domicile_post_office' => 'setDomicilePostOffice',
        'pobox' => 'setPobox'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name1' => 'getName1',
        'name2' => 'getName2',
        'street' => 'getStreet',
        'zip' => 'getZip',
        'city' => 'getCity',
        'country' => 'getCountry',
        'logo' => 'getLogo',
        'logo_format' => 'getLogoFormat',
        'logo_rotation' => 'getLogoRotation',
        'logo_aspect_ratio' => 'getLogoAspectRatio',
        'logo_horizontal_align' => 'getLogoHorizontalAlign',
        'logo_vertical_align' => 'getLogoVerticalAlign',
        'domicile_post_office' => 'getDomicilePostOffice',
        'pobox' => 'getPobox'
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

    const LOGO_ROTATION_0 = 0;
    const LOGO_ROTATION_90 = 90;
    const LOGO_ROTATION_180 = 180;
    const LOGO_ROTATION_270 = 270;
    const LOGO_ASPECT_RATIO_EXPAND = 'EXPAND';
    const LOGO_ASPECT_RATIO_KEEP = 'KEEP';
    const LOGO_HORIZONTAL_ALIGN_WITH_CONTENT = 'WITH_CONTENT';
    const LOGO_HORIZONTAL_ALIGN_LEFT = 'LEFT';
    const LOGO_VERTICAL_ALIGN_TOP = 'TOP';
    const LOGO_VERTICAL_ALIGN_MIDDLE = 'MIDDLE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLogoRotationAllowableValues()
    {
        return [
            self::LOGO_ROTATION_0,
            self::LOGO_ROTATION_90,
            self::LOGO_ROTATION_180,
            self::LOGO_ROTATION_270,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLogoAspectRatioAllowableValues()
    {
        return [
            self::LOGO_ASPECT_RATIO_EXPAND,
            self::LOGO_ASPECT_RATIO_KEEP,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLogoHorizontalAlignAllowableValues()
    {
        return [
            self::LOGO_HORIZONTAL_ALIGN_WITH_CONTENT,
            self::LOGO_HORIZONTAL_ALIGN_LEFT,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLogoVerticalAlignAllowableValues()
    {
        return [
            self::LOGO_VERTICAL_ALIGN_TOP,
            self::LOGO_VERTICAL_ALIGN_MIDDLE,
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
        $this->container['name1'] = isset($data['name1']) ? $data['name1'] : null;
        $this->container['name2'] = isset($data['name2']) ? $data['name2'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['logo_format'] = isset($data['logo_format']) ? $data['logo_format'] : null;
        $this->container['logo_rotation'] = isset($data['logo_rotation']) ? $data['logo_rotation'] : null;
        $this->container['logo_aspect_ratio'] = isset($data['logo_aspect_ratio']) ? $data['logo_aspect_ratio'] : null;
        $this->container['logo_horizontal_align'] = isset($data['logo_horizontal_align']) ? $data['logo_horizontal_align'] : null;
        $this->container['logo_vertical_align'] = isset($data['logo_vertical_align']) ? $data['logo_vertical_align'] : null;
        $this->container['domicile_post_office'] = isset($data['domicile_post_office']) ? $data['domicile_post_office'] : null;
        $this->container['pobox'] = isset($data['pobox']) ? $data['pobox'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name1'] === null) {
            $invalidProperties[] = "'name1' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        $allowedValues = $this->getLogoRotationAllowableValues();
        if (!is_null($this->container['logo_rotation']) && !in_array($this->container['logo_rotation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'logo_rotation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLogoAspectRatioAllowableValues();
        if (!is_null($this->container['logo_aspect_ratio']) && !in_array($this->container['logo_aspect_ratio'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'logo_aspect_ratio', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLogoHorizontalAlignAllowableValues();
        if (!is_null($this->container['logo_horizontal_align']) && !in_array($this->container['logo_horizontal_align'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'logo_horizontal_align', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLogoVerticalAlignAllowableValues();
        if (!is_null($this->container['logo_vertical_align']) && !in_array($this->container['logo_vertical_align'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'logo_vertical_align', must be one of '%s'",
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
     * Gets name1
     *
     * @return string
     */
    public function getName1()
    {
        return $this->container['name1'];
    }

    /**
     * Sets name1
     *
     * @param string $name1 name1
     *
     * @return $this
     */
    public function setName1($name1)
    {
        $this->container['name1'] = $name1;

        return $this;
    }

    /**
     * Gets name2
     *
     * @return string
     */
    public function getName2()
    {
        return $this->container['name2'];
    }

    /**
     * Sets name2
     *
     * @param string $name2 name2
     *
     * @return $this
     */
    public function setName2($name2)
    {
        $this->container['name2'] = $name2;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip zip
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets logo_format
     *
     * @return string
     */
    public function getLogoFormat()
    {
        return $this->container['logo_format'];
    }

    /**
     * Sets logo_format
     *
     * @param string $logo_format logo_format
     *
     * @return $this
     */
    public function setLogoFormat($logo_format)
    {
        $this->container['logo_format'] = $logo_format;

        return $this;
    }

    /**
     * Gets logo_rotation
     *
     * @return int
     */
    public function getLogoRotation()
    {
        return $this->container['logo_rotation'];
    }

    /**
     * Sets logo_rotation
     *
     * @param int $logo_rotation Default value is 270.
     *
     * @return $this
     */
    public function setLogoRotation($logo_rotation)
    {
        $allowedValues = $this->getLogoRotationAllowableValues();
        if (!is_null($logo_rotation) && !in_array($logo_rotation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'logo_rotation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['logo_rotation'] = $logo_rotation;

        return $this;
    }

    /**
     * Gets logo_aspect_ratio
     *
     * @return string
     */
    public function getLogoAspectRatio()
    {
        return $this->container['logo_aspect_ratio'];
    }

    /**
     * Sets logo_aspect_ratio
     *
     * @param string $logo_aspect_ratio logo_aspect_ratio
     *
     * @return $this
     */
    public function setLogoAspectRatio($logo_aspect_ratio)
    {
        $allowedValues = $this->getLogoAspectRatioAllowableValues();
        if (!is_null($logo_aspect_ratio) && !in_array($logo_aspect_ratio, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'logo_aspect_ratio', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['logo_aspect_ratio'] = $logo_aspect_ratio;

        return $this;
    }

    /**
     * Gets logo_horizontal_align
     *
     * @return string
     */
    public function getLogoHorizontalAlign()
    {
        return $this->container['logo_horizontal_align'];
    }

    /**
     * Sets logo_horizontal_align
     *
     * @param string $logo_horizontal_align logo_horizontal_align
     *
     * @return $this
     */
    public function setLogoHorizontalAlign($logo_horizontal_align)
    {
        $allowedValues = $this->getLogoHorizontalAlignAllowableValues();
        if (!is_null($logo_horizontal_align) && !in_array($logo_horizontal_align, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'logo_horizontal_align', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['logo_horizontal_align'] = $logo_horizontal_align;

        return $this;
    }

    /**
     * Gets logo_vertical_align
     *
     * @return string
     */
    public function getLogoVerticalAlign()
    {
        return $this->container['logo_vertical_align'];
    }

    /**
     * Sets logo_vertical_align
     *
     * @param string $logo_vertical_align logo_vertical_align
     *
     * @return $this
     */
    public function setLogoVerticalAlign($logo_vertical_align)
    {
        $allowedValues = $this->getLogoVerticalAlignAllowableValues();
        if (!is_null($logo_vertical_align) && !in_array($logo_vertical_align, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'logo_vertical_align', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['logo_vertical_align'] = $logo_vertical_align;

        return $this;
    }

    /**
     * Gets domicile_post_office
     *
     * @return string
     */
    public function getDomicilePostOffice()
    {
        return $this->container['domicile_post_office'];
    }

    /**
     * Sets domicile_post_office
     *
     * @param string $domicile_post_office domicile_post_office
     *
     * @return $this
     */
    public function setDomicilePostOffice($domicile_post_office)
    {
        $this->container['domicile_post_office'] = $domicile_post_office;

        return $this;
    }

    /**
     * Gets pobox
     *
     * @return string
     */
    public function getPobox()
    {
        return $this->container['pobox'];
    }

    /**
     * Sets pobox
     *
     * @param string $pobox pobox
     *
     * @return $this
     */
    public function setPobox($pobox)
    {
        $this->container['pobox'] = $pobox;

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
