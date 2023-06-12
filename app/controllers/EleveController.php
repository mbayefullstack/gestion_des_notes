<?php
namespace Controller;

use Model\EleveModel;

class EleveController extends Controlleur
{
    private $model;

    public function __construct()
    {
        $this->model = new EleveModel();
    }

    public function getAllData()
    {
        
        $data = $this->model->getAllData();
        $this->render(["data"=>$data], 'eleve/accueilEleve');
    }

     public function insertData()
    {
        if ($_SERVER['REQUEST_METHOD']==="POST") {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $datedenaisssance = $_POST['datedenaissance'];
            $lieudenaisssance = $_POST['lieudenaissance'];
            $numero = $_POST['numero'];
            $sexe = $_POST['sexe'];
            $typeeleve = $_POST['typeeleve'];
            $this->model->addData(
                ['nom'=>$nom,'prenom'=>$prenom,
                'date_de_naisssance'=>$datedenaisssance,
                'lieu_de_naisssance'=>$lieudenaisssance,
                'numero'=>$numero,
                'sexe'=>$sexe,
                'type_eleve'=>$typeeleve]
            );
            header("location: http://localhost:3011/eleve/getAllData");
        }
    }

    public function updateData()
    {
        if ($_SERVER['REQUEST_METHOD']==="POST") {
            $libelle = $_POST['libelle'];
            $id = $_POST['id'];
            $this->model->updateData(
                ['nom'=>$nom,'prenom'=>$prenom,
                'date_de_naisssance'=>$datedenaisssance,
                'lieu_de_naisssance'=>$lieudenaisssance,
                'numero'=>$numero,
                'sexe'=>$sexe,
                'type_eleve'=>$typeeleve]);
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