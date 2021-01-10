-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2021 pada 10.01
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gisibadah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_tempatibadah` int(11) NOT NULL,
  `gambar_galeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_tempatibadah`, `gambar_galeri`) VALUES
(11, 63, '9. masjid nasional al akbar surabaya2.jpg'),
(12, 64, 'Masjid A.Azis Surabaya2.jpg'),
(13, 65, 'Masjid Baiturrozaq SIER Surabaya3.jpg'),
(14, 67, 'Masjid Peneleh2.jpg'),
(15, 67, 'Masjid Peneleh3.jpeg'),
(16, 69, 'Gereja Katolik Kelahiran Santa Perawan Maria3.jpg'),
(17, 72, 'pura Sono Panca Giri (1).jpg'),
(18, 71, 'Pura Tunggal Jati.jpg'),
(19, 69, '220px-Inner_view_Kelsapa_Surabaya.jpg'),
(20, 68, 'Gereja Katedral Hati Kudus Yesus, Surabaya4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_ibadah`
--

CREATE TABLE `tempat_ibadah` (
  `no` int(11) NOT NULL,
  `nama_mesjid` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempat_ibadah`
--

INSERT INTO `tempat_ibadah` (`no`, `nama_mesjid`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `gambar`) VALUES
(56, 'Masjid Al Falah', 'Jl. Raya Darmo No.137 A', 'Darmo', 'Genteng', 'Surabaya', 'Jawa Timur', '1. al falah.jpeg'),
(57, 'Masjid Rahmat', 'Jl. Kembang Kuning No.79-81', 'Darmo', 'Wonokromo', 'Surabaya', 'Jawa Timur', '2. masjid rahmat.jpg'),
(58, 'Masjid Muhammad Cheng Hoo', 'Jl. Gading No.2', 'Ketabang', 'Genteng', 'Surabaya', 'Jawa Timur', '3. Masjid Muhammad Cheng Ho.jpg'),
(59, 'Masjid Agung Sunan Ampel', 'Jl. Petukangan I', 'Ampel', 'Semampir', 'Surabaya', 'Jawa Timur', '4. masjid agung sunan ampel.jpg'),
(60, 'Masjid Kemayoran Surabaya', 'Jl. Indrapura No.2', 'Kemayoran', 'Krembangan', 'Surabaya', 'Jawa Timur', '5. masjid kemayoran.jpg'),
(61, 'Masjid Al-Muhajirin Pemerintah Kota Surabaya', 'Jl. Jimerto No.25-27', 'Ketabang', 'Genteng', 'Surabaya', 'Jawa Timur', '6. masjid muhajirin.jpg'),
(62, 'Masjid Al Irsyad Surabaya', 'Jl. Sultan Iskandar Muda No.46', 'Ujung', 'Semampir', 'Surabaya', 'Jawa Timur', '7. masjid al irsyad surabaya.jpg'),
(63, 'Masjid Nasional Al-Akbar Surabaya', 'Jl. Mesjid Agung Tim. No.1', 'Pagesangan', 'Jambangan', 'Surabaya', 'Jawa Timur', '9. masjid nasional al akbar surabaya.jpg'),
(64, 'Masjid A.Azis Surabaya', 'Jl. Nginden Intan Sel. No.9', 'Nginden Jangkungan', 'Sukolilo', 'Surabaya', 'Jawa Timur', 'Masjid A.Azis Surabaya.jpg'),
(65, 'Masjid Baiturrozaq SIER Surabaya) ', 'Jl. Rungkut Industri IV', 'Rungkut Tengah', 'Gn. Anyar', 'Surabaya', 'Jawa Timur', 'Masjid Baiturrozaq SIER Surabaya2.jpg'),
(66, 'Masjid Muhajirin Kanginan', 'Jl. Kanginan II No.18', 'Ketabang', 'Genteng', 'Surabaya', 'Jawa Timur', 'Masjid Muhajirin Kanginan.jpg'),
(67, 'Masjid Peneleh', 'Jl. Peneleh V No.41, RT.006/RW.03', 'Peneleh', 'Genteng', 'Surbaya', 'Jawa Timur', 'Masjid Peneleh.jpeg'),
(68, 'Gereja Katedral Hati Kudus Yesus', 'Jl. Polisi Istimewa No.15', 'Keputran', 'Kec. Tegalsari', 'Surabaya', 'Jawa Timur', 'Gereja Katedral Hati Kudus Yesus, Surabaya2.jpg'),
(69, 'Gereja Katolik Kelahiran Santa Perawan Maria', 'Jl. Kepanjen No.4-6', 'Krembangan Selatan', 'Krembangan', 'Surabaya', 'Jawa Timur', 'Gereja Katolik Kelahiran Santa Perawan Maria.jpg'),
(70, 'Gereja JKI Immanuel Surabaya', 'Jl. Simorejo Sari A gang V no. 18A', 'Simomulyo', 'Sukomanunggal', 'Surabaya', 'Jawa Timur', 'Gereja JKI Imanuel Surabaya2.jpg'),
(71, 'Pura Tunggal Jati Bulak Banteng ', 'Jl. Bulak Banteng Lor Gg. II', 'Bulak Banteng', 'Kenjeran', 'Surabaya', 'Jawa Timur', 'Pura Tunggal Jati2.jpg'),
(72, 'Pura Sono Panca Giri', 'Jl. Kupang Baru III No.26', 'Sonokwijenan', 'Sukomanunggal', 'Surabaya', 'Jawa Timur', 'Pura Sono Panca Giri.jpg'),
(73, 'Pura Tirta Empul Babatan', 'Jl. Babatan III No.10', 'Babatan', 'Wiyung', 'Surabaya', 'Jawa Timur', 'Pura tirta Empul Babatan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `fk_galeri_ibadah` (`id_tempatibadah`);

--
-- Indeks untuk tabel `tempat_ibadah`
--
ALTER TABLE `tempat_ibadah`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tempat_ibadah`
--
ALTER TABLE `tempat_ibadah`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `fk_galeri_ibadah` FOREIGN KEY (`id_tempatibadah`) REFERENCES `tempat_ibadah` (`no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
