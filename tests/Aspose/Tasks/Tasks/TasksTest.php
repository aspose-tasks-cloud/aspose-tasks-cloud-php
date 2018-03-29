<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="TasksTest.php">
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

use Aspose\Tasks\Model;
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Model\ExtendedAttributeDefinition;
use Aspose\Tasks\Model\ExtendedAttribute;

class TasksTest extends BaseTestContext
{
    public function TestGetTasks()
    {
        $remoteName = "TestGetTasks.mpp";
        $folder = $this->uploadTestFile("Project2016.mpp", $remoteName, '');
        
        $response = $this->tasks->getTasks(new Requests\GetTasksRequest($remoteName, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTasks());
        Assert::assertEquals(6, count($response->getTasks()->getTaskItem()));
        
        foreach($response->getTasks()->getTaskItem() as $t)
        {
            if($t->getUid() == 5)
            {
                $task = $t;
                break;
            }
        }
        
        Assert::assertNotNull($task);
        Assert::assertEquals("Summary Task 1", $task->getName());
        Assert::assertEquals("2015-08-03T08:00:00", $task->getStart()->format("Y-m-d\\TH:i:s"));
        Assert::assertEquals("2015-08-06T17:00:00", $task->getFinish()->format("Y-m-d\\TH:i:s"));
        Assert::assertEquals("/5", $task->getLink()->getHref());
    }
    
    public function testGetTaskByUid()
    {
        $remoteName = "testGetTaskByUid.mpp";
        $folder = $this->uploadTestFile("Project2016.mpp", $remoteName, '');
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 5, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTask());
        Assert::assertEquals(5, $response->getTask()->getUid());
        Assert::assertTrue(array(1, 2, 3, 4) == $response->getTask()->getSubtasksUids());
        
        Assert::assertEquals("2015-08-03T08:00:00", $response->getTask()->getStart()->format("Y-m-d\\TH:i:s"));
        Assert::assertEquals("2015-08-06T17:00:00", $response->getTask()->getFinish()->format("Y-m-d\\TH:i:s"));
        Assert::assertEquals(1920, $response->getTask()->getWorkVariance());
        Assert::assertEquals("1.08:00:00", $response->getTask()->getRemainingWork());
    }
    
    public function testDeleteTask()
    {
        $remoteName = "testDeleteTask.mpp";
        $folder = $this->uploadTestFile("Project2016.mpp", $remoteName, '');
        
        $response = $this->tasks->deleteTask(new Requests\DeleteTaskRequest($remoteName, 4, self::$storageName, $folder, null));
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTasks(new Requests\GetTasksRequest($remoteName, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTasks());
        Assert::assertNotNull($response->getTasks()->getTaskItem());
        Assert::assertEquals(5, count($response->getTasks()->getTaskItem()));
        
        foreach($response->getTasks()->getTaskItem() as $t)
        {
            if($t->getUid() == 4) {
                Assert::fail("Task with Uid 4 should not be present in project.");
            }
        }
    }
    
    public function testAddTask()
    {
        $remoteName = "testAddTask.mpp";
        $folder = $this->uploadTestFile("Project2016.mpp", $remoteName, '');
        
        $response = $this->tasks->postTask(new Requests\PostTaskRequest($remoteName, "New task name", 4, null, self::$storageName, $folder));
        Assert::assertEquals(201, $response->getCode());
        Assert::assertNotNull($response->getTaskItem());
        $newTaskUid = $response->getTaskItem()->getUid();
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, $newTaskUid, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTask());
    }
    
    public function testEditTask()
    {
        $remoteName = "testEditTask.mpp";
        $folder = $this->uploadTestFile("Project2016.mpp", $remoteName, '');
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 4, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTask());
        
        $task = $response->getTask();
        $task->setName("Modified task name");
        $task->setIsManual(true);
        $task->setManualStart(new DateTime("2015-10-01T09:15:00"));
        $task->setManualFinish(new DateTime("2015-10-01T17:15:00"));
        
        $response = $this->tasks->putTask(new Requests\PutTaskRequest($remoteName, 4, $task, Model\CalculationMode::NONE, false, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 4, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTask());
        Assert::assertEquals("Modified task name", $response->getTask()->getName());
        
        Assert::assertTrue($response->getTask()->getIsManual());
        Assert::assertEquals("2015-10-01T09:15:00", $response->getTask()->getManualStart()->format("Y-m-d\\TH:i:s"));
        Assert::assertEquals("2015-10-01T17:15:00", $response->getTask()->getManualFinish()->format("Y-m-d\\TH:i:s"));
    }
    
