<?php 
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/config/config.php';
require __DIR__ . '/../app/functions/functions.php';
// require_once('../app/functions/functions.php');


(new \app\core\RouterCore());
