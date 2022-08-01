<?php
function chargerClasse($classe)
{
    require $classe . '.class.php'; //On inclut la classe correspondante au paramètre passé.
}
spl_autoload_register('chargerClasse'); //On enregistre la fonction en autoload pour qu 'elle soit appel ée dès qu 'on instanciera une classe non dé clar ée.

$perso = new Personnage(1, 2);
var_dump($perso);
