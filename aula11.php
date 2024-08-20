<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="imc.php" method="post">
        <label for="peso"> peso: </label>
        <input type="text" name="peso" value="<?php echo (isset($_GET["peso"])?$_GET["peso"]:""); ?>"> <br>
        <label for="altura"> altura: </label>
        <input type="text" name="altura" value="<?php echo (isset($_GET["altura"])?$_GET["altura"]:""); ?>"> <br>
        <input type="submit" value="calcular"><br> <br>
       Classificação: <input type="text" width="5" value="<?php echo (isset($_GET["res"])?$_GET["res"]:"");?>"><br>



    </form>
    
</body>
</html>