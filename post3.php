<?php

// === Loops and Recursion in PHP ===
// using for-loops, while-loops, do-while loops, and recursion.

// ==== FOR LOOP EXAMPLE ====
// A for loop is useful when we know exactly how many times we want to iterate.

echo "For Loop Example:\n";

for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i: Loop is running...\n"; // current iteration
}

echo "\n";


// ==== WHILE LOOP EXAMPLE ====
// A while loop is better when we don't know the exact number of iterations beforehand.

echo "While Loop Example:\n"; // Indicates the start of while loop example

$count = 1; // Initialize counter
while ($count <= 5) {
    echo "Iteration $count: Loop is running...\n"; // current count
    $count++; // Increment the counter
}

echo "\n";


// ==== DO-WHILE LOOP EXAMPLE ====
// A do-while loop guarantees at least one execution, even if the condition is false.

echo "Do-While Loop Example:\n";

$count = 1; // Reset counter
do {
    echo "Iteration $count: Loop is running...\n";
    $count++; // Increment counter
} while ($count <= 5); // Condition checked after running at least once

echo "\n";


// ==== RECURSION EXAMPLE ====
// Recursion is when a function calls itself. It is an alternative to loops.

echo "Recursion Example:\n"; // Indicates start of recursion example

function recursiveFunction($num) {
    if ($num <= 0) {
        echo "Base case reached. Recursion stops here.\n"; // Stopping condition message
        return;
    }

    echo "Iteration $num: Function is calling itself...\n"; // current recursion depth

    recursiveFunction($num - 1); // Function calls itself with a decremented value
}

recursiveFunction(5); // Initiate recursion with 5 calls

echo "\n";


// ==== INFINITE LOOP  ====
// Infinite loops occur when the exit condition is never met.

// echo "Infinite Loop Example:\n";
// $count = 1;
// while (true) {  // This loop will never stop unless terminated
//     echo "Iteration $count: Running forever...\n";
//     $count++;
//     // No condition to break out of the loop!
// }

?>

