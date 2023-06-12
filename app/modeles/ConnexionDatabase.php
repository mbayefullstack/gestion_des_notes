<?php
namespace Model;

class ConnexionDatabase
{
     
    protected $conn;
    protected $table;   
    protected $type= \PDO::FETCH_ASSOC;

    // constructor
    public function __construct()
    {
        try {
            $this->conn = new \PDO('mysql:host=localhost;dbname=gestion_des_notes', 'root', 'A781000411a.');
        } catch (PDOException $e) {
            echo "Erreur de Connexion".$e->getMessage();
        }
    }

    //fonction pour lister les datas
    public function getAllData()
    {
        $requette = "SELECT * FROM $this->table";
        $stament = $this->conn->prepare($requette);
        $stament->execute();
        return $stament->fetchAll($this->type);
    }

    public function addData($data){
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));

        $requette = "INSERT INTO $this->table ($columns) VALUES ($placeholders)";
        $statement = $this->conn->prepare($requette);
        $statement->execute($data);
    }

    public function updateData($id, $data) {
    $columns = array_keys($data);

        $result = array_map(function ($column, $placeholder) {
            return $column . " = :" . $placeholder;
        }, $columns, $columns);
        $string = implode(", ", $result);

        $cle = array_keys($id)[0];
        $query = "UPDATE $this->table SET $string WHERE $cle = :id";
        $data['id'] = $id[array_keys($id)[0]];
    
        $statement = $this->conn->prepare($query);
        $statement->execute($data);
    }

    

public function deleteData($data){
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));

        $query = "DELETE FROM $this->table WHERE ($columns) = ($placeholders)";
        $statement = $this->conn->prepare($query);
        $statement->execute($data);
    }

}
