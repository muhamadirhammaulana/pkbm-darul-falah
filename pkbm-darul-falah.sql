-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 07:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkbm-darul-falah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akreditasi`
--

CREATE TABLE `tbl_akreditasi` (
  `id_akreditasi` int(11) NOT NULL,
  `foto_akreditasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akreditasi`
--

INSERT INTO `tbl_akreditasi` (`id_akreditasi`, `foto_akreditasi`) VALUES
(1, 'akreditasi-image-1.jpg'),
(2, 'akreditasi-image-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `foto_berita` text DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `tgl_berita` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `foto_berita`, `isi_berita`, `tgl_berita`, `id_user`) VALUES
(1, 'Pengumuman Ujian Akhir Semester (UAS) 2021', 'pengumuman-ujian-akhir-semester-uas-2021', '90t5bnqjkvp112.jpg', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 102, 102); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" -webkit-tap-highlight-color:=\"\" transparent=\"\" !important;\"=\"\"><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">PENGUMUMAN</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Nomor : 1029/ IT10.A.5/AK.03/2021</span></div></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 102, 102);\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" -webkit-tap-highlight-color:=\"\" transparent=\"\" !important;\"=\"\">Dengan ini disampaikan kepada seluruh mahasiswa Institut Teknologi Kalimantan (ITK) hal-hal sebagai berikut :</p><ol style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 23px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-position: inside; list-style-image: initial; line-height: 26px; color: rgb(102, 102, 102); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" -webkit-tap-highlight-color:=\"\" transparent=\"\" !important;\"=\"\"><li style=\"text-align: justify; margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; -webkit-tap-highlight-color: transparent !important;\">Ujian Akhir Semester (UAS) diselenggarakan secara hybrid sesuai jadwal yang telah ditetapkan yaitu pada minggu ke-17 s.d.18 (tanggal 6-17 Desember 2021);</li><li style=\"text-align: justify; margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; -webkit-tap-highlight-color: transparent !important;\">Seluruh mahasiswa diwajibkan melakukan pengisian kuesioner Indeks Pengajaran Dosen (Evaluasi Proses Belajar Mengajar) melalui laman gerbang.itk.ac.id mulai pekan ke-14 s.d 16 (tanggal 22 November-4 Desember 2021);</li><li style=\"text-align: justify; margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; -webkit-tap-highlight-color: transparent !important;\">Mahasiswa memastikan telah mengisi 2 kuesioner yaitu kuesioner penilaian mata kuliah dan kuesioner penilaian dosen;</li><li style=\"text-align: justify; margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; -webkit-tap-highlight-color: transparent !important;\">Mahasiswa yang belum melakukan pengisian IPD hingga waktu yang ditentukan, tidak dapat melihat nilai pada transkip melalui laman gerbang.itk.ac.id;</li><li style=\"text-align: justify; margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; -webkit-tap-highlight-color: transparent !important;\">Seluruh mahasiswa diwajibkan melakukan pemutakhiran biodata diri yang dapat diakses melalui laman gerbang.itk.ac.id dengan memasukkan NIM dan password yang dimiliki dan memilih login SI Akademik;</li><li style=\"text-align: justify; margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; -webkit-tap-highlight-color: transparent !important;\">Bila terdapat data diri yang tidak sesuai, mahasiswa dapat mengajukan Permohonan Perubahan Data Mandiri (PDM) melalui email akademik@itk.ac.id maksimal di pekan ke 16 disetiap semester berjalan;</li><li style=\"text-align: justify; margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; -webkit-tap-highlight-color: transparent !important;\">Jika terdapat kendala dalam hal pengisian dapat menghubungi email akademik@itk.ac.id.</li></ol><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 102, 102);\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" -webkit-tap-highlight-color:=\"\" transparent=\"\" !important;\"=\"\">Demikian untuk diperhatikan.</p>', '2022-01-05', 1),
(2, 'Libur Sekolah Diubah Menjadi 20 hingga 31 Desember 2021', 'libur-sekolah-diubah-menjadi-20-hingga-31-desember-2021', 'Annotation_2020-04-22_1257383.png', '<p style=\"text-align: justify; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(106, 107, 108);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;=\"\" text-align:=\"\" justify;\"=\"\">Diskominfo Kota Tanjungpinang - Dinas Pendidikan (Disdik) Kota Tanjungpinang kembali mengeluarkan surat edaran tentang pengaturan jadwal libur semester ganjil bagi sekolah tingkat Sekolah Dasar (SD)/Madrasah Ibtidaiyah (MI) dan Sekolah Menengah Pertama (SMP)/Madrasah Tsanawiyah (MTs) yang diubah menjadi 20 sampai 31 Desember 2021.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(106, 107, 108);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;=\"\" text-align:=\"\" justify;\"=\"\">Sebelumnya jadwal libur semester ganjil tahun pelajaran 2021/2022 direncanakan akan dimulai pada 4 hingga 15 Januari 2022 mendatang.&nbsp;</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(106, 107, 108);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;=\"\" text-align:=\"\" justify;\"=\"\">Kadisdik Kota Tanjungpinang, Endang Susilawati menjelaskan atas perubahan jadwal libur itu pihaknya kembali mengeluarkan surat edaran nomor 432.72/3226/5.3.1/2021 tentang penyelenggaraan pembelajaran menjelang libur natal 2021 dan tahun baru 2022 pada Selasa (14/12) kemarin.&nbsp;</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(106, 107, 108);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;=\"\" text-align:=\"\" justify;\"=\"\">\"Menindaklanjuti surat edaran dari Sekretaris Jenderal Kementerian Pendidikan, Kebudayaan Riset dan Teknologi nomor 32 tahun 2021 yang terbit pada tanggal 14 Desember 2021,\" kata Endang, Rabu (15/12).&nbsp;</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(106, 107, 108);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;=\"\" text-align:=\"\" justify;\"=\"\">Lebih lanjut, Endang menjelaskan jadwal libur yang semula direncanakan pada awal Januari 2022 diubah menjadi tanggal 20 hingga 31 Desember 2021. Untuk jadwal pembagian raport siswa dilakukan pada Sabtu (18/12) dan teknisnya diatur oleh setiap satuan pembelajaran.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(106, 107, 108);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;=\"\" text-align:=\"\" justify;\"=\"\">\"Awal masuk semester genap tahun pelajaran 2021/2022 pada tanggal 3 Januari 2022 mendatang,\" ujar Endang.&nbsp;</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(106, 107, 108);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;=\"\" text-align:=\"\" justify;\"=\"\">Endang menegaskan, satuan pendidikan tidak diperkenankan untuk menambah waktu libur periode natal 2021 dan tahun baru 2022 di luar waktu libur semester yang telah ditetapkan dalam kalender pendidikan.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(106, 107, 108);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;=\"\" text-align:=\"\" justify;\"=\"\">\"Dengan terbitnya surat terbaru, maka surat edaran nomor 423.72/3161/5.3.01/2021 yang terbit pada tanggal 2 Desember 2021 kemarin tetap berlaku untuk point tertentu yang tidak bertentangan dengan surat ini,\" tambahnya. (<em>PIR</em>/Dinas Kominfo).</p>', '2022-01-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id_foto` int(11) NOT NULL,
  `foto` text DEFAULT NULL,
  `id_galeri` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `foto`, `id_galeri`) VALUES
