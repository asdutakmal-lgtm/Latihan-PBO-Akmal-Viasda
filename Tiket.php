<?php
// Tiket.php

abstract class Tiket {
    // Properti Terenkapsulasi (Protected)
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $hargaDasarTiket; // Dipetakan dari kolom 'harga_dasar_tiket'

    /**
     * Constructor untuk memetakan data langsung dari baris tabel database (Tahap 1)
     * @param array $data Baris data hasil fetch dari tabel_tiket
     */
    public function __construct(array $data) {
        $this->id_tiket        = $data['id_tiket'] ?? null;
        $this->nama_film       = $data['nama_film'] ?? '';
        $this->jadwal_tayang   = $data['jadwal_tayang'] ?? '';
        $this->jumlah_kursi    = (int)($data['jumlah_kursi'] ?? 0);
        $this->hargaDasarTiket = (float)($data['harga_dasar_tiket'] ?? 0.0);
    }

    // =========================================================================
    // METODE ABSTRAK (Wajib diimplementasikan tanpa body oleh class anak)
    // =========================================================================
    
    /**
     * Menghitung total harga tiket setelah ditambah biaya/pajak spesifik studio.
     */
    abstract public function hitungTotalHarga();

    /**
     * Menampilkan informasi fasilitas spesifik yang didapat dari jenis studio terkait.
     */
    abstract public function tampilkanInfoFasilitas();
    
    // =========================================================================
    // Getter (Berguna jika kelas lain ingin mengambil nilai properti protected)
    // =========================================================================
    public function getIdTiket() { return $this->id_tiket; }
    public function getNamaFilm() { return $this->nama_film; }
    public function getJadwalTayang() { return $this->jadwal_tayang; }
    public function getJumlahKursi() { return $this->jumlah_kursi; }
    public function getHargaDasarTiket() { return $this->hargaDasarTiket; }
}