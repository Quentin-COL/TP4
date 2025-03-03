<?php ob_start();
session_start(); 
include "modeles/Continent.php";
include "modeles/Nationalite.php";
include "modeles/Genre.php";
include "modeles/Livre.php";
include "modeles/Auteur.php";
include "modeles/monPdo.php";
include "vues/header.php";
include "vues/messageFlash.php";

$uc =empty($_GET['uc']) ? "accueil" : $_GET['uc'];

switch($uc){
    case 'accueil':
        include('vues/Accueil.php');
        break;
    case 'continents':
        include('controllers/continentController.php');
        break;

    case 'nationalites':
        include('controllers/nationaliteController.php');
        break;
    case 'genres':
        include('controllers/genreController.php');
        break;
    case 'livres':
        include('controllers/livreController.php');
        break;
    case 'auteurs':
        include('controllers/auteurController.php');
        break;
}
include "vues/footer.php";
?>