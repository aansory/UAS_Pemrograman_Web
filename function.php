<?php
session_start();

$conn = mysqli_connect("localhost","root","","uas");

if(isset($_POST['addnewbuku'])){
    $namabuku = $_POST['namabuku'];
    $keterangan = $_POST['keterangan'];
    $jumlah = $_POST['jumlah'];

    $addtotable = mysqli_query($conn, "insert into buku (namabuku, keterangan, jumlah) values('$namabuku','$keterangan','$jumlah')");
    if($addtotable){
        header('location:index.php');
    }else {
        echo 'gagal';
        header('location:index.php');
    }
}

?>