<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="View.php">
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
 * View
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * View
 *
 * @description Represents a view in Project
 */
class View implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "View";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'show_in_menu' => 'bool',
        'type' => '\Aspose\Tasks\Model\ItemType',
        'screen' => '\Aspose\Tasks\Model\ViewScreen',
        'name' => 'string',
        'uid' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'show_in_menu' => null,
        'type' => null,
        'screen' => null,
        'name' => null,
        'uid' => 'int32'
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
        'show_in_menu' => 'showInMenu',
        'type' => 'type',
        'screen' => 'screen',
        'name' => 'name',
        'uid' => 'uid'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'show_in_menu' => 'setShowInMenu',
        'type' => 'setType',
        'screen' => 'setScreen',
        'name' => 'setName',
        'uid' => 'setUid'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'show_in_menu' => 'getShowInMenu',
        'type' => 'getType',
        'screen' => 'getScreen',
        'name' => 'getName',
        'uid' => 'getUid'
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
        $this->container['show_in_menu'] = isset($data['show_in_menu']) ? $data['show_in_menu'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['screen'] = isset($data['screen']) ? $data['screen'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['show_in_menu'] === null) {
            $invalidProperties[] = "'show_in_menu' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['screen'] === null) {
            $invalidProperties[] = "'screen' can't be null";
        }
        if ($this->container['uid'] === null) {
            $invalidProperties[] = "'uid' can't be null";
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

        if ($this->container['show_in_menu'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['screen'] === null) {
            return false;
        }
        if ($this->container['uid'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets show_in_menu
     *
     * @return bool
     */
    public function getShowInMenu()
    {
        return $this->container['show_in_menu'];
    }

    /*
     * Sets show_in_menu
     *
     * @param bool $show_in_menu Gets or sets a value indicating whether Microsoft Project shows the single view  name in the View or the Other Views drop-down lists in the Ribbon
     *
     * @return $this
     */
    public function setShowInMenu($show_in_menu)
    {
        $this->container['show_in_menu'] = $show_in_menu;

        return $this;
    }

    /*
     * Gets type
     *
     * @return \Aspose\Tasks\Model\ItemType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /*
     * Sets type
     *
     * @param \Aspose\Tasks\Model\ItemType $type Gets the type of item in the single view, such as tasks or resources. Read-only.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /*
     * Gets screen
     *
     * @return \Aspose\Tasks\Model\ViewScreen
     */
    public function getScreen()
    {
        return $this->container['screen'];
    }

    /*
     * Sets screen
     *
     * @param \Aspose\Tasks\Model\ViewScreen $screen Gets the screen type for the single view. Read-only.
     *
     * @return $this
     */
    public function setScreen($screen)
    {
        $this->container['screen'] = $screen;

        return $this;
    }

    /*
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /*
     * Sets name
     *
     * @param string $name Gets or sets the name of a View object.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /*
     * Gets uid
     *
     * @return int
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /*
     * Sets uid
     *
     * @param int $uid Gets the unique identifier of a view.
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

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


