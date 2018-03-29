<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutAssignmentRequest.php">
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
 * Request model for putAssignment" operation.
 */
class PutAssignmentRequest
{
    /*
     * Initializes a new instance of the PutAssignmentRequest class.
     *  
     * @param string $name The file name
     * @param int $assignment_uid Assignment UID
     * @param \Aspose\Tasks\Model\ResourceAssignment $assignment Assignment DTO
     * @param string $mode Project's calculation mode
     * @param bool $recalculate boolean value
     * @param string $storage The document storage
     * @param string $folder The document storage
     * @param string $file_name The filename to save Changes
     */
    public function __construct($name, $assignment_uid, $assignment = null, $mode = null, $recalculate = null, $storage = null, $folder = null, $file_name = null)             
    {
        $this->name = $name;
        $this->assignment_uid = $assignment_uid;
        $this->assignment = $assignment;
        $this->mode = $mode;
        $this->recalculate = $recalculate;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->file_name = $file_name;
    }

    /*
     * The file name
     */
    public $name;
	
    /*
     * Assignment UID
     */
    public $assignment_uid;
	
    /*
     * Assignment DTO
     */
    public $assignment;
	
    /*
     * Project's calculation mode
     */
    public $mode;
	
    /*
     * boolean value
     */
    public $recalculate;
	
    /*
     * The document storage
     */
    public $storage;
	
    /*
     * The document storage
     */
    public $folder;
	
    /*
     * The filename to save Changes
     */
    public $file_name;
}