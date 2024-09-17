<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    
    return true;
}

// Example usage:
$num =17;
if (isPrime($num)) {
    echo "$num is a prime number.";
} else {
    echo "$num is not a prime number.";
}

$num2 =13;
if (isPrime($num2)) {
    echo "\r\n"."$num2 is a prime number.";
} else {
    echo "$num2 is not a prime number.";
}
?>
