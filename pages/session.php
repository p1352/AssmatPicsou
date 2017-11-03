<?php

require_once "app/formation.php";
require_once "app/utilisateur.php";
require_once "app/session.php";
$title = "Inscription Formation : Zone admin";
include "templates/head.php";

?> 
            <?php
            // Appel des méthodes de classe
            $supprime = Session::supprime($_POST['supprime']);
            ?> 

<body>
    <header>
        <div class="container-fluid">
            <br>
            <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-sm navbar-toggleable-md">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
               		<span class="navbar-toggler-icon"></span>
               	</button>
                   <div class="collapse navbar-collapse" id="nav-content">
               		<ul class="navbar-nav">
               			<li class="nav-item">
            <a class="btn btn-primary" href="index.php" role="button"> Retour au site</a> </li>
            <li class="nav-item"> <a class="btn btn-info" href="index.php?page=admin"> Formations </a> </li> 
            <li class="nav-item"> <a class="btn btn-warning" href="index.php?page=session"> Sessions </a> </li>
</ul>
</div>
</nav>
            
        </div>
    </header>

    <div class="container-fluid">
        <br><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h2> Créer une nouvelle session </h2>
                <form action="index.php?page=session" method="POST">
                <select name="nom" class="form-control">
                                	 
                                 	 <?php 
											Formation::selectsession();					   
																   
															   ?>
                                 	
                                 </select>
                <input name="formateur" required type="text" class="form-control" id="formateur" placeholder="Formateur" style="max-width:30em;">
                <input name="lieu" type="text" class="form-control" id="lieu" placeholder="Lieu" style="max-width:30em;">
                <label class="form-check-label"> Date 1ère séance <input name="date1" required type="date" class="form-control" id="date1"> </label>
                <label class="form-check-label"> Date 2ème séance <input name="date2" type="date" class="form-control" id="date2"> </label>
                <label class="form-check-label"> Date 3ème séance <input name="date3" type="date" class="form-control" id="date3"> </label>
                <label class="form-check-label"> Date 4ème séance <input name="date4" type="date" class="form-control" id="date4"> </label>
                <label class="form-check-label"> Date 5ème séance <input name="date5" type="date" class="form-control" id="date5"> </label>

                                      
                                <br> 
                <button type="submit" class="btn btn-default"> Valider </button>

                <?php 

                    $creation = new Session ($_POST['nom'], $_POST['formateur'], $_POST['lieu'], $_POST['date1'], $_POST['date2'], $_POST['date3'], $_POST['date4'], $_POST['date5']);
                    $save_creation = $creation -> save();

                    ?> 
                </form>

</div>
</div> 

<div class="container">
            <div class="row">
            <div class ="col-sm-12 col-md-12">
            <h2> Liste des sessions en cours </h2>
            <table class="table">
            <tr><th> Nom </th><th> Durée </th><th> Code </th><th> CPF </th><th> Lieu </th><th> Formateur </th><th> Administration </th></tr>
                <?php Session::table();
                ?>
            </table>


        </div>
			</div>
