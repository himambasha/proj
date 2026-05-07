
<?php
/**
 * Program: Print Prime Numbers between 1 and 50
 * Course: BCA Lab Manual
 */
uecho "<h3>Prime Numbers between 1 and 50:</h3>";

// Loop through numbers 1 to 50
for ($num = 2; $num <= 50; $num++) {
    $isPrime = true;
    // Check for divisors from 2 up to the square root of the number
    // We start at 2 because every number is divisible by 1
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false; // It's divisible by another number, so not prime
            break; 
        }
    }
    // If no divisors were found, print the number
    if ($isPrime) {
        echo $num . " ";
    }
}
?>
