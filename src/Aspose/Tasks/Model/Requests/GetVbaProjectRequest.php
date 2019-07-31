<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetVbaProjectRequest.php">
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
 * Request model for getVbaProject" operation.
 */
class GetVbaProjectRequest
{
    /*
     * Initializes a new instance of the GetVbaProjectRequest class.
     *  
     * @param string $name The name of the file
     * @param string $folder The folder storage
     */
    public function __construct($name, $folder = null)             
    {
        $this->name = $name;
        $this->folder = $folder;
    }

    /*
     * The name of the file
     */
    public $name;
	
    /*
     * The folder storage
     */
    public $folder;
}
