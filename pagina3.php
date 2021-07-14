<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="stylesheet3.css" media="screen"/>


<div id = "result"> Resultado do Quiz  </div>


   <?php
   

   $n = $_POST['nome'];
   $c = $_POST['cpf'];

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
  
   $txacerto = ($r *10);
  
  
   if($r >= 7){

    $desempenho = "bom";

   }if($r < 7){

    $desempenho = "ruim";
   }


?>

<div id = "rbom">

<?php

   if($r >= 7){
    
    echo "$n, CPF: $c parabéns, seu desempenho foi de $txacerto%, muito bem!"; 
    
   }

  ?>

  </div>

<br><br><br><br>
<br><br><br><br><br><br><br><br>

  <div id = "imagem"> <img src="res/<?php echo "$desempenho";?>.gif"> </div>


  <div id = "ruim">
    

  <?php

   if($r < 7){  

    echo "$n, CPF: $c, infelizmente sua nota foi de $txacerto%, mais sorte na próxima vez."; //colocar a img triste
   }

 
   ?>
   </div>
   
   <div id = "integrantes"> Cilmara Teixeira Miralha e Fernando Gonçalves de Medeiros INFO 21 </div>

</body>
</html>