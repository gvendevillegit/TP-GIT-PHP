<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11</title>
</head>
<body>
    <?PHP
        
        $val1 = 5;
        $val2 = 10;
        $valTemp = NULL;

        echo("Avant Val 1 = ".$val1." & Val 2 = ".$val2."</br>");
        
        $valTemp = $val1;
        $val1 = $val2;
        $val2 = $valTemp;

        echo("Après Val 1 = ".$val1." & Val 2 = ".$val2);        

    ?>
</body>