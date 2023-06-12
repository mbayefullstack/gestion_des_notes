<?php
namespace Model;

class ClasseModel extends ConnexionDatabase
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "classe";
    }
}

