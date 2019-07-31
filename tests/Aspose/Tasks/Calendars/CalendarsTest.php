<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="CalendarsTest.php">
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
use Aspose\Tasks\Model\Requests;
use PHPUnit\Framework\Assert;
use Aspose\Tasks\Model\Calendar;
use Aspose\Tasks\Model\WeekDay;
use Aspose\Tasks\Model\DayType;
use Aspose\Tasks\Model\WorkingTime;

class CalendarsTest extends BaseTestContext
{
    public function testGetCalendars()
    {
        $remoteName = "testGetCalendars.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getCalendars(new Requests\GetCalendarsRequest($remoteName, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getCalendars());
        Assert::assertNotNull($response->getCalendars()->getList());
        Assert::assertEquals(1, count($response->getCalendars()->getList()));
        
        Assert::assertEquals("Standard", $response->getCalendars()->getList()[0]->getName());
        Assert::assertEquals(1, $response->getCalendars()->getList()[0]->getUid());
    }
    
    public function testGetCalendarByUid()
    {
        $remoteName = "testGetCalendar.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getCalendar(new Requests\GetCalendarRequest($remoteName, 1, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getCalendar());
        Assert::assertEquals("Standard", $response->getCalendar()->getName());
        Assert::assertEquals(7, count($response->getCalendar()->getDays()));
        Assert::assertEquals(true, $response->getCalendar()->getIsBaseCalendar());
        Assert::assertEquals(false, $response->getCalendar()->getIsBaselineCalendar());
        
        $monday = NULL;
        foreach ($response->getCalendar()->getDays() as $day) {
            if($day->getDayType() == "Monday")
            {
                $monday = $day;
                break;
            }
        }
        
        Assert::assertNotNull($monday);
        Assert::assertTrue($monday->getDayWorking());
    }
 
