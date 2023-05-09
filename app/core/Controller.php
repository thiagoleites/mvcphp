<?php

namespace app\core;

class Controller
{
    protected function load(string $view, $params = [])
    {
        // return Application::$app->router->renderView($view, $params);
        $twig = new \Twig\Environment(
          new \Twig\Loader\FilesystemLoader('../app/view'));

          $twig->addGlobal('BASE', BASE);
          echo $twig->render($view . '.html', $params);
    }

    public static function teste() : void
    {
      echo "teste";
    }
}