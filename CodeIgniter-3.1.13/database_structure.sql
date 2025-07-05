-- Membuat database
CREATE DATABASE IF NOT EXISTS tugas_delvia;
USE tugas_delvia;

-- Membuat tabel pengguna
CREATE TABLE IF NOT EXISTS pengguna (
    p_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    password VARCHAR(50)
);

-- Membuat tabel huruf_hijaiyah
CREATE TABLE IF NOT EXISTS huruf_hijaiyah (
    hh_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    huruf_1 VARCHAR(10),
    huruf_2 VARCHAR(35),
    h_sound VARCHAR(50),
    h_cbg VARCHAR(15),
    h_text TEXT,
    tgl_input DATE,
    deskripsi MEDIUMTEXT
); 