<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExtendedAttribute.php">
 *   Copyright (c) 2018 Aspose.Tasks for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */
/*
 * ExtendedAttribute
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * ExtendedAttribute
 *
 * @description Represents extended attribute.
 */
class ExtendedAttribute implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ExtendedAttribute";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'field_id' => 'string',
        'attribute_type' => '\Aspose\Tasks\Model\CustomFieldType',
        'value_guid' => 'string',
        'lookup_value_id' => 'int',
        'duration_value' => '\Aspose\Tasks\Model\Duration',
        'numeric_value' => 'float',
        'date_value' => '\DateTime',
        'flag_value' => 'bool',
        'text_value' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'field_id' => null,
        'attribute_type' => null,
        'value_guid' => null,
        'lookup_value_id' => 'int32',
        'duration_value' => null,
        'numeric_value' => 'decimal',
        'date_value' => 'date-time',
        'flag_value' => null,
        'text_value' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'field_id' => 'FieldId',
        'attribute_type' => 'AttributeType',
        'value_guid' => 'ValueGuid',
        'lookup_value_id' => 'LookupValueId',
        'duration_value' => 'DurationValue',
        'numeric_value' => 'NumericValue',
        'date_value' => 'DateValue',
        'flag_value' => 'FlagValue',
        'text_value' => 'TextValue'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_id' => 'setFieldId',
        'attribute_type' => 'setAttributeType',
        'value_guid' => 'setValueGuid',
        'lookup_value_id' => 'setLookupValueId',
        'duration_value' => 'setDurationValue',
        'numeric_value' => 'setNumericValue',
        'date_value' => 'setDateValue',
        'flag_value' => 'setFlagValue',
        'text_value' => 'setTextValue'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_id' => 'getFieldId',
        'attribute_type' => 'getAttributeType',
        'value_guid' => 'getValueGuid',
        'lookup_value_id' => 'getLookupValueId',
        'duration_value' => 'getDurationValue',
        'numeric_value' => 'getNumericValue',
        'date_value' => 'getDateValue',
        'flag_value' => 'getFlagValue',
        'text_value' => 'getTextValue'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['field_id'] = isset($data['field_id']) ? $data['field_id'] : null;
        $this->container['attribute_type'] = isset($data['attribute_type']) ? $data['attribute_type'] : null;
        $this->container['value_guid'] = isset($data['value_guid']) ? $data['value_guid'] : null;
        $this->container['lookup_value_id'] = isset($data['lookup_value_id']) ? $data['lookup_value_id'] : null;
        $this->container['duration_value'] = isset($data['duration_value']) ? $data['duration_value'] : null;
        $this->container['numeric_value'] = isset($data['numeric_value']) ? $data['numeric_value'] : null;
        $this->container['date_value'] = isset($data['date_value']) ? $data['date_value'] : null;
        $this->container['flag_value'] = isset($data['flag_value']) ? $data['flag_value'] : null;
        $this->container['text_value'] = isset($data['text_value']) ? $data['text_value'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['attribute_type'] === null) {
            $invalidProperties[] = "'attribute_type' can't be null";
        }
        if ($this->container['numeric_value'] === null) {
            $invalidProperties[] = "'numeric_value' can't be null";
        }
        if ($this->container['date_value'] === null) {
            $invalidProperties[] = "'date_value' can't be null";
        }
        if ($this->container['flag_value'] === null) {
            $invalidProperties[] = "'flag_value' can't be null";
        }
        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['attribute_type'] === null) {
            return false;
        }
        if ($this->container['numeric_value'] === null) {
            return false;
        }
        if ($this->container['date_value'] === null) {
            return false;
        }
        if ($this->container['flag_value'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets field_id
     *
     * @return string
     */
    public function getFieldId()
    {
        return $this->container['field_id'];
    }

    /*
     * Sets field_id
     *
     * @param string $field_id Gets or sets the id of a field.
     *
     * @return $this
     */
    public function setFieldId($field_id)
    {
        $this->container['field_id'] = $field_id;

        return $this;
    }

    /*
     * Gets attribute_type
     *
     * @return \Aspose\Tasks\Model\CustomFieldType
     */
    public function getAttributeType()
    {
        return $this->container['attribute_type'];
    }

    /*
     * Sets attribute_type
     *
     * @param \Aspose\Tasks\Model\CustomFieldType $attribute_type Gets the type of a custom field.
     *
     * @return $this
     */
    public function setAttributeType($attribute_type)
    {
        $this->container['attribute_type'] = $attribute_type;

        return $this;
    }

    /*
     * Gets value_guid
     *
     * @return string
     */
    public function getValueGuid()
    {
        return $this->container['value_guid'];
    }

    /*
     * Sets value_guid
     *
     * @param string $value_guid Gets or sets the guid of a value.
     *
     * @return $this
     */
    public function setValueGuid($value_guid)
    {
        $this->container['value_guid'] = $value_guid;

        return $this;
    }

    /*
     * Gets lookup_value_id
     *
     * @return int
     */
    public function getLookupValueId()
    {
        return $this->container['lookup_value_id'];
    }

    /*
     * Sets lookup_value_id
     *
     * @param int $lookup_value_id Gets or sets Id of the lookup value (if value is lookup value)
     *
     * @return $this
     */
    public function setLookupValueId($lookup_value_id)
    {
        $this->container['lookup_value_id'] = $lookup_value_id;

        return $this;
    }

    /*
     * Gets duration_value
     *
     * @return \Aspose\Tasks\Model\Duration
     */
    public function getDurationValue()
    {
        return $this->container['duration_value'];
    }

    /*
     * Sets duration_value
     *
     * @param \Aspose\Tasks\Model\Duration $duration_value Gets or sets value for attributes with 'Duration' type.
     *
     * @return $this
     */
    public function setDurationValue($duration_value)
    {
        $this->container['duration_value'] = $duration_value;

        return $this;
    }

    /*
     * Gets numeric_value
     *
     * @return float
     */
    public function getNumericValue()
    {
        return $this->container['numeric_value'];
    }

    /*
     * Sets numeric_value
     *
     * @param float $numeric_value Gets or sets a value for attributes with numeric types (Cost, Number).
     *
     * @return $this
     */
    public function setNumericValue($numeric_value)
    {
        $this->container['numeric_value'] = $numeric_value;

        return $this;
    }

    /*
     * Gets date_value
     *
     * @return \DateTime
     */
    public function getDateValue()
    {
        return $this->container['date_value'];
    }

    /*
     * Sets date_value
     *
     * @param \DateTime $date_value Gets or sets a value for attributes with date types (Date, Start, Finish).
     *
     * @return $this
     */
    public function setDateValue($date_value)
    {
        $this->container['date_value'] = $date_value;

        return $this;
    }

    /*
     * Gets flag_value
     *
     * @return bool
     */
    public function getFlagValue()
    {
        return $this->container['flag_value'];
    }

    /*
     * Sets flag_value
     *
     * @param bool $flag_value Gets or sets a value indicating whether a flag is set for an attribute with 'Flag' type.
     *
     * @return $this
     */
    public function setFlagValue($flag_value)
    {
        $this->container['flag_value'] = $flag_value;

        return $this;
    }

    /*
     * Gets text_value
     *
     * @return string
     */
    public function getTextValue()
    {
        return $this->container['text_value'];
    }

    /*
     * Sets text_value
     *
     * @param string $text_value Gets or sets a value for attributes with 'Text' type.
     *
     * @return $this
     */
    public function setTextValue($text_value)
    {
        $this->container['text_value'] = $text_value;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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


