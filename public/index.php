<?php 

require __DIR__ . '/../vendor/autoload.php';
require_once('../app/functions/functions.php');


use app\controller\TesteController;

(new \app\core\RouterCore());

$teste = new TesteController();


dd($teste->seta());