<?php

namespace App\Controller;
use App\Models\BrandManager;

class BrandController
{
    public $manager;

    public function __construct()
    {
        $this->manager = new BrandManager();
    }

    public function index()
    {
        $index = $this->manager->findAll(); 
        var_dump($index);
        //require_once 'view/brand.index.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once 'view/brand.add.php';
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            'on verra plus tard';
        }
    }
}