-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2017 at 07:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`, `gambar`, `level`) VALUES
(1, 'user', 'user', 'Avif Prima Nuryanto', 'gambar_admin/21.jpg', 'user'),
(2, 'admin', 'admin', 'Febby Ronaldo', 'gambar_admin/5.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id` int(4) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `no_induk` varchar(5) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `foto` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id`, `nama`, `no_induk`, `jk`, `kelas`, `ttl`, `alamat`, `foto`) VALUES
(1, 'AGUNG TRI PRASETYO', '15901', 'L', '9a', 'Cikarang, 4 Agustus 1997', 'Kp. Wangkal, Cikarang Barat', 'gambar_anggota/2b176a41bccf31482dbc98d0e120223e.jpg'),
(2, 'FREDY SANTOSO', '15902', 'L', '9c', 'Samarinda, 14 Juni 1997', 'Jl. Soekarno hatta, no.65 Samarinda', 'gambar_anggota/tumblr_oozosepWxf1s3x0eto1_1280.jpg'),
(3, 'HAMRI AJAH', '15903', 'L', '9b', 'Cikarang, 30 Januari 1997', 'Rawa Bangkong, Cikarang Timur', 'gambar_anggota/009.jpg'),
(4, 'ANI ANILAH', '15904', 'P', '9b', 'Cikarang, 20 Januari 1992', 'Sasak Bali, Sukatani', 'gambar_anggota/c.jpg'),
(5, 'RYAN SUPRIATNA', '15905', 'L', '9b', 'Cikarang, 9 Agustus 1995', 'Sukatani, Cikarang', 'gambar_anggota/ko caci.jpg'),
(6, 'LATHIFAH', '15906', 'P', '9c', 'Bekasi, 26 Juli 1997', 'Cikarang Baru', 'gambar_anggota/1098.jpg'),
(7, 'CANTIKA PUJIASTUTI', '15907', 'P', '9a', 'Karawang, 11 April 1998', 'Tambelang, Bekasi', 'gambar_anggota/user.jpg'),
(8, 'SEBASTIAN HADI PRASETYO', '15908', 'L', '9a', 'Bekasi, 17 Agustus 1990', 'Tambelang, Bekasi', 'gambar_anggota/26115.jpg'),
(9, 'RAMA AGUS SUPRIYADI', '15909', 'L', '9b', 'Bogor, 29 Juli 1994', 'Cikarang, Bekasi', 'gambar_anggota/l.jpg'),
(12, 'ANTON SUGIANTO', '20150', 'L', '9b', 'Indramayu, 28 Oktober 1988', 'cikarang barat bekasi', 'gambar_anggota/2.jpg');

--
-- Triggers `data_anggota`
--
DELIMITER $$
CREATE TRIGGER `rubah_nama` AFTER UPDATE ON `data_anggota` FOR EACH ROW UPDATE trans_pinjam
set nama_peminjam=new.nama
where nama_peminjam=old.nama
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(5) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kode_klas` varchar(20) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `jum_temp` int(4) NOT NULL,
  `tgl_input` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `pengarang`, `th_terbit`, `penerbit`, `isbn`, `kategori`, `kode_klas`, `jumlah_buku`, `lokasi`, `asal`, `jum_temp`, `tgl_input`) VALUES
(2, 'Membangun Toko Online Dengan PHP dan MySQL', 'Hakko Bio Richard', '2015', 'NiqoWeb Sukses Media', 'QWERT122345566', '1300', 'XII-Utama', 9, 'Rak A1', 'Pembelian', 1, '2015-10-10 07:47:40'),
(3, 'Aplikasi Penggajian Karyawan dengan PHP', 'Hakko Bio Richard', '2015', 'NiqoWeb Sukses media', 'QWERT1232446', '1300', 'XI-Utama', 10, 'Rak A2', 'Pembelian', 10, '2015-10-10 07:46:00'),
(4, 'Membangun Aplikasi Perpustakaan Berbasis Web', 'Hakko Bio Richard', '2015', 'NiqoWeb Sukses media', 'QWERT12234985', '1300', 'X-Utama', 10, 'Rak A2', 'Pembelian', 10, '2015-10-10 07:44:54'),
(5, 'Membangun Aplikasi Nilai Dengan PHP', 'Hakko Bio Richard', '2009', 'NiqoWeb Sukses Media', 'QWERT12232454', '1300', 'X-Tambahan', 12, 'Rak H1', 'Pemberian Siswa', 10, '2015-10-10 07:48:50'),
(6, 'Buku Pintar Pemrograman Arduino', 'Abdul Kadir', '2015', 'MediaKom', '9798774434', 'Elektronika', '', 15, 'RAK H1', 'Pembelian', 0, '2017/06/25 - 10:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(17) NOT NULL,
  `perlu1` varchar(15) NOT NULL,
  `cari` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `jam_kunjung` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `jk`, `kelas`, `perlu1`, `cari`, `saran`, `tgl_kunjung`, `jam_kunjung`) VALUES
(1, 'Sebastian Hadi Prasetyo', 'L', '9a', 'Membaca', 'Antropologi', 'Pelayanan di tingkatkan lagi', '2015-10-11', '07:23:40'),
(2, 'Hakko Bio Richard', 'L', 'XII4', 'Membaca', 'Buku Pemrograman', 'Perbanyak Buku Pemrograman', '0000-00-00', '04:21:50'),
(3, 'Niqo Bio Haqqul Yaqin', 'L', 'X2', 'Membaca', 'Buku Pemrograman', 'Tingkatkan Pelayanan', '2015-10-18', '04:23:04'),
(4, 'Febby Ronaldo', 'L', 'X5', 'Mencuri Buku', 'Buku Astromi', 'tingkatkan', '2017-06-20', '15:48:06'),
(5, 'Hanan Attaki', 'L', 'XII1', 'Sedekah buku', 'Ridho Allah', 'Tingkatkan', '2017-06-22', '00:03:40'),
(6, 'qwertyu', 'L', 'X3', 'vvss', '23323', '23324', '2017-06-22', '00:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `trans_pinjam`
--

CREATE TABLE `trans_pinjam` (
  `id` int(5) NOT NULL,
  `judul_buku` varchar(250) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_pinjam`
--

INSERT INTO `trans_pinjam` (`id`, `judul_buku`, `nama_peminjam`, `tgl_pinjam`, `tgl_kembali`, `Status`, `ket`) VALUES
(1, 'Membangun Aplikasi Nilai Dengan PHP', 'AGUNG TRI PRASETYO', '22-06-2017', '04-07-2017', 'Kembali', ''),
(2, 'Aplikasi Penggajian Karyawan dengan PHP', 'HAMRI AJAH', '11-06-2017', '25-06-2017', 'Pinjam', ''),
(3, 'Membangun Aplikasi Nilai Dengan PHP', 'FREDY SANTOSO', '24-06-2017', '01-07-2017', 'Kembali', ' '),
(4, 'Membangun Toko Online Dengan PHP dan MySQL', 'CANTIKA PUJIASTUTI', '25-06-2017', '02-07-2017', 'Pinjam', '  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans_pinjam`
--
ALTER TABLE `trans_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `trans_pinjam`
--
ALTER TABLE `trans_pinjam`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
