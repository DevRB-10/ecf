<?php

use App\Model\Brand;
use App\Model\BrandManager;

require_once 'App/Model/BrandManager.php'; 
require_once 'App/Model/Brand.php'; 
//BrandManager::findAll();

$brand = new Brand(['name'=>'ad']);
$brand->hydrate(['id'=>3]);
$brand->isNew();

$brand->getName();
$brandmanager = new BrandManager();
$brandmanager->findAll();
$brandmanager->find(3);
//$mark = new Brand(['id'=>28, 'name'=>'ad']);
//$brandmanager->create($mark);