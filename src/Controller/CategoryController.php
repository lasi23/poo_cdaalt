<?php

namespace App\Controller;

use App\Controller\AbstractController;

class CategoryController extends AbstractController
{
    public function createCategory()
    {
        $data = [];
        
        //test si le formulaire est soumis
        if (isset($_POST["submit"])) {
            $data["msg"] = $this->categoryService->addCategory($_POST);
        }

        $this->render("add_category", "Ajouter category", $data);
    }

    public function showAllCategories() 
    {
        $data["msg"] = $this->categoryService->findAllCategories();

        $this->render("show_all_categories", "Liste categories", $data);
    }
}
