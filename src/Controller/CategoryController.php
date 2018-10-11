<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 27/09/18
 * Time: 10:24
 */

namespace Controller;

use Twig_Loader_Filesystem;
use Twig_Environment;
use Model\CategoryManager;

class CategoryController
{
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index()
    {
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->selectAllCategories();

        return $this->twig->render('Category/index.html.twig', ['categories' => $categories]);
    }

    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        return $this->twig->render('Category/show.html.twig', ['category' => $category]);

    }
}
