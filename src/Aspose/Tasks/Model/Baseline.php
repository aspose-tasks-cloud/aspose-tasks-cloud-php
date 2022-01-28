<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Baseline.php">
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
 * Baseline
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * Baseline
 *
 * @description Represents baseline values of a resource or a task.
 */
class Baseline implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Baseline";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'baseline_number' => '\Aspose\Tasks\Model\BaselineType',
        'work' => 'string',
        'cost' => 'float',
        'bcws' => 'double',
        'bcwp' => 'double'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'baseline_number' => null,
        'work' => 'time-span',
        'cost' => 'decimal',
        'bcws' => 'double',
        'bcwp' => 'double'
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
        'baseline_number' => 'baselineNumber',
        'work' => 'work',
        'cost' => 'cost',
        'bcws' => 'bcws',
        'bcwp' => 'bcwp'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'baseline_number' => 'setBaselineNumber',
        'work' => 'setWork',
        'cost' => 'setCost',
        'bcws' => 'setBcws',
        'bcwp' => 'setBcwp'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'baseline_number' => 'getBaselineNumber',
        'work' => 'getWork',
        'cost' => 'getCost',
        'bcws' => 'getBcws',
        'bcwp' => 'getBcwp'
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
        $this->container['baseline_number'] = isset($data['baseline_number']) ? $data['baseline_number'] : null;
        $this->container['work'] = isset($data['work']) ? $data['work'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['bcws'] = isset($data['bcws']) ? $data['bcws'] : null;
        $this->container['bcwp'] = isset($data['bcwp']) ? $data['bcwp'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['baseline_number'] === null) {
            $invalidProperties[] = "'baseline_number' can't be null";
        }
        if ($this->container['work'] === null) {
            $invalidProperties[] = "'work' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['bcws'] === null) {
            $invalidProperties[] = "'bcws' can't be null";
        }
        if ($this->container['bcwp'] === null) {
            $invalidProperties[] = "'bcwp' can't be null";
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

        if ($this->container['baseline_number'] === null) {
            return false;
        }
        if ($this->container['work'] === null) {
            return false;
        }
        if ($this->container['cost'] === null) {
            return false;
        }
        if ($this->container['bcws'] === null) {
            return false;
        }
        if ($this->container['bcwp'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets baseline_number
     *
     * @return \Aspose\Tasks\Model\BaselineType
     */
    public function getBaselineNumber()
    {
        return $this->container['baseline_number'];
    }

    /*
     * Sets baseline_number
     *
     * @param \Aspose\Tasks\Model\BaselineType $baseline_number The unique number of a baseline data record.
     *
     * @return $this
     */
    public function setBaselineNumber($baseline_number)
    {
        $this->container['baseline_number'] = $baseline_number;

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
     * @param string $work The work assigned to a resource when the baseline is saved.
     *
     * @return $this
     */
    public function setWork($work)
    {
        $this->container['work'] = $work;

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
     * @param float $cost The projected cost of a resource when the baseline is saved.
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

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
     * @param double $bcws The budget cost of a work scheduled for a resource.
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
     * @param double $bcwp The budgeted cost of a work performed by a resource for a project to-date.
     *
     * @return $this
     */
    public function setBcwp($bcwp)
    {
        $this->container['bcwp'] = $bcwp;

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


