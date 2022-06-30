<?php
    class Vehicule implements ParkingInterface {
        private $modele;
        private $immat; 
        private $nbPlaceOQP;
        private $nbRoues;

        public function __construct($modele, $immat, $nbPlaceOQP, $nbRoues) {
            $this->modele = $modele;
            $this->immat = $immat;
            $this->nbPlaceOQP = $nbPlaceOQP;
            $this->nbRoues = $nbRoues;
        }
        //setter todo
        public function __toString() {
            return $this->modele." (".$this->immat.") ";
        }

        public function getNbPlacePrise() {
            return $this->nbPlaceOQP;
        }
    }