<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>

<main>
    
</main>
<body>
    
<link rel="stylesheet" type="text/css" href="stylesheet2.css" media="screen"/>
    <?php

    $n = $_POST["nome"];
    $c = $_POST["cpf"];

    ?>


<form action = "pagina3.php" method = "post">

<div id = "titulo"><h3> Responda as questões (1-5) sobre biologia:</h3></div>

<div id = "quizimg" ><img src="res/QUIZ.jpg" height=80/>    </div>

<div id = "perguntas">
 
<br>
<p> 1 - O sistema cardiovascular é formado pelo coração e vasos sanguíneos, sendo essas últimas estruturas responsáveis pela condução do sangue pelo corpo. Entre as alternativas a seguir, marque o nome do vaso responsável por levar o sangue do coração em direção aos tecidos:
<br>
<br>
<input type = "radio" name = "x1" value = "1" required/> A - Veias
<br>
<input type = "radio" name = "x1" value = "2"/> B - Artérias (Correta)
<br>
<input type = "radio" name = "x1" value = "3"/> C - Vênulas 
<br>
<input type = "radio" name = "x1" value = "4"/> D - Capilares

<br>
<br>
<br>

<br> 2 - O gráfico abaixo mostra a variação na pressão sanguínea e na velocidade do sangue em diferentes vasos do sistema circulatório humano.
<br><br>
<img src = "res/fuvest.jpg"/>
<br>
<br>
Qual das alternativas correlaciona corretamente as regiões I, II e III do gráfico com o tipo de vaso sanguíneo?


<br><br>
<table>
    <tr>
        <th> </th> <th> I </th> <th> II </th> <th> III </th> 
    </tr>
    <tr>
        <td> a) </td> <td> veia </td> <td> artéria </td> <td> capilar </td>
    </tr>
    <tr>
        <td> b) </td> <td> artéria </td> <td> veia </td> <td> capilar </td>
    </tr>
    <tr>
        <td> c) </td> <td> artéria </td> <td> capilar </td> <td> veia </td>
    </tr>
    <tr>
        <td> d) </td> <td> artéria </td> <td> veia </td> <td> artéria </td>
    </tr>


</table>
<br>
<br>
<input type = "radio" name = "x2" value = "1"required/> Alternativa A
<br>
<input type = "radio" name = "x2" value = "2"/> Alternativa B
<br>
<input type = "radio" name = "x2" value = "3"/> Alternativa C (Correta)
<br>
<input type = "radio" name = "x2" value = "4"/> Alternativa D

<br>
<br>
<br>

<br>

<p> 3 - É comum ouvirmos que as artérias são responsáveis por transportar sangue rico em oxigênio, anteriormente chamado de arterial. Entretanto, essa afirmação nem sempre é correta, uma vez que existe uma artéria que transporta sangue rico em gás carbônico e pobre em oxigênio. Entre as alternativas a seguir, marque aquela que indica a artéria que não transporta sangue rico em oxigênio.
<br>
<br>
<input type = "radio" name = "x3" value = "1" required/> A - Pulmonar (Correta)
<br>
<input type = "radio" name = "x3" value = "2"/> B - Aorta
<br>
<input type = "radio" name = "x3" value = "3"/> C - Hepática
<br>
<input type = "radio" name = "x3" value = "4"/> D - Capilar

<br>
<br>
<br>

<br>

<p> 4 - A respeito da pele, marque uma alternativa que indique uma função que não pode ser atribuída a esse órgão.

<br>
<br>
<input type = "radio" name = "x4" value = "1" required/> A - Barreira protetora contra patógenos.
<br>
<input type = "radio" name = "x4" value = "2"/> B - Proteção contra a perda excessiva de água.
<br>
<input type = "radio" name = "x4" value = "3"/> C - Proteção contra atrito
<br>
<input type = "radio" name = "x4" value = "4"/> D - Captação de estimulos de dor, tato, luz e temperatura. (Correta)
<br>
<br>
<br>

<br>

