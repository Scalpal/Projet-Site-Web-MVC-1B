<?php

include_once "modele/personneDAO.php";

class connexionDAO{

    static public function logout() {
        if (!isset($_SESSION)) {
            session_start();
        }
        unset($_SESSION["MailClient"]);
        unset($_SESSION["MdpClient"]);
    }

    static public function get_MailClientLoggedOn(){
        if (connexionDAO::isLoggedOn() == true){
            $ret = $_SESSION["MailClient"];
        }
        else {
            $ret = "";
        }
        return $ret;  
    }

    static public function isLoggedOn() {
        if (!isset($_SESSION)) {
            session_start();
        }
        $ret = false;

        if (isset($_SESSION["MailClient"])) {
            $personne = personneDAO::get_InfoPersonneByMail($_SESSION["MailClient"]);
            if ($personne["MailClient"] == $_SESSION["MailClient"] && $personne["MdpClient"] == $_SESSION["MdpClient"]) {
                $ret = true;
            }
        }
        return $ret;
    }

}