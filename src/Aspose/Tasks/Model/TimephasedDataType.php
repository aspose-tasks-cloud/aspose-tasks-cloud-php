<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TimephasedDataType.php">
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
 * TimephasedDataType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * TimephasedDataType
 *
 * @description 
 */
class TimephasedDataType
{
    /*
     * Possible values of this enum
     */
    const ASSIGNMENT_REMAINING_WORK = 'AssignmentRemainingWork';
    const ASSIGNMENT_ACTUAL_WORK = 'AssignmentActualWork';
    const ASSIGNMENT_ACTUAL_OVERTIME_WORK = 'AssignmentActualOvertimeWork';
    const ASSIGNMENT_BASELINE_WORK = 'AssignmentBaselineWork';
    const ASSIGNMENT_BASELINE_COST = 'AssignmentBaselineCost';
    const ASSIGNMENT_ACTUAL_COST = 'AssignmentActualCost';
    const RESOURCE_BASELINE_WORK = 'ResourceBaselineWork';
    const RESOURCE_BASELINE_COST = 'ResourceBaselineCost';
    const TASK_BASELINE_WORK = 'TaskBaselineWork';
    const TASK_BASELINE_COST = 'TaskBaselineCost';
    const TASK_PERCENT_COMPLETE = 'TaskPercentComplete';
    const ASSIGNMENT_BASELINE1_WORK = 'AssignmentBaseline1Work';
    const ASSIGNMENT_BASELINE1_COST = 'AssignmentBaseline1Cost';
    const TASK_BASELINE1_WORK = 'TaskBaseline1Work';
    const TASK_BASELINE1_COST = 'TaskBaseline1Cost';
    const RESOURCE_BASELINE1_WORK = 'ResourceBaseline1Work';
    const RESOURCE_BASELINE1_COST = 'ResourceBaseline1Cost';
    const ASSIGNMENT_BASELINE2_WORK = 'AssignmentBaseline2Work';
    const ASSIGNMENT_BASELINE2_COST = 'AssignmentBaseline2Cost';
    const TASK_BASELINE2_WORK = 'TaskBaseline2Work';
    const TASK_BASELINE2_COST = 'TaskBaseline2Cost';
    const RESOURCE_BASELINE2_WORK = 'ResourceBaseline2Work';
    const RESOURCE_BASELINE2_COST = 'ResourceBaseline2Cost';
    const ASSIGNMENT_BASELINE3_WORK = 'AssignmentBaseline3Work';
    const ASSIGNMENT_BASELINE3_COST = 'AssignmentBaseline3Cost';
    const TASK_BASELINE3_WORK = 'TaskBaseline3Work';
    const TASK_BASELINE3_COST = 'TaskBaseline3Cost';
    const RESOURCE_BASELINE3_WORK = 'ResourceBaseline3Work';
    const RESOURCE_BASELINE3_COST = 'ResourceBaseline3Cost';
    const ASSIGNMENT_BASELINE4_WORK = 'AssignmentBaseline4Work';
    const ASSIGNMENT_BASELINE4_COST = 'AssignmentBaseline4Cost';
    const TASK_BASELINE4_WORK = 'TaskBaseline4Work';
    const TASK_BASELINE4_COST = 'TaskBaseline4Cost';
    const RESOURCE_BASELINE4_WORK = 'ResourceBaseline4Work';
    const RESOURCE_BASELINE4_COST = 'ResourceBaseline4Cost';
    const ASSIGNMENT_BASELINE5_WORK = 'AssignmentBaseline5Work';
    const ASSIGNMENT_BASELINE5_COST = 'AssignmentBaseline5Cost';
    const TASK_BASELINE5_WORK = 'TaskBaseline5Work';
    const TASK_BASELINE5_COST = 'TaskBaseline5Cost';
    const RESOURCE_BASELINE5_WORK = 'ResourceBaseline5Work';
    const RESOURCE_BASELINE5_COST = 'ResourceBaseline5Cost';
    const ASSIGNMENT_BASELINE6_WORK = 'AssignmentBaseline6Work';
    const ASSIGNMENT_BASELINE6_COST = 'AssignmentBaseline6Cost';
    const TASK_BASELINE6_WORK = 'TaskBaseline6Work';
    const TASK_BASELINE6_COST = 'TaskBaseline6Cost';
    const RESOURCE_BASELINE6_WORK = 'ResourceBaseline6Work';
    const RESOURCE_BASELINE6_COST = 'ResourceBaseline6Cost';
    const ASSIGNMENT_BASELINE7_WORK = 'AssignmentBaseline7Work';
    const ASSIGNMENT_BASELINE7_COST = 'AssignmentBaseline7Cost';
    const TASK_BASELINE7_WORK = 'TaskBaseline7Work';
    const TASK_BASELINE7_COST = 'TaskBaseline7Cost';
    const RESOURCE_BASELINE7_WORK = 'ResourceBaseline7Work';
    const RESOURCE_BASELINE7_COST = 'ResourceBaseline7Cost';
    const ASSIGNMENT_BASELINE8_WORK = 'AssignmentBaseline8Work';
    const ASSIGNMENT_BASELINE8_COST = 'AssignmentBaseline8Cost';
    const TASK_BASELINE8_WORK = 'TaskBaseline8Work';
    const TASK_BASELINE8_COST = 'TaskBaseline8Cost';
    const RESOURCE_BASELINE8_WORK = 'ResourceBaseline8Work';
    const RESOURCE_BASELINE8_COST = 'ResourceBaseline8Cost';
    const ASSIGNMENT_BASELINE9_WORK = 'AssignmentBaseline9Work';
    const ASSIGNMENT_BASELINE9_COST = 'AssignmentBaseline9Cost';
    const TASK_BASELINE9_WORK = 'TaskBaseline9Work';
    const TASK_BASELINE9_COST = 'TaskBaseline9Cost';
    const RESOURCE_BASELINE9_WORK = 'ResourceBaseline9Work';
    const RESOURCE_BASELINE9_COST = 'ResourceBaseline9Cost';
    const ASSIGNMENT_BASELINE10_WORK = 'AssignmentBaseline10Work';
    const ASSIGNMENT_BASELINE10_COST = 'AssignmentBaseline10Cost';
    const TASK_BASELINE10_WORK = 'TaskBaseline10Work';
    const TASK_BASELINE10_COST = 'TaskBaseline10Cost';
    const RESOURCE_BASELINE10_WORK = 'ResourceBaseline10Work';
    const RESOURCE_BASELINE10_COST = 'ResourceBaseline10Cost';
    const PHYSICAL_PERCENT_COMPLETE = 'PhysicalPercentComplete';
    const TASK_WORK = 'TaskWork';
    const TASK_COST = 'TaskCost';
    const RESOURCE_WORK = 'ResourceWork';
    const RESOURCE_COST = 'ResourceCost';
    const ASSIGNMENT_WORK = 'AssignmentWork';
    const ASSIGNMENT_COST = 'AssignmentCost';
    const UNDEFINED = 'Undefined';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASSIGNMENT_REMAINING_WORK,
            self::ASSIGNMENT_ACTUAL_WORK,
            self::ASSIGNMENT_ACTUAL_OVERTIME_WORK,
            self::ASSIGNMENT_BASELINE_WORK,
            self::ASSIGNMENT_BASELINE_COST,
            self::ASSIGNMENT_ACTUAL_COST,
            self::RESOURCE_BASELINE_WORK,
            self::RESOURCE_BASELINE_COST,
            self::TASK_BASELINE_WORK,
            self::TASK_BASELINE_COST,
            self::TASK_PERCENT_COMPLETE,
            self::ASSIGNMENT_BASELINE1_WORK,
            self::ASSIGNMENT_BASELINE1_COST,
            self::TASK_BASELINE1_WORK,
            self::TASK_BASELINE1_COST,
            self::RESOURCE_BASELINE1_WORK,
            self::RESOURCE_BASELINE1_COST,
            self::ASSIGNMENT_BASELINE2_WORK,
            self::ASSIGNMENT_BASELINE2_COST,
            self::TASK_BASELINE2_WORK,
            self::TASK_BASELINE2_COST,
            self::RESOURCE_BASELINE2_WORK,
            self::RESOURCE_BASELINE2_COST,
            self::ASSIGNMENT_BASELINE3_WORK,
            self::ASSIGNMENT_BASELINE3_COST,
            self::TASK_BASELINE3_WORK,
            self::TASK_BASELINE3_COST,
            self::RESOURCE_BASELINE3_WORK,
            self::RESOURCE_BASELINE3_COST,
            self::ASSIGNMENT_BASELINE4_WORK,
            self::ASSIGNMENT_BASELINE4_COST,
            self::TASK_BASELINE4_WORK,
            self::TASK_BASELINE4_COST,
            self::RESOURCE_BASELINE4_WORK,
            self::RESOURCE_BASELINE4_COST,
            self::ASSIGNMENT_BASELINE5_WORK,
            self::ASSIGNMENT_BASELINE5_COST,
            self::TASK_BASELINE5_WORK,
            self::TASK_BASELINE5_COST,
            self::RESOURCE_BASELINE5_WORK,
            self::RESOURCE_BASELINE5_COST,
            self::ASSIGNMENT_BASELINE6_WORK,
            self::ASSIGNMENT_BASELINE6_COST,
            self::TASK_BASELINE6_WORK,
            self::TASK_BASELINE6_COST,
            self::RESOURCE_BASELINE6_WORK,
            self::RESOURCE_BASELINE6_COST,
            self::ASSIGNMENT_BASELINE7_WORK,
            self::ASSIGNMENT_BASELINE7_COST,
            self::TASK_BASELINE7_WORK,
            self::TASK_BASELINE7_COST,
            self::RESOURCE_BASELINE7_WORK,
            self::RESOURCE_BASELINE7_COST,
            self::ASSIGNMENT_BASELINE8_WORK,
            self::ASSIGNMENT_BASELINE8_COST,
            self::TASK_BASELINE8_WORK,
            self::TASK_BASELINE8_COST,
            self::RESOURCE_BASELINE8_WORK,
            self::RESOURCE_BASELINE8_COST,
            self::ASSIGNMENT_BASELINE9_WORK,
            self::ASSIGNMENT_BASELINE9_COST,
            self::TASK_BASELINE9_WORK,
            self::TASK_BASELINE9_COST,
            self::RESOURCE_BASELINE9_WORK,
            self::RESOURCE_BASELINE9_COST,
            self::ASSIGNMENT_BASELINE10_WORK,
            self::ASSIGNMENT_BASELINE10_COST,
            self::TASK_BASELINE10_WORK,
            self::TASK_BASELINE10_COST,
            self::RESOURCE_BASELINE10_WORK,
            self::RESOURCE_BASELINE10_COST,
            self::PHYSICAL_PERCENT_COMPLETE,
            self::TASK_WORK,
            self::TASK_COST,
            self::RESOURCE_WORK,
            self::RESOURCE_COST,
            self::ASSIGNMENT_WORK,
            self::ASSIGNMENT_COST,
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


