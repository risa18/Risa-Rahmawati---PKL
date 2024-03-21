-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2024 pada 16.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_apps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_izinusaha`
--

CREATE TABLE `data_izinusaha` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = pending, 1 = approve, 2 = batal approve',
  `id_penduduk` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_izinusaha`
--

INSERT INTO `data_izinusaha` (`id`, `no_surat`, `nik`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `pekerjaan`, `nama_usaha`, `status`, `id_penduduk`, `tanggal_surat`) VALUES
(8, 'SKU-8798/02/24', '6211320990001', 'Muhammad Figo', '2000-02-29', 'Laki-Laki', 'Islam', 'Jln. Trans Kalimatan Rt. 06 Desa  Jabiren Kec. amatan Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'mahasiswa', 'Sembako', 1, 17, '2024-02-01'),
(9, 'SKU-4999/02/24', '6211075812990001', 'Samsul', '1997-12-10', 'Laki-Laki', 'Islam', 'Jln. Trans Kalimatan Rt. 06 Desa  Jabiren Kec. amatan Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Swasta', 'Toko Kue Kering', 1, 16, '2024-02-01'),
(10, 'SKU-8344/02/24', '6211071204120006', 'Nur Anisa S,pd', '1993-12-19', 'Perempuan', 'Islam', 'Jln.Trans Kalimatan Rt.06 Desa Jabiren', 'Ibu Rumah Tangga', 'Toko Kue Kering', 1, 24, '2024-02-08'),
(11, 'SKU-9462/02/24', '621107581288002', 'Putry Agustin S.Kom', '1995-04-18', 'Perempuan', 'Islam', 'Jln.Trans Kalimatan Rt.04 Desa Jabiren ', 'Swasta', 'Laundry', 1, 20, '2024-02-08'),
(12, 'SKU-7740/02/24', '6211071358970012', 'Rony Raditia S.pd', '1997-12-01', 'Laki-Laki', 'Kristen', 'Jln. Trans Kalimatan Rt. 07 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'PNS', 'Bengkel', 1, 26, '2024-02-17'),
(13, 'SKU-8996/02/24', '6211078512110012', 'Akhmad Heriamsyah', '1999-09-19', 'Laki-Laki', 'Islam', 'Jln. Trans Kalimatan Rt. 03 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Swasta', 'Fotocopy', 1, 32, '2024-02-17'),
(14, 'SKU-4834/02/24', '6211071204189990', 'Fridah Wahyu Saputri', '1996-01-22', 'Perempuan', 'Islam', 'Jln. Trans Kalimatan Rt. 07 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Ibu Rumah Tangga', 'Ruko Baju', 1, 35, '2024-02-17'),
(15, 'SKU-5358/02/24', '6211142523010102', 'Leni Yunani', '1987-08-28', 'Perempuan', 'Kristen', 'Jln.Trans Kalimatan Rt.02  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Ibu Rumah Tangga', 'Warung Sayur', 1, 37, '2024-02-17'),
(16, 'SKU-5349/02/24', '6211009891200304', 'Danang', '1992-10-21', 'Laki-Laki', 'Islam', 'Jln.Trans Kalimatan Rt.06 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Swasta', 'Warung Lalapan', 1, 42, '2024-02-17'),
(17, 'SKU-8687/02/24', '6211071204120012', 'Sumiati', '1987-10-06', 'Perempuan', 'Kristen', 'Jln.Trans Kalimatan Rt.04 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Ibu Rumah Tangga', 'Warung Makan', 1, 43, '2024-02-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelahiran`
--

CREATE TABLE `data_kelahiran` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = pending, 1 = approve, 2 = batal approve',
  `id_penduduk` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kelahiran`
--

INSERT INTO `data_kelahiran` (`id`, `no_surat`, `hari`, `tanggal`, `tempat`, `nama_anak`, `nama_ibu`, `nama_ayah`, `alamat`, `status`, `id_penduduk`, `tanggal_surat`) VALUES
(11, 'SK-4459/02/24', 'Senin', '2024-01-31', 'Pulang Pisau', 'Muhammad Zaky', 'Sundari', 'Heri', 'Jln.Trans Kalimatan Rt.06 Desa Jabiren Raya', 1, 19, '2024-02-01'),
(12, 'SK-8712/02/24', 'Selasa', '2024-01-28', 'Pulang Pisau', 'Putry Armaira ', 'Rusmiati', 'Budiono', 'Jln.Trans Kalimatan Rt.06 Desa Jabiren ', 1, 23, '2024-02-02'),
(13, 'SK-2820/02/24', 'Kamis', '2024-12-18', 'Palangkaraya', 'Mikey Anggara', 'Berlian Mustika', 'Dimas', 'Jln. Trans Kalimatan Rt. 03 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 1, 31, '2024-02-17'),
(14, 'SK-1154/02/24', 'Minggu', '2024-02-15', 'Pulang Pisau', 'Muhammad Fajar Nugoroho', 'Nur Anisa S,pd', 'Fajar Muhaammad', 'Jln. Trans Kalimatan Rt. 05 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 1, 24, '2024-02-17'),
(15, 'SK-5099/02/24', 'Rabu', '2023-04-12', 'Jabiren Raya', 'Arcy Vitolaka Putry', 'Fridah Wahyu Saputri', 'Dhani', 'Jln. Trans Kalimatan Rt. 07 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 1, 35, '2024-02-17'),
(16, 'SK-8584/02/24', 'Senin', '2024-01-18', 'Pulang Pisau', 'Akhmad  wahyu ajie', 'Fridah Wahyu Saputri', 'Ajie', 'Jln. Trans Kalimatan Rt. 07 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 1, 35, '2024-02-17'),
(17, 'SK-8149/02/24', 'Selasa', '2024-01-20', 'Banjarmasin', 'David', 'MIla', 'Danang', 'Jln.Trans Kalimatan Rt.01 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 1, 41, '2024-02-17'),
(18, 'SK-6832/02/24', 'Minggu', '2023-12-11', 'Palangkaraya', 'Naira Pitaloka', 'syaim', 'Muhammad Figo', 'Jln. Trans Kalimatan Rt. 01 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 1, 17, '2024-02-17'),
(19, 'SK-5026/02/24', 'Jumat', '2023-09-07', 'Banjarbaru', 'Rahmat', 'Sumiati', 'Merno', 'Jln.Trans Kalimatan Rt.04 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 1, 43, '2024-02-17'),
(20, 'SK-5123/02/24', 'Sabtu', '2023-10-08', 'Malang', 'Dinda', 'Choirun Nisa', 'Samsudin', 'Jln.Trans Kalimatan Rt.03 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 1, 47, '2024-02-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kematian`
--

CREATE TABLE `data_kematian` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `sebab_kematian` varchar(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = pending, 1 = approve',
  `id_penduduk` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kematian`
--

INSERT INTO `data_kematian` (`id`, `no_surat`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `tanggal_kematian`, `sebab_kematian`, `status`, `id_penduduk`, `tanggal_surat`) VALUES
(12, 'SKM-8631/02/24', 'Sumanto', '1998-01-02', 'Laki-Laki', 'Islam', '2023-01-05', 'sakit', 1, 18, '2024-02-08'),
(14, 'SKM-3563/02/24', 'Sarman', '1963-04-18', 'Laki-Laki', 'Islam', '2023-04-18', 'Sakit', 1, 29, '2024-02-17'),
(15, 'SKM-9719/02/24', 'Kardiyanto', '1985-06-19', 'Laki-Laki', 'Hindu', '2023-12-18', 'Kecelakan', 1, 25, '2024-02-17'),
(16, 'SKM-6226/02/24', 'Muliyono', '1973-10-25', 'Laki-Laki', 'Islam', '2024-01-06', 'Sakit', 1, 33, '2024-02-17'),
(17, 'SKM-4598/02/24', 'Sundari', '1999-04-12', 'Perempuan', 'Islam', '2024-02-01', 'sakit', 1, 19, '2024-02-17'),
(18, 'SKM-3152/02/24', 'Asep Sutrajo', '1992-05-03', 'Laki-Laki', 'Kristen', '2024-02-01', 'Sakit', 1, 34, '2024-02-17'),
(19, 'SKM-7171/02/24', 'Tri Yanto', '1990-07-17', 'Laki-Laki', 'Islam', '2024-02-10', 'Sakit', 1, 39, '2024-02-17'),
(20, 'SKM-4850/02/24', 'Steven', '2000-12-13', 'Laki-Laki', 'Kristen', '2023-12-02', 'Kecelakan lintas', 1, 45, '2024-02-17'),
(21, 'SKM-1257/02/24', 'Seneri', '1980-03-20', 'Perempuan', 'Islam', '2023-08-11', 'sakit', 1, 44, '2024-02-17'),
(22, 'SKM-3139/02/24', 'Meilani', '1998-01-31', 'Laki-Laki', 'Islam', '2024-01-12', 'Sakit', 1, 46, '2024-02-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = pending, 1 = approve, 2 = batal approve',
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat`, `status_perkawinan`, `pendidikan`, `status`, `id_pengguna`) VALUES
(16, '6211075812990001', 'Samsul', 'Pulang pisau', '1997-12-10', 'Laki-Laki', 'Islam', 'Swasta', 'Jln. Trans Kalimatan Rt. 06 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SMA', 1, 6),
(17, '6211065811990004', 'Muhammad Figo', 'Pulang ', '2000-02-29', 'Laki-Laki', 'Islam', 'mahasiswa', 'Jln. Trans Kalimatan Rt. 01 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SMA', 1, 9),
(18, '621112990201002', 'Sumanto', 'Jabiren Raya', '1998-01-02', 'Laki-Laki', 'Islam', 'petani', 'Jln. Trans Kalimatan Rt. 01 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SMA', 1, 7),
(19, '621107120990004', 'Sundari', 'Pulang Pisau', '1999-04-12', 'Perempuan', 'Islam', 'Ibu Rumah Tangga', 'Jln. Trans Kalimatan Rt. 01 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SMA', 1, 20),
(20, '621107581288002', 'Putry Agustin S.Kom', 'Kapuas', '1995-04-18', 'Perempuan', 'Islam', 'Swasta', 'Jln. Trans Kalimatan Rt. 04 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'Sarjana', 1, 11),
(21, '6211075812990012', 'Ade Shinta', 'Pulang Pisau', '1997-11-12', 'Perempuan', 'Kristen', 'Ibu Rumah Tangga', 'Jln. Trans Kalimatan Rt.02 Desa Jabiren Raya', 'Kawin', 'SMA', 2, 16),
(22, '621107120412012', 'Seneri', 'Surabaya', '1969-12-05', 'Perempuan', 'Islam', 'Ibu Rumah Tangga', 'Jln. Trans Kalimatan Rt. 04 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'SD', 2, 19),
(23, '6211071204120015', 'Rusmiati', 'Palangkaraya', '1982-12-09', 'Perempuan', 'Kristen', 'Ibu Rumah Tangga', 'Jln. Trans Kalimatan Rt. 06 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SD', 1, 23),
(24, '6211071204120006', 'Nur Anisa S,pd', 'Kapuas', '1993-12-19', 'Perempuan', 'Islam', 'Ibu Rumah Tangga', 'Jln. Trans Kalimatan Rt. 05 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'Sarjana', 1, 25),
(25, '621107591290004', 'Kardiyanto', 'Pulang Pisau', '1985-06-19', 'Laki-Laki', 'Hindu', 'Petani', 'Jln. Trans Kalimatan Rt. 04 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SMA', 1, 13),
(26, '6211071358970012', 'Rony Raditia S.pd', 'Banjarmasin', '1997-12-01', 'Laki-Laki', 'Kristen', 'PNS', 'Jln. Trans Kalimatan Rt. 07 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'Sarjana', 1, 8),
(27, '6211071204120019', 'Devian Andhika', 'PangkalanBun', '2000-12-18', 'Perempuan', 'Kristen', 'Mahasiswa', 'Jln. Trans Kalimatan Rt. 05 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SMA', 1, 15),
(28, '6211075812990001', 'Risa Rahmawati', 'Malang', '1999-12-18', 'Perempuan', 'Islam', 'mahasiswa', 'Jln. Trans Kalimatan Rt. 02 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SMA', 1, 14),
(29, '6211061211580009', 'Sarman', 'Sampit', '1963-04-18', 'Laki-Laki', 'Islam', 'Petani', 'Jln. Trans Kalimatan Rt. 02 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'SD', 1, 18),
(30, '6211081268880002', 'Sulaiman Ansari', 'Pelihari', '2000-10-07', 'Laki-Laki', 'Islam', 'mahasiswa', 'Jln. Trans Kalimatan Rt. 07 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SMA', 1, 12),
(31, '6211591200111000', 'Berlian Mustika', 'Banjarmasin', '1998-12-20', 'Perempuan', 'Kristen', 'swasta', 'Jln. Trans Kalimatan Rt. 03 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'Sarjana', 1, 17),
(32, '6211078512110012', 'Akhmad Heriamsyah', 'Banjarmasin', '1999-09-19', 'Laki-Laki', 'Islam', 'Swasta', 'Jln. Trans Kalimatan Rt. 03 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SMA', 1, 10),
(33, '6211899908120009', 'Muliyono', 'Jabiren Raya', '1973-10-25', 'Laki-Laki', 'Islam', 'Petani', 'Jln. Trans Kalimatan Rt. 07 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Cerai', 'SMA', 1, 24),
(34, '6211071209940201', 'Asep Sutrajo', 'Jabiren Raya', '1992-05-03', 'Laki-Laki', 'Kristen', 'Swasta', 'Jln. Trans Kalimatan Rt. 02 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'SMA', 1, 22),
(35, '6211071204189990', 'Fridah Wahyu Saputri', 'Jabiren Raya', '1996-01-22', 'Perempuan', 'Islam', 'Ibu Rumah Tangga', 'Jln. Trans Kalimatan Rt. 07 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'Sarjana', 1, 26),
(36, '6211975812200001', 'Cindy Dwi Saputri', 'Palangkaraya', '2001-11-02', 'Perempuan', 'Hindu', 'Ibu Rumah Tangga', 'Jln. Trans Kalimatan Rt. 06 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'Sarjana', 1, 27),
(37, '6211142523010102', 'Leni Yunani', 'Jabiren Raya', '1987-08-28', 'Perempuan', 'Kristen', 'Ibu Rumah Tangga', 'Jln.Trans Kalimatan Rt.02  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'SMA', 1, 28),
(38, '6211071204120902', 'Holida Rahmawati', 'Surabaya', '1997-01-03', 'Perempuan', 'Islam', 'Swasta', 'Jln.Trans Kalimatan Rt.04 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'sarjana', 1, 29),
(39, '6211071204120008', 'Tri Yanto', 'Magelang', '1990-07-17', 'Laki-Laki', 'Islam', 'Petani', 'Jln.Trans Kalimatan Rt.07 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Cerai', 'SMA', 1, 30),
(40, '6211071204120007', 'Alviyan', 'Kapuas', '1997-06-09', 'Laki-Laki', 'Kristen', 'Swasta', 'Jln.Trans Kalimatan Rt.05 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'Sarjana', 1, 31),
(41, '6211071204120133', 'MIla', 'Pulang Pisau', '1999-01-28', 'Perempuan', 'Islam', 'Ibu Rumah Tangga', 'Jln.Trans Kalimatan Rt.01 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'SMA', 1, 32),
(42, '6211009891200304', 'Danang', 'Sampit', '1992-10-21', 'Laki-Laki', 'Islam', 'Swasta', 'Jln.Trans Kalimatan Rt.06 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'SMA', 1, 33),
(43, '6211071204120012', 'Sumiati', 'Kapuas', '1987-10-06', 'Perempuan', 'Kristen', 'Ibu Rumah Tangga', 'Jln.Trans Kalimatan Rt.04 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'SD', 1, 34),
(44, '6211071204120012', 'Seneri', 'MALANG', '1980-03-20', 'Perempuan', 'Islam', 'Ibu Rumah Tangga', 'Jln.Trans Kalimatan Rt.07 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'SD', 1, 35),
(45, '621107120990009', 'Steven', 'pulang pisau', '2000-12-13', 'Laki-Laki', 'Kristen', 'Swasta', 'Jln.Trans Kalimatan Rt.05 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Belum Kawin', 'sarjana', 1, 36),
(46, '621107120990023', 'Meilani', 'Surabaya', '1998-01-31', 'Laki-Laki', 'Islam', 'Ibu Rumah Tangga', 'Jln.Trans Kalimatan Rt.07 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'SMA', 1, 38),
(47, '6211075812990012', 'Choirun Nisa', 'Surabaya', '1997-04-12', 'Perempuan', 'Islam', 'Ibu Rumah Tangga', 'Jln.Trans Kalimatan Rt.03 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Kawin', 'Sarjana', 1, 37);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pengguna`
--

INSERT INTO `data_pengguna` (`id`, `user`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'Admin'),
(6, 'Samsul', 'samsul123', 'Penduduk'),
(8, 'Rony Raditia', 'rony', 'Penduduk'),
(9, 'Muhammad Figo', 'Figo123', 'Penduduk'),
(10, 'Ahkmad Heriansyah', 'heri123', 'Penduduk'),
(11, 'Putry Agustin', 'Putry22', 'Penduduk'),
(12, 'Sulaiaman Ansari', 'sulai123', 'Penduduk'),
(13, 'Kardiyanto', '9912', 'Penduduk'),
(14, 'Risa Rahmawati', '18112', 'Penduduk'),
(15, 'Devian Andhika', '1212', 'Penduduk'),
(17, 'Berlian Mustika', '1313', 'Penduduk'),
(18, 'Sarman', '123', 'Penduduk'),
(20, 'Sundari', '1712', 'Penduduk'),
(21, 'Sumanto', '1212', 'Penduduk'),
(22, 'Asep sutrajo', 'asep', 'Penduduk'),
(23, 'rusmiati', '123', 'Penduduk'),
(24, 'muliyono', '2323', 'Penduduk'),
(25, 'nur anisa ', '4343', 'Penduduk'),
(26, 'fridah', '1312', 'Penduduk'),
(27, 'cindy', '8989', 'Penduduk'),
(28, 'leni ', '123', 'Penduduk'),
(29, 'holida', '1234', 'Penduduk'),
(30, 'tri', '8787', 'Penduduk'),
(31, 'Alvi', '2424', 'Penduduk'),
(32, 'Mila', '3434', 'Penduduk'),
(33, 'Danang', '2121', 'Penduduk'),
(34, 'Sumiati', '3434', 'Penduduk'),
(35, 'Seneri', '4545', 'Penduduk'),
(36, 'stven', '0909', 'Penduduk'),
(37, 'choirun', '123', 'Penduduk'),
(38, 'Meilani', '3434', 'Penduduk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pindah`
--

CREATE TABLE `data_pindah` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pindah_dari` varchar(255) NOT NULL,
  `alasan_pindah` varchar(255) NOT NULL,
  `alamat_baru` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = pending, 1 = approve, 2 = batal approve',
  `id_penduduk` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pindah`
--

INSERT INTO `data_pindah` (`id`, `no_surat`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `pindah_dari`, `alasan_pindah`, `alamat_baru`, `status`, `id_penduduk`, `tanggal_surat`) VALUES
(10, 'SKP-3167/02/24', '6211075812990001', 'Samsul', 'Pulang pisau', '1997-12-10', 'Laki-Laki', 'Islam', 'Jln. Trans Kalimatan Rt. 06 Desa  Jabiren Kec. amatan Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Jabiren Raya ', 'Mencari penghasilan ', 'Kapuas', 1, 16, '2024-02-01'),
(11, 'SKP-2585/02/24', '621107581288002', 'Putry Agustin S.Kom', 'Kapuas', '1995-04-18', 'Perempuan', 'Islam', 'Jln.Trans Kalimatan Rt.04 Desa Jabiren ', 'Jabiren Raya', 'Ikut Suami', 'Kapuas', 1, 20, '2024-02-02'),
(12, 'SKP-3479/02/24', '6211071204120019', 'Devian Andhika', 'PangkalanBun', '2000-12-18', 'Perempuan', 'Kristen', 'Jl.Trans Kalimatan Rt.06 Desa Jabiren', 'Jabiren Raya', 'Sekolah', 'Bandung', 1, 27, '2024-02-08'),
(13, 'SKP-7870/02/24', '6211075812990001', 'Risa Rahmawati', 'Malang', '1999-12-18', 'Perempuan', 'Islam', 'Jln. Trans Kalimatan Rt. 02 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Jabiren', 'Kuliah', 'Malang', 1, 28, '2024-02-17'),
(14, 'SKP-1474/02/24', '6211081268880002', 'Sulaiman Ansari', 'Pelihari', '2000-10-07', 'Laki-Laki', 'Islam', 'Jln. Trans Kalimatan Rt. 07 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Jabiren', 'Ikut Keluarga', 'Kapuas', 1, 30, '2024-02-17'),
(15, 'SKP-8053/02/24', '6211591200111000', 'Berlian Mustika', 'Banjarmasin', '1998-12-20', 'Perempuan', 'Kristen', 'Jln. Trans Kalimatan Rt. 03 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Jabiren', 'Ikut Suami', 'Palangkaraya', 1, 31, '2024-02-17'),
(16, 'SKP-3946/02/24', '6211975812200001', 'Cindy Dwi Saputri', 'Palangkaraya', '2001-11-02', 'Perempuan', 'Hindu', 'Jln. Trans Kalimatan Rt. 06 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Jabiren Raya', 'Ikut Suami', 'Pilang ', 1, 36, '2024-02-17'),
(17, 'SKP-3862/02/24', '6211071204120902', 'Holida Rahmawati', 'Surabaya', '1997-01-03', 'Perempuan', 'Islam', 'Jln.Trans Kalimatan Rt.04 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Jabiren ', 'Ikut Suami', 'Banjarmasin', 1, 38, '2024-02-17'),
(18, 'SKP-3498/02/24', '6211071204120007', 'Alviyan', 'Kapuas', '1997-06-09', 'Laki-Laki', 'Kristen', 'Jln.Trans Kalimatan Rt.05 Desa Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Jabiren', 'Ikut Keluarga', 'Kapuas', 1, 40, '2024-02-17'),
(19, 'SKP-9639/02/24', '6211071204120006', 'Nur Anisa S,pd', 'Kapuas', '1993-12-19', 'Perempuan', 'Islam', 'Jln. Trans Kalimatan Rt. 05 Desa  Jabiren Kec. Jabiren Raya Kab. Pulang Pisau Prov. Kalimatan Tengah', 'Jabiren ', 'Mencari rezeki', 'Katingan', 1, 24, '2024-02-17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_izinusaha`
--
ALTER TABLE `data_izinusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pindah`
--
ALTER TABLE `data_pindah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_izinusaha`
--
ALTER TABLE `data_izinusaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `data_pindah`
--
ALTER TABLE `data_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