<p> 5 - (UEMT) A presença de uma epiderme queratinizada, do ponto de vista adaptativo, está diretamente relacionada à:
<br>
<br>
<input type = "radio" name = "x5" value = "1" required/> A - Preservação da vida, servindo para ataque e defesa.
<br>
<input type = "radio" name = "x5" value = "2"/> B - Adaptação ao meio ambiente terrestre, sendo responsável por maior economia hídrica. (Correta)
<br>
<input type = "radio" name = "x5" value = "3"/> C - Vida no meio aquático, impedindo a hidratação do animal.
<br>
<input type = "radio" name = "x5" value = "4"/> D - Reserva nutritiva.

<br>
<br>
<br>

<div id = "titulo2"><h3> Responda as questões (6-10) sobre informática:</h3></div>
<br>

<p> 6 - Há um tipo ou categoria de software que é instalado e tem sua operação feita internamente a um sistema. Essa categoria de software recebe a denominação de software.

<br>
<br>
<input type = "radio" name = "x6" value = "1" required/> A - Crítico
<br>
<input type = "radio" name = "x6" value = "2"/> B -Embutido (Correta)
<br>
<input type = "radio" name = "x6" value = "3"/> C - Legado 
<br>
<input type = "radio" name = "x6" value = "4"/> D - Aberto

<br>
<br>
<br>

<br>

<p> 7 - É conhecida como a linguagem de marcação conhecida por ser utilizada para a construção de sites. De qual linguagem estamos falando?
<br>
<br>
<input type = "radio" name = "x7" value = "1" required /> A - HTML (Correta)
<br>
<input type = "radio" name = "x7" value = "2"/> B - CSS
<br>
<input type = "radio" name = "x7" value = "3"/> C - XML
<br>
<input type = "radio" name = "x7" value = "4"/> D - NDA

<br>
<br>
<br>

<br>

<p> 8 - Os primeiros computadores da década de 1940 possuíam somente dois níveis de linguagem de programação. Quais são esses níveis?


<br>
<br>
<input type = "radio" name = "x8" value = "1" required/> A - Linguagem de objetos e Lógica analógica.
<br>
<input type = "radio" name = "x8" value = "2"/> B - Linguagem da máquina e Lógica digital. (Correta)
<br>
<input type = "radio" name = "x8" value = "3"/> C - Linguagem da máquina e Lógica analógica.
<br>
<input type = "radio" name = "x8" value = "4"/> D - Linguagem objetos e Lógica digital.

<br>
<br>
<br>

<br>

<p> 9 - O programa que analisa e traduz um código de alto nível, para a linguagem do computador (máquina) e que roda o código-fonte escrito como sendo o código objeto, traduzindo o programa linha a linha, sendo que o programa vai sendo utilizado na medida em que vai sendo traduzido, é denominado de:
<br>
<br>
<input type = "radio" name = "x9" value = "1" required/> A - Interpretador (Correta)
<br>
<input type = "radio" name = "x9" value = "2"/> B - Compilador
<br>
<input type = "radio" name = "x9" value = "3"/> C - Editor de texto
<br>
<input type = "radio" name = "x9" value = "4"/> D - Depurador
<br>
<br>
<br>

<br>

10 - Na linguagem de programação Python, existem 3 estruturas para armazenar dados indexados. A estrutura cujos valores são imutáveis depois de sua criação é conhecida como
<br>
<br>
<input type = "radio" name = "x10" value = "1" required/> A - Lista
<br>
<input type = "radio" name = "x10" value = "2"/> B - Tupla (Correta)
<br>
<input type = "radio" name = "x10" value = "3"/> C - Operador
<br>
<input type = "radio" name = "x10" value = "4"/> D - Classe

<br>
<br>
<br>

</div>
<input type = "submit" value = "Ver Resultado"/> 

<br>

<div id = "integrantes"> Cilmara Teixeira Miralha e Fernando Gonçalves de Medeiros INFO 21 </div>

<input type = "hidden" id = "nome" name = "nome" value="<?php echo  "$n";?>">
<input type = "hidden" id = "cpf" name = "cpf" value = "<?php echo "$c";?>">

</form>
</body>
</html>