<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostResourceRequest.php">
 *   Copyright (c) 2018 Aspose.Tasks Cloud
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
 * Request model for postResource" operation.
 */
class PostResourceRequest
{
    /*
     * Initializes a new instance of the PostResourceRequest class.
     *  
     * @param string $name The name of the file.
     * @param string $resource_name The name of the new resource. The default value is an empty string
     * @param int $before_resource_id The id of the resource to insert the new resource before. The default value is the id of the last resource in a project file.
     * @param string $file_name The name of the project document to save changes to.              If this parameter is omitted then the changes will be saved to the source project document.
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     */
    public function __construct($name, $resource_name = null, $before_resource_id = null, $file_name = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->resource_name = $resource_name;
        $this->before_resource_id = $before_resource_id;
        $this->file_name = $file_name;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * The name of the new resource. The default value is an empty string
     */
    public $resource_name;
	
    /*
     * The id of the resource to insert the new resource before. The default value is the id of the last resource in a project file.
     */
    public $before_resource_id;
	
    /*
     * The name of the project document to save changes to.              If this parameter is omitted then the changes will be saved to the source project document.
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
