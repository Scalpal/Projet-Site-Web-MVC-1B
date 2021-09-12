<?php

ini_set('display_errors', 'on');

include "getRacine.php";
include "$racine/controleur/controleurPrincipal.php";
include_once "$racine/modele/connexionDAO.php"; // pour pouvoir utiliser isLoggedOn() 

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "defaut";
} 

$fichier = controleurPrincipal($action);
include_once "$racine/controleur/$fichier";  


#print_r($_SESSION);

/* Programmes de test */

/*

include "vue/vueEntete.php";
include "modele/pdo.php";
include "modele/connexionDAO.php";
include "modele/photosDAO.php";
include "modele/circuitDAO.php";
include "vue/vueAccueil.php";
include "vue/vueRechercheCircuit.php";

$destination="";
if (isset($_POST["destinations"])){
    $destination = $_POST["destinations"];
    $lesCircuits=circuitDAO::get_CircuitByDestination($destination);
}

include "vue/vueListeCircuits.php";
print_r($lesCircuits);
*/


#Test de connexion 
/*include "vue/vueEntete.php";
include_once "modele/connexionDAOcopie.php";

$mail='pppascallim@gmail.com';
$mdp='motdepasse1';
connexionDAOcopie::login($mail,$mdp);

if (connexionDAOcopie::isLoggedOn()) {
    echo "logged";
} else {
    echo "not logged";
} 

// deconnexion
connexionDAOcopie::logout(); */

#include "modele/photosDAO.php";
#include "modele/pdo.php"; 

#include "modele/circuitDAO.php";
#require "vue/vueEntete.php";
#require "vue/vueAccueil.php";
#include "vue/vueRechercheCircuit.php";
#require "vue/vueFooter.php";

#include "vue/vueListeCircuitsDubai.php";

// test reservation
/* include "vue/vueEntete.php";
include "vue/vueReservation.php"; */

?>



