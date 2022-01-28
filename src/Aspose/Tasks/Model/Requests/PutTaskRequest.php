<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutTaskRequest.php">
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
 * Request model for putTask operation.
 */
class PutTaskRequest
{
    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * Task UID
     */
    public $task_uid;
	
    /*
     * TaskDTO
     */
    public $task;
	
    /*
     * CalculationModeDTO
     */
    public $mode;
	
    /*
     * boolean value
     */
    public $recalculate;
	
    /*
     * The document strorage
     */
    public $storage;
	
    /*
     * The document folder
     */
    public $folder;
	
    /*
     * The name of the file to save changes
     */
    public $file_name;
    
	
    /*
     * Initializes a new instance of the PutTaskRequest class.
     *  
     * @param string $name The name of the file.
     * @param int $task_uid Task UID
     * @param \Aspose\Tasks\Model\Task $task TaskDTO
     * @param string $mode CalculationModeDTO
     * @param bool $recalculate boolean value
     * @param string $storage The document strorage
     * @param string $folder The document folder
     * @param string $file_name The name of the file to save changes
     */
    public function __construct($name, $task_uid, $task, $mode = null, $recalculate = null, $storage = null, $folder = null, $file_name = null)             
    {
        $this->name = $name;
        $this->task_uid = $task_uid;
        $this->task = $task;
        $this->mode = $mode;
        $this->recalculate = $recalculate;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->file_name = $file_name;
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
     * Task UID
     */
    public function get_task_uid()
    {
        return $this->task_uid;
    }

    /*
     * Task UID
     */
    public function set_task_uid($value)
    {
        $this->task_uid = $value;
        return $this;
    }
	
    /*
     * TaskDTO
     */
    public function get_task()
    {
        return $this->task;
    }

    /*
     * TaskDTO
     */
    public function set_task($value)
    {
        $this->task = $value;
        return $this;
    }
	
    /*
     * CalculationModeDTO
     */
    public function get_mode()
    {
        return $this->mode;
    }

    /*
     * CalculationModeDTO
     */
    public function set_mode($value)
    {
        $this->mode = $value;
        return $this;
    }
	
    /*
     * boolean value
     */
    public function get_recalculate()
    {
        return $this->recalculate;
    }

    /*
     * boolean value
     */
    public function set_recalculate($value)
    {
        $this->recalculate = $value;
        return $this;
    }
	
    /*
     * The document strorage
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * The document strorage
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
	
    /*
     * The document folder
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The document folder
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
	
    /*
     * The name of the file to save changes
     */
    public function get_file_name()
    {
        return $this->file_name;
    }

    /*
     * The name of the file to save changes
     */
    public function set_file_name($value)
    {
        $this->file_name = $value;
        return $this;
    }
}
