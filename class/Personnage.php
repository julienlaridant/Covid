<?php
class MonPersonnage
{
        private $_id;
        private $_nom;
        private $_vie;
        private $_degat;
        private $_bdd;
    
        public function __construct($bdd)
        {
            $this->_bdd = $bdd;
        }

        public function MonPersonnage($id,$nom,$vie,$degat)
        {
            $this->_id = $id;
            $this->_nom = $nom;
            $this->_vie = $vie;
            $this->_degat = $degat;


        }
        public function setPersonnageById($id)
        {

        }


 
}