-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 01:17 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ismart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `file_url` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `file_size` int(50) NOT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_name`, `file_url`, `file_size`, `created_at`) VALUES
(50, '9ovfXzj8yDP57MfYGAxr_simg_de2fe0_500x500_maxb.png', 'public/uploads/9ovfXzj8yDP57MfYGAxr_simg_de2fe0_500x500_maxb.png', 118224, '1581860527'),
(51, 'bZyJ04JjFlew7RR4qkWQ_simg_de2fe0_500x500_maxb.png', 'public/uploads/bZyJ04JjFlew7RR4qkWQ_simg_de2fe0_500x500_maxb.png', 34361, '1581860531'),
(52, 'IYnbBVXVwC7jwAOKYYWC_simg_de2fe0_500x500_maxb.png', 'public/uploads/IYnbBVXVwC7jwAOKYYWC_simg_de2fe0_500x500_maxb.png', 193177, '1581860534'),
(53, 'Oj9INnJwLoaBm82oSPmb_simg_de2fe0_500x500_maxb.png', 'public/uploads/Oj9INnJwLoaBm82oSPmb_simg_de2fe0_500x500_maxb.png', 240798, '1581860539'),
(54, 'xvVdNm91wQaejd8W2ds7_simg_de2fe0_500x500_maxb.png', 'public/uploads/xvVdNm91wQaejd8W2ds7_simg_de2fe0_500x500_maxb.png', 207527, '1581860542'),
(55, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581902264'),
(56, '3eb358ed14a4da2fedc9cbf9324d52fd.jpg', 'public/uploads/3eb358ed14a4da2fedc9cbf9324d52fd.jpg', 26854, '1581902456'),
(57, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581902625'),
(58, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581902938'),
(59, '3eb358ed14a4da2fedc9cbf9324d52fd.jpg', 'public/uploads/3eb358ed14a4da2fedc9cbf9324d52fd.jpg', 26854, '1581902994'),
(60, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581903093'),
(61, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581903208'),
(62, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581903221'),
(63, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581903242'),
(64, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581903301'),
(65, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581903319'),
(66, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581903401'),
(67, '820099d4be030e5168ebf37fb7242f32.jpg', 'public/uploads/820099d4be030e5168ebf37fb7242f32.jpg', 68861, '1581903700'),
(68, '2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 45639, '1581905579'),
(69, 'Jds3zYvLN14k0Vo0OPkF_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/Jds3zYvLN14k0Vo0OPkF_simg_de2fe0_500x500_maxb.jpg', 15294, '1581905588'),
(70, 'KlLGF41MaHyyHcfAoCd6_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/KlLGF41MaHyyHcfAoCd6_simg_de2fe0_500x500_maxb.jpg', 46670, '1581905592'),
(71, 'kYmNodywiYKGaMhe2JPd_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/kYmNodywiYKGaMhe2JPd_simg_de2fe0_500x500_maxb.jpg', 31552, '1581905596'),
(72, 'WzIAE0PYHQArnbA5oxeh_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/WzIAE0PYHQArnbA5oxeh_simg_de2fe0_500x500_maxb.jpg', 32646, '1581905599'),
(73, '2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 45639, '1581906111'),
(74, 'Jds3zYvLN14k0Vo0OPkF_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/Jds3zYvLN14k0Vo0OPkF_simg_de2fe0_500x500_maxb.jpg', 15294, '1581906114'),
(75, 'KlLGF41MaHyyHcfAoCd6_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/KlLGF41MaHyyHcfAoCd6_simg_de2fe0_500x500_maxb.jpg', 46670, '1581906118'),
(76, 'kYmNodywiYKGaMhe2JPd_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/kYmNodywiYKGaMhe2JPd_simg_de2fe0_500x500_maxb.jpg', 31552, '1581906122'),
(77, 'WzIAE0PYHQArnbA5oxeh_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/WzIAE0PYHQArnbA5oxeh_simg_de2fe0_500x500_maxb.jpg', 32646, '1581906125'),
(78, '2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 45639, '1581906201'),
(79, 'Jds3zYvLN14k0Vo0OPkF_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/Jds3zYvLN14k0Vo0OPkF_simg_de2fe0_500x500_maxb.jpg', 15294, '1581906204'),
(80, 'KlLGF41MaHyyHcfAoCd6_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/KlLGF41MaHyyHcfAoCd6_simg_de2fe0_500x500_maxb.jpg', 46670, '1581906207'),
(81, 'kYmNodywiYKGaMhe2JPd_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/kYmNodywiYKGaMhe2JPd_simg_de2fe0_500x500_maxb.jpg', 31552, '1581906211'),
(82, 'WzIAE0PYHQArnbA5oxeh_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/WzIAE0PYHQArnbA5oxeh_simg_de2fe0_500x500_maxb.jpg', 32646, '1581906214'),
(83, '35mQZm_simg_de2fe0_500x500_maxb.png', 'public/uploads/35mQZm_simg_de2fe0_500x500_maxb.png', 81775, '1581906322'),
(84, 'jx9zPO_simg_de2fe0_500x500_maxb.png', 'public/uploads/jx9zPO_simg_de2fe0_500x500_maxb.png', 57035, '1581906326'),
(85, 'KgeTEi_simg_de2fe0_500x500_maxb.png', 'public/uploads/KgeTEi_simg_de2fe0_500x500_maxb.png', 143355, '1581906329'),
(86, 'xGRCXh_simg_de2fe0_500x500_maxb.png', 'public/uploads/xGRCXh_simg_de2fe0_500x500_maxb.png', 95838, '1581906332'),
(87, 'xly2Am_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/xly2Am_simg_de2fe0_500x500_maxb.jpg', 36500, '1581906335'),
(88, 'Nas6p1_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/Nas6p1_simg_de2fe0_500x500_maxb.jpg', 53465, '1582340459'),
(89, 'N3Zzun_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/N3Zzun_simg_de2fe0_500x500_maxb.jpg', 35014, '1582340463'),
(90, 'xsNiRC_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/xsNiRC_simg_de2fe0_500x500_maxb.jpg', 27970, '1582340478'),
(91, 'JhERe3_simg_de2fe0_500x500_maxb.png', 'public/uploads/JhERe3_simg_de2fe0_500x500_maxb.png', 85082, '1582340483'),
(92, 'HZzDM1_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/HZzDM1_simg_de2fe0_500x500_maxb.jpg', 46932, '1582340961'),
(93, 'q1cg8M_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/q1cg8M_simg_de2fe0_500x500_maxb.jpg', 26879, '1582340968'),
(94, 'rKeNyN_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/rKeNyN_simg_de2fe0_500x500_maxb.jpg', 27634, '1582340971'),
(95, 'ADENOH_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/ADENOH_simg_de2fe0_500x500_maxb.jpg', 14780, '1582340976'),
(96, '6Mg02Q_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/6Mg02Q_simg_de2fe0_500x500_maxb.jpg', 14279, '1582340979'),
(97, 'XA3vRF_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/XA3vRF_simg_de2fe0_500x500_maxb.jpg', 40065, '1582341350'),
(98, 'IxuL7A_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/IxuL7A_simg_de2fe0_500x500_maxb.jpg', 51720, '1582341360'),
(99, 'dJC7Wp_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/dJC7Wp_simg_de2fe0_500x500_maxb.jpg', 26212, '1582341363'),
(100, 'SyuUul_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/SyuUul_simg_de2fe0_500x500_maxb.jpg', 24503, '1582341367'),
(101, 'Ad6Ld5_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/Ad6Ld5_simg_de2fe0_500x500_maxb.jpg', 14342, '1582341370'),
(102, 'ake6NU_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/ake6NU_simg_de2fe0_500x500_maxb.jpg', 13805, '1582341373'),
(103, 'hSWgleugD8E1GRUfoT6j_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/hSWgleugD8E1GRUfoT6j_simg_de2fe0_500x500_maxb.jpg', 25293, '1582341733'),
(104, 'lM8jTuhkSlnwuCSRImut_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/lM8jTuhkSlnwuCSRImut_simg_de2fe0_500x500_maxb.jpg', 26506, '1582341737'),
(105, 'mHJLl9GM9GGGZ7tLgL6a_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/mHJLl9GM9GGGZ7tLgL6a_simg_de2fe0_500x500_maxb.jpg', 27361, '1582341740'),
(106, 'YJgRMZaUBTYqKhX5WbnB_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/YJgRMZaUBTYqKhX5WbnB_simg_de2fe0_500x500_maxb.jpg', 17736, '1582341743'),
(107, 'Yv4SD5_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/Yv4SD5_simg_de2fe0_500x500_maxb.jpg', 28469, '1582341965'),
(108, 'VYcNFZ_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/VYcNFZ_simg_de2fe0_500x500_maxb.jpg', 42766, '1582341969'),
(109, 'QQzJ4D_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/QQzJ4D_simg_de2fe0_500x500_maxb.jpg', 39790, '1582341973'),
(110, 'Z8RMVQ_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/Z8RMVQ_simg_de2fe0_500x500_maxb.jpg', 34897, '1582341977'),
(111, 'UT3uex_simg_de2fe0_500x500_maxb.png', 'public/uploads/UT3uex_simg_de2fe0_500x500_maxb.png', 226627, '1582341980'),
(112, 'bFKvgM_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/bFKvgM_simg_de2fe0_500x500_maxb.jpg', 32415, '1582361696'),
(113, 'H8L3zL_simg_d0daf0_800x1200_max.jpg', 'public/uploads/H8L3zL_simg_d0daf0_800x1200_max.jpg', 52794, '1582361700'),
(114, 'O3E7zw_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/O3E7zw_simg_de2fe0_500x500_maxb.jpg', 27293, '1582361704'),
(115, 'accer.jpg', 'public/uploads/accer.jpg', 53616, '1582536784'),
(116, 'accer.jpg', 'public/uploads/accer.jpg', 53616, '1582537159'),
(117, 'xC8pRg_simg_de2fe0_500x500_maxb.png', 'public/uploads/xC8pRg_simg_de2fe0_500x500_maxb.png', 113801, '1582620476'),
(118, 'WjVl29_simg_de2fe0_500x500_maxb.png', 'public/uploads/WjVl29_simg_de2fe0_500x500_maxb.png', 89693, '1582620505'),
(119, 'yzcmFp_simg_de2fe0_500x500_maxb.png', 'public/uploads/yzcmFp_simg_de2fe0_500x500_maxb.png', 78408, '1582620511'),
(120, '6M1dGN_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/6M1dGN_simg_de2fe0_500x500_maxb.jpg', 39104, '1582620514'),
(121, '35mQZm_simg_de2fe0_500x500_maxb.png', 'public/uploads/35mQZm_simg_de2fe0_500x500_maxb.png', 81775, '1582705088'),
(122, 'jx9zPO_simg_de2fe0_500x500_maxb.png', 'public/uploads/jx9zPO_simg_de2fe0_500x500_maxb.png', 57035, '1582705093'),
(123, 'KgeTEi_simg_de2fe0_500x500_maxb.png', 'public/uploads/KgeTEi_simg_de2fe0_500x500_maxb.png', 143355, '1582705101'),
(124, 'xGRCXh_simg_de2fe0_500x500_maxb.png', 'public/uploads/xGRCXh_simg_de2fe0_500x500_maxb.png', 95838, '1582705105'),
(125, 'xly2Am_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/xly2Am_simg_de2fe0_500x500_maxb.jpg', 36500, '1582705110'),
(126, '35mQZm_simg_de2fe0_500x500_maxb.png', 'public/uploads/35mQZm_simg_de2fe0_500x500_maxb.png', 81775, '1582705502'),
(127, 'jx9zPO_simg_de2fe0_500x500_maxb.png', 'public/uploads/jx9zPO_simg_de2fe0_500x500_maxb.png', 57035, '1582705505'),
(128, 'KgeTEi_simg_de2fe0_500x500_maxb.png', 'public/uploads/KgeTEi_simg_de2fe0_500x500_maxb.png', 143355, '1582705508'),
(129, 'xGRCXh_simg_de2fe0_500x500_maxb.png', 'public/uploads/xGRCXh_simg_de2fe0_500x500_maxb.png', 95838, '1582705511'),
(130, 'xly2Am_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/xly2Am_simg_de2fe0_500x500_maxb.jpg', 36500, '1582705514'),
(131, '5rAnMd_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/5rAnMd_simg_de2fe0_500x500_maxb.jpg', 34174, '1582706022'),
(132, '9s9W4v_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/9s9W4v_simg_de2fe0_500x500_maxb.jpg', 16519, '1582706027'),
(133, 'Geli7l_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/Geli7l_simg_de2fe0_500x500_maxb.jpg', 20403, '1582706030'),
(134, 'k0EU6H_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/k0EU6H_simg_de2fe0_500x500_maxb.jpg', 34464, '1582706033'),
(135, 'vxXtBF_simg_de2fe0_500x500_maxb.jpg', 'public/uploads/vxXtBF_simg_de2fe0_500x500_maxb.jpg', 32617, '1582706038');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info_order`
--

CREATE TABLE `tbl_info_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_code` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ship_info` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `order_status` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `note` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_info_order`
--

INSERT INTO `tbl_info_order` (`id`, `order_id`, `order_code`, `address`, `ship_info`, `order_status`, `note`) VALUES
(10, 20, 'ISM00005', 'Đà Nẵng', 'payment-home', 'private', ''),
(14, 24, 'ISM00002', 'Đà Nẵng', 'payment-home', 'private', ''),
(15, 25, 'ISM000079', 'Hà Nội', 'direct-payment', 'private', ''),
(16, 26, 'ISM00008', 'Đà Nẵng', 'payment-home', 'private', ''),
(17, 27, 'ISM000011', 'Đà Nẵng', 'payment-home', 'private', ''),
(18, 28, 'ISM000075', 'Đà Nẵng', 'payment-home', 'private', ''),
(19, 29, 'ISM00003', 'Đà Nẵng', 'payment-home', 'private', ''),
(21, 31, 'ISM000042', 'Đà Nẵng', 'payment-home', 'private', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list_customer`
--

CREATE TABLE `tbl_list_customer` (
  `custom_id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `order_id` int(11) NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_list_customer`
--

INSERT INTO `tbl_list_customer` (`custom_id`, `fullname`, `phone_number`, `email`, `address`, `order_id`, `creation_time`) VALUES
(13, 'Võ Văn Hiệp', '0379015316', 'vanhiep2102@gmail.com', 'Đà Nẵng', 31, '1582976459');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list_order`
--

CREATE TABLE `tbl_list_order` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `order_number` int(11) NOT NULL,
  `total_price` int(50) NOT NULL,
  `status` enum('public','private','trash') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_list_order`
--

INSERT INTO `tbl_list_order` (`order_id`, `order_code`, `fullname`, `order_number`, `total_price`, `status`, `creation_time`) VALUES
(31, 'ISM000042', 'Võ Văn Hiệp', 4, 33535000, 'private', '1582976459');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE `tbl_media` (
  `media_id` int(11) NOT NULL,
  `file_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thumbnail_url` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creator` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`media_id`, `file_name`, `thumbnail_url`, `creator`, `creation_time`) VALUES
(1, 'media-1', 'public/uploads/media.jpg', 'vanhiep', '1581496991');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `static_path` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `page` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `product_cat` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `post_cat` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `parent_cat` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `menu_order` int(11) NOT NULL,
  `creator` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_name`, `static_path`, `page`, `product_cat`, `post_cat`, `parent_cat`, `menu_order`, `creator`, `creation_time`) VALUES
(3, 'Trang chủ', 'https://www.facebook.com', 'Trang chủ', 'Điện thoại', 'Kinh doanh', 'Điện thoại', 1, 'vanhiep', '1582162055'),
(4, 'Liên hệ', 'https://www.facebook.com', 'Liên hệ', '', '', '', 2, 'vanhiep', '1582247834'),
(5, 'blog', 'https://www.facebook.com', 'Blog', NULL, NULL, NULL, 3, 'vanhiep', '1581496991');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `page_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `page_desc` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thumbnail_url` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` enum('public','private','trash') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creator` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`page_id`, `title`, `slug`, `page_desc`, `thumbnail_url`, `status`, `creator`, `creation_time`) VALUES
(6, 'Vsmart Active 3 giảm một triệu đồng', 'vsmart-active-3-giam-mot-trieu-dong', '<p>Sau hơn một th&aacute;ng ra mắt, Active 3 giảm hơn 20% gi&aacute;, từ 4,5 triệu đồng xuống 3,5 triệu đồng.&nbsp;Cụ thể, phi&ecirc;n bản RAM 4 GB, bộ nhớ 64 GB c&oacute; gi&aacute; 3,49 triệu đồng (giảm từ 4,49 triệu đồng) trong khi bản RAM 6 GB, bộ nhớ 64 GB gi&aacute; mới l&agrave; 3,99 triệu đồng (gi&aacute; cũ l&agrave; 4,99 triệu đồng). Theo th&ocirc;ng tin từ một hệ thống b&aacute;n lẻ, mức gi&aacute; n&agrave;y thậm ch&iacute; c&oacute; thể giảm th&ecirc;m nếu người d&ugrave;ng kh&ocirc;ng lấy qu&agrave; tặng k&egrave;m, như tai nghe Bluetooth, thẻ nhớ.</p>\r\n\r\n<article>\r\n<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/page/vsmark.jpg\" style=\"width: 500px; height: 348px;\" /></p>\r\n\r\n<p>Sau khi giảm gi&aacute;, Active 3 tiếp tục l&agrave; smartphone c&oacute; camera &quot;th&ograve; thụt&quot; rẻ nhất thị trường v&agrave; cũng l&agrave; model ch&iacute;nh h&atilde;ng rẻ nhất ra mắt gần đ&acirc;y với RAM 4 GB v&agrave; bộ nhớ 64 GB. Với mức gi&aacute; tương tự, Redmi Note 8, Galaxy A20s c&oacute; RAM 3 GB, bộ nhớ 32 GB, nhỉnh hơn một ch&uacute;t l&agrave; Realme 5 với 3 GB/64 GB. Tuy nhi&ecirc;n, smartphone của Xiaomi, Realme đều chạy chip Snapdragon 665 thay v&igrave;&nbsp;MediaTek Helio P60.&nbsp;</p>\r\n\r\n<p>Active 3&nbsp;c&oacute; độ ph&acirc;n giải m&agrave;n h&igrave;nh Full HD+ kh&aacute; tốt so với tầm gi&aacute; l&agrave; 1. 920 x 2.340 pixel. M&aacute;y c&oacute; camera trước độ ph&acirc;n giải 16 megapixel, cụm 3 camera sau hỗ trợ AI với camera ch&iacute;nh độ ph&acirc;n giải tới 48 megapixel tương tự Vsmart Live. Hai camera c&ograve;n lại c&oacute; độ ph&acirc;n giải lần lượt l&agrave; 2 megapixel đo độ s&acirc;u trường ảnh v&agrave; 8 megapixel cho g&oacute;c rộng.</p>\r\n\r\n<p>Active 3 chạy hệ điều h&agrave;nh t&ugrave;y biến VOS 2.5 với giao diện gần với giao diện gốc của Android mới. M&aacute;y cũng c&agrave;i sẵn dịch vụ nhắn tin, gọi điện miễn ph&iacute; l&agrave; VMessage.&nbsp;</p>\r\n</article>\r\n', 'public/uploads/vsmark.jpg', 'private', 'vanhiep', '1582509022'),
(7, 'Galaxy Z Flip \'ch&aacute;y h&agrave;ng\' tại nhiều thị trường', 'galaxy-z-flip-chay-hang-tai-nhieu-thi-truong', '<p>MỸSmartphone gập mới nhất của Samsung sẽ c&oacute; th&ecirc;m đợt b&aacute;n h&agrave;ng trực tuyến mới do lượng người mua &quot;vượt mong đợi&quot;.&quot;Phản ứng của người ti&ecirc;u d&ugrave;ng đối với Galaxy Z Flip l&agrave; đ&aacute;ng kinh ngạc v&agrave; đ&atilde; vượt qu&aacute; mong đợi của ch&uacute;ng t&ocirc;i. Sản phẩm hiện được b&aacute;n trực tuyến v&agrave; một số lượng hạn chế tại c&aacute;c cửa h&agrave;ng, nhưng nhiều nơi đ&atilde; hết h&agrave;ng&quot;, Samsung Mỹ th&ocirc;ng b&aacute;o tr&ecirc;n blog. &quot;Ng&agrave;y 21/2 l&agrave; ng&agrave;y trọng đại với người h&acirc;m mộ smartphone Galaxy, bởi ch&uacute;ng t&ocirc;i sẽ mở đặt h&agrave;ng (preorder) Galaxy S20 v&agrave; cũng đồng thời mở b&aacute;n th&ecirc;m Galaxy Z Flip&quot;.</p>\r\n\r\n<article>\r\n<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/page/SS-Z-zip.jpg\" style=\"width: 500px; height: 341px;\" /></p>\r\n\r\n<p>Trước đ&oacute;, Galaxy Z Flip được Samsung th&ocirc;ng b&aacute;o &quot;ch&aacute;y h&agrave;ng&quot; tại nhiều thị trường, đồng thời nhận được sự quan t&acirc;m lớn tr&ecirc;n to&agrave;n cầu. Tuy nhi&ecirc;n, h&atilde;ng chưa từng c&ocirc;ng bố doanh số chi tiết của smartphone m&agrave;n h&igrave;nh gập dạng vỏ s&ograve; n&agrave;y.</p>\r\n\r\n<p>Tại Việt Nam, Galaxy Z Flip được giới thiệu ng&agrave;y 12/2 v&agrave; nhanh ch&oacute;ng được đặt hết chỉ sau 8 tiếng. H&atilde;ng phải&nbsp;<a href=\"https://vnexpress.net/so-hoa/samsung-galaxy-z-flip-mo-ban-dot-hai-4054457.html\" rel=\"dofollow\">mở b&aacute;n th&ecirc;m đợt thứ hai</a>&nbsp;h&ocirc;m 17/2 v&agrave; cũng hết h&agrave;ng sau đ&oacute;.</p>\r\n\r\n<p>Theo đại diện Samsung Việt Nam, do Việt Nam đ&atilde; c&oacute; hai lần cho ph&eacute;p kh&aacute;ch h&agrave;ng preorder v&agrave; đ&atilde; &quot;ch&aacute;y h&agrave;ng&quot; n&ecirc;n chưa c&oacute; th&ecirc;m đợt đặt h&agrave;ng mới.&nbsp;</p>\r\n\r\n<p>Galaxy Z Flip được b&aacute;n với gi&aacute; 36 triệu đồng cho hai phi&ecirc;n bản m&agrave;u đen v&agrave; t&iacute;m tại Việt Nam. M&aacute;y chạy hệ điều h&agrave;nh Android 10 tr&ecirc;n nền tảng chip Snapdragon 855+, RAM 8 GB, bộ nhớ trong 256 GB, pin 3.300 mAh c&oacute; sạc nhanh. Về khả năng chụp ảnh, smartphone gập n&agrave;y c&oacute; camera k&eacute;p c&ugrave;ng độ ph&acirc;n giải 12 megapixel, trong đ&oacute; một ống k&iacute;nh g&oacute;c rộng v&agrave; một ống ti&ecirc;u chuẩn. M&aacute;y ảnh trước độ ph&acirc;n giải 10 megapixel.</p>\r\n</article>\r\n', 'public/uploads/SS-Z-zip.jpg', 'private', 'vanhiep', '1582509052'),
(8, 'Tai nghe Bluetooth si&ecirc;u nhẹ, pin hơn một ng&agrave;y', 'tai-nghe-bluetooth-sieu-nhe-pin-hon-mot-ngay', '<p>Jays a Seven Wireless c&oacute; khung nh&ocirc;m ph&ugrave; hợp với người d&ugrave;ng th&iacute;ch di chuyển, pin thời gian chờ 35 tiếng.Sản phẩm c&oacute; bộ khung được l&agrave;m từ nh&ocirc;m với trọng lượng chỉ 59 gram, vừa gi&uacute;p cho việc di chuyển dễ d&agrave;ng, lại hạn chế được sự hao m&ograve;n, xước x&aacute;t suốt qu&aacute; tr&igrave;nh sử dụng h&agrave;ng ng&agrave;y. K&iacute;ch thước của Jays a Seven Wireless l&agrave; 5 x 21,5 x 21,5 cm. Phần đệm tai của sản phẩm được l&agrave;m từ cao su non c&oacute; độ linh hoạt cao, ph&ugrave; hợp với nhiều h&igrave;nh dạng tai kh&aacute;c nhau.</p>\r\n\r\n<article>\r\n<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/page/headphone.jpg\" style=\"width: 500px; height: 300px;\" /></p>\r\n\r\n<p>Jays a Seven Wireless được t&iacute;ch hợp microphone v&agrave; điều khiển từ xa, phục vụ cho việc thực hiện cuộc gọi qua c&aacute;c thiết bị di động. Tai nghe c&oacute; tần số đ&aacute;p ứng từ 20 Hz đến 20 kHz, trở kh&aacute;ng 60 Ohm. Mẫu tai nghe của h&atilde;ng Thuỵ Điển c&oacute; thời gian sử dụng li&ecirc;n tục l&ecirc;n tới 25 giờ, thời gian chờ l&agrave; 35 ng&agrave;y chỉ sau một lần sạc. Sản phẩm kết nối với thiết bị di động qua kết nối Bluetooth aptX, hỗ trợ c&aacute;c hệ điều h&agrave;nh Android, BlackBerry v&agrave; iOS.</p>\r\n\r\n<p>Trong b&agrave;i kiểm tra của trang&nbsp;<em>Head-fi</em>, Jas a Seven Wireless đem lại trải nghiệm tốt cả về &acirc;m thanh lẫn sự thoải m&aacute;i. Nguồn tin cho biết đối với gi&aacute; b&aacute;n ở mức trung b&igrave;nh, sản phẩm đem lại &acirc;m bass kh&aacute; tốt, kh&ocirc;ng bị x&acirc;m lấn sang dải trung. Phần khung v&agrave; đệm tai nghe cũng được đ&aacute;nh gi&aacute; l&agrave; &ecirc;m &aacute;i khi sử dụng.</p>\r\n\r\n<p>Jays a Seven Wireless được b&aacute;n tr&ecirc;n thị trường quốc tế với gi&aacute; khoảng 99 USD, bao gồm c&aacute;c m&agrave;u đen, x&aacute;m, xanh v&agrave; hồng. Model n&agrave;y được một số cửa h&agrave;ng Việt Nam rao với gi&aacute; khoảng 3,85 triệu đồng.</p>\r\n\r\n<p>Thương hiệu Jays được th&agrave;nh lập từ năm 2006 tại Thuỵ Điển, chuy&ecirc;n sản xuất tai nghe, loa v&agrave; phụ kiện di động. H&atilde;ng c&oacute; triết l&yacute; thiết kế tối giản v&agrave; c&acirc;n bằng giữa vẻ ngo&agrave;i cũng như chức năng.</p>\r\n</article>\r\n', 'public/uploads/headphone.jpg', 'private', 'vanhiep', '1582509067'),
(9, 'Giới thiệu về Shop ISMART', 'gioi-thieu-ve-shop-ismart', '<p><b>ISMART&nbsp;</b>l&agrave; s&agrave;n thương mại điện tử h&agrave;ng đầu Việt Nam, nơi Người B&aacute;n dễ d&agrave;ng lập t&agrave;i khoản để bắt đầu kinh doanh v&agrave; gia tăng doanh số tr&ecirc;n s&agrave;n thương mại điện tử Ismart.</p>\r\n\r\n<p><strong>T&agrave;i khoản Shop </strong><b>ISMART&nbsp;</b>được tạo ho&agrave;n to&agrave;n miễn ph&iacute; v&agrave; kh&ocirc;ng y&ecirc;u cầu giấy ph&eacute;p đăng k&yacute; kinh doanh. Shop c&oacute; thể sử dụng c&aacute;c dịch vụ g&oacute;i quảng c&aacute;o, tư vấn v&agrave; c&aacute;c g&oacute;i kh&aacute;c (c&oacute; t&iacute;nh ph&iacute;) để tối ưu doanh số v&agrave; hiệu quả hiển thị.</p>\r\n\r\n<p>Shop Ismart được chia th&agrave;nh 3 nh&oacute;m, bao gồm:&nbsp;<em>Shop Thường, Shop T&iacute;ch Cực v&agrave; Shop Uy T&iacute;n</em>. Shop Thường l&agrave; nh&oacute;m Shop vừa gia nhập Sendo. Sau khoảng thời gian hoạt động nhất định, Shop Thường sẽ được x&eacute;t duyệt dựa tr&ecirc;n c&aacute;c ti&ecirc;u ch&iacute; hoạt động Sendo đề ra để nhận danh hiệu Shop T&iacute;ch Cực v&agrave; Shop Uy T&iacute;n.</p>\r\n\r\n<p>Khi trở th&agrave;nh Shop Uy T&iacute;n, Shop sẽ được nhận hỗ trợ đặc biệt từ Sendo bao gồm:</p>\r\n\r\n<p>➕ Ưu ti&ecirc;n hiển thị tr&ecirc;n trang Sendo v&agrave; c&oacute; khu vực hiển thị ri&ecirc;ng.</p>\r\n\r\n<p>➕ Hỗ trợ mức gi&aacute; ưu đ&atilde;i khi sử dụng c&aacute;c g&oacute;i dịch vụ quảng c&aacute;o.</p>\r\n\r\n<p>➕ Chứng nhận hiển thị &ldquo;Shop Uy T&iacute;n&rdquo; sau khi đạt đủ y&ecirc;u cầu n&acirc;ng hạng.</p>\r\n\r\n<p>➕ Tham gia sự kiện th&uacute;c đẩy b&aacute;n h&agrave;ng tr&ecirc;n Sendo, dựa tr&ecirc;n quy định của mỗi sự kiện ở từng thời điểm</p>\r\n\r\n<p>Trung t&acirc;m mua sắm trực tuyến Ismart.vn được x&acirc;y dựng theo m&ocirc; h&igrave;nh <strong>B2C2C</strong> (business - to - consumer - to - consumer). Th&ocirc;ng qua gian h&agrave;ng mở tại Ismart.vn, doanh nghiệp c&oacute; thể cung cấp sản phẩm/dịch vụ tốt nhất tới người ti&ecirc;u d&ugrave;ng. Ismart.vn cung cấp nhiều h&igrave;nh thức dịch vụ hỗ trợ như: quảng c&aacute;o qua b&agrave;i viết PR, banner, eclick, chụp h&igrave;nh sản phẩm&hellip; , v&agrave; chủ động tư vấn c&aacute;c phương thức nhằm th&uacute;c đẩy hiệu quả kinh doanh cho doanh nghiệp.</p>\r\n\r\n<p>Mục ti&ecirc;u của Ismart.vn l&agrave; tạo ra một trung t&acirc;m mua sắm uy t&iacute;n số 1 về giao dịch tại Việt Nam.</p>\r\n\r\n<p>Để thực hiện mục ti&ecirc;u tr&ecirc;n, Ismart.vn chủ động đứng ra cung cấp c&aacute;c dịch vụ vận chuyển Sengo v&agrave; thanh to&aacute;n Senpay. Th&ocirc;ng qua việc hợp t&aacute;c với c&aacute;c c&ocirc;ng ty chuyển ph&aacute;t h&agrave;ng đầu Việt Nam, Sengo đang dần thiết lập được mạng lưới chuyển ph&aacute;t trải rộng tr&ecirc;n khắp 64 tỉnh th&agrave;nh, thuận tiện cho người sử dụng. B&ecirc;n cạnh đ&oacute; kh&aacute;ch h&agrave;ng c&oacute; nhiều lựa chọn trong việc thanh to&aacute;n c&aacute;c giao dịch tr&ecirc;n Ismart.vn: thanh to&aacute;n qua hệ thống Senpay (thanh to&aacute;n qua thẻ t&iacute;n dụng, thẻ ATM, hoặc chuyển khoản) hoặc lựa chọn h&igrave;nh thức thanh to&aacute;n COD (giao tiền trực tiếp khi nhận được h&agrave;ng).</p>\r\n\r\n<p><strong>Người mua v&agrave; người b&aacute;n sẽ được bảo vệ tuyệt đối trong mọi giao dịch tr&ecirc;n Ismart.vn khi họ:</strong></p>\r\n\r\n<p>1. Tu&acirc;n thủ c&aacute;c quy định của Ismart.vn</p>\r\n\r\n<p>2. Sử dụng dịch vụ thanh to&aacute;n v&agrave; vận chuyển của Ismart.vn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>SỨ MỆNH CỦA ISMART</strong></p>\r\n\r\n<p>&nbsp;Sự lớn mạnh của c&ocirc;ng nghệ internet đem lại nhu cầu về thương mại điện tử v&ocirc; c&ugrave;ng lớn đ&atilde; tạo ra Ebay của Mỹ, Rakuten của Nhật, G-market của H&agrave;n Quốc&hellip; Ismart.vn ra đời tại Việt Nam với mục ti&ecirc;u tạo ra một trung t&acirc;m mua sắm đầu ti&ecirc;n cam kết đảm bảo về độ tin cậy trong c&aacute;c giao dịch diễn ra tại Ismart.vn.</p>\r\n\r\n<p>Sứ mệnh của Ismart.vn l&agrave; x&acirc;y dựng một cộng đồng mua b&aacute;n trực tuyến chuy&ecirc;n nghiệp, th&acirc;n thiện, tiện &iacute;ch v&agrave; bảo vệ người d&ugrave;ng.</p>\r\n\r\n<p>Ismart.vn lu&ocirc;n giữ vững phương ch&acirc;m hoạt động lấy người d&ugrave;ng l&agrave;m trung t&acirc;m v&agrave; thực hiện tốt nhất vai tr&ograve; cầu nối của m&igrave;nh: &quot;Gi&uacute;p người b&aacute;n hiểu r&otilde; người mua cần g&igrave; - Gi&uacute;p người mua biết r&otilde; người b&aacute;n l&agrave; ai&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'public', 'vanhiep', '1582512419'),
(10, 'CHĂM S&Oacute;C KH&Aacute;CH H&Agrave;NG', 'cham-soc-khach-hang', '<p>Để nhanh ch&oacute;ng t&igrave;m được giải ph&aacute;p cho những thắc mắc của qu&yacute; kh&aacute;ch:<br />\r\nVui l&ograve;ng gọi 1900 1001</p>\r\n\r\n<p>KIỂM TRA T&Igrave;NH TRẠNG ĐƠN H&Agrave;NG<br />\r\nVui l&ograve;ng đăng nhập t&agrave;i khoản đ&atilde; đặt h&agrave;ng của qu&yacute; kh&aacute;ch<br />\r\nv&agrave; v&agrave;o mục&nbsp;<b>&quot;Theo d&otilde;i đơn h&agrave;ng&quot;</b></p>\r\n\r\n<p>KIỂM TRA T&Igrave;NH TRẠNG KIỂM DUYỆT,<br />\r\nBẢN QUYỀN SẢN PHẨM<br />\r\nVui l&ograve;ng email <strong>h</strong><b><strong>iep</strong>.unitiop@gmail.com</b></p>\r\n\r\n<p>LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I<br />\r\nVui l&ograve;ng gọi 0987.654.321<br />\r\nEmail <b>lienhe.ismark@gmail.com</b></p>\r\n\r\n<p>C&Ocirc;NG TY CỔ PHẦN C&Ocirc;NG NGHỆ ISMART<br />\r\n<b>Trụ sở:&nbsp;</b>153 Nguyễn Đ&igrave;nh Chiểu, Phường 06, Quận 03, Tp.Hồ Ch&iacute; Minh<br />\r\n<b>Địa chỉ li&ecirc;n hệ:&nbsp;</b>T&ograve;a nh&agrave; FPT T&acirc;n Thuận, L&ocirc; 29B-31B-33B, Đường T&acirc;n Thuận, KCX T&acirc;n Thuận, Phường T&acirc;n Thuận Đ&ocirc;ng, Quận 7, Tp.HCM.</p>\r\n\r\n<p><b>Ch&uacute;ng t&ocirc;i tr&acirc;n trọng &yacute; kiến của qu&yacute; kh&aacute;ch.</b></p>\r\n', '', 'public', 'vanhiep', '1582527990');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `post_desc` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thumbnail_url` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `parent_cat` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` enum('public','private','trash') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creator` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `title`, `slug`, `post_desc`, `thumbnail_url`, `parent_cat`, `status`, `creator`, `creation_time`) VALUES
(5, 'Số người chết v&igrave; virus corona tăng l&ecirc;n 722 người, vượt đại dịch SARS', 'so-nguoi-chet-vi-virus-corona-tang-len-722-nguoi-vuot-dai-dich-sars', '<p><em>Reuters</em>&nbsp;dẫn th&ocirc;ng tin từ Ủy ban Y tế Quốc gia Trung Quốc h&ocirc;m nay cho biết, trong v&ograve;ng 24 giờ qua, nước n&agrave;y đ&atilde; c&oacute;&nbsp;<strong>th&ecirc;m 86 ca tử vong</strong>&nbsp;v&igrave; nCoV, n&acirc;ng tổng số người chết v&igrave; virus n&agrave;y tại Trung Quốc đại lục l&ecirc;n 722 người v&agrave; tập trung ở t&acirc;m dịch Hồ Bắc.</p>\r\n\r\n<p>Với con số n&agrave;y, số ca tử vong do nCoV ở Trung Quốc đại lục đ&atilde; vượt số người tử vong ở Trung Quốc đại lục v&agrave; Hong Kong v&igrave; SARS v&agrave;o năm 2002-2003 (gần 650 người).</p>\r\n\r\n<p>Như vậy, t&iacute;nh đến s&aacute;ng nay 8/2, thế giới c&oacute; tổng cộng 724 người chết v&igrave; nCoV, trong đ&oacute; chỉ c&oacute; 2 trường hợp b&ecirc;n ngo&agrave;i Trung Quốc đại lục l&agrave; đặc khu Hong Kong v&agrave; Philippines.</p>\r\n\r\n<p>Cũng trong ng&agrave;y h&ocirc;m qua, Trung Quốc ghi nhận th&ecirc;m 3.399 ca nhiễm mới, n&acirc;ng tổng số người nhiễm bệnh l&ecirc;n 34.546 người. Đến nay c&oacute; gần 1.600 người đ&atilde; được điều trị khỏi c&aacute;c triệu chứng do nCoV g&acirc;y ra.</p>\r\n\r\n<p>Giới chức Trung Quốc với sự phối hợp của quốc tế đang ra sức dập dịch khi dịch bệnh n&agrave;y hiện đ&atilde; lan ra &iacute;t nhất 24 quốc gia. Chủ tịch Trung Quốc Tập Cận B&igrave;nh nhiều lần khẳng định tin tưởng rằng, Trung Quốc c&oacute; thể ngăn chặn được dịch nCoV.</p>\r\n\r\n<p>Trong một diễn biến li&ecirc;n quan kh&aacute;c, đại diện của Tổ chức Y tế thế giới (WHO), b&agrave; Maria Van Kerkhove n&oacute;i dữ liệu ph&acirc;n t&iacute;ch ban đầu đối với 17.000 trường hợp nhiễm nCoV ở Trung Quốc cho thấy, 82% c&aacute;c ca n&agrave;y được coi l&agrave; nhẹ, 15% coi l&agrave; nặng v&agrave; 3% c&oacute; c&aacute;c triệu chứng nghi&ecirc;m trọng. B&agrave; Maria n&oacute;i, theo số liệu do giới chức Trung Quốc cung cấp, chỉ 2% hoặc chưa đầy 2% số ca nhiễm dẫn đến tử vong. Một đại diện kh&aacute;c của WHO cũng cho biết, những bệnh nh&acirc;n cao tuổi c&oacute; nguy cơ tử vong cao hơn.</p>\r\n', 'public/uploads/trung-quoc-n-cov-1581118467765.jpg', 'Xã hội', 'private', 'vanhiep', '1581325031'),
(12, 'Một c&ocirc;ng d&acirc;n Mỹ chết ở Vũ H&aacute;n v&igrave; virus corona', 'mot-cong-dan-my-chet-o-vu-han-vi-virus-corona', '<p>Reuters dẫn lời một người ph&aacute;t ng&ocirc;n của Đại sứ qu&aacute;n Mỹ tại Bắc Kinh h&ocirc;m nay cho biết: &ldquo;Ch&uacute;ng t&ocirc;i c&oacute; thể x&aacute;c nhận một c&ocirc;ng d&acirc;n Mỹ 60 tuổi được chẩn đo&aacute;n nhiễm virus corona đ&atilde; qua đời tại bệnh viện Jinyintang, Vũ H&aacute;n, Trung Quốc h&ocirc;m 6/2. Ch&uacute;ng t&ocirc;i xin gửi lời chia buồn s&acirc;u sắc nhất đến gia đ&igrave;nh bệnh nh&acirc;n v&igrave; sự mất m&aacute;t n&agrave;y&rdquo;.</p>\r\n\r\n<p>Nguồn tin của b&aacute;o New York Times cho biết, c&ocirc;ng d&acirc;n Mỹ n&agrave;y l&agrave; một người phụ nữ lớn tuổi v&agrave; vốn c&oacute; sẵn c&aacute;c vấn đề về sức khỏe. Đ&acirc;y c&oacute; thể coi l&agrave; người nước ngo&agrave;i đầu ti&ecirc;n tử vong do dịch vi&ecirc;m phổi virus corona mới (nCoV) đầu ti&ecirc;n ở Trung Quốc.</p>\r\n\r\n<p>Người ph&aacute;t ng&ocirc;n Bộ Ngoại giao Trung Quốc Hoa Xu&acirc;n O&aacute;nh h&ocirc;m 6/2 cho biết, c&oacute; 19 người nước ngo&agrave;i nhiễm nCoV tại Trung Quốc, trong đ&oacute; 2 người đ&atilde; được xuất viện.</p>\r\n\r\n<p><strong>C&ocirc;ng d&acirc;n Nhật Bản tử vong nghi do nhiễm virus corona</strong></p>\r\n\r\n<p>B&aacute;o Japan Times cho biết, h&ocirc;m 8/2, Bộ Ngoại giao Nhật Bản dẫn th&ocirc;ng tin từ giới chức y tế Trung Quốc n&oacute;i rằng, một nam c&ocirc;ng d&acirc;n Nhật Bản khoảng ngo&agrave;i 60 tuổi c&oacute; thể đ&atilde; nhiễm nCoV v&agrave; đ&atilde; qua đời trong l&uacute;c nhập viện tại Vũ H&aacute;n. Nếu nguy&ecirc;n nh&acirc;n tử vong được x&aacute;c nhận, th&igrave; người đ&agrave;n &ocirc;ng n&agrave;y c&oacute; thể l&agrave; c&ocirc;ng d&acirc;n Nhật Bản đầu ti&ecirc;n chết do nCoV. Tuy nhi&ecirc;n, một quan Bộ Ngoại giao Nhật Bản cho biết, ch&iacute;nh phủ nước n&agrave;y chưa nhận được th&ocirc;ng tin n&agrave;o về c&ocirc;ng d&acirc;n Nhật Bản tử vong do nCoV.</p>\r\n\r\n<p>Những th&ocirc;ng tin tr&ecirc;n được đưa ra trong bối cảnh, th&ecirc;m 3 h&agrave;nh kh&aacute;ch tr&ecirc;n du thuyền Diamond Princess đang c&aacute;ch ly ngo&agrave;i khơi cảng Yokahama đ&atilde; dương t&iacute;nh với nCoV, n&acirc;ng tổng số h&agrave;nh kh&aacute;ch nhiễm virus n&agrave;y tr&ecirc;n t&agrave;u l&ecirc;n 64 người. Gần 4.000 h&agrave;nh kh&aacute;ch tr&ecirc;n con t&agrave;u tiếp tục bị c&aacute;ch ly trong thời gian giới chức y tế Nhật Bản ho&agrave;n tất x&eacute;t nghiệm v&agrave; đ&aacute;p ứng y&ecirc;u cầu c&aacute;ch ly tối thiểu 14 ng&agrave;y. Đến nay, t&agrave;u Diamond Princess l&agrave; nơi ghi nhận nhiều ca nhiễm nCoV nhất b&ecirc;n ngo&agrave;i Trung Quốc.</p>\r\n\r\n<p>Kể từ khi b&ugrave;ng ph&aacute;t v&agrave;o cuối năm 2019, dịch vi&ecirc;m phổi do nCoV đ&atilde; lấy đi sinh mạng của 722 người tại Trung Quốc, khiến hơn 34.000 người nhiễm bệnh. Con số n&agrave;y được dự b&aacute;o c&oacute; thể tăng tiếp khi dịch bệnh tiếp tục diễn biến phức tạp.</p>\r\n', 'public/uploads/trung-quoc-ncov-2-1581143760556 - Copy.jpg', 'Xã hội', 'private', 'vanhiep', '1581156492'),
(13, 'CSGT H&agrave; Nội tiếp tục kiểm tra nồng độ cồn qua ống thổi d&ugrave;ng một lần', 'csgt-ha-noi-tiep-tuc-kiem-tra-nong-do-con-qua-ong-thoi-dung-mot-lan', '<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/images/thoi-nong-do-con-1-1581322976937.jpg\" style=\"width: 640px; height: 427px;\" /></p>\r\n\r\n<p>Chiều nay (10/2), tổ c&ocirc;ng t&aacute;c thuộc Đội CSGT số 3, C&ocirc;ng an TP H&agrave; Nội đ&atilde; lập chốt kiểm tra nồng độ cồn tại ng&atilde; tư đường Huỳnh Th&uacute;c Kh&aacute;ng &ndash; L&aacute;ng Hạ (H&agrave; Nội).</p>\r\n\r\n<p>Trước khi tiến h&agrave;nh xử l&yacute; c&aacute;c vi phạm, CBCS tổ c&ocirc;ng t&aacute;c đeo khẩu trang y tế, sử dụng nước s&aacute;t khuẩn sau đ&oacute; đeo găng tay cao su</p>\r\n\r\n<p>Trước đ&oacute;, ng&agrave;y 4/2, Bộ Y tế đ&atilde; c&oacute; văn bản khẳng định việc kiểm tra nồng độ cồn trong kh&iacute; thở đối với người tham gia giao th&ocirc;ng c&oacute; nguy cơ l&acirc;y nhiễm c&aacute;c bệnh l&acirc;y truyền qua đường h&ocirc; hấp tương tự như đối với c&aacute;c hoạt động, c&ocirc;ng việc giao tiếp th&ocirc;ng thường kh&aacute;c của người d&acirc;n. Đến nay tr&ecirc;n thế giới v&agrave; tại Việt Nam chưa c&oacute; bằng chứng cho thấy sự kh&aacute;c biệt về nguy cơ l&acirc;y nhiễm của c&aacute;c loại h&igrave;nh giao tiếp n&ecirc;u tr&ecirc;n. Việc tu&acirc;n thủ c&aacute;c biện ph&aacute;p ph&ograve;ng ngừa như d&ugrave;ng ri&ecirc;ng ống thổi cho từng người, s&aacute;t khuẩn thiết bị đo, lực lượng l&agrave;m nhiệm vụ tu&acirc;n thủ đ&uacute;ng quy tr&igrave;nh thao t&aacute;c v&agrave; người d&acirc;n tu&acirc;n thủ hướng dẫn của cảnh s&aacute;t giao th&ocirc;ng th&igrave; sẽ giảm thiểu nguy cơ l&acirc;y nhiễm, Bộ Y tế khuyến c&aacute;o.</p>\r\n', 'public/uploads/thoi-nong-do-con-1-1581322976937.jpg', 'Xã hội', 'private', 'vanhiep', '1581331185'),
(14, 'Gần 100.000 lượt truy cập hệ thống học trực tuyến của ĐH Mở H&agrave; Nội v&igrave; nCoV', 'gan-100000-luot-truy-cap-he-thong-hoc-truc-tuyen-cua-dh-mo-ha-noi-vi-n-co-v', '<p>&nbsp;S&aacute;ng nay ng&agrave;y 10/02,&nbsp; thứ trưởng Bộ GD&amp;ĐT Nguyễn Văn Ph&uacute;c đ&atilde; tới Trường Đại học Mở H&agrave; Nội kiểm tra, chỉ đạo về c&ocirc;ng t&aacute;c ph&ograve;ng, chống dịch vi&ecirc;m đường h&ocirc; hấp cấp do virus corona (nCoV).<img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/images/screen-shot-20200210-at-25459-pm-1581322637722.png\" style=\"width: 640px; height: 442px;\" /></p>\r\n\r\n<p>Tại buổi l&agrave;m việc, TS.Trương Tiến T&ugrave;ng, Hiệu trưởng nh&agrave; trường đ&atilde; b&aacute;o c&aacute;o c&ocirc;ng t&aacute;c ph&ograve;ng, chống dịch vi&ecirc;m đường h&ocirc; hấp cấp do virus corona (nCoV).</p>\r\n\r\n<p>Cụ thể, thực hiện chỉ đạo của Bộ GD&amp;ĐT về c&aacute;c biện ph&aacute;p ph&ograve;ng tr&aacute;nh dịch bệnh virus corona, nh&agrave; trường đ&atilde; cử 12 c&aacute;n bộ, giảng vi&ecirc;n phụ tr&aacute;ch c&ocirc;ng t&aacute;c y tế học đường tham gia tập huấn c&ocirc;ng t&aacute;c ph&ograve;ng, chống dịch do Sở y tế H&agrave; Nội v&agrave; Phường B&aacute;ch Khoa tổ chức.</p>\r\n\r\n<p>Sau tập huấn, c&aacute;c c&aacute;n bộ tham gia đều c&oacute; b&aacute;o c&aacute;o t&igrave;nh h&igrave;nh với Ban Chỉ đạo, đồng thời tiếp tục triển khai tập huấn trực tiếp tới c&aacute;n bộ, giảng vi&ecirc;n tại c&aacute;c đơn vị. C&ugrave;ng với đ&oacute;, Trường khẩn trương x&acirc;y dựng kh&oacute;a học trực tuyến về ph&ograve;ng chống dịch nCoV.</p>\r\n\r\n<p>T&iacute;nh đến thời điểm ng&agrave;y 09/2, đ&atilde; c&oacute; hơn 60.000 lượt truy cập v&agrave;o kh&oacute;a học, tr&ecirc;n 95% tổng số sinh vi&ecirc;n của Trường đăng k&yacute; tham gia kh&oacute;a học.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'public/uploads/screen-shot-20200210-at-21543-pm-1581322638327.png', 'Giáo dục', 'private', 'vanhiep', '1581331376'),
(16, 'Một đại học của Việt Nam v&agrave;o tốp 10 đại học nghi&ecirc;n cứu h&agrave;ng đầu ASEAN', 'mot-dai-hoc-cua-viet-nam-vao-top-10-dai-hoc-nghien-cuu-hang-dau-asean', '<p>Theo cơ sở dữ liệu Web of Science hay WoS (Clarivate, Mỹ), năm 2019 (t&iacute;nh đến 31/12/2019) c&aacute;c nước ASEAN đ&atilde; c&ocirc;ng bố tổng cộng 63.445 c&ocirc;ng tr&igrave;nh tr&ecirc;n c&aacute;c tạp ch&iacute; ISI.</p>\r\n\r\n<p>Đứng đầu tốp 10 n&agrave;y vẫn l&agrave; 2 đại học của Singapore, trong đ&oacute;, Đại học quốc gia Singapore đứng số 1, rồi đến Đại học kỹ thuật Nanyang (<em>lưu &yacute; rằng c&oacute; hai t&ecirc;n đơn vị trong WoS li&ecirc;n quan đến đại học n&agrave;y nhưng thật ra chỉ l&agrave; một đại học).<img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/images/screen-shot-20200216-at-21337-pm-1581837310388.png\" style=\"width: 640px; height: 368px;\" /></em></p>\r\n\r\n<p>4 trường đại học tiếp theo gồm: Đại học Malaya, đại học Putra Malaysia, đại học Kebangsaan Malaysia, đại học Sains Malaysia.</p>\r\n\r\n<p>Trong nh&oacute;m 10 đại học dẫn đầu n&agrave;y c&oacute; một đại diện duy nhất của Việt Nam l&agrave; Đại học T&ocirc;n Đức Thắng (TDTU), xếp thứ&nbsp;<strong>7/10</strong>. Kế tiếp đến 2 đại học h&agrave;ng đầu của Th&aacute;i Lan (đại học Mahidol v&agrave;&nbsp; đại học Chulalongkorn). Đứng vị tr&iacute; thứ 10 l&agrave; một đại học của Malaysia, đại học kỹ thuật Malaysia.</p>\r\n\r\n<p>Như vậy, tổng cộng Singapore c&oacute; 2 đại học, Malaysia c&oacute; 5, Việt Nam c&oacute; 1 v&agrave; Th&aacute;i Lan c&oacute; 2 đại học trong TOP 10 n&agrave;y.</p>\r\n\r\n<p>Malaysia đ&atilde; c&oacute; số lượng &aacute;p đảo trong TOP 10 ASEAN về c&aacute;c đại học nghi&ecirc;n cứu mạnh (chiếm đến 50%).&nbsp; Tuy nhi&ecirc;n, tổng số c&ocirc;ng tr&igrave;nh tr&ecirc;n tạp ch&iacute; ISI của 5 đại học tr&ecirc;n trong năm 2019 lại l&agrave;&nbsp;<strong>11.684,</strong>&nbsp;&iacute;t hơn tổng c&ocirc;ng tr&igrave;nh c&ocirc;ng bố của 2 đại học Singapore (tổng c&ocirc;ng bố của 2 đại học Singapore l&agrave;&nbsp;<strong>12.995</strong>&nbsp;c&ocirc;ng tr&igrave;nh).</p>\r\n\r\n<p>Điều đ&oacute; chứng tỏ, c&aacute;c đại học của Singapore đ&atilde; đạt đẳng cấp rất cao trong khu vực v&agrave; cả tr&ecirc;n thế giới.</p>\r\n\r\n<p>Việt Nam c&oacute; một đại diện duy nhất l&agrave; đại học T&ocirc;n Đức Thắng (TDTU) trong TOP 10. Đ&acirc;y l&agrave; niềm tự h&agrave;o cho cả hệ thống gi&aacute;o dục đại học Việt Nam.</p>\r\n\r\n<p>Trong thời gian gần đ&acirc;y,&nbsp; đặc biệt trong năm 2019, TDTU đ&atilde; x&aacute;c lập được vị tr&iacute;&nbsp; đẳng cấp khoa học trong khu vực v&agrave; tr&ecirc;n thế giới.</p>\r\n\r\n<p>Trong giai đoạn 2016-2018, TDTU đ&atilde; được xếp v&agrave;o nh&oacute;m 25 c&aacute;c cơ sở nghi&ecirc;n cứu h&agrave;ng đầu khu vực ASEAN. Đồng thời, được xếp hạng 960 trong tổng số c&aacute;c đại học tốt nhất thế giới theo URAP v&agrave;&nbsp; lọt TOP 1000 đại học tốt nhất thế giới; tốp 200 c&aacute;c đại học tốt nhất thế giới về ph&aacute;t triển bền vững theo THE năm 2019...</p>\r\n', 'public/uploads/screen-shot-20200216-at-21337-pm-1581837310388.png', 'Giáo dục', 'private', 'vanhiep', '1581862143'),
(17, '&ldquo;Tuyệt chi&ecirc;u&rdquo; khuyến kh&iacute;ch người d&acirc;n chống dịch Covid-19 ở Trung Quốc', '-tuyet-chieu-khuyen-khich-nguoi-dan-chong-dich-covid-19-o-trung-quoc', '<p>Kể từ khi b&ugrave;ng ph&aacute;t dịch bệnh Covid-19, đặc biệt l&agrave; sau khi phong tỏa Vũ H&aacute;n đến nay, Trung Quốc đ&atilde; thực thi h&agrave;ng loạt c&aacute;c biện ph&aacute;p nghi&ecirc;m ngặt v&agrave; mạnh tay đối với những trường hợp &quot;bất tu&acirc;n thượng lệnh&quot;. Nhưng cũng đ&atilde; c&oacute; nhiều địa phương kết hợp giữa &quot;thưởng&quot; v&agrave; &quot;phạt&quot; để khuyến kh&iacute;ch người d&acirc;n thực hiện c&aacute;c biện ph&aacute;p &quot;đặc biệt&quot; trong thời điểm &quot;đặc biệt&quot;.</p>\r\n\r\n<p>Ở Trung Quốc, chơi mạt chược l&agrave; h&igrave;nh thức giải tr&iacute; hết sức phổ biến, đặc biệt trong những ng&agrave;y nghỉ. Tuy nhi&ecirc;n, v&igrave; l&yacute; do dịch bệnh kh&ocirc;ng được ph&eacute;p tụ tập đ&ocirc;ng người, nhiều nơi đ&atilde; ra lệnh cấm. Tr&ecirc;n thực tế, một số địa phương ở Trung Quốc đ&atilde; xảy ra hiện tượng l&acirc;y nhiễm tập thể do tụ tập chơi mạt chược. Nhưng cấm l&agrave; một chuyện, nhiều người ở nh&agrave; m&atilde;i cũng ch&aacute;n v&agrave; họ rủ nhau chơi &quot;chui&quot;.</p>\r\n\r\n<p>Mới đ&acirc;y, cảnh s&aacute;t th&agrave;nh phố Ho&agrave;ng Thạch, tỉnh Hồ Bắc, nơi được coi l&agrave; chiến trường ch&iacute;nh trong cuộc chiến chống dịch ở Trung Quốc, đ&atilde; nghĩ ra một &quot;tuyệt chi&ecirc;u&quot; để hạn chế t&igrave;nh trạng n&agrave;y.</p>\r\n', '', 'Thế giới', 'private', 'vanhiep', '1581864654');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_cat`
--

CREATE TABLE `tbl_post_cat` (
  `cat_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `status` enum('public','private','trash') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creator` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_post_cat`
--

INSERT INTO `tbl_post_cat` (`cat_id`, `title`, `parent_id`, `level`, `status`, `creator`, `creation_time`) VALUES
(1, 'Thể thao', 0, 0, 'trash', 'vanhiep', '1581664169'),
(2, 'X&atilde; hội', 0, 0, 'private', 'vanhiep', '1581581377'),
(3, 'Giáo dục', 0, 0, 'private', 'vanhiep', '1581498379'),
(4, 'Thể thao trong nước', 1, 1, 'trash', 'vanhiep', '1581663550'),
(5, 'Thể thao quốc tế', 1, 1, 'trash', 'vanhiep', '1581663836'),
(6, 'Chính trị', 2, 1, 'trash', 'vanhiep', '1581498584'),
(7, 'Môi trường', 2, 1, 'private', 'vanhiep', '1581498602'),
(10, 'Tin tuyển sinh', 3, 1, 'private', 'vanhiep', '1581862212'),
(12, 'khuyến học', 3, 1, 'private', 'vanhiep', '1581862704'),
(15, 'Bóng đá trong nước', 1, 1, 'private', 'vanhiep', '1581910875');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_code` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thumbnail_url` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(15) NOT NULL,
  `short_desc` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `detail` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` enum('public','private','trash') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creator` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `popular` enum('0','1') COLLATE utf8mb4_vietnamese_ci DEFAULT '0',
  `best_selling` enum('0','1') COLLATE utf8mb4_vietnamese_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_code`, `thumbnail_url`, `price`, `short_desc`, `detail`, `parent_id`, `status`, `creator`, `creation_time`, `popular`, `best_selling`) VALUES
(2, 'Samsung Galaxy A51', '#ISM-2', 'public/uploads/2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 6990000, 'Máy có thiết kế mỏng nhẹ thuộc hàng top trong phân khúc, chỉ 7.9 mm. Mặt lưng với họa tiết cắt kim cương đa sắc nổi bật, đi kèm là 3 tùy chọn màu sắc sành điệu: Xanh Crush Đa Sắc, Trắng Crush Lấp Lánh', '<p><em><strong>Samsung Galaxy A51 6GB|128GB &ndash; H&agrave;ng ch&iacute;nh h&atilde;ng</strong></em></p>\r\n\r\n<ul>\r\n	<li>Trong hộp c&oacute;:&nbsp;Sạc,Tai nghe,S&aacute;ch hướng dẫn,Hộp,C&acirc;y lấy sim,Ốp lưng,C&aacute;p</li>\r\n	<li>Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng.</li>\r\n	<li>Lỗi l&agrave; đổi mới trong 1 th&aacute;ng</li>\r\n	<li><a href=\"https://www.sendo.vn/shop/di-dong-ngai-nguyet\">https://www.sendo.vn/shop/di-dong-ngai-nguyet</a></li>\r\n</ul>\r\n\r\n<p><strong>Th&ocirc;ng số kỹ thuật</strong></p>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh:&nbsp;Super AMOLED, 6.5&quot;,&nbsp;Full HD+</li>\r\n	<li>Hệ điều h&agrave;nh:&nbsp;Android 10</li>\r\n	<li>Camera sau:&nbsp;Ch&iacute;nh 48 MP &amp; Phụ 12 MP, 5 MP, 5 MP</li>\r\n	<li>Camera trước:&nbsp;32 MP</li>\r\n	<li>CPU:&nbsp;Exynos 9611 8 nh&acirc;n</li>\r\n	<li>RAM:&nbsp;6 GB</li>\r\n	<li>Bộ nhớ trong:&nbsp;128 GB</li>\r\n	<li>Thẻ nhớ:&nbsp;MicroSD, hỗ trợ tối đa 512 GB</li>\r\n	<li>Thẻ SIM:&nbsp;2 Nano SIM,&nbsp;Hỗ trợ 4G</li>\r\n</ul>\r\n\r\n<p>---------Pin:&nbsp; 4000 mAh, c&oacute; sạc nhanh</p>\r\n', 2, 'public', 'vanhiep', '1582622634', '1', '0'),
(3, 'OPPO Reno 10x Zoom 256GB', '#ISM-3', 'public/uploads/35mQZm_simg_de2fe0_500x500_maxb.png', 16990000, 'OPPO Reno 10x Zoom là một sản phẩm đỉnh cao vừa được ra mắt, không chỉ sở hữu cấu hình khủng, màn hình siêu tràn viền. Thiết bị này còn được trang bị thêm cụm 3 camera với khả năng zoom 10x hiếm có. K', '<ul>\r\n	<li><strong>Kết nối mạng:</strong>&nbsp;3G, 4G.</li>\r\n	<li><strong>Bộ nhớ trong:</strong>&nbsp;256BG.</li>\r\n	<li><strong>RAM:</strong>&nbsp;8Gb.</li>\r\n	<li><strong>H&atilde;ng sản xuất:</strong>&nbsp;OPPO.</li>\r\n	<li><strong>Số SIM:</strong>&nbsp;2 SIM.</li>\r\n	<li><strong>Bảo h&agrave;nh:</strong>&nbsp;24 th&aacute;ng.</li>\r\n	<li><strong>Loại cổng sạc:</strong>&nbsp;USB Type-C.</li>\r\n	<li><strong>T&iacute;nh năng nổi trội:</strong>&nbsp;Pin khủng (&gt;3000 mAh), Chuy&ecirc;n selfie, Cảm biến v&acirc;n tay, M&agrave;n h&igrave;nh tr&agrave;n viền.</li>\r\n	<li><strong>Nơi bảo h&agrave;nh:</strong>&nbsp;Bảo h&agrave;nh ch&iacute;nh h&atilde;ng.</li>\r\n	<li><strong>Phương thức bảo h&agrave;nh:</strong>&nbsp;Bằng phiếu bảo h&agrave;nh.</li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh:</strong>&nbsp;6.1 inch - 7.0 inch.</li>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;H&agrave;ng ch&iacute;nh h&atilde;ng.</li>\r\n	<li><strong>Chip xử l&yacute;:</strong>&nbsp;Qualcomm.</li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh:</strong>&nbsp;1080 x 2340 (FHD+).</li>\r\n	<li><strong>Bluetooth:</strong>&nbsp;C&oacute;.</li>\r\n	<li><strong>Hỗ trợ thẻ nhớ tối đa:</strong>&nbsp;Kh&ocirc;ng.</li>\r\n	<li><strong>K&iacute;ch thước:</strong>&nbsp;162.0 x 77.2 x 9.3 mm.</li>\r\n	<li><strong>Jack (Input &amp; Output):</strong>&nbsp;USB Type-C.</li>\r\n	<li><strong>Chip đồ họa (GPU):</strong>&nbsp;Adreno 640.</li>\r\n	<li><strong>Chipset:</strong>&nbsp;SnapdragonTM 855 8 nh&acirc;n, tối đa 2.8GHz.</li>\r\n	<li><strong>Camera sau:</strong>&nbsp;48MP + 8MP + 13MP, ba camera.</li>\r\n	<li><strong>Thẻ nhớ ngo&agrave;i:</strong>&nbsp;Khe Sim l&agrave;m khe thẻ nhớ.</li>\r\n	<li><strong>Chuẩn m&agrave;n h&igrave;nh:</strong>&nbsp;Corning&reg; Gorilla&reg; Glass 6.</li>\r\n	<li><strong>Camera trước:</strong>&nbsp;16 MP.</li>\r\n	<li><strong>CPU:</strong>&nbsp;1 nh&acirc;n 2.84 GHz, 3 nh&acirc;n 2.42 GHz &amp; 4 nh&acirc;n 1.8 GHz.</li>\r\n	<li><strong>Loại SIM:</strong>&nbsp;Nano.</li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;4065mAh (Typ).</li>\r\n	<li><strong>Hệ điều h&agrave;nh:</strong>&nbsp;ColorOS 6, nền tảng Android 9.0.</li>\r\n	<li><strong>Cảm biến:</strong>&nbsp;Cảm biến tiệm cận, Cảm biến &aacute;nh s&aacute;ng, Cảm biến gia tốc kế, La b&agrave;n số.</li>\r\n	<li><strong>Chất liệu:</strong>&nbsp;Nhựa.</li>\r\n	<li><strong>C&ocirc;ng nghệ m&agrave;n h&igrave;nh:</strong>&nbsp;AMOLED.</li>\r\n	<li><strong>Wifi:</strong>&nbsp;Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi Direct, Wi-Fi hotspot.</li>\r\n	<li><strong>Trọng lượng:</strong>&nbsp;Khoảng 215g (Bao gồm pin).</li>\r\n	<li><strong>Khả năng chống nước:</strong>&nbsp;Kh&ocirc;ng.</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/PrHkJI_simg_d0daf0_800x1200_max.jpg\" style=\"width: 800px; height: 450px;\" /></p>\r\n', 2, 'public', 'vanhiep', '1582705516', '0', '1'),
(4, 'Laptop Acer Swift 3', '#ISM-4', 'public/uploads/5rAnMd_simg_de2fe0_500x500_maxb.jpg', 24990000, '- Hiệu suất tản nhiệt tối ưu- Giảm tiếng ồn khi chơi game- Ổn định khi vận hành', '<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/22.jpg\" style=\"width: 975px; height: 975px;\" />l&agrave; chiếc laptop mỏng nhẹ với viền m&agrave;n h&igrave;nh si&ecirc;u mỏng, thiết kế kiểu d&aacute;ng tr&ocirc;ng sang trọng v&agrave; qu&yacute; ph&aacute;i c&ugrave;ng cấu h&igrave;nh kh&aacute; tốt, c&oacute; thể gi&uacute;p bạn l&agrave;m việc mượt m&agrave;, tr&ocirc;i chảy suốt ng&agrave;y d&agrave;i.</p>\r\n\r\n<p><strong>Thiết kế vỏ nh&ocirc;m nguy&ecirc;n khối</strong></p>\r\n\r\n<p>Tương tự thiết kế như người tiền nhiệm,Acer Swift 3 SF314-56G-78QS</p>\r\n\r\n<p>Trọng lượng của m&aacute;y cũng kh&aacute; nhẹ, khoảng 1.5 kg, th&iacute;ch hợp cho những bạn trẻ năng động, hay di chuyển hay ph&ugrave; hợp với những người l&agrave;m văn ph&ograve;ng, cần một chiếc m&aacute;y mỏng, nhẹ, đẹp.</p>\r\n\r\n<p>Điểm nhấn trong thiết kế củaAcer Swift 3 SF314-56G-78QS</p>\r\n', 25, 'public', 'vanhiep', '1582706048', '1', '0'),
(5, 'Laptop Hp Pavilion Gaming', '#ISM-5', 'public/uploads/Nas6p1_simg_de2fe0_500x500_maxb.jpg', 21550000, 'Laptop HP Pavilion Gaming 15-dk0000TX (7HR10PA) cải thiện khả năng chơi game mạnh mẽ với card đồ họa GeForce GTX 1650 và bộ xử lý Intel® Core đa nhân thế hệ mới nhất, hỗ trợ bởi bộ nhớ RAM DDR4-2666 (', '<p>BẢO H&Agrave;NH 12 th&aacute;ng BH điện tử ch&iacute;nh h&atilde;ng to&agrave;n quốc</p>\r\n\r\n<p>CPU Intel Core i5-9300H 2.4GHz up to 4.1GHz 8MB<br />\r\nRAM 8GB DDR4 2666MHz (2 KHE CẮM , HỔ TRỢ TỐI ĐA 32GB)<br />\r\nSSD 256GB<br />\r\nLCD 15.6 INCH FULL HD IPS 1920x1080<br />\r\nVGA NVIDIA GeForce GTX 1650 4GB GDDR5 + Intel UHD Graphics 630<br />\r\nHỆ ĐIỀU H&Agrave;NH WIN 10 64 BIT HOME BẢN QUYỀN<br />\r\nS&ocirc;́ c&ocirc;̉ng lưu trữ t&ocirc;́i đa 1 x M.2 NVMe<br />\r\nKiểu khe M.2 hỗ trợ M.2 NVMe<br />\r\nC&ocirc;̉ng xu&acirc;́t hình 1 x HDMI<br />\r\nCổng kết nối 1 x USB Type C / DisplayPort / Power Delivery , 3 x USB 3.1 , 1 x SD card slot , LAN 1 Gb/s<br />\r\nK&ecirc;́t n&ocirc;́i kh&ocirc;ng d&acirc;y WiFi 802.11ac , Bluetooth 5.0<br />\r\nBàn phím thường , có phím s&ocirc;́ , LED<br />\r\nH&ecirc;̣ đi&ecirc;̀u hành Windows 10 Home 64-bit<br />\r\nKích thước 36 x 25.6 x 2.34 cm<br />\r\nPin 3 cell 52 Wh , Pin liền<br />\r\nKh&ocirc;́i lượng 2.2 kg<br />\r\nĐ&egrave;n LED tr&ecirc;n m&aacute;y LED<br />\r\nPhụ kiện đi k&egrave;m : Sạc , Nguồn</p>\r\n\r\n<p>Hiệu năng xử l&yacute; mạnh mẽ<img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/Nas6p1_simg_de2fe0_500x500_maxb.jpg\" style=\"width: 500px; height: 500px;\" /></p>\r\n', 25, 'public', 'vanhiep', '1582622660', '1', '0'),
(6, 'Laptop HP ProBook 450', '6FH07PA', 'public/uploads/HZzDM1_simg_de2fe0_500x500_maxb.jpg', 22650000, 'Overview Laptop HP ProBook 450 G6-6FH07PA\r\nBạn là doanh nhân và đang kiếm cho mình một mẫu laptop để trợ giúp cho đặc thù công việc của mình thì bạn phải chọn một chiếc laptop phải bền bỉ, thiết kế ma', '<h3 dir=\"ltr\"><strong>Tổng quan thiết kế</strong></h3>\r\n\r\n<p dir=\"ltr\"><strong><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/ADENOH_simg_de2fe0_500x500_maxb.jpg\" style=\"width: 500px; height: 500px;\" /></strong></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Với thiết kế cứng&nbsp;c&aacute;p, bảo mật dễ v&agrave; nhiều t&iacute;nh năng được n&acirc;ng cấp,&nbsp;HP&nbsp;Probook 450 G6 ph&ugrave; hợp với m&ocirc;i trường doanh nghiệp. L&agrave; một đại diện thuộc series ProBook 400 to&agrave;n diện,&nbsp;HP&nbsp;ProBook 450 G6 được biết đến như một sản phẩm&nbsp;laptop&nbsp;c&acirc;n bằng giữa hiệu suất giải tr&iacute; di động v&agrave; l&agrave;m việc. Ngo&agrave;i ra, ProBook 450 G6 c&ograve;n được t&uacute;t lại vẻ bề ngo&agrave;i tạo cảm gi&aacute;c h&agrave;i h&ograve;a hơn c&aacute;c mẫu ProBook 450 G5 kh&aacute;c tr&ecirc;n thị trường .</p>\r\n\r\n<p dir=\"ltr\">Laptop&nbsp;HP&nbsp;450 G6-6FG97PA thừa hưởng nguy&ecirc;n vẹn dung mạo đặc trưng của d&ograve;ng Probook. Vỏ trong m&aacute;y trong sử dụng chất liệu nh&ocirc;m xước phần n&agrave;o mạnh mẽ hơn, c&ugrave;ng t&ocirc;ng m&agrave;u tối với cả&nbsp;m&agrave;n h&igrave;nh&nbsp;v&agrave;&nbsp;b&agrave;n ph&iacute;m.</p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/q1cg8M_simg_de2fe0_500x500_maxb.jpg\" style=\"width: 500px; height: 500px;\" /></p>\r\n\r\n<p dir=\"ltr\">Sản phẩm n&agrave;y kh&ocirc;ng c&ograve;n những g&oacute;c bo tr&ograve;n mềm mại như trước, thay v&agrave;o đ&oacute;&nbsp;HP&nbsp;đ&atilde; mượn ng&ocirc;n ngữ thiết kế g&oacute;c cạnh từ d&ograve;ng Elitebook để trang bị cho Probook 450 G6 mới.&nbsp;Đặc biệt, một n&acirc;ng cấp đ&aacute;ng gi&aacute; của mẫu Probook 450 G6 l&agrave; giờ đ&acirc;y m&aacute;y đ&atilde; chuyển sang sử dụng vỏ nh&ocirc;m nguy&ecirc;n khối, vừa tạo vẻ đẹp sang trọng v&agrave; cao cấp cho m&aacute;y vừa cho cảm gi&aacute;c cầm m&aacute;y tr&ecirc;n tay tương đối m&aacute;t mẻ v&agrave; thoải m&aacute;i.</p>\r\n\r\n<p dir=\"ltr\">Laptop&nbsp;HP&nbsp;450 G6-6FG97PA hướng đến người d&ugrave;ng cần hiệu suất, độ tin cậy cao n&ecirc;n kh&ocirc;ng thể s&aacute;nh c&ugrave;ng mẫu EliteBook x&eacute;t về t&iacute;nh di động. Tuy nhi&ecirc;n so với sản phẩm c&ugrave;ng k&iacute;ch cỡ&nbsp;m&agrave;n h&igrave;nh&nbsp;của những h&atilde;ng kh&aacute;c th&igrave; mẫu&nbsp;laptop&nbsp;HP&nbsp;kh&ocirc;ng hề k&eacute;m cạnh với số đo cụ thể 36.5 x 25.7 x 1.9cm, nặng 1,9 kg.</p>\r\n\r\n<p dir=\"ltr\">Đ&aacute;ng ch&uacute; &yacute; l&agrave; thiết kế sản phẩm c&ograve;n đạt ti&ecirc;u chuẩn độ bền qu&acirc;n đội Mỹ MIL STD-810G khi vượt qua một loạt b&agrave;i thử nghiệm về chất lượng linh kiện v&agrave; độ bền.&nbsp;B&agrave;n ph&iacute;m&nbsp;c&oacute; khả năng chống nước nhờ lớp phim trong suốt b&ecirc;n dưới, giảm thiểu nguy cơ tổn hại đến linh kiện phần cứng b&ecirc;n dưới. Như vậy, bạn sẽ y&ecirc;n t&acirc;m hơn khi l&agrave;m việc trong m&ocirc;i trường ẩm ướt, bụi bẩn hoặc nhiệt độ cao.</p>\r\n\r\n<p dir=\"ltr\">Đặc biệt cơ chế bảo mật của&nbsp;HP&nbsp;450 G6-6FG97PA cũng được ch&uacute; trọng hơn khi&nbsp;HP&nbsp;cung cấp sẵn bộ Client Security Suite Gen3, ph&ugrave; hợp với doanh nghiệp nhỏ kh&ocirc;ng c&oacute; bộ phận IT chuy&ecirc;n biệt. B&ecirc;n cạnh cơ chế định danh người d&ugrave;ng tr&ecirc;n v&acirc;n tay SimplePass Fingerprint, ProBook 450 c&ograve;n được trang bị c&ocirc;ng nghệ SureStart nhằm bảo vệ v&agrave; phục hồi BIOS về trạng th&aacute;i ban đầu trong trường hợp bị tấn c&ocirc;ng.</p>\r\n\r\n<h3 dir=\"ltr\">&nbsp;</h3>\r\n', 25, 'public', 'vanhiep', '1582622672', '0', '1'),
(7, 'Laptop Lenovo ThinkPad', '20N8S0CJ00', 'public/uploads/XA3vRF_simg_de2fe0_500x500_maxb.jpg', 14850000, 'Hiệu năng tối ưu\r\nLenovo ThinkPad E490 20N8S0CJ00 được trang bị bộ xử lý Intel® Quad Core mới nhất, bộ nhớ RAM lên đến 32GB và khe lưu trữ hỗ trợ cả công nghệ Intel Optane, điều đó có nghĩa là khi bạn', '<p>BẢO H&Agrave;NH 12 th&aacute;ng BH điện tử ch&iacute;nh h&atilde;ng to&agrave;n quốc</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CPU&nbsp;Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nh&acirc;n, 8 lu&ocirc;̀ng )</p>\r\n\r\n<p>RAM&nbsp;1 x 4GB DDR4 2400MHz (2 KHE CẮM , HỔ TRỢ TỐI ĐA 32GB)</p>\r\n\r\n<p>HDD&nbsp;1TB 5400rpm (1 KHE M.2 NVMe)</p>\r\n\r\n<p>LCD&nbsp;14 INCH HD IPS 1366X768</p>\r\n\r\n<p>VGA&nbsp;Intel UHD Graphics 620</p>\r\n\r\n<p>HỆ ĐIỀU H&Agrave;NH&nbsp;DOS</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/q1cg8M_simg_de2fe0_500x500_maxb(1).jpg\" style=\"width: 500px; height: 500px;\" /></p>\r\n\r\n<h2><strong>Bảo mật doanh nghiệp</strong></h2>\r\n\r\n<p>C&aacute;c t&iacute;nh năng bảo mật t&ugrave;y chọn của&nbsp;<strong>Lenovo&nbsp;ThinkPad E490</strong>&nbsp;gi&uacute;p&nbsp;m&aacute;y t&iacute;nh&nbsp;của bạn lu&ocirc;n được kiểm so&aacute;t chặt chẽ. Tr&igrave;nh đọc dấu v&acirc;n tay th&ecirc;m x&aacute;c thực sinh trắc học an to&agrave;n, trong nền tảng bảo mật TPM (Trusted Platform Module) m&atilde; h&oacute;a dữ liệu ở cấp phần cứng bằng c&aacute;c c&ocirc;ng cụ m&atilde; h&oacute;a dữ liệu. Bạn c&oacute; thể an t&acirc;m về việc bảo mật cho doanh nghiệp của bạn.</p>\r\n\r\n<h2><strong>Độ bền được chứng nhận</strong></h2>\r\n\r\n<p><strong>Lenovo&nbsp;ThinkPad E490</strong>&nbsp;được kiểm tra chất lượng dựa tr&ecirc;n ti&ecirc;u chuẩn c&ocirc;ng nghiệp để đảm bảo độ tin cậy.&nbsp;C&aacute;c&nbsp;m&aacute;y t&iacute;nh&nbsp;ThinkPad E Series của&nbsp;Lenovo&nbsp;trải qua một loạt c&aacute;c thử nghiệm như độ bền v&ograve;ng đời bản lề, kiểm tra quạt để kiểm tra nhiệt, độ rung v&agrave; kiểm tra sốc để xử l&yacute; v&agrave; vận chuyển h&agrave;ng ng&agrave;y. V&agrave; thậm ch&iacute; kiểm tra&nbsp;b&agrave;n ph&iacute;m&nbsp;để x&aacute;c minh độ chắc chắn v&agrave; tuổi thọ của ph&iacute;m v&agrave; c&aacute;c th&agrave;nh phần.</p>\r\n\r\n<h2><strong>Thiết kế hiện đại</strong></h2>\r\n\r\n<p>Khi bạn di chuyển cho c&ocirc;ng việc,&nbsp;<strong>Lenovo&nbsp;ThinkPad E490</strong>&nbsp;đủ nhẹ để nằm gọn dưới c&aacute;nh tay của bạn trong khi đi đến c&aacute;c cuộc họp hoặc buổi hẹn với kh&aacute;ch h&agrave;ng của bạn. Với chất liệu chủ đạo bằng nhựa cứng c&aacute;p đem lại sự bền bỉ v&agrave; gi&uacute;p giảm thiểu gi&aacute; th&agrave;nh. Bạn c&oacute; thể chọn phi&ecirc;n bản kim loại c&oacute; thiết kế mỏng v&agrave; gi&aacute; th&agrave;nh cao hơn, nhưng d&ugrave; với chất liệu n&agrave;o th&igrave; vẫn c&oacute; hai m&agrave;u sắc chủ đạo để thể hiện phong c&aacute;ch của bạn: Bạc b&oacute;ng mượt hoặc Đen cổ điển.</p>\r\n\r\n<h2><strong>C&ocirc;ng nghệ sạc&nbsp;pin&nbsp;nhanh</strong></h2>\r\n\r\n<p><strong>Lenovo&nbsp;ThinkPad E490</strong>&nbsp;gi&uacute;p tăng năng suất c&ocirc;ng việc của bạn với thời lượng&nbsp;pin&nbsp;l&ecirc;n đến 13 giờ sử dụng. Hơn nữa, khi bạn cần cắm sạc, c&ocirc;ng nghệ Rapid Charge sạc nhanh đến 80% dung lượng&nbsp;pin&nbsp;chỉ trong một giờ. V&igrave; vậy, thời gian nghỉ trưa 60 ph&uacute;t l&agrave; qu&aacute; đủ để c&oacute; thể dễ d&agrave;ng tăng cường&nbsp;pin&nbsp;của bạn trong hơn một ng&agrave;y l&agrave;m việc.</p>\r\n', 25, 'public', 'vanhiep', '1582622682', '1', '0'),
(8, 'Apple IPhone 11 Pro Max 64GB', '11Promax', 'public/uploads/hSWgleugD8E1GRUfoT6j_simg_de2fe0_500x500_maxb.jpg', 28590000, '1. Thiết kế đẳng cấp tuyệt vời\r\n2. Camera góc rộng cùng chế độ Night Mode\r\n3. Công nghệ màn hình mới\r\n4. Chip Apple A13 Bionic cực kỳ mạnh mẽ\r\n5. Pin được cải thiện một cách đáng kể\r\n6. Sạc nhanh đi k', '<p>1. Thiết kế đẳng cấp tuyệt vời<br />\r\n&nbsp;</p>\r\n\r\n<p>Được ra mắt v&agrave;o ng&agrave;y 11 th&aacute;ng 9 vừa qua thực sự d&ograve;ng iPhone 11 Pro đ&atilde; khiến cho kh&aacute;ch h&agrave;ng th&iacute;ch th&uacute; v&ocirc; c&ugrave;ng. Bởi v&igrave; mặc d&ugrave; ở mặt trước ng&ocirc;n ngữ thiết kế kh&ocirc;ng c&oacute; nhiều sự thay đổi nhưng ở mặt sau m&aacute;y ch&iacute;nh l&agrave; &ldquo;cả trời t&acirc;m huyết&rdquo; m&agrave; Apple đ&atilde; mang đến cho ch&uacute;ng ta.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cụ thể logo Apple được đặt với vị tr&iacute; ch&iacute;nh giữa mặt sau của m&aacute;y. V&agrave; mặt lưng ch&iacute;nh l&agrave; tấm k&iacute;nh nh&aacute;m chứ kh&ocirc;ng phải l&agrave; b&oacute;ng như người tiền nhiệm. Tấm k&iacute;nh n&agrave;y đảm bảo độ chắc chắn bền bỉ hơn rất nhiều để ch&uacute;ng ta an t&acirc;m sử dụng m&agrave; kh&ocirc;ng lo về sự trầy xước.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/hSWgleugD8E1GRUfoT6j_simg_de2fe0_500x500_maxb.jpg\" style=\"width: 500px; height: 500px;\" /></p>\r\n\r\n<p>Hơn nữa cụm camera cũng đ&atilde; thay đổi với cụm vu&ocirc;ng nằm ở ph&iacute;a tr&ecirc;n b&ecirc;n phải của m&aacute;y tạo n&ecirc;n điểm nhấn đặc biệt. Với m&agrave;u sắc th&igrave; d&ograve;ng iPhone 11 Pro cũng đ&atilde; được Apple cung cấp với 4 t&ugrave;y chọn đ&oacute; l&agrave; Space Gray, Silver, Gold v&agrave; đặc biệt l&agrave; m&agrave;u Midnight Green &ndash; Xanh r&ecirc;u tạo đẳng cấp sang trọng v&agrave; đặc biệt v&ocirc; c&ugrave;ng.</p>\r\n\r\n<p>2. Camera g&oacute;c rộng c&ugrave;ng chế độ Night Mode<br />\r\n&nbsp;</p>\r\n\r\n<p>Tiếp đến n&oacute;i về sự thay đổi của iPhone 11 Pro x&aacute;ch tay th&igrave; camera g&oacute;c rộng ch&iacute;nh l&agrave; bổ sung đ&aacute;ng để quan t&acirc;m. Bởi v&igrave; trước kia cả Apple v&agrave; c&aacute;c h&atilde;ng điện thoại kh&aacute;c hầu như chỉ trang bị camera thường c&ugrave;ng với camera tele cho c&aacute;c chiếc smartphone camera k&eacute;p m&agrave; th&ocirc;i. Chỉ c&oacute; LG v&agrave; Samsung mới đưa g&oacute;c rộng v&agrave;o cho n&oacute;.</p>\r\n\r\n<p>Nhưng lần n&agrave;y Apple cũng đ&atilde; đi theo hướng n&agrave;y nhờ ống k&iacute;nh g&oacute;c rộng sẽ gi&uacute;p cho người d&ugrave;ng c&oacute; thể thoải m&aacute;i chụp được h&igrave;nh ảnh trọn vẹn hơn. Đặc biệt n&oacute; cũng sẽ tạo n&ecirc;n c&aacute;c hiệu ứng ấn tượng bởi hiệu ứng con v&agrave; trường nh&igrave;n rộng d&ugrave; cho bạn chụp người, chụp cảnh hoặc l&agrave; chụp cuộc sống đời thường.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&ograve;n với chế độ Night Mode th&igrave; đ&acirc;y ch&iacute;nh l&agrave; chế độ chụp thiếu s&aacute;ng n&oacute; được Apple đưa v&agrave;o ở iPhone 11 Pro mang đến một ưu điểm tuyệt vời. Nhờ được t&iacute;ch hợp cảm biến mới c&ugrave;ng với thuật to&aacute;n n&ecirc;n gi&uacute;p cho ảnh chụp ban đ&ecirc;m trở n&ecirc;n s&aacute;ng l&ecirc;n đặc biệt hơn nếu so với b&igrave;nh thường. Cũng ch&iacute;nh v&igrave; vậy n&ecirc;n loạt ảnh được chụp từ Night Shot được Apple cho ra đời thực sự l&agrave;m ch&uacute;ng ta cảm thấy h&agrave;i l&ograve;ng v&ocirc; c&ugrave;ng.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3. C&ocirc;ng nghệ m&agrave;n h&igrave;nh mới<br />\r\n&nbsp;</p>\r\n\r\n<p>Tiếp đến th&igrave; điểm nổi bật được đ&ocirc;ng đảo chuy&ecirc;n gia c&ugrave;ng t&iacute;n đồ đ&aacute;nh gi&aacute; kh&aacute; cao về iPhone 11 Pro gi&aacute; rẻ đ&oacute; l&agrave; n&oacute; sở hữu m&agrave;n h&igrave;nh c&ocirc;ng nghệ mới. V&agrave; Apple nhận định rằng đ&acirc;y ch&iacute;nh l&agrave; m&agrave;n h&igrave;nh s&aacute;ng v&agrave; đẹp nhất m&agrave; họ từng trang bị cho chiếc iPhone của m&igrave;nh. Nhờ Apple trang bị c&ocirc;ng nghệ h&igrave;nh ảnh XDR từ m&agrave;n h&igrave;nh Apple Pro Display XDR l&ecirc;n tr&ecirc;n iPhone 11 gi&uacute;p tăng cường dải tương phản động v&agrave; m&agrave;u sắc cũng thật hơn tr&ocirc;ng thấy.</p>\r\n\r\n<p>N&oacute; c&ograve;n tạo n&ecirc;n sự kh&aacute;c biệt giữa v&ugrave;ng m&agrave;u s&aacute;ng v&agrave; v&ugrave;ng m&agrave;u tối một c&aacute;ch r&otilde; rệt. M&agrave;n h&igrave;nh của iPhone 11 Pro c&ograve;n c&oacute; thể tăng được độ s&aacute;ng đạt đến 800 nit khi ch&uacute;ng ta d&ugrave;ng ngo&agrave;i đường khi rời nắng to m&agrave; kh&ocirc;ng lo bị ch&oacute;i. Hoặc cũng c&oacute; thể tăng độ s&aacute;ng đạt đến 1200 nit. M&agrave;n h&igrave;nh mới n&agrave;y được Apple gọi với c&aacute;i t&ecirc;n l&agrave; Super Retina XDR.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>4. Chip Apple A13 Bionic cực kỳ mạnh mẽ<br />\r\n&nbsp;</p>\r\n\r\n<p>Tiếp đến th&igrave; d&ograve;ng iPhone 11 Pro được Apple sử dụng con chip Apple A13 Bionic cực kỳ mạnh mẽ. V&agrave; con chip n&agrave;y được sản xuất dựa tr&ecirc;n d&acirc;y chuyền 7nm với thế hệ thứ 2. Cơ bản n&oacute; kh&ocirc;ng c&oacute; thay đổi về mặt cấu h&igrave;nh nhiều so với con chip cũ bởi n&oacute; vẫn tồn tại với CPU, GPU v&agrave; cả một bộ phận l&agrave; Neural Engine với chức năng xử l&yacute; t&aacute;c vị tr&iacute; tuệ nh&acirc;n tạo.</p>\r\n\r\n<p>Nhưng ở đ&acirc;y Apple đ&atilde; thay đổi đ&oacute; l&agrave; tầng b&aacute;n dẫn, h&atilde;ng đ&atilde; tăng số b&oacute;ng dẫn đạt đến 8.5 tỉ b&oacute;ng v&agrave; n&oacute; nhiều nhất từ trước cho đến nay trong c&aacute;c chip của d&ograve;ng A. Nghĩa l&agrave; ở đ&acirc;y hiệu năng của CPU v&agrave; GPU đều được tăng cao l&ecirc;n rất nhiều. Apple so s&aacute;nh rằng con chip A13 Bionic n&agrave;y mạnh hơn đ&aacute;ng kể so với con chip Adroid đến từ Huawei hoặc Samsung.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5. Pin được cải thiện một c&aacute;ch đ&aacute;ng kể<br />\r\n&nbsp;</p>\r\n\r\n<p>Với ưu điểm tối ưu chip v&agrave; tăng cường c&aacute;c v&ugrave;ng điện thế tr&ecirc;n chip để bật ở khu vực n&agrave;o được sử dụng v&agrave; tối ưu th&ecirc;m cả m&agrave;n h&igrave;nh. Ch&iacute;nh v&igrave; vậy d&ograve;ng Apple iPhone 11 Pro thực sự c&oacute; th&ecirc;m đến 4 tiếng pin d&ugrave;ng so với d&ograve;ng iPhone Xs cũ.</p>\r\n\r\n<p>6. Sạc nhanh đi k&egrave;m với điện thoại<br />\r\n&nbsp;</p>\r\n\r\n<p>Kể từ khi d&ograve;ng iPhone được ra đời từ năm 2007 th&igrave; lần n&agrave;y Apple đ&atilde; n&acirc;ng cấp cục sạc pin đi k&egrave;m b&ecirc;n trong hộp iPhone 11 Pro với cục sạc nhanh 18W được b&aacute;n k&egrave;m. Cục sạc n&agrave;y d&ugrave;ng cổng USB-C n&ecirc;n người d&ugrave;ng sẽ được Apple trang bị lu&ocirc;n sợi d&acirc;y USB-C Lightning ở trong hộp.</p>\r\n', 2, 'public', 'vanhiep', '1582622694', '0', '1'),
(9, 'IPHONE 6S PLUS ', '6S-PLUS', 'public/uploads/Yv4SD5_simg_de2fe0_500x500_maxb.jpg', 3995000, 'Apple iPhone 6s Plus là chiếc iPhone màn hình lớn nhất, cho bạn làm được nhiều việc hơn trên không gian rộng lớn. Hơn nữa, những tính năng mới như 3D Touch, Live Photos hay camera 12MP xuất sắc sẽ man', '<h2><strong>Trải nghiệm ho&agrave;n to&agrave;n mới tr&ecirc;n m&agrave;n h&igrave;nh cảm ứng 3D Touch</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong khi mọi smartphone hiện nay đều sử dụng c&ocirc;ng nghệ cảm ứng đa điểm Multi &ndash; Touch th&igrave;&nbsp;<strong>iPhone 6s Plus</strong>&nbsp;lại đ&aacute;nh dấu một kỷ nguy&ecirc;n mới v&igrave; l&agrave; chiếc smartphone đầu ti&ecirc;n sở hữu c&ocirc;ng nghệ 3D Touch. 3D Touch cho ph&eacute;p bạn l&agrave;m những điều m&agrave; bạn chưa bao giờ l&agrave;m được trước đ&acirc;y. Ngo&agrave;i việc phản hồi khi bạn chạm v&agrave;o m&agrave;n h&igrave;nh, n&oacute; c&ograve;n cảm nhận được lực nhấn của bạn, cho ph&eacute;p bạn l&agrave;m mọi việc một c&aacute;ch nhanh ch&oacute;ng, đơn giản v&agrave; chuy&ecirc;n nghiệp hơn. T&ugrave;y v&agrave;o thao t&aacute;c chạm hay nhấn, 3D Touch tr&ecirc;n&nbsp;<strong>iPhone 6s Plus</strong>&nbsp;sẽ cung cấp cho bạn c&aacute;c phản hồi kh&aacute;c nhau dựa v&agrave;o c&aacute;c cơ chế ho&agrave;n to&agrave;n mới.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/Yv4SD5_simg_de2fe0_500x500_maxb.jpg\" style=\"width: 500px; height: 500px;\" /></p>\r\n\r\n<h2><strong>Camera cảm biến 12MP chống rung quang học</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Camera tr&ecirc;n&nbsp;<strong>iPhone 6 Plus</strong>&nbsp;đ&atilde; rất tuyệt vời, nhưng&nbsp;<strong>iPhone 6s Plus</strong>&nbsp;c&ograve;n l&agrave;m tốt hơn rất nhiều. Độ ph&acirc;n giải giờ đ&acirc;y được n&acirc;ng l&ecirc;n từ 8MP l&ecirc;n 12MP kết hợp th&ecirc;m t&iacute;nh năng ổn định h&igrave;nh ảnh quang học OIS, camera iPhone 6s Plus cho khả năng chụp ảnh rất chuy&ecirc;n nghiệp, sắc n&eacute;t, h&igrave;nh ảnh chi tiết. Kh&ocirc;ng chỉ chụp ảnh xuất sắc, giờ đ&acirc;y iPhone 6s Plus c&ograve;n c&oacute; thể quay được video 4K, gấp 4 lần độ ph&acirc;n giải của video Full HD 1080p trước đ&acirc;y. Cả chụp ảnh v&agrave; quay phim đều tuyệt vời, bạn sẽ l&agrave;m được rất nhiều điều tr&ecirc;n camera&nbsp;<strong>iPhone 6s Plus</strong>.</p>\r\n\r\n<p>B&ecirc;n cạnh camera ch&iacute;nh, camera trước cũng l&agrave; một đặc điểm hấp dẫn tr&ecirc;n c&aacute;c thế hệ iPhone trước đ&acirc;y.&nbsp;<strong>iPhone 6s Plus&nbsp;</strong>đ&atilde; c&oacute; một bước cải tiến mạnh mẽ khi camera FaceTime HD được n&acirc;ng cấp l&ecirc;n độ ph&acirc;n giải 5MP, chụp ảnh ch&acirc;n dung v&agrave; gọi video đầy ấn tượng.</p>\r\n\r\n<p>Về phần mềm, camera&nbsp;<strong>iPhone 6s Plus</strong>&nbsp;đi k&egrave;m t&iacute;nh năng mới l&agrave; Live Photos, một c&aacute;ch lưu giữ h&igrave;nh ảnh mới của bạn. Đ&oacute; sẽ l&agrave; một bức h&igrave;nh động lưu lại những khoảnh khắc đ&aacute;ng nhớ nhất.</p>\r\n\r\n<h2><strong>M&agrave;n h&igrave;nh 5,5 inch Retina tuyệt hảo</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>iPhone 6s Plus</strong>&nbsp;xứng đ&aacute;ng l&agrave; một trong những chiếc smartphone c&oacute; m&agrave;n h&igrave;nh đẹp nhất thế giới hiện nay. K&iacute;ch thước lớn 5,5 inch c&ugrave;ng độ ph&acirc;n giải 1920x1080 pixel mang đến cho bạn trải nghiệm h&igrave;nh ảnh ho&agrave;n hảo. D&ugrave; bạn xem phim, đọc b&aacute;o hay l&agrave;m bất cứ việc g&igrave;, một m&agrave;n h&igrave;nh lớn vẫn lu&ocirc;n tiện dụng hơn. Tuy c&oacute; m&agrave;n h&igrave;nh đến 5,5 inch nhưng bạn vẫn c&oacute; thể cầm&nbsp;<strong>iPhone 6s Plus</strong>&nbsp;một c&aacute;ch dễ d&agrave;ng nhờ thiết kế mỏng, bo tr&ograve;n v&agrave; bề mặt nh&ocirc;m mềm mại.</p>\r\n\r\n<h2><strong>Hiệu năng mạnh mẽ với vi xử l&yacute; A9</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>iPhone 6s Plus</strong>&nbsp;sở hữu con chip mạnh mẽ nhất, ti&ecirc;n tiến nhất từ trước đến nay. Chip A9 l&agrave; bộ vi xử l&yacute; 64bit thế hệ thứ 3 của Apple, c&oacute; khả năng cung cấp hiệu suất tương đương với c&aacute;c m&aacute;y t&iacute;nh để b&agrave;n mạnh mẽ. Bạn sẽ được trải nghiệm một chiếc iPhone nhanh hơn 70%, xử l&yacute; GPU đồ họa tốt hơn 90% tr&ecirc;n mọi ứng dụng v&agrave; c&aacute;c game 3D đồ họa cao.</p>\r\n\r\n<p><strong>iPhone 6s Plus</strong>&nbsp;sử dụng lớp vỏ hợp kim nh&ocirc;m series 7000 mới, chất liệu đang được sử dụng trong ng&agrave;nh c&ocirc;ng nghiệp h&agrave;ng kh&ocirc;ng vũ trụ, cho độ bền hơn hẳn so với c&aacute;c thế hệ cũ. Vẫn l&agrave; một thiết kế kiểu d&aacute;ng mỏng, thanh lịch đầy sang trọng nhưng giờ<strong>&nbsp;iPhone 6s Plus</strong>&nbsp;đ&atilde; mạnh mẽ v&agrave; cứng c&aacute;p hơn. Một m&agrave;u mới đ&atilde; xuất hiện, b&ecirc;n cạnh x&aacute;m, bạc v&agrave; v&agrave;ng, chiếc&nbsp;<strong>iPhone 6s Plus v&agrave;ng hồng Rose Gold</strong>&nbsp;sẽ mang đến sự hấp dẫn mới cho c&aacute;c bạn.</p>\r\n', 2, 'public', 'vanhiep', '1582622704', '1', '0'),
(10, 'Vivo Y91C 2GB 32GB', 'Y91C ', 'public/uploads/bFKvgM_simg_de2fe0_500x500_maxb.jpg', 2130000, 'Điện Thoại Vivo Y91C đi theo xu hướng hiện đại với lối thiết kế unibody phong cách cùng điểm nhấn về màu sắc gây mê mẩn cho người dùng. Thân máy được vát cong bởi những đường cong mềm mại cho bạn cảm ', '<h5><em>ĐIỆN THOẠI VIVO Y91C 2GB 32GB - H&Agrave;NH CH&Iacute;NH H&Atilde;NG&nbsp;</em></h5>\r\n\r\n<h5>Thiết kế thời trang, cuốn h&uacute;t</h5>\r\n\r\n<p><strong>Điện Thoại Vivo Y91C</strong>&nbsp;đi theo xu hướng hiện đại với lối thiết kế unibody phong c&aacute;ch c&ugrave;ng điểm nhấn về m&agrave;u sắc g&acirc;y m&ecirc; mẩn cho người d&ugrave;ng. Th&acirc;n m&aacute;y được v&aacute;t cong bởi những đường cong mềm mại cho bạn cảm gi&aacute;c thoải m&aacute;i, dễ chịu v&agrave; chắc tay khi cầm nắm sử dụng. Mặt lưng của m&aacute;y nổi bật v&agrave; l&ocirc;i cuốn người d&ugrave;ng bởi hiệu ứng m&agrave;u chuyển tiếp gradient đẹp mắt.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/files/H8L3zL_simg_d0daf0_800x1200_max.jpg\" style=\"width: 800px; height: 533px;\" /></p>\r\n\r\n<h5>M&agrave;n h&igrave;nh giọt nước hiện đại</h5>\r\n\r\n<p>Chiếc smartphone của Vivo ấn tượng người d&ugrave;ng bởi kiểu hiển thị m&agrave;n h&igrave;nh khuyết h&igrave;nh giọt nước hiện đại&nbsp; với k&iacute;ch thước 6.22 inch, độ ph&acirc;n giải HD+ cho bạn trải nghiệm h&igrave;nh ảnh mượt m&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5>Hiệu năng ổn định&nbsp;</h5>\r\n\r\n<p>Vivo Y91C c&oacute; cấu h&igrave;nh tầm trung được trang bị con chip xử l&iacute; MediaTek 6762R (bản n&acirc;ng cấp của Helio P22) chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.1 (Oreo) kết hợp với giao diện FunTouch gi&uacute;p m&aacute;y c&oacute; được độ mượt m&agrave; để trải nghiệm được tốt nhất.</p>\r\n\r\n<p>Với đặc điểm cấu h&igrave;nh n&agrave;y sản phẩm c&oacute; thể chạy ổn định với c&aacute;c tựa game nhẹ v&agrave; tầm trung như Li&ecirc;n qu&acirc;n Mobile ở mức cấu h&igrave;nh thấp, Temple Run 2,... cho bạn c&oacute; sự giải tr&iacute; thư gi&atilde;n sau những giờ học tập cũng như l&agrave;m việc căng thẳng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vivo Y91C c&oacute; RAM 2 GB, bộ nhớ trong 32 GB v&agrave; hỗ trợ gắn thẻ nhớ ngo&agrave;i l&ecirc;n đến 256GB gi&uacute;p bạn c&oacute; thể thoải m&aacute;i lưu trữ h&igrave;nh ảnh, video, dữ liệu.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5>Camera chất lượng</h5>\r\n\r\n<p>Camera sau của điện thoại Vivo Y91C c&oacute; độ ph&acirc;n giải 13 MP c&oacute; chức năng chụp ảnh bằng giọng n&oacute;i v&agrave; cử chỉ gi&uacute;p bạn c&oacute; thể thuận tiện trong chụp nh&oacute;m từ xa m&agrave; kh&ocirc;ng cần phải ngại ng&ugrave;ng đi nhờ người chụp hộ.</p>\r\n\r\n<p>Camera trước độ ph&acirc;n giải 5 MP với chế độ chụp l&agrave;m đẹp gi&uacute;p bạn c&oacute; thể tự tin tự sướng cho những tấm ảnh đẹp khoe với người th&acirc;n v&agrave; bạn b&egrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5>Dung lượng pin khủng</h5>\r\n\r\n<p>Vi&ecirc;n pin của Vivo Y91C c&oacute; dung lượng tới 4030 mAh đ&acirc;y l&agrave; con số kh&aacute; lớn gi&uacute;p thời gian trải nghiệm của m&aacute;y được l&acirc;u hơn, bền bỉ hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i ra, sản phẩm c&ograve;n hỗ trợ t&iacute;nh năng mở kh&oacute;a bằng khu&ocirc;n mặt gi&uacute;p bạn c&oacute; thể mở kh&oacute;a nhanh ch&oacute;ng khi cần thiết v&agrave; tạo sự chuy&ecirc;n nghiệp sang trọng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5>Một số h&igrave;nh ảnh thực tế của sản phẩm</h5>\r\n\r\n<h5><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/images/image-1/O3E7zw_simg_de2fe0_500x500_maxb.jpg\" style=\"width: 500px; height: 500px;\" /></h5>\r\n', 2, 'public', 'vanhiep', '1582622715', '0', '0'),
(11, 'Laptop HP Pavilion', '4MF18PA', 'public/uploads/xC8pRg_simg_de2fe0_500x500_maxb.png', 14800000, 'Tự tin giải quyết công việc hằng ngày theo cách của bạn nhờ chiếc Laptop HP Pavilion X360 14-cd0084TU (4MF18PA) với bộ xử lý Intel® Core™ mới nhất và bộ nhớ RAM tối đa lên đến 16GB (tùy chọn), bạn có ', '<p>Tự tin giải quyết c&ocirc;ng việc hằng ng&agrave;y theo c&aacute;ch của bạn nhờ chiếc Laptop HP Pavilion X360 14-cd0084TU (4MF18PA) với bộ xử l&yacute; Intel&reg; Core&trade; mới nhất v&agrave; bộ nhớ RAM tối đa l&ecirc;n đến 16GB (t&ugrave;y chọn), bạn c&oacute; xử l&yacute; đa nhiệm nhiều t&aacute;c vụ c&ugrave;ng l&uacute;c trong nhiều giờ l&agrave;m việc.</p>\r\n\r\n<p>N&acirc;ng cấp hiệu suất với khả năng đ&aacute;p ứng hệ thống mượt m&agrave; v&agrave; thời gian tải nhanh cho trải nghiệm sử dụng m&aacute;y t&iacute;nh đặc biệt. Hỗ trợ xem video độ ph&acirc;n giải l&ecirc;n đến 4K tuyệt đẹp, truyền ph&aacute;t nội dung cao cấp hoặc thậm ch&iacute; tạo ri&ecirc;ng của bạn.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/unitop/back-end/project/ismark.com/admin/public/uploads/ckeditor/images/image-1/xC8pRg_simg_de2fe0_500x500_maxb.png\" style=\"width: 500px; height: 500px;\" /></p>\r\n\r\n<p>Nổi bật với thiết kế xoay 360 độ mới mẻ pha trộn c&aacute;c hoa văn, t&ocirc;ng m&agrave;u v&agrave; lớp ho&agrave;n thiện bằng nh&ocirc;m mỏng nguy&ecirc;n khối độc đ&aacute;o. Viền m&agrave;n h&igrave;nh si&ecirc;u mỏng đem lại sự gọn nhẹ nhất c&oacute; thể d&agrave;nh cho một chiếc laptop x&aacute;ch tay k&iacute;ch thước 14-inch. Bạn c&oacute; thể mang theo chiếc m&aacute;y t&iacute;nh Laptop HP Pavilion X360 14-cd0084TU v&agrave; giải quyết c&ocirc;ng việc ở bất cứ đ&acirc;u một c&aacute;ch thoải m&aacute;i nhất m&agrave; kh&ocirc;ng phải lo lắng việc gia tăng trọng lượng cho chiếc balo của bạn.</p>\r\n\r\n<p>N&acirc;ng cao khả năng giải tr&iacute;<br />\r\nThưởng thức thế giới nội dung kỹ thuật số của bạn theo một c&aacute;ch ho&agrave;n to&agrave;n mới với phim v&agrave; ảnh c&oacute; chất lượng h&igrave;nh ảnh tuyệt vời v&agrave; độ chi tiết độ ph&acirc;n giải cao đến 1 triệu pixel.</p>\r\n\r\n<p>Ảnh v&agrave; video của bạn dường như tr&agrave;n m&agrave;n h&igrave;nh nhờ m&agrave;n h&igrave;nh 3 cạnh viền si&ecirc;u mỏng tr&ecirc;n Laptop HP Pavilion X360 14-cd0084TU. Trải nghiệm &acirc;m thanh ch&acirc;n thực phong ph&uacute; với hệ thống loa k&eacute;p v&agrave; HP Audio Boost với Audio của B&amp;O.</p>\r\n\r\n<p>Trải nghiệm tốt hơn<br />\r\nWindows 10 bản quyền t&iacute;ch hợp, bạn sẽ được trải nghiệm những điều tuyệt vời một c&aacute;ch tự tin với những g&igrave; tốt nhất tr&ecirc;n một hệ điều h&agrave;nh hiện nay.</p>\r\n\r\n<p>Với tuổi thọ pin d&agrave;i v&agrave; c&ocirc;ng nghệ sạc nhanh, Laptop HP Pavilion X360 14-dh0104TUcho ph&eacute;p bạn l&agrave;m việc v&agrave; giải tr&iacute; cả ng&agrave;y m&agrave; kh&ocirc;ng lo lắng về dung lượng pin. Bao gồm dung lượng lưu trữ lớn cho ảnh, video v&agrave; nhạc - kết hợp với cổng USB-C sẵn s&agrave;ng cho c&aacute;c kết nối trong tương lai.</p>\r\n\r\n<p>Với USB Type-C bạn c&oacute; thể dễ d&agrave;ng kết nối bất kỳ thiết bị USB hiện tại n&agrave;o v&agrave; trải nghiệm tốc độ truyền dữ liệu nhanh hơn mười lần so với USB 2.0.</p>\r\n\r\n<p>H&agrave;ng ch&iacute;nh h&atilde;ng - Mới 100% - Fullbox, đầy đủ phụ kiện.<br />\r\nCam kết: ho&agrave;n tiền v&agrave; bồi thường 100% nếu m&aacute;y kh&ocirc;ng phải ch&iacute;nh h&atilde;ng v&agrave; c&oacute; dấu hiệu đ&atilde; qua sử dụng.<br />\r\nBảo h&agrave;nh ch&iacute;nh h&atilde;ng to&agrave;n quốc 12 th&aacute;ng theo ti&ecirc;u chuẩn NSX. Đổi mới trong 7 ng&agrave;y đầu nếu bị lỗi phần cứng.<br />\r\nHỗ trợ c&agrave;i đặt phần mềm , giao h&agrave;ng tận nơi to&agrave;n quốc</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 25, 'public', 'vanhiep', '1582620564', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_to_files`
--

CREATE TABLE `tbl_products_to_files` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_products_to_files`
--

INSERT INTO `tbl_products_to_files` (`id`, `product_id`, `file_id`) VALUES
(1, 2, 50),
(2, 2, 51),
(3, 2, 52),
(4, 2, 53),
(5, 2, 54),
(6, 4, 67),
(7, 0, 78),
(8, 0, 79),
(9, 0, 80),
(10, 0, 81),
(11, 0, 82),
(12, 0, 83),
(13, 0, 84),
(14, 0, 85),
(15, 0, 86),
(16, 0, 87),
(17, 5, 88),
(18, 5, 89),
(19, 5, 90),
(20, 5, 91),
(21, 6, 92),
(22, 6, 93),
(23, 6, 94),
(24, 6, 95),
(25, 6, 96),
(26, 7, 97),
(27, 7, 98),
(28, 7, 99),
(29, 7, 100),
(30, 7, 101),
(31, 7, 102),
(32, 8, 103),
(33, 8, 104),
(34, 8, 105),
(35, 8, 106),
(36, 9, 107),
(37, 9, 108),
(38, 9, 109),
(39, 9, 110),
(40, 9, 111),
(41, 10, 112),
(42, 10, 113),
(43, 10, 114),
(44, 0, 116),
(45, 11, 117),
(46, 11, 118),
(47, 11, 119),
(48, 11, 120),
(49, 0, 121),
(50, 0, 122),
(51, 0, 123),
(52, 0, 124),
(53, 0, 125),
(54, 3, 126),
(55, 3, 127),
(56, 3, 128),
(57, 3, 129),
(58, 3, 130),
(59, 4, 131),
(60, 4, 132),
(61, 4, 133),
(62, 4, 134),
(63, 4, 135);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cat`
--

CREATE TABLE `tbl_product_cat` (
  `cat_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `status` enum('public','private','trash') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creator` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_product_cat`
--

INSERT INTO `tbl_product_cat` (`cat_id`, `title`, `parent_id`, `level`, `status`, `creator`, `creation_time`) VALUES
(2, 'Điện thoại', 0, 0, 'public', 'vanhiep', '1581910038'),
(24, 'Máy tính bảng', 0, 0, 'private', 'vanhiep', '1582380793'),
(25, 'Laptop', 0, 0, 'private', 'vanhiep', '1582380801'),
(26, 'Tai nghe', 0, 0, 'private', 'vanhiep', '1582380811'),
(27, 'Thời trang', 0, 0, 'private', 'vanhiep', '1582380819'),
(28, 'Đồ gia dụng', 0, 0, 'private', 'vanhiep', '1582380832'),
(29, 'Thiết bị văn phòng', 0, 0, 'private', 'vanhiep', '1582380840'),
(30, 'Iphone', 2, 1, 'private', 'vanhiep', '1582380861'),
(32, 'Samsung', 2, 1, 'private', 'vanhiep', '1582380896'),
(33, 'Oppo', 2, 1, 'private', 'vanhiep', '1582380904'),
(34, 'Iphone X', 30, 2, 'private', 'vanhiep', '1582380938'),
(35, 'Iphone 8', 30, 2, 'private', 'vanhiep', '1582380956'),
(36, 'Iphone 8 plus', 30, 2, 'private', 'vanhiep', '1582380969');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_order`
--

CREATE TABLE `tbl_product_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `thumb_product` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `sub_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_product_order`
--

INSERT INTO `tbl_product_order` (`id`, `order_id`, `thumb_product`, `product_name`, `price`, `qty`, `sub_total`) VALUES
(24, 20, 'public/uploads/Nas6p1_simg_de2fe0_500x500_maxb.jpg', 'Laptop Hp Pavilion Gaming', 21550000, 1, 21550000),
(31, 24, 'public/uploads/2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 'Samsung Galaxy A51', 6990000, 1, 6990000),
(32, 25, 'public/uploads/5rAnMd_simg_de2fe0_500x500_maxb.jpg', 'Laptop Acer Swift 3', 24990000, 1, 24990000),
(33, 25, 'public/uploads/hSWgleugD8E1GRUfoT6j_simg_de2fe0_500x500_maxb.jpg', 'Apple IPhone 11 Pro Max 64GB', 28590000, 2, 57180000),
(34, 26, 'public/uploads/5rAnMd_simg_de2fe0_500x500_maxb.jpg', 'Laptop Acer Swift 3', 24990000, 1, 24990000),
(35, 26, 'public/uploads/2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 'Samsung Galaxy A51', 6990000, 1, 6990000),
(36, 27, 'public/uploads/2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 'Samsung Galaxy A51', 6990000, 3, 20970000),
(37, 27, 'public/uploads/5rAnMd_simg_de2fe0_500x500_maxb.jpg', 'Laptop Acer Swift 3', 24990000, 1, 24990000),
(38, 28, 'public/uploads/2Fu2KWMkJnHx4hVypIe2_simg_de2fe0_500x500_maxb.jpg', 'Samsung Galaxy A51', 6990000, 1, 6990000),
(39, 29, 'public/uploads/35mQZm_simg_de2fe0_500x500_maxb.png', 'OPPO Reno 10x Zoom 256GB', 16990000, 1, 16990000),
(42, 31, 'public/uploads/Nas6p1_simg_de2fe0_500x500_maxb.jpg', 'Laptop Hp Pavilion Gaming', 21550000, 1, 21550000),
(43, 31, 'public/uploads/Yv4SD5_simg_de2fe0_500x500_maxb.jpg', 'IPHONE 6S PLUS ', 3995000, 3, 11985000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `slider_desc` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `slider_order` int(11) NOT NULL,
  `thumbnail_url` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` enum('public','private','trash') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creator` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `link`, `slider_desc`, `slider_order`, `thumbnail_url`, `status`, `creator`, `creation_time`) VALUES
(1, 'Slider Ismark', 'www.facebook.com', '<p>M&ocirc; tả Slider</p>\r\n', 1, 'public/uploads/slidẻ.jpg', 'private', 'vanhiep', '1582165284');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_date` int(11) DEFAULT NULL,
  `phone_number` varchar(10) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `active_token` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `is_active` enum('0','1') COLLATE utf8mb4_vietnamese_ci DEFAULT '0',
  `reset_token` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `role` enum('1','2','3') COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `fullname`, `username`, `email`, `password`, `created_date`, `phone_number`, `address`, `active_token`, `is_active`, `reset_token`, `role`) VALUES
(2, 'Võ Văn Hiệp', 'vanhiep', 'hiep.unitop@gmail.com', '9659accf00a60689b2813126eaed9871', 1580944227, '0379015316', 'Đà Nẵng', NULL, '1', 'a0b26974cb79ee900c1fac798f20643b', '1'),
(11, 'Phan Văn Cương', 'phancuong', 'phancuong.qt@gmail.com', 'd7cbd5e9bafccd4ef21c2a14c613d421', 1582878268, '0397015316', 'Hà Nội', NULL, '0', NULL, '2'),
(12, 'Phan Tấn Thành', 'tanthanh', 'tanthanh@gmail.com', '22b8df82fe7795615ab921714581e0f0', 1582895756, '0366479513', 'Đăk lăk', NULL, '0', NULL, '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_widget`
--

CREATE TABLE `tbl_widget` (
  `widget_id` int(11) NOT NULL,
  `widget_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `widget_code` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `widget_content` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creator` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `creation_time` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_widget`
--

INSERT INTO `tbl_widget` (`widget_id`, `widget_name`, `widget_code`, `widget_content`, `creator`, `creation_time`) VALUES
(1, 'Thông tin footer', 'info_footer', '<p>&copy; Bản quyền thuộc về unitop.vn | Php Master</p>\r\n\r\n<p>Edit by: V&otilde; Văn Hiệp</p>\r\n', 'vanhiep', '1582077093'),
(6, 'Thông tin header', 'info_header', '<p>Th&ocirc;ng tin header</p>\r\n', 'vanhiep', '1582079795');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_info_order`
--
ALTER TABLE `tbl_info_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_list_customer`
--
ALTER TABLE `tbl_list_customer`
  ADD PRIMARY KEY (`custom_id`);

--
-- Indexes for table `tbl_list_order`
--
ALTER TABLE `tbl_list_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_post_cat`
--
ALTER TABLE `tbl_post_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_products_to_files`
--
ALTER TABLE `tbl_products_to_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_product_order`
--
ALTER TABLE `tbl_product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_widget`
--
ALTER TABLE `tbl_widget`
  ADD PRIMARY KEY (`widget_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `tbl_info_order`
--
ALTER TABLE `tbl_info_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_list_customer`
--
ALTER TABLE `tbl_list_customer`
  MODIFY `custom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_list_order`
--
ALTER TABLE `tbl_list_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_media`
--
ALTER TABLE `tbl_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_post_cat`
--
ALTER TABLE `tbl_post_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_products_to_files`
--
ALTER TABLE `tbl_products_to_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_product_order`
--
ALTER TABLE `tbl_product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_widget`
--
ALTER TABLE `tbl_widget`
  MODIFY `widget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
