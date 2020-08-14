<?php

$names=['alex','billy','daniel'];

foreach($names as $name){
    echo $name .'<br>';
break;
}
// dengan break, itu kita akan keluar dari loopingan

$users = [
    ['username' => 'alex'],
    ['username' => 'aldo'],
    ['username' => 'aldi'],
    ['username' => 'arum'],
    ['username' => 'azis'],
    ['username' => 'erik'],
    ['username' => 'eka']
];
$toFind = 'azis';
$result = null;

foreach($users as $user){
    if($user['username'] === $toFind){
        $result = $user;
    break;
    }
}
echo '<br><br>';
// var_dump($result);
// break, will only running after we get azis as a result
// after that, kita keluar dari foreach

$toSkip = 'aldi';
echo '<br><br> with break <br>';
foreach($users as $user){
    if($user['username'] === $toSkip){
    break;
    }
    echo $user['username'] . '<br>';
}

echo '<br><br> with continue <br>';
foreach($users as $user){
    if($user['username'] === $toSkip){
        continue; // loncat masuk lagi ke codingan foreach loopnya
    }
    echo $user['username'] . '<br>';
}

$people = [
    [
        'username' => 'alex',
        'likes' => ['cats', 'food']
    ],
    [
        'username' => 'aldo',
        'likes' => ['code', 'cats', 'food']
    ],
    [
        'username' => 'aldi',
        'likes' => ['code', 'cats', 'food']
    ]
];
$letsFind = 'code';
$found = null;
foreach ($people as $pops) {
    foreach ($pops['likes'] as $like) {
        if ($like === $letsFind) {
            $found = $like;
            echo $pops['username'] . " Likes To " . $like . "<br>";
            break;
        }
    }
}
echo $found;
