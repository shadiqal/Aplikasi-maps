-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2019 at 08:13 AM
-- Server version: 10.2.21-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u6184873_warungfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ttl` varchar(255) DEFAULT NULL,
  `noHP` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `tipe_user` varchar(15) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id`, `email`, `nama`, `ttl`, `noHP`, `pass`, `tipe_user`, `kode`, `status`) VALUES
('admin', 'warungfinder@gmail.com', 'admin', '-', '-', '123', 'admin', NULL, NULL),
('ksm011', 'Asep@gmail.com', 'Asep maulana', '23 Agustus 1997', '082216540312', 'asepmaulana', 'konsumen', '877332', 'belum'),
('ksm012', 'lala@gmail.com', 'lala alina', '23 agustus 1997', '082216540312', '123', 'konsumen', '748531', 'sudah'),
('ksm013', 'pahrs.2018@gmail.com', 'Gilang arievanda', '23 june 1997', '082281292349', '@@@xy21asdf', 'konsumen', '358253', 'belum'),
('ksm014', 'jika@gmail.com', 'Jika kalau', '23 Agustus 2001', '082216540312', '12345', 'konsumen', '993442', 'belum'),
('ksm015', 'bila@gmail.com', 'bila sinta', '23 Agustus 1998', '082216540312', '123', 'konsumen', '686305', 'sudah'),
('ksm016', 'kalo@gmail.com', 'shadiq al mughni', '23 Agustus 1998', '08221650421', '123', 'konsumen', '205760', 'sudah'),
('ksm017', 'lala@gmail.com', 'Lala Anita', '23 Agustus 1997', '082216540312', '123', 'konsumen', '641511', 'sudah'),
('ksm018', 'ahmadzakyqolbuddin@gmail.com', 'Ahmad zaqy', '17 Agustus 1997', '085797186850', 'zaky123', 'konsumen', '116617', 'sudah'),
('ksm019', 'Kimak@jekdkd.com', 'Hahahaha', '2(281181', '08213483828', 'oksiap', 'konsumen', '702092', 'belum'),
('ksm020', 'Kimak@jekdkd.com', 'Hahahaha', '2(281181', '082126359556', 'kimak', 'konsumen', '869017', 'belum'),
('ksm021', 'Kaka@gmail.com', 'Kaka aditya', '23 Agustus 1997', '082216540312', '12345678', 'konsumen', '375495', 'sudah'),
('ksm022', 'contoh@gmail.com', 'Contoh tes ', '23 juli 1998', '081288194915', '12345678', 'konsumen', '170091', 'sudah'),
('ksm023', 'rahmiekaputri45@gmail.com', 'Rahmi Eka putri', '19 Mei 1997', '081274231877', 'rahmi19', 'konsumen', '237116', 'sudah'),
('ksm024', 'jack@gmail.com', 'jack', '23 Agustus 1997', '082216540312', '123', 'konsumen', '340819', 'belum'),
('ksm025', 'jack@gmail.com', 'jack', '23 Agustus 1997', '082216540312', '123', 'konsumen', '388644', 'belum'),
('ksm026', 'jack@gmail.com', 'jack', '23 Agustus 1997', '082216540312', '123', 'konsumen', '928952', 'belum'),
('ksm027', 'chairulhazmi0@gmail.com', 'Chairul Hazmi', '20 juni 1995', '08111989900', 'warungfinder9900', 'konsumen', '689321', 'sudah'),
('ksm028', 'jaka@gmail.com', 'Jaka aditya', '16 April 1998', '082216540312', '123', 'konsumen', '298782', 'belum'),
('ksm029', 'masa@gmail.com', 'masa aninda', '23 Agustus 1997', '082216540312', '123', 'konsumen', '971702', 'sudah'),
('ksm030', 'Pala@gmail.com', 'Shadiq', '23 Agustus ', '082261540312', '123', 'konsumen', '256419', 'belum'),
('ksm031', 'rumahcoding2019@gmail.com', 'Muhammad Khalifah', '30 april 1998', '081333500413', 'rumahcoding12345', 'konsumen', '762209', 'sudah'),
('ksm032', 'shadiqalmughni@gmail.com', 'a', 'a', '081333500413', 'a', 'konsumen', '545560', 'belum'),
('ksm033', 'paka@gmail.com', 'paka lala', '23 Agustus 1997', '081216540312', '123', 'konsumen', '944060', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesanan` varchar(255) DEFAULT NULL,
  `kodePesanan` varchar(255) NOT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `alamatTujuan` varchar(255) DEFAULT NULL,
  `idKonsumen` varchar(255) DEFAULT NULL,
  `idWarung` varchar(255) DEFAULT NULL,
  `idProdukWarung` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idPesanan`, `kodePesanan`, `tanggal`, `alamatTujuan`, `idKonsumen`, `idWarung`, `idProdukWarung`, `harga`, `jumlah`, `status`) VALUES
