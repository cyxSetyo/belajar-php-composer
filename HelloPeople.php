<?php
require_once __DIR__ . '/vendor/autoload.php';

use BelajarPhpComposer\Data\People;

$people = new People("Baudi");

echo $people->sayHello("Budi") . PHP_EOL;

