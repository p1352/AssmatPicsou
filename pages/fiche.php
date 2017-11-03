<?php

require_once "app/utilisateur.php";
include "templates/head.php";

$utilisateur = new Utilisateur ($email, $formation, $participant, $entreprise, $reponse_satisfait,$reponse_attente, $reponse_connaissance, $reponse_inscrire, $reponse_informations, $reponse_lieu, $reponse_horaire, $reponse_maitrise, $reponse_documentation, $reponse_objectifs, $reponse_construction, $reponse_objectifs_fin, $reponse_moyens, $reponse_ecoute, $reponse_relation, $reponse_application, $reponse_besoins, $reponse_optimiser,$reponse_prochaine, $reponse_autre_thematique, $reponse_autre_thematique_2);
$utilisateur -> getInfo($_GET['id']);

?>

<body> 
    <h1><?= $utilisateur -> participant ?> </h1>
    <h2><?= $utilisateur -> email ?></h2>
<h2><?= $utilisateur -> entreprise ?></h2>

</body>
</html>
