<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ProjectOnlineTest.php">
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

include_once(realpath(dirname(__FILE__) . '/..') . "/BaseTestContext.php");

use Aspose\Tasks\Model\Requests\CreateNewProjectRequest;
use PHPUnit\Framework\Assert;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests\GetProjectListRequest;

class ProjectOnlineTest extends BaseTestContext
{
    public function testGetProjectListByTokenCredential()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $response = $this->tasks->getProjectList(new GetProjectListRequest
        ('https://your_company_name.sharepoint.com', 'SOMESECRETTOKEN'));

        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotEmpty($response->getProjects());
    }

    public function testGetProjectListByLoginAndPasswordCredentials()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $response = $this->tasks->getProjectList(new GetProjectListRequest
        ('https://your_company_name.sharepoint.com', null, 'SomeLogin', 'SomePassword'));

        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotEmpty($response->getProjects());
    }

    public function testCreateNewProjectByTokenCredential()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $remoteName = "testCreateNewProject.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $response = $this->tasks->createNewProject(new CreateNewProjectRequest
        ($remoteName, 'https://your_company_name.sharepoint.com', null, $folder, self::$storageName, 'SOMESECRETTOKEN'));

        Assert::assertEquals(200, $response->getCode());
    }

    public function testCreateNewProjectByLoginAndPasswordCredentials()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $remoteName = "testCreateNewProject.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $response = $this->tasks->createNewProject(new CreateNewProjectRequest
        ($remoteName, 'https://your_company_name.sharepoint.com', null, $folder, self::$storageName, null, 'SomeLogin', 'SomePassword'));

        Assert::assertEquals(200, $response->getCode());
    }

    public function testUpdateProjectByTokenCredential()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $remoteName = "testUpdateProject.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $response = $this->tasks->updateProject(new UpdateProjectRequest
        ($remoteName, 'https://your_company_name.sharepoint.com', null, $folder, self::$storageName, 'SOMESECRETTOKEN'));

        Assert::assertEquals(200, $response->getCode());
    }

    public function testUpdateProjectByLoginAndPasswordCredentials()
    {
        static::markTestSkipped('Ignored because real credentials for project server online is required');

        $remoteName = "testUpdateProject.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');

        $response = $this->tasks->updateProject(new UpdateProjectRequest
        ($remoteName, 'https://your_company_name.sharepoint.com', null, $folder, self::$storageName, null, 'SomeLogin', 'SomePassword'));

        Assert::assertEquals(200, $response->getCode());
    }
}
