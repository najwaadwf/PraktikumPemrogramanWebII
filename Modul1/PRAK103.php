<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Celcius = 37.841;
    $Fahrenheit = (9/5 * $Celcius) + 32;
    $Reamur = 4/5 * $Celcius;
    $Kelvin = 273.15 + $Celcius;

    echo "Fahrenheit (F) = " . number_format ($Fahrenheit,4)."</br>";
    echo "Reamur (R) = " . number_format ($Reamur,4)."</br>";
    echo "Kelvin (K) = " . number_format ($Kelvin,4)."</br>";
?>
</body>
</html>