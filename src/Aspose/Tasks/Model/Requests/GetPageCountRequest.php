<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetPageCountRequest.php">
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
 * Request model for getPageCount" operation.
 */
class GetPageCountRequest
{
    /*
     * Initializes a new instance of the GetPageCountRequest class.
     *  
     * @param string $name The name of the file.
     * @param string $page_size to get page count for.
     * @param string $presentation_format to get page count for.
     * @param string $timescale to get page count for.
     * @param \DateTime $start_date Start date to get page count for.
     * @param \DateTime $end_date End date to get page count for.
     * @param string $folder The document folder
     */
    public function __construct($name, $page_size = null, $presentation_format = null, $timescale = null, $start_date = null, $end_date = null, $folder = null)             
    {
        $this->name = $name;
        $this->page_size = $page_size;
        $this->presentation_format = $presentation_format;
        $this->timescale = $timescale;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->folder = $folder;
    }

    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * to get page count for.
     */
    public $page_size;
	
    /*
     * to get page count for.
     */
    public $presentation_format;
	
    /*
     * to get page count for.
     */
    public $timescale;
	
    /*
     * Start date to get page count for.
     */
    public $start_date;
	
    /*
     * End date to get page count for.
     */
    public $end_date;
	
    /*
     * The document folder
     */
    public $folder;
}