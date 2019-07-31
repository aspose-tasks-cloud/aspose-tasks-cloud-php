<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ExtendedAttributesTest.php">
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
use Aspose\Tasks\Model\Requests;
use Aspose\Tasks\Model\CalculationType;

class ExtendedAttributesTest extends BaseTestContext
{
    public function testGetExtendedAttributes()
    {
        $remoteName = "testGetExtendedAttributes.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getExtendedAttributes(new Requests\GetExtendedAttributesRequest($remoteName, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getExtendedAttributes());
        Assert::assertEquals(2, count($response->getExtendedAttributes()->getList()));
    }
    
    public function testGetExtendedAttribute()
    {
        $remoteName = "testGetExtendedAttribute.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getExtendedAttributeByIndex(new Requests\GetExtendedAttributeByIndexRequest($remoteName, 1, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getExtendedAttribute());
        $extendedAttribute = $response->getExtendedAttribute();
        Assert::assertEquals("Text1", $extendedAttribute->getFieldName());
        Assert::assertEquals(Model\CalculationType::LOOKUP, $extendedAttribute->getCalculationType());
        Assert::assertEquals(1, count($extendedAttribute->getValueList()));
        Assert::assertEquals("descr", $extendedAttribute->getValueList()[0]->getDescription());
        Assert::assertEquals(1, $extendedAttribute->getValueList()[0]->getId());
    }
    
    public function testAddExtendedAttributeDefinition()
    {
        $remoteName = "testAddExtendedAttributeDefinition.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $newExtendedAttribute = new Model\ExtendedAttributeDefinition();
        $newExtendedAttribute->setCalculationType(CalculationType::LOOKUP);
        $newExtendedAttribute->setCfType(Model\CustomFieldType::TEXT);
        $newExtendedAttribute->setFieldName("Text3");
        $newExtendedAttribute->setElementType(Model\ElementType::TASK);
        $newExtendedAttribute->setAlias("New Field");
        
        $value1 = new Model\Value();
        $value1->setDescription("descr1");
        $value1->setVal("Internal");
        $value1->setId(111);
        
        $value2 = new Model\Value();
        $value2->setDescription("descr2");
        $value2->setVal("External");
        $value2->setId(112);
        $newExtendedAttribute->setValueList(array($value1, $value2));
        
        $response = $this->tasks->putExtendedAttribute(new Requests\PutExtendedAttributeRequest($remoteName, $newExtendedAttribute, null, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getExtendedAttribute());
        Assert::assertEquals("Text3", $response->getExtendedAttribute()->getFieldName());
        Assert::assertEquals("New Field", $response->getExtendedAttribute()->getAlias());
        Assert::assertEquals("188743737", $response->getExtendedAttribute()->getFieldId());
        
       
        $addedAttributeIndex = $response->getExtendedAttribute()->getIndex();
        
        $response = $this->tasks->getExtendedAttributeByIndex(new Requests\GetExtendedAttributeByIndexRequest($remoteName, $addedAttributeIndex, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getExtendedAttribute());
        $extendedAttribute = $response->getExtendedAttribute();
        
        Assert::assertEquals("188743737", $extendedAttribute->getFieldId());
        Assert::assertEquals("Text3", $extendedAttribute->getFieldName());
        Assert::assertEquals(Model\CustomFieldType::TEXT, $extendedAttribute->getCfType());
        Assert::assertEquals("New Field", $extendedAttribute->getAlias());
        $valueList = $extendedAttribute->getValueList();
        Assert::assertEquals(2, count($valueList));
        
        Assert::assertEquals(111, $valueList[0]->getId());
        Assert::assertEquals("Internal", $valueList[0]->getVal());
        Assert::assertEquals("descr1", $valueList[0]->getDescription());
        
        Assert::assertEquals(112, $valueList[1]->getId());
        Assert::assertEquals("External", $valueList[1]->getVal());
        Assert::assertEquals("descr2", $valueList[1]->getDescription());
    }
    
    public function testEditExtendedAttributeDefinition()
    {
        $remoteName = "testEditExtendedAttributeDefinition.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->getExtendedAttributeByIndex(new Requests\GetExtendedAttributeByIndexRequest($remoteName, 1, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getExtendedAttribute());
        
        $extendedAttributeToEdit = $response->getExtendedAttribute();
        $extendedAttributeToEdit->setCalculationType(CalculationType::NONE);
        $extendedAttributeToEdit->setValueList(array());
        $extendedAttributeToEdit->setCfType(Model\CustomFieldType::TEXT);
        $extendedAttributeToEdit->setFieldName("Text1");
        $extendedAttributeToEdit->setElementType(Model\ElementType::TASK);
        $extendedAttributeToEdit->setAlias("Edited field");
        
        $response = $this->tasks->putExtendedAttribute(new Requests\PutExtendedAttributeRequest($remoteName, $extendedAttributeToEdit, null, self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getExtendedAttribute());
        Assert::assertEquals("Text1", $response->getExtendedAttribute()->getFieldName());
        Assert::assertEquals("Edited field", $response->getExtendedAttribute()->getAlias());
        Assert::assertEquals("188743731", $response->getExtendedAttribute()->getFieldId());
        
        $response = $this->tasks->getExtendedAttributeByIndex(new Requests\GetExtendedAttributeByIndexRequest($remoteName, $response->getExtendedAttribute()->getIndex(), self::$storageName, $folder));
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getExtendedAttribute());
        
        $extendedAttribute = $response->getExtendedAttribute();
        
        Assert::assertEquals("188743731", $extendedAttribute->getFieldId());
        Assert::assertEquals("Text1", $extendedAttribute->getFieldName());
        Assert::assertEquals(Model\CustomFieldType::TEXT, $extendedAttribute->getCfType());
        Assert::assertEquals("Edited field", $extendedAttribute->getAlias());
        Assert::assertEquals(0, count($extendedAttribute->getValueList()));
    }
    
    public function testDeleteExtendedAttribute()
    {
        $remoteName = "testDeleteExtendedAttribute.mpp";
        $folder = $this->uploadTestFile("NewProductDev.mpp", $remoteName, '');
        
        $response = $this->tasks->deleteExtendedAttributeByIndex(new Requests\DeleteExtendedAttributeByIndexRequest($remoteName, 1, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        
        $response = $this->tasks->getExtendedAttributes(new Requests\GetExtendedAttributesRequest($remoteName, self::$storageName, $folder));
        
        Assert::assertEquals(200, $response->getCode());
        Assert::assertNotNull($response->getExtendedAttributes());
        Assert::assertEquals(1, count($response->getExtendedAttributes()->getList()));
    }
}