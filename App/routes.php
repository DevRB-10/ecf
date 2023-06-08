<?php

use App\Controller\BrandController;

echo 'routes.php <br>';
$routeur->map( 'GET', '/', function() {
    $controller = new BrandController();
    $controller->index();
    echo 'route de l-index';
});
echo '<br> chemin <br>';

$routeur->map( 'GET', '/add', function() {
    $controller = new BrandController();
    $controller->add();
});
