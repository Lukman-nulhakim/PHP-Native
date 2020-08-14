<?php 
/* 
    materi
    -> arithmatic +, -, *, /, %
    -> incerement
    -> +=. -=, *=, /=, %=
    -> number_format function
    ->**
 */

 $views = 10; // deklar variabel, sekaligus isi nilainya 0
 $views = $views % 7; // isi lagi variabelnya views itu ditambahin 7

 // 10 / 7 = 1 sisa 3, 3 ini modulus
 // modulus % - sisa bagi

 echo $views . '<br>';

 $views2 = 0;
 $views2 += 15; // shortcut kita tambahin dulu 15, baru kita masukin nilainya (=)

 echo $views2 . '<br>';

 $views3 = 1;
 $views3++; //increment tambahin 1x nilainya 1 (increment)
 // increment/decrement untuk operasi aritmatika (+ dan -)
 echo $views3;

 $totalLesson = 30;
 $completedLess = 7;

 $percentage_complete = ($completedLess/$totalLesson) * 100;

 var_dump($percentage_complete);
 $percentage_complete = number_format($percentage_complete, 2);

 var_dump($percentage_complete);
 // **

 $a = 10;
 echo $a ** 3; // 10 * 10 * 10 dikali sesuai angka setelahnya