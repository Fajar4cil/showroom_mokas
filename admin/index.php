<?php include('includes/koneksi.php'); ?>

<?php
session_start();

// Memeriksa apakah user sudah login dengan role admin
if (!isset($_SESSION['user_id']) || $_SESSION['rolee'] != 'admin') {
  header('Location: login.php');
  exit;
}
// Kode untuk halaman admin
?>

<?php include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>

<?php include('includes/sidebar.php'); ?>

<?php include('includes/content.php'); ?>

<?php include('includes/footer.php'); ?>