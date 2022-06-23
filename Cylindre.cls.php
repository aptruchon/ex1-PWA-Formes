<?php
Class Cylindre extends Forme
{
    // Propriétés
    private $rayon;
    private $hauteur;

    // Constructeur
    function __construct($rayon, $hauteur)
    {
        parent::__construct(parent::getNbFormes() + 1);
        $this->rayon = round($rayon, 2);
        $this->hauteur = round($hauteur, 2);
    }

    public function getRayon()
    {
        return $this->rayon;
    }

    public function getHauteur()
    {
        return $this->hauteur;
    }

    public function obtenirTypeForme()
    {
        return get_class($this);
    }

    public function obtenirSuperficie()
    {
        $superficie = round((2 * pi() * $this->rayon * ($this->rayon + $this->hauteur)), 2);
        return $superficie;
    }

    public function obtenirVolume()
    {
        $volume =round(($this->hauteur * pi() * $this->rayon ^ 2), 2);
        return $volume;
    }

    public function __toString()
    {
        return parent::__toString(). ", id = " .Forme::getID(). ", rayon = {$this->rayon}, hauteur = {$this->hauteur}, superficie = {$this->obtenirSuperficie()}, volume = {$this->obtenirVolume()}";
    }
}