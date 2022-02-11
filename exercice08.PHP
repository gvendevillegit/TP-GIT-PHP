<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <?PHP
        function EstPair($nombre){

            //echo("mod = ".$nombre%2." / ");

            if($nombre%2){
                echo $nombre." n'est pas pair";
            }else{
                echo $nombre." est pair";
            }
        }

        $nbr1 = 4;
        $nbr2 = 15;

        EstPair($nbr1);
        echo "</br>";
        EstPair($nbr2);
        echo "</br>";
    ?>
</body>