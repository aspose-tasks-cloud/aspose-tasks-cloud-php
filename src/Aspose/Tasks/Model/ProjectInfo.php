<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ProjectInfo.php">
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
 * ProjectInfo
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * ProjectInfo
 *
 * @description Brief info about the published project available on Project Online.
 */
class ProjectInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ProjectInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'created_date' => '\DateTime',
        'is_checked_out' => 'bool',
        'last_published_date' => '\DateTime',
        'last_saved_date' => '\DateTime',
        'description' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'name' => null,
        'created_date' => 'date-time',
        'is_checked_out' => null,
        'last_published_date' => 'date-time',
        'last_saved_date' => 'date-time',
        'description' => null
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
        'id' => 'id',
        'name' => 'name',
        'created_date' => 'createdDate',
        'is_checked_out' => 'isCheckedOut',
        'last_published_date' => 'lastPublishedDate',
        'last_saved_date' => 'lastSavedDate',
        'description' => 'description'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'created_date' => 'setCreatedDate',
        'is_checked_out' => 'setIsCheckedOut',
        'last_published_date' => 'setLastPublishedDate',
        'last_saved_date' => 'setLastSavedDate',
        'description' => 'setDescription'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'created_date' => 'getCreatedDate',
        'is_checked_out' => 'getIsCheckedOut',
        'last_published_date' => 'getLastPublishedDate',
        'last_saved_date' => 'getLastSavedDate',
        'description' => 'getDescription'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['is_checked_out'] = isset($data['is_checked_out']) ? $data['is_checked_out'] : null;
        $this->container['last_published_date'] = isset($data['last_published_date']) ? $data['last_published_date'] : null;
        $this->container['last_saved_date'] = isset($data['last_saved_date']) ? $data['last_saved_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
        }
        if ($this->container['is_checked_out'] === null) {
            $invalidProperties[] = "'is_checked_out' can't be null";
        }
        if ($this->container['last_published_date'] === null) {
            $invalidProperties[] = "'last_published_date' can't be null";
        }
        if ($this->container['last_saved_date'] === null) {
            $invalidProperties[] = "'last_saved_date' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['created_date'] === null) {
            return false;
        }
        if ($this->container['is_checked_out'] === null) {
            return false;
        }
        if ($this->container['last_published_date'] === null) {
            return false;
        }
        if ($this->container['last_saved_date'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /*
     * Sets id
     *
     * @param string $id The unique identifier of the project.
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
     * @param string $name The name of the project.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /*
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /*
     * Sets created_date
     *
     * @param \DateTime $created_date The date and time when the project was created.
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /*
     * Gets is_checked_out
     *
     * @return bool
     */
    public function getIsCheckedOut()
    {
        return $this->container['is_checked_out'];
    }

    /*
     * Sets is_checked_out
     *
     * @param bool $is_checked_out Value indicating whether the project is checked out.
     *
     * @return $this
     */
    public function setIsCheckedOut($is_checked_out)
    {
        $this->container['is_checked_out'] = $is_checked_out;

        return $this;
    }

    /*
     * Gets last_published_date
     *
     * @return \DateTime
     */
    public function getLastPublishedDate()
    {
        return $this->container['last_published_date'];
    }

    /*
     * Sets last_published_date
     *
     * @param \DateTime $last_published_date The most recent date when the project was published.
     *
     * @return $this
     */
    public function setLastPublishedDate($last_published_date)
    {
        $this->container['last_published_date'] = $last_published_date;

        return $this;
    }

    /*
     * Gets last_saved_date
     *
     * @return \DateTime
     */
    public function getLastSavedDate()
    {
        return $this->container['last_saved_date'];
    }

    /*
     * Sets last_saved_date
     *
     * @param \DateTime $last_saved_date The most recent date when the project was saved.
     *
     * @return $this
     */
    public function setLastSavedDate($last_saved_date)
    {
        $this->container['last_saved_date'] = $last_saved_date;

        return $this;
    }

    /*
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /*
     * Sets description
     *
     * @param string $description The description of the project.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


