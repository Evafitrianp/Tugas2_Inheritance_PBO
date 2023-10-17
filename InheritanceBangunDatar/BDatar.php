<?php

// Class parent (superclass) "BangunDatar"
class BangunDatar {
    // Properties
    protected $luas;
    protected $keliling;

    // Constructor
    public function __construct($luas, $keliling) {
        $this->luas = $luas;
        $this->keliling = $keliling;
    }

    // Method untuk menghitung luas
    public function hitungLuas() {
        return $this->luas;
    }

    // Method untuk menghitung keliling
    public function hitungKeliling() {
        return $this->keliling;
    }
}

// Class child "Persegi" (inherit dari BangunDatar)
class Persegi extends BangunDatar {
    // Constructor
    public function __construct($sisi) {
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;
        parent::__construct($luas, $keliling);
    }
}

// Class child "PersegiPanjang" (inherit dari BangunDatar)
class PersegiPanjang extends BangunDatar {
    // Constructor
    public function __construct($panjang, $lebar) {
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);
        parent::__construct($luas, $keliling);
    }
}

// Class child "Segitiga" (inherit dari BangunDatar)
class Segitiga extends BangunDatar {
    // Constructor
    public function __construct($alas, $tinggi, $sisi2, $sisi3) {
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $alas + $sisi2 + $sisi3;
        parent::__construct($luas, $keliling);
    }
}

// Class child "Lingkaran" (inherit dari BangunDatar)
class Lingkaran extends BangunDatar {
    // Constructor
    public function __construct($jarijari) {
        $luas = M_PI * $jarijari * $jarijari;
        $keliling = 2 * M_PI * $jarijari;
        parent::__construct($luas, $keliling);
    }
}

// Function untuk menampilkan menu pilihan
function tampilkanMenu() {
    echo "Pilihan bangun datar:\n";
    echo "1. Persegi\n";
    echo "2. Persegi Panjang\n";
    echo "3. Segitiga\n";
    echo "4. Lingkaran\n";
}

// Contoh penggunaan
tampilkanMenu();
$choice = readline("Masukkan pilihan Anda: ");
switch ($choice) {
    case 1:
        $sisi = readline("Masukkan sisi Persegi: ");
        $persegi = new Persegi($sisi);
        echo "Luas Persegi: " . $persegi->hitungLuas() . " Keliling: " . $persegi->hitungKeliling() . "\n";
        break;
    case 2:
        $panjang = readline("Masukkan panjang Persegi Panjang: ");
        $lebar = readline("Masukkan lebar Persegi Panjang: ");
        $persegiPanjang = new PersegiPanjang($panjang, $lebar);
        echo "Luas Persegi Panjang: " . $persegiPanjang->hitungLuas() . " Keliling: " . $persegiPanjang->hitungKeliling() . "\n";
        break;
    case 3:
        $alas = readline("Masukkan alas atau sisi kesatu segitiga: ");
        $tinggi = readline("Masukkan tinggi Segitiga: ");
        $sisi2 = readline("Masukkan panjang sisi kedua Segitiga: ");
        $sisi3 = readline("Masukkan panjang sisi ketiga Segitiga: ");
        $segitiga = new Segitiga($alas, $tinggi, $sisi2, $sisi3);
        echo "Luas Segitiga: " . $segitiga->hitungLuas() . " Keliling: " . $segitiga->hitungKeliling() . "\n";
        break;
    case 4:
        $jarijari = readline("Masukkan jari-jari Lingkaran: ");
        $lingkaran = new Lingkaran($jarijari);
        echo "Luas Lingkaran: " . $lingkaran->hitungLuas() . " Keliling: " . $lingkaran->hitungKeliling() . "\n";
        break;
    default:
        echo "Pilihan tidak valid.\n";
}