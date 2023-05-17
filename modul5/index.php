<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>e-Brary</title>
    <style>
        body {
        font-family: 'Poppins';
        background: linear-gradient(to right bottom, #f6d5f7, #fbe9d7);
        height: 100vh;
        margin: 0;
        display: fill;
        align-items: center;
        justify-content: center;
            }
        .list-group {
            font-size: 18px;
            max-width: 350px;
            width: 100%;
            height: 350px;
            margin: 0 auto;
            margin-top: 150px;
            margin-bottom: 150px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            padding: 35px;
            background-color: #fff0f3;
            display: flex;
            flex-direction: column;
        }
        .list-group h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #723d46;
            height: 25%;
        }
        .list-group a {
            padding: 10px 15px;
            margin-bottom: 10px;
            background-color: #b5838d;
            color: #fff;
            border-radius: 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .list-group a:hover {
            background-color: #3c1642;
        }
        .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container a {
            width: 60%;
        }
    </style>
</head>

<body>
    <div class="center">
        <div class="list-group">
            <h1>e-Brary</h1>
            <div class="container">
                <a href="Member.php" class="bg-primary">Member</a>
                <a href="Buku.php" class="bg-secondary">Buku</a>
                <a href="Peminjaman.php" class="bg-info">Peminjaman</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>