<?php

class personne{
    private $IdClient;
    private $NomClient;
    private $PrenomClient;
    private $AdresseClient;
    private $TelClient;
    private $MailClient;
    private $MdpClient;

    public function __construct ($unIdClient,$unNom,$unPrenom,$uneAdresse,$unTel,$unMailClient,$unMdpClient){
        $this->IdClient=$unIdClient;
        $this->NomClient=$unNom;
        $this->PrenomClient=$unPrenom;
        $this->AdresseClient=$uneAdresse;
        $this->TelClient=$unTel;
        $this->MailClient=$unMailClient;
        $this->MdpClient=$unMdpClient;
    }

    public function get_Id() {return $this->IdClient; }
    public function get_Nom() {return $this->NomClient; }
    public function get_Prenom() {return $this->PrenomClient; }
    public function get_Adresse() {return $this->AdresseClient; }
    public function get_Tel() {return $this->TelClient; }
    public function get_Mail() {return $this->MailClient; }
    public function get_Mdp() {return $this->MdpClient; }
    
}