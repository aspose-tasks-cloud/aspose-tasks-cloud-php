<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RecurringInfo.php">
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
 * RecurringInfo
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * RecurringInfo
 *
 * @description Represents the details of a recurring task in a project.
 */
class RecurringInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "RecurringInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'recurrence_pattern' => '\Aspose\Tasks\Model\RecurrencePattern',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'duration' => 'string',
        'occurrences' => 'int',
        'use_end_date' => 'bool',
        'daily_repetitions' => 'int',
        'daily_use_workdays' => 'bool',
        'weekly_repetitions' => 'int',
        'weekly_days' => '\Aspose\Tasks\Model\WeekDayType',
        'monthly_use_ordinal_day' => 'bool',
        'monthly_ordinal_number' => '\Aspose\Tasks\Model\OrdinalNumber',
        'monthly_ordinal_day' => '\Aspose\Tasks\Model\DayOfWeek',
        'monthly_ordinal_repetitions' => 'int',
        'monthly_day' => 'int',
        'monthly_repetitions' => 'int',
        'yearly_use_ordinal_day' => 'bool',
        'yearly_date' => '\DateTime',
        'yearly_ordinal_number' => '\Aspose\Tasks\Model\OrdinalNumber',
        'yearly_ordinal_day' => '\Aspose\Tasks\Model\DayOfWeek',
        'yearly_ordinal_month' => '\Aspose\Tasks\Model\Month'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'recurrence_pattern' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'duration' => 'time-span',
        'occurrences' => 'int32',
        'use_end_date' => null,
        'daily_repetitions' => 'int32',
        'daily_use_workdays' => null,
        'weekly_repetitions' => 'int32',
        'weekly_days' => null,
        'monthly_use_ordinal_day' => null,
        'monthly_ordinal_number' => null,
        'monthly_ordinal_day' => null,
        'monthly_ordinal_repetitions' => 'int32',
        'monthly_day' => 'int32',
        'monthly_repetitions' => 'int32',
        'yearly_use_ordinal_day' => null,
        'yearly_date' => 'date-time',
        'yearly_ordinal_number' => null,
        'yearly_ordinal_day' => null,
        'yearly_ordinal_month' => null
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
        'recurrence_pattern' => 'RecurrencePattern',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'duration' => 'Duration',
        'occurrences' => 'Occurrences',
        'use_end_date' => 'UseEndDate',
        'daily_repetitions' => 'DailyRepetitions',
        'daily_use_workdays' => 'DailyUseWorkdays',
        'weekly_repetitions' => 'WeeklyRepetitions',
        'weekly_days' => 'WeeklyDays',
        'monthly_use_ordinal_day' => 'MonthlyUseOrdinalDay',
        'monthly_ordinal_number' => 'MonthlyOrdinalNumber',
        'monthly_ordinal_day' => 'MonthlyOrdinalDay',
        'monthly_ordinal_repetitions' => 'MonthlyOrdinalRepetitions',
        'monthly_day' => 'MonthlyDay',
        'monthly_repetitions' => 'MonthlyRepetitions',
        'yearly_use_ordinal_day' => 'YearlyUseOrdinalDay',
        'yearly_date' => 'YearlyDate',
        'yearly_ordinal_number' => 'YearlyOrdinalNumber',
        'yearly_ordinal_day' => 'YearlyOrdinalDay',
        'yearly_ordinal_month' => 'YearlyOrdinalMonth'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recurrence_pattern' => 'setRecurrencePattern',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'duration' => 'setDuration',
        'occurrences' => 'setOccurrences',
        'use_end_date' => 'setUseEndDate',
        'daily_repetitions' => 'setDailyRepetitions',
        'daily_use_workdays' => 'setDailyUseWorkdays',
        'weekly_repetitions' => 'setWeeklyRepetitions',
        'weekly_days' => 'setWeeklyDays',
        'monthly_use_ordinal_day' => 'setMonthlyUseOrdinalDay',
        'monthly_ordinal_number' => 'setMonthlyOrdinalNumber',
        'monthly_ordinal_day' => 'setMonthlyOrdinalDay',
        'monthly_ordinal_repetitions' => 'setMonthlyOrdinalRepetitions',
        'monthly_day' => 'setMonthlyDay',
        'monthly_repetitions' => 'setMonthlyRepetitions',
        'yearly_use_ordinal_day' => 'setYearlyUseOrdinalDay',
        'yearly_date' => 'setYearlyDate',
        'yearly_ordinal_number' => 'setYearlyOrdinalNumber',
        'yearly_ordinal_day' => 'setYearlyOrdinalDay',
        'yearly_ordinal_month' => 'setYearlyOrdinalMonth'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recurrence_pattern' => 'getRecurrencePattern',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'duration' => 'getDuration',
        'occurrences' => 'getOccurrences',
        'use_end_date' => 'getUseEndDate',
        'daily_repetitions' => 'getDailyRepetitions',
        'daily_use_workdays' => 'getDailyUseWorkdays',
        'weekly_repetitions' => 'getWeeklyRepetitions',
        'weekly_days' => 'getWeeklyDays',
        'monthly_use_ordinal_day' => 'getMonthlyUseOrdinalDay',
        'monthly_ordinal_number' => 'getMonthlyOrdinalNumber',
        'monthly_ordinal_day' => 'getMonthlyOrdinalDay',
        'monthly_ordinal_repetitions' => 'getMonthlyOrdinalRepetitions',
        'monthly_day' => 'getMonthlyDay',
        'monthly_repetitions' => 'getMonthlyRepetitions',
        'yearly_use_ordinal_day' => 'getYearlyUseOrdinalDay',
        'yearly_date' => 'getYearlyDate',
        'yearly_ordinal_number' => 'getYearlyOrdinalNumber',
        'yearly_ordinal_day' => 'getYearlyOrdinalDay',
        'yearly_ordinal_month' => 'getYearlyOrdinalMonth'
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
        $this->container['recurrence_pattern'] = isset($data['recurrence_pattern']) ? $data['recurrence_pattern'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['occurrences'] = isset($data['occurrences']) ? $data['occurrences'] : null;
        $this->container['use_end_date'] = isset($data['use_end_date']) ? $data['use_end_date'] : null;
        $this->container['daily_repetitions'] = isset($data['daily_repetitions']) ? $data['daily_repetitions'] : null;
        $this->container['daily_use_workdays'] = isset($data['daily_use_workdays']) ? $data['daily_use_workdays'] : null;
        $this->container['weekly_repetitions'] = isset($data['weekly_repetitions']) ? $data['weekly_repetitions'] : null;
        $this->container['weekly_days'] = isset($data['weekly_days']) ? $data['weekly_days'] : null;
        $this->container['monthly_use_ordinal_day'] = isset($data['monthly_use_ordinal_day']) ? $data['monthly_use_ordinal_day'] : null;
        $this->container['monthly_ordinal_number'] = isset($data['monthly_ordinal_number']) ? $data['monthly_ordinal_number'] : null;
        $this->container['monthly_ordinal_day'] = isset($data['monthly_ordinal_day']) ? $data['monthly_ordinal_day'] : null;
        $this->container['monthly_ordinal_repetitions'] = isset($data['monthly_ordinal_repetitions']) ? $data['monthly_ordinal_repetitions'] : null;
        $this->container['monthly_day'] = isset($data['monthly_day']) ? $data['monthly_day'] : null;
        $this->container['monthly_repetitions'] = isset($data['monthly_repetitions']) ? $data['monthly_repetitions'] : null;
        $this->container['yearly_use_ordinal_day'] = isset($data['yearly_use_ordinal_day']) ? $data['yearly_use_ordinal_day'] : null;
        $this->container['yearly_date'] = isset($data['yearly_date']) ? $data['yearly_date'] : null;
        $this->container['yearly_ordinal_number'] = isset($data['yearly_ordinal_number']) ? $data['yearly_ordinal_number'] : null;
        $this->container['yearly_ordinal_day'] = isset($data['yearly_ordinal_day']) ? $data['yearly_ordinal_day'] : null;
        $this->container['yearly_ordinal_month'] = isset($data['yearly_ordinal_month']) ? $data['yearly_ordinal_month'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['recurrence_pattern'] === null) {
            $invalidProperties[] = "'recurrence_pattern' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['occurrences'] === null) {
            $invalidProperties[] = "'occurrences' can't be null";
        }
        if ($this->container['use_end_date'] === null) {
            $invalidProperties[] = "'use_end_date' can't be null";
        }
        if ($this->container['daily_repetitions'] === null) {
            $invalidProperties[] = "'daily_repetitions' can't be null";
        }
        if ($this->container['daily_use_workdays'] === null) {
            $invalidProperties[] = "'daily_use_workdays' can't be null";
        }
        if ($this->container['weekly_repetitions'] === null) {
            $invalidProperties[] = "'weekly_repetitions' can't be null";
        }
        if ($this->container['weekly_days'] === null) {
            $invalidProperties[] = "'weekly_days' can't be null";
        }
        if ($this->container['monthly_use_ordinal_day'] === null) {
            $invalidProperties[] = "'monthly_use_ordinal_day' can't be null";
        }
        if ($this->container['monthly_ordinal_number'] === null) {
            $invalidProperties[] = "'monthly_ordinal_number' can't be null";
        }
        if ($this->container['monthly_ordinal_day'] === null) {
            $invalidProperties[] = "'monthly_ordinal_day' can't be null";
        }
        if ($this->container['monthly_ordinal_repetitions'] === null) {
            $invalidProperties[] = "'monthly_ordinal_repetitions' can't be null";
        }
        if ($this->container['monthly_day'] === null) {
            $invalidProperties[] = "'monthly_day' can't be null";
        }
        if ($this->container['monthly_repetitions'] === null) {
            $invalidProperties[] = "'monthly_repetitions' can't be null";
        }
        if ($this->container['yearly_use_ordinal_day'] === null) {
            $invalidProperties[] = "'yearly_use_ordinal_day' can't be null";
        }
        if ($this->container['yearly_date'] === null) {
            $invalidProperties[] = "'yearly_date' can't be null";
        }
        if ($this->container['yearly_ordinal_number'] === null) {
            $invalidProperties[] = "'yearly_ordinal_number' can't be null";
        }
        if ($this->container['yearly_ordinal_day'] === null) {
            $invalidProperties[] = "'yearly_ordinal_day' can't be null";
        }
        if ($this->container['yearly_ordinal_month'] === null) {
            $invalidProperties[] = "'yearly_ordinal_month' can't be null";
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

        if ($this->container['recurrence_pattern'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
            return false;
        }
        if ($this->container['end_date'] === null) {
            return false;
        }
        if ($this->container['duration'] === null) {
            return false;
        }
        if ($this->container['occurrences'] === null) {
            return false;
        }
        if ($this->container['use_end_date'] === null) {
            return false;
        }
        if ($this->container['daily_repetitions'] === null) {
            return false;
        }
        if ($this->container['daily_use_workdays'] === null) {
            return false;
        }
        if ($this->container['weekly_repetitions'] === null) {
            return false;
        }
        if ($this->container['weekly_days'] === null) {
            return false;
        }
        if ($this->container['monthly_use_ordinal_day'] === null) {
            return false;
        }
        if ($this->container['monthly_ordinal_number'] === null) {
            return false;
        }
        if ($this->container['monthly_ordinal_day'] === null) {
            return false;
        }
        if ($this->container['monthly_ordinal_repetitions'] === null) {
            return false;
        }
        if ($this->container['monthly_day'] === null) {
            return false;
        }
        if ($this->container['monthly_repetitions'] === null) {
            return false;
        }
        if ($this->container['yearly_use_ordinal_day'] === null) {
            return false;
        }
        if ($this->container['yearly_date'] === null) {
            return false;
        }
        if ($this->container['yearly_ordinal_number'] === null) {
            return false;
        }
        if ($this->container['yearly_ordinal_day'] === null) {
            return false;
        }
        if ($this->container['yearly_ordinal_month'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets recurrence_pattern
     *
     * @return \Aspose\Tasks\Model\RecurrencePattern
     */
    public function getRecurrencePattern()
    {
        return $this->container['recurrence_pattern'];
    }

    /*
     * Sets recurrence_pattern
     *
     * @param \Aspose\Tasks\Model\RecurrencePattern $recurrence_pattern Represents a recurrence pattern of the recurring task. Can be one of the values of  enum.
     *
     * @return $this
     */
    public function setRecurrencePattern($recurrence_pattern)
    {
        $this->container['recurrence_pattern'] = $recurrence_pattern;

        return $this;
    }

    /*
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /*
     * Sets start_date
     *
     * @param \DateTime $start_date Specifies the date for the occurrences to begin.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /*
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /*
     * Sets end_date
     *
     * @param \DateTime $end_date Specifies the date for the occurrences to end.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /*
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /*
     * Sets duration
     *
     * @param string $duration Specifies the duration for one occurrence of the recurring task. the instance of  class.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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
     * @param int $occurrences Specifies a number of occurrences of the recurring task.
     *
     * @return $this
     */
    public function setOccurrences($occurrences)
    {
        $this->container['occurrences'] = $occurrences;

        return $this;
    }

    /*
     * Gets use_end_date
     *
     * @return bool
     */
    public function getUseEndDate()
    {
        return $this->container['use_end_date'];
    }

    /*
     * Sets use_end_date
     *
     * @param bool $use_end_date Determines whether to use the end date or a number of occurrences for the recurring task.
     *
     * @return $this
     */
    public function setUseEndDate($use_end_date)
    {
        $this->container['use_end_date'] = $use_end_date;

        return $this;
    }

    /*
     * Gets daily_repetitions
     *
     * @return int
     */
    public function getDailyRepetitions()
    {
        return $this->container['daily_repetitions'];
    }

    /*
     * Sets daily_repetitions
     *
     * @param int $daily_repetitions Specifies a number of repetitions for the daily recurrence pattern.
     *
     * @return $this
     */
    public function setDailyRepetitions($daily_repetitions)
    {
        $this->container['daily_repetitions'] = $daily_repetitions;

        return $this;
    }

    /*
     * Gets daily_use_workdays
     *
     * @return bool
     */
    public function getDailyUseWorkdays()
    {
        return $this->container['daily_use_workdays'];
    }

    /*
     * Sets daily_use_workdays
     *
     * @param bool $daily_use_workdays Determines whether to use workdays for the daily recurrence pattern.
     *
     * @return $this
     */
    public function setDailyUseWorkdays($daily_use_workdays)
    {
        $this->container['daily_use_workdays'] = $daily_use_workdays;

        return $this;
    }

    /*
     * Gets weekly_repetitions
     *
     * @return int
     */
    public function getWeeklyRepetitions()
    {
        return $this->container['weekly_repetitions'];
    }

    /*
     * Sets weekly_repetitions
     *
     * @param int $weekly_repetitions Specifies a number of repetitions for the weekly recurrence pattern.
     *
     * @return $this
     */
    public function setWeeklyRepetitions($weekly_repetitions)
    {
        $this->container['weekly_repetitions'] = $weekly_repetitions;

        return $this;
    }

    /*
     * Gets weekly_days
     *
     * @return \Aspose\Tasks\Model\WeekDayType
     */
    public function getWeeklyDays()
    {
        return $this->container['weekly_days'];
    }

    /*
     * Sets weekly_days
     *
     * @param \Aspose\Tasks\Model\WeekDayType $weekly_days Specifies a collection of days used in the weekly recurrence pattern.
     *
     * @return $this
     */
    public function setWeeklyDays($weekly_days)
    {
        $this->container['weekly_days'] = $weekly_days;

        return $this;
    }

    /*
     * Gets monthly_use_ordinal_day
     *
     * @return bool
     */
    public function getMonthlyUseOrdinalDay()
    {
        return $this->container['monthly_use_ordinal_day'];
    }

    /*
     * Sets monthly_use_ordinal_day
     *
     * @param bool $monthly_use_ordinal_day Determines whether to use ordinal day for the monthly recurrence pattern.
     *
     * @return $this
     */
    public function setMonthlyUseOrdinalDay($monthly_use_ordinal_day)
    {
        $this->container['monthly_use_ordinal_day'] = $monthly_use_ordinal_day;

        return $this;
    }

    /*
     * Gets monthly_ordinal_number
     *
     * @return \Aspose\Tasks\Model\OrdinalNumber
     */
    public function getMonthlyOrdinalNumber()
    {
        return $this->container['monthly_ordinal_number'];
    }

    /*
     * Sets monthly_ordinal_number
     *
     * @param \Aspose\Tasks\Model\OrdinalNumber $monthly_ordinal_number Specifies an ordinal number of the monthly recurrence pattern. Can be one of the values of  enum.
     *
     * @return $this
     */
    public function setMonthlyOrdinalNumber($monthly_ordinal_number)
    {
        $this->container['monthly_ordinal_number'] = $monthly_ordinal_number;

        return $this;
    }

    /*
     * Gets monthly_ordinal_day
     *
     * @return \Aspose\Tasks\Model\DayOfWeek
     */
    public function getMonthlyOrdinalDay()
    {
        return $this->container['monthly_ordinal_day'];
    }

    /*
     * Sets monthly_ordinal_day
     *
     * @param \Aspose\Tasks\Model\DayOfWeek $monthly_ordinal_day Specifies a day of the monthly recurrence pattern when using ordinal day. Can be one of the values of  enum.
     *
     * @return $this
     */
    public function setMonthlyOrdinalDay($monthly_ordinal_day)
    {
        $this->container['monthly_ordinal_day'] = $monthly_ordinal_day;

        return $this;
    }

    /*
     * Gets monthly_ordinal_repetitions
     *
     * @return int
     */
    public function getMonthlyOrdinalRepetitions()
    {
        return $this->container['monthly_ordinal_repetitions'];
    }

    /*
     * Sets monthly_ordinal_repetitions
     *
     * @param int $monthly_ordinal_repetitions Specifies a number of repetitions for the monthly recurrence pattern when using ordinal day.
     *
     * @return $this
     */
    public function setMonthlyOrdinalRepetitions($monthly_ordinal_repetitions)
    {
        $this->container['monthly_ordinal_repetitions'] = $monthly_ordinal_repetitions;

        return $this;
    }

    /*
     * Gets monthly_day
     *
     * @return int
     */
    public function getMonthlyDay()
    {
        return $this->container['monthly_day'];
    }

    /*
     * Sets monthly_day
     *
     * @param int $monthly_day Specifies a number of day of the monthly recurrence pattern.
     *
     * @return $this
     */
    public function setMonthlyDay($monthly_day)
    {
        $this->container['monthly_day'] = $monthly_day;

        return $this;
    }

    /*
     * Gets monthly_repetitions
     *
     * @return int
     */
    public function getMonthlyRepetitions()
    {
        return $this->container['monthly_repetitions'];
    }

    /*
     * Sets monthly_repetitions
     *
     * @param int $monthly_repetitions Specifies a number of repetitions for the monthly recurrence pattern.
     *
     * @return $this
     */
    public function setMonthlyRepetitions($monthly_repetitions)
    {
        $this->container['monthly_repetitions'] = $monthly_repetitions;

        return $this;
    }

    /*
     * Gets yearly_use_ordinal_day
     *
     * @return bool
     */
    public function getYearlyUseOrdinalDay()
    {
        return $this->container['yearly_use_ordinal_day'];
    }

    /*
     * Sets yearly_use_ordinal_day
     *
     * @param bool $yearly_use_ordinal_day Determines whether to use ordinal day for the yearly recurrence pattern.
     *
     * @return $this
     */
    public function setYearlyUseOrdinalDay($yearly_use_ordinal_day)
    {
        $this->container['yearly_use_ordinal_day'] = $yearly_use_ordinal_day;

        return $this;
    }

    /*
     * Gets yearly_date
     *
     * @return \DateTime
     */
    public function getYearlyDate()
    {
        return $this->container['yearly_date'];
    }

    /*
     * Sets yearly_date
     *
     * @param \DateTime $yearly_date Specifies a date for the yearly recurrence pattern.
     *
     * @return $this
     */
    public function setYearlyDate($yearly_date)
    {
        $this->container['yearly_date'] = $yearly_date;

        return $this;
    }

    /*
     * Gets yearly_ordinal_number
     *
     * @return \Aspose\Tasks\Model\OrdinalNumber
     */
    public function getYearlyOrdinalNumber()
    {
        return $this->container['yearly_ordinal_number'];
    }

    /*
     * Sets yearly_ordinal_number
     *
     * @param \Aspose\Tasks\Model\OrdinalNumber $yearly_ordinal_number Specifies an ordinal number of the yearly recurrence pattern. Can be one of the values of  enum.
     *
     * @return $this
     */
    public function setYearlyOrdinalNumber($yearly_ordinal_number)
    {
        $this->container['yearly_ordinal_number'] = $yearly_ordinal_number;

        return $this;
    }

    /*
     * Gets yearly_ordinal_day
     *
     * @return \Aspose\Tasks\Model\DayOfWeek
     */
    public function getYearlyOrdinalDay()
    {
        return $this->container['yearly_ordinal_day'];
    }

    /*
     * Sets yearly_ordinal_day
     *
     * @param \Aspose\Tasks\Model\DayOfWeek $yearly_ordinal_day Specifies a weekday of the yearly recurrence pattern when using ordinal day. Can be one of the values of  enum.
     *
     * @return $this
     */
    public function setYearlyOrdinalDay($yearly_ordinal_day)
    {
        $this->container['yearly_ordinal_day'] = $yearly_ordinal_day;

        return $this;
    }

    /*
     * Gets yearly_ordinal_month
     *
     * @return \Aspose\Tasks\Model\Month
     */
    public function getYearlyOrdinalMonth()
    {
        return $this->container['yearly_ordinal_month'];
    }

    /*
     * Sets yearly_ordinal_month
     *
     * @param \Aspose\Tasks\Model\Month $yearly_ordinal_month Specifies a month of the yearly recurrence pattern when using ordinal day. Can be one of the values of  enum.
     *
     * @return $this
     */
    public function setYearlyOrdinalMonth($yearly_ordinal_month)
    {
        $this->container['yearly_ordinal_month'] = $yearly_ordinal_month;

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


