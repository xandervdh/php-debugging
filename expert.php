<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// === Exercise 1 ===
// $x isn't defined so i put it in the function arguments
echo "Exercise 1 starts here:";

function new_exercise($x)
{
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

foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day) - 3);
}

print_r($week);

new_exercise(5);
// === Exercise 5 ===
// looked at the errors and warnings in phpstorm and changed it
//

$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

new_exercise(6);
// === Final exercise ===
// put a semicolon behind $hero_lastnames
// fixed the foreach bug
// put a return instead of an echo in the randomHeroName function
// fixed the syntax error of implode
// made a variable of the implode and return it
// put -1 behind the count() in randomHeroNames
// removed randomGenerate because it is not needed
$arr = [];


function combineNames($str1 = "", $str2 = "")
{
    $params = [$str1, $str2];
    foreach ($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode(" - ", $params);

}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    return $heroes[rand(0, count($heroes) - 1)][rand(0, 10)];

}

echo "Here is the name: " . combineNames();

new_exercise(7);
// used intval() to make an integer from the string that date() returns
// put echo instead of return in the function copyright
function copyright(int $year)
{
    echo "&copy; $year BeCode";
}

//print the copyright
copyright(intval(date('Y')));

new_exercise(8);
// changed the || for && so the email and password needs to be the same
// put smith in the first return because u can't reach the second return
// cleaned it up a bit by adding <br>
function login(string $email, string $password)
{
    if ($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith<br>';
    }
    return 'No access<br>';
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!

new_exercise(9);
//strpos returns an integer or false so i changed == true to !== false
//also added echo before the function is called
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');

new_exercise(10);

//fixed it by putting the count') in a variable
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
$count = count($areTheseFruits);
for($i=0; $i < $count; $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this