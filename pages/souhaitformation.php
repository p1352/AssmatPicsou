<?php

require_once "app/formation.php";
require_once "app/utilisateur.php";
$title = "Souhait de formation";
include "templates/head.php";
$formation = $_GET['formation'];
?> 

<body>
    <header>
        <div class="container-fluid">
            <br>
            <a class="btn btn-primary" href="index.php" role="button"> Retour </a>
            <a class="btn btn-primary" href="index.php?page=admin" role='button'> Dashboard </a>
            <hr>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2> <?php echo $formation; ?> </h2>
                <Table class="table"> 
                <tr><th> ID </th><th> Nom </th><th> Prenom </th><th> Telephone </th><th> Courriel </th><th> Adresse </th></tr>
                <?php Utilisateur :: listeUser($formation); ?>
                </table>
                    </div> </div>
                    <div class="row">
                    <div class ="col-sm-12 col-md-6">
                        <h2> Liste des formations </h2>
                        <ul class="list-group">
                            <?php Formation::liste('li');
                            ?>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-6 text-center">
                    <H2> Nombre de stagiaires </H2>
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
                
			</div>
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
