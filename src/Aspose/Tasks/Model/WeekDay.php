<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WeekDay.php">
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
 * WeekDay
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * WeekDay
 *
 */
class WeekDay implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WeekDay";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'day_type' => '\Aspose\Tasks\Model\DayType',
        'day_working' => 'bool',
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'working_times' => '\Aspose\Tasks\Model\WorkingTime[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'day_type' => null,
        'day_working' => null,
        'from_date' => 'date-time',
        'to_date' => 'date-time',
        'working_times' => null
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
        'day_type' => 'DayType',
        'day_working' => 'DayWorking',
        'from_date' => 'FromDate',
        'to_date' => 'ToDate',
        'working_times' => 'WorkingTimes'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'day_type' => 'setDayType',
        'day_working' => 'setDayWorking',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'working_times' => 'setWorkingTimes'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'day_type' => 'getDayType',
        'day_working' => 'getDayWorking',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'working_times' => 'getWorkingTimes'
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
        $this->container['day_type'] = isset($data['day_type']) ? $data['day_type'] : null;
        $this->container['day_working'] = isset($data['day_working']) ? $data['day_working'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['working_times'] = isset($data['working_times']) ? $data['working_times'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['day_type'] === null) {
            $invalidProperties[] = "'day_type' can't be null";
        }
        if ($this->container['day_working'] === null) {
            $invalidProperties[] = "'day_working' can't be null";
        }
        if ($this->container['from_date'] === null) {
            $invalidProperties[] = "'from_date' can't be null";
        }
        if ($this->container['to_date'] === null) {
            $invalidProperties[] = "'to_date' can't be null";
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

        if ($this->container['day_type'] === null) {
            return false;
        }
        if ($this->container['day_working'] === null) {
            return false;
        }
        if ($this->container['from_date'] === null) {
            return false;
        }
        if ($this->container['to_date'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets day_type
     *
     * @return \Aspose\Tasks\Model\DayType
     */
    public function getDayType()
    {
        return $this->container['day_type'];
    }

    /*
     * Sets day_type
     *
     * @param \Aspose\Tasks\Model\DayType $day_type Returns or sets the type of a day.
     *
     * @return $this
     */
    public function setDayType($day_type)
    {
        $this->container['day_type'] = $day_type;

        return $this;
    }

    /*
     * Gets day_working
     *
     * @return bool
     */
    public function getDayWorking()
    {
        return $this->container['day_working'];
    }

    /*
     * Sets day_working
     *
     * @param bool $day_working Determines whether the specified date or day type is working.
     *
     * @return $this
     */
    public function setDayWorking($day_working)
    {
        $this->container['day_working'] = $day_working;

        return $this;
    }

    /*
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /*
     * Sets from_date
     *
     * @param \DateTime $from_date Returns or sets the beginning of an exception time.
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /*
     * Gets to_date
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /*
     * Sets to_date
     *
     * @param \DateTime $to_date Returns or sets the end of an exception time.
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /*
     * Gets working_times
     *
     * @return \Aspose\Tasks\Model\WorkingTime[]
     */
    public function getWorkingTimes()
    {
        return $this->container['working_times'];
    }

    /*
     * Sets working_times
     *
     * @param \Aspose\Tasks\Model\WorkingTime[] $working_times The collection of working times that define the time worked on the weekday.
     *
     * @return $this
     */
    public function setWorkingTimes($working_times)
    {
        $this->container['working_times'] = $working_times;

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


