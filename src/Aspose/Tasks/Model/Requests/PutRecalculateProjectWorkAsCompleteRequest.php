<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutRecalculateProjectWorkAsCompleteRequest.php">
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
 * Request model for putRecalculateProjectWorkAsComplete" operation.
 */
class PutRecalculateProjectWorkAsCompleteRequest
{
    /*
     * Initializes a new instance of the PutRecalculateProjectWorkAsCompleteRequest class.
     *  
     * @param string $name The filename
     * @param \DateTime $complete_through DateTime (type from System lib)
     * @param bool $set_zero_or_hundred_percent_complete_only boolean value
     * @param string $storage The document storage
     * @param string $folder The document folder
     * @param string $file_name The filename to save the changes
     */
    public function __construct($name, $complete_through, $set_zero_or_hundred_percent_complete_only = null, $storage = null, $folder = null, $file_name = null)             
    {
        $this->name = $name;
        $this->complete_through = $complete_through;
        $this->set_zero_or_hundred_percent_complete_only = $set_zero_or_hundred_percent_complete_only;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->file_name = $file_name;
    }

    /*
     * The filename
     */
    public $name;
	
    /*
     * DateTime (type from System lib)
     */
    public $complete_through;
	
    /*
     * boolean value
     */
    public $set_zero_or_hundred_percent_complete_only;
	
    /*
     * The document storage
     */
    public $storage;
	
    /*
     * The document folder
     */
    public $folder;
	
    /*
     * The filename to save the changes
     */
    public $file_name;
}