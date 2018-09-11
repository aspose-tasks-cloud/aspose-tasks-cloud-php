<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Month.php">
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
 * Month
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * Month
 *
 * @description Specifies the month.
 */
class Month
{
    /*
     * Possible values of this enum
     */
    const JANUARY = 'January';
    const FEBRUARY = 'February';
    const MARCH = 'March';
    const APRIL = 'April';
    const MAY = 'May';
    const JUNE = 'June';
    const JULY = 'July';
    const AUGUST = 'August';
    const SEPTEMBER = 'September';
    const OCTOBER = 'October';
    const NOVEMBER = 'November';
    const DECEMBER = 'December';
    const UNDEFINED = 'Undefined';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JANUARY,
            self::FEBRUARY,
            self::MARCH,
            self::APRIL,
            self::MAY,
            self::JUNE,
            self::JULY,
            self::AUGUST,
            self::SEPTEMBER,
            self::OCTOBER,
            self::NOVEMBER,
            self::DECEMBER,
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


