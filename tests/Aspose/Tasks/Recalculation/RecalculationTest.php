<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="RecalculationTest.php">
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
use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests\PutRecalculateProjectRequest;
use Aspose\Tasks\Model\Requests\PutRecalculateProjectWorkAsCompleteRequest;
use Aspose\Tasks\Model\Requests\PutRecalculateProjectUncompleteWorkToStartAfterRequest;
use Aspose\Tasks\Model\Requests\PutRecalculateProjectResourceFieldsRequest;
use Aspose\Tasks\Model\Requests\PostTaskRequest;
use Aspose\Tasks\Model\Requests\GetTaskRequest;
use Aspose\Tasks\Model\Requests\PutTaskRequest;

class RecalculationTest extends BaseTestContext
{
    public function testRecalculateProjectWithErrors()
    {
        $remoteName = "testRecalculateProjectWithErrors.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');

        $response = $this->tasks->postTask(new PostTaskRequest($remoteName, "NewTaskName", null, null, self::$storageName, $folder));
       
        Assert::assertEquals(201, $response->getCode());
        $taskUid = $response->getTaskItem()->getUid();
        
        $response = $this->tasks->getTask(new GetTaskRequest($remoteName, $taskUid, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTask());

        $t = $response->getTask();
        $t->setName("New task Name");
        $t->setActualStart(new DateTime("2000-10-20"));
        $t->setActualFinish(new DateTime("2000-10-09"));
        $t->setCost(100);
        
        $response = $this->tasks->putTask(new PutTaskRequest($remoteName, $taskUid, $t, null, false, self::$storageName, $folder, null));
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->putRecalculateProject(new PutRecalculateProjectRequest($remoteName, Model\CalculationMode::NONE, true, null, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        $validationResult = $response->getResult();
        Assert::assertEquals(Model\ProjectValidationState::HAS_ERRORS, $validationResult->getValidationState());
        Assert::assertEquals("Actual start date of task is greater than actual finish date. Task name: New task Name; Actual start date: 10/20/2000 00:00:00; Actual finish date: 10/09/2000 00:00:00", $validationResult->getValidationErrorMessage());
    }
    
    public function testRecalculateResource()
    {
        $remoteName = "testRecalculateResource.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->putRecalculateProjectResourceFields(new PutRecalculateProjectResourceFieldsRequest($remoteName,
            self::$storageName,
            $folder,
            null));
        
        Assert::assertEquals(200, $response->getCode());
    }
    
    public function testRecalculateUncompleteWork()
    {
        $remoteName = "testRecalculateUncompleteWork.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->putRecalculateProjectUncompleteWorkToStartAfter(new PutRecalculateProjectUncompleteWorkToStartAfterRequest($remoteName,
            new DateTime("2010-10-10"),
            self::$storageName,
            $folder,
            null));
        
        Assert::assertEquals(200, $response->getCode());
    }
    
    public function testRecalculateProjectWorkAsComplete()
    {
        $remoteName = "testRecalculateProjectWorkAsComplete.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->putRecalculateProjectWorkAsComplete(new PutRecalculateProjectWorkAsCompleteRequest($remoteName,
            new DateTime("2010-10-10"),
            null,
            self::$storageName,
            $folder,
            null));
        
        Assert::assertEquals(200, $response->getCode());
    }
}