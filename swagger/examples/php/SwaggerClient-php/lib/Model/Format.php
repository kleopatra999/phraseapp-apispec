<?php
/**
 * Format
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
 * Format Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Format implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Format';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'api_name' => 'string',
        'description' => 'string',
        'extension' => 'string',
        'default_encoding' => 'string',
        'importable' => 'bool',
        'exportable' => 'bool',
        'default_file' => 'string',
        'renders_default_locale' => 'bool',
        'includes_locale_information' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'api_name' => null,
        'description' => null,
        'extension' => null,
        'default_encoding' => null,
        'importable' => null,
        'exportable' => null,
        'default_file' => null,
        'renders_default_locale' => null,
        'includes_locale_information' => null
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
        'name' => 'name',
        'api_name' => 'api_name',
        'description' => 'description',
        'extension' => 'extension',
        'default_encoding' => 'default_encoding',
        'importable' => 'importable',
        'exportable' => 'exportable',
        'default_file' => 'default_file',
        'renders_default_locale' => 'renders_default_locale',
        'includes_locale_information' => 'includes_locale_information'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'api_name' => 'setApiName',
        'description' => 'setDescription',
        'extension' => 'setExtension',
        'default_encoding' => 'setDefaultEncoding',
        'importable' => 'setImportable',
        'exportable' => 'setExportable',
        'default_file' => 'setDefaultFile',
        'renders_default_locale' => 'setRendersDefaultLocale',
        'includes_locale_information' => 'setIncludesLocaleInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'api_name' => 'getApiName',
        'description' => 'getDescription',
        'extension' => 'getExtension',
        'default_encoding' => 'getDefaultEncoding',
        'importable' => 'getImportable',
        'exportable' => 'getExportable',
        'default_file' => 'getDefaultFile',
        'renders_default_locale' => 'getRendersDefaultLocale',
        'includes_locale_information' => 'getIncludesLocaleInformation'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['api_name'] = isset($data['api_name']) ? $data['api_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['default_encoding'] = isset($data['default_encoding']) ? $data['default_encoding'] : null;
        $this->container['importable'] = isset($data['importable']) ? $data['importable'] : null;
        $this->container['exportable'] = isset($data['exportable']) ? $data['exportable'] : null;
        $this->container['default_file'] = isset($data['default_file']) ? $data['default_file'] : null;
        $this->container['renders_default_locale'] = isset($data['renders_default_locale']) ? $data['renders_default_locale'] : null;
        $this->container['includes_locale_information'] = isset($data['includes_locale_information']) ? $data['includes_locale_information'] : null;
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets api_name
     * @return string
     */
    public function getApiName()
    {
        return $this->container['api_name'];
    }

    /**
     * Sets api_name
     * @param string $api_name
     * @return $this
     */
    public function setApiName($api_name)
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extension
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets default_encoding
     * @return string
     */
    public function getDefaultEncoding()
    {
        return $this->container['default_encoding'];
    }

    /**
     * Sets default_encoding
     * @param string $default_encoding
     * @return $this
     */
    public function setDefaultEncoding($default_encoding)
    {
        $this->container['default_encoding'] = $default_encoding;

        return $this;
    }

    /**
     * Gets importable
     * @return bool
     */
    public function getImportable()
    {
        return $this->container['importable'];
    }

    /**
     * Sets importable
     * @param bool $importable
     * @return $this
     */
    public function setImportable($importable)
    {
        $this->container['importable'] = $importable;

        return $this;
    }

    /**
     * Gets exportable
     * @return bool
     */
    public function getExportable()
    {
        return $this->container['exportable'];
    }

    /**
     * Sets exportable
     * @param bool $exportable
     * @return $this
     */
    public function setExportable($exportable)
    {
        $this->container['exportable'] = $exportable;

        return $this;
    }

    /**
     * Gets default_file
     * @return string
     */
    public function getDefaultFile()
    {
        return $this->container['default_file'];
    }

    /**
     * Sets default_file
     * @param string $default_file
     * @return $this
     */
    public function setDefaultFile($default_file)
    {
        $this->container['default_file'] = $default_file;

        return $this;
    }

    /**
     * Gets renders_default_locale
     * @return bool
     */
    public function getRendersDefaultLocale()
    {
        return $this->container['renders_default_locale'];
    }

    /**
     * Sets renders_default_locale
     * @param bool $renders_default_locale
     * @return $this
     */
    public function setRendersDefaultLocale($renders_default_locale)
    {
        $this->container['renders_default_locale'] = $renders_default_locale;

        return $this;
    }

    /**
     * Gets includes_locale_information
     * @return bool
     */
    public function getIncludesLocaleInformation()
    {
        return $this->container['includes_locale_information'];
    }

    /**
     * Sets includes_locale_information
     * @param bool $includes_locale_information
     * @return $this
     */
    public function setIncludesLocaleInformation($includes_locale_information)
    {
        $this->container['includes_locale_information'] = $includes_locale_information;

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

