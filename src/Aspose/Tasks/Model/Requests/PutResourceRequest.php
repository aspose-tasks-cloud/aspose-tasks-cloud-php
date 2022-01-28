<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutResourceRequest.php">
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
 * Request model for putResource operation.
 */
class PutResourceRequest
{
    /*
     * The file name
     */
    public $name;
	
    /*
     * The Uid of a resource
     */
    public $resource_uid;
	
    /*
     * The representation of the modified resource
     */
    public $resource;
	
    /*
     * The calculation mode of a project
     */
    public $mode;
	
    /*
     * Specifies whether the project's recalculation should be performed
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
     * Initializes a new instance of the PutResourceRequest class.
     *  
     * @param string $name The file name
     * @param int $resource_uid The Uid of a resource
     * @param \Aspose\Tasks\Model\Resource $resource The representation of the modified resource
     * @param string $mode The calculation mode of a project
     * @param bool $recalculate Specifies whether the project's recalculation should be performed
     * @param string $storage The document storage
     * @param string $folder The document storage
     * @param string $file_name The filename to save Changes
     */
    public function __construct($name, $resource_uid, $resource, $mode = null, $recalculate = null, $storage = null, $folder = null, $file_name = null)             
    {
        $this->name = $name;
        $this->resource_uid = $resource_uid;
        $this->resource = $resource;
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
     * The Uid of a resource
     */
    public function get_resource_uid()
    {
        return $this->resource_uid;
    }

    /*
     * The Uid of a resource
     */
    public function set_resource_uid($value)
    {
        $this->resource_uid = $value;
        return $this;
    }
	
    /*
     * The representation of the modified resource
     */
    public function get_resource()
    {
        return $this->resource;
    }

    /*
     * The representation of the modified resource
     */
    public function set_resource($value)
    {
        $this->resource = $value;
        return $this;
    }
	
    /*
     * The calculation mode of a project
     */
    public function get_mode()
    {
        return $this->mode;
    }

    /*
     * The calculation mode of a project
     */
    public function set_mode($value)
    {
        $this->mode = $value;
        return $this;
    }
	
    /*
     * Specifies whether the project's recalculation should be performed
     */
    public function get_recalculate()
    {
        return $this->recalculate;
    }

    /*
     * Specifies whether the project's recalculation should be performed
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
