<?php

include_once "modele/pdo.php";
include "modele/circuit.php";

class circuitDAO{

    static public function get_Circuit(){

        $resultat=array();
        try {
            $cnx = pdoo::connexionPDO(); #Connexion à la base de données 
    
            $req = $cnx->prepare('SELECT * FROM circuit'); #Préparation de la requête 

            $req->execute(); #Éxécution de la requête

            $ligne = $req->fetchall(); 
            
            foreach ($ligne as $key => $val) { 
                $collectionCircuits = new Circuit ($val['CodeCircuit'],$val['NomCircuit'],$val['DateDepart'],$val['VilleDepart'],$val['Duree'],
                $val['PrixCircuit'],$val['destinations']);
                $resultat[]=$collectionCircuits;
            }
        
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
    
    static public function get_CircuitByCode($unCodeCircuit){
        try {
            $cnx = pdoo::connexionPDO();
            $req = $cnx->prepare('SELECT * FROM circuit WHERE CodeCircuit=:CodeCircuit');
            $req->bindValue(':CodeCircuit', $unCodeCircuit, PDO::PARAM_INT);
    
            $req->execute();
    
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function get_CircuitByDestination($uneDestination){
        try {
            $cnx = pdoo::connexionPDO();
            $req = $cnx->prepare('SELECT * FROM circuit WHERE destinations=:destinations');
            $req->bindValue(':destinations', $uneDestination, PDO::PARAM_INT);
    
            $req->execute();
    
            $ligne = $req->fetchall(); 
            
            foreach ($ligne as $key => $val) { 
                $collectionCircuits = new Circuit ($val['CodeCircuit'],$val['NomCircuit'],$val['DateDepart'],$val['VilleDepart'],$val['Duree'],
                $val['PrixCircuit'],$val['destinations']);
                $resultat[]=$collectionCircuits;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function get_CircuitByVilleDepart($uneVilleDepart){
        try {
            $cnx = pdoo::connexionPDO();
            $req = $cnx->prepare('SELECT * FROM circuit WHERE VilleDepart=:VilleDepart');
            $req->bindValue(':VilleDepart', $uneVilleDepart, PDO::PARAM_STR);
    
            $req->execute();
    
            $ligne = $req->fetchall(); 
            
            foreach ($ligne as $key => $val) { 
                $collectionCircuits = new Circuit ($val['CodeCircuit'],$val['NomCircuit'],$val['DateDepart'],$val['VilleDepart'],$val['Duree'],
                $val['PrixCircuit'],$val['destinations']);
                $resultat[]=$collectionCircuits;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function get_CircuitByDate($uneDate){
        try {
            $cnx = pdoo::connexionPDO();
            $req = $cnx->prepare('SELECT * FROM circuit WHERE DateDepart>=:DateDepart');
            $req->bindValue(':DateDepart', $uneDate, PDO::PARAM_STR);
    
            $req->execute();
    
            $ligne = $req->fetchall(); 
            
            foreach ($ligne as $key => $val) { 
                $collectionCircuits = new Circuit ($val['CodeCircuit'],$val['NomCircuit'],$val['DateDepart'],$val['VilleDepart'],$val['Duree'],
                $val['PrixCircuit'],$val['destinations']);
                $resultat[]=$collectionCircuits;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function get_CircuitByDuree($uneDuree){
        try {
            $cnx = pdoo::connexionPDO();
            $req = $cnx->prepare('SELECT * FROM circuit WHERE Duree>=:Duree');
            $req->bindValue(':Duree', $uneDuree, PDO::PARAM_INT);
    
            $req->execute();
    
            $ligne = $req->fetchall(); 
            
            foreach ($ligne as $key => $val) { 
                $collectionCircuits = new Circuit ($val['CodeCircuit'],$val['NomCircuit'],$val['DateDepart'],$val['VilleDepart'],$val['Duree'],
                $val['PrixCircuit'],$val['destinations']);
                $resultat[]=$collectionCircuits;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function get_CircuitByPrix($unPrix){
        try {
            $cnx = pdoo::connexionPDO();
            $req = $cnx->prepare('SELECT * FROM circuit WHERE PrixCircuit>=:PrixCircuit');
            $req->bindValue(':PrixCircuit', $unPrix, PDO::PARAM_INT);
    
            $req->execute();
    
            $ligne = $req->fetchall(); 
            
            foreach ($ligne as $key => $val) { 
                $collectionCircuits = new Circuit ($val['CodeCircuit'],$val['NomCircuit'],$val['DateDepart'],$val['VilleDepart'],$val['Duree'],
                $val['PrixCircuit'],$val['destinations']);
                $resultat[]=$collectionCircuits;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function get_CircuitByReservation($IdClient){
        try {
            $cnx = pdoo::connexionPDO();
            $req = $cnx->prepare('SELECT CodeCircuit,NomCircuit,DateDepart,VilleDepart,Duree,PrixCircuit,destinations
            FROM circuit C,reservation R WHERE R.IdClient=:IdClient AND R.CodeCircuit_concerner=C.CodeCircuit');
            $req->bindValue(':IdClient', $IdClient, PDO::PARAM_INT);
    
            $req->execute();
    
            $ligne = $req->fetchall();
            $resultat=array(); // cette initialisation de $resultat à un array permet d'éviter les erreurs si un utilisateur n'a réservé aucun circuits 
            
            foreach ($ligne as $key => $val) { 
                $collectionCircuits = new Circuit ($val['CodeCircuit'],$val['NomCircuit'],$val['DateDepart'],$val['VilleDepart'],$val['Duree'],
                $val['PrixCircuit'],$val['destinations']);
                $resultat[]=$collectionCircuits;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function get_CircuitBySelect($uneDestination,$uneVilleDepart,$uneDate,$uneDuree,$unPrix){
        try {

            $cnx = pdoo::connexionPDO();
            $req = $cnx->prepare('SELECT * FROM circuit 
            WHERE (:destinations IS NULL OR destinations=:destinations) 
            AND (:VilleDepart IS NULL OR VilleDepart=:VilleDepart) 
            AND (:DateDepart IS NULL OR DateDepart=:DateDepart ) 
            AND (:Duree IS NULL OR Duree=:Duree) 
            AND (:PrixCircuit IS NULL OR PrixCircuit>=:PrixCircuit)');

            $req->bindValue(':destinations', $uneDestination, PDO::PARAM_INT);
            $req->bindValue(':VilleDepart', $uneVilleDepart, PDO::PARAM_STR);
            $req->bindValue(':DateDepart', $uneDate, PDO::PARAM_STR);
            $req->bindValue(':Duree', $uneDuree, PDO::PARAM_INT);
            $req->bindValue(':PrixCircuit', $unPrix, PDO::PARAM_INT);
    
            $req->execute();
    
            $ligne = $req->fetchall(); 
            $resultat=array();
            
            if(count($ligne)>=1){
                foreach ($ligne as $key => $val) { 

                    $collectionCircuits = new Circuit ($val['CodeCircuit'],$val['NomCircuit'],$val['DateDepart'],$val['VilleDepart'],$val['Duree'],
                    $val['PrixCircuit'],$val['destinations']);
                    
                    $resultat[]=$collectionCircuits;
                }
            }return $resultat;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }
}

