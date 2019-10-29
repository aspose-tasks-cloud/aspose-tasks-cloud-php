<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DocumentPropertiesTest.php">
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
use Aspose\Tasks\Model\DocumentProperty;

class DocumentPropertiesTest extends BaseTestContext
{
    public function testGetDocumentProperties()
    {
        $remoteName = "testGetDocumentProperties.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getDocumentProperties(new Requests\GetDocumentPropertiesRequest($remoteName, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertEquals(51, count($response->getProperties()->getList()));
        Assert::assertEquals("Title", $response->getProperties()->getList()[0]->getName());
        Assert::assertEquals("Home Move", $response->getProperties()->getList()[0]->getValue());
    }
    
    public function testGetDocumentProperty()
    {
        $remoteName = "testGetDocumentProperty.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $response = $this->tasks->getDocumentProperty(new Requests\GetDocumentPropertyRequest($remoteName, "Title", self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getProperty());
        Assert::assertEquals("Title", $response->getProperty()->getName());
        Assert::assertEquals("Home Move", $response->getProperty()->getValue());
    }
    
    public function testEditDocumentProperty()
    {
        $remoteName = "testEditDocumentProperty.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $property = new DocumentProperty();
        $property->setName("Title");
        $property->setValue("New title value");
        
        $response = $this->tasks->putDocumentProperty(new Requests\PutDocumentPropertyRequest($remoteName, "Title", $property, self::$storageName, $folder, null));
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getDocumentProperties(new Requests\GetDocumentPropertiesRequest($remoteName, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertEquals(51, count($response->getProperties()->getList()));
        
        foreach($response->getProperties()->getList() as $p)
        {
            if($p->getName() == "Title")
            {
                $found = true;
                Assert::assertEquals("New title value", $p->getValue());
                break;
            }
        }
        
        Assert::isTrue($found);
    }
    
    public function testEditDocumentPropertyViaPost()
    {
        $remoteName = "testEditDocumentPropertyViaPost.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $property = new DocumentProperty();
        $property->setName("Title");
        $property->setValue("New title value");
        
        $response = $this->tasks->postDocumentProperty(new Requests\PostDocumentPropertyRequest($remoteName, "Title", $property, self::$storageName, $folder, null));
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getDocumentProperties(new Requests\GetDocumentPropertiesRequest($remoteName, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertEquals(51, count($response->getProperties()->getList()));
        
        foreach($response->getProperties()->getList() as $p)
        {
            if($p->getName() == "Title")
            {
                $found = true;
                Assert::assertEquals("New title value", $p->getValue());
                break;
            }
        }
        
        Assert::isTrue($found);
    }
    
    public function testAddNonExistingDocumentProperty()
    {
        $remoteName = "testAddNonExistingDocumentProperty.mpp";
        $folder = $this->uploadTestFile("Home move plan.mpp", $remoteName, '');
        
        $property = new DocumentProperty();
        $property->setName("new property");
        $property->setValue("New property value");
        
        $response = $this->tasks->postDocumentProperty(new Requests\PostDocumentPropertyRequest($remoteName, "new property", $property, self::$storageName, $folder, null));
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getDocumentProperties(new Requests\GetDocumentPropertiesRequest($remoteName, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertEquals(51, count($response->getProperties()->getList()));
        
        foreach($response->getProperties()->getList() as $p)
        {
            if($p->getName() == "new property")
            {
                Assert::fail("Unexpected property: new property");
            }
        }
   }
}