<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateProjectRequest.php">
 *   Copyright (c) 2020 Aspose.Tasks Cloud
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
 * Request model for updateProject operation.
 */
class UpdateProjectRequest
{
    /*
     * Initializes a new instance of the UpdateProjectRequest class.
     *
     * @param string $name The file name
     * @param string $site_url  The URL of PWA (Project Web Access) API of Project Online
     * @param string $user_name  The user name for the sharepoint site
     * @param \Aspose\Tasks\Model\ProjectServerSaveOptionsDTO $save_options Dispensable save options for Project Server\Project Online
     * @param string $folder The document storage
     * @param string $storage The document storage
     * @param string $token Authorization token for the SharePoint. For example, in c# it can be retrieved using SharePointOnlineCredentials class from Microsoft.SharePoint.Client.Runtime assembly.
     * @param string $x_sharepoint_password The password for the SharePoint site.
     */
    public function __construct($name, $site_url, $save_options = null, $folder = null, $storage = null, $token = null, $user_name = null, $x_sharepoint_password = null)
    {
        $this->name = $name;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->site_url = $site_url;
        $this->user_name = $user_name;
        $this->save_options = $save_options;
        $this->token = $token;
        $this->x_sharepoint_password = $x_sharepoint_password;
    }

    /*
     * The file name
     */
    public $name;

    /*
     * The document storage
     */
    public $storage;

    /*
     * The document storage
     */
    public $folder;

    /*
     * The URL of PWA (Project Web Access) API of Project Online
     */
    public $site_url;

    /*
     * The user name for the sharepoint site.
     */
    public $user_name;

    /*
     * Dispensable save options for Project Server\Project Online.
     */
    public $save_options;

    /*
     * Authorization token for the SharePoint. For example, in c# it can be retrieved using SharePointOnlineCredentials class from Microsoft.SharePoint.Client.Runtime assembly.
     */
    public $token;

    /*
     * The password for the SharePoint site.
     */
    public $x_sharepoint_password;
}