<?php

declare(strict_types=1);

use App\InheritanceOverriding;
use App\InheritanceDuplication;
use App\Composition;

require_once __DIR__ . '/autoload.php';

//Inheritance with Overriding
echo "Inheritance with Overriding (Instantiating NPCs...)";
echo '<br>';

$alligator = new InheritanceOverriding\Alligator();
$dragon = new InheritanceOverriding\Dragon();
$gorilla = new InheritanceOverriding\Gorilla();
$pet = new InheritanceOverriding\Pet();
$questGiver = new InheritanceOverriding\QuestGiver();

//Inheritance with Duplication
echo "Inheritance with Duplication (Instantiating NPCs...)";
echo '<br>';

$alligator = new InheritanceDuplication\Alligator();
$dragon = new InheritanceDuplication\Dragon();
$gorilla = new InheritanceDuplication\Gorilla();
$pet = new InheritanceDuplication\Pet();
$questGiver = new InheritanceDuplication\QuestGiver();

//Composition
echo "Composition (Instantiating NPCs...)";
echo '<br>';

$movement = new Composition\Movement();
$fighting = new Composition\Fighting();

$alligator = new Composition\Alligator($movement, $fighting);
$dragon = new Composition\Dragon($movement, $fighting);
$gorilla = new Composition\Gorilla($movement, $fighting);
$pet = new Composition\Pet($movement, $fighting);
$questGiver = new Composition\QuestGiver($movement);
