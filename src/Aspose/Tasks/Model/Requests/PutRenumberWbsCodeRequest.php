<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutRenumberWbsCodeRequest.php">
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
 * Request model for putRenumberWbsCode" operation.
 */
class PutRenumberWbsCodeRequest
{
    /*
     * Initializes a new instance of the PutRenumberWbsCodeRequest class.
     *  
     * @param string $name The name of the file.
     * @param int[] $task_uids Uids of task for WBS codes renumbering. If not specified, WBS codes for all tasks will be renumbered.
     * @param string $storage The document storage.
     * @param string $file_name The name of the project document to save changes to.              If this parameter is omitted then the changes will be saved to the source project document.
     * @param string $folder The document folder.
     */
    public function __construct($name, $task_uids, $storage = null, $file_name = null, $folder = null)             
    {
        $this->name = $name;
        $this->task_uids = $task_uids;
        $this->storage = $storage;
        $this->file_name = $file_name;
        $this->folder = $folder;
    }

    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * Uids of task for WBS codes renumbering. If not specified, WBS codes for all tasks will be renumbered.
     */
    public $task_uids;
	
    /*
     * The document storage.
     */
    public $storage;
	
    /*
     * The name of the project document to save changes to.              If this parameter is omitted then the changes will be saved to the source project document.
     */
    public $file_name;
	
    /*
     * The document folder.
     */
    public $folder;
}
