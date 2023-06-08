<?php

namespace App\Model;

use App\Model\Brand;
use PDO;
use PDOException;

class BrandManager
{
    protected $pdo;
    public function __construct()
    {
        
        try{
            $this->pdo = new PDO("mysql:host=localhost;dbname=instruments","root","");
         }
         catch(PDOException $e){
            echo $e->getMessage();
         }
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM marques";
        $q = $this->pdo->query($sql);
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id)
    {
        $sql = 'SELECT id, marque AS name, date_modif AS date
                FROM marques WHERE id = ' . $id;
        $q = $this->pdo->query($sql);
        return $q->fetchAll(PDO::FETCH_ASSOC);
        //return $q->fetchAll(PDO::FETCH_CLASS, '\App\Model\Brand)[0];
    }

    /* public function create(Brand $brand): Brand
    {
        $sql = 'INSERT INTO marques(marque)
                VALUES (?)';
        $q = $this->pdo->prepare($sql);

        $q->execute($brand);
        $id = $this->pdo->lastInsertId($id);
        return $q;
    }  */
}