<?php

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];
    public Database $db;

    public function __construct()
    {
      $this -> db = new Database;
    }

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function resolve()
    {
        $currentUrl = $_SERVER['REDIRECT_URL'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET') {
            $fn = $this->getRoutes[$currentUrl] ?? null;
        } else {
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }

        if ($fn) {
            call_user_func($fn, $this);
        } else {
            echo 'Page not found';
        }
    }

    public function renderView($view, $params = [])
    { 
        foreach ($params as $key => $value)
        {
          $$key = $value;
        }
        ob_start();
        include_once "../view/$view.php";
        $content = ob_get_clean();
        include_once "../view/_layout.php";
      
    }
  }

