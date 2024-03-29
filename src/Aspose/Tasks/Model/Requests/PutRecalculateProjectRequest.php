<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutRecalculateProjectRequest.php">
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
 * Request model for putRecalculateProject operation.
 */
class PutRecalculateProjectRequest
{
    /*
     * The filename
     */
    public $name;
	
    /*
     * Project's calculation mode
     */
    public $mode;
	
    /*
     * If true the validation of recalculation will be performed. What data is validated:     At the moment only basic validation of task and task link date ranges is implemented.     Task's date ranges (e.g. ActualStart - ActualFinish, EarlyStart - EarlyFinish, etc.) as well as Task Links dates will be checked against the date criteria that start date is less or equal than finish date.
     */
    public $validate;
	
    /*
     * The filename to save the changes
     */
    public $file_name;
	
    /*
     * The document storage
     */
    public $storage;
	
    /*
     * The document folder
     */
    public $folder;
    
	
    /*
     * Initializes a new instance of the PutRecalculateProjectRequest class.
     *  
     * @param string $name The filename
     * @param string $mode Project's calculation mode
     * @param bool $validate If true the validation of recalculation will be performed. What data is validated:     At the moment only basic validation of task and task link date ranges is implemented.     Task's date ranges (e.g. ActualStart - ActualFinish, EarlyStart - EarlyFinish, etc.) as well as Task Links dates will be checked against the date criteria that start date is less or equal than finish date.
     * @param string $file_name The filename to save the changes
     * @param string $storage The document storage
     * @param string $folder The document folder
     */
    public function __construct($name, $mode = null, $validate = null, $file_name = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->mode = $mode;
        $this->validate = $validate;
        $this->file_name = $file_name;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /*
     * The filename
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The filename
     */
    public function set_name($value)
    {
        $this->name = $value;
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
     * If true the validation of recalculation will be performed. What data is validated:     At the moment only basic validation of task and task link date ranges is implemented.     Task's date ranges (e.g. ActualStart - ActualFinish, EarlyStart - EarlyFinish, etc.) as well as Task Links dates will be checked against the date criteria that start date is less or equal than finish date.
     */
    public function get_validate()
    {
        return $this->validate;
    }

    /*
     * If true the validation of recalculation will be performed. What data is validated:     At the moment only basic validation of task and task link date ranges is implemented.     Task's date ranges (e.g. ActualStart - ActualFinish, EarlyStart - EarlyFinish, etc.) as well as Task Links dates will be checked against the date criteria that start date is less or equal than finish date.
     */
    public function set_validate($value)
    {
        $this->validate = $value;
        return $this;
    }
	
    /*
     * The filename to save the changes
     */
    public function get_file_name()
    {
        return $this->file_name;
    }

    /*
     * The filename to save the changes
     */
    public function set_file_name($value)
    {
        $this->file_name = $value;
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
}
