<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarExceptionType.php">
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
 * CalendarExceptionType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * CalendarExceptionType
 *
 * @description Specifies the calendar exception type.
 */
class CalendarExceptionType
{
    /*
     * Possible values of this enum
     */
    const DAILY = 'Daily';
    const YEARLY_BY_DAY = 'YearlyByDay';
    const YEARLY_BY_POSITION = 'YearlyByPosition';
    const MONTHLY_BY_DAY = 'MonthlyByDay';
    const MONTHLY_BY_POSITION = 'MonthlyByPosition';
    const WEEKLY = 'Weekly';
    const BY_DAY_COUNT = 'ByDayCount';
    const BY_WEEK_DAY_COUNT = 'ByWeekDayCount';
    const NO_EXCEPTION_TYPE = 'NoExceptionType';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAILY,
            self::YEARLY_BY_DAY,
            self::YEARLY_BY_POSITION,
            self::MONTHLY_BY_DAY,
            self::MONTHLY_BY_POSITION,
            self::WEEKLY,
            self::BY_DAY_COUNT,
            self::BY_WEEK_DAY_COUNT,
            self::NO_EXCEPTION_TYPE,
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


