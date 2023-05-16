<?php
 
 class Personne{


    private string $nom;
    private string $prenom;
    private string $sex;
    private DateTime $dateDeNaissance;
   

  public function __construct(string $nom, string $prenom, string $sex, string $dateDeNaissance){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->sex=$sex;
    $this->dateDeNaissance = new DateTime($dateDeNaissance);
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

    public function __tostring(){
        return $this->prenom." ".$this->nom;
    }

    

}
?>