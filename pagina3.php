<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>

<body>

   <?php

   $r = 0;

   $x1 = $_POST['x1'];
   $x2 = $_POST['x2'];
   $x3 = $_POST['x3'];
   $x4 = $_POST['x4'];
   $x5 = $_POST['x5'];
   $x6 = $_POST['x6'];
   $x7 = $_POST['x7'];
   $x8 = $_POST['x8'];
   $x9 = $_POST['x9'];
   $x10 = $_POST['x10'];


   if($x1 == 2){
       $r++;
   }

   if($x2 == 3){
     $r++;
   }

   if($x3 == 1){
    $r++;
   }

   if($x4 == 4){
    $r++;
   }

   if($x5 == 2){
    $r++;
   }

   if($x6 == 2){
    $r++;
   }

   if($x7 == 1){
    $r++;
   }

   if($x8 == 2){
    $r++;
   }

   if($x9 == 1){
    $r++;
   }

   if($x10 == 2){
    $r++;
   }

   if($r >= 7){

    echo "Parabéns, seu desempenho foi de $r acertos, muito bem!"; //colocar a img feliz
   }

   if($r < 7){

    echo "Infelizmente sua nota foi de $r acertos, mais sorte na próxima vez."; //colocar a img triste
   }
   ?>
</body>
</html>