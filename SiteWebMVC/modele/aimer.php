<?php 

class Aimer{
    private $IdClient;
    private $CodeCircuit;
    private $Avis;

    public function __construct($unIdClient,$unCodeCircuit,$unAvis){
        $this->IdClient=$unIdClient;
        $this->CodeCircuit=$unCodeCircuit;
        $this->Avis=$unAvis;
    }

    public function get_IdClient(){ return $this->IdClient; }
    public function get_CodeCircuit(){ return $this->CodeCircuit; }
    public function get_Avis() { return $this->Avis; }
}