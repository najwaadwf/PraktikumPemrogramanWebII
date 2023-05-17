<?php
require "Koneksi.php";
require "Model.php";

if (!empty($_GET['id_member'])) {
    $id_member = $_GET['id_member'];
    deletedata("member", $id_member, "id_member");
    header('location:Member.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Member List</title>
    <style>
            body {
            background: linear-gradient(to right bottom, #f6d5f7, #fbe9d7);
            height: 100vh;
            margin: 0;
            font-family: 'Poppins';
            font-size: 1rem;
        }
        h1 {
            text-align: center;
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            color: #fff;
            background-color: #b5838d;
        }
        .btn-primary {
            background-color: #8f2d56;
        }
        .btn-primary:hover {
            background-color: #3c1642;
        }
        .btn-success:hover{
            background-color: #3c1642;
        }
        .btn-danger {
            background-color: #d81159;
        }
        .btn-danger:hover {
            background-color: #3c1642;
        }
        table {
            background-color: #fff0f3;
            width: 100%;
            border-collapse: collapse;
        }
        th,
        td {
            padding: 0.90rem;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #f8f9fa;
        }

        tbody tr:nth-child(even) {
            background-color: #eacbd2;
        }
        .table {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1500px;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.2rem;
        }
        .btn-container .btn-primary {
            margin-right: 1rem;
        }
        .float-end {
            float: right;
        }
        .container {
            background-color: #d4afb9;
            padding: 3rem;
            margin-top: 50px;
            margin-bottom: 50px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-container {
            margin-top: 0.1rem;
            margin-bottom: 0.1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Member List</h1>
        <div class="row justify-content-center">
            <div class="col-md-8"></div>
            <table class="table table-striped table-hover text-center rounded shadow">                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nomor</th>
                        <th>Alamat</th>
                        <th>Tanggal Mendaftar</th>
                        <th>Tanggal Terakhir Bayar</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = selectalldata("member");
                    while ($data = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td>
                                <?php echo $data['id_member'] ?>
                            </td>
                            <td>
                                <?php echo $data['nama_member'] ?>
                            </td>
                            <td>
                                <?php echo $data['nomor_member'] ?>
                            </td>
                            <td>
                                <?php echo $data['alamat'] ?>
                            </td>
                            <td>
                                <?php echo $data['tgl_mendaftar'] ?>
                            </td>
                            <td>
                                <?php echo $data['tgl_terakhir_bayar'] ?>
                            </td>
                            <td>
                                <a href="FormMember.php?id_member=<?php echo $data['id_member']; ?>"
                                    class="btn btn-success btn-sm">Edit</a>
                                <a href="Member.php?id_member=<?php echo $data['id_member']; ?>"
                                    onclick="return confirm('Hapus data?')" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
            
            <div class="col-md-8 text-center mt-4">
                <div class="btn-container">
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                    <a href="FormMember.php" class="btn btn-primary btn-sm">Tambah Data Baru</a>
                </div>
            </div>
        </div>

</body>

</html>