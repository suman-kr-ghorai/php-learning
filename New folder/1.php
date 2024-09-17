<?php
$array = ['apple', 'banana', 'cherry'];

// Print the array

print_r($array);

//1st and last word


$sentence = "Today is Tuesday";
$words = explode(' ', $sentence);
$firstWord = $words[0];
$lastWord = $words[count($words) - 1];
echo "<br><br>First word: " . $firstWord . "<br>";
echo "Last word: " . $lastWord . "<br>";


//3.check array

if (is_array($sentence)==true)
{
    echo"<br>It is an array";
}
else
echo "<br> is not an array";

if (is_array($array)==true)
{
    echo"<br>It is an array";
}
else
echo "<br> is not an array";


//4.
$array = [-1, -2, -3, -4, 0, 0, 1, 2, 3, 4];
$positiveCount = 0;
$negativeCount = 0;
$zeroCount = 0;


foreach ($array as $value) {
    if ($value > 0) {
        $positiveCount++;
    } elseif ($value < 0) {
        $negativeCount++;
    } else {
        $zeroCount++;
    }
}

echo "<br><br>Number of positive numbers: " . $positiveCount . "<br>";
echo "Number of negative numbers: " . $negativeCount . "<br>";
echo "Number of zeros: " . $zeroCount . "<br>";

//5.


// Define four arrays
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];
$array4 = [10, 11, 12];

// Combine the arrays
$combinedArray = array_merge($array1, $array2, $array3, $array4);

// Print the combined array
echo "<br>";
print_r($combinedArray);


//7.

$string = "We Love to eat apple";


if (strlen($string) > 0) {
    // Get the first character
    $firstAlphabet = $string[0];
    echo "<br><br>";
    echo "The first alphabetic character is: " . $firstAlphabet;
} else {
    echo "The string is empty.";
}

echo "<br><br>";


//6.
$array1 = ["hello", "world"];
$array2 = ["php", "is", "fun"];

$mergedArray = array_merge($array1, $array2);

$mergedString = implode(' ', $mergedArray);


$reversedString = strrev($mergedString);


$words = preg_split('/\s+/', $reversedString);


$lastWord = $words[0]; 
$firstWord = end($words); 

// Print the results
echo "Merged string: " . $mergedString . "<br>";
echo "Reversed string: " . $reversedString . "<br>";
echo "Last word in reversed string: " . $lastWord . "<br>";
echo "First word in reversed string: " . $firstWord . "<br>";



?>



