<?php


/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetProjectListRequest.php">
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

/*
 * Request model for getProjectList" operation.
 */
class GetProjectListRequest
{
    /*
     * Initializes a new instance of the GetProjectListRequest class.
     *
     * @param string $site_url The URL of PWA (Project Web Access) API of Project Online.
     * @param string $token Authorization token for the SharePoint.
     * @param string $user_name  The user name for the sharepoint site
     * @param string $x_sharepoint_password The password for the SharePoint site.
     */
    public function __construct($site_url, $token = null, $user_name = null, $x_sharepoint_password = null)
    {
        $this->site_url = $site_url;
        $this->token = $token;
        $this->user_name = $user_name;
        $this->x_sharepoint_password = $x_sharepoint_password;
    }

    /*
     * The URL of PWA (Project Web Access) API of Project Online.
     */
    public $site_url;

    /*
     * Authorization token for the SharePoint. For example, in C# it can be retrieved using
     * SharePointOnlineCredentials class from Microsoft.SharePoint.Client.Runtime assembly
     */
    public $token;

    /*
     * The user name for the sharepoint site.
     */
    public $user_name;

    /*
     * The password for the SharePoint site.
     */
    public $x_sharepoint_password;
}