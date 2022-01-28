<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutAssignmentRequest.php">
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
 * Request model for putAssignment operation.
 */
class PutAssignmentRequest
{
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
    public function __construct($name, $assignment_uid, $assignment, $mode = null, $recalculate = null, $storage = null, $folder = null, $file_name = null)             
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
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The file name
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
	
    /*
     * Assignment UID
     */
    public function get_assignment_uid()
    {
        return $this->assignment_uid;
    }

    /*
     * Assignment UID
     */
    public function set_assignment_uid($value)
    {
        $this->assignment_uid = $value;
        return $this;
    }
	
    /*
     * Assignment DTO
     */
    public function get_assignment()
    {
        return $this->assignment;
    }

    /*
     * Assignment DTO
     */
    public function set_assignment($value)
    {
        $this->assignment = $value;
        return $this;
    }
	
    /*
     * Project's calculation mode
     */
    public function get_mode()
    {
        return $this->mode;
    }

    /*
     * Project's calculation mode
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
     * The document storage
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * The document storage
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
	
    /*
     * The document storage
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The document storage
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
	
    /*
     * The filename to save Changes
     */
    public function get_file_name()
    {
        return $this->file_name;
    }

    /*
     * The filename to save Changes
     */
    public function set_file_name($value)
    {
        $this->file_name = $value;
        return $this;
    }
}
