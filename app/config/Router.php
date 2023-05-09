<?php 

// use app\controller\TesteController;

// $teste = new TesteController();

$this->get('/', function() {
  echo 'Root page';
});

$this->get('/home', function() {
  // echo 'Estou na rota Home';
  (new \app\controller\TesteController())->index();
});

$this->get('/about/test', function() {
  echo 'Estou na rota About teste';
});

$this->get('/categoria', 'Testecontroller@seta');