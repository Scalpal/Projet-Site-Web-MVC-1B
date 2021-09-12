<?php

class Activite{
    private $IdAct;
    private $NomAct;
    private $PrixAct;
    private $TypeCat_CategorieAct;

    public function __construct($unIdAct, $unNomAct,$unPrixAct, $unTypeCat_CategorieAct){
        $this->IdAct=$unIdAct;
        $this->NomAct=$unNomAct;
        $this->PrixAct=$unPrixAct;
        $this->TypeCat_CategorieAct=$unTypeCat_CategorieAct;
    }

    public function get_IdAct(){ return $this->IdAct; }
    public function get_NomAct(){ return $this->NomAct; }
    public function get_PrixAct(){ return $this->PrixAct; }
    public function get_TypeCat(){ return $this->TypeCat_CategorieCat; }
}