<?php

namespace App\Service;

class LipsumGenerator
{
    public static function get()
    {
        return file_get_contents('http://loripsum.net/api');
    }
}
