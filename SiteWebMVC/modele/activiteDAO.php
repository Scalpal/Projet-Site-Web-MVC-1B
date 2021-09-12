<?php

include 'modele/activite.php';
#include 'modele/pdo.php';

class activiteDAO{

    static public function get_activite(){
        $resultat=array();
        try {
            $cnx = pdoo::connexionPDO(); #Connexion à la base de données 
    
            $req = $cnx->prepare('SELECT * FROM activite'); #Préparation de la requête 

            $req->execute(); #Éxécution de la requête

            $ligne = $req->fetchall(); 
            
            foreach ($ligne as $key => $val) { 
                $collectionActivite = new Activite ($val['IdAct'],$val['NomAct'],$val['PrixAct'],$val['TypeCat_CategorieAct']);
                $resultat[]=$collectionActivite;
            }
        
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function get_activiteByCodeCircuit($CodeCircuit){
        $resultat=array();
        try {
            $cnx = pdoo::connexionPDO(); #Connexion à la base de données 
    
            $req = $cnx->prepare('SELECT * FROM activites WHERE CodeCircuit=:CodeCircuit'); #Préparation de la requête 
            $req->bindvalue(':CodeCircuit',$CodeCircuit,PDO::PARAM_INT);
            $req->execute(); #Éxécution de la requête

            $ligne = $req->fetchall(); 
            
            foreach ($ligne as $key => $val) { 
                $collectionActivite = new Activite ($val['IdAct'],$val['NomAct'],$val['PrixAct'],$val['TypeCat_CategorieAct'],$val['CodeCircuit']);
                $resultat[]=$collectionActivite;
            }
        
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
}