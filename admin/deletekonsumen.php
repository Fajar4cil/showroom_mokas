<?php
     include('includes/koneksi.php');
     $id = $_GET['id'];
     $query3 = "DELETE FROM tabel_konsumen WHERE id = $id";
     $result3 = mysqli_query($koneksi, $query3);
     if($result){
        echo "<script>alert('Data Berhasil dihapus!');
        document.location.href = 'konsumen.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal dihapus!');
        document.location.href = 'konsumen.php';
        </script>";
    }
?>