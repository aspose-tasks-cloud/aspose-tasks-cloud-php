<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarException.php">
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
 * CalendarException
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * CalendarException
 *
 * @description Represent exceptional time periods in a calendar.
 */
class CalendarException implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CalendarException";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'index' => 'int',
        'entered_by_occurrences' => 'bool',
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'occurrences' => 'int',
        'name' => 'string',
        'type' => '\Aspose\Tasks\Model\CalendarExceptionType',
        'period' => 'int',
        'days_of_week' => '\Aspose\Tasks\Model\DayType[]',
        'month_item' => '\Aspose\Tasks\Model\MonthItemType',
        'month_position' => '\Aspose\Tasks\Model\MonthPosition',
        'month' => '\Aspose\Tasks\Model\Month',
        'month_day' => 'int',
        'day_working' => 'bool',
        'working_times' => '\Aspose\Tasks\Model\WorkingTime[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'index' => 'int32',
        'entered_by_occurrences' => null,
        'from_date' => 'date-time',
        'to_date' => 'date-time',
        'occurrences' => 'int32',
        'name' => null,
        'type' => null,
        'period' => 'int32',
        'days_of_week' => null,
        'month_item' => null,
        'month_position' => null,
        'month' => null,
        'month_day' => 'int32',
        'day_working' => null,
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
        'index' => 'Index',
        'entered_by_occurrences' => 'EnteredByOccurrences',
        'from_date' => 'FromDate',
        'to_date' => 'ToDate',
        'occurrences' => 'Occurrences',
        'name' => 'Name',
        'type' => 'Type',
        'period' => 'Period',
        'days_of_week' => 'DaysOfWeek',
        'month_item' => 'MonthItem',
        'month_position' => 'MonthPosition',
        'month' => 'Month',
        'month_day' => 'MonthDay',
        'day_working' => 'DayWorking',
        'working_times' => 'WorkingTimes'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'entered_by_occurrences' => 'setEnteredByOccurrences',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'occurrences' => 'setOccurrences',
        'name' => 'setName',
        'type' => 'setType',
        'period' => 'setPeriod',
        'days_of_week' => 'setDaysOfWeek',
        'month_item' => 'setMonthItem',
        'month_position' => 'setMonthPosition',
        'month' => 'setMonth',
        'month_day' => 'setMonthDay',
        'day_working' => 'setDayWorking',
        'working_times' => 'setWorkingTimes'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'entered_by_occurrences' => 'getEnteredByOccurrences',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'occurrences' => 'getOccurrences',
        'name' => 'getName',
        'type' => 'getType',
        'period' => 'getPeriod',
        'days_of_week' => 'getDaysOfWeek',
        'month_item' => 'getMonthItem',
        'month_position' => 'getMonthPosition',
        'month' => 'getMonth',
        'month_day' => 'getMonthDay',
        'day_working' => 'getDayWorking',
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['entered_by_occurrences'] = isset($data['entered_by_occurrences']) ? $data['entered_by_occurrences'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['occurrences'] = isset($data['occurrences']) ? $data['occurrences'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['days_of_week'] = isset($data['days_of_week']) ? $data['days_of_week'] : null;
        $this->container['month_item'] = isset($data['month_item']) ? $data['month_item'] : null;
        $this->container['month_position'] = isset($data['month_position']) ? $data['month_position'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['month_day'] = isset($data['month_day']) ? $data['month_day'] : null;
        $this->container['day_working'] = isset($data['day_working']) ? $data['day_working'] : null;
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

        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['entered_by_occurrences'] === null) {
            $invalidProperties[] = "'entered_by_occurrences' can't be null";
        }
        if ($this->container['from_date'] === null) {
            $invalidProperties[] = "'from_date' can't be null";
        }
        if ($this->container['to_date'] === null) {
            $invalidProperties[] = "'to_date' can't be null";
        }
        if ($this->container['occurrences'] === null) {
            $invalidProperties[] = "'occurrences' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ($this->container['month_item'] === null) {
            $invalidProperties[] = "'month_item' can't be null";
        }
        if ($this->container['month_position'] === null) {
            $invalidProperties[] = "'month_position' can't be null";
        }
        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if ($this->container['month_day'] === null) {
            $invalidProperties[] = "'month_day' can't be null";
        }
        if ($this->container['day_working'] === null) {
            $invalidProperties[] = "'day_working' can't be null";
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
        if ($this->container['entered_by_occurrences'] === null) {
            return false;
        }
        if ($this->container['from_date'] === null) {
            return false;
        }
        if ($this->container['to_date'] === null) {
            return false;
        }
        if ($this->container['occurrences'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['period'] === null) {
            return false;
        }
        if ($this->container['month_item'] === null) {
            return false;
        }
        if ($this->container['month_position'] === null) {
            return false;
        }
        if ($this->container['month'] === null) {
            return false;
        }
        if ($this->container['month_day'] === null) {
            return false;
        }
        if ($this->container['day_working'] === null) {
            return false;
        }
        return true;
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
     * @param int $index Index of the current item in the collection of calendar's exceptions.
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /*
     * Gets entered_by_occurrences
     *
     * @return bool
     */
    public function getEnteredByOccurrences()
    {
        return $this->container['entered_by_occurrences'];
    }

    /*
     * Sets entered_by_occurrences
     *
     * @param bool $entered_by_occurrences Determines whether the range of recurrence is defined by entering a number of occurrences. False specifies that the range of recurrence is defined by entering a finish date.
     *
     * @return $this
     */
    public function setEnteredByOccurrences($entered_by_occurrences)
    {
        $this->container['entered_by_occurrences'] = $entered_by_occurrences;

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
     * @param \DateTime $from_date The beginning of the exception time.
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
     * @param \DateTime $to_date The end of the exception time.
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /*
     * Gets occurrences
     *
     * @return int
     */
    public function getOccurrences()
    {
        return $this->container['occurrences'];
    }

    /*
     * Sets occurrences
     *
     * @param int $occurrences The number of occurrences for which the calendar exception is valid.
     *
     * @return $this
     */
    public function setOccurrences($occurrences)
    {
        $this->container['occurrences'] = $occurrences;

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
     * @param string $name The name of the exception.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /*
     * Gets type
     *
     * @return \Aspose\Tasks\Model\CalendarExceptionType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /*
     * Sets type
     *
     * @param \Aspose\Tasks\Model\CalendarExceptionType $type The exception type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /*
     * Gets period
     *
     * @return int
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /*
     * Sets period
     *
     * @param int $period The period of recurrence for the exception.
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /*
     * Gets days_of_week
     *
     * @return \Aspose\Tasks\Model\DayType[]
     */
    public function getDaysOfWeek()
    {
        return $this->container['days_of_week'];
    }

    /*
     * Sets days_of_week
     *
     * @param \Aspose\Tasks\Model\DayType[] $days_of_week The days of the week on which the exception is valid.
     *
     * @return $this
     */
    public function setDaysOfWeek($days_of_week)
    {
        $this->container['days_of_week'] = $days_of_week;

        return $this;
    }

    /*
     * Gets month_item
     *
     * @return \Aspose\Tasks\Model\MonthItemType
     */
    public function getMonthItem()
    {
        return $this->container['month_item'];
    }

    /*
     * Sets month_item
     *
     * @param \Aspose\Tasks\Model\MonthItemType $month_item The month item for which an exception recurrence is scheduled.
     *
     * @return $this
     */
    public function setMonthItem($month_item)
    {
        $this->container['month_item'] = $month_item;

        return $this;
    }

    /*
     * Gets month_position
     *
     * @return \Aspose\Tasks\Model\MonthPosition
     */
    public function getMonthPosition()
    {
        return $this->container['month_position'];
    }

    /*
     * Sets month_position
     *
     * @param \Aspose\Tasks\Model\MonthPosition $month_position The position of a month item within a month.
     *
     * @return $this
     */
    public function setMonthPosition($month_position)
    {
        $this->container['month_position'] = $month_position;

        return $this;
    }

    /*
     * Gets month
     *
     * @return \Aspose\Tasks\Model\Month
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /*
     * Sets month
     *
     * @param \Aspose\Tasks\Model\Month $month The month for which an exception recurrence is scheduled.
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /*
     * Gets month_day
     *
     * @return int
     */
    public function getMonthDay()
    {
        return $this->container['month_day'];
    }

    /*
     * Sets month_day
     *
     * @param int $month_day The day of a month on which an exception recurrence is scheduled.
     *
     * @return $this
     */
    public function setMonthDay($month_day)
    {
        $this->container['month_day'] = $month_day;

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
     * @param \Aspose\Tasks\Model\WorkingTime[] $working_times The collection of working times that defines the time worked on the weekday.  At least one working time must present, and there can't be more than five.
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


