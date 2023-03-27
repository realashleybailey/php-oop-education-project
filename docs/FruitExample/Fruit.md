# FruitExample - Fruit Class

**File: src/FruitExample/Fruit.php**  
**Updated: 27/03/2023**

## Introduction

This PHP code is an example of an abstract class for a fruit that implements the `Edible` interface. It defines basic properties and methods that can be inherited by specific fruit classes. This README will explain each part of the code and provide guidance on how to use it.

## Namespace

The code is located in the `FruitExample` namespace. The purpose of namespaces is to prevent naming conflicts between different parts of the code.

## Abstract class Fruit

The `Fruit` class is an abstract class that contains common functionality for all fruits. It defines a constant for the number of calories in a fruit and a protected property for the name of the fruit. The constructor takes the name of the fruit as a parameter and initializes the `$name` property. The destructor outputs a message when the object is destroyed.

The class also contains two abstract methods that must be implemented by any class that extends it:

- `getColor()` - returns the color of the fruit.
- `getTaste()` - returns the taste of the fruit.

Finally, it includes a method for eating the fruit and a static method for getting the number of calories in a fruit.

## Edible interface

The `Edible` interface is not included in this code but is referenced in the `Fruit` class. It is an example of how an interface can be used to ensure that specific methods are implemented by classes that implement the interface.

## Usage

To use this code, you should create a new class that extends the `Fruit` class and implements the `getColor()` and `getTaste()` methods. For example:

```php
namespace FruitExample;

class Apple extends Fruit
{
    public function getColor()
    {
        return 'red';
    }

    public function getTaste()
    {
        return 'sweet';
    }
}
```

This creates a new class called Apple that extends the Fruit class and implements the getColor() and getTaste() methods. You can then create instances of the Apple class and call the eat() and getCaloriesPerFruit() methods:

```php
$apple = new Apple('Granny Smith');
$apple->eat();
echo "This apple has " . Apple::getCaloriesPerFruit() . " calories.\n";
```

This will output:

```
Eating Granny Smith...
This apple has 100 calories.
Destroying Granny Smith...
```

## Conclusion

This code provides a simple example of how to use abstract classes and interfaces in PHP. It can be extended to create more specific fruit classes and can be used as a starting point for more complex applications.