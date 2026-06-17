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
        // Diubah menjadi + 35000 sesuai logika bisnis baru
        return ($this->jumlah_kursi * $this->hargaDasarTiket) + 35000; 
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

    // =========================================================================
    // METHOD BARU: MENAMPILKAN SEMUA DATA STUDIO IMAX SAJA
    // =========================================================================
    /**
     * Mengambil semua data dari database yang memiliki jenis_studio = 'IMAX'
     * @param PDO $pdo Koneksi database
     * @return array Kumpulan objek TiketIMAX
     */
    public static function displayAllIMAX($pdo) {
        // Query SQL khusus untuk memfilter studio IMAX saja
        $stmt = $pdo->prepare("SELECT * FROM tabel_tiket WHERE jenis_studio = 'IMAX'");
        $stmt->execute();
        $rows = $stmt->fetchAll();

        $daftarTiketIMAX = [];
        foreach ($rows as $row) {
            // Mengubah setiap baris data menjadi objek TiketIMAX konkrit
            $daftarTiketIMAX[] = new self($row);
        }

        return $daftarTiketIMAX;
    }
}