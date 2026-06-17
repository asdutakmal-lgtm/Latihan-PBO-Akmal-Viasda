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

    // Mengimplementasikan metode hitungTotalHarga (Disesuaikan ke Logika Bisnis Baru)
    public function hitungTotalHarga() {
        // Tarif standar murni tanpa biaya tambahan fasilitas
        return $this->jumlah_kursi * $this->hargaDasarTiket;
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

    // =========================================================================
    // METHOD BARU: MENAMPILKAN SEMUA DATA STUDIO REGULAR SAJA
    // =========================================================================
    /**
     * Mengambil semua data dari database yang memiliki jenis_studio = 'Regular'
     * @param PDO $pdo Koneksi database
     * @return array Kumpulan objek TiketRegular
     */
    public static function displayAllRegular($pdo) {
        // Query SQL khusus untuk memfilter studio Regular saja
        $stmt = $pdo->prepare("SELECT * FROM tabel_tiket WHERE jenis_studio = 'Regular'");
        $stmt->execute();
        $rows = $stmt->fetchAll();

        $daftarTiketRegular = [];
        foreach ($rows as $row) {
            // Mengubah setiap baris data menjadi objek TiketRegular konkrit
            $daftarTiketRegular[] = new self($row);
        }

        return $daftarTiketRegular;
    }
}