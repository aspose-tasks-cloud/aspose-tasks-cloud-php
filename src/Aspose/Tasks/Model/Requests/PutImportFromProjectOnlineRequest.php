<?php


/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutImportFromProjectOnlineRequest.php">
 *   Copyright (c) 2019 Aspose.Tasks Cloud
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


class PutImportFromProjectOnlineRequest
{
    /*
     * Initializes a new instance of the PutImportFromProjectOnlineRequest class.
     *
     * @param string $name The name of the resulting file.
     * @param string $site_url The url of sharepoint site. For example, "https://your_company_name.sharepoint.com"
     * @param string $guid Guid of the project to import.
     * @param string $token Authorization token for the SharePoint.
     * @param string $format Format of the resulting file.
     * @param string $storage The document storage.
     * @param string $folder The document folder.
     */
    public function __construct($name, $site_url, $guid, $token = null, $user_name = null, $x_sharepoint_password = null, $format = null, $storage = null, $folder = null)
    {
        $this->name = $name;
        $this->site_url = $site_url;
        $this->guid = $guid;
        $this->token = $token;
        $this->format = $format;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->user_name = $user_name;
        $this->x_sharepoint_password = $x_sharepoint_password;
    }

    /*
     * The name of the file.
     */
    public $name;

    /*
     * The url of sharepoint site. For example, "https://your_company_name.sharepoint.com"
     */
    public $site_url;

    /*
     * Guid of the project to import.
     */
    public $guid;

    /*
     * Authorization token for the SharePoint.
     */
    public $token;

    /*
     * Format of the resulting file.
     */
    public $format;

    /*
     * The document storage.
     */
    public $storage;

    /*
     * The document folder.
     */
    public $folder;

    /*
     * The user name for the sharepoint site.
     */
    public $user_name;

    /*
     * The password for the SharePoint site.
     */
    public $x_sharepoint_password;
}