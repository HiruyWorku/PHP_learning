<?php 
// Starting a PHP script
echo "Hello World"; // A semicolon is required at the end of every statement.
?>

<!-- Installing PHP Locally -->
<!-- 
The most convenient way to install PHP locally is to use MAMP, 
which is a package that includes all the necessary tools to run PHP. 
MAMP works on all major operating systems.

PHP is executed by an HTTP server, typically Apache or NGINX. 
To perform more advanced tasks, a database (commonly MySQL) is also required. 
MAMP includes all of these components, making it an easy solution for local development.

PHP is a dynamically and loosely typed language, meaning you don’t need 
to explicitly declare variable types. 
-->

<!-- CONSTANTS -->
<?php
// Constants are values that cannot be changed once defined.
// They can be declared in two ways: using the define() function or the const keyword.

define('PI', 3.14);  // Define a constant using define()
// or
const PI_ALT = 3.14; // Define a constant using the const keyword

// Trying to change the value of a constant will result in an error
// PI = 2.14; // This will cause an error: "Cannot redeclare constant"
?>

<!-- VARIABLES -->
<?php
// Variables in PHP start with "$" and can contain alphanumeric characters or underscores.
// Variable names are case-sensitive.

$name = 'Hiruy';         // String
$age = 20;              // Integer
$is_a_boy = true;       // Boolean
$years_of_experience = -0.5; // Float
$major = array('Computer Science', 'Math', 'SDS'); // Array
$is_smart = null;       // Null value

// PHP allows dynamic typing, so variables can be reassigned to different types.
$age = "twenty";  // Now $age is a string

// var_dump() displays the value and type of a variable.
var_dump($age, $is_a_boy, $major); 

// PHP supports variable interpolation within double-quoted strings.
echo "My name is $name and I study $major[0]."; 
?>
  
<!-- ARITHMETIC OPERATIONS -->
<?php
$a = 5;
$b = 3;

$sum = $a + $b;     // Addition
$diff = $a - $b;    // Subtraction
$prod = $a * $b;    // Multiplication
$quot = $a / $b;    // Division
$mod = $a % $b;     // Modulus (remainder)
$exp = $a ** $b;    // Exponentiation (power)

// Increment and Decrement Operators
$a++; // Post-increment: Increases $a by 1 after evaluation
++$a; // Pre-increment: Increases $a by 1 before evaluation
$b--; // Post-decrement
--$b; // Pre-decrement
?>

<!-- Additional Explanation for Future Posts -->
<!-- 
To expand on this topic in future posts, consider discussing:
- The role of PHP within a web application and how it interacts with HTML.
- The IDE used in your screenshot (such as VS Code, PHPStorm, or Sublime Text).
- The differences between constants and variables and when to use each.
- How arithmetic operations in PHP differ from other languages.
- Examples of real-world applications for variables, constants, and arithmetic operations.
-->


