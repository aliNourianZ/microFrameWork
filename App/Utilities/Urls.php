<?php
namespace App\Utilities;
class Urls{
    public static function current()
    {
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=== 'on' ? "https" : "http". "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    }
}
