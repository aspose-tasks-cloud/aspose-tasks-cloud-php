<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MaskType.php">
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
/*
 * MaskType
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * MaskType
 *
 * @description Specifies the type of a mask.
 */
class MaskType
{
    /*
     * Possible values of this enum
     */
    const NULL = 'Null';
    const NUMBERS = 'Numbers';
    const UPPER_CASE_LETTERS = 'UpperCaseLetters';
    const LOWER_CASE_LETTERS = 'LowerCaseLetters';
    const CHARACTERS = 'Characters';
    const VAL4 = 'Val4';
    const VAL5 = 'Val5';
    const VAL6 = 'Val6';
    const VAL7 = 'Val7';
    const VAL8 = 'Val8';
    const VAL9 = 'Val9';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NULL,
            self::NUMBERS,
            self::UPPER_CASE_LETTERS,
            self::LOWER_CASE_LETTERS,
            self::CHARACTERS,
            self::VAL4,
            self::VAL5,
            self::VAL6,
            self::VAL7,
            self::VAL8,
            self::VAL9,
        ];
    }

    /*
     * Gets whether enum is bitwise
     * @return bool
     */
    public static function getIsBitwise()
    {
        return false;
    }
}


