<?php 

namespace app\core;

class RouterCore {

  private $uri;
  private $method;

  private $getArr = [];

  public function __construct()
  {
    $this->initialize();

    require_once dirname(dirname(__DIR__)) . '/app/config/Router.php';

    $this->execute();
  }

  private function initialize() : void
  {
    $this->method = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];
    
    $ddUri = explode('/', $uri);
    $uri = $this->normalizeURI($ddUri);

    for($i = 0; $i < UNSET_URI_COUNT; $i++) {
      unset($uri[$i]);
    }
    
    $this->uri = implode('/', $this->normalizeURI($uri));
    // if(DEBUG_URI) {
    //   dd($this->uri);
    // }
  }
  
  private function get(string $router, mixed $call): void
  {
    $this->getArr[] = [
      'router' => $router,
      'call' => $call
    ];
  }

  private function execute() : void
  {
      switch($this->method) {
        case 'GET':
          $this->executeGet();
          break;
        case 'POST':
          // $this->executePost();
          break;
      }
  }

  private function executeGet() : void
  {
    // foreach($this->getArr as $get) {
    //   $r = substr($get['router'], 1);
    //   if(substr($r, -1) == '/') {
    //     $r = substr($r, 0, -1);
    //   }
    //   if($r == $this->uri[0]) {
    //     if(is_callable($get['call'])) {
    //       $get['call']();
    //       break;
    //     }
    //   }
    // }

    foreach ($this->getArr as $get) {
      $r = substr($get['router'], 1);
      if(substr($r, -1) == '/') {
        $r = substr($r, 0, -1);
      }
      if ($r == $this->uri) {
        if (is_callable($get['call'])) {
          $get['call']();
          break;
        }
      }
    }
  }

  // private function executePost() : void
  // {
  //   foreach($this->getArr as $get) {
  //     $r = substr($get['router'], 1);
  //     if(substr($r, -1) == '/') {
  //       $r = substr($r, 0, -1);
  //     }
  //     if($r == $this->uri[0]) {
  //       if(is_callable($get['call'])) {
  //         $get['call']();
  //         break;
  //       }
  //     }
  //   }
  // }
  private function normalizeURI(array $str) : array
  {
    return array_values(array_filter($str));
  }
}