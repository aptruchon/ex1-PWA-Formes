<?php
class PaveDroit extends Forme
{
    // Propriétés
    private $longueur;
    private $largeur;
    private $hauteur;

    // Constructeur
    function __construct($longueur, $largeur, $hauteur)
    {
        parent::__construct(parent::getNbFormes() + 1);
        $this->longueur = round($longueur, 2);
        $this->largeur = round($largeur, 2);
        $this->hauteur = round($hauteur, 2);
    }

    public function getLongueur()
    {
        return $this->longueur;
    }
    
    public function getLargeur()
    {
        return $this->largeur;
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
        $superficie = round((2 * (($this->longueur * $this->largeur) + ($this->longueur * $this->hauteur) + ($this->largeur * $this->hauteur))), 2);

        return $superficie;
    }

    public function obtenirVolume()
    {
        $volume = round(($this->largeur * $this->longueur * $this->hauteur), 2);

        return $volume;
    }

    public function __toString()
    {
        return parent::__toString(). ", id = " .Forme::getID(). ", longueur = {$this->longueur}, largeur = {$this->largeur}, hauteur = {$this->hauteur}, superficie = {$this->obtenirSuperficie()}, volume = {$this->obtenirVolume()}";
    }
}
