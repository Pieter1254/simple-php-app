<?php 

$routes = require 'routes.php';


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


function routeToController($uri, $routes) {
   if(array_key_exists($uri,$routes)) {
        require $routes[$uri];
   } else {
      require 'controllers/index.php';
      // this is here because I usually put a abort function here that loads a http_response of 404.php file. Instead I will send you back to the product list page
      // Since we don't have a designated 'home page'
      // So when we load its index.php -> /controllers/index.php otherwise you will get a page not found error
   }
}

routeToController($uri,$routes);