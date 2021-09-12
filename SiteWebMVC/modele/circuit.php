<?php 

class Circuit{
    
    private $CodeCircuit;
    private $NomCircuit;
    private $DateDepart;
    private $VilleDepart;
    private $Duree;
    private $PrixCircuit;
    private $Destinations;
    public $tabCircuits;

    public function __construct($unCodeCircuit,$uneNomCircuit,$uneDateDepart,$uneVilleDepart,$uneDuree,$unPrixCircuit,$uneDestination){
        $this->CodeCircuit=$unCodeCircuit;
        $this->NomCircuit=$uneNomCircuit;
        $this->DateDepart=$uneDateDepart;
        $this->VilleDepart=$uneVilleDepart;
        $this->Duree=$uneDuree;
        $this->PrixCircuit=$unPrixCircuit;
        $this->Destinations=$uneDestination;
    }

    public function get_CodeCircuit(){ return $this->CodeCircuit; }
    public function get_NomCircuit(){ return $this->NomCircuit; }
    public function get_DateDepart(){ return $this->DateDepart; }
    public function get_VilleDepart(){ return $this->VilleDepart; }
    public function get_Duree(){ return $this->Duree; }
    public function get_PrixCircuit(){ return $this->PrixCircuit; }
    public function get_Destinations(){ return $this->Destinations; }
    

    public function get_DestinationsIntoStr(){
        $str="";
        if ($this->Destinations == 1){
            $str ="Dubaï";
        }
        elseif ($this->Destinations == 2){
            $str="Thaïlande";
        }
        else{
            $str="Cambodge";
        }
        return $str;
    }

    /* public function create_circuit($Code){
        $ListeCircuits = circuitDAO::get_CircuitByCode($Code);

        while ($ligne = )
        $circuit = new Circuit()
    } */

    public function add_circuit($unCircuit){
        
    }
}

