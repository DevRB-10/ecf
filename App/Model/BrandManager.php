<?php

namespace App\Model;

use App\Model\Brand;
use PDO;
use PDOException;

class BrandManager
{
    /**
     * variable où pdo sera sauvegardé
     *
     * @var [type]
     */
    protected $pdo;

    /**
     * fonction constructeur
     */
    public function __construct()
    {
        
        try{
            $this->pdo = new PDO("mysql:host=localhost;dbname=instruments","root","");
         }
         catch(PDOException $e){
            echo $e->getMessage();
         }
    }

    /**
     * Méthode findAll
     *
     * Description : Récupère tous les enregistrements de la table associée à cette classe Manager.
     * Cette méthode effectue une jointure avec la table "auteurs" pour récupérer les auteurs des citations.
     *
     * @return array Un tableau contenant tous les enregistrements sous forme d'objets de l'entité associée.
     */
    public function findAll(): array
    {
        $sql = "SELECT * FROM marques";
        $q = $this->pdo->query($sql);
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Méthode find
     *
     * Description : Récupère un enregistrement en fonction de l'ID.
     * Cette méthode effectue une jointure avec la table "auteurs" pour récupérer l'auteur de la citation.
     *
     * @param int $id L'ID de l'enregistrement à rechercher.
     * @return mixed L'enregistrement correspondant sous forme d'objet de l'entité associée ou faux.
     */
    public function find(int $id)
    {
        $sql = 'SELECT id, marque AS name, date_modif AS date
                FROM marques WHERE id = ' . $id;
        $q = $this->pdo->query($sql);
        return $q->fetchAll(PDO::FETCH_ASSOC);
        //return $q->fetchAll(PDO::FETCH_CLASS, '\App\Model\Brand)[0];
    }

    /* public function create(Brand $brand)
    {
        $sql = 'INSERT INTO marques(marque)
                VALUES (?)';
        $q = $this->pdo->prepare($sql);

        $q->execute($brand->getId());
        $q->execute($brand->getName());
        return $this;
    } */  
}