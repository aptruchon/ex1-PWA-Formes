<?php
Class Cube extends PaveDroit
{
    // Propriétés
    private $cote;

    // Constructeur
    function __construct($longueur, $largeur, $hauteur, $cote)
    {
        parent::__construct($longueur, $largeur, $hauteur);
        $this->cote = $cote;
    }

    public function getCote()
    {
        return $this->cote;
    }

    public function obtenirTypeForme()
    {
        return get_class($this);
    }

    public function obtenirSuperficie()
    {
        $superficie = ($this->getLongueur() * $this->getLargeur()) * $this->cote;

        return $superficie;
    }

    public function obtenirVolume()
    {
        $volume = $this->getLargeur() * $this->getLongueur() * $this->getHauteur();

        return $volume;
    }

    public function __toString()
    {
        return "{$this->obtenirTypeForme()}: id = " .Forme::getID(). ", largeur = {$this->getLargeur()}, longueur = {$this->getLongueur()}, hauteur = {$this->getHauteur()}, Nb de côtés = {$this->cote}, superficie = {$this->obtenirSuperficie()}, volume = {$this->obtenirVolume()}";
    }
}