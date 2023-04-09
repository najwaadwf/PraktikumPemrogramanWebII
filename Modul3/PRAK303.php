<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303-Najwa Dwi</title>
</head>
<body>
    <form method = "post">
        <label> Batas Bawah : </label>
        <input type = "number" name = "BatasBawah"><br>
        <label> Batas Atas : </label>
        <input type = "number" name = "BatasAtas"><br>
        <input type = "submit" name = "Cetak" value = "Cetak">
    </form>
    <?php
        if(isset($_POST['BatasBawah']) && isset($_POST['BatasAtas'])){
            $BatasBawah = $_POST['BatasBawah'];
            $BatasAtas = $_POST['BatasAtas'];

            $i = $BatasBawah;
            do {
                if(($i+7) %5 == 0){
                    echo "<img src = 'star.png' width = '16px' height = '16px'>"; 
                }
                else{
                    echo $i." ";
                }
                $i++;
            }
            while($i <= $BatasAtas);
        }
    ?>
</body>
</html>