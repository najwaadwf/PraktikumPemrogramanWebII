<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK204-Najwa Dwi</title>
</head>
<body>
    <form action="" method="post">
        Nilai : <input type="number" name="angka" value="<?=isset($_POST['angka']) ? $_POST['angka'] : ''?>" min="0" required><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>
    <?php
    if(isset($_POST["konversi"])){
        echo "<h1>";
        if (!empty($_POST["angka"]) or empty($_POST["angka"])) {
            echo "Hasil: ";
        }
        if ($_POST["angka"] == 0) {
            echo "Nol";
        } elseif ($_POST["angka"] >= 1 and $_POST["angka"] <= 9) {
            echo "Satuan";
        } elseif ($_POST["angka"] >= 11 and $_POST["angka"] <= 19) {
            echo "Belasan";
        } elseif ($_POST["angka"] >= 10 and $_POST["angka"] <= 99) {
            echo "Puluhan";
        } elseif ($_POST["angka"] >= 100 and $_POST["angka"] <= 999) {
            echo "Ratusan";
        } elseif ($_POST["angka"] >= 1000) {
            echo "Anda Menginput Melebihi Limit Bilangan";
        }
        echo "</h1>";
    }
    ?>
</body>
</html>