    public function testAddNewCalendar()
    {
        $remoteName = "testAddNewCalendar.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $calendar = new Calendar();
        $calendar->setName("My new calendar");
        $calendar->setIsBaseCalendar(false);
        
        $weekDays = array();
        $weekDay = new WeekDay();
        $weekDay->setDayType(DayType::SUNDAY);
        $weekDay->setDayWorking(false);
        $weekDays[] = $weekDay;
        
        $weekDay = new WeekDay();
        $weekDay->setDayType(DayType::MONDAY);
        $weekDay->setDayWorking(true);
        $weekDay->setFromDate(DateTime::createFromFormat('H:i', '08:00'));
        $weekDay->setToDate(DateTime::createFromFormat('H:i', '17:00'));
        $working_times = array();
        $working_times[] = new WorkingTime();
        $working_times[] = new WorkingTime();
        $working_times[0]->setFromTime(DateTime::createFromFormat('H:i', '08:00'));
        $working_times[0]->setToTime(DateTime::createFromFormat('H:i', '13:00'));
        $working_times[1]->setFromTime(DateTime::createFromFormat('H:i', '14:00'));
        $working_times[1]->setToTime(DateTime::createFromFormat('H:i', '17:00'));
        $weekDay->setWorkingTimes($working_times);
        $weekDays[] = $weekDay;
        $calendar->setDays($weekDays);
        $calendar->setIsBaselineCalendar(false);
        
        $response = $this->tasks->postCalendar(new Requests\PostCalendarRequest($remoteName, $calendar, null, self::$storageName, $folder));
        Assert::assertEquals(201, $response->getCode());
        
        $createdCalendarUid =$response->getCalendarItem()->getUid();;
        
        $response = $this->tasks->getCalendar(new Requests\GetCalendarRequest($remoteName, $createdCalendarUid, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getCalendar());
        Assert::assertEquals("My new calendar", $response->getCalendar()->getName());
        Assert::assertEquals(7, count($response->getCalendar()->getDays()));
        
        $monday = NULL;
        foreach ($response->getCalendar()->getDays() as $day) {
            if($day->getDayType() == "Monday")
            {
                $monday = $day;
                break;
            }
        }
        
        Assert::assertNotNull($monday);
        Assert::assertEquals("08:00:00", $monday->getWorkingTimes()[0]->getFromTime()->format("H:i:s"));
        Assert::assertEquals("13:00:00", $monday->getWorkingTimes()[0]->getToTime()->format("H:i:s"));
        Assert::assertEquals("14:00:00", $monday->getWorkingTimes()[1]->getFromTime()->format("H:i:s"));
        Assert::assertEquals("17:00:00", $monday->getWorkingTimes()[1]->getToTime()->format("H:i:s"));
    }

    public function testAddEmptyCalendar()
    {
        $remoteName = "testAddEmptyCalendar.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $calendar = new Calendar();
        $calendar->setUid(1);
        $calendar->setName("Modified calendar");
        $calendar->setIsBaseCalendar(false);
        
        $weekDays = array();
        $weekDay = new WeekDay();
        $weekDay->setDayType(DayType::SUNDAY);
        $weekDay->setDayWorking(false);
        $weekDays[] = $weekDay;
        
        $weekDay = new WeekDay();
        $weekDay->setDayType(DayType::MONDAY);
        $weekDay->setDayWorking(true);
        $weekDay->setFromDate(DateTime::createFromFormat('H:i', '08:00'));
        $weekDay->setToDate(DateTime::createFromFormat('H:i', '17:00'));
        $weekDays[] = $weekDay;
        $calendar->setDays($weekDays);
        $calendar->setIsBaselineCalendar(false);
        
        try 
        {
            $response = $this->tasks->putCalendar(new Requests\PutCalendarRequest($remoteName, 1, $calendar, null, self::$storageName, $folder));
        }
        catch(Aspose\Tasks\ApiException $e)
        {
            Assert::assertEquals(400, $e->getCode());
            $errorObject = json_decode($e->getResponseBody(), true);
            Assert::assertEquals("InvalidParameters", $errorObject["Error"]["Code"]);
            Assert::assertEquals("Calendar should have at least one working time defined", $errorObject["Error"]["Message"]);
            $catched = true;
        }
        
        if(!$catched) {
            Assert::fail("Expected ApiException is not thrown");
        }
    }
    
    public function testEditExistingCalendar()
    {
        $remoteName = "testEditCalendar.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $calendar = new Calendar();
        $calendar->setUid(1);
        $calendar->setName("Modified calendar");
        $calendar->setIsBaseCalendar(false);
        
        $weekDays = array();
        $weekDay = new WeekDay();
        $weekDay->setDayType(DayType::SUNDAY);
        $weekDay->setDayWorking(false);
        $weekDays[] = $weekDay;
        
        $weekDay = new WeekDay();
        $weekDay->setDayType(DayType::MONDAY);
        $weekDay->setDayWorking(true);
        $weekDay->setFromDate(DateTime::createFromFormat('H:i', '08:00'));
        $weekDay->setToDate(DateTime::createFromFormat('H:i', '17:00'));
        $working_times = array();
        $working_times[] = new WorkingTime();
        $working_times[] = new WorkingTime();
        $working_times[0]->setFromTime(DateTime::createFromFormat("Y-m-d\\TH:i:s", '0001-01-01T08:00:00')->format("Y-m-d\\TH:i:s"));
        $working_times[0]->setToTime(DateTime::createFromFormat("Y-m-d\\TH:i:s", '0001-01-01T13:00:00')->format("Y-m-d\\TH:i:s"));
        $working_times[1]->setFromTime(DateTime::createFromFormat('H:i', '14:00')->format("Y-m-d\\TH:i:s"));
        $working_times[1]->setToTime(DateTime::createFromFormat('H:i', '17:00')->format("Y-m-d\\TH:i:s"));
        $weekDay->setWorkingTimes($working_times);
        $weekDays[] = $weekDay;
        $calendar->setDays($weekDays);
        $calendar->setIsBaselineCalendar(false);
        
        $response = $this->tasks->putCalendar(new Requests\PutCalendarRequest($remoteName, 1, $calendar, null, self::$storageName, $folder));
        Assert::assertNotNull($response);
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getCalendar(new Requests\GetCalendarRequest($remoteName, 1, self::$storageName, $folder));
        Assert::assertNotNull($response);
        Assert::assertEquals(200, $response->getCode());
        
        Assert::assertEquals("Modified calendar", $response->getCalendar()->getName());
        Assert::assertEquals(7, count($response->getCalendar()->getDays()));
        
        $monday = NULL;
        foreach ($response->getCalendar()->getDays() as $day) {
            if($day->getDayType() == "Monday")
            {
                $monday = $day; 
                break;
            }
        }
        
        Assert::assertNotNull($monday);
        Assert::assertEquals("08:00:00", $monday->getWorkingTimes()[0]->getFromTime()->format("H:i:s"));
        Assert::assertEquals("13:00:00", $monday->getWorkingTimes()[0]->getToTime()->format("H:i:s"));
        Assert::assertEquals("14:00:00", $monday->getWorkingTimes()[1]->getFromTime()->format("H:i:s"));
        Assert::assertEquals("17:00:00", $monday->getWorkingTimes()[1]->getToTime()->format("H:i:s"));
    }
     
    public function testDeleteNonExistingCalendar()
    {
        $remoteName = "testDeleteNonExistingCalendar.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->deleteCalendar(new Requests\DeleteCalendarRequest($remoteName, 20, self::$storageName, $folder, null));
        Assert::assertEquals(404, $response->getCode());
    }
    
    public function testDeleteCalendarByUid()
    {
        $remoteName = "testDeleteCalendarByUid.mpp";
        $folder = $this->uploadTestFile("CalendarWorkWeeks.mpp", $remoteName, '');
        
        $response = $this->tasks->deleteCalendar(new Requests\DeleteCalendarRequest($remoteName, 3, self::$storageName, $folder, null));
        
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getCalendars(new Requests\GetCalendarsRequest($remoteName, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getCalendars());
        Assert::assertNotNull($response->getCalendars()->getList());
        Assert::assertEquals(1, count($response->getCalendars()->getList()));
        Assert::assertEquals(1, $response->getCalendars()->getList()[0]->getUid());
    }

}