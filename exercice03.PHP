<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <?PHP
        $AngleAlph = 30;
        echo "x = cos(".$AngleAlph.") = ".cos($AngleAlph);
        echo "</br>";
        echo "y = sin(".$AngleAlph.") = ".sin($AngleAlph);
        echo "</br>";
        echo "P = (".number_format(cos($AngleAlph), 2, ',', ' ').", ".number_format(sin($AngleAlph), 2, ',', ' ').")";
    ?>
</body>