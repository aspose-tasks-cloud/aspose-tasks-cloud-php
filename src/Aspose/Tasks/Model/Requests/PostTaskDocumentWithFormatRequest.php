<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostTaskDocumentWithFormatRequest.php">
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
 * Request model for postTaskDocumentWithFormat" operation.
 */
class PostTaskDocumentWithFormatRequest
{
    /*
     * Initializes a new instance of the PostTaskDocumentWithFormatRequest class.
     *  
     * @param string $name The name of the file.
     * @param string $format The format of the resulting file.
     * @param object $save_options Instance of inheritor of SaveOptions class which contains format-specific settings for saving a project.
     * @param bool $return_as_zip_archive If parameter is true, HTML resources are included as separate files and returned along with the resulting html file as a zip package.
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     */
    public function __construct($name, $format, $save_options, $return_as_zip_archive = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->format = $format;
        $this->save_options = $save_options;
        $this->return_as_zip_archive = $return_as_zip_archive;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * The format of the resulting file.
     */
    public $format;
	
    /*
     * Instance of inheritor of SaveOptions class which contains format-specific settings for saving a project.
     */
    public $save_options;
	
    /*
     * If parameter is true, HTML resources are included as separate files and returned along with the resulting html file as a zip package.
     */
    public $return_as_zip_archive;
	
    /*
     * The document storage.
     */
    public $storage;
	
    /*
     * The document folder.
     */
    public $folder;
}
