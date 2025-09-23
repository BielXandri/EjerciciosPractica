<?php

class P12_AverageOfThreeNumbers {
    public function main(): void {
        // Define three numbers
        $numA = 10;
        $numB = 10;
        $numC = 12;
        $numeros = [$numA, $numB, $numC];

        // Output the formula and result
        // Write the program here
        echo "The average is " . ($numA + $numB +$numC) /count ($numeros) . "\n";
    }
}
