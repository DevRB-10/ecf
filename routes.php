<?php

use Classes\Controllers\BrandController;
use Classes\Controllers\API\ApiController;

$router = new AltoRouter();


$router->map( 'GET', '/marques', function() {
    (new BrandController())->index();
});

$router->map( 'GET|POST', '/marques/add', function() {
    (new BrandController())->add();
});



$router->map( 'GET', '/api/marques', function() {
    (new ApiController())->getMarques();
});

$router->map( 'GET', '/consoapi', function() {
    require_once '/consoApi/index.php';
});

$router->map( 'GET', '/meteo', function() {
    require_once '/meteo/index.php';
});



$match = $router->match();

if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}








