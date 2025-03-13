<?php
/*
 * THIS MAY NOT BE "INTERESTING" AT ALL, BUT IT IS ALL I GOT RIGHT NOW.
 *
 * Feature: Dynamic Typing and Type Juggling in PHP
 *
 * PHP is a dynamically typed language, meaning that variables do not have fixed types.
 * Instead, PHP determines the type of a variable at runtime based on the assigned value.
 * This allows flexibility but can sometimes lead to unexpected behavior.
 */

// Example of Dynamic Typing
$var = 10;     // Integer
echo gettype($var) . "\n";  // Output: integer

$var = 10.5;   // Float
echo gettype($var) . "\n";  // Output: double

$var = "Hello"; // String
echo gettype($var) . "\n";  // Output: string

/*
 * Type Juggling in PHP
 * PHP automatically converts data types when needed, known as type juggling.
 * This conversion happens in expressions and comparisons where PHP attempts to make types compatible.
 */

$a = "10";   // String
$b = 5;      // Integer

// PHP automatically converts "10" (string) to an integer before performing addition
$sum = $a + $b;
echo $sum . "\n";  // Output: 15

/*
 * Example of type juggling in comparisons:
 * "==" compares values after converting them to a common type
 * "===" checks both value and type
 */

var_dump("5" == 5);  // Output: bool(true) - PHP converts "5" to an integer before comparison
var_dump("5" === 5); // Output: bool(false) - Strict comparison checks both value and type

/*
 * Potential Pitfalls:
 * PHP treats certain values as "truthy" or "falsy", which can cause unexpected logic errors.
 */

if ("0" == false) {
    echo "Equal\n";  // Output: Equal (because "0" is treated as false)
}

if ("Hello" == true) {
    echo "Equal\n";  // Output: Equal (any non-empty string is true)
}

/*
 * Best Practices:
 * 1. Use strict comparison (=== and !==) when comparing values to avoid unintended type coercion.
 * 2. Enable strict types in modern PHP applications:
 *    declare(strict_types=1);
 *    This enforces explicit type checking.
 * 3. Explicit Type Casting when needed:
 */

$num = (int) "10";  // Convert string to integer explicitly
echo $num . "\n";   // Output: 10

?>
