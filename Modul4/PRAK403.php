<!DOCTYPE html>
<html lang="en">
<head>
<style>
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
        }
        table{
            width: 700px;
        }

        table tr th{
            background-color: lightgray;
            text-align: left;
        }
    </style>
    <title>PRAK403 - Najwa Dwi</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
    <?php
    $nilai = [
        ["no" => 1, "nama" => "Ridho", 
        "matkul" => [
            ["nama_mk" =>"Pemrograman I", "sks" => 2], 
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
                    ]
        ],
        ["no" => 2, "nama" => "Ratna", 
        "matkul" => [
            ["nama_mk" =>"Basis Data I", "sks" => 2], 
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
                    ]
        ],
        ["no" => 3, "nama" => "Tono", 
        "matkul" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3], 
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3], 
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
                    ]
        ]
            ];
        for ($i=0; $i < count($nilai); $i++){
            $total_sks = 0;
            for ($j=0; $j < count($nilai[$i]["matkul"]); $j++) {
                $total_sks += $nilai[$i]["matkul"][$j]["sks"];
            }
            $nilai[$i]["total_sks"] = $total_sks;
            if ($nilai[$i]["total_sks"] < 7) {
                $nilai[$i]["keterangan"] = "Revisi KRS";
            } else {
                $nilai[$i]["keterangan"] = "Tidak Revisi";
            }
        }
        ?>
    <?php
        for ($i=0; $i < count($nilai); $i++) {
            for ($j=0; $j < count($nilai[$i]["matkul"]); $j++) {
                echo "<tr>";
                if ($j == 0) {
                    echo "<td>".$nilai[$i]["no"]."</td>";
                    echo "<td>".$nilai[$i]["nama"]."</td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["nama_mk"]."</td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["sks"]."</td>";
                    echo "<td>".$nilai[$i]["total_sks"]."</td>";
                    if ($nilai[$i]["keterangan"] == "Revisi KRS"){
                        echo '<td style="background-color: red;">'.$nilai[$i]["keterangan"]."</td>";
                    } else {
                        echo '<td style="background-color: green;">'.$nilai[$i]["keterangan"]."</td>"; 
                    }
                } else {
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["nama_mk"]."</td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["sks"]."</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
    ?>
</table>
</body>
</html>