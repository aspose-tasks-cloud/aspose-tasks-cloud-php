<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WBSCodeMask.php">
 *   Copyright (c) 2018 Aspose.Tasks Cloud
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
 * WBSCodeMask
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * WBSCodeMask
 *
 */
class WBSCodeMask implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WBSCodeMask";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'level' => 'int',
        'length' => 'int',
        'sequence' => '\Aspose\Tasks\Model\WBSSequence',
        'separator' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'level' => 'int32',
        'length' => 'byte',
        'sequence' => null,
        'separator' => null
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
        'level' => 'Level',
        'length' => 'Length',
        'sequence' => 'Sequence',
        'separator' => 'Separator'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'level' => 'setLevel',
        'length' => 'setLength',
        'sequence' => 'setSequence',
        'separator' => 'setSeparator'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'level' => 'getLevel',
        'length' => 'getLength',
        'sequence' => 'getSequence',
        'separator' => 'getSeparator'
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
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['separator'] = isset($data['separator']) ? $data['separator'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
        }
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
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

        if ($this->container['level'] === null) {
            return false;
        }
        if ($this->container['length'] === null) {
            return false;
        }
        if ($this->container['sequence'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /*
     * Sets level
     *
     * @param int $level Mask level.
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /*
     * Gets length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /*
     * Sets length
     *
     * @param int $length The number of characters of the code string.
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /*
     * Gets sequence
     *
     * @return \Aspose\Tasks\Model\WBSSequence
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /*
     * Sets sequence
     *
     * @param \Aspose\Tasks\Model\WBSSequence $sequence Specifies  the type of character of the code string.
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /*
     * Gets separator
     *
     * @return string
     */
    public function getSeparator()
    {
        return $this->container['separator'];
    }

    /*
     * Sets separator
     *
     * @param string $separator Specifies the separator of the code string. Default value is Period.
     *
     * @return $this
     */
    public function setSeparator($separator)
    {
        $this->container['separator'] = $separator;

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


