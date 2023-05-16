<?php

class Film{
    private string $titre;
    private DateTime $dateDeSortie;
    private int $duree;
    private array $genres;
    private Realisateur $realisateur;

    private array $distributions;
    

    public function __construct(string $titre, string $dateDeSortie, int $duree,  array $genres, Realisateur $realisateur ){
        $this->titre = $titre;
        $this->dateDeSortie = new DateTime($dateDeSortie);
        $this->duree = $duree;
        $this->genres = $genres;
        $this->realisateur = $realisateur;

        $this->distributions = array();

    }


        public function getDuree()
        {
                return $this->duree;
        }

 
        public function setDuree($duree)
        {
                $this->duree = $duree;

                return $this;
        }

        public function getDateDeSortie()
        {
                return $this->dateDeSortie;
        }

        public function setDateDeSortie($dateDeSortie)
        {
                $this->dateDeSortie = $dateDeSortie;

                return $this;
        }

        public function getTitre()
        {
                return $this->titre;
        }

        public function setTitre($titre)
        {
                $this->titre = $titre;

                return $this;
        }

        public function addDistribution(Distribution $distribution){ 
        
                // $this->distributions[] = $distribution;
                array_push($this->distributions, $distribution);
        
            }

            public function __toString(){
                


                $genresString = "<ul>";
                foreach($this->genres as $genre) {
                        $genresString .= "<li>$genre</li>";
                }
                $genresString .= "</ul>";

                $acteursString = "<ul>";
                foreach($this->distributions as $distribution) {
                        $acteursString .= "<li>" . $distribution->getActeur() . "</li>";
                }
                $acteursString .= "</ul>";

                $resultat = "<h2><u>$this->titre</u></h2>"
                        . "Sortie le " . $this->dateDeSortie->format("d/m/Y") . "<br />"
                        . "Durée : $this->duree minutes<br /><br />"
                        . "<strong>Genres</strong> : $genresString<br />"
                        . "<strong>Acteurs</strong> : $acteursString<br />"
                        . "<h3><mark>Réalisé par $this->realisateur</mark><br /></h3>"
                ;

                return $resultat;
            }


        

}
?>