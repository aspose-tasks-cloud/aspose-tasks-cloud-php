<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutRecalculateProjectUncompleteWorkToStartAfterRequest.php">
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
 * Request model for putRecalculateProjectUncompleteWorkToStartAfter operation.
 */
class PutRecalculateProjectUncompleteWorkToStartAfterRequest
{
    /*
     * The file name
     */
    public $name;
	
    /*
     * DateTime (from System lib)
     */
    public $after;
	
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
    
	
    /*
     * Initializes a new instance of the PutRecalculateProjectUncompleteWorkToStartAfterRequest class.
     *  
     * @param string $name The file name
     * @param \DateTime $after DateTime (from System lib)
     * @param string $storage The document storage
     * @param string $folder The document folder
     * @param string $file_name The filename to save the changes
     */
    public function __construct($name, $after, $storage = null, $folder = null, $file_name = null)             
    {
        $this->name = $name;
        $this->after = $after;
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
     * DateTime (from System lib)
     */
    public function get_after()
    {
        return $this->after;
    }

    /*
     * DateTime (from System lib)
     */
    public function set_after($value)
    {
        $this->after = $value;
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
}
