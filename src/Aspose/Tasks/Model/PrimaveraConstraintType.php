<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PrimaveraConstraintType.php">
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
 * PrimaveraConstraintType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * PrimaveraConstraintType
 *
 * @description Specifies a type of activity&#39;s constraint.
 */
class PrimaveraConstraintType
{
    /*
     * Possible values of this enum
     */
    const NONE = 'None';
    const FINISH_ON = 'FinishOn';
    const FINISH_ON_OR_AFTER = 'FinishOnOrAfter';
    const FINISH_ON_OR_BEFORE = 'FinishOnOrBefore';
    const MANDATORY_FINISH = 'MandatoryFinish';
    const MANDATORY_START = 'MandatoryStart';
    const START_ON = 'StartOn';
    const START_ON_OR_AFTER = 'StartOnOrAfter';
    const START_ON_OR_BEFORE = 'StartOnOrBefore';
    const AS_LATE_AS_POSSIBLE = 'AsLateAsPossible';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::FINISH_ON,
            self::FINISH_ON_OR_AFTER,
            self::FINISH_ON_OR_BEFORE,
            self::MANDATORY_FINISH,
            self::MANDATORY_START,
            self::START_ON,
            self::START_ON_OR_AFTER,
            self::START_ON_OR_BEFORE,
            self::AS_LATE_AS_POSSIBLE,
        ];
    }
}


