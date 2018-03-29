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
        'value' => 'string',
        'value_guid' => 'string',
        'duration_format' => '\Aspose\Tasks\Model\TimeUnitType',
        'lookup_value_id' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'field_id' => null,
        'value' => null,
        'value_guid' => null,
        'duration_format' => null,
        'lookup_value_id' => 'int32'
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
        'value' => 'Value',
        'value_guid' => 'ValueGuid',
        'duration_format' => 'DurationFormat',
        'lookup_value_id' => 'LookupValueId'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_id' => 'setFieldId',
        'value' => 'setValue',
        'value_guid' => 'setValueGuid',
        'duration_format' => 'setDurationFormat',
        'lookup_value_id' => 'setLookupValueId'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_id' => 'getFieldId',
        'value' => 'getValue',
        'value_guid' => 'getValueGuid',
        'duration_format' => 'getDurationFormat',
        'lookup_value_id' => 'getLookupValueId'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['value_guid'] = isset($data['value_guid']) ? $data['value_guid'] : null;
        $this->container['duration_format'] = isset($data['duration_format']) ? $data['duration_format'] : null;
        $this->container['lookup_value_id'] = isset($data['lookup_value_id']) ? $data['lookup_value_id'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['duration_format'] === null) {
            $invalidProperties[] = "'duration_format' can't be null";
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

        if ($this->container['duration_format'] === null) {
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
     * @param string $field_id Returns or sets the id of a field.
     *
     * @return $this
     */
    public function setFieldId($field_id)
    {
        $this->container['field_id'] = $field_id;

        return $this;
    }

    /*
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /*
     * Sets value
     *
     * @param string $value Returns or sets the value of a field.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * @param string $value_guid Returns or sets the guid of a value.
     *
     * @return $this
     */
    public function setValueGuid($value_guid)
    {
        $this->container['value_guid'] = $value_guid;

        return $this;
    }

    /*
     * Gets duration_format
     *
     * @return \Aspose\Tasks\Model\TimeUnitType
     */
    public function getDurationFormat()
    {
        return $this->container['duration_format'];
    }

    /*
     * Sets duration_format
     *
     * @param \Aspose\Tasks\Model\TimeUnitType $duration_format Returns or sets the duration format.
     *
     * @return $this
     */
    public function setDurationFormat($duration_format)
    {
        $this->container['duration_format'] = $duration_format;

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
     * @param int $lookup_value_id Id of the lookup value (if value is lookup value)
     *
     * @return $this
     */
    public function setLookupValueId($lookup_value_id)
    {
        $this->container['lookup_value_id'] = $lookup_value_id;

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


