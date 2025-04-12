<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TaskLink.php">
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
 * TaskLink
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * TaskLink
 *
 */
class TaskLink implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TaskLink";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'link' => '\Aspose\Tasks\Model\Link',
        'index' => 'int',
        'predecessor_uid' => 'int',
        'successor_uid' => 'int',
        'link_type' => '\Aspose\Tasks\Model\TaskLinkType',
        'lag' => 'int',
        'lag_format' => '\Aspose\Tasks\Model\TimeUnitType',
        'link_lag_time_span' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'link' => null,
        'index' => 'int32',
        'predecessor_uid' => 'int32',
        'successor_uid' => 'int32',
        'link_type' => null,
        'lag' => 'int32',
        'lag_format' => null,
        'link_lag_time_span' => 'time-span'
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
        'link' => 'link',
        'index' => 'index',
        'predecessor_uid' => 'predecessorUid',
        'successor_uid' => 'successorUid',
        'link_type' => 'linkType',
        'lag' => 'lag',
        'lag_format' => 'lagFormat',
        'link_lag_time_span' => 'linkLagTimeSpan'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'link' => 'setLink',
        'index' => 'setIndex',
        'predecessor_uid' => 'setPredecessorUid',
        'successor_uid' => 'setSuccessorUid',
        'link_type' => 'setLinkType',
        'lag' => 'setLag',
        'lag_format' => 'setLagFormat',
        'link_lag_time_span' => 'setLinkLagTimeSpan'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'link' => 'getLink',
        'index' => 'getIndex',
        'predecessor_uid' => 'getPredecessorUid',
        'successor_uid' => 'getSuccessorUid',
        'link_type' => 'getLinkType',
        'lag' => 'getLag',
        'lag_format' => 'getLagFormat',
        'link_lag_time_span' => 'getLinkLagTimeSpan'
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
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['predecessor_uid'] = isset($data['predecessor_uid']) ? $data['predecessor_uid'] : null;
        $this->container['successor_uid'] = isset($data['successor_uid']) ? $data['successor_uid'] : null;
        $this->container['link_type'] = isset($data['link_type']) ? $data['link_type'] : null;
        $this->container['lag'] = isset($data['lag']) ? $data['lag'] : null;
        $this->container['lag_format'] = isset($data['lag_format']) ? $data['lag_format'] : null;
        $this->container['link_lag_time_span'] = isset($data['link_lag_time_span']) ? $data['link_lag_time_span'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['predecessor_uid'] === null) {
            $invalidProperties[] = "'predecessor_uid' can't be null";
        }
        if ($this->container['successor_uid'] === null) {
            $invalidProperties[] = "'successor_uid' can't be null";
        }
        if ($this->container['link_type'] === null) {
            $invalidProperties[] = "'link_type' can't be null";
        }
        if ($this->container['lag'] === null) {
            $invalidProperties[] = "'lag' can't be null";
        }
        if ($this->container['lag_format'] === null) {
            $invalidProperties[] = "'lag_format' can't be null";
        }
        if ($this->container['link_lag_time_span'] === null) {
            $invalidProperties[] = "'link_lag_time_span' can't be null";
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

        if ($this->container['index'] === null) {
            return false;
        }
        if ($this->container['predecessor_uid'] === null) {
            return false;
        }
        if ($this->container['successor_uid'] === null) {
            return false;
        }
        if ($this->container['link_type'] === null) {
            return false;
        }
        if ($this->container['lag'] === null) {
            return false;
        }
        if ($this->container['lag_format'] === null) {
            return false;
        }
        if ($this->container['link_lag_time_span'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets link
     *
     * @return \Aspose\Tasks\Model\Link
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /*
     * Sets link
     *
     * @param \Aspose\Tasks\Model\Link $link link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /*
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /*
     * Sets index
     *
     * @param int $index index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /*
     * Gets predecessor_uid
     *
     * @return int
     */
    public function getPredecessorUid()
    {
        return $this->container['predecessor_uid'];
    }

    /*
     * Sets predecessor_uid
     *
     * @param int $predecessor_uid predecessor_uid
     *
     * @return $this
     */
    public function setPredecessorUid($predecessor_uid)
    {
        $this->container['predecessor_uid'] = $predecessor_uid;

        return $this;
    }

    /*
     * Gets successor_uid
     *
     * @return int
     */
    public function getSuccessorUid()
    {
        return $this->container['successor_uid'];
    }

    /*
     * Sets successor_uid
     *
     * @param int $successor_uid successor_uid
     *
     * @return $this
     */
    public function setSuccessorUid($successor_uid)
    {
        $this->container['successor_uid'] = $successor_uid;

        return $this;
    }

    /*
     * Gets link_type
     *
     * @return \Aspose\Tasks\Model\TaskLinkType
     */
    public function getLinkType()
    {
        return $this->container['link_type'];
    }

    /*
     * Sets link_type
     *
     * @param \Aspose\Tasks\Model\TaskLinkType $link_type link_type
     *
     * @return $this
     */
    public function setLinkType($link_type)
    {
        $this->container['link_type'] = $link_type;

        return $this;
    }

    /*
     * Gets lag
     *
     * @return int
     */
    public function getLag()
    {
        return $this->container['lag'];
    }

    /*
     * Sets lag
     *
     * @param int $lag lag
     *
     * @return $this
     */
    public function setLag($lag)
    {
        $this->container['lag'] = $lag;

        return $this;
    }

    /*
     * Gets lag_format
     *
     * @return \Aspose\Tasks\Model\TimeUnitType
     */
    public function getLagFormat()
    {
        return $this->container['lag_format'];
    }

    /*
     * Sets lag_format
     *
     * @param \Aspose\Tasks\Model\TimeUnitType $lag_format lag_format
     *
     * @return $this
     */
    public function setLagFormat($lag_format)
    {
        $this->container['lag_format'] = $lag_format;

        return $this;
    }

    /*
     * Gets link_lag_time_span
     *
     * @return string
     */
    public function getLinkLagTimeSpan()
    {
        return $this->container['link_lag_time_span'];
    }

    /*
     * Sets link_lag_time_span
     *
     * @param string $link_lag_time_span Gets or sets lag duration, depending on LagFormat.
     *
     * @return $this
     */
    public function setLinkLagTimeSpan($link_lag_time_span)
    {
        $this->container['link_lag_time_span'] = $link_lag_time_span;

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


