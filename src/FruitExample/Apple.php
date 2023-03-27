<?php

namespace FruitExample;

// Define a subclass of Fruit for an apple
class Apple extends Fruit
{
    // Define a private property for the color of the apple
    private $color;

    // Define a constructor that takes the name and color of the apple as parameters
    public function __construct($name, $color)
    {
        parent::__construct($name);
        $this->color = $color;
    }

    // Implement the abstract method for getting the color of the fruit
    public function getColor()
    {
        return $this->color;
    }
}
