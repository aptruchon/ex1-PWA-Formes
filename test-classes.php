<?php
// Autochargement des classes (s'active lorsqu'elle rencontre l'opérateur new)
// Évite d'inclure tous les fichiers manuellement
spl_autoload_register(function($nomClasse) {
    $fichierClasse = "$nomClasse.cls.php";
    if(file_exists($fichierClasse)){
        include($fichierClasse);
    }
    else {
        exit("Erreur fatale ...");
    }
});

// Création d'instances
$PD1 = new PaveDroit(3, 3, 3);
$PD2 = new PaveDroit(2, 2, 4);

$CB1 = new Cube(2, 2, 2, 6);
$CB2 = new Cube(3, 3, 3, 6);

$CY1 = new Cylindre(3, 12);
$CY2 = new Cylindre(4, 6);

$SP1 = new Sphere(9);
$SP2 = new Sphere(3);


$formes = [$PD1, $PD2, $CB1, $CB2, $CY1, $CY2, $SP1, $SP2];

// Affichage

echo "<h1>Descriptions des objets</h1>";

for ($i=0; $i < count($formes); $i++) { 
    echo $formes[$i];
    echo "<br><br>";
}

echo "<h1>Comparaisons des objets</h1>";

echo $CY2->comparerAvec($CB1). "<br><br>";
echo $SP1->comparerAvec($CY1). "<br><br>";
echo $PD1->comparerAvec($CB2); // J'ai créer un pavé droit de même valeur qu'un de mes cubes pour bien visualiser l'efficacité de l'affichage.