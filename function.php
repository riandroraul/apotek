<?php
session_start();

//membuat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "apotek");


//Menambah Obat baru
if (isset($_POST['addnewobat'])) {
    $namaobat = $_POST['namaobat'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($conn, "insert into stock (namaobat,deskripsi,stock) values('$namaobat','$deskprisi','$stock')");
    if ($addtotable) {
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//menambah obat masuk
if (isset($_POST['obatmasuk'])) {

    $obatnya = $_POST['obat'];
    $penerima = $_POST['penerima'];

    $addtomasuk = mysqli_query($conn, "insert into masuk (idobat, keterangan) values ($obatnya)");
}
