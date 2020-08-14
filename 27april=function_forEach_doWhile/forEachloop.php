<?php 

// ForEach Loop
// comparison for loop -- for each
// h1, p HTML in PHP

$names=['alex','billy','daniel'];

for($i = 0; $i < count($names); $i++){
    echo 'array ['.$i.'] '.$names[$i].'.<br>';
}

echo '<br>This is foreach<br>';
foreach($names as $name){
    echo $name, ' ';
}
echo '<br>';
// Basic Structure foreach
// foreach($array as key => $value){
//    code
// }

foreach($names as $index => $name){
    echo $index . ' : ' . $name . '<br>';
}

// Challenge
// Challange
$topics = [
    [
        'id' => 1,
        'title' => 'The Best Way',
        'posts' => [
            ['body' => 'practice'],
            ['body' => 'work on prokect']
        ]
    ],
    [
        'id' => 2,
        'title' => 'The Golden Way',
        'posts' => [
            ['body' => 'ITUUU'],
        ]
    ]
];

// var_dump($topics);
foreach ($topics as $topic) {
    echo "<h3>" . $topic['title'] . "</h3>";
    foreach ($topic['posts'] as $post) {
        echo "<p>" . $post['body'] . "</p>";
    }
}
