<?php
     include('includes/koneksi.php');
     $id = $_GET['id'];
     $query = "DELETE FROM tabel_motor WHERE id = $id";
     $result = mysqli_query($koneksi, $query);
     if($result){
        echo "<script>alert('Data Berhasil dihapus!');
        document.location.href = 'motormatic.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal dihapus!');
        document.location.href = 'motormatic.php';
        </script>";
    }
?>