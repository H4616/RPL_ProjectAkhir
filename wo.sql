-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2023 pada 01.03
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `index`
--

CREATE TABLE `index` (
  `id_barang` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `email_saler` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `foto` text NOT NULL,
  `alamat` text NOT NULL,
  `nama_toko` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `index`
--

INSERT INTO `index` (`id_barang`, `nama`, `kategori`, `harga`, `email_saler`, `nohp`, `foto`, `alamat`, `nama_toko`) VALUES
(1001, 'Mie Ayam', 'Makanan', 12000, 'habib@gmail.com', '0827632937', 'miayam.jpg', 'Kulon Progo', 'Toko Ganteng'),
(1002, 'Tuprewere', 'Parabotan', 400000, 'puput@gmail.com', ' 0801738979 ', 'prabotan.jpg', 'Kulon Progo', 'Toko Puput'),
(1003, 'seblak', 'Makanan', 15000, 'puput@gmail.com', ' 0801738979 ', 'seblak.jfif', 'Kulon Progo', 'Toko Puput'),
(1004, 'switer', 'Pakaian', 100000, 'habib@gmail.com', '0827632937', 'sweterr.jpg', 'Kulon Progo', 'Toko Ganteng'),
(1005, 'Leptop ROG', 'Elektronik', 15000000, 'habib@gmail.com', '0827632937', 'elektronik.jfif', 'Kulon Progo', 'Toko Ganteng'),
(1006, 'Shock OHLINS', 'Kendaraan', 500000, 'habib@gmail.com', '0827632937', 'kendaraan.jpg', 'Kulon Progo', 'Toko Ganteng'),
(1007, 'Babi Guling', 'Makanan', 39000, 'jihan@gmail.com', ' 0812132123 ', 'babiguling.jfif', 'Gunung Kidul', 'Toko Cantik'),
(1008, 'Baju Anak', 'Pakaian', 400000, 'jihan@gmail.com', ' 0812132123 ', 'baju anak.jfif', 'Gunung Kidul', 'Toko Cantik'),
(1009, 'Baju Koko', 'Pakaian', 75000, 'jihan@gmail.com', ' 0812132123 ', 'baju koko.jfif', 'Gunung Kidul', 'Toko Cantik'),
(1010, 'Tumbler', 'Parabotan', 500000, 'jihan@gmail.com', ' 0812132123 ', 'images (1).jfif', 'Gunung Kidul', 'Toko Cantik'),
(1011, 'Kopling Brembo', 'Kendaraan', 5000000, 'yanto@gmail.com', ' 045643657 ', 'brembo kopling.jfif', 'Jogja', 'Toko Yanto Hitz'),
(1012, 'Tungku Sate tanah', 'Kerajinan', 20000, 'yanto@gmail.com', ' 045643657 ', 'tungku.jfif', 'Jogja', 'Toko Yanto Hitz'),
(1013, 'Siomay boz', 'Makanan', 10000, 'yanto@gmail.com', ' 045643657 ', 'siomay.jfif', 'Jogja', 'Toko Yanto Hitz'),
(1014, 'Lampu anyaman bozz', 'Kerajinan', 400000, 'yanto@gmail.com', ' 045643657 ', 'kerajinan2.jfif', 'Jogja', 'Toko Yanto Hitz'),
(1015, 'Mesin Cuci', 'Elektronik', 700000, 'yadi@gmail.com', ' 09879874343 ', 'mesin cuci.jfif', 'Srilangka', 'Yadi guzz'),
(1016, 'cakram brembo', 'Kendaraan', 250000, 'yadi@gmail.com', ' 09879874343 ', 'brembo disbrake.jfif', 'Srilangka', 'Yadi guzz'),
(1017, 'miniatur Vezpa', 'Kerajinan', 243100, 'yadi@gmail.com', ' 09879874343 ', 'miniatur vespa.jfif', 'Srilangka', 'Yadi guzz'),
(1018, 'TV Oled', 'Elektronik', 1000000, 'yadi@gmail.com', ' 09879874343 ', 'elektronik2.jfif', 'Srilangka', 'Yadi guzz'),
(1019, 'Panci', 'Parabotan', 12300, 'yadi@gmail.com', ' 09879874343 ', 'panci.jfif', 'Srilangka', 'Yadi guzz'),
(1020, 'Soto Afrika', 'Makanan', 54500, 'yadi@gmail.com', ' 09879874343 ', 'soto.jfif', 'Srilangka', 'Yadi guzz'),
(1021, 'Kaos', 'Pakaian', 400000, 'yadi@gmail.com', ' 09879874343 ', 'kaos.jfif', 'Srilangka', 'Yadi guzz'),
(1022, 'HP VIVO', 'Elektronik', 2500000, 'yadi@gmail.com', ' 09879874343 ', 'vivo.jfif', 'Srilangka', 'Yadi guzz'),
(1023, 'leptop', 'Elektronik', 500000, 'ipul@gmail.com', ' 0812321323 ', '3.png', 'Kulon Progo', 'Toko Gedhe'),
(1026, 'taiyaki doraemon', 'Makanan', 15000, 'habibannafi76@gmail.com', ' 052137757978', '77bdbf9f048845ae7506d1ac21415739.jpg', 'Kulon Progo', 'Toko Makmur'),
(1027, 'Katana', 'Kerajinan', 400000, 'habibannafi56@gmail.com', ' 082241837994', '1200px-Antique_Japanese_katana.jfif', 'Kulon Progo', 'Toko Hedon'),
(1028, 'Ninja 250 abs se', 'Kendaraan', 500000000, 'habibannafi56@gmail.com', ' 082241837994', '69eb8a1f-eae3-4579-9969-795fa83dca84.jpg', 'Kulon Progo', 'Toko Hedon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('habib@gmail.com', '123456'),
('puput@gmail.com', '1234'),
('jihan@gmail.com', '123412'),
('yanto@gmail.com', '098765'),
('yadi@gmail.com', '123'),
('ipul@gmail.com', '111'),
('habibannafi76@gmail.com', '123123'),
('habibannafi56@gmail.com', '140502');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `barang` varchar(30) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `email_saler` varchar(30) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_pembelian` text NOT NULL,
  `nohp_saler` int(11) NOT NULL,
  `nohp_user` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nota`
--

INSERT INTO `nota` (`id_nota`, `nama_toko`, `barang`, `email_user`, `email_saler`, `id_barang`, `jumlah`, `tanggal_pembelian`, `nohp_saler`, `nohp_user`, `harga_barang`) VALUES
(1, 'Toko Puput', 'seblak', 'habib@gmail.com', 'puput@gmail.com', 1003, 2, 'Sun Jun 11 2023', 801738979, 827632937, 15000),
(2, 'Toko Yanto Hitz', 'Siomay boz', 'habib@gmail.com', 'yanto@gmail.com', 1013, 3, 'Sun Jun 11 2023', 45643657, 827632937, 10000),
(3, 'Yadi guzz', 'Soto Afrika', 'habib@gmail.com', 'yadi@gmail.com', 1020, 3, 'Sun Jun 11 2023', 2147483647, 827632937, 54500),
(4, 'Toko Cantik', 'Babi Guling', 'habib@gmail.com', 'jihan@gmail.com', 1007, 2, 'Sun Jun 11 2023', 812132123, 827632937, 39000),
(5, 'Toko Ganteng', 'Mie Ayam', 'ipul@gmail.com', 'habib@gmail.com', 1001, 3, 'Sun Jun 11 2023', 827632937, 812321323, 12000),
(6, 'Toko Cantik', 'Baju Anak', 'ipul@gmail.com', 'jihan@gmail.com', 1008, 1, 'Sun Jun 11 2023', 812132123, 812321323, 400000),
(7, 'Toko Cantik', 'Baju Anak', 'ipul@gmail.com', 'jihan@gmail.com', 1008, 2, 'Sun Jun 11 2023', 812132123, 812321323, 400000),
(8, 'Toko Cantik', 'Baju Anak', 'ipul@gmail.com', 'jihan@gmail.com', 1008, 3, 'Sun Jun 11 2023', 812132123, 812321323, 400000),
(9, 'Toko Makmur', 'Omurice love', 'habib@gmail.com', 'habibannafi76@gmail.com', 1025, 2, 'Sun Jun 11 2023', 2147483647, 827632937, 500000),
(10, 'Toko Makmur', 'Omurice love', 'habibannafi56@gmail.com', 'habibannafi76@gmail.com', 1025, 2, 'Sun Jun 11 2023', 2147483647, 2147483647, 500000),
(11, 'Toko Hedon', 'Ninja 250 abs se', 'habibannafi76@gmail.com', 'habibannafi56@gmail.com', 1028, 1, 'Sun Jun 11 2023', 2147483647, 2147483647, 500000000),
(12, 'Toko Hedon', 'Katana', 'habibannafi76@gmail.com', 'habibannafi56@gmail.com', 1027, 3, 'Sun Jun 11 2023', 2147483647, 2147483647, 400000),
(13, 'Toko Hedon', 'Katana', 'habibannafi76@gmail.com', 'habibannafi56@gmail.com', 1027, 2, 'Sun Jun 11 2023', 2147483647, 2147483647, 400000),
(14, 'Toko Hedon', 'Katana', 'habibannafi76@gmail.com', 'habibannafi56@gmail.com', 1027, 4, 'Sun Jun 11 2023', 2147483647, 2147483647, 400000),
(15, 'Toko Hedon', 'Katana', 'habibannafi76@gmail.com', 'habibannafi56@gmail.com', 1027, 5, 'Sun Jun 11 2023', 2147483647, 2147483647, 400000),
(16, 'Toko Hedon', 'Katana', 'habibannafi76@gmail.com', 'habibannafi56@gmail.com', 1027, 1, 'Sun Jun 11 2023', 2147483647, 2147483647, 400000),
(17, 'Toko Hedon', 'Katana', 'habibannafi76@gmail.com', 'habibannafi56@gmail.com', 1027, 1, 'Sun Jun 11 2023', 2147483647, 2147483647, 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `alamat_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `email`, `nik`, `gender`, `nohp`, `alamat`, `foto`, `nama_toko`, `alamat_toko`) VALUES
('habib annafi ', 'habib@gmail.com', '1233232', 'Laki-Laki', '62827632937', 'Kulon Progo', 'WhatsApp Image 2023-01-03 at 14.30.07.jpeg', 'Toko Ganteng', 'gupit         '),
('Habib2 ', 'habibannafi56@gmail.com', '25235325', 'Laki-Laki', '6282241837994', 'Kulon Progo', '77bdbf9f048845ae7506d1ac21415739.jpg', 'Toko Hedon', 'Sleman '),
('Habib ', 'habibannafi76@gmail.com', '123131', 'Laki-Laki', '6282137757978', 'Kulon Progo', '73b98133fecde45cb0998e96468d35f7.jpg', 'Toko Makmur', 'Gupit,Kulon Progo '),
('saipul ', 'ipul@gmail.com', '2453252521', 'Laki-Laki', '0812321323', 'Kulon Progo', 'School-5.png', 'Toko Gedhe', 'jokteng wetan '),
('Jihan ', 'jihan@gmail.com', '3452234123412', 'Perempuan', '0812132123', 'Gunung Kidul', 'pngtree-burning-fire-vector-element-png-image_2686637.jpg', 'Toko Cantik', 'ambarketawang'),
('pupu ', 'puput@gmail.com', '1233232', 'Laki-Laki', '0801738979', 'Kulon Progo', 'logo-upn.png', 'Toko Puput', 'Karangsari '),
('Den yadi', 'yadi@gmail.com', '3245124535', ' Laki-Laki', '09879874343', 'Bantul pol kidul', 'pp.jfif', 'Yadi guzz', ' Bantul                                                                                   '),
('Yanto hitz ', 'yanto@gmail.com', '56754757564', 'Laki-Laki', '045643657', 'Jogja', 'untitled-3 (1).jpg', 'Toko Yanto Hitz', 'Siliran ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `index`
--
ALTER TABLE `index`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
