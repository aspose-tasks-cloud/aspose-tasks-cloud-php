<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutImportProjectFromFileRequest.php">
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
 * Request model for putImportProjectFromFile" operation.
 */
class PutImportProjectFromFileRequest
{
    /*
     * Initializes a new instance of the PutImportProjectFromFileRequest class.
     *  
     * @param string $name The name of the file.
     * @param string $project_uid Uid of the project to import.
     * @param string $filename The name of the resulting file.
     * @param string $file_type The type of file to import. The supported values are (PrimaveraSqliteDb, PrimaveraXml).
     * @param string $folder The document folder.
     * @param string $output_file_format The format of the resulting file.
     */
    public function __construct($name, $project_uid, $filename, $file_type = null, $folder = null, $output_file_format = null)             
    {
        $this->name = $name;
        $this->project_uid = $project_uid;
        $this->filename = $filename;
        $this->file_type = $file_type;
        $this->folder = $folder;
        $this->output_file_format = $output_file_format;
    }

    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * Uid of the project to import.
     */
    public $project_uid;
	
    /*
     * The name of the resulting file.
     */
    public $filename;
	
    /*
     * The type of file to import. The supported values are (PrimaveraSqliteDb, PrimaveraXml).
     */
    public $file_type;
	
    /*
     * The document folder.
     */
    public $folder;
	
    /*
     * The format of the resulting file.
     */
    public $output_file_format;
}
