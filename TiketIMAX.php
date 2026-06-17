<?php
// TiketIMAX.php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    // Properti tambahan spesifik
    private $kacamata3did;
    private $efekGerakFitur;

    public function __construct(array $data) {
        parent::__construct($data);
        
        // Memetakan atribut spesifik dari database
        $this->kacamata3did   = $data['kacamata_3d_id'] ?? 'Tidak Ada / 2D';
        $this->efekGerakFitur = $data['efek_gerak_fitur'] ?? 'Standard Projection';
    }

    // Mengimplementasikan metode hitungTotalHarga
    public function hitungTotalHarga() {
        $biayaTeknologiIMAX = 25000; // Tambahan biaya imersif IMAX & 3D
        return ($this->hargaDasarTiket + $biayaTeknologiIMAX) * $this->jumlah_kursi;
    }

    // Mengimplementasikan metode tampilkanInfoFasilitas
    public function tampilkanInfoFasilitas() {
        return "Studio: IMAX Experience<br>" .
               "Teknologi Proyektor: " . $this->efekGerakFitur . "<br>" .
               "ID Kacamata 3D: " . $this->kacamata3did . "<br>" .
               "Fasilitas: Layar raksasa geometri IMAX, audio bombastis 12-channel.";
    }

    // Getter spesifik
    public function getKacamata3did() { return $this->kacamata3did; }
    public function getEfekGerakFitur() { return $this->efekGerakFitur; }
}