<?php

class Distribution {

    private Acteur $acteur;
    private Film $film;
    private Role $role;

    public function __construct($acteur, $film, $role){
        
        $this->acteur = $acteur;
        $this->film =  $film;
        $this->role = $role;
        
        $this->acteur->addDistribution($this);
        $this->film->addDistribution($this);
        $this->role->addDistribution($this);
    }

    public function __toString(){
        
        $resultat = " Casting de : {$this->film->gettitre()} :  <strong> {$this->acteur}</strong> .</br>";
        // . "Cet acteur est ne le {$this->acteur->getInfosActeur()}";
        return $resultat;  //* __toString ca permetre de faire l'afichage 
       
      
    }

    public function getActeur()
    {
        return $this->acteur;
    }

    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    public function getFilm()
    {
        return $this->film;
    }

    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
























?>