<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CreateTableTextStyleRequest.php">
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
 * Request model for createTableTextStyle operation.
 */
class CreateTableTextStyleRequest
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
     * A DTO of TableTextStyle to create
     */
    public $table_text_style;
	
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
     * Initializes a new instance of the CreateTableTextStyleRequest class.
     *  
     * @param string $name The name of the file.
     * @param int $view_uid Uid of the view.
     * @param \Aspose\Tasks\Model\TableTextStyle $table_text_style A DTO of TableTextStyle to create
     * @param string $file_name File name to save changes to.
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     */
    public function __construct($name, $view_uid, $table_text_style, $file_name = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->view_uid = $view_uid;
        $this->table_text_style = $table_text_style;
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
     * A DTO of TableTextStyle to create
     */
    public function get_table_text_style()
    {
        return $this->table_text_style;
    }

    /*
     * A DTO of TableTextStyle to create
     */
    public function set_table_text_style($value)
    {
        $this->table_text_style = $value;
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
