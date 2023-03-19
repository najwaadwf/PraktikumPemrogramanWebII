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
    //mendeklarasikan variabel
    $r = 4.2;
    $t = 5.4;
    $p = 8.9;
    $l = 14.7;
    $s = 7.9;
    $alas_prisma = 5.9;
    $tinggi_prisma = 6.9;
    $tinggi_limas = 8.3;
    
    //akhiran NIM
    $NIM = 4;
    
    //menggunakan switch case untuk menghitung volume bangun ruang
    switch ($NIM % 10) {
        case 0:
        case 1:
            $tabung = 3.14 * $r * $r * $t;
            echo number_format($tabung, 3);
            break;
        case 2:
        case 3:
            $kerucut = 1/3 * 3.14 * $r * $r * $t;
            echo number_format($kerucut, 3);
            break;
        case 4:
        case 5:
            $bola = 4/3 * 3.14 * $r * $r * $r;
            echo number_format($bola, 3);
            break;
        case 6:
        case 7:
            $prisma_AlasSegitiga = 1/2 * $alas_prisma * $tinggi_prisma;
            echo number_format($prismaAlasSegitiga, 3);
            break;
        case 8:
        case 9:
            $limas_AlasPersegiPanjang = 1/3 * $p * $l * $tinggi_limas;
            echo number_format($limasAlasPersegiPanjang, 3);
            break;
        default:
            echo "NIM tidak valid.";
    }
?>
</body>
</html>