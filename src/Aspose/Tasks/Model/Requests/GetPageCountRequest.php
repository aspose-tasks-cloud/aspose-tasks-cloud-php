<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetPageCountRequest.php">
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
 * Request model for getPageCount operation.
 */
class GetPageCountRequest
{
    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * PageSize to get page count for.
     */
    public $page_size;
	
    /*
     * PresentationFormat to get page count for.
     */
    public $presentation_format;
	
    /*
     * Timescale to get page count for.
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
	
    /*
     * The document storage.
     */
    public $storage;
    
	
    /*
     * Initializes a new instance of the GetPageCountRequest class.
     *  
     * @param string $name The name of the file.
     * @param string $page_size PageSize to get page count for.
     * @param string $presentation_format PresentationFormat to get page count for.
     * @param string $timescale Timescale to get page count for.
     * @param \DateTime $start_date Start date to get page count for.
     * @param \DateTime $end_date End date to get page count for.
     * @param string $folder The document folder
     * @param string $storage The document storage.
     */
    public function __construct($name, $page_size = null, $presentation_format = null, $timescale = null, $start_date = null, $end_date = null, $folder = null, $storage = null)             
    {
        $this->name = $name;
        $this->page_size = $page_size;
        $this->presentation_format = $presentation_format;
        $this->timescale = $timescale;
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
     * PageSize to get page count for.
     */
    public function get_page_size()
    {
        return $this->page_size;
    }

    /*
     * PageSize to get page count for.
     */
    public function set_page_size($value)
    {
        $this->page_size = $value;
        return $this;
    }
	
    /*
     * PresentationFormat to get page count for.
     */
    public function get_presentation_format()
    {
        return $this->presentation_format;
    }

    /*
     * PresentationFormat to get page count for.
     */
    public function set_presentation_format($value)
    {
        $this->presentation_format = $value;
        return $this;
    }
	
    /*
     * Timescale to get page count for.
     */
    public function get_timescale()
    {
        return $this->timescale;
    }

    /*
     * Timescale to get page count for.
     */
    public function set_timescale($value)
    {
        $this->timescale = $value;
        return $this;
    }
	
    /*
     * Start date to get page count for.
     */
    public function get_start_date()
    {
        return $this->start_date;
    }

    /*
     * Start date to get page count for.
     */
    public function set_start_date($value)
    {
        $this->start_date = $value;
        return $this;
    }
	
    /*
     * End date to get page count for.
     */
    public function get_end_date()
    {
        return $this->end_date;
    }

    /*
     * End date to get page count for.
     */
    public function set_end_date($value)
    {
        $this->end_date = $value;
        return $this;
    }
	
    /*
     * The document folder
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The document folder
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
