<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ProjectServerSaveOptionsDTO.php">
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
 * ProjectServerSaveOptionsDTO
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * ProjectServerSaveOptionsDTO
 *
 * @description Allows to specify additional options when project is saved to Project Server or Project Online.
 */
class ProjectServerSaveOptionsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ProjectServerSaveOptionsDTO";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'project_name' => 'string',
        'project_guid' => 'string',
        'timeout' => 'string',
        'polling_interval' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'project_name' => null,
        'project_guid' => null,
        'timeout' => 'time-span',
        'polling_interval' => 'time-span'
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
        'project_name' => 'projectName',
        'project_guid' => 'projectGuid',
        'timeout' => 'timeout',
        'polling_interval' => 'pollingInterval'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_name' => 'setProjectName',
        'project_guid' => 'setProjectGuid',
        'timeout' => 'setTimeout',
        'polling_interval' => 'setPollingInterval'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_name' => 'getProjectName',
        'project_guid' => 'getProjectGuid',
        'timeout' => 'getTimeout',
        'polling_interval' => 'getPollingInterval'
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
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['project_guid'] = isset($data['project_guid']) ? $data['project_guid'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['polling_interval'] = isset($data['polling_interval']) ? $data['polling_interval'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
        if ($this->container['polling_interval'] === null) {
            $invalidProperties[] = "'polling_interval' can't be null";
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

        if ($this->container['timeout'] === null) {
            return false;
        }
        if ($this->container['polling_interval'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /*
     * Sets project_name
     *
     * @param string $project_name Gets or sets name of a project which is displayed in Project Server \\ Project     Online projects list. Should be unique within Project Server \\ Project Online     instance. Is the value is omitted, the value of Prj.Name property will be used     instead.
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /*
     * Gets project_guid
     *
     * @return string
     */
    public function getProjectGuid()
    {
        return $this->container['project_guid'];
    }

    /*
     * Sets project_guid
     *
     * @param string $project_guid Gets or sets unique identifier of a project. Should be unique within Project     Server \\ Project Online instance.
     *
     * @return $this
     */
    public function setProjectGuid($project_guid)
    {
        $this->container['project_guid'] = $project_guid;

        return $this;
    }

    /*
     * Gets timeout
     *
     * @return string
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /*
     * Sets timeout
     *
     * @param string $timeout Gets or sets timeout used when waiting for processing of save project request     by a Project Server's queue processing service. The default value for this property     is 1 minute. The processing time may be longer for large projects or in case when Project     Server instance is too busy responding to other requests.
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /*
     * Gets polling_interval
     *
     * @return string
     */
    public function getPollingInterval()
    {
        return $this->container['polling_interval'];
    }

    /*
     * Sets polling_interval
     *
     * @param string $polling_interval Gets or sets interval between queue job status requests. The default value is     2 seconds.
     *
     * @return $this
     */
    public function setPollingInterval($polling_interval)
    {
        $this->container['polling_interval'] = $polling_interval;

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