(3, '433965.jpg', 1),
(5, '1589177774938.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(255) DEFAULT NULL,
  `sampul_galeri` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `nama_galeri`, `sampul_galeri`) VALUES
(1, 'Upacara HUT RI', '90t5bnqjkvp11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_legalitas`
--

CREATE TABLE `tbl_legalitas` (
  `id_legalitas` int(11) NOT NULL,
  `foto_legalitas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_legalitas`
--

INSERT INTO `tbl_legalitas` (`id_legalitas`, `foto_legalitas`) VALUES
(1, 'legalitas-npsn.jpg'),
(2, 'legalitas-izin-operasional.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medsos`
--

CREATE TABLE `tbl_medsos` (
  `id_medsos` int(11) NOT NULL,
  `jenis_medsos` varchar(255) DEFAULT NULL,
  `nama_medsos` varchar(255) DEFAULT NULL,
  `link_medsos` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_medsos`
--

INSERT INTO `tbl_medsos` (`id_medsos`, `jenis_medsos`, `nama_medsos`, `link_medsos`) VALUES
(1, 'Instagram', '@setara.sablon', 'https://instagram.com/setara.sablon'),
(2, 'Facebook', 'PKBM Darul Falah', '#'),
(3, 'Youtube', 'PKBM Darul Falah', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_profil`, `nama`, `logo`, `no_telp`, `email`) VALUES
(1, 'PKBM Darul Falah', 'default-icon.jpg', '0821 3829 7099 / 0822 1331 5046', 'pkbmdarulfalah.jepara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_program`
--

CREATE TABLE `tbl_program` (
  `id_program` int(11) NOT NULL,
  `nama_program` varchar(255) DEFAULT NULL,
  `foto_program` text DEFAULT NULL,
  `ket_program` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_program`
--

INSERT INTO `tbl_program` (`id_program`, `nama_program`, `foto_program`, `ket_program`) VALUES
(1, 'Pendidikan Kesetaraan Paket A', 'program-1.jpg', 'Merupakan pendidikan kesetaraan paket A, yakni setara dengan SD/MI.'),
(2, 'Pendidikan Kesetaraan Paket B', 'program-2.jpg', 'Merupakan pendidikan kesetaraan paket B, yakni setara dengan SMP/MTs.'),
(3, 'Pendidikan Kesetaraan Paket C', 'program-3.jpeg', 'Merupakan pendidikan kesetaraan paket C, yakni setara dengan SMA/MA untuk saat ini hanya menerima program IPS.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_struktur`
--

CREATE TABLE `tbl_struktur` (
  `id_struktur` int(11) NOT NULL,
  `foto_struktur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_struktur`
--

INSERT INTO `tbl_struktur` (`id_struktur`, `foto_struktur`) VALUES
(1, 'profil-struktur.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `foto_user` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `foto_user`, `username`, `password`, `level`) VALUES
(1, 'Admin PKBM Darul Falah', NULL, 'admin', '$2y$10$2j/YZUhBCFW8dcq/Oa0GoeiuG2jXl.JPt31CwQq1uEwi/8m9/Muie', '1'),
(3, 'admin123456', NULL, 'admin1', '$2y$10$AHeKaaJGSDAAhmlfLSWP0.6Xm3ISwJ/h3ZxP6qVueRhhG.7mRqIH2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id_video` int(11) NOT NULL,
  `video` text DEFAULT NULL,
  `id_galeri` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visimisi`
--

CREATE TABLE `tbl_visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `tujuan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visimisi`
--

INSERT INTO `tbl_visimisi` (`id_visimisi`, `visi`, `misi`, `tujuan`) VALUES
(1, '<ul><li>Terwujudnya Masyarakat Yang beriman, Bertaqwa, Berbudi Luhur, Terampil, Dan Gemar Membaca</li></ul>', '<ol><li>Mengembangkan Sumber Daya Manusia (SDM) yang berkualitas</li><li>Menciptakan kesempatan belajar</li><li>Membangkitkan kemauan belajar</li><li>Memandirikan warga belajar</li></ol>', '<ol><li>Melaksanakan Pendidikan Non-Formal dan Informal</li><li>Memberdayakan masyarakat melalui progam pembelajaran latihan keterampilan (life skill) dan membentuk unit-unit usaha dengan menggali segenap potensi yang ada</li><li>Melaksanakan pelatihan Tutor, NST, dan pelatihan-pelatihan lain</li><li>Membantu progam pemerintah dalam bidang pembangunan manusia seutuhnya</li><li>Meningkatkan taraf hidup serta memperbaiki lingkungan hidup sehat</li></ol>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akreditasi`
--
ALTER TABLE `tbl_akreditasi`
  ADD PRIMARY KEY (`id_akreditasi`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_legalitas`
--
ALTER TABLE `tbl_legalitas`
  ADD PRIMARY KEY (`id_legalitas`);

--
-- Indexes for table `tbl_medsos`
--
ALTER TABLE `tbl_medsos`
  ADD PRIMARY KEY (`id_medsos`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tbl_program`
--
ALTER TABLE `tbl_program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akreditasi`
--
ALTER TABLE `tbl_akreditasi`
  MODIFY `id_akreditasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_legalitas`
--
ALTER TABLE `tbl_legalitas`
  MODIFY `id_legalitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_medsos`
--
ALTER TABLE `tbl_medsos`
  MODIFY `id_medsos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_program`
--
ALTER TABLE `tbl_program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