('IDP  1', 'KOD  1', '08/02/2019 10:57:28', 'Jl. Riung purna 4 no 8', 'ksm016', 'wrg005', 'pro006', '18000', '2', 'pesanDiteruskan'),
('IDP  1', 'KOD  2', '08/02/2019 10:57:28', 'Jl. Riung purna 4 no 8', 'ksm016', 'wrg005', 'pro007', '55000', '2', 'pesanDiteruskan'),
('IDP  2', 'KOD  3', '08/02/2019 11:23:14', 'Jl. Riung purna 4 no 7', 'ksm016', 'wrg005', 'pro007', '55000', '1', 'pesanDiteruskan'),
('IDP  2', 'KOD  4', '08/02/2019 11:23:14', 'Jl. Riung purna 4 no 7', 'ksm016', 'wrg005', 'pro008', '55000', '2', 'pesanDiteruskan'),
('IDP  3', 'KOD  5', '13/02/2019 09:00:11', 'Jl. Riung purna 4 no 8', 'ksm016', 'wrg005', 'pro006', '18000', '1', 'pesanDiteruskan'),
('IDP  3', 'KOD  6', '13/02/2019 09:00:11', 'Jl. Riung purna 4 no 8', 'ksm016', 'wrg005', 'pro007', '55000', '1', 'pesanDiteruskan'),
('IDP  4', 'KOD  7', '16/02/2019 01:33:32', 'Jl. Riung purna 4 no 8', 'ksm016', 'wrg001', 'pro001', '16000', '1', 'pesanDiteruskan'),
('IDP  5', 'KOD  8', '06/03/2019 09:47:45', 'Jl. Riung purna 4 no 8 ', 'ksm016', 'wrg001', 'pro001', '16000', '1', 'pesanDiteruskan'),
('IDP  5', 'KOD  9', '06/03/2019 09:47:45', 'Jl. Riung purna 4 no 8 ', 'ksm016', 'wrg001', 'pro002', '12000', '1', 'pesanDiteruskan'),
('IDP  5', 'KOD 10', '06/03/2019 09:47:45', 'Jl. Riung purna 4 no 8 ', 'ksm016', 'wrg001', 'pro003', '13000', '1', 'pesanDiteruskan');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` varchar(255) NOT NULL,
  `idProdukWarung` varchar(255) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `namaProduk` varchar(255) DEFAULT NULL,
  `harga` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `idProdukWarung`, `kategori`, `namaProduk`, `harga`, `gambar`) VALUES
('pro001', 'wrg001', 'alatMandi', 'Shampo Pantene', 16000, 'pantene.jpg'),
('pro002', 'wrg001', 'alatMandi', 'Shampoo Head and Shoulder', 12000, 'sampo.jpg'),
('pro003', 'wrg001', 'alatmandi', 'Sampo Bintang', 13000, 'pantene.jpg'),
('pro004', 'wrg001', 'alatmandi', 'sampo hitam', 19000, 'pantene.jpg'),
('pro005', 'wrg002', 'alatMandi', 'Sampo rejois', 11000, 'pantene.jpg'),
('pro006', 'wrg005', 'Air Minum', 'Amidis air ', 18000, 'amidisAir.jpg'),
('pro007', 'wrg005', 'Air Minum', 'Amidis Botol ', 55000, 'amidisBotol.jpg'),
('pro008', 'wrg005', 'Air Minum', 'Aqua 1500ml (dus)', 55000, 'aqua1500Mili.jpg'),
('pro009', 'wrg005', 'Air Minum', 'Aqua 600ml (dus)', 55000, 'aqua600Mili.jpg'),
('pro010', 'wrg005', 'Gas', 'Gas 12kg Refill', 150000, 'gas12Kg.jpg'),
('pro011', 'wrg005', 'Gas', 'Gas 5kg Refill', 75000, 'gas5Kg.jpg'),
('pro012', 'wrg005', 'Gas', 'Gas 3kg Refill', 22000, 'gas3Kg.jpg'),
('pro013', 'wrg005', 'Air Minum', 'Le Mineralle 1500ml (dus)', 50000, 'leMineralle1500Mili.jpg'),
('pro014', 'wrg005', 'Air Minum', 'Le Mineralle 600ml (dus)', 47500, 'leMineralle600Mili.jpg'),
('pro015', 'wrg005', 'Air Minum', 'Vit Cartoon 1500ml (dus)', 45000, 'vit1500Mili.jpg'),
('pro016', 'wrg005', 'Air Minum', 'Vit Cartoon 600ml (dus)', 45000, 'vit600Mili.jpg'),
('pro017', 'wrg005', 'Air Minum', 'Isi ulang air galon', 7000, 'isiUlangAirGalon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `warung`
--

CREATE TABLE `warung` (
  `id` varchar(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `namaPemilik` varchar(255) DEFAULT NULL,
  `namaWarung` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `noTelp` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `jamBuka` varchar(255) DEFAULT NULL,
  `fotoWarung` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `kodeAktivasi` varchar(255) DEFAULT NULL,
  `Aktivasi` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warung`
