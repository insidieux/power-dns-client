<?php
/**
 * Cryptokey
 *
 * PHP version 5
 *
 * @category Class
 * @package  insidieux\PowerDnsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PowerDNS Authoritative HTTP API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 0.0.13
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace insidieux\PowerDnsClient\Model;

use \ArrayAccess;
use \insidieux\PowerDnsClient\ObjectSerializer;

/**
 * Cryptokey Class Doc Comment
 *
 * @category Class
 * @description Describes a DNSSEC cryptographic key
 * @package  insidieux\PowerDnsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Cryptokey implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cryptokey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'string',
        'keytype' => 'string',
        'active' => 'bool',
        'dnskey' => 'string',
        'ds' => 'string[]',
        'privatekey' => 'string',
        'algorithm' => 'string',
        'bits' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => null,
        'keytype' => null,
        'active' => null,
        'dnskey' => null,
        'ds' => null,
        'privatekey' => null,
        'algorithm' => null,
        'bits' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'id' => 'id',
        'keytype' => 'keytype',
        'active' => 'active',
        'dnskey' => 'dnskey',
        'ds' => 'ds',
        'privatekey' => 'privatekey',
        'algorithm' => 'algorithm',
        'bits' => 'bits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'keytype' => 'setKeytype',
        'active' => 'setActive',
        'dnskey' => 'setDnskey',
        'ds' => 'setDs',
        'privatekey' => 'setPrivatekey',
        'algorithm' => 'setAlgorithm',
        'bits' => 'setBits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'keytype' => 'getKeytype',
        'active' => 'getActive',
        'dnskey' => 'getDnskey',
        'ds' => 'getDs',
        'privatekey' => 'getPrivatekey',
        'algorithm' => 'getAlgorithm',
        'bits' => 'getBits'
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

    const KEYTYPE_KSK = 'ksk';
    const KEYTYPE_ZSK = 'zsk';
    const KEYTYPE_CSK = 'csk';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKeytypeAllowableValues()
    {
        return [
            self::KEYTYPE_KSK,
            self::KEYTYPE_ZSK,
            self::KEYTYPE_CSK,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['keytype'] = isset($data['keytype']) ? $data['keytype'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['dnskey'] = isset($data['dnskey']) ? $data['dnskey'] : null;
        $this->container['ds'] = isset($data['ds']) ? $data['ds'] : null;
        $this->container['privatekey'] = isset($data['privatekey']) ? $data['privatekey'] : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['bits'] = isset($data['bits']) ? $data['bits'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getKeytypeAllowableValues();
        if (!is_null($this->container['keytype']) && !in_array($this->container['keytype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'keytype', must be one of '%s'",
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type set to \"Cryptokey\"
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The internal identifier, read only
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets keytype
     *
     * @return string|null
     */
    public function getKeytype()
    {
        return $this->container['keytype'];
    }

    /**
     * Sets keytype
     *
     * @param string|null $keytype keytype
     *
     * @return $this
     */
    public function setKeytype($keytype)
    {
        $allowedValues = $this->getKeytypeAllowableValues();
        if (!is_null($keytype) && !in_array($keytype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'keytype', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['keytype'] = $keytype;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Whether or not the key is in active use
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets dnskey
     *
     * @return string|null
     */
    public function getDnskey()
    {
        return $this->container['dnskey'];
    }

    /**
     * Sets dnskey
     *
     * @param string|null $dnskey The DNSKEY record for this key
     *
     * @return $this
     */
    public function setDnskey($dnskey)
    {
        $this->container['dnskey'] = $dnskey;

        return $this;
    }

    /**
     * Gets ds
     *
     * @return string[]|null
     */
    public function getDs()
    {
        return $this->container['ds'];
    }

    /**
     * Sets ds
     *
     * @param string[]|null $ds An array of DS records for this key
     *
     * @return $this
     */
    public function setDs($ds)
    {
        $this->container['ds'] = $ds;

        return $this;
    }

    /**
     * Gets privatekey
     *
     * @return string|null
     */
    public function getPrivatekey()
    {
        return $this->container['privatekey'];
    }

    /**
     * Sets privatekey
     *
     * @param string|null $privatekey The private key in ISC format
     *
     * @return $this
     */
    public function setPrivatekey($privatekey)
    {
        $this->container['privatekey'] = $privatekey;

        return $this;
    }

    /**
     * Gets algorithm
     *
     * @return string|null
     */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
     * Sets algorithm
     *
     * @param string|null $algorithm The name of the algorithm of the key, should be a mnemonic
     *
     * @return $this
     */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;

        return $this;
    }

    /**
     * Gets bits
     *
     * @return int|null
     */
    public function getBits()
    {
        return $this->container['bits'];
    }

    /**
     * Sets bits
     *
     * @param int|null $bits The size of the key
     *
     * @return $this
     */
    public function setBits($bits)
    {
        $this->container['bits'] = $bits;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


