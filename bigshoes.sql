-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2022 lúc 06:14 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` varchar(50) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `noi_dung` varchar(50) NOT NULL,
  `ngay_bl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `mo_ta` varchar(500) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `maSize` int(10) DEFAULT NULL,
  `maMau` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `hinh`, `don_gia`, `giam_gia`, `mo_ta`, `ma_loai`, `maSize`, `maMau`) VALUES
(63, 'aaa', 'sn6.jpg', 123, 12, 'sadsa dsadsd', 26, 1, 1),
(65, 'gggg', 'sn7.jpg', 123321, 12, 'asds hdgg hl ghdf', 26, 4, 3),
(66, 'llllll', 'sn15.jpg', 15963, 22, 'đa gfd hjk ft', 26, 4, 2),
(67, 'jhgjhhuh', 'sn1.jpg', 77777, 11, 'jjkjh dfgdf sdfsf  hhh', 26, 2, 3),
(71, 'ADIDAS ULTRA BOOST 22 MADE NATURE WHITE BEIGE', 'sn13.jpg', 700000, 10, 'chgcghvjhnkjn mnkjnb', 34, 1, 1),
(72, 'Giày Nike Pegasus ', 'sn8.jpg', 800000, 9, 'dxghcvjbkbdfxghcvjb', 35, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ngay_mua` varchar(20) NOT NULL,
  `ghi_chu` varchar(50) NOT NULL,
  `tinh_trang` int(10) DEFAULT 1,
  `ma_kh` varchar(50) NOT NULL,
  `size` int(10) NOT NULL,
  `mausac` int(10) NOT NULL,
  `diaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hd`, `ngay_mua`, `ghi_chu`, `tinh_trang`, `ma_kh`, `size`, `mausac`, `diaChi`) VALUES
(121, '14-12-2022', '', 2, 'huyvu2003', 5, 3, 'Cao Bằng'),
(122, '14-12-2022', '', 1, 'huyvu2003', 6, 4, 'Cao Bằng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hd` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `size` int(10) NOT NULL,
  `mausac` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_hd`, `so_luong`, `don_gia`, `ma_hh`, `size`, `mausac`) VALUES
(121, 1, 77777, 67, 5, 3),
(122, 4, 123321, 65, 6, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `vai_tro` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ho_ten`, `mat_khau`, `email`, `dia_chi`, `vai_tro`) VALUES
('huyvu2003', 'Vũ', '123456', 'havu6544@gmail.com', 'Cao Bằng', 1),
('nhom3duan1', 'nhóm 3', '123456', 'nhom3@gmail.com', 'hà nội', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(26, 'Nike'),
(34, 'Adidas'),
(35, 'Pegasus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `maMau` int(10) NOT NULL,
  `Mau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`maMau`, `Mau`) VALUES
(1, 'Đen'),
(2, 'Trắng'),
(3, 'Nâu'),
(4, 'Xanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `maSize` int(10) NOT NULL,
  `Size` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`maSize`, `Size`) VALUES
(1, 37),
(2, 38),
(3, 39),
(4, 40),
(5, 41),
(6, 42);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tt_don_hang`
--

CREATE TABLE `tt_don_hang` (
  `id_tt` int(10) NOT NULL,
  `name_tt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tt_don_hang`
--

INSERT INTO `tt_don_hang` (`id_tt`, `name_tt`) VALUES
(1, 'Đơn hàng mới'),
(2, 'Đang xử lý'),
(3, 'Đang giao hàng'),
(4, 'Đã hoàn thành'),
(5, 'Hủy đơn hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`),
  ADD KEY `hang_hoa_ibfk2` (`maSize`),
  ADD KEY `hang_hoa_ibfk3` (`maMau`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `hoa_don_ibfk_2` (`size`),
  ADD KEY `hoa_don_ibfk_3` (`mausac`),
  ADD KEY `hoa_don_ibfk_4` (`tinh_trang`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_hd` (`ma_hd`),
  ADD KEY `hoa_don_chi_tiet_ibfk_4` (`size`),
  ADD KEY `hoa_don_chi_tiet_ibfk_5` (`mausac`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`maMau`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`maSize`);

--
-- Chỉ mục cho bảng `tt_don_hang`
--
ALTER TABLE `tt_don_hang`
  ADD PRIMARY KEY (`id_tt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `maMau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `maSize` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tt_don_hang`
--
ALTER TABLE `tt_don_hang`
  MODIFY `id_tt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk2` FOREIGN KEY (`maSize`) REFERENCES `size` (`maSize`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hang_hoa_ibfk3` FOREIGN KEY (`maMau`) REFERENCES `mausac` (`maMau`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`size`) REFERENCES `size` (`maSize`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_ibfk_3` FOREIGN KEY (`mausac`) REFERENCES `mausac` (`maMau`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_ibfk_4` FOREIGN KEY (`tinh_trang`) REFERENCES `tt_don_hang` (`id_tt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_3` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_4` FOREIGN KEY (`size`) REFERENCES `size` (`maSize`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_5` FOREIGN KEY (`mausac`) REFERENCES `mausac` (`maMau`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