--

INSERT INTO `warung` (`id`, `email`, `namaPemilik`, `namaWarung`, `alamat`, `noTelp`, `pass`, `jamBuka`, `fotoWarung`, `latitude`, `longitude`, `kodeAktivasi`, `Aktivasi`, `kategori`) VALUES
('wrg001', 'darmi@gmail.com', 'Darmi arniya', 'Warung ibu darmi', 'Jalan Banceuy No.51, Sumur Bandung, Jawa Barat', '082216540312', NULL, '08.00 - 21.00', 'warung.jpg', '-6.950112', '107.682876', NULL, 'sudah', 'warungKelontong'),
('wrg002', 'jajang@gmail.com', 'Jajang andri', 'Laundry makmur', 'Jl. Pasteur No. 11A, Kota Bandung, Jawa Barat', '082216540312', NULL, '10.00 - 19.00', 'warung2.jpg', '-6.947481', '107.684700', NULL, 'sudah', 'laundry'),
('wrg003', 'ka', 'Ibu jaka', 'Depot galon karla', 'Jalan Wirawan I 15, Cisaranten Kidul, Gedebage, Kota Bandung, Jawa Barat 40295', '082216540312', '123', '08.00 - 11.00', 'warung.jpg', '-6.947230', '107.683329', NULL, 'sudah', 'depotAirMinum'),
('wrg004', 'la', 'Bapak amin', 'Warung nasi sunda', 'Jl. Purnabakti II, Cisaranten Kidul, Gedebage, Kota Bandung, Jawa Barat 40295', '082216540312', '123', NULL, NULL, '-6.948129', '107.682818', NULL, 'sudah', 'warung'),
('wrg005', 'utamakaryapoetra@gmail.com', 'Poetra', 'Depot galon MKJ', 'Jl. Terusan buah batu gg. PGA no 11', '082216540312', 'mkj123', '08.00 - 20.00', 'mkj.jpg', '-6.974610', '107.633382', '891092', 'sudah', 'depotAirMinum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD UNIQUE KEY `idPesanan` (`kodePesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD UNIQUE KEY `UNIQUE` (`idProduk`);

--
-- Indexes for table `warung`
--
ALTER TABLE `warung`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
