<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require"classes/personnage.php";
require"classes/dragon.php";
require"classes/princesse.php";

// Création d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Peter");
echo $humain->getNom()." a ".$humain->getVie()." vies.";
echo "<br><br>";

// Création d'une instance de la classe dragon
$dragon = new dragon();
$dragon->setNom("");
echo $dragon->getNom()." a ".$dragon->getVie()." vies.";
echo "<br><br>";

$princesse = new princesse();
echo "Pour la princesse, x vaut ".$princesse->x." et y vaut ". $princesse->y.".";