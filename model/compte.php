<?php

class Compte {
	
	protected $id;
	protected $nomDuCompte;
	protected $somme;
	protected $user_id;

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

	public function getNomDuCompte(){
		return $this->nomDuCompte;
	}

	public function getSomme(){
		return $this->somme;
	}

	public function getUser_id(){
		return $this->user_id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setNomDuCompte($nomDuCompte){
		$this->nomDuCompte = $nomDuCompte;
	}

	public function setSomme($somme){
		$this->somme = $somme;
	}

	public function setUser_id($user_id){
		$this->user_id = $user_id;
	}

	public function augmenter($somme){
	    $somme = (int) $somme;
	    if(!$somme == 0){
	      $this->somme += $somme;
	    }

	}

	public function diminuer($somme){
	    $somme = (int) $somme;
	    if(!$somme == 0){
	      $this->somme -= $somme;
	    }
	}
}