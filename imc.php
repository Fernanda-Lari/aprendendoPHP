<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $classificacao = $peso/($altura*$altura);
    echo "seu IMC é: ", $classificacao;
{

{
            if ($imc < 18.5) {
                $classificacao = "Abaixo do peso";
            } elseif ($imc < 24.9) {
                $classificacao = "Peso normal";
            } elseif ($imc < 29.9) {
                $classificacao = "Sobrepeso";
            } else {
                $classificacao = "Obesidade";
            }

        }
    }
    header("Location: aula11.php?res=$classificacao");
    ?>

    ?>
</body>
</html>     
