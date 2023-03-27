# PHP OOP and Composer Education Project

This is an open source project aimed at providing a practical guide to Object Oriented Programming in PHP and the use of Composer. The project is designed to help beginners understand and apply OOP concepts and best practices using PHP and learn how to manage dependencies using Composer.

## Getting Started

To get started with this project, you need to have the following installed on your system:

- PHP 7.0 or higher
- Composer

## Installation

To install this project, follow these steps:

1. Clone the repository to your local machine using `git clone https://github.com/realashleybailey/php-oop-education-project.git`

2. Run `composer install` to install the required dependencies.


3. Start a local server using the command `php -S localhost:8000`.

4. Visit http://localhost:8000/ in your browser to see the application in action.

alternativly

3. Run `php FruitExample.php` in the terminal to execute the PHP script there

## Usage

This project contains several modules, each focused on a specific aspect of OOP in PHP. To get started with a particular module, simply navigate to the corresponding directory in the `src` folder.

Each module contains a README file with instructions on how to use it. Follow the instructions in each module to learn the relevant OOP concepts and best practices.

## More Info

The code in these files defines several classes, interfaces, traits, and other constructs that demonstrate various object-oriented programming principles in PHP:

### FruitExample
- The `namespace` keyword is used to define a namespace for the example code.
- The `$fruits` array is defined as an iterable to demonstrate the use of iterables in PHP.
- The `Edible` interface is defined with a single method, `eat()`, which is implemented by the `Fruit` class.
- The `Peelable` trait is defined with a single method, `peel()`, which is used by the `Banana` class to demonstrate the use of traits in PHP.
- The `Fruit` class is defined as an abstract class with a constructor, destructor, constant, and abstract method. It also implements the `Edible` interface and defines a static method.
- The `Apple`, `Banana`, and `Orange` classes are defined as subclasses of `Fruit` to demonstrate the use of inheritance in PHP. They each have their own properties, constructors, and methods.
- The `getCaloriesPerFruit()` method is defined as a static method to demonstrate the use of static methods in PHP.
- The `foreach` loop is used to iterate through the `$fruits` array and eat each fruit.
- A message is outputted when the script is done to indicate completion.

Each section of the code has comments that explain what it is doing, to help readers understand how the various object-oriented programming principles are used in this example.

## Contributing

Contributions to this project are welcome. If you find a bug or would like to suggest an improvement, please create an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.