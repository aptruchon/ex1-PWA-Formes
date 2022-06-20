<?php
abstract class Forme
{
    // Propriétés (d'instances)
    private static $nbFormes;
    private $id;
    
    public function getID()
    {
        return self::$nbFormes;
    }

    // Constructeur 
    function __construct($id)
    {
        $this->id = $id;
    }

    public function comparerAvec($f)
    {
        $a = $this->obtenirSuperficie() + $this->obtenirVolume();
        $b = $f->obtenirSuperficie() + $f->obtenirVolume();

        $c = round($a - $b);

        if($c > 0){
            $resultat ="La première instance est plus GRAND que celle passé en argument!"; 
        }
        else if($c < 0){
            $resultat = "La première instance est plus PETITE que celle passé en argument!";
        }
        else{
            $resultat = "Ces deux instances sont ÉGALES!";
        }

        return $resultat;
    }


    public function __toString()
    {
        return get_class($this)/* . " NBFORMES = " .self::$nbFormes */;
    }

    public abstract function obtenirTypeForme();
    public abstract function obtenirSuperficie();
    public abstract function obtenirVolume();
}