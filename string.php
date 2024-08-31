<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array(strtolower($str[$i]), $vowels)) {
            $count++;
        }
    }
    return $count;
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
