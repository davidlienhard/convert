<?php declare(strict_types=1);

/**
 * contains Convert class
 *
 * @author          David Lienhard <github@lienhard.win>
 * @copyright       tourasia
 */

namespace DavidLienhard\Convert;

use DavidLienhard\Convert\Exceptions\Convert as ConvertException;

/**
 * converts variable to strict types
 *
 * @author          David Lienhard <github@lienhard.win>
 * @copyright       tourasia
 */
class Convert implements ConvertInterface
{
    /**
     * forces variable conversion to string
     *
     * @author          David Lienhard <github@lienhard.win>
     * @copyright       David Lienhard
     * @param           mixed       $input      input to convert
     */
    public static function toString(mixed $input) : string
    {
        if (!in_array(gettype($input), [ "string", "boolean", "integer", "double", "NULL" ], true)) {
            throw new ConvertException("cannot convert variable of type '".gettype($input)."' to string");
        }

        return (string) $input;
    }


    /**
     * forces variable conversion to int
     *
     * @author          David Lienhard <github@lienhard.win>
     * @copyright       David Lienhard
     * @param           mixed       $input      input to convert
     */
    public static function toInt(mixed $input) : int
    {
        if (!in_array(gettype($input), [ "string", "boolean", "integer", "double", "NULL" ], true)) {
            throw new ConvertException("cannot convert variable of type '".gettype($input)."' to int");
        }

        return (int) $input;
    }


    /**
     * forces variable conversion to float
     *
     * @author          David Lienhard <github@lienhard.win>
     * @copyright       David Lienhard
     * @param           mixed       $input      input to convert
     */
    public static function toFloat(mixed $input) : float
    {
        if (!in_array(gettype($input), [ "string", "boolean", "integer", "double", "NULL" ], true)) {
            throw new ConvertException("cannot convert variable of type '".gettype($input)."' to float");
        }

        return (float) $input;
    }


    /**
     * forces variable conversion to bool
     *
     * @author          David Lienhard <github@lienhard.win>
     * @copyright       David Lienhard
     * @param           mixed       $input      input to convert
     */
    public static function toBool(mixed $input) : bool
    {
        if (!in_array(gettype($input), [ "string", "boolean", "integer", "double", "NULL" ], true)) {
            throw new ConvertException("cannot convert variable of type '".gettype($input)."' to bool");
        }

        return (bool) $input;
    }


    /**
     * forces variable conversion to array
     *
     * @author          David Lienhard <github@lienhard.win>
     * @copyright       David Lienhard
     * @param           mixed       $input      input to convert
     * @return          array<mixed>
     */
    public static function toArray(mixed $input) : array
    {
        if (!in_array(gettype($input), [ "array", "object", "string", "boolean", "integer", "double", "NULL" ], true)) {
            throw new ConvertException("cannot convert variable of type '".gettype($input)."' to array");
        }

        return (array) $input;
    }
}
