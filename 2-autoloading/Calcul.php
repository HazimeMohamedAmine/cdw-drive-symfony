<?php

//Classe pour l'exemple il ne sert pas à grand chose

//Je me trouve dans l'espace de nom App
namespace App;

class Calcul
{
    //fonction additionner qui prends en paramétre deux entier et qui retourneras un entier
    public function additionner(int $a, int $b): int
    {
        return $a + $b;
    }
}
