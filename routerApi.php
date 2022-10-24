<?php
require_once './libs/Router.php';
require_once './app/controllers/moviesApiController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"])."/");
//Crear router
$router = new Router();

//Definir tabla ruteo
$router->addRoute('movies', 'GET', 'moviesApiController', 'getMovies');
//$router->addRoute('movies', 'POST', 'moviesApiController', 'agregarMovie');
//$router->addRoute('movies/:ID', 'GET', 'moviesApiController', 'getMovies');

//Rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
?>