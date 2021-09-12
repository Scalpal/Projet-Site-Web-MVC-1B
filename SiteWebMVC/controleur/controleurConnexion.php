<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "getRacine.php";
include_once "$racine/modele/pdo.php";
include_once "$racine/modele/personneDAO.php";
include_once "$racine/modele/connexionDAO.php";

$MailClient=null;
$MdpClient=null;

if (isset($_POST["MailClient"]) && isset($_POST["MdpClient"])){
    $MailClient=$_POST["MailClient"];
    $MdpClient=$_POST["MdpClient"];
}
else
{
    $MailClient=null;
    $MdpClient=null;
}

// récupération des informations de l'utilisateur correspondant au mail entré 
$Client=personneDAO::get_InfoPersonneByMail($MailClient); // récupération des informations de l'utilisateur correspondant au mail entré 

// si le mail et le mdp entré son pareil que ceux de l'utilisateur concerné on crée la connexion
if ($MailClient == $Client["MailClient"] && $MdpClient == $Client["MdpClient"]) {
    session_start();
    $_SESSION["MailClient"] = $Client["MailClient"];
    $_SESSION['MdpClient'] = $Client["MdpClient"];

    include "$racine/controleur/controleurProfil.php";
}
else { 
    $title = "Connexion";

    include "$racine/vue/vueEntete.php"; ?>
    <p class="ErreurCnx"><?php echo "Mauvais identifiant ou mot de passe !"; ?></p><?php
    include "$racine/vue/vueConnexion.php";
}

?>