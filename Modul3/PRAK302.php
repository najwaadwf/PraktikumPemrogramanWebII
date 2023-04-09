<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302-Najwa Dwi</title>
</head>
<body>
    <form method = "post" style="margin-bottom: 20px;">
        <label> Tinggi :</label>
        <input type = "number" name = "Tinggi"><br>
        <label> Alamat Gambar :</label>    
        <input type = "text" name = "AlamatGambar"><br>
        <input type = "submit" name = "Cetak" value = "Cetak">
    </form>
    <?php
        if(isset($_POST['Tinggi']) && isset($_POST['AlamatGambar'])){
            $Tinggi = $_POST['Tinggi'];
            $AlamatGambar = $_POST['AlamatGambar'];
            
            $i = 1;
        while($i <= $Tinggi){
        $j = 1;
        while($j <= $Tinggi){
        if($j >= $i){
            echo "<img src='$AlamatGambar' width='20px' height='20px'>";
            } 
        else {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            $j++;
        }
        echo "<br>";
        $i++;
    }
}
?>
</body>
</html>