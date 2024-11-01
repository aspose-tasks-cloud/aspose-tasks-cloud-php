<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Calendar.php">
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
 * Calendar
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * Calendar
 *
 * @description Represents a calendar used in a project.
 */
class Calendar implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Calendar";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'guid' => 'string',
        'name' => 'string',
        'uid' => 'int',
        'days' => '\Aspose\Tasks\Model\WeekDay[]',
        'is_base_calendar' => 'bool',
        'base_calendar' => '\Aspose\Tasks\Model\Calendar',
        'is_baseline_calendar' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'guid' => null,
        'name' => null,
        'uid' => 'int32',
        'days' => null,
        'is_base_calendar' => null,
        'base_calendar' => null,
        'is_baseline_calendar' => null
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
        'guid' => 'guid',
        'name' => 'name',
        'uid' => 'uid',
        'days' => 'days',
        'is_base_calendar' => 'isBaseCalendar',
        'base_calendar' => 'baseCalendar',
        'is_baseline_calendar' => 'isBaselineCalendar'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guid' => 'setGuid',
        'name' => 'setName',
        'uid' => 'setUid',
        'days' => 'setDays',
        'is_base_calendar' => 'setIsBaseCalendar',
        'base_calendar' => 'setBaseCalendar',
        'is_baseline_calendar' => 'setIsBaselineCalendar'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guid' => 'getGuid',
        'name' => 'getName',
        'uid' => 'getUid',
        'days' => 'getDays',
        'is_base_calendar' => 'getIsBaseCalendar',
        'base_calendar' => 'getBaseCalendar',
        'is_baseline_calendar' => 'getIsBaselineCalendar'
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
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : array();
        $this->container['is_base_calendar'] = isset($data['is_base_calendar']) ? $data['is_base_calendar'] : null;
        $this->container['base_calendar'] = isset($data['base_calendar']) ? $data['base_calendar'] : null;
        $this->container['is_baseline_calendar'] = isset($data['is_baseline_calendar']) ? $data['is_baseline_calendar'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uid'] === null) {
            $invalidProperties[] = "'uid' can't be null";
        }
        if ($this->container['is_base_calendar'] === null) {
            $invalidProperties[] = "'is_base_calendar' can't be null";
        }
        if ($this->container['is_baseline_calendar'] === null) {
            $invalidProperties[] = "'is_baseline_calendar' can't be null";
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

        if ($this->container['uid'] === null) {
            return false;
        }
        if ($this->container['is_base_calendar'] === null) {
            return false;
        }
        if ($this->container['is_baseline_calendar'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /*
     * Sets guid
     *
     * @param string $guid Gets calendar's Guid.
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

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
     * @param string $name The name of the calendar.
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
     * @param int $uid The unique identifier of the calendar.
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /*
     * Gets days
     *
     * @return \Aspose\Tasks\Model\WeekDay[]
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /*
     * Sets days
     *
     * @param \Aspose\Tasks\Model\WeekDay[] $days The collection of weekdays that defines the calendar.
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

        return $this;
    }

    /*
     * Gets is_base_calendar
     *
     * @return bool
     */
    public function getIsBaseCalendar()
    {
        return $this->container['is_base_calendar'];
    }

    /*
     * Sets is_base_calendar
     *
     * @param bool $is_base_calendar Determines whether the calendar is a base calendar.
     *
     * @return $this
     */
    public function setIsBaseCalendar($is_base_calendar)
    {
        $this->container['is_base_calendar'] = $is_base_calendar;

        return $this;
    }

    /*
     * Gets base_calendar
     *
     * @return \Aspose\Tasks\Model\Calendar
     */
    public function getBaseCalendar()
    {
        return $this->container['base_calendar'];
    }

    /*
     * Sets base_calendar
     *
     * @param \Aspose\Tasks\Model\Calendar $base_calendar The base calendar on which this calendar depends. Only applicable if the calendar is not a base calendar.
     *
     * @return $this
     */
    public function setBaseCalendar($base_calendar)
    {
        $this->container['base_calendar'] = $base_calendar;

        return $this;
    }

    /*
     * Gets is_baseline_calendar
     *
     * @return bool
     */
    public function getIsBaselineCalendar()
    {
        return $this->container['is_baseline_calendar'];
    }

    /*
     * Sets is_baseline_calendar
     *
     * @param bool $is_baseline_calendar Specifies whether the calendar is a baseline calendar.
     *
     * @return $this
     */
    public function setIsBaselineCalendar($is_baseline_calendar)
    {
        $this->container['is_baseline_calendar'] = $is_baseline_calendar;

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


