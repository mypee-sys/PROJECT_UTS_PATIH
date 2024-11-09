<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];

    $sql = "INSERT INTO tbl_barang (nama_barang, stok, harga_beli, harga_jual) VALUES ('$nama_barang', '$stok', '$harga_beli', '$harga_jual')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");  // Redirect to index.php after adding data
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Barang</h2>
    <form method="post">
        Nama Barang: <input type="text" name="nama_barang" required><br>
        Stok: <input type="number" name="stok" required><br>
        Harga Beli: <input type="number" name="harga_beli" required><br>
        Harga Jual: <input type="number" name="harga_jual" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            border: 1px solid #ccc;
            padding: 40px;
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;   

        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;   

        }
    </style>