-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 04, 2023 lúc 05:01 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `DoAn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Cart`
--

CREATE TABLE `Cart` (
  `MaDH` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `GioHang`
--

CREATE TABLE `GioHang` (
  `MaGH` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `GioHang`
--

INSERT INTO `GioHang` (`MaGH`, `MaSP`) VALUES
(122, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Hinh`
--

CREATE TABLE `Hinh` (
  `MaIMG` int(11) NOT NULL,
  `DiaChi` longtext NOT NULL,
  `Masp` int(11) NOT NULL,
  `TenIMG` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Hinh`
--

INSERT INTO `Hinh` (`MaIMG`, `DiaChi`, `Masp`, `TenIMG`) VALUES
(1, '../img/IPad/Pro/Ipa9-1.jpeg', 3, 'IPad Pro 3'),
(2, '../img/chitiet/ip14-3.jpeg', 3, 'IPad Pro 3-2'),
(44, '../img/IPad/Pro/ipaMiNi-1.jpeg', 3, '44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `PhanLoai`
--

CREATE TABLE `PhanLoai` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `PhanLoai`
--

INSERT INTO `PhanLoai` (`MaLoai`, `TenLoai`) VALUES
(1, 'IPhone'),
(2, 'IPad'),
(3, 'MacBook'),
(4, 'AirPod'),
(5, 'Watch'),
(6, 'Tai Nghe'),
(7, 'Mắt Kính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `SanPham`
--

CREATE TABLE `SanPham` (
  `Masp` int(11) NOT NULL,
  `Tensp` varchar(50) NOT NULL,
  `Giasp` int(11) NOT NULL,
  `Hinhsp` longtext NOT NULL,
  `SL` int(11) NOT NULL,
  `LoaiSP` int(11) NOT NULL,
  `TrangThai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `SanPham`
--

INSERT INTO `SanPham` (`Masp`, `Tensp`, `Giasp`, `Hinhsp`, `SL`, `LoaiSP`, `TrangThai`) VALUES
(1, 'IPad pro M1', 290000, '../img/IPad/Pro/Ipa9-1.jpeg', 1, 1, 1),
(2, 'IPhone 13', 1233, '../img/IPad/Pro/ipaPro-1.jpeg', 2, 1, NULL),
(3, 'IPad Pro', 2323, '../img/IPad/Pro/ipaPro-1.jpeg', 12, 2, 2),
(4, 'IPhone 11', 2390000, '../img/IPad/Pro/ipaPro-1.jpeg', 10, 1, 2),
(5, 'IPhone 12 Pro Max', 2390000, '../img/IPad/Pro/ipaPro-1.jpeg', 10, 1, 2),
(6, 'IPhone 12 Pro', 2390000, '../img/IPad/Pro/ipaPro-1.jpeg', 10, 1, 2),
(8, 'IPhone 14 Pro', 2390000, '../img/IPad/Pro/ipaPro-1.jpeg', 10, 1, 2),
(9, 'IPhone 12 Mini', 2900000, '../img/IPad/Pro/ipaMini-1.jpeg', 1, 1, 1),
(10, 'Minh nhua', 33, '../img/IPad/Pro/IPaPro-2.JPEG', 1, 1, 1),
(11, 'Alo', 12313, '../img/IPad/Pro/ipaPro-1.jpeg', 23131, 6, 1),
(12, '33', 23, '../img/IPad/Pro/IpaPro-2.jpeg', 2, 1, 1),
(13, 'MacBook Pro M222', 2, '../img/IPad/Pro/ipaPro-1.jpeg', 2, 1, 1),
(44, '44', 44, '../img/IPad/Pro/', 44, 1, 1),
(45, 'iphonnnn', 1, '../img/IPad/Pro/', 3, 2, 1),
(46, 'iphonnnn', 1, '../img/IPad/Pro/', 3, 2, 1),
(47, 'iphonnnn', 1, '../img/IPad/Pro/', 3, 2, 1),
(48, 'iphonnnn', 1, '../img/IPad/Pro/', 3, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `TaiKhoan`
--

CREATE TABLE `TaiKhoan` (
  `UserName` int(11) NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `TaiKhoan`
--

INSERT INTO `TaiKhoan` (`UserName`, `Pass`) VALUES
(90, '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `TrangThai`
--

CREATE TABLE `TrangThai` (
  `MaTT` int(11) NOT NULL,
  `TenTT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `TrangThai`
--

INSERT INTO `TrangThai` (`MaTT`, `TenTT`) VALUES
(1, 'Hết Hàng'),
(2, 'Tạm Hết Hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `GioHang`
--
ALTER TABLE `GioHang`
  ADD PRIMARY KEY (`MaGH`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `Hinh`
--
ALTER TABLE `Hinh`
  ADD PRIMARY KEY (`MaIMG`),
  ADD KEY `Masp` (`Masp`);

--
-- Chỉ mục cho bảng `PhanLoai`
--
ALTER TABLE `PhanLoai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `SanPham`
--
ALTER TABLE `SanPham`
  ADD PRIMARY KEY (`Masp`),
  ADD KEY `LoaiSP` (`LoaiSP`),
  ADD KEY `TrangThai` (`TrangThai`);

--
-- Chỉ mục cho bảng `TaiKhoan`
--
ALTER TABLE `TaiKhoan`
  ADD PRIMARY KEY (`UserName`);

--
-- Chỉ mục cho bảng `TrangThai`
--
ALTER TABLE `TrangThai`
  ADD PRIMARY KEY (`MaTT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Cart`
--
ALTER TABLE `Cart`
  MODIFY `MaDH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `GioHang`
--
ALTER TABLE `GioHang`
  MODIFY `MaGH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT cho bảng `Hinh`
--
ALTER TABLE `Hinh`
  MODIFY `MaIMG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `PhanLoai`
--
ALTER TABLE `PhanLoai`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `SanPham`
--
ALTER TABLE `SanPham`
  MODIFY `Masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `TaiKhoan`
--
ALTER TABLE `TaiKhoan`
  MODIFY `UserName` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `TrangThai`
--
ALTER TABLE `TrangThai`
  MODIFY `MaTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Cart`
--
ALTER TABLE `Cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `SanPham` (`Masp`);

--
-- Các ràng buộc cho bảng `GioHang`
--
ALTER TABLE `GioHang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `SanPham` (`Masp`);

--
-- Các ràng buộc cho bảng `Hinh`
--
ALTER TABLE `Hinh`
  ADD CONSTRAINT `hinh_ibfk_1` FOREIGN KEY (`Masp`) REFERENCES `SanPham` (`Masp`);

--
-- Các ràng buộc cho bảng `SanPham`
--
ALTER TABLE `SanPham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`LoaiSP`) REFERENCES `PhanLoai` (`MaLoai`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`TrangThai`) REFERENCES `TrangThai` (`MaTT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
