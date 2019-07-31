<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReportType.php">
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
 * ReportType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * ReportType
 *
 * @description Specifies a type of the project&#39;s graphical report.
 */
class ReportType
{
    /*
     * Possible values of this enum
     */
    const PROJECT_OVERVIEW = 'ProjectOverview';
    const COST_OVERVIEW = 'CostOverview';
    const WORK_OVERVIEW = 'WorkOverview';
    const RESOURCE_OVERVIEW = 'ResourceOverview';
    const RESOURCE_COST_OVERVIEW = 'ResourceCostOverview';
    const CRITICAL_TASKS = 'CriticalTasks';
    const LATE_TASKS = 'LateTasks';
    const MILESTONES = 'Milestones';
    const UPCOMING_TASK = 'UpcomingTask';
    const COST_OVERRUNS = 'CostOverruns';
    const TASK_COST_OVERVIEW = 'TaskCostOverview';
    const OVERALLOCATED_RESOURCES = 'OverallocatedResources';
    const SLIPPING_TASKS = 'SlippingTasks';
    const BEST_PRACTICE_ANALYZER = 'BestPracticeAnalyzer';
    const BURNDOWN = 'Burndown';
    const CASH_FLOW = 'CashFlow';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROJECT_OVERVIEW,
            self::COST_OVERVIEW,
            self::WORK_OVERVIEW,
            self::RESOURCE_OVERVIEW,
            self::RESOURCE_COST_OVERVIEW,
            self::CRITICAL_TASKS,
            self::LATE_TASKS,
            self::MILESTONES,
            self::UPCOMING_TASK,
            self::COST_OVERRUNS,
            self::TASK_COST_OVERVIEW,
            self::OVERALLOCATED_RESOURCES,
            self::SLIPPING_TASKS,
            self::BEST_PRACTICE_ANALYZER,
            self::BURNDOWN,
            self::CASH_FLOW,
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


