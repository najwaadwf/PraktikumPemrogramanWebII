<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301-Najwa Dwi</title>
</head>
<body>
    <form method = "post">
        <label> Jumlah Peserta :</label>
        <input type = "number" name = "Jumlah"></br>
        <input type = "submit" name = "Cetak" value = "Cetak">
    </form>
    <?php
        if(isset($_POST['Cetak'])){
            $Jumlah = $_POST['Jumlah'];
            $i = 1;
        while($i <= $Jumlah){
        if($i % 2 == 0){
            echo "<h2> <font color = 'green'> Peserta ke-$i</h2>";
        }
        else{
            echo "<h2> <font color = 'red'> Peserta ke-$i</h2>";
        }
        $i++;
    }  
}
?>
</body>
</html>