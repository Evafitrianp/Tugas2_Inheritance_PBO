<!DOCTYPE html>
<html>
<head>
    <title>Inheritance Bangun Datar</title>
</head>
<body>
<h1>Menghitung Luas dan Keliling Bangun Datar</h1>

<form method="post" action="">
    <label>Pilih Bangun Datar:</label>
    <select name="shape">
        <option value="Persegi">Persegi</option>
        <option value="PersegiPanjang">Persegi Panjang</option>
        <option value="Segitiga">Segitiga</option>
        <option value="Lingkaran">Lingkaran</option>
    </select>
    <br><br>
    <input type="text" name="side1" placeholder="Sisi1, panjang, alas, jari-jari">
    <input type="text" name="side2" placeholder="Sisi, lebar, tinggi">
    <input type="text" name="side3" placeholder="sisi2 (khusus segitiga)">
    <input type="text" name="side4" placeholder="sisi3 (khusus segitiga)">
    <br><br>
    <input type="submit" value="Hitung">
</form>

<?php
    // Definisi kelas Induk: BangunDatar
    class BangunDatar {
        public function HitungLuas() {
            return 0;
        }
        public function HitungKeliling() {
            return 0;
        }
    }

    // Definisi kelas Anak: Persegi
    class Persegi extends BangunDatar {
        private $sisi;

        public function __construct($sisi) {
            $this->sisi = $sisi;
        }
        public function HitungLuas() {
            return $this->sisi * $this->sisi;
        }
        public function HitungKeliling() {
            return 4 * $this->sisi;
        }
    }

    // Definisi kelas Anak: Persegi Panjang
    class PersegiPanjang extends BangunDatar {
        private $panjang;
        private $lebar;

        public function __construct($panjang, $lebar) {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }
        public function HitungLuas() {
            return $this->panjang * $this->lebar;
        }
        public function HitungKeliling() {
            return 2 * ($this->panjang + $this->lebar);
        }
    }

    // Definisi kelas Anak: Segitiga
    class Segitiga extends BangunDatar {
        private $alas;
        private $tinggi;
        private $sisi2;
        private $sisi3;

        public function __construct($alas, $tinggi, $sisi2, $sisi3) {
            $this->alas = $alas;
            $this->tinggi = $tinggi;
            $this->sisi2 = $sisi2;
            $this->sisi3 = $sisi3;
        }
        public function HitungLuas() {
            return 0.5 * $this->alas * $this->tinggi;
        }
        public function HitungKeliling() {
            return $this->alas + $this->sisi2 + $this->sisi3;
        }
    }

    // Definisi kelas Anak: Lingkaran
    class Lingkaran extends BangunDatar {
        private $jariJari;

        public function __construct($jariJari) {
            $this->jariJari = $jariJari;
        }
        public function HitungLuas() {
            return M_PI * $this->jariJari * $this->jariJari;
        }
        public function HitungKeliling() {
            return 2 * M_PI * $this->jariJari;
        }
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shapeType = $_POST["shape"];
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];
    $side4 = $_POST["side4"];

    if ($shapeType === "Persegi") {
        $shape = new Persegi(floatval($side1));
    } elseif ($shapeType === "PersegiPanjang") {
        $shape = new PersegiPanjang(floatval($side1), floatval($side2));
    } elseif ($shapeType === "Segitiga") {
        $shape = new Segitiga(floatval($side1), floatval($side2), floatval($side3), floatval($side4));
    } elseif ($shapeType === "Lingkaran") {
        $shape = new Lingkaran(floatval($side1));
    }

    if (isset($shape)) {
        echo "<h2>Hasil Perhitungan Luas dan Keliling Bangun Datar:</h2>";
        echo "<h4>Luas Bangun Datar: " . $shape->HitungLuas() . "</h4>";
        echo "<h4>Keliling Bangun Datar: " . $shape->HitungKeliling() . "</h4>";
    }
}
?>

</body>
</html>