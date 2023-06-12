<?php
namespace Controller;

use Model\ClasseModel;

class ClasseController extends Controlleur
{
    private $model;

    public function __construct()
    {
        $this->model = new ClasseModel();
    }

    public function getAllData()
    {
        $data = $this->model->getAllData();
        $this->render(["data"=>$data], 'classe/accueilClasse');
    }
}