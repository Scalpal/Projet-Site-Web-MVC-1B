<?php

include_once "modele/pdo.php";
include_once "modele/personne.php";

class personneDAO{

  static public function add_personne($unNomClient,$unPrenomClient,$uneAdresseClient,$unTelClient,$unMailClient, $unMdpClient){
    try {
        $cnx = pdoo::connexionPDO();

        #Préparation de la requête d'ajout 
        $req = $cnx->prepare('INSERT INTO personne (NomClient, PrenomClient, AdresseClient, TelClient, MailClient, MdpClient)
        VALUES (:NomClient, :PrenomClient, :AdresseClient, :TelClient, :MailClient, :MdpClient)');
        
        #Assignation des valeurs de la personne en paramètres
        $req->bindValue(':NomClient', $unNomClient, PDO::PARAM_STR);
        $req->bindValue(':PrenomClient', $unPrenomClient, PDO::PARAM_STR);
        $req->bindValue(':AdresseClient', $uneAdresseClient, PDO::PARAM_STR);
        $req->bindValue(':TelClient', $unTelClient, PDO::PARAM_INT);
        $req->bindValue(':MailClient', $unMailClient, PDO::PARAM_STR);
        $req->bindValue(':MdpClient', $unMdpClient, PDO::PARAM_STR);
        
        #Éxécution de la requête
        $req->execute();
    
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    static public function get_InfoPersonneByMail($MailClient){
        try {
            $cnx = pdoo::connexionPDO();
            $req = $cnx->prepare('SELECT * FROM personne WHERE MailClient=:MailClient');
            $req->bindValue(':MailClient', $MailClient, PDO::PARAM_STR);
            $req->execute();
    
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function update_PersonneById($NomClient,$PrenomClient,$AdresseClient,$TelClient,$MailClient,$MdpClient,$IdClient){
        try {
            $ret=false;

            $cnx = pdoo::connexionPDO();
            $req = $cnx->prepare('UPDATE personne SET NomClient =:NomClient, PrenomClient=:PrenomClient , AdresseClient=:AdresseClient,
            TelClient=:TelClient , MailClient=:MailClient , MdpClient=:MdpClient  WHERE IdClient=:IdClient');
            $req->bindValue(':NomClient', $NomClient, PDO::PARAM_STR);
            $req->bindValue(':PrenomClient', $PrenomClient, PDO::PARAM_STR);
            $req->bindValue(':AdresseClient', $AdresseClient, PDO::PARAM_STR);
            $req->bindValue(':TelClient', $TelClient, PDO::PARAM_INT);
            $req->bindValue(':MailClient', $MailClient, PDO::PARAM_STR);
            $req->bindValue(':MdpClient', $MdpClient, PDO::PARAM_STR);
            $req->bindValue(':IdClient', $IdClient, PDO::PARAM_INT);
            $req->execute();
            
            $ret=true;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $ret;
    }
    
}

/* Assignation des valeurs de la personne en paramètres
    $req->bindValue(':IdClient', $unePersonne->get_Id(), PDO::PARAM_INT);
    $req->bindValue(':NomClient', $unePersonne->get_Nom(), PDO::PARAM_STR);
    $req->bindValue(':PrenomClient', $unePersonne->get_Prenom(), PDO::PARAM_STR);
    $req->bindValue(':AdresseClient', $unePersonne->get_Adresse(), PDO::PARAM_STR);
    $req->bindValue(':TelClient', $unePersonne->get_Tel(), PDO::PARAM_INT);
    $req->bindValue(':MailClient', $unePersonne->get_Mail(), PDO::PARAM_STR);
    $req->bindValue(':MdpClient', $unePersonne->get_Mdp(), PDO::PARAM_STR); 
*/

/* Boucle pour création d'objet personne

foreach ($ligne as $key => $val) { 
    $collectionPersonne = new personne ($val['IdClient'],$val['NomClient'],$val['PrenomClient'],$val['AdresseClient'],$val['TelClient'],
    $val['MailClient'],$val['MdpClient']);
    $resultat[]=$collectionPersonne;
}
*/