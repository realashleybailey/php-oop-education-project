<?php

namespace FruitExample;

use FruitExample\Interfaces\Edible;

// Define an abstract class for a fruit
abstract class Fruit implements Edible
{
    // Define a constant for the number of calories in a fruit
    const CALORIES_PER_FRUIT = 100;

    // Define a protected property for the name of the fruit
    protected $name;

    // Define a constructor that takes the name of the fruit as a parameter
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Define a destructor that outputs a message when the object is destroyed
    public function __destruct()
    {
        echo "Destroying " . $this->name . "...\n";
    }

    // Define an abstract method for getting the color of the fruit
    abstract public function getColor();

    // Define a method for eating the fruit
    public function eat()
    {
        echo "Eating " . $this->name . "...\n";
    }

    // Define a static method for getting the number of calories in a fruit
    public static function getCaloriesPerFruit()
    {
        return self::CALORIES_PER_FRUIT;
    }
}
