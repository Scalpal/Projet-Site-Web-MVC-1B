<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include "getRacine.php";
include_once "$racine/modele/connexionDAO.php";

connexionDAO::logout();

$title = "TourismeIdéal : déconnexion "; 
include_once "$racine/vue/vueEntete.php"; 
include_once "$racine/vue/vueConnexion.php";





