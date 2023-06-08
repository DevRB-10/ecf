<?php
use App\Models\Brand;
use App\Models\BrandManager;
use App\Controller\BrandController;

use App\Autoloader as AppAutoloader;
use Core\Autoloader as CoreAutoloader;


require_once 'App\Models\Brand.php';
require_once 'App\Models\BrandManager.php';
require_once 'App\Controller\BrandController.php';

$brand = new Brand();
$brand->hydrate(['name'=>'une marque en ECF']);


//var_dump($brand->isNew());

//var_dump($brand);
$manager = new BrandManager();
//var_dump($manager->findAll());
//var_dump($manager->find(2));
//var_dump($manager->create($brand));





require 'vendor/altorouter/altorouter/AltoRouter.php';


$routeur = new AltoRouter;
require 'App/routes.php';

$match = $routeur->match();
if ($match) {
    // Appel de la fonction associée à la route
    call_user_func_array($match['target'], $match['params']);
} else {
    // Route non trouvée, affichage d'une erreur ou redirection vers une page d'erreur
    echo 'Erreur 404 - Page non trouvée';
}

/* $controller = new BrandController();
$controller->index(); */
//$controller->add();
