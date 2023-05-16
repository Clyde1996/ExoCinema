<?php





class Genre{
    private string $nom;
    private array $films;

    public function __construct($nom){
        $this->nom = $nom;
        $this->films = [];
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function __toString(){
        return $this->nom;
    }
    
    public function getFilms()
    {
        return $this->films;
    }

    public function setFilms($films)
    {
        $this->films = $films;

        return $this;
    }

    public function addFilm(){
        array_push($this->films, $film);
        
    }

    public function getInfos(){
        return "Genre: " . $this;
    }

}










?>