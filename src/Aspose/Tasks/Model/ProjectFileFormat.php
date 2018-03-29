<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ProjectFileFormat.php">
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
/*
 * ProjectFileFormat
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * ProjectFileFormat
 *
 * @description Supported formats in which project file can be saved.
 */
class ProjectFileFormat
{
    /*
     * Possible values of this enum
     */
    const MPP = 'mpp';
    const XML = 'xml';
    const HTML = 'html';
    const BMP = 'bmp';
    const PNG = 'png';
    const JPEG = 'jpeg';
    const PDF = 'pdf';
    const TIFF = 'tiff';
    const XPS = 'xps';
    const SVG = 'svg';
    const CSV = 'csv';
    const TXT = 'txt';
    const SPREADSHEET_ML = 'spreadsheetML';
    const XLSX = 'xlsx';
    const P6XML = 'p6xml';
    const XER = 'xer';
    const MPX = 'mpx';
    const GDHTML = 'Gdhtml';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MPP,
            self::XML,
            self::HTML,
            self::BMP,
            self::PNG,
            self::JPEG,
            self::PDF,
            self::TIFF,
            self::XPS,
            self::SVG,
            self::CSV,
            self::TXT,
            self::SPREADSHEET_ML,
            self::XLSX,
            self::P6XML,
            self::XER,
            self::MPX,
            self::GDHTML,
        ];
    }
}


