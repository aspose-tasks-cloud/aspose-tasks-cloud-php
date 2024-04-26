<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ViewScreen.php">
 *   Copyright (c) 2021 Aspose.Tasks Cloud
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
/*
 * ViewScreen
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * ViewScreen
 *
 * @description Specifies the screen type for a view.
 */
class ViewScreen
{
    /*
     * Possible values of this enum
     */
    const GANTT = 'Gantt';
    const NETWORK_DIAGRAM = 'NetworkDiagram';
    const RELATIONSHIP_DIAGRAM = 'RelationshipDiagram';
    const TASK_FORM = 'TaskForm';
    const TASK_SHEET = 'TaskSheet';
    const RESOURCE_FORM = 'ResourceForm';
    const RESOURCE_SHEET = 'ResourceSheet';
    const RESOURCE_GRAPH = 'ResourceGraph';
    const TASK_DETAILS_FORM = 'TaskDetailsForm';
    const TASK_NAME_FORM = 'TaskNameForm';
    const RESOURCE_NAME_FORM = 'ResourceNameForm';
    const CALENDAR = 'Calendar';
    const TASK_USAGE = 'TaskUsage';
    const RESOURCE_USAGE = 'ResourceUsage';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GANTT,
            self::NETWORK_DIAGRAM,
            self::RELATIONSHIP_DIAGRAM,
            self::TASK_FORM,
            self::TASK_SHEET,
            self::RESOURCE_FORM,
            self::RESOURCE_SHEET,
            self::RESOURCE_GRAPH,
            self::TASK_DETAILS_FORM,
            self::TASK_NAME_FORM,
            self::RESOURCE_NAME_FORM,
            self::CALENDAR,
            self::TASK_USAGE,
            self::RESOURCE_USAGE,
        ];
    }
}


