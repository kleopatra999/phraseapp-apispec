<?php
/**
 * TranslationKeyDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PhraseApp
 *
 * PhraseApp API for the interaction with the PhraseApp localization platform
 *
 * OpenAPI spec version: 2.0
 * Contact: support@phraseapp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * TranslationKeyDetails Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TranslationKeyDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TranslationKeyDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name_plural' => 'string',
        'comments_count' => 'int',
        'max_characters_allowed' => 'int',
        'screenshot_url' => 'string',
        'unformatted' => 'bool',
        'xml_space_preserve' => 'bool',
        'original_file' => 'string',
        'format_value_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name_plural' => null,
        'comments_count' => null,
        'max_characters_allowed' => null,
        'screenshot_url' => null,
        'unformatted' => null,
        'xml_space_preserve' => null,
        'original_file' => null,
        'format_value_type' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'name_plural' => 'name_plural',
        'comments_count' => 'comments_count',
        'max_characters_allowed' => 'max_characters_allowed',
        'screenshot_url' => 'screenshot_url',
        'unformatted' => 'unformatted',
        'xml_space_preserve' => 'xml_space_preserve',
        'original_file' => 'original_file',
        'format_value_type' => 'format_value_type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name_plural' => 'setNamePlural',
        'comments_count' => 'setCommentsCount',
        'max_characters_allowed' => 'setMaxCharactersAllowed',
        'screenshot_url' => 'setScreenshotUrl',
        'unformatted' => 'setUnformatted',
        'xml_space_preserve' => 'setXmlSpacePreserve',
        'original_file' => 'setOriginalFile',
        'format_value_type' => 'setFormatValueType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name_plural' => 'getNamePlural',
        'comments_count' => 'getCommentsCount',
        'max_characters_allowed' => 'getMaxCharactersAllowed',
        'screenshot_url' => 'getScreenshotUrl',
        'unformatted' => 'getUnformatted',
        'xml_space_preserve' => 'getXmlSpacePreserve',
        'original_file' => 'getOriginalFile',
        'format_value_type' => 'getFormatValueType'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name_plural'] = isset($data['name_plural']) ? $data['name_plural'] : null;
        $this->container['comments_count'] = isset($data['comments_count']) ? $data['comments_count'] : null;
        $this->container['max_characters_allowed'] = isset($data['max_characters_allowed']) ? $data['max_characters_allowed'] : null;
        $this->container['screenshot_url'] = isset($data['screenshot_url']) ? $data['screenshot_url'] : null;
        $this->container['unformatted'] = isset($data['unformatted']) ? $data['unformatted'] : null;
        $this->container['xml_space_preserve'] = isset($data['xml_space_preserve']) ? $data['xml_space_preserve'] : null;
        $this->container['original_file'] = isset($data['original_file']) ? $data['original_file'] : null;
        $this->container['format_value_type'] = isset($data['format_value_type']) ? $data['format_value_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets name_plural
     * @return string
     */
    public function getNamePlural()
    {
        return $this->container['name_plural'];
    }

    /**
     * Sets name_plural
     * @param string $name_plural
     * @return $this
     */
    public function setNamePlural($name_plural)
    {
        $this->container['name_plural'] = $name_plural;

        return $this;
    }

    /**
     * Gets comments_count
     * @return int
     */
    public function getCommentsCount()
    {
        return $this->container['comments_count'];
    }

    /**
     * Sets comments_count
     * @param int $comments_count
     * @return $this
     */
    public function setCommentsCount($comments_count)
    {
        $this->container['comments_count'] = $comments_count;

        return $this;
    }

    /**
     * Gets max_characters_allowed
     * @return int
     */
    public function getMaxCharactersAllowed()
    {
        return $this->container['max_characters_allowed'];
    }

    /**
     * Sets max_characters_allowed
     * @param int $max_characters_allowed
     * @return $this
     */
    public function setMaxCharactersAllowed($max_characters_allowed)
    {
        $this->container['max_characters_allowed'] = $max_characters_allowed;

        return $this;
    }

    /**
     * Gets screenshot_url
     * @return string
     */
    public function getScreenshotUrl()
    {
        return $this->container['screenshot_url'];
    }

    /**
     * Sets screenshot_url
     * @param string $screenshot_url
     * @return $this
     */
    public function setScreenshotUrl($screenshot_url)
    {
        $this->container['screenshot_url'] = $screenshot_url;

        return $this;
    }

    /**
     * Gets unformatted
     * @return bool
     */
    public function getUnformatted()
    {
        return $this->container['unformatted'];
    }

    /**
     * Sets unformatted
     * @param bool $unformatted
     * @return $this
     */
    public function setUnformatted($unformatted)
    {
        $this->container['unformatted'] = $unformatted;

        return $this;
    }

    /**
     * Gets xml_space_preserve
     * @return bool
     */
    public function getXmlSpacePreserve()
    {
        return $this->container['xml_space_preserve'];
    }

    /**
     * Sets xml_space_preserve
     * @param bool $xml_space_preserve
     * @return $this
     */
    public function setXmlSpacePreserve($xml_space_preserve)
    {
        $this->container['xml_space_preserve'] = $xml_space_preserve;

        return $this;
    }

    /**
     * Gets original_file
     * @return string
     */
    public function getOriginalFile()
    {
        return $this->container['original_file'];
    }

    /**
     * Sets original_file
     * @param string $original_file
     * @return $this
     */
    public function setOriginalFile($original_file)
    {
        $this->container['original_file'] = $original_file;

        return $this;
    }

    /**
     * Gets format_value_type
     * @return string
     */
    public function getFormatValueType()
    {
        return $this->container['format_value_type'];
    }

    /**
     * Sets format_value_type
     * @param string $format_value_type
     * @return $this
     */
    public function setFormatValueType($format_value_type)
    {
        $this->container['format_value_type'] = $format_value_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


