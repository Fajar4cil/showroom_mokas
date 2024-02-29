<?php
     include('includes/koneksi.php');
     $id = $_GET['id'];
     $query2 = "DELETE FROM tabel_pembelian WHERE id = $id";
     $result2 = mysqli_query($koneksi, $query2);
     if($result2){
        echo "<script>alert('Data Berhasil dihapus!');
        document.location.href = 'pembelian.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal dihapus!');
        document.location.href = 'pembelian.php';
        </script>";
    }
?>