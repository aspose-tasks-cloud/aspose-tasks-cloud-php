<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutTaskRecurringInfoRequest.php">
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
namespace Aspose\Tasks\Model\Requests;

/*
 * Request model for putTaskRecurringInfo" operation.
 */
class PutTaskRecurringInfoRequest
{
    /*
     * Initializes a new instance of the PutTaskRecurringInfoRequest class.
     *  
     * @param string $name The name of the file.
     * @param int $task_uid Task Uid.
     * @param \Aspose\Tasks\Model\RecurringInfo $recurring_info A modified DTO of task's recurring info.
     * @param string $file_name File name to save changes to.
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     */
    public function __construct($name, $task_uid, $recurring_info, $file_name = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->task_uid = $task_uid;
        $this->recurring_info = $recurring_info;
        $this->file_name = $file_name;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * Task Uid.
     */
    public $task_uid;
	
    /*
     * A modified DTO of task's recurring info.
     */
    public $recurring_info;
	
    /*
     * File name to save changes to.
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
}
