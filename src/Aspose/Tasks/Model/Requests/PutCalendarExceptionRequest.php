<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutCalendarExceptionRequest.php">
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
 * Request model for putCalendarException operation.
 */
class PutCalendarExceptionRequest
{
    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * Calendar Uid
     */
    public $calendar_uid;
	
    /*
     * Index of the calendar exception. See CalendarException.Index property.
     */
    public $index;
	
    /*
     * CalendarException DTO
     */
    public $calendar_exception;
	
    /*
     * The name of the project document to save changes to. If this parameter              is omitted then the changes will be saved to the source project document.
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
    
	
    /*
     * Initializes a new instance of the PutCalendarExceptionRequest class.
     *  
     * @param string $name The name of the file.
     * @param int $calendar_uid Calendar Uid
     * @param int $index Index of the calendar exception. See CalendarException.Index property.
     * @param \Aspose\Tasks\Model\CalendarException $calendar_exception CalendarException DTO
     * @param string $file_name The name of the project document to save changes to. If this parameter              is omitted then the changes will be saved to the source project document.
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     */
    public function __construct($name, $calendar_uid, $index, $calendar_exception, $file_name = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->calendar_uid = $calendar_uid;
        $this->index = $index;
        $this->calendar_exception = $calendar_exception;
        $this->file_name = $file_name;
        $this->storage = $storage;
        $this->folder = $folder;
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
     * Calendar Uid
     */
    public function get_calendar_uid()
    {
        return $this->calendar_uid;
    }

    /*
     * Calendar Uid
     */
    public function set_calendar_uid($value)
    {
        $this->calendar_uid = $value;
        return $this;
    }
	
    /*
     * Index of the calendar exception. See CalendarException.Index property.
     */
    public function get_index()
    {
        return $this->index;
    }

    /*
     * Index of the calendar exception. See CalendarException.Index property.
     */
    public function set_index($value)
    {
        $this->index = $value;
        return $this;
    }
	
    /*
     * CalendarException DTO
     */
    public function get_calendar_exception()
    {
        return $this->calendar_exception;
    }

    /*
     * CalendarException DTO
     */
    public function set_calendar_exception($value)
    {
        $this->calendar_exception = $value;
        return $this;
    }
	
    /*
     * The name of the project document to save changes to. If this parameter              is omitted then the changes will be saved to the source project document.
     */
    public function get_file_name()
    {
        return $this->file_name;
    }

    /*
     * The name of the project document to save changes to. If this parameter              is omitted then the changes will be saved to the source project document.
     */
    public function set_file_name($value)
    {
        $this->file_name = $value;
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
}