    public function testEditTaskExtendedAttributeLookupValue()
    {
        $remoteName = "testEditTaskExtendedAttributeLookupValue.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $newExtendedAttribute = new ExtendedAttributeDefinition();
        $newExtendedAttribute->setCalculationType(Model\CalculationType::LOOKUP);
        $newExtendedAttribute->setCfType(Model\CustomFieldType::TEXT);
        $newExtendedAttribute->setFieldName("Text3");
        $newExtendedAttribute->setElementType(Model\ElementType::TASK);
        $newExtendedAttribute->setAlias("New Field");
        
        $val1 = new Model\Value();
        $val1->setDescription("descr1");
        $val1->setVal("Internal");
        $val1->setId(111);
        $val2 = new Model\Value();
        $val2->setDescription("descr2");
        $val2->setVal("External");
        $val2->setId(112);
        $newExtendedAttribute->setValueList(array($val1, $val2));
        
        $response = $this->tasks->putExtendedAttribute(new Requests\PutExtendedAttributeRequest($remoteName, $newExtendedAttribute, null, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        $addedFieldId = $response->getExtendedAttribute()->getFieldId();
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTask());
        $task = $response->getTask();
        
        $extendedAttributeValue = new ExtendedAttribute();
        $extendedAttributeValue->setLookupValueId(112);
        $extendedAttributeValue->setFieldId($addedFieldId);
        
        $task->setExtendedAttributes(array_merge($task->getExtendedAttributes(), array($extendedAttributeValue)));
        
        $response = $this->tasks->putTask(new Requests\PutTaskRequest($remoteName, 27, $task, null, null, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 27, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTask());

        Assert::assertEquals(1, count($response->getTask()->getExtendedAttributes()));
        Assert::assertEquals(188743737, $response->getTask()->getExtendedAttributes()[0]->getFieldId());
        Assert::assertEquals(112, $response->getTask()->getExtendedAttributes()[0]->getLookupValueId());
    }
    
    public function testGetTaskAssignments()
    {
        $remoteName = "testGetTaskAssignments.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getTaskAssignments(new Requests\GetTaskAssignmentsRequest($remoteName, 1, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getAssignments());
    }
    
    public function testGetTaskRecurringInfo()
    {
        $remoteName = "testGetTaskRecurringInfo.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');
        
        $response = $this->tasks->getTaskRecurringInfo(new Requests\GetTaskRecurringInfoRequest($remoteName, 6, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getRecurringInfo());
        
        $entity = $response->getRecurringInfo();
        Assert::assertEquals(2, $entity->getOccurrences());
        Assert::assertEquals(Model\RecurrencePattern::MONTHLY, $entity->getRecurrencePattern());
        Assert::assertEquals(true, $entity->getUseEndDate());
        Assert::assertEquals(false, $entity->getMonthlyUseOrdinalDay());
        Assert::assertEquals(1, $entity->getMonthlyDay());
        Assert::assertEquals(Model\WeekDayType::NONE, $entity->getWeeklyDays());
        Assert::assertEquals(Model\OrdinalNumber::SECOND, $entity->getYearlyOrdinalNumber());
    }
    
    public function testMoveTask()
    {
        $remoteName = "testMoveTask.mpp";
        $folder = $this->uploadTestFile("sample.mpp", $remoteName, '');

        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 6, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTask());
        Assert::assertNotNull($response->getTask()->getSubtasksUids());
        Assert::isFalse(in_array(10, $response->getTask()->getSubtasksUids()));
        
        $response = $this->tasks->putMoveTask(new Requests\PutMoveTaskRequest($remoteName, 10, 6, null, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 6, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTask());
        Assert::assertNotNull($response->getTask()->getSubtasksUids());
        Assert::isTrue(in_array(10, $response->getTask()->getSubtasksUids()));
    }
    
    public function testMoveTaskToSibling()
    {
        $remoteName = "TestMoveTaskToSibling.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->putMoveTaskToSibling(new Requests\PutMoveTaskToSiblingRequest($remoteName, 41, 40, null, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getTask(new Requests\GetTaskRequest($remoteName, 38, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getTask());
        Assert::assertNotNull($response->getTask()->getSubtasksUids());
        Assert::isTrue(array(39, 41, 40) === $response->getTask()->getSubtasksUids());
    }
    
    public function testMoveTaskToSiblingError()
    {
        $remoteName = "testMoveTaskToSiblingError.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        try
        {
            $response = $this->tasks->putMoveTaskToSibling(new Requests\PutMoveTaskToSiblingRequest($remoteName, 99999, -1, null, self::$storageName, $folder));
        }
        catch (Aspose\Tasks\ApiException $e)
        {
            Assert::assertEquals(400, $e->getCode());
            $errorObject = json_decode($e->getResponseBody(), true);
            Assert::assertEquals("TaskDoesntExist", $errorObject["Code"]);
            $catched = true;
        }
        
        Assert::isTrue($catched);
    }
}