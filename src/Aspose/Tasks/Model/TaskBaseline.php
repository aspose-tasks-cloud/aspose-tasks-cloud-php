<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TaskBaseline.php">
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
 * TaskBaseline
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * TaskBaseline
 *
 * @description Represents baseline values of a task.
 */
class TaskBaseline extends Baseline 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TaskBaseline";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'start' => '\DateTime',
        'finish' => '\DateTime',
        'duration' => 'string',
        'fixed_cost' => 'double',
        'duration_format' => '\Aspose\Tasks\Model\TimeUnitType',
        'estimated_duration' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'start' => 'date-time',
        'finish' => 'date-time',
        'duration' => 'time-span',
        'fixed_cost' => 'double',
        'duration_format' => null,
        'estimated_duration' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'start' => 'Start',
        'finish' => 'Finish',
        'duration' => 'Duration',
        'fixed_cost' => 'FixedCost',
        'duration_format' => 'DurationFormat',
        'estimated_duration' => 'EstimatedDuration'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start' => 'setStart',
        'finish' => 'setFinish',
        'duration' => 'setDuration',
        'fixed_cost' => 'setFixedCost',
        'duration_format' => 'setDurationFormat',
        'estimated_duration' => 'setEstimatedDuration'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start' => 'getStart',
        'finish' => 'getFinish',
        'duration' => 'getDuration',
        'fixed_cost' => 'getFixedCost',
        'duration_format' => 'getDurationFormat',
        'estimated_duration' => 'getEstimatedDuration'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['finish'] = isset($data['finish']) ? $data['finish'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['fixed_cost'] = isset($data['fixed_cost']) ? $data['fixed_cost'] : null;
        $this->container['duration_format'] = isset($data['duration_format']) ? $data['duration_format'] : null;
        $this->container['estimated_duration'] = isset($data['estimated_duration']) ? $data['estimated_duration'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
        if (!parent::valid()) {
            return false;
        }

        return true;
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
     * @param \DateTime $start The scheduled start date of the task when the baseline was saved.
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
     * @param \DateTime $finish The scheduled finish date of the task when the baseline was saved.
     *
     * @return $this
     */
    public function setFinish($finish)
    {
        $this->container['finish'] = $finish;

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
     * @param string $duration The scheduled duration of the task when the baseline was saved.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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
     * @param double $fixed_cost The fixed cost of the task when the baseline was saved.
     *
     * @return $this
     */
    public function setFixedCost($fixed_cost)
    {
        $this->container['fixed_cost'] = $fixed_cost;

        return $this;
    }

    /*
     * Gets duration_format
     *
     * @return \Aspose\Tasks\Model\TimeUnitType
     */
    public function getDurationFormat()
    {
        return $this->container['duration_format'];
    }

    /*
     * Sets duration_format
     *
     * @param \Aspose\Tasks\Model\TimeUnitType $duration_format The format for expressing the duration of the task baseline.
     *
     * @return $this
     */
    public function setDurationFormat($duration_format)
    {
        $this->container['duration_format'] = $duration_format;

        return $this;
    }

    /*
     * Gets estimated_duration
     *
     * @return bool
     */
    public function getEstimatedDuration()
    {
        return $this->container['estimated_duration'];
    }

    /*
     * Sets estimated_duration
     *
     * @param bool $estimated_duration Indicates whether the baseline duration of the task was estimated.
     *
     * @return $this
     */
    public function setEstimatedDuration($estimated_duration)
    {
        $this->container['estimated_duration'] = $estimated_duration;

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


