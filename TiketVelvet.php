<?php
// TiketVelvet.php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    // Properti tambahan spesifik
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct(array $data) {
        parent::__construct($data);
        
        // Memetakan atribut spesifik dari database
        $this->bantalSelimutPack = $data['bantal_selimut_pack'] ?? 'Standard Pillow';
        $this->layananButler     = $data['layanan_butler'] ?? 'No Butler';
    }

    // Mengimplementasikan metode hitungTotalHarga
    public function hitungTotalHarga() {
        $biayaPremiumService = 75000; // Tambahan biaya kenyamanan kasur & butler
        return ($this->hargaDasarTiket + $biayaPremiumService) * $this->jumlah_kursi;
    }

    // Mengimplementasikan metode tampilkanInfoFasilitas
    public function tampilkanInfoFasilitas() {
        return "Studio: Velvet Class (Premium)<br>" .
               "Fasilitas Tidur: " . $this->bantalSelimutPack . "<br>" .
               "Layanan Butler: " . $this->layananButler . "<br>" .
               "Fasilitas: Sofa bed mewah, tombol panggil pelayan (butler), akses lounge eksklusif.";
    }

    // Getter spesifik
    public function getBantalSelimutPack() { return $this->bantalSelimutPack; }
    public function getLayananButler() { return $this->layananButler; }
}