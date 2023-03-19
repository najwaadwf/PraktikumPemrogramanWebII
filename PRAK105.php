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
$daftar_SmartphoneSamsung = array("S22" => "Samsung Galaxy S22", "S22+" => "Samsung Galaxy S22+", "A03" => "Samsung Galaxy A03", "Xcover5" => "Samsung Galaxy Xcover 5");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid;
        }
        th {
            background-color: red;
            padding: 20px 25px;
        }
    </style>
</head>
<body>
    <!-- Mulai Tabel -->
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?= $daftar_SmartphoneSamsung["S22"] ?></td>
        </tr>
        <tr>
            <td><?= $daftar_SmartphoneSamsung["S22+"] ?></td>
        </tr>
        <tr>
            <td><?= $daftar_SmartphoneSamsung["A03"] ?></td>
        </tr>
        <tr>
            <td><?= $daftar_SmartphoneSamsung["Xcover5"] ?></td>
        </tr>
    </table>
    <!-- Akhir Tabel -->
</body>
</html>