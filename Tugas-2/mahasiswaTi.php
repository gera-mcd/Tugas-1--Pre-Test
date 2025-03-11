<?php
class Mahasiswa {
    public $nim;
    public $nama;

    public function setData($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function tampilData() {
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>";
    }
}

$nim = $_POST['nim'];
$nama = $_POST['nama'];

$mahasiswa = new Mahasiswa();
$mahasiswa->setData($nim, $nama);

echo "<h2>Data Mahasiswa:</h2>";
$mahasiswa->tampilData();
