-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2021 pada 16.51
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisteminformasiterapi`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `form1`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `form1` (
`trx_no` varchar(20)
,`nama` text
,`keluhan` text
,`indikasi_penyakit` text
,`jenis_terapi` text
,`durasi_terapi` int(11)
,`lama_hari_kunjung` int(11)
,`nilai_tali_asih` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan01h`
--

CREATE TABLE `kunjungan01h` (
  `trx_no` varchar(20) NOT NULL,
  `keluhan` text NOT NULL,
  `indikasi_penyakit` text NOT NULL,
  `saran` text NOT NULL,
  `id_pasien` varchar(20) NOT NULL,
  `trx_date` date NOT NULL,
  `nilai_tali_asih` int(11) NOT NULL,
  `lama_hari_kunjung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kunjungan01h`
--

INSERT INTO `kunjungan01h` (`trx_no`, `keluhan`, `indikasi_penyakit`, `saran`, `id_pasien`, `trx_date`, `nilai_tali_asih`, `lama_hari_kunjung`) VALUES
('0291', 'Nyeri Punggung', 'Efek samping anestasik', 'Dikompres', '2050-0001', '2021-07-23', 459999, 10),
('0293', 'Nyeri Punggung', 'Efek samping anestasi', 'Dikompres', '2050-0001', '2021-07-23', 459999, 10),
('0294', 'Ggi', 'sgsgg', 'gsgs', '110-0001', '2021-07-24', 459999, 10),
('21071501', 'Nyeri punggung', 'Keseleo', 'Melakukan terapi sepeda di tempat tidur setiap bangun pagi', '110-0001', '2021-07-15', 100000, 10),
('210724-01', 'Nyeri Punggung', 'Efek samping anestasi', 'Dikompres', '2050-0001', '2021-07-24', 45000, 10),
('210724-02', 'Daerah pinggul nyeri', 'Turun perut', 'Olahraga sepeda', '2050-0002', '2021-07-24', 23000, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan02d`
--

CREATE TABLE `kunjungan02d` (
  `id` int(11) NOT NULL,
  `trx_no` varchar(20) NOT NULL,
  `jenis_terapi` text NOT NULL,
  `durasi_terapi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kunjungan02d`
--

INSERT INTO `kunjungan02d` (`id`, `trx_no`, `jenis_terapi`, `durasi_terapi`) VALUES
(1, '21071501', 'Mediterania', 2),
(2, '0291', 'Mediterania', 1),
(3, '0293', 'Mediterania', 0),
(5, '210724-01', 'Mediterania', 3),
(6, '210724-01', 'Mediterania', 3),
(7, '210724-01', 'Mediterania', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `user` text NOT NULL,
  `loadtanggal` date NOT NULL,
  `loadwaktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `gender`, `tanggal_lahir`, `no_hp`, `alamat`, `user`, `loadtanggal`, `loadwaktu`) VALUES
('0119-0001', 'Sarasa', 'P', '2021-07-24', '085361233090', 'Jalan Trisula, Gondokusuman', 'Jean', '2021-07-24', '21:40:00'),
('110-0001', 'Desi Natalia', 'P', '2021-07-01', '0898678768', 'Jalan Merpati No. 100 A, Yogyakarta', 'Jean', '2021-07-16', '12:03:09'),
('2050-0001', 'Telly Rattu', 'P', '1967-07-18', '085361233090', 'Jalan Pantai Timur (Perumahan Taman Hako Indah Jalan Bunga No 38)', 'lala', '2021-07-23', '18:55:00'),
('2050-0002', 'Daesah', 'L', '2014-01-27', '085361233090', 'Jalan Pantai Timur (Perumahan Taman Hako Indah Jalan Bunga No 38)', 'Aan', '2021-07-24', '21:36:00'),
('2050-0003', 'Kaesang', 'L', '1990-02-13', '0812383891', 'Gang Pantai No 213', 'Jean', '2021-07-24', '21:42:00');

-- --------------------------------------------------------

--
-- Struktur untuk view `form1`
--
DROP TABLE IF EXISTS `form1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `form1`  AS SELECT `ka`.`trx_no` AS `trx_no`, `pas`.`nama` AS `nama`, `ka`.`keluhan` AS `keluhan`, `ka`.`indikasi_penyakit` AS `indikasi_penyakit`, `kb`.`jenis_terapi` AS `jenis_terapi`, `kb`.`durasi_terapi` AS `durasi_terapi`, `ka`.`lama_hari_kunjung` AS `lama_hari_kunjung`, `ka`.`nilai_tali_asih` AS `nilai_tali_asih` FROM ((`kunjungan01h` `ka` join `pasien` `pas` on(`ka`.`id_pasien` = `pas`.`id_pasien`)) join `kunjungan02d` `kb` on(`ka`.`trx_no` = `kb`.`trx_no`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kunjungan01h`
--
ALTER TABLE `kunjungan01h`
  ADD PRIMARY KEY (`trx_no`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indeks untuk tabel `kunjungan02d`
--
ALTER TABLE `kunjungan02d`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trx_no` (`trx_no`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kunjungan02d`
--
ALTER TABLE `kunjungan02d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kunjungan01h`
--
ALTER TABLE `kunjungan01h`
  ADD CONSTRAINT `kunjungan01h_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Ketidakleluasaan untuk tabel `kunjungan02d`
--
ALTER TABLE `kunjungan02d`
  ADD CONSTRAINT `kunjungan02d_ibfk_1` FOREIGN KEY (`trx_no`) REFERENCES `kunjungan01h` (`trx_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
