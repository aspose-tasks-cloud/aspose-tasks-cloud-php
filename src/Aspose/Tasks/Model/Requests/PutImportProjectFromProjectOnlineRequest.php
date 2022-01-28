<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutImportProjectFromProjectOnlineRequest.php">
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
 * Request model for putImportProjectFromProjectOnline operation.
 */
class PutImportProjectFromProjectOnlineRequest
{
    /*
     * The name of the resulting file.
     */
    public $name;
	
    /*
     * Guid of the project to import.
     */
    public $guid;
	
    /*
     * The URL of PWA (Project Web Access) API of Project Online
     */
    public $site_url;
	
    /*
     * The user name for the sharepoint site.
     */
    public $user_name;
	
    /*
     * Format of the resulting file.
     */
    public $format;
	
    /*
     * The document folder.
     */
    public $folder;
	
    /*
     * The document storage.
     */
    public $storage;
	
    /*
     * Authorization token (SPOIDCRL) for SharePoint's PWA (Project Web Access). For example, in c# it can be retrieved using SharePointOnlineCredentials class from Microsoft.SharePoint.Client.Runtime assembly
     */
    public $x_project_online_token;
	
    /*
     * The password for the SharePoint site.
     */
    public $x_sharepoint_password;
    
	
    /*
     * Initializes a new instance of the PutImportProjectFromProjectOnlineRequest class.
     *  
     * @param string $name The name of the resulting file.
     * @param string $guid Guid of the project to import.
     * @param string $site_url The URL of PWA (Project Web Access) API of Project Online
     * @param string $user_name The user name for the sharepoint site.
     * @param string $format Format of the resulting file.
     * @param string $folder The document folder.
     * @param string $storage The document storage.
     * @param string $x_project_online_token Authorization token (SPOIDCRL) for SharePoint's PWA (Project Web Access). For example, in c# it can be retrieved using SharePointOnlineCredentials class from Microsoft.SharePoint.Client.Runtime assembly
     * @param string $x_sharepoint_password The password for the SharePoint site.
     */
    public function __construct($name, $guid, $site_url, $user_name = null, $format = null, $folder = null, $storage = null, $x_project_online_token = null, $x_sharepoint_password = null)             
    {
        $this->name = $name;
        $this->guid = $guid;
        $this->site_url = $site_url;
        $this->user_name = $user_name;
        $this->format = $format;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->x_project_online_token = $x_project_online_token;
        $this->x_sharepoint_password = $x_sharepoint_password;
    }

    /*
     * The name of the resulting file.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The name of the resulting file.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
	
    /*
     * Guid of the project to import.
     */
    public function get_guid()
    {
        return $this->guid;
    }

    /*
     * Guid of the project to import.
     */
    public function set_guid($value)
    {
        $this->guid = $value;
        return $this;
    }
	
    /*
     * The URL of PWA (Project Web Access) API of Project Online
     */
    public function get_site_url()
    {
        return $this->site_url;
    }

    /*
     * The URL of PWA (Project Web Access) API of Project Online
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
     * Format of the resulting file.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * Format of the resulting file.
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
	
    /*
     * The document folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The document folder.
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
