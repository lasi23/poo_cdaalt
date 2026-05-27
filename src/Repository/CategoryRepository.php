<?php

namespace App\Repository;

use App\Repository\AbstractRepository;
use App\Entity\Category;

class CategoryRepository extends AbstractRepository
{
    public function __construct()
    {
        return parent::__construct();
    }

    public function save(Category $category): ?Category 
    {
        try {
            //1 Ecrire la requête SQL
            $sql = "INSERT INTO category(`name`) VALUE(?)";
            //2 Préparer la requête
            $req = $this->bdd->prepare($sql);
            //3 Assigner les paramètres
            $req->bindValue(1, $category->getName(), \PDO::PARAM_STR);
            //4 Exécuter la requête
            $req->execute();
            //5 récuperer ID de l'enregistrement
            $id = $this->bdd->lastInsertId();
            //6 Setter id à l'objet Category
            $category->setId($id);
        } catch(\PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        return $category;
    }
}