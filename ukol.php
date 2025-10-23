<?php
//1 proměnné a datové typy
//1
$name ="Michaela";
$age = 29;
$height = 163;

echo "$name, $age, $height";

//2
$firstName = "Michaela";
$lastName = "Renová";
$fullName = $firstName . "" . $lastName;
echo $fullName;

//3
$x = 3.14;
echo gettype($x);

//4
$number = "42";
$sum = (int)$number + 8;

//5
$colors = ["red", "green", "blue",];
echo "$colors[1]";

//2 podmínky a logika
//6
$score = "";
if ($score >90) {
    echo "Výborně";
} elseif ($score >= 60 && $score <= 89) {
    echo "Dobře";
} else {
    echo "Zkus to znovu";
}

//7
$x = 7;
if ($x % 2 == 0) {
    echo "$x je sudé";
} else {
    echo "$x je liché";
}

//8
if (str_starts_with($name, "M")) {
    echo "$name začíná na písmeno A";
} else {
    echo "$name nezačíná na písmeno A";
}

//9
$loggedIn = false;
echo $loggedIn ? "Přihlášen" : "Odhlášen";

//10
$items = [];
if (empty($items)) {
    echo "Žádné položky";
}

//3 funkce
//11
function greet($name) {
    return "Ahoj, $name!";
}

//12
function add($a, $b) {
    return $a + $b;
}

//13
function isEven($num) {
    if ($num % 2 == 0){
    return true;
}
}

//14
$numbers1 = [18, 65, 11,];
function average($numbers) {
    return array_sum();
}

//15 samohlásky
$string = "nejneobhospodařovávatelnější";

function countVowels ($string) {
    $count = 0;
    $vowels = ["a", "e", "i", "o", "u", "y", "á", "é", "í", "ó", "ú", "ů", "ý"];

    $letter = str_split($string);

    foreach ($letter as $letter){
       if (in_array($letter, $vowels)){
        $count++; 
       }
    }
    return $count;
}

//4 stringy
//16
$text = "ahoj";
$reversedText = strrev($text);

//17
$word = "php";
$upperCaseWord = ucfirst($word);

//18
$sentence = "Laravel je PHP framework.";
$numA = substr_count($sentence, "a");

//19
$larContains = str_contains($sentence, "Laravel");

//20
$replaceEwith3= str_replace("e", "3", $sentence);

//5 práce s poli a logikou
//21
$numbers2 = [1, 2, 3, 4, 5];

$numbers2x2 = array_map(function($cislo) {
    return $cislo * 2;
}, $numbers2);

print_r($numbers2x2);

//22
$names = ["Eva", "Jan", "Eva", "Petr"];
$names2 = array_unique($names);

//23
$a = [1, 2];
$b = [3, 4];
$merged = array_merge($a, $b);

//24
if (in_array("Jan", $names)) {
    echo "Jan je v poli";
}

//25
$numbers3 = [9, 2, 5, 1,];
$numbers3sorted = sort($numbers3);

//26
$words = ["monitor", "klávesnice", "myš",];
function findLongestWord($words){
    $longest = "";
    foreach($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }
    return $longest;
}
echo findLongestWord($words);

//27
function sumEvenNumbers($numbers) {
    $sum2 = 0;
    foreach ($numbers as $n) {
        if ($n % 2 == 0) {
            $sum2 += $n;
        }
    }
    return $sum2;
}

//28
//array_reversed nefunguje na řetězec
function reverseWords($sentence) {
    //rozdělení na slova
    $words = explode(" ", $sentence);
    $reversed = array_reverse($words);
    //spojení zpět na slova
    return implode(" ", $reversed);
}
echo reverseWords($sentence);

//29
$array = [15, 19, 15, 5,];
function hasDuplicates($array){
    if (count($array) !== count(array_unique($array))){
           };
}




