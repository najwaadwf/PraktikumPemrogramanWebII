<!DOCTYPE html>
<html>
<head>
    <style>
        .error {color: red;}
    </style>
    <title>PRAK202-Najwa Dwi</title>
</head>
<body>
    <?php
    $namaError = $nimError = $jenis_kelaminError = "";
    if(isset($_POST["submit"])){
        if (empty($_POST["nama"])) {
            $namaError = "nama tidak boleh kosong";
        }
        if (empty($_POST["nim"])) {
            $nimError = "nim tidak boleh kosong";
        }
        if (empty($_POST["jenis_kelamin"])) {
            $jenis_kelaminError = "jenis kelamin tidak boleh kosong";
        }
    }
    ?>
    <form action="" method="post">
        Nama: <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>">
        <span class="error">* <?php echo $namaError;?></span><br>  
        Nim: <input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>">
        <span class="error">* <?php echo $nimError;?></span><br>
        Jenis Kelamin: <span class="error">* <?php echo $jenis_kelaminError;?></span><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if (isset($_POST["jenis_kelamin"]) and $_POST["jenis_kelamin"] == "Laki-laki") echo "checked";?>>Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if (isset($_POST["jenis_kelamin"]) and $_POST["jenis_kelamin"] == "Perempuan") echo "checked";?>>Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        if (!empty($_POST["nama"]) and !empty($_POST["nim"]) and !empty($_POST["jenis_kelamin"])) {
            echo "<h1>Output: </h1>";
            if(!empty($_POST["nama"])){
                echo $_POST["nama"]."<br>";
            }
            if(!empty($_POST["nim"])){
                echo $_POST["nim"]."<br>";
            }
            if(!empty($_POST["jenis_kelamin"])) {
                echo $_POST["jenis_kelamin"];
            }
        }
    }
    ?>
</body>
</html>