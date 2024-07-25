-- Membuat database
CREATE DATABASE login_system;

-- Menggunakan database yang baru dibuat
USE login_system;

-- Membuat tabel users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Membuat tabel berita
CREATE TABLE berita (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul_berita VARCHAR(100) NOT NULL,
    isi_berita TEXT NOT NULL,
    link_berita VARCHAR(255),
    kategori VARCHAR(50)
);
