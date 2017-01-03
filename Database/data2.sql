-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 02:15 AM
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
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `id_kategori`, `judul_artikel`, `isi`, `gambar`, `nama_gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'Panen Padi Telah Tiba', '<p style="text-align: justify;">Panen padi telah tiba. Sawah warga yang ada di desa Serumpun Buluh telah siap dipanen. Beberapa warga sudah bersiap-siap dari pagi untuk memanen dengan peralatan sederhana. Para warga sangat bersemangat sekali dalam memanen kali ini. Para warga berharap panen kali ini memberikan berkah dan hasil yang memuaskan. Salah satu warga yang melakukan panen yaitu bapak Basri berharap kalau penjualan padi kali ini tidak menurun dan minimal stabil atau sama dari penjualan padi sebelumnya. Harapan ini juga ada pada seluruh warga yang melakukan panen padi tersebut. Mereka semua bersyukur untuk penanaman padi sampai panen kali ini berjalan lancar tanpa ada hambatan sepertinya misalnya serangan hama yang banyak atau penyakit padi yang merugikan.</p>', '20161208031654.jpg', 'Panen Padi', '', '2016-10-13 07:16:54', '2016-12-24 00:32:57'),
(2, 4, 'Pernikahan Zainal Abidin dan Hartati', '<p style="text-align: justify;">Seluruh warga desa bersuka cita dan mengadakan acara pernikahan Zainal Abidin dan Hartati. Acara pernikahan diadakan dari lokasi dengan nyarok di desa Serumpun Buluh dan di desa Badak Putih. Acara pernikahan dilakukan dengan cara adat dan tradisional dengan dimulainya berarak-araknya pengantin atau pawai pengantin dari desa Serumpun Buluh ke desa Badak Putih. Semoga kebersamaan para pengantin baru berlangsung lama dan tidak terkendala masalah.</p>', '20161208034047.jpg', 'Pernikahan Zainal Abidin dan Hartati', '', '2016-10-17 07:40:47', '2016-12-08 14:55:12'),
(3, 4, 'Meninggalnya Bripka Mujahidin', '<p style="text-align: justify;">Telah berpulangnya salah satu warga yaitu Bripka Mujahidin pada tanggal 16 November di kediamannya. Meninggalnya Bripka Mujahidin tersebut diketahui pada hari rabu akan tetapi dokter memprediksikan meninggalnya Bripka Mujahidin terjadi pada hari senin. Bripka Mujahidin menderita penyakit diabetes dan liver yang telah lama dideritanya dan diprediksikan dia meninggal dikarenakan penyakit tersebut. Keluarga dari Bripka Mujahidin terutama istrinya sangat sedih akan kejadian ini. Untuk Bripka Mujahidin semoga amal dan ibadahnya diterima disisi ALLAH SWT.</p>', '20161208034603.jpg', 'Meninggalnya Bripka Mujahidin', '', '2016-11-17 08:46:03', '2016-12-08 11:11:35'),
(4, 5, 'Meningkatnya Penghasilan Penjualan Jeruk', '<p style="text-align: justify;">Penghasilan penjualan buah jeruk meningkat.</p>\r\n<p style="text-align: justify;">Warga dikejutkan dengan harga penjualan jeruk yang meningkat dan tidak seperti biasanya. Warga desa sangat bersyukur atas penjualan jeruk yang meningkat dan oleh karena itu warga mendapatkan penghasilan lebih seperti sebelumnya. Meningkatnya penjualan buah jeruk sebesar Rp10.000,- per-kilo Warga desa berharap untuk penjualan berikutnya tidak menurun dan minimal sama dengan harga penjualan yang sekarang.</p>', '20161208040251.jpg', 'Kebun Jeruk', '', '2016-12-08 09:02:51', '2016-12-24 00:32:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
