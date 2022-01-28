<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RollupType.php">
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
 * RollupType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * RollupType
 *
 * @description Specifies the rollup type.
 */
class RollupType
{
    /*
     * Possible values of this enum
     */
    const NULL = 'Null';
    const MAXIMUM = 'Maximum';
    const MINIMUM = 'Minimum';
    const COUNT = 'Count';
    const SUM = 'Sum';
    const AVERAGE = 'Average';
    const AVERAGE_FIRST_SUBLEVEL = 'AverageFirstSublevel';
    const COUNT_FIRST_SUBLEVEL = 'CountFirstSublevel';
    const COUNT_NONSUMMARIES = 'CountNonsummaries';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NULL,
            self::MAXIMUM,
            self::MINIMUM,
            self::COUNT,
            self::SUM,
            self::AVERAGE,
            self::AVERAGE_FIRST_SUBLEVEL,
            self::COUNT_FIRST_SUBLEVEL,
            self::COUNT_NONSUMMARIES,
        ];
    }
}


