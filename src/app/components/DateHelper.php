<?php

namespace App\Components;
use phalcon\Escaper;
class DateHelper
{
    public function getCurrentDate()
    {
        return date('y-m-d');
    }

}
