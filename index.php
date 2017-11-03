<?php
ini_set('display_errors',1);
switch ($_GET['page']) {
    case 'home':
    require 'pages/home.php';
    break;
    case 'admin':
    require 'pages/admin.php';
    break;
    case 'fiche':
    require 'pages/fiche.php';
    break;
	case 'faq':
	require 'pages/faq.php';
    break;
    case 'telechargement':
	require 'pages/telechargements.php';
    break;
    case 'souhaitformation':
    require 'pages/souhaitformation.php';
    break;
    case 'catalogue':
    require 'pages/catalogue.php';
    break;
    case 'session':
    require 'pages/session.php';
    break;
    default :
    require 'pages/home.php';
    break;

}

?>

