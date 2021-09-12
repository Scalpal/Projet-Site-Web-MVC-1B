<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "getRacine.php";
include_once "$racine/modele/personne.php";
include_once "$racine/modele/personneDAO.php";
include_once "$racine/modele/circuitDAO.php";
include_once "$racine/modele/photosDAO.php";
include_once "$racine/modele/connexionDAO.php";
include_once "$racine/modele/reservationDAO.php";
include_once "$racine/modele/activiteDAO.php";

if (connexionDAO::isLoggedOn()){
    $MailClient=$_SESSION["MailClient"]; 
    $MdpClient=$_SESSION["MdpClient"];
    $InfosPersonne = personneDAO::get_InfoPersonneByMail($MailClient);

    $IdClient= $InfosPersonne["IdClient"];
    $lesCircuits = circuitDAO::get_CircuitByReservation($IdClient);

    $IdReservation=reservationDAO::get_ReservationByIdClient($IdClient);
    
    $title = "Mon profil";
    $ladestination= "Liste de vos réservations : ";

    include "$racine/vue/vueEntete.php";
    include "$racine/vue/vueProfil.php";
    include "$racine/vue/vueListeCircuitsProfil.php";
    include "$racine/vue/vueDeconnexion.php";
}
else{
    $title = "TourismeIdéal : Connexion ";
    include "$racine/vue/vueEntete.php";
    include "$racine/vue/vueConnexion.php";
} 


