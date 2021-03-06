<?php
/**
 * LocaleStatistics
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
 * LocaleStatistics Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LocaleStatistics implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LocaleStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keys_total_count' => 'int',
        'keys_untranslated_count' => 'int',
        'words_total_count' => 'int',
        'translations_completed_count' => 'int',
        'translations_unverified_count' => 'int',
        'unverified_words_count' => 'int',
        'missing_words_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keys_total_count' => null,
        'keys_untranslated_count' => null,
        'words_total_count' => null,
        'translations_completed_count' => null,
        'translations_unverified_count' => null,
        'unverified_words_count' => null,
        'missing_words_count' => null
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
        'keys_total_count' => 'keys_total_count',
        'keys_untranslated_count' => 'keys_untranslated_count',
        'words_total_count' => 'words_total_count',
        'translations_completed_count' => 'translations_completed_count',
        'translations_unverified_count' => 'translations_unverified_count',
        'unverified_words_count' => 'unverified_words_count',
        'missing_words_count' => 'missing_words_count'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'keys_total_count' => 'setKeysTotalCount',
        'keys_untranslated_count' => 'setKeysUntranslatedCount',
        'words_total_count' => 'setWordsTotalCount',
        'translations_completed_count' => 'setTranslationsCompletedCount',
        'translations_unverified_count' => 'setTranslationsUnverifiedCount',
        'unverified_words_count' => 'setUnverifiedWordsCount',
        'missing_words_count' => 'setMissingWordsCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'keys_total_count' => 'getKeysTotalCount',
        'keys_untranslated_count' => 'getKeysUntranslatedCount',
        'words_total_count' => 'getWordsTotalCount',
        'translations_completed_count' => 'getTranslationsCompletedCount',
        'translations_unverified_count' => 'getTranslationsUnverifiedCount',
        'unverified_words_count' => 'getUnverifiedWordsCount',
        'missing_words_count' => 'getMissingWordsCount'
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
        $this->container['keys_total_count'] = isset($data['keys_total_count']) ? $data['keys_total_count'] : null;
        $this->container['keys_untranslated_count'] = isset($data['keys_untranslated_count']) ? $data['keys_untranslated_count'] : null;
        $this->container['words_total_count'] = isset($data['words_total_count']) ? $data['words_total_count'] : null;
        $this->container['translations_completed_count'] = isset($data['translations_completed_count']) ? $data['translations_completed_count'] : null;
        $this->container['translations_unverified_count'] = isset($data['translations_unverified_count']) ? $data['translations_unverified_count'] : null;
        $this->container['unverified_words_count'] = isset($data['unverified_words_count']) ? $data['unverified_words_count'] : null;
        $this->container['missing_words_count'] = isset($data['missing_words_count']) ? $data['missing_words_count'] : null;
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
     * Gets keys_total_count
     * @return int
     */
    public function getKeysTotalCount()
    {
        return $this->container['keys_total_count'];
    }

    /**
     * Sets keys_total_count
     * @param int $keys_total_count
     * @return $this
     */
    public function setKeysTotalCount($keys_total_count)
    {
        $this->container['keys_total_count'] = $keys_total_count;

        return $this;
    }

    /**
     * Gets keys_untranslated_count
     * @return int
     */
    public function getKeysUntranslatedCount()
    {
        return $this->container['keys_untranslated_count'];
    }

    /**
     * Sets keys_untranslated_count
     * @param int $keys_untranslated_count
     * @return $this
     */
    public function setKeysUntranslatedCount($keys_untranslated_count)
    {
        $this->container['keys_untranslated_count'] = $keys_untranslated_count;

        return $this;
    }

    /**
     * Gets words_total_count
     * @return int
     */
    public function getWordsTotalCount()
    {
        return $this->container['words_total_count'];
    }

    /**
     * Sets words_total_count
     * @param int $words_total_count
     * @return $this
     */
    public function setWordsTotalCount($words_total_count)
    {
        $this->container['words_total_count'] = $words_total_count;

        return $this;
    }

    /**
     * Gets translations_completed_count
     * @return int
     */
    public function getTranslationsCompletedCount()
    {
        return $this->container['translations_completed_count'];
    }

    /**
     * Sets translations_completed_count
     * @param int $translations_completed_count
     * @return $this
     */
    public function setTranslationsCompletedCount($translations_completed_count)
    {
        $this->container['translations_completed_count'] = $translations_completed_count;

        return $this;
    }

    /**
     * Gets translations_unverified_count
     * @return int
     */
    public function getTranslationsUnverifiedCount()
    {
        return $this->container['translations_unverified_count'];
    }

    /**
     * Sets translations_unverified_count
     * @param int $translations_unverified_count
     * @return $this
     */
    public function setTranslationsUnverifiedCount($translations_unverified_count)
    {
        $this->container['translations_unverified_count'] = $translations_unverified_count;

        return $this;
    }

    /**
     * Gets unverified_words_count
     * @return int
     */
    public function getUnverifiedWordsCount()
    {
        return $this->container['unverified_words_count'];
    }

    /**
     * Sets unverified_words_count
     * @param int $unverified_words_count
     * @return $this
     */
    public function setUnverifiedWordsCount($unverified_words_count)
    {
        $this->container['unverified_words_count'] = $unverified_words_count;

        return $this;
    }

    /**
     * Gets missing_words_count
     * @return int
     */
    public function getMissingWordsCount()
    {
        return $this->container['missing_words_count'];
    }

    /**
     * Sets missing_words_count
     * @param int $missing_words_count
     * @return $this
     */
    public function setMissingWordsCount($missing_words_count)
    {
        $this->container['missing_words_count'] = $missing_words_count;

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


