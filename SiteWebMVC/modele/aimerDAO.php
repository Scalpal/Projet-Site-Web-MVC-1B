<?php

class AimerDAO{

    static public function post_avis($IdClient,$CodeCircuit,$Avis){
        $resultat = -1;
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare('INSERT INTO (IdClient,CodeCircuit,Avis) VALUES (:IdClient,:CodeCircuit,:Avis)');
            $req->bindValue(':IdCLient', $IdClient, PDO::PARAM_INT);
            $req->bindValue(':CodeCircuit', $CodeCircuit, PDO::PARAM_INT);
            $req->bindvalue(':Avis', $Avis, PDO::PARAM_STR);
            
            $resultat = $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
        }

    static public function delete_avis($IdClient,$CodeCircuit){
        $resultat = -1;
   
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare('DELETE FROM aimer where IdClient=:IdClient and CodeCircuit=:CodeCircuit');
        $req->bindValue(':IdCLient', $IdClient, PDO::PARAM_INT);
        $req->bindValue(':CodeCircuit', $CodeCircuit, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
    }
}
