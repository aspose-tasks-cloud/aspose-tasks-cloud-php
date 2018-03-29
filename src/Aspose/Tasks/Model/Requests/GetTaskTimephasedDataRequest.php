<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetTaskTimephasedDataRequest.php">
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
 * Request model for getTaskTimephasedData" operation.
 */
class GetTaskTimephasedDataRequest
{
    /*
     * Initializes a new instance of the GetTaskTimephasedDataRequest class.
     *  
     * @param string $name The name of the file.
     * @param int $task_uid Uid of task to get timephased data for.
     * @param string $type Type of timephased data to get.
     * @param \DateTime $start_date Start date.
     * @param \DateTime $end_date End date.
     * @param string $folder The document folder.
     */
    public function __construct($name, $task_uid, $type = null, $start_date = null, $end_date = null, $folder = null)             
    {
        $this->name = $name;
        $this->task_uid = $task_uid;
        $this->type = $type;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->folder = $folder;
    }

    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * Uid of task to get timephased data for.
     */
    public $task_uid;
	
    /*
     * Type of timephased data to get.
     */
    public $type;
	
    /*
     * Start date.
     */
    public $start_date;
	
    /*
     * End date.
     */
    public $end_date;
	
    /*
     * The document folder.
     */
    public $folder;
}