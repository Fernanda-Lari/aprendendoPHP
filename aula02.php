<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
</head>
<body>
    <?php
        echo "Isto tem função de mostrar textos";
        //comentario linha unica
        /* comentario varias 
        linhas
        e 
        linhas 
        */
        echo "<h1>Esse é um título com tag do HTML </h1>";
        echo "<p>Parágrafo com HTML</p>";
        print "Também mostra textos";
        /**
         * echo: imprime uma string na tela
         * print: : imprime uma string na tela
         */
        /**
         * Variáveis:
         */
        $nome = "Larissa";
        $idade = 17;
        $altura = 1.60;
        echo "<br>$nome tem  $altura m e $idade anos de idade. ";

        //Aritmétrica básica
        $a = 12;
        $b = 5;
        $c = $a + $b;
        echo "<br> <h2> Operadores aritmétricos </h2> </br> ";
        echo "a= 12 e b=5";
        echo "<br>a soma de $a e $b é $c";
        $c = $a - $b;
        echo "<br>a subtração de $a e $b é $c";
        $c = $a * $b;
        echo "<br>a multiplicação de $a e $b é $c";
        $c = $a / $b;
        echo "<br>a divisão de $a e $b é $c";
        $c = $a % $b;
        echo "<br>o resto da divisão de $a e $b é $c";
        $c = $a ** $b;
        echo "<br>a potência de $a e $b é $c";
                ?>

    
        
</body>
</html>