-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 01:47 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lenterahati`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_judul` int(10) NOT NULL,
  `nm_judul` varchar(100) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_terbit` datetime NOT NULL,
  `id_user` int(3) NOT NULL,
  `sekolah_kodesekolah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_judul`, `nm_judul`, `gambar`, `deskripsi`, `tgl_terbit`, `id_user`, `sekolah_kodesekolah`) VALUES
(1, 'Belajar', '93a6184c6129ebce7721', 'Cinta', '2018-12-22 00:00:00', 1, 'TKIT'),
(2, 'tes', '4d67fbc9e127879c5232', 'adsfw', '2018-12-22 00:00:00', 1, 'TKIT'),
(3, 'coba', 'd5f8d11f221b19b2e13a', 'asd', '2018-12-22 00:00:00', 1, 'TKIT');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(10) NOT NULL,
  `jdl_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_terbit` date NOT NULL,
  `id_user` int(3) NOT NULL,
  `sekolah_kodesekolah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `jdl_berita`, `isi_berita`, `tgl_terbit`, `id_user`, `sekolah_kodesekolah`) VALUES
(1, 'SMP IT', '<p><strong>nasa bagus prakosos</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-07-09', 1, 'SDIT');

-- --------------------------------------------------------

--
-- Table structure for table `komentarpengunjung`
--

CREATE TABLE `komentarpengunjung` (
  `idkomentarpengunjung` int(3) NOT NULL,
  `namapengunjung` varchar(45) DEFAULT NULL,
  `emailpengunjung` varchar(45) DEFAULT NULL,
  `isikomentar` text,
  `statusdibaca` enum('belum','sudah') DEFAULT NULL,
  `tanggalkomentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentarpengunjung`
--

INSERT INTO `komentarpengunjung` (`idkomentarpengunjung`, `namapengunjung`, `emailpengunjung`, `isikomentar`, `statusdibaca`, `tanggalkomentar`) VALUES
(1, 'Faris', 'fzain712@gmail.com', 'Dear Yayasan Lentera Hati.\r\nSalam Hormat, saya sudah daftarkan anak saya di SMP tapi dia belum di proses sedangkan temannya yang lain sudah. ', 'sudah', '0000-00-00 00:00:00'),
(2, 'abdul', 'abdul@gmail.com', 'Sukses Selalu! ', 'sudah', '0000-00-00 00:00:00'),
(5, 'faris', 'far@gmail.com', ' coba saja', 'sudah', '2019-08-01 21:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(3) NOT NULL,
  `nm_lengkap` varchar(100) NOT NULL,
  `nm_panggilan` varchar(10) DEFAULT NULL,
  `nik_siswa` int(20) DEFAULT NULL,
  `no_akta` int(20) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `tempat` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `kewarganegaraan` varchar(20) DEFAULT NULL,
  `anak_ke` varchar(10) DEFAULT NULL,
  `jumlah_saudara_kandung` varchar(10) DEFAULT NULL,
  `jumlah_saudara_angkat` int(3) DEFAULT NULL,
  `jumlah_saudara_tiri` int(3) DEFAULT NULL,
  `status_anak1` varchar(20) DEFAULT NULL,
  `status_anak2` varchar(20) DEFAULT NULL,
  `bahasa_dirumah` varchar(30) DEFAULT NULL,
  `jarak_rumah_kesekolah` varchar(10) DEFAULT NULL,
  `tinggal_bersama` varchar(10) DEFAULT NULL,
  `gol_darah` varchar(2) DEFAULT NULL,
  `penyakit_diderita` varchar(30) DEFAULT NULL,
  `tinggi_badan` varchar(20) DEFAULT NULL,
  `berat_badan` varchar(20) DEFAULT NULL,
  `imunisasi_yg_diterima` varchar(100) DEFAULT NULL,
  `asal_sekolah` varchar(30) DEFAULT NULL,
  `alamat_sekolah` varchar(30) DEFAULT NULL,
  `no_surat_keterangan` varchar(30) DEFAULT NULL,
  `uk_baju` varchar(10) DEFAULT NULL,
  `nm_ayah` int(50) DEFAULT NULL,
  `no_ktp_ayah` varchar(30) DEFAULT NULL,
  `tempat_ayah` varchar(20) DEFAULT NULL,
  `tgl_lahir_ayah` date DEFAULT NULL,
  `hubunganayah_dgn_siswa` varchar(20) DEFAULT NULL,
  `agama_ayah` varchar(20) DEFAULT NULL,
  `kewarganegaraan_ayah` varchar(20) DEFAULT NULL,
  `pendidikan_ayah` varchar(50) DEFAULT NULL,
  `alamat_ayah` varchar(30) DEFAULT NULL,
  `no_tlpn_ayah` varchar(15) DEFAULT NULL,
  `penghasilan_perbulan_ayah` varchar(30) DEFAULT NULL,
  `kesempatanayah_komunikasi_dgn_siswa` varchar(30) DEFAULT NULL,
  `nm_ibu` varchar(50) DEFAULT NULL,
  `no_ktp_ibu` varchar(30) DEFAULT NULL,
  `tempat_ibu` varchar(20) DEFAULT NULL,
  `tgl_lahir_ibu` date DEFAULT NULL,
  `hubunganibu_dgn_siswa` varchar(30) DEFAULT NULL,
  `agama_ibu` varchar(20) DEFAULT NULL,
  `kewarganegaraan_ibu` varchar(20) DEFAULT NULL,
  `pendidikan_terakhir_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `alamat_ibu` varchar(50) DEFAULT NULL,
  `no_tlpn_ibu` varchar(15) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `penghasilan_perbulan_ibu` varchar(30) DEFAULT NULL,
  `kesempatanibu_komunikasi_dgn_anak` varchar(20) DEFAULT NULL,
  `hasil_kelulusan` varchar(20) DEFAULT NULL,
  `lunas` enum('Ya','Tidak') DEFAULT NULL,
  `sekolah_kodesekolah` varchar(5) DEFAULT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `nomor_pendaftaran` varchar(16) DEFAULT NULL,
  `berkas_akte_kelahiran` varchar(45) DEFAULT NULL,
  `berkas_ijazah` varchar(45) DEFAULT NULL,
  `berkas_fotokeluarga` varchar(45) DEFAULT NULL,
  `berkas_pasfoto` varchar(100) NOT NULL,
  `status` enum('lulus','tidak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `nm_lengkap`, `nm_panggilan`, `nik_siswa`, `no_akta`, `jenis_kelamin`, `tempat`, `tgl_lahir`, `alamat`, `agama`, `kewarganegaraan`, `anak_ke`, `jumlah_saudara_kandung`, `jumlah_saudara_angkat`, `jumlah_saudara_tiri`, `status_anak1`, `status_anak2`, `bahasa_dirumah`, `jarak_rumah_kesekolah`, `tinggal_bersama`, `gol_darah`, `penyakit_diderita`, `tinggi_badan`, `berat_badan`, `imunisasi_yg_diterima`, `asal_sekolah`, `alamat_sekolah`, `no_surat_keterangan`, `uk_baju`, `nm_ayah`, `no_ktp_ayah`, `tempat_ayah`, `tgl_lahir_ayah`, `hubunganayah_dgn_siswa`, `agama_ayah`, `kewarganegaraan_ayah`, `pendidikan_ayah`, `alamat_ayah`, `no_tlpn_ayah`, `penghasilan_perbulan_ayah`, `kesempatanayah_komunikasi_dgn_siswa`, `nm_ibu`, `no_ktp_ibu`, `tempat_ibu`, `tgl_lahir_ibu`, `hubunganibu_dgn_siswa`, `agama_ibu`, `kewarganegaraan_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ayah`, `alamat_ibu`, `no_tlpn_ibu`, `pekerjaan_ibu`, `penghasilan_perbulan_ibu`, `kesempatanibu_komunikasi_dgn_anak`, `hasil_kelulusan`, `lunas`, `sekolah_kodesekolah`, `tgl_pendaftaran`, `nomor_pendaftaran`, `berkas_akte_kelahiran`, `berkas_ijazah`, `berkas_fotokeluarga`, `berkas_pasfoto`, `status`) VALUES
(9, 'Rikiah Nurmawati', NULL, 0, NULL, 'perempuan', 'Kediri', '2013-12-02', NULL, 'Islam', 'laki-laki', NULL, NULL, NULL, NULL, 'anak_kandung', NULL, NULL, NULL, NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', NULL, NULL, NULL, '1980-12-17', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1999-03-09', NULL, 'Islam', 'Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TKIT', '2018-12-10', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(10, 'Wahyu Primadi', 'Wahyu', NULL, NULL, 'laki-laki', 'Jaypaura', '2013-02-05', NULL, 'Islam', 'laki-laki', NULL, NULL, NULL, NULL, 'anak_kandung', NULL, NULL, NULL, NULL, 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', NULL, NULL, NULL, '1990-02-14', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1992-07-07', NULL, 'Islam', 'Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TKIT', '2018-12-10', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(11, 'Abdul Rahman', 'Rahman', NULL, NULL, 'laki-laki', NULL, '2013-05-08', NULL, 'Islam', 'laki-laki', '1', '2', 0, 0, 'anak_kandung', NULL, NULL, '2 KM', NULL, NULL, NULL, NULL, '20', 'Campak', NULL, NULL, NULL, 'S', NULL, '1970000005665', 'Manokwari', '1986-07-03', NULL, 'Islam', NULL, 'diploma', 'Jl. Swapen', '082347475023', '2', NULL, 'Andini', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, 'Pegawai Negeri Sipil', '', '', '', NULL, NULL, NULL, NULL, 'TKIT', '2018-12-10', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(12, 'Rizki Toharoh', 'Rizki', 20123, NULL, 'laki-laki', NULL, '2012-03-13', NULL, 'Islam', 'laki-laki', '3', '3', 0, 0, 'anak_kandung', NULL, NULL, '300 M', NULL, 'AB', NULL, NULL, '35', 'Polio', NULL, NULL, NULL, 'S', NULL, '', 'Solo', '1989-04-11', NULL, 'Islam', NULL, 'diploma', 'Jl. Gunung Swapen', '0821900091', '2', NULL, 'Aminah', NULL, 'Manokwari', '1992-05-05', NULL, 'Islam', 'Indonesia', 'diploma', 'Pegawai Swasta', 'Jl. Gunung Swapen', '082348487123', '', NULL, NULL, NULL, NULL, 'SDIT', '2018-12-11', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(13, 'Faris', '', 0, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SMPIT', '2018-12-11', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(14, 'Andika', '', 0, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SMPIT', '2018-12-11', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(15, 'coba', '', 0, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SMPIT', '2018-12-11', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(16, 'Aafars', '', 0, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SMPIT', '2018-12-11', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(17, 'Nurmalina', 'Nurma', 2003, NULL, 'perempuan', NULL, '1998-05-05', NULL, 'Islam', 'laki-laki', '2', '3', 0, 0, 'anak_kandung', NULL, NULL, '300 M', NULL, 'B', NULL, NULL, '20', 'Campak', NULL, NULL, NULL, 'S', NULL, '127060546540564654', 'Manokwari', '1988-02-16', NULL, 'Islam', NULL, 'diploma', 'Jl. Swapen', '081244564788', '2', NULL, 'Rini Astuti', NULL, 'Manokwari', '1995-05-09', NULL, 'Islam', 'Indonesia', 'diploma', 'Pegawai Swasta', 'Jl. Swapen', '081345454676', '1970654064654', '1', NULL, NULL, NULL, 'SDIT', '2018-12-20', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(18, 'Rosmawati', 'rosma', 0, NULL, NULL, NULL, '1998-05-11', NULL, 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2018-12-20', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(19, 'Julva', 'Julva', NULL, NULL, 'perempuan', NULL, '1999-07-21', NULL, 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'TKIT', '2018-12-20', NULL, 'ad11e90e4eb24fa03a9fa8a98e9557ea.jpg', '91ae1366d1d5cbb77abb19f573ef7a6b.jpg', '03baabd40b2c030b826916c5b7174a78.jpg', '', NULL),
(20, 'Nasrul', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-01', 'SDIT201901012', NULL, NULL, NULL, '', NULL),
(21, 'Faris', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-01', 'SDIT201901013', NULL, NULL, NULL, '', 'tidak'),
(23, 'Sinta', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-01', 'SDIT201901010', NULL, NULL, NULL, '', NULL),
(24, 'Santi', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-01', 'SDIT201901013', NULL, NULL, NULL, '', NULL),
(25, 'Sanjana', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-01', 'SDIT20190101332', '702c131911f9bcee7bd339b87202079e.jpg', '7ee17eacde11fadce9da9cb0b7774e12.jpg', '3e2db003a76dfc5ca358919e63e38977.jpg', 'e553312873afb5ff86f31e31eee0bd57.jpg', NULL),
(26, 'Kucing', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-02', 'SDIT20190102133', '56c9583353fb6866ebf4b5146d1a8246.jpg', '118912e045d76e2a41295ccc1cfe6179.jpg', '07935ec137a8c91d40087f2eb000074d.jpg', 'd00257e4b7ea2bed433523265546b51b.jpg', NULL),
(27, 'Kambing', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-02', 'SDIT20190102121', '', '', '', '9c32e45418674bce7ca0e6c7ba9b9820.jpg', NULL),
(28, 'Cinta', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SMPIT', '2019-01-02', 'SMPIT20190102323', NULL, NULL, NULL, '', NULL),
(29, 'Rais', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SMPIT', '2019-01-02', 'SMPIT20190102211', NULL, NULL, NULL, '', NULL),
(30, 'Rais', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SMPIT', '2019-01-02', 'SMPIT20190102232', NULL, NULL, NULL, '', NULL),
(31, 'Jabar', '', NULL, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'TKIT', '2019-01-02', 'TKIT20190102211', NULL, NULL, NULL, '', NULL),
(32, 'Alisa', '', NULL, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'TKIT', '2019-01-02', 'TKIT20190102300', NULL, NULL, NULL, '', NULL),
(33, 'Sintia', '', NULL, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'TKIT', '2019-01-02', 'TKIT20190102323', NULL, NULL, NULL, '', NULL),
(34, 'Raditia Dika', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-02', 'SDIT20190102302', NULL, NULL, NULL, '', NULL),
(35, 'Budiono', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-02', 'SDIT20190102000', NULL, NULL, NULL, '', NULL),
(36, 'Rizki', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-02', 'SDIT20190102313', NULL, NULL, NULL, '', NULL),
(37, 'Cantik', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-02', 'SDIT20190102330', NULL, NULL, NULL, '', NULL),
(38, 'Frias', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-02', 'SDIT20190102031', NULL, NULL, NULL, '', NULL),
(39, 'Riskia', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-02', 'SDIT20190102201', NULL, NULL, NULL, '', NULL),
(40, 'Rosmi', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-02', 'SDIT20190102331', NULL, NULL, NULL, '', NULL),
(41, 'Abdul', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-06', 'SDIT20190106322', NULL, NULL, NULL, '', NULL),
(42, 'coba', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-06', 'SDIT20190106010', NULL, NULL, NULL, '', NULL),
(43, 'nasa', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-06', 'SDIT20190106313', NULL, NULL, NULL, '', NULL),
(44, 'cantik', '', 0, NULL, NULL, NULL, '0000-00-00', '', 'Islam', NULL, '', '', 0, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'SDIT', '2019-01-06', 'SDIT20190106020', NULL, NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(10) NOT NULL,
  `isi_profil` text NOT NULL,
  `jdl_profil` varchar(100) NOT NULL,
  `id_user` int(3) NOT NULL,
  `sekolah_kodesekolah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quota_tk`
--

CREATE TABLE `quota_tk` (
  `tahun` varchar(4) NOT NULL,
  `kuota` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quota_tk`
--

INSERT INTO `quota_tk` (`tahun`, `kuota`) VALUES
('2019', 6);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `kodesekolah` varchar(5) NOT NULL,
  `namasekolah` varchar(100) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`kodesekolah`, `namasekolah`, `alamat`) VALUES
('SDIT', 'SD IT', 'wosi'),
('SMPIT', 'SMP IT', ''),
('TKIT', 'TK IT', ''),
('YYS', 'Yayasan Lentera Hati', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nik_siswa` int(20) NOT NULL,
  `nm_siswa` varchar(20) NOT NULL,
  `level` enum('Siswa TK','Siswa SD','Siswa SMP','') NOT NULL,
  `pendaftaran_id_daftar` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `idstaf` int(3) NOT NULL,
  `namastaf` varchar(100) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `jabatan` varchar(45) DEFAULT NULL,
  `status` enum('aktif','tidak') DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(3) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` enum('Admin','operator_tk','operator_sd','operator_smp') NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `username`, `password`, `level`, `last_login`) VALUES
(1, 'Nasrul Aslami', 'nasa', '230c5c9d495e3bf392ef2b8098e51921', 'Admin', NULL),
(2, 'Budi', 'budi', 'budi', 'operator_tk', NULL),
(3, 'Rudi', 'rudi', '1755e8df56655122206c7c1d16b1c7e3', 'operator_sd', NULL),
(4, 'Yanti', 'yanti', '0bfdcd8914a53e117fda8d10954810e8', 'operator_smp', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_judul`),
  ADD KEY `fk_galeri_sekolah1_idx` (`sekolah_kodesekolah`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `fk_informasi_sekolah1_idx` (`sekolah_kodesekolah`);

--
-- Indexes for table `komentarpengunjung`
--
ALTER TABLE `komentarpengunjung`
  ADD PRIMARY KEY (`idkomentarpengunjung`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `fk_daftar_sd_sekolah_idx` (`sekolah_kodesekolah`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `fk_profil_sekolah1_idx` (`sekolah_kodesekolah`);

--
-- Indexes for table `quota_tk`
--
ALTER TABLE `quota_tk`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`kodesekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nik_siswa`),
  ADD KEY `fk_siswa_pendaftaran1_idx` (`pendaftaran_id_daftar`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`idstaf`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_judul` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentarpengunjung`
--
ALTER TABLE `komentarpengunjung`
  MODIFY `idkomentarpengunjung` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nik_siswa` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `idstaf` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `fk_galeri_sekolah1` FOREIGN KEY (`sekolah_kodesekolah`) REFERENCES `sekolah` (`kodesekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `fk_informasi_sekolah1` FOREIGN KEY (`sekolah_kodesekolah`) REFERENCES `sekolah` (`kodesekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `fk_daftar_sd_sekolah` FOREIGN KEY (`sekolah_kodesekolah`) REFERENCES `sekolah` (`kodesekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `fk_profil_sekolah1` FOREIGN KEY (`sekolah_kodesekolah`) REFERENCES `sekolah` (`kodesekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa_pendaftaran1` FOREIGN KEY (`pendaftaran_id_daftar`) REFERENCES `pendaftaran` (`id_daftar`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
