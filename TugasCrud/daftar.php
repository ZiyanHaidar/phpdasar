<?php 
include 'connect.php'; 
session_start();
 
if (!isset($_SESSION['email'])) { 
    echo "<script>alert('Maaf, Anda belum login!');</script>"; 
    echo "<script>window.location.href = 'login.php';</script>";
    exit; 
} 
 
if (isset($_POST['submit'])) { 
    $nama = $_POST['nama']; 
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis']; 
    $jumlah = $_POST['jumlah']; 
    $total = $_POST['total']; 
    $sql = "INSERT INTO makanan(nama, harga, jenis,  jumlah, total) VALUES('$nama', '$harga', '$jenis', '$jumlah', '$total')"; 
    $result = mysqli_query($conn, $sql); 
    if ($result) { 
        header('location: Data.php'); 
    } else { 
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
    } 
} 
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class='card w-50 m-auto p-3'>
        <h3 class="text-center ">Jual Motor</h3>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="number" class="form-control" id="total" name="total">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>