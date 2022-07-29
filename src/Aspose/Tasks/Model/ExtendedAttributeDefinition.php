<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExtendedAttributeDefinition.php">
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
 * ExtendedAttributeDefinition
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * ExtendedAttributeDefinition
 *
 * @description Extended attribute definition&#39;s brief into.
 */
class ExtendedAttributeDefinition implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ExtendedAttributeDefinition";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'field_id' => 'string',
        'field_name' => 'string',
        'cf_type' => '\Aspose\Tasks\Model\CustomFieldType',
        'guid' => 'string',
        'element_type' => '\Aspose\Tasks\Model\ElementType',
        'max_multi_values' => 'int',
        'user_def' => 'bool',
        'alias' => 'string',
        'secondary_pid' => 'string',
        'auto_roll_down' => 'bool',
        'default_guid' => 'string',
        'lookup_uid' => 'string',
        'phonetics_alias' => 'string',
        'rollup_type' => '\Aspose\Tasks\Model\RollupType',
        'calculation_type' => '\Aspose\Tasks\Model\CalculationType',
        'summary_rows_calculation_type' => '\Aspose\Tasks\Model\SummaryRowsCalculationType',
        'formula' => 'string',
        'restrict_values' => 'bool',
        'valuelist_sort_order' => 'int',
        'append_new_values' => 'bool',
        'default' => 'string',
        'value_list' => '\Aspose\Tasks\Model\Value[]',
        'secondary_guid' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'field_id' => null,
        'field_name' => null,
        'cf_type' => null,
        'guid' => null,
        'element_type' => null,
        'max_multi_values' => 'int32',
        'user_def' => null,
        'alias' => null,
        'secondary_pid' => null,
        'auto_roll_down' => null,
        'default_guid' => null,
        'lookup_uid' => null,
        'phonetics_alias' => null,
        'rollup_type' => null,
        'calculation_type' => null,
        'summary_rows_calculation_type' => null,
        'formula' => null,
        'restrict_values' => null,
        'valuelist_sort_order' => 'int32',
        'append_new_values' => null,
        'default' => null,
        'value_list' => null,
        'secondary_guid' => null
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
        'field_id' => 'fieldId',
        'field_name' => 'fieldName',
        'cf_type' => 'cfType',
        'guid' => 'guid',
        'element_type' => 'elementType',
        'max_multi_values' => 'maxMultiValues',
        'user_def' => 'userDef',
        'alias' => 'alias',
        'secondary_pid' => 'secondaryPid',
        'auto_roll_down' => 'autoRollDown',
        'default_guid' => 'defaultGuid',
        'lookup_uid' => 'lookupUid',
        'phonetics_alias' => 'phoneticsAlias',
        'rollup_type' => 'rollupType',
        'calculation_type' => 'calculationType',
        'summary_rows_calculation_type' => 'summaryRowsCalculationType',
        'formula' => 'formula',
        'restrict_values' => 'restrictValues',
        'valuelist_sort_order' => 'valuelistSortOrder',
        'append_new_values' => 'appendNewValues',
        'default' => 'default',
        'value_list' => 'valueList',
        'secondary_guid' => 'secondaryGuid'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_id' => 'setFieldId',
        'field_name' => 'setFieldName',
        'cf_type' => 'setCfType',
        'guid' => 'setGuid',
        'element_type' => 'setElementType',
        'max_multi_values' => 'setMaxMultiValues',
        'user_def' => 'setUserDef',
        'alias' => 'setAlias',
        'secondary_pid' => 'setSecondaryPid',
        'auto_roll_down' => 'setAutoRollDown',
        'default_guid' => 'setDefaultGuid',
        'lookup_uid' => 'setLookupUid',
        'phonetics_alias' => 'setPhoneticsAlias',
        'rollup_type' => 'setRollupType',
        'calculation_type' => 'setCalculationType',
        'summary_rows_calculation_type' => 'setSummaryRowsCalculationType',
        'formula' => 'setFormula',
        'restrict_values' => 'setRestrictValues',
        'valuelist_sort_order' => 'setValuelistSortOrder',
        'append_new_values' => 'setAppendNewValues',
        'default' => 'setDefault',
        'value_list' => 'setValueList',
        'secondary_guid' => 'setSecondaryGuid'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_id' => 'getFieldId',
        'field_name' => 'getFieldName',
        'cf_type' => 'getCfType',
        'guid' => 'getGuid',
        'element_type' => 'getElementType',
        'max_multi_values' => 'getMaxMultiValues',
        'user_def' => 'getUserDef',
        'alias' => 'getAlias',
        'secondary_pid' => 'getSecondaryPid',
        'auto_roll_down' => 'getAutoRollDown',
        'default_guid' => 'getDefaultGuid',
        'lookup_uid' => 'getLookupUid',
        'phonetics_alias' => 'getPhoneticsAlias',
        'rollup_type' => 'getRollupType',
        'calculation_type' => 'getCalculationType',
        'summary_rows_calculation_type' => 'getSummaryRowsCalculationType',
        'formula' => 'getFormula',
        'restrict_values' => 'getRestrictValues',
        'valuelist_sort_order' => 'getValuelistSortOrder',
        'append_new_values' => 'getAppendNewValues',
        'default' => 'getDefault',
        'value_list' => 'getValueList',
        'secondary_guid' => 'getSecondaryGuid'
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
        $this->container['field_id'] = isset($data['field_id']) ? $data['field_id'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['cf_type'] = isset($data['cf_type']) ? $data['cf_type'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['element_type'] = isset($data['element_type']) ? $data['element_type'] : null;
        $this->container['max_multi_values'] = isset($data['max_multi_values']) ? $data['max_multi_values'] : null;
        $this->container['user_def'] = isset($data['user_def']) ? $data['user_def'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['secondary_pid'] = isset($data['secondary_pid']) ? $data['secondary_pid'] : null;
        $this->container['auto_roll_down'] = isset($data['auto_roll_down']) ? $data['auto_roll_down'] : null;
        $this->container['default_guid'] = isset($data['default_guid']) ? $data['default_guid'] : null;
        $this->container['lookup_uid'] = isset($data['lookup_uid']) ? $data['lookup_uid'] : null;
        $this->container['phonetics_alias'] = isset($data['phonetics_alias']) ? $data['phonetics_alias'] : null;
        $this->container['rollup_type'] = isset($data['rollup_type']) ? $data['rollup_type'] : null;
        $this->container['calculation_type'] = isset($data['calculation_type']) ? $data['calculation_type'] : null;
        $this->container['summary_rows_calculation_type'] = isset($data['summary_rows_calculation_type']) ? $data['summary_rows_calculation_type'] : null;
        $this->container['formula'] = isset($data['formula']) ? $data['formula'] : null;
        $this->container['restrict_values'] = isset($data['restrict_values']) ? $data['restrict_values'] : null;
        $this->container['valuelist_sort_order'] = isset($data['valuelist_sort_order']) ? $data['valuelist_sort_order'] : null;
        $this->container['append_new_values'] = isset($data['append_new_values']) ? $data['append_new_values'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['value_list'] = isset($data['value_list']) ? $data['value_list'] : array();
        $this->container['secondary_guid'] = isset($data['secondary_guid']) ? $data['secondary_guid'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cf_type'] === null) {
            $invalidProperties[] = "'cf_type' can't be null";
        }
        if ($this->container['element_type'] === null) {
            $invalidProperties[] = "'element_type' can't be null";
        }
        if ($this->container['max_multi_values'] === null) {
            $invalidProperties[] = "'max_multi_values' can't be null";
        }
        if ($this->container['user_def'] === null) {
            $invalidProperties[] = "'user_def' can't be null";
        }
        if ($this->container['auto_roll_down'] === null) {
            $invalidProperties[] = "'auto_roll_down' can't be null";
        }
        if ($this->container['rollup_type'] === null) {
            $invalidProperties[] = "'rollup_type' can't be null";
        }
        if ($this->container['calculation_type'] === null) {
            $invalidProperties[] = "'calculation_type' can't be null";
        }
        if ($this->container['summary_rows_calculation_type'] === null) {
            $invalidProperties[] = "'summary_rows_calculation_type' can't be null";
        }
        if ($this->container['restrict_values'] === null) {
            $invalidProperties[] = "'restrict_values' can't be null";
        }
        if ($this->container['valuelist_sort_order'] === null) {
            $invalidProperties[] = "'valuelist_sort_order' can't be null";
        }
        if ($this->container['append_new_values'] === null) {
            $invalidProperties[] = "'append_new_values' can't be null";
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

        if ($this->container['cf_type'] === null) {
            return false;
        }
        if ($this->container['element_type'] === null) {
            return false;
        }
        if ($this->container['max_multi_values'] === null) {
            return false;
        }
        if ($this->container['user_def'] === null) {
            return false;
        }
        if ($this->container['auto_roll_down'] === null) {
            return false;
        }
        if ($this->container['rollup_type'] === null) {
            return false;
        }
        if ($this->container['calculation_type'] === null) {
            return false;
        }
        if ($this->container['summary_rows_calculation_type'] === null) {
            return false;
        }
        if ($this->container['restrict_values'] === null) {
            return false;
        }
        if ($this->container['valuelist_sort_order'] === null) {
            return false;
        }
        if ($this->container['append_new_values'] === null) {
            return false;
        }
        return true;
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
     * @param string $field_id Corresponds to the Pid of a custom field.
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
     * @param string $field_name The name of a custom field.
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /*
     * Gets cf_type
     *
     * @return \Aspose\Tasks\Model\CustomFieldType
     */
    public function getCfType()
    {
        return $this->container['cf_type'];
    }

    /*
     * Sets cf_type
     *
     * @param \Aspose\Tasks\Model\CustomFieldType $cf_type The type of a custom field.
     *
     * @return $this
     */
    public function setCfType($cf_type)
    {
        $this->container['cf_type'] = $cf_type;

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
     * @param string $guid The Guid of a custom field.
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /*
     * Gets element_type
     *
     * @return \Aspose\Tasks\Model\ElementType
     */
    public function getElementType()
    {
        return $this->container['element_type'];
    }

    /*
     * Sets element_type
     *
     * @param \Aspose\Tasks\Model\ElementType $element_type Determines whether the extended attribute is associated with a task or a resource
     *
     * @return $this
     */
    public function setElementType($element_type)
    {
        $this->container['element_type'] = $element_type;

        return $this;
    }

    /*
     * Gets max_multi_values
     *
     * @return int
     */
    public function getMaxMultiValues()
    {
        return $this->container['max_multi_values'];
    }

    /*
     * Sets max_multi_values
     *
     * @param int $max_multi_values The maximum number of values you can set in a picklist.
     *
     * @return $this
     */
    public function setMaxMultiValues($max_multi_values)
    {
        $this->container['max_multi_values'] = $max_multi_values;

        return $this;
    }

    /*
     * Gets user_def
     *
     * @return bool
     */
    public function getUserDef()
    {
        return $this->container['user_def'];
    }

    /*
     * Sets user_def
     *
     * @param bool $user_def Determines whether a custom field is user defined.
     *
     * @return $this
     */
    public function setUserDef($user_def)
    {
        $this->container['user_def'] = $user_def;

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
     * @param string $alias The alias of a custom field.
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /*
     * Gets secondary_pid
     *
     * @return string
     */
    public function getSecondaryPid()
    {
        return $this->container['secondary_pid'];
    }

    /*
     * Sets secondary_pid
     *
     * @param string $secondary_pid The secondary Pid of a custom field.
     *
     * @return $this
     */
    public function setSecondaryPid($secondary_pid)
    {
        $this->container['secondary_pid'] = $secondary_pid;

        return $this;
    }

    /*
     * Gets auto_roll_down
     *
     * @return bool
     */
    public function getAutoRollDown()
    {
        return $this->container['auto_roll_down'];
    }

    /*
     * Sets auto_roll_down
     *
     * @param bool $auto_roll_down Determines whether an automatic rolldown to assignments is enabled.
     *
     * @return $this
     */
    public function setAutoRollDown($auto_roll_down)
    {
        $this->container['auto_roll_down'] = $auto_roll_down;

        return $this;
    }

    /*
     * Gets default_guid
     *
     * @return string
     */
    public function getDefaultGuid()
    {
        return $this->container['default_guid'];
    }

    /*
     * Sets default_guid
     *
     * @param string $default_guid The Guid of the default lookup table entry.
     *
     * @return $this
     */
    public function setDefaultGuid($default_guid)
    {
        $this->container['default_guid'] = $default_guid;

        return $this;
    }

    /*
     * Gets lookup_uid
     *
     * @return string
     */
    public function getLookupUid()
    {
        return $this->container['lookup_uid'];
    }

    /*
     * Sets lookup_uid
     *
     * @param string $lookup_uid The Guid of the lookup table associated with a custom field.
     *
     * @return $this
     */
    public function setLookupUid($lookup_uid)
    {
        $this->container['lookup_uid'] = $lookup_uid;

        return $this;
    }

    /*
     * Gets phonetics_alias
     *
     * @return string
     */
    public function getPhoneticsAlias()
    {
        return $this->container['phonetics_alias'];
    }

    /*
     * Sets phonetics_alias
     *
     * @param string $phonetics_alias The phonetic pronunciation of the alias of a custom field.
     *
     * @return $this
     */
    public function setPhoneticsAlias($phonetics_alias)
    {
        $this->container['phonetics_alias'] = $phonetics_alias;

        return $this;
    }

    /*
     * Gets rollup_type
     *
     * @return \Aspose\Tasks\Model\RollupType
     */
    public function getRollupType()
    {
        return $this->container['rollup_type'];
    }

    /*
     * Sets rollup_type
     *
     * @param \Aspose\Tasks\Model\RollupType $rollup_type The way rollups are calculated.
     *
     * @return $this
     */
    public function setRollupType($rollup_type)
    {
        $this->container['rollup_type'] = $rollup_type;

        return $this;
    }

    /*
     * Gets calculation_type
     *
     * @return \Aspose\Tasks\Model\CalculationType
     */
    public function getCalculationType()
    {
        return $this->container['calculation_type'];
    }

    /*
     * Sets calculation_type
     *
     * @param \Aspose\Tasks\Model\CalculationType $calculation_type Determines whether rollups are calculated for a task and group summary rows.
     *
     * @return $this
     */
    public function setCalculationType($calculation_type)
    {
        $this->container['calculation_type'] = $calculation_type;

        return $this;
    }

    /*
     * Gets summary_rows_calculation_type
     *
     * @return \Aspose\Tasks\Model\SummaryRowsCalculationType
     */
    public function getSummaryRowsCalculationType()
    {
        return $this->container['summary_rows_calculation_type'];
    }

    /*
     * Sets summary_rows_calculation_type
     *
     * @param \Aspose\Tasks\Model\SummaryRowsCalculationType $summary_rows_calculation_type Gets or sets the type of calculation of the custom attribute's value for summary rows.
     *
     * @return $this
     */
    public function setSummaryRowsCalculationType($summary_rows_calculation_type)
    {
        $this->container['summary_rows_calculation_type'] = $summary_rows_calculation_type;

        return $this;
    }

    /*
     * Gets formula
     *
     * @return string
     */
    public function getFormula()
    {
        return $this->container['formula'];
    }

    /*
     * Sets formula
     *
     * @param string $formula The formula that Microsoft Project uses to populate a custom task field.
     *
     * @return $this
     */
    public function setFormula($formula)
    {
        $this->container['formula'] = $formula;

        return $this;
    }

    /*
     * Gets restrict_values
     *
     * @return bool
     */
    public function getRestrictValues()
    {
        return $this->container['restrict_values'];
    }

    /*
     * Sets restrict_values
     *
     * @param bool $restrict_values Determines whether only values in the list are allowed in a file.
     *
     * @return $this
     */
    public function setRestrictValues($restrict_values)
    {
        $this->container['restrict_values'] = $restrict_values;

        return $this;
    }

    /*
     * Gets valuelist_sort_order
     *
     * @return int
     */
    public function getValuelistSortOrder()
    {
        return $this->container['valuelist_sort_order'];
    }

    /*
     * Sets valuelist_sort_order
     *
     * @param int $valuelist_sort_order The way value lists are sorted. Values are: 0=Descending, 1=Ascending.
     *
     * @return $this
     */
    public function setValuelistSortOrder($valuelist_sort_order)
    {
        $this->container['valuelist_sort_order'] = $valuelist_sort_order;

        return $this;
    }

    /*
     * Gets append_new_values
     *
     * @return bool
     */
    public function getAppendNewValues()
    {
        return $this->container['append_new_values'];
    }

    /*
     * Sets append_new_values
     *
     * @param bool $append_new_values Determines whether new values added to a project are automatically added to the list.
     *
     * @return $this
     */
    public function setAppendNewValues($append_new_values)
    {
        $this->container['append_new_values'] = $append_new_values;

        return $this;
    }

    /*
     * Gets default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /*
     * Sets default
     *
     * @param string $default The default value in the list.
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /*
     * Gets value_list
     *
     * @return \Aspose\Tasks\Model\Value[]
     */
    public function getValueList()
    {
        return $this->container['value_list'];
    }

    /*
     * Sets value_list
     *
     * @param \Aspose\Tasks\Model\Value[] $value_list Returns list of Extended Attribute Values.
     *
     * @return $this
     */
    public function setValueList($value_list)
    {
        $this->container['value_list'] = $value_list;

        return $this;
    }

    /*
     * Gets secondary_guid
     *
     * @return string
     */
    public function getSecondaryGuid()
    {
        return $this->container['secondary_guid'];
    }

    /*
     * Sets secondary_guid
     *
     * @param string $secondary_guid Secondary guid of extended attribute.
     *
     * @return $this
     */
    public function setSecondaryGuid($secondary_guid)
    {
        $this->container['secondary_guid'] = $secondary_guid;

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


