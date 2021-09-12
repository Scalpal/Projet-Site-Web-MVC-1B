<?php
include_once "modele/pdo.php";
include "$racine/modele/reservation.php";

class reservationDAO{

    static public function add_reservation($uneReservation){
        try{
            $cnx=pdoo::connexionPDO();

            #Préparation de la requête d'ajout 
            $req = $cnx->prepare('INSERT INTO reservation (IdReservation, DateReservation, MoyenPaiementRes, IdClient, CodeCircuit_concerner)
            VALUES (:IdReservation, :DateReservation, :MoyenPaiementRes, :IdClient, :CodeCircuit)');
            
            #Assignation des valeurs de la réservation en paramètres
            $req->bindValue(':IdReservation', $uneReservation->get_IdRes(), PDO::PARAM_INT);
            $req->bindValue(':DateReservation', $uneReservation->get_DateRes(), PDO::PARAM_STR);
            $req->bindValue(':MoyenPaiementRes', $uneReservation->get_MoyenPay(), PDO::PARAM_STR);
            $req->bindValue(':IdClient', $uneReservation->get_IdClient(), PDO::PARAM_INT);
            $req->bindValue(':CodeCircuit', $uneReservation->get_CodeCircuit(), PDO::PARAM_STR);

            #Éxécution de la requête
            $req->execute();
        
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    static public function add_reservationByCodeCircuit($unMoyenPaiement,$unIdClient,$unCodeCircuit){
        try{
            $cnx=pdoo::connexionPDO();

            #Préparation de la requête d'ajout 
            $req = $cnx->prepare('INSERT INTO reservation (MoyenPaiementRes, IdClient, CodeCircuit_concerner)
            VALUES (:MoyenPaiementRes,:IdClient, :CodeCircuit_concerner)');
            
            #Assignation des valeurs de la réservation en paramètres
            $req->bindValue(':MoyenPaiementRes', $unMoyenPaiement, PDO::PARAM_STR);
            $req->bindValue(':IdClient', $unIdClient, PDO::PARAM_INT);
            $req->bindValue(':CodeCircuit_concerner', $unCodeCircuit, PDO::PARAM_STR);

            #Éxécution de la requête
            $req->execute();
        
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    static public function delete_reservation($IdReservation,$IdClient){
        $resultat = -1;
        
        try {
        $cnx = pdoo::connexionPDO(); #Connexion a la base de données
        
        #Préparation de la requête de suppression
        $req = $cnx->prepare('DELETE from reservation where IdReservation=:IdReservation and IdClient=:IdClient');
        $req->bindValue(':IdReservation', $IdReservation, PDO::PARAM_INT); #Assignation des valeurs
        $req->bindValue(':IdClient', $IdClient, PDO::PARAM_INT);
        
        $resultat = $req->execute();   #Éxécution de la requête
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
    }

    static public function get_ReservationByIdClient($IdClient){
        try{
            $cnx= pdoo::connexionPDO();

            $req= $cnx->prepare('SELECT * FROM reservation WHERE IdClient=:IdClient');
            $req->bindvalue(':IdClient',$IdClient, PDO::PARAM_INT);

            $req->execute();

            $ligne = $req->fetchall();
            $resultat=array();

            foreach ($ligne as $key => $val) { 
                $collectionReservations = new reservation ($val['IdReservation'],$val['DateReservation'],$val['MoyenPaiementRes'],
                $val['IdClient'],$val['CodeCircuit_concerner']);
                $resultat[]=$collectionReservations;
            }
        }catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
}



