<?php
/**
 * PrincipalInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  WT\Client\DAV
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WebTop Core
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * Contact: dev-team@sonicle.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WT\Client\DAV\Model;

use \ArrayAccess;
use \WT\Client\DAV\ObjectSerializer;

/**
 * PrincipalInfo Class Doc Comment
 *
 * @category Class
 * @package  WT\Client\DAV
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrincipalInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PrincipalInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'profileId' => 'string',
        'profileUsername' => 'string',
        'displayName' => 'string',
        'emailAddress' => 'string',
        'timezoneId' => 'string',
        'languageTag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'profileId' => null,
        'profileUsername' => null,
        'displayName' => null,
        'emailAddress' => null,
        'timezoneId' => null,
        'languageTag' => null
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
        'profileId' => 'profileId',
        'profileUsername' => 'profileUsername',
        'displayName' => 'displayName',
        'emailAddress' => 'emailAddress',
        'timezoneId' => 'timezoneId',
        'languageTag' => 'languageTag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profileId' => 'setProfileId',
        'profileUsername' => 'setProfileUsername',
        'displayName' => 'setDisplayName',
        'emailAddress' => 'setEmailAddress',
        'timezoneId' => 'setTimezoneId',
        'languageTag' => 'setLanguageTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profileId' => 'getProfileId',
        'profileUsername' => 'getProfileUsername',
        'displayName' => 'getDisplayName',
        'emailAddress' => 'getEmailAddress',
        'timezoneId' => 'getTimezoneId',
        'languageTag' => 'getLanguageTag'
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
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['profileUsername'] = isset($data['profileUsername']) ? $data['profileUsername'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['emailAddress'] = isset($data['emailAddress']) ? $data['emailAddress'] : null;
        $this->container['timezoneId'] = isset($data['timezoneId']) ? $data['timezoneId'] : null;
        $this->container['languageTag'] = isset($data['languageTag']) ? $data['languageTag'] : null;
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

        return true;
    }


    /**
     * Gets profileId
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param string $profileId profileId
     *
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets profileUsername
     *
     * @return string
     */
    public function getProfileUsername()
    {
        return $this->container['profileUsername'];
    }

    /**
     * Sets profileUsername
     *
     * @param string $profileUsername profileUsername
     *
     * @return $this
     */
    public function setProfileUsername($profileUsername)
    {
        $this->container['profileUsername'] = $profileUsername;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['emailAddress'];
    }

    /**
     * Sets emailAddress
     *
     * @param string $emailAddress emailAddress
     *
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->container['emailAddress'] = $emailAddress;

        return $this;
    }

    /**
     * Gets timezoneId
     *
     * @return string
     */
    public function getTimezoneId()
    {
        return $this->container['timezoneId'];
    }

    /**
     * Sets timezoneId
     *
     * @param string $timezoneId timezoneId
     *
     * @return $this
     */
    public function setTimezoneId($timezoneId)
    {
        $this->container['timezoneId'] = $timezoneId;

        return $this;
    }

    /**
     * Gets languageTag
     *
     * @return string
     */
    public function getLanguageTag()
    {
        return $this->container['languageTag'];
    }

    /**
     * Sets languageTag
     *
     * @param string $languageTag languageTag
     *
     * @return $this
     */
    public function setLanguageTag($languageTag)
    {
        $this->container['languageTag'] = $languageTag;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


