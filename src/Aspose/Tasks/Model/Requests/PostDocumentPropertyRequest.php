<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostDocumentPropertyRequest.php">
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
 * Request model for postDocumentProperty" operation.
 */
class PostDocumentPropertyRequest
{
    /*
     * Initializes a new instance of the PostDocumentPropertyRequest class.
     *  
     * @param string $name The document name.
     * @param string $property_name The property name.
     * @param \Aspose\Tasks\Model\DocumentProperty $property DocumentProperty with new property value.
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     * @param string $filename Name of the project document to save changes to. If this parameter is omitted then the changes will be saved to the source project document.
     */
    public function __construct($name, $property_name, $property, $storage = null, $folder = null, $filename = null)             
    {
        $this->name = $name;
        $this->property_name = $property_name;
        $this->property = $property;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->filename = $filename;
    }

    /*
     * The document name.
     */
    public $name;
	
    /*
     * The property name.
     */
    public $property_name;
	
    /*
     * DocumentProperty with new property value.
     */
    public $property;
	
    /*
     * The document storage.
     */
    public $storage;
	
    /*
     * The document folder.
     */
    public $folder;
	
    /*
     * Name of the project document to save changes to. If this parameter is omitted then the changes will be saved to the source project document.
     */
    public $filename;
}
