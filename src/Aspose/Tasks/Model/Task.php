<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Task.php">
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
 * Task
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * Task
 *
 * @description Represents project task.
 */
class Task implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Task";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'uid' => 'int',
        'id' => 'int',
        'name' => 'string',
        'duration_text' => 'string',
        'duration' => 'string',
        'start' => '\DateTime',
        'finish' => '\DateTime',
        'start_text' => 'string',
        'finish_text' => 'string',
        'percent_complete' => 'int',
        'percent_work_complete' => 'int',
        'is_active' => 'bool',
        'actual_cost' => 'float',
        'actual_duration' => 'string',
        'actual_finish' => '\DateTime',
        'actual_overtime_cost' => 'float',
        'actual_overtime_work' => 'string',
        'actual_work_protected' => 'string',
        'actual_overtime_work_protected' => 'string',
        'actual_start' => '\DateTime',
        'budget_work' => 'string',
        'budget_cost' => 'float',
        'constraint_date' => '\DateTime',
        'constraint_type' => '\Aspose\Tasks\Model\ConstraintType',
        'contact' => 'string',
        'cost' => 'float',
        'cv' => 'double',
        'deadline' => '\DateTime',
        'duration_variance' => 'string',
        'early_finish' => '\DateTime',
        'early_start' => '\DateTime',
        'is_effort_driven' => 'bool',
        'is_external_task' => 'bool',
        'external_task_project' => 'string',
        'external_id' => 'int',
        'finish_slack' => 'int',
        'finish_variance' => 'int',
        'fixed_cost' => 'double',
        'fixed_cost_accrual' => '\Aspose\Tasks\Model\CostAccrualType',
        'free_slack' => 'int',
        'guid' => 'string',
        'hide_bar' => 'bool',
        'ignore_resource_calendar' => 'bool',
        'late_finish' => '\DateTime',
        'late_start' => '\DateTime',
        'is_level_assignments' => 'bool',
        'can_leveling_split' => 'bool',
        'leveling_delay' => 'int',
        'is_marked' => 'bool',
        'is_milestone' => 'bool',
        'is_critical' => 'bool',
        'is_subproject' => 'bool',
        'is_subproject_read_only' => 'bool',
        'subproject_name' => 'string',
        'is_summary' => 'bool',
        'subtasks_uids' => 'int[]',
        'outline_level' => 'int',
        'is_over_allocated' => 'bool',
        'is_estimated' => 'bool',
        'overtime_cost' => 'float',
        'overtime_work' => 'string',
        'physical_percent_complete' => 'int',
        'pre_leveled_finish' => '\DateTime',
        'pre_leveled_start' => '\DateTime',
        'is_recurring' => 'bool',
        'regular_work' => 'string',
        'remaining_cost' => 'float',
        'remaining_duration' => 'string',
        'remaining_overtime_cost' => 'float',
        'remaining_overtime_work' => 'string',
        'remaining_work' => 'string',
        'resume' => '\DateTime',
        'is_resume_valid' => 'bool',
        'stop' => '\DateTime',
        'is_rollup' => 'bool',
        'start_slack' => 'int',
        'start_variance' => 'int',
        'calendar_uid' => 'int',
        'is_manual' => 'bool',
        'manual_start' => '\DateTime',
        'manual_finish' => '\DateTime',
        'manual_duration' => 'string',
        'total_slack' => 'int',
        'type' => '\Aspose\Tasks\Model\TaskType',
        'wbs' => 'string',
        'priority' => 'int',
        'work' => 'string',
        'work_variance' => 'double',
        'notes_text' => 'string',
        'notes_rtf' => 'string',
        'acwp' => 'double',
        'bcws' => 'double',
        'bcwp' => 'double',
        'leveling_delay_format' => '\Aspose\Tasks\Model\TimeUnitType',
        'predecessors' => 'string',
        'successors' => 'string',
        'ignore_warnings' => 'bool',
        'is_expanded' => 'bool',
        'display_on_timeline' => 'bool',
        'display_as_summary' => 'bool',
        'hyperlink' => 'string',
        'hyperlink_address' => 'string',
        'hyperlink_sub_address' => 'string',
        'earned_value_method' => '\Aspose\Tasks\Model\EarnedValueMethodType',
        'is_published' => 'bool',
        'status_manager' => 'string',
        'commitment_start' => '\DateTime',
        'commitment_finish' => '\DateTime',
        'commitment_type' => 'int',
        'baselines' => '\Aspose\Tasks\Model\TaskBaseline[]',
        'extended_attributes' => '\Aspose\Tasks\Model\ExtendedAttribute[]',
        'outline_codes' => '\Aspose\Tasks\Model\OutlineCode[]',
        'warning' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'uid' => 'int32',
        'id' => 'int32',
        'name' => null,
        'duration_text' => null,
        'duration' => 'time-span',
        'start' => 'date-time',
        'finish' => 'date-time',
        'start_text' => null,
        'finish_text' => null,
        'percent_complete' => 'int32',
        'percent_work_complete' => 'int32',
        'is_active' => null,
        'actual_cost' => 'decimal',
        'actual_duration' => 'time-span',
        'actual_finish' => 'date-time',
        'actual_overtime_cost' => 'decimal',
        'actual_overtime_work' => 'time-span',
        'actual_work_protected' => 'time-span',
        'actual_overtime_work_protected' => 'time-span',
        'actual_start' => 'date-time',
        'budget_work' => 'time-span',
        'budget_cost' => 'decimal',
        'constraint_date' => 'date-time',
        'constraint_type' => null,
        'contact' => null,
        'cost' => 'decimal',
        'cv' => 'double',
        'deadline' => 'date-time',
        'duration_variance' => 'time-span',
        'early_finish' => 'date-time',
        'early_start' => 'date-time',
        'is_effort_driven' => null,
        'is_external_task' => null,
        'external_task_project' => null,
        'external_id' => 'int32',
        'finish_slack' => 'int32',
        'finish_variance' => 'int32',
        'fixed_cost' => 'double',
        'fixed_cost_accrual' => null,
        'free_slack' => 'int32',
        'guid' => null,
        'hide_bar' => null,
        'ignore_resource_calendar' => null,
        'late_finish' => 'date-time',
        'late_start' => 'date-time',
        'is_level_assignments' => null,
        'can_leveling_split' => null,
        'leveling_delay' => 'int32',
        'is_marked' => null,
        'is_milestone' => null,
        'is_critical' => null,
        'is_subproject' => null,
        'is_subproject_read_only' => null,
        'subproject_name' => null,
        'is_summary' => null,
        'subtasks_uids' => 'int32',
        'outline_level' => 'int32',
        'is_over_allocated' => null,
        'is_estimated' => null,
        'overtime_cost' => 'decimal',
        'overtime_work' => 'time-span',
        'physical_percent_complete' => 'int32',
        'pre_leveled_finish' => 'date-time',
        'pre_leveled_start' => 'date-time',
        'is_recurring' => null,
        'regular_work' => 'time-span',
        'remaining_cost' => 'decimal',
        'remaining_duration' => 'time-span',
        'remaining_overtime_cost' => 'decimal',
        'remaining_overtime_work' => 'time-span',
        'remaining_work' => 'time-span',
        'resume' => 'date-time',
        'is_resume_valid' => null,
        'stop' => 'date-time',
        'is_rollup' => null,
        'start_slack' => 'int32',
        'start_variance' => 'int32',
        'calendar_uid' => 'int32',
        'is_manual' => null,
        'manual_start' => 'date-time',
        'manual_finish' => 'date-time',
        'manual_duration' => 'time-span',
        'total_slack' => 'int32',
        'type' => null,
        'wbs' => null,
        'priority' => 'int32',
        'work' => 'time-span',
        'work_variance' => 'double',
        'notes_text' => null,
        'notes_rtf' => null,
        'acwp' => 'double',
        'bcws' => 'double',
        'bcwp' => 'double',
        'leveling_delay_format' => null,
        'predecessors' => null,
        'successors' => null,
        'ignore_warnings' => null,
        'is_expanded' => null,
        'display_on_timeline' => null,
        'display_as_summary' => null,
        'hyperlink' => null,
        'hyperlink_address' => null,
        'hyperlink_sub_address' => null,
        'earned_value_method' => null,
        'is_published' => null,
        'status_manager' => null,
        'commitment_start' => 'date-time',
        'commitment_finish' => 'date-time',
        'commitment_type' => 'int32',
        'baselines' => null,
        'extended_attributes' => null,
        'outline_codes' => null,
        'warning' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uid' => 'Uid',
        'id' => 'Id',
        'name' => 'Name',
        'duration_text' => 'DurationText',
        'duration' => 'Duration',
        'start' => 'Start',
        'finish' => 'Finish',
        'start_text' => 'StartText',
        'finish_text' => 'FinishText',
        'percent_complete' => 'PercentComplete',
        'percent_work_complete' => 'PercentWorkComplete',
        'is_active' => 'IsActive',
        'actual_cost' => 'ActualCost',
        'actual_duration' => 'ActualDuration',
        'actual_finish' => 'ActualFinish',
        'actual_overtime_cost' => 'ActualOvertimeCost',
        'actual_overtime_work' => 'ActualOvertimeWork',
        'actual_work_protected' => 'ActualWorkProtected',
        'actual_overtime_work_protected' => 'ActualOvertimeWorkProtected',
        'actual_start' => 'ActualStart',
        'budget_work' => 'BudgetWork',
        'budget_cost' => 'BudgetCost',
        'constraint_date' => 'ConstraintDate',
        'constraint_type' => 'ConstraintType',
        'contact' => 'Contact',
        'cost' => 'Cost',
        'cv' => 'Cv',
        'deadline' => 'Deadline',
        'duration_variance' => 'DurationVariance',
        'early_finish' => 'EarlyFinish',
        'early_start' => 'EarlyStart',
        'is_effort_driven' => 'IsEffortDriven',
        'is_external_task' => 'IsExternalTask',
        'external_task_project' => 'ExternalTaskProject',
        'external_id' => 'ExternalId',
        'finish_slack' => 'FinishSlack',
        'finish_variance' => 'FinishVariance',
        'fixed_cost' => 'FixedCost',
        'fixed_cost_accrual' => 'FixedCostAccrual',
        'free_slack' => 'FreeSlack',
        'guid' => 'GUID',
        'hide_bar' => 'HideBar',
        'ignore_resource_calendar' => 'IgnoreResourceCalendar',
        'late_finish' => 'LateFinish',
        'late_start' => 'LateStart',
        'is_level_assignments' => 'IsLevelAssignments',
        'can_leveling_split' => 'CanLevelingSplit',
        'leveling_delay' => 'LevelingDelay',
        'is_marked' => 'IsMarked',
        'is_milestone' => 'IsMilestone',
        'is_critical' => 'IsCritical',
        'is_subproject' => 'IsSubproject',
        'is_subproject_read_only' => 'IsSubprojectReadOnly',
        'subproject_name' => 'SubprojectName',
        'is_summary' => 'IsSummary',
        'subtasks_uids' => 'SubtasksUids',
        'outline_level' => 'OutlineLevel',
        'is_over_allocated' => 'IsOverAllocated',
        'is_estimated' => 'IsEstimated',
        'overtime_cost' => 'OvertimeCost',
        'overtime_work' => 'OvertimeWork',
        'physical_percent_complete' => 'PhysicalPercentComplete',
        'pre_leveled_finish' => 'PreLeveledFinish',
        'pre_leveled_start' => 'PreLeveledStart',
        'is_recurring' => 'IsRecurring',
        'regular_work' => 'RegularWork',
        'remaining_cost' => 'RemainingCost',
        'remaining_duration' => 'RemainingDuration',
        'remaining_overtime_cost' => 'RemainingOvertimeCost',
        'remaining_overtime_work' => 'RemainingOvertimeWork',
        'remaining_work' => 'RemainingWork',
        'resume' => 'Resume',
        'is_resume_valid' => 'IsResumeValid',
        'stop' => 'Stop',
        'is_rollup' => 'IsRollup',
        'start_slack' => 'StartSlack',
        'start_variance' => 'StartVariance',
        'calendar_uid' => 'CalendarUid',
        'is_manual' => 'IsManual',
        'manual_start' => 'ManualStart',
        'manual_finish' => 'ManualFinish',
        'manual_duration' => 'ManualDuration',
        'total_slack' => 'TotalSlack',
        'type' => 'Type',
        'wbs' => 'Wbs',
        'priority' => 'Priority',
        'work' => 'Work',
        'work_variance' => 'WorkVariance',
        'notes_text' => 'NotesText',
        'notes_rtf' => 'NotesRTF',
        'acwp' => 'Acwp',
        'bcws' => 'Bcws',
        'bcwp' => 'Bcwp',
        'leveling_delay_format' => 'LevelingDelayFormat',
        'predecessors' => 'Predecessors',
        'successors' => 'Successors',
        'ignore_warnings' => 'IgnoreWarnings',
        'is_expanded' => 'IsExpanded',
        'display_on_timeline' => 'DisplayOnTimeline',
        'display_as_summary' => 'DisplayAsSummary',
        'hyperlink' => 'Hyperlink',
        'hyperlink_address' => 'HyperlinkAddress',
        'hyperlink_sub_address' => 'HyperlinkSubAddress',
        'earned_value_method' => 'EarnedValueMethod',
        'is_published' => 'IsPublished',
        'status_manager' => 'StatusManager',
        'commitment_start' => 'CommitmentStart',
        'commitment_finish' => 'CommitmentFinish',
        'commitment_type' => 'CommitmentType',
        'baselines' => 'Baselines',
        'extended_attributes' => 'ExtendedAttributes',
        'outline_codes' => 'OutlineCodes',
        'warning' => 'Warning'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'id' => 'setId',
        'name' => 'setName',
        'duration_text' => 'setDurationText',
        'duration' => 'setDuration',
        'start' => 'setStart',
        'finish' => 'setFinish',
        'start_text' => 'setStartText',
        'finish_text' => 'setFinishText',
        'percent_complete' => 'setPercentComplete',
        'percent_work_complete' => 'setPercentWorkComplete',
        'is_active' => 'setIsActive',
        'actual_cost' => 'setActualCost',
        'actual_duration' => 'setActualDuration',
        'actual_finish' => 'setActualFinish',
        'actual_overtime_cost' => 'setActualOvertimeCost',
        'actual_overtime_work' => 'setActualOvertimeWork',
        'actual_work_protected' => 'setActualWorkProtected',
        'actual_overtime_work_protected' => 'setActualOvertimeWorkProtected',
        'actual_start' => 'setActualStart',
        'budget_work' => 'setBudgetWork',
        'budget_cost' => 'setBudgetCost',
        'constraint_date' => 'setConstraintDate',
        'constraint_type' => 'setConstraintType',
        'contact' => 'setContact',
        'cost' => 'setCost',
        'cv' => 'setCv',
        'deadline' => 'setDeadline',
        'duration_variance' => 'setDurationVariance',
        'early_finish' => 'setEarlyFinish',
        'early_start' => 'setEarlyStart',
        'is_effort_driven' => 'setIsEffortDriven',
        'is_external_task' => 'setIsExternalTask',
        'external_task_project' => 'setExternalTaskProject',
        'external_id' => 'setExternalId',
        'finish_slack' => 'setFinishSlack',
        'finish_variance' => 'setFinishVariance',
        'fixed_cost' => 'setFixedCost',
        'fixed_cost_accrual' => 'setFixedCostAccrual',
        'free_slack' => 'setFreeSlack',
        'guid' => 'setGuid',
        'hide_bar' => 'setHideBar',
        'ignore_resource_calendar' => 'setIgnoreResourceCalendar',
        'late_finish' => 'setLateFinish',
        'late_start' => 'setLateStart',
        'is_level_assignments' => 'setIsLevelAssignments',
        'can_leveling_split' => 'setCanLevelingSplit',
        'leveling_delay' => 'setLevelingDelay',
        'is_marked' => 'setIsMarked',
        'is_milestone' => 'setIsMilestone',
        'is_critical' => 'setIsCritical',
        'is_subproject' => 'setIsSubproject',
        'is_subproject_read_only' => 'setIsSubprojectReadOnly',
        'subproject_name' => 'setSubprojectName',
        'is_summary' => 'setIsSummary',
        'subtasks_uids' => 'setSubtasksUids',
        'outline_level' => 'setOutlineLevel',
        'is_over_allocated' => 'setIsOverAllocated',
        'is_estimated' => 'setIsEstimated',
        'overtime_cost' => 'setOvertimeCost',
        'overtime_work' => 'setOvertimeWork',
        'physical_percent_complete' => 'setPhysicalPercentComplete',
        'pre_leveled_finish' => 'setPreLeveledFinish',
        'pre_leveled_start' => 'setPreLeveledStart',
        'is_recurring' => 'setIsRecurring',
        'regular_work' => 'setRegularWork',
        'remaining_cost' => 'setRemainingCost',
        'remaining_duration' => 'setRemainingDuration',
        'remaining_overtime_cost' => 'setRemainingOvertimeCost',
        'remaining_overtime_work' => 'setRemainingOvertimeWork',
        'remaining_work' => 'setRemainingWork',
        'resume' => 'setResume',
        'is_resume_valid' => 'setIsResumeValid',
        'stop' => 'setStop',
        'is_rollup' => 'setIsRollup',
        'start_slack' => 'setStartSlack',
        'start_variance' => 'setStartVariance',
        'calendar_uid' => 'setCalendarUid',
        'is_manual' => 'setIsManual',
        'manual_start' => 'setManualStart',
        'manual_finish' => 'setManualFinish',
        'manual_duration' => 'setManualDuration',
        'total_slack' => 'setTotalSlack',
        'type' => 'setType',
        'wbs' => 'setWbs',
        'priority' => 'setPriority',
        'work' => 'setWork',
        'work_variance' => 'setWorkVariance',
        'notes_text' => 'setNotesText',
        'notes_rtf' => 'setNotesRtf',
        'acwp' => 'setAcwp',
        'bcws' => 'setBcws',
        'bcwp' => 'setBcwp',
        'leveling_delay_format' => 'setLevelingDelayFormat',
        'predecessors' => 'setPredecessors',
        'successors' => 'setSuccessors',
        'ignore_warnings' => 'setIgnoreWarnings',
        'is_expanded' => 'setIsExpanded',
        'display_on_timeline' => 'setDisplayOnTimeline',
        'display_as_summary' => 'setDisplayAsSummary',
        'hyperlink' => 'setHyperlink',
        'hyperlink_address' => 'setHyperlinkAddress',
        'hyperlink_sub_address' => 'setHyperlinkSubAddress',
        'earned_value_method' => 'setEarnedValueMethod',
        'is_published' => 'setIsPublished',
        'status_manager' => 'setStatusManager',
        'commitment_start' => 'setCommitmentStart',
        'commitment_finish' => 'setCommitmentFinish',
        'commitment_type' => 'setCommitmentType',
        'baselines' => 'setBaselines',
        'extended_attributes' => 'setExtendedAttributes',
        'outline_codes' => 'setOutlineCodes',
        'warning' => 'setWarning'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'id' => 'getId',
        'name' => 'getName',
        'duration_text' => 'getDurationText',
        'duration' => 'getDuration',
        'start' => 'getStart',
        'finish' => 'getFinish',
        'start_text' => 'getStartText',
        'finish_text' => 'getFinishText',
        'percent_complete' => 'getPercentComplete',
        'percent_work_complete' => 'getPercentWorkComplete',
        'is_active' => 'getIsActive',
        'actual_cost' => 'getActualCost',
        'actual_duration' => 'getActualDuration',
        'actual_finish' => 'getActualFinish',
        'actual_overtime_cost' => 'getActualOvertimeCost',
        'actual_overtime_work' => 'getActualOvertimeWork',
        'actual_work_protected' => 'getActualWorkProtected',
        'actual_overtime_work_protected' => 'getActualOvertimeWorkProtected',
        'actual_start' => 'getActualStart',
        'budget_work' => 'getBudgetWork',
        'budget_cost' => 'getBudgetCost',
        'constraint_date' => 'getConstraintDate',
        'constraint_type' => 'getConstraintType',
        'contact' => 'getContact',
        'cost' => 'getCost',
        'cv' => 'getCv',
        'deadline' => 'getDeadline',
        'duration_variance' => 'getDurationVariance',
        'early_finish' => 'getEarlyFinish',
        'early_start' => 'getEarlyStart',
        'is_effort_driven' => 'getIsEffortDriven',
        'is_external_task' => 'getIsExternalTask',
        'external_task_project' => 'getExternalTaskProject',
        'external_id' => 'getExternalId',
        'finish_slack' => 'getFinishSlack',
        'finish_variance' => 'getFinishVariance',
        'fixed_cost' => 'getFixedCost',
        'fixed_cost_accrual' => 'getFixedCostAccrual',
        'free_slack' => 'getFreeSlack',
        'guid' => 'getGuid',
        'hide_bar' => 'getHideBar',
        'ignore_resource_calendar' => 'getIgnoreResourceCalendar',
        'late_finish' => 'getLateFinish',
        'late_start' => 'getLateStart',
        'is_level_assignments' => 'getIsLevelAssignments',
        'can_leveling_split' => 'getCanLevelingSplit',
        'leveling_delay' => 'getLevelingDelay',
        'is_marked' => 'getIsMarked',
        'is_milestone' => 'getIsMilestone',
        'is_critical' => 'getIsCritical',
        'is_subproject' => 'getIsSubproject',
        'is_subproject_read_only' => 'getIsSubprojectReadOnly',
        'subproject_name' => 'getSubprojectName',
        'is_summary' => 'getIsSummary',
        'subtasks_uids' => 'getSubtasksUids',
        'outline_level' => 'getOutlineLevel',
        'is_over_allocated' => 'getIsOverAllocated',
        'is_estimated' => 'getIsEstimated',
        'overtime_cost' => 'getOvertimeCost',
        'overtime_work' => 'getOvertimeWork',
        'physical_percent_complete' => 'getPhysicalPercentComplete',
        'pre_leveled_finish' => 'getPreLeveledFinish',
        'pre_leveled_start' => 'getPreLeveledStart',
        'is_recurring' => 'getIsRecurring',
        'regular_work' => 'getRegularWork',
        'remaining_cost' => 'getRemainingCost',
        'remaining_duration' => 'getRemainingDuration',
        'remaining_overtime_cost' => 'getRemainingOvertimeCost',
        'remaining_overtime_work' => 'getRemainingOvertimeWork',
        'remaining_work' => 'getRemainingWork',
        'resume' => 'getResume',
        'is_resume_valid' => 'getIsResumeValid',
        'stop' => 'getStop',
        'is_rollup' => 'getIsRollup',
        'start_slack' => 'getStartSlack',
        'start_variance' => 'getStartVariance',
        'calendar_uid' => 'getCalendarUid',
        'is_manual' => 'getIsManual',
        'manual_start' => 'getManualStart',
        'manual_finish' => 'getManualFinish',
        'manual_duration' => 'getManualDuration',
        'total_slack' => 'getTotalSlack',
        'type' => 'getType',
        'wbs' => 'getWbs',
        'priority' => 'getPriority',
        'work' => 'getWork',
        'work_variance' => 'getWorkVariance',
        'notes_text' => 'getNotesText',
        'notes_rtf' => 'getNotesRtf',
        'acwp' => 'getAcwp',
        'bcws' => 'getBcws',
        'bcwp' => 'getBcwp',
        'leveling_delay_format' => 'getLevelingDelayFormat',
        'predecessors' => 'getPredecessors',
        'successors' => 'getSuccessors',
        'ignore_warnings' => 'getIgnoreWarnings',
        'is_expanded' => 'getIsExpanded',
        'display_on_timeline' => 'getDisplayOnTimeline',
        'display_as_summary' => 'getDisplayAsSummary',
        'hyperlink' => 'getHyperlink',
        'hyperlink_address' => 'getHyperlinkAddress',
        'hyperlink_sub_address' => 'getHyperlinkSubAddress',
        'earned_value_method' => 'getEarnedValueMethod',
        'is_published' => 'getIsPublished',
        'status_manager' => 'getStatusManager',
        'commitment_start' => 'getCommitmentStart',
        'commitment_finish' => 'getCommitmentFinish',
        'commitment_type' => 'getCommitmentType',
        'baselines' => 'getBaselines',
        'extended_attributes' => 'getExtendedAttributes',
        'outline_codes' => 'getOutlineCodes',
        'warning' => 'getWarning'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['duration_text'] = isset($data['duration_text']) ? $data['duration_text'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['finish'] = isset($data['finish']) ? $data['finish'] : null;
        $this->container['start_text'] = isset($data['start_text']) ? $data['start_text'] : null;
        $this->container['finish_text'] = isset($data['finish_text']) ? $data['finish_text'] : null;
        $this->container['percent_complete'] = isset($data['percent_complete']) ? $data['percent_complete'] : null;
        $this->container['percent_work_complete'] = isset($data['percent_work_complete']) ? $data['percent_work_complete'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : true;
        $this->container['actual_cost'] = isset($data['actual_cost']) ? $data['actual_cost'] : null;
        $this->container['actual_duration'] = isset($data['actual_duration']) ? $data['actual_duration'] : null;
        $this->container['actual_finish'] = isset($data['actual_finish']) ? $data['actual_finish'] : null;
        $this->container['actual_overtime_cost'] = isset($data['actual_overtime_cost']) ? $data['actual_overtime_cost'] : null;
        $this->container['actual_overtime_work'] = isset($data['actual_overtime_work']) ? $data['actual_overtime_work'] : null;
        $this->container['actual_work_protected'] = isset($data['actual_work_protected']) ? $data['actual_work_protected'] : null;
        $this->container['actual_overtime_work_protected'] = isset($data['actual_overtime_work_protected']) ? $data['actual_overtime_work_protected'] : null;
        $this->container['actual_start'] = isset($data['actual_start']) ? $data['actual_start'] : null;
        $this->container['budget_work'] = isset($data['budget_work']) ? $data['budget_work'] : null;
        $this->container['budget_cost'] = isset($data['budget_cost']) ? $data['budget_cost'] : null;
        $this->container['constraint_date'] = isset($data['constraint_date']) ? $data['constraint_date'] : null;
        $this->container['constraint_type'] = isset($data['constraint_type']) ? $data['constraint_type'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['cv'] = isset($data['cv']) ? $data['cv'] : null;
        $this->container['deadline'] = isset($data['deadline']) ? $data['deadline'] : null;
        $this->container['duration_variance'] = isset($data['duration_variance']) ? $data['duration_variance'] : null;
        $this->container['early_finish'] = isset($data['early_finish']) ? $data['early_finish'] : null;
        $this->container['early_start'] = isset($data['early_start']) ? $data['early_start'] : null;
        $this->container['is_effort_driven'] = isset($data['is_effort_driven']) ? $data['is_effort_driven'] : null;
        $this->container['is_external_task'] = isset($data['is_external_task']) ? $data['is_external_task'] : null;
        $this->container['external_task_project'] = isset($data['external_task_project']) ? $data['external_task_project'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['finish_slack'] = isset($data['finish_slack']) ? $data['finish_slack'] : null;
        $this->container['finish_variance'] = isset($data['finish_variance']) ? $data['finish_variance'] : null;
        $this->container['fixed_cost'] = isset($data['fixed_cost']) ? $data['fixed_cost'] : null;
        $this->container['fixed_cost_accrual'] = isset($data['fixed_cost_accrual']) ? $data['fixed_cost_accrual'] : null;
        $this->container['free_slack'] = isset($data['free_slack']) ? $data['free_slack'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['hide_bar'] = isset($data['hide_bar']) ? $data['hide_bar'] : null;
        $this->container['ignore_resource_calendar'] = isset($data['ignore_resource_calendar']) ? $data['ignore_resource_calendar'] : null;
        $this->container['late_finish'] = isset($data['late_finish']) ? $data['late_finish'] : null;
        $this->container['late_start'] = isset($data['late_start']) ? $data['late_start'] : null;
        $this->container['is_level_assignments'] = isset($data['is_level_assignments']) ? $data['is_level_assignments'] : true;
        $this->container['can_leveling_split'] = isset($data['can_leveling_split']) ? $data['can_leveling_split'] : true;
        $this->container['leveling_delay'] = isset($data['leveling_delay']) ? $data['leveling_delay'] : null;
        $this->container['is_marked'] = isset($data['is_marked']) ? $data['is_marked'] : null;
        $this->container['is_milestone'] = isset($data['is_milestone']) ? $data['is_milestone'] : null;
        $this->container['is_critical'] = isset($data['is_critical']) ? $data['is_critical'] : null;
        $this->container['is_subproject'] = isset($data['is_subproject']) ? $data['is_subproject'] : null;
        $this->container['is_subproject_read_only'] = isset($data['is_subproject_read_only']) ? $data['is_subproject_read_only'] : null;
        $this->container['subproject_name'] = isset($data['subproject_name']) ? $data['subproject_name'] : null;
        $this->container['is_summary'] = isset($data['is_summary']) ? $data['is_summary'] : null;
        $this->container['subtasks_uids'] = isset($data['subtasks_uids']) ? $data['subtasks_uids'] : null;
        $this->container['outline_level'] = isset($data['outline_level']) ? $data['outline_level'] : null;
        $this->container['is_over_allocated'] = isset($data['is_over_allocated']) ? $data['is_over_allocated'] : null;
        $this->container['is_estimated'] = isset($data['is_estimated']) ? $data['is_estimated'] : null;
        $this->container['overtime_cost'] = isset($data['overtime_cost']) ? $data['overtime_cost'] : null;
        $this->container['overtime_work'] = isset($data['overtime_work']) ? $data['overtime_work'] : null;
        $this->container['physical_percent_complete'] = isset($data['physical_percent_complete']) ? $data['physical_percent_complete'] : null;
        $this->container['pre_leveled_finish'] = isset($data['pre_leveled_finish']) ? $data['pre_leveled_finish'] : null;
        $this->container['pre_leveled_start'] = isset($data['pre_leveled_start']) ? $data['pre_leveled_start'] : null;
        $this->container['is_recurring'] = isset($data['is_recurring']) ? $data['is_recurring'] : null;
        $this->container['regular_work'] = isset($data['regular_work']) ? $data['regular_work'] : null;
        $this->container['remaining_cost'] = isset($data['remaining_cost']) ? $data['remaining_cost'] : null;
        $this->container['remaining_duration'] = isset($data['remaining_duration']) ? $data['remaining_duration'] : null;
        $this->container['remaining_overtime_cost'] = isset($data['remaining_overtime_cost']) ? $data['remaining_overtime_cost'] : null;
        $this->container['remaining_overtime_work'] = isset($data['remaining_overtime_work']) ? $data['remaining_overtime_work'] : null;
        $this->container['remaining_work'] = isset($data['remaining_work']) ? $data['remaining_work'] : null;
        $this->container['resume'] = isset($data['resume']) ? $data['resume'] : null;
        $this->container['is_resume_valid'] = isset($data['is_resume_valid']) ? $data['is_resume_valid'] : null;
        $this->container['stop'] = isset($data['stop']) ? $data['stop'] : null;
        $this->container['is_rollup'] = isset($data['is_rollup']) ? $data['is_rollup'] : null;
        $this->container['start_slack'] = isset($data['start_slack']) ? $data['start_slack'] : null;
        $this->container['start_variance'] = isset($data['start_variance']) ? $data['start_variance'] : null;
        $this->container['calendar_uid'] = isset($data['calendar_uid']) ? $data['calendar_uid'] : -1;
        $this->container['is_manual'] = isset($data['is_manual']) ? $data['is_manual'] : null;
        $this->container['manual_start'] = isset($data['manual_start']) ? $data['manual_start'] : null;
        $this->container['manual_finish'] = isset($data['manual_finish']) ? $data['manual_finish'] : null;
        $this->container['manual_duration'] = isset($data['manual_duration']) ? $data['manual_duration'] : null;
        $this->container['total_slack'] = isset($data['total_slack']) ? $data['total_slack'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['wbs'] = isset($data['wbs']) ? $data['wbs'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['work'] = isset($data['work']) ? $data['work'] : null;
        $this->container['work_variance'] = isset($data['work_variance']) ? $data['work_variance'] : null;
        $this->container['notes_text'] = isset($data['notes_text']) ? $data['notes_text'] : null;
        $this->container['notes_rtf'] = isset($data['notes_rtf']) ? $data['notes_rtf'] : null;
        $this->container['acwp'] = isset($data['acwp']) ? $data['acwp'] : null;
        $this->container['bcws'] = isset($data['bcws']) ? $data['bcws'] : null;
        $this->container['bcwp'] = isset($data['bcwp']) ? $data['bcwp'] : null;
        $this->container['leveling_delay_format'] = isset($data['leveling_delay_format']) ? $data['leveling_delay_format'] : null;
        $this->container['predecessors'] = isset($data['predecessors']) ? $data['predecessors'] : null;
        $this->container['successors'] = isset($data['successors']) ? $data['successors'] : null;
        $this->container['ignore_warnings'] = isset($data['ignore_warnings']) ? $data['ignore_warnings'] : false;
        $this->container['is_expanded'] = isset($data['is_expanded']) ? $data['is_expanded'] : null;
        $this->container['display_on_timeline'] = isset($data['display_on_timeline']) ? $data['display_on_timeline'] : null;
        $this->container['display_as_summary'] = isset($data['display_as_summary']) ? $data['display_as_summary'] : null;
        $this->container['hyperlink'] = isset($data['hyperlink']) ? $data['hyperlink'] : null;
        $this->container['hyperlink_address'] = isset($data['hyperlink_address']) ? $data['hyperlink_address'] : null;
        $this->container['hyperlink_sub_address'] = isset($data['hyperlink_sub_address']) ? $data['hyperlink_sub_address'] : null;
        $this->container['earned_value_method'] = isset($data['earned_value_method']) ? $data['earned_value_method'] : null;
        $this->container['is_published'] = isset($data['is_published']) ? $data['is_published'] : true;
        $this->container['status_manager'] = isset($data['status_manager']) ? $data['status_manager'] : null;
        $this->container['commitment_start'] = isset($data['commitment_start']) ? $data['commitment_start'] : null;
        $this->container['commitment_finish'] = isset($data['commitment_finish']) ? $data['commitment_finish'] : null;
        $this->container['commitment_type'] = isset($data['commitment_type']) ? $data['commitment_type'] : null;
        $this->container['baselines'] = isset($data['baselines']) ? $data['baselines'] : null;
        $this->container['extended_attributes'] = isset($data['extended_attributes']) ? $data['extended_attributes'] : null;
        $this->container['outline_codes'] = isset($data['outline_codes']) ? $data['outline_codes'] : null;
        $this->container['warning'] = isset($data['warning']) ? $data['warning'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uid'] === null) {
            $invalidProperties[] = "'uid' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['finish'] === null) {
            $invalidProperties[] = "'finish' can't be null";
        }
        if ($this->container['percent_complete'] === null) {
            $invalidProperties[] = "'percent_complete' can't be null";
        }
        if ($this->container['percent_work_complete'] === null) {
            $invalidProperties[] = "'percent_work_complete' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['actual_cost'] === null) {
            $invalidProperties[] = "'actual_cost' can't be null";
        }
        if ($this->container['actual_duration'] === null) {
            $invalidProperties[] = "'actual_duration' can't be null";
        }
        if ($this->container['actual_finish'] === null) {
            $invalidProperties[] = "'actual_finish' can't be null";
        }
        if ($this->container['actual_overtime_cost'] === null) {
            $invalidProperties[] = "'actual_overtime_cost' can't be null";
        }
        if ($this->container['actual_overtime_work'] === null) {
            $invalidProperties[] = "'actual_overtime_work' can't be null";
        }
        if ($this->container['actual_work_protected'] === null) {
            $invalidProperties[] = "'actual_work_protected' can't be null";
        }
        if ($this->container['actual_overtime_work_protected'] === null) {
            $invalidProperties[] = "'actual_overtime_work_protected' can't be null";
        }
        if ($this->container['actual_start'] === null) {
            $invalidProperties[] = "'actual_start' can't be null";
        }
        if ($this->container['budget_work'] === null) {
            $invalidProperties[] = "'budget_work' can't be null";
        }
        if ($this->container['budget_cost'] === null) {
            $invalidProperties[] = "'budget_cost' can't be null";
        }
        if ($this->container['constraint_date'] === null) {
            $invalidProperties[] = "'constraint_date' can't be null";
        }
        if ($this->container['constraint_type'] === null) {
            $invalidProperties[] = "'constraint_type' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['cv'] === null) {
            $invalidProperties[] = "'cv' can't be null";
        }
        if ($this->container['deadline'] === null) {
            $invalidProperties[] = "'deadline' can't be null";
        }
        if ($this->container['duration_variance'] === null) {
            $invalidProperties[] = "'duration_variance' can't be null";
        }
        if ($this->container['early_finish'] === null) {
            $invalidProperties[] = "'early_finish' can't be null";
        }
        if ($this->container['early_start'] === null) {
            $invalidProperties[] = "'early_start' can't be null";
        }
        if ($this->container['is_effort_driven'] === null) {
            $invalidProperties[] = "'is_effort_driven' can't be null";
        }
        if ($this->container['is_external_task'] === null) {
            $invalidProperties[] = "'is_external_task' can't be null";
        }
        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ($this->container['finish_slack'] === null) {
            $invalidProperties[] = "'finish_slack' can't be null";
        }
        if ($this->container['finish_variance'] === null) {
            $invalidProperties[] = "'finish_variance' can't be null";
        }
        if ($this->container['fixed_cost'] === null) {
            $invalidProperties[] = "'fixed_cost' can't be null";
        }
        if ($this->container['fixed_cost_accrual'] === null) {
            $invalidProperties[] = "'fixed_cost_accrual' can't be null";
        }
        if ($this->container['free_slack'] === null) {
            $invalidProperties[] = "'free_slack' can't be null";
        }
        if ($this->container['hide_bar'] === null) {
            $invalidProperties[] = "'hide_bar' can't be null";
        }
        if ($this->container['ignore_resource_calendar'] === null) {
            $invalidProperties[] = "'ignore_resource_calendar' can't be null";
        }
        if ($this->container['late_finish'] === null) {
            $invalidProperties[] = "'late_finish' can't be null";
        }
        if ($this->container['late_start'] === null) {
            $invalidProperties[] = "'late_start' can't be null";
        }
        if ($this->container['is_level_assignments'] === null) {
            $invalidProperties[] = "'is_level_assignments' can't be null";
        }
        if ($this->container['can_leveling_split'] === null) {
            $invalidProperties[] = "'can_leveling_split' can't be null";
        }
        if ($this->container['leveling_delay'] === null) {
            $invalidProperties[] = "'leveling_delay' can't be null";
        }
        if ($this->container['is_marked'] === null) {
            $invalidProperties[] = "'is_marked' can't be null";
        }
        if ($this->container['is_milestone'] === null) {
            $invalidProperties[] = "'is_milestone' can't be null";
        }
        if ($this->container['is_critical'] === null) {
            $invalidProperties[] = "'is_critical' can't be null";
        }
        if ($this->container['is_subproject'] === null) {
            $invalidProperties[] = "'is_subproject' can't be null";
        }
        if ($this->container['is_subproject_read_only'] === null) {
            $invalidProperties[] = "'is_subproject_read_only' can't be null";
        }
        if ($this->container['is_summary'] === null) {
            $invalidProperties[] = "'is_summary' can't be null";
        }
        if ($this->container['outline_level'] === null) {
            $invalidProperties[] = "'outline_level' can't be null";
        }
        if ($this->container['is_over_allocated'] === null) {
            $invalidProperties[] = "'is_over_allocated' can't be null";
        }
        if ($this->container['is_estimated'] === null) {
            $invalidProperties[] = "'is_estimated' can't be null";
        }
        if ($this->container['overtime_cost'] === null) {
            $invalidProperties[] = "'overtime_cost' can't be null";
        }
        if ($this->container['overtime_work'] === null) {
            $invalidProperties[] = "'overtime_work' can't be null";
        }
        if ($this->container['physical_percent_complete'] === null) {
            $invalidProperties[] = "'physical_percent_complete' can't be null";
        }
        if ($this->container['pre_leveled_finish'] === null) {
            $invalidProperties[] = "'pre_leveled_finish' can't be null";
        }
        if ($this->container['pre_leveled_start'] === null) {
            $invalidProperties[] = "'pre_leveled_start' can't be null";
        }
        if ($this->container['is_recurring'] === null) {
            $invalidProperties[] = "'is_recurring' can't be null";
        }
        if ($this->container['regular_work'] === null) {
            $invalidProperties[] = "'regular_work' can't be null";
        }
        if ($this->container['remaining_cost'] === null) {
            $invalidProperties[] = "'remaining_cost' can't be null";
        }
        if ($this->container['remaining_duration'] === null) {
            $invalidProperties[] = "'remaining_duration' can't be null";
        }
        if ($this->container['remaining_overtime_cost'] === null) {
            $invalidProperties[] = "'remaining_overtime_cost' can't be null";
        }
        if ($this->container['remaining_overtime_work'] === null) {
            $invalidProperties[] = "'remaining_overtime_work' can't be null";
        }
        if ($this->container['remaining_work'] === null) {
            $invalidProperties[] = "'remaining_work' can't be null";
        }
        if ($this->container['resume'] === null) {
            $invalidProperties[] = "'resume' can't be null";
        }
        if ($this->container['stop'] === null) {
            $invalidProperties[] = "'stop' can't be null";
        }
        if ($this->container['is_rollup'] === null) {
            $invalidProperties[] = "'is_rollup' can't be null";
        }
        if ($this->container['start_slack'] === null) {
            $invalidProperties[] = "'start_slack' can't be null";
        }
        if ($this->container['start_variance'] === null) {
            $invalidProperties[] = "'start_variance' can't be null";
        }
        if ($this->container['calendar_uid'] === null) {
            $invalidProperties[] = "'calendar_uid' can't be null";
        }
        if ($this->container['is_manual'] === null) {
            $invalidProperties[] = "'is_manual' can't be null";
        }
        if ($this->container['manual_start'] === null) {
            $invalidProperties[] = "'manual_start' can't be null";
        }
        if ($this->container['manual_finish'] === null) {
            $invalidProperties[] = "'manual_finish' can't be null";
        }
        if ($this->container['manual_duration'] === null) {
            $invalidProperties[] = "'manual_duration' can't be null";
        }
        if ($this->container['total_slack'] === null) {
            $invalidProperties[] = "'total_slack' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['work'] === null) {
            $invalidProperties[] = "'work' can't be null";
        }
        if ($this->container['work_variance'] === null) {
            $invalidProperties[] = "'work_variance' can't be null";
        }
        if ($this->container['acwp'] === null) {
            $invalidProperties[] = "'acwp' can't be null";
        }
        if ($this->container['bcws'] === null) {
            $invalidProperties[] = "'bcws' can't be null";
        }
        if ($this->container['bcwp'] === null) {
            $invalidProperties[] = "'bcwp' can't be null";
        }
        if ($this->container['leveling_delay_format'] === null) {
            $invalidProperties[] = "'leveling_delay_format' can't be null";
        }
        if ($this->container['ignore_warnings'] === null) {
            $invalidProperties[] = "'ignore_warnings' can't be null";
        }
        if ($this->container['is_expanded'] === null) {
            $invalidProperties[] = "'is_expanded' can't be null";
        }
        if ($this->container['display_on_timeline'] === null) {
            $invalidProperties[] = "'display_on_timeline' can't be null";
        }
        if ($this->container['display_as_summary'] === null) {
            $invalidProperties[] = "'display_as_summary' can't be null";
        }
        if ($this->container['earned_value_method'] === null) {
            $invalidProperties[] = "'earned_value_method' can't be null";
        }
        if ($this->container['is_published'] === null) {
            $invalidProperties[] = "'is_published' can't be null";
        }
        if ($this->container['commitment_start'] === null) {
            $invalidProperties[] = "'commitment_start' can't be null";
        }
        if ($this->container['commitment_finish'] === null) {
            $invalidProperties[] = "'commitment_finish' can't be null";
        }
        if ($this->container['commitment_type'] === null) {
            $invalidProperties[] = "'commitment_type' can't be null";
        }
        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['uid'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['duration'] === null) {
            return false;
        }
        if ($this->container['start'] === null) {
            return false;
        }
        if ($this->container['finish'] === null) {
            return false;
        }
        if ($this->container['percent_complete'] === null) {
            return false;
        }
        if ($this->container['percent_work_complete'] === null) {
            return false;
        }
        if ($this->container['is_active'] === null) {
            return false;
        }
        if ($this->container['actual_cost'] === null) {
            return false;
        }
        if ($this->container['actual_duration'] === null) {
            return false;
        }
        if ($this->container['actual_finish'] === null) {
            return false;
        }
        if ($this->container['actual_overtime_cost'] === null) {
            return false;
        }
        if ($this->container['actual_overtime_work'] === null) {
            return false;
        }
        if ($this->container['actual_work_protected'] === null) {
            return false;
        }
        if ($this->container['actual_overtime_work_protected'] === null) {
            return false;
        }
        if ($this->container['actual_start'] === null) {
            return false;
        }
        if ($this->container['budget_work'] === null) {
            return false;
        }
        if ($this->container['budget_cost'] === null) {
            return false;
        }
        if ($this->container['constraint_date'] === null) {
            return false;
        }
        if ($this->container['constraint_type'] === null) {
            return false;
        }
        if ($this->container['cost'] === null) {
            return false;
        }
        if ($this->container['cv'] === null) {
            return false;
        }
        if ($this->container['deadline'] === null) {
            return false;
        }
        if ($this->container['duration_variance'] === null) {
            return false;
        }
        if ($this->container['early_finish'] === null) {
            return false;
        }
        if ($this->container['early_start'] === null) {
            return false;
        }
        if ($this->container['is_effort_driven'] === null) {
            return false;
        }
        if ($this->container['is_external_task'] === null) {
            return false;
        }
        if ($this->container['external_id'] === null) {
            return false;
        }
        if ($this->container['finish_slack'] === null) {
            return false;
        }
        if ($this->container['finish_variance'] === null) {
            return false;
        }
        if ($this->container['fixed_cost'] === null) {
            return false;
        }
        if ($this->container['fixed_cost_accrual'] === null) {
            return false;
        }
        if ($this->container['free_slack'] === null) {
            return false;
        }
        if ($this->container['hide_bar'] === null) {
            return false;
        }
        if ($this->container['ignore_resource_calendar'] === null) {
            return false;
        }
        if ($this->container['late_finish'] === null) {
            return false;
        }
        if ($this->container['late_start'] === null) {
            return false;
        }
        if ($this->container['is_level_assignments'] === null) {
            return false;
        }
        if ($this->container['can_leveling_split'] === null) {
            return false;
        }
        if ($this->container['leveling_delay'] === null) {
            return false;
        }
        if ($this->container['is_marked'] === null) {
            return false;
        }
        if ($this->container['is_milestone'] === null) {
            return false;
        }
        if ($this->container['is_critical'] === null) {
            return false;
        }
        if ($this->container['is_subproject'] === null) {
            return false;
        }
        if ($this->container['is_subproject_read_only'] === null) {
            return false;
        }
        if ($this->container['is_summary'] === null) {
            return false;
        }
        if ($this->container['outline_level'] === null) {
            return false;
        }
        if ($this->container['is_over_allocated'] === null) {
            return false;
        }
        if ($this->container['is_estimated'] === null) {
            return false;
        }
        if ($this->container['overtime_cost'] === null) {
            return false;
        }
        if ($this->container['overtime_work'] === null) {
            return false;
        }
        if ($this->container['physical_percent_complete'] === null) {
            return false;
        }
        if ($this->container['pre_leveled_finish'] === null) {
            return false;
        }
        if ($this->container['pre_leveled_start'] === null) {
            return false;
        }
        if ($this->container['is_recurring'] === null) {
            return false;
        }
        if ($this->container['regular_work'] === null) {
            return false;
        }
        if ($this->container['remaining_cost'] === null) {
            return false;
        }
        if ($this->container['remaining_duration'] === null) {
            return false;
        }
        if ($this->container['remaining_overtime_cost'] === null) {
            return false;
        }
        if ($this->container['remaining_overtime_work'] === null) {
            return false;
        }
        if ($this->container['remaining_work'] === null) {
            return false;
        }
        if ($this->container['resume'] === null) {
            return false;
        }
        if ($this->container['stop'] === null) {
            return false;
        }
        if ($this->container['is_rollup'] === null) {
            return false;
        }
        if ($this->container['start_slack'] === null) {
            return false;
        }
        if ($this->container['start_variance'] === null) {
            return false;
        }
        if ($this->container['calendar_uid'] === null) {
            return false;
        }
        if ($this->container['is_manual'] === null) {
            return false;
        }
        if ($this->container['manual_start'] === null) {
            return false;
        }
        if ($this->container['manual_finish'] === null) {
            return false;
        }
        if ($this->container['manual_duration'] === null) {
            return false;
        }
        if ($this->container['total_slack'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['priority'] === null) {
            return false;
        }
        if ($this->container['work'] === null) {
            return false;
        }
        if ($this->container['work_variance'] === null) {
            return false;
        }
        if ($this->container['acwp'] === null) {
            return false;
        }
        if ($this->container['bcws'] === null) {
            return false;
        }
        if ($this->container['bcwp'] === null) {
            return false;
        }
        if ($this->container['leveling_delay_format'] === null) {
            return false;
        }
        if ($this->container['ignore_warnings'] === null) {
            return false;
        }
        if ($this->container['is_expanded'] === null) {
            return false;
        }
        if ($this->container['display_on_timeline'] === null) {
            return false;
        }
        if ($this->container['display_as_summary'] === null) {
            return false;
        }
        if ($this->container['earned_value_method'] === null) {
            return false;
        }
        if ($this->container['is_published'] === null) {
            return false;
        }
        if ($this->container['commitment_start'] === null) {
            return false;
        }
        if ($this->container['commitment_finish'] === null) {
            return false;
        }
        if ($this->container['commitment_type'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets uid
     *
     * @return int
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /*
     * Sets uid
     *
     * @param int $uid The unique id of a task.
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /*
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /*
     * Sets id
     *
     * @param int $id The position of a task in collection.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /*
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /*
     * Sets name
     *
     * @param string $name The name of a task.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /*
     * Gets duration_text
     *
     * @return string
     */
    public function getDurationText()
    {
        return $this->container['duration_text'];
    }

    /*
     * Sets duration_text
     *
     * @param string $duration_text The duration of a task entered by the user as a text.
     *
     * @return $this
     */
    public function setDurationText($duration_text)
    {
        $this->container['duration_text'] = $duration_text;

        return $this;
    }

    /*
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /*
     * Sets duration
     *
     * @param string $duration The duration of a task.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /*
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /*
     * Sets start
     *
     * @param \DateTime $start The start date of a task.
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /*
     * Gets finish
     *
     * @return \DateTime
     */
    public function getFinish()
    {
        return $this->container['finish'];
    }

    /*
     * Sets finish
     *
     * @param \DateTime $finish The finish date of a task.
     *
     * @return $this
     */
    public function setFinish($finish)
    {
        $this->container['finish'] = $finish;

        return $this;
    }

    /*
     * Gets start_text
     *
     * @return string
     */
    public function getStartText()
    {
        return $this->container['start_text'];
    }

    /*
     * Sets start_text
     *
     * @param string $start_text Returns the task's start text.
     *
     * @return $this
     */
    public function setStartText($start_text)
    {
        $this->container['start_text'] = $start_text;

        return $this;
    }

    /*
     * Gets finish_text
     *
     * @return string
     */
    public function getFinishText()
    {
        return $this->container['finish_text'];
    }

    /*
     * Sets finish_text
     *
     * @param string $finish_text Returns the task's finish text.
     *
     * @return $this
     */
    public function setFinishText($finish_text)
    {
        $this->container['finish_text'] = $finish_text;

        return $this;
    }

    /*
     * Gets percent_complete
     *
     * @return int
     */
    public function getPercentComplete()
    {
        return $this->container['percent_complete'];
    }

    /*
     * Sets percent_complete
     *
     * @param int $percent_complete The percent complete of a task.
     *
     * @return $this
     */
    public function setPercentComplete($percent_complete)
    {
        $this->container['percent_complete'] = $percent_complete;

        return $this;
    }

    /*
     * Gets percent_work_complete
     *
     * @return int
     */
    public function getPercentWorkComplete()
    {
        return $this->container['percent_work_complete'];
    }

    /*
     * Sets percent_work_complete
     *
     * @param int $percent_work_complete The percent work complete of a task.
     *
     * @return $this
     */
    public function setPercentWorkComplete($percent_work_complete)
    {
        $this->container['percent_work_complete'] = $percent_work_complete;

        return $this;
    }

    /*
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /*
     * Sets is_active
     *
     * @param bool $is_active Determines if a task is active.
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /*
     * Gets actual_cost
     *
     * @return float
     */
    public function getActualCost()
    {
        return $this->container['actual_cost'];
    }

    /*
     * Sets actual_cost
     *
     * @param float $actual_cost The actual cost of a task.
     *
     * @return $this
     */
    public function setActualCost($actual_cost)
    {
        $this->container['actual_cost'] = $actual_cost;

        return $this;
    }

    /*
     * Gets actual_duration
     *
     * @return string
     */
    public function getActualDuration()
    {
        return $this->container['actual_duration'];
    }

    /*
     * Sets actual_duration
     *
     * @param string $actual_duration The actual duration of a task.
     *
     * @return $this
     */
    public function setActualDuration($actual_duration)
    {
        $this->container['actual_duration'] = $actual_duration;

        return $this;
    }

    /*
     * Gets actual_finish
     *
     * @return \DateTime
     */
    public function getActualFinish()
    {
        return $this->container['actual_finish'];
    }

    /*
     * Sets actual_finish
     *
     * @param \DateTime $actual_finish The actual finish date of a task.
     *
     * @return $this
     */
    public function setActualFinish($actual_finish)
    {
        $this->container['actual_finish'] = $actual_finish;

        return $this;
    }

    /*
     * Gets actual_overtime_cost
     *
     * @return float
     */
    public function getActualOvertimeCost()
    {
        return $this->container['actual_overtime_cost'];
    }

    /*
     * Sets actual_overtime_cost
     *
     * @param float $actual_overtime_cost The actual overtime cost of a task.
     *
     * @return $this
     */
    public function setActualOvertimeCost($actual_overtime_cost)
    {
        $this->container['actual_overtime_cost'] = $actual_overtime_cost;

        return $this;
    }

    /*
     * Gets actual_overtime_work
     *
     * @return string
     */
    public function getActualOvertimeWork()
    {
        return $this->container['actual_overtime_work'];
    }

    /*
     * Sets actual_overtime_work
     *
     * @param string $actual_overtime_work The actual overtime work of a task.
     *
     * @return $this
     */
    public function setActualOvertimeWork($actual_overtime_work)
    {
        $this->container['actual_overtime_work'] = $actual_overtime_work;

        return $this;
    }

    /*
     * Gets actual_work_protected
     *
     * @return string
     */
    public function getActualWorkProtected()
    {
        return $this->container['actual_work_protected'];
    }

    /*
     * Sets actual_work_protected
     *
     * @param string $actual_work_protected The duration through which actual work is protected. Reading supported for XML format only.
     *
     * @return $this
     */
    public function setActualWorkProtected($actual_work_protected)
    {
        $this->container['actual_work_protected'] = $actual_work_protected;

        return $this;
    }

    /*
     * Gets actual_overtime_work_protected
     *
     * @return string
     */
    public function getActualOvertimeWorkProtected()
    {
        return $this->container['actual_overtime_work_protected'];
    }

    /*
     * Sets actual_overtime_work_protected
     *
     * @param string $actual_overtime_work_protected The duration through which actual overtime work is protected. Reading supported for XML format only.
     *
     * @return $this
     */
    public function setActualOvertimeWorkProtected($actual_overtime_work_protected)
    {
        $this->container['actual_overtime_work_protected'] = $actual_overtime_work_protected;

        return $this;
    }

    /*
     * Gets actual_start
     *
     * @return \DateTime
     */
    public function getActualStart()
    {
        return $this->container['actual_start'];
    }

    /*
     * Sets actual_start
     *
     * @param \DateTime $actual_start The actual start date of a task.
     *
     * @return $this
     */
    public function setActualStart($actual_start)
    {
        $this->container['actual_start'] = $actual_start;

        return $this;
    }

    /*
     * Gets budget_work
     *
     * @return string
     */
    public function getBudgetWork()
    {
        return $this->container['budget_work'];
    }

    /*
     * Sets budget_work
     *
     * @param string $budget_work The amount of budgeted work for a project root task.
     *
     * @return $this
     */
    public function setBudgetWork($budget_work)
    {
        $this->container['budget_work'] = $budget_work;

        return $this;
    }

    /*
     * Gets budget_cost
     *
     * @return float
     */
    public function getBudgetCost()
    {
        return $this->container['budget_cost'];
    }

    /*
     * Sets budget_cost
     *
     * @param float $budget_cost The amount of budgeted cost for a project root task.
     *
     * @return $this
     */
    public function setBudgetCost($budget_cost)
    {
        $this->container['budget_cost'] = $budget_cost;

        return $this;
    }

    /*
     * Gets constraint_date
     *
     * @return \DateTime
     */
    public function getConstraintDate()
    {
        return $this->container['constraint_date'];
    }

    /*
     * Sets constraint_date
     *
     * @param \DateTime $constraint_date Shows the specific date associated with certain constraint types,  such as Must Start On, Must Finish On, Start No Earlier Than, Start No Later Than, Finish No Earlier Than, and Finish No Later Than.
     *
     * @return $this
     */
    public function setConstraintDate($constraint_date)
    {
        $this->container['constraint_date'] = $constraint_date;

        return $this;
    }

    /*
     * Gets constraint_type
     *
     * @return \Aspose\Tasks\Model\ConstraintType
     */
    public function getConstraintType()
    {
        return $this->container['constraint_type'];
    }

    /*
     * Sets constraint_type
     *
     * @param \Aspose\Tasks\Model\ConstraintType $constraint_type Provides choices for the type of constraint that can be applied for scheduling a task.
     *
     * @return $this
     */
    public function setConstraintType($constraint_type)
    {
        $this->container['constraint_type'] = $constraint_type;

        return $this;
    }

    /*
     * Gets contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /*
     * Sets contact
     *
     * @param string $contact The contact person for a task.
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /*
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /*
     * Sets cost
     *
     * @param float $cost The projected or scheduled cost of a task.
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /*
     * Gets cv
     *
     * @return double
     */
    public function getCv()
    {
        return $this->container['cv'];
    }

    /*
     * Sets cv
     *
     * @param double $cv The difference between the baseline cost and total cost for a task.
     *
     * @return $this
     */
    public function setCv($cv)
    {
        $this->container['cv'] = $cv;

        return $this;
    }

    /*
     * Gets deadline
     *
     * @return \DateTime
     */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /*
     * Sets deadline
     *
     * @param \DateTime $deadline The deadline for a task to be completed.
     *
     * @return $this
     */
    public function setDeadline($deadline)
    {
        $this->container['deadline'] = $deadline;

        return $this;
    }

    /*
     * Gets duration_variance
     *
     * @return string
     */
    public function getDurationVariance()
    {
        return $this->container['duration_variance'];
    }

    /*
     * Sets duration_variance
     *
     * @param string $duration_variance Contains the difference between the total duration of a task and the baseline duration of a task.
     *
     * @return $this
     */
    public function setDurationVariance($duration_variance)
    {
        $this->container['duration_variance'] = $duration_variance;

        return $this;
    }

    /*
     * Gets early_finish
     *
     * @return \DateTime
     */
    public function getEarlyFinish()
    {
        return $this->container['early_finish'];
    }

    /*
     * Sets early_finish
     *
     * @param \DateTime $early_finish The early finish date of a task.
     *
     * @return $this
     */
    public function setEarlyFinish($early_finish)
    {
        $this->container['early_finish'] = $early_finish;

        return $this;
    }

    /*
     * Gets early_start
     *
     * @return \DateTime
     */
    public function getEarlyStart()
    {
        return $this->container['early_start'];
    }

    /*
     * Sets early_start
     *
     * @param \DateTime $early_start The early start date of a task.
     *
     * @return $this
     */
    public function setEarlyStart($early_start)
    {
        $this->container['early_start'] = $early_start;

        return $this;
    }

    /*
     * Gets is_effort_driven
     *
     * @return bool
     */
    public function getIsEffortDriven()
    {
        return $this->container['is_effort_driven'];
    }

    /*
     * Sets is_effort_driven
     *
     * @param bool $is_effort_driven Determines whether a task is effort-driven.
     *
     * @return $this
     */
    public function setIsEffortDriven($is_effort_driven)
    {
        $this->container['is_effort_driven'] = $is_effort_driven;

        return $this;
    }

    /*
     * Gets is_external_task
     *
     * @return bool
     */
    public function getIsExternalTask()
    {
        return $this->container['is_external_task'];
    }

    /*
     * Sets is_external_task
     *
     * @param bool $is_external_task Determines whether a task is external.
     *
     * @return $this
     */
    public function setIsExternalTask($is_external_task)
    {
        $this->container['is_external_task'] = $is_external_task;

        return $this;
    }

    /*
     * Gets external_task_project
     *
     * @return string
     */
    public function getExternalTaskProject()
    {
        return $this->container['external_task_project'];
    }

    /*
     * Sets external_task_project
     *
     * @param string $external_task_project The source location and task identifier of an external task.
     *
     * @return $this
     */
    public function setExternalTaskProject($external_task_project)
    {
        $this->container['external_task_project'] = $external_task_project;

        return $this;
    }

    /*
     * Gets external_id
     *
     * @return int
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /*
     * Sets external_id
     *
     * @param int $external_id If a task is an external task the property contains the task's external Id.  type.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /*
     * Gets finish_slack
     *
     * @return int
     */
    public function getFinishSlack()
    {
        return $this->container['finish_slack'];
    }

    /*
     * Sets finish_slack
     *
     * @param int $finish_slack Contains the duration between the Early Finish and Late Finish dates.
     *
     * @return $this
     */
    public function setFinishSlack($finish_slack)
    {
        $this->container['finish_slack'] = $finish_slack;

        return $this;
    }

    /*
     * Gets finish_variance
     *
     * @return int
     */
    public function getFinishVariance()
    {
        return $this->container['finish_variance'];
    }

    /*
     * Sets finish_variance
     *
     * @param int $finish_variance The variance of the task finish date from the baseline finish date as minutes.
     *
     * @return $this
     */
    public function setFinishVariance($finish_variance)
    {
        $this->container['finish_variance'] = $finish_variance;

        return $this;
    }

    /*
     * Gets fixed_cost
     *
     * @return double
     */
    public function getFixedCost()
    {
        return $this->container['fixed_cost'];
    }

    /*
     * Sets fixed_cost
     *
     * @param double $fixed_cost The fixed cost of a task.
     *
     * @return $this
     */
    public function setFixedCost($fixed_cost)
    {
        $this->container['fixed_cost'] = $fixed_cost;

        return $this;
    }

    /*
     * Gets fixed_cost_accrual
     *
     * @return \Aspose\Tasks\Model\CostAccrualType
     */
    public function getFixedCostAccrual()
    {
        return $this->container['fixed_cost_accrual'];
    }

    /*
     * Sets fixed_cost_accrual
     *
     * @param \Aspose\Tasks\Model\CostAccrualType $fixed_cost_accrual Determines how the fixed cost is accrued against a task.
     *
     * @return $this
     */
    public function setFixedCostAccrual($fixed_cost_accrual)
    {
        $this->container['fixed_cost_accrual'] = $fixed_cost_accrual;

        return $this;
    }

    /*
     * Gets free_slack
     *
     * @return int
     */
    public function getFreeSlack()
    {
        return $this->container['free_slack'];
    }

    /*
     * Sets free_slack
     *
     * @param int $free_slack The amount of a free slack.
     *
     * @return $this
     */
    public function setFreeSlack($free_slack)
    {
        $this->container['free_slack'] = $free_slack;

        return $this;
    }

    /*
     * Gets guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /*
     * Sets guid
     *
     * @param string $guid guid
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /*
     * Gets hide_bar
     *
     * @return bool
     */
    public function getHideBar()
    {
        return $this->container['hide_bar'];
    }

    /*
     * Sets hide_bar
     *
     * @param bool $hide_bar Determines whether the GANTT bar of a task is hidden when displayed in Microsoft Project.
     *
     * @return $this
     */
    public function setHideBar($hide_bar)
    {
        $this->container['hide_bar'] = $hide_bar;

        return $this;
    }

    /*
     * Gets ignore_resource_calendar
     *
     * @return bool
     */
    public function getIgnoreResourceCalendar()
    {
        return $this->container['ignore_resource_calendar'];
    }

    /*
     * Sets ignore_resource_calendar
     *
     * @param bool $ignore_resource_calendar Determines whether a task ignores the resource calendar.
     *
     * @return $this
     */
    public function setIgnoreResourceCalendar($ignore_resource_calendar)
    {
        $this->container['ignore_resource_calendar'] = $ignore_resource_calendar;

        return $this;
    }

    /*
     * Gets late_finish
     *
     * @return \DateTime
     */
    public function getLateFinish()
    {
        return $this->container['late_finish'];
    }

    /*
     * Sets late_finish
     *
     * @param \DateTime $late_finish The late finish date of a task.
     *
     * @return $this
     */
    public function setLateFinish($late_finish)
    {
        $this->container['late_finish'] = $late_finish;

        return $this;
    }

    /*
     * Gets late_start
     *
     * @return \DateTime
     */
    public function getLateStart()
    {
        return $this->container['late_start'];
    }

    /*
     * Sets late_start
     *
     * @param \DateTime $late_start The late start date of a task.
     *
     * @return $this
     */
    public function setLateStart($late_start)
    {
        $this->container['late_start'] = $late_start;

        return $this;
    }

    /*
     * Gets is_level_assignments
     *
     * @return bool
     */
    public function getIsLevelAssignments()
    {
        return $this->container['is_level_assignments'];
    }

    /*
     * Sets is_level_assignments
     *
     * @param bool $is_level_assignments is_level_assignments
     *
     * @return $this
     */
    public function setIsLevelAssignments($is_level_assignments)
    {
        $this->container['is_level_assignments'] = $is_level_assignments;

        return $this;
    }

    /*
     * Gets can_leveling_split
     *
     * @return bool
     */
    public function getCanLevelingSplit()
    {
        return $this->container['can_leveling_split'];
    }

    /*
     * Sets can_leveling_split
     *
     * @param bool $can_leveling_split can_leveling_split
     *
     * @return $this
     */
    public function setCanLevelingSplit($can_leveling_split)
    {
        $this->container['can_leveling_split'] = $can_leveling_split;

        return $this;
    }

    /*
     * Gets leveling_delay
     *
     * @return int
     */
    public function getLevelingDelay()
    {
        return $this->container['leveling_delay'];
    }

    /*
     * Sets leveling_delay
     *
     * @param int $leveling_delay The delay caused by leveling a task.
     *
     * @return $this
     */
    public function setLevelingDelay($leveling_delay)
    {
        $this->container['leveling_delay'] = $leveling_delay;

        return $this;
    }

    /*
     * Gets is_marked
     *
     * @return bool
     */
    public function getIsMarked()
    {
        return $this->container['is_marked'];
    }

    /*
     * Sets is_marked
     *
     * @param bool $is_marked Shows whether a task is marked for further action or identification of some kind.
     *
     * @return $this
     */
    public function setIsMarked($is_marked)
    {
        $this->container['is_marked'] = $is_marked;

        return $this;
    }

    /*
     * Gets is_milestone
     *
     * @return bool
     */
    public function getIsMilestone()
    {
        return $this->container['is_milestone'];
    }

    /*
     * Sets is_milestone
     *
     * @param bool $is_milestone Determines whether a task is a milestone.
     *
     * @return $this
     */
    public function setIsMilestone($is_milestone)
    {
        $this->container['is_milestone'] = $is_milestone;

        return $this;
    }

    /*
     * Gets is_critical
     *
     * @return bool
     */
    public function getIsCritical()
    {
        return $this->container['is_critical'];
    }

    /*
     * Sets is_critical
     *
     * @param bool $is_critical Determines whether a task is in the critical chain.
     *
     * @return $this
     */
    public function setIsCritical($is_critical)
    {
        $this->container['is_critical'] = $is_critical;

        return $this;
    }

    /*
     * Gets is_subproject
     *
     * @return bool
     */
    public function getIsSubproject()
    {
        return $this->container['is_subproject'];
    }

    /*
     * Sets is_subproject
     *
     * @param bool $is_subproject Determines whether a task is an inserted project.
     *
     * @return $this
     */
    public function setIsSubproject($is_subproject)
    {
        $this->container['is_subproject'] = $is_subproject;

        return $this;
    }

    /*
     * Gets is_subproject_read_only
     *
     * @return bool
     */
    public function getIsSubprojectReadOnly()
    {
        return $this->container['is_subproject_read_only'];
    }

    /*
     * Sets is_subproject_read_only
     *
     * @param bool $is_subproject_read_only Determines whether a subproject is read-only.
     *
     * @return $this
     */
    public function setIsSubprojectReadOnly($is_subproject_read_only)
    {
        $this->container['is_subproject_read_only'] = $is_subproject_read_only;

        return $this;
    }

    /*
     * Gets subproject_name
     *
     * @return string
     */
    public function getSubprojectName()
    {
        return $this->container['subproject_name'];
    }

    /*
     * Sets subproject_name
     *
     * @param string $subproject_name The source location of a subproject. Read/write String.
     *
     * @return $this
     */
    public function setSubprojectName($subproject_name)
    {
        $this->container['subproject_name'] = $subproject_name;

        return $this;
    }

    /*
     * Gets is_summary
     *
     * @return bool
     */
    public function getIsSummary()
    {
        return $this->container['is_summary'];
    }

    /*
     * Sets is_summary
     *
     * @param bool $is_summary Determines whether a task is a summary task.
     *
     * @return $this
     */
    public function setIsSummary($is_summary)
    {
        $this->container['is_summary'] = $is_summary;

        return $this;
    }

    /*
     * Gets subtasks_uids
     *
     * @return int[]
     */
    public function getSubtasksUids()
    {
        return $this->container['subtasks_uids'];
    }

    /*
     * Sets subtasks_uids
     *
     * @param int[] $subtasks_uids Unique ids of all subtasks.
     *
     * @return $this
     */
    public function setSubtasksUids($subtasks_uids)
    {
        $this->container['subtasks_uids'] = $subtasks_uids;

        return $this;
    }

    /*
     * Gets outline_level
     *
     * @return int
     */
    public function getOutlineLevel()
    {
        return $this->container['outline_level'];
    }

    /*
     * Sets outline_level
     *
     * @param int $outline_level The outline level of a task.
     *
     * @return $this
     */
    public function setOutlineLevel($outline_level)
    {
        $this->container['outline_level'] = $outline_level;

        return $this;
    }

    /*
     * Gets is_over_allocated
     *
     * @return bool
     */
    public function getIsOverAllocated()
    {
        return $this->container['is_over_allocated'];
    }

    /*
     * Sets is_over_allocated
     *
     * @param bool $is_over_allocated is_over_allocated
     *
     * @return $this
     */
    public function setIsOverAllocated($is_over_allocated)
    {
        $this->container['is_over_allocated'] = $is_over_allocated;

        return $this;
    }

    /*
     * Gets is_estimated
     *
     * @return bool
     */
    public function getIsEstimated()
    {
        return $this->container['is_estimated'];
    }

    /*
     * Sets is_estimated
     *
     * @param bool $is_estimated Determines whether a task is estimated.
     *
     * @return $this
     */
    public function setIsEstimated($is_estimated)
    {
        $this->container['is_estimated'] = $is_estimated;

        return $this;
    }

    /*
     * Gets overtime_cost
     *
     * @return float
     */
    public function getOvertimeCost()
    {
        return $this->container['overtime_cost'];
    }

    /*
     * Sets overtime_cost
     *
     * @param float $overtime_cost The sum of an actual and remaining overtime cost of a task.
     *
     * @return $this
     */
    public function setOvertimeCost($overtime_cost)
    {
        $this->container['overtime_cost'] = $overtime_cost;

        return $this;
    }

    /*
     * Gets overtime_work
     *
     * @return string
     */
    public function getOvertimeWork()
    {
        return $this->container['overtime_work'];
    }

    /*
     * Sets overtime_work
     *
     * @param string $overtime_work The amount of an overtime work scheduled for a task.
     *
     * @return $this
     */
    public function setOvertimeWork($overtime_work)
    {
        $this->container['overtime_work'] = $overtime_work;

        return $this;
    }

    /*
     * Gets physical_percent_complete
     *
     * @return int
     */
    public function getPhysicalPercentComplete()
    {
        return $this->container['physical_percent_complete'];
    }

    /*
     * Sets physical_percent_complete
     *
     * @param int $physical_percent_complete The percentage complete value entered by the Project Manager.
     *
     * @return $this
     */
    public function setPhysicalPercentComplete($physical_percent_complete)
    {
        $this->container['physical_percent_complete'] = $physical_percent_complete;

        return $this;
    }

    /*
     * Gets pre_leveled_finish
     *
     * @return \DateTime
     */
    public function getPreLeveledFinish()
    {
        return $this->container['pre_leveled_finish'];
    }

    /*
     * Sets pre_leveled_finish
     *
     * @param \DateTime $pre_leveled_finish pre_leveled_finish
     *
     * @return $this
     */
    public function setPreLeveledFinish($pre_leveled_finish)
    {
        $this->container['pre_leveled_finish'] = $pre_leveled_finish;

        return $this;
    }

    /*
     * Gets pre_leveled_start
     *
     * @return \DateTime
     */
    public function getPreLeveledStart()
    {
        return $this->container['pre_leveled_start'];
    }

    /*
     * Sets pre_leveled_start
     *
     * @param \DateTime $pre_leveled_start pre_leveled_start
     *
     * @return $this
     */
    public function setPreLeveledStart($pre_leveled_start)
    {
        $this->container['pre_leveled_start'] = $pre_leveled_start;

        return $this;
    }

    /*
     * Gets is_recurring
     *
     * @return bool
     */
    public function getIsRecurring()
    {
        return $this->container['is_recurring'];
    }

    /*
     * Sets is_recurring
     *
     * @param bool $is_recurring Determines whether a task is a recurring task.
     *
     * @return $this
     */
    public function setIsRecurring($is_recurring)
    {
        $this->container['is_recurring'] = $is_recurring;

        return $this;
    }

    /*
     * Gets regular_work
     *
     * @return string
     */
    public function getRegularWork()
    {
        return $this->container['regular_work'];
    }

    /*
     * Sets regular_work
     *
     * @param string $regular_work The amount of non-overtime work scheduled for a task.
     *
     * @return $this
     */
    public function setRegularWork($regular_work)
    {
        $this->container['regular_work'] = $regular_work;

        return $this;
    }

    /*
     * Gets remaining_cost
     *
     * @return float
     */
    public function getRemainingCost()
    {
        return $this->container['remaining_cost'];
    }

    /*
     * Sets remaining_cost
     *
     * @param float $remaining_cost The remaining projected cost of completing a task.
     *
     * @return $this
     */
    public function setRemainingCost($remaining_cost)
    {
        $this->container['remaining_cost'] = $remaining_cost;

        return $this;
    }

    /*
     * Gets remaining_duration
     *
     * @return string
     */
    public function getRemainingDuration()
    {
        return $this->container['remaining_duration'];
    }

    /*
     * Sets remaining_duration
     *
     * @param string $remaining_duration The amount of time required to complete the unfinished portion of a task.
     *
     * @return $this
     */
    public function setRemainingDuration($remaining_duration)
    {
        $this->container['remaining_duration'] = $remaining_duration;

        return $this;
    }

    /*
     * Gets remaining_overtime_cost
     *
     * @return float
     */
    public function getRemainingOvertimeCost()
    {
        return $this->container['remaining_overtime_cost'];
    }

    /*
     * Sets remaining_overtime_cost
     *
     * @param float $remaining_overtime_cost The remaining overtime cost projected to finish a task.
     *
     * @return $this
     */
    public function setRemainingOvertimeCost($remaining_overtime_cost)
    {
        $this->container['remaining_overtime_cost'] = $remaining_overtime_cost;

        return $this;
    }

    /*
     * Gets remaining_overtime_work
     *
     * @return string
     */
    public function getRemainingOvertimeWork()
    {
        return $this->container['remaining_overtime_work'];
    }

    /*
     * Sets remaining_overtime_work
     *
     * @param string $remaining_overtime_work The remaining overtime work scheduled to finish a task.
     *
     * @return $this
     */
    public function setRemainingOvertimeWork($remaining_overtime_work)
    {
        $this->container['remaining_overtime_work'] = $remaining_overtime_work;

        return $this;
    }

    /*
     * Gets remaining_work
     *
     * @return string
     */
    public function getRemainingWork()
    {
        return $this->container['remaining_work'];
    }

    /*
     * Sets remaining_work
     *
     * @param string $remaining_work The remaining work scheduled to complete a task.
     *
     * @return $this
     */
    public function setRemainingWork($remaining_work)
    {
        $this->container['remaining_work'] = $remaining_work;

        return $this;
    }

    /*
     * Gets resume
     *
     * @return \DateTime
     */
    public function getResume()
    {
        return $this->container['resume'];
    }

    /*
     * Sets resume
     *
     * @param \DateTime $resume The date when a task resumed.
     *
     * @return $this
     */
    public function setResume($resume)
    {
        $this->container['resume'] = $resume;

        return $this;
    }

    /*
     * Gets is_resume_valid
     *
     * @return bool
     */
    public function getIsResumeValid()
    {
        return $this->container['is_resume_valid'];
    }

    /*
     * Sets is_resume_valid
     *
     * @param bool $is_resume_valid Determines whether a task can be resumed.
     *
     * @return $this
     */
    public function setIsResumeValid($is_resume_valid)
    {
        $this->container['is_resume_valid'] = $is_resume_valid;

        return $this;
    }

    /*
     * Gets stop
     *
     * @return \DateTime
     */
    public function getStop()
    {
        return $this->container['stop'];
    }

    /*
     * Sets stop
     *
     * @param \DateTime $stop The date that represents the end of the actual portion of a task.
     *
     * @return $this
     */
    public function setStop($stop)
    {
        $this->container['stop'] = $stop;

        return $this;
    }

    /*
     * Gets is_rollup
     *
     * @return bool
     */
    public function getIsRollup()
    {
        return $this->container['is_rollup'];
    }

    /*
     * Sets is_rollup
     *
     * @param bool $is_rollup Determines whether a task is rolled up.
     *
     * @return $this
     */
    public function setIsRollup($is_rollup)
    {
        $this->container['is_rollup'] = $is_rollup;

        return $this;
    }

    /*
     * Gets start_slack
     *
     * @return int
     */
    public function getStartSlack()
    {
        return $this->container['start_slack'];
    }

    /*
     * Sets start_slack
     *
     * @param int $start_slack Returns the task's start slack.
     *
     * @return $this
     */
    public function setStartSlack($start_slack)
    {
        $this->container['start_slack'] = $start_slack;

        return $this;
    }

    /*
     * Gets start_variance
     *
     * @return int
     */
    public function getStartVariance()
    {
        return $this->container['start_variance'];
    }

    /*
     * Sets start_variance
     *
     * @param int $start_variance The variance of the task start date from the baseline start date as minutes.
     *
     * @return $this
     */
    public function setStartVariance($start_variance)
    {
        $this->container['start_variance'] = $start_variance;

        return $this;
    }

    /*
     * Gets calendar_uid
     *
     * @return int
     */
    public function getCalendarUid()
    {
        return $this->container['calendar_uid'];
    }

    /*
     * Sets calendar_uid
     *
     * @param int $calendar_uid The unique id of task calendar.
     *
     * @return $this
     */
    public function setCalendarUid($calendar_uid)
    {
        $this->container['calendar_uid'] = $calendar_uid;

        return $this;
    }

    /*
     * Gets is_manual
     *
     * @return bool
     */
    public function getIsManual()
    {
        return $this->container['is_manual'];
    }

    /*
     * Sets is_manual
     *
     * @param bool $is_manual Determines whether a task is manually scheduled.
     *
     * @return $this
     */
    public function setIsManual($is_manual)
    {
        $this->container['is_manual'] = $is_manual;

        return $this;
    }

    /*
     * Gets manual_start
     *
     * @return \DateTime
     */
    public function getManualStart()
    {
        return $this->container['manual_start'];
    }

    /*
     * Sets manual_start
     *
     * @param \DateTime $manual_start Defines manually scheduled start of a task.
     *
     * @return $this
     */
    public function setManualStart($manual_start)
    {
        $this->container['manual_start'] = $manual_start;

        return $this;
    }

    /*
     * Gets manual_finish
     *
     * @return \DateTime
     */
    public function getManualFinish()
    {
        return $this->container['manual_finish'];
    }

    /*
     * Sets manual_finish
     *
     * @param \DateTime $manual_finish Defines manually scheduled finish of a task.
     *
     * @return $this
     */
    public function setManualFinish($manual_finish)
    {
        $this->container['manual_finish'] = $manual_finish;

        return $this;
    }

    /*
     * Gets manual_duration
     *
     * @return string
     */
    public function getManualDuration()
    {
        return $this->container['manual_duration'];
    }

    /*
     * Sets manual_duration
     *
     * @param string $manual_duration Defines manually scheduled duration of a task.
     *
     * @return $this
     */
    public function setManualDuration($manual_duration)
    {
        $this->container['manual_duration'] = $manual_duration;

        return $this;
    }

    /*
     * Gets total_slack
     *
     * @return int
     */
    public function getTotalSlack()
    {
        return $this->container['total_slack'];
    }

    /*
     * Sets total_slack
     *
     * @param int $total_slack The amount of a total slack.
     *
     * @return $this
     */
    public function setTotalSlack($total_slack)
    {
        $this->container['total_slack'] = $total_slack;

        return $this;
    }

    /*
     * Gets type
     *
     * @return \Aspose\Tasks\Model\TaskType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /*
     * Sets type
     *
     * @param \Aspose\Tasks\Model\TaskType $type The type of a task.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /*
     * Gets wbs
     *
     * @return string
     */
    public function getWbs()
    {
        return $this->container['wbs'];
    }

    /*
     * Sets wbs
     *
     * @param string $wbs The work breakdown structure code of a task.
     *
     * @return $this
     */
    public function setWbs($wbs)
    {
        $this->container['wbs'] = $wbs;

        return $this;
    }

    /*
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /*
     * Sets priority
     *
     * @param int $priority The priority of a task from 0 to 1000.
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /*
     * Gets work
     *
     * @return string
     */
    public function getWork()
    {
        return $this->container['work'];
    }

    /*
     * Sets work
     *
     * @param string $work The amount of the scheduled work for a task.
     *
     * @return $this
     */
    public function setWork($work)
    {
        $this->container['work'] = $work;

        return $this;
    }

    /*
     * Gets work_variance
     *
     * @return double
     */
    public function getWorkVariance()
    {
        return $this->container['work_variance'];
    }

    /*
     * Sets work_variance
     *
     * @param double $work_variance The variance of the task work from the baseline task work as minutes.
     *
     * @return $this
     */
    public function setWorkVariance($work_variance)
    {
        $this->container['work_variance'] = $work_variance;

        return $this;
    }

    /*
     * Gets notes_text
     *
     * @return string
     */
    public function getNotesText()
    {
        return $this->container['notes_text'];
    }

    /*
     * Sets notes_text
     *
     * @param string $notes_text Notes' plain text extracted from RTF data.
     *
     * @return $this
     */
    public function setNotesText($notes_text)
    {
        $this->container['notes_text'] = $notes_text;

        return $this;
    }

    /*
     * Gets notes_rtf
     *
     * @return string
     */
    public function getNotesRtf()
    {
        return $this->container['notes_rtf'];
    }

    /*
     * Sets notes_rtf
     *
     * @param string $notes_rtf The text notes in RTF format.
     *
     * @return $this
     */
    public function setNotesRtf($notes_rtf)
    {
        $this->container['notes_rtf'] = $notes_rtf;

        return $this;
    }

    /*
     * Gets acwp
     *
     * @return double
     */
    public function getAcwp()
    {
        return $this->container['acwp'];
    }

    /*
     * Sets acwp
     *
     * @param double $acwp acwp
     *
     * @return $this
     */
    public function setAcwp($acwp)
    {
        $this->container['acwp'] = $acwp;

        return $this;
    }

    /*
     * Gets bcws
     *
     * @return double
     */
    public function getBcws()
    {
        return $this->container['bcws'];
    }

    /*
     * Sets bcws
     *
     * @param double $bcws bcws
     *
     * @return $this
     */
    public function setBcws($bcws)
    {
        $this->container['bcws'] = $bcws;

        return $this;
    }

    /*
     * Gets bcwp
     *
     * @return double
     */
    public function getBcwp()
    {
        return $this->container['bcwp'];
    }

    /*
     * Sets bcwp
     *
     * @param double $bcwp bcwp
     *
     * @return $this
     */
    public function setBcwp($bcwp)
    {
        $this->container['bcwp'] = $bcwp;

        return $this;
    }

    /*
     * Gets leveling_delay_format
     *
     * @return \Aspose\Tasks\Model\TimeUnitType
     */
    public function getLevelingDelayFormat()
    {
        return $this->container['leveling_delay_format'];
    }

    /*
     * Sets leveling_delay_format
     *
     * @param \Aspose\Tasks\Model\TimeUnitType $leveling_delay_format LevelingDelayFormat
     *
     * @return $this
     */
    public function setLevelingDelayFormat($leveling_delay_format)
    {
        $this->container['leveling_delay_format'] = $leveling_delay_format;

        return $this;
    }

    /*
     * Gets predecessors
     *
     * @return string
     */
    public function getPredecessors()
    {
        return $this->container['predecessors'];
    }

    /*
     * Sets predecessors
     *
     * @param string $predecessors The task Uid numbers for the predecessor tasks on which the task depends before it can be started or finished.
     *
     * @return $this
     */
    public function setPredecessors($predecessors)
    {
        $this->container['predecessors'] = $predecessors;

        return $this;
    }

    /*
     * Gets successors
     *
     * @return string
     */
    public function getSuccessors()
    {
        return $this->container['successors'];
    }

    /*
     * Sets successors
     *
     * @param string $successors The task Uid numbers for the successor tasks to a task.
     *
     * @return $this
     */
    public function setSuccessors($successors)
    {
        $this->container['successors'] = $successors;

        return $this;
    }

    /*
     * Gets ignore_warnings
     *
     * @return bool
     */
    public function getIgnoreWarnings()
    {
        return $this->container['ignore_warnings'];
    }

    /*
     * Sets ignore_warnings
     *
     * @param bool $ignore_warnings Indicates whether to hide the schedule conflict warning indicator in Microsoft Project.
     *
     * @return $this
     */
    public function setIgnoreWarnings($ignore_warnings)
    {
        $this->container['ignore_warnings'] = $ignore_warnings;

        return $this;
    }

    /*
     * Gets is_expanded
     *
     * @return bool
     */
    public function getIsExpanded()
    {
        return $this->container['is_expanded'];
    }

    /*
     * Sets is_expanded
     *
     * @param bool $is_expanded Determines whether a summary task is expanded or not in GanttChart view.
     *
     * @return $this
     */
    public function setIsExpanded($is_expanded)
    {
        $this->container['is_expanded'] = $is_expanded;

        return $this;
    }

    /*
     * Gets display_on_timeline
     *
     * @return bool
     */
    public function getDisplayOnTimeline()
    {
        return $this->container['display_on_timeline'];
    }

    /*
     * Sets display_on_timeline
     *
     * @param bool $display_on_timeline Specifies whether a task should be displayed on a timeline view.
     *
     * @return $this
     */
    public function setDisplayOnTimeline($display_on_timeline)
    {
        $this->container['display_on_timeline'] = $display_on_timeline;

        return $this;
    }

    /*
     * Gets display_as_summary
     *
     * @return bool
     */
    public function getDisplayAsSummary()
    {
        return $this->container['display_as_summary'];
    }

    /*
     * Sets display_as_summary
     *
     * @param bool $display_as_summary Determines whether the task should be displayed as a summary task. Reading supported for XML format only.
     *
     * @return $this
     */
    public function setDisplayAsSummary($display_as_summary)
    {
        $this->container['display_as_summary'] = $display_as_summary;

        return $this;
    }

    /*
     * Gets hyperlink
     *
     * @return string
     */
    public function getHyperlink()
    {
        return $this->container['hyperlink'];
    }

    /*
     * Sets hyperlink
     *
     * @param string $hyperlink The title or explanatory text for a hyperlink associated with a task.
     *
     * @return $this
     */
    public function setHyperlink($hyperlink)
    {
        $this->container['hyperlink'] = $hyperlink;

        return $this;
    }

    /*
     * Gets hyperlink_address
     *
     * @return string
     */
    public function getHyperlinkAddress()
    {
        return $this->container['hyperlink_address'];
    }

    /*
     * Sets hyperlink_address
     *
     * @param string $hyperlink_address The address for a hyperlink associated with a task.
     *
     * @return $this
     */
    public function setHyperlinkAddress($hyperlink_address)
    {
        $this->container['hyperlink_address'] = $hyperlink_address;

        return $this;
    }

    /*
     * Gets hyperlink_sub_address
     *
     * @return string
     */
    public function getHyperlinkSubAddress()
    {
        return $this->container['hyperlink_sub_address'];
    }

    /*
     * Sets hyperlink_sub_address
     *
     * @param string $hyperlink_sub_address The specific location in a document in a hyperlink associated with a task.  type.
     *
     * @return $this
     */
    public function setHyperlinkSubAddress($hyperlink_sub_address)
    {
        $this->container['hyperlink_sub_address'] = $hyperlink_sub_address;

        return $this;
    }

    /*
     * Gets earned_value_method
     *
     * @return \Aspose\Tasks\Model\EarnedValueMethodType
     */
    public function getEarnedValueMethod()
    {
        return $this->container['earned_value_method'];
    }

    /*
     * Sets earned_value_method
     *
     * @param \Aspose\Tasks\Model\EarnedValueMethodType $earned_value_method Determines whether the % Complete or Physical % Complete field should be used to calculate budgeted cost of work performed (BCWP).
     *
     * @return $this
     */
    public function setEarnedValueMethod($earned_value_method)
    {
        $this->container['earned_value_method'] = $earned_value_method;

        return $this;
    }

    /*
     * Gets is_published
     *
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->container['is_published'];
    }

    /*
     * Sets is_published
     *
     * @param bool $is_published Determines whether the current task should be published to Project Server with the rest of the project.
     *
     * @return $this
     */
    public function setIsPublished($is_published)
    {
        $this->container['is_published'] = $is_published;

        return $this;
    }

    /*
     * Gets status_manager
     *
     * @return string
     */
    public function getStatusManager()
    {
        return $this->container['status_manager'];
    }

    /*
     * Sets status_manager
     *
     * @param string $status_manager The name of the enterprise resource who is to receive status updates for the current task from resources.
     *
     * @return $this
     */
    public function setStatusManager($status_manager)
    {
        $this->container['status_manager'] = $status_manager;

        return $this;
    }

    /*
     * Gets commitment_start
     *
     * @return \DateTime
     */
    public function getCommitmentStart()
    {
        return $this->container['commitment_start'];
    }

    /*
     * Sets commitment_start
     *
     * @param \DateTime $commitment_start The start date of a delivery. Reading supported for XML format only.
     *
     * @return $this
     */
    public function setCommitmentStart($commitment_start)
    {
        $this->container['commitment_start'] = $commitment_start;

        return $this;
    }

    /*
     * Gets commitment_finish
     *
     * @return \DateTime
     */
    public function getCommitmentFinish()
    {
        return $this->container['commitment_finish'];
    }

    /*
     * Sets commitment_finish
     *
     * @param \DateTime $commitment_finish The finish date of a delivery. Reading supported for XML format only.
     *
     * @return $this
     */
    public function setCommitmentFinish($commitment_finish)
    {
        $this->container['commitment_finish'] = $commitment_finish;

        return $this;
    }

    /*
     * Gets commitment_type
     *
     * @return int
     */
    public function getCommitmentType()
    {
        return $this->container['commitment_type'];
    }

    /*
     * Sets commitment_type
     *
     * @param int $commitment_type Determines whether a task has an associated delivery or a dependency on an associated delivery. Reading supported for XML format only.
     *
     * @return $this
     */
    public function setCommitmentType($commitment_type)
    {
        $this->container['commitment_type'] = $commitment_type;

        return $this;
    }

    /*
     * Gets baselines
     *
     * @return \Aspose\Tasks\Model\TaskBaseline[]
     */
    public function getBaselines()
    {
        return $this->container['baselines'];
    }

    /*
     * Sets baselines
     *
     * @param \Aspose\Tasks\Model\TaskBaseline[] $baselines Gets or sets the collection of baseline values of the task.
     *
     * @return $this
     */
    public function setBaselines($baselines)
    {
        $this->container['baselines'] = $baselines;

        return $this;
    }

    /*
     * Gets extended_attributes
     *
     * @return \Aspose\Tasks\Model\ExtendedAttribute[]
     */
    public function getExtendedAttributes()
    {
        return $this->container['extended_attributes'];
    }

    /*
     * Sets extended_attributes
     *
     * @param \Aspose\Tasks\Model\ExtendedAttribute[] $extended_attributes Task extended attributes.
     *
     * @return $this
     */
    public function setExtendedAttributes($extended_attributes)
    {
        $this->container['extended_attributes'] = $extended_attributes;

        return $this;
    }

    /*
     * Gets outline_codes
     *
     * @return \Aspose\Tasks\Model\OutlineCode[]
     */
    public function getOutlineCodes()
    {
        return $this->container['outline_codes'];
    }

    /*
     * Sets outline_codes
     *
     * @param \Aspose\Tasks\Model\OutlineCode[] $outline_codes Task outline codes.
     *
     * @return $this
     */
    public function setOutlineCodes($outline_codes)
    {
        $this->container['outline_codes'] = $outline_codes;

        return $this;
    }

    /*
     * Gets warning
     *
     * @return bool
     */
    public function getWarning()
    {
        return $this->container['warning'];
    }

    /*
     * Sets warning
     *
     * @param bool $warning Represents the flag which indicates that task has schedule discrepancies.
     *
     * @return $this
     */
    public function setWarning($warning)
    {
        $this->container['warning'] = $warning;

        return $this;
    }
    /*
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /*
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /*
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /*
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /*
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


