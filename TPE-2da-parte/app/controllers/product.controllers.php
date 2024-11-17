<?php

//importo el modelo de las categorias
require_once 'app/model/categories.model.php';
//importo la vista
require_once 'app/view/categories.view.php';
//importo helpers para sesiones
require_once 'app/helpers/auth.helpers.php';

class ProductController{

    private $model;
    private $view;
    private $viewError;

    public function __construct(){
        //iniciar una sesion
        session_start();
        //instanciar lo que precise
        $this->model = new ProductModel();
        $this->view = new ProductView();
        $this->viewError = new AuthView();
        }

    public function showAllCategories(){
        $categories = $this->model->getAllCategories();

        // empty($categories)
        if(!empty($categories)){

            $this->view->showAllCategories($categories);
        }else{
           $this->viewError->showError('No hay categorias en la DB');
        }

    }

}