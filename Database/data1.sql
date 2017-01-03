-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 02:14 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serumpun_buluh`
--

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `judul_web`, `nama_desa`, `copyright`, `sejarah_desa`, `visi_misi`, `geografis`, `ekonomi`, `prasarana`, `pemerintahan`, `alamat_kantor_desa`, `peta`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'SERUMPUN BULUH', 'SERUMPUN BULUH', 'ARIF SETIAWAN', '<p>Sejarah Historis, Desa Serumpun Buluh&nbsp; merupakan Desa yang diresmikan pada tahun 1988 melalui grofing 2 desa yaitu Desa Buluh Enggadang dan Desa Buluh Parit. Pemilihan Kepala Desa Pertama kali pada tahun 1988 di menangkan oleh Idris yang memimpin sampai dengan tahun 1993. Pemilihan Kepala Desa Kedua juga dimenangkan oleh Idris, namun diperiode kedua ini Idris hanya memimpin 1,5 tahun (tahun 1993&nbsp; s/d 1995), dilanjutkan Pjw oleh Iwan pegawai kecamatan tahun 1995 s/d tahun 1998 setelah Pjw dilanjutkan dengan Plt yang masa itu dijabat oleh Sibir selaku Sekdes Desa Serumpun Buluh tahun1998 s/d tahun 2000. Pada Pemilihan Kepala Desa untuk ketiga kalinya dimenangkan oleh Saniman yang meminpin Desa Serumpun Buluh tahun 2000 s/d tahun 2006&nbsp; setelah masa jabatan berakhir pemilihan Kepala Desa selanjutnya dimenangkan oleh Alpian yang meminpin Desa Serumpun Buluh tahun 2006 s/d tahun 2012. Dikarenakan tidak adanya calon lain untuk pemilihan Kepala Desa Periode 2012-2018 maka&nbsp; berdasarkan keputusan musyawarah mengusulkan untuk pengangkatan kembali Alpian sebagai Kepala Desa Serumpun Buluh sampai tahun 2018.</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">Tabel&nbsp;Sejarah Pemerintahan Desa Serumpun Buluh</p>\r\n<p style="text-align: center;">Nama-nama Kepala Desa Serumpun Buluh</p>\r\n<p style="text-align: center;">Setelah berdirinya Desa Serumpun Buluh&nbsp;</p>\r\n<table style="border-color: #000000; margin-left: auto; margin-right: auto;" border="2" width="554" cellspacing="2" cellpadding="2">\r\n<tbody>\r\n<tr style="height: 35px;">\r\n<td style="height: 35px; width: 38px; text-align: center; background-color: #6cf583;" width="38">\r\n<p><strong>No</strong></p>\r\n</td>\r\n<td style="height: 35px; width: 38px; text-align: center; background-color: #6cf583;" width="152">\r\n<p style="text-align: center;"><strong>Periode</strong></p>\r\n</td>\r\n<td style="height: 35px; width: 38px; text-align: center; background-color: #6cf583;" width="219">\r\n<p style="text-align: center;"><strong>Nama Kepala Desa</strong></p>\r\n</td>\r\n<td style="height: 35px; width: 38px; text-align: center; background-color: #6cf583;" width="145">\r\n<p style="text-align: center;"><strong>Keterangan</strong></p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="height: 35px; text-align: center;" width="38">\r\n<p><strong>1</strong></p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="152">\r\n<p>1988 s/d 1993</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="219">\r\n<p>IDRIS</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="145">\r\n<p>Kepala Desa</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="height: 35px; text-align: center;" width="38">\r\n<p><strong>2</strong></p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="152">\r\n<p>1993 s/d 1995</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="219">\r\n<p>IDRIS</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="145">\r\n<p>&nbsp;Kepala Desa</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="height: 35px; text-align: center;" width="38">\r\n<p><strong>3</strong></p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="152">\r\n<p>1995 s/d 1998</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="219">\r\n<p>IWAN</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="145">\r\n<p>&nbsp;Pjw. Kades</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="height: 35px; text-align: center;" width="38">\r\n<p><strong>4</strong></p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="152">\r\n<p>1998 s/d 2000</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="219">\r\n<p>SIBIR</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="145">\r\n<p>&nbsp;Plt. Kades</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 83px;">\r\n<td style="height: 83px; text-align: center;" width="38">\r\n<p><strong>5</strong></p>\r\n</td>\r\n<td style="height: 83px; text-align: center;" width="152">\r\n<p>2000 s/d 2006</p>\r\n</td>\r\n<td style="height: 83px; text-align: center;" width="219">\r\n<p>SANIMAN</p>\r\n</td>\r\n<td style="height: 83px; text-align: center;" width="145">\r\n<p>Kepala Desa&nbsp;SEMENTARA</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="height: 35px; text-align: center;" width="38">\r\n<p><strong>6</strong></p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="152">\r\n<p>2006 s/d 2012</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="219">\r\n<p>ALPIAN</p>\r\n</td>\r\n<td style="height: 35px;" width="145">\r\n<p style="text-align: center;">Kepala Desa</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="height: 35px; text-align: center;" width="38">\r\n<p><strong>7</strong></p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="152">\r\n<p>2012 s/d 2018</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="219">\r\n<p>ALPIAN</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="145">\r\n<p>Kepala Desa</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p>Desa Serumpun Buluh Kecamatan Sambas memiliki 2 Dusun; Yaitu Dusun Buluh Enggadang dan Dusun Buluh Parit, dengan memiliki 12 RT dan 6 RW. Dengan Dusun Buluh Enggadang berjumlah 8 RT dan 4 RW sedangkan Dusun Buluh Parit berjumlah 4 RT dan 2 RW. Sebagai pejabat Kepala Desa dituntut untuk membentuk perangkat-perangkat desa yaitu, terdiri dari:</p>\r\n<ol>\r\n<li>ALPIAN sebagai Kepala Desa</li>\r\n<li>NUR ASIKIN sebagai Sekretaris Desa</li>\r\n<li>HERMULUDIN sebagai Kasi Kesejahteraan</li>\r\n<li>MAHMUDI sebagai Kasi Pemerintahan</li>\r\n<li>IRWANDI sebagai Kasi Pelayanan</li>\r\n<li>ERMICA sebagai Kaur Perencanaan</li>\r\n<li>RABIATUL ADAWIYAH sebagai Kaur Keuangan</li>\r\n<li>SUHARDI sebagai Kaur Tata Usaha dan Umum</li>\r\n<li>RIMA MELATI sebagai Bendahara Desa</li>\r\n<li>ANDI sebagai Kepala Dusun Buluh Enggadang</li>\r\n<li>MULWIYADI sebagai Kepala Dusun Buluh Parit</li>\r\n</ol>', '<h5><strong>1. Visi</strong></h5>\r\n<p>&ldquo;PANGAN&rdquo; (pertanian dan perkebunan) dengan menggali sumber dan potensi local yang dapat diupayakan sehingga berkualitas optimal yang didukung infrastruktur yang memadai demi tercapainya kesejahteraan masyarakat dalam status ekonomi, sosial dan keagamaan.</p>\r\n<h5><strong>2. Misi</strong></h5>\r\n<p><strong>Bidang penyelenggaraan pemerintahan</strong></p>\r\n<p>Misi :</p>\r\n<ol style="list-style-type: lower-alpha;">\r\n<li>Peningkatan kinerja pemerintahan desa dalam memberikan pelayanan kepada masyarakat.</li>\r\n<li>Penyelenggaraan pemerintahan desa secara akuntabel, berkesinambungan dan transparan.</li>\r\n<li>Mewujudkan kapasitas lembaga pemerintahan desa yang profesional.</li>\r\n<li>Mengoptimalkan peraturan desa sesuai dengan kewenangan desa</li>\r\n</ol>\r\n<p><strong>Bidang pembangunan</strong></p>\r\n<p>Misi :</p>\r\n<ol style="list-style-type: lower-alpha;">\r\n<li>Menjadi desa yang tangguh dalam penanggulangan resiko bencana.</li>\r\n<li>Meningkatkan perekonomian desa melalui basis pertanian dan pariwisata.</li>\r\n<li>Mewujudkan pembangunan lingkungan yang tertib dan nyaman.</li>\r\n<li>Menjalin hubungan kerja sama antar desa dalam pembangunan sarana transportasi perekonomian desa.</li>\r\n<li>Mewujudkan pembangunan yang sesuai dengan prioritas dan kebutuhan masyarakat di segala sektor.</li>\r\n<li>Menumbuhkembangkan kesadaran pendidikan, hukum dan kesehatan</li>\r\n</ol>\r\n<p><strong>Bidang pembinaan kelembagaan kemasyarakatan</strong></p>\r\n<p>Misi :</p>\r\n<ol style="list-style-type: lower-alpha;">\r\n<li>Mengoptimalkan lembaga kemasyarakatan yang ada untuk pelaksanaan pembangunan desa</li>\r\n<li>Mendukung pembentukan organisasi warga untuk penyelenggaraan pembangunan yang partisipatif dan akuntabel</li>\r\n</ol>\r\n<p><strong>Bidang pemberdayaan masyarakat</strong></p>\r\n<p>Misi :</p>\r\n<ol style="list-style-type: lower-alpha;">\r\n<li>Meningkatkan Partisipasi masyarakat di berbagai proses pembangunan desa</li>\r\n<li>Mendukung peningkatan kapasitas kader khususnya terkait dengan kepemimpinan</li>\r\n<li>Memfasilitasi kegiatan pemuda/Sanggar Zikir dan Pemuda Olahraga</li>\r\n</ol>', '<p>Desa Serumpun Buluh merupakan salah satu dari 23 desa/kelurahan di Kecamatan Tebas Kabupaten Sambas yang terletak di sebelah Barat kota Sambas dengan jarak dengan ibu kota kecamatan sejauh 13 km dan jarak dengan ibu kota Kabupaten Sambas 35 km yang dapat ditempuh menggunakan kendaraan bermotor selama 45 menit.</p>\r\n<p>Desa Serumpun Buluh memiliki luas 5.2 Km<sup>2 </sup>(4,06%) dari luas wilayah Kecamatan Tebas dan Desa terluas ke-13 dari 23 Desa di Kecamatan Tebas</p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: center;">Tabe&nbsp;Kondisi Geografis</p>\r\n<table style="margin-left: auto; margin-right: auto;" border="2" width="596" cellspacing="2" cellpadding="2">\r\n<tbody>\r\n<tr style="height: 35px;">\r\n<td style="height: 35px; width: 47px; text-align: center; background-color: #6cf583;" width="47">\r\n<p><strong>No</strong></p>\r\n</td>\r\n<td style="height: 35px; width: 47px; text-align: center; background-color: #6cf583;" width="435">\r\n<p><strong>Uraian</strong></p>\r\n</td>\r\n<td style="height: 35px; width: 47px; text-align: center; background-color: #6cf583;" width="114">\r\n<p><strong>Ket</strong></p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="text-align: center; height: 35px;" width="47">\r\n<p><strong>1</strong></p>\r\n</td>\r\n<td style="text-align: left; height: 35px;" width="435">\r\n<p>Luaswilayah&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp; 526,5 km&sup2;&nbsp;&nbsp; ( 526,5 Ha )</p>\r\n</td>\r\n<td style="text-align: center; height: 35px;" width="114">\r\n<p>-&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 83px;">\r\n<td style="text-align: center; height: 83px;" width="47">\r\n<p><strong>2</strong></p>\r\n</td>\r\n<td style="text-align: left; height: 83px;" width="435">\r\n<p>Jumlah&nbsp; Dusun : 2 (Dua)</p>\r\n<p>1) DusunBuluh Enggadang</p>\r\n<p>2) Dusun Buluh Parit</p>\r\n</td>\r\n<td style="text-align: center; height: 83px;" width="114">\r\n<p>-&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 131px;">\r\n<td style="text-align: center; height: 131px;" width="47">\r\n<p><strong>3</strong></p>\r\n</td>\r\n<td style="text-align: left; height: 131px;" width="435">\r\n<p>Batas Wilayah :</p>\r\n<p>A. Utara&nbsp;&nbsp;&nbsp;&nbsp; : Desa Mekar Sekuntum dan Desa Mensere</p>\r\n<p>B. Selatan&nbsp; : Desa Pkl. Kongsi dan Desa Sei Kelambu</p>\r\n<p>C. Barat&nbsp;&nbsp;&nbsp;&nbsp; : Desa Sungai Ke;lambu</p>\r\n<p>D. Timur&nbsp;&nbsp; : Desa Pangkalan Kongsi dan Desa Mekar Sekuntum</p>\r\n</td>\r\n<td style="text-align: center; height: 131px;" width="114">\r\n<p>-&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="text-align: center; height: 35px;" width="47">\r\n<p><strong>4</strong></p>\r\n</td>\r\n<td style="text-align: left; height: 35px;" width="435">\r\n<p>Topografi&nbsp; : Dataran Rendah</p>\r\n</td>\r\n<td style="text-align: center; height: 35px;" width="114">\r\n<p>-&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="text-align: center; height: 35px;" width="47">\r\n<p><strong>5</strong></p>\r\n</td>\r\n<td style="text-align: left; height: 35px;" width="435">\r\n<p>Hidrologi&nbsp; : Irigasi berpengairan manual</p>\r\n</td>\r\n<td style="text-align: center; height: 35px;" width="114">\r\n<p>-&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 131px;">\r\n<td style="text-align: center; height: 131px;" width="47">\r\n<p><strong>6</strong></p>\r\n</td>\r\n<td style="text-align: left; height: 131px;" width="435">\r\n<p>Luas lahan pertanian</p>\r\n<p>a.&nbsp; Sawah teririgasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp; 10&nbsp;&nbsp;&nbsp;&nbsp; Ha</p>\r\n<p>b.&nbsp;&nbsp; Sawah Tadah Hujan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 318,5 Ha</p>\r\n<p>c.&nbsp;&nbsp; Lahan Pertanian Jeruk&nbsp;&nbsp;&nbsp; :&nbsp; 55,4 Ha</p>\r\n<p>d.&nbsp;&nbsp; Lahan Perkebunan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp; 10&nbsp;&nbsp; Ha</p>\r\n</td>\r\n<td style="text-align: center; height: 131px;" width="114">\r\n<p>-&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="text-align: center; height: 35px;" width="47">\r\n<p><strong>7</strong></p>\r\n</td>\r\n<td style="text-align: left; height: 35px;" width="435">\r\n<p>Luas lahan pemukiman/Pekarangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp; 140,3 Ha</p>\r\n</td>\r\n<td style="text-align: center; height: 35px;" width="114">\r\n<p>-&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p style="text-align: center;">Tabel sumber penerimaan desa Serumpun Buluh tahun 2013 &ndash; 2015</p>\r\n<table style="border-color: #000000; margin-left: auto; margin-right: auto;" border="2" width="662" cellspacing="2" cellpadding="2">\r\n<tbody>\r\n<tr style="height: 35px;">\r\n<td style="height: 70px; width: 57px; text-align: center; background-color: #6cf583;" rowspan="2" width="57">\r\n<p><strong>No</strong></p>\r\n</td>\r\n<td style="height: 70px; width: 57px; text-align: center; background-color: #6cf583;" rowspan="2" width="208">\r\n<p><strong>Sumber</strong></p>\r\n<p><strong>Penerimaan Desa</strong></p>\r\n</td>\r\n<td style="height: 70px; width: 57px; text-align: center; background-color: #6cf583;" colspan="3" width="397">\r\n<p><strong>Tahun</strong></p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="height: 70px; width: 57px; text-align: center; background-color: #6cf583;" width="132">\r\n<p><strong>2013</strong></p>\r\n</td>\r\n<td style="height: 70px; width: 57px; text-align: center; background-color: #6cf583;" width="123">\r\n<p><strong>2014</strong></p>\r\n</td>\r\n<td style="height: 70px; width: 57px; text-align: center; background-color: #6cf583;" width="142">\r\n<p><strong>2015</strong></p>\r\n</td>\r\n</tr>\r\n<tr style="height: 48px;">\r\n<td style="height: 48px; text-align: center;" width="57">\r\n<p><strong>1</strong></p>\r\n</td>\r\n<td style="height: 48px; text-align: left;" width="208">\r\n<p>Bagi Hasil Pajak Daerah dan Retribusi Daerah</p>\r\n</td>\r\n<td style="height: 48px; text-align: center;" width="132">\r\n<p>Rp. 5.738.200</p>\r\n</td>\r\n<td style="height: 48px; text-align: center;" width="123">\r\n<p>Rp. 20.717.142</p>\r\n</td>\r\n<td style="height: 48px; text-align: center;" width="142">\r\n<p>Rp. 6.354.159</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="height: 35px; text-align: center;" width="57">\r\n<p><strong>2</strong></p>\r\n</td>\r\n<td style="height: 35px; text-align: left;" width="208">\r\n<p>PendapatantanahKas/ PAD</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="132">\r\n<p>-</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="123">\r\n<p>-</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="142">\r\n<p>-</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 35px;">\r\n<td style="height: 35px; text-align: center;" width="57">\r\n<p><strong>3</strong></p>\r\n</td>\r\n<td style="height: 35px; text-align: left;" width="208">\r\n<p>DD</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="132">\r\n<p>-</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="123">\r\n<p>-</p>\r\n</td>\r\n<td style="height: 35px; text-align: center;" width="142">\r\n<p>Rp. 285.078.598</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 59px;">\r\n<td style="height: 59px; text-align: center;" width="57">\r\n<p><strong>4</strong></p>\r\n</td>\r\n<td style="height: 59px; text-align: left;" width="208">\r\n<p>ADD</p>\r\n</td>\r\n<td style="height: 59px; text-align: center;" width="132">\r\n<p>Rp. 111.584.057</p>\r\n<p>( 100% )</p>\r\n</td>\r\n<td style="height: 59px; text-align: center;" width="123">\r\n<p>Rp. 118.703.853</p>\r\n<p>( 100% )</p>\r\n</td>\r\n<td style="height: 59px; text-align: center;" width="142">\r\n<p>Rp. 414.879.087</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 48px;">\r\n<td style="height: 48px; text-align: center;" width="57">\r\n<p><strong>5</strong></p>\r\n</td>\r\n<td style="height: 48px; text-align: left;" width="208">\r\n<p>Bantuan Pemerintah Kabupaten /&nbsp; PTAPD</p>\r\n</td>\r\n<td style="height: 48px; text-align: center;" width="132">\r\n<p>79.220.000</p>\r\n</td>\r\n<td style="height: 48px; text-align: center;" width="123">\r\n<p>30.720.000</p>\r\n</td>\r\n<td style="height: 48px; text-align: center;" width="142">\r\n<p>&nbsp;-</p>\r\n</td>\r\n</tr>\r\n<tr style="height: 59px;">\r\n<td style="height: 59px; text-align: center;" width="57">\r\n<p><strong>6</strong></p>\r\n</td>\r\n<td style="height: 59px; text-align: left;" width="208">\r\n<p>Bantuan Pemerintah Propinsi</p>\r\n</td>\r\n<td style="height: 59px; text-align: center;" width="132">\r\n<p>4.800.000</p>\r\n<p>100 %</p>\r\n</td>\r\n<td style="height: 59px; text-align: center;" width="123">\r\n<p>4.800.000</p>\r\n<p>100 %</p>\r\n</td>\r\n<td style="height: 59px; text-align: center;" width="142">\r\n<p>Rp.&nbsp; 4.800.000</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Dari tabel tersebut diatas dapat disimpulkan bahwa:</p>\r\n<ol>\r\n<li>Tanah Kas Desa tidak memiliki hasil karena tidak ada penyewaan untuk warga menggunakan tanah kas desa.</li>\r\n<li>ADD atau Alokasi Dana Desa adalah Dana APBD Kabupatenbesaran Dana tiap tahun biasanya berubah sesuai dengan kebijakan PEMKAB.</li>\r\n<li>DD atau Dana Desa adalah Dana APBN yang tahun ini telah mulai dikucurkan</li>\r\n<li>Bantuan Pemerintah Provinsi adalah Dana Dari Pemerintah Provinsi yang setiap tahunnya diterima oleh Desa</li>\r\n</ol>\r\n<p>Dana-dana tersebut diatas setiap tahunnya dipergunakan sesuai dengan peruntukannya.</p>', '<p style="text-align: center;">Tabel&nbsp;Sarana dan Prasarana Desa Serumpun Buluh tahun 2015</p>\r\n<table style="border-color: #000000; margin-left: auto; margin-right: auto;" border="2" width="597" cellspacing="2" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td style="width: 66px; text-align: center; background-color: #6cf583;" width="66">\r\n<p><strong>No</strong></p>\r\n</td>\r\n<td style="width: 66px; text-align: center; background-color: #6cf583;" width="161">\r\n<p><strong>Jenis Prasarana Dan Sarana Desa</strong></p>\r\n</td>\r\n<td style="width: 66px; text-align: center; background-color: #6cf583;" width="104">\r\n<p><strong>Jumlah</strong></p>\r\n</td>\r\n<td style="width: 66px; text-align: center; background-color: #6cf583;" width="267">\r\n<p><strong>Keterangan</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>1</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Kantor Desa</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>1</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu Direhab</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>2</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Gedung Serba Guna</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>-</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu Pembagunan</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>3</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Gedung SD</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>2</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu penambahan Ruang dan Pembanguanan Pagar</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>4</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Gedung Paud</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>2</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu pembangunan yang baru</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>5</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Masjid</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>3</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu rehab dan Pembagunan</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>6</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Surau</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>3</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu Rehab</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>7</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Poskesdes</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>1</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu rehab</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>8</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Posyandu</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>2</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu Pembangunan da Rehab</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>9</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Jembatan</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>7</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu perbaikan dan pembangunan</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>10</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Pasar Desa</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>-</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu Pembangunan</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>11</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Pos Kamling</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>2</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu Penambahan</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>12</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Gedung TPA</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>&nbsp;-</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Numpang di Masjid</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="66">\r\n<p><strong>13</strong></p>\r\n</td>\r\n<td width="161">\r\n<p>Lumbung Desa</p>\r\n</td>\r\n<td style="text-align: center;" width="104">\r\n<p>-</p>\r\n</td>\r\n<td style="text-align: center;" width="267">\r\n<p>Perlu Pembangunan</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Dari tabel tersebut diatas dapat disimpulkan bahwa :</p>\r\n<ol>\r\n<li>Pasar desa tidak ada, untuk memenuhi kebutuhan sehari-hari masyarakat berbelanja pada warung warung kecil di setiap kampung.</li>\r\n<li>Secara umum prasarana dan sarana yang ada di Desa belum mencukupi maka perlu diadakan penambahan sarana dan prasarana mengingat jumlah penduduk 2.475 jiwa dan luas 526 km&sup2;.</li>\r\n</ol>', '<p style="text-align: center;">Tabel Pemerintahan umum Desa Serumpun Buluhtahun 2015</p>\r\n<table style="border-color: #000000; margin-left: auto; margin-right: auto;" border="2" width="567" cellspacing="2" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td style="width: 47px; text-align: center; background-color: #6cf583;" rowspan="2" width="47">\r\n<p><strong>No</strong></p>\r\n</td>\r\n<td style="width: 47px; text-align: center; background-color: #6cf583;" rowspan="2" width="217">\r\n<p><strong>Uraian</strong></p>\r\n</td>\r\n<td style="width: 47px; text-align: center; background-color: #6cf583;" colspan="2" width="170">\r\n<p style="text-align: center;"><strong>Keberadaan</strong></p>\r\n</td>\r\n<td style="width: 47px; text-align: center; background-color: #6cf583;" rowspan="2" width="132">\r\n<p style="text-align: center;"><strong>Ket</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 47px; text-align: center; background-color: #6cf583;" width="85">\r\n<p><strong>Ada</strong></p>\r\n</td>\r\n<td style="width: 47px; text-align: center; background-color: #6cf583;" width="85">\r\n<p><strong>Tidak</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="47">\r\n<p><strong>1</strong></p>\r\n</td>\r\n<td width="217">\r\n<p>Pelayanan kependudukan</p>\r\n</td>\r\n<td style="text-align: center;" width="85">\r\n<p>Ada</p>\r\n</td>\r\n<td style="text-align: center;" width="85">\r\n<p>-&nbsp;</p>\r\n</td>\r\n<td style="text-align: center;" width="132">\r\n<p>-&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="47">\r\n<p><strong>2</strong></p>\r\n</td>\r\n<td width="217">\r\n<p>Pemakaman</p>\r\n</td>\r\n<td style="text-align: center;" width="85">\r\n<p>Ada</p>\r\n</td>\r\n<td style="text-align: center;" width="85">\r\n<p>-&nbsp;</p>\r\n</td>\r\n<td style="text-align: center;" width="132">\r\n<p>-&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="47">\r\n<p><strong>3</strong></p>\r\n</td>\r\n<td width="217">\r\n<p>Perijinan</p>\r\n</td>\r\n<td style="text-align: center;" width="85">\r\n<p>-</p>\r\n</td>\r\n<td style="text-align: center;" width="85">\r\n<p>Tidak</p>\r\n</td>\r\n<td style="text-align: center;" width="132">\r\n<p>&nbsp;Hanya rekomendasi</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="47">\r\n<p><strong>4</strong></p>\r\n</td>\r\n<td width="217">\r\n<p>Pasar tradisional</p>\r\n</td>\r\n<td style="text-align: center;" width="85">\r\n<p>-</p>\r\n</td>\r\n<td style="text-align: center;" width="85">\r\n<p>Tidak</p>\r\n</td>\r\n<td style="text-align: center;" width="132">\r\n<p>-&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="text-align: center;" width="47">\r\n<p><strong>5</strong></p>\r\n</td>\r\n<td width="217">\r\n<p>Ketentraman</p>\r\n</td>\r\n<td style="text-align: center;" width="85">\r\n<p>-</p>\r\n</td>\r\n<td style="text-align: center;" width="85">\r\n<p>Tidak</p>\r\n</td>\r\n<td style="text-align: center;" width="132">\r\n<p>Hanya rekomendasi</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Dari tabel tersebut diatas dapat disimpulkan bahwa :</p>\r\n<ol>\r\n<li>Pelayanan kependudukan/ masyarakat yang akan berurusan tentang surat menyurat dilayani di Kantor Kepala Desa setiap hari senin sampai hari Jum&rsquo;at sampai jam 13.00.</li>\r\n<li>Pemakaman di Desa Serumpun Buluh Tidak ada tim khusus yang menangani hal ini. Prosesi pemakaman dipimpin oleh ulama setempat dan dilaksanakan secara gotong royong oleh warga.</li>\r\n<li>Perijinan diantaranya adalah ijin keramaian dan ijin tinggal (belum di Per-Deskan).</li>\r\n<li>Ijin keramaian diwajibkan bagi kegiatan yang bisa mendatangkan massa dalam jumlah banyak. Misalnya hiburan rakyat dan orkes. Ijin ini selain ke Pemerintah Desa juga diteruskan ke MUSPIKA (belum di Per-Deskan).</li>\r\n<li>Ijin tinggal diberlakukan kepada warga asing yang bertamu lebih dari 24 jam atau menginap terutama jika bukan keluarga dekat dengan warga setempat (belum di Per-Deskan).</li>\r\n</ol>\r\n<p>Pasar tradisional tidak ada, sehingga warga untuk mendapat keperluan sehari hari membeli diwarung warung eceran yang ada disetiap kampung.</p>', 'ALAMAT KANTOR DESA', '20161201185112.png', '20161201193640.png', '2016-11-30 17:00:00', '2016-12-08 07:44:04');

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id`, `nama_dusun`, `nama_kepala`, `created_at`, `updated_at`) VALUES
(1, 'Buluh Enggadang', 'ANDI', '2016-12-07 16:47:02', '2016-12-07 16:47:02'),
(2, 'Buluh Parit', 'MULWIYADI', '2016-12-07 16:47:26', '2016-12-07 16:47:26');

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `judul_event`, `isi_event`, `tanggal_event`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pernikahan Ayu & Sandy', 'Akan diadakan pernikahan antara Ayu Musnitawati dan Bripda Sandy Biantoro yang bertempat di dusun Buluh Enggadang Rt. 05 Rw. 003 desa Serumpun Buluh  Kec. Tebas, Kabupaten Sambas', '2016-12-11', 'tidak aktif', '2016-12-08 08:32:37', '2016-12-11 19:29:57');

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `deskripsi_kategori`, `created_at`, `updated_at`) VALUES
(4, 'Masyarakat', 'Tentang Masyarakat dan warga desa', '2016-12-08 07:46:49', '2016-12-08 11:21:41'),
(5, 'Ekonomi', 'Tentang Ekonomi Masyarakat', '2016-12-24 00:32:31', '2016-12-24 00:32:31');

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `alamat`, `gambar`, `email`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 'ALPIAN (Kepala Desa)', 'Jalan Buluh Enggadang Desa Serumpun Buluh kode pos 79471.', '20161201180307.jpg', 'Serumpunb@gmail.com', '082354391942', '2016-11-30 17:00:00', '2016-12-08 12:28:51');

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_31_152732_create_table_admin', 1),
('2016_10_31_152802_create_table_kategori', 1),
('2016_10_31_152813_create_table_artikel', 1),
('2016_10_31_152835_create_table_desa', 1),
('2016_10_31_152845_create_table_kontak', 1),
('2016_10_31_152911_create_table_suara_warga', 1),
('2016_10_31_152933_create_table_komentar', 1),
('2016_10_31_153126_create_table_event', 1),
('2016_10_31_153153_create_table_organisasi', 1),
('2016_11_15_034009_create_table_dusun', 1),
('2016_11_15_034039_create_table_rw', 1),
('2016_11_15_034052_create_table_rt', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_31_152732_create_table_admin', 1),
('2016_10_31_152802_create_table_kategori', 1),
('2016_10_31_152813_create_table_artikel', 1),
('2016_10_31_152835_create_table_desa', 1),
('2016_10_31_152845_create_table_kontak', 1),
('2016_10_31_152911_create_table_suara_warga', 1),
('2016_10_31_152933_create_table_komentar', 1),
('2016_10_31_153126_create_table_event', 1),
('2016_10_31_153153_create_table_organisasi', 1),
('2016_11_15_034009_create_table_dusun', 1),
('2016_11_15_034039_create_table_rw', 1),
('2016_11_15_034052_create_table_rt', 1);

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'ALPIAN', 'KEPALA DESA', '20161207121855.JPG', '2016-12-07 05:00:00', '2016-12-07 17:18:55'),
(2, 'NUR ASIKIN', 'SEKRETARIS DESA', '20161207121911.JPG', '2016-12-07 05:00:00', '2016-12-07 17:19:11'),
(3, 'MAHMUDI', 'KEPALA SEKSI PEMERINTAHAN', '20161207121924.JPG', '2016-12-07 05:00:00', '2016-12-07 17:19:24'),
(4, 'HERMILUDIN', 'KEPALA SEKSI KESEJAHTERAAN', '20161207121943.JPG', '2016-12-07 05:00:00', '2016-12-07 17:19:43'),
(5, 'IRWANDI', 'KEPALA SEKSI PELAYANAN', '20161207122023.JPG', '2016-12-07 05:00:00', '2016-12-07 17:20:23'),
(6, 'SUHARDI', 'KEPALA URUSAN TU / UMUM', '20161207122037.JPG', '2016-12-07 05:00:00', '2016-12-07 17:20:37'),
(7, 'ERMICA', 'KEPALA URUSAN PERENCANAAN', '20161207122052.JPG', '2016-12-07 05:00:00', '2016-12-07 17:20:52'),
(8, 'RABIATUL ADAWIYAH', 'KEPALA URUSAN KEUANGAN', '20161207124146.jpg', '2016-12-07 05:00:00', '2016-12-07 17:41:46'),
(9, 'RIMA MELATI', 'BENDAHARA DESA', '20161207123458.JPG', '2016-12-07 05:00:00', '2016-12-07 17:34:58');

--
-- Dumping data for table `suara_warga`
--

INSERT INTO `suara_warga` (`id`, `nama_warga`, `isi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ruslah', 'Websitenya sudah lumayan bagus apalagi untuk seperti saya yang tinggal di pontianak untuk mengetahui berita tentang desa saya yang tidak saya ketahui.', 'belum dibaca', '2016-12-08 09:41:12', '2016-12-08 09:41:12'),
(2, 'Sukimin', 'Rumah pak kades dimane?', 'belum dibaca', '2016-12-08 12:55:40', '2016-12-08 12:55:40');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SERUMPUN BULUH', 'masariuman@gmail.com', '$2y$10$UzNzO8wo/IDyJLDT90aHe..LeHs7298NAKGtgIo.RP.w.E9N/7gKO', 'dUjK7TfbnErsUjVrAySFyybWjUEPDoJkIQkuVMfdXlaFouVwjImFRHdghSQo', '2016-11-30 17:00:00', '2016-12-24 00:39:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
