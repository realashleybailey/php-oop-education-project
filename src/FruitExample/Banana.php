<?php

namespace FruitExample;

use FruitExample\Traits\Peelable;

// Define a subclass of Fruit for a banana
class Banana extends Fruit
{
    // Use the Peelable trait for the Banana class
    use Peelable;

    // Define a constructor that takes the name of the banana as a parameter
    public function __construct($name)
    {
        parent::__construct($name);
    }

    // Implement the abstract method for getting the color of the fruit
    public function getColor()
    {
        return "yellow";
    }
}
