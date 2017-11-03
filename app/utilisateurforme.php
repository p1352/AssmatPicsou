<?php

require_once "app.core.php";
require_once "sql.core.php";

class Utilisateurforme {
    public $id;
    public $email;
    public $nom;
    public $prenom;
    public $telephone;
    public $dateformation;
    public $cpf;
    public $formations;


    public function __construct ($id, $email, $nom, $prenom, $telephone, $dateformation, $cpf, $formations){

    $this->id=$id;
    $this->email=$email;
    $this->nom =$nom;
	$this->prenom = $prenom;
	$this->telephone = $telephone;
	$this->dateformation= $dateformation;
	$this->cpf= $cpf;
	$this->formations= $formations;
	
     }
    
     public function transfer() {
        if ($this -> email != NULL and $this -> formations != NULL ){
            $data = App::openSql();
            $data = $data->insertSql('INSERT INTO formations_realisees (email, nom, prenom, telephone, dateformation, cpf, formations) values (:email, :nom, :prenom, :telephone, :dateformation, :cpf, :formations)',
            $params = array ('email' => htmlspecialchars($this->email),
            'nom' => htmlspecialchars($this->nom),
            'prenom' => htmlspecialchars($this->prenom),
            'telephone'=> htmlspecialchars($this->telephone),
            'dateformation' => htmlspecialchars($this->dateformation),
            'cpf' => htmlspecialchars($this->cpf),
            'formations' => htmlspecialchars($this->formations)
        ));

         $data = $data->deleteSql('DELETE FROM souhaits_formations WHERE id=:id',
          $params = array ('id' => htmlspecialchars($this->id))  );

    
        //  header ('Location : ../index.php');
    
    
        }
    } 

    }

