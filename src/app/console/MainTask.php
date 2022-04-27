<?php

// declare(strict_types=1);

namespace App\Console;

use Phalcon\Cli\Task;

class MainTask extends Task
{
    public function mainAction()
    {
        echo 'welcome' . PHP_EOL;
    }

    public function addAction(int $var1, int $var2)
    {
        echo $var1 + $var2 . PHP_EOL;
    }
}
