<?php
include 'database.php';

$sql = "SELECT * FROM tbl_barang";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>
</head>
<body>
    <h2>Data Barang</h2>
    <a href="add_data.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id_barang']; ?></td>
            <td><?php echo $row['nama_barang']; ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td><?php echo $row['harga_beli']; ?></td>
            <td><?php echo $row['harga_jual']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id_barang']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id_barang']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }

        th   
 {
            background-color: #3eff03;
        }

        a {
            text-decoration: none;
            color: blue;
            padding: 5px;   

            border-radius: 5px;
            background-color: #f2f2f2;
        }

        a:hover {
            background-color: #ddd;
        }
    </style>
