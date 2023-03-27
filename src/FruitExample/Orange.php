<?php

namespace FruitExample;

// Define a subclass of Fruit for an orange
class Orange extends Fruit
{
    // Define a private property for the segments of the orange
    private $segments;

    // Define a constructor that takes the name and number of segments of the orange as parameters
    public function __construct($name, $segments)
    {
        parent::__construct($name);
        $this->segments = $segments;
    }

    // Implement the abstract method for getting the color of the fruit
    public function getColor()
    {
        return "orange";
    }

    // Define a method for getting the number of segments in the orange
    public function getSegments()
    {
        return $this->segments;
    }
}
