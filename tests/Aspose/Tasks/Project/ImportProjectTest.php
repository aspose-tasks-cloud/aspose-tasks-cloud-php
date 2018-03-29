<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ImportProjectTest.php">
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

include_once(realpath(dirname(__FILE__) . '/..') . "/BaseTestContext.php");
use PHPUnit\Framework\Assert;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests\PutImportProjectFromDbRequest;
use Aspose\Tasks\Model\Requests\GetProjectIdsRequest;

class ImportProjectTest extends BaseTestContext
{
    public function testImportFromMspDatabase()
    {
        static::markTestSkipped('Ignored because SQL instance in required in order to run test');
        $response = $this->tasks->putImportProjectFromDb(new PutImportProjectFromDbRequest
            (Model\ProjectDatabaseType::MSP, 
                "E6426C44-D6CB-4B9C-AF16-48910ACE0F54", 
                "imported_from_db.xml",
                'Data Source=db.contoso.com;Initial Catalog=ProjectServer;Persist Security Info=True;User ID=sa;Password=pwd;',
                Model\ProjectFileFormat::P6XML,
                self::$baseTestPath,
                "dbo"));
        
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getProjectIds(new GetProjectIdsRequest("imported_from_db.xml", null, self::$baseTestPath));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertEquals(1, count($response->getProjectIds()));
        Assert::assertEquals("0", $response->getProjectIds()[0]);
    }
    
    
    public function testImportFromPrimaveraFile()
    {
        $remoteName = "testImportFromPrimaveraFile.xml";
        $folder = $this->uploadTestFile("p6_multiproject.xml", $remoteName, '');
        
        $response = $this->tasks->putImportProjectFromFile(new Requests\PutImportProjectFromFileRequest($remoteName,
            "111",
            "imported_from_primavera.xml",
            Model\ImportedProjectType::PRIMAVERA_XML,
            $folder,
            Model\ProjectFileFormat::P6XML));
        
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTasks(new Requests\GetTasksRequest("imported_from_primavera.xml", self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertEquals(12, count($response->getTasks()->getTaskItem()));
    }
}