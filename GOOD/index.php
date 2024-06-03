<?php
include 'decorator_good.php';

// Usage
$pesanan = new MakananDasar();
echo "<p>Harga: Rp." . formatHarga($pesanan->harga()) . ", Deskripsi: " . $pesanan->deskripsi() . "</p>";

$pesanan = new DekoratorKeju($pesanan);
echo "<p>Harga: Rp." . formatHarga($pesanan->harga()) . ", Deskripsi: " . $pesanan->deskripsi() . "</p>";

$pesanan = new DekoratorSaus($pesanan);
echo "<p>Harga: Rp." . formatHarga($pesanan->harga()) . ", Deskripsi: " . $pesanan->deskripsi() . "</p>";
?>