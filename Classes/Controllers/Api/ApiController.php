<?php

namespace Classes\Controllers\API;

use Classes\Models\BrandManager;

class ApiController
{
    public function getMarques()
    {
        $marques = (new BrandManager())->findAll();
        $data = [];
        foreach ($marques as $item) {
            $marque['id'] = $item->id;
            $marque['name'] = $item->name;
            $marque['update'] = $item->update;

            $data[] = $marque;
        }
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}