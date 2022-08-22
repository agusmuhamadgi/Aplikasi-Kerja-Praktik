-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 12:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengabdian`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(1, 'Dekan'),
(2, 'Kaprodi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota_dua`
--

CREATE TABLE `tb_anggota_dua` (
  `id` int(11) NOT NULL,
  `nama_anggota_dua` varchar(100) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `nidn_dua` varchar(50) NOT NULL,
  `Pendidikan_tertinggi_dua` varchar(100) NOT NULL,
  `email_dua` varchar(100) NOT NULL,
  `jabatan_fungsional_dua` varchar(100) NOT NULL,
  `no_hp_dua` varchar(100) NOT NULL,
  `bidang_ilmu_dua` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota_dua`
--

INSERT INTO `tb_anggota_dua` (`id`, `nama_anggota_dua`, `id_prodi`, `nidn_dua`, `Pendidikan_tertinggi_dua`, `email_dua`, `jabatan_fungsional_dua`, `no_hp_dua`, `bidang_ilmu_dua`) VALUES
(3, 'Rahmad Kurniadi', 11, '5170411356', 'S-2', 'rahmadkurniadi@gmail.com', 'Dosen', '08876541222', 'Fuzzy Logic'),
(4, 'Jody Septiawan', 10, '5170411373', 'S-2', 'jodyseptiawan@gmail.com', 'Tenaga Pengajar', '08876541222', 'Fuzzy Logic'),
(5, 'Rahmad Kurniadi', 3, '5170411356', 'S-2', 'rarasrat30@gmail.com', 'Tenaga Pengajar', '08876541222', 'Fuzzy Logic');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota_satu`
--

CREATE TABLE `tb_anggota_satu` (
  `id` int(11) NOT NULL,
  `nama_anggota_satu` varchar(100) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `nidn_satu` varchar(50) NOT NULL,
  `Pendidikan_tertinggi_satu` varchar(100) NOT NULL,
  `email_satu` varchar(100) NOT NULL,
  `jabatan_fungsional_satu` varchar(100) NOT NULL,
  `no_hp_satu` varchar(100) NOT NULL,
  `bidang_ilmu_satu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota_satu`
--

INSERT INTO `tb_anggota_satu` (`id`, `nama_anggota_satu`, `id_prodi`, `nidn_satu`, `Pendidikan_tertinggi_satu`, `email_satu`, `jabatan_fungsional_satu`, `no_hp_satu`, `bidang_ilmu_satu`) VALUES
(3, 'Ade Rohmat Maulana', 11, '5170411330', 'S-2', 'aderohmatmaulana22@gmail.com', 'Tenaga Pengajar', '089345645311', 'Sistem Cerdas'),
(4, 'Ilham Fathullah', 10, '5170411336', 'S-2', 'ilhamfathullah@gmail.com', 'Tenaga Pengajar', '089345645311', 'Sistem Cerdas'),
(5, 'Ade Rohmat Maulana', 3, '5170411336', 'S-2', 'aderohmatmaulana77@gmail.com', 'Tenaga Pengajar', '089345645311', 'Sistem Cerdas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota_tiga`
--

CREATE TABLE `tb_anggota_tiga` (
  `id` int(11) NOT NULL,
  `nama_anggota_tiga` varchar(100) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `nidn_tiga` varchar(50) NOT NULL,
  `Pendidikan_tertinggi_tiga` varchar(100) NOT NULL,
  `email_tiga` varchar(100) NOT NULL,
  `jabatan_fungsional_tiga` varchar(100) NOT NULL,
  `no_hp_tiga` varchar(100) NOT NULL,
  `bidang_ilmu_tiga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota_tiga`
--

INSERT INTO `tb_anggota_tiga` (`id`, `nama_anggota_tiga`, `id_prodi`, `nidn_tiga`, `Pendidikan_tertinggi_tiga`, `email_tiga`, `jabatan_fungsional_tiga`, `no_hp_tiga`, `bidang_ilmu_tiga`) VALUES
(3, 'Rizal Firdaus', 11, '5170411373', 'S-2', 'rizalfirdaus@gmail.com', 'Dosen', '08979788767', 'KKO'),
(4, 'Ade Rohmat Maulana', 10, '5170411337', 'S-2', 'aderohmatmaulana77@gmail.com', 'Tenaga Pengajar', '08979788767', 'Sistem Cerdas'),
(5, 'Rizal Firdaus', 3, '5170111337', 'S-2', 'agus.ibad@student.uty.ac.id', 'Tenaga Pengajar', '08979788767', 'Sistem Cerdas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nik_dosen` varchar(50) NOT NULL,
  `nidn_dosen` varchar(50) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `email_dosen` varchar(100) NOT NULL,
  `jabatan_dosen` varchar(100) NOT NULL,
  `no_hp_dosen` varchar(100) NOT NULL,
  `bidang_ilmu_dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nik_dosen`, `nidn_dosen`, `nama_dosen`, `prodi`, `pendidikan`, `email_dosen`, `jabatan_dosen`, `no_hp_dosen`, `bidang_ilmu_dosen`) VALUES
(1, '110203011', '0510106802', 'R.Yohanes Radjaban, Dr.,M.Hum.', '	Sastra Inggris S-1', 'S3', 'yohanesr@uty.ac.id', 'Lektor', '089765345675', 'Bisnis & Humaniora'),
(2, '110203012', '0529037401', 'Endy Marlina, Dr.,MT.', '	Arsitektur S-1', 'S3', 'endymarlina@uty.ac.id', 'Lektor', '087890987651', 'Sains & Teknologi'),
(3, '110203013', '0527017202', 'Sutarman, Ph.D.,M.Kom.', 'Manajemen Informatika D-3', 'S3', 'dir.diploma@uty.ac.id', 'Lektor', '08767542231', 'Informatika'),
(4, '110203014', '0511127301', 'Erik Iman Heri Ujianto,Dr.,M.Kom.', 'Manajemen Informatika D-3', 'S3', 'erikimam@uty.ac.id', 'Lektor Kepala', '087654321345', 'Kriptografi'),
(5, '110203015', '0511097301', 'Wawan Setiawan, SE.,MSi., Ak., CA.', 'Profesi Akuntan Profesi', 'S2', 'wawansetiawan@uty.ac.id', 'Kaprodi Akuntansi Program Sarjana', '089789765678', 'Akuntansi'),
(6, '110203016', '0530098401', 'Septi Dianasari, SE, M.Sc', 'S1 Manajemen', 'S2', 'septidianasari@uty.ac.id', 'Kaprodi Manajemen Program Sarjana', '085234764384', 'Manajemen'),
(7, '110203017', '517041137', 'Aneke Dewi Rahayu, S.Psi, MA, Psi', 'S1 Psikologi', 'S2', 'anekedewi@uty.ac.id', 'Kaprodi Psikologi Program Sarjana', '087677897357', 'Psikologi'),
(8, '110203018', '517041138', 'Tiffany Setyo Pratiwi, S.I.P., M.A.', 'S1 Hubungan Internasional ', 'S2', 'tiffanysetyo@uty.ac.id', 'Kaprodi Hubungan Internasional  Program Sarjana', '082153223452', 'Hubungan Internasional '),
(9, '110203019', '517041139', 'Andri Prasetyo Yuwono, S. Sos., M.I.Kom', 'S1 Ilmu Komunikasi', 'S2', 'andriprasetyo@uty.ac.id', 'Kaprodi Ilmu Komunikasi Program Sarjana', '087564456236', 'Ilmu Komunikasi'),
(10, '110203020', '517041120', 'Suryo Sudiro, SS., M.Hum.', 'S1 Sastra Inggris', 'S2', 'suryosudiro@uty.ac.id', 'Kaprodi Sastra Inggris Program Sarjana', '087890776514', 'Sastra Inggris'),
(11, '110203021', '517041131', 'Vivianti, S.Pd., M.Pd.', 'S1 Pendidikan Tek. Informasi', 'S2', 'vivianti@uty.ac.id', 'Kaprodi Pendidikan Tek. Informasi Prog. Sarjana', '08988708911', 'Pendidikan Tek. Informasi'),
(12, '110203022', '517041132', 'Sayid Abdul Karim, S.Pd., M.Pd.', 'S1 Pendidikan  Bahasa Inggris', 'S2', 'sayidabdulkarim@uty.ac.id', 'Kaprodi Pendidikan  Bahasa Inggris Prog. Sarjana', '085675775235', 'Pendidikan  Bahasa Inggris'),
(13, '110203023', '517041133', 'Ulfa Amalia, S.Psi., MA.', 'S1 Bimbingan Konseling', 'S2', 'ulfaamalia@uty.ac.id', 'Kaprodi Bimbingan Konseling', '085432221345', 'Bimbingan Konseling'),
(14, '110203024', '517041134', 'Umar Zaky, S.Kom, M.Cs.', 'S1 Sistem Informasi', 'S2', 'umarzaky@uty.ac.id', 'Kaprodi Sistem Informasi Program Sarjana', '085743200650', 'Basis Data'),
(15, '110203025', '517041135', 'Enny Itje Sela, Dr., S.Si., M.Kom', 'S1 Informatika', 'S3', 'ennyitje@uty.ac.id', 'Kaprodi Informatika Program Sarjana', '085643458837', 'Sistem Cerdas'),
(16, '110203026', '517041136', 'Fredi Prima Sakti, S.Pd., M.Eng.', 'S1 Teknik Elektro', 'S2', 'fredyps@uty.ac.id', 'Kaprodi Teknik Elektro Program Sarjana', '087654234674', 'Elektro'),
(17, '110203027', '517041137', 'Ms Hendriyawan, ST, M.Eng., Ph.D.', 'S1 Teknik Komputera', 'S3', 'mshendriyawan@uty.ac.id', 'Kaprodi Teknik Komputer Program Sarjana', '087654346764', 'Teknik Komputer'),
(18, '110203028', '517041138', 'Rianto, Dr., S.Kom.,M.Eng.', 'S1 Sains Data', 'S3', 'rianto@uty.ac.id', 'Kaprodi Sains Data Program Sarjana', '085346231442', 'Sains Data'),
(19, '110203029', '517041139', 'Rianto, Dr., S.Kom.,M.Eng.', 'S1 Informatika Medis', 'S3', 'rianto@uty.ac.id', 'Kaprodi Informatika Medis Program Sarjana', '085321356442', 'Informatika Medis'),
(20, '110203030', '517041140', 'Adwiyah Asyifa, ST, M.Eng', 'S1 Teknik Sipil', 'S2', 'adwiyahasyifa@uty.ac.id', 'Kaprodi Teknik Sipil Program Sarjana', '085665375825', 'Teknik Sipil'),
(21, '110203031', '517041141', 'Endang Setyowati, Dr., Ir., MT.', 'S1 Arsitektur', 'S3', 'endangsetyowati@uty.ac.id', 'Kaprodi Arsitektur Program Sarjana', '085359679879', 'Arsitektur'),
(22, '110203032', '517041142', 'Widya Setiafindari, ST, M.Sc', 'S1 Teknik Industri', 'S2', 'widiasetiafindari@uty.ac.id', 'Kaprodi Teknik Industri Program Sarjana', '087699359249', 'Teknik Industri'),
(23, '110203033', '517041143', 'Ratika Tulus Wahyuhana, S.T., M.T.', 'S1 Perencanaan Wilayah Kota', 'S2', 'ratikatuluswahyuhana@uty.ac.id', 'Kaprodi Perencanaan Wilayah Kota Program Sarjana', '082224342662', 'Perencanaan Wilayah Kota'),
(24, '110203034', '517041144', 'Akhmad Afnan, SE, M.Acc.', 'D3 Akuntansi', 'S2', 'akhmadafwan@uty.ac.id', 'Kaprodi Akuntansi Program Diploma 3', '085224354864', 'Akuntansi'),
(25, '110203035', '517041145', 'Adityo Permana Wibowo, S.Kom, M.Cs', 'D3 Sistem Informasi', 'S2', 'adityopermanawibowo@uty.ac.id', 'Kaprodi Sistem Informasi Program Diploma 3', '081933184846', 'Sistem Informasi'),
(26, '110203036', '517041146', 'Tetti  Indriati Kastuti, SS, M.Pd.', 'D3 Bahasa Jepang', 'S2', 'tettiindrianti@uty.ac.id', 'Kaprodi Bahasa Jepang Program Diploma 3', '087553467896', 'Bahasa Jepang'),
(27, '110203037', '517041147', 'Novia Russilawatie, SS., M.Hum.', 'D3 Bahasa Inggris', 'S2', 'noviarusilawati@uty.ac.id', 'Kaprodi Bahasa Inggris Program Diploma 3', '087827374757', 'Bahasa Inggris'),
(28, '110203038', '517041148', 'Aisha Astriecia, S.Par., M.Sc.', 'D4 Destinasi Pariwisata', 'S2', 'aishaastriecia@uty.ac.id', 'Kaprodi Destinasi Pariwisata  Program Sarjana Terapan', '085344234564', 'Destinasi Pariwisata');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `id` int(11) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `id_dekan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`id`, `fakultas`, `id_dekan`) VALUES
(1, 'Fakultas Bisnis & Humaniora', 1),
(2, 'Fakultas Sains & Teknologi', 2),
(3, 'Program Diploma', 3),
(4, 'Pasca Sarjana', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kaprodi`
--

CREATE TABLE `tb_kaprodi` (
  `id` int(11) NOT NULL,
  `nama_kaprodi` varchar(128) NOT NULL,
  `nidn_kaprodi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kaprodi`
--

INSERT INTO `tb_kaprodi` (`id`, `nama_kaprodi`, `nidn_kaprodi`) VALUES
(1, 'Wawan Setiawan, SE.,MSi., Ak., CA.', '0511097301'),
(2, 'Septi Dianasari, SE, M.Sc', '0530098401'),
(3, 'Aneke Dewi Rahayu, S.Psi, MA, Psi', '0520108402'),
(4, 'Tiffany Setyo Pratiwi, S.I.P., M.A.', '0509079301'),
(5, 'Andri Prasetyo Yuwono, S. Sos., M.I.Kom', '0514098101'),
(6, 'Suryo Sudiro, SS., M.Hum.', '0526047103'),
(7, 'Vivianti, S.Pd., M.Pd.', '0520109001'),
(8, 'Sayid Abdul Karim, S.Pd., M.Pd.', '0523047302'),
(9, 'Ulfa Amalia, S.Psi., MA.', ' 0525048604'),
(10, 'Umar Zaky, S.Kom, M.Cs.', '0516018701'),
(11, 'Enny Itje Sela, Dr., S.Si., M.Kom', '0514127001'),
(12, 'Fredi Prima Sakti, S.Pd., M.Eng.', ' 0522089002'),
(13, 'Ms Hendriyawan, ST, M.Eng., Ph.D.', '0016087207'),
(14, 'Rianto, Dr., S.Kom.,M.Eng.', '0527017301'),
(15, 'Rianto, Dr., S.Kom.,M.Eng.', '0527017301'),
(16, 'Adwiyah Asyifa, ST, M.Eng', '0527078102'),
(17, 'Endang Setyowati, Dr., Ir., MT.', ' 0019096209'),
(18, 'Widya Setiafindari, ST, M.Sc', ' 0504098203'),
(19, 'Ratika Tulus Wahyuhana, S.T., M.T.', ' 0529049001'),
(20, 'Akhmad Afnan, SE, M.Acc.', '0501079101'),
(21, 'Adityo Permana Wibowo, S.Kom, M.Cs', '0508096803'),
(22, '	Tetti  Indriati Kastuti, SS, M.Pd.', '0505116901'),
(23, 'Novia Russilawatie, SS., M.Hum.', '0525059202'),
(24, 'Aisha Astriecia, S.Par., M.Sc.', '0525059202');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `kategori`) VALUES
(1, 'Kompetitif Nasional'),
(2, 'Desentralisasi'),
(3, 'Penugasan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ketua_lppm`
--

CREATE TABLE `tb_ketua_lppm` (
  `id` int(11) NOT NULL,
  `lppm` varchar(100) NOT NULL,
  `nidn_lppm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ketua_lppm`
--

INSERT INTO `tb_ketua_lppm` (`id`, `lppm`, `nidn_lppm`) VALUES
(1, 'Ifah Rofiqoh, S.E., M.Si., Ak., C.A.', 505086902);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ketua_pengabdi`
--

CREATE TABLE `tb_ketua_pengabdi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_ketua_pengabdi` varchar(100) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `pendidikan_tertinggi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jabatan_fungsional` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `bidang_ilmu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ketua_pengabdi`
--

INSERT INTO `tb_ketua_pengabdi` (`id`, `id_user`, `nama_ketua_pengabdi`, `id_prodi`, `nidn`, `pendidikan_tertinggi`, `email`, `jabatan_fungsional`, `no_hp`, `bidang_ilmu`) VALUES
(3, 4, 'Raras Ratu Ayu Tatariani', 11, '5170411334', 'S-3', 'rtatariani@gmail.com', 'Lektor', '082142175082', 'Web Mobile'),
(4, 3, 'Umar Zaki, S.Kom., M.Cs', 10, '0516018701', 'S-2', 'umarzaky@uty.ac.id', 'Lektor', '082142175082', 'Ilmu Komputer'),
(5, 5, 'Ady Rduainto', 3, '5170411330', 'S-2', 'adyrudianto26@gmail.com', 'Dosen', '082142175083', 'SCR');

-- --------------------------------------------------------

--
-- Table structure for table `tb_koreksian`
--

CREATE TABLE `tb_koreksian` (
  `id` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `tgl_koreksi` int(11) NOT NULL DEFAULT current_timestamp(),
  `komentar_koreksi` varchar(100) NOT NULL,
  `file_koreksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_koreksian`
--

INSERT INTO `tb_koreksian` (`id`, `id_pengajuan`, `tgl_koreksi`, `komentar_koreksi`, `file_koreksi`) VALUES
(1, 1, 2147483647, 'masih salah', 'Algoritma_RSA.pdf'),
(2, 3, 2147483647, 'masih salah mas', '5170411331_AgusMuhamadGaosstulIbad_Proposal_Setik.pdf'),
(3, 2, 1612858715, 'salah', '51704113311.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_panduan`
--

CREATE TABLE `tb_panduan` (
  `id` int(11) NOT NULL,
  `id_pengupload` int(11) NOT NULL,
  `panduan` varchar(128) NOT NULL,
  `nama_file` varchar(250) NOT NULL,
  `waktu` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_panduan`
--

INSERT INTO `tb_panduan` (`id`, `id_pengupload`, `panduan`, `nama_file`, `waktu`) VALUES
(1, 1, 'Buku Panduan Pelaksanaan Pengabdian kepada Masyarakat', 'Buku_Panduan_Pelaksanaan_Penelitian_dan_Pengabdian_kepada_Masyarakat.pdf', 1612496185),
(3, 1, 'Buku Panduan Pelaksanaan Pengabdian kepada Masyarakat V2', 'Buku-Panduan-Pelaksanaan-Penelitian-dan-Pengabdian-Kepada-Masyarakat-Edisi-XI-Tahun-2017.pdf', 1612527079),
(4, 1, 'panduan terbaru', 'Contoh_Bab_4_compressed.pdf', 1612582544);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_pengabdian` varchar(100) NOT NULL,
  `id_skim` int(11) NOT NULL,
  `dana` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `id_ketua_pengabdi` int(11) NOT NULL,
  `id_anggota_satu` int(11) NOT NULL,
  `id_anggota_dua` int(11) NOT NULL,
  `id_anggota_tiga` int(11) NOT NULL,
  `id_pihak_satu` int(11) NOT NULL,
  `id_pihak_dua` int(11) NOT NULL,
  `id_pihak_tiga` int(11) NOT NULL,
  `proposal` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `komentar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id`, `id_user`, `judul_pengabdian`, `id_skim`, `dana`, `jumlah`, `id_ketua_pengabdi`, `id_anggota_satu`, `id_anggota_dua`, `id_anggota_tiga`, `id_pihak_satu`, `id_pihak_dua`, `id_pihak_tiga`, `proposal`, `status`, `komentar`) VALUES
(1, 4, 'Budidaya Padi Sehat menuju Ketahanan Pangan Rumahtangga Petani di Pedesaan', 2, 'UTY', '10000000', 3, 3, 3, 3, 15, 2, 1, 'BAB_3.pdf', 3, 'Pengajuan telah disahkan'),
(2, 3, 'Pengembangan Desa Wisata Budaya di Desa Tenganan, Kec. Manggis, Kab. Karangasem ', 3, 'Universitas Teknologi Yogyakarta', '150000000', 4, 4, 4, 4, 14, 2, 1, 'BAB_31.pdf', 1, 'sedang diproses'),
(3, 5, 'Deteksi Kesesuaian logo UTY menggunakan metode template matching pada citra sertifikat', 3, 'UTY', '150000000', 5, 5, 5, 5, 3, 1, 1, '5170411331_AgusMuhamadGaosstulIbad_Proposal_Setik1.pdf', 2, 'masih salah mas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengelola`
--

CREATE TABLE `tb_pengelola` (
  `id` int(11) NOT NULL,
  `pengelola` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengelola`
--

INSERT INTO `tb_pengelola` (`id`, `pengelola`) VALUES
(1, 'DRPM'),
(2, 'PT'),
(3, 'MITRA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `pertanyaan_satu` varchar(100) NOT NULL,
  `pertanyaan_dua` varchar(100) NOT NULL,
  `pertanyaan_tiga` varchar(100) NOT NULL,
  `pertanyaan_empat` varchar(100) NOT NULL,
  `pertanyaan_lima` varchar(100) NOT NULL,
  `pertanyaan_enam` varchar(100) NOT NULL,
  `pertanyaan_tujuh` varchar(100) NOT NULL,
  `pertanyaan_delapan` varchar(100) NOT NULL,
  `pertanyaan_sembilan` varchar(100) NOT NULL,
  `pertanyaan_sepuluh` varchar(100) NOT NULL,
  `pertanyaan_sebelas` varchar(100) NOT NULL,
  `pertanyaan_duabelas` varchar(100) NOT NULL,
  `pertanyaan_tigabelas` varchar(100) NOT NULL,
  `pertanyaan_empatbelas` varchar(100) NOT NULL,
  `pertanyaan_limabelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id`, `id_pengajuan`, `pertanyaan_satu`, `pertanyaan_dua`, `pertanyaan_tiga`, `pertanyaan_empat`, `pertanyaan_lima`, `pertanyaan_enam`, `pertanyaan_tujuh`, `pertanyaan_delapan`, `pertanyaan_sembilan`, `pertanyaan_sepuluh`, `pertanyaan_sebelas`, `pertanyaan_duabelas`, `pertanyaan_tigabelas`, `pertanyaan_empatbelas`, `pertanyaan_limabelas`) VALUES
(1, 1, 'ya', 'ya', 'akan di publikasikan di google schoolar', 'ya', 'sudah', 'bersedia', 'bersedia', 'ya', 'belum', 'tidak', 'tidak', 'belum', 'ya', 'ya', 'belum'),
(2, 2, 'ya', 'ya', 'akan di publikasikan di google schoolar', 'ya', 'sudah', 'bersedia', 'bersedia', 'ya', 'sudah', 'ya', 'ya', 'sudah', 'ya', 'ya', 'sudah'),
(3, 3, 'ya', 'ya', 'akan di publikasikan di google schoolar', 'ya', 'sudah', 'bersedia', 'bersedia', 'ya', 'sudah', 'ya', 'ya', 'sudah', 'ya', 'ya', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `id_kaprodi` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id`, `nama_prodi`, `id_kaprodi`, `id_fakultas`) VALUES
(1, 'S1 Akuntansi', 1, 1),
(2, 'S1 Manajemen', 2, 1),
(3, 'S1 Psikologi', 3, 1),
(4, 'S1 Hubungan Internasional', 4, 1),
(5, 'S1 Ilmu Komunikasi', 5, 1),
(6, 'S1 Sastra Inggris', 6, 1),
(7, 'S1 Pendidikan Tek. Informasi', 7, 1),
(8, 'S1 Pendidikan Bahasa Inggris', 8, 1),
(9, 'S1 Bimbingan Konseling', 9, 1),
(10, 'S1 Sistem Informasi', 10, 2),
(11, 'S1 Informatika', 11, 2),
(12, 'S1 Teknik Elektro', 12, 2),
(13, 'S1 Teknik Komputer', 13, 2),
(14, 'S1 Sains Data', 14, 2),
(15, 'S1 Informatika Medis', 15, 2),
(16, 'S1 Teknik Sipil', 16, 2),
(17, 'S1 Arsitektur', 17, 2),
(18, 'S1 Teknik Industri', 18, 2),
(19, 'S1 Perencanaan Wilayah Kota', 19, 2),
(20, 'D3 Akuntansi', 20, 3),
(21, 'D3 Sistem Informasi', 21, 3),
(22, 'D3 Bahasa jepang', 22, 3),
(23, 'D3 Bahasa Inggris', 23, 3),
(24, 'D4 Destinasi Wisata', 25, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_revisi`
--

CREATE TABLE `tb_revisi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `tgl_revisi` int(11) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_skim`
--

CREATE TABLE `tb_skim` (
  `id` int(11) NOT NULL,
  `skim` varchar(128) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_pengelola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_skim`
--

INSERT INTO `tb_skim` (`id`, `skim`, `id_kategori`, `id_pengelola`) VALUES
(1, 'Program Kemitraan Masyarakat(PKM)', 1, 1),
(2, 'Program Kemitraan Masyarakat Stimulus(PKMS)', 1, 1),
(3, 'Program Kuliah Kerja Nyata Pembelajaran dan Pemberdayaan Masyarakat (KKN-PPM)', 1, 1),
(4, 'Program Pengembangan Kewirausahaan (PPK)', 1, 1),
(5, 'Program Pengembangan Produk Unggulan Daerah (PPPUD)', 1, 1),
(6, 'Program Pengembangan Usaha Produk Intelektual Kampus (PPUPIK)', 1, 1),
(7, 'Program Pengembangan Desa Mitra (PPDM)', 1, 1),
(8, 'Program Kemitraan Wilayah (PKW)', 1, 1),
(9, 'Program Pemberdayaan Masyarakat Unggulan Perguruan Tinggi (PPMUPT)', 2, 2),
(10, 'Program Penerapan Iptek kepada Masyarakat (PPIM)', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tim_reviewer`
--

CREATE TABLE `tb_tim_reviewer` (
  `id` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `id_lppm` int(11) NOT NULL,
  `id_kaprodi` int(11) NOT NULL,
  `id_dekan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tim_reviewer`
--

INSERT INTO `tb_tim_reviewer` (`id`, `id_pengajuan`, `id_lppm`, `id_kaprodi`, `id_dekan`) VALUES
(1, 1, 1, 15, 2),
(2, 2, 1, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `id_jabatan`, `image`, `password`, `role_id`, `is_active`) VALUES
(1, 'ADMIN LPPM', 'adminlppm@gmail.com', 0, 'default.jpg', '$2y$10$dE16dWrGUqXu2XELLCJTnuad66vFp5JanoH3Q7eE2Hozc0YtvTKgW', 1, 1),
(2, 'Ilham Fathullah', 'ilhamfathullah04@gmail.com', 2, 'User-Info-Menarik2.png', '$2y$10$TTWYNGNSpepDe5SzBgO2s.mHGNC2iGT1Mw/7kB9Nof3iJXkpFOynq', 3, 1),
(3, 'Agus Muhamad Gaostul Ibad', 'gaostulibad@gmail.com', 0, '235263e141a467dd6a02370a6be56c32--noblesse-collection1.jpg', '$2y$10$fJ.n0kVvB0PKNkkMT6ZVC.TN1AgFJruUBFGUZ8wSy0wvol1DpDM8W', 2, 1),
(4, 'Raras Ratu Ayu Tatariani', 'rtatariani@gmail.com', 0, 'default.jpg', '$2y$10$1uMPX3Oo1yU3A5Oz/VsC2eSDSefvA2eR5JiHPbtjG4jWG4YyPcKvO', 2, 1),
(5, 'Ady Rudianto', 'adyrudianto26@gmail.com', 0, 'default.jpg', '$2y$10$cpSrv0yTCJFXjbc2zV2AHerz9JCM97Ths0Dfc5sten4Q8wesOU3Le', 2, 1),
(6, 'AMGI', 'agus.ibad@student.uty.ac.id', 1, 'default.jpg', '$2y$10$TygMCgiCduXznUNDZEOOx.Eg01RpsNwLeh3BsERAq2rjJlgaWNLFy', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 2, 3),
(5, 1, 4),
(7, 3, 5),
(8, 3, 6),
(9, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Beranda'),
(3, 'Pengajuan Pengabdian'),
(4, 'Manajemen Menu'),
(5, 'Pengaturan'),
(6, 'Beranda'),
(7, 'Pengaturan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Dosen'),
(3, 'Reviewer ');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `tittle` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `tittle`, `url`, `icon`, `is_active`) VALUES
(3, 2, 'Informasi', 'user/index', 'fas fa-fw fad fa-info-circle', 1),
(4, 3, 'Identitas', 'user/identitas', 'fas fa-fw fa-id-card-alt', 0),
(5, 7, 'Profile Saya', 'user/Profile', 'fas fa-fw fa-id-card', 1),
(7, 3, 'Form Pengajuan', 'user/Form_Pengajuan', 'fab fa-fw fa-wpforms', 1),
(8, 4, 'Daftar Menu', 'admin/tambah_menu', 'far fa-fw fa-folder', 1),
(9, 4, 'Daftar Sub Menu', 'admin/submenu', 'far fa-fw fa-folder-open', 1),
(10, 1, 'Role', 'admin/index', 'fas  fa-fw fa-pencil-ruler', 1),
(17, 1, 'File Panduan', 'admin/panduan', 'far fa-fw fa-clone', 1),
(18, 4, 'Hak Akses Menu', 'admin/hak_akses', 'fas fa-fw fa-universal-access', 1),
(19, 6, 'Daftar Pengajuan', 'reviewer/daftar_pengajuan', 'fas fa-fw fa-list', 1),
(20, 5, 'Profile Saya', 'reviewer/index', 'fas fa-fw fa-id-card', 1),
(21, 6, 'Koreksi Pengajuan', 'reviewer/koreksi_pengajuan', 'fas fa-fw fa-share-square', 0),
(22, 3, 'Pengajuan', 'user/rekap', 'fas fa-fw fa-chalkboard-teacher', 1),
(23, 6, 'Rekap Pengajuan', 'reviewer/rekap_reviewer', 'far fa-fw fa-file-archive', 1),
(24, 3, 'Rekap Pengajuan', 'user/rekap2', 'fas fa-fw fa-archive', 1),
(25, 1, 'Tim Reviewer', 'admin/timreviewer', 'fas fa-fw fa-id-card', 0),
(26, 2, 'Panduan Pengajuan', 'user/panduan', 'fas fa-fw fa-file-download', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_anggota_dua`
--
ALTER TABLE `tb_anggota_dua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_anggota_satu`
--
ALTER TABLE `tb_anggota_satu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_anggota_tiga`
--
ALTER TABLE `tb_anggota_tiga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kaprodi`
--
ALTER TABLE `tb_kaprodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ketua_lppm`
--
ALTER TABLE `tb_ketua_lppm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ketua_pengabdi`
--
ALTER TABLE `tb_ketua_pengabdi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_koreksian`
--
ALTER TABLE `tb_koreksian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_panduan`
--
ALTER TABLE `tb_panduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_revisi`
--
ALTER TABLE `tb_revisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_skim`
--
ALTER TABLE `tb_skim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tim_reviewer`
--
ALTER TABLE `tb_tim_reviewer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_anggota_dua`
--
ALTER TABLE `tb_anggota_dua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_anggota_satu`
--
ALTER TABLE `tb_anggota_satu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_anggota_tiga`
--
ALTER TABLE `tb_anggota_tiga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kaprodi`
--
ALTER TABLE `tb_kaprodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ketua_lppm`
--
ALTER TABLE `tb_ketua_lppm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ketua_pengabdi`
--
ALTER TABLE `tb_ketua_pengabdi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_koreksian`
--
ALTER TABLE `tb_koreksian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_panduan`
--
ALTER TABLE `tb_panduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_revisi`
--
ALTER TABLE `tb_revisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_skim`
--
ALTER TABLE `tb_skim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_tim_reviewer`
--
ALTER TABLE `tb_tim_reviewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
