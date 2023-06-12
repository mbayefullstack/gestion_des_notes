<?php
namespace Model;

class AnneeModel extends ConnexionDatabase
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "annee_scolaire";
        
    }
}