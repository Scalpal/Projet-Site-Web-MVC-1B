<?php

function controleurPrincipal($action) {
  $lesActions = array();
  $lesActions["defaut"] = "controleurAccueil.php";
  $lesActions["accueil"] = "controleurAccueil.php";
  $lesActions["dubai"] = "dubai.php";
  $lesActions["thailande"] = "thailande.php";
  $lesActions["cambodge"] = "cambodge.php";
  $lesActions["recherche"] = "controleurRechercheCircuit.php";
  $lesActions["connexion"] = "controleurConnexion.php";
  $lesActions["inscription"] = "controleurInscription.php";
  $lesActions["deconnexion"] = "controleurDeconnexion.php";
  $lesActions["reservation"] = "controleurReservation.php";
  $lesActions["profil"] = "controleurProfil.php";
  $lesActions["annulation"] = "controleurAnnulationReservation.php";
  $lesActions["modification"] = "controleurModification.php";

  if (array_key_exists($action, $lesActions)) {
    return $lesActions[$action];
  } 
  else {
    return $lesActions["defaut"];
  }
}

?>