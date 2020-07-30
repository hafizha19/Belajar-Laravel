<?php

require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

$sheep = new Animal("Shaun");

$sheep->getName();
$sheep->getLegs();
$sheep->getCold();

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"