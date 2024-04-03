-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2024 lúc 11:03 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` varchar(50) NOT NULL,
  `thumbnail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `id_dh` int(11) DEFAULT NULL,
  `MaSP` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT 0,
  `Gia` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `DM_ID` int(11) NOT NULL,
  `TenDM` varchar(50) NOT NULL,
  `home` int(11) NOT NULL,
  `stt` int(11) DEFAULT NULL,
  `menu1` tinyint(1) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`DM_ID`, `TenDM`, `home`, `stt`, `menu1`, `page`) VALUES
(25, 'Trang chủ', 0, 0, 8, '../index.php'),
(26, 'Sản phẩm', 0, 1, 8, '../index.php?act=product'),
(27, 'Giới thiệu', 0, 2, 8, '../index.php?act=aboutus'),
(28, 'Blog', 0, 3, 8, '../index.php?act=blog'),
(29, 'Liên hệ', 0, 4, 8, '../index.php?act=contact'),
(30, 'Bánh Kem', 26, 11, 1, '../index.php?act=product&DM_ID=30'),
(31, 'Bánh kem sẵn mỗi ngày', 26, 11, 2, '../index.php?act=product&DM_ID=31'),
(32, 'Mousse / Cheese Cake', 26, 11, 3, '../index.php?act=product&DM_ID=32'),
(33, 'Bánh ngọt', 26, 11, 4, '../index.php?act=product&DM_ID=33'),
(34, 'Bánh ngọt mỗi ngày', 26, 11, 5, '../index.php?act=product&DM_ID=34'),
(35, 'Bông lan trứng muối', 26, 11, 6, '../index.php?act=product&DM_ID=35'),
(36, 'Bánh tầng', 30, 11, 7, '../index.php?act=product&DM_ID=36'),
(37, 'Bánh mini', 30, 11, 7, '../index.php?act=product&DM_ID=37'),
(38, 'Bánh trang trí', 30, 11, 7, '../index.php?act=product&DM_ID=38'),
(39, 'Bánh nặn tạo hình', 30, 11, 7, '../index.php?act=product&DM_ID=39'),
(40, 'Bánh cưới / hoa', 30, 11, 7, '../index.php?act=product&DM_ID=40'),
(41, 'Bánh trái cây', 30, 11, 7, '../index.php?act=product&DM_ID=41'),
(42, 'Bánh bé trai', 30, 11, 7, '../index.php?act=product&DM_ID=42'),
(43, 'Bánh bé gái', 30, 11, 7, '../index.php?act=product&DM_ID=43'),
(44, 'Bánh vẽ', 30, 11, 7, '../index.php?act=product&DM_ID=44'),
(45, 'Bánh kẹo, chocolate', 38, 11, 7, '../index.php?act=product&DM_ID=45'),
(46, 'Bánh máy bay, ô tô, búp bê', 38, 11, 7, '../index.php?act=product&DM_ID=46'),
(47, 'Bánh chữ & số', 39, 11, 7, '../index.php?act=product&DM_ID=47'),
(48, 'Bánh 12 con giáp', 39, 11, 7, '../index.php?act=product&DM_ID=48'),
(49, 'Bánh gấu thỏ', 39, 11, 7, '../index.php?act=product&DM_ID=49'),
(50, 'Mousse dừa', 32, 11, 7, '../index.php?act=product&DM_ID=50'),
(51, 'Mix Vị', 32, 11, 7, '../index.php?act=product&DM_ID=51'),
(52, 'Tiramisu', 32, 11, 7, '../index.php?act=product&DM_ID=52'),
(53, 'Red velvet', 32, 11, 7, '../index.php?act=product&DM_ID=53'),
(54, 'Cheese Chanh dây', 32, 11, 7, '../index.php?act=product&DM_ID=54'),
(55, 'Basque Burnt Cheesecake', 32, 11, 7, '../index.php?act=product&DM_ID=55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `madh` varchar(100) NOT NULL,
  `id_nd` int(11) NOT NULL,
  `nguoidat_ten` varchar(50) NOT NULL,
  `nguoidat_email` varchar(50) NOT NULL,
  `nguoidat_diachi` varchar(100) NOT NULL,
  `nguoidat_sdt` varchar(20) NOT NULL,
  `nguoinhan_ten` varchar(50) DEFAULT NULL,
  `nguoinhan_sdt` varchar(20) DEFAULT NULL,
  `nguoinhan_diachi` varchar(100) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `pttt` tinyint(1) NOT NULL COMMENT '0. Tiền mặt 1. Chuyển khoản',
  `id_ttr` tinyint(1) NOT NULL DEFAULT 0,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(50) NOT NULL,
  `GiaTriKM` int(9) NOT NULL,
  `NgayBatDau` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `TrangThai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `GiaTriKM`, `NgayBatDau`, `NgayKetThuc`, `TrangThai`) VALUES
(1, 'KM20', 200000, '2024-04-03', '2024-04-10', 0),
(2, 'KM20', 200000, '2024-04-03', '2024-04-10', 0),
(3, 'KM30', 300000, '2024-04-03', '2024-04-10', 0),
(4, 'KM40', 400000, '2024-04-03', '2024-04-10', 0),
(5, 'KM50', 500000, '2024-04-03', '2024-04-10', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenum` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pass` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `name`, `user`, `email`, `phonenum`, `address`, `pass`, `role_id`) VALUES
(12, 'Hoàng Yến', '123456', 'hoangyen', '123456789', 'da nang', 'hoangyen@gmail.com', 0),
(14, 'khacduy', 'khacduy', 'khacduy2002zz@gmail.com', '0154684684', 'Nha em', '123456', 1),
(133, 'hahahaha', 'khacduy1', 'camtran999999@gmail.com', '03264846', 'aaa', '123456', 0),
(134, 'aaaa', 'aaaaa', 'duynkps37404@fpt.edu.vn', NULL, NULL, '1234', 0),
(135, 'Khacduy', 'khacduy1111', 'khacduy29@gmail.com', '09324546412', '13 ac, danang', '123456', 0),
(136, 'Nguyễn Khắc Duy', 'guest18', 'acccsak@gmail.com', '092313254', 'k7123', '123456', 0),
(138, 'Nguyễn Khắc Duy', 'guest234', 'camtran999999@gmail.com', '932105214', '13', '123456', 0),
(139, '', 'guest946', '', '', '', '123456', 0),
(140, 'Nguyễn Khắc Duy', 'guest541', '', '', '13', '123456', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `role_id` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`role_id`, `name`) VALUES
(0, 'User'),
(1, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `DM_ID` int(11) NOT NULL,
  `TenSP` varchar(350) NOT NULL,
  `SoLuong` int(9) UNSIGNED NOT NULL DEFAULT 1,
  `id_trth` tinyint(1) NOT NULL DEFAULT 0,
  `Gia` float NOT NULL,
  `Thumbnail` varchar(500) NOT NULL,
  `MoTa` longtext DEFAULT NULL,
  `MaKM` int(11) NOT NULL,
  `size` int(2) NOT NULL DEFAULT 20,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `DM_ID`, `TenSP`, `SoLuong`, `id_trth`, `Gia`, `Thumbnail`, `MoTa`, `MaKM`, `size`, `created_at`) VALUES
(66, 37, 'Bánh mini', 1, 1, 200000, 'Banhmini1.jpg', 'Bánh nho nhỏ xinh xinh', 1, 20, '2024-04-02 17:00:00'),
(67, 37, 'Bánh mini', 2, 1, 200000, 'Banhmini2.jpg', 'Bánh nhỏ nhỏ xinh xih', 1, 20, '2024-04-02 17:00:00'),
(69, 37, 'Bánh mini', 1, 1, 200000, 'Banhmini4.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(71, 35, 'Bông lan trứng muối', 2, 1, 300000, 'BLTM1.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(72, 50, 'Bánh mousse dừa', 2, 1, 300000, 'Mosse1.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(73, 50, 'Bánh mousse dừa', 2, 1, 300000, 'Mosse2.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(74, 50, 'Bánh mousse dừa', 2, 2, 300000, 'Mosse3.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(75, 51, 'Mix vị', 3, 1, 300000, 'mix1.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(76, 51, 'Mix vị', 2, 2, 200000, 'mix2.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(80, 33, 'Sữa chua cốm Nhà làm', 2, 1, 200000, 'nc2_fadbdb5f5ca04a3c8032f5b70f8fb18f_master.jpg', 'Sự kết hợp giữa sữa chua sánh đặc,chua thanh, thơm', 1, 20, '2024-04-02 17:00:00'),
(81, 33, 'Bánh su sầu riêng', 2, 1, 200000, '3_9f26bc5df78f419bb5dbb9b20888f9fe_master.jpg', 'Sự ra đời của chiếc bánh crepe', 1, 20, '2024-04-02 17:00:00'),
(82, 33, 'Bánh Donut', 2, 1, 200000, '284937545_2024187604588337_6422106584263183060_n_5b9ef9a3479343e3817ec09a9e03c533_compact.jpg', 'Có tạo hình bắt mắt, bánh vàng ươm, thơm, ngon', 1, 20, '2024-04-02 17:00:00'),
(83, 30, 'Bánh kem', 3, 1, 200000, 'Banhmoi1.jpg', 'Vị ngon tuyệt', 1, 20, '2024-04-02 17:00:00'),
(84, 30, 'Bánh kem', 2, 1, 200000, 'Banhmoi2.jpg', 'A', 1, 20, '2024-04-02 17:00:00'),
(85, 30, 'Bánh kem', 3, 1, 200000, 'Banhmoi3.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(86, 30, 'Bánh kem', 4, 1, 200000, 'Banhmoi4.jpg', '2323', 1, 20, '2024-04-02 17:00:00'),
(87, 51, 'Mix vị', 3, 1, 200000, 'mix 3.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(88, 31, 'Bánh kem', 3, 1, 300000, 'BanhSanMoiNgay1.jpg', 'AAAAAA', 1, 20, '2024-04-02 17:00:00'),
(89, 31, 'Bánh kem', 2, 1, 300000, 'BanhSanMoiNgay2.jpg', 'sssss', 1, 20, '2024-04-02 17:00:00'),
(90, 31, 'Bánh kem', 1, 1, 300000, 'BanhSanMoiNgay3.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(91, 31, 'Bánh kem', 1, 1, 300000, 'BanhSanMoiNgay4.jpg', 'gggggg', 1, 20, '2024-04-02 17:00:00'),
(92, 31, 'Bánh kem', 2, 1, 300000, 'BanhSanMoiNgay5.jpg', 'aaaaa', 1, 20, '2024-04-02 17:00:00'),
(93, 30, 'Bánh kem', 1, 1, 300000, 'BanhTang.jpg', 'banhtang\r\n', 1, 20, '2024-04-02 17:00:00'),
(94, 32, 'Mousse dừa', 1, 1, 300000, 'Mosse 1.jpg', 'aa', 1, 20, '2024-04-02 17:00:00'),
(95, 32, 'Mousse dừa', 1, 1, 300000, 'Mosse 5.jpg', 'aa', 1, 20, '2024-04-02 17:00:00'),
(96, 32, 'Mousse dừa', 2, 1, 300000, 'Mosse 7.jpg', 'aaaa', 1, 20, '2024-04-02 17:00:00'),
(97, 32, 'Cheese chanh dây', 3, 1, 200000, 'M&C2.jpg', 'aaa', 1, 20, '2024-04-02 17:00:00'),
(98, 32, 'Cheese chanh dây', 2, 1, 300000, 'M&C1.jpg', 'aaa', 1, 20, '2024-04-02 17:00:00'),
(99, 32, 'Cheese chanh dây', 3, 1, 300000, 'M&C4.jpg', 'aaa', 1, 20, '2024-04-02 17:00:00'),
(100, 34, 'Bánh mì chà bông sốt bơ', 2, 1, 45000, 'BanhNgot1.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(101, 34, 'Bánh bao chỉ', 2, 1, 20000, 'BanhNgot3.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(102, 34, 'Bánh bắp - Bánh ngọt Đà Nẵng', 2, 1, 50000, 'BanhNgot2.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(103, 34, 'Bánh Flan - Bánh ngọt Đà Nẵng', 3, 1, 7000, 'BanhNgot8.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(104, 35, 'Bông lan trứng muối', 3, 1, 300000, 'BLTM1.jpg', 'aasaa', 1, 20, '2024-04-02 17:00:00'),
(105, 35, 'Bông lan trứng muối', 2, 1, 300000, 'BLTM4.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(106, 35, 'Bông lan trứng muối', 3, 1, 300000, 'BLTM8.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(107, 35, 'Bông lan trứng muối', 2, 1, 300000, 'BLTM7.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(108, 36, 'Bánh tầng', 3, 1, 400000, 'BanhTang.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(109, 38, 'Bánh trang trí', 2, 1, 200000, 'BanhTTBK.jpg', 'aas', 1, 20, '2024-04-02 17:00:00'),
(110, 38, 'Bánh trang trí', 2, 1, 300000, 'BanhTTBK1.jpg', 'ssss', 1, 20, '2024-04-02 17:00:00'),
(111, 38, 'Bánh trang trí', 5, 1, 300000, 'BanhTTBK4.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(112, 38, 'Bánh trang trí', 2, 1, 300000, 'BanhTTBK3.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(113, 39, 'Bánh nặn tạo hình', 12, 1, 300000, 'BanhKem1.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(114, 39, 'Bánh nặn tạo hình', 23, 1, 300000, '26_633c8357f8af438c837b0c9f2b2cd2c1_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(115, 39, 'Bánh nặn tạo hình', 3, 1, 300000, '42_5f683935cfa8460383bf900d9da6398b_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(117, 39, 'Bánh nặn tạo hình', 1, 1, 300000, '4_3d515f2680694e9c9459274f0518c689_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(118, 40, 'Bánh cưới', 3, 1, 400000, '1a_ebdccd789dfa479099858386948f900d_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(119, 40, 'Bánh cưới', 1, 1, 400000, '2_0c030ba3bd0243038b39f937069c3609_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(120, 40, 'Bánh cưới', 2, 1, 400000, '2a_8592b0fdebbf4b47bb19d73677fa2717_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(121, 40, 'Bánh hoa', 1, 1, 450000, '3_e8b6b76c86684b21af44a028984beaeb_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(123, 40, 'Bánh hoa', 1, 1, 400000, '38_df1d62ebd6134bf5b55c43ceb392389d_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(124, 41, 'Bánh trái cây', 1, 1, 350000, '1__1__5ee8186cdde04b74bee46eadec3e0cab_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(125, 41, 'Bánh trái cây', 2, 1, 300000, '3_801aff7c219e405a8220c4894133b95f_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(126, 41, 'Bánh trái cây', 2, 1, 300000, '6_94845d6f63ad49548bffdf1099d417ec_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(127, 41, 'Bánh trái cây', 2, 1, 300000, '11_5fd075b2746f4523965ee479ae50f5a9_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(128, 41, 'Bánh trái cây', 2, 2, 200000, '19_15ecb6f1480a410a8b6e8e9f86739627_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(129, 52, 'Tiramisu', 2, 1, 250000, '1.1_99ba59d1be644ee9853ae19c4c1da3f9_grande.jpg', 'Bánh kem hương vị tình yêu', 1, 20, '2024-04-02 17:00:00'),
(130, 52, 'Tiramisu', 3, 1, 205000, '1.2_32ba6fb0ee934fa598abfd74b6bf33e4_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(131, 52, 'Tiramisu', 2, 1, 250000, '6_ec75840e5473473eb9d106dd31e35ce2_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(132, 52, 'Tiramisu', 1, 1, 250000, '1.7_789c8866d63c45ce84efdd79ca1b4d17_grande.jpg', '', 1, 20, '2024-04-02 17:00:00'),
(133, 52, 'Tiramisu', 2, 1, 300000, '1.5_7ccf919fc8ea4484a183ab04667d390e_grande.jpg', '', 1, 20, '2024-04-02 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtranggiaohang`
--

CREATE TABLE `tinhtranggiaohang` (
  `id` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtranggiaohang`
--

INSERT INTO `tinhtranggiaohang` (`id`, `name`) VALUES
(0, 'Đã thanh toán'),
(1, 'Đang giao'),
(2, 'Đã hủy'),
(3, 'Hoàn thành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `name`) VALUES
(1, 'Còn hàng'),
(2, 'Hết hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_ctdh` (`id_dh`,`MaSP`) USING BTREE,
  ADD KEY `lk_sanpham_chitietdonhang` (`MaSP`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`DM_ID`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_idnd` (`id_nd`),
  ADD KEY `lk_tinhtrang_donhang` (`id_ttr`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`),
  ADD UNIQUE KEY `uni_user_email` (`user`) USING BTREE,
  ADD KEY `in_email` (`email`),
  ADD KEY `lk_nguoidung_phanquyen` (`role_id`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `index_dmid` (`DM_ID`),
  ADD KEY `index_km` (`MaKM`),
  ADD KEY `lk_sp_trangthai` (`id_trth`);

--
-- Chỉ mục cho bảng `tinhtranggiaohang`
--
ALTER TABLE `tinhtranggiaohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `DM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `lk_donhang_chitietdonhang` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lk_sanpham_chitietdonhang` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `lk_nguoidung_donhang` FOREIGN KEY (`id_nd`) REFERENCES `nguoidung` (`MaND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lk_tinhtrang_donhang` FOREIGN KEY (`id_ttr`) REFERENCES `tinhtranggiaohang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `lk_nguoidung_phanquyen` FOREIGN KEY (`role_id`) REFERENCES `phanquyen` (`role_id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`DM_ID`) REFERENCES `danhmuc` (`DM_ID`),
  ADD CONSTRAINT `lk_sanpham_khuyenmai` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`),
  ADD CONSTRAINT `lk_sp_trangthai` FOREIGN KEY (`id_trth`) REFERENCES `trangthai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
