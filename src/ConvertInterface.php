<?php declare(strict_types=1);

/**
 * contains Convert interface
 *
 * @author          David Lienhard <github@lienhard.win>
 * @copyright       tourasia
 */

namespace DavidLienhard\Convert;

/**
 * converts variable to strict types
 *
 * @author          David Lienhard <github@lienhard.win>
 * @copyright       tourasia
 */
interface ConvertInterface
{
    /**
     * forces variable conversion to string
     *
     * @author          David Lienhard <github@lienhard.win>
     * @copyright       David Lienhard
     * @param           mixed       $input      input to convert
     */
    public static function toString(mixed $input) : string;


    /**
     * forces variable conversion to int
     *
     * @author          David Lienhard <github@lienhard.win>
     * @copyright       David Lienhard
     * @param           mixed       $input      input to convert
     */
    public static function toInt(mixed $input) : int;


    /**
     * forces variable conversion to float
     *
     * @author          David Lienhard <github@lienhard.win>
     * @copyright       David Lienhard
     * @param           mixed       $input      input to convert
     */
    public static function toFloat(mixed $input) : float;


    /**
     * forces variable conversion to bool
     *
     * @author          David Lienhard <github@lienhard.win>
     * @copyright       David Lienhard
     * @param           mixed       $input      input to convert
     */
    public static function toBool(mixed $input) : bool;


    /**
     * forces variable conversion to array
     *
     * @author          David Lienhard <github@lienhard.win>
     * @copyright       David Lienhard
     * @param           mixed       $input      input to convert
     * @return          array<mixed>
     */
    public static function toArray(mixed $input) : array;
}
