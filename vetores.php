<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETORES</title>
    <style>
        h2 {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    echo "<h1> Antes da programação...</h1> 
    <h2> O que são vetores: </h2> 
    Uma lista de valores armazenadas na memória, podem ser números, strings...  conjunto de variáveis do mesmo tipo acessíveis com um único nome. Armazenadas de forma contínua e ocupando as posições de forma fixas. <br>
    Identificado por [] <br>";
    ?>
    <?php
    echo "<h2> PROGRAMAÇÃO </h2>";

    $carros = array('BMW m4', 'Mustang', 'Lamborghini', 'Ram');
    //Começa a contar do 0
    echo $carros[1], "<br>";
    echo $carros[3], "<br>";

//adicionando novos elementos 
    $carros[4] = "Camaro ss 67";
    $carros[11] = "Opala comodoro";
    $carros [] = "Ford f150";
    echo $carros[4] , "<br>"; 
    echo $carros[5] , "<br>"; 
    echo $carros[12] , "<br>"; 

    //usando string como indice
    $carros['cd'] = "Commander";
    echo $carros['cd'] , "<br>";

    echo "<h1> Impressão completa da Array </h1>";

    echo "<pre>";
    print_r($carros);
    echo "</pre>";

    echo "<pre>";
    var_dump($carros);
    echo "</pre>";
    ?> 
    
</body>
</html>

