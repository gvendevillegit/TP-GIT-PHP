<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
</head>
<body>
    <?PHP
        function EstPair($nombre){
            $bool = true;
            if($nombre%2){
                $bool = false;
            }
            return $bool;
        }

        $max = 30;
        $total = 0;

        for($i=1; $i<=$max; $i++){
            if(EstPair($i)){
                echo($i);
                if($i != $max)
                    echo " + ";
                $total = $total + $i;
            }
        }    
        echo " = ".$total;
    ?>
</body>