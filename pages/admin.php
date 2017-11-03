<?php

require_once "app/formation.php";
require_once "app/utilisateur.php";
$title = "Inscription Formation : Zone admin";
include "templates/head.php";

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
            <li class="nav-item"> <a class="btn btn-info" href="index.php?page=session"> Sessions </a> </li>
</ul>
</div>
</nav>
            
        </div>
    </header>

    <div class="container-fluid">
        <br><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h2> Saisir une nouvelle formation </h2>
                <form action="index.php?page=admin" method="POST">
                <input name="newformation" required type="text" class="form-control" id="newformation" placeholder="Nouvelle formation" style="max-width:30em;">
                <input name="newduree" required type="number" class="form-control" id="newduree" placeholder="Indiquer le nombre sans h"
                style="max-width: 30em;">
                <label class="form-check-label"><INPUT type="checkbox" class="form-check-input" name="cpf" value="oui"> Formation CPF </label>
                <input name="code" required type="text" class="form-control" id="newcode" placeholder="Code formation" style="max-width:30em;">
                
                <br>
                <button type="submit" class="btn btn-default"> Valider </button>
                <?php 

                    $creation = new Formation ($_POST['newformation'], $_POST['newduree'], $_POST['cpf'], $_POST['code']);
                    $save_creation = $creation -> save();

                    ?> 
                </form>
                    </div> 
                    <div class="col-xs-12 col-md-6 text-center">
                    <H2> Nombre de voeux en attente </H2>
                    <p style="font-size: 4em;">
                        <?php
                        Utilisateur::countUser();
                        ?>
                    </p>
                </div>
                   
        </div>
        <hr>
        <div class="container">
            <div class="row">
            <div class ="col-sm-12 col-md-12">
            <h2> Liste des formations </h2>
            <table class="table">
            <tr><th> Nom </th><th> Durée </th><th> Code </th><th> CPF </th><th> Administration </th></tr>
                <?php Formation::table();
                ?>
            </table>
        </div>
			</div>
            <hr>
                <div class="row">
                   <div class="col-xs-12 col-md-6 text-center">
                    <h2> Liste des apprenants </h2>
                    <ul style="display:table-cell;">
                        <?php 
                        Utilisateur ::liste()
                        ?>
                    </ul>
                </div>
            </div>
		</div>
                <footer>
                    <br><br><br>
                </footer>
            
        
  
</body>

<script type="text/javascript">

// Diagramme circulaire

var pieData = [
    {
        value : <?php 
        Utilisateur ::countUser ('1');
        ?>,
        color :"#e74c3c",
        highight : "#FF5ASE",
        label : "1/10"
    },
    {
        value : <?php 
        Utilisateur ::countUser ('2');
        ?>,
        color :"#e74c3c",
        highight : "#FF5ASE",
        label : "2/10"
    },
    {
        value : <?php 
        Utilisateur ::countUser ('3');
        ?>,
        color :"#e74c3c",
        highight : "#FF5ASE",
        label : "3/10"
    },
    {
        value : <?php 
        Utilisateur ::countUser ('4');
        ?>,
        color :"#e67e22",
        highight : "#FF5ASE",
        label : "4/10"
    },
    {
        value : <?php 
        Utilisateur ::countUser ('5');
        ?>,
        color :"#2980b9",
        highight : "#FF5ASE",
        label : "5/10"
    },
    {
        value : <?php 
        Utilisateur ::countUser ('6');
        ?>,
        color :"#2980b9",
        highight : "#FF5ASE",
        label : "6/10"
    },
    {
        value : <?php 
        Utilisateur ::countUser ('7');
        ?>,
        color :"#3498db",
        highight : "#FF5ASE",
        label : "7/10"
    },
    {
        value : <?php 
        Utilisateur ::countUser ('8');
        ?>,
        color :"#3498db",
        highight : "#FF5ASE",
        label : "8/10"
    },
    {
        value : <?php 
        Utilisateur ::countUser ('9');
        ?>,
        color :"#3498db",
        highight : "#FF5ASE",
        label : "9/10"
    },
    {
        value : <?php 
        Utilisateur ::countUser ('10');
        ?>,
        color :"#3498db",
        highight : "#FF5ASE",
        label : "10/10"
    },

];

// Options du camembert 
var pieOptions = {
    responsive : true 
}

// Génération du camembert 
var pie = document.getElementById("pie").getContext("2d");

// Dessiner le camembert 
new Chart(pie).Pie(pieData, pieOptions);

</script>
</html>                 
