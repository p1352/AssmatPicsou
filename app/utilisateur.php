<?php

require_once "app.core.php";
require_once "sql.core.php";

class Utilisateur {
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

public function save() {
    if ($this -> email != NULL and $this -> formations != NULL ){
        $data = App::openSql();
        $data = $data->insertSql('INSERT INTO souhaits_formations (email, nom, prenom, telephone, adresse, ram_oui, ram_nom, formations, reponse_informations) values (:email, :nom, :prenom, :telephone, :adresse, :ram_oui, :ram_nom, :formations, :reponse_informations)', 
     $params = array ('email' => htmlspecialchars($this->email),
     'nom' => htmlspecialchars($this->nom),
	'prenom' => htmlspecialchars($this->prenom),
					  'telephone' => htmlspecialchars($this->telephone),
					  'adresse' => htmlspecialchars($this->adresse),
					  'ram_oui' => htmlspecialchars($this->ram_oui),
					  'ram_nom' => htmlspecialchars($this->ram_nom),
					  'formations' => htmlspecialchars($this->formations),
					  'reponse_informations' => htmlspecialchars($this->reponse_informations)
     )
     );

    //  header ('Location : ../index.php');


    }
} 

public static function listeUser ($formation){
    $data = App::openSql();
    $data = $data->querySql('SELECT id, nom, prenom, telephone, email, adresse FROM souhaits_formations WHERE formations = "'.$formation.'"');

    while ($participant = $data->fetch()) {
        echo '<tr><td>'.$participant->id.'</td><td>'.$participant->nom.'</td><td>'.$participant->prenom.'</td><td>'.$participant->telephone.'</td><td>'.$participant->email.'</td><td>'.$participant->adresse.'</td></tr>';
    }
}

public static function countUser ($type = FALSE) {
// Foncion destinée à compter le nombre d'enregistrements de type type. 
    if ($type){
        $data = App::openSql();
        $data = $data->querySql('SELECT COUNT(nom) AS nbuser FROM souhaits_formations WHERE formations = "'.$type.'"');
    }
    else {
        $data = App::openSql();
        $data = $data->querySql('SELECT COUNT(nom) AS nbuser FROM souhaits_formations');
    }
    $nbuser = $data->fetch();
    echo ($nbuser -> nbuser);
}

public static function liste (){
    $data = App::openSql();
    $data = $data->querySql('SELECT id, nom, prenom, telephone, email, adresse, ram_oui, ram_nom, formations, reponse_informations FROM souhaits_formations');
    
    while ($participant = $data->fetch()) {
        $page = "fiche";
        echo '<li><a href ="index.php?page='.$page.'&id='.$participant->id.'">'.$participant->nom.' -> '.$participant->formations.'</li>';
    }
}

public function getInfo ($id) {
    $data = App::openSql();
    $data = $data->querySql('SELECT * FROM utilisateurs_formation WHERE id = "'.$id.'"');
    $info = $data->fetch();
    $this -> email = $info -> email;
    $this -> participant = $info -> participant; 
    $this -> entreprise = $info -> entreprise; 
}

public static function moyenne ($champ){
    $data = App::openSql();
    $data = $data->querySql('SELECT avg('.$champ.') AS info FROM utilisateurs_formation');
    $info = $data->fetch();
    echo ($info->info);
}

public static function moyennepourcent ($champ){
    $data = App::openSql();
    $data = $data->querySql('SELECT avg('.$champ.') AS info FROM utilisateurs_formation');
    $info = $data->fetch();
    $infopourcent = ($info->info)*10;
    echo $infopourcent;
}

}

?> 