<?php

class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;
    private $ips = [];
    private $ipk;

    public function __construct($nama, $nim, $jurusan, $ips) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->ips = $ips;
        $this->ipk = $this->hitungIPK();
    }
    public function cetakInfo() {
        echo "Nama: $this->nama<br>";
        echo "NIM: $this->nim<br>";
        echo "Jurusan: $this->jurusan<br>";
        echo "IPK: " . number_format($this->ipk, 2) . "<br>";
    }
    private function hitungIPK() {
        return array_sum($this->ips) / count($this->ips);
    }
}

class MahasiswaDiploma extends Mahasiswa {
    private $judulProyekAkhir;
    private $tahunSelesai;

    public function __construct($nama, $nim, $jurusan, $ips, $judulProyekAkhir, $tahunSelesai) {
        parent::__construct($nama, $nim, $jurusan, $ips);
        $this->judulProyekAkhir = $judulProyekAkhir;
        $this->tahunSelesai = $tahunSelesai;
    }
    public function cetakInfo() {
        parent::cetakInfo();
        echo "Judul Proyek Akhir: $this->judulProyekAkhir<br>";
        echo "Tahun Penyelesaian: $this->tahunSelesai<br>";
    }
}

class MahasiswaSarjana extends Mahasiswa {
    private $judulSkripsi;
    private $tahunSelesai;

    public function __construct($nama, $nim, $jurusan, $ips, $judulSkripsi, $tahunSelesai) {
        parent::__construct($nama, $nim, $jurusan, $ips);
        $this->judulSkripsi = $judulSkripsi;
        $this->tahunSelesai = $tahunSelesai;
    }
    public function cetakInfo() {
        parent::cetakInfo();
        echo "Judul Skripsi: $this->judulSkripsi<br>";
        echo "Tahun Penyelesaian: $this->tahunSelesai<br>";
    }
}

class MahasiswaMagister extends Mahasiswa {
    private $judulTesis;
    private $tahunSelesai;

    public function __construct($nama, $nim, $jurusan, $ips, $judulTesis, $tahunSelesai) {
        parent::__construct($nama, $nim, $jurusan, $ips);
        $this->judulTesis = $judulTesis;
        $this->tahunSelesai = $tahunSelesai;
    }
    public function cetakInfo() {
        parent::cetakInfo();
        echo "Judul Tesis: $this->judulTesis<br>";
        echo "Tahun Penyelesaian: $this->tahunSelesai<br>";
    }
}

class Jurusan {
    private $namaJurusan;
    private $daftarMahasiswa = [];

    public function __construct($namaJurusan) {
        $this->namaJurusan = $namaJurusan;
    }
    public function tambahMahasiswa(Mahasiswa $mhs) {
        $this->daftarMahasiswa[] = $mhs;
    }
    public function cetakDaftarMahasiswa() {
        echo "Daftar Mahasiswa di Jurusan $this->namaJurusan:<br>";
        foreach ($this->daftarMahasiswa as $mahasiswa) {
            $mahasiswa->cetakInfo();
            echo "<br>";
        }
    }
}

$ipsMhs1 = [3.5, 3.6, 3.7, 3.8];
$mhs1 = new MahasiswaDiploma("Elaine Hartanto", "0075", "Manajemen Informatika (D3)", $ipsMhs1, "Rancang Bangun Aplikasi Helpdesk Berbasis Web Menggunakan Framework Laravel", 2021);

$ipsMhs2 = [3.8, 3.9, 4.0];
$mhs2 = new MahasiswaSarjana("Ali Luthfianto", "0069", "Sistem Informasi (S1)", $ipsMhs2, "Pemanfaatan Data Analytics untuk Pengambilan Keputusan dalam Strategi Pemasaran", 2026);

$ipsMhs3 = [3.9, 4.0];
$mhs3 = new MahasiswaMagister("Rani Aisyah", "98765", "Teknik Informatika (S2)", $ipsMhs3, "Analisis dan Desain Uang Elektronik Serta Penerapannya ", 2023);

$jurusanTeknikInformatika = new Jurusan("Teknik Informatika");
$jurusanSistemInformasi = new Jurusan("Sistem Informasi");
$jurusanManajemenInformatika = new Jurusan("Manajemen Informatika");

$jurusanTeknikInformatika->tambahMahasiswa($mhs3);
$jurusanSistemInformasi->tambahMahasiswa($mhs2);
$jurusanManajemenInformatika->tambahMahasiswa($mhs1);

$jurusanTeknikInformatika->cetakDaftarMahasiswa();
$jurusanSistemInformasi->cetakDaftarMahasiswa();
$jurusanManajemenInformatika->cetakDaftarMahasiswa();

?>
