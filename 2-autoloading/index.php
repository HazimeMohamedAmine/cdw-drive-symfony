<?php

//On essaie de définir la fonction en paramétre de spl_autoload_register de telle façon quelle fonctionne comme un (require 'classes/Calcul.php')
spl_autoload_register(
    function ($className) {
        $className = str_replace("App", "classes", $className);
        $className = str_replace("\\", "/", $className);
        $className .= ".php";

        require_once $className;
    }
);

// require 'classes/Calcul.php';

// use et require_once sont des choses complètement différentes. use ne fait aucune importation de fichier. l'utilisation ne fait que vous faciliter la vie. Au lieu d'écrire Full\Path\To\Class à chaque fois, vous pouvez faire
//use Full\Path\To\Class
// $bar = new Class();
// use App\Calcul;

$instance = new App\Calcul(); // A ce moment preci la fonction spl_autoload_register sera appelé on a fait le test avec var_dump

$resultat = $instance->additionner(10, 40);
var_dump($resultat);
echo "<br>";
echo "Hello World";
