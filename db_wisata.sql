-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2024 pada 13.50
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Muhamad Aziz', 'jack', '4ff9fc6e4e5d5f590c4f2134a8cc96d1'),
(2, 'Smith Dumdum', 'smith', 'a66e44736e753d4533746ced572ca821');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(150) NOT NULL,
  `id_admin_berita` int(11) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `konten_berita` text NOT NULL,
  `foto_berita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `id_admin_berita`, `tanggal_berita`, `konten_berita`, `foto_berita`) VALUES
(1, 'Menelusuri Keindahan Wisata Alam di Pujon Kidul dan Geopark Ciletuh', 1, '2024-08-16', 'Indonesia dikenal sebagai negeri yang kaya akan keindahan alamnya, dan dua destinasi yang semakin menarik perhatian wisatawan adalah Desa Wisata Pujon Kidul di Malang, Jawa Timur, dan Geopark Ciletuh di Sukabumi, Jawa Barat. Keduanya menawarkan pesona alam yang berbeda namun sama-sama memukau, menjadikannya pilihan yang sempurna bagi mereka yang ingin berlibur sambil menikmati keajaiban alam.\r\n\r\nDesa Wisata Pujon Kidul, terletak di kaki Gunung Kawi, telah menjadi destinasi favorit bagi wisatawan yang mencari ketenangan dan keasrian pedesaan. Dikelilingi oleh hamparan sawah hijau yang luas dan perbukitan yang memanjakan mata, desa ini menawarkan suasana yang damai dan sejuk. Salah satu daya tarik utama di sini adalah kafe sawah yang unik, di mana pengunjung dapat menikmati makanan tradisional sambil disuguhkan pemandangan alam yang menakjubkan. Tidak hanya itu, wisatawan juga bisa mengikuti berbagai aktivitas outdoor seperti bersepeda, trekking, atau sekadar berjalan-jalan menikmati udara pegunungan yang segar.\r\n\r\nSelain keindahan alamnya, Pujon Kidul juga menawarkan pengalaman budaya yang kaya. Wisatawan dapat berinteraksi langsung dengan penduduk setempat, belajar tentang kehidupan pedesaan, serta menikmati keramahan warga yang selalu siap menyambut tamu dengan senyuman. Desa ini juga memiliki sejumlah penginapan yang nyaman, menjadikannya tempat yang ideal untuk menghabiskan akhir pekan jauh dari hiruk pikuk kota.\r\n\r\nBeralih ke Jawa Barat, Geopark Ciletuh di Sukabumi adalah destinasi lain yang tak kalah menarik. Kawasan ini merupakan salah satu geopark yang diakui oleh UNESCO, terkenal dengan keunikan geologisnya yang terbentuk selama jutaan tahun. Ciletuh menawarkan pemandangan yang spektakuler, mulai dari tebing-tebing curam, air terjun yang mempesona, hingga pantai-pantai yang masih alami. Bagi pecinta alam dan petualangan, Geopark Ciletuh adalah surga yang wajib dikunjungi.\r\n\r\nSalah satu ikon utama Geopark Ciletuh adalah Puncak Darma, dari mana wisatawan bisa menikmati panorama luas Samudra Hindia dan formasi geologis yang mengagumkan. Selain itu, kawasan ini juga memiliki beberapa air terjun indah seperti Curug Awang dan Curug Sodong yang menjadi daya tarik tersendiri bagi para pengunjung. Tidak hanya itu, Geopark Ciletuh juga menyediakan berbagai fasilitas untuk mendukung kegiatan wisata seperti area perkemahan, penginapan, serta pusat informasi geologi yang edukatif.\r\n\r\nKedua destinasi ini, meski berbeda karakter, menunjukkan betapa kayanya alam Indonesia yang belum banyak terjamah. Pujon Kidul menawarkan ketenangan dan keindahan pedesaan, sementara Geopark Ciletuh memberikan pengalaman petualangan dengan sentuhan ilmiah. Bagi para pelancong yang ingin merasakan keduanya, kombinasi perjalanan ini akan memberikan pengalaman yang tak terlupakan, memperkaya wawasan sekaligus menyegarkan jiwa di tengah keindahan alam yang tiada duanya.', 'foto.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `keterangan_foto` varchar(50) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `nama_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `keterangan_foto`, `id_wisata`, `nama_foto`) VALUES
(1, '<p>Pantai Indah Kapuk</p>', 3, '769601442_gultik.jpg'),
(5, 'pemandangan', 3, '99612603_logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
(1, 'Wisata Alam', '<p>Wisata Alam </p>'),
(3, 'Wisata kuliner', '<p>wisata kuliner merupakan</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id_profil` int(3) NOT NULL,
  `konten_profil` text NOT NULL,
  `foto_profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_profil`, `konten_profil`, `foto_profil`) VALUES
(1, '<p>sit&nbsp;amet, consectetur adipiscing elit. Mauris feugiat, ipsum et vestibulum maximus, lorem nunc dictum orci, nec varius mi turpis eu purus. Nam lacinia metus eros, a gravida tellus malesuada a. Suspendisse magna metus, efficitur quis lectus id, pulvinar pulvinar ex. Mauris consectetur ut eros non ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non lacus dictum, blandit tortor in, tempor nibh. Ut fringilla malesuada orci sit amet luctus. Integer malesuada orci non eleifend imperdiet. Nam vitae bibendum nibh. Donec mauris lorem, pharetra vel libero nec, posuere imperdiet leo. Proin non velit ut neque consectetur ornare sed non quam. Pellentesque quis ex magna. Phasellus laoreet, urna vitae hendrerit sollicitudin, odio dolor dictum diam, quis fermentum leo velit eget ligula. In ac lorem suscipit orci suscipit luctus ac at libero. Integer eu ligula vel ex hendrerit malesuada. Nulla non volutpat enim, dictum tincidunt purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed imperdiet efficitur dolor, ut dapibus nulla ultricies eu. Nullam nec mauris viverra, bibendum erat in, accumsan enim. Cras elit neque, rutrum eget lorem in, dapibus euismod quam. Etiam placerat massa eu augue imperdiet egestas. Pellentesque vel commodo metus. Ut tincidunt blandit malesuada. Nam vitae nisi ut nisi ornare auctor. Nullam congue, nulla sit amet accumsan tincidunt, quam magna blandit mauris, at pretium nibh arcu eget dui. Phasellus in tellus venenatis, efficitur mi nec, consectetur ligula. Donec at massa tincidunt turpis iaculis sollicitudin. Fusce at malesuada dolor. Integer viverra mollis nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed vel dictum tellus. Duis tempor tempus nunc, eget aliquet tortor ornare id. Proin nec lorem eu orci pharetra venenatis ut vitae mauris. Phasellus eget finibus nibh. Nullam non risus quis lacus pretium mattis in et lacus. Pellentesque sed est sollicitudin, varius arcu sed, facilisis dolor. Donec sed pellentesque diam. Mauris elementum ullamcorper fermentum. Vivamus pellentesque neque quis dolor tristique consequat. Cras tellus augue, accumsan quis interdum quis, vestibulum sit amet risus. Nulla eu orci molestie lorem rutrum tempor. Integer ac dignissim purus. Maecenas feugiat congue faucibus. Vivamus id mollis turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras quis ipsum vel justo dapibus aliquam. Morbi vestibulum dui non nibh semper congue. Morbi egestas metus non ipsum pretium placerat. Donec eget sapien vitae mi auctor sodales. Phasellus at lobortis libero. Praesent congue sed leo id sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nibh nec tincidunt faucibus, orci erat aliquam elit, in aliquet purus dui sed nunc. Aliquam rutrum sed nunc et tincidunt. Nulla et justo at mauris scelerisque volutpat quis id metus. Sed eu metus nunc. Aliquam dapibus felis rhoncus, lobortis dolor eget, facilisis ipsum. In hac habitasse platea dictumst. Phasellus diam urna, commodo vitae facilisis a, pulvinar eu eros. Curabitur at mauris in neque eleifend fringilla.</p>', '20821347_logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `lokasi_wisata` varchar(100) NOT NULL,
  `link_peta` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`id_wisata`, `nama_wisata`, `id_kategori`, `lokasi_wisata`, `link_peta`, `deskripsi`) VALUES
(3, 'Pantai Indah Kapuk', 1, 'Jakarta Utara  ', 'https://www.openstreetmap.org/export/embed.html?bbox=106.71093463897706%2C-6.1273698623319%2C106.7675828933716%2C-6.090501563067665&layer=mapnik&marker=-6.108915493398301%2C106.7392466  ', '<p>Pantai Indah Kapuk</p>'),
(4, 'Gultik Blok M', 3, 'Jakarta Selatan', 'https://www.openstreetmap.org/export/embed.html?bbox=106.80022805929185%2C-6.244462554103492%2C106.80376857519151%2C-6.242158870087184&amp;layer=mapnik&amp;marker=-6.24331190000238%2C106.80199809999999', '<p>Gultik merupakan kuliner untuk tempat makan</p>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `fk_id_admin_berita` (`id_admin_berita`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `fk_id_galeri_wisata` (`id_wisata`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `fk_id_wisata_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id_profil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD CONSTRAINT `fk_id_admin_berita` FOREIGN KEY (`id_admin_berita`) REFERENCES `tbl_admin` (`id_admin`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD CONSTRAINT `fk_id_galeri_wisata` FOREIGN KEY (`id_wisata`) REFERENCES `tbl_wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD CONSTRAINT `fk_id_wisata_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
