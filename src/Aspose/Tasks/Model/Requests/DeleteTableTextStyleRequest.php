<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteTableTextStyleRequest.php">
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
 * Request model for deleteTableTextStyle operation.
 */
class DeleteTableTextStyleRequest
{
    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * Uid of the view.
     */
    public $view_uid;
	
    /*
     * Uid of the row.
     */
    public $row_uid;
	
    /*
     * Specifies exact field of the row
     */
    public $field;
	
    /*
     * File name to save changes to.
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
     * Initializes a new instance of the DeleteTableTextStyleRequest class.
     *  
     * @param string $name The name of the file.
     * @param int $view_uid Uid of the view.
     * @param int $row_uid Uid of the row.
     * @param string $field Specifies exact field of the row
     * @param string $file_name File name to save changes to.
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     */
    public function __construct($name, $view_uid, $row_uid, $field = null, $file_name = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->view_uid = $view_uid;
        $this->row_uid = $row_uid;
        $this->field = $field;
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
     * Uid of the view.
     */
    public function get_view_uid()
    {
        return $this->view_uid;
    }

    /*
     * Uid of the view.
     */
    public function set_view_uid($value)
    {
        $this->view_uid = $value;
        return $this;
    }
	
    /*
     * Uid of the row.
     */
    public function get_row_uid()
    {
        return $this->row_uid;
    }

    /*
     * Uid of the row.
     */
    public function set_row_uid($value)
    {
        $this->row_uid = $value;
        return $this;
    }
	
    /*
     * Specifies exact field of the row
     */
    public function get_field()
    {
        return $this->field;
    }

    /*
     * Specifies exact field of the row
     */
    public function set_field($value)
    {
        $this->field = $value;
        return $this;
    }
	
    /*
     * File name to save changes to.
     */
    public function get_file_name()
    {
        return $this->file_name;
    }

    /*
     * File name to save changes to.
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
