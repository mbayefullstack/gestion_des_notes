<?php
namespace Controller;

use Model\AnneeModel;
use Validator\AnneeValidator;
class AnneeController extends Controlleur
{
    private $model;

    public function __construct()
    {
        $this->model = new AnneeModel();
    }

    public function getAllData()
    {
        $data = $this->model->getAllData();
        $this->render(["data"=>$data], 'annee/accueilAnnee');
    }

    public function insertData()
    {
        if ($_SERVER['REQUEST_METHOD']==="POST") {
            $libelle = $_POST['libelle'];
            // var_dump(AnneeValidator::getTab($libelle));
            $erreurs = AnneeValidator::getTab($libelle);
            if(empty($erreurs)) {
                $this->model->addData(["libelle"=>$libelle,"etat"=>"pas encore"]);

            }
             $data = $this->model->getAllData();
            $this->render(["data"=>$data,  "errors"=>$erreurs], 'annee/accueilAnnee');
        }
    }

    public function updateData()
    {
        if ($_SERVER['REQUEST_METHOD']==="POST") {
            $libelle = $_POST['libelle'];
            $id = $_POST['id'];
            $this->model->updateData(['id_annee_scolaire'=>$id], ['libelle'=>$libelle]);
            // var_dump(updateData(['id_annee_scolaire'=>$id], ['libelle'=>$libelle]));
            header("location: http://localhost:3011/annee/getAllData");


        }
            
    }

    public function deleteData()
    {
        if ($_SERVER['REQUEST_METHOD']==="POST") {
            $id = $_POST['id'];
            $this->model->deleteData(['id_annee_scolaire'=>$id]);
            header("location: http://localhost:3011/annee/getAllData");


        }
            
    }
}