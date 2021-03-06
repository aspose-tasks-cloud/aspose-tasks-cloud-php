<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="VbaTest.php">
*   Copyright (c) 2018 Aspose.Tasks Cloud
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

class VbaTest extends BaseTestContext
{
    public function testGetVbaProject()
    {
        $remoteName = "testGetVbaProject.mpp";
        $folder = $this->uploadTestFile("VbaProject3.mpp", $remoteName, '');
        
        $response = $this->tasks->getVbaProject(new Requests\GetVbaProjectRequest($remoteName, $folder));
        
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getVbaProject());
        Assert::assertNotNull($response->getVbaProject()->getModules());
        Assert::assertEquals(7, count($response->getVbaProject()->getModules()));
        Assert::assertEquals("Module1", $response->getVbaProject()->getModules()[0]->getName());
        Assert::assertTrue(strpos($response->getVbaProject()->getModules()[0]->getSourceCode(), 'Type MEMORYSTATUS') === 0);
    }
}