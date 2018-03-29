<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="AssignmentsTest.php">
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
use Aspose\Tasks\Model\Requests;
use PHPUnit\Framework\Assert;
use Aspose\Tasks\Model\CalculationMode;

class AssignmentsTest extends BaseTestContext
{
    public function testAddAssignment()
    {
        $remoteName = "testAddAssignment.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $request = new Requests\PostAssignmentRequest($remoteName, 0, 1, 0.5, null, self::$storageName, $folder);
        $result = $this->tasks->postAssignment($request);
        
        Assert::assertEquals(200, $result->getCode());
        Assert::assertNotNull($result->getAssignmentItem());
        
        $assignmentUid = $result->getAssignmentItem()->getUid();
        
        $getResponse = $this->tasks->getAssignment(new Requests\GetAssignmentRequest($remoteName, $assignmentUid, self::$storageName, $folder));
        $getTaskResponse = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 0, $storage = self::$storageName, $folder = $folder));
        
        Assert::assertEquals(200, $getResponse->getCode());
        Assert::assertNotNull($getResponse->getAssignment());
        Assert::assertEquals(0, $getResponse->getAssignment()->getTaskUid());
        Assert::assertEquals(1, $getResponse->getAssignment()->getResourceUid());
        
        Assert::assertEquals(200, $getTaskResponse->getCode());
        Assert::assertNotNull($getTaskResponse->getTask());
        
        Assert::assertEquals($getTaskResponse->getTask()->getStart()->format(\DATE_ISO8601), $getResponse->getAssignment()->getStart()->format(\DATE_ISO8601));
        Assert::assertEquals($getTaskResponse->getTask()->getFinish()->format(\DATE_ISO8601), $getResponse->getAssignment()->getFinish()->format(\DATE_ISO8601));
        Assert::assertEquals($getTaskResponse->getTask()->getWork(), $getResponse->getAssignment()->getWork());
        Assert::assertEquals($getTaskResponse->getTask()->getCost(), $getResponse->getAssignment()->getCost());
    }
    
    public function testGetAssignment()
    {
        $remoteName = "testGetAssignment.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $request = new Requests\GetAssignmentRequest($remoteName, 63, self::$storageName, $folder);
        $result = $this->tasks->getAssignment($request);
        
        Assert::assertEquals(200, $result->getCode());
        Assert::assertNotNull($result->getAssignment());
        Assert::assertEquals("08:00:00", $result->getAssignment()->getRegularWork());
        Assert::assertEquals("08:00:00", $result->getAssignment()->getRemainingWork());
        Assert::assertEquals("08:00:00", $result->getAssignment()->getStart()->format("H:i:s"));
    }
    
    public function testGetAssignments()
    {
        $remoteName = "testGetAssignments.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $request = new Requests\GetAssignmentsRequest($remoteName, self::$storageName, $folder);
        $result = $this->tasks->getAssignments($request);
        
        Assert::assertEquals(200, $result->getCode());
        Assert::assertNotNull($result->getAssignments());
        Assert::assertEquals(6, count($result->getAssignments()->getAssignmentItem()));
        Assert::assertEquals(34, $result->getAssignments()->getAssignmentItem()[0]->getTaskUid());
        Assert::assertEquals(63, $result->getAssignments()->getAssignmentItem()[0]->getUid());
        Assert::assertEquals("/63", $result->getAssignments()->getAssignmentItem()[0]->getLink()->getHref());
    }
    
    public function testGetResourceAssignments()
    {
        $remoteName = "testGetResourceAssignments.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $request = new Requests\GetResourceAssignmentsRequest($remoteName, 1, self::$storageName, $folder);
        $result = $this->tasks->getResourceAssignments($request);
        
        Assert::assertEquals(200, $result->getCode());
        Assert::assertNotNull($result->getAssignments());
        Assert::assertEquals(6, count($result->getAssignments()->getList()));
        
        foreach ($result->getAssignments()->getList() as $assignment) {
            Assert::assertEquals(1, $assignment->getResourceUid());
        }
    }
    
    public function testEditAssignment()
    {
        $remoteName = "testEditAssignment.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getAssignment(new Requests\GetAssignmentRequest($remoteName, 63, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getAssignment());
        Assert::assertEquals(34, $response->getAssignment()->getTaskUid());
        
        $assignment = $response->getAssignment();
        $assignment->setTaskUid(0);
        
        $putResponse = $this->tasks->putAssignment(new Requests\PutAssignmentRequest($remoteName, 63, $assignment, CalculationMode::AUTOMATIC, true, self::$storageName, $folder, null));
        
        Assert::assertEquals(200, $putResponse->getCode());
        
        $response = $this->tasks->getAssignment(new Requests\GetAssignmentRequest($remoteName, 63, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getAssignment());
        Assert::assertEquals(0, $response->getAssignment()->getTaskUid());
    }
    
  
    public function testDeleteAssignment()
    {
        $remoteName = "testDeleteAssignment.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->deleteAssignment(new Requests\DeleteAssignmentRequest($remoteName, 63, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        
        $getResponse = $this->tasks->getAssignments(new Requests\GetAssignmentsRequest($remoteName, self::$storageName, $folder));
        
        Assert::assertEquals(200, $getResponse->getCode());
        Assert::assertNotNull($getResponse->getAssignments());
        Assert::assertNotNull($getResponse->getAssignments()->getAssignmentItem());
        Assert::isTrue(count($getResponse->getAssignments()->getAssignmentItem()) > 0);
        
        foreach ($getResponse->getAssignments()->getAssignmentItem() as $assignment) {
            Assert::isFalse($assignment->getTaskUid() == 34 && $assignment->getResourceUid() == 1);
            Assert::isFalse($assignment->getUid() == 63);
        }
    }
    
}