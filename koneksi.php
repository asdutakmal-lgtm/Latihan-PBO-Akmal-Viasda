<?php
// koneksi.php

$host     = "localhost";
$username = "root";             // Silakan sesuaikan dengan username MySQL Anda
$password = "";                 // Silakan sesuaikan dengan password MySQL Anda
$database = "db_latihan_pbo_ti1c_akmalviasda"; // Ganti dengan nama database tempat tabel_tiket berada

try {
    // Inisialisasi koneksi PDO
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
    
    // Set error mode ke Exception untuk mempermudah tracking error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set default fetch mode ke Associative Array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    // Hentikan script jika koneksi gagal dan tampilkan pesannya
    die("Koneksi ke database gagal: " . $e->getMessage());
}