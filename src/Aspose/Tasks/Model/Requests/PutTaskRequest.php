<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutTaskRequest.php">
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
namespace Aspose\Tasks\Model\Requests;

/*
 * Request model for putTask" operation.
 */
class PutTaskRequest
{
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
}
