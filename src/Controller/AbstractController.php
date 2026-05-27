<?php

namespace App\Controller;

use App\Service\CategoryService;

abstract class AbstractController
{
    protected CategoryService $categoryService;

    public function __construct()
    {
        $this->categoryService = new CategoryService();
    }

    protected function render(string $template, string $title, array $data = [])
    {
        include __DIR__ . "/../../template/template_" . $template . ".php";
    }
}