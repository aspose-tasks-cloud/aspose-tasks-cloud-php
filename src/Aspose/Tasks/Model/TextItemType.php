<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TextItemType.php">
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
 * TextItemType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * TextItemType
 *
 * @description Item type to change a text style for.
 */
class TextItemType
{
    /*
     * Possible values of this enum
     */
    const ROW_COLUMN_TITLES = 'RowColumnTitles';
    const CRITICAL_TASKS = 'CriticalTasks';
    const NONCRITICAL_TASKS = 'NoncriticalTasks';
    const MILESTONE_TASKS = 'MilestoneTasks';
    const INACTIVE_TASKS = 'InactiveTasks';
    const SUMMARY_TASKS = 'SummaryTasks';
    const ASSIGNMENT_ROW = 'AssignmentRow';
    const TOP_TIMESCALE_TIER = 'TopTimescaleTier';
    const BOTTOM_TIMESCALE_TIER = 'BottomTimescaleTier';
    const MIDDLE_TIMESCALE_TIER = 'MiddleTimescaleTier';
    const RESOURCES = 'Resources';
    const OVERALLOCATED_RESOURCES = 'OverallocatedResources';
    const TASK_FILTER_HIGHLIGHT = 'TaskFilterHighlight';
    const BAR_TEXT_BOTTOM = 'BarTextBottom';
    const BAR_TEXT_INSIDE = 'BarTextInside';
    const BAR_TEXT_LEFT = 'BarTextLeft';
    const BAR_TEXT_RIGHT = 'BarTextRight';
    const BAR_TEXT_TOP = 'BarTextTop';
    const MARKED_TASKS = 'MarkedTasks';
    const PROJECT_SUMMARY = 'ProjectSummary';
    const EXTERNAL_TASKS = 'ExternalTasks';
    const ALLOCATED = 'Allocated';
    const CHANGED_CELLS = 'ChangedCells';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ROW_COLUMN_TITLES,
            self::CRITICAL_TASKS,
            self::NONCRITICAL_TASKS,
            self::MILESTONE_TASKS,
            self::INACTIVE_TASKS,
            self::SUMMARY_TASKS,
            self::ASSIGNMENT_ROW,
            self::TOP_TIMESCALE_TIER,
            self::BOTTOM_TIMESCALE_TIER,
            self::MIDDLE_TIMESCALE_TIER,
            self::RESOURCES,
            self::OVERALLOCATED_RESOURCES,
            self::TASK_FILTER_HIGHLIGHT,
            self::BAR_TEXT_BOTTOM,
            self::BAR_TEXT_INSIDE,
            self::BAR_TEXT_LEFT,
            self::BAR_TEXT_RIGHT,
            self::BAR_TEXT_TOP,
            self::MARKED_TASKS,
            self::PROJECT_SUMMARY,
            self::EXTERNAL_TASKS,
            self::ALLOCATED,
            self::CHANGED_CELLS,
        ];
    }
}


