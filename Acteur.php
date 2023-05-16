<?php



class Acteur extends Personne { 

    private array $distributions;

    public function __construct(string $nom, string $prenom, string $sex, string $dateDeNaissance){

        parent::__construct($nom, $prenom, $sex, $dateDeNaissance);

        $this->distributions = array();
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

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

 
    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }
 
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    public function addDistribution(Distribution $distribution){ 
        
        // $this->distributions[] = $distribution;
        array_push($this->distributions, $distribution);

    }

    // public function getInfosActeur(){
    //     return "{$this->personne->getNom()}";
    // }

    // public function getFilmography(){
    //     $listeDistributions = $this->distribution;

    //     usort($listeDistributions, [Acteur::class, "film"]);

    //     $liste = "<h3>Filmographie de $this :</h3>"

    //     foreach ($listeDistributions as $distribution) {
    //         $liste .= $distribution->getFilm(). " ". $distribution 
    //     }


    // }

 

}
?>