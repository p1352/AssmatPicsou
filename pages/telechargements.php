<?php 

require_once ("app/formation.php");
require_once("app/utilisateur.php");

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Souhaits de formation</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <script src="public/js/jquery-3.2.0.min.js"> </script>
        <script src="public/js/bootstrap.js"> </script>
        <script src="public/js/bootstrap-select"></script>
        <script src="public/js/popper.js"> </script>

        </head>

        <body>
            <header>
               <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-primary">
               	<button class="navbar-toggler" type="button" data-toogle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
               		<span class="navbar-toggler-icon"></span>
               	</button>
               	
               	<!-- Logo -->
               	<a class="navbar-brand" href="https://www.sylvan-formations.com">Sylvan Formations</a>
               	
               	<!-- Liens -->
               	<div class="collapse navbar-collapse" id="nav-content">
               		<ul class="navbar-nav">
               			
                     	<li class="nav-item">
               				<a class="nav-link" href="index.php?page=home">
               					Souhaits de formation <span class="sr-only">(courant)</span>
               				</a>
               			</li>
               			<li class="nav-item ">
               				<a class="nav-link" href="index.php?page=faq">
               					FAQ <span class="sr-only">(courant)</span>
               				</a>
               			</li>
               			<li class="nav-item active">
               				<a class="nav-link" href="index.php?page=telechargement">
               					Téléchargements <span class="sr-only">(courant)</span>
               				</a>
               			</li>
               		</ul>
               	</div>
               </nav>
                <div class="container-fluid">
                    <br>
                <br><br>
                   <h1 class="text-center page-header"> Téléchargements </h1>
                  
                    <hr>
                </div>
              </header>
                <table class="table table-inverse">
  <thead>
    <tr>
      <th>Formation</th>
      <th>Formulaire d'inscription</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Les indispensables en informatique</th>
      <td><a href="public/misc/demande-de-prise-en-charge-informatique.pdf" >  Télécharger </a></td>
    </tr>
    <tr>
      <th scope="row">Les indispensables de la bureautique</th>
      <td><a href="public/misc/demande-de-prise-en-charge-bureautique.pdf"> Télécharger</a></td>
    </tr>
    <tr>
      <th scope="row">Photograpier, retoucher avec Photoshop</th>
      <td><a href="public/misc/demande-de-prise-en-charge-photoshop.pdf"> Télécharger</a></td>
    </tr>
    <tr>
      <th scope="row">Anglais pour les voyages et les loisirs</th>
      <td><a href="public/misc/demande-de-prise-en-charge-anglais.pdf">Télécharger</a></td>
    </tr>
</table>

            
            
    
                            
                            <footer> <div class="text-center">  Sylvan Formations - 60, rue Albert 1er - 17000 La Rochelle - 05.46.55.14.70</div>
                                <br><br><br>
                                </footer>
                                </body></html>      
                                                 



                            




                            


                    

        
            


