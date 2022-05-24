-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 09 Okt 2019 pada 06.14
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_unitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'redaksi@bukulokomedia.com', '08238923848', 'admin', 'N'),
('adminunitas', 'adminunitas', 'Administrator', 'admin@gmail.com', '08129394893', 'admin', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `divisi` enum('bph','kaderisasi','litbang','kominfo','kwh','abdimas') NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `tahun_menjabat` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `tanggal_event` int(11) NOT NULL,
  `bulan_event` int(11) NOT NULL,
  `tahun_event` int(11) NOT NULL,
  `tempat_event` varchar(100) NOT NULL,
  `ket_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id_header` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`id_header`, `judul`, `url`, `keterangan`, `gambar`, `tgl_posting`) VALUES
(7, '1', '1', '1', '1.jpg', '2017-04-23'),
(8, '2', '2', '2', '2.jpg', '2017-04-23'),
(9, '3', '3', '3', 'banner_pelatihan.png', '2017-04-23'),
(10, '2', '2', '2', 'Koala.jpg', '2017-09-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_akademik`
--

CREATE TABLE `kalender_akademik` (
  `id_kalender_akademik` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `kategori_seo`) VALUES
(19, 'Sepatu Gaul', 'sepatu-gaul'),
(20, 'T-Shirt Keren', 'tshirt-keren');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum_prodi`
--

CREATE TABLE `kurikulum_prodi` (
  `id_kurikulum_prodi` int(11) NOT NULL,
  `semester` int(3) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `sks` int(3) NOT NULL,
  `ket` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menuutama`
--

CREATE TABLE `menuutama` (
  `id_main` int(11) NOT NULL,
  `nama_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `lokasi` enum('Admin','Public') NOT NULL,
  `hakakses` enum('user','admin') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `icon` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `urutan` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menuutama`
--

INSERT INTO `menuutama` (`id_main`, `nama_menu`, `link`, `aktif`, `lokasi`, `hakakses`, `icon`, `urutan`) VALUES
(1, 'Managemen Aplikasi', '#', 'Y', 'Admin', 'admin', 'fa fa-info-circle', 1),
(4, 'Seminar ', '#', 'N', 'Admin', 'admin', 'fa  fa-android', 2),
(5, 'UNITAS TI', '#', 'Y', 'Admin', 'admin', 'fa fa-sitemap', 2),
(6, 'Perkuliahan', '#', 'Y', 'Admin', 'admin', 'fa fa-book', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `static_content` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` enum('user','admin') COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL,
  `urutan` int(5) NOT NULL,
  `nama_toko` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `meta_deskripsi` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `meta_keyword` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `email_pengelola` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nomor_rekening` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nomor_hp` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `status`, `aktif`, `urutan`, `nama_toko`, `meta_deskripsi`, `meta_keyword`, `email_pengelola`, `nomor_rekening`, `nomor_hp`) VALUES
(18, 'Produk', '?module=produk', '', '', 'admin', 'Y', 5, '', '', '', '', '', ''),
(42, 'Order', '?module=order', '', '', 'admin', 'Y', 6, '', '', '', '', '', ''),
(31, 'Kategori Produk', '?module=kategori', '', '', 'admin', 'Y', 4, '', '', '', '', '', ''),
(43, 'Profil Toko Online', '?module=profil', '<p><strong>Selamat Datang di DaichaShop | GROSIR Kosmetik Murah</strong></p>\r\n\r\n<p>Kami adalah Grosir Kosmetik Online Yang Menjual Kosmetik Murah|GROSIR Kosmetik Murah</p>\r\n', '1.jpg', 'admin', 'Y', 2, 'DaichaShop | Grosir Kosmetik Online', 'DaichaShop | Grosir Kosmetik Online', '', 'info@daichashop.com', 'Mandiri 131-000-699-7573 an. Sri Suhartini', '0821180935322'),
(67, 'menu utama', '?module=menuutama', '', '', 'admin', 'Y', 11, '', '', '', '', '', ''),
(58, 'Edit Rekening Bank', '?module=bank', '', '', 'user', 'Y', 16, '', '', '', '', '', ''),
(44, 'Hubungi Kami', '?module=hubungi', '', '', 'admin', 'Y', 9, '', '', '', '', '', ''),
(45, 'Cara Pembelian', '?module=carabeli', '<ol>\r\n	<li>Klik pada tombol&nbsp;<strong>Beli</strong> pada produk yang ingin Anda pesan.</li>\r\n	<li>Produk yang Anda pesan akan masuk ke dalam <strong>Keranjang Belanja</strong>. Anda dapat melakukan perubahan jumlah produk yang diinginkan dengan mengganti angka di kolom <strong>Jumlah</strong>, kemudian klik tombol <strong>Update</strong>. Sedangkan untuk menghapus sebuah produk dari Keranjang Belanja, klik tombol Kali yang berada di kolom paling kanan.</li>\r\n	<li>Jika sudah selesai, klik tombol <strong>Selesai Belanja</strong>, maka akan tampil form untuk pengisian data kustomer/pembeli.</li>\r\n	<li>Setelah data pembeli selesai diisikan, klik tombol <strong>Proses</strong>, maka akan tampil data pembeli beserta produk yang dipesannya (jika diperlukan catat nomor ordersnya). Dan juga ada total pembayaran serta nomor rekening pembayaran.</li>\r\n	<li>Apabila telah melakukan pembayaran, maka produk/barang akan segera kami kirimkan.</li>\r\n</ol>\r\n', 'gedung.jpg', 'admin', 'Y', 8, '', '', '', '', '', ''),
(47, 'Banner', '?module=banner', '', '', 'user', 'Y', 10, '', '', '', '', '', ''),
(48, 'Ongkos Kirim', '?module=ongkoskirim', '', '', 'user', 'Y', 7, '', '', '', '', '', ''),
(49, 'User', '?module=user', '', '', 'user', 'Y', 1, '', '', '', '', '', ''),
(53, 'Modul YM', '?module=ym', '', '', 'user', 'Y', 12, '', '', '', '', '', ''),
(52, 'Laporan', '?module=laporan', '', '', 'user', 'Y', 11, '', '', '', '', '', ''),
(57, 'Download Katalog', '?module=download', '', '', 'user', 'N', 13, '', '', '', '', '', ''),
(60, 'Edit Slide', '?module=header', '', '', 'admin', 'Y', 18, '', '', '', '', '', ''),
(61, 'Data Kontak', '?module=kontak', '', '', 'user', 'Y', 19, '', '', '', '', '', ''),
(62, 'Edit Header Website', '?module=nduwur', '', '', 'user', 'Y', 20, '', '', '', '', '', ''),
(63, 'Testimoni', '?module=testimoni', '', '', 'user', 'Y', 21, '', '', '', '', '', ''),
(66, 'Facebook Fanspage', '?module=fb', '', '', 'user', 'Y', 22, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(25) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `id_sub` int(11) NOT NULL,
  `nama_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link_sub` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_main` int(5) NOT NULL,
  `id_submain` int(11) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `adminsubmenu` enum('Y','N') NOT NULL,
  `hakakses_sub` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id_sub`, `nama_sub`, `link_sub`, `id_main`, `id_submain`, `aktif`, `adminsubmenu`, `hakakses_sub`) VALUES
(1, 'Menu Utama', '?module=menuutama', 1, 0, 'Y', '', ''),
(2, 'Sub-Menu', '?module=submenu', 1, 0, 'Y', 'N', ''),
(3, 'Header', '?module=header', 1, 0, 'Y', 'N', ''),
(4, 'Administrasi Keuangan', '?module=keuangan_bemu', 3, 0, 'Y', 'Y', ''),
(5, 'Sekretariatan', '?module=sekretariat_bemu', 3, 0, 'Y', 'Y', ''),
(6, 'Anggota', '?module=anggota_bemu', 3, 0, 'Y', 'Y', ''),
(7, 'Registrasi HTM', '?module=registrasi_htm', 0, 0, 'Y', 'Y', ''),
(8, 'Registrasi HTM', '?module=registrasi_htm', 4, 0, 'Y', 'Y', ''),
(9, 'Registrasi OTS', '?module=registrasi_ots', 4, 0, 'Y', 'Y', ''),
(10, 'Event', '?module=event', 5, 0, 'Y', 'Y', ''),
(11, 'Anggota', '?module=anggota', 5, 0, 'Y', 'Y', ''),
(12, 'Pesan / Aspirasi', '?aspirasi', 0, 0, 'Y', 'Y', ''),
(13, 'Kalender Akademik', '?module=kalender_akademik', 6, 0, 'Y', 'Y', ''),
(15, 'Kurikulum Program Studi', '?module=kurikulum_prodi', 6, 0, 'Y', 'Y', ''),
(16, 'Pesan / Aspiras', '?module=pesan', 5, 0, 'Y', 'Y', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `foto` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`, `foto`, `id_session`) VALUES
('admin', 'a0e1c88b219201f121e3884763fee39c', 'Administrator', 'admin@gmail.com', '08238923848', 'admin', 'N', 'avatar5.png', '9791182b92712e29fe9751d603ca1337');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indeks untuk tabel `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  ADD PRIMARY KEY (`id_kalender_akademik`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kurikulum_prodi`
--
ALTER TABLE `kurikulum_prodi`
  ADD PRIMARY KEY (`id_kurikulum_prodi`);

--
-- Indeks untuk tabel `menuutama`
--
ALTER TABLE `menuutama`
  ADD PRIMARY KEY (`id_main`);

--
-- Indeks untuk tabel `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  MODIFY `id_kalender_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `kurikulum_prodi`
--
ALTER TABLE `kurikulum_prodi`
  MODIFY `id_kurikulum_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `menuutama`
--
ALTER TABLE `menuutama`
  MODIFY `id_main` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
