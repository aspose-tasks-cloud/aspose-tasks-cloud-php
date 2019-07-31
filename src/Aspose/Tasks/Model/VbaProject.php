<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="VbaProject.php">
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
 * VbaProject
 */

namespace Aspose\Tasks\Model;

use \ArrayAccess;
use \Aspose\Tasks\ObjectSerializer;

/*
 * VbaProject
 *
 * @description Represents VbaProject
 */
class VbaProject implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "VbaProject";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'compilation_arguments' => 'string',
        'description' => 'string',
        'help_context_id' => 'int',
        'help_file' => 'string',
        'modules' => '\Aspose\Tasks\Model\VbaModule[]',
        'name' => 'string',
        'references' => '\Aspose\Tasks\Model\VbaReference[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'compilation_arguments' => null,
        'description' => null,
        'help_context_id' => 'int32',
        'help_file' => null,
        'modules' => null,
        'name' => null,
        'references' => null
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
        'compilation_arguments' => 'CompilationArguments',
        'description' => 'Description',
        'help_context_id' => 'HelpContextId',
        'help_file' => 'HelpFile',
        'modules' => 'Modules',
        'name' => 'Name',
        'references' => 'References'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compilation_arguments' => 'setCompilationArguments',
        'description' => 'setDescription',
        'help_context_id' => 'setHelpContextId',
        'help_file' => 'setHelpFile',
        'modules' => 'setModules',
        'name' => 'setName',
        'references' => 'setReferences'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compilation_arguments' => 'getCompilationArguments',
        'description' => 'getDescription',
        'help_context_id' => 'getHelpContextId',
        'help_file' => 'getHelpFile',
        'modules' => 'getModules',
        'name' => 'getName',
        'references' => 'getReferences'
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
        $this->container['compilation_arguments'] = isset($data['compilation_arguments']) ? $data['compilation_arguments'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['help_context_id'] = isset($data['help_context_id']) ? $data['help_context_id'] : null;
        $this->container['help_file'] = isset($data['help_file']) ? $data['help_file'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['references'] = isset($data['references']) ? $data['references'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['help_context_id'] === null) {
            $invalidProperties[] = "'help_context_id' can't be null";
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

        if ($this->container['help_context_id'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets compilation_arguments
     *
     * @return string
     */
    public function getCompilationArguments()
    {
        return $this->container['compilation_arguments'];
    }

    /*
     * Sets compilation_arguments
     *
     * @param string $compilation_arguments Gets conditional Compilation Arguments
     *
     * @return $this
     */
    public function setCompilationArguments($compilation_arguments)
    {
        $this->container['compilation_arguments'] = $compilation_arguments;

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
     * @param string $description Gets a project Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /*
     * Gets help_context_id
     *
     * @return int
     */
    public function getHelpContextId()
    {
        return $this->container['help_context_id'];
    }

    /*
     * Sets help_context_id
     *
     * @param int $help_context_id Gets a project Help Context Id
     *
     * @return $this
     */
    public function setHelpContextId($help_context_id)
    {
        $this->container['help_context_id'] = $help_context_id;

        return $this;
    }

    /*
     * Gets help_file
     *
     * @return string
     */
    public function getHelpFile()
    {
        return $this->container['help_file'];
    }

    /*
     * Sets help_file
     *
     * @param string $help_file Gets a help file name
     *
     * @return $this
     */
    public function setHelpFile($help_file)
    {
        $this->container['help_file'] = $help_file;

        return $this;
    }

    /*
     * Gets modules
     *
     * @return \Aspose\Tasks\Model\VbaModule[]
     */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /*
     * Sets modules
     *
     * @param \Aspose\Tasks\Model\VbaModule[] $modules Gets a collection of VbaModuleCollection
     *
     * @return $this
     */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;

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
     * @param string $name Gets project name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /*
     * Gets references
     *
     * @return \Aspose\Tasks\Model\VbaReference[]
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /*
     * Sets references
     *
     * @param \Aspose\Tasks\Model\VbaReference[] $references Gets a collection of VbaReferenceCollection
     *
     * @return $this
     */
    public function setReferences($references)
    {
        $this->container['references'] = $references;

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


