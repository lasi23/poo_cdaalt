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

    public function existsByName(string $name): bool 
    {
        try {
            //1 Ecrire la requête SQL
            $sql = "SELECT c.id FROM category AS c WHERE c.`name` = ?";
            //2 Préparer la requête
            $req = $this->bdd->prepare($sql);
            //3 Assigner les paramètres
            $req->bindParam(1, $name, \PDO::PARAM_STR);
            //4 Exécuter la requête
            $req->execute();
            //5 Fetch le resultat
            $category = $req->fetch(\PDO::FETCH_ASSOC);
            //6 Test si la category existe
            if (!$category) {
                return false;
            }
        } catch(\PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        return true;
    }

    //Méthode findAll qui va retourner un tableau avec toutes les categories
    public function findAll(): array 
    {
        try {
            //1 Ecrire la requête
            $sql = "SELECT c.id, c.`name` FROM category AS c";
            //2 Préparer la requête
            $req = $this->bdd->prepare($sql);
            //3 Exécuter la requête
            $req->execute();
            //4 FetchAll le résultat
            $categories = $req->fetchAll(\PDO::FETCH_ASSOC);
            //5 Retourner le résultat
        } catch(\PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        return $categories ?? [];
    }

        //Méthode findAll qui va retourner un tableau avec toutes les categories
    public function findAllV2(): array 
    {
        try {
            //1 Ecrire la requête
            $sql = "SELECT c.id, c.`name` FROM category AS c";
            //2 Préparer la requête
            $req = $this->bdd->prepare($sql);
            //3 Exécuter la requête
            $req->execute();
            //4 FetchAll le résultat
            $req->setFetchMode(\PDO::FETCH_CLASS, Category::class);
            $categories = $req->fetchAll();
            //5 Retourner le résultat
        } catch(\PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        return $categories ?? [];
    }
}
