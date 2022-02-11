<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <?PHP
        $total = 0;
        $max = 30;
        for($i=1; $i<=$max; $i++){
            echo $i;
            if($i != $max)
                echo " + ";
            $total = $total + $i;
        }
        echo " = ".$total;
    ?>
</body>