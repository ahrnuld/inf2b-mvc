<?php
namespace Controllers;

use Services\ArticleService;

class ArticleController
{

    private $articleService;

    function __construct()
    {
        $this->articleService = new ArticleService();
    }

    public function index()
    {
        $model = $this->articleService->getAll();

        require __DIR__ . '/../views/article/index.php';
    }

    public function single()
    {
        $model = $this->articleService->getAll();

        require __DIR__ . '/../views/article/single.php';
    }
}
