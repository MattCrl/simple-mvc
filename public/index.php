<?php

use Controller\ItemController;

require __DIR__ . '/../vendor/autoload.php';

$test = new ItemController();
$items = $test->index();
