<?php 

require_once("app/formation.php");
require_once("app/utilisateur.php");

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Souhaits de formation catalogue</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="public/css/sb-admin-2.css" rel="stylesheet"> -->
    <script src="public/js/jquery-3.2.0.min.js"> </script>
        <script src="public/js/bootstrap.js"> </script>
        <script src="public/js/bootstrap-select"></script>

        </head>

        <body>
            <header>
               <nav class="navbar fixed-top navbar-expand-sm navbar-toggleable-md navbar-dark bg-dark ">
               	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
               		<span class="navbar-toggler-icon"></span>
               	</button>
               	
               	<!-- Logo -->
               	<a class="navbar-brand" href="https://www.sylvan-formations.com">Sylvan Formations</a>
               	
               	<!-- Liens -->
               	<div class="collapse navbar-collapse" id="nav-content">
               		<ul class="navbar-nav">
               			<li class="nav-item">
               				<a class="nav-link" href="index.php?page=home">
               					Souhaits de formation CPF<span class="sr-only">(courant)</span>
               				</a>
               			</li>
                           <li class="nav-item active">
               				<a class="nav-link" href="index.php?page=catalogue">
               					Souhaits de formation catalogue<span class="sr-only">(courant)</span>
               				</a>
               			</li>
               			<li class="nav-item">
               				<a class="nav-link" href="index.php?page=faq">
               					Questions fréquentes
               				</a>
                           </li>
                           <li class="nav-item">
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
                   <h1 class="text-center page-header"> Souhaits de formation catalogue</h1>
                    <hr>
                </div>
                
            </header>
            <form action="index.php?page=catalogue" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label class="control-label" style="font-size : 1.5em;"> Coordonnées </label><br><br>
                                
                               

                               
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Votre Email" style="max-width:30em;" required>
                                    <br>
                                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom" style="max-width:30em;" required>
						<br>
                                                                             
                                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Votre prénom" style="max-width:30em;" required>
                                        <br>
                                        <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="Téléphone" style="max-width:30em;" required>
                                          </div>
                                </div>
                                          <div class="col-sm-12 col-md-6">
                                          <p></p>
                                          <textarea name="adresse" class="form-control" id="adresse" placeholder="Adresse"></textarea>
                                          <br>
                                          <p> Faites vous partie d'un RAM ou d'une association ? </p>
                                          <label class="radio-inline">
                                           <input type="radio" name="ram_oui" value="oui"> Oui </label>
                                            <label class="radio-inline">
                                           <input type="radio" name="ram_oui" value="non"> Non
									</label>
                                        <input type="text" name="ram_nom" class="form-control" id="ram_nom" placeholder="Si oui, lequel ?"
                                        style="max-width: 30em;">     
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row well">
                        <div class="col-sm-12 col-md-6">
                        <label class="control-label" style="font-size : 1.5em;"> Quels sont vos souhaits de formation ?</label><br><br>
                                                <hr style="width:80%;">
                        <div class="row">
                            <div class="col-xs-12 col-md-12 ">
                                                             
                                                            
                                 <select name="formations" class="form-control">
                                	 
                                 	 <?php 
											Formation::select("");					   
																   
															   ?>
                                 	
                                 </select>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                           <label class="control-label" style="font-size : 1.5em;"> Souhaitez vous des informations complémentaires pour compléter le dossier d'inscription ?  </label><br><br>
                                                        <hr style="width:80%;">
                        <div class="row">
                            <div class="col-xs-12 col-md-12 text-center">
                                <select name="reponse_informations" class="form-control" placeholder="Sélectionner une réponse" style="max-width:35em;" required>
                                    <option>Oui</option>
                                    <option>Non</option>
                                    
                                </select>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <hr>
               
                
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 text-center">
                            <br><br>
                            <button type="submit" class="btn btn-primary" style="zoom : 120%"> Valider</button>
                            
                            <?php $utilisateur = new Utilisateur ($_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['telephone'], $_POST['adresse'],$_POST['ram_oui'], $_POST['ram_nom'], $_POST['formations'], $_POST['reponse_informations']);
							                            $save_user = $utilisateur -> save();
                            ?> 
                            
                            
                            </div> 
                            </form> 
                            </div>
                            </div>
                            </div>
                            <footer> <div class="text-center"> Sylvan Formations - 60 Rue Albert 1er - 17000 La Rochelle - 05.46.55.14.70 </div>
                                <br><br><br>
                                </footer>
                                </body></html>      
                                                 



                            




                            


                    

        
            


