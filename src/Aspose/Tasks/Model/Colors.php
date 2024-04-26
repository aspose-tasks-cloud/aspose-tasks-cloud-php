<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Colors.php">
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
 * Colors
 */

namespace Aspose\Tasks\Model;
use \Aspose\Tasks\ObjectSerializer;

/*
 * Colors
 *
 * @description 
 */
class Colors
{
    /*
     * Possible values of this enum
     */
    const MEDIUM_AQUAMARINE = 'MediumAquamarine';
    const MEDIUM_BLUE = 'MediumBlue';
    const MEDIUM_ORCHID = 'MediumOrchid';
    const MEDIUM_PURPLE = 'MediumPurple';
    const MEDIUM_SEA_GREEN = 'MediumSeaGreen';
    const MEDIUM_SLATE_BLUE = 'MediumSlateBlue';
    const MEDIUM_SPRING_GREEN = 'MediumSpringGreen';
    const MAROON = 'Maroon';
    const MEDIUM_TURQUOISE = 'MediumTurquoise';
    const MIDNIGHT_BLUE = 'MidnightBlue';
    const MINT_CREAM = 'MintCream';
    const MISTY_ROSE = 'MistyRose';
    const MOCCASIN = 'Moccasin';
    const NAVAJO_WHITE = 'NavajoWhite';
    const NAVY = 'Navy';
    const OLD_LACE = 'OldLace';
    const MEDIUM_VIOLET_RED = 'MediumVioletRed';
    const MAGENTA = 'Magenta';
    const LINEN = 'Linen';
    const LIME_GREEN = 'LimeGreen';
    const LAVENDER_BLUSH = 'LavenderBlush';
    const LAWN_GREEN = 'LawnGreen';
    const LEMON_CHIFFON = 'LemonChiffon';
    const LIGHT_BLUE = 'LightBlue';
    const LIGHT_CORAL = 'LightCoral';
    const LIGHT_CYAN = 'LightCyan';
    const LIGHT_GOLDENROD_YELLOW = 'LightGoldenrodYellow';
    const LIGHT_GRAY = 'LightGray';
    const LIGHT_GREEN = 'LightGreen';
    const LIGHT_PINK = 'LightPink';
    const LIGHT_SALMON = 'LightSalmon';
    const LIGHT_SEA_GREEN = 'LightSeaGreen';
    const LIGHT_SKY_BLUE = 'LightSkyBlue';
    const LIGHT_SLATE_GRAY = 'LightSlateGray';
    const LIGHT_STEEL_BLUE = 'LightSteelBlue';
    const LIGHT_YELLOW = 'LightYellow';
    const LIME = 'Lime';
    const OLIVE = 'Olive';
    const OLIVE_DRAB = 'OliveDrab';
    const ORANGE = 'Orange';
    const ORANGE_RED = 'OrangeRed';
    const SILVER = 'Silver';
    const SKY_BLUE = 'SkyBlue';
    const SLATE_BLUE = 'SlateBlue';
    const SLATE_GRAY = 'SlateGray';
    const SNOW = 'Snow';
    const SPRING_GREEN = 'SpringGreen';
    const STEEL_BLUE = 'SteelBlue';
    const TAN = 'Tan';
    const TEAL = 'Teal';
    const THISTLE = 'Thistle';
    const TOMATO = 'Tomato';
    const TRANSPARENT = 'Transparent';
    const TURQUOISE = 'Turquoise';
    const VIOLET = 'Violet';
    const WHEAT = 'Wheat';
    const WHITE = 'White';
    const WHITE_SMOKE = 'WhiteSmoke';
    const SIENNA = 'Sienna';
    const LAVENDER = 'Lavender';
    const SEA_SHELL = 'SeaShell';
    const SANDY_BROWN = 'SandyBrown';
    const ORCHID = 'Orchid';
    const PALE_GOLDENROD = 'PaleGoldenrod';
    const PALE_GREEN = 'PaleGreen';
    const PALE_TURQUOISE = 'PaleTurquoise';
    const PALE_VIOLET_RED = 'PaleVioletRed';
    const PAPAYA_WHIP = 'PapayaWhip';
    const PEACH_PUFF = 'PeachPuff';
    const PERU = 'Peru';
    const PINK = 'Pink';
    const PLUM = 'Plum';
    const POWDER_BLUE = 'PowderBlue';
    const PURPLE = 'Purple';
    const RED = 'Red';
    const ROSY_BROWN = 'RosyBrown';
    const ROYAL_BLUE = 'RoyalBlue';
    const SADDLE_BROWN = 'SaddleBrown';
    const SALMON = 'Salmon';
    const SEA_GREEN = 'SeaGreen';
    const YELLOW = 'Yellow';
    const KHAKI = 'Khaki';
    const CYAN = 'Cyan';
    const DARK_MAGENTA = 'DarkMagenta';
    const DARK_KHAKI = 'DarkKhaki';
    const DARK_GREEN = 'DarkGreen';
    const DARK_GRAY = 'DarkGray';
    const DARK_GOLDENROD = 'DarkGoldenrod';
    const DARK_CYAN = 'DarkCyan';
    const DARK_BLUE = 'DarkBlue';
    const IVORY = 'Ivory';
    const CRIMSON = 'Crimson';
    const CORNSILK = 'Cornsilk';
    const CORNFLOWER_BLUE = 'CornflowerBlue';
    const CORAL = 'Coral';
    const CHOCOLATE = 'Chocolate';
    const DARK_OLIVE_GREEN = 'DarkOliveGreen';
    const CHARTREUSE = 'Chartreuse';
    const BURLY_WOOD = 'BurlyWood';
    const BROWN = 'Brown';
    const BLUE_VIOLET = 'BlueViolet';
    const BLUE = 'Blue';
    const BLANCHED_ALMOND = 'BlanchedAlmond';
    const BLACK = 'Black';
    const BISQUE = 'Bisque';
    const BEIGE = 'Beige';
    const AZURE = 'Azure';
    const AQUAMARINE = 'Aquamarine';
    const AQUA = 'Aqua';
    const ANTIQUE_WHITE = 'AntiqueWhite';
    const ALICE_BLUE = 'AliceBlue';
    const CADET_BLUE = 'CadetBlue';
    const DARK_ORANGE = 'DarkOrange';
    const YELLOW_GREEN = 'YellowGreen';
    const DARK_RED = 'DarkRed';
    const INDIGO = 'Indigo';
    const INDIAN_RED = 'IndianRed';
    const DARK_ORCHID = 'DarkOrchid';
    const HONEYDEW = 'Honeydew';
    const GREEN_YELLOW = 'GreenYellow';
    const GREEN = 'Green';
    const GRAY = 'Gray';
    const GOLDENROD = 'Goldenrod';
    const GOLD = 'Gold';
    const GHOST_WHITE = 'GhostWhite';
    const GAINSBORO = 'Gainsboro';
    const FUCHSIA = 'Fuchsia';
    const FOREST_GREEN = 'ForestGreen';
    const HOT_PINK = 'HotPink';
    const FIREBRICK = 'Firebrick';
    const FLORAL_WHITE = 'FloralWhite';
    const DODGER_BLUE = 'DodgerBlue';
    const DIM_GRAY = 'DimGray';
    const DEEP_SKY_BLUE = 'DeepSkyBlue';
    const DEEP_PINK = 'DeepPink';
    const DARK_VIOLET = 'DarkViolet';
    const DARK_TURQUOISE = 'DarkTurquoise';
    const DARK_SLATE_GRAY = 'DarkSlateGray';
    const DARK_SLATE_BLUE = 'DarkSlateBlue';
    const DARK_SEA_GREEN = 'DarkSeaGreen';
    const DARK_SALMON = 'DarkSalmon';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MEDIUM_AQUAMARINE,
            self::MEDIUM_BLUE,
            self::MEDIUM_ORCHID,
            self::MEDIUM_PURPLE,
            self::MEDIUM_SEA_GREEN,
            self::MEDIUM_SLATE_BLUE,
            self::MEDIUM_SPRING_GREEN,
            self::MAROON,
            self::MEDIUM_TURQUOISE,
            self::MIDNIGHT_BLUE,
            self::MINT_CREAM,
            self::MISTY_ROSE,
            self::MOCCASIN,
            self::NAVAJO_WHITE,
            self::NAVY,
            self::OLD_LACE,
            self::MEDIUM_VIOLET_RED,
            self::MAGENTA,
            self::LINEN,
            self::LIME_GREEN,
            self::LAVENDER_BLUSH,
            self::LAWN_GREEN,
            self::LEMON_CHIFFON,
            self::LIGHT_BLUE,
            self::LIGHT_CORAL,
            self::LIGHT_CYAN,
            self::LIGHT_GOLDENROD_YELLOW,
            self::LIGHT_GRAY,
            self::LIGHT_GREEN,
            self::LIGHT_PINK,
            self::LIGHT_SALMON,
            self::LIGHT_SEA_GREEN,
            self::LIGHT_SKY_BLUE,
            self::LIGHT_SLATE_GRAY,
            self::LIGHT_STEEL_BLUE,
            self::LIGHT_YELLOW,
            self::LIME,
            self::OLIVE,
            self::OLIVE_DRAB,
            self::ORANGE,
            self::ORANGE_RED,
            self::SILVER,
            self::SKY_BLUE,
            self::SLATE_BLUE,
            self::SLATE_GRAY,
            self::SNOW,
            self::SPRING_GREEN,
            self::STEEL_BLUE,
            self::TAN,
            self::TEAL,
            self::THISTLE,
            self::TOMATO,
            self::TRANSPARENT,
            self::TURQUOISE,
            self::VIOLET,
            self::WHEAT,
            self::WHITE,
            self::WHITE_SMOKE,
            self::SIENNA,
            self::LAVENDER,
            self::SEA_SHELL,
            self::SANDY_BROWN,
            self::ORCHID,
            self::PALE_GOLDENROD,
            self::PALE_GREEN,
            self::PALE_TURQUOISE,
            self::PALE_VIOLET_RED,
            self::PAPAYA_WHIP,
            self::PEACH_PUFF,
            self::PERU,
            self::PINK,
            self::PLUM,
            self::POWDER_BLUE,
            self::PURPLE,
            self::RED,
            self::ROSY_BROWN,
            self::ROYAL_BLUE,
            self::SADDLE_BROWN,
            self::SALMON,
            self::SEA_GREEN,
            self::YELLOW,
            self::KHAKI,
            self::CYAN,
            self::DARK_MAGENTA,
            self::DARK_KHAKI,
            self::DARK_GREEN,
            self::DARK_GRAY,
            self::DARK_GOLDENROD,
            self::DARK_CYAN,
            self::DARK_BLUE,
            self::IVORY,
            self::CRIMSON,
            self::CORNSILK,
            self::CORNFLOWER_BLUE,
            self::CORAL,
            self::CHOCOLATE,
            self::DARK_OLIVE_GREEN,
            self::CHARTREUSE,
            self::BURLY_WOOD,
            self::BROWN,
            self::BLUE_VIOLET,
            self::BLUE,
            self::BLANCHED_ALMOND,
            self::BLACK,
            self::BISQUE,
            self::BEIGE,
            self::AZURE,
            self::AQUAMARINE,
            self::AQUA,
            self::ANTIQUE_WHITE,
            self::ALICE_BLUE,
            self::CADET_BLUE,
            self::DARK_ORANGE,
            self::YELLOW_GREEN,
            self::DARK_RED,
            self::INDIGO,
            self::INDIAN_RED,
            self::DARK_ORCHID,
            self::HONEYDEW,
            self::GREEN_YELLOW,
            self::GREEN,
            self::GRAY,
            self::GOLDENROD,
            self::GOLD,
            self::GHOST_WHITE,
            self::GAINSBORO,
            self::FUCHSIA,
            self::FOREST_GREEN,
            self::HOT_PINK,
            self::FIREBRICK,
            self::FLORAL_WHITE,
            self::DODGER_BLUE,
            self::DIM_GRAY,
            self::DEEP_SKY_BLUE,
            self::DEEP_PINK,
            self::DARK_VIOLET,
            self::DARK_TURQUOISE,
            self::DARK_SLATE_GRAY,
            self::DARK_SLATE_BLUE,
            self::DARK_SEA_GREEN,
            self::DARK_SALMON,
        ];
    }
}


