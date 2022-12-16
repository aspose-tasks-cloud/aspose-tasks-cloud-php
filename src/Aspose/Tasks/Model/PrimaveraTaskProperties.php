<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PrimaveraTaskProperties.php">
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
 * PrimaveraTaskProperties
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * PrimaveraTaskProperties
 *
 * @description Represents Primavera-specific properties for a task read from Primavera format (XER of P6XML).
 */
class PrimaveraTaskProperties implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PrimaveraTaskProperties";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'sequence_number' => 'int',
        'activity_id' => 'string',
        'remaining_early_finish' => '\DateTime',
        'remaining_early_start' => '\DateTime',
        'remaining_late_start' => '\DateTime',
        'remaining_late_finish' => '\DateTime',
        'raw_duration_type' => 'string',
        'raw_activity_type' => 'string',
        'raw_complete_percent_type' => 'string',
        'raw_status' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'sequence_number' => 'int32',
        'activity_id' => null,
        'remaining_early_finish' => 'date-time',
        'remaining_early_start' => 'date-time',
        'remaining_late_start' => 'date-time',
        'remaining_late_finish' => 'date-time',
        'raw_duration_type' => null,
        'raw_activity_type' => null,
        'raw_complete_percent_type' => null,
        'raw_status' => null
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
        'sequence_number' => 'sequenceNumber',
        'activity_id' => 'activityId',
        'remaining_early_finish' => 'remainingEarlyFinish',
        'remaining_early_start' => 'remainingEarlyStart',
        'remaining_late_start' => 'remainingLateStart',
        'remaining_late_finish' => 'remainingLateFinish',
        'raw_duration_type' => 'rawDurationType',
        'raw_activity_type' => 'rawActivityType',
        'raw_complete_percent_type' => 'rawCompletePercentType',
        'raw_status' => 'rawStatus'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sequence_number' => 'setSequenceNumber',
        'activity_id' => 'setActivityId',
        'remaining_early_finish' => 'setRemainingEarlyFinish',
        'remaining_early_start' => 'setRemainingEarlyStart',
        'remaining_late_start' => 'setRemainingLateStart',
        'remaining_late_finish' => 'setRemainingLateFinish',
        'raw_duration_type' => 'setRawDurationType',
        'raw_activity_type' => 'setRawActivityType',
        'raw_complete_percent_type' => 'setRawCompletePercentType',
        'raw_status' => 'setRawStatus'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sequence_number' => 'getSequenceNumber',
        'activity_id' => 'getActivityId',
        'remaining_early_finish' => 'getRemainingEarlyFinish',
        'remaining_early_start' => 'getRemainingEarlyStart',
        'remaining_late_start' => 'getRemainingLateStart',
        'remaining_late_finish' => 'getRemainingLateFinish',
        'raw_duration_type' => 'getRawDurationType',
        'raw_activity_type' => 'getRawActivityType',
        'raw_complete_percent_type' => 'getRawCompletePercentType',
        'raw_status' => 'getRawStatus'
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
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['remaining_early_finish'] = isset($data['remaining_early_finish']) ? $data['remaining_early_finish'] : null;
        $this->container['remaining_early_start'] = isset($data['remaining_early_start']) ? $data['remaining_early_start'] : null;
        $this->container['remaining_late_start'] = isset($data['remaining_late_start']) ? $data['remaining_late_start'] : null;
        $this->container['remaining_late_finish'] = isset($data['remaining_late_finish']) ? $data['remaining_late_finish'] : null;
        $this->container['raw_duration_type'] = isset($data['raw_duration_type']) ? $data['raw_duration_type'] : null;
        $this->container['raw_activity_type'] = isset($data['raw_activity_type']) ? $data['raw_activity_type'] : null;
        $this->container['raw_complete_percent_type'] = isset($data['raw_complete_percent_type']) ? $data['raw_complete_percent_type'] : null;
        $this->container['raw_status'] = isset($data['raw_status']) ? $data['raw_status'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
        }
        if ($this->container['remaining_early_finish'] === null) {
            $invalidProperties[] = "'remaining_early_finish' can't be null";
        }
        if ($this->container['remaining_early_start'] === null) {
            $invalidProperties[] = "'remaining_early_start' can't be null";
        }
        if ($this->container['remaining_late_start'] === null) {
            $invalidProperties[] = "'remaining_late_start' can't be null";
        }
        if ($this->container['remaining_late_finish'] === null) {
            $invalidProperties[] = "'remaining_late_finish' can't be null";
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

        if ($this->container['sequence_number'] === null) {
            return false;
        }
        if ($this->container['remaining_early_finish'] === null) {
            return false;
        }
        if ($this->container['remaining_early_start'] === null) {
            return false;
        }
        if ($this->container['remaining_late_start'] === null) {
            return false;
        }
        if ($this->container['remaining_late_finish'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets sequence_number
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /*
     * Sets sequence_number
     *
     * @param int $sequence_number The sequence number of the WBS item (summary tasks). It is used to sort summary tasks in Primavera.
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /*
     * Gets activity_id
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /*
     * Sets activity_id
     *
     * @param string $activity_id Activity id field - a task's unique identifier used by Primavera.
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /*
     * Gets remaining_early_finish
     *
     * @return \DateTime
     */
    public function getRemainingEarlyFinish()
    {
        return $this->container['remaining_early_finish'];
    }

    /*
     * Sets remaining_early_finish
     *
     * @param \DateTime $remaining_early_finish Remaining early finish date - the date when the remaining work for the activity is scheduled to be finished.
     *
     * @return $this
     */
    public function setRemainingEarlyFinish($remaining_early_finish)
    {
        $this->container['remaining_early_finish'] = $remaining_early_finish;

        return $this;
    }

    /*
     * Gets remaining_early_start
     *
     * @return \DateTime
     */
    public function getRemainingEarlyStart()
    {
        return $this->container['remaining_early_start'];
    }

    /*
     * Sets remaining_early_start
     *
     * @param \DateTime $remaining_early_start Remaining early start date - the date when the remaining work for the activity is scheduled to begin.
     *
     * @return $this
     */
    public function setRemainingEarlyStart($remaining_early_start)
    {
        $this->container['remaining_early_start'] = $remaining_early_start;

        return $this;
    }

    /*
     * Gets remaining_late_start
     *
     * @return \DateTime
     */
    public function getRemainingLateStart()
    {
        return $this->container['remaining_late_start'];
    }

    /*
     * Sets remaining_late_start
     *
     * @param \DateTime $remaining_late_start Remaining late start date.
     *
     * @return $this
     */
    public function setRemainingLateStart($remaining_late_start)
    {
        $this->container['remaining_late_start'] = $remaining_late_start;

        return $this;
    }

    /*
     * Gets remaining_late_finish
     *
     * @return \DateTime
     */
    public function getRemainingLateFinish()
    {
        return $this->container['remaining_late_finish'];
    }

    /*
     * Sets remaining_late_finish
     *
     * @param \DateTime $remaining_late_finish Remaining late finish date.
     *
     * @return $this
     */
    public function setRemainingLateFinish($remaining_late_finish)
    {
        $this->container['remaining_late_finish'] = $remaining_late_finish;

        return $this;
    }

    /*
     * Gets raw_duration_type
     *
     * @return string
     */
    public function getRawDurationType()
    {
        return $this->container['raw_duration_type'];
    }

    /*
     * Sets raw_duration_type
     *
     * @param string $raw_duration_type Raw text representation (as in source file) of 'Duration Type' field of the activity.
     *
     * @return $this
     */
    public function setRawDurationType($raw_duration_type)
    {
        $this->container['raw_duration_type'] = $raw_duration_type;

        return $this;
    }

    /*
     * Gets raw_activity_type
     *
     * @return string
     */
    public function getRawActivityType()
    {
        return $this->container['raw_activity_type'];
    }

    /*
     * Sets raw_activity_type
     *
     * @param string $raw_activity_type Raw text representation (as in source file) of 'Activity Type' field of the activity.
     *
     * @return $this
     */
    public function setRawActivityType($raw_activity_type)
    {
        $this->container['raw_activity_type'] = $raw_activity_type;

        return $this;
    }

    /*
     * Gets raw_complete_percent_type
     *
     * @return string
     */
    public function getRawCompletePercentType()
    {
        return $this->container['raw_complete_percent_type'];
    }

    /*
     * Sets raw_complete_percent_type
     *
     * @param string $raw_complete_percent_type Raw text representation (as in source file) of '% Complete Type' field of the activity.
     *
     * @return $this
     */
    public function setRawCompletePercentType($raw_complete_percent_type)
    {
        $this->container['raw_complete_percent_type'] = $raw_complete_percent_type;

        return $this;
    }

    /*
     * Gets raw_status
     *
     * @return string
     */
    public function getRawStatus()
    {
        return $this->container['raw_status'];
    }

    /*
     * Sets raw_status
     *
     * @param string $raw_status Raw text representation (as in source file) of 'Status' field of the activity.
     *
     * @return $this
     */
    public function setRawStatus($raw_status)
    {
        $this->container['raw_status'] = $raw_status;

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


