<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseTestContext.php">
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
// 

use Aspose\Tasks\Configuration;
use Aspose\Tasks\TasksApi;
abstract class BaseTestContext extends \PHPUnit_Framework_TestCase
{
    protected $tasks;

    protected $config;
    protected $uploadedTestFiles;
    protected static $baseTestPath = "Temp/SdkTests/TestData/";
    protected static $baseTestOut = "TestOut/";
    protected static $storageName = "";

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->config = new Configuration();
        $this->uploadedTestFiles = array();
        /*
         * To run with your own credentials please, replace parameter in methods 'setAppKey' and 'setAppSid' accordingly to your's AppSid and AppKey
         */
        $this->config->setAppKey("your_app_key");
        $this->config->setAppSid("your_app_sid");

        $this->tasks = new TasksApi(null, $this->config);
    }

    /**
     * Clean after running each test case
     */
    public function tearDown()
    {
        foreach ($this->uploadedTestFiles as $uploadedTestFile) {
           $this->tasks->deleteFile($uploadedTestFile);
        }

    }
    
    public function uploadTestFile($localName, $remoteName, $subfolder = '')
    {
        if(strlen($subfolder) != 0) {
            $subfolder = $subfolder . "/";
        }
            
        $fullName = self::$baseTestPath . $subfolder . $remoteName;
        
        $file = realpath(__DIR__ . '/../../..') . '/TestData/' . $localName;
        $response = $this->tasks->uploadFile($Path = $fullName, $file);
        $this->uploadedTestFiles[] = $fullName;
        return self::$baseTestPath . $subfolder;
    }
}