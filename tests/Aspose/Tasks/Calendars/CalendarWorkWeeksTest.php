<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="CalendarWorkWeeksTest.php">
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
use Aspose\Tasks\Model\DayType;
use Aspose\Tasks\Model\Requests;

class CalendarWorkWeeksTest extends BaseTestContext
{
    public function testGetCalendarWorkWeeks()
    {
        $remoteName = "testGetCalendarWorkWeeks.mpp";
        $folder = $this->uploadTestFile("CalendarWorkWeeks.mpp", $remoteName, '');
        
        $response = $this->tasks->getCalendars(new Requests\GetCalendarsRequest($remoteName, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getCalendars());
        
        $calendarUid;
        foreach($response->getCalendars()->getList() as $calendar)
        {
            if($calendar->getName() == "Test work weeks")
            {
                $calendarUid = $calendar->getUid();
                break;
            }
        }
        
        $response = $this->tasks->getCalendarWorkWeeks(new Requests\GetCalendarWorkWeeksRequest($remoteName, $calendarUid, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getCalendarWorkWeeks());
        Assert::assertEquals(1, count($response->getCalendarWorkWeeks()));
        
        $workWeek = $response->getCalendarWorkWeeks()[0];
        
        Assert::assertEquals("Work week 1", $workWeek->getName());
        Assert::assertEquals("2018-01-01", $workWeek->getFromDate()->format("Y-m-d"));
        Assert::assertEquals("2018-01-07", $workWeek->getToDate()->format("Y-m-d"));
        
        Assert::assertEquals(4, count($workWeek->getWeekDays()));
        Assert::assertEquals(true, count($workWeek->getWeekDays()[0]->getDayWorking()));
        Assert::assertEquals(DayType::MONDAY, $workWeek->getWeekDays()[0]->getDayType());
        Assert::assertEquals(1, count($workWeek->getWeekDays()[0]->getWorkingTimes()));
        Assert::assertEquals("11:30:00", $workWeek->getWeekDays()[0]->getWorkingTimes()[0]->getFromTime()->format("H:i:s"));
        Assert::assertEquals("12:30:00", $workWeek->getWeekDays()[0]->getWorkingTimes()[0]->getToTime()->format("H:i:s"));
        
        Assert::assertEquals(false, $workWeek->getWeekDays()[1]->getDayWorking());
        Assert::assertEquals(DayType::TUESDAY, $workWeek->getWeekDays()[1]->getDayType());
        Assert::assertEquals(0, count($workWeek->getWeekDays()[1]->getWorkingTimes()));
        
        Assert::assertEquals(true, $workWeek->getWeekDays()[2]->getDayWorking());
        Assert::assertEquals(DayType::WEDNESDAY, $workWeek->getWeekDays()[2]->getDayType());
        Assert::assertEquals(2, count($workWeek->getWeekDays()[2]->getWorkingTimes()));
        
        Assert::assertEquals("09:30:00", $workWeek->getWeekDays()[2]->getWorkingTimes()[0]->getFromTime()->format("H:i:s"));
        Assert::assertEquals("13:23:00", $workWeek->getWeekDays()[2]->getWorkingTimes()[0]->getToTime()->format("H:i:s"));
        Assert::assertEquals("14:45:00", $workWeek->getWeekDays()[2]->getWorkingTimes()[1]->getFromTime()->format("H:i:s"));
        Assert::assertEquals("18:45:00", $workWeek->getWeekDays()[2]->getWorkingTimes()[1]->getToTime()->format("H:i:s"));
        
        Assert::assertEquals(true, $workWeek->getWeekDays()[3]->getDayWorking());
        Assert::assertEquals(DayType::SATURDAY, $workWeek->getWeekDays()[3]->getDayType());
        Assert::assertEquals(1, count($workWeek->getWeekDays()[3]->getWorkingTimes()));
        
        Assert::assertEquals("09:00:00", $workWeek->getWeekDays()[3]->getWorkingTimes()[0]->getFromTime()->format("H:i:s"));
        Assert::assertEquals("10:00:00", $workWeek->getWeekDays()[3]->getWorkingTimes()[0]->getToTime()->format("H:i:s"));
    }
}