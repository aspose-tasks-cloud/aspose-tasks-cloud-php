<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConstraintType.php">
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
 * ConstraintType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * ConstraintType
 *
 * @description Specifies a constraint type for a project task.
 */
class ConstraintType
{
    /*
     * Possible values of this enum
     */
    const AS_SOON_AS_POSSIBLE = 'AsSoonAsPossible';
    const AS_LATE_AS_POSSIBLE = 'AsLateAsPossible';
    const MUST_START_ON = 'MustStartOn';
    const MUST_FINISH_ON = 'MustFinishOn';
    const START_NO_EARLIER_THAN = 'StartNoEarlierThan';
    const START_NO_LATER_THAN = 'StartNoLaterThan';
    const FINISH_NO_EARLIER_THAN = 'FinishNoEarlierThan';
    const FINISH_NO_LATER_THAN = 'FinishNoLaterThan';
    const UNDEFINED = 'Undefined';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AS_SOON_AS_POSSIBLE,
            self::AS_LATE_AS_POSSIBLE,
            self::MUST_START_ON,
            self::MUST_FINISH_ON,
            self::START_NO_EARLIER_THAN,
            self::START_NO_LATER_THAN,
            self::FINISH_NO_EARLIER_THAN,
            self::FINISH_NO_LATER_THAN,
            self::UNDEFINED,
        ];
    }
}


