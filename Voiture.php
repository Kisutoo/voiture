<?php


    class Voiture{
        private string $_marque;
        private string $_modele;
        private string $_nbporte;
        private int $_statut = 0;
        private int $_vitesseActuelle = 0;
    

    public function __construct(string $marque, string $modele, int $nbporte)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbporte = $nbporte;
    }
    public function __toString()
    {
        return $this->_marque;
    }


    public function getMarque() : string
    {
        return $this->_marque;
    }
    public function getModele() : string
    {
        return $this->_modele;
    }
    public function getNbPorte() : int
    {
        return $this->_nbporte;
    }
    public function getVitesse() : int
    {
        return $this->_vitesseActuelle;
    }
   


    public function demarrer()
    {
        if ($this->_statut == 0)
        {
            $this->_statut = 1;
            return "Le véhicule $this->_marque démarre<br>";
        }
        else
            return "Le véhicule $this->_marque est déjà démarrée<br>";
    }
    
    public function accelerer(int $vitesse)
    {
        if($this->_statut == 1)
        {
            $this->_vitesseActuelle = $this->_vitesseActuelle + $vitesse;
            return "Le véhicule $this->_marque $this->_modele accélère de $vitesse km / h<br>";
        }
        else
            return "Le véhicule $this->_marque $this->_modele veut accélérer de $vitesse km / h<br>";
    }

    public function freiner(int $vitesse)
    {
        if($this->_statut == 1)
        {
            if($this->_vitesseActuelle == 0)
                return "Le véhicule déjà à l'arrêt<br>";
            elseif($this->_vitesseActuelle - $vitesse <= 0)
                return "Le véhicule freine de $vitesse km / h et est désormais à l'arrêt<br>";
            else
            {    
                $this->_vitesseActuelle = $this->_vitesseActuelle - $vitesse;
                return "Le véhicule $this->_marque $this->_modele freine de $vitesse km / h<br>";
            }
        }
        else
            return "Le véhicule $this->_marque $this->_modele veut freiner de $vitesse km / h<br>";
    }
}



// classe : La notion la plus importante en programmation orientée objet est le concept de classe. Les classes sont des moules, des patrons qui permettent de créer des objets en série sur le même modèle. On peut se représenter une classe comme le schéma de construction ainsi que la liste des fonctionnalités d'un ensemble d'objets

// objet : Les objets contiennent des attributs et des méthodes. Les attributs sont des variables ou des objets nécessaires au fonctionnement de l'objet. En Java, une application est un objet. La classe est la description d'un objet. Un objet est une instance d'une classe. Pour chaque instance d'une classe, le code est le même, seules les données sont différentes à chaque objet.

// encapsulation : Lorsque l'on cache les détails internes d'une classe pour contrôler l'accès à ses propriétés, on dit que l'on encapsule les données de la classe.

// ajouter une fonction to string *

// methode magique en php : Les méthodes magiques sont des méthodes prédéfinies et toutes préfixées par double sous-tirets (__) dans une classe PHP. Elle sont appelées automatiquement suite à un événement spécial qui peut survenir lors de l’exécution.
 
 
?>