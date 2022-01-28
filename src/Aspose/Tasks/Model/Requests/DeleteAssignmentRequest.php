<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteAssignmentRequest.php">
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
 * Request model for deleteAssignment operation.
 */
class DeleteAssignmentRequest
{
    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * assignment Uid
     */
    public $assignment_uid;
	
    /*
     * The document storage.
     */
    public $storage;
	
    /*
     * The document folder.
     */
    public $folder;
	
    /*
     * The name of the project document to save changes to. If this parameter is omitted then the changes will be saved to the source project document.
     */
    public $file_name;
    
	
    /*
     * Initializes a new instance of the DeleteAssignmentRequest class.
     *  
     * @param string $name The name of the file.
     * @param int $assignment_uid assignment Uid
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     * @param string $file_name The name of the project document to save changes to. If this parameter is omitted then the changes will be saved to the source project document.
     */
    public function __construct($name, $assignment_uid, $storage = null, $folder = null, $file_name = null)             
    {
        $this->name = $name;
        $this->assignment_uid = $assignment_uid;
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
     * assignment Uid
     */
    public function get_assignment_uid()
    {
        return $this->assignment_uid;
    }

    /*
     * assignment Uid
     */
    public function set_assignment_uid($value)
    {
        $this->assignment_uid = $value;
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
}
