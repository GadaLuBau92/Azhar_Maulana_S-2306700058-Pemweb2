<?php

// Class Induk
class SivitasAkademik {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

// Class Anak 1
class Dosen extends SivitasAkademik {
    private $nidn;

    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    public function tampilkanData() {
        echo "=== Data Dosen ===<br>";
        echo "Nama: " . $this->getNama() . "<br>";
        echo "NIDN: " . $this->getNidn() . "<br><br>";
    }
}

// Class Anak 2
class Mahasiswa extends SivitasAkademik {
    private $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function tampilkanData() {
        echo "=== Data Mahasiswa ===<br>";
        echo "Nama: " . $this->getNama() . "<br>";
        echo "NIM: " . $this->getNim() . "<br><br>";
    }
}

// Instansiasi Object
$dosen1 = new Dosen("Pak Budi Santoso", "1234567890");
$mahasiswa1 = new Mahasiswa("Azhar Maulana", "20200498");

// Cetak Data
$dosen1->tampilkanData();
$mahasiswa1->tampilkanData();

?>