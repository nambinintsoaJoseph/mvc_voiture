<?php 
    // Connexion à la base de donnée : 
    require_once('../controler/connexion_base.php');
    
    class Voiture {
        private $_matricule; 
        private $_couleur; 
        private $_puissance; 
        private $_type; 

        public function __construct($matricule ,$couleur, $puissance, $type) {
            $this->_matricule = $matricule;
            $this->_couleur = $couleur; 
            $this->_puissance = $puissance; 
            $this->_type = $type; 
        }

        // Implémentation des méthodes : 
        public function inserer_dans_la_base() {
            $requette = $bdd->prepare('CALL ajouterVoiture(?, ?, ?, ?)');
            $requette->execute(
                array(
                    'matricule' => $this->_matricule,
                    'couleur' => $this->_couleur, 
                    'puissance' => $this->_puissance,
                    'type' => $this->_type
                )
            );
        }
    }
?>