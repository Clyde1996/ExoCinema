<?php

class Realisateur extends Personne {
   

    private array $films;

    public function __construct(string $nom, string $prenom, string $sex, string $dateDeNaissance){
        
        parent ::__construct ($nom, $prenom, $sex, $dateDeNaissance);
        
        $this->films= array();
    }


    public function getFilms()
    {
        return $this->film;
    }

    public function setFilms($film)
    {
        $this->film = $film;

        return $this;
    }

    public function addFilm($film){
        array_push($this->films, $film);
    }


}
?>