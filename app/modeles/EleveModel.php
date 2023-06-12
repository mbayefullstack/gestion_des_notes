<?php
namespace Model;

class EleveModel extends ConnexionDatabase
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "eleve";
    }
}

