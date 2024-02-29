<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'db_mokas');

    $query = "SELECT * FROM tabel_motor";
    $query2 = "SELECT * FROM tabel_pembelian";
    $query3 = "SELECT * FROM tabel_konsumen";
    $query4 = "SELECT * FROM tabel_calo";

    $result = mysqli_query($koneksi, $query);
    $result2 = mysqli_query($koneksi, $query2);
    $result3 = mysqli_query($koneksi, $query3);
    $result4 = mysqli_query($koneksi, $query4);
?>