<?php



class Role{
    private string $nomPersonnage;
    private array $distributions;


    public function __construct($nomPersonnage){
        $this->nomPersonnage=$nomPersonnage;
        $this->distributions = array();
    }

        public function getNomPersonnage()
        {
                return $this->nomPersonnage;
        }

        public function setNomPersonnage($nomPersonnage)
        {
                $this->nomPersonnage = $nomPersonnage;

                return $this;
        }


        public function addDistribution(Distribution $distribution){ 
        
            // $this->distributions[] = $distribution;
            array_push($this->distributions, $distribution);
    
        }

        public function __toString(){
            return $this->getFilm() . "</br>";
        }
    }
?>