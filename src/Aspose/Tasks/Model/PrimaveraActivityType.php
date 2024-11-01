<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PrimaveraActivityType.php">
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
 * PrimaveraActivityType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * PrimaveraActivityType
 *
 * @description Specifies type of Primavera activity.
 */
class PrimaveraActivityType
{
    /*
     * Possible values of this enum
     */
    const NONE = 'None';
    const START_MILESTONE = 'StartMilestone';
    const FINISH_MILESTONE = 'FinishMilestone';
    const TASK_DEPENDENT = 'TaskDependent';
    const RESOURCE_DEPENDENT = 'ResourceDependent';
    const LEVEL_OF_EFFORT = 'LevelOfEffort';
    const WBS_SUMMARY = 'WbsSummary';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::START_MILESTONE,
            self::FINISH_MILESTONE,
            self::TASK_DEPENDENT,
            self::RESOURCE_DEPENDENT,
            self::LEVEL_OF_EFFORT,
            self::WBS_SUMMARY,
        ];
    }
}


