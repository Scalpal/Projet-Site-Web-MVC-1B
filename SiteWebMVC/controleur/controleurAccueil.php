<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/photosDAO.php";
include_once "$racine/modele/pdo.php";
include_once "$racine/modele/circuitDAO.php";
include_once "$racine/modele/connexionDAO.php";
include_once "getRacine.php";

$title = "TourismeIdéal : Accueil";

require "$racine/vue/vueEntete.php";    
require "$racine/vue/vueAccueil.php";
require "$racine/vue/vueRechercheCircuit.php";
require "$racine/vue/vueFooter.php";

?>