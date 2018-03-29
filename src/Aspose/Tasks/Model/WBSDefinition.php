<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WBSDefinition.php">
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
 * WBSDefinition
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * WBSDefinition
 *
 */
class WBSDefinition implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WBSDefinition";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'code_prefix' => 'string',
        'generate_wbs_code' => 'bool',
        'verify_uniqueness' => 'bool',
        'code_mask_collection' => '\Aspose\Tasks\Model\WBSCodeMask[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'code_prefix' => null,
        'generate_wbs_code' => null,
        'verify_uniqueness' => null,
        'code_mask_collection' => null
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
        'code_prefix' => 'CodePrefix',
        'generate_wbs_code' => 'GenerateWBSCode',
        'verify_uniqueness' => 'VerifyUniqueness',
        'code_mask_collection' => 'CodeMaskCollection'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code_prefix' => 'setCodePrefix',
        'generate_wbs_code' => 'setGenerateWbsCode',
        'verify_uniqueness' => 'setVerifyUniqueness',
        'code_mask_collection' => 'setCodeMaskCollection'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code_prefix' => 'getCodePrefix',
        'generate_wbs_code' => 'getGenerateWbsCode',
        'verify_uniqueness' => 'getVerifyUniqueness',
        'code_mask_collection' => 'getCodeMaskCollection'
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
        $this->container['code_prefix'] = isset($data['code_prefix']) ? $data['code_prefix'] : null;
        $this->container['generate_wbs_code'] = isset($data['generate_wbs_code']) ? $data['generate_wbs_code'] : null;
        $this->container['verify_uniqueness'] = isset($data['verify_uniqueness']) ? $data['verify_uniqueness'] : null;
        $this->container['code_mask_collection'] = isset($data['code_mask_collection']) ? $data['code_mask_collection'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['generate_wbs_code'] === null) {
            $invalidProperties[] = "'generate_wbs_code' can't be null";
        }
        if ($this->container['verify_uniqueness'] === null) {
            $invalidProperties[] = "'verify_uniqueness' can't be null";
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

        if ($this->container['generate_wbs_code'] === null) {
            return false;
        }
        if ($this->container['verify_uniqueness'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets code_prefix
     *
     * @return string
     */
    public function getCodePrefix()
    {
        return $this->container['code_prefix'];
    }

    /*
     * Sets code_prefix
     *
     * @param string $code_prefix Project Code Prefix.
     *
     * @return $this
     */
    public function setCodePrefix($code_prefix)
    {
        $this->container['code_prefix'] = $code_prefix;

        return $this;
    }

    /*
     * Gets generate_wbs_code
     *
     * @return bool
     */
    public function getGenerateWbsCode()
    {
        return $this->container['generate_wbs_code'];
    }

    /*
     * Sets generate_wbs_code
     *
     * @param bool $generate_wbs_code Determines whether to generate WBS code for new task.
     *
     * @return $this
     */
    public function setGenerateWbsCode($generate_wbs_code)
    {
        $this->container['generate_wbs_code'] = $generate_wbs_code;

        return $this;
    }

    /*
     * Gets verify_uniqueness
     *
     * @return bool
     */
    public function getVerifyUniqueness()
    {
        return $this->container['verify_uniqueness'];
    }

    /*
     * Sets verify_uniqueness
     *
     * @param bool $verify_uniqueness Determines whether to verify uniqueness of new WBS codes.
     *
     * @return $this
     */
    public function setVerifyUniqueness($verify_uniqueness)
    {
        $this->container['verify_uniqueness'] = $verify_uniqueness;

        return $this;
    }

    /*
     * Gets code_mask_collection
     *
     * @return \Aspose\Tasks\Model\WBSCodeMask[]
     */
    public function getCodeMaskCollection()
    {
        return $this->container['code_mask_collection'];
    }

    /*
     * Sets code_mask_collection
     *
     * @param \Aspose\Tasks\Model\WBSCodeMask[] $code_mask_collection Collection of WBSCodeMask objects.
     *
     * @return $this
     */
    public function setCodeMaskCollection($code_mask_collection)
    {
        $this->container['code_mask_collection'] = $code_mask_collection;

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


