<?php
/**
 * BaseRecipient
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
 * BaseRecipient Class Doc Comment
 *
 * @category Class
 * @package  Vekkon\PostBarcodeClient
 * @author   Vekkon
 */
class BaseRecipient implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelName = 'BaseRecipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $types = [
        'post_ident' => 'string',
        'title' => 'string',
        'personally_addressed' => 'bool',
        'name1' => 'string',
        'first_name' => 'string',
        'name2' => 'string',
        'name3' => 'string',
        'address_suffix' => 'string',
        'street' => 'string',
        'house_no' => 'string',
        'floor_no' => 'string',
        'mailbox_no' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'pobox' => 'string',
        'email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $formats = [
        'post_ident' => null,
        'title' => null,
        'personally_addressed' => null,
        'name1' => null,
        'first_name' => null,
        'name2' => null,
        'name3' => null,
        'address_suffix' => null,
        'street' => null,
        'house_no' => null,
        'floor_no' => null,
        'mailbox_no' => null,
        'zip' => null,
        'city' => null,
        'country' => null,
        'phone' => null,
        'mobile' => null,
        'pobox' => null,
        'email' => null
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
        'post_ident' => 'postIdent',
        'title' => 'title',
        'personally_addressed' => 'personallyAddressed',
        'name1' => 'name1',
        'first_name' => 'firstName',
        'name2' => 'name2',
        'name3' => 'name3',
        'address_suffix' => 'addressSuffix',
        'street' => 'street',
        'house_no' => 'houseNo',
        'floor_no' => 'floorNo',
        'mailbox_no' => 'mailboxNo',
        'zip' => 'zip',
        'city' => 'city',
        'country' => 'country',
        'phone' => 'phone',
        'mobile' => 'mobile',
        'pobox' => 'pobox',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'post_ident' => 'setPostIdent',
        'title' => 'setTitle',
        'personally_addressed' => 'setPersonallyAddressed',
        'name1' => 'setName1',
        'first_name' => 'setFirstName',
        'name2' => 'setName2',
        'name3' => 'setName3',
        'address_suffix' => 'setAddressSuffix',
        'street' => 'setStreet',
        'house_no' => 'setHouseNo',
        'floor_no' => 'setFloorNo',
        'mailbox_no' => 'setMailboxNo',
        'zip' => 'setZip',
        'city' => 'setCity',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'mobile' => 'setMobile',
        'pobox' => 'setPobox',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'post_ident' => 'getPostIdent',
        'title' => 'getTitle',
        'personally_addressed' => 'getPersonallyAddressed',
        'name1' => 'getName1',
        'first_name' => 'getFirstName',
        'name2' => 'getName2',
        'name3' => 'getName3',
        'address_suffix' => 'getAddressSuffix',
        'street' => 'getStreet',
        'house_no' => 'getHouseNo',
        'floor_no' => 'getFloorNo',
        'mailbox_no' => 'getMailboxNo',
        'zip' => 'getZip',
        'city' => 'getCity',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'mobile' => 'getMobile',
        'pobox' => 'getPobox',
        'email' => 'getEmail'
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
        $this->container['post_ident'] = isset($data['post_ident']) ? $data['post_ident'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['personally_addressed'] = isset($data['personally_addressed']) ? $data['personally_addressed'] : true;
        $this->container['name1'] = isset($data['name1']) ? $data['name1'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['name2'] = isset($data['name2']) ? $data['name2'] : null;
        $this->container['name3'] = isset($data['name3']) ? $data['name3'] : null;
        $this->container['address_suffix'] = isset($data['address_suffix']) ? $data['address_suffix'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['house_no'] = isset($data['house_no']) ? $data['house_no'] : null;
        $this->container['floor_no'] = isset($data['floor_no']) ? $data['floor_no'] : null;
        $this->container['mailbox_no'] = isset($data['mailbox_no']) ? $data['mailbox_no'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['pobox'] = isset($data['pobox']) ? $data['pobox'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
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
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
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
     * Gets post_ident
     *
     * @return string
     */
    public function getPostIdent()
    {
        return $this->container['post_ident'];
    }

    /**
     * Sets post_ident
     *
     * @param string $post_ident post_ident
     *
     * @return $this
     */
    public function setPostIdent($post_ident)
    {
        $this->container['post_ident'] = $post_ident;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets personally_addressed
     *
     * @return bool
     */
    public function getPersonallyAddressed()
    {
        return $this->container['personally_addressed'];
    }

    /**
     * Sets personally_addressed
     *
     * @param bool $personally_addressed personally_addressed
     *
     * @return $this
     */
    public function setPersonallyAddressed($personally_addressed)
    {
        $this->container['personally_addressed'] = $personally_addressed;

        return $this;
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

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
     * Gets name3
     *
     * @return string
     */
    public function getName3()
    {
        return $this->container['name3'];
    }

    /**
     * Sets name3
     *
     * @param string $name3 name3
     *
     * @return $this
     */
    public function setName3($name3)
    {
        $this->container['name3'] = $name3;

        return $this;
    }

    /**
     * Gets address_suffix
     *
     * @return string
     */
    public function getAddressSuffix()
    {
        return $this->container['address_suffix'];
    }

    /**
     * Sets address_suffix
     *
     * @param string $address_suffix address_suffix
     *
     * @return $this
     */
    public function setAddressSuffix($address_suffix)
    {
        $this->container['address_suffix'] = $address_suffix;

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
     * Gets house_no
     *
     * @return string
     */
    public function getHouseNo()
    {
        return $this->container['house_no'];
    }

    /**
     * Sets house_no
     *
     * @param string $house_no house_no
     *
     * @return $this
     */
    public function setHouseNo($house_no)
    {
        $this->container['house_no'] = $house_no;

        return $this;
    }

    /**
     * Gets floor_no
     *
     * @return string
     */
    public function getFloorNo()
    {
        return $this->container['floor_no'];
    }

    /**
     * Sets floor_no
     *
     * @param string $floor_no floor_no
     *
     * @return $this
     */
    public function setFloorNo($floor_no)
    {
        $this->container['floor_no'] = $floor_no;

        return $this;
    }

    /**
     * Gets mailbox_no
     *
     * @return string
     */
    public function getMailboxNo()
    {
        return $this->container['mailbox_no'];
    }

    /**
     * Sets mailbox_no
     *
     * @param string $mailbox_no mailbox_no
     *
     * @return $this
     */
    public function setMailboxNo($mailbox_no)
    {
        $this->container['mailbox_no'] = $mailbox_no;

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
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
