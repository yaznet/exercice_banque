<?php

class CompteManager {
	
	private $db;

	public function __construct($db){
		$this->setDb($db);
	}

	public function ajoutCompte(Compte $compte){
        $q = $this->db->prepare('INSERT INTO compte(nomDuCompte, somme, user_id) VALUES (:nomDuCompte, :somme, :user_id)');

        $q->bindValue(':nomDuCompte', $compte->getNomDuCompte());
        $q->bindValue(':somme', $compte->getSomme());
        $q->bindValue(':user_id', $compte->getUser_id());

        $q->execute();
    }

    public function suprCompte(Compte $compte){
        $this->db->query('DELETE FROM compte WHERE id = '.$compte->getId());
    }

    public function updateCompte(Compte $compte){
        $q = $this->db->prepare('UPDATE compte SET somme = :somme WHERE id = :id');

        $q->bindValue(':somme', $compte->getSomme());
        $q->bindValue(':id', $compte->getId());

        $q->execute();
    }

    public function getCompte($user_id) {

        $comptes = [];

        $q = $this->db->prepare('SELECT id, nomDuCompte, somme, user_id FROM compte WHERE user_id = :user_id ');
        $q->bindValue(':user_id', $user_id);
        $q->execute();
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
           $comptes[] = new Compte($donnees);
       }

       return $comptes;
   }

   public function get($id){

    $q = $this->db->prepare('SELECT * FROM compte WHERE id = :id');
    $q->bindValue(':id', $id);
    $q->execute();

    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
        $comptes = new Compte($donnees);
    }

    return $comptes;
}

public function setDb($db){
    $this->db = $db;
}

}