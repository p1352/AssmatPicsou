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
               			</li>
               			<li class="nav-item">
               				<a class="nav-link" href="index.php?page=home">
               					Souhaits de formation <span class="sr-only">(courant)</span>
               				</a>
               			</li>
               			<li class="nav-item active">
               				<a class="nav-link" href="index.php?page=faq">
               					FAQ <span class="sr-only">(courant)</span>
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
                   <h1 class="text-center page-header"> FAQ </h1>
                   <h2 class="text-center page-header"> Formations CPF</h2>
                    <hr>
                </div>
                
            </header>
            <div id="accordion" role="tablist">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Comment s'inscrire à une formation CPF ?
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Renseignez le formulaire de souhait de formation. Ensuite, effectuez les opérations indiquées dans cette FAQ.
      </div>
    </div>
  </div>
     <div class="card">
    <div class="card-header" role="tab" id="headingSix">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          Etape 1 : Inscription sur le site moncompteformation.gouv.fr
        </a>
      </h5>
    </div>

    <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
       <p> Connectez vous sur le site <a href="http://www.moncompteformation.gouv.fr">http://www.moncompteformation.gouv.fr</a>. </p>
        Cliquez sur l'onglet qui se trouve en haut à droite <img src="public/img/accedecompte.jpg" alt="Accéder au compte" class="img-fluid" style="max-width: 180px;"> <br>
        Puis sur : <img src="public/img/secteurprive.jpg" alt="Salarié du secteur privé" class="img-fluid" style="max-width:200px; "> <br>
        En vous munissant de votre numéro de sécurité sociale et de votre dernier bulletin de salaire de l'un de vos parents employeurs. Puis, si vous n'êtes pas encore inscrit(e), cliquez sur l'onglet "Je m'inscris" et suivez les instructions. Sinon accédez à votre espace sécurisé.
        
        </div>
      </div>
    </div>
         <div class="card">
    <div class="card-header" role="tab" id="headingSept">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseSept" aria-expanded="true" aria-controls="collapseSept">
          Etape 2 : Remplir son dossier de formation sur www.moncompteformation.gouv.fr
        </a>
      </h5>
    </div>

    <div id="collapseSept" class="collapse" role="tabpanel" aria-labelledby="headingSept" data-parent="#accordion">
      <div class="card-body">
       Une fois connecte(e) au site, cliquez sur dans le menu sur "rechercher une formation". <img src="public/img/rechercheformation.jpg" alt="Rechercher une formation" class="img-fluid" style="max-width:200px; "> <br>
       Saisissez le code :
       <ul>
       	<li> 164617 pour les formations informatiques</li>
       	<li> 131205 pour les formations en Anglais</li>
       </ul>
       Puis validez votre formation en sélection "Faire cette formation" <br>
       <img src="public/img/fairecetteformation.jpg" alt="Faire cette formation" class="img-fluid" style="max-width:60%; "> <br>
       Vous pouvez alors construire votre dossier. Ne pas oublier de cocher les deux cases ci-dessous :
       <img src="public/img/votreformation.jpg" alt="Votre formation" class="img-fluid" style="max-width:60%; "> <br>
       Vous accédez ensuite à votre dossier. Il vous reste à compléter les éléments incomplets ci-dessous : 
       <img src="public/img/dossier.jpg" alt="Dossier de formation" class="img-fluid" style="max-width:60%; "> <br>
       Les informations concernant :
       <ul>
       	<li>
       		La session de formation
       	</li>
       	<li>
       		L'organisme de formation
       	</li>
       	<li>
       		Le financement
       	</li>
       </ul>
       Se trouvent dans le formulaire de prise en charge de l'Agefos PME que vous retrouverez dans la section "Etape 3 : Compléter la demande de prise en charge auprès de l'Agefos PME"
       
        </div>
      </div>
    </div>
     <div class="card">
    <div class="card-header" role="tab" id="headingHuit">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseHuit" aria-expanded="true" aria-controls="collapseHuit">
          Etape 3 : Compléter la demande de prise en charge auprès de l'Agefos PME 
        </a>
      </h5>
    </div>

    <div id="collapseHuit" class="collapse" role="tabpanel" aria-labelledby="headingHuit" data-parent="#accordion">
      <div class="card-body">
        Le document fourni par l'Agefos PME a été prérempli pour chaque formation Sylvan. Consultez la notice en 3ème page pour vous aider à le completer. <br>
        Il vous reste à compléter :
        <ul>
        	<li>
        		Le cadre 1 : Salarié(e) autonome
        	</li>
        	<li>
        		Le cadre 2 : Votre employeur
        	</li>
        	<li>
        		Le cadre 5 : Coût de votre formation. Dans ce cadre, vous devez uniquement reporter votre solde d'heures DIF et CPF
        	</li>
        </ul>
        Puis dater et signer 
        <img src="public/img/datesignature.jpg" alt="Dater et signer" class="img-fluid" style="max-width:60%; "> <br>
        Les formulaires sont spécifiques à chaque formation et sont disponibles dans l'espace téléchargement de ce site. 
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingDix">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseDix" aria-expanded="false" aria-controls="collapseDix">
          A qui faut-il renvoyer son dossier ? 
        </a>
      </h5>
    </div>
    <div id="collapseDix" class="collapse" role="tabpanel" aria-labelledby="headingDix" data-parent="#accordion">
      <div class="card-body">
        A l'adresse suivante : <br>
        Espace Sylvan <br>
        60, rue Albert 1er <br>
        17000 La Rochelle 
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingOnze">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseOnze" aria-expanded="false" aria-controls="collapseOnze">
          Quelles sont les pièces annexes à renvoyer avec le dossier ? 
        </a>
      </h5>
    </div>
    <div id="collapseOnze" class="collapse" role="tabpanel" aria-labelledby="headingOnze" data-parent="#accordion">
      <div class="card-body">
        <ul>
        	<li>
        		Le dernier bulletin de salaire correspondant à l'employeur indiqué en case 2 du dossier
        	</li>
        	<li>
        		Une copie d'écran du solde DIF déclaré par l'IRCEM sur votre compte CPF sur le site 
        		<a href="http://www.moncompteformation.gouv.fr">http://www.moncompteformation.gouv.fr</a> <br>
        		Pour effectuer une copie d'écran, appuyez deux fois sur la touche "Impr Ecran" de votre clavier puis dans un mail ou une page Word, tapez sur CTRL + V. 
        	</li>
        </ul>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" role="tab" id="headingDouze">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseDouze" aria-expanded="false" aria-controls="collapseDouze">
          L'employeur doit-il être informé ?
        </a>
      </h5>
    </div>
    <div id="collapseDouze" class="collapse" role="tabpanel" aria-labelledby="headingDouze" data-parent="#accordion">
      <div class="card-body">
        Non, ce n'est pas obligatoire puisque la formation a lieu hors du temps de travail.
      </div>
    </div>
  </div>
  
  
    <div class="card">
    <div class="card-header" role="tab" id="headingCinq">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseCinq" aria-expanded="true" aria-controls="collapseCinq">
          Les formations CPF sont-elles payantes ? 
        </a>
      </h5>
    </div>

    <div id="collapseCinq" class="collapse" role="tabpanel" aria-labelledby="headingCinq" data-parent="#accordion">
      <div class="card-body">
        Vous n'avez rien à verser, l'ensemble des frais pédagogiques sont pris en charge par l'Agefos-PME dans la limite de vos heures de CPF disponibles.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Les formations CPF – SYLVAN  peuvent t-elles se cumuler avec les formations du catalogue IPERIA ?
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Oui, les heures de CPF consommées n'affectent pas votre solde de 48 heures de plan de formation par an. 
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Y a-t-il versement d’une indemnité de formation et de remboursement de frais annexes comme pour les formations IPERIA financées sur le plan de formation ?
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Non.
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" role="tab" id="headingTreize">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTreize" aria-expanded="false" aria-controls="collapseTreize">
          Combien de temps avant le début de la formation faut-il renvoyer son dossier complet ? 
        </a>
      </h5>
    </div>
    <div id="collapseTreize" class="collapse" role="tabpanel" aria-labelledby="headingTreize" data-parent="#accordion">
      <div class="card-body">
        Au minimum 40 jours. 
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingQuatorze">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseQuatorze" aria-expanded="false" aria-controls="collapseQuatorze">
          Que deviennent mes heures de DIF non utilisées en 2020 ?  
        </a>
      </h5>
    </div>
    <div id="collapseQuatorze" class="collapse" role="tabpanel" aria-labelledby="headingQuatorze" data-parent="#accordion">
      <div class="card-body">
        Elles sont perdues 
      </div>
    </div>
  </div>
</div>
                            
                            <footer> <div class="text-center"> Sylvan Formations - 60 Rue Albert 1er - 17000 La Rochelle - 05.46.55.14.70 </div>
                                <br><br><br>
                                </footer>
                                </body></html>      
                                                 



                            




                            


                    

        
            


