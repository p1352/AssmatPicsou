<?php 

require "params.core.php";

// Création d'une classe Sql qui se connecte à la DB

class Sql {

// Génère un objet qui retourne la connexion à la DB
// Récupère le HOST et le NOM dans app.core et le USER et PASSWORD là où tu sais

private $pdo;

public function __construct($host, $name_db){
    $this->pdo = new PDO("mysql:host=$host;dbname=$name_db;charset=utf8", USERSQL, PASSSQL);
    $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

// Lorsque tout fonctionne et que tu l'envoies en production, remplacer ERRMODE_EXCEPTION par ERRMODE_SILENT

    $this->pdo->setAttribute (\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
}

// Fonction envoyant les query à la BDD et renvoyant les réponses SQL 
// @param query de la requete SQL 
// @return réponse SQL

public function querySql($query, $params=false){
    if ($params){
        $req = $this->pdo->prepare($query);
        $req-> execute($params);
    }
    else {
        $req = $this->pdo->query($query);
    }
    return $req; 
}

// Fonction permettant d'ajouter des éléments dans la BDD
public function insertSql($query, $params=false){
     if ($params){
        $req = $this->pdo->prepare($query);
        $req-> execute($params);
     }
     else {
         $req = $this->pdo->$bdd->exec($query);
     }
     return $req;
}
// Fonction permettant de supprimer des éléments de la BDD
public function deleteSql($query, $params=false){
    if ($params){
        $req = $this->pdo->prepare($query);
        $req -> execute($params);
    }
    else {
        $req = $this->pdo->exec($query);
    }
    return $req;   

}
}

?> 