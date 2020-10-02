<?php
declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// === Exercise 1 ===
// $x isn't defined so i put it in the function arguments
echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(2);
// === Exercise 2 ===
//you try to print monday but an array starts at 0 so just changed 1 to 0

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);
// === Exercise 3 ===
// used single quotes instead of double

$str = 'Debugged ! Also very fun';
echo substr($str, 0, 10);

new_exercise(4);
// === Exercise 4 ===
// there was a mistake in the foreach so I added the & in front of day

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

new_exercise(5);
// === Exercise 5 ===
// changed the second parameter of the for loop from $letter <= 'z' to $letter != 'aa'
//!= means does not equal to

$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array