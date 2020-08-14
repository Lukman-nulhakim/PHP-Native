<?php 

// function tidak dengan parameter
// function dengan parameter
// function in variabel

function fullName(){
    return 'adit';
}

// return itu tidak sama dengan echo
// kalau echo itu sebutannya hanya print aja, dia ga melempar nilai
// tapi dengan return, kita bisa lempar nilainya

$fullName = fullName(); // function in variabel
// var_dump($fullName);
echo $fullName; // print ke halaman

// Example
echo "<br><br>";
function firstName(){
    $firstName = 'rajif';
    return $firstName;
}
// function can be as parameter too
function fullName2($firstName, $lastName){
    return "$firstName $lastName";
}
function lastName(){
    return 'mahendra';
}

$fullName = fullName2(firstName(), 'edutech'); // return firstName = rajif
echo $fullName;

// Example lainnya
echo '<br><br>';
function fullName3($firstName, $lastName, $separator = ' '){
    return "{$firstName}{$separator}{$lastName}";
}

echo fullName3('lauren','eltronto');

echo '<br><br>';
$fullName01 = function ($firstName, $lastName, $separator = '-'){
    return "{$firstName}{$separator}{$lastName}";
};
echo $fullName01('lukman','nulhakim');