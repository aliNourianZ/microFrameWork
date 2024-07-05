<?php
namespace App\Utilities;
class Asset{
    // public static function get(string $route)
    // {
    //     return $_ENV['HOST'] . "assets/" . $route;
    // }
    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        return $_ENV['HOST'] . "assets/" . $name ."/" . $arguments[0];
    }

}
