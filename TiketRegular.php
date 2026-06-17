<?php
// TiketRegular.php
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    // Properti tambahan spesifik
    private $tipeAudio;
    private $lokasiBaris;

    public function __construct(array $data) {
        // Memanggil constructor parent untuk memetakan atribut global
        parent::__construct($data);
        
        // Memetakan atribut spesifik dari database
        $this->tipeAudio   = $data['tipe_audio'] ?? 'Standard Audio';
        $this->lokasiBaris = $data['lokasi_baris'] ?? '-';
    }

    // Mengimplementasikan metode hitungTotalHarga
    public function hitungTotalHarga() {
        $biayaTambahan = 5000; // Contoh biaya penanganan/pajak reguler
        return ($this->hargaDasarTiket + $biayaTambahan) * $this->jumlah_kursi;
    }

    // Mengimplementasikan metode tampilkanInfoFasilitas
    public function tampilkanInfoFasilitas() {
        return "Studio: Regular<br>" .
               "Audio: " . $this->tipeAudio . "<br>" .
               "Kursi: " . $this->lokasiBaris . "<br>" .
               "Fasilitas: Kursi standar bioskop nyaman, layar digital.";
    }

    // Getter spesifik
    public function getTipeAudio() { return $this->tipeAudio; }
    public function getLokasiBaris() { return $this->lokasiBaris; }
}