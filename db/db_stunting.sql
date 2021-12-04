-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 04:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stunting`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksi_konvergensi`
--

CREATE TABLE `aksi_konvergensi` (
  `id_aksi` int(11) NOT NULL,
  `nama_aksi` varchar(200) DEFAULT NULL,
  `deskrpsi` longtext DEFAULT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aksi_konvergensi`
--

INSERT INTO `aksi_konvergensi` (`id_aksi`, `nama_aksi`, `deskrpsi`, `create_at`, `update_at`, `gambar`, `delete_at`) VALUES
(1, 'Pencegahan', '					    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod					    ', '2021-08-04 01:56:37', '2021-08-15 13:25:04', '1628110412_eea35d53b0594811455a.jpg', '2021-08-15 13:25:04'),
(2, 'demo edit', '					    						    	vfgfh', '2021-08-04 15:47:39', '2021-08-04 15:51:39', '1628110059_db17713e3f1659f9ee0f.png', '2021-08-04 15:51:39'),
(3, 'Aksi', 'Deskripsi', '2021-08-14 13:54:42', '2021-08-15 13:25:08', '1628967282_ea44cf2db6022f04545b.png', '2021-08-15 13:25:08'),
(4, 'Aksi 1', '<span style=\"color: rgb(74, 74, 74); font-family: &quot;Times New Roman&quot;; font-size: 14px;\">Melakukan identifikasi sebaran stunting, ketersediaan program, dan kendala dalam pelaksanaan integrasi intervensi gizi.</span>					    ', '2021-08-15 13:26:49', '2021-08-15 13:26:49', NULL, NULL),
(5, 'Aksi 2', '<span style=\"color: rgb(74, 74, 74); font-family: &quot;Times New Roman&quot;; font-size: 14px;\">Menyusun rencana kegiatan untuk meningkatkan pelaksanaan integrasi intervensi gizi.</span>					    ', '2021-08-15 13:27:42', '2021-08-15 13:27:42', NULL, NULL),
(6, 'Aksi 3', '<span style=\"color: rgb(74, 74, 74); font-family: &quot;Times New Roman&quot;; font-size: 14px;\">Menyelenggarakan rembuk stunting tingkat kabupaten/kota.</span>					    ', '2021-08-15 13:27:58', '2021-08-15 13:27:58', NULL, NULL),
(7, 'Aksi 4', '<span style=\"color: rgb(74, 74, 74); font-family: &quot;Times New Roman&quot;; font-size: 14px;\">Memberikan kepastian hukum bagi desa untuk menjalankan peran dan kewenangan desa dalam intervensi gizi terintegrasi.</span>					    ', '2021-08-15 13:28:18', '2021-08-15 13:28:18', NULL, NULL),
(8, 'Aksi 5', '<span style=\"color: rgb(74, 74, 74); font-family: &quot;Times New Roman&quot;; font-size: 14px;\">Memastikan tersedianya dan berfungsinya kader yang membantu pemerintah desa dalam pelaksanaan intervensi gizi terintegrasi di tingkat desa.</span>					    ', '2021-08-15 13:28:36', '2021-08-15 13:28:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bahan_edukasi`
--

CREATE TABLE `bahan_edukasi` (
  `id_bahan` int(11) NOT NULL,
  `judul_bahan` varchar(512) DEFAULT NULL,
  `kategori_bahan` varchar(20) NOT NULL,
  `sumber` varchar(128) DEFAULT NULL,
  `tgl_bahan` date DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_edukasi`
--

INSERT INTO `bahan_edukasi` (`id_bahan`, `judul_bahan`, `kategori_bahan`, `sumber`, `tgl_bahan`, `gambar`, `deskripsi`, `create_at`, `update_at`, `delete_at`, `file`) VALUES
(1, 'Pentingya Pendidikan Anak Dari Orang Tua', '1', NULL, '2021-08-03', '1628107851_de33db21069167a50ece.png', '					    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.					    ', '2021-08-04 01:55:22', '2021-08-18 08:06:54', '2021-08-18 08:06:54', ''),
(2, 'Utamakan Kesehatan Anak Dan Balita', '1', NULL, '2021-08-04', '1628107550_71c7109a55105f7aa098.jpg', '<div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>					    ', '2021-08-04 15:05:50', '2021-08-04 15:11:38', '2021-08-04 15:11:38', ''),
(3, 'Stunting NTT', '2', NULL, '2021-08-15', '1628967171_00a4529c0969397364d4.png', 'Deskripsi', '2021-08-14 13:52:52', '2021-08-18 08:06:57', '2021-08-18 08:06:57', ''),
(4, 'STRATEGI NASIONAL  PERCEPATAN PENCEGAHAN  ANAK KERDIL (STUNTING)  PERIODE 2018 - 2024', '3', 'Pemerintah Provinsi Nusa Tenggara Timur', '2018-01-01', '1629292488_02277266411cb341059b.png', '					    						    	STRATEGI NASIONAL \r\nPERCEPATAN PENCEGAHAN \r\nANAK KERDIL (STUNTING) \r\nPERIODE 2018 - 2024 \r\nKementerian 					    ', '2021-08-18 08:14:48', '2021-08-18 13:11:31', NULL, ''),
(5, 'PERENCANAAN, PELAKSANAAN,  MONITORING DAN EVALUASI PROGRAM  PENCEGAHAN DAN PENANGANAN  STUNTING DI DESA', '3', 'Pemerintah Provinsi Nusa Tenggara Timur', '2020-01-01', '1629292553_35f41521d066064b5ba7.png', '					    						    						    	PERENCANAAN, PELAKSANAAN, \r\nMONITORING DAN EVALUASI PROGRAM \r\nPENCEGAHAN DAN PENANGANAN \r\nSTUNTING DI DESA					    					    					    					    ', '2021-08-18 08:15:53', '2021-08-21 19:59:24', NULL, '1629593960_2c45c279993e0a4e2513.pdf'),
(6, 'PEDOMAN PELAKSANAAN  INTERVENSI PENURUNAN STUNTING TERINTEGRASI DI KABUPATEN/ KOTA', '3', 'Pemerintah Provinsi Nusa Tenggara Timur', '2019-06-01', '1629593349_88fb56770de057877d8a.png', '					    						    						    						    						    						    						    						    						    						    						    						    	PEDOMAN PELAKSANAAN \r\nINTERVENSI PENURUNAN STUNTING\r\nTERINTEGRASI DI KABUPATEN/ KOTA					    					    					    					    					    					    					    					    					    					    					    					    					    ', '2021-08-18 08:16:34', '2021-08-21 19:53:01', NULL, '1629593577_02d7086a8187b4e7d0ba.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `kategori_berita` int(11) DEFAULT NULL,
  `judul_berita` varchar(1024) DEFAULT NULL,
  `thumbnail_berita` text DEFAULT NULL COMMENT 'Gambar Thumbnail',
  `tgl_post` date DEFAULT NULL,
  `isi_berita` longtext DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `hint` int(12) DEFAULT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `kategori_berita`, `judul_berita`, `thumbnail_berita`, `tgl_post`, `isi_berita`, `author`, `hint`, `create_at`, `update_at`, `delete_at`) VALUES
(1, 1, 'Covid 19 NTT Mningkat', '1633144700_bd0eae2594e246cb0a34.jpeg', '2021-08-03', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; overflow-wrap: break-word; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 24px; font-family: Arial, sans-serif; vertical-align: baseline; letter-spacing: 0.5px; color: rgb(51, 51, 51);\">Kabupaten yang berbatasan langsung dengan Timor Leste ini hanya memiliki empat dokter spesialis yang berpusat di Rumah Sakit Penyangga Perbatasan (RSPP) Betun, antara lain dokter spesialis penyakit dalam, bedah, anak, dan spesialis saraf. Kondisi itu sangat tidak memadai bila dibandingkan dengan jumlah penduduk setempat yang mencapai 189.046 jiwa.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">Dokter spesialis kandungan, anestesi dan radiologi yang kebutuhannya sangat darurat juga belum dapat dipenuhi, karena minimnya dokter spesialis tersebut yang mau ditempatkan di kawasan garda terdepan Indonesia ini.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">\"Kami di perbatasan terkendala pada sumber daya manusia terutama dokter spesialis. Punya empat dokter spesialis saja kami sangat bersyukur,\" ujar Direktur RS Betun, Paskalia Frida Fahik di sela-sela kunjungan ke RSPP Betun, Jumat (5/5/2017).<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">Ia menambahkan sebenarnya pihaknya sudah meminta Kementerian Kesehatan untuk menempatkan dokter spesialis anestesi dan spesialis kandungan (obgyn) di Rumah Sakit Penyangga Perbatasan Betun. Namun hingga kini \'pesanan\' dokter spesialis ini belum juga tiba.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">\"Ogbyn belum ada. Kami meminta bantuan pada Kemenkes, agak lama, belum dapat,\" tambah Frida.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; overflow-wrap: break-word; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 24px; font-family: Arial, sans-serif; vertical-align: baseline; letter-spacing: 0.5px; color: rgb(51, 51, 51);\">Dalam kesempatan yang sama, Bupati Malaka, Nusa Tenggara Timur, dr Stefanus Bria Seran, MPH, mengatakan bahwa sebenarnya pihaknya telah mengalokasikan sejumlah anggaran demi menarik minat dokter spesialis untuk bertugas di daerahnya.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">\"Kami tawarkan gaji dan insentif yang memadai untuk dokter spesialis yang mau bertugas di Malaka. Mereka juga kami tawarkan kendaraan dan rumah dinas, uang cuti dan tiket pesawat saat cuti,\" sambung Bupati Malaka, Stefanus.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">Ia mengakui bahwa persoalan sumber daya manusia menjadi kendala di daerah perbatasan, terutama untuk ketersediaan dokter spesialis. Menurut Stefanus, ada tiga alasan mengapa dokter spesialis enggan bertugas di daerah perbatasan meski diiming-imingi insentif yang sangat besar.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">\"Di malaka ada tiga persoalan besar, pertama kandidat yang akan dikirim terbatas, kedua untuk diterima pendidikan dokter spesialis susahnya minta ampun dari 80 yang kita kirim hanya 10 yang lolos seleksi, ketiga membuat mereka betah itu sangat sulit,\" ujarnya lagi.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">Menanggapi hal itu, Kepala Biro Komunikasi dan Pelayanan Masyarakat Kementerian Kesehatan Oscar Primadi menyatakan pihaknya akan segera menempatkan satu dokter anestesi dan spesialis kandungan ke RS Betun melalui program Wajib Kerja Dokter Spesialis (WKDS).<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">\"Sesuai dengan pemetaan yang kita lakukan, Malaka memang salah satu daerah prioritas. Kalau ada kerja sama dengan perguruan tinggi, juga bisa dilakukan agar lulusannya bisa dikirim ke Malaka,\" pungkasnya.<br style=\"overflow-wrap: break-word;\"></p>', 1, 0, '2021-08-04 01:55:22', '2021-10-01 22:18:20', NULL),
(11, 1, 'Menkes Larang Masyarakat Keluar Kota Selama 3 Bulan, Ini Faktanya', '1633144749_cc5fecdff5d33bfc1215.jpeg', '2021-08-03', '					    	<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; overflow-wrap: break-word; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 24px; font-family: Arial, sans-serif; vertical-align: baseline; letter-spacing: 0.5px; color: rgb(51, 51, 51);\">Kabupaten yang berbatasan langsung dengan Timor Leste ini hanya memiliki empat dokter spesialis yang berpusat di Rumah Sakit Penyangga Perbatasan (RSPP) Betun, antara lain dokter spesialis penyakit dalam, bedah, anak, dan spesialis saraf. Kondisi itu sangat tidak memadai bila dibandingkan dengan jumlah penduduk setempat yang mencapai 189.046 jiwa.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">Dokter spesialis kandungan, anestesi dan radiologi yang kebutuhannya sangat darurat juga belum dapat dipenuhi, karena minimnya dokter spesialis tersebut yang mau ditempatkan di kawasan garda terdepan Indonesia ini.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">\"Kami di perbatasan terkendala pada sumber daya manusia terutama dokter spesialis. Punya empat dokter spesialis saja kami sangat bersyukur,\" ujar Direktur RS Betun, Paskalia Frida Fahik di sela-sela kunjungan ke RSPP Betun, Jumat (5/5/2017).<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">Ia menambahkan sebenarnya pihaknya sudah meminta Kementerian Kesehatan untuk menempatkan dokter spesialis anestesi dan spesialis kandungan (obgyn) di Rumah Sakit Penyangga Perbatasan Betun. Namun hingga kini \'pesanan\' dokter spesialis ini belum juga tiba.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">\"Ogbyn belum ada. Kami meminta bantuan pada Kemenkes, agak lama, belum dapat,\" tambah Frida.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; overflow-wrap: break-word; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 24px; font-family: Arial, sans-serif; vertical-align: baseline; letter-spacing: 0.5px; color: rgb(51, 51, 51);\">Dalam kesempatan yang sama, Bupati Malaka, Nusa Tenggara Timur, dr Stefanus Bria Seran, MPH, mengatakan bahwa sebenarnya pihaknya telah mengalokasikan sejumlah anggaran demi menarik minat dokter spesialis untuk bertugas di daerahnya.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">\"Kami tawarkan gaji dan insentif yang memadai untuk dokter spesialis yang mau bertugas di Malaka. Mereka juga kami tawarkan kendaraan dan rumah dinas, uang cuti dan tiket pesawat saat cuti,\" sambung Bupati Malaka, Stefanus.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">Ia mengakui bahwa persoalan sumber daya manusia menjadi kendala di daerah perbatasan, terutama untuk ketersediaan dokter spesialis. Menurut Stefanus, ada tiga alasan mengapa dokter spesialis enggan bertugas di daerah perbatasan meski diiming-imingi insentif yang sangat besar.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">\"Di malaka ada tiga persoalan besar, pertama kandidat yang akan dikirim terbatas, kedua untuk diterima pendidikan dokter spesialis susahnya minta ampun dari 80 yang kita kirim hanya 10 yang lolos seleksi, ketiga membuat mereka betah itu sangat sulit,\" ujarnya lagi.<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">Menanggapi hal itu, Kepala Biro Komunikasi dan Pelayanan Masyarakat Kementerian Kesehatan Oscar Primadi menyatakan pihaknya akan segera menempatkan satu dokter anestesi dan spesialis kandungan ke RS Betun melalui program Wajib Kerja Dokter Spesialis (WKDS).<br style=\"overflow-wrap: break-word;\"><br style=\"overflow-wrap: break-word;\">\"Sesuai dengan pemetaan yang kita lakukan, Malaka memang salah satu daerah prioritas. Kalau ada kerja sama dengan perguruan tinggi, juga bisa dilakukan agar lulusannya bisa dikirim ke Malaka,\" pungkasnya.<br style=\"overflow-wrap: break-word;\"></p>					    ', 1, 0, '2021-08-04 12:28:42', '2021-10-01 22:19:09', NULL),
(15, 1, 'Meninggal karena covid', '1628129880_0effcf61866d529d891e.jpg', '2021-08-04', '					    	sdsfdgfrgtht					    ', 3, 0, '2021-08-04 21:18:00', '2021-10-01 22:41:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita_staunting`
--

CREATE TABLE `berita_staunting` (
  `idberita` int(11) NOT NULL,
  `indikator_pencegah` int(11) DEFAULT NULL,
  `judul_berita` varchar(512) DEFAULT NULL,
  `thumbnail_berita` text DEFAULT NULL,
  `tgpost` date DEFAULT NULL,
  `isi_berita` longtext DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `hint` int(12) DEFAULT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `deleta_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `embed`
--

CREATE TABLE `embed` (
  `id_embed` int(11) NOT NULL,
  `kode_embed` longtext DEFAULT NULL,
  `uniqkode` varchar(128) DEFAULT NULL,
  `keterangan` longtext DEFAULT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `embed`
--

INSERT INTO `embed` (`id_embed`, `kode_embed`, `uniqkode`, `keterangan`, `create_at`, `update_at`, `delete_at`) VALUES
(1, '					    	kode Edit', 'STUNTING', 'Kode Embed Stunting', '2021-08-14 14:40:44', '2021-08-14 14:43:36', '2021-08-14 14:43:36'),
(2, '<div class=\'tableauPlaceholder\' id=\'viz1629614927703\' style=\'position: relative\'><noscript><a href=\'#\'><img alt=\'Pemetaan Anak Stunting di Provinsi Nusa Tenggara Timur \' src=\'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PemetaanStuntingNTT&#47;StuntingNTT&#47;1_rss.png\' style=\'border: none\' /></a></noscript><object class=\'tableauViz\'  style=\'display:none;\'><param name=\'host_url\' value=\'https%3A%2F%2Fpublic.tableau.com%2F\' /> <param name=\'embed_code_version\' value=\'3\' /> <param name=\'site_root\' value=\'\' /><param name=\'name\' value=\'PemetaanStuntingNTT&#47;StuntingNTT\' /><param name=\'tabs\' value=\'no\' /><param name=\'toolbar\' value=\'yes\' /><param name=\'static_image\' value=\'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PemetaanStuntingNTT&#47;StuntingNTT&#47;1.png\' /> <param name=\'animate_transition\' value=\'yes\' /><param name=\'display_static_image\' value=\'yes\' /><param name=\'display_spinner\' value=\'yes\' /><param name=\'display_overlay\' value=\'yes\' /><param name=\'display_count\' value=\'yes\' /><param name=\'language\' value=\'en-US\' /><param name=\'filter\' value=\'publish=yes\' /></object></div>                <script type=\'text/javascript\'>                    var divElement = document.getElementById(\'viz1629614927703\');                    var vizElement = divElement.getElementsByTagName(\'object\')[0];                    vizElement.style.width=\'1016px\';vizElement.style.height=\'991px\';                    var scriptElement = document.createElement(\'script\');                    scriptElement.src = \'https://public.tableau.com/javascripts/api/viz_v1.js\';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>', 'DATA&PETA', 'Embed Menu data & Peta', '2021-08-18 12:10:57', '2021-08-22 01:48:59', NULL),
(3, '<div class=\'tableauPlaceholder\' id=\'viz1629009269245\' style=\'position: relative\'><noscript><a href=\'#\'><img alt=\'Stunting Provinsi Nusa Tenggara Timur \' src=\'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;St&#47;StuntingNTT&#47;Story1&#47;1_rss.png\' style=\'border: none\' /></a></noscript><object class=\'tableauViz\'  style=\'display:none;\'><param name=\'host_url\' value=\'https%3A%2F%2Fpublic.tableau.com%2F\' /> <param name=\'embed_code_version\' value=\'3\' /> <param name=\'site_root\' value=\'\' /><param name=\'name\' value=\'StuntingNTT&#47;Story1\' /><param name=\'tabs\' value=\'no\' /><param name=\'toolbar\' value=\'yes\' /><param name=\'static_image\' value=\'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;St&#47;StuntingNTT&#47;Story1&#47;1.png\' /> <param name=\'animate_transition\' value=\'yes\' /><param name=\'display_static_image\' value=\'yes\' /><param name=\'display_spinner\' value=\'yes\' /><param name=\'display_overlay\' value=\'yes\' /><param name=\'display_count\' value=\'yes\' /><param name=\'language\' value=\'en-US\' /><param name=\'filter\' value=\'publish=yes\' /></object></div>                <script type=\'text/javascript\'>                    var divElement = document.getElementById(\'viz1629009269245\');                    var vizElement = divElement.getElementsByTagName(\'object\')[0];                    vizElement.style.width=\'1024px\';vizElement.style.height=\'795px\';                    var scriptElement = document.createElement(\'script\');                    scriptElement.src = \'https://public.tableau.com/javascripts/api/viz_v1.js\';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>', 'DASHBOARD', 'Dashbard Peta', '2021-08-18 12:24:52', '2021-08-18 12:29:31', '2021-08-18 12:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `indikator_pencegahan_stunting`
--

CREATE TABLE `indikator_pencegahan_stunting` (
  `id_indikator` int(11) NOT NULL,
  `nm_indikator` varchar(512) DEFAULT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikator_pencegahan_stunting`
--

INSERT INTO `indikator_pencegahan_stunting` (`id_indikator`, `nm_indikator`, `create_at`, `update_at`, `deskripsi`, `delete_at`) VALUES
(1, 'Sosial', '2021-08-04 12:37:57', '2021-10-04 11:24:16', '					    	lorem ipsum					    ', NULL),
(2, 'Budaya edit', '2021-08-04 16:20:52', '2021-08-04 16:23:01', '					    	lorem ipsum 123', '2021-08-04 16:23:01'),
(3, 'Bantuan Hukum', '2021-08-14 13:55:43', '2021-10-04 11:24:24', '					    						    	Deskripsi sAkdkkd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(512) DEFAULT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `nm_kategori`, `create_at`, `update_at`, `delete_at`) VALUES
(1, 'Kesehatan', '2021-08-04 00:00:53', '2021-10-01 22:39:28', NULL),
(3, 'Teknologi', '2021-08-04 00:24:33', '2021-08-14 13:48:54', '2021-08-14 13:48:54'),
(4, 'Stunting NTT', '2021-08-14 13:48:39', '2021-08-14 13:48:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_edukasi`
--

CREATE TABLE `kategori_edukasi` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(128) DEFAULT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_edukasi`
--

INSERT INTO `kategori_edukasi` (`id_kategori`, `nm_kategori`, `create_at`, `update_at`, `delete_at`) VALUES
(1, 'Stunting', '2021-08-04 01:55:22', '2021-08-14 13:50:18', '2021-08-14 13:50:18'),
(2, 'Bahan Kampanye', '2021-08-14 13:50:06', '2021-08-15 13:24:18', NULL),
(3, 'Bahan Panduan', '2021-08-15 13:24:29', '2021-08-15 13:24:29', NULL),
(4, 'Menu pangan local bergizi', '2021-08-15 13:24:40', '2021-08-15 13:24:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(128) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `kontak1` varchar(64) DEFAULT NULL,
  `kontak2` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `youtube` varchar(64) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL,
  `latar_belakang` longtext DEFAULT NULL,
  `tentang_kami` longtext DEFAULT NULL,
  `regulasi` longtext DEFAULT NULL,
  `peran_pokja` longtext DEFAULT NULL,
  `struktur_org` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_profil`, `logo`, `kontak1`, `kontak2`, `email`, `youtube`, `alamat`, `deskripsi`, `delete_at`, `latar_belakang`, `tentang_kami`, `regulasi`, `peran_pokja`, `struktur_org`) VALUES
(1, 'Stunting Provinsi NTT', 'logo.png', '4243535464dfgfg', '3434354645gfgf', 'email@email.com', 'fbhdfkdfgfgfg', 'Oebobo Kupang', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, '', '<p>Regulasi</p>', '<p>Regulasi</p>', '<p>Peran Pokja</p>', '1629304219_cb7c032a5db78c2775bc.png');

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
--

CREATE TABLE `publikasi` (
  `id_publikasi` int(11) NOT NULL,
  `nm_publikasi` varchar(512) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `keterangan` longtext DEFAULT NULL,
  `link` text DEFAULT NULL,
  `tgl_publikasi` date DEFAULT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `hint` int(11) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publikasi`
--

INSERT INTO `publikasi` (`id_publikasi`, `nm_publikasi`, `file`, `keterangan`, `link`, `tgl_publikasi`, `create_at`, `update_at`, `hint`, `author`, `delete_at`) VALUES
(1, 'Jurnal Sosial', 'file.pdf', 'sdfgrgtg', 'http://www.google.com', '2021-08-02', '2021-08-04 01:55:22', '2021-08-04 17:29:22', 0, 1, '2021-08-04 17:29:22'),
(2, 'Stunting edit', '1628115777_85641d2680a27054e7a1.png', 'anak anak', 'http://my.com/1', '2021-08-07', '2021-08-04 17:22:57', '2021-08-04 17:40:12', 0, 1, NULL),
(3, 'Materi Kesling', '1628967432_75295b708d80a0b2e43d.png', 'Keterangan', 'https://www.youtube.com/watch?v=owhfO2XwCjc', '2021-08-15', '2021-08-14 13:57:12', '2021-08-14 13:57:12', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thumnail_utama`
--

CREATE TABLE `thumnail_utama` (
  `id` int(1) NOT NULL,
  `thumbnail` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thumnail_utama`
--

INSERT INTO `thumnail_utama` (`id`, `thumbnail`, `keterangan`) VALUES
(1, 'image.jpg', 'Mamamamamamam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `level`, `username`, `password`) VALUES
(1, 'Admin', 'bryand-j', '1234'),
(2, 'Admin', 'Admin', '123456'),
(3, 'Operator', 'anton', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksi_konvergensi`
--
ALTER TABLE `aksi_konvergensi`
  ADD PRIMARY KEY (`id_aksi`);

--
-- Indexes for table `bahan_edukasi`
--
ALTER TABLE `bahan_edukasi`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `berita_staunting`
--
ALTER TABLE `berita_staunting`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `embed`
--
ALTER TABLE `embed`
  ADD PRIMARY KEY (`id_embed`);

--
-- Indexes for table `indikator_pencegahan_stunting`
--
ALTER TABLE `indikator_pencegahan_stunting`
  ADD PRIMARY KEY (`id_indikator`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_edukasi`
--
ALTER TABLE `kategori_edukasi`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indexes for table `thumnail_utama`
--
ALTER TABLE `thumnail_utama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksi_konvergensi`
--
ALTER TABLE `aksi_konvergensi`
  MODIFY `id_aksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bahan_edukasi`
--
ALTER TABLE `bahan_edukasi`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `berita_staunting`
--
ALTER TABLE `berita_staunting`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `embed`
--
ALTER TABLE `embed`
  MODIFY `id_embed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `indikator_pencegahan_stunting`
--
ALTER TABLE `indikator_pencegahan_stunting`
  MODIFY `id_indikator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_edukasi`
--
ALTER TABLE `kategori_edukasi`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id_publikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thumnail_utama`
--
ALTER TABLE `thumnail_utama`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
