<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClearLevelingRequest.php">
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
 * Request model for clearLeveling operation.
 */
class ClearLevelingRequest
{
    /*
     * The name of the file
     */
    public $name;
	
    /*
     * The array containing task uids              for which leveling delay should be cleared.              If not specified, all leveling delays will be cleared.
     */
    public $task_uids;
	
    /*
     * The name of the project document to save changes to.              If this parameter is omitted then the changes will be saved to the source project document.
     */
    public $file_name;
	
    /*
     * The folder storage
     */
    public $folder;
	
    /*
     * The document storage.
     */
    public $storage;
    
	
    /*
     * Initializes a new instance of the ClearLevelingRequest class.
     *  
     * @param string $name The name of the file
     * @param int[] $task_uids The array containing task uids              for which leveling delay should be cleared.              If not specified, all leveling delays will be cleared.
     * @param string $file_name The name of the project document to save changes to.              If this parameter is omitted then the changes will be saved to the source project document.
     * @param string $folder The folder storage
     * @param string $storage The document storage.
     */
    public function __construct($name, $task_uids = null, $file_name = null, $folder = null, $storage = null)             
    {
        $this->name = $name;
        $this->task_uids = $task_uids;
        $this->file_name = $file_name;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /*
     * The name of the file
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The name of the file
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
	
    /*
     * The array containing task uids              for which leveling delay should be cleared.              If not specified, all leveling delays will be cleared.
     */
    public function get_task_uids()
    {
        return $this->task_uids;
    }

    /*
     * The array containing task uids              for which leveling delay should be cleared.              If not specified, all leveling delays will be cleared.
     */
    public function set_task_uids($value)
    {
        $this->task_uids = $value;
        return $this;
    }
	
    /*
     * The name of the project document to save changes to.              If this parameter is omitted then the changes will be saved to the source project document.
     */
    public function get_file_name()
    {
        return $this->file_name;
    }

    /*
     * The name of the project document to save changes to.              If this parameter is omitted then the changes will be saved to the source project document.
     */
    public function set_file_name($value)
    {
        $this->file_name = $value;
        return $this;
    }
	
    /*
     * The folder storage
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The folder storage
     */
    public function set_folder($value)
    {
        $this->folder = $value;
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
}
