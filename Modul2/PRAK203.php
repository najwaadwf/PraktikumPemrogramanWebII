<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203-Najwa Dwi</title>
</head>
<body>
    <form action:"" method = "post">
    Nilai : <input type="number" name="suhu" value="<?=isset($_POST['suhu']) ? $_POST['suhu'] : ''?>"><br>
    Dari : <br>
        <input type="radio" name="dari" value="Celcius" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "Celcius") echo "checked";?>>Celcius<br>
        <input type="radio" name="dari" value="Fahrenheit" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "Fahrenheit") echo "checked";?>>Fahrenheit<br>
        <input type="radio" name="dari" value="Rheamur" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "Rheamur") echo "checked";?>>Rheamur<br>
        <input type="radio" name="dari" value="Kelvin" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "Kelvin") echo "checked";?>>Kelvin<br>
        Ke : <br>
        <input type="radio" name="ke" value="Celcius" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "Celcius") echo "checked";?>>Celcius<br>
        <input type="radio" name="ke" value="Fahrenheit" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "Fahrenheit") echo "checked";?>>Fahrenheit<br>
        <input type="radio" name="ke" value="Rheamur" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "Rheamur") echo "checked";?>>Rheamur<br>
        <input type="radio" name="ke" value="Kelvin" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "Kelvin") echo "checked";?>>Kelvin<br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST["konversi"])) {
        if (!empty($_POST["dari"]) and !empty($_POST["ke"])) {
        $suhu = $_POST["suhu"];

        $CelciusToFahrenheit = (9/5 * $suhu) + 32;
        $CelciusToRheamur = 4/5 * $suhu;
        $CelciusToKelvin = $suhu + 273;

        $FahrenheitToCelcius = 5/9 * ($suhu - 32);
        $FahrenheitToRheamur = 4/9 * ($suhu - 32);
        $FahrenheitToKelvin = 5/9 * ($suhu - 32) + 273;

        $RheamurToCelcius = 5/4 * $suhu;
        $RheamurToFahrenheit = (9/4 * $suhu) + 32;
        $RheamurToKelvin = 5/4 * $suhu + 273;

        $KelvinToCelcius = $suhu - 273;
        $KelvinToFahrenheit = 9/5 * ($suhu - 273) + 32;
        $KelvinToRheamur = 4/5 * ($suhu - 273);

            echo "<h1>Hasil Konversi: ";
            if ($_POST["dari"] == "Celcius" and $_POST["ke"] == "Celcius") {
                echo $_POST["suhu"]." &degC";
            } elseif ($_POST["dari"] == "Celcius" and $_POST["ke"] == "Fahrenheit") {
                echo number_format($CelciusToFahrenheit, 1)." &degF";
            } elseif ($_POST["dari"] == "Celcius" and $_POST["ke"] == "Rheamur") {
                echo number_format($CelciusToRheamur, 1)." &degR";
            } elseif ($_POST["dari"] == "Celcius" and $_POST["ke"] == "Kelvin") {
                echo number_format($CelciusToKelvin, 1)." &degK";

            } elseif ($_POST["dari"] == "Fahrenheit" and $_POST["ke"] == "Fahrenheit") {
                echo number_format($suhu, 1)." &degF";
            } elseif ($_POST["dari"] == "Fahrenheit" and $_POST["ke"] == "Celcius") {
                echo number_format($FahrenheitToCelcius, 1)." &degC";
            } elseif ($_POST["dari"] == "Fahrenheit" and $_POST["ke"] == "Rheamur") {
                echo number_format($FahrenheitToRheamur, 1)." &degR";
            } elseif ($_POST["dari"] == "Fahrenheit" and $_POST["ke"] == "Kelvin") {
                echo number_format($FahrenheitToKelvin, 1)." &degK";

            } elseif ($_POST["dari"] == "Rheamur" and $_POST["ke"] == "Rheamur") {
                echo number_format($suhu, 1)." &degR";
            } elseif ($_POST["dari"] == "Rheamur" and $_POST["ke"] == "Celcius") {
                echo number_format($RheamurToCelcius, 1)." &degC";
            } elseif ($_POST["dari"] == "Rheamur" and $_POST["ke"] == "Fahrenheit") {
                echo number_format($RheamurToFahrenheit, 1)." &degF";
            } elseif ($_POST["dari"] == "Rheamur" and $_POST["ke"] == "Kelvin") {
                echo number_format($RheamurToKelvin, 1)." &degK";

            } elseif ($_POST["dari"] == "Kelvin" and $_POST["ke"] == "Kelvin") {
                echo number_format($suhu, 1)." &degK";
            } elseif ($_POST["dari"] == "Kelvin" and $_POST["ke"] == "Celcius") {
                echo number_format($KelvinToCelcius, 1)." &degC";
            } elseif ($_POST["dari"] == "Kelvin" and $_POST["ke"] == "Fahrenheit") {
                echo number_format($KelvinToFahrenheit, 1)." &degF";
            } elseif ($_POST["dari"] == "Kelvin" and $_POST["ke"] == "Rheamur") {
                echo number_format($KelvinToRheamur, 1)." &degR";
            }
            echo "</h1>";
        }
    }
    ?>
</body>
</html>