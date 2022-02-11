<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
        $coteB = 20;
        $coteC = 15;
        // hypotenus
        // Si un triangle est rectangle, alors le carre de la longueur de l'hypoténuse est égal a la somme
        // des carrés de longueurs des deux autres cotes

		$hyp_carre=pow($coteB,2)+pow($coteC,2);
		$hyp=sqrt($hyp_carre);
		echo "Hypotenus = ".$hyp."</br>";
    ?>
</body>
</html>