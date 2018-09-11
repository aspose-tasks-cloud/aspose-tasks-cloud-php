<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutImportProjectFromDbRequest.php">
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
 * Request model for putImportProjectFromDb" operation.
 */
class PutImportProjectFromDbRequest
{
    /*
     * Initializes a new instance of the PutImportProjectFromDbRequest class.
     *  
     * @param string $database_type The type of source database. The supported values are (Msp, Mpd, Primavera).
     * @param string $connection_string The connection string to the source database.
     * @param string $project_uid Uid of the project to import.
     * @param string $filename The name of the resulting file.
     * @param string $format Format of the resulting file. The import to Mpp format is not supported.
     * @param string $folder The document folder.
     * @param string $database_schema Schema of Microsoft project database (if applicable)
     */
    public function __construct($database_type, $connection_string, $project_uid, $filename, $format = null, $folder = null, $database_schema = null)             
    {
        $this->database_type = $database_type;
        $this->connection_string = $connection_string;
        $this->project_uid = $project_uid;
        $this->filename = $filename;
        $this->format = $format;
        $this->folder = $folder;
        $this->database_schema = $database_schema;
    }

    /*
     * The type of source database. The supported values are (Msp, Mpd, Primavera).
     */
    public $database_type;
	
    /*
     * The connection string to the source database.
     */
    public $connection_string;
	
    /*
     * Uid of the project to import.
     */
    public $project_uid;
	
    /*
     * The name of the resulting file.
     */
    public $filename;
	
    /*
     * Format of the resulting file. The import to Mpp format is not supported.
     */
    public $format;
	
    /*
     * The document folder.
     */
    public $folder;
	
    /*
     * Schema of Microsoft project database (if applicable)
     */
    public $database_schema;
}