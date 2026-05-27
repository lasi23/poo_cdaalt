<?php

namespace App\Service;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Utils\Tools;

class CategoryService
{
    //Attributs
    private CategoryRepository $categoryRepository;

    public function __construct()
    {
        $this->categoryRepository = new CategoryRepository();
    }

    //Méthodes
    //Ajouter une category
    public function addCategory(array $post): string
    {
        //1 test si le champs est non vide
        if (empty($post["name"])) {
            return "Veuillez remplir le champs name";
        }

        //2 nettoyer le champs
        $post["name"] = Tools::sanitize($post["name"]);

        //3 test si la category existe dans la BDD
        if ($this->categoryRepository->existsByName($post["name"])) {
            return "La category existe déja";
        }
        
        //4 instancier un objet category
        $category = new Category($post["name"]);

        //5 ajouter la category en BDD
        $this->categoryRepository->save($category);

        return "La category " . $category->getName() . " a été ajouté en BDD";
    }

    //Retourner la liste des categories
}
