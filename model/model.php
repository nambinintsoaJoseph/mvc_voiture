<?php 
    class Voiture 
    {
        private $_matricule; 
        private $_couleur; 
        private $_puissance; 
        private $_type; 

        public function __construct($matricule ,$couleur, $puissance, $type) 
        {
            if(isset($matricule)) {$this->_matricule = $matricule;}
            if(isset($couleur)) {$this->_couleur = $couleur;}
            if(isset($puissance)) {$this->_puissance = $puissance;}
            if(isset($type)) {$this->_type = $type;}
        }

        
        // Insère un objet Voiture dans la base de donnée : 
        public function inserer_dans_la_base() 
        {
            include('../controler/connexion_base.php');
            $inserer = $bdd->prepare('CALL ajouterVoiture(:matricule, :couleur, :puissance, :type)');
            $inserer->execute(
                array(
                    'matricule' => $this->_matricule,
                    'couleur' => $this->_couleur, 
                    'puissance' => $this->_puissance,
                    'type' => $this->_type
                )
            );
            $inserer->closeCursor();
        }

        // Supprime un voiture dans la base a partir d'un objet Voiture : 
        public function supprimer_dans_la_base() {
            include('../controler/connexion_base.php');
            $supprimer = $bdd->prepare('CALL supprimerVoiture(:matricule)');
            $supprimer->execute(
                array('matricule' => $this->_matricule)
            );
            $supprimer->closeCursor();
        }

    }
    
?>