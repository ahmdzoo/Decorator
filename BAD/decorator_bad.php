<?php
class PesananMakanan {
    private $harga;
    private $deskripsi;
    private $tambahanKeju;
    private $tambahanSaus;

    public function __construct() {
        $this->harga = 10.0;
        $this->deskripsi = "Makanan Dasar";
        $this->tambahanKeju = false;
        $this->tambahanSaus = false;
    }

    public function tambahkanKeju() {
        if (!$this->tambahanKeju) {
            $this->harga += 1.5;
            $this->deskripsi .= ", Keju";
            $this->tambahanKeju = true;
        }
    }

    public function tambahkanSaus() {
        if (!$this->tambahanSaus) {
            $this->harga += 0.75;
            $this->deskripsi .= ", Saus";
            $this->tambahanSaus = true;
        }
    }

    public function tampilkan() {
        echo "<p>Harga: Rp." . formatHarga($this->harga) . ", Deskripsi: " . $this->deskripsi . "</p>";
    }
}

function formatHarga(float $harga): string {
    return number_format($harga, 3, '.', '');
}
