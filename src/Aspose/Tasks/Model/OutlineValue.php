<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OutlineValue.php">
 *   Copyright (c) 2021 Aspose.Tasks Cloud
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
 * OutlineValue
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * OutlineValue
 *
 * @description Represents an outline value.
 */
class OutlineValue implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "OutlineValue";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'value_id' => 'int',
        'field_guid' => 'string',
        'type' => '\Aspose\Tasks\Model\OutlineValueType',
        'parent_value_id' => 'int',
        'value' => 'string',
        'description' => 'string',
        'is_collapsed' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'value_id' => 'int32',
        'field_guid' => null,
        'type' => null,
        'parent_value_id' => 'int32',
        'value' => null,
        'description' => null,
        'is_collapsed' => null
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
        'value_id' => 'valueId',
        'field_guid' => 'fieldGuid',
        'type' => 'type',
        'parent_value_id' => 'parentValueId',
        'value' => 'value',
        'description' => 'description',
        'is_collapsed' => 'isCollapsed'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value_id' => 'setValueId',
        'field_guid' => 'setFieldGuid',
        'type' => 'setType',
        'parent_value_id' => 'setParentValueId',
        'value' => 'setValue',
        'description' => 'setDescription',
        'is_collapsed' => 'setIsCollapsed'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value_id' => 'getValueId',
        'field_guid' => 'getFieldGuid',
        'type' => 'getType',
        'parent_value_id' => 'getParentValueId',
        'value' => 'getValue',
        'description' => 'getDescription',
        'is_collapsed' => 'getIsCollapsed'
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
        $this->container['value_id'] = isset($data['value_id']) ? $data['value_id'] : null;
        $this->container['field_guid'] = isset($data['field_guid']) ? $data['field_guid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['parent_value_id'] = isset($data['parent_value_id']) ? $data['parent_value_id'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['is_collapsed'] = isset($data['is_collapsed']) ? $data['is_collapsed'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['value_id'] === null) {
            $invalidProperties[] = "'value_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['parent_value_id'] === null) {
            $invalidProperties[] = "'parent_value_id' can't be null";
        }
        if ($this->container['is_collapsed'] === null) {
            $invalidProperties[] = "'is_collapsed' can't be null";
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

        if ($this->container['value_id'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['parent_value_id'] === null) {
            return false;
        }
        if ($this->container['is_collapsed'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets value_id
     *
     * @return int
     */
    public function getValueId()
    {
        return $this->container['value_id'];
    }

    /*
     * Sets value_id
     *
     * @param int $value_id The unique Id of an outline code value within a project.
     *
     * @return $this
     */
    public function setValueId($value_id)
    {
        $this->container['value_id'] = $value_id;

        return $this;
    }

    /*
     * Gets field_guid
     *
     * @return string
     */
    public function getFieldGuid()
    {
        return $this->container['field_guid'];
    }

    /*
     * Sets field_guid
     *
     * @param string $field_guid The Guid of an outline code value.
     *
     * @return $this
     */
    public function setFieldGuid($field_guid)
    {
        $this->container['field_guid'] = $field_guid;

        return $this;
    }

    /*
     * Gets type
     *
     * @return \Aspose\Tasks\Model\OutlineValueType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /*
     * Sets type
     *
     * @param \Aspose\Tasks\Model\OutlineValueType $type The outline code type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /*
     * Gets parent_value_id
     *
     * @return int
     */
    public function getParentValueId()
    {
        return $this->container['parent_value_id'];
    }

    /*
     * Sets parent_value_id
     *
     * @param int $parent_value_id The Id of a parent node of an outline code.
     *
     * @return $this
     */
    public function setParentValueId($parent_value_id)
    {
        $this->container['parent_value_id'] = $parent_value_id;

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
     * @param string $value The actual value.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /*
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /*
     * Sets description
     *
     * @param string $description The description of an outline value.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /*
     * Gets is_collapsed
     *
     * @return bool
     */
    public function getIsCollapsed()
    {
        return $this->container['is_collapsed'];
    }

    /*
     * Sets is_collapsed
     *
     * @param bool $is_collapsed Determines whether outline value is collapsed or not.
     *
     * @return $this
     */
    public function setIsCollapsed($is_collapsed)
    {
        $this->container['is_collapsed'] = $is_collapsed;

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


