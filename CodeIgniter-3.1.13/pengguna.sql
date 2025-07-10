-- Membuat tabel pengguna jika belum ada
CREATE TABLE IF NOT EXISTS pengguna (
    p_id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
);

-- Hapus semua data lama
delete from pengguna;

-- Masukkan data baru
INSERT INTO pengguna (nama, username, password) VALUES
('Delvia', 'huruf hijaiyah', 'delvia123'),
('Hiva', 'Huruf', 'hiva123'),
('Karisma', 'Hijaiyah', 'karisma123'); 