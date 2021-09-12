<?php 

class reservation{
    private $IdReservation;
    private $DateReservation;
    private $MoyenPaiementRes;
    private $IdClient;
    private $CodeCircuit;

    public function __construct($unIdReserv,$uneDateReserv,$unMoyenPaiement,$unIdClient,$unCodeCircuit){
        $this->IdReservation=$unIdReserv;
        $this->DateReservation=$uneDateReserv;
        $this->MoyenPaiementRes=$unMoyenPaiement;
        $this->IdClient=$unIdClient;
        $this->CodeCircuit=$unCodeCircuit;
    }

    #Getters de la classe Reservation 
    public function get_IdRes() { return $this->IdReservation; }
    public function get_DateRes() { return $this->DateReservation; }
    public function get_MoyenPay() { return $this->MoyenPaiementRes; }
    public function get_CodeCircuit() { return $this->CodeCircuit; }
    public function get_IdClient() { return $this->IdClient; }

}