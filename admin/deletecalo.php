<?php
     include('includes/koneksi.php');
     $id = $_GET['id'];
     $query4 = "DELETE FROM tabel_calo WHERE id = $id";
     $result4 = mysqli_query($koneksi, $query4);
     if($result4){
        echo "<script>alert('Data Berhasil dihapus!');
        document.location.href = 'calo.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal dihapus!');
        document.location.href = 'calo.php';
        </script>";
    }
?>