<?php
// Função para determinar se um número é par
function isEven($number) {
    return $number % 2 == 0;
}

// Defina o número de linhas e colunas da tabela
$rows = 10;
$cols = 1;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela com Números Pares Coloridos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 10%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .even {
            background-color: pink; /* Cor de fundo para números pares */
        }
    </style>
     <style>
        .gallery img {
            width: 250px;
            height: 250px;
            margin: 1px
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <?php
            // Cria o cabeçalho da tabela
            for ($c = 1; $c <= $cols; $c++) {
                echo "<th>Coluna números pares</th>";
            }
            ?>
        </tr>
        <?php
        // Preenche a tabela com números
        for ($r = 1; $r <=10; $r++) {
            echo "<tr>";
            for ($c = 1; $c <= $cols; $c++) {
                $number = ($r - 1) * $cols + $c; // Calcula o número para cada célula
                $class = isEven($number) ? 'even' : ''; // Define a classe com base na paridade
                echo "<td class='$class'>$number</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <div class="gallery">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<img src='img/foto$i.jpg' alt='Foto $i'>";
        } 
        ?>
    </div>

</body>
</html>
