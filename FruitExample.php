<?php
// Require composer's autoloader
require __DIR__ . '/vendor/autoload.php';

// Imports classes from FruitExample module.
use FruitExample\Apple;
use FruitExample\Banana;
use FruitExample\Orange;

// Define constants
define("COLOR", "Color: ");
define("CALORIES", "Calories: ");

// Define an iterable array of fruits
$fruits = ['apple', 'banana', 'orange'];

// Create a new Apple object
$apple = new Apple("Granny Smith", "green");
echo COLOR . $apple->getColor() . " " . CALORIES . $apple->getCaloriesPerFruit() . "\n";

// Create a new Banana object
$banana = new Banana("Chiquita");
echo COLOR . $banana->getColor() . " " . CALORIES . $banana->getCaloriesPerFruit() . "\n";

// Use the peel method from the Peelable trait on the Banana object
$banana->peel();

// Create a new Orange object
$orange = new Orange("Navel", 12);
echo COLOR . $orange->getColor() . " " . CALORIES . $orange->getCaloriesPerFruit() . " Segments: " . $orange->getSegments() . "\n";

// Iterate through the array of fruits and eat them
foreach ($fruits as $fruit) {
    switch ($fruit) {
        case 'apple':
            $fruitObj = $apple;
            break;
        case 'banana':
            $fruitObj = $banana;
            break;
        case 'orange':
            $fruitObj = $orange;
            break;
        default:
            break;
    }

    $fruitObj->eat();
}

// Output a message when the script is done
echo "Done.\n";
