<?php
// Antarmuka Komponen
interface Makanan {
    public function harga(): float;
    public function deskripsi(): string;
}

// Komponen Konkret
class MakananDasar implements Makanan {
    public function harga(): float {
        return 10.0;
    }

    public function deskripsi(): string {
        return "Makanan Dasar";
    }
}

// Dekorator
abstract class DekoratorMakanan implements Makanan {
    protected $makanan;

    public function __construct(Makanan $makanan) {
        $this->makanan = $makanan;
    }

    public function harga(): float {
        return $this->makanan->harga();
    }

    public function deskripsi(): string {
        return $this->makanan->deskripsi();
    }
}

// Dekorator Konkret
class DekoratorKeju extends DekoratorMakanan {
    public function harga(): float {
        return $this->makanan->harga() + 1.5;
    }

    public function deskripsi(): string {
        return $this->makanan->deskripsi() . ", Keju";
    }
}

class DekoratorSaus extends DekoratorMakanan {
    public function harga(): float {
        return $this->makanan->harga() + 0.75;
    }

    public function deskripsi(): string {
        return $this->makanan->deskripsi() . ", Saus";
    }
}

// Fungsi untuk mengubah harga menjadi format dengan .000
function formatHarga(float $harga): string {
    return number_format($harga, 3, '.', '');
}
?>