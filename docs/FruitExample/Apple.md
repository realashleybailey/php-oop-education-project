# FruitExample - Apple class

**File: src/FruitExample/Apple.php**
**Updated: 27/03/2023**

## Introduction

This is a simple PHP code that demonstrates the use of OOP concepts to create a subclass of Fruit called Apple. This README will explain each part of the code and provide guidance on how to use it.

## Namespace

The code is located in the `FruitExample` namespace. The purpose of namespaces is to prevent naming conflicts between different parts of the code.

## Usage

- To create a new instance of the Apple class, you need to pass two parameters to its constructor: `$name` and `$color`.

```php
// Create a new instance of the Apple class
$apple = new Apple('Granny Smith', 'green');

// Call the getColor() method to get the color of the apple
$color = $apple->getColor(); // returns 'green'
```

## Class Details

### Class Definition

The `Apple` class is defined as a subclass of the `Fruit` class. It has a private property called `$color` that stores the color of the apple. The class also has a constructor method that takes two parameters, `$name` and `$color`, which are used to set the name and color properties of the apple. The `getColor()` method is also defined to return the color of the apple.

### Inheritance

The `Apple` class inherits from the `Fruit` class, which is an abstract class that defines the basic properties and methods of a fruit. By extending the `Fruit` class, the `Apple` class inherits all its properties and methods, including the `name` property and the `getName()` method.

### Encapsulation

The `$color` property is declared as private, which means that it can only be accessed from within the `Apple` class. This is an example of encapsulation, which is a fundamental concept of OOP that allows you to protect the internal state of an object from outside interference.

## Conclusion

This code demonstrates the basic concepts of OOP in PHP, including class definition, inheritance, encapsulation, and abstraction. By extending the `Fruit` class and defining its own properties and methods, the `Apple` class becomes a more specific type of fruit that can be used in a wider range of applications.
