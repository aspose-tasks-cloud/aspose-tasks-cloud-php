<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TimeUnitType.php">
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
 * TimeUnitType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * TimeUnitType
 *
 * @description Specifies the type of a time unit.
 */
class TimeUnitType
{
    /*
     * Possible values of this enum
     */
    const MINUTE = 'Minute';
    const ELAPSED_MINUTE = 'ElapsedMinute';
    const HOUR = 'Hour';
    const ELAPSED_HOUR = 'ElapsedHour';
    const DAY = 'Day';
    const ELAPSED_DAY = 'ElapsedDay';
    const WEEK = 'Week';
    const ELAPSED_WEEK = 'ElapsedWeek';
    const MONTH = 'Month';
    const ELAPSED_MONTH = 'ElapsedMonth';
    const PERCENT = 'Percent';
    const ELAPSED_PERCENT = 'ElapsedPercent';
    const NULL = 'Null';
    const MINUTE_ESTIMATED = 'MinuteEstimated';
    const ELAPSED_MINUTE_ESTIMATED = 'ElapsedMinuteEstimated';
    const HOUR_ESTIMATED = 'HourEstimated';
    const ELAPSED_HOUR_ESTIMATED = 'ElapsedHourEstimated';
    const DAY_ESTIMATED = 'DayEstimated';
    const ELAPSED_DAY_ESTIMATED = 'ElapsedDayEstimated';
    const WEEK_ESTIMATED = 'WeekEstimated';
    const ELAPSED_WEEK_ESTIMATED = 'ElapsedWeekEstimated';
    const MONTH_ESTIMATED = 'MonthEstimated';
    const ELAPSED_MONTH_ESTIMATED = 'ElapsedMonthEstimated';
    const PERCENT_ESTIMATED = 'PercentEstimated';
    const ELAPSED_PERCENT_ESTIMATED = 'ElapsedPercentEstimated';
    const YEAR = 'Year';
    const UNDEFINED = 'Undefined';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MINUTE,
            self::ELAPSED_MINUTE,
            self::HOUR,
            self::ELAPSED_HOUR,
            self::DAY,
            self::ELAPSED_DAY,
            self::WEEK,
            self::ELAPSED_WEEK,
            self::MONTH,
            self::ELAPSED_MONTH,
            self::PERCENT,
            self::ELAPSED_PERCENT,
            self::NULL,
            self::MINUTE_ESTIMATED,
            self::ELAPSED_MINUTE_ESTIMATED,
            self::HOUR_ESTIMATED,
            self::ELAPSED_HOUR_ESTIMATED,
            self::DAY_ESTIMATED,
            self::ELAPSED_DAY_ESTIMATED,
            self::WEEK_ESTIMATED,
            self::ELAPSED_WEEK_ESTIMATED,
            self::MONTH_ESTIMATED,
            self::ELAPSED_MONTH_ESTIMATED,
            self::PERCENT_ESTIMATED,
            self::ELAPSED_PERCENT_ESTIMATED,
            self::YEAR,
            self::UNDEFINED,
        ];
    }

    /*
     * Gets whether enum is bitwise
     * @return bool
     */
    public static function getIsBitwise()
    {
        return false;
    }
}


