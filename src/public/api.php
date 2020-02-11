<?php
$number = floatval($_GET["number"]);

/**
 * TODO CALL THE CLASS THAT WILL RETURN THE NUMBER FACTORS
 * Ex. $factors = PrimeFactors::of($number);
 */

echo json_encode([
    'factors' => [/* PRINT HERE THE FACTORS */]
]);