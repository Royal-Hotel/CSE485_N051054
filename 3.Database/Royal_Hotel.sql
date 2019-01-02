-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2019 lúc 04:57 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `royal_hotel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_ct` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(3000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_ct`, `name`, `email`, `message`) VALUES
(2, 'Coong ', 'vubacong98@gmail.com', 'dmm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datphong`
--

CREATE TABLE `datphong` (
  `id_dp` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_lp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_p` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `datphong`
--

INSERT INTO `datphong` (`id_dp`, `firstname`, `lastname`, `ten_lp`, `so_p`, `check_in`, `check_out`, `phone_number`, `email`, `address`) VALUES
(3, 'Do', 'Van Sy', 'Vip Room', 1, '2019-01-01', '0000-00-00', 1231241515, '', 'HN'),
(4, 'Do', 'Van Sy', 'Double Room', 2, '2019-01-01', '0000-00-00', 1231241515, 'vubacong98@gmail.com', ''),
(5, 'Do', 'Van Sy', 'Vip Room', 5, '2019-01-01', '0000-00-00', 1231241515, 'vubacong98@gmail.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `id_lp` int(11) NOT NULL,
  `id_dp` int(11) NOT NULL,
  `Trang_thai_TT` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphong`
--

CREATE TABLE `loaiphong` (
  `id_lp` int(11) NOT NULL,
  `ten_lp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia_lp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphong`
--

INSERT INTO `loaiphong` (`id_lp`, `ten_lp`, `gia_lp`, `ghi_chu`, `img`) VALUES
(1, 'VIP ROOM', '100$', 'Phong co nhieu chuc nang dac biet, tien nghi voi view dep', 'images/room1.png'),
(2, 'DOUBLE ROOM', '80$', 'phong danh cho nhung cap doi tinh nha nghi tuan trang mat hay di du lich', 'images/room2.png'),
(3, 'SINGLE ROOM', '50$', 'phong don danh cho 1 nguoi ', 'images/room3.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id_p` int(11) NOT NULL,
  `ten_p` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_lp` int(11) NOT NULL,
  `id_ttp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id_p`, `ten_p`, `id_lp`, `id_ttp`) VALUES
(1, 'Room A', 1, 1),
(2, 'Room B', 1, 1),
(3, 'Room C', 1, 1),
(4, 'Room D', 1, 2),
(5, 'Room E', 1, 2),
(6, 'Room F', 1, 2),
(7, 'Room G', 1, 3),
(8, 'Room H', 1, 3),
(9, 'Room I', 1, 3),
(10, 'Room K', 1, 1),
(11, 'Room A1', 2, 1),
(12, 'Room B1', 2, 1),
(13, 'Room C1', 2, 1),
(14, 'Room D1', 2, 1),
(15, 'Room E1', 2, 2),
(16, 'Room F1', 2, 2),
(17, 'Room G1', 2, 2),
(18, 'Room H1', 2, 2),
(19, 'Room I1', 2, 2),
(20, 'Room K1', 3, 3),
(21, 'Room A2', 3, 1),
(22, 'Room B2', 3, 1),
(23, 'Room C2', 3, 2),
(24, 'Room D2', 3, 2),
(25, 'Room E2', 3, 2),
(26, 'Room F2', 3, 2),
(27, 'Room G2', 3, 3),
(28, 'Room H2', 3, 2),
(29, 'Room I2', 3, 2),
(30, 'Room K2', 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaiphong`
--

CREATE TABLE `trangthaiphong` (
  `id_ttp` int(11) NOT NULL,
  `Trang_thai_phong` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthaiphong`
--

INSERT INTO `trangthaiphong` (`id_ttp`, `Trang_thai_phong`) VALUES
(1, 'Đã thuê'),
(2, 'Chưa thuê'),
(3, 'Đang sửa chữa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_level` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=pending,1=confirmed',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `contact_number`, `address`, `password`, `access_level`, `access_code`, `status`, `created`, `modified`) VALUES
(1, 'Mike', 'Dalisay', 'mike@example.com', '0999999999', 'Blk. 24 A, Lot 6, Ph. 3, Peace Village', '$2y$10$AUBptrm9sQF696zr8Hv31On3x4wqnTihdCLocZmGLbiDvyLpyokL.', 'Admin', '', 1, '0000-00-00 00:00:00', '2016-06-13 04:17:47'),
(2, 'Lauro', 'Abogne', 'lauro@eacomm.com', '08888888', 'Pasig City', '$2y$10$it4i11kRKrB19FfpPRWsRO5qtgrgajL7NnxOq180MsIhCKhAmSdDa', 'Customer', '', 1, '0000-00-00 00:00:00', '2015-03-23 17:00:21'),
(3, 'Darwin', 'Dalisay', 'darwin@example.com', '9331868359', 'Blk 24 A Lot 6 Ph 3\r\nPeace Village, San Luis', '$2y$10$tLq9lTKDUt7EyTFhxL0QHuen/BgO9YQzFYTUyH50kJXLJ.ISO3HAO', 'Customer', 'ILXFBdMAbHVrJswNDnm231cziO8FZomn', 1, '2014-10-29 17:31:09', '2016-06-13 04:18:25'),
(4, 'Marisol Jane', 'Dalisay', 'mariz@gmail.com', '09998765432', 'Blk. 24 A, Lot 6, Ph. 3, Peace Village', 'mariz', 'Customer', '', 1, '2015-02-25 09:35:52', '2015-03-23 17:00:21'),
(5, 'Marykris', 'De Leon', 'marykrisdarell.deleon@gmail.com', '09194444444', 'Project 4, QC', '$2y$10$uUy7D5qmvaRYttLCx9wnU.WOD3/8URgOX7OBXHPpWyTDjU4ZteSEm', 'Customer', '', 1, '2015-02-27 14:28:46', '2015-03-23 16:51:03'),
(6, 'Merlin', 'Duckerberg', 'merlin@gmail.com', '09991112333', 'Project 2, Quezon City', '$2y$10$VHY58eALB1QyYsP71RHD1ewmVxZZp.wLuhejyQrufvdy041arx1Kq', 'Admin', '', 1, '2015-03-18 06:45:28', '2015-03-23 17:00:21'),
(7, 'Charlon', 'Ignacio', 'charlon@gmail.com', '09876543345', 'Tandang Sora, QC', '$2y$10$Fj6O1tPYI6UZRzJ9BNfFJuhURN9DnK5fQGHEsfol5LXRu.tCYYggu', 'Customer', '', 1, '2015-03-24 08:06:57', '2015-03-23 17:48:00'),
(8, 'Kobe Bro', 'Bryant', 'kobe@gmail.com', '09898787674', 'Los Angeles, California', '$2y$10$fmanyjJxNfJ8O3p9jjUixu6EOHkGZrThtcd..TeNz2g.XZyCIuVpm', 'Customer', '', 1, '2015-03-26 11:28:01', '2015-03-25 13:39:52'),
(9, 'Tim', 'Duncan', 'tim@example.com', '9999999', 'San Antonio, Texas, USA', '$2y$10$9OSKHLhiDdBkJTmd3VLnQeNPCtyH1IvZmcHrz4khBMHdxc8PLX5G6', 'Customer', '0X4JwsRmdif8UyyIHSOUjhZz9tva3Czj', 1, '2016-05-26 01:25:59', '2016-05-25 03:25:59'),
(10, 'Tony', 'Parker', 'tony@example.com', '8888888', 'Blk 24 A Lot 6 Ph 3\r\nPeace Village, San Luis', '$2y$10$lBJfvLyl/X5PieaztTYADOxOQeZJCqETayF.O9ld17z3hcKSJwZae', 'Customer', 'THM3xkZzXeza5ISoTyPKl6oLpVa88tYl', 1, '2016-05-26 01:29:01', '2016-06-13 03:46:33'),
(11, 'Cong', 'To', 'vubacong98@gmail.com', '0984757368', 'Ha Noi', '$2y$10$hWJViVJgFbhTTkzxNwxyS.b27qA44XQ9sB86YR3u.DIsHVdUUrhii', 'Admin', '9OMWCXqhNUVjd7enUExq04e8qGJv1QFU', 1, '2018-12-30 16:49:09', '2018-12-31 18:45:13'),
(22, 'Do', 'Van Sy', 'anhcongbn98@gmail.com', '0984757368', 'HN', '$2y$10$uDUw1i9RkWShqTHW2c7a7OrEqSAx9jIuUYr5RIR/FpxQd/G.mqFFu', 'Customer', 'KLCzKkssiqAjKJMRCod4e95z1hYK2wF3', 1, '2019-01-01 03:11:35', '2018-12-31 19:12:12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_ct`);

--
-- Chỉ mục cho bảng `datphong`
--
ALTER TABLE `datphong`
  ADD PRIMARY KEY (`id_dp`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `HD1_FK` (`id_p`),
  ADD KEY `HD2_FK` (`id_dp`),
  ADD KEY `HD3_FK` (`id`),
  ADD KEY `HD4_PK` (`id_lp`);

--
-- Chỉ mục cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`id_lp`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `P1_FK` (`id_lp`),
  ADD KEY `P2_FK` (`id_ttp`);

--
-- Chỉ mục cho bảng `trangthaiphong`
--
ALTER TABLE `trangthaiphong`
  ADD PRIMARY KEY (`id_ttp`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `datphong`
--
ALTER TABLE `datphong`
  MODIFY `id_dp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `id_lp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `trangthaiphong`
--
ALTER TABLE `trangthaiphong`
  MODIFY `id_ttp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `HD1_PK` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `HD2_PK` FOREIGN KEY (`id_dp`) REFERENCES `datphong` (`id_dp`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `HD3_PK` FOREIGN KEY (`id_p`) REFERENCES `phong` (`id_p`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `HD4_PK` FOREIGN KEY (`id_lp`) REFERENCES `loaiphong` (`id_lp`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `P1_PK` FOREIGN KEY (`id_lp`) REFERENCES `loaiphong` (`id_lp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `P2_PK` FOREIGN KEY (`id_ttp`) REFERENCES `trangthaiphong` (`id_ttp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
