<?php
    class Parking {
        private $nbPlaces; 
        private $voitures; //tableau de voitures

        public function __construct($nb) {
            $this->nbPlaces = $nb;
            $this->voitures = array();
        }

        public function getNbPlaces() {
            return $this->nbPlaces;
        }

        public function setNbPlaces($nb) {
            $this->nbPlaces = $nb;
        }

        
        //typehint 
        //on demande à ce qu'on nous INJECTE  un objet de type voiture !
        public function addVoiture(ParkingInterface $objet) {
            if(count($this->voitures) <= $objet->getNbPlacePrise()) {
                //...
                echo "la voiture".$voiture."est ajoutée \n";
            } else {
                echo "le parking est plein! la voiture n'a pas été ajoutée \n";
            }
        }
    }
?>