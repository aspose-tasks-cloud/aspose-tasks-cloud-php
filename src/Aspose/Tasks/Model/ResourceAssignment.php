<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ResourceAssignment.php">
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
 * ResourceAssignment
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * ResourceAssignment
 *
 * @description Represents a resource assignment in a project.
 */
class ResourceAssignment implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ResourceAssignment";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'task_uid' => 'int',
        'resource_uid' => 'int',
        'uid' => 'int',
        'percent_work_complete' => 'int',
        'actual_cost' => 'float',
        'actual_finish' => '\DateTime',
        'actual_overtime_cost' => 'float',
        'actual_overtime_work' => 'string',
        'actual_start' => '\DateTime',
        'actual_work' => 'string',
        'acwp' => 'double',
        'confirmed' => 'bool',
        'cost' => 'float',
        'cost_rate_table_type' => '\Aspose\Tasks\Model\RateType',
        'cost_variance' => 'double',
        'cv' => 'double',
        'delay' => 'int',
        'finish' => '\DateTime',
        'finish_variance' => 'int',
        'hyperlink' => 'string',
        'hyperlink_address' => 'string',
        'hyperlink_sub_address' => 'string',
        'work_variance' => 'double',
        'has_fixed_rate_units' => 'bool',
        'fixed_material' => 'bool',
        'leveling_delay' => 'int',
        'leveling_delay_format' => '\Aspose\Tasks\Model\TimeUnitType',
        'linked_fields' => 'bool',
        'milestone' => 'bool',
        'notes' => 'string',
        'overallocated' => 'bool',
        'overtime_cost' => 'float',
        'overtime_work' => 'string',
        'peak_units' => 'double',
        'regular_work' => 'string',
        'remaining_cost' => 'float',
        'remaining_overtime_cost' => 'float',
        'remaining_overtime_work' => 'string',
        'remaining_work' => 'string',
        'response_pending' => 'bool',
        'start' => '\DateTime',
        'stop' => '\DateTime',
        'resume' => '\DateTime',
        'start_variance' => 'int',
        'summary' => 'bool',
        'sv' => 'double',
        'units' => 'double',
        'update_needed' => 'bool',
        'vac' => 'double',
        'work' => 'string',
        'work_contour' => '\Aspose\Tasks\Model\WorkContourType',
        'bcws' => 'double',
        'bcwp' => 'double',
        'booking_type' => '\Aspose\Tasks\Model\BookingType',
        'actual_work_protected' => 'string',
        'actual_overtime_work_protected' => 'string',
        'creation_date' => '\DateTime',
        'assn_owner' => 'string',
        'assn_owner_guid' => 'string',
        'budget_cost' => 'float',
        'budget_work' => 'string',
        'rate_scale' => '\Aspose\Tasks\Model\RateScaleType',
        'baselines' => '\Aspose\Tasks\Model\AssignmentBaseline[]',
        'extended_attributes' => '\Aspose\Tasks\Model\ExtendedAttribute[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'task_uid' => 'int32',
        'resource_uid' => 'int32',
        'uid' => 'int32',
        'percent_work_complete' => 'int32',
        'actual_cost' => 'decimal',
        'actual_finish' => 'date-time',
        'actual_overtime_cost' => 'decimal',
        'actual_overtime_work' => 'time-span',
        'actual_start' => 'date-time',
        'actual_work' => 'time-span',
        'acwp' => 'double',
        'confirmed' => null,
        'cost' => 'decimal',
        'cost_rate_table_type' => null,
        'cost_variance' => 'double',
        'cv' => 'double',
        'delay' => 'int32',
        'finish' => 'date-time',
        'finish_variance' => 'int32',
        'hyperlink' => null,
        'hyperlink_address' => null,
        'hyperlink_sub_address' => null,
        'work_variance' => 'double',
        'has_fixed_rate_units' => null,
        'fixed_material' => null,
        'leveling_delay' => 'int32',
        'leveling_delay_format' => null,
        'linked_fields' => null,
        'milestone' => null,
        'notes' => null,
        'overallocated' => null,
        'overtime_cost' => 'decimal',
        'overtime_work' => 'time-span',
        'peak_units' => 'double',
        'regular_work' => 'time-span',
        'remaining_cost' => 'decimal',
        'remaining_overtime_cost' => 'decimal',
        'remaining_overtime_work' => 'time-span',
        'remaining_work' => 'time-span',
        'response_pending' => null,
        'start' => 'date-time',
        'stop' => 'date-time',
        'resume' => 'date-time',
        'start_variance' => 'int32',
        'summary' => null,
        'sv' => 'double',
        'units' => 'double',
        'update_needed' => null,
        'vac' => 'double',
        'work' => 'time-span',
        'work_contour' => null,
        'bcws' => 'double',
        'bcwp' => 'double',
        'booking_type' => null,
        'actual_work_protected' => 'time-span',
        'actual_overtime_work_protected' => 'time-span',
        'creation_date' => 'date-time',
        'assn_owner' => null,
        'assn_owner_guid' => null,
        'budget_cost' => 'decimal',
        'budget_work' => 'time-span',
        'rate_scale' => null,
        'baselines' => null,
        'extended_attributes' => null
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
        'task_uid' => 'TaskUid',
        'resource_uid' => 'ResourceUid',
        'uid' => 'Uid',
        'percent_work_complete' => 'PercentWorkComplete',
        'actual_cost' => 'ActualCost',
        'actual_finish' => 'ActualFinish',
        'actual_overtime_cost' => 'ActualOvertimeCost',
        'actual_overtime_work' => 'ActualOvertimeWork',
        'actual_start' => 'ActualStart',
        'actual_work' => 'ActualWork',
        'acwp' => 'Acwp',
        'confirmed' => 'Confirmed',
        'cost' => 'Cost',
        'cost_rate_table_type' => 'CostRateTableType',
        'cost_variance' => 'CostVariance',
        'cv' => 'Cv',
        'delay' => 'Delay',
        'finish' => 'Finish',
        'finish_variance' => 'FinishVariance',
        'hyperlink' => 'Hyperlink',
        'hyperlink_address' => 'HyperlinkAddress',
        'hyperlink_sub_address' => 'HyperlinkSubAddress',
        'work_variance' => 'WorkVariance',
        'has_fixed_rate_units' => 'HasFixedRateUnits',
        'fixed_material' => 'FixedMaterial',
        'leveling_delay' => 'LevelingDelay',
        'leveling_delay_format' => 'LevelingDelayFormat',
        'linked_fields' => 'LinkedFields',
        'milestone' => 'Milestone',
        'notes' => 'Notes',
        'overallocated' => 'Overallocated',
        'overtime_cost' => 'OvertimeCost',
        'overtime_work' => 'OvertimeWork',
        'peak_units' => 'PeakUnits',
        'regular_work' => 'RegularWork',
        'remaining_cost' => 'RemainingCost',
        'remaining_overtime_cost' => 'RemainingOvertimeCost',
        'remaining_overtime_work' => 'RemainingOvertimeWork',
        'remaining_work' => 'RemainingWork',
        'response_pending' => 'ResponsePending',
        'start' => 'Start',
        'stop' => 'Stop',
        'resume' => 'Resume',
        'start_variance' => 'StartVariance',
        'summary' => 'Summary',
        'sv' => 'Sv',
        'units' => 'Units',
        'update_needed' => 'UpdateNeeded',
        'vac' => 'Vac',
        'work' => 'Work',
        'work_contour' => 'WorkContour',
        'bcws' => 'Bcws',
        'bcwp' => 'Bcwp',
        'booking_type' => 'BookingType',
        'actual_work_protected' => 'ActualWorkProtected',
        'actual_overtime_work_protected' => 'ActualOvertimeWorkProtected',
        'creation_date' => 'CreationDate',
        'assn_owner' => 'AssnOwner',
        'assn_owner_guid' => 'AssnOwnerGuid',
        'budget_cost' => 'BudgetCost',
        'budget_work' => 'BudgetWork',
        'rate_scale' => 'RateScale',
        'baselines' => 'Baselines',
        'extended_attributes' => 'ExtendedAttributes'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'task_uid' => 'setTaskUid',
        'resource_uid' => 'setResourceUid',
        'uid' => 'setUid',
        'percent_work_complete' => 'setPercentWorkComplete',
        'actual_cost' => 'setActualCost',
        'actual_finish' => 'setActualFinish',
        'actual_overtime_cost' => 'setActualOvertimeCost',
        'actual_overtime_work' => 'setActualOvertimeWork',
        'actual_start' => 'setActualStart',
        'actual_work' => 'setActualWork',
        'acwp' => 'setAcwp',
        'confirmed' => 'setConfirmed',
        'cost' => 'setCost',
        'cost_rate_table_type' => 'setCostRateTableType',
        'cost_variance' => 'setCostVariance',
        'cv' => 'setCv',
        'delay' => 'setDelay',
        'finish' => 'setFinish',
        'finish_variance' => 'setFinishVariance',
        'hyperlink' => 'setHyperlink',
        'hyperlink_address' => 'setHyperlinkAddress',
        'hyperlink_sub_address' => 'setHyperlinkSubAddress',
        'work_variance' => 'setWorkVariance',
        'has_fixed_rate_units' => 'setHasFixedRateUnits',
        'fixed_material' => 'setFixedMaterial',
        'leveling_delay' => 'setLevelingDelay',
        'leveling_delay_format' => 'setLevelingDelayFormat',
        'linked_fields' => 'setLinkedFields',
        'milestone' => 'setMilestone',
        'notes' => 'setNotes',
        'overallocated' => 'setOverallocated',
        'overtime_cost' => 'setOvertimeCost',
        'overtime_work' => 'setOvertimeWork',
        'peak_units' => 'setPeakUnits',
        'regular_work' => 'setRegularWork',
        'remaining_cost' => 'setRemainingCost',
        'remaining_overtime_cost' => 'setRemainingOvertimeCost',
        'remaining_overtime_work' => 'setRemainingOvertimeWork',
        'remaining_work' => 'setRemainingWork',
        'response_pending' => 'setResponsePending',
        'start' => 'setStart',
        'stop' => 'setStop',
        'resume' => 'setResume',
        'start_variance' => 'setStartVariance',
        'summary' => 'setSummary',
        'sv' => 'setSv',
        'units' => 'setUnits',
        'update_needed' => 'setUpdateNeeded',
        'vac' => 'setVac',
        'work' => 'setWork',
        'work_contour' => 'setWorkContour',
        'bcws' => 'setBcws',
        'bcwp' => 'setBcwp',
        'booking_type' => 'setBookingType',
        'actual_work_protected' => 'setActualWorkProtected',
        'actual_overtime_work_protected' => 'setActualOvertimeWorkProtected',
        'creation_date' => 'setCreationDate',
        'assn_owner' => 'setAssnOwner',
        'assn_owner_guid' => 'setAssnOwnerGuid',
        'budget_cost' => 'setBudgetCost',
        'budget_work' => 'setBudgetWork',
        'rate_scale' => 'setRateScale',
        'baselines' => 'setBaselines',
        'extended_attributes' => 'setExtendedAttributes'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'task_uid' => 'getTaskUid',
        'resource_uid' => 'getResourceUid',
        'uid' => 'getUid',
        'percent_work_complete' => 'getPercentWorkComplete',
        'actual_cost' => 'getActualCost',
        'actual_finish' => 'getActualFinish',
        'actual_overtime_cost' => 'getActualOvertimeCost',
        'actual_overtime_work' => 'getActualOvertimeWork',
        'actual_start' => 'getActualStart',
        'actual_work' => 'getActualWork',
        'acwp' => 'getAcwp',
        'confirmed' => 'getConfirmed',
        'cost' => 'getCost',
        'cost_rate_table_type' => 'getCostRateTableType',
        'cost_variance' => 'getCostVariance',
        'cv' => 'getCv',
        'delay' => 'getDelay',
        'finish' => 'getFinish',
        'finish_variance' => 'getFinishVariance',
        'hyperlink' => 'getHyperlink',
        'hyperlink_address' => 'getHyperlinkAddress',
        'hyperlink_sub_address' => 'getHyperlinkSubAddress',
        'work_variance' => 'getWorkVariance',
        'has_fixed_rate_units' => 'getHasFixedRateUnits',
        'fixed_material' => 'getFixedMaterial',
        'leveling_delay' => 'getLevelingDelay',
        'leveling_delay_format' => 'getLevelingDelayFormat',
        'linked_fields' => 'getLinkedFields',
        'milestone' => 'getMilestone',
        'notes' => 'getNotes',
        'overallocated' => 'getOverallocated',
        'overtime_cost' => 'getOvertimeCost',
        'overtime_work' => 'getOvertimeWork',
        'peak_units' => 'getPeakUnits',
        'regular_work' => 'getRegularWork',
        'remaining_cost' => 'getRemainingCost',
        'remaining_overtime_cost' => 'getRemainingOvertimeCost',
        'remaining_overtime_work' => 'getRemainingOvertimeWork',
        'remaining_work' => 'getRemainingWork',
        'response_pending' => 'getResponsePending',
        'start' => 'getStart',
        'stop' => 'getStop',
        'resume' => 'getResume',
        'start_variance' => 'getStartVariance',
        'summary' => 'getSummary',
        'sv' => 'getSv',
        'units' => 'getUnits',
        'update_needed' => 'getUpdateNeeded',
        'vac' => 'getVac',
        'work' => 'getWork',
        'work_contour' => 'getWorkContour',
        'bcws' => 'getBcws',
        'bcwp' => 'getBcwp',
        'booking_type' => 'getBookingType',
        'actual_work_protected' => 'getActualWorkProtected',
        'actual_overtime_work_protected' => 'getActualOvertimeWorkProtected',
        'creation_date' => 'getCreationDate',
        'assn_owner' => 'getAssnOwner',
        'assn_owner_guid' => 'getAssnOwnerGuid',
        'budget_cost' => 'getBudgetCost',
        'budget_work' => 'getBudgetWork',
        'rate_scale' => 'getRateScale',
        'baselines' => 'getBaselines',
        'extended_attributes' => 'getExtendedAttributes'
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
        $this->container['task_uid'] = isset($data['task_uid']) ? $data['task_uid'] : -1;
        $this->container['resource_uid'] = isset($data['resource_uid']) ? $data['resource_uid'] : -1;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['percent_work_complete'] = isset($data['percent_work_complete']) ? $data['percent_work_complete'] : null;
        $this->container['actual_cost'] = isset($data['actual_cost']) ? $data['actual_cost'] : null;
        $this->container['actual_finish'] = isset($data['actual_finish']) ? $data['actual_finish'] : null;
        $this->container['actual_overtime_cost'] = isset($data['actual_overtime_cost']) ? $data['actual_overtime_cost'] : null;
        $this->container['actual_overtime_work'] = isset($data['actual_overtime_work']) ? $data['actual_overtime_work'] : null;
        $this->container['actual_start'] = isset($data['actual_start']) ? $data['actual_start'] : null;
        $this->container['actual_work'] = isset($data['actual_work']) ? $data['actual_work'] : null;
        $this->container['acwp'] = isset($data['acwp']) ? $data['acwp'] : null;
        $this->container['confirmed'] = isset($data['confirmed']) ? $data['confirmed'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['cost_rate_table_type'] = isset($data['cost_rate_table_type']) ? $data['cost_rate_table_type'] : null;
        $this->container['cost_variance'] = isset($data['cost_variance']) ? $data['cost_variance'] : null;
        $this->container['cv'] = isset($data['cv']) ? $data['cv'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['finish'] = isset($data['finish']) ? $data['finish'] : null;
        $this->container['finish_variance'] = isset($data['finish_variance']) ? $data['finish_variance'] : null;
        $this->container['hyperlink'] = isset($data['hyperlink']) ? $data['hyperlink'] : null;
        $this->container['hyperlink_address'] = isset($data['hyperlink_address']) ? $data['hyperlink_address'] : null;
        $this->container['hyperlink_sub_address'] = isset($data['hyperlink_sub_address']) ? $data['hyperlink_sub_address'] : null;
        $this->container['work_variance'] = isset($data['work_variance']) ? $data['work_variance'] : null;
        $this->container['has_fixed_rate_units'] = isset($data['has_fixed_rate_units']) ? $data['has_fixed_rate_units'] : null;
        $this->container['fixed_material'] = isset($data['fixed_material']) ? $data['fixed_material'] : null;
        $this->container['leveling_delay'] = isset($data['leveling_delay']) ? $data['leveling_delay'] : null;
        $this->container['leveling_delay_format'] = isset($data['leveling_delay_format']) ? $data['leveling_delay_format'] : null;
        $this->container['linked_fields'] = isset($data['linked_fields']) ? $data['linked_fields'] : null;
        $this->container['milestone'] = isset($data['milestone']) ? $data['milestone'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['overallocated'] = isset($data['overallocated']) ? $data['overallocated'] : null;
        $this->container['overtime_cost'] = isset($data['overtime_cost']) ? $data['overtime_cost'] : null;
        $this->container['overtime_work'] = isset($data['overtime_work']) ? $data['overtime_work'] : null;
        $this->container['peak_units'] = isset($data['peak_units']) ? $data['peak_units'] : null;
        $this->container['regular_work'] = isset($data['regular_work']) ? $data['regular_work'] : null;
        $this->container['remaining_cost'] = isset($data['remaining_cost']) ? $data['remaining_cost'] : null;
        $this->container['remaining_overtime_cost'] = isset($data['remaining_overtime_cost']) ? $data['remaining_overtime_cost'] : null;
        $this->container['remaining_overtime_work'] = isset($data['remaining_overtime_work']) ? $data['remaining_overtime_work'] : null;
        $this->container['remaining_work'] = isset($data['remaining_work']) ? $data['remaining_work'] : null;
        $this->container['response_pending'] = isset($data['response_pending']) ? $data['response_pending'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['stop'] = isset($data['stop']) ? $data['stop'] : null;
        $this->container['resume'] = isset($data['resume']) ? $data['resume'] : null;
        $this->container['start_variance'] = isset($data['start_variance']) ? $data['start_variance'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['sv'] = isset($data['sv']) ? $data['sv'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : 1.0;
        $this->container['update_needed'] = isset($data['update_needed']) ? $data['update_needed'] : null;
        $this->container['vac'] = isset($data['vac']) ? $data['vac'] : null;
        $this->container['work'] = isset($data['work']) ? $data['work'] : null;
        $this->container['work_contour'] = isset($data['work_contour']) ? $data['work_contour'] : null;
        $this->container['bcws'] = isset($data['bcws']) ? $data['bcws'] : null;
        $this->container['bcwp'] = isset($data['bcwp']) ? $data['bcwp'] : null;
        $this->container['booking_type'] = isset($data['booking_type']) ? $data['booking_type'] : null;
        $this->container['actual_work_protected'] = isset($data['actual_work_protected']) ? $data['actual_work_protected'] : null;
        $this->container['actual_overtime_work_protected'] = isset($data['actual_overtime_work_protected']) ? $data['actual_overtime_work_protected'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['assn_owner'] = isset($data['assn_owner']) ? $data['assn_owner'] : null;
        $this->container['assn_owner_guid'] = isset($data['assn_owner_guid']) ? $data['assn_owner_guid'] : null;
        $this->container['budget_cost'] = isset($data['budget_cost']) ? $data['budget_cost'] : null;
        $this->container['budget_work'] = isset($data['budget_work']) ? $data['budget_work'] : null;
        $this->container['rate_scale'] = isset($data['rate_scale']) ? $data['rate_scale'] : null;
        $this->container['baselines'] = isset($data['baselines']) ? $data['baselines'] : null;
        $this->container['extended_attributes'] = isset($data['extended_attributes']) ? $data['extended_attributes'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['task_uid'] === null) {
            $invalidProperties[] = "'task_uid' can't be null";
        }
        if ($this->container['resource_uid'] === null) {
            $invalidProperties[] = "'resource_uid' can't be null";
        }
        if ($this->container['uid'] === null) {
            $invalidProperties[] = "'uid' can't be null";
        }
        if ($this->container['percent_work_complete'] === null) {
            $invalidProperties[] = "'percent_work_complete' can't be null";
        }
        if ($this->container['actual_cost'] === null) {
            $invalidProperties[] = "'actual_cost' can't be null";
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
        if ($this->container['actual_start'] === null) {
            $invalidProperties[] = "'actual_start' can't be null";
        }
        if ($this->container['actual_work'] === null) {
            $invalidProperties[] = "'actual_work' can't be null";
        }
        if ($this->container['acwp'] === null) {
            $invalidProperties[] = "'acwp' can't be null";
        }
        if ($this->container['confirmed'] === null) {
            $invalidProperties[] = "'confirmed' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['cost_rate_table_type'] === null) {
            $invalidProperties[] = "'cost_rate_table_type' can't be null";
        }
        if ($this->container['cost_variance'] === null) {
            $invalidProperties[] = "'cost_variance' can't be null";
        }
        if ($this->container['cv'] === null) {
            $invalidProperties[] = "'cv' can't be null";
        }
        if ($this->container['delay'] === null) {
            $invalidProperties[] = "'delay' can't be null";
        }
        if ($this->container['finish'] === null) {
            $invalidProperties[] = "'finish' can't be null";
        }
        if ($this->container['finish_variance'] === null) {
            $invalidProperties[] = "'finish_variance' can't be null";
        }
        if ($this->container['work_variance'] === null) {
            $invalidProperties[] = "'work_variance' can't be null";
        }
        if ($this->container['has_fixed_rate_units'] === null) {
            $invalidProperties[] = "'has_fixed_rate_units' can't be null";
        }
        if ($this->container['fixed_material'] === null) {
            $invalidProperties[] = "'fixed_material' can't be null";
        }
        if ($this->container['leveling_delay'] === null) {
            $invalidProperties[] = "'leveling_delay' can't be null";
        }
        if ($this->container['leveling_delay_format'] === null) {
            $invalidProperties[] = "'leveling_delay_format' can't be null";
        }
        if ($this->container['linked_fields'] === null) {
            $invalidProperties[] = "'linked_fields' can't be null";
        }
        if ($this->container['milestone'] === null) {
            $invalidProperties[] = "'milestone' can't be null";
        }
        if ($this->container['overallocated'] === null) {
            $invalidProperties[] = "'overallocated' can't be null";
        }
        if ($this->container['overtime_cost'] === null) {
            $invalidProperties[] = "'overtime_cost' can't be null";
        }
        if ($this->container['overtime_work'] === null) {
            $invalidProperties[] = "'overtime_work' can't be null";
        }
        if ($this->container['peak_units'] === null) {
            $invalidProperties[] = "'peak_units' can't be null";
        }
        if ($this->container['regular_work'] === null) {
            $invalidProperties[] = "'regular_work' can't be null";
        }
        if ($this->container['remaining_cost'] === null) {
            $invalidProperties[] = "'remaining_cost' can't be null";
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
        if ($this->container['response_pending'] === null) {
            $invalidProperties[] = "'response_pending' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['stop'] === null) {
            $invalidProperties[] = "'stop' can't be null";
        }
        if ($this->container['resume'] === null) {
            $invalidProperties[] = "'resume' can't be null";
        }
        if ($this->container['start_variance'] === null) {
            $invalidProperties[] = "'start_variance' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
        }
        if ($this->container['sv'] === null) {
            $invalidProperties[] = "'sv' can't be null";
        }
        if ($this->container['units'] === null) {
            $invalidProperties[] = "'units' can't be null";
        }
        if ($this->container['update_needed'] === null) {
            $invalidProperties[] = "'update_needed' can't be null";
        }
        if ($this->container['vac'] === null) {
            $invalidProperties[] = "'vac' can't be null";
        }
        if ($this->container['work'] === null) {
            $invalidProperties[] = "'work' can't be null";
        }
        if ($this->container['work_contour'] === null) {
            $invalidProperties[] = "'work_contour' can't be null";
        }
        if ($this->container['bcws'] === null) {
            $invalidProperties[] = "'bcws' can't be null";
        }
        if ($this->container['bcwp'] === null) {
            $invalidProperties[] = "'bcwp' can't be null";
        }
        if ($this->container['booking_type'] === null) {
            $invalidProperties[] = "'booking_type' can't be null";
        }
        if ($this->container['actual_work_protected'] === null) {
            $invalidProperties[] = "'actual_work_protected' can't be null";
        }
        if ($this->container['actual_overtime_work_protected'] === null) {
            $invalidProperties[] = "'actual_overtime_work_protected' can't be null";
        }
        if ($this->container['creation_date'] === null) {
            $invalidProperties[] = "'creation_date' can't be null";
        }
        if ($this->container['budget_cost'] === null) {
            $invalidProperties[] = "'budget_cost' can't be null";
        }
        if ($this->container['budget_work'] === null) {
            $invalidProperties[] = "'budget_work' can't be null";
        }
        if ($this->container['rate_scale'] === null) {
            $invalidProperties[] = "'rate_scale' can't be null";
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

        if ($this->container['task_uid'] === null) {
            return false;
        }
        if ($this->container['resource_uid'] === null) {
            return false;
        }
        if ($this->container['uid'] === null) {
            return false;
        }
        if ($this->container['percent_work_complete'] === null) {
            return false;
        }
        if ($this->container['actual_cost'] === null) {
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
        if ($this->container['actual_start'] === null) {
            return false;
        }
        if ($this->container['actual_work'] === null) {
            return false;
        }
        if ($this->container['acwp'] === null) {
            return false;
        }
        if ($this->container['confirmed'] === null) {
            return false;
        }
        if ($this->container['cost'] === null) {
            return false;
        }
        if ($this->container['cost_rate_table_type'] === null) {
            return false;
        }
        if ($this->container['cost_variance'] === null) {
            return false;
        }
        if ($this->container['cv'] === null) {
            return false;
        }
        if ($this->container['delay'] === null) {
            return false;
        }
        if ($this->container['finish'] === null) {
            return false;
        }
        if ($this->container['finish_variance'] === null) {
            return false;
        }
        if ($this->container['work_variance'] === null) {
            return false;
        }
        if ($this->container['has_fixed_rate_units'] === null) {
            return false;
        }
        if ($this->container['fixed_material'] === null) {
            return false;
        }
        if ($this->container['leveling_delay'] === null) {
            return false;
        }
        if ($this->container['leveling_delay_format'] === null) {
            return false;
        }
        if ($this->container['linked_fields'] === null) {
            return false;
        }
        if ($this->container['milestone'] === null) {
            return false;
        }
        if ($this->container['overallocated'] === null) {
            return false;
        }
        if ($this->container['overtime_cost'] === null) {
            return false;
        }
        if ($this->container['overtime_work'] === null) {
            return false;
        }
        if ($this->container['peak_units'] === null) {
            return false;
        }
        if ($this->container['regular_work'] === null) {
            return false;
        }
        if ($this->container['remaining_cost'] === null) {
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
        if ($this->container['response_pending'] === null) {
            return false;
        }
        if ($this->container['start'] === null) {
            return false;
        }
        if ($this->container['stop'] === null) {
            return false;
        }
        if ($this->container['resume'] === null) {
            return false;
        }
        if ($this->container['start_variance'] === null) {
            return false;
        }
        if ($this->container['summary'] === null) {
            return false;
        }
        if ($this->container['sv'] === null) {
            return false;
        }
        if ($this->container['units'] === null) {
            return false;
        }
        if ($this->container['update_needed'] === null) {
            return false;
        }
        if ($this->container['vac'] === null) {
            return false;
        }
        if ($this->container['work'] === null) {
            return false;
        }
        if ($this->container['work_contour'] === null) {
            return false;
        }
        if ($this->container['bcws'] === null) {
            return false;
        }
        if ($this->container['bcwp'] === null) {
            return false;
        }
        if ($this->container['booking_type'] === null) {
            return false;
        }
        if ($this->container['actual_work_protected'] === null) {
            return false;
        }
        if ($this->container['actual_overtime_work_protected'] === null) {
            return false;
        }
        if ($this->container['creation_date'] === null) {
            return false;
        }
        if ($this->container['budget_cost'] === null) {
            return false;
        }
        if ($this->container['budget_work'] === null) {
            return false;
        }
        if ($this->container['rate_scale'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets task_uid
     *
     * @return int
     */
    public function getTaskUid()
    {
        return $this->container['task_uid'];
    }

    /*
     * Sets task_uid
     *
     * @param int $task_uid Returns or sets a task unique id to which a resource is assigned.
     *
     * @return $this
     */
    public function setTaskUid($task_uid)
    {
        $this->container['task_uid'] = $task_uid;

        return $this;
    }

    /*
     * Gets resource_uid
     *
     * @return int
     */
    public function getResourceUid()
    {
        return $this->container['resource_uid'];
    }

    /*
     * Sets resource_uid
     *
     * @param int $resource_uid Returns or sets a resource unique id assigned to a task.
     *
     * @return $this
     */
    public function setResourceUid($resource_uid)
    {
        $this->container['resource_uid'] = $resource_uid;

        return $this;
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
     * @param int $uid Returns or sets the unique identifier of an assignment.
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

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
     * @param int $percent_work_complete Returns or sets the amount of a work completed on an assignment.
     *
     * @return $this
     */
    public function setPercentWorkComplete($percent_work_complete)
    {
        $this->container['percent_work_complete'] = $percent_work_complete;

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
     * @param float $actual_cost Returns or sets the actual cost incurred on an assignment.
     *
     * @return $this
     */
    public function setActualCost($actual_cost)
    {
        $this->container['actual_cost'] = $actual_cost;

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
     * @param \DateTime $actual_finish Returns or sets the actual finish date of an assignment.
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
     * @param float $actual_overtime_cost Returns or sets the actual overtime cost incurred on an assignment.
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
     * @param string $actual_overtime_work Returns or sets the actual amount of an overtime work incurred on an assignment.
     *
     * @return $this
     */
    public function setActualOvertimeWork($actual_overtime_work)
    {
        $this->container['actual_overtime_work'] = $actual_overtime_work;

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
     * @param \DateTime $actual_start Returns or sets the actual start date of an assignment.
     *
     * @return $this
     */
    public function setActualStart($actual_start)
    {
        $this->container['actual_start'] = $actual_start;

        return $this;
    }

    /*
     * Gets actual_work
     *
     * @return string
     */
    public function getActualWork()
    {
        return $this->container['actual_work'];
    }

    /*
     * Sets actual_work
     *
     * @param string $actual_work Returns or sets the actual amount of a work incurred on an assignment.
     *
     * @return $this
     */
    public function setActualWork($actual_work)
    {
        $this->container['actual_work'] = $actual_work;

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
     * @param double $acwp Returns or sets the actual cost of a work performed on an assignment to-date.
     *
     * @return $this
     */
    public function setAcwp($acwp)
    {
        $this->container['acwp'] = $acwp;

        return $this;
    }

    /*
     * Gets confirmed
     *
     * @return bool
     */
    public function getConfirmed()
    {
        return $this->container['confirmed'];
    }

    /*
     * Sets confirmed
     *
     * @param bool $confirmed Determines whether a resource has accepted all of its assignments.
     *
     * @return $this
     */
    public function setConfirmed($confirmed)
    {
        $this->container['confirmed'] = $confirmed;

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
     * @param float $cost Returns or sets the projected or scheduled cost of an assignment.
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /*
     * Gets cost_rate_table_type
     *
     * @return \Aspose\Tasks\Model\RateType
     */
    public function getCostRateTableType()
    {
        return $this->container['cost_rate_table_type'];
    }

    /*
     * Sets cost_rate_table_type
     *
     * @param \Aspose\Tasks\Model\RateType $cost_rate_table_type Returns or sets the cost rate table used for this assignment.
     *
     * @return $this
     */
    public function setCostRateTableType($cost_rate_table_type)
    {
        $this->container['cost_rate_table_type'] = $cost_rate_table_type;

        return $this;
    }

    /*
     * Gets cost_variance
     *
     * @return double
     */
    public function getCostVariance()
    {
        return $this->container['cost_variance'];
    }

    /*
     * Sets cost_variance
     *
     * @param double $cost_variance Returns or sets the difference between the cost and baseline cost of a resource.
     *
     * @return $this
     */
    public function setCostVariance($cost_variance)
    {
        $this->container['cost_variance'] = $cost_variance;

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
     * @param double $cv Returns or sets the earned value cost variance.
     *
     * @return $this
     */
    public function setCv($cv)
    {
        $this->container['cv'] = $cv;

        return $this;
    }

    /*
     * Gets delay
     *
     * @return int
     */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /*
     * Sets delay
     *
     * @param int $delay Returns or sets the delay of an assignment.
     *
     * @return $this
     */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;

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
     * @param \DateTime $finish Returns or sets the scheduled finish date of an assignment.
     *
     * @return $this
     */
    public function setFinish($finish)
    {
        $this->container['finish'] = $finish;

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
     * @param int $finish_variance Returns or sets the variance of an assignment finish date from a baseline finish date.
     *
     * @return $this
     */
    public function setFinishVariance($finish_variance)
    {
        $this->container['finish_variance'] = $finish_variance;

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
     * @param string $hyperlink Returns or sets the title of the hyperlink associated with an assignment.
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
     * @param string $hyperlink_address Returns or sets the hyperlink associated with an assignment.
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
     * @param string $hyperlink_sub_address Returns or sets the document bookmark of the hyperlink associated with an assignment.
     *
     * @return $this
     */
    public function setHyperlinkSubAddress($hyperlink_sub_address)
    {
        $this->container['hyperlink_sub_address'] = $hyperlink_sub_address;

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
     * @param double $work_variance Returns or sets the variance of an assignment work from the baseline work as minutes.
     *
     * @return $this
     */
    public function setWorkVariance($work_variance)
    {
        $this->container['work_variance'] = $work_variance;

        return $this;
    }

    /*
     * Gets has_fixed_rate_units
     *
     * @return bool
     */
    public function getHasFixedRateUnits()
    {
        return $this->container['has_fixed_rate_units'];
    }

    /*
     * Sets has_fixed_rate_units
     *
     * @param bool $has_fixed_rate_units Determines whether the Units have Fixed Rate.
     *
     * @return $this
     */
    public function setHasFixedRateUnits($has_fixed_rate_units)
    {
        $this->container['has_fixed_rate_units'] = $has_fixed_rate_units;

        return $this;
    }

    /*
     * Gets fixed_material
     *
     * @return bool
     */
    public function getFixedMaterial()
    {
        return $this->container['fixed_material'];
    }

    /*
     * Sets fixed_material
     *
     * @param bool $fixed_material Determines whether the consumption of an assigned material resource occurs in a single, fixed amount.
     *
     * @return $this
     */
    public function setFixedMaterial($fixed_material)
    {
        $this->container['fixed_material'] = $fixed_material;

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
     * @param int $leveling_delay Returns or sets the delay caused by leveling.
     *
     * @return $this
     */
    public function setLevelingDelay($leveling_delay)
    {
        $this->container['leveling_delay'] = $leveling_delay;

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
     * @param \Aspose\Tasks\Model\TimeUnitType $leveling_delay_format Returns or sets the duration format of a delay.
     *
     * @return $this
     */
    public function setLevelingDelayFormat($leveling_delay_format)
    {
        $this->container['leveling_delay_format'] = $leveling_delay_format;

        return $this;
    }

    /*
     * Gets linked_fields
     *
     * @return bool
     */
    public function getLinkedFields()
    {
        return $this->container['linked_fields'];
    }

    /*
     * Sets linked_fields
     *
     * @param bool $linked_fields Determines whether the Project is linked to another OLE object.
     *
     * @return $this
     */
    public function setLinkedFields($linked_fields)
    {
        $this->container['linked_fields'] = $linked_fields;

        return $this;
    }

    /*
     * Gets milestone
     *
     * @return bool
     */
    public function getMilestone()
    {
        return $this->container['milestone'];
    }

    /*
     * Sets milestone
     *
     * @param bool $milestone Determines whether the assignment is a milestone.
     *
     * @return $this
     */
    public function setMilestone($milestone)
    {
        $this->container['milestone'] = $milestone;

        return $this;
    }

    /*
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /*
     * Sets notes
     *
     * @param string $notes Returns or sets the text notes associated with an assignment.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /*
     * Gets overallocated
     *
     * @return bool
     */
    public function getOverallocated()
    {
        return $this->container['overallocated'];
    }

    /*
     * Sets overallocated
     *
     * @param bool $overallocated Determines whether the assignment is overallocated.
     *
     * @return $this
     */
    public function setOverallocated($overallocated)
    {
        $this->container['overallocated'] = $overallocated;

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
     * @param float $overtime_cost Returns or sets the sum of the actual and remaining overtime cost of an assignment.
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
     * @param string $overtime_work Returns or sets the scheduled overtime work of an assignment.
     *
     * @return $this
     */
    public function setOvertimeWork($overtime_work)
    {
        $this->container['overtime_work'] = $overtime_work;

        return $this;
    }

    /*
     * Gets peak_units
     *
     * @return double
     */
    public function getPeakUnits()
    {
        return $this->container['peak_units'];
    }

    /*
     * Sets peak_units
     *
     * @param double $peak_units Returns or sets the largest number of a resource's units assigned to a task.
     *
     * @return $this
     */
    public function setPeakUnits($peak_units)
    {
        $this->container['peak_units'] = $peak_units;

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
     * @param string $regular_work Returns or sets the amount of a non-overtime work scheduled for an assignment.
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
     * @param float $remaining_cost Returns or sets the remaining projected cost of completing an assignment.
     *
     * @return $this
     */
    public function setRemainingCost($remaining_cost)
    {
        $this->container['remaining_cost'] = $remaining_cost;

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
     * @param float $remaining_overtime_cost Returns or sets the remaining projected overtime cost of completing an assignment.
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
     * @param string $remaining_overtime_work Returns or sets the remaining overtime work scheduled to complete an assignment.
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
     * @param string $remaining_work Returns or sets the remaining work scheduled to complete an assignment.
     *
     * @return $this
     */
    public function setRemainingWork($remaining_work)
    {
        $this->container['remaining_work'] = $remaining_work;

        return $this;
    }

    /*
     * Gets response_pending
     *
     * @return bool
     */
    public function getResponsePending()
    {
        return $this->container['response_pending'];
    }

    /*
     * Sets response_pending
     *
     * @param bool $response_pending Determines whether the response has been received for a TeamAssign message.
     *
     * @return $this
     */
    public function setResponsePending($response_pending)
    {
        $this->container['response_pending'] = $response_pending;

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
     * @param \DateTime $start Returns or sets the scheduled start date of an assignment.
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

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
     * @param \DateTime $stop Returns or sets the date when assignment is stopped.
     *
     * @return $this
     */
    public function setStop($stop)
    {
        $this->container['stop'] = $stop;

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
     * @param \DateTime $resume Returns or sets the date when assignment is resumed.
     *
     * @return $this
     */
    public function setResume($resume)
    {
        $this->container['resume'] = $resume;

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
     * @param int $start_variance Returns or sets the variance of an assignment start date from a baseline start date.
     *
     * @return $this
     */
    public function setStartVariance($start_variance)
    {
        $this->container['start_variance'] = $start_variance;

        return $this;
    }

    /*
     * Gets summary
     *
     * @return bool
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /*
     * Sets summary
     *
     * @param bool $summary Determines whether the task is a summary task.
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /*
     * Gets sv
     *
     * @return double
     */
    public function getSv()
    {
        return $this->container['sv'];
    }

    /*
     * Sets sv
     *
     * @param double $sv Returns or sets the earned value schedule variance, through the project status date.
     *
     * @return $this
     */
    public function setSv($sv)
    {
        $this->container['sv'] = $sv;

        return $this;
    }

    /*
     * Gets units
     *
     * @return double
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /*
     * Sets units
     *
     * @param double $units Returns or sets the number of units for an assignment.
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /*
     * Gets update_needed
     *
     * @return bool
     */
    public function getUpdateNeeded()
    {
        return $this->container['update_needed'];
    }

    /*
     * Sets update_needed
     *
     * @param bool $update_needed Determines whether the resource assigned to a task needs to be updated as to the status of the task.
     *
     * @return $this
     */
    public function setUpdateNeeded($update_needed)
    {
        $this->container['update_needed'] = $update_needed;

        return $this;
    }

    /*
     * Gets vac
     *
     * @return double
     */
    public function getVac()
    {
        return $this->container['vac'];
    }

    /*
     * Sets vac
     *
     * @param double $vac Returns or sets the difference between basline cost and total cost. Read/write Double.
     *
     * @return $this
     */
    public function setVac($vac)
    {
        $this->container['vac'] = $vac;

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
     * @param string $work Returns or sets the amount of scheduled work for an assignment. Read/write TimeSpan.
     *
     * @return $this
     */
    public function setWork($work)
    {
        $this->container['work'] = $work;

        return $this;
    }

    /*
     * Gets work_contour
     *
     * @return \Aspose\Tasks\Model\WorkContourType
     */
    public function getWorkContour()
    {
        return $this->container['work_contour'];
    }

    /*
     * Sets work_contour
     *
     * @param \Aspose\Tasks\Model\WorkContourType $work_contour Returns or sets the work contour of an assignment.
     *
     * @return $this
     */
    public function setWorkContour($work_contour)
    {
        $this->container['work_contour'] = $work_contour;

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
     * @param double $bcws Returns or sets the budgeted cost of a work on assignment.
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
     * @param double $bcwp Returns or sets the budgeted cost of a work performed on assignment to-date.
     *
     * @return $this
     */
    public function setBcwp($bcwp)
    {
        $this->container['bcwp'] = $bcwp;

        return $this;
    }

    /*
     * Gets booking_type
     *
     * @return \Aspose\Tasks\Model\BookingType
     */
    public function getBookingType()
    {
        return $this->container['booking_type'];
    }

    /*
     * Sets booking_type
     *
     * @param \Aspose\Tasks\Model\BookingType $booking_type Returns or sets the booking type of an assignment.
     *
     * @return $this
     */
    public function setBookingType($booking_type)
    {
        $this->container['booking_type'] = $booking_type;

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
     * @param string $actual_work_protected Returns or sets the duration through which actual work is protected.
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
     * @param string $actual_overtime_work_protected Returns or sets the duration through which actual overtime work is protected.
     *
     * @return $this
     */
    public function setActualOvertimeWorkProtected($actual_overtime_work_protected)
    {
        $this->container['actual_overtime_work_protected'] = $actual_overtime_work_protected;

        return $this;
    }

    /*
     * Gets creation_date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /*
     * Sets creation_date
     *
     * @param \DateTime $creation_date Returns or sets the date that the assignment was created.
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /*
     * Gets assn_owner
     *
     * @return string
     */
    public function getAssnOwner()
    {
        return $this->container['assn_owner'];
    }

    /*
     * Sets assn_owner
     *
     * @param string $assn_owner Returns or sets the name of an assignment owner.
     *
     * @return $this
     */
    public function setAssnOwner($assn_owner)
    {
        $this->container['assn_owner'] = $assn_owner;

        return $this;
    }

    /*
     * Gets assn_owner_guid
     *
     * @return string
     */
    public function getAssnOwnerGuid()
    {
        return $this->container['assn_owner_guid'];
    }

    /*
     * Sets assn_owner_guid
     *
     * @param string $assn_owner_guid Returns or sets the Guid of an assignment owner.
     *
     * @return $this
     */
    public function setAssnOwnerGuid($assn_owner_guid)
    {
        $this->container['assn_owner_guid'] = $assn_owner_guid;

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
     * @param float $budget_cost Returns or sets the budgeted cost of resources on an assignment.
     *
     * @return $this
     */
    public function setBudgetCost($budget_cost)
    {
        $this->container['budget_cost'] = $budget_cost;

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
     * @param string $budget_work Returns or sets the budgeted work amount for a work or material resources on an assignment.
     *
     * @return $this
     */
    public function setBudgetWork($budget_work)
    {
        $this->container['budget_work'] = $budget_work;

        return $this;
    }

    /*
     * Gets rate_scale
     *
     * @return \Aspose\Tasks\Model\RateScaleType
     */
    public function getRateScale()
    {
        return $this->container['rate_scale'];
    }

    /*
     * Sets rate_scale
     *
     * @param \Aspose\Tasks\Model\RateScaleType $rate_scale Returns the time unit for the usage rate of the material resource assignment.
     *
     * @return $this
     */
    public function setRateScale($rate_scale)
    {
        $this->container['rate_scale'] = $rate_scale;

        return $this;
    }

    /*
     * Gets baselines
     *
     * @return \Aspose\Tasks\Model\AssignmentBaseline[]
     */
    public function getBaselines()
    {
        return $this->container['baselines'];
    }

    /*
     * Sets baselines
     *
     * @param \Aspose\Tasks\Model\AssignmentBaseline[] $baselines List of ResourceAssignment's Baseline values.
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
     * @param \Aspose\Tasks\Model\ExtendedAttribute[] $extended_attributes ResourceAssignment extended attributes.
     *
     * @return $this
     */
    public function setExtendedAttributes($extended_attributes)
    {
        $this->container['extended_attributes'] = $extended_attributes;

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


