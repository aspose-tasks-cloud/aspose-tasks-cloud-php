<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutCalendarExceptionRequest.php">
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
 * Request model for putCalendarException" operation.
 */
class PutCalendarExceptionRequest
{
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
}