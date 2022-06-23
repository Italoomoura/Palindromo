<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>
<body>
    <form method="post">
        <input type="text" name="txt" require/>
        <input type="submit" name="submit" value="ok">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $n = $_POST['txt'];
        $rev = strrev($n);

        if($n === $rev){
            echo "$n é um palíndromo";
        }
        else{
            echo "$n não é um palíndromo";
        }
    }
    ?>
</body>
</html>