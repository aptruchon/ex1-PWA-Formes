<?php
Class Sphere extends Forme
{
    // Propriétés
    private $rayon;

    // Constructeur
    function __construct($rayon)
    {
        $this->rayon = round($rayon, 2);
    }

    public function getRayon()
    {
        return $this->rayon;
    }

    public function obtenirTypeForme()
    {
        return get_class($this);
    }

    public function obtenirSuperficie()
    {
        $superficie = round((4 * pi() * $this->rayon ^ 2), 2);
        return $superficie;
    }

    public function obtenirVolume()
    {
        $volume = round(((4/3) * pi() * $this->rayon ^ 3), 2);
        return $volume;
    }

    public function __toString()
    {
        return parent::__toString(). ", id = " .Forme::getID(). ", rayon = {$this->rayon}, superficie = {$this->obtenirSuperficie()}, volume = {$this->obtenirVolume()}";
    }
}