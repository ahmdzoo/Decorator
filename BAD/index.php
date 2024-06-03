<?php
include 'decorator_bad.php';

// Penggunaan
$pesanan = new PesananMakanan();
$pesanan->tampilkan();

$pesanan->tambahkanKeju();
$pesanan->tampilkan();

$pesanan->tambahkanSaus();
$pesanan->tampilkan();
?>