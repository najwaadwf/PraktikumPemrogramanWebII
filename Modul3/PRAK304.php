<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304-Najwa Dwi</title>
</head>
<body>
<?php
    $star = NULL;
    $image = "<img style='width: 70px;' src='star.png' >";
    if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
        $star = $_POST['star'];
        }
    if( isset($_POST['tambah']) ) {
        $star += 1;
        }
    if( isset($_POST['kurang']) ) {
        $star -= 1;
        }
    if(empty($star)) { ?>
        <form action = "" method = "post">
        <label for = "star"> Jumlah Bintang :</label>
        <input type= "text" name = "star"> </br>
        <button type= "submit" name = "submit">Submit</button>
        </form>
        <?php } ?>
    <?php if( !empty($star) ) {
        echo "Jumlah Bintang $star "; ?>
        <br><br>
    <?php for( $i = 0; $i < $star; $i++ ) {
        echo "$image";
        } ?>
    <form action ="" method = "post">
    <input type = "text" name = "star" value = "<?= $star ?>" hidden>
    <button type = "submit" name = "tambah"> Tambah </button>
    <button type = "submit" name= "kurang"> Kurang </button>
    </form>
    <?php } ?>
</body>
</html>