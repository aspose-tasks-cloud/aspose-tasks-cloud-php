<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetResourceTimephasedDataRequest.php">
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
 * Request model for getResourceTimephasedData operation.
 */
class GetResourceTimephasedDataRequest
{
    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * Uid of resource to get timephased data for.
     */
    public $resource_uid;
	
    /*
     * Type of timephased data to get.
     */
    public $type;
	
    /*
     * Start date.
     */
    public $start_date;
	
    /*
     * End date.
     */
    public $end_date;
	
    /*
     * The document folder.
     */
    public $folder;
	
    /*
     * The document storage.
     */
    public $storage;
    
	
    /*
     * Initializes a new instance of the GetResourceTimephasedDataRequest class.
     *  
     * @param string $name The name of the file.
     * @param int $resource_uid Uid of resource to get timephased data for.
     * @param string $type Type of timephased data to get.
     * @param \DateTime $start_date Start date.
     * @param \DateTime $end_date End date.
     * @param string $folder The document folder.
     * @param string $storage The document storage.
     */
    public function __construct($name, $resource_uid, $type = null, $start_date = null, $end_date = null, $folder = null, $storage = null)             
    {
        $this->name = $name;
        $this->resource_uid = $resource_uid;
        $this->type = $type;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->folder = $folder;
        $this->storage = $storage;
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
     * Uid of resource to get timephased data for.
     */
    public function get_resource_uid()
    {
        return $this->resource_uid;
    }

    /*
     * Uid of resource to get timephased data for.
     */
    public function set_resource_uid($value)
    {
        $this->resource_uid = $value;
        return $this;
    }
	
    /*
     * Type of timephased data to get.
     */
    public function get_type()
    {
        return $this->type;
    }

    /*
     * Type of timephased data to get.
     */
    public function set_type($value)
    {
        $this->type = $value;
        return $this;
    }
	
    /*
     * Start date.
     */
    public function get_start_date()
    {
        return $this->start_date;
    }

    /*
     * Start date.
     */
    public function set_start_date($value)
    {
        $this->start_date = $value;
        return $this;
    }
	
    /*
     * End date.
     */
    public function get_end_date()
    {
        return $this->end_date;
    }

    /*
     * End date.
     */
    public function set_end_date($value)
    {
        $this->end_date = $value;
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
}
