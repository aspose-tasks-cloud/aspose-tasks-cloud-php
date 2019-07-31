<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BaselineType.php">
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
 * BaselineType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * BaselineType
 *
 * @description Specifies the baseline type used to calculate Variance values.
 */
class BaselineType
{
    /*
     * Possible values of this enum
     */
    const BASELINE = 'Baseline';
    const BASELINE1 = 'Baseline1';
    const BASELINE2 = 'Baseline2';
    const BASELINE3 = 'Baseline3';
    const BASELINE4 = 'Baseline4';
    const BASELINE5 = 'Baseline5';
    const BASELINE6 = 'Baseline6';
    const BASELINE7 = 'Baseline7';
    const BASELINE8 = 'Baseline8';
    const BASELINE9 = 'Baseline9';
    const BASELINE10 = 'Baseline10';
    const UNDEFINED = 'Undefined';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BASELINE,
            self::BASELINE1,
            self::BASELINE2,
            self::BASELINE3,
            self::BASELINE4,
            self::BASELINE5,
            self::BASELINE6,
            self::BASELINE7,
            self::BASELINE8,
            self::BASELINE9,
            self::BASELINE10,
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


