<?php
abstract class Forme
{
    // Propriétés (d'instances)
    private static $nbFormes;
    private $id = 0; // Une propriété statique n'appartient qu'à la classe, et PAS aux instances

    // Constructeur 
    function __construct($id)
    {
        $this->id = $id;
    }

    public function comparerAvec($f)
    {

    }

    public function __toString()
    {
        
    }

    public abstract function obtenirTypeForme();
    public abstract function obtenirSuperficie();
    public abstract function obtenirVolume();
}