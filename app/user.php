<?php

require_once "app.core.php";
require_once "sql.core.php";

class User {
    public $email;
    public $nom;
    public $prenom;
    public $telephone;
    public $adresse;
    public $ram_oui;
    public $ram_nom;
    public $formations;
    public $reponse_informations;


    public function __construct ($email, $nom, $prenom, $telephone, $adresse, $ram_oui, $ram_nom, $formations, $reponse_informations){
        
            $this->email=$email;
            $this->nom =$nom;
            $this->prenom = $prenom;
            $this->telephone = $telephone;
            $this->adresse=$adresse;
            $this->ram_oui=$ram_oui;
            $this->ram_nom=$ram_nom;
            $this->formations=$formations;
            $this->reponse_informations=$reponse_informations;
        
        
             }


    public function info_user($email){
        
    }



}