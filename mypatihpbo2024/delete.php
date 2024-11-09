<?php
include 'database.php';

$id = $_GET['id'];
$sql = "DELETE FROM tbl_barang WHERE id_barang='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");  // Redirect to index.php after deleting data
} else {
    echo "Error deleting record: " . $conn->error;
}
?>

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