<?php 
// for loop
// ceil function
// count for array

for($i = 0; $i<10; $i++){
    // inisialisasi, kondisi, increment
    echo $i . '<br>';
}
// loop dimulai dari angka  0 - 9;
// ketika nyampe angka 10, maka loop akan berhenti

//example lain
echo '<br><br>';
$totalItems = 210;
$itemPerPage = 25;

$pagecount = ceil($totalItems / $itemPerPage); // 210/25 =8.4
// ceil function pembulatan ke atas

var_dump($pagecount);
echo '<br><br>';

for($i = 1; $i <= $pagecount; $i++){
    echo '<a href="?page=' .$i. '">' .$i. '</a> <br>';
}

$names=['alex','billy','daniel'];
var_dump(count($names));

for($i = 0; $i < count($names); $i++){
    echo 'array ['.$i.'] '.$names[$i].'.<br>';
}// semacam foreach