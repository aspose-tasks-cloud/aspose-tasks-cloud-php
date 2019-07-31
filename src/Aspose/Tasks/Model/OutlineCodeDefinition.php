<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OutlineCodeDefinition.php">
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
 * OutlineCodeDefinition
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * OutlineCodeDefinition
 *
 * @description Represents an outline code definition.
 */
class OutlineCodeDefinition implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "OutlineCodeDefinition";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'guid' => 'string',
        'field_id' => 'string',
        'field_name' => 'string',
        'alias' => 'string',
        'phonetic_alias' => 'string',
        'values' => '\Aspose\Tasks\Model\OutlineValue[]',
        'enterprise' => 'bool',
        'enterprise_outline_code_alias' => 'int',
        'resource_substitution_enabled' => 'bool',
        'leaf_only' => 'bool',
        'all_levels_required' => 'bool',
        'only_table_values_allowed' => 'bool',
        'masks' => '\Aspose\Tasks\Model\OutlineMask[]',
        'show_indent' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'guid' => null,
        'field_id' => null,
        'field_name' => null,
        'alias' => null,
        'phonetic_alias' => null,
        'values' => null,
        'enterprise' => null,
        'enterprise_outline_code_alias' => 'int32',
        'resource_substitution_enabled' => null,
        'leaf_only' => null,
        'all_levels_required' => null,
        'only_table_values_allowed' => null,
        'masks' => null,
        'show_indent' => null
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
        'guid' => 'Guid',
        'field_id' => 'FieldId',
        'field_name' => 'FieldName',
        'alias' => 'Alias',
        'phonetic_alias' => 'PhoneticAlias',
        'values' => 'Values',
        'enterprise' => 'Enterprise',
        'enterprise_outline_code_alias' => 'EnterpriseOutlineCodeAlias',
        'resource_substitution_enabled' => 'ResourceSubstitutionEnabled',
        'leaf_only' => 'LeafOnly',
        'all_levels_required' => 'AllLevelsRequired',
        'only_table_values_allowed' => 'OnlyTableValuesAllowed',
        'masks' => 'Masks',
        'show_indent' => 'ShowIndent'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guid' => 'setGuid',
        'field_id' => 'setFieldId',
        'field_name' => 'setFieldName',
        'alias' => 'setAlias',
        'phonetic_alias' => 'setPhoneticAlias',
        'values' => 'setValues',
        'enterprise' => 'setEnterprise',
        'enterprise_outline_code_alias' => 'setEnterpriseOutlineCodeAlias',
        'resource_substitution_enabled' => 'setResourceSubstitutionEnabled',
        'leaf_only' => 'setLeafOnly',
        'all_levels_required' => 'setAllLevelsRequired',
        'only_table_values_allowed' => 'setOnlyTableValuesAllowed',
        'masks' => 'setMasks',
        'show_indent' => 'setShowIndent'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guid' => 'getGuid',
        'field_id' => 'getFieldId',
        'field_name' => 'getFieldName',
        'alias' => 'getAlias',
        'phonetic_alias' => 'getPhoneticAlias',
        'values' => 'getValues',
        'enterprise' => 'getEnterprise',
        'enterprise_outline_code_alias' => 'getEnterpriseOutlineCodeAlias',
        'resource_substitution_enabled' => 'getResourceSubstitutionEnabled',
        'leaf_only' => 'getLeafOnly',
        'all_levels_required' => 'getAllLevelsRequired',
        'only_table_values_allowed' => 'getOnlyTableValuesAllowed',
        'masks' => 'getMasks',
        'show_indent' => 'getShowIndent'
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
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['field_id'] = isset($data['field_id']) ? $data['field_id'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['phonetic_alias'] = isset($data['phonetic_alias']) ? $data['phonetic_alias'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['enterprise'] = isset($data['enterprise']) ? $data['enterprise'] : null;
        $this->container['enterprise_outline_code_alias'] = isset($data['enterprise_outline_code_alias']) ? $data['enterprise_outline_code_alias'] : null;
        $this->container['resource_substitution_enabled'] = isset($data['resource_substitution_enabled']) ? $data['resource_substitution_enabled'] : null;
        $this->container['leaf_only'] = isset($data['leaf_only']) ? $data['leaf_only'] : null;
        $this->container['all_levels_required'] = isset($data['all_levels_required']) ? $data['all_levels_required'] : null;
        $this->container['only_table_values_allowed'] = isset($data['only_table_values_allowed']) ? $data['only_table_values_allowed'] : null;
        $this->container['masks'] = isset($data['masks']) ? $data['masks'] : null;
        $this->container['show_indent'] = isset($data['show_indent']) ? $data['show_indent'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['enterprise'] === null) {
            $invalidProperties[] = "'enterprise' can't be null";
        }
        if ($this->container['enterprise_outline_code_alias'] === null) {
            $invalidProperties[] = "'enterprise_outline_code_alias' can't be null";
        }
        if ($this->container['resource_substitution_enabled'] === null) {
            $invalidProperties[] = "'resource_substitution_enabled' can't be null";
        }
        if ($this->container['leaf_only'] === null) {
            $invalidProperties[] = "'leaf_only' can't be null";
        }
        if ($this->container['all_levels_required'] === null) {
            $invalidProperties[] = "'all_levels_required' can't be null";
        }
        if ($this->container['only_table_values_allowed'] === null) {
            $invalidProperties[] = "'only_table_values_allowed' can't be null";
        }
        if ($this->container['show_indent'] === null) {
            $invalidProperties[] = "'show_indent' can't be null";
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

        if ($this->container['enterprise'] === null) {
            return false;
        }
        if ($this->container['enterprise_outline_code_alias'] === null) {
            return false;
        }
        if ($this->container['resource_substitution_enabled'] === null) {
            return false;
        }
        if ($this->container['leaf_only'] === null) {
            return false;
        }
        if ($this->container['all_levels_required'] === null) {
            return false;
        }
        if ($this->container['only_table_values_allowed'] === null) {
            return false;
        }
        if ($this->container['show_indent'] === null) {
            return false;
        }
        return true;
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
     * @param string $guid The Guid of an outline code.
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /*
     * Gets field_id
     *
     * @return string
     */
    public function getFieldId()
    {
        return $this->container['field_id'];
    }

    /*
     * Sets field_id
     *
     * @param string $field_id Corresponds to the field number of an outline code.
     *
     * @return $this
     */
    public function setFieldId($field_id)
    {
        $this->container['field_id'] = $field_id;

        return $this;
    }

    /*
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /*
     * Sets field_name
     *
     * @param string $field_name The name of a custom outline code.
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /*
     * Gets alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /*
     * Sets alias
     *
     * @param string $alias The alias of a custom outline code.
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /*
     * Gets phonetic_alias
     *
     * @return string
     */
    public function getPhoneticAlias()
    {
        return $this->container['phonetic_alias'];
    }

    /*
     * Sets phonetic_alias
     *
     * @param string $phonetic_alias The phonetic pronunciation of the alias of the custom outline code.
     *
     * @return $this
     */
    public function setPhoneticAlias($phonetic_alias)
    {
        $this->container['phonetic_alias'] = $phonetic_alias;

        return $this;
    }

    /*
     * Gets values
     *
     * @return \Aspose\Tasks\Model\OutlineValue[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /*
     * Sets values
     *
     * @param \Aspose\Tasks\Model\OutlineValue[] $values Returns List&lt;OutlineValue&gt; Values. The values of the table associated with this outline code.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /*
     * Gets enterprise
     *
     * @return bool
     */
    public function getEnterprise()
    {
        return $this->container['enterprise'];
    }

    /*
     * Sets enterprise
     *
     * @param bool $enterprise Determines whether a custom outline code is an enterprise custom outline code.
     *
     * @return $this
     */
    public function setEnterprise($enterprise)
    {
        $this->container['enterprise'] = $enterprise;

        return $this;
    }

    /*
     * Gets enterprise_outline_code_alias
     *
     * @return int
     */
    public function getEnterpriseOutlineCodeAlias()
    {
        return $this->container['enterprise_outline_code_alias'];
    }

    /*
     * Sets enterprise_outline_code_alias
     *
     * @param int $enterprise_outline_code_alias The reference to another custom field for which this outline code definition is an alias.
     *
     * @return $this
     */
    public function setEnterpriseOutlineCodeAlias($enterprise_outline_code_alias)
    {
        $this->container['enterprise_outline_code_alias'] = $enterprise_outline_code_alias;

        return $this;
    }

    /*
     * Gets resource_substitution_enabled
     *
     * @return bool
     */
    public function getResourceSubstitutionEnabled()
    {
        return $this->container['resource_substitution_enabled'];
    }

    /*
     * Sets resource_substitution_enabled
     *
     * @param bool $resource_substitution_enabled Determines whether the custom outline code can be used by the Resource Substitution Wizard in Microsoft Project.
     *
     * @return $this
     */
    public function setResourceSubstitutionEnabled($resource_substitution_enabled)
    {
        $this->container['resource_substitution_enabled'] = $resource_substitution_enabled;

        return $this;
    }

    /*
     * Gets leaf_only
     *
     * @return bool
     */
    public function getLeafOnly()
    {
        return $this->container['leaf_only'];
    }

    /*
     * Sets leaf_only
     *
     * @param bool $leaf_only Determines whether the values specified in this outline code field must be leaf values.
     *
     * @return $this
     */
    public function setLeafOnly($leaf_only)
    {
        $this->container['leaf_only'] = $leaf_only;

        return $this;
    }

    /*
     * Gets all_levels_required
     *
     * @return bool
     */
    public function getAllLevelsRequired()
    {
        return $this->container['all_levels_required'];
    }

    /*
     * Sets all_levels_required
     *
     * @param bool $all_levels_required Determines whether the new codes must have all levels. Not available for Enterprise Codes.
     *
     * @return $this
     */
    public function setAllLevelsRequired($all_levels_required)
    {
        $this->container['all_levels_required'] = $all_levels_required;

        return $this;
    }

    /*
     * Gets only_table_values_allowed
     *
     * @return bool
     */
    public function getOnlyTableValuesAllowed()
    {
        return $this->container['only_table_values_allowed'];
    }

    /*
     * Sets only_table_values_allowed
     *
     * @param bool $only_table_values_allowed Determines whether the values specified must come from values table.
     *
     * @return $this
     */
    public function setOnlyTableValuesAllowed($only_table_values_allowed)
    {
        $this->container['only_table_values_allowed'] = $only_table_values_allowed;

        return $this;
    }

    /*
     * Gets masks
     *
     * @return \Aspose\Tasks\Model\OutlineMask[]
     */
    public function getMasks()
    {
        return $this->container['masks'];
    }

    /*
     * Sets masks
     *
     * @param \Aspose\Tasks\Model\OutlineMask[] $masks Returns List&lt;OutlineMask&gt; Masks. The table of entries that define the outline code mask.
     *
     * @return $this
     */
    public function setMasks($masks)
    {
        $this->container['masks'] = $masks;

        return $this;
    }

    /*
     * Gets show_indent
     *
     * @return bool
     */
    public function getShowIndent()
    {
        return $this->container['show_indent'];
    }

    /*
     * Sets show_indent
     *
     * @param bool $show_indent Determines whether the indents of this outline code must be shown.
     *
     * @return $this
     */
    public function setShowIndent($show_indent)
    {
        $this->container['show_indent'] = $show_indent;

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


