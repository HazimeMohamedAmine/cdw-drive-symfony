<?php
class Personnage
{
private $_force ;
private $_localisation ;
private $_experience ;
private $_degats ;

public function __construct ($force , $degats ) // Constructeur demandant 2 param è tres
{
echo 'Voici le constructeur ! '; // Message s 'affichant une fois que tout objet est créé.
$this -> setForce ( $force ); // Initialisation de la force .
$this -> setDegats ( $degats ); // Initialisation des dégâts.
$this -> _experience = 1; // Initialisation de l 'exp é rience à
 }

// Mutateur charg é de modifier l 'attribut $_force .
public function setForce ( $force )
{
if (! is_int ( $force )) // S 'il ne s'agit pas d'un nombre entier .
{
trigger_error ( 'La force d\'un personnage doit être un
nombre entier ', E_USER_WARNING );
return ;
 }

if ( $force > 100) // On vé rifie bien qu 'on ne souhaite pas
// assigner une valeur sup é rieure à 100.
{
trigger_error ( 'La force d\'un personnage ne peut dé passer 100 ', E_USER_WARNING );
return ;
}

$this -> _force = $force ;
}

 // Mutateur charg é de modifier l 'attribut $_degats .
public function setDegats ( $degats )
{
if (! is_int ( $degats )) // S 'il ne s'agit pas d'un nombre entier .
{
trigger_error ( 'Le niveau de dégâts d\'un personnage doit ê tre un nombre entier ', E_USER_WARNING );
return ;
}

$this -> _degats = $degats ;
}
}
