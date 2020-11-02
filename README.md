![](https://img.shields.io/badge/api-v3.0-lightgrey) ![Packagist Version](https://img.shields.io/packagist/v/aspose/tasks-sdk-php) ![Packagist Downloads](https://img.shields.io/packagist/dt/aspose/tasks-sdk-php) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/aspose/tasks-sdk-php) [![GitHub license](https://img.shields.io/github/license/aspose-tasks-cloud/aspose-tasks-cloud-php)](https://github.com/aspose-tasks-cloud/aspose-tasks-cloud-php/blob/master/LICENSE) ![GitHub last commit](https://img.shields.io/github/last-commit/Aspose-tasks-Cloud/aspose-tasks-cloud-php)

# PHP SDK to Manage Tasks in the Cloud

Aspose.Tasks for Cloud offers the ability to manipulate and convert Microsoft Project MPT, MPP, MPX & Oracle Primavera XER, XML, and PrimaveraP6XML files in the Cloud. [Aspose.Tasks Cloud SDK for PHP](https://products.aspose.cloud/tasks/php) wraps the REST API to make it easier for PHP developers to integrate Task Management features in their own PHP applications.

## REST API for Task Management

* [Convert Microsoft Project & Oracle Primavera files](https://docs.aspose.cloud/tasks/convert-project-document-to-the-specified-format/) to other formats including MPP to PDF conversion.
* Read, change and write Microsoft Project documents.
* Create, update and write projects in XML project format.
* Manage extended attributes.
* [Define weekdays for calendars](https://docs.aspose.cloud/tasks/working-with-calendars/) and calendar exceptions.
* [Manage tasks](https://docs.aspose.cloud/tasks/working-with-tasks/), baseline scheduling and duration.
* Create and [manage task links](https://docs.aspose.cloud/tasks/working-with-task-links/).
* Manage resources costs and variances.
* Access assignment costs and budget.

## Read & Write Project Data

**Microsoft Project** MPP, XML, MPT **Primavera** MPX

## Save Project Data As

XER, XLSX, HTML, XML, TXT, TIF, SVG, PNG, JPEG

## Get Started with Aspose.Tasks Cloud SDK for PHP

Register an account at [Aspose Cloud Dashboard](https://dashboard.aspose.cloud/#/apps) to get you application information. Next, either directly use the source from this repository in your project or get the package from [Packagist distribution](https://packagist.org/packages/aspose/tasks-sdk-php).

### Install Via Composer

Aspose.Tasks Cloud SDK for PHP is available at Packagist. Run the following command to get it through Composer.

```bash
composer require aspose/tasks-sdk-php
```
Run Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading) to start using the SDK.

```php
require_once('vendor/autoload.php');
```
See [composer.json](composer.json) for details about the referenced packages.

## Convert MPP to CSV in the Cloud

```php
$remoteName = "GetDocumentInCsvFormat.mpp";
$folder = $this->uploadFile("template.mpp", $remoteName, '');

$response = $this->tasks->getTaskDocumentWithFormat(new GetTaskDocumentWithFormatRequest($remoteName,
    Model\ProjectFileFormat::CSV, false, self::$storageName, $folder));

Assert::assertNotNull($response);
Assert::assertEquals("ID;Task_Name;Outline_Level;Duration;Start_Date;Finish_Date;Percent_Comp;Cost;Work\r\n", $response->current());
$response->next();
Assert::assertEquals("1;Five to Eight Weeks Before Moving;1;16 days;Thu 01.01.04 08:00;Thu 22.01.04 17:00;0%;$0;0 hrs\r\n", $response->current());

```

## Aspose.Tasks Cloud SDKs in Popular Languages

| .NET | PHP | Python | Node.js |
|---|---|---|---|
| [GitHub](https://github.com/aspose-tasks-cloud/aspose-tasks-cloud-dotnet) | [GitHub](https://github.com/aspose-tasks-cloud/aspose-tasks-cloud-php) | [GitHub](https://github.com/aspose-tasks-cloud/aspose-tasks-cloud-python) | [GitHub](https://github.com/aspose-tasks-cloud/aspose-tasks-cloud-node)  | 
| [NuGet](https://www.nuget.org/packages/Aspose.Tasks-Cloud/) | [Composer](https://packagist.org/packages/aspose/tasks-sdk-php) | [PIP](https://pypi.org/project/aspose-tasks-cloud/) | [NPM](https://www.npmjs.com/package/@asposecloud/aspose-tasks-cloud)  |

[Home](https://www.aspose.cloud) | [Product Page](https://products.aspose.cloud/tasks/php) | [Documentation](https://docs.aspose.cloud/tasks/) | [Live Demo](https://products.aspose.app/tasks/family) |  [API Reference](https://apireference.aspose.cloud/tasks/) | [Code Samples](https://github.com/aspose-tasks-cloud/aspose-tasks-cloud-dotnet/tree/master/Aspose.Tasks.Cloud.Sdk.Tests) | [Blog](https://blog.aspose.cloud/category/tasks/) | [Free Support](https://forum.aspose.cloud/c/tasks) | [Free Trial](https://dashboard.aspose.cloud/#/apps)
