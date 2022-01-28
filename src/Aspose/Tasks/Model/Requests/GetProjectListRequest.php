<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetProjectListRequest.php">
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
 * Request model for getProjectList operation.
 */
class GetProjectListRequest
{
    /*
     * The URL of PWA (Project Web Access) API of Project Online.
     */
    public $site_url;
	
    /*
     * The user name for the sharepoint site.
     */
    public $user_name;
	
    /*
     * Authorization token (SPOIDCRL) for SharePoint's PWA (Project Web Access). For example, in c# it can be retrieved using SharePointOnlineCredentials class from Microsoft.SharePoint.Client.Runtime assembly
     */
    public $x_project_online_token;
	
    /*
     * The password for the SharePoint site.
     */
    public $x_sharepoint_password;
    
	
    /*
     * Initializes a new instance of the GetProjectListRequest class.
     *  
     * @param string $site_url The URL of PWA (Project Web Access) API of Project Online.
     * @param string $user_name The user name for the sharepoint site.
     * @param string $x_project_online_token Authorization token (SPOIDCRL) for SharePoint's PWA (Project Web Access). For example, in c# it can be retrieved using SharePointOnlineCredentials class from Microsoft.SharePoint.Client.Runtime assembly
     * @param string $x_sharepoint_password The password for the SharePoint site.
     */
    public function __construct($site_url, $user_name = null, $x_project_online_token = null, $x_sharepoint_password = null)             
    {
        $this->site_url = $site_url;
        $this->user_name = $user_name;
        $this->x_project_online_token = $x_project_online_token;
        $this->x_sharepoint_password = $x_sharepoint_password;
    }

    /*
     * The URL of PWA (Project Web Access) API of Project Online.
     */
    public function get_site_url()
    {
        return $this->site_url;
    }

    /*
     * The URL of PWA (Project Web Access) API of Project Online.
     */
    public function set_site_url($value)
    {
        $this->site_url = $value;
        return $this;
    }
	
    /*
     * The user name for the sharepoint site.
     */
    public function get_user_name()
    {
        return $this->user_name;
    }

    /*
     * The user name for the sharepoint site.
     */
    public function set_user_name($value)
    {
        $this->user_name = $value;
        return $this;
    }
	
    /*
     * Authorization token (SPOIDCRL) for SharePoint's PWA (Project Web Access). For example, in c# it can be retrieved using SharePointOnlineCredentials class from Microsoft.SharePoint.Client.Runtime assembly
     */
    public function get_x_project_online_token()
    {
        return $this->x_project_online_token;
    }

    /*
     * Authorization token (SPOIDCRL) for SharePoint's PWA (Project Web Access). For example, in c# it can be retrieved using SharePointOnlineCredentials class from Microsoft.SharePoint.Client.Runtime assembly
     */
    public function set_x_project_online_token($value)
    {
        $this->x_project_online_token = $value;
        return $this;
    }
	
    /*
     * The password for the SharePoint site.
     */
    public function get_x_sharepoint_password()
    {
        return $this->x_sharepoint_password;
    }

    /*
     * The password for the SharePoint site.
     */
    public function set_x_sharepoint_password($value)
    {
        $this->x_sharepoint_password = $value;
        return $this;
    }
}
