<?php
require_once('class/Intersection.php');
require_once('class/Troncon.php');

$intersection1 = new Intersection("A",4);
$intersection2 = new Intersection("B", 3);
var_dump($intersection1);
echo "Identifiant intersection: ".$intersection1->getIdentifiant()."<br>";
echo "Nombre de branches: ".$intersection1->getNbBranches() . "<br>";
$troncon1 = new Troncon($intersection1, 10, $intersection2);
$troncon1->ajouterTroncon($troncon1);
var_dump($troncon1->getTroncon());