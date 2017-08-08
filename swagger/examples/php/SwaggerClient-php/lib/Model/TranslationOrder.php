<?php
/**
 * TranslationOrder
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
 * TranslationOrder Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TranslationOrder implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TranslationOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'lsp' => 'string',
        'amount_in_cents' => 'int',
        'currency' => 'string',
        'message' => 'string',
        'state' => 'string',
        'translation_type' => 'string',
        'progress_percent' => 'int',
        'source_locale' => '\Swagger\Client\Model\LocalePreview',
        'target_locales' => '\Swagger\Client\Model\LocalePreview[]',
        'tag' => 'string',
        'styleguide' => '\Swagger\Client\Model\StyleguidePreview',
        'unverify_translations_upon_delivery' => 'bool',
        'quality' => 'bool',
        'priority' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'lsp' => null,
        'amount_in_cents' => null,
        'currency' => null,
        'message' => null,
        'state' => null,
        'translation_type' => null,
        'progress_percent' => null,
        'source_locale' => null,
        'target_locales' => null,
        'tag' => null,
        'styleguide' => null,
        'unverify_translations_upon_delivery' => null,
        'quality' => null,
        'priority' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'id' => 'id',
        'lsp' => 'lsp',
        'amount_in_cents' => 'amount_in_cents',
        'currency' => 'currency',
        'message' => 'message',
        'state' => 'state',
        'translation_type' => 'translation_type',
        'progress_percent' => 'progress_percent',
        'source_locale' => 'source_locale',
        'target_locales' => 'target_locales',
        'tag' => 'tag',
        'styleguide' => 'styleguide',
        'unverify_translations_upon_delivery' => 'unverify_translations_upon_delivery',
        'quality' => 'quality',
        'priority' => 'priority',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'lsp' => 'setLsp',
        'amount_in_cents' => 'setAmountInCents',
        'currency' => 'setCurrency',
        'message' => 'setMessage',
        'state' => 'setState',
        'translation_type' => 'setTranslationType',
        'progress_percent' => 'setProgressPercent',
        'source_locale' => 'setSourceLocale',
        'target_locales' => 'setTargetLocales',
        'tag' => 'setTag',
        'styleguide' => 'setStyleguide',
        'unverify_translations_upon_delivery' => 'setUnverifyTranslationsUponDelivery',
        'quality' => 'setQuality',
        'priority' => 'setPriority',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'lsp' => 'getLsp',
        'amount_in_cents' => 'getAmountInCents',
        'currency' => 'getCurrency',
        'message' => 'getMessage',
        'state' => 'getState',
        'translation_type' => 'getTranslationType',
        'progress_percent' => 'getProgressPercent',
        'source_locale' => 'getSourceLocale',
        'target_locales' => 'getTargetLocales',
        'tag' => 'getTag',
        'styleguide' => 'getStyleguide',
        'unverify_translations_upon_delivery' => 'getUnverifyTranslationsUponDelivery',
        'quality' => 'getQuality',
        'priority' => 'getPriority',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lsp'] = isset($data['lsp']) ? $data['lsp'] : null;
        $this->container['amount_in_cents'] = isset($data['amount_in_cents']) ? $data['amount_in_cents'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['translation_type'] = isset($data['translation_type']) ? $data['translation_type'] : null;
        $this->container['progress_percent'] = isset($data['progress_percent']) ? $data['progress_percent'] : null;
        $this->container['source_locale'] = isset($data['source_locale']) ? $data['source_locale'] : null;
        $this->container['target_locales'] = isset($data['target_locales']) ? $data['target_locales'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['styleguide'] = isset($data['styleguide']) ? $data['styleguide'] : null;
        $this->container['unverify_translations_upon_delivery'] = isset($data['unverify_translations_upon_delivery']) ? $data['unverify_translations_upon_delivery'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lsp
     * @return string
     */
    public function getLsp()
    {
        return $this->container['lsp'];
    }

    /**
     * Sets lsp
     * @param string $lsp
     * @return $this
     */
    public function setLsp($lsp)
    {
        $this->container['lsp'] = $lsp;

        return $this;
    }

    /**
     * Gets amount_in_cents
     * @return int
     */
    public function getAmountInCents()
    {
        return $this->container['amount_in_cents'];
    }

    /**
     * Sets amount_in_cents
     * @param int $amount_in_cents
     * @return $this
     */
    public function setAmountInCents($amount_in_cents)
    {
        $this->container['amount_in_cents'] = $amount_in_cents;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets translation_type
     * @return string
     */
    public function getTranslationType()
    {
        return $this->container['translation_type'];
    }

    /**
     * Sets translation_type
     * @param string $translation_type
     * @return $this
     */
    public function setTranslationType($translation_type)
    {
        $this->container['translation_type'] = $translation_type;

        return $this;
    }

    /**
     * Gets progress_percent
     * @return int
     */
    public function getProgressPercent()
    {
        return $this->container['progress_percent'];
    }

    /**
     * Sets progress_percent
     * @param int $progress_percent
     * @return $this
     */
    public function setProgressPercent($progress_percent)
    {
        $this->container['progress_percent'] = $progress_percent;

        return $this;
    }

    /**
     * Gets source_locale
     * @return \Swagger\Client\Model\LocalePreview
     */
    public function getSourceLocale()
    {
        return $this->container['source_locale'];
    }

    /**
     * Sets source_locale
     * @param \Swagger\Client\Model\LocalePreview $source_locale
     * @return $this
     */
    public function setSourceLocale($source_locale)
    {
        $this->container['source_locale'] = $source_locale;

        return $this;
    }

    /**
     * Gets target_locales
     * @return \Swagger\Client\Model\LocalePreview[]
     */
    public function getTargetLocales()
    {
        return $this->container['target_locales'];
    }

    /**
     * Sets target_locales
     * @param \Swagger\Client\Model\LocalePreview[] $target_locales
     * @return $this
     */
    public function setTargetLocales($target_locales)
    {
        $this->container['target_locales'] = $target_locales;

        return $this;
    }

    /**
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets styleguide
     * @return \Swagger\Client\Model\StyleguidePreview
     */
    public function getStyleguide()
    {
        return $this->container['styleguide'];
    }

    /**
     * Sets styleguide
     * @param \Swagger\Client\Model\StyleguidePreview $styleguide
     * @return $this
     */
    public function setStyleguide($styleguide)
    {
        $this->container['styleguide'] = $styleguide;

        return $this;
    }

    /**
     * Gets unverify_translations_upon_delivery
     * @return bool
     */
    public function getUnverifyTranslationsUponDelivery()
    {
        return $this->container['unverify_translations_upon_delivery'];
    }

    /**
     * Sets unverify_translations_upon_delivery
     * @param bool $unverify_translations_upon_delivery
     * @return $this
     */
    public function setUnverifyTranslationsUponDelivery($unverify_translations_upon_delivery)
    {
        $this->container['unverify_translations_upon_delivery'] = $unverify_translations_upon_delivery;

        return $this;
    }

    /**
     * Gets quality
     * @return bool
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     * @param bool $quality
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

        return $this;
    }

    /**
     * Gets priority
     * @return bool
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param bool $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


