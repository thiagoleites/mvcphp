<?php 

$this->get('/', function() {
  echo 'Root page';
});

$this->get('/home', function() {
  echo 'Estou na rota Home';
});

$this->get('/about/test', function() {
  echo 'Estou na rota About teste';
});