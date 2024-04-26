<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TableTextStyle.php">
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
 * TableTextStyle
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * TableTextStyle
 *
 * @description Represents a text style in a view table.
 */
class TableTextStyle implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TableTextStyle";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'row_uid' => 'int',
        'field' => '\Aspose\Tasks\Model\Field',
        'item_type' => '\Aspose\Tasks\Model\TextItemType',
        'color' => '\Aspose\Tasks\Model\Colors',
        'background_pattern' => '\Aspose\Tasks\Model\BackgroundPattern',
        'background_color' => '\Aspose\Tasks\Model\Colors'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'row_uid' => 'int32',
        'field' => null,
        'item_type' => null,
        'color' => null,
        'background_pattern' => null,
        'background_color' => null
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
        'row_uid' => 'rowUid',
        'field' => 'field',
        'item_type' => 'itemType',
        'color' => 'color',
        'background_pattern' => 'backgroundPattern',
        'background_color' => 'backgroundColor'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'row_uid' => 'setRowUid',
        'field' => 'setField',
        'item_type' => 'setItemType',
        'color' => 'setColor',
        'background_pattern' => 'setBackgroundPattern',
        'background_color' => 'setBackgroundColor'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'row_uid' => 'getRowUid',
        'field' => 'getField',
        'item_type' => 'getItemType',
        'color' => 'getColor',
        'background_pattern' => 'getBackgroundPattern',
        'background_color' => 'getBackgroundColor'
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
        $this->container['row_uid'] = isset($data['row_uid']) ? $data['row_uid'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['item_type'] = isset($data['item_type']) ? $data['item_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['background_pattern'] = isset($data['background_pattern']) ? $data['background_pattern'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['row_uid'] === null) {
            $invalidProperties[] = "'row_uid' can't be null";
        }
        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        if ($this->container['item_type'] === null) {
            $invalidProperties[] = "'item_type' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['background_pattern'] === null) {
            $invalidProperties[] = "'background_pattern' can't be null";
        }
        if ($this->container['background_color'] === null) {
            $invalidProperties[] = "'background_color' can't be null";
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

        if ($this->container['row_uid'] === null) {
            return false;
        }
        if ($this->container['field'] === null) {
            return false;
        }
        if ($this->container['item_type'] === null) {
            return false;
        }
        if ($this->container['color'] === null) {
            return false;
        }
        if ($this->container['background_pattern'] === null) {
            return false;
        }
        if ($this->container['background_color'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets row_uid
     *
     * @return int
     */
    public function getRowUid()
    {
        return $this->container['row_uid'];
    }

    /*
     * Sets row_uid
     *
     * @param int $row_uid Gets a row unique id. Return -1 if the style is to be applied to all rows of a view.
     *
     * @return $this
     */
    public function setRowUid($row_uid)
    {
        $this->container['row_uid'] = $row_uid;

        return $this;
    }

    /*
     * Gets field
     *
     * @return \Aspose\Tasks\Model\Field
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /*
     * Sets field
     *
     * @param \Aspose\Tasks\Model\Field $field Gets or sets a field the style is to be applied to.
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }

    /*
     * Gets item_type
     *
     * @return \Aspose\Tasks\Model\TextItemType
     */
    public function getItemType()
    {
        return $this->container['item_type'];
    }

    /*
     * Sets item_type
     *
     * @param \Aspose\Tasks\Model\TextItemType $item_type Returns a value of the TextItemType enum.
     *
     * @return $this
     */
    public function setItemType($item_type)
    {
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /*
     * Gets color
     *
     * @return \Aspose\Tasks\Model\Colors
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /*
     * Sets color
     *
     * @param \Aspose\Tasks\Model\Colors $color Gets or sets color of the text.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /*
     * Gets background_pattern
     *
     * @return \Aspose\Tasks\Model\BackgroundPattern
     */
    public function getBackgroundPattern()
    {
        return $this->container['background_pattern'];
    }

    /*
     * Sets background_pattern
     *
     * @param \Aspose\Tasks\Model\BackgroundPattern $background_pattern Gets or sets background pattern of the text style.
     *
     * @return $this
     */
    public function setBackgroundPattern($background_pattern)
    {
        $this->container['background_pattern'] = $background_pattern;

        return $this;
    }

    /*
     * Gets background_color
     *
     * @return \Aspose\Tasks\Model\Colors
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /*
     * Sets background_color
     *
     * @param \Aspose\Tasks\Model\Colors $background_color Gets or sets background color of the text style.
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

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


