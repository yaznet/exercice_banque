<?php

class User {

	protected $id;
	protected $pseudo;
	protected $password;
	protected $prenom;
	protected $nom;
	protected $email;
	protected $date_inscription;

	public function hydrate(array $donnees){
		foreach ($donnees as $key => $value){
		  $method = 'set'.ucfirst($key);
		  if (method_exists($this, $method)){
		    $this->$method($value);
		  }
		}
	}

	public function __construct(array $donnees){
    	$this->hydrate($donnees);
  	}

	public function getId(){
		return $this->id;
	}

	public function getPseudo(){
		return $this->pseudo;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getDate_inscription(){
		return $this->date_inscription;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setPseudo($pseudo){
		$this->pseudo = $pseudo;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setDate_inscription($date_inscription){
		$this->date_inscription = $date_inscription;
	}
}