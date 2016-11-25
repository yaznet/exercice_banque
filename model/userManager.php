<?php

class UserManager {
	
	private $db;

  public function __construct($db){
    $this->setDb($db);
  }

  public function addUser(User $user){
  	$q = $this->db->prepare('INSERT INTO user(pseudo, password, prenom, nom, email, date_inscription) VALUES (:pseudo, :password, :prenom, :nom, :email, :date_inscription)');

  	$q->bindValue(':pseudo', $user->getPseudo());
  	$q->bindValue(':password', $user->getPassword());
  	$q->bindValue(':prenom', $user->getPrenom());
  	$q->bindValue(':nom', $user->getNom());
  	$q->bindValue(':email', $user->getEmail());

    $q->execute();
  }

  public function delUser(User $user){
    $this->db->query('DELETE FROM user WHERE id = '.$user->getId());
  }

  public function getUser($id) {

    $users = [];

    $q = $this->db->prepare('SELECT id, seudo, password, prenom, nom, email, date_inscription FROM user WHERE id = :id ');
    $q->bindValue(':id', $id);

    $q->execute();

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
    	$users[] = new Users($donnees);
    }
    
    return $users;
  }

  public function get($id){

    $q = $this->db->prepare('SELECT * FROM user WHERE id = :id');
    $q->bindValue(':id', $id);
    
    $q->execute();

    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
      $users = new Users($donnees);
    }

    return $users;
  }

  public function setDb($db){
    $this->db = $db;
  }

}