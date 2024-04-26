<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Field.php">
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
 * Field
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * Field
 *
 * @description Specifies a field in the Microsoft Office Project.
 */
class Field
{
    /*
     * Possible values of this enum
     */
    const UNDEFINED = 'Undefined';
    const TASK_WORK = 'TaskWork';
    const TASK_BASELINE_WORK = 'TaskBaselineWork';
    const TASK_ACTUAL_WORK = 'TaskActualWork';
    const TASK_WORK_VARIANCE = 'TaskWorkVariance';
    const TASK_REMAINING_WORK = 'TaskRemainingWork';
    const TASK_COST = 'TaskCost';
    const TASK_BASELINE_COST = 'TaskBaselineCost';
    const TASK_ACTUAL_COST = 'TaskActualCost';
    const TASK_FIXED_COST = 'TaskFixedCost';
    const TASK_COST_VARIANCE = 'TaskCostVariance';
    const TASK_REMAINING_COST = 'TaskRemainingCost';
    const TASK_BCWP = 'TaskBCWP';
    const TASK_BCWS = 'TaskBCWS';
    const TASK_SV = 'TaskSV';
    const TASK_NAME = 'TaskName';
    const TASK_NOTES = 'TaskNotes';
    const TASK_WBS = 'TaskWBS';
    const TASK_CONSTRAINT_TYPE = 'TaskConstraintType';
    const TASK_CONSTRAINT_DATE = 'TaskConstraintDate';
    const TASK_CRITICAL = 'TaskCritical';
    const TASK_LEVEL_DELAY = 'TaskLevelDelay';
    const TASK_FREE_SLACK = 'TaskFreeSlack';
    const TASK_TOTAL_SLACK = 'TaskTotalSlack';
    const TASK_ID = 'TaskID';
    const TASK_MILESTONE = 'TaskMilestone';
    const TASK_PRIORITY = 'TaskPriority';
    const TASK_SUBPROJECT = 'TaskSubproject';
    const TASK_BASELINE_DURATION = 'TaskBaselineDuration';
    const TASK_ACTUAL_DURATION = 'TaskActualDuration';
    const TASK_DURATION = 'TaskDuration';
    const TASK_DURATION_VARIANCE = 'TaskDurationVariance';
    const TASK_REMAINING_DURATION = 'TaskRemainingDuration';
    const TASK_PERCENT_COMPLETE = 'TaskPercentComplete';
    const TASK_PERCENT_WORK_COMPLETE = 'TaskPercentWorkComplete';
    const TASK_FIXED_DURATION = 'TaskFixedDuration';
    const TASK_START = 'TaskStart';
    const TASK_FINISH = 'TaskFinish';
    const TASK_EARLY_START = 'TaskEarlyStart';
    const TASK_EARLY_FINISH = 'TaskEarlyFinish';
    const TASK_LATE_START = 'TaskLateStart';
    const TASK_LATE_FINISH = 'TaskLateFinish';
    const TASK_ACTUAL_START = 'TaskActualStart';
    const TASK_ACTUAL_FINISH = 'TaskActualFinish';
    const TASK_BASELINE_START = 'TaskBaselineStart';
    const TASK_BASELINE_FINISH = 'TaskBaselineFinish';
    const TASK_START_VARIANCE = 'TaskStartVariance';
    const TASK_FINISH_VARIANCE = 'TaskFinishVariance';
    const TASK_PREDECESSORS = 'TaskPredecessors';
    const TASK_SUCCESSORS = 'TaskSuccessors';
    const TASK_RESOURCE_NAMES = 'TaskResourceNames';
    const TASK_RESOURCE_INITIALS = 'TaskResourceInitials';
    const TASK_TEXT1 = 'TaskText1';
    const TASK_START1 = 'TaskStart1';
    const TASK_FINISH1 = 'TaskFinish1';
    const TASK_TEXT2 = 'TaskText2';
    const TASK_START2 = 'TaskStart2';
    const TASK_FINISH2 = 'TaskFinish2';
    const TASK_TEXT3 = 'TaskText3';
    const TASK_START3 = 'TaskStart3';
    const TASK_FINISH3 = 'TaskFinish3';
    const TASK_TEXT4 = 'TaskText4';
    const TASK_START4 = 'TaskStart4';
    const TASK_FINISH4 = 'TaskFinish4';
    const TASK_TEXT5 = 'TaskText5';
    const TASK_START5 = 'TaskStart5';
    const TASK_FINISH5 = 'TaskFinish5';
    const TASK_TEXT6 = 'TaskText6';
    const TASK_TEXT7 = 'TaskText7';
    const TASK_TEXT8 = 'TaskText8';
    const TASK_TEXT9 = 'TaskText9';
    const TASK_TEXT10 = 'TaskText10';
    const TASK_MARKED = 'TaskMarked';
    const TASK_FLAG1 = 'TaskFlag1';
    const TASK_FLAG2 = 'TaskFlag2';
    const TASK_FLAG3 = 'TaskFlag3';
    const TASK_FLAG4 = 'TaskFlag4';
    const TASK_FLAG5 = 'TaskFlag5';
    const TASK_FLAG6 = 'TaskFlag6';
    const TASK_FLAG7 = 'TaskFlag7';
    const TASK_FLAG8 = 'TaskFlag8';
    const TASK_FLAG9 = 'TaskFlag9';
    const TASK_FLAG10 = 'TaskFlag10';
    const TASK_ROLLUP = 'TaskRollup';
    const TASK_CV = 'TaskCV';
    const TASK_PROJECT = 'TaskProject';
    const TASK_OUTLINE_LEVEL = 'TaskOutlineLevel';
    const TASK_UNIQUE_ID = 'TaskUniqueID';
    const TASK_NUMBER1 = 'TaskNumber1';
    const TASK_NUMBER2 = 'TaskNumber2';
    const TASK_NUMBER3 = 'TaskNumber3';
    const TASK_NUMBER4 = 'TaskNumber4';
    const TASK_NUMBER5 = 'TaskNumber5';
    const TASK_SUMMARY = 'TaskSummary';
    const TASK_CREATED = 'TaskCreated';
    const TASK_SHEET_NOTES = 'TaskSheetNotes';
    const TASK_UNIQUE_PREDECESSORS = 'TaskUniquePredecessors';
    const TASK_UNIQUE_SUCCESSORS = 'TaskUniqueSuccessors';
    const TASK_OBJECTS = 'TaskObjects';
    const TASK_LINKED_FIELDS = 'TaskLinkedFields';
    const TASK_RESUME = 'TaskResume';
    const TASK_STOP = 'TaskStop';
    const TASK_RESUME_NO_EARLIER_THAN = 'TaskResumeNoEarlierThan';
    const TASK_OUTLINE_NUMBER = 'TaskOutlineNumber';
    const TASK_DURATION1 = 'TaskDuration1';
    const TASK_DURATION2 = 'TaskDuration2';
    const TASK_DURATION3 = 'TaskDuration3';
    const TASK_COST1 = 'TaskCost1';
    const TASK_COST2 = 'TaskCost2';
    const TASK_COST3 = 'TaskCost3';
    const TASK_HIDE_BAR = 'TaskHideBar';
    const TASK_CONFIRMED = 'TaskConfirmed';
    const TASK_UPDATE_NEEDED = 'TaskUpdateNeeded';
    const TASK_CONTACT = 'TaskContact';
    const TASK_RESOURCE_GROUP = 'TaskResourceGroup';
    const TASK_COMPLETE_THROUGH = 'TaskCompleteThrough';
    const TASK_ACWP = 'TaskACWP';
    const TASK_TYPE = 'TaskType';
    const TASK_RECURRING = 'TaskRecurring';
    const TASK_EFFORT_DRIVEN = 'TaskEffortDriven';
    const TASK_PARENT_TASK = 'TaskParentTask';
    const TASK_OVERTIME_WORK = 'TaskOvertimeWork';
    const TASK_ACTUAL_OVERTIME_WORK = 'TaskActualOvertimeWork';
    const TASK_REMAINING_OVERTIME_WORK = 'TaskRemainingOvertimeWork';
    const TASK_REGULAR_WORK = 'TaskRegularWork';
    const TASK_OVERTIME_COST = 'TaskOvertimeCost';
    const TASK_ACTUAL_OVERTIME_COST = 'TaskActualOvertimeCost';
    const TASK_REMAINING_OVERTIME_COST = 'TaskRemainingOvertimeCost';
    const TASK_FIXED_COST_ACCRUAL = 'TaskFixedCostAccrual';
    const TASK_INDICATORS = 'TaskIndicators';
    const TASK_HYPERLINK_ID = 'TaskHyperlinkId';
    const TASK_HYPERLINK = 'TaskHyperlink';
    const TASK_HYPERLINK_ADDRESS = 'TaskHyperlinkAddress';
    const TASK_HYPERLINK_SUB_ADDRESS = 'TaskHyperlinkSubAddress';
    const TASK_HYPERLINK_HREF = 'TaskHyperlinkHref';
    const TASK_IS_ASSIGNMENT = 'TaskIsAssignment';
    const TASK_OVERALLOCATED = 'TaskOverallocated';
    const TASK_EXTERNAL_TASK = 'TaskExternalTask';
    const TASK_SUBPROJECT_READ_ONLY = 'TaskSubprojectReadOnly';
    const TASK_RESPONSE_PENDING = 'TaskResponsePending';
    const TASK_TEAM_STATUS_PENDING = 'TaskTeamStatusPending';
    const TASK_LEVEL_CAN_SPLIT = 'TaskLevelCanSplit';
    const TASK_LEVEL_ASSIGNMENTS = 'TaskLevelAssignments';
    const TASK_WORK_CONTOUR = 'TaskWorkContour';
    const TASK_COST4 = 'TaskCost4';
    const TASK_COST5 = 'TaskCost5';
    const TASK_COST6 = 'TaskCost6';
    const TASK_COST7 = 'TaskCost7';
    const TASK_COST8 = 'TaskCost8';
    const TASK_COST9 = 'TaskCost9';
    const TASK_COST10 = 'TaskCost10';
    const TASK_DATE1 = 'TaskDate1';
    const TASK_DATE2 = 'TaskDate2';
    const TASK_DATE3 = 'TaskDate3';
    const TASK_DATE4 = 'TaskDate4';
    const TASK_DATE5 = 'TaskDate5';
    const TASK_DATE6 = 'TaskDate6';
    const TASK_DATE7 = 'TaskDate7';
    const TASK_DATE8 = 'TaskDate8';
    const TASK_DATE9 = 'TaskDate9';
    const TASK_DATE10 = 'TaskDate10';
    const TASK_DURATION4 = 'TaskDuration4';
    const TASK_DURATION5 = 'TaskDuration5';
    const TASK_DURATION6 = 'TaskDuration6';
    const TASK_DURATION7 = 'TaskDuration7';
    const TASK_DURATION8 = 'TaskDuration8';
    const TASK_DURATION9 = 'TaskDuration9';
    const TASK_DURATION10 = 'TaskDuration10';
    const TASK_START6 = 'TaskStart6';
    const TASK_FINISH6 = 'TaskFinish6';
    const TASK_START7 = 'TaskStart7';
    const TASK_FINISH7 = 'TaskFinish7';
    const TASK_START8 = 'TaskStart8';
    const TASK_FINISH8 = 'TaskFinish8';
    const TASK_START9 = 'TaskStart9';
    const TASK_FINISH9 = 'TaskFinish9';
    const TASK_START10 = 'TaskStart10';
    const TASK_FINISH10 = 'TaskFinish10';
    const TASK_FLAG11 = 'TaskFlag11';
    const TASK_FLAG12 = 'TaskFlag12';
    const TASK_FLAG13 = 'TaskFlag13';
    const TASK_FLAG14 = 'TaskFlag14';
    const TASK_FLAG15 = 'TaskFlag15';
    const TASK_FLAG16 = 'TaskFlag16';
    const TASK_FLAG17 = 'TaskFlag17';
    const TASK_FLAG18 = 'TaskFlag18';
    const TASK_FLAG19 = 'TaskFlag19';
    const TASK_FLAG20 = 'TaskFlag20';
    const TASK_NUMBER6 = 'TaskNumber6';
    const TASK_NUMBER7 = 'TaskNumber7';
    const TASK_NUMBER8 = 'TaskNumber8';
    const TASK_NUMBER9 = 'TaskNumber9';
    const TASK_NUMBER10 = 'TaskNumber10';
    const TASK_NUMBER11 = 'TaskNumber11';
    const TASK_NUMBER12 = 'TaskNumber12';
    const TASK_NUMBER13 = 'TaskNumber13';
    const TASK_NUMBER14 = 'TaskNumber14';
    const TASK_NUMBER15 = 'TaskNumber15';
    const TASK_NUMBER16 = 'TaskNumber16';
    const TASK_NUMBER17 = 'TaskNumber17';
    const TASK_NUMBER18 = 'TaskNumber18';
    const TASK_NUMBER19 = 'TaskNumber19';
    const TASK_NUMBER20 = 'TaskNumber20';
    const TASK_TEXT11 = 'TaskText11';
    const TASK_TEXT12 = 'TaskText12';
    const TASK_TEXT13 = 'TaskText13';
    const TASK_TEXT14 = 'TaskText14';
    const TASK_TEXT15 = 'TaskText15';
    const TASK_TEXT16 = 'TaskText16';
    const TASK_TEXT17 = 'TaskText17';
    const TASK_TEXT18 = 'TaskText18';
    const TASK_TEXT19 = 'TaskText19';
    const TASK_TEXT20 = 'TaskText20';
    const TASK_TEXT21 = 'TaskText21';
    const TASK_TEXT22 = 'TaskText22';
    const TASK_TEXT23 = 'TaskText23';
    const TASK_TEXT24 = 'TaskText24';
    const TASK_TEXT25 = 'TaskText25';
    const TASK_TEXT26 = 'TaskText26';
    const TASK_TEXT27 = 'TaskText27';
    const TASK_TEXT28 = 'TaskText28';
    const TASK_TEXT29 = 'TaskText29';
    const TASK_TEXT30 = 'TaskText30';
    const TASK_RESOURCE_PHONETICS = 'TaskResourcePhonetics';
    const TASK_INDEX = 'TaskIndex';
    const TASK_ASSIGNMENT_DELAY = 'TaskAssignmentDelay';
    const TASK_ASSIGNMENT_UNITS = 'TaskAssignmentUnits';
    const TASK_COST_RATE_TABLE = 'TaskCostRateTable';
    const TASK_PRELEVELED_START = 'TaskPreleveledStart';
    const TASK_PRELEVELED_FINISH = 'TaskPreleveledFinish';
    const TASK_ESTIMATED = 'TaskEstimated';
    const TASK_IGNORE_RESOURCE_CALENDAR = 'TaskIgnoreResourceCalendar';
    const TASK_CALENDAR = 'TaskCalendar';
    const TASK_DURATION1_ESTIMATED = 'TaskDuration1Estimated';
    const TASK_DURATION2_ESTIMATED = 'TaskDuration2Estimated';
    const TASK_DURATION3_ESTIMATED = 'TaskDuration3Estimated';
    const TASK_DURATION4_ESTIMATED = 'TaskDuration4Estimated';
    const TASK_DURATION5_ESTIMATED = 'TaskDuration5Estimated';
    const TASK_DURATION6_ESTIMATED = 'TaskDuration6Estimated';
    const TASK_DURATION7_ESTIMATED = 'TaskDuration7Estimated';
    const TASK_DURATION8_ESTIMATED = 'TaskDuration8Estimated';
    const TASK_DURATION9_ESTIMATED = 'TaskDuration9Estimated';
    const TASK_DURATION10_ESTIMATED = 'TaskDuration10Estimated';
    const TASK_BASELINE_DURATION_ESTIMATED = 'TaskBaselineDurationEstimated';
    const TASK_OUTLINE_CODE1 = 'TaskOutlineCode1';
    const TASK_OUTLINE_CODE2 = 'TaskOutlineCode2';
    const TASK_OUTLINE_CODE3 = 'TaskOutlineCode3';
    const TASK_OUTLINE_CODE4 = 'TaskOutlineCode4';
    const TASK_OUTLINE_CODE5 = 'TaskOutlineCode5';
    const TASK_OUTLINE_CODE6 = 'TaskOutlineCode6';
    const TASK_OUTLINE_CODE7 = 'TaskOutlineCode7';
    const TASK_OUTLINE_CODE8 = 'TaskOutlineCode8';
    const TASK_OUTLINE_CODE9 = 'TaskOutlineCode9';
    const TASK_OUTLINE_CODE10 = 'TaskOutlineCode10';
    const TASK_DEADLINE = 'TaskDeadline';
    const TASK_START_SLACK = 'TaskStartSlack';
    const TASK_FINISH_SLACK = 'TaskFinishSlack';
    const TASK_VAC = 'TaskVAC';
    const TASK_GROUP_BY_SUMMARY = 'TaskGroupBySummary';
    const TASK_WBS_PREDECESSORS = 'TaskWBSPredecessors';
    const TASK_WBS_SUCCESSORS = 'TaskWBSSuccessors';
    const TASK_RESOURCE_TYPE = 'TaskResourceType';
    const TASK_HYPERLINK_SCREEN_TIP = 'TaskHyperlinkScreenTip';
    const TASK_BASE_LINE_FIXED_COST = 'TaskBaseLineFixedCost';
    const TASK_BASELINE1_START = 'TaskBaseline1Start';
    const TASK_BASELINE1_FINISH = 'TaskBaseline1Finish';
    const TASK_BASELINE1_COST = 'TaskBaseline1Cost';
    const TASK_BASELINE1_WORK = 'TaskBaseline1Work';
    const TASK_BASELINE1_DURATION = 'TaskBaseline1Duration';
    const TASK_BASELINE2_START = 'TaskBaseline2Start';
    const TASK_BASELINE2_FINISH = 'TaskBaseline2Finish';
    const TASK_BASELINE2_COST = 'TaskBaseline2Cost';
    const TASK_BASELINE2_WORK = 'TaskBaseline2Work';
    const TASK_BASELINE2_DURATION = 'TaskBaseline2Duration';
    const TASK_BASELINE3_START = 'TaskBaseline3Start';
    const TASK_BASELINE3_FINISH = 'TaskBaseline3Finish';
    const TASK_BASELINE3_COST = 'TaskBaseline3Cost';
    const TASK_BASELINE3_WORK = 'TaskBaseline3Work';
    const TASK_BASELINE3_DURATION = 'TaskBaseline3Duration';
    const TASK_BASELINE4_START = 'TaskBaseline4Start';
    const TASK_BASELINE4_FINISH = 'TaskBaseline4Finish';
    const TASK_BASELINE4_COST = 'TaskBaseline4Cost';
    const TASK_BASELINE4_WORK = 'TaskBaseline4Work';
    const TASK_BASELINE4_DURATION = 'TaskBaseline4Duration';
    const TASK_BASELINE5_START = 'TaskBaseline5Start';
    const TASK_BASELINE5_FINISH = 'TaskBaseline5Finish';
    const TASK_BASELINE5_COST = 'TaskBaseline5Cost';
    const TASK_BASELINE5_WORK = 'TaskBaseline5Work';
    const TASK_BASELINE5_DURATION = 'TaskBaseline5Duration';
    const TASK_CPI = 'TaskCPI';
    const TASK_SPI = 'TaskSPI';
    const TASK_CV_PERCENT = 'TaskCVPercent';
    const TASK_SV_PERCENT = 'TaskSVPercent';
    const TASK_EAC = 'TaskEAC';
    const TASK_TCPI = 'TaskTCPI';
    const TASK_STATUS = 'TaskStatus';
    const TASK_BASELINE6_START = 'TaskBaseline6Start';
    const TASK_BASELINE6_FINISH = 'TaskBaseline6Finish';
    const TASK_BASELINE6_COST = 'TaskBaseline6Cost';
    const TASK_BASELINE6_WORK = 'TaskBaseline6Work';
    const TASK_BASELINE6_DURATION = 'TaskBaseline6Duration';
    const TASK_BASELINE7_START = 'TaskBaseline7Start';
    const TASK_BASELINE7_FINISH = 'TaskBaseline7Finish';
    const TASK_BASELINE7_COST = 'TaskBaseline7Cost';
    const TASK_BASELINE7_WORK = 'TaskBaseline7Work';
    const TASK_BASELINE7_DURATION = 'TaskBaseline7Duration';
    const TASK_BASELINE8_START = 'TaskBaseline8Start';
    const TASK_BASELINE8_FINISH = 'TaskBaseline8Finish';
    const TASK_BASELINE8_COST = 'TaskBaseline8Cost';
    const TASK_BASELINE8_WORK = 'TaskBaseline8Work';
    const TASK_BASELINE8_DURATION = 'TaskBaseline8Duration';
    const TASK_BASELINE9_START = 'TaskBaseline9Start';
    const TASK_BASELINE9_FINISH = 'TaskBaseline9Finish';
    const TASK_BASELINE9_COST = 'TaskBaseline9Cost';
    const TASK_BASELINE9_WORK = 'TaskBaseline9Work';
    const TASK_BASELINE9_DURATION = 'TaskBaseline9Duration';
    const TASK_BASELINE10_START = 'TaskBaseline10Start';
    const TASK_BASELINE10_FINISH = 'TaskBaseline10Finish';
    const TASK_BASELINE10_COST = 'TaskBaseline10Cost';
    const TASK_BASELINE10_WORK = 'TaskBaseline10Work';
    const TASK_BASELINE10_DURATION = 'TaskBaseline10Duration';
    const TASK_ENTERPRISE_COST1 = 'TaskEnterpriseCost1';
    const TASK_ENTERPRISE_COST2 = 'TaskEnterpriseCost2';
    const TASK_ENTERPRISE_COST3 = 'TaskEnterpriseCost3';
    const TASK_ENTERPRISE_COST4 = 'TaskEnterpriseCost4';
    const TASK_ENTERPRISE_COST5 = 'TaskEnterpriseCost5';
    const TASK_ENTERPRISE_COST6 = 'TaskEnterpriseCost6';
    const TASK_ENTERPRISE_COST7 = 'TaskEnterpriseCost7';
    const TASK_ENTERPRISE_COST8 = 'TaskEnterpriseCost8';
    const TASK_ENTERPRISE_COST9 = 'TaskEnterpriseCost9';
    const TASK_ENTERPRISE_COST10 = 'TaskEnterpriseCost10';
    const TASK_ENTERPRISE_DATE1 = 'TaskEnterpriseDate1';
    const TASK_ENTERPRISE_DATE2 = 'TaskEnterpriseDate2';
    const TASK_ENTERPRISE_DATE3 = 'TaskEnterpriseDate3';
    const TASK_ENTERPRISE_DATE4 = 'TaskEnterpriseDate4';
    const TASK_ENTERPRISE_DATE5 = 'TaskEnterpriseDate5';
    const TASK_ENTERPRISE_DATE6 = 'TaskEnterpriseDate6';
    const TASK_ENTERPRISE_DATE7 = 'TaskEnterpriseDate7';
    const TASK_ENTERPRISE_DATE8 = 'TaskEnterpriseDate8';
    const TASK_ENTERPRISE_DATE9 = 'TaskEnterpriseDate9';
    const TASK_ENTERPRISE_DATE10 = 'TaskEnterpriseDate10';
    const TASK_ENTERPRISE_DATE11 = 'TaskEnterpriseDate11';
    const TASK_ENTERPRISE_DATE12 = 'TaskEnterpriseDate12';
    const TASK_ENTERPRISE_DATE13 = 'TaskEnterpriseDate13';
    const TASK_ENTERPRISE_DATE14 = 'TaskEnterpriseDate14';
    const TASK_ENTERPRISE_DATE15 = 'TaskEnterpriseDate15';
    const TASK_ENTERPRISE_DATE16 = 'TaskEnterpriseDate16';
    const TASK_ENTERPRISE_DATE17 = 'TaskEnterpriseDate17';
    const TASK_ENTERPRISE_DATE18 = 'TaskEnterpriseDate18';
    const TASK_ENTERPRISE_DATE19 = 'TaskEnterpriseDate19';
    const TASK_ENTERPRISE_DATE20 = 'TaskEnterpriseDate20';
    const TASK_ENTERPRISE_DATE21 = 'TaskEnterpriseDate21';
    const TASK_ENTERPRISE_DATE22 = 'TaskEnterpriseDate22';
    const TASK_ENTERPRISE_DATE23 = 'TaskEnterpriseDate23';
    const TASK_ENTERPRISE_DATE24 = 'TaskEnterpriseDate24';
    const TASK_ENTERPRISE_DATE25 = 'TaskEnterpriseDate25';
    const TASK_ENTERPRISE_DATE26 = 'TaskEnterpriseDate26';
    const TASK_ENTERPRISE_DATE27 = 'TaskEnterpriseDate27';
    const TASK_ENTERPRISE_DATE28 = 'TaskEnterpriseDate28';
    const TASK_ENTERPRISE_DATE29 = 'TaskEnterpriseDate29';
    const TASK_ENTERPRISE_DATE30 = 'TaskEnterpriseDate30';
    const TASK_ENTERPRISE_DURATION1 = 'TaskEnterpriseDuration1';
    const TASK_ENTERPRISE_DURATION2 = 'TaskEnterpriseDuration2';
    const TASK_ENTERPRISE_DURATION3 = 'TaskEnterpriseDuration3';
    const TASK_ENTERPRISE_DURATION4 = 'TaskEnterpriseDuration4';
    const TASK_ENTERPRISE_DURATION5 = 'TaskEnterpriseDuration5';
    const TASK_ENTERPRISE_DURATION6 = 'TaskEnterpriseDuration6';
    const TASK_ENTERPRISE_DURATION7 = 'TaskEnterpriseDuration7';
    const TASK_ENTERPRISE_DURATION8 = 'TaskEnterpriseDuration8';
    const TASK_ENTERPRISE_DURATION9 = 'TaskEnterpriseDuration9';
    const TASK_ENTERPRISE_DURATION10 = 'TaskEnterpriseDuration10';
    const TASK_ENTERPRISE_FLAG1 = 'TaskEnterpriseFlag1';
    const TASK_ENTERPRISE_FLAG2 = 'TaskEnterpriseFlag2';
    const TASK_ENTERPRISE_FLAG3 = 'TaskEnterpriseFlag3';
    const TASK_ENTERPRISE_FLAG4 = 'TaskEnterpriseFlag4';
    const TASK_ENTERPRISE_FLAG5 = 'TaskEnterpriseFlag5';
    const TASK_ENTERPRISE_FLAG6 = 'TaskEnterpriseFlag6';
    const TASK_ENTERPRISE_FLAG7 = 'TaskEnterpriseFlag7';
    const TASK_ENTERPRISE_FLAG8 = 'TaskEnterpriseFlag8';
    const TASK_ENTERPRISE_FLAG9 = 'TaskEnterpriseFlag9';
    const TASK_ENTERPRISE_FLAG10 = 'TaskEnterpriseFlag10';
    const TASK_ENTERPRISE_FLAG11 = 'TaskEnterpriseFlag11';
    const TASK_ENTERPRISE_FLAG12 = 'TaskEnterpriseFlag12';
    const TASK_ENTERPRISE_FLAG13 = 'TaskEnterpriseFlag13';
    const TASK_ENTERPRISE_FLAG14 = 'TaskEnterpriseFlag14';
    const TASK_ENTERPRISE_FLAG15 = 'TaskEnterpriseFlag15';
    const TASK_ENTERPRISE_FLAG16 = 'TaskEnterpriseFlag16';
    const TASK_ENTERPRISE_FLAG17 = 'TaskEnterpriseFlag17';
    const TASK_ENTERPRISE_FLAG18 = 'TaskEnterpriseFlag18';
    const TASK_ENTERPRISE_FLAG19 = 'TaskEnterpriseFlag19';
    const TASK_ENTERPRISE_FLAG20 = 'TaskEnterpriseFlag20';
    const TASK_ENTERPRISE_NUMBER1 = 'TaskEnterpriseNumber1';
    const TASK_ENTERPRISE_NUMBER2 = 'TaskEnterpriseNumber2';
    const TASK_ENTERPRISE_NUMBER3 = 'TaskEnterpriseNumber3';
    const TASK_ENTERPRISE_NUMBER4 = 'TaskEnterpriseNumber4';
    const TASK_ENTERPRISE_NUMBER5 = 'TaskEnterpriseNumber5';
    const TASK_ENTERPRISE_NUMBER6 = 'TaskEnterpriseNumber6';
    const TASK_ENTERPRISE_NUMBER7 = 'TaskEnterpriseNumber7';
    const TASK_ENTERPRISE_NUMBER8 = 'TaskEnterpriseNumber8';
    const TASK_ENTERPRISE_NUMBER9 = 'TaskEnterpriseNumber9';
    const TASK_ENTERPRISE_NUMBER10 = 'TaskEnterpriseNumber10';
    const TASK_ENTERPRISE_NUMBER11 = 'TaskEnterpriseNumber11';
    const TASK_ENTERPRISE_NUMBER12 = 'TaskEnterpriseNumber12';
    const TASK_ENTERPRISE_NUMBER13 = 'TaskEnterpriseNumber13';
    const TASK_ENTERPRISE_NUMBER14 = 'TaskEnterpriseNumber14';
    const TASK_ENTERPRISE_NUMBER15 = 'TaskEnterpriseNumber15';
    const TASK_ENTERPRISE_NUMBER16 = 'TaskEnterpriseNumber16';
    const TASK_ENTERPRISE_NUMBER17 = 'TaskEnterpriseNumber17';
    const TASK_ENTERPRISE_NUMBER18 = 'TaskEnterpriseNumber18';
    const TASK_ENTERPRISE_NUMBER19 = 'TaskEnterpriseNumber19';
    const TASK_ENTERPRISE_NUMBER20 = 'TaskEnterpriseNumber20';
    const TASK_ENTERPRISE_NUMBER21 = 'TaskEnterpriseNumber21';
    const TASK_ENTERPRISE_NUMBER22 = 'TaskEnterpriseNumber22';
    const TASK_ENTERPRISE_NUMBER23 = 'TaskEnterpriseNumber23';
    const TASK_ENTERPRISE_NUMBER24 = 'TaskEnterpriseNumber24';
    const TASK_ENTERPRISE_NUMBER25 = 'TaskEnterpriseNumber25';
    const TASK_ENTERPRISE_NUMBER26 = 'TaskEnterpriseNumber26';
    const TASK_ENTERPRISE_NUMBER27 = 'TaskEnterpriseNumber27';
    const TASK_ENTERPRISE_NUMBER28 = 'TaskEnterpriseNumber28';
    const TASK_ENTERPRISE_NUMBER29 = 'TaskEnterpriseNumber29';
    const TASK_ENTERPRISE_NUMBER30 = 'TaskEnterpriseNumber30';
    const TASK_ENTERPRISE_NUMBER31 = 'TaskEnterpriseNumber31';
    const TASK_ENTERPRISE_NUMBER32 = 'TaskEnterpriseNumber32';
    const TASK_ENTERPRISE_NUMBER33 = 'TaskEnterpriseNumber33';
    const TASK_ENTERPRISE_NUMBER34 = 'TaskEnterpriseNumber34';
    const TASK_ENTERPRISE_NUMBER35 = 'TaskEnterpriseNumber35';
    const TASK_ENTERPRISE_NUMBER36 = 'TaskEnterpriseNumber36';
    const TASK_ENTERPRISE_NUMBER37 = 'TaskEnterpriseNumber37';
    const TASK_ENTERPRISE_NUMBER38 = 'TaskEnterpriseNumber38';
    const TASK_ENTERPRISE_NUMBER39 = 'TaskEnterpriseNumber39';
    const TASK_ENTERPRISE_NUMBER40 = 'TaskEnterpriseNumber40';
    const TASK_ENTERPRISE_OUTLINE_CODE1 = 'TaskEnterpriseOutlineCode1';
    const TASK_ENTERPRISE_OUTLINE_CODE2 = 'TaskEnterpriseOutlineCode2';
    const TASK_ENTERPRISE_OUTLINE_CODE3 = 'TaskEnterpriseOutlineCode3';
    const TASK_ENTERPRISE_OUTLINE_CODE4 = 'TaskEnterpriseOutlineCode4';
    const TASK_ENTERPRISE_OUTLINE_CODE5 = 'TaskEnterpriseOutlineCode5';
    const TASK_ENTERPRISE_OUTLINE_CODE6 = 'TaskEnterpriseOutlineCode6';
    const TASK_ENTERPRISE_OUTLINE_CODE7 = 'TaskEnterpriseOutlineCode7';
    const TASK_ENTERPRISE_OUTLINE_CODE8 = 'TaskEnterpriseOutlineCode8';
    const TASK_ENTERPRISE_OUTLINE_CODE9 = 'TaskEnterpriseOutlineCode9';
    const TASK_ENTERPRISE_OUTLINE_CODE10 = 'TaskEnterpriseOutlineCode10';
    const TASK_ENTERPRISE_OUTLINE_CODE11 = 'TaskEnterpriseOutlineCode11';
    const TASK_ENTERPRISE_OUTLINE_CODE12 = 'TaskEnterpriseOutlineCode12';
    const TASK_ENTERPRISE_OUTLINE_CODE13 = 'TaskEnterpriseOutlineCode13';
    const TASK_ENTERPRISE_OUTLINE_CODE14 = 'TaskEnterpriseOutlineCode14';
    const TASK_ENTERPRISE_OUTLINE_CODE15 = 'TaskEnterpriseOutlineCode15';
    const TASK_ENTERPRISE_OUTLINE_CODE16 = 'TaskEnterpriseOutlineCode16';
    const TASK_ENTERPRISE_OUTLINE_CODE17 = 'TaskEnterpriseOutlineCode17';
    const TASK_ENTERPRISE_OUTLINE_CODE18 = 'TaskEnterpriseOutlineCode18';
    const TASK_ENTERPRISE_OUTLINE_CODE19 = 'TaskEnterpriseOutlineCode19';
    const TASK_ENTERPRISE_OUTLINE_CODE20 = 'TaskEnterpriseOutlineCode20';
    const TASK_ENTERPRISE_OUTLINE_CODE21 = 'TaskEnterpriseOutlineCode21';
    const TASK_ENTERPRISE_OUTLINE_CODE22 = 'TaskEnterpriseOutlineCode22';
    const TASK_ENTERPRISE_OUTLINE_CODE23 = 'TaskEnterpriseOutlineCode23';
    const TASK_ENTERPRISE_OUTLINE_CODE24 = 'TaskEnterpriseOutlineCode24';
    const TASK_ENTERPRISE_OUTLINE_CODE25 = 'TaskEnterpriseOutlineCode25';
    const TASK_ENTERPRISE_OUTLINE_CODE26 = 'TaskEnterpriseOutlineCode26';
    const TASK_ENTERPRISE_OUTLINE_CODE27 = 'TaskEnterpriseOutlineCode27';
    const TASK_ENTERPRISE_OUTLINE_CODE28 = 'TaskEnterpriseOutlineCode28';
    const TASK_ENTERPRISE_OUTLINE_CODE29 = 'TaskEnterpriseOutlineCode29';
    const TASK_ENTERPRISE_OUTLINE_CODE30 = 'TaskEnterpriseOutlineCode30';
    const TASK_ENTERPRISE_TEXT1 = 'TaskEnterpriseText1';
    const TASK_ENTERPRISE_TEXT2 = 'TaskEnterpriseText2';
    const TASK_ENTERPRISE_TEXT3 = 'TaskEnterpriseText3';
    const TASK_ENTERPRISE_TEXT4 = 'TaskEnterpriseText4';
    const TASK_ENTERPRISE_TEXT5 = 'TaskEnterpriseText5';
    const TASK_ENTERPRISE_TEXT6 = 'TaskEnterpriseText6';
    const TASK_ENTERPRISE_TEXT7 = 'TaskEnterpriseText7';
    const TASK_ENTERPRISE_TEXT8 = 'TaskEnterpriseText8';
    const TASK_ENTERPRISE_TEXT9 = 'TaskEnterpriseText9';
    const TASK_ENTERPRISE_TEXT10 = 'TaskEnterpriseText10';
    const TASK_ENTERPRISE_TEXT11 = 'TaskEnterpriseText11';
    const TASK_ENTERPRISE_TEXT12 = 'TaskEnterpriseText12';
    const TASK_ENTERPRISE_TEXT13 = 'TaskEnterpriseText13';
    const TASK_ENTERPRISE_TEXT14 = 'TaskEnterpriseText14';
    const TASK_ENTERPRISE_TEXT15 = 'TaskEnterpriseText15';
    const TASK_ENTERPRISE_TEXT16 = 'TaskEnterpriseText16';
    const TASK_ENTERPRISE_TEXT17 = 'TaskEnterpriseText17';
    const TASK_ENTERPRISE_TEXT18 = 'TaskEnterpriseText18';
    const TASK_ENTERPRISE_TEXT19 = 'TaskEnterpriseText19';
    const TASK_ENTERPRISE_TEXT20 = 'TaskEnterpriseText20';
    const TASK_ENTERPRISE_TEXT21 = 'TaskEnterpriseText21';
    const TASK_ENTERPRISE_TEXT22 = 'TaskEnterpriseText22';
    const TASK_ENTERPRISE_TEXT23 = 'TaskEnterpriseText23';
    const TASK_ENTERPRISE_TEXT24 = 'TaskEnterpriseText24';
    const TASK_ENTERPRISE_TEXT25 = 'TaskEnterpriseText25';
    const TASK_ENTERPRISE_TEXT26 = 'TaskEnterpriseText26';
    const TASK_ENTERPRISE_TEXT27 = 'TaskEnterpriseText27';
    const TASK_ENTERPRISE_TEXT28 = 'TaskEnterpriseText28';
    const TASK_ENTERPRISE_TEXT29 = 'TaskEnterpriseText29';
    const TASK_ENTERPRISE_TEXT30 = 'TaskEnterpriseText30';
    const TASK_ENTERPRISE_TEXT31 = 'TaskEnterpriseText31';
    const TASK_ENTERPRISE_TEXT32 = 'TaskEnterpriseText32';
    const TASK_ENTERPRISE_TEXT33 = 'TaskEnterpriseText33';
    const TASK_ENTERPRISE_TEXT34 = 'TaskEnterpriseText34';
    const TASK_ENTERPRISE_TEXT35 = 'TaskEnterpriseText35';
    const TASK_ENTERPRISE_TEXT36 = 'TaskEnterpriseText36';
    const TASK_ENTERPRISE_TEXT37 = 'TaskEnterpriseText37';
    const TASK_ENTERPRISE_TEXT38 = 'TaskEnterpriseText38';
    const TASK_ENTERPRISE_TEXT39 = 'TaskEnterpriseText39';
    const TASK_ENTERPRISE_TEXT40 = 'TaskEnterpriseText40';
    const TASK_BASELINE1_DURATION_ESTIMATED = 'TaskBaseline1DurationEstimated';
    const TASK_BASELINE2_DURATION_ESTIMATED = 'TaskBaseline2DurationEstimated';
    const TASK_BASELINE3_DURATION_ESTIMATED = 'TaskBaseline3DurationEstimated';
    const TASK_BASELINE4_DURATION_ESTIMATED = 'TaskBaseline4DurationEstimated';
    const TASK_BASELINE5_DURATION_ESTIMATED = 'TaskBaseline5DurationEstimated';
    const TASK_BASELINE6_DURATION_ESTIMATED = 'TaskBaseline6DurationEstimated';
    const TASK_BASELINE7_DURATION_ESTIMATED = 'TaskBaseline7DurationEstimated';
    const TASK_BASELINE8_DURATION_ESTIMATED = 'TaskBaseline8DurationEstimated';
    const TASK_BASELINE9_DURATION_ESTIMATED = 'TaskBaseline9DurationEstimated';
    const TASK_BASELINE10_DURATION_ESTIMATED = 'TaskBaseline10DurationEstimated';
    const TASK_ENTERPRISE_PROJECT_COST1 = 'TaskEnterpriseProjectCost1';
    const TASK_ENTERPRISE_PROJECT_COST2 = 'TaskEnterpriseProjectCost2';
    const TASK_ENTERPRISE_PROJECT_COST3 = 'TaskEnterpriseProjectCost3';
    const TASK_ENTERPRISE_PROJECT_COST4 = 'TaskEnterpriseProjectCost4';
    const TASK_ENTERPRISE_PROJECT_COST5 = 'TaskEnterpriseProjectCost5';
    const TASK_ENTERPRISE_PROJECT_COST6 = 'TaskEnterpriseProjectCost6';
    const TASK_ENTERPRISE_PROJECT_COST7 = 'TaskEnterpriseProjectCost7';
    const TASK_ENTERPRISE_PROJECT_COST8 = 'TaskEnterpriseProjectCost8';
    const TASK_ENTERPRISE_PROJECT_COST9 = 'TaskEnterpriseProjectCost9';
    const TASK_ENTERPRISE_PROJECT_COST10 = 'TaskEnterpriseProjectCost10';
    const TASK_ENTERPRISE_PROJECT_DATE1 = 'TaskEnterpriseProjectDate1';
    const TASK_ENTERPRISE_PROJECT_DATE2 = 'TaskEnterpriseProjectDate2';
    const TASK_ENTERPRISE_PROJECT_DATE3 = 'TaskEnterpriseProjectDate3';
    const TASK_ENTERPRISE_PROJECT_DATE4 = 'TaskEnterpriseProjectDate4';
    const TASK_ENTERPRISE_PROJECT_DATE5 = 'TaskEnterpriseProjectDate5';
    const TASK_ENTERPRISE_PROJECT_DATE6 = 'TaskEnterpriseProjectDate6';
    const TASK_ENTERPRISE_PROJECT_DATE7 = 'TaskEnterpriseProjectDate7';
    const TASK_ENTERPRISE_PROJECT_DATE8 = 'TaskEnterpriseProjectDate8';
    const TASK_ENTERPRISE_PROJECT_DATE9 = 'TaskEnterpriseProjectDate9';
    const TASK_ENTERPRISE_PROJECT_DATE10 = 'TaskEnterpriseProjectDate10';
    const TASK_ENTERPRISE_PROJECT_DATE11 = 'TaskEnterpriseProjectDate11';
    const TASK_ENTERPRISE_PROJECT_DATE12 = 'TaskEnterpriseProjectDate12';
    const TASK_ENTERPRISE_PROJECT_DATE13 = 'TaskEnterpriseProjectDate13';
    const TASK_ENTERPRISE_PROJECT_DATE14 = 'TaskEnterpriseProjectDate14';
    const TASK_ENTERPRISE_PROJECT_DATE15 = 'TaskEnterpriseProjectDate15';
    const TASK_ENTERPRISE_PROJECT_DATE16 = 'TaskEnterpriseProjectDate16';
    const TASK_ENTERPRISE_PROJECT_DATE17 = 'TaskEnterpriseProjectDate17';
    const TASK_ENTERPRISE_PROJECT_DATE18 = 'TaskEnterpriseProjectDate18';
    const TASK_ENTERPRISE_PROJECT_DATE19 = 'TaskEnterpriseProjectDate19';
    const TASK_ENTERPRISE_PROJECT_DATE20 = 'TaskEnterpriseProjectDate20';
    const TASK_ENTERPRISE_PROJECT_DATE21 = 'TaskEnterpriseProjectDate21';
    const TASK_ENTERPRISE_PROJECT_DATE22 = 'TaskEnterpriseProjectDate22';
    const TASK_ENTERPRISE_PROJECT_DATE23 = 'TaskEnterpriseProjectDate23';
    const TASK_ENTERPRISE_PROJECT_DATE24 = 'TaskEnterpriseProjectDate24';
    const TASK_ENTERPRISE_PROJECT_DATE25 = 'TaskEnterpriseProjectDate25';
    const TASK_ENTERPRISE_PROJECT_DATE26 = 'TaskEnterpriseProjectDate26';
    const TASK_ENTERPRISE_PROJECT_DATE27 = 'TaskEnterpriseProjectDate27';
    const TASK_ENTERPRISE_PROJECT_DATE28 = 'TaskEnterpriseProjectDate28';
    const TASK_ENTERPRISE_PROJECT_DATE29 = 'TaskEnterpriseProjectDate29';
    const TASK_ENTERPRISE_PROJECT_DATE30 = 'TaskEnterpriseProjectDate30';
    const TASK_ENTERPRISE_PROJECT_DURATION1 = 'TaskEnterpriseProjectDuration1';
    const TASK_ENTERPRISE_PROJECT_DURATION2 = 'TaskEnterpriseProjectDuration2';
    const TASK_ENTERPRISE_PROJECT_DURATION3 = 'TaskEnterpriseProjectDuration3';
    const TASK_ENTERPRISE_PROJECT_DURATION4 = 'TaskEnterpriseProjectDuration4';
    const TASK_ENTERPRISE_PROJECT_DURATION5 = 'TaskEnterpriseProjectDuration5';
    const TASK_ENTERPRISE_PROJECT_DURATION6 = 'TaskEnterpriseProjectDuration6';
    const TASK_ENTERPRISE_PROJECT_DURATION7 = 'TaskEnterpriseProjectDuration7';
    const TASK_ENTERPRISE_PROJECT_DURATION8 = 'TaskEnterpriseProjectDuration8';
    const TASK_ENTERPRISE_PROJECT_DURATION9 = 'TaskEnterpriseProjectDuration9';
    const TASK_ENTERPRISE_PROJECT_DURATION10 = 'TaskEnterpriseProjectDuration10';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE1 = 'TaskEnterpriseProjectOutlineCode1';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE2 = 'TaskEnterpriseProjectOutlineCode2';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE3 = 'TaskEnterpriseProjectOutlineCode3';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE4 = 'TaskEnterpriseProjectOutlineCode4';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE5 = 'TaskEnterpriseProjectOutlineCode5';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE6 = 'TaskEnterpriseProjectOutlineCode6';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE7 = 'TaskEnterpriseProjectOutlineCode7';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE8 = 'TaskEnterpriseProjectOutlineCode8';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE9 = 'TaskEnterpriseProjectOutlineCode9';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE10 = 'TaskEnterpriseProjectOutlineCode10';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE11 = 'TaskEnterpriseProjectOutlineCode11';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE12 = 'TaskEnterpriseProjectOutlineCode12';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE13 = 'TaskEnterpriseProjectOutlineCode13';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE14 = 'TaskEnterpriseProjectOutlineCode14';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE15 = 'TaskEnterpriseProjectOutlineCode15';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE16 = 'TaskEnterpriseProjectOutlineCode16';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE17 = 'TaskEnterpriseProjectOutlineCode17';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE18 = 'TaskEnterpriseProjectOutlineCode18';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE19 = 'TaskEnterpriseProjectOutlineCode19';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE20 = 'TaskEnterpriseProjectOutlineCode20';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE21 = 'TaskEnterpriseProjectOutlineCode21';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE22 = 'TaskEnterpriseProjectOutlineCode22';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE23 = 'TaskEnterpriseProjectOutlineCode23';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE24 = 'TaskEnterpriseProjectOutlineCode24';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE25 = 'TaskEnterpriseProjectOutlineCode25';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE26 = 'TaskEnterpriseProjectOutlineCode26';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE27 = 'TaskEnterpriseProjectOutlineCode27';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE28 = 'TaskEnterpriseProjectOutlineCode28';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE29 = 'TaskEnterpriseProjectOutlineCode29';
    const TASK_ENTERPRISE_PROJECT_OUTLINE_CODE30 = 'TaskEnterpriseProjectOutlineCode30';
    const TASK_ENTERPRISE_PROJECT_FLAG1 = 'TaskEnterpriseProjectFlag1';
    const TASK_ENTERPRISE_PROJECT_FLAG2 = 'TaskEnterpriseProjectFlag2';
    const TASK_ENTERPRISE_PROJECT_FLAG3 = 'TaskEnterpriseProjectFlag3';
    const TASK_ENTERPRISE_PROJECT_FLAG4 = 'TaskEnterpriseProjectFlag4';
    const TASK_ENTERPRISE_PROJECT_FLAG5 = 'TaskEnterpriseProjectFlag5';
    const TASK_ENTERPRISE_PROJECT_FLAG6 = 'TaskEnterpriseProjectFlag6';
    const TASK_ENTERPRISE_PROJECT_FLAG7 = 'TaskEnterpriseProjectFlag7';
    const TASK_ENTERPRISE_PROJECT_FLAG8 = 'TaskEnterpriseProjectFlag8';
    const TASK_ENTERPRISE_PROJECT_FLAG9 = 'TaskEnterpriseProjectFlag9';
    const TASK_ENTERPRISE_PROJECT_FLAG10 = 'TaskEnterpriseProjectFlag10';
    const TASK_ENTERPRISE_PROJECT_FLAG11 = 'TaskEnterpriseProjectFlag11';
    const TASK_ENTERPRISE_PROJECT_FLAG12 = 'TaskEnterpriseProjectFlag12';
    const TASK_ENTERPRISE_PROJECT_FLAG13 = 'TaskEnterpriseProjectFlag13';
    const TASK_ENTERPRISE_PROJECT_FLAG14 = 'TaskEnterpriseProjectFlag14';
    const TASK_ENTERPRISE_PROJECT_FLAG15 = 'TaskEnterpriseProjectFlag15';
    const TASK_ENTERPRISE_PROJECT_FLAG16 = 'TaskEnterpriseProjectFlag16';
    const TASK_ENTERPRISE_PROJECT_FLAG17 = 'TaskEnterpriseProjectFlag17';
    const TASK_ENTERPRISE_PROJECT_FLAG18 = 'TaskEnterpriseProjectFlag18';
    const TASK_ENTERPRISE_PROJECT_FLAG19 = 'TaskEnterpriseProjectFlag19';
    const TASK_ENTERPRISE_PROJECT_FLAG20 = 'TaskEnterpriseProjectFlag20';
    const TASK_ENTERPRISE_PROJECT_NUMBER1 = 'TaskEnterpriseProjectNumber1';
    const TASK_ENTERPRISE_PROJECT_NUMBER2 = 'TaskEnterpriseProjectNumber2';
    const TASK_ENTERPRISE_PROJECT_NUMBER3 = 'TaskEnterpriseProjectNumber3';
    const TASK_ENTERPRISE_PROJECT_NUMBER4 = 'TaskEnterpriseProjectNumber4';
    const TASK_ENTERPRISE_PROJECT_NUMBER5 = 'TaskEnterpriseProjectNumber5';
    const TASK_ENTERPRISE_PROJECT_NUMBER6 = 'TaskEnterpriseProjectNumber6';
    const TASK_ENTERPRISE_PROJECT_NUMBER7 = 'TaskEnterpriseProjectNumber7';
    const TASK_ENTERPRISE_PROJECT_NUMBER8 = 'TaskEnterpriseProjectNumber8';
    const TASK_ENTERPRISE_PROJECT_NUMBER9 = 'TaskEnterpriseProjectNumber9';
    const TASK_ENTERPRISE_PROJECT_NUMBER10 = 'TaskEnterpriseProjectNumber10';
    const TASK_ENTERPRISE_PROJECT_NUMBER11 = 'TaskEnterpriseProjectNumber11';
    const TASK_ENTERPRISE_PROJECT_NUMBER12 = 'TaskEnterpriseProjectNumber12';
    const TASK_ENTERPRISE_PROJECT_NUMBER13 = 'TaskEnterpriseProjectNumber13';
    const TASK_ENTERPRISE_PROJECT_NUMBER14 = 'TaskEnterpriseProjectNumber14';
    const TASK_ENTERPRISE_PROJECT_NUMBER15 = 'TaskEnterpriseProjectNumber15';
    const TASK_ENTERPRISE_PROJECT_NUMBER16 = 'TaskEnterpriseProjectNumber16';
    const TASK_ENTERPRISE_PROJECT_NUMBER17 = 'TaskEnterpriseProjectNumber17';
    const TASK_ENTERPRISE_PROJECT_NUMBER18 = 'TaskEnterpriseProjectNumber18';
    const TASK_ENTERPRISE_PROJECT_NUMBER19 = 'TaskEnterpriseProjectNumber19';
    const TASK_ENTERPRISE_PROJECT_NUMBER20 = 'TaskEnterpriseProjectNumber20';
    const TASK_ENTERPRISE_PROJECT_NUMBER21 = 'TaskEnterpriseProjectNumber21';
    const TASK_ENTERPRISE_PROJECT_NUMBER22 = 'TaskEnterpriseProjectNumber22';
    const TASK_ENTERPRISE_PROJECT_NUMBER23 = 'TaskEnterpriseProjectNumber23';
    const TASK_ENTERPRISE_PROJECT_NUMBER24 = 'TaskEnterpriseProjectNumber24';
    const TASK_ENTERPRISE_PROJECT_NUMBER25 = 'TaskEnterpriseProjectNumber25';
    const TASK_ENTERPRISE_PROJECT_NUMBER26 = 'TaskEnterpriseProjectNumber26';
    const TASK_ENTERPRISE_PROJECT_NUMBER27 = 'TaskEnterpriseProjectNumber27';
    const TASK_ENTERPRISE_PROJECT_NUMBER28 = 'TaskEnterpriseProjectNumber28';
    const TASK_ENTERPRISE_PROJECT_NUMBER29 = 'TaskEnterpriseProjectNumber29';
    const TASK_ENTERPRISE_PROJECT_NUMBER30 = 'TaskEnterpriseProjectNumber30';
    const TASK_ENTERPRISE_PROJECT_NUMBER31 = 'TaskEnterpriseProjectNumber31';
    const TASK_ENTERPRISE_PROJECT_NUMBER32 = 'TaskEnterpriseProjectNumber32';
    const TASK_ENTERPRISE_PROJECT_NUMBER33 = 'TaskEnterpriseProjectNumber33';
    const TASK_ENTERPRISE_PROJECT_NUMBER34 = 'TaskEnterpriseProjectNumber34';
    const TASK_ENTERPRISE_PROJECT_NUMBER35 = 'TaskEnterpriseProjectNumber35';
    const TASK_ENTERPRISE_PROJECT_NUMBER36 = 'TaskEnterpriseProjectNumber36';
    const TASK_ENTERPRISE_PROJECT_NUMBER37 = 'TaskEnterpriseProjectNumber37';
    const TASK_ENTERPRISE_PROJECT_NUMBER38 = 'TaskEnterpriseProjectNumber38';
    const TASK_ENTERPRISE_PROJECT_NUMBER39 = 'TaskEnterpriseProjectNumber39';
    const TASK_ENTERPRISE_PROJECT_NUMBER40 = 'TaskEnterpriseProjectNumber40';
    const TASK_ENTERPRISE_PROJECT_TEXT1 = 'TaskEnterpriseProjectText1';
    const TASK_ENTERPRISE_PROJECT_TEXT2 = 'TaskEnterpriseProjectText2';
    const TASK_ENTERPRISE_PROJECT_TEXT3 = 'TaskEnterpriseProjectText3';
    const TASK_ENTERPRISE_PROJECT_TEXT4 = 'TaskEnterpriseProjectText4';
    const TASK_ENTERPRISE_PROJECT_TEXT5 = 'TaskEnterpriseProjectText5';
    const TASK_ENTERPRISE_PROJECT_TEXT6 = 'TaskEnterpriseProjectText6';
    const TASK_ENTERPRISE_PROJECT_TEXT7 = 'TaskEnterpriseProjectText7';
    const TASK_ENTERPRISE_PROJECT_TEXT8 = 'TaskEnterpriseProjectText8';
    const TASK_ENTERPRISE_PROJECT_TEXT9 = 'TaskEnterpriseProjectText9';
    const TASK_ENTERPRISE_PROJECT_TEXT10 = 'TaskEnterpriseProjectText10';
    const TASK_ENTERPRISE_PROJECT_TEXT11 = 'TaskEnterpriseProjectText11';
    const TASK_ENTERPRISE_PROJECT_TEXT12 = 'TaskEnterpriseProjectText12';
    const TASK_ENTERPRISE_PROJECT_TEXT13 = 'TaskEnterpriseProjectText13';
    const TASK_ENTERPRISE_PROJECT_TEXT14 = 'TaskEnterpriseProjectText14';
    const TASK_ENTERPRISE_PROJECT_TEXT15 = 'TaskEnterpriseProjectText15';
    const TASK_ENTERPRISE_PROJECT_TEXT16 = 'TaskEnterpriseProjectText16';
    const TASK_ENTERPRISE_PROJECT_TEXT17 = 'TaskEnterpriseProjectText17';
    const TASK_ENTERPRISE_PROJECT_TEXT18 = 'TaskEnterpriseProjectText18';
    const TASK_ENTERPRISE_PROJECT_TEXT19 = 'TaskEnterpriseProjectText19';
    const TASK_ENTERPRISE_PROJECT_TEXT20 = 'TaskEnterpriseProjectText20';
    const TASK_ENTERPRISE_PROJECT_TEXT21 = 'TaskEnterpriseProjectText21';
    const TASK_ENTERPRISE_PROJECT_TEXT22 = 'TaskEnterpriseProjectText22';
    const TASK_ENTERPRISE_PROJECT_TEXT23 = 'TaskEnterpriseProjectText23';
    const TASK_ENTERPRISE_PROJECT_TEXT24 = 'TaskEnterpriseProjectText24';
    const TASK_ENTERPRISE_PROJECT_TEXT25 = 'TaskEnterpriseProjectText25';
    const TASK_ENTERPRISE_PROJECT_TEXT26 = 'TaskEnterpriseProjectText26';
    const TASK_ENTERPRISE_PROJECT_TEXT27 = 'TaskEnterpriseProjectText27';
    const TASK_ENTERPRISE_PROJECT_TEXT28 = 'TaskEnterpriseProjectText28';
    const TASK_ENTERPRISE_PROJECT_TEXT29 = 'TaskEnterpriseProjectText29';
    const TASK_ENTERPRISE_PROJECT_TEXT30 = 'TaskEnterpriseProjectText30';
    const TASK_ENTERPRISE_PROJECT_TEXT31 = 'TaskEnterpriseProjectText31';
    const TASK_ENTERPRISE_PROJECT_TEXT32 = 'TaskEnterpriseProjectText32';
    const TASK_ENTERPRISE_PROJECT_TEXT33 = 'TaskEnterpriseProjectText33';
    const TASK_ENTERPRISE_PROJECT_TEXT34 = 'TaskEnterpriseProjectText34';
    const TASK_ENTERPRISE_PROJECT_TEXT35 = 'TaskEnterpriseProjectText35';
    const TASK_ENTERPRISE_PROJECT_TEXT36 = 'TaskEnterpriseProjectText36';
    const TASK_ENTERPRISE_PROJECT_TEXT37 = 'TaskEnterpriseProjectText37';
    const TASK_ENTERPRISE_PROJECT_TEXT38 = 'TaskEnterpriseProjectText38';
    const TASK_ENTERPRISE_PROJECT_TEXT39 = 'TaskEnterpriseProjectText39';
    const TASK_ENTERPRISE_PROJECT_TEXT40 = 'TaskEnterpriseProjectText40';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE1 = 'TaskResourceEnterpriseOutlineCode1';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE2 = 'TaskResourceEnterpriseOutlineCode2';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE3 = 'TaskResourceEnterpriseOutlineCode3';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE4 = 'TaskResourceEnterpriseOutlineCode4';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE5 = 'TaskResourceEnterpriseOutlineCode5';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE6 = 'TaskResourceEnterpriseOutlineCode6';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE7 = 'TaskResourceEnterpriseOutlineCode7';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE8 = 'TaskResourceEnterpriseOutlineCode8';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE9 = 'TaskResourceEnterpriseOutlineCode9';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE10 = 'TaskResourceEnterpriseOutlineCode10';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE11 = 'TaskResourceEnterpriseOutlineCode11';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE12 = 'TaskResourceEnterpriseOutlineCode12';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE13 = 'TaskResourceEnterpriseOutlineCode13';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE14 = 'TaskResourceEnterpriseOutlineCode14';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE15 = 'TaskResourceEnterpriseOutlineCode15';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE16 = 'TaskResourceEnterpriseOutlineCode16';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE17 = 'TaskResourceEnterpriseOutlineCode17';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE18 = 'TaskResourceEnterpriseOutlineCode18';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE19 = 'TaskResourceEnterpriseOutlineCode19';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE20 = 'TaskResourceEnterpriseOutlineCode20';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE21 = 'TaskResourceEnterpriseOutlineCode21';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE22 = 'TaskResourceEnterpriseOutlineCode22';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE23 = 'TaskResourceEnterpriseOutlineCode23';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE24 = 'TaskResourceEnterpriseOutlineCode24';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE25 = 'TaskResourceEnterpriseOutlineCode25';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE26 = 'TaskResourceEnterpriseOutlineCode26';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE27 = 'TaskResourceEnterpriseOutlineCode27';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE28 = 'TaskResourceEnterpriseOutlineCode28';
    const TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE29 = 'TaskResourceEnterpriseOutlineCode29';
    const TASK_RESOURCE_ENTERPRISE_RBS = 'TaskResourceEnterpriseRBS';
    const TASK_PHYSICAL_PERCENT_COMPLETE = 'TaskPhysicalPercentComplete';
    const TASK_DEMANDED_REQUESTED = 'TaskDemandedRequested';
    const TASK_STATUS_INDICATOR = 'TaskStatusIndicator';
    const TASK_EARNED_VALUE_METHOD = 'TaskEarnedValueMethod';
    const TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE20 = 'TaskResourceEnterpriseMultiValueCode20';
    const TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE21 = 'TaskResourceEnterpriseMultiValueCode21';
    const TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE22 = 'TaskResourceEnterpriseMultiValueCode22';
    const TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE23 = 'TaskResourceEnterpriseMultiValueCode23';
    const TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE24 = 'TaskResourceEnterpriseMultiValueCode24';
    const TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE25 = 'TaskResourceEnterpriseMultiValueCode25';
    const TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE26 = 'TaskResourceEnterpriseMultiValueCode26';
    const TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE27 = 'TaskResourceEnterpriseMultiValueCode27';
    const TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE28 = 'TaskResourceEnterpriseMultiValueCode28';
    const TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE29 = 'TaskResourceEnterpriseMultiValueCode29';
    const TASK_ACTUAL_WORK_PROTECTED = 'TaskActualWorkProtected';
    const TASK_ACTUAL_OVERTIME_WORK_PROTECTED = 'TaskActualOvertimeWorkProtected';
    const TASK_GUID = 'TaskGuid';
    const TASK_CALENDAR_GUID = 'TaskCalendarGuid';
    const TASK_DELIVERABLE_GUID = 'TaskDeliverableGuid';
    const TASK_DELIVERABLE_TYPE = 'TaskDeliverableType';
    const TASK_DELIVERABLE_START = 'TaskDeliverableStart';
    const TASK_DELIVERABLE_FINISH = 'TaskDeliverableFinish';
    const TASK_IS_PUBLISHED = 'TaskIsPublished';
    const TASK_STATUS_MANAGER_NAME = 'TaskStatusManagerName';
    const TASK_ERROR_MESSAGE = 'TaskErrorMessage';
    const TASK_ASSIGNMENT_OWNER = 'TaskAssignmentOwner';
    const TASK_BUDGET_WORK = 'TaskBudgetWork';
    const TASK_BUDGET_COST = 'TaskBudgetCost';
    const TASK_BASELINE_FIXED_COST_ACCRUAL = 'TaskBaselineFixedCostAccrual';
    const TASK_BASELINE_DELIVERABLE_START = 'TaskBaselineDeliverableStart';
    const TASK_BASELINE_DELIVERABLE_FINISH = 'TaskBaselineDeliverableFinish';
    const TASK_BASELINE_BUDGET_WORK = 'TaskBaselineBudgetWork';
    const TASK_BASELINE_BUDGET_COST = 'TaskBaselineBudgetCost';
    const TASK_BASELINE1_FIXED_COST_ACCRUAL = 'TaskBaseline1FixedCostAccrual';
    const TASK_BASELINE1_DELIVERABLE_START = 'TaskBaseline1DeliverableStart';
    const TASK_BASELINE1_DELIVERABLE_FINISH = 'TaskBaseline1DeliverableFinish';
    const TASK_BASELINE1_BUDGET_WORK = 'TaskBaseline1BudgetWork';
    const TASK_BASELINE1_BUDGET_COST = 'TaskBaseline1BudgetCost';
    const TASK_BASELINE2_FIXED_COST_ACCRUAL = 'TaskBaseline2FixedCostAccrual';
    const TASK_BASELINE2_DELIVERABLE_START = 'TaskBaseline2DeliverableStart';
    const TASK_BASELINE2_DELIVERABLE_FINISH = 'TaskBaseline2DeliverableFinish';
    const TASK_BASELINE2_BUDGET_WORK = 'TaskBaseline2BudgetWork';
    const TASK_BASELINE2_BUDGET_COST = 'TaskBaseline2BudgetCost';
    const TASK_BASELINE3_FIXED_COST_ACCRUAL = 'TaskBaseline3FixedCostAccrual';
    const TASK_BASELINE3_DELIVERABLE_START = 'TaskBaseline3DeliverableStart';
    const TASK_BASELINE3_DELIVERABLE_FINISH = 'TaskBaseline3DeliverableFinish';
    const TASK_BASELINE3_BUDGET_WORK = 'TaskBaseline3BudgetWork';
    const TASK_BASELINE3_BUDGET_COST = 'TaskBaseline3BudgetCost';
    const TASK_BASELINE4_FIXED_COST_ACCRUAL = 'TaskBaseline4FixedCostAccrual';
    const TASK_BASELINE4_DELIVERABLE_START = 'TaskBaseline4DeliverableStart';
    const TASK_BASELINE4_DELIVERABLE_FINISH = 'TaskBaseline4DeliverableFinish';
    const TASK_BASELINE4_BUDGET_WORK = 'TaskBaseline4BudgetWork';
    const TASK_BASELINE4_BUDGET_COST = 'TaskBaseline4BudgetCost';
    const TASK_BASELINE5_FIXED_COST_ACCRUAL = 'TaskBaseline5FixedCostAccrual';
    const TASK_BASELINE5_DELIVERABLE_START = 'TaskBaseline5DeliverableStart';
    const TASK_BASELINE5_DELIVERABLE_FINISH = 'TaskBaseline5DeliverableFinish';
    const TASK_BASELINE5_BUDGET_WORK = 'TaskBaseline5BudgetWork';
    const TASK_BASELINE5_BUDGET_COST = 'TaskBaseline5BudgetCost';
    const TASK_BASELINE6_FIXED_COST_ACCRUAL = 'TaskBaseline6FixedCostAccrual';
    const TASK_BASELINE6_DELIVERABLE_START = 'TaskBaseline6DeliverableStart';
    const TASK_BASELINE6_DELIVERABLE_FINISH = 'TaskBaseline6DeliverableFinish';
    const TASK_BASELINE6_BUDGET_WORK = 'TaskBaseline6BudgetWork';
    const TASK_BASELINE6_BUDGET_COST = 'TaskBaseline6BudgetCost';
    const TASK_BASELINE7_FIXED_COST_ACCRUAL = 'TaskBaseline7FixedCostAccrual';
    const TASK_BASELINE7_DELIVERABLE_START = 'TaskBaseline7DeliverableStart';
    const TASK_BASELINE7_DELIVERABLE_FINISH = 'TaskBaseline7DeliverableFinish';
    const TASK_BASELINE7_BUDGET_WORK = 'TaskBaseline7BudgetWork';
    const TASK_BASELINE7_BUDGET_COST = 'TaskBaseline7BudgetCost';
    const TASK_BASELINE8_FIXED_COST_ACCRUAL = 'TaskBaseline8FixedCostAccrual';
    const TASK_BASELINE8_DELIVERABLE_START = 'TaskBaseline8DeliverableStart';
    const TASK_BASELINE8_DELIVERABLE_FINISH = 'TaskBaseline8DeliverableFinish';
    const TASK_BASELINE8_BUDGET_WORK = 'TaskBaseline8BudgetWork';
    const TASK_BASELINE8_BUDGET_COST = 'TaskBaseline8BudgetCost';
    const TASK_BASELINE9_FIXED_COST_ACCRUAL = 'TaskBaseline9FixedCostAccrual';
    const TASK_BASELINE9_DELIVERABLE_START = 'TaskBaseline9DeliverableStart';
    const TASK_BASELINE9_DELIVERABLE_FINISH = 'TaskBaseline9DeliverableFinish';
    const TASK_BASELINE9_BUDGET_WORK = 'TaskBaseline9BudgetWork';
    const TASK_BASELINE9_BUDGET_COST = 'TaskBaseline9BudgetCost';
    const TASK_BASELINE10_FIXED_COST_ACCRUAL = 'TaskBaseline10FixedCostAccrual';
    const TASK_BASELINE10_DELIVERABLE_START = 'TaskBaseline10DeliverableStart';
    const TASK_BASELINE10_DELIVERABLE_FINISH = 'TaskBaseline10DeliverableFinish';
    const TASK_BASELINE10_BUDGET_WORK = 'TaskBaseline10BudgetWork';
    const TASK_BASELINE10_BUDGET_COST = 'TaskBaseline10BudgetCost';
    const TASK_RECALC_FLAGS = 'TaskRecalcFlags';
    const TASK_DELIVERABLE_NAME = 'TaskDeliverableName';
    const TASK_ACTIVE = 'TaskActive';
    const TASK_MANUAL = 'TaskManual';
    const TASK_PLACEHOLDER = 'TaskPlaceholder';
    const TASK_WARNING = 'TaskWarning';
    const TASK_START_TEXT = 'TaskStartText';
    const TASK_FINISH_TEXT = 'TaskFinishText';
    const TASK_DURATION_TEXT = 'TaskDurationText';
    const TASK_IS_START_VALID = 'TaskIsStartValid';
    const TASK_IS_FINISH_VALID = 'TaskIsFinishValid';
    const TASK_IS_DURATION_VALID = 'TaskIsDurationValid';
    const TASK_BASELINE_START_TEXT = 'TaskBaselineStartText';
    const TASK_BASELINE_FINISH_TEXT = 'TaskBaselineFinishText';
    const TASK_BASELINE_DURATION_TEXT = 'TaskBaselineDurationText';
    const TASK_BASELINE1_START_TEXT = 'TaskBaseline1StartText';
    const TASK_BASELINE1_FINISH_TEXT = 'TaskBaseline1FinishText';
    const TASK_BASELINE1_DURATION_TEXT = 'TaskBaseline1DurationText';
    const TASK_BASELINE2_START_TEXT = 'TaskBaseline2StartText';
    const TASK_BASELINE2_FINISH_TEXT = 'TaskBaseline2FinishText';
    const TASK_BASELINE2_DURATION_TEXT = 'TaskBaseline2DurationText';
    const TASK_BASELINE3_START_TEXT = 'TaskBaseline3StartText';
    const TASK_BASELINE3_FINISH_TEXT = 'TaskBaseline3FinishText';
    const TASK_BASELINE3_DURATION_TEXT = 'TaskBaseline3DurationText';
    const TASK_BASELINE4_START_TEXT = 'TaskBaseline4StartText';
    const TASK_BASELINE4_FINISH_TEXT = 'TaskBaseline4FinishText';
    const TASK_BASELINE4_DURATION_TEXT = 'TaskBaseline4DurationText';
    const TASK_BASELINE5_START_TEXT = 'TaskBaseline5StartText';
    const TASK_BASELINE5_FINISH_TEXT = 'TaskBaseline5FinishText';
    const TASK_BASELINE5_DURATION_TEXT = 'TaskBaseline5DurationText';
    const TASK_BASELINE6_START_TEXT = 'TaskBaseline6StartText';
    const TASK_BASELINE6_FINISH_TEXT = 'TaskBaseline6FinishText';
    const TASK_BASELINE6_DURATION_TEXT = 'TaskBaseline6DurationText';
    const TASK_BASELINE7_START_TEXT = 'TaskBaseline7StartText';
    const TASK_BASELINE7_FINISH_TEXT = 'TaskBaseline7FinishText';
    const TASK_BASELINE7_DURATION_TEXT = 'TaskBaseline7DurationText';
    const TASK_BASELINE8_START_TEXT = 'TaskBaseline8StartText';
    const TASK_BASELINE8_FINISH_TEXT = 'TaskBaseline8FinishText';
    const TASK_BASELINE8_DURATION_TEXT = 'TaskBaseline8DurationText';
    const TASK_BASELINE9_START_TEXT = 'TaskBaseline9StartText';
    const TASK_BASELINE9_FINISH_TEXT = 'TaskBaseline9FinishText';
    const TASK_BASELINE9_DURATION_TEXT = 'TaskBaseline9DurationText';
    const TASK_BASELINE10_START_TEXT = 'TaskBaseline10StartText';
    const TASK_BASELINE10_FINISH_TEXT = 'TaskBaseline10FinishText';
    const TASK_BASELINE10_DURATION_TEXT = 'TaskBaseline10DurationText';
    const TASK_IGNORE_WARNINGS = 'TaskIgnoreWarnings';
    const TASK_ASSIGNMENT_PEAK_UNITS = 'TaskAssignmentPeakUnits';
    const TASK_SCHEDULED_START = 'TaskScheduledStart';
    const TASK_SCHEDULED_FINISH = 'TaskScheduledFinish';
    const TASK_SCHEDULED_DURATION = 'TaskScheduledDuration';
    const TASK_PATH_DRIVING_PREDECESSOR = 'TaskPathDrivingPredecessor';
    const TASK_PATH_PREDECESSOR = 'TaskPathPredecessor';
    const TASK_PATH_DRIVEN_SUCCESSOR = 'TaskPathDrivenSuccessor';
    const TASK_PATH_SUCCESSOR = 'TaskPathSuccessor';
    const TASK_SUMMARY_NAME = 'TaskSummaryName';
    const RESOURCE_ID = 'ResourceID';
    const RESOURCE_NAME = 'ResourceName';
    const RESOURCE_INITIALS = 'ResourceInitials';
    const RESOURCE_GROUP = 'ResourceGroup';
    const RESOURCE_MAX_UNITS = 'ResourceMaxUnits';
    const RESOURCE_BASE_CALENDAR = 'ResourceBaseCalendar';
    const RESOURCE_STANDARD_RATE = 'ResourceStandardRate';
    const RESOURCE_OVERTIME_RATE = 'ResourceOvertimeRate';
    const RESOURCE_TEXT1 = 'ResourceText1';
    const RESOURCE_TEXT2 = 'ResourceText2';
    const RESOURCE_CODE = 'ResourceCode';
    const RESOURCE_ACTUAL_COST = 'ResourceActualCost';
    const RESOURCE_COST = 'ResourceCost';
    const RESOURCE_WORK = 'ResourceWork';
    const RESOURCE_ACTUAL_WORK = 'ResourceActualWork';
    const RESOURCE_BASELINE_WORK = 'ResourceBaselineWork';
    const RESOURCE_OVERTIME_WORK = 'ResourceOvertimeWork';
    const RESOURCE_BASELINE_COST = 'ResourceBaselineCost';
    const RESOURCE_COST_PER_USE = 'ResourceCostPerUse';
    const RESOURCE_ACCRUE_AT = 'ResourceAccrueAt';
    const RESOURCE_NOTES = 'ResourceNotes';
    const RESOURCE_REMAINING_COST = 'ResourceRemainingCost';
    const RESOURCE_REMAINING_WORK = 'ResourceRemainingWork';
    const RESOURCE_WORK_VARIANCE = 'ResourceWorkVariance';
    const RESOURCE_COST_VARIANCE = 'ResourceCostVariance';
    const RESOURCE_OVERALLOCATED = 'ResourceOverallocated';
    const RESOURCE_PEAK_UNITS = 'ResourcePeakUnits';
    const RESOURCE_UNIQUE_ID = 'ResourceUniqueID';
    const RESOURCE_SHEET_NOTES = 'ResourceSheetNotes';
    const RESOURCE_PERCENT_WORK_COMPLETE = 'ResourcePercentWorkComplete';
    const RESOURCE_TEXT3 = 'ResourceText3';
    const RESOURCE_TEXT4 = 'ResourceText4';
    const RESOURCE_TEXT5 = 'ResourceText5';
    const RESOURCE_OBJECTS = 'ResourceObjects';
    const RESOURCE_LINKED_FIELDS = 'ResourceLinkedFields';
    const RESOURCE_E_MAIL_ADDRESS = 'ResourceEMailAddress';
    const RESOURCE_REGULAR_WORK = 'ResourceRegularWork';
    const RESOURCE_ACTUAL_OVERTIME_WORK = 'ResourceActualOvertimeWork';
    const RESOURCE_REMAINING_OVERTIME_WORK = 'ResourceRemainingOvertimeWork';
    const RESOURCE_OVERTIME_COST = 'ResourceOvertimeCost';
    const RESOURCE_ACTUAL_OVERTIME_COST = 'ResourceActualOvertimeCost';
    const RESOURCE_REMAINING_OVERTIME_COST = 'ResourceRemainingOvertimeCost';
    const RESOURCE_BCWS = 'ResourceBCWS';
    const RESOURCE_BCWP = 'ResourceBCWP';
    const RESOURCE_ACWP = 'ResourceACWP';
    const RESOURCE_SV = 'ResourceSV';
    const RESOURCE_AVAILABLE_FROM = 'ResourceAvailableFrom';
    const RESOURCE_AVAILABLE_TO = 'ResourceAvailableTo';
    const RESOURCE_INDICATORS = 'ResourceIndicators';
    const RESOURCE_TEXT6 = 'ResourceText6';
    const RESOURCE_TEXT7 = 'ResourceText7';
    const RESOURCE_TEXT8 = 'ResourceText8';
    const RESOURCE_TEXT9 = 'ResourceText9';
    const RESOURCE_TEXT10 = 'ResourceText10';
    const RESOURCE_START1 = 'ResourceStart1';
    const RESOURCE_START2 = 'ResourceStart2';
    const RESOURCE_START3 = 'ResourceStart3';
    const RESOURCE_START4 = 'ResourceStart4';
    const RESOURCE_START5 = 'ResourceStart5';
    const RESOURCE_FINISH1 = 'ResourceFinish1';
    const RESOURCE_FINISH2 = 'ResourceFinish2';
    const RESOURCE_FINISH3 = 'ResourceFinish3';
    const RESOURCE_FINISH4 = 'ResourceFinish4';
    const RESOURCE_FINISH5 = 'ResourceFinish5';
    const RESOURCE_NUMBER1 = 'ResourceNumber1';
    const RESOURCE_NUMBER2 = 'ResourceNumber2';
    const RESOURCE_NUMBER3 = 'ResourceNumber3';
    const RESOURCE_NUMBER4 = 'ResourceNumber4';
    const RESOURCE_NUMBER5 = 'ResourceNumber5';
    const RESOURCE_DURATION1 = 'ResourceDuration1';
    const RESOURCE_DURATION2 = 'ResourceDuration2';
    const RESOURCE_DURATION3 = 'ResourceDuration3';
    const RESOURCE_COST1 = 'ResourceCost1';
    const RESOURCE_COST2 = 'ResourceCost2';
    const RESOURCE_COST3 = 'ResourceCost3';
    const RESOURCE_FLAG10 = 'ResourceFlag10';
    const RESOURCE_FLAG1 = 'ResourceFlag1';
    const RESOURCE_FLAG2 = 'ResourceFlag2';
    const RESOURCE_FLAG3 = 'ResourceFlag3';
    const RESOURCE_FLAG4 = 'ResourceFlag4';
    const RESOURCE_FLAG5 = 'ResourceFlag5';
    const RESOURCE_FLAG6 = 'ResourceFlag6';
    const RESOURCE_FLAG7 = 'ResourceFlag7';
    const RESOURCE_FLAG8 = 'ResourceFlag8';
    const RESOURCE_FLAG9 = 'ResourceFlag9';
    const RESOURCE_HYPERLINK = 'ResourceHyperlink';
    const RESOURCE_HYPERLINK_ADDRESS = 'ResourceHyperlinkAddress';
    const RESOURCE_HYPERLINK_SUB_ADDRESS = 'ResourceHyperlinkSubAddress';
    const RESOURCE_HYPERLINK_HREF = 'ResourceHyperlinkHref';
    const RESOURCE_IS_ASSIGNMENT = 'ResourceIsAssignment';
    const RESOURCE_TASK_SUMMARY_NAME = 'ResourceTaskSummaryName';
    const RESOURCE_CAN_LEVEL = 'ResourceCanLevel';
    const RESOURCE_WORK_CONTOUR = 'ResourceWorkContour';
    const RESOURCE_COST4 = 'ResourceCost4';
    const RESOURCE_COST5 = 'ResourceCost5';
    const RESOURCE_COST6 = 'ResourceCost6';
    const RESOURCE_COST7 = 'ResourceCost7';
    const RESOURCE_COST8 = 'ResourceCost8';
    const RESOURCE_COST9 = 'ResourceCost9';
    const RESOURCE_COST10 = 'ResourceCost10';
    const RESOURCE_DATE1 = 'ResourceDate1';
    const RESOURCE_DATE2 = 'ResourceDate2';
    const RESOURCE_DATE3 = 'ResourceDate3';
    const RESOURCE_DATE4 = 'ResourceDate4';
    const RESOURCE_DATE5 = 'ResourceDate5';
    const RESOURCE_DATE6 = 'ResourceDate6';
    const RESOURCE_DATE7 = 'ResourceDate7';
    const RESOURCE_DATE8 = 'ResourceDate8';
    const RESOURCE_DATE9 = 'ResourceDate9';
    const RESOURCE_DATE10 = 'ResourceDate10';
    const RESOURCE_DURATION4 = 'ResourceDuration4';
    const RESOURCE_DURATION5 = 'ResourceDuration5';
    const RESOURCE_DURATION6 = 'ResourceDuration6';
    const RESOURCE_DURATION7 = 'ResourceDuration7';
    const RESOURCE_DURATION8 = 'ResourceDuration8';
    const RESOURCE_DURATION9 = 'ResourceDuration9';
    const RESOURCE_DURATION10 = 'ResourceDuration10';
    const RESOURCE_FINISH6 = 'ResourceFinish6';
    const RESOURCE_FINISH7 = 'ResourceFinish7';
    const RESOURCE_FINISH8 = 'ResourceFinish8';
    const RESOURCE_FINISH9 = 'ResourceFinish9';
    const RESOURCE_FINISH10 = 'ResourceFinish10';
    const RESOURCE_FLAG11 = 'ResourceFlag11';
    const RESOURCE_FLAG12 = 'ResourceFlag12';
    const RESOURCE_FLAG13 = 'ResourceFlag13';
    const RESOURCE_FLAG14 = 'ResourceFlag14';
    const RESOURCE_FLAG15 = 'ResourceFlag15';
    const RESOURCE_FLAG16 = 'ResourceFlag16';
    const RESOURCE_FLAG17 = 'ResourceFlag17';
    const RESOURCE_FLAG18 = 'ResourceFlag18';
    const RESOURCE_FLAG19 = 'ResourceFlag19';
    const RESOURCE_FLAG20 = 'ResourceFlag20';
    const RESOURCE_NUMBER6 = 'ResourceNumber6';
    const RESOURCE_NUMBER7 = 'ResourceNumber7';
    const RESOURCE_NUMBER8 = 'ResourceNumber8';
    const RESOURCE_NUMBER9 = 'ResourceNumber9';
    const RESOURCE_NUMBER10 = 'ResourceNumber10';
    const RESOURCE_NUMBER11 = 'ResourceNumber11';
    const RESOURCE_NUMBER12 = 'ResourceNumber12';
    const RESOURCE_NUMBER13 = 'ResourceNumber13';
    const RESOURCE_NUMBER14 = 'ResourceNumber14';
    const RESOURCE_NUMBER15 = 'ResourceNumber15';
    const RESOURCE_NUMBER16 = 'ResourceNumber16';
    const RESOURCE_NUMBER17 = 'ResourceNumber17';
    const RESOURCE_NUMBER18 = 'ResourceNumber18';
    const RESOURCE_NUMBER19 = 'ResourceNumber19';
    const RESOURCE_NUMBER20 = 'ResourceNumber20';
    const RESOURCE_START6 = 'ResourceStart6';
    const RESOURCE_START7 = 'ResourceStart7';
    const RESOURCE_START8 = 'ResourceStart8';
    const RESOURCE_START9 = 'ResourceStart9';
    const RESOURCE_START10 = 'ResourceStart10';
    const RESOURCE_TEXT11 = 'ResourceText11';
    const RESOURCE_TEXT12 = 'ResourceText12';
    const RESOURCE_TEXT13 = 'ResourceText13';
    const RESOURCE_TEXT14 = 'ResourceText14';
    const RESOURCE_TEXT15 = 'ResourceText15';
    const RESOURCE_TEXT16 = 'ResourceText16';
    const RESOURCE_TEXT17 = 'ResourceText17';
    const RESOURCE_TEXT18 = 'ResourceText18';
    const RESOURCE_TEXT19 = 'ResourceText19';
    const RESOURCE_TEXT20 = 'ResourceText20';
    const RESOURCE_TEXT21 = 'ResourceText21';
    const RESOURCE_TEXT22 = 'ResourceText22';
    const RESOURCE_TEXT23 = 'ResourceText23';
    const RESOURCE_TEXT24 = 'ResourceText24';
    const RESOURCE_TEXT25 = 'ResourceText25';
    const RESOURCE_TEXT26 = 'ResourceText26';
    const RESOURCE_TEXT27 = 'ResourceText27';
    const RESOURCE_TEXT28 = 'ResourceText28';
    const RESOURCE_TEXT29 = 'ResourceText29';
    const RESOURCE_TEXT30 = 'ResourceText30';
    const RESOURCE_PHONETICS = 'ResourcePhonetics';
    const RESOURCE_INDEX = 'ResourceIndex';
    const RESOURCE_ASSIGNMENT_DELAY = 'ResourceAssignmentDelay';
    const RESOURCE_ASSIGNMENT_UNITS = 'ResourceAssignmentUnits';
    const RESOURCE_BASELINE_START = 'ResourceBaselineStart';
    const RESOURCE_BASELINE_FINISH = 'ResourceBaselineFinish';
    const RESOURCE_CONFIRMED = 'ResourceConfirmed';
    const RESOURCE_FINISH = 'ResourceFinish';
    const RESOURCE_LEVELING_DELAY = 'ResourceLevelingDelay';
    const RESOURCE_RESPONSE_PENDING = 'ResourceResponsePending';
    const RESOURCE_START = 'ResourceStart';
    const RESOURCE_TEAM_STATUS_PENDING = 'ResourceTeamStatusPending';
    const RESOURCE_UPDATE_NEEDED = 'ResourceUpdateNeeded';
    const RESOURCE_CV = 'ResourceCV';
    const RESOURCE_COST_RATE_TABLE = 'ResourceCostRateTable';
    const RESOURCE_WORKGROUP = 'ResourceWorkgroup';
    const RESOURCE_PROJECT = 'ResourceProject';
    const RESOURCE_OUTLINE_CODE1 = 'ResourceOutlineCode1';
    const RESOURCE_OUTLINE_CODE2 = 'ResourceOutlineCode2';
    const RESOURCE_OUTLINE_CODE3 = 'ResourceOutlineCode3';
    const RESOURCE_OUTLINE_CODE4 = 'ResourceOutlineCode4';
    const RESOURCE_OUTLINE_CODE5 = 'ResourceOutlineCode5';
    const RESOURCE_OUTLINE_CODE6 = 'ResourceOutlineCode6';
    const RESOURCE_OUTLINE_CODE7 = 'ResourceOutlineCode7';
    const RESOURCE_OUTLINE_CODE8 = 'ResourceOutlineCode8';
    const RESOURCE_OUTLINE_CODE9 = 'ResourceOutlineCode9';
    const RESOURCE_OUTLINE_CODE10 = 'ResourceOutlineCode10';
    const RESOURCE_MATERIAL_LABEL = 'ResourceMaterialLabel';
    const RESOURCE_TYPE = 'ResourceType';
    const RESOURCE_VAC = 'ResourceVAC';
    const RESOURCE_GROUP_BY_SUMMARY = 'ResourceGroupBySummary';
    const RESOURCE_WINDOWS_USER_ACCOUNT = 'ResourceWindowsUserAccount';
    const RESOURCE_HYPERLINK_SCREEN_TIP = 'ResourceHyperlinkScreenTip';
    const RESOURCE_WBS = 'ResourceWBS';
    const RESOURCE_BASELINE1_WORK = 'ResourceBaseline1Work';
    const RESOURCE_BASELINE1_COST = 'ResourceBaseline1Cost';
    const RESOURCE_BASELINE1_START = 'ResourceBaseline1Start';
    const RESOURCE_BASELINE1_FINISH = 'ResourceBaseline1Finish';
    const RESOURCE_BASELINE2_WORK = 'ResourceBaseline2Work';
    const RESOURCE_BASELINE2_COST = 'ResourceBaseline2Cost';
    const RESOURCE_BASELINE2_START = 'ResourceBaseline2Start';
    const RESOURCE_BASELINE2_FINISH = 'ResourceBaseline2Finish';
    const RESOURCE_BASELINE3_WORK = 'ResourceBaseline3Work';
    const RESOURCE_BASELINE3_COST = 'ResourceBaseline3Cost';
    const RESOURCE_BASELINE3_START = 'ResourceBaseline3Start';
    const RESOURCE_BASELINE3_FINISH = 'ResourceBaseline3Finish';
    const RESOURCE_BASELINE4_WORK = 'ResourceBaseline4Work';
    const RESOURCE_BASELINE4_COST = 'ResourceBaseline4Cost';
    const RESOURCE_BASELINE4_START = 'ResourceBaseline4Start';
    const RESOURCE_BASELINE4_FINISH = 'ResourceBaseline4Finish';
    const RESOURCE_BASELINE5_WORK = 'ResourceBaseline5Work';
    const RESOURCE_BASELINE5_COST = 'ResourceBaseline5Cost';
    const RESOURCE_BASELINE5_START = 'ResourceBaseline5Start';
    const RESOURCE_BASELINE5_FINISH = 'ResourceBaseline5Finish';
    const RESOURCE_BASELINE6_WORK = 'ResourceBaseline6Work';
    const RESOURCE_BASELINE6_COST = 'ResourceBaseline6Cost';
    const RESOURCE_BASELINE6_START = 'ResourceBaseline6Start';
    const RESOURCE_BASELINE6_FINISH = 'ResourceBaseline6Finish';
    const RESOURCE_BASELINE7_WORK = 'ResourceBaseline7Work';
    const RESOURCE_BASELINE7_COST = 'ResourceBaseline7Cost';
    const RESOURCE_BASELINE7_START = 'ResourceBaseline7Start';
    const RESOURCE_BASELINE7_FINISH = 'ResourceBaseline7Finish';
    const RESOURCE_BASELINE8_WORK = 'ResourceBaseline8Work';
    const RESOURCE_BASELINE8_COST = 'ResourceBaseline8Cost';
    const RESOURCE_BASELINE8_START = 'ResourceBaseline8Start';
    const RESOURCE_BASELINE8_FINISH = 'ResourceBaseline8Finish';
    const RESOURCE_BASELINE9_WORK = 'ResourceBaseline9Work';
    const RESOURCE_BASELINE9_COST = 'ResourceBaseline9Cost';
    const RESOURCE_BASELINE9_START = 'ResourceBaseline9Start';
    const RESOURCE_BASELINE9_FINISH = 'ResourceBaseline9Finish';
    const RESOURCE_BASELINE10_WORK = 'ResourceBaseline10Work';
    const RESOURCE_BASELINE10_COST = 'ResourceBaseline10Cost';
    const RESOURCE_BASELINE10_START = 'ResourceBaseline10Start';
    const RESOURCE_BASELINE10_FINISH = 'ResourceBaseline10Finish';
    const RESOURCE_ENTERPRISE_UNIQUE_ID = 'ResourceEnterpriseUniqueID';
    const RESOURCE_ENTERPRISE_COST1 = 'ResourceEnterpriseCost1';
    const RESOURCE_ENTERPRISE_COST2 = 'ResourceEnterpriseCost2';
    const RESOURCE_ENTERPRISE_COST3 = 'ResourceEnterpriseCost3';
    const RESOURCE_ENTERPRISE_COST4 = 'ResourceEnterpriseCost4';
    const RESOURCE_ENTERPRISE_COST5 = 'ResourceEnterpriseCost5';
    const RESOURCE_ENTERPRISE_COST6 = 'ResourceEnterpriseCost6';
    const RESOURCE_ENTERPRISE_COST7 = 'ResourceEnterpriseCost7';
    const RESOURCE_ENTERPRISE_COST8 = 'ResourceEnterpriseCost8';
    const RESOURCE_ENTERPRISE_COST9 = 'ResourceEnterpriseCost9';
    const RESOURCE_ENTERPRISE_COST10 = 'ResourceEnterpriseCost10';
    const RESOURCE_ENTERPRISE_DATE1 = 'ResourceEnterpriseDate1';
    const RESOURCE_ENTERPRISE_DATE2 = 'ResourceEnterpriseDate2';
    const RESOURCE_ENTERPRISE_DATE3 = 'ResourceEnterpriseDate3';
    const RESOURCE_ENTERPRISE_DATE4 = 'ResourceEnterpriseDate4';
    const RESOURCE_ENTERPRISE_DATE5 = 'ResourceEnterpriseDate5';
    const RESOURCE_ENTERPRISE_DATE6 = 'ResourceEnterpriseDate6';
    const RESOURCE_ENTERPRISE_DATE7 = 'ResourceEnterpriseDate7';
    const RESOURCE_ENTERPRISE_DATE8 = 'ResourceEnterpriseDate8';
    const RESOURCE_ENTERPRISE_DATE9 = 'ResourceEnterpriseDate9';
    const RESOURCE_ENTERPRISE_DATE10 = 'ResourceEnterpriseDate10';
    const RESOURCE_ENTERPRISE_DATE11 = 'ResourceEnterpriseDate11';
    const RESOURCE_ENTERPRISE_DATE12 = 'ResourceEnterpriseDate12';
    const RESOURCE_ENTERPRISE_DATE13 = 'ResourceEnterpriseDate13';
    const RESOURCE_ENTERPRISE_DATE14 = 'ResourceEnterpriseDate14';
    const RESOURCE_ENTERPRISE_DATE15 = 'ResourceEnterpriseDate15';
    const RESOURCE_ENTERPRISE_DATE16 = 'ResourceEnterpriseDate16';
    const RESOURCE_ENTERPRISE_DATE17 = 'ResourceEnterpriseDate17';
    const RESOURCE_ENTERPRISE_DATE18 = 'ResourceEnterpriseDate18';
    const RESOURCE_ENTERPRISE_DATE19 = 'ResourceEnterpriseDate19';
    const RESOURCE_ENTERPRISE_DATE20 = 'ResourceEnterpriseDate20';
    const RESOURCE_ENTERPRISE_DATE21 = 'ResourceEnterpriseDate21';
    const RESOURCE_ENTERPRISE_DATE22 = 'ResourceEnterpriseDate22';
    const RESOURCE_ENTERPRISE_DATE23 = 'ResourceEnterpriseDate23';
    const RESOURCE_ENTERPRISE_DATE24 = 'ResourceEnterpriseDate24';
    const RESOURCE_ENTERPRISE_DATE25 = 'ResourceEnterpriseDate25';
    const RESOURCE_ENTERPRISE_DATE26 = 'ResourceEnterpriseDate26';
    const RESOURCE_ENTERPRISE_DATE27 = 'ResourceEnterpriseDate27';
    const RESOURCE_ENTERPRISE_DATE28 = 'ResourceEnterpriseDate28';
    const RESOURCE_ENTERPRISE_DATE29 = 'ResourceEnterpriseDate29';
    const RESOURCE_ENTERPRISE_DATE30 = 'ResourceEnterpriseDate30';
    const RESOURCE_ENTERPRISE_DURATION1 = 'ResourceEnterpriseDuration1';
    const RESOURCE_ENTERPRISE_DURATION2 = 'ResourceEnterpriseDuration2';
    const RESOURCE_ENTERPRISE_DURATION3 = 'ResourceEnterpriseDuration3';
    const RESOURCE_ENTERPRISE_DURATION4 = 'ResourceEnterpriseDuration4';
    const RESOURCE_ENTERPRISE_DURATION5 = 'ResourceEnterpriseDuration5';
    const RESOURCE_ENTERPRISE_DURATION6 = 'ResourceEnterpriseDuration6';
    const RESOURCE_ENTERPRISE_DURATION7 = 'ResourceEnterpriseDuration7';
    const RESOURCE_ENTERPRISE_DURATION8 = 'ResourceEnterpriseDuration8';
    const RESOURCE_ENTERPRISE_DURATION9 = 'ResourceEnterpriseDuration9';
    const RESOURCE_ENTERPRISE_DURATION10 = 'ResourceEnterpriseDuration10';
    const RESOURCE_ENTERPRISE_FLAG1 = 'ResourceEnterpriseFlag1';
    const RESOURCE_ENTERPRISE_FLAG2 = 'ResourceEnterpriseFlag2';
    const RESOURCE_ENTERPRISE_FLAG3 = 'ResourceEnterpriseFlag3';
    const RESOURCE_ENTERPRISE_FLAG4 = 'ResourceEnterpriseFlag4';
    const RESOURCE_ENTERPRISE_FLAG5 = 'ResourceEnterpriseFlag5';
    const RESOURCE_ENTERPRISE_FLAG6 = 'ResourceEnterpriseFlag6';
    const RESOURCE_ENTERPRISE_FLAG7 = 'ResourceEnterpriseFlag7';
    const RESOURCE_ENTERPRISE_FLAG8 = 'ResourceEnterpriseFlag8';
    const RESOURCE_ENTERPRISE_FLAG9 = 'ResourceEnterpriseFlag9';
    const RESOURCE_ENTERPRISE_FLAG10 = 'ResourceEnterpriseFlag10';
    const RESOURCE_ENTERPRISE_FLAG11 = 'ResourceEnterpriseFlag11';
    const RESOURCE_ENTERPRISE_FLAG12 = 'ResourceEnterpriseFlag12';
    const RESOURCE_ENTERPRISE_FLAG13 = 'ResourceEnterpriseFlag13';
    const RESOURCE_ENTERPRISE_FLAG14 = 'ResourceEnterpriseFlag14';
    const RESOURCE_ENTERPRISE_FLAG15 = 'ResourceEnterpriseFlag15';
    const RESOURCE_ENTERPRISE_FLAG16 = 'ResourceEnterpriseFlag16';
    const RESOURCE_ENTERPRISE_FLAG17 = 'ResourceEnterpriseFlag17';
    const RESOURCE_ENTERPRISE_FLAG18 = 'ResourceEnterpriseFlag18';
    const RESOURCE_ENTERPRISE_FLAG19 = 'ResourceEnterpriseFlag19';
    const RESOURCE_ENTERPRISE_FLAG20 = 'ResourceEnterpriseFlag20';
    const RESOURCE_ENTERPRISE_NUMBER1 = 'ResourceEnterpriseNumber1';
    const RESOURCE_ENTERPRISE_NUMBER2 = 'ResourceEnterpriseNumber2';
    const RESOURCE_ENTERPRISE_NUMBER3 = 'ResourceEnterpriseNumber3';
    const RESOURCE_ENTERPRISE_NUMBER4 = 'ResourceEnterpriseNumber4';
    const RESOURCE_ENTERPRISE_NUMBER5 = 'ResourceEnterpriseNumber5';
    const RESOURCE_ENTERPRISE_NUMBER6 = 'ResourceEnterpriseNumber6';
    const RESOURCE_ENTERPRISE_NUMBER7 = 'ResourceEnterpriseNumber7';
    const RESOURCE_ENTERPRISE_NUMBER8 = 'ResourceEnterpriseNumber8';
    const RESOURCE_ENTERPRISE_NUMBER9 = 'ResourceEnterpriseNumber9';
    const RESOURCE_ENTERPRISE_NUMBER10 = 'ResourceEnterpriseNumber10';
    const RESOURCE_ENTERPRISE_NUMBER11 = 'ResourceEnterpriseNumber11';
    const RESOURCE_ENTERPRISE_NUMBER12 = 'ResourceEnterpriseNumber12';
    const RESOURCE_ENTERPRISE_NUMBER13 = 'ResourceEnterpriseNumber13';
    const RESOURCE_ENTERPRISE_NUMBER14 = 'ResourceEnterpriseNumber14';
    const RESOURCE_ENTERPRISE_NUMBER15 = 'ResourceEnterpriseNumber15';
    const RESOURCE_ENTERPRISE_NUMBER16 = 'ResourceEnterpriseNumber16';
    const RESOURCE_ENTERPRISE_NUMBER17 = 'ResourceEnterpriseNumber17';
    const RESOURCE_ENTERPRISE_NUMBER18 = 'ResourceEnterpriseNumber18';
    const RESOURCE_ENTERPRISE_NUMBER19 = 'ResourceEnterpriseNumber19';
    const RESOURCE_ENTERPRISE_NUMBER20 = 'ResourceEnterpriseNumber20';
    const RESOURCE_ENTERPRISE_NUMBER21 = 'ResourceEnterpriseNumber21';
    const RESOURCE_ENTERPRISE_NUMBER22 = 'ResourceEnterpriseNumber22';
    const RESOURCE_ENTERPRISE_NUMBER23 = 'ResourceEnterpriseNumber23';
    const RESOURCE_ENTERPRISE_NUMBER24 = 'ResourceEnterpriseNumber24';
    const RESOURCE_ENTERPRISE_NUMBER25 = 'ResourceEnterpriseNumber25';
    const RESOURCE_ENTERPRISE_NUMBER26 = 'ResourceEnterpriseNumber26';
    const RESOURCE_ENTERPRISE_NUMBER27 = 'ResourceEnterpriseNumber27';
    const RESOURCE_ENTERPRISE_NUMBER28 = 'ResourceEnterpriseNumber28';
    const RESOURCE_ENTERPRISE_NUMBER29 = 'ResourceEnterpriseNumber29';
    const RESOURCE_ENTERPRISE_NUMBER30 = 'ResourceEnterpriseNumber30';
    const RESOURCE_ENTERPRISE_NUMBER31 = 'ResourceEnterpriseNumber31';
    const RESOURCE_ENTERPRISE_NUMBER32 = 'ResourceEnterpriseNumber32';
    const RESOURCE_ENTERPRISE_NUMBER33 = 'ResourceEnterpriseNumber33';
    const RESOURCE_ENTERPRISE_NUMBER34 = 'ResourceEnterpriseNumber34';
    const RESOURCE_ENTERPRISE_NUMBER35 = 'ResourceEnterpriseNumber35';
    const RESOURCE_ENTERPRISE_NUMBER36 = 'ResourceEnterpriseNumber36';
    const RESOURCE_ENTERPRISE_NUMBER37 = 'ResourceEnterpriseNumber37';
    const RESOURCE_ENTERPRISE_NUMBER38 = 'ResourceEnterpriseNumber38';
    const RESOURCE_ENTERPRISE_NUMBER39 = 'ResourceEnterpriseNumber39';
    const RESOURCE_ENTERPRISE_NUMBER40 = 'ResourceEnterpriseNumber40';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE1 = 'ResourceEnterpriseOutlineCode1';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE2 = 'ResourceEnterpriseOutlineCode2';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE3 = 'ResourceEnterpriseOutlineCode3';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE4 = 'ResourceEnterpriseOutlineCode4';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE5 = 'ResourceEnterpriseOutlineCode5';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE6 = 'ResourceEnterpriseOutlineCode6';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE7 = 'ResourceEnterpriseOutlineCode7';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE8 = 'ResourceEnterpriseOutlineCode8';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE9 = 'ResourceEnterpriseOutlineCode9';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE10 = 'ResourceEnterpriseOutlineCode10';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE11 = 'ResourceEnterpriseOutlineCode11';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE12 = 'ResourceEnterpriseOutlineCode12';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE13 = 'ResourceEnterpriseOutlineCode13';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE14 = 'ResourceEnterpriseOutlineCode14';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE15 = 'ResourceEnterpriseOutlineCode15';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE16 = 'ResourceEnterpriseOutlineCode16';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE17 = 'ResourceEnterpriseOutlineCode17';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE18 = 'ResourceEnterpriseOutlineCode18';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE19 = 'ResourceEnterpriseOutlineCode19';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE20 = 'ResourceEnterpriseOutlineCode20';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE21 = 'ResourceEnterpriseOutlineCode21';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE22 = 'ResourceEnterpriseOutlineCode22';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE23 = 'ResourceEnterpriseOutlineCode23';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE24 = 'ResourceEnterpriseOutlineCode24';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE25 = 'ResourceEnterpriseOutlineCode25';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE26 = 'ResourceEnterpriseOutlineCode26';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE27 = 'ResourceEnterpriseOutlineCode27';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE28 = 'ResourceEnterpriseOutlineCode28';
    const RESOURCE_ENTERPRISE_OUTLINE_CODE29 = 'ResourceEnterpriseOutlineCode29';
    const RESOURCE_ENTERPRISE_RBS = 'ResourceEnterpriseRBS';
    const RESOURCE_ENTERPRISE_TEXT1 = 'ResourceEnterpriseText1';
    const RESOURCE_ENTERPRISE_TEXT2 = 'ResourceEnterpriseText2';
    const RESOURCE_ENTERPRISE_TEXT3 = 'ResourceEnterpriseText3';
    const RESOURCE_ENTERPRISE_TEXT4 = 'ResourceEnterpriseText4';
    const RESOURCE_ENTERPRISE_TEXT5 = 'ResourceEnterpriseText5';
    const RESOURCE_ENTERPRISE_TEXT6 = 'ResourceEnterpriseText6';
    const RESOURCE_ENTERPRISE_TEXT7 = 'ResourceEnterpriseText7';
    const RESOURCE_ENTERPRISE_TEXT8 = 'ResourceEnterpriseText8';
    const RESOURCE_ENTERPRISE_TEXT9 = 'ResourceEnterpriseText9';
    const RESOURCE_ENTERPRISE_TEXT10 = 'ResourceEnterpriseText10';
    const RESOURCE_ENTERPRISE_TEXT11 = 'ResourceEnterpriseText11';
    const RESOURCE_ENTERPRISE_TEXT12 = 'ResourceEnterpriseText12';
    const RESOURCE_ENTERPRISE_TEXT13 = 'ResourceEnterpriseText13';
    const RESOURCE_ENTERPRISE_TEXT14 = 'ResourceEnterpriseText14';
    const RESOURCE_ENTERPRISE_TEXT15 = 'ResourceEnterpriseText15';
    const RESOURCE_ENTERPRISE_TEXT16 = 'ResourceEnterpriseText16';
    const RESOURCE_ENTERPRISE_TEXT17 = 'ResourceEnterpriseText17';
    const RESOURCE_ENTERPRISE_TEXT18 = 'ResourceEnterpriseText18';
    const RESOURCE_ENTERPRISE_TEXT19 = 'ResourceEnterpriseText19';
    const RESOURCE_ENTERPRISE_TEXT20 = 'ResourceEnterpriseText20';
    const RESOURCE_ENTERPRISE_TEXT21 = 'ResourceEnterpriseText21';
    const RESOURCE_ENTERPRISE_TEXT22 = 'ResourceEnterpriseText22';
    const RESOURCE_ENTERPRISE_TEXT23 = 'ResourceEnterpriseText23';
    const RESOURCE_ENTERPRISE_TEXT24 = 'ResourceEnterpriseText24';
    const RESOURCE_ENTERPRISE_TEXT25 = 'ResourceEnterpriseText25';
    const RESOURCE_ENTERPRISE_TEXT26 = 'ResourceEnterpriseText26';
    const RESOURCE_ENTERPRISE_TEXT27 = 'ResourceEnterpriseText27';
    const RESOURCE_ENTERPRISE_TEXT28 = 'ResourceEnterpriseText28';
    const RESOURCE_ENTERPRISE_TEXT29 = 'ResourceEnterpriseText29';
    const RESOURCE_ENTERPRISE_TEXT30 = 'ResourceEnterpriseText30';
    const RESOURCE_ENTERPRISE_TEXT31 = 'ResourceEnterpriseText31';
    const RESOURCE_ENTERPRISE_TEXT32 = 'ResourceEnterpriseText32';
    const RESOURCE_ENTERPRISE_TEXT33 = 'ResourceEnterpriseText33';
    const RESOURCE_ENTERPRISE_TEXT34 = 'ResourceEnterpriseText34';
    const RESOURCE_ENTERPRISE_TEXT35 = 'ResourceEnterpriseText35';
    const RESOURCE_ENTERPRISE_TEXT36 = 'ResourceEnterpriseText36';
    const RESOURCE_ENTERPRISE_TEXT37 = 'ResourceEnterpriseText37';
    const RESOURCE_ENTERPRISE_TEXT38 = 'ResourceEnterpriseText38';
    const RESOURCE_ENTERPRISE_TEXT39 = 'ResourceEnterpriseText39';
    const RESOURCE_ENTERPRISE_TEXT40 = 'ResourceEnterpriseText40';
    const RESOURCE_ENTERPRISE_GENERIC = 'ResourceEnterpriseGeneric';
    const RESOURCE_ENTERPRISE_BASE_CALENDAR = 'ResourceEnterpriseBaseCalendar';
    const RESOURCE_ENTERPRISE_REQUIRED_VALUES = 'ResourceEnterpriseRequiredValues';
    const RESOURCE_ENTERPRISE_NAME_USED = 'ResourceEnterpriseNameUsed';
    const RESOURCE_DEMANDED_REQUESTED = 'ResourceDemandedRequested';
    const RESOURCE_ENTERPRISE = 'ResourceEnterprise';
    const RESOURCE_ENTERPRISE_IS_CHECKED_OUT = 'ResourceEnterpriseIsCheckedOut';
    const RESOURCE_ENTERPRISE_CHECKED_OUT_BY = 'ResourceEnterpriseCheckedOutBy';
    const RESOURCE_ENTERPRISE_LAST_MODIFIED_DATE = 'ResourceEnterpriseLastModifiedDate';
    const RESOURCE_ENTERPRISE_TEAM_MEMBER = 'ResourceEnterpriseTeamMember';
    const RESOURCE_ENTERPRISE_INACTIVE = 'ResourceEnterpriseInactive';
    const RESOURCE_BOOKING_TYPE = 'ResourceBookingType';
    const RESOURCE_ENTERPRISE_MULTI_VALUE20 = 'ResourceEnterpriseMultiValue20';
    const RESOURCE_ENTERPRISE_MULTI_VALUE21 = 'ResourceEnterpriseMultiValue21';
    const RESOURCE_ENTERPRISE_MULTI_VALUE22 = 'ResourceEnterpriseMultiValue22';
    const RESOURCE_ENTERPRISE_MULTI_VALUE23 = 'ResourceEnterpriseMultiValue23';
    const RESOURCE_ENTERPRISE_MULTI_VALUE24 = 'ResourceEnterpriseMultiValue24';
    const RESOURCE_ENTERPRISE_MULTI_VALUE25 = 'ResourceEnterpriseMultiValue25';
    const RESOURCE_ENTERPRISE_MULTI_VALUE26 = 'ResourceEnterpriseMultiValue26';
    const RESOURCE_ENTERPRISE_MULTI_VALUE27 = 'ResourceEnterpriseMultiValue27';
    const RESOURCE_ENTERPRISE_MULTI_VALUE28 = 'ResourceEnterpriseMultiValue28';
    const RESOURCE_ENTERPRISE_MULTI_VALUE29 = 'ResourceEnterpriseMultiValue29';
    const RESOURCE_ACTUAL_WORK_PROTECTED = 'ResourceActualWorkProtected';
    const RESOURCE_ACTUAL_OVERTIME_WORK_PROTECTED = 'ResourceActualOvertimeWorkProtected';
    const RESOURCE_CREATED = 'ResourceCreated';
    const RESOURCE_GUID = 'ResourceGuid';
    const RESOURCE_CALENDAR_GUID = 'ResourceCalendarGuid';
    const RESOURCE_TYPE_IS_COST = 'ResourceTypeIsCost';
    const RESOURCE_ERROR_MESSAGE = 'ResourceErrorMessage';
    const RESOURCE_DEFAULT_ASSIGNMENT_OWNER = 'ResourceDefaultAssignmentOwner';
    const RESOURCE_BUDGET = 'ResourceBudget';
    const RESOURCE_BUDGET_WORK = 'ResourceBudgetWork';
    const RESOURCE_BUDGET_COST = 'ResourceBudgetCost';
    const IMPORT_RESOURCE = 'ImportResource';
    const RESOURCE_BASELINE_BUDGET_WORK = 'ResourceBaselineBudgetWork';
    const RESOURCE_BASELINE_BUDGET_COST = 'ResourceBaselineBudgetCost';
    const RESOURCE_BASELINE1_BUDGET_WORK = 'ResourceBaseline1BudgetWork';
    const RESOURCE_BASELINE1_BUDGET_COST = 'ResourceBaseline1BudgetCost';
    const RESOURCE_BASELINE2_BUDGET_WORK = 'ResourceBaseline2BudgetWork';
    const RESOURCE_BASELINE2_BUDGET_COST = 'ResourceBaseline2BudgetCost';
    const RESOURCE_BASELINE3_BUDGET_WORK = 'ResourceBaseline3BudgetWork';
    const RESOURCE_BASELINE3_BUDGET_COST = 'ResourceBaseline3BudgetCost';
    const RESOURCE_BASELINE4_BUDGET_WORK = 'ResourceBaseline4BudgetWork';
    const RESOURCE_BASELINE4_BUDGET_COST = 'ResourceBaseline4BudgetCost';
    const RESOURCE_BASELINE5_BUDGET_WORK = 'ResourceBaseline5BudgetWork';
    const RESOURCE_BASELINE5_BUDGET_COST = 'ResourceBaseline5BudgetCost';
    const RESOURCE_BASELINE6_BUDGET_WORK = 'ResourceBaseline6BudgetWork';
    const RESOURCE_BASELINE6_BUDGET_COST = 'ResourceBaseline6BudgetCost';
    const RESOURCE_BASELINE7_BUDGET_WORK = 'ResourceBaseline7BudgetWork';
    const RESOURCE_BASELINE7_BUDGET_COST = 'ResourceBaseline7BudgetCost';
    const RESOURCE_BASELINE8_BUDGET_WORK = 'ResourceBaseline8BudgetWork';
    const RESOURCE_BASELINE8_BUDGET_COST = 'ResourceBaseline8BudgetCost';
    const RESOURCE_BASELINE9_BUDGET_WORK = 'ResourceBaseline9BudgetWork';
    const RESOURCE_BASELINE9_BUDGET_COST = 'ResourceBaseline9BudgetCost';
    const RESOURCE_BASELINE10_BUDGET_WORK = 'ResourceBaseline10BudgetWork';
    const RESOURCE_BASELINE10_BUDGET_COST = 'ResourceBaseline10BudgetCost';
    const RESOURCE_IS_TEAM = 'ResourceIsTeam';
    const RESOURCE_COST_CENTER = 'ResourceCostCenter';
    const RESOURCE_ASSIGNMENT_BASE_LINE_WORK = 'ResourceAssignmentBaseLineWork';
    const RESOURCE_ASSIGNMENT_BASE_LINE_COST = 'ResourceAssignmentBaseLineCost';
    const RESOURCE_ASSIGNMENT_BASE_LINE_START = 'ResourceAssignmentBaseLineStart';
    const RESOURCE_ASSIGNMENT_BASE_LINE_FINISH = 'ResourceAssignmentBaseLineFinish';
    const RESOURCE_ASSIGNMENT_BASE_LINE_COST_PER_USE = 'ResourceAssignmentBaseLineCostPerUse';
    const RESOURCE_ASSIGNMENT_GUID = 'ResourceAssignmentGuid';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNDEFINED,
            self::TASK_WORK,
            self::TASK_BASELINE_WORK,
            self::TASK_ACTUAL_WORK,
            self::TASK_WORK_VARIANCE,
            self::TASK_REMAINING_WORK,
            self::TASK_COST,
            self::TASK_BASELINE_COST,
            self::TASK_ACTUAL_COST,
            self::TASK_FIXED_COST,
            self::TASK_COST_VARIANCE,
            self::TASK_REMAINING_COST,
            self::TASK_BCWP,
            self::TASK_BCWS,
            self::TASK_SV,
            self::TASK_NAME,
            self::TASK_NOTES,
            self::TASK_WBS,
            self::TASK_CONSTRAINT_TYPE,
            self::TASK_CONSTRAINT_DATE,
            self::TASK_CRITICAL,
            self::TASK_LEVEL_DELAY,
            self::TASK_FREE_SLACK,
            self::TASK_TOTAL_SLACK,
            self::TASK_ID,
            self::TASK_MILESTONE,
            self::TASK_PRIORITY,
            self::TASK_SUBPROJECT,
            self::TASK_BASELINE_DURATION,
            self::TASK_ACTUAL_DURATION,
            self::TASK_DURATION,
            self::TASK_DURATION_VARIANCE,
            self::TASK_REMAINING_DURATION,
            self::TASK_PERCENT_COMPLETE,
            self::TASK_PERCENT_WORK_COMPLETE,
            self::TASK_FIXED_DURATION,
            self::TASK_START,
            self::TASK_FINISH,
            self::TASK_EARLY_START,
            self::TASK_EARLY_FINISH,
            self::TASK_LATE_START,
            self::TASK_LATE_FINISH,
            self::TASK_ACTUAL_START,
            self::TASK_ACTUAL_FINISH,
            self::TASK_BASELINE_START,
            self::TASK_BASELINE_FINISH,
            self::TASK_START_VARIANCE,
            self::TASK_FINISH_VARIANCE,
            self::TASK_PREDECESSORS,
            self::TASK_SUCCESSORS,
            self::TASK_RESOURCE_NAMES,
            self::TASK_RESOURCE_INITIALS,
            self::TASK_TEXT1,
            self::TASK_START1,
            self::TASK_FINISH1,
            self::TASK_TEXT2,
            self::TASK_START2,
            self::TASK_FINISH2,
            self::TASK_TEXT3,
            self::TASK_START3,
            self::TASK_FINISH3,
            self::TASK_TEXT4,
            self::TASK_START4,
            self::TASK_FINISH4,
            self::TASK_TEXT5,
            self::TASK_START5,
            self::TASK_FINISH5,
            self::TASK_TEXT6,
            self::TASK_TEXT7,
            self::TASK_TEXT8,
            self::TASK_TEXT9,
            self::TASK_TEXT10,
            self::TASK_MARKED,
            self::TASK_FLAG1,
            self::TASK_FLAG2,
            self::TASK_FLAG3,
            self::TASK_FLAG4,
            self::TASK_FLAG5,
            self::TASK_FLAG6,
            self::TASK_FLAG7,
            self::TASK_FLAG8,
            self::TASK_FLAG9,
            self::TASK_FLAG10,
            self::TASK_ROLLUP,
            self::TASK_CV,
            self::TASK_PROJECT,
            self::TASK_OUTLINE_LEVEL,
            self::TASK_UNIQUE_ID,
            self::TASK_NUMBER1,
            self::TASK_NUMBER2,
            self::TASK_NUMBER3,
            self::TASK_NUMBER4,
            self::TASK_NUMBER5,
            self::TASK_SUMMARY,
            self::TASK_CREATED,
            self::TASK_SHEET_NOTES,
            self::TASK_UNIQUE_PREDECESSORS,
            self::TASK_UNIQUE_SUCCESSORS,
            self::TASK_OBJECTS,
            self::TASK_LINKED_FIELDS,
            self::TASK_RESUME,
            self::TASK_STOP,
            self::TASK_RESUME_NO_EARLIER_THAN,
            self::TASK_OUTLINE_NUMBER,
            self::TASK_DURATION1,
            self::TASK_DURATION2,
            self::TASK_DURATION3,
            self::TASK_COST1,
            self::TASK_COST2,
            self::TASK_COST3,
            self::TASK_HIDE_BAR,
            self::TASK_CONFIRMED,
            self::TASK_UPDATE_NEEDED,
            self::TASK_CONTACT,
            self::TASK_RESOURCE_GROUP,
            self::TASK_COMPLETE_THROUGH,
            self::TASK_ACWP,
            self::TASK_TYPE,
            self::TASK_RECURRING,
            self::TASK_EFFORT_DRIVEN,
            self::TASK_PARENT_TASK,
            self::TASK_OVERTIME_WORK,
            self::TASK_ACTUAL_OVERTIME_WORK,
            self::TASK_REMAINING_OVERTIME_WORK,
            self::TASK_REGULAR_WORK,
            self::TASK_OVERTIME_COST,
            self::TASK_ACTUAL_OVERTIME_COST,
            self::TASK_REMAINING_OVERTIME_COST,
            self::TASK_FIXED_COST_ACCRUAL,
            self::TASK_INDICATORS,
            self::TASK_HYPERLINK_ID,
            self::TASK_HYPERLINK,
            self::TASK_HYPERLINK_ADDRESS,
            self::TASK_HYPERLINK_SUB_ADDRESS,
            self::TASK_HYPERLINK_HREF,
            self::TASK_IS_ASSIGNMENT,
            self::TASK_OVERALLOCATED,
            self::TASK_EXTERNAL_TASK,
            self::TASK_SUBPROJECT_READ_ONLY,
            self::TASK_RESPONSE_PENDING,
            self::TASK_TEAM_STATUS_PENDING,
            self::TASK_LEVEL_CAN_SPLIT,
            self::TASK_LEVEL_ASSIGNMENTS,
            self::TASK_WORK_CONTOUR,
            self::TASK_COST4,
            self::TASK_COST5,
            self::TASK_COST6,
            self::TASK_COST7,
            self::TASK_COST8,
            self::TASK_COST9,
            self::TASK_COST10,
            self::TASK_DATE1,
            self::TASK_DATE2,
            self::TASK_DATE3,
            self::TASK_DATE4,
            self::TASK_DATE5,
            self::TASK_DATE6,
            self::TASK_DATE7,
            self::TASK_DATE8,
            self::TASK_DATE9,
            self::TASK_DATE10,
            self::TASK_DURATION4,
            self::TASK_DURATION5,
            self::TASK_DURATION6,
            self::TASK_DURATION7,
            self::TASK_DURATION8,
            self::TASK_DURATION9,
            self::TASK_DURATION10,
            self::TASK_START6,
            self::TASK_FINISH6,
            self::TASK_START7,
            self::TASK_FINISH7,
            self::TASK_START8,
            self::TASK_FINISH8,
            self::TASK_START9,
            self::TASK_FINISH9,
            self::TASK_START10,
            self::TASK_FINISH10,
            self::TASK_FLAG11,
            self::TASK_FLAG12,
            self::TASK_FLAG13,
            self::TASK_FLAG14,
            self::TASK_FLAG15,
            self::TASK_FLAG16,
            self::TASK_FLAG17,
            self::TASK_FLAG18,
            self::TASK_FLAG19,
            self::TASK_FLAG20,
            self::TASK_NUMBER6,
            self::TASK_NUMBER7,
            self::TASK_NUMBER8,
            self::TASK_NUMBER9,
            self::TASK_NUMBER10,
            self::TASK_NUMBER11,
            self::TASK_NUMBER12,
            self::TASK_NUMBER13,
            self::TASK_NUMBER14,
            self::TASK_NUMBER15,
            self::TASK_NUMBER16,
            self::TASK_NUMBER17,
            self::TASK_NUMBER18,
            self::TASK_NUMBER19,
            self::TASK_NUMBER20,
            self::TASK_TEXT11,
            self::TASK_TEXT12,
            self::TASK_TEXT13,
            self::TASK_TEXT14,
            self::TASK_TEXT15,
            self::TASK_TEXT16,
            self::TASK_TEXT17,
            self::TASK_TEXT18,
            self::TASK_TEXT19,
            self::TASK_TEXT20,
            self::TASK_TEXT21,
            self::TASK_TEXT22,
            self::TASK_TEXT23,
            self::TASK_TEXT24,
            self::TASK_TEXT25,
            self::TASK_TEXT26,
            self::TASK_TEXT27,
            self::TASK_TEXT28,
            self::TASK_TEXT29,
            self::TASK_TEXT30,
            self::TASK_RESOURCE_PHONETICS,
            self::TASK_INDEX,
            self::TASK_ASSIGNMENT_DELAY,
            self::TASK_ASSIGNMENT_UNITS,
            self::TASK_COST_RATE_TABLE,
            self::TASK_PRELEVELED_START,
            self::TASK_PRELEVELED_FINISH,
            self::TASK_ESTIMATED,
            self::TASK_IGNORE_RESOURCE_CALENDAR,
            self::TASK_CALENDAR,
            self::TASK_DURATION1_ESTIMATED,
            self::TASK_DURATION2_ESTIMATED,
            self::TASK_DURATION3_ESTIMATED,
            self::TASK_DURATION4_ESTIMATED,
            self::TASK_DURATION5_ESTIMATED,
            self::TASK_DURATION6_ESTIMATED,
            self::TASK_DURATION7_ESTIMATED,
            self::TASK_DURATION8_ESTIMATED,
            self::TASK_DURATION9_ESTIMATED,
            self::TASK_DURATION10_ESTIMATED,
            self::TASK_BASELINE_DURATION_ESTIMATED,
            self::TASK_OUTLINE_CODE1,
            self::TASK_OUTLINE_CODE2,
            self::TASK_OUTLINE_CODE3,
            self::TASK_OUTLINE_CODE4,
            self::TASK_OUTLINE_CODE5,
            self::TASK_OUTLINE_CODE6,
            self::TASK_OUTLINE_CODE7,
            self::TASK_OUTLINE_CODE8,
            self::TASK_OUTLINE_CODE9,
            self::TASK_OUTLINE_CODE10,
            self::TASK_DEADLINE,
            self::TASK_START_SLACK,
            self::TASK_FINISH_SLACK,
            self::TASK_VAC,
            self::TASK_GROUP_BY_SUMMARY,
            self::TASK_WBS_PREDECESSORS,
            self::TASK_WBS_SUCCESSORS,
            self::TASK_RESOURCE_TYPE,
            self::TASK_HYPERLINK_SCREEN_TIP,
            self::TASK_BASE_LINE_FIXED_COST,
            self::TASK_BASELINE1_START,
            self::TASK_BASELINE1_FINISH,
            self::TASK_BASELINE1_COST,
            self::TASK_BASELINE1_WORK,
            self::TASK_BASELINE1_DURATION,
            self::TASK_BASELINE2_START,
            self::TASK_BASELINE2_FINISH,
            self::TASK_BASELINE2_COST,
            self::TASK_BASELINE2_WORK,
            self::TASK_BASELINE2_DURATION,
            self::TASK_BASELINE3_START,
            self::TASK_BASELINE3_FINISH,
            self::TASK_BASELINE3_COST,
            self::TASK_BASELINE3_WORK,
            self::TASK_BASELINE3_DURATION,
            self::TASK_BASELINE4_START,
            self::TASK_BASELINE4_FINISH,
            self::TASK_BASELINE4_COST,
            self::TASK_BASELINE4_WORK,
            self::TASK_BASELINE4_DURATION,
            self::TASK_BASELINE5_START,
            self::TASK_BASELINE5_FINISH,
            self::TASK_BASELINE5_COST,
            self::TASK_BASELINE5_WORK,
            self::TASK_BASELINE5_DURATION,
            self::TASK_CPI,
            self::TASK_SPI,
            self::TASK_CV_PERCENT,
            self::TASK_SV_PERCENT,
            self::TASK_EAC,
            self::TASK_TCPI,
            self::TASK_STATUS,
            self::TASK_BASELINE6_START,
            self::TASK_BASELINE6_FINISH,
            self::TASK_BASELINE6_COST,
            self::TASK_BASELINE6_WORK,
            self::TASK_BASELINE6_DURATION,
            self::TASK_BASELINE7_START,
            self::TASK_BASELINE7_FINISH,
            self::TASK_BASELINE7_COST,
            self::TASK_BASELINE7_WORK,
            self::TASK_BASELINE7_DURATION,
            self::TASK_BASELINE8_START,
            self::TASK_BASELINE8_FINISH,
            self::TASK_BASELINE8_COST,
            self::TASK_BASELINE8_WORK,
            self::TASK_BASELINE8_DURATION,
            self::TASK_BASELINE9_START,
            self::TASK_BASELINE9_FINISH,
            self::TASK_BASELINE9_COST,
            self::TASK_BASELINE9_WORK,
            self::TASK_BASELINE9_DURATION,
            self::TASK_BASELINE10_START,
            self::TASK_BASELINE10_FINISH,
            self::TASK_BASELINE10_COST,
            self::TASK_BASELINE10_WORK,
            self::TASK_BASELINE10_DURATION,
            self::TASK_ENTERPRISE_COST1,
            self::TASK_ENTERPRISE_COST2,
            self::TASK_ENTERPRISE_COST3,
            self::TASK_ENTERPRISE_COST4,
            self::TASK_ENTERPRISE_COST5,
            self::TASK_ENTERPRISE_COST6,
            self::TASK_ENTERPRISE_COST7,
            self::TASK_ENTERPRISE_COST8,
            self::TASK_ENTERPRISE_COST9,
            self::TASK_ENTERPRISE_COST10,
            self::TASK_ENTERPRISE_DATE1,
            self::TASK_ENTERPRISE_DATE2,
            self::TASK_ENTERPRISE_DATE3,
            self::TASK_ENTERPRISE_DATE4,
            self::TASK_ENTERPRISE_DATE5,
            self::TASK_ENTERPRISE_DATE6,
            self::TASK_ENTERPRISE_DATE7,
            self::TASK_ENTERPRISE_DATE8,
            self::TASK_ENTERPRISE_DATE9,
            self::TASK_ENTERPRISE_DATE10,
            self::TASK_ENTERPRISE_DATE11,
            self::TASK_ENTERPRISE_DATE12,
            self::TASK_ENTERPRISE_DATE13,
            self::TASK_ENTERPRISE_DATE14,
            self::TASK_ENTERPRISE_DATE15,
            self::TASK_ENTERPRISE_DATE16,
            self::TASK_ENTERPRISE_DATE17,
            self::TASK_ENTERPRISE_DATE18,
            self::TASK_ENTERPRISE_DATE19,
            self::TASK_ENTERPRISE_DATE20,
            self::TASK_ENTERPRISE_DATE21,
            self::TASK_ENTERPRISE_DATE22,
            self::TASK_ENTERPRISE_DATE23,
            self::TASK_ENTERPRISE_DATE24,
            self::TASK_ENTERPRISE_DATE25,
            self::TASK_ENTERPRISE_DATE26,
            self::TASK_ENTERPRISE_DATE27,
            self::TASK_ENTERPRISE_DATE28,
            self::TASK_ENTERPRISE_DATE29,
            self::TASK_ENTERPRISE_DATE30,
            self::TASK_ENTERPRISE_DURATION1,
            self::TASK_ENTERPRISE_DURATION2,
            self::TASK_ENTERPRISE_DURATION3,
            self::TASK_ENTERPRISE_DURATION4,
            self::TASK_ENTERPRISE_DURATION5,
            self::TASK_ENTERPRISE_DURATION6,
            self::TASK_ENTERPRISE_DURATION7,
            self::TASK_ENTERPRISE_DURATION8,
            self::TASK_ENTERPRISE_DURATION9,
            self::TASK_ENTERPRISE_DURATION10,
            self::TASK_ENTERPRISE_FLAG1,
            self::TASK_ENTERPRISE_FLAG2,
            self::TASK_ENTERPRISE_FLAG3,
            self::TASK_ENTERPRISE_FLAG4,
            self::TASK_ENTERPRISE_FLAG5,
            self::TASK_ENTERPRISE_FLAG6,
            self::TASK_ENTERPRISE_FLAG7,
            self::TASK_ENTERPRISE_FLAG8,
            self::TASK_ENTERPRISE_FLAG9,
            self::TASK_ENTERPRISE_FLAG10,
            self::TASK_ENTERPRISE_FLAG11,
            self::TASK_ENTERPRISE_FLAG12,
            self::TASK_ENTERPRISE_FLAG13,
            self::TASK_ENTERPRISE_FLAG14,
            self::TASK_ENTERPRISE_FLAG15,
            self::TASK_ENTERPRISE_FLAG16,
            self::TASK_ENTERPRISE_FLAG17,
            self::TASK_ENTERPRISE_FLAG18,
            self::TASK_ENTERPRISE_FLAG19,
            self::TASK_ENTERPRISE_FLAG20,
            self::TASK_ENTERPRISE_NUMBER1,
            self::TASK_ENTERPRISE_NUMBER2,
            self::TASK_ENTERPRISE_NUMBER3,
            self::TASK_ENTERPRISE_NUMBER4,
            self::TASK_ENTERPRISE_NUMBER5,
            self::TASK_ENTERPRISE_NUMBER6,
            self::TASK_ENTERPRISE_NUMBER7,
            self::TASK_ENTERPRISE_NUMBER8,
            self::TASK_ENTERPRISE_NUMBER9,
            self::TASK_ENTERPRISE_NUMBER10,
            self::TASK_ENTERPRISE_NUMBER11,
            self::TASK_ENTERPRISE_NUMBER12,
            self::TASK_ENTERPRISE_NUMBER13,
            self::TASK_ENTERPRISE_NUMBER14,
            self::TASK_ENTERPRISE_NUMBER15,
            self::TASK_ENTERPRISE_NUMBER16,
            self::TASK_ENTERPRISE_NUMBER17,
            self::TASK_ENTERPRISE_NUMBER18,
            self::TASK_ENTERPRISE_NUMBER19,
            self::TASK_ENTERPRISE_NUMBER20,
            self::TASK_ENTERPRISE_NUMBER21,
            self::TASK_ENTERPRISE_NUMBER22,
            self::TASK_ENTERPRISE_NUMBER23,
            self::TASK_ENTERPRISE_NUMBER24,
            self::TASK_ENTERPRISE_NUMBER25,
            self::TASK_ENTERPRISE_NUMBER26,
            self::TASK_ENTERPRISE_NUMBER27,
            self::TASK_ENTERPRISE_NUMBER28,
            self::TASK_ENTERPRISE_NUMBER29,
            self::TASK_ENTERPRISE_NUMBER30,
            self::TASK_ENTERPRISE_NUMBER31,
            self::TASK_ENTERPRISE_NUMBER32,
            self::TASK_ENTERPRISE_NUMBER33,
            self::TASK_ENTERPRISE_NUMBER34,
            self::TASK_ENTERPRISE_NUMBER35,
            self::TASK_ENTERPRISE_NUMBER36,
            self::TASK_ENTERPRISE_NUMBER37,
            self::TASK_ENTERPRISE_NUMBER38,
            self::TASK_ENTERPRISE_NUMBER39,
            self::TASK_ENTERPRISE_NUMBER40,
            self::TASK_ENTERPRISE_OUTLINE_CODE1,
            self::TASK_ENTERPRISE_OUTLINE_CODE2,
            self::TASK_ENTERPRISE_OUTLINE_CODE3,
            self::TASK_ENTERPRISE_OUTLINE_CODE4,
            self::TASK_ENTERPRISE_OUTLINE_CODE5,
            self::TASK_ENTERPRISE_OUTLINE_CODE6,
            self::TASK_ENTERPRISE_OUTLINE_CODE7,
            self::TASK_ENTERPRISE_OUTLINE_CODE8,
            self::TASK_ENTERPRISE_OUTLINE_CODE9,
            self::TASK_ENTERPRISE_OUTLINE_CODE10,
            self::TASK_ENTERPRISE_OUTLINE_CODE11,
            self::TASK_ENTERPRISE_OUTLINE_CODE12,
            self::TASK_ENTERPRISE_OUTLINE_CODE13,
            self::TASK_ENTERPRISE_OUTLINE_CODE14,
            self::TASK_ENTERPRISE_OUTLINE_CODE15,
            self::TASK_ENTERPRISE_OUTLINE_CODE16,
            self::TASK_ENTERPRISE_OUTLINE_CODE17,
            self::TASK_ENTERPRISE_OUTLINE_CODE18,
            self::TASK_ENTERPRISE_OUTLINE_CODE19,
            self::TASK_ENTERPRISE_OUTLINE_CODE20,
            self::TASK_ENTERPRISE_OUTLINE_CODE21,
            self::TASK_ENTERPRISE_OUTLINE_CODE22,
            self::TASK_ENTERPRISE_OUTLINE_CODE23,
            self::TASK_ENTERPRISE_OUTLINE_CODE24,
            self::TASK_ENTERPRISE_OUTLINE_CODE25,
            self::TASK_ENTERPRISE_OUTLINE_CODE26,
            self::TASK_ENTERPRISE_OUTLINE_CODE27,
            self::TASK_ENTERPRISE_OUTLINE_CODE28,
            self::TASK_ENTERPRISE_OUTLINE_CODE29,
            self::TASK_ENTERPRISE_OUTLINE_CODE30,
            self::TASK_ENTERPRISE_TEXT1,
            self::TASK_ENTERPRISE_TEXT2,
            self::TASK_ENTERPRISE_TEXT3,
            self::TASK_ENTERPRISE_TEXT4,
            self::TASK_ENTERPRISE_TEXT5,
            self::TASK_ENTERPRISE_TEXT6,
            self::TASK_ENTERPRISE_TEXT7,
            self::TASK_ENTERPRISE_TEXT8,
            self::TASK_ENTERPRISE_TEXT9,
            self::TASK_ENTERPRISE_TEXT10,
            self::TASK_ENTERPRISE_TEXT11,
            self::TASK_ENTERPRISE_TEXT12,
            self::TASK_ENTERPRISE_TEXT13,
            self::TASK_ENTERPRISE_TEXT14,
            self::TASK_ENTERPRISE_TEXT15,
            self::TASK_ENTERPRISE_TEXT16,
            self::TASK_ENTERPRISE_TEXT17,
            self::TASK_ENTERPRISE_TEXT18,
            self::TASK_ENTERPRISE_TEXT19,
            self::TASK_ENTERPRISE_TEXT20,
            self::TASK_ENTERPRISE_TEXT21,
            self::TASK_ENTERPRISE_TEXT22,
            self::TASK_ENTERPRISE_TEXT23,
            self::TASK_ENTERPRISE_TEXT24,
            self::TASK_ENTERPRISE_TEXT25,
            self::TASK_ENTERPRISE_TEXT26,
            self::TASK_ENTERPRISE_TEXT27,
            self::TASK_ENTERPRISE_TEXT28,
            self::TASK_ENTERPRISE_TEXT29,
            self::TASK_ENTERPRISE_TEXT30,
            self::TASK_ENTERPRISE_TEXT31,
            self::TASK_ENTERPRISE_TEXT32,
            self::TASK_ENTERPRISE_TEXT33,
            self::TASK_ENTERPRISE_TEXT34,
            self::TASK_ENTERPRISE_TEXT35,
            self::TASK_ENTERPRISE_TEXT36,
            self::TASK_ENTERPRISE_TEXT37,
            self::TASK_ENTERPRISE_TEXT38,
            self::TASK_ENTERPRISE_TEXT39,
            self::TASK_ENTERPRISE_TEXT40,
            self::TASK_BASELINE1_DURATION_ESTIMATED,
            self::TASK_BASELINE2_DURATION_ESTIMATED,
            self::TASK_BASELINE3_DURATION_ESTIMATED,
            self::TASK_BASELINE4_DURATION_ESTIMATED,
            self::TASK_BASELINE5_DURATION_ESTIMATED,
            self::TASK_BASELINE6_DURATION_ESTIMATED,
            self::TASK_BASELINE7_DURATION_ESTIMATED,
            self::TASK_BASELINE8_DURATION_ESTIMATED,
            self::TASK_BASELINE9_DURATION_ESTIMATED,
            self::TASK_BASELINE10_DURATION_ESTIMATED,
            self::TASK_ENTERPRISE_PROJECT_COST1,
            self::TASK_ENTERPRISE_PROJECT_COST2,
            self::TASK_ENTERPRISE_PROJECT_COST3,
            self::TASK_ENTERPRISE_PROJECT_COST4,
            self::TASK_ENTERPRISE_PROJECT_COST5,
            self::TASK_ENTERPRISE_PROJECT_COST6,
            self::TASK_ENTERPRISE_PROJECT_COST7,
            self::TASK_ENTERPRISE_PROJECT_COST8,
            self::TASK_ENTERPRISE_PROJECT_COST9,
            self::TASK_ENTERPRISE_PROJECT_COST10,
            self::TASK_ENTERPRISE_PROJECT_DATE1,
            self::TASK_ENTERPRISE_PROJECT_DATE2,
            self::TASK_ENTERPRISE_PROJECT_DATE3,
            self::TASK_ENTERPRISE_PROJECT_DATE4,
            self::TASK_ENTERPRISE_PROJECT_DATE5,
            self::TASK_ENTERPRISE_PROJECT_DATE6,
            self::TASK_ENTERPRISE_PROJECT_DATE7,
            self::TASK_ENTERPRISE_PROJECT_DATE8,
            self::TASK_ENTERPRISE_PROJECT_DATE9,
            self::TASK_ENTERPRISE_PROJECT_DATE10,
            self::TASK_ENTERPRISE_PROJECT_DATE11,
            self::TASK_ENTERPRISE_PROJECT_DATE12,
            self::TASK_ENTERPRISE_PROJECT_DATE13,
            self::TASK_ENTERPRISE_PROJECT_DATE14,
            self::TASK_ENTERPRISE_PROJECT_DATE15,
            self::TASK_ENTERPRISE_PROJECT_DATE16,
            self::TASK_ENTERPRISE_PROJECT_DATE17,
            self::TASK_ENTERPRISE_PROJECT_DATE18,
            self::TASK_ENTERPRISE_PROJECT_DATE19,
            self::TASK_ENTERPRISE_PROJECT_DATE20,
            self::TASK_ENTERPRISE_PROJECT_DATE21,
            self::TASK_ENTERPRISE_PROJECT_DATE22,
            self::TASK_ENTERPRISE_PROJECT_DATE23,
            self::TASK_ENTERPRISE_PROJECT_DATE24,
            self::TASK_ENTERPRISE_PROJECT_DATE25,
            self::TASK_ENTERPRISE_PROJECT_DATE26,
            self::TASK_ENTERPRISE_PROJECT_DATE27,
            self::TASK_ENTERPRISE_PROJECT_DATE28,
            self::TASK_ENTERPRISE_PROJECT_DATE29,
            self::TASK_ENTERPRISE_PROJECT_DATE30,
            self::TASK_ENTERPRISE_PROJECT_DURATION1,
            self::TASK_ENTERPRISE_PROJECT_DURATION2,
            self::TASK_ENTERPRISE_PROJECT_DURATION3,
            self::TASK_ENTERPRISE_PROJECT_DURATION4,
            self::TASK_ENTERPRISE_PROJECT_DURATION5,
            self::TASK_ENTERPRISE_PROJECT_DURATION6,
            self::TASK_ENTERPRISE_PROJECT_DURATION7,
            self::TASK_ENTERPRISE_PROJECT_DURATION8,
            self::TASK_ENTERPRISE_PROJECT_DURATION9,
            self::TASK_ENTERPRISE_PROJECT_DURATION10,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE1,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE2,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE3,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE4,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE5,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE6,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE7,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE8,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE9,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE10,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE11,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE12,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE13,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE14,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE15,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE16,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE17,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE18,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE19,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE20,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE21,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE22,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE23,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE24,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE25,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE26,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE27,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE28,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE29,
            self::TASK_ENTERPRISE_PROJECT_OUTLINE_CODE30,
            self::TASK_ENTERPRISE_PROJECT_FLAG1,
            self::TASK_ENTERPRISE_PROJECT_FLAG2,
            self::TASK_ENTERPRISE_PROJECT_FLAG3,
            self::TASK_ENTERPRISE_PROJECT_FLAG4,
            self::TASK_ENTERPRISE_PROJECT_FLAG5,
            self::TASK_ENTERPRISE_PROJECT_FLAG6,
            self::TASK_ENTERPRISE_PROJECT_FLAG7,
            self::TASK_ENTERPRISE_PROJECT_FLAG8,
            self::TASK_ENTERPRISE_PROJECT_FLAG9,
            self::TASK_ENTERPRISE_PROJECT_FLAG10,
            self::TASK_ENTERPRISE_PROJECT_FLAG11,
            self::TASK_ENTERPRISE_PROJECT_FLAG12,
            self::TASK_ENTERPRISE_PROJECT_FLAG13,
            self::TASK_ENTERPRISE_PROJECT_FLAG14,
            self::TASK_ENTERPRISE_PROJECT_FLAG15,
            self::TASK_ENTERPRISE_PROJECT_FLAG16,
            self::TASK_ENTERPRISE_PROJECT_FLAG17,
            self::TASK_ENTERPRISE_PROJECT_FLAG18,
            self::TASK_ENTERPRISE_PROJECT_FLAG19,
            self::TASK_ENTERPRISE_PROJECT_FLAG20,
            self::TASK_ENTERPRISE_PROJECT_NUMBER1,
            self::TASK_ENTERPRISE_PROJECT_NUMBER2,
            self::TASK_ENTERPRISE_PROJECT_NUMBER3,
            self::TASK_ENTERPRISE_PROJECT_NUMBER4,
            self::TASK_ENTERPRISE_PROJECT_NUMBER5,
            self::TASK_ENTERPRISE_PROJECT_NUMBER6,
            self::TASK_ENTERPRISE_PROJECT_NUMBER7,
            self::TASK_ENTERPRISE_PROJECT_NUMBER8,
            self::TASK_ENTERPRISE_PROJECT_NUMBER9,
            self::TASK_ENTERPRISE_PROJECT_NUMBER10,
            self::TASK_ENTERPRISE_PROJECT_NUMBER11,
            self::TASK_ENTERPRISE_PROJECT_NUMBER12,
            self::TASK_ENTERPRISE_PROJECT_NUMBER13,
            self::TASK_ENTERPRISE_PROJECT_NUMBER14,
            self::TASK_ENTERPRISE_PROJECT_NUMBER15,
            self::TASK_ENTERPRISE_PROJECT_NUMBER16,
            self::TASK_ENTERPRISE_PROJECT_NUMBER17,
            self::TASK_ENTERPRISE_PROJECT_NUMBER18,
            self::TASK_ENTERPRISE_PROJECT_NUMBER19,
            self::TASK_ENTERPRISE_PROJECT_NUMBER20,
            self::TASK_ENTERPRISE_PROJECT_NUMBER21,
            self::TASK_ENTERPRISE_PROJECT_NUMBER22,
            self::TASK_ENTERPRISE_PROJECT_NUMBER23,
            self::TASK_ENTERPRISE_PROJECT_NUMBER24,
            self::TASK_ENTERPRISE_PROJECT_NUMBER25,
            self::TASK_ENTERPRISE_PROJECT_NUMBER26,
            self::TASK_ENTERPRISE_PROJECT_NUMBER27,
            self::TASK_ENTERPRISE_PROJECT_NUMBER28,
            self::TASK_ENTERPRISE_PROJECT_NUMBER29,
            self::TASK_ENTERPRISE_PROJECT_NUMBER30,
            self::TASK_ENTERPRISE_PROJECT_NUMBER31,
            self::TASK_ENTERPRISE_PROJECT_NUMBER32,
            self::TASK_ENTERPRISE_PROJECT_NUMBER33,
            self::TASK_ENTERPRISE_PROJECT_NUMBER34,
            self::TASK_ENTERPRISE_PROJECT_NUMBER35,
            self::TASK_ENTERPRISE_PROJECT_NUMBER36,
            self::TASK_ENTERPRISE_PROJECT_NUMBER37,
            self::TASK_ENTERPRISE_PROJECT_NUMBER38,
            self::TASK_ENTERPRISE_PROJECT_NUMBER39,
            self::TASK_ENTERPRISE_PROJECT_NUMBER40,
            self::TASK_ENTERPRISE_PROJECT_TEXT1,
            self::TASK_ENTERPRISE_PROJECT_TEXT2,
            self::TASK_ENTERPRISE_PROJECT_TEXT3,
            self::TASK_ENTERPRISE_PROJECT_TEXT4,
            self::TASK_ENTERPRISE_PROJECT_TEXT5,
            self::TASK_ENTERPRISE_PROJECT_TEXT6,
            self::TASK_ENTERPRISE_PROJECT_TEXT7,
            self::TASK_ENTERPRISE_PROJECT_TEXT8,
            self::TASK_ENTERPRISE_PROJECT_TEXT9,
            self::TASK_ENTERPRISE_PROJECT_TEXT10,
            self::TASK_ENTERPRISE_PROJECT_TEXT11,
            self::TASK_ENTERPRISE_PROJECT_TEXT12,
            self::TASK_ENTERPRISE_PROJECT_TEXT13,
            self::TASK_ENTERPRISE_PROJECT_TEXT14,
            self::TASK_ENTERPRISE_PROJECT_TEXT15,
            self::TASK_ENTERPRISE_PROJECT_TEXT16,
            self::TASK_ENTERPRISE_PROJECT_TEXT17,
            self::TASK_ENTERPRISE_PROJECT_TEXT18,
            self::TASK_ENTERPRISE_PROJECT_TEXT19,
            self::TASK_ENTERPRISE_PROJECT_TEXT20,
            self::TASK_ENTERPRISE_PROJECT_TEXT21,
            self::TASK_ENTERPRISE_PROJECT_TEXT22,
            self::TASK_ENTERPRISE_PROJECT_TEXT23,
            self::TASK_ENTERPRISE_PROJECT_TEXT24,
            self::TASK_ENTERPRISE_PROJECT_TEXT25,
            self::TASK_ENTERPRISE_PROJECT_TEXT26,
            self::TASK_ENTERPRISE_PROJECT_TEXT27,
            self::TASK_ENTERPRISE_PROJECT_TEXT28,
            self::TASK_ENTERPRISE_PROJECT_TEXT29,
            self::TASK_ENTERPRISE_PROJECT_TEXT30,
            self::TASK_ENTERPRISE_PROJECT_TEXT31,
            self::TASK_ENTERPRISE_PROJECT_TEXT32,
            self::TASK_ENTERPRISE_PROJECT_TEXT33,
            self::TASK_ENTERPRISE_PROJECT_TEXT34,
            self::TASK_ENTERPRISE_PROJECT_TEXT35,
            self::TASK_ENTERPRISE_PROJECT_TEXT36,
            self::TASK_ENTERPRISE_PROJECT_TEXT37,
            self::TASK_ENTERPRISE_PROJECT_TEXT38,
            self::TASK_ENTERPRISE_PROJECT_TEXT39,
            self::TASK_ENTERPRISE_PROJECT_TEXT40,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE1,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE2,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE3,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE4,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE5,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE6,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE7,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE8,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE9,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE10,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE11,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE12,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE13,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE14,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE15,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE16,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE17,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE18,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE19,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE20,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE21,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE22,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE23,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE24,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE25,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE26,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE27,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE28,
            self::TASK_RESOURCE_ENTERPRISE_OUTLINE_CODE29,
            self::TASK_RESOURCE_ENTERPRISE_RBS,
            self::TASK_PHYSICAL_PERCENT_COMPLETE,
            self::TASK_DEMANDED_REQUESTED,
            self::TASK_STATUS_INDICATOR,
            self::TASK_EARNED_VALUE_METHOD,
            self::TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE20,
            self::TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE21,
            self::TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE22,
            self::TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE23,
            self::TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE24,
            self::TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE25,
            self::TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE26,
            self::TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE27,
            self::TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE28,
            self::TASK_RESOURCE_ENTERPRISE_MULTI_VALUE_CODE29,
            self::TASK_ACTUAL_WORK_PROTECTED,
            self::TASK_ACTUAL_OVERTIME_WORK_PROTECTED,
            self::TASK_GUID,
            self::TASK_CALENDAR_GUID,
            self::TASK_DELIVERABLE_GUID,
            self::TASK_DELIVERABLE_TYPE,
            self::TASK_DELIVERABLE_START,
            self::TASK_DELIVERABLE_FINISH,
            self::TASK_IS_PUBLISHED,
            self::TASK_STATUS_MANAGER_NAME,
            self::TASK_ERROR_MESSAGE,
            self::TASK_ASSIGNMENT_OWNER,
            self::TASK_BUDGET_WORK,
            self::TASK_BUDGET_COST,
            self::TASK_BASELINE_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE_DELIVERABLE_START,
            self::TASK_BASELINE_DELIVERABLE_FINISH,
            self::TASK_BASELINE_BUDGET_WORK,
            self::TASK_BASELINE_BUDGET_COST,
            self::TASK_BASELINE1_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE1_DELIVERABLE_START,
            self::TASK_BASELINE1_DELIVERABLE_FINISH,
            self::TASK_BASELINE1_BUDGET_WORK,
            self::TASK_BASELINE1_BUDGET_COST,
            self::TASK_BASELINE2_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE2_DELIVERABLE_START,
            self::TASK_BASELINE2_DELIVERABLE_FINISH,
            self::TASK_BASELINE2_BUDGET_WORK,
            self::TASK_BASELINE2_BUDGET_COST,
            self::TASK_BASELINE3_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE3_DELIVERABLE_START,
            self::TASK_BASELINE3_DELIVERABLE_FINISH,
            self::TASK_BASELINE3_BUDGET_WORK,
            self::TASK_BASELINE3_BUDGET_COST,
            self::TASK_BASELINE4_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE4_DELIVERABLE_START,
            self::TASK_BASELINE4_DELIVERABLE_FINISH,
            self::TASK_BASELINE4_BUDGET_WORK,
            self::TASK_BASELINE4_BUDGET_COST,
            self::TASK_BASELINE5_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE5_DELIVERABLE_START,
            self::TASK_BASELINE5_DELIVERABLE_FINISH,
            self::TASK_BASELINE5_BUDGET_WORK,
            self::TASK_BASELINE5_BUDGET_COST,
            self::TASK_BASELINE6_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE6_DELIVERABLE_START,
            self::TASK_BASELINE6_DELIVERABLE_FINISH,
            self::TASK_BASELINE6_BUDGET_WORK,
            self::TASK_BASELINE6_BUDGET_COST,
            self::TASK_BASELINE7_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE7_DELIVERABLE_START,
            self::TASK_BASELINE7_DELIVERABLE_FINISH,
            self::TASK_BASELINE7_BUDGET_WORK,
            self::TASK_BASELINE7_BUDGET_COST,
            self::TASK_BASELINE8_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE8_DELIVERABLE_START,
            self::TASK_BASELINE8_DELIVERABLE_FINISH,
            self::TASK_BASELINE8_BUDGET_WORK,
            self::TASK_BASELINE8_BUDGET_COST,
            self::TASK_BASELINE9_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE9_DELIVERABLE_START,
            self::TASK_BASELINE9_DELIVERABLE_FINISH,
            self::TASK_BASELINE9_BUDGET_WORK,
            self::TASK_BASELINE9_BUDGET_COST,
            self::TASK_BASELINE10_FIXED_COST_ACCRUAL,
            self::TASK_BASELINE10_DELIVERABLE_START,
            self::TASK_BASELINE10_DELIVERABLE_FINISH,
            self::TASK_BASELINE10_BUDGET_WORK,
            self::TASK_BASELINE10_BUDGET_COST,
            self::TASK_RECALC_FLAGS,
            self::TASK_DELIVERABLE_NAME,
            self::TASK_ACTIVE,
            self::TASK_MANUAL,
            self::TASK_PLACEHOLDER,
            self::TASK_WARNING,
            self::TASK_START_TEXT,
            self::TASK_FINISH_TEXT,
            self::TASK_DURATION_TEXT,
            self::TASK_IS_START_VALID,
            self::TASK_IS_FINISH_VALID,
            self::TASK_IS_DURATION_VALID,
            self::TASK_BASELINE_START_TEXT,
            self::TASK_BASELINE_FINISH_TEXT,
            self::TASK_BASELINE_DURATION_TEXT,
            self::TASK_BASELINE1_START_TEXT,
            self::TASK_BASELINE1_FINISH_TEXT,
            self::TASK_BASELINE1_DURATION_TEXT,
            self::TASK_BASELINE2_START_TEXT,
            self::TASK_BASELINE2_FINISH_TEXT,
            self::TASK_BASELINE2_DURATION_TEXT,
            self::TASK_BASELINE3_START_TEXT,
            self::TASK_BASELINE3_FINISH_TEXT,
            self::TASK_BASELINE3_DURATION_TEXT,
            self::TASK_BASELINE4_START_TEXT,
            self::TASK_BASELINE4_FINISH_TEXT,
            self::TASK_BASELINE4_DURATION_TEXT,
            self::TASK_BASELINE5_START_TEXT,
            self::TASK_BASELINE5_FINISH_TEXT,
            self::TASK_BASELINE5_DURATION_TEXT,
            self::TASK_BASELINE6_START_TEXT,
            self::TASK_BASELINE6_FINISH_TEXT,
            self::TASK_BASELINE6_DURATION_TEXT,
            self::TASK_BASELINE7_START_TEXT,
            self::TASK_BASELINE7_FINISH_TEXT,
            self::TASK_BASELINE7_DURATION_TEXT,
            self::TASK_BASELINE8_START_TEXT,
            self::TASK_BASELINE8_FINISH_TEXT,
            self::TASK_BASELINE8_DURATION_TEXT,
            self::TASK_BASELINE9_START_TEXT,
            self::TASK_BASELINE9_FINISH_TEXT,
            self::TASK_BASELINE9_DURATION_TEXT,
            self::TASK_BASELINE10_START_TEXT,
            self::TASK_BASELINE10_FINISH_TEXT,
            self::TASK_BASELINE10_DURATION_TEXT,
            self::TASK_IGNORE_WARNINGS,
            self::TASK_ASSIGNMENT_PEAK_UNITS,
            self::TASK_SCHEDULED_START,
            self::TASK_SCHEDULED_FINISH,
            self::TASK_SCHEDULED_DURATION,
            self::TASK_PATH_DRIVING_PREDECESSOR,
            self::TASK_PATH_PREDECESSOR,
            self::TASK_PATH_DRIVEN_SUCCESSOR,
            self::TASK_PATH_SUCCESSOR,
            self::TASK_SUMMARY_NAME,
            self::RESOURCE_ID,
            self::RESOURCE_NAME,
            self::RESOURCE_INITIALS,
            self::RESOURCE_GROUP,
            self::RESOURCE_MAX_UNITS,
            self::RESOURCE_BASE_CALENDAR,
            self::RESOURCE_STANDARD_RATE,
            self::RESOURCE_OVERTIME_RATE,
            self::RESOURCE_TEXT1,
            self::RESOURCE_TEXT2,
            self::RESOURCE_CODE,
            self::RESOURCE_ACTUAL_COST,
            self::RESOURCE_COST,
            self::RESOURCE_WORK,
            self::RESOURCE_ACTUAL_WORK,
            self::RESOURCE_BASELINE_WORK,
            self::RESOURCE_OVERTIME_WORK,
            self::RESOURCE_BASELINE_COST,
            self::RESOURCE_COST_PER_USE,
            self::RESOURCE_ACCRUE_AT,
            self::RESOURCE_NOTES,
            self::RESOURCE_REMAINING_COST,
            self::RESOURCE_REMAINING_WORK,
            self::RESOURCE_WORK_VARIANCE,
            self::RESOURCE_COST_VARIANCE,
            self::RESOURCE_OVERALLOCATED,
            self::RESOURCE_PEAK_UNITS,
            self::RESOURCE_UNIQUE_ID,
            self::RESOURCE_SHEET_NOTES,
            self::RESOURCE_PERCENT_WORK_COMPLETE,
            self::RESOURCE_TEXT3,
            self::RESOURCE_TEXT4,
            self::RESOURCE_TEXT5,
            self::RESOURCE_OBJECTS,
            self::RESOURCE_LINKED_FIELDS,
            self::RESOURCE_E_MAIL_ADDRESS,
            self::RESOURCE_REGULAR_WORK,
            self::RESOURCE_ACTUAL_OVERTIME_WORK,
            self::RESOURCE_REMAINING_OVERTIME_WORK,
            self::RESOURCE_OVERTIME_COST,
            self::RESOURCE_ACTUAL_OVERTIME_COST,
            self::RESOURCE_REMAINING_OVERTIME_COST,
            self::RESOURCE_BCWS,
            self::RESOURCE_BCWP,
            self::RESOURCE_ACWP,
            self::RESOURCE_SV,
            self::RESOURCE_AVAILABLE_FROM,
            self::RESOURCE_AVAILABLE_TO,
            self::RESOURCE_INDICATORS,
            self::RESOURCE_TEXT6,
            self::RESOURCE_TEXT7,
            self::RESOURCE_TEXT8,
            self::RESOURCE_TEXT9,
            self::RESOURCE_TEXT10,
            self::RESOURCE_START1,
            self::RESOURCE_START2,
            self::RESOURCE_START3,
            self::RESOURCE_START4,
            self::RESOURCE_START5,
            self::RESOURCE_FINISH1,
            self::RESOURCE_FINISH2,
            self::RESOURCE_FINISH3,
            self::RESOURCE_FINISH4,
            self::RESOURCE_FINISH5,
            self::RESOURCE_NUMBER1,
            self::RESOURCE_NUMBER2,
            self::RESOURCE_NUMBER3,
            self::RESOURCE_NUMBER4,
            self::RESOURCE_NUMBER5,
            self::RESOURCE_DURATION1,
            self::RESOURCE_DURATION2,
            self::RESOURCE_DURATION3,
            self::RESOURCE_COST1,
            self::RESOURCE_COST2,
            self::RESOURCE_COST3,
            self::RESOURCE_FLAG10,
            self::RESOURCE_FLAG1,
            self::RESOURCE_FLAG2,
            self::RESOURCE_FLAG3,
            self::RESOURCE_FLAG4,
            self::RESOURCE_FLAG5,
            self::RESOURCE_FLAG6,
            self::RESOURCE_FLAG7,
            self::RESOURCE_FLAG8,
            self::RESOURCE_FLAG9,
            self::RESOURCE_HYPERLINK,
            self::RESOURCE_HYPERLINK_ADDRESS,
            self::RESOURCE_HYPERLINK_SUB_ADDRESS,
            self::RESOURCE_HYPERLINK_HREF,
            self::RESOURCE_IS_ASSIGNMENT,
            self::RESOURCE_TASK_SUMMARY_NAME,
            self::RESOURCE_CAN_LEVEL,
            self::RESOURCE_WORK_CONTOUR,
            self::RESOURCE_COST4,
            self::RESOURCE_COST5,
            self::RESOURCE_COST6,
            self::RESOURCE_COST7,
            self::RESOURCE_COST8,
            self::RESOURCE_COST9,
            self::RESOURCE_COST10,
            self::RESOURCE_DATE1,
            self::RESOURCE_DATE2,
            self::RESOURCE_DATE3,
            self::RESOURCE_DATE4,
            self::RESOURCE_DATE5,
            self::RESOURCE_DATE6,
            self::RESOURCE_DATE7,
            self::RESOURCE_DATE8,
            self::RESOURCE_DATE9,
            self::RESOURCE_DATE10,
            self::RESOURCE_DURATION4,
            self::RESOURCE_DURATION5,
            self::RESOURCE_DURATION6,
            self::RESOURCE_DURATION7,
            self::RESOURCE_DURATION8,
            self::RESOURCE_DURATION9,
            self::RESOURCE_DURATION10,
            self::RESOURCE_FINISH6,
            self::RESOURCE_FINISH7,
            self::RESOURCE_FINISH8,
            self::RESOURCE_FINISH9,
            self::RESOURCE_FINISH10,
            self::RESOURCE_FLAG11,
            self::RESOURCE_FLAG12,
            self::RESOURCE_FLAG13,
            self::RESOURCE_FLAG14,
            self::RESOURCE_FLAG15,
            self::RESOURCE_FLAG16,
            self::RESOURCE_FLAG17,
            self::RESOURCE_FLAG18,
            self::RESOURCE_FLAG19,
            self::RESOURCE_FLAG20,
            self::RESOURCE_NUMBER6,
            self::RESOURCE_NUMBER7,
            self::RESOURCE_NUMBER8,
            self::RESOURCE_NUMBER9,
            self::RESOURCE_NUMBER10,
            self::RESOURCE_NUMBER11,
            self::RESOURCE_NUMBER12,
            self::RESOURCE_NUMBER13,
            self::RESOURCE_NUMBER14,
            self::RESOURCE_NUMBER15,
            self::RESOURCE_NUMBER16,
            self::RESOURCE_NUMBER17,
            self::RESOURCE_NUMBER18,
            self::RESOURCE_NUMBER19,
            self::RESOURCE_NUMBER20,
            self::RESOURCE_START6,
            self::RESOURCE_START7,
            self::RESOURCE_START8,
            self::RESOURCE_START9,
            self::RESOURCE_START10,
            self::RESOURCE_TEXT11,
            self::RESOURCE_TEXT12,
            self::RESOURCE_TEXT13,
            self::RESOURCE_TEXT14,
            self::RESOURCE_TEXT15,
            self::RESOURCE_TEXT16,
            self::RESOURCE_TEXT17,
            self::RESOURCE_TEXT18,
            self::RESOURCE_TEXT19,
            self::RESOURCE_TEXT20,
            self::RESOURCE_TEXT21,
            self::RESOURCE_TEXT22,
            self::RESOURCE_TEXT23,
            self::RESOURCE_TEXT24,
            self::RESOURCE_TEXT25,
            self::RESOURCE_TEXT26,
            self::RESOURCE_TEXT27,
            self::RESOURCE_TEXT28,
            self::RESOURCE_TEXT29,
            self::RESOURCE_TEXT30,
            self::RESOURCE_PHONETICS,
            self::RESOURCE_INDEX,
            self::RESOURCE_ASSIGNMENT_DELAY,
            self::RESOURCE_ASSIGNMENT_UNITS,
            self::RESOURCE_BASELINE_START,
            self::RESOURCE_BASELINE_FINISH,
            self::RESOURCE_CONFIRMED,
            self::RESOURCE_FINISH,
            self::RESOURCE_LEVELING_DELAY,
            self::RESOURCE_RESPONSE_PENDING,
            self::RESOURCE_START,
            self::RESOURCE_TEAM_STATUS_PENDING,
            self::RESOURCE_UPDATE_NEEDED,
            self::RESOURCE_CV,
            self::RESOURCE_COST_RATE_TABLE,
            self::RESOURCE_WORKGROUP,
            self::RESOURCE_PROJECT,
            self::RESOURCE_OUTLINE_CODE1,
            self::RESOURCE_OUTLINE_CODE2,
            self::RESOURCE_OUTLINE_CODE3,
            self::RESOURCE_OUTLINE_CODE4,
            self::RESOURCE_OUTLINE_CODE5,
            self::RESOURCE_OUTLINE_CODE6,
            self::RESOURCE_OUTLINE_CODE7,
            self::RESOURCE_OUTLINE_CODE8,
            self::RESOURCE_OUTLINE_CODE9,
            self::RESOURCE_OUTLINE_CODE10,
            self::RESOURCE_MATERIAL_LABEL,
            self::RESOURCE_TYPE,
            self::RESOURCE_VAC,
            self::RESOURCE_GROUP_BY_SUMMARY,
            self::RESOURCE_WINDOWS_USER_ACCOUNT,
            self::RESOURCE_HYPERLINK_SCREEN_TIP,
            self::RESOURCE_WBS,
            self::RESOURCE_BASELINE1_WORK,
            self::RESOURCE_BASELINE1_COST,
            self::RESOURCE_BASELINE1_START,
            self::RESOURCE_BASELINE1_FINISH,
            self::RESOURCE_BASELINE2_WORK,
            self::RESOURCE_BASELINE2_COST,
            self::RESOURCE_BASELINE2_START,
            self::RESOURCE_BASELINE2_FINISH,
            self::RESOURCE_BASELINE3_WORK,
            self::RESOURCE_BASELINE3_COST,
            self::RESOURCE_BASELINE3_START,
            self::RESOURCE_BASELINE3_FINISH,
            self::RESOURCE_BASELINE4_WORK,
            self::RESOURCE_BASELINE4_COST,
            self::RESOURCE_BASELINE4_START,
            self::RESOURCE_BASELINE4_FINISH,
            self::RESOURCE_BASELINE5_WORK,
            self::RESOURCE_BASELINE5_COST,
            self::RESOURCE_BASELINE5_START,
            self::RESOURCE_BASELINE5_FINISH,
            self::RESOURCE_BASELINE6_WORK,
            self::RESOURCE_BASELINE6_COST,
            self::RESOURCE_BASELINE6_START,
            self::RESOURCE_BASELINE6_FINISH,
            self::RESOURCE_BASELINE7_WORK,
            self::RESOURCE_BASELINE7_COST,
            self::RESOURCE_BASELINE7_START,
            self::RESOURCE_BASELINE7_FINISH,
            self::RESOURCE_BASELINE8_WORK,
            self::RESOURCE_BASELINE8_COST,
            self::RESOURCE_BASELINE8_START,
            self::RESOURCE_BASELINE8_FINISH,
            self::RESOURCE_BASELINE9_WORK,
            self::RESOURCE_BASELINE9_COST,
            self::RESOURCE_BASELINE9_START,
            self::RESOURCE_BASELINE9_FINISH,
            self::RESOURCE_BASELINE10_WORK,
            self::RESOURCE_BASELINE10_COST,
            self::RESOURCE_BASELINE10_START,
            self::RESOURCE_BASELINE10_FINISH,
            self::RESOURCE_ENTERPRISE_UNIQUE_ID,
            self::RESOURCE_ENTERPRISE_COST1,
            self::RESOURCE_ENTERPRISE_COST2,
            self::RESOURCE_ENTERPRISE_COST3,
            self::RESOURCE_ENTERPRISE_COST4,
            self::RESOURCE_ENTERPRISE_COST5,
            self::RESOURCE_ENTERPRISE_COST6,
            self::RESOURCE_ENTERPRISE_COST7,
            self::RESOURCE_ENTERPRISE_COST8,
            self::RESOURCE_ENTERPRISE_COST9,
            self::RESOURCE_ENTERPRISE_COST10,
            self::RESOURCE_ENTERPRISE_DATE1,
            self::RESOURCE_ENTERPRISE_DATE2,
            self::RESOURCE_ENTERPRISE_DATE3,
            self::RESOURCE_ENTERPRISE_DATE4,
            self::RESOURCE_ENTERPRISE_DATE5,
            self::RESOURCE_ENTERPRISE_DATE6,
            self::RESOURCE_ENTERPRISE_DATE7,
            self::RESOURCE_ENTERPRISE_DATE8,
            self::RESOURCE_ENTERPRISE_DATE9,
            self::RESOURCE_ENTERPRISE_DATE10,
            self::RESOURCE_ENTERPRISE_DATE11,
            self::RESOURCE_ENTERPRISE_DATE12,
            self::RESOURCE_ENTERPRISE_DATE13,
            self::RESOURCE_ENTERPRISE_DATE14,
            self::RESOURCE_ENTERPRISE_DATE15,
            self::RESOURCE_ENTERPRISE_DATE16,
            self::RESOURCE_ENTERPRISE_DATE17,
            self::RESOURCE_ENTERPRISE_DATE18,
            self::RESOURCE_ENTERPRISE_DATE19,
            self::RESOURCE_ENTERPRISE_DATE20,
            self::RESOURCE_ENTERPRISE_DATE21,
            self::RESOURCE_ENTERPRISE_DATE22,
            self::RESOURCE_ENTERPRISE_DATE23,
            self::RESOURCE_ENTERPRISE_DATE24,
            self::RESOURCE_ENTERPRISE_DATE25,
            self::RESOURCE_ENTERPRISE_DATE26,
            self::RESOURCE_ENTERPRISE_DATE27,
            self::RESOURCE_ENTERPRISE_DATE28,
            self::RESOURCE_ENTERPRISE_DATE29,
            self::RESOURCE_ENTERPRISE_DATE30,
            self::RESOURCE_ENTERPRISE_DURATION1,
            self::RESOURCE_ENTERPRISE_DURATION2,
            self::RESOURCE_ENTERPRISE_DURATION3,
            self::RESOURCE_ENTERPRISE_DURATION4,
            self::RESOURCE_ENTERPRISE_DURATION5,
            self::RESOURCE_ENTERPRISE_DURATION6,
            self::RESOURCE_ENTERPRISE_DURATION7,
            self::RESOURCE_ENTERPRISE_DURATION8,
            self::RESOURCE_ENTERPRISE_DURATION9,
            self::RESOURCE_ENTERPRISE_DURATION10,
            self::RESOURCE_ENTERPRISE_FLAG1,
            self::RESOURCE_ENTERPRISE_FLAG2,
            self::RESOURCE_ENTERPRISE_FLAG3,
            self::RESOURCE_ENTERPRISE_FLAG4,
            self::RESOURCE_ENTERPRISE_FLAG5,
            self::RESOURCE_ENTERPRISE_FLAG6,
            self::RESOURCE_ENTERPRISE_FLAG7,
            self::RESOURCE_ENTERPRISE_FLAG8,
            self::RESOURCE_ENTERPRISE_FLAG9,
            self::RESOURCE_ENTERPRISE_FLAG10,
            self::RESOURCE_ENTERPRISE_FLAG11,
            self::RESOURCE_ENTERPRISE_FLAG12,
            self::RESOURCE_ENTERPRISE_FLAG13,
            self::RESOURCE_ENTERPRISE_FLAG14,
            self::RESOURCE_ENTERPRISE_FLAG15,
            self::RESOURCE_ENTERPRISE_FLAG16,
            self::RESOURCE_ENTERPRISE_FLAG17,
            self::RESOURCE_ENTERPRISE_FLAG18,
            self::RESOURCE_ENTERPRISE_FLAG19,
            self::RESOURCE_ENTERPRISE_FLAG20,
            self::RESOURCE_ENTERPRISE_NUMBER1,
            self::RESOURCE_ENTERPRISE_NUMBER2,
            self::RESOURCE_ENTERPRISE_NUMBER3,
            self::RESOURCE_ENTERPRISE_NUMBER4,
            self::RESOURCE_ENTERPRISE_NUMBER5,
            self::RESOURCE_ENTERPRISE_NUMBER6,
            self::RESOURCE_ENTERPRISE_NUMBER7,
            self::RESOURCE_ENTERPRISE_NUMBER8,
            self::RESOURCE_ENTERPRISE_NUMBER9,
            self::RESOURCE_ENTERPRISE_NUMBER10,
            self::RESOURCE_ENTERPRISE_NUMBER11,
            self::RESOURCE_ENTERPRISE_NUMBER12,
            self::RESOURCE_ENTERPRISE_NUMBER13,
            self::RESOURCE_ENTERPRISE_NUMBER14,
            self::RESOURCE_ENTERPRISE_NUMBER15,
            self::RESOURCE_ENTERPRISE_NUMBER16,
            self::RESOURCE_ENTERPRISE_NUMBER17,
            self::RESOURCE_ENTERPRISE_NUMBER18,
            self::RESOURCE_ENTERPRISE_NUMBER19,
            self::RESOURCE_ENTERPRISE_NUMBER20,
            self::RESOURCE_ENTERPRISE_NUMBER21,
            self::RESOURCE_ENTERPRISE_NUMBER22,
            self::RESOURCE_ENTERPRISE_NUMBER23,
            self::RESOURCE_ENTERPRISE_NUMBER24,
            self::RESOURCE_ENTERPRISE_NUMBER25,
            self::RESOURCE_ENTERPRISE_NUMBER26,
            self::RESOURCE_ENTERPRISE_NUMBER27,
            self::RESOURCE_ENTERPRISE_NUMBER28,
            self::RESOURCE_ENTERPRISE_NUMBER29,
            self::RESOURCE_ENTERPRISE_NUMBER30,
            self::RESOURCE_ENTERPRISE_NUMBER31,
            self::RESOURCE_ENTERPRISE_NUMBER32,
            self::RESOURCE_ENTERPRISE_NUMBER33,
            self::RESOURCE_ENTERPRISE_NUMBER34,
            self::RESOURCE_ENTERPRISE_NUMBER35,
            self::RESOURCE_ENTERPRISE_NUMBER36,
            self::RESOURCE_ENTERPRISE_NUMBER37,
            self::RESOURCE_ENTERPRISE_NUMBER38,
            self::RESOURCE_ENTERPRISE_NUMBER39,
            self::RESOURCE_ENTERPRISE_NUMBER40,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE1,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE2,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE3,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE4,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE5,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE6,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE7,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE8,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE9,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE10,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE11,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE12,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE13,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE14,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE15,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE16,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE17,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE18,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE19,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE20,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE21,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE22,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE23,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE24,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE25,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE26,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE27,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE28,
            self::RESOURCE_ENTERPRISE_OUTLINE_CODE29,
            self::RESOURCE_ENTERPRISE_RBS,
            self::RESOURCE_ENTERPRISE_TEXT1,
            self::RESOURCE_ENTERPRISE_TEXT2,
            self::RESOURCE_ENTERPRISE_TEXT3,
            self::RESOURCE_ENTERPRISE_TEXT4,
            self::RESOURCE_ENTERPRISE_TEXT5,
            self::RESOURCE_ENTERPRISE_TEXT6,
            self::RESOURCE_ENTERPRISE_TEXT7,
            self::RESOURCE_ENTERPRISE_TEXT8,
            self::RESOURCE_ENTERPRISE_TEXT9,
            self::RESOURCE_ENTERPRISE_TEXT10,
            self::RESOURCE_ENTERPRISE_TEXT11,
            self::RESOURCE_ENTERPRISE_TEXT12,
            self::RESOURCE_ENTERPRISE_TEXT13,
            self::RESOURCE_ENTERPRISE_TEXT14,
            self::RESOURCE_ENTERPRISE_TEXT15,
            self::RESOURCE_ENTERPRISE_TEXT16,
            self::RESOURCE_ENTERPRISE_TEXT17,
            self::RESOURCE_ENTERPRISE_TEXT18,
            self::RESOURCE_ENTERPRISE_TEXT19,
            self::RESOURCE_ENTERPRISE_TEXT20,
            self::RESOURCE_ENTERPRISE_TEXT21,
            self::RESOURCE_ENTERPRISE_TEXT22,
            self::RESOURCE_ENTERPRISE_TEXT23,
            self::RESOURCE_ENTERPRISE_TEXT24,
            self::RESOURCE_ENTERPRISE_TEXT25,
            self::RESOURCE_ENTERPRISE_TEXT26,
            self::RESOURCE_ENTERPRISE_TEXT27,
            self::RESOURCE_ENTERPRISE_TEXT28,
            self::RESOURCE_ENTERPRISE_TEXT29,
            self::RESOURCE_ENTERPRISE_TEXT30,
            self::RESOURCE_ENTERPRISE_TEXT31,
            self::RESOURCE_ENTERPRISE_TEXT32,
            self::RESOURCE_ENTERPRISE_TEXT33,
            self::RESOURCE_ENTERPRISE_TEXT34,
            self::RESOURCE_ENTERPRISE_TEXT35,
            self::RESOURCE_ENTERPRISE_TEXT36,
            self::RESOURCE_ENTERPRISE_TEXT37,
            self::RESOURCE_ENTERPRISE_TEXT38,
            self::RESOURCE_ENTERPRISE_TEXT39,
            self::RESOURCE_ENTERPRISE_TEXT40,
            self::RESOURCE_ENTERPRISE_GENERIC,
            self::RESOURCE_ENTERPRISE_BASE_CALENDAR,
            self::RESOURCE_ENTERPRISE_REQUIRED_VALUES,
            self::RESOURCE_ENTERPRISE_NAME_USED,
            self::RESOURCE_DEMANDED_REQUESTED,
            self::RESOURCE_ENTERPRISE,
            self::RESOURCE_ENTERPRISE_IS_CHECKED_OUT,
            self::RESOURCE_ENTERPRISE_CHECKED_OUT_BY,
            self::RESOURCE_ENTERPRISE_LAST_MODIFIED_DATE,
            self::RESOURCE_ENTERPRISE_TEAM_MEMBER,
            self::RESOURCE_ENTERPRISE_INACTIVE,
            self::RESOURCE_BOOKING_TYPE,
            self::RESOURCE_ENTERPRISE_MULTI_VALUE20,
            self::RESOURCE_ENTERPRISE_MULTI_VALUE21,
            self::RESOURCE_ENTERPRISE_MULTI_VALUE22,
            self::RESOURCE_ENTERPRISE_MULTI_VALUE23,
            self::RESOURCE_ENTERPRISE_MULTI_VALUE24,
            self::RESOURCE_ENTERPRISE_MULTI_VALUE25,
            self::RESOURCE_ENTERPRISE_MULTI_VALUE26,
            self::RESOURCE_ENTERPRISE_MULTI_VALUE27,
            self::RESOURCE_ENTERPRISE_MULTI_VALUE28,
            self::RESOURCE_ENTERPRISE_MULTI_VALUE29,
            self::RESOURCE_ACTUAL_WORK_PROTECTED,
            self::RESOURCE_ACTUAL_OVERTIME_WORK_PROTECTED,
            self::RESOURCE_CREATED,
            self::RESOURCE_GUID,
            self::RESOURCE_CALENDAR_GUID,
            self::RESOURCE_TYPE_IS_COST,
            self::RESOURCE_ERROR_MESSAGE,
            self::RESOURCE_DEFAULT_ASSIGNMENT_OWNER,
            self::RESOURCE_BUDGET,
            self::RESOURCE_BUDGET_WORK,
            self::RESOURCE_BUDGET_COST,
            self::IMPORT_RESOURCE,
            self::RESOURCE_BASELINE_BUDGET_WORK,
            self::RESOURCE_BASELINE_BUDGET_COST,
            self::RESOURCE_BASELINE1_BUDGET_WORK,
            self::RESOURCE_BASELINE1_BUDGET_COST,
            self::RESOURCE_BASELINE2_BUDGET_WORK,
            self::RESOURCE_BASELINE2_BUDGET_COST,
            self::RESOURCE_BASELINE3_BUDGET_WORK,
            self::RESOURCE_BASELINE3_BUDGET_COST,
            self::RESOURCE_BASELINE4_BUDGET_WORK,
            self::RESOURCE_BASELINE4_BUDGET_COST,
            self::RESOURCE_BASELINE5_BUDGET_WORK,
            self::RESOURCE_BASELINE5_BUDGET_COST,
            self::RESOURCE_BASELINE6_BUDGET_WORK,
            self::RESOURCE_BASELINE6_BUDGET_COST,
            self::RESOURCE_BASELINE7_BUDGET_WORK,
            self::RESOURCE_BASELINE7_BUDGET_COST,
            self::RESOURCE_BASELINE8_BUDGET_WORK,
            self::RESOURCE_BASELINE8_BUDGET_COST,
            self::RESOURCE_BASELINE9_BUDGET_WORK,
            self::RESOURCE_BASELINE9_BUDGET_COST,
            self::RESOURCE_BASELINE10_BUDGET_WORK,
            self::RESOURCE_BASELINE10_BUDGET_COST,
            self::RESOURCE_IS_TEAM,
            self::RESOURCE_COST_CENTER,
            self::RESOURCE_ASSIGNMENT_BASE_LINE_WORK,
            self::RESOURCE_ASSIGNMENT_BASE_LINE_COST,
            self::RESOURCE_ASSIGNMENT_BASE_LINE_START,
            self::RESOURCE_ASSIGNMENT_BASE_LINE_FINISH,
            self::RESOURCE_ASSIGNMENT_BASE_LINE_COST_PER_USE,
            self::RESOURCE_ASSIGNMENT_GUID,
        ];
    }
}


