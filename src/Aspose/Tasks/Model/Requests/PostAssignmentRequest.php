<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostAssignmentRequest.php">
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

namespace Aspose\Tasks\Model\Requests;

/*
 * Request model for postAssignment operation.
 */
class PostAssignmentRequest
{
    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * The unique id of the task to be assigned.
     */
    public $task_uid;
	
    /*
     * The unique id of the resource to be assigned.
     */
    public $resource_uid;
	
    /*
     * The units for the new assignment. If not specified, 'cost' value is used.
     */
    public $units;
	
    /*
     * The cost for a new assignment. If not specified, default value is used.
     */
    public $cost;
	
    /*
     * The name of the project document to save changes to. If this parameter is omitted then the changes will be saved to the source project document.
     */
    public $file_name;
	
    /*
     * The document storage.
     */
    public $storage;
	
    /*
     * The document folder.
     */
    public $folder;
    
	
    /*
     * Initializes a new instance of the PostAssignmentRequest class.
     *  
     * @param string $name The name of the file.
     * @param int $task_uid The unique id of the task to be assigned.
     * @param int $resource_uid The unique id of the resource to be assigned.
     * @param double $units The units for the new assignment. If not specified, 'cost' value is used.
     * @param float $cost The cost for a new assignment. If not specified, default value is used.
     * @param string $file_name The name of the project document to save changes to. If this parameter is omitted then the changes will be saved to the source project document.
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     */
    public function __construct($name, $task_uid, $resource_uid, $units = null, $cost = null, $file_name = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->task_uid = $task_uid;
        $this->resource_uid = $resource_uid;
        $this->units = $units;
        $this->cost = $cost;
        $this->file_name = $file_name;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /*
     * The name of the file.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The name of the file.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
	
    /*
     * The unique id of the task to be assigned.
     */
    public function get_task_uid()
    {
        return $this->task_uid;
    }

    /*
     * The unique id of the task to be assigned.
     */
    public function set_task_uid($value)
    {
        $this->task_uid = $value;
        return $this;
    }
	
    /*
     * The unique id of the resource to be assigned.
     */
    public function get_resource_uid()
    {
        return $this->resource_uid;
    }

    /*
     * The unique id of the resource to be assigned.
     */
    public function set_resource_uid($value)
    {
        $this->resource_uid = $value;
        return $this;
    }
	
    /*
     * The units for the new assignment. If not specified, 'cost' value is used.
     */
    public function get_units()
    {
        return $this->units;
    }

    /*
     * The units for the new assignment. If not specified, 'cost' value is used.
     */
    public function set_units($value)
    {
        $this->units = $value;
        return $this;
    }
	
    /*
     * The cost for a new assignment. If not specified, default value is used.
     */
    public function get_cost()
    {
        return $this->cost;
    }

    /*
     * The cost for a new assignment. If not specified, default value is used.
     */
    public function set_cost($value)
    {
        $this->cost = $value;
        return $this;
    }
	
    /*
     * The name of the project document to save changes to. If this parameter is omitted then the changes will be saved to the source project document.
     */
    public function get_file_name()
    {
        return $this->file_name;
    }

    /*
     * The name of the project document to save changes to. If this parameter is omitted then the changes will be saved to the source project document.
     */
    public function set_file_name($value)
    {
        $this->file_name = $value;
        return $this;
    }
	
    /*
     * The document storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * The document storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
	
    /*
     * The document folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The document folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
}
