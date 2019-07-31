<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConfidenceLevel.php">
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
 * ConfidenceLevel
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * ConfidenceLevel
 *
 * @description Specifies supported confidence levels used in risk analysis that correspond to  the percentage of the time the actual values will be within optimistic and pessimistic estimates.
 */
class ConfidenceLevel
{
    /*
     * Possible values of this enum
     */
    const CL75 = 'CL75';
    const CL85 = 'CL85';
    const CL90 = 'CL90';
    const CL95 = 'CL95';
    const CL99 = 'CL99';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CL75,
            self::CL85,
            self::CL90,
            self::CL95,
            self::CL99,
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


