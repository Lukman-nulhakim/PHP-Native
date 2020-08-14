<?php 

// while loop
// Do While loop
// {} in echo to separate
// rand() function

$currentNumber = 0;
$endAt = 9;

while($currentNumber <= $endAt){
    echo $currentNumber. '<br>';
    $currentNumber++;
}
// Selama nilai currentNumber <= nilai endAt
// kita echo
// kita tambahin pake increment

$currentNumber = 0;
$endAt = 9;
for($currentNumber; $currentNumber <= $endAt; $currentNumber++){
    echo $currentNumber . '<br>';
}

// Example lainnya
$numbIwant = 3;
while(($diceRoll = rand(1,6)) !== $numbIwant){
    echo "you rolled a {$diceRoll}";
}
// once the loop is finally get random number = numbIwant (3)
// It will continue to botton
// rand() is filled 1-6 number

echo "<br><br>";

while(false){
    echo 'It will never run';
}
do{
    echo 'This will be run at least once';
} while(false);
