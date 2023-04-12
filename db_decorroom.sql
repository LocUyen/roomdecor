-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2023 lúc 04:59 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_decorroom`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `customer_fullname` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_phone` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reset_token` varchar(40) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_fullname`, `customer_password`, `customer_email`, `customer_phone`, `customer_created_date`, `reset_token`) VALUES
(1, 'Đặng Cường', 'd069b8548d9941149e5f7086a8eaaf78', 'lcuyeern@gmail.com', '0932024582', '2022-11-28 02:23:00', '8b57281e4bcad5a516ec33311ee4d4dd'),
(2, 'Tường Gia Vỹ', 'd851bf521a3d432d5b98c501de18d421', 'giavy@gmail.com', '0937377777', '2022-10-19 12:31:25', NULL),
(5, 'Trần Thúy Ái', '1dacde335e99f05351d8aa91cf9b7523', 'thuyai@gmail.com', '0702845104', '2022-08-16 04:36:16', NULL),
(6, 'Nguyễn Minh Trường', '2d660e70370d36672033938b5f66b998', 'minhtruong@gmail.com', '0932024737', '2022-08-17 04:41:53', NULL),
(7, 'Nguyễn Văn Anh', '276062d21f20d3b105ba1d9d89e145d0', 'vananh@gmail.com', '0932023097', '2022-09-13 13:31:13', NULL),
(9, 'Long Thành Chung', '1fa430319885bda2c392b5775bb65388', 'longchung@gmail.com', '0932023422', '2022-11-15 12:31:54', NULL),
(10, 'Trịnh Lộc Uyển', '269421d0fc3085bb9565d2d34e8ff4a7', 'trinhlocuyen@gmail.com', '0932024582', '2022-11-29 14:54:04', '1a089432ecb5fee7a917874484e18d42'),
(11, 'Nguyễn Tuy Anh', 'ed83ea91e1533bca76227c812eb6dbcc', 'tuyanh@gmail.com', '0728288888', '2022-11-29 14:21:24', NULL),
(12, 'Nguyễn Văn Toàn', '23d023cece69f7aaee069de9694859bf', 'vantoan@gmail.com', '0739992222', '2022-12-02 16:10:45', NULL),
(13, 'Trần Thanh Hà', '8a17f5cbd16ae590819e07cd94b525e4', 'thanhha@gmail.com', '0722222233', '2022-12-02 16:12:59', NULL),
(14, 'Huỳnh Thúc Khang', '289a0fceb6b2ef5b017c7f09917b3cfc', 'thuckhang@gmail.com', '0739999333', '2022-12-03 03:02:20', NULL),
(15, 'Dậu', '7d5b1e6be12ab370ca48219d2af89310', 'dau@gmail.com', '0739993322', '2022-12-04 03:09:22', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_decor_service`
--

CREATE TABLE `tbl_decor_service` (
  `service_id` int(11) NOT NULL,
  `service_image` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_team_name` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_experience` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_project` varchar(11) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_area` varchar(300) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_location` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_phone` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_address` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_facebook` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_youtube` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_into` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_detail_project` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `service_status` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_decor_service`
--

INSERT INTO `tbl_decor_service` (`service_id`, `service_image`, `service_team_name`, `service_experience`, `service_project`, `service_area`, `service_location`, `service_phone`, `service_address`, `service_facebook`, `service_youtube`, `service_into`, `service_detail_project`, `service_created_date`, `user_id`, `service_status`) VALUES
(8, 'team1.jpg', 'Cu Chun Decor', '2 năm', '50', 'CuChundecor@gmail.com', 'TP  HCM', '0944445500', 'Quận gò vấp, Ho Chi Minh City, Vietnam, 700000', 'https://www.facebook.com/trandanghoaitrung122995/about', 'https://www.youtube.com/@CuChunDecor/videos', '<p>Hướng dẫn mẹo decor, phối m&agrave;u sắc h&agrave;i h&ograve;a.<br />\r\nVới mong muốn đem đến kh&ocirc;ng gian sống t&ocirc;t hơn.</p>\r\n\r\n<p>Với phương ch&acirc;m hoạt động v&igrave; tương lai kh&aacute;ch h&agrave;ng, ch&uacute;ng t&ocirc;i lu&ocirc;n cam kết đem đến dịch vụ chất lượng với mức gi&aacute; cả tốt nhất thay v&igrave; đem đến những dịch vụ x&acirc;y nh&agrave;, sửa nh&agrave; gi&aacute; rẻ k&eacute;m chất lượng, giảm tuổi thọ của c&ocirc;ng tr&igrave;nh, những điều đo đ&oacute; sẽ l&agrave;m tổn thất chi ph&iacute; lớn cho kh&aacute;ch h&agrave;ng trong tương lai.</p>\r\n', '<p>Với bạn hạnh ph&uacute;c l&agrave; g&igrave; ?</p>\r\n\r\n<p>Với t&ocirc;i l&agrave; được về Nh&agrave; ng&atilde; lưng trong căn ph&ograve;ng của m&igrave;nh sau những ng&agrave;y l&agrave;m việc mệt mỏi</p>\r\n\r\n<p>Ai trong ch&uacute;ng ta cũng xứng đ&aacute;ng được hạnh ph&uacute;c <img alt=\"❤️\" height=\"16\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t6c/1/16/2764.png\" width=\"16\" /> <a href=\"https://www.facebook.com/hashtag/decor?__eep__=6&amp;__cft__[0]=AZU1Q6inMsYoaeDRjIdUyFznESyFtYGorctar_EYvIXQg7aWil76naPJPvUQ4rtpF0BROfsx_AxZG7q94KdgSxqpMWEc1ISarpMmR4YL_jBHhuGYPYcUNKRyzj38ksfIjPu8Clwpms-VErMag9Y1pXnR2kuqqxDlM7yxVgpWT00i71KoJePihhBNBRFqHPVaRwPR2Uwz44jkK-hB28evHGpn&amp;__tn__=*NK-R\" role=\"link\" tabindex=\"0\">#decor</a> <a href=\"https://www.facebook.com/hashtag/phongtro?__eep__=6&amp;__cft__[0]=AZU1Q6inMsYoaeDRjIdUyFznESyFtYGorctar_EYvIXQg7aWil76naPJPvUQ4rtpF0BROfsx_AxZG7q94KdgSxqpMWEc1ISarpMmR4YL_jBHhuGYPYcUNKRyzj38ksfIjPu8Clwpms-VErMag9Y1pXnR2kuqqxDlM7yxVgpWT00i71KoJePihhBNBRFqHPVaRwPR2Uwz44jkK-hB28evHGpn&amp;__tn__=*NK-R\" role=\"link\" tabindex=\"0\">#phongtro</a></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.google.com/imgres?imgurl=https%3A%2F%2Fthing.vn%2Fwp-content%2Fuploads%2F2021%2F06%2Fcach-bai-tri-phong-tro-de-thuong-22.jpg&amp;imgrefurl=https%3A%2F%2Fthing.vn%2Fcach-trang-tri-phong-tro-de-thuong&amp;tbnid=0HuoOboGuSN6ZM&amp;vet=12ahUKEwjw3Kqj4-n7AhUq4nMBHRIwC2sQMygFegUIARDvAQ..i&amp;docid=ceV96oGTuH004M&amp;w=806&amp;h=605&amp;q=decor%20ph%C3%B2ng%20tr%E1%BB%8D&amp;ved=2ahUKEwjw3Kqj4-n7AhUq4nMBHRIwC2sQMygFegUIARDvAQ\" /><img alt=\"\" src=\"data:image/jpeg;base64,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\" style=\"width: 275px; height: 183px; float: left;\" /><img alt=\"\" src=\"data:image/jpeg;base64,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\" style=\"width: 293px; height: 172px; float: left;\" /><img alt=\"\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK97nibXK5ZmkgFYjhv9rypvmR7KHpfr0Jzg&amp;usqp=CAU\" style=\"width: 236px; height: 213px;\" /><img alt=\"\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1Svo_JGANCUytRxUD6tzHWTq2zUlDyY7QHQ&amp;usqp=CAU\" style=\"width: 276px; height: 182px; float: left;\" /><img alt=\"\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXm6Sza2Sl_CLEqFaqXqQ0cBtTbaHHS4NZkQ&amp;usqp=CAU\" style=\"width: 225px; height: 225px;\" /><img alt=\"\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-wa76a9wMHAxfyGC9x9iLU1u6paOufMi44MEUmQfw0hERl-11dSZymPlPT7bLi1qnXS0&amp;usqp=CAU\" style=\"width: 299px; height: 168px; float: left;\" /><img alt=\"\" src=\"https://www.google.com/imgres?imgurl=https%3A%2F%2Fthing.vn%2Fwp-content%2Fuploads%2F2021%2F06%2Fcach-bai-tri-phong-tro-de-thuong-23.jpg&amp;imgrefurl=https%3A%2F%2Fthing.vn%2Fcach-trang-tri-phong-tro-de-thuong&amp;tbnid=ChHiACG7EGzYxM&amp;vet=12ahUKEwjw3Kqj4-n7AhUq4nMBHRIwC2sQMygLegUIARD7AQ..i&amp;docid=ceV96oGTuH004M&amp;w=806&amp;h=504&amp;q=decor%20ph%C3%B2ng%20tr%E1%BB%8D&amp;ved=2ahUKEwjw3Kqj4-n7AhUq4nMBHRIwC2sQMygLegUIARD7AQ\" /></p>\r\n', '2022-12-04 01:33:50', 6, 'yes'),
(9, 'team2.png', 'Binba Decor', '1 năm', '30', 'BindaDecor@gmail.com', 'Tp.Cần Thơ', '0901 113 322', 'Căn 501 – Tầng 05 The Sun Building36/6A Đường Nguyễn Gia Trí, Phường 25, Bình Thạnh, TP.HCM', 'https://www.facebook.com/BinbaDecor', 'https://binbadecor.com.vn', '<h3 id=\"binba-decor\">Binba Decor</h3>\r\n\r\n<p><strong>Binba Decor</strong>&nbsp;l&agrave; đơn vị uy t&iacute;n h&agrave;ng đầu trong lĩnh vực thiết kế v&agrave; thi c&ocirc;ng nội thất tại th&agrave;nh phố Hồ Ch&iacute; Minh. Với đội ngũ kiến tr&uacute;c sư tr&igrave;nh độ cao c&ugrave;ng đội thợ thi c&ocirc;ng c&oacute; kỹ năng chuy&ecirc;n nghiệp sẽ mang đến cho qu&yacute; qu&yacute; kh&aacute;ch những c&ocirc;ng tr&igrave;nh đẹp v&agrave; ấn tượng nhất.</p>\r\n\r\n<p>Binba mang tới cho qu&yacute; kh&aacute;ch những mẫu thiết kế, trang tr&iacute; cực k&igrave; độc đ&aacute;o , đ&aacute;p ứng đ&uacute;ng với y&ecirc;u cầu thẩm mĩ tinh &yacute; v&agrave; c&ocirc;ng dụng kĩ lưỡng đến qu&yacute; qu&yacute; kh&aacute;ch. Ngo&agrave;i trang tr&iacute; ph&ograve;ng ngủ ra, Binba c&ograve;n c&oacute; dịch vụ thiết kế những c&ocirc;ng tr&igrave;nh như nh&agrave; h&agrave;ng, qu&aacute;n cafe, kh&aacute;ch sạn, đảm bảo kh&ocirc;ng l&agrave;m bạn v&ocirc; vọng.</p>\r\n\r\n<p>Đến với&nbsp;<strong>Binba Decor</strong>, những bạn sẽ ho&agrave;n to&agrave;n c&oacute; thể:</p>\r\n\r\n<ul>\r\n	<li>Sắp xếp kh&ocirc;ng gian sống một nhữngh khoa học, đẹp mắt. Ph&aacute;t triển &yacute; tưởng ph&aacute;t minh của bạn m&agrave; vẫn đảm bảo c&ocirc;ng tr&igrave;nh ho&agrave;n hảo.</li>\r\n	<li>Binba Decor sẽ mang đến cho bạn một kh&ocirc;ng gian sống, l&agrave;m việc độc nhất v&ocirc; nhị. Tất cả những thiết kế l&agrave; độc quyền, kh&ocirc;ng tồn tại bất kỳ c&ocirc;ng tr&igrave;nh n&agrave;o giống với ng&ocirc;i nh&agrave; của bạn. C&ocirc;ng tr&igrave;nh của những bạn sẽ c&oacute; thẩm mỹ cũng như c&ocirc;ng suất tương th&iacute;ch với sở th&iacute;ch v&agrave; y&ecirc;u cầu ri&ecirc;ng.</li>\r\n	<li>Dịch vụ thiết kế nội thất của Binba sẽ gi&uacute;p bạn tiết kiệm được tối đa thời gian, c&ocirc;ng sức khi x&acirc;y dựng c&ocirc;ng tr&igrave;nh. Bạn sẽ kh&ocirc;ng hề phải đối mặt với những rắc rối ph&aacute;t sinh nữa. Kh&ocirc;ng cần tự m&igrave;nh phải mua sắm v&agrave; t&iacute;nh to&aacute;n.</li>\r\n</ul>\r\n', '<figure><span style=\"font-size:10px;\"><img alt=\"decor-phong-tro\" decoding=\"async\" src=\"https://lh3.googleusercontent.com/NRPmgJhhqCVzKYokdyVfYIDtCaBgMv_unww9o2xazaPR6jFcnjrYKTVk6mWo-JUwo0bzYjGVBv61aELVaxfr3dxQUVFMA5FGrj3SrWPTv11R5RmYmrZ3bNimZtwAQih1yV3cdDhhQkARlyPpa3ydCyA\" /></span>\r\n<figcaption>Trang tr&iacute; ph&ograve;ng trọ với đồ nội thất đa năng hiện đại v&agrave; tiện nghi</figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure><img alt=\"decor-phong-tro\" decoding=\"async\" src=\"https://lh6.googleusercontent.com/qcQ4XlqHzBl_zgJYhBfxQb12u7YSqh8zSP32_RaOp-hi9G_OXC1xVIzEQzB0MRpMXXAvLagVlCMYtM56EvHoDWgSNyzpRFbB61567PNswX1cnADDGks7U1d3xfqt8tP8awX5Cyh3Mv3uNPqO-X6MFT4\" title=\"decor-phong-tro\" /></figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure><img alt=\"decor-phong-tro\" decoding=\"async\" src=\"https://lh6.googleusercontent.com/Tj7xYwZw4ceoR1nxisUSEmAv-OzT9MXBwXV-phz0Mqi3ZGeYRARbOYxCzZRVokLUycNylF15aWtP5dIEh6wJC0WqHbc8I_budI0Y_Ws8V9y3sPVALrmmnKlFX2HiNC2BSwErdbPvVn9DfQJdirYypQ\" title=\"decor-phong-tro\" /></figure>\r\n\r\n<figure><br />\r\n<img alt=\"decor-phong-tro\" decoding=\"async\" src=\"https://lh3.googleusercontent.com/oJPWOSsyn-Ug3Dgh-va-FfrREdJxXQL7rqLw9AIgk9uqvEmnTH0fENS2HdCrDHKAsgeO13GAkyWJ1z6MzMv20cRJqjFTYkaI-44lxCNbR6n2Fke8eT3wrGaMiJXhlX0fEJbHm-GE_S8F7NtoPGiKCw\" title=\"decor-phong-tro\" /></figure>\r\n\r\n<figure><br />\r\n<img alt=\"decor-phong-tro\" decoding=\"async\" src=\"https://lh3.googleusercontent.com/lOVrktrkVw45Sw6-27YsRr6NmGgzKjLjgPllc1y0IEL4dJjqzsDZFTDmcbiKO4txrjAQoQQswZjgRTy0I0XeAO-gfzsy_KBBj-WsJdU_ZrK_iGDQLYvcAcQtizzK1L2Cqb0D26oJ2FGYG1TFPYqKtb4\" /></figure>\r\n\r\n<figure><img alt=\"decor-phong-tro\" decoding=\"async\" src=\"https://lh4.googleusercontent.com/0Pr6P8nSAdIng2-fHh-vwZvDLH1ytRZO4RDg8fOCjjWlzx7DTF4cxQWHmfMByACuM7DpRegCMmNpceqGNu7_UtTUtP6yymFFQdI_7t5tfMTU53sLGYkhGrwjCUvGE0CpIAUEzG1GZwf7iCB59Fnu9A\" /></figure>\r\n', '2022-12-04 03:17:59', 7, 'yes'),
(10, 'team3.png', 'HayHoDecor', '3 năm', '20', 'HayHoDecor@gmail.com', 'Kiên Giang', '0944443333', 'TP.Rạch Gía, Kiên Giang', 'https://www.facebook.com/HayHoDecor', 'https://hayhodecor.com/gioi-thieu/', '<p>Bằng tr&igrave;nh độ, kiến thức chuy&ecirc;n m&ocirc;n, l&ograve;ng đam m&ecirc; với nghề v&agrave; đạo đức trong kinh doanh đội ngũ nh&acirc;n sự, kỹ thuật, kỹ sư của đơn vị n&agrave;y lu&ocirc;n mong muốn v&agrave; cam kết đem lại cho kh&aacute;ch h&agrave;ng một dịch vụ quảng c&aacute;o v&agrave; trang tr&iacute; nội ngoại thất ho&agrave;n hảo từ những điều nhỏ nhặt đến những điều lớn lao v&agrave; mới mẻ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với sứ mệnh đ&oacute;, ch&uacute;ng t&ocirc;i<b>&nbsp;</b>mang tới cho kh&aacute;ch h&agrave;ng những tiện &iacute;ch v&ocirc; c&ugrave;ng vừa &yacute;, những lời khuy&ecirc;n, tư vấn, những sản phẩm decor chất lượng c&ugrave;ng gi&aacute; th&agrave;nh phải chăng để kh&aacute;ch h&agrave;ng lựa chọn cho những kh&ocirc;ng gian sống của m&igrave;nh. Khi bạn c&oacute; nhu cầu trang tr&iacute; nội thất đem lại tiện nghi, rộng r&atilde;i, sang trọng v&agrave; đẹp cho ph&ograve;ng ngủ diện t&iacute;ch nhỏ, th&igrave; Tranmy Decor l&agrave; một sự lựa chọn hợp l&iacute; mang đến cho bạn sự h&agrave;i l&ograve;ng cả về nhu cầu v&agrave; thẩm mĩ.</p>\r\n', '<figure><span style=\"font-size:8px;\"><img alt=\"Decor phòng ngủ Hàn Quốc đốn tim bao người. \" decoding=\"async\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"https://hayhodecor.com/wp-content/uploads/2022/10/1-decor-phong-ngu-Han-Quoc-compressed.jpg\" srcset=\"https://hayhodecor.com/wp-content/uploads/2022/10/1-decor-phong-ngu-Han-Quoc-compressed.jpg 800w, https://hayhodecor.com/wp-content/uploads/2022/10/1-decor-phong-ngu-Han-Quoc-compressed-300x188.jpg 300w, https://hayhodecor.com/wp-content/uploads/2022/10/1-decor-phong-ngu-Han-Quoc-compressed-768x480.jpg 768w, https://hayhodecor.com/wp-content/uploads/2022/10/1-decor-phong-ngu-Han-Quoc-compressed-600x375.jpg 600w\" style=\"width: 400px; height: 188px; float: left;\" /></span>\r\n<figcaption><em><sup>Decor ph&ograve;ng ngủ H&agrave;n Quốc đốn tim bao người.</sup></em></figcaption>\r\n</figure>\r\n\r\n<figure>\r\n<p style=\"text-align: left;\"><img alt=\"Phòng ngủ phong cách Hàn Quốc có những nét đặc trưng riêng nào?\" decoding=\"async\" loading=\"lazy\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"https://hayhodecor.com/wp-content/uploads/2022/10/2-decor-phong-ngu-Han-Quoc-compressed.jpg\" srcset=\"https://hayhodecor.com/wp-content/uploads/2022/10/2-decor-phong-ngu-Han-Quoc-compressed.jpg 800w, https://hayhodecor.com/wp-content/uploads/2022/10/2-decor-phong-ngu-Han-Quoc-compressed-300x188.jpg 300w, https://hayhodecor.com/wp-content/uploads/2022/10/2-decor-phong-ngu-Han-Quoc-compressed-768x480.jpg 768w, https://hayhodecor.com/wp-content/uploads/2022/10/2-decor-phong-ngu-Han-Quoc-compressed-600x375.jpg 600w\" style=\"width: 400px; height: 250px;\" /></p>\r\n\r\n<figcaption><em><sup>Ph&ograve;ng ngủ phong c&aacute;ch H&agrave;n Quốc c&oacute; những n&eacute;t đặc trưng ri&ecirc;ng n&agrave;o?</sup></em></figcaption>\r\n</figure>\r\n\r\n<figure><img alt=\"Phòng ngủ có tông màu tươi sáng, nhẹ nhàng, tinh tế, sang trọng.\" decoding=\"async\" loading=\"lazy\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"https://hayhodecor.com/wp-content/uploads/2022/10/3-decor-phong-ngu-Han-Quoc-compressed.jpg\" srcset=\"https://hayhodecor.com/wp-content/uploads/2022/10/3-decor-phong-ngu-Han-Quoc-compressed.jpg 800w, https://hayhodecor.com/wp-content/uploads/2022/10/3-decor-phong-ngu-Han-Quoc-compressed-300x188.jpg 300w, https://hayhodecor.com/wp-content/uploads/2022/10/3-decor-phong-ngu-Han-Quoc-compressed-768x480.jpg 768w, https://hayhodecor.com/wp-content/uploads/2022/10/3-decor-phong-ngu-Han-Quoc-compressed-600x375.jpg 600w\" style=\"width: 400px; height: 250px; float: left;\" /></figure>\r\n', '2022-12-04 03:44:34', 8, 'yes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `email`, `feedback`, `created_date`) VALUES
(1, 'lcuyeern@gmail.com', 'Giao lộn màu giấy dán tường rồi, tôi muốn đổi cái khác.', '2022-12-06 16:21:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_image` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_image`, `product_id`) VALUES
(9, 'ngu2.jpg', 10),
(10, 'ngu3.jpg', 10),
(11, 'ngu4.jpg', 10),
(12, 's3.jfif', 11),
(13, 'so2.jfif', 11),
(14, '', 12),
(15, 'notthat1-planet1.png', 13),
(16, 'notthat1-planet2.png', 13),
(17, 'notthat1-planet3.png', 13),
(18, 'notthat1-planet4.png', 13),
(19, 'notthat1-bango1.png', 14),
(20, 'notthat1-bantrang1.png', 14),
(21, 'notthat1-bantrang2.png', 14),
(22, 'notthat1-banden1.png', 15),
(23, 'notthat1-banden2.png', 15),
(24, 'notthat1-banden3.png', 15),
(25, 'notthat1-banden5.png', 15),
(26, 'notthat1-bango1.png', 15),
(27, 'notthat1-ghe2.png', 16),
(28, '', 17),
(29, 'notthat1-kesach1.png', 18),
(30, 'notthat1-kesach2.png', 18),
(31, 'notthat1-kesach3.png', 18),
(32, 'notthat1-kedep2.png', 19),
(33, 'notthat1-kedep3.png', 19),
(34, 'notthat1-kedep4.png', 19),
(35, 'notthat1-gheluoi1.png', 20),
(36, 'notthat1-gheluoi2.png', 20),
(37, 'notthat1-gheluoi3.png', 20),
(38, 'caitao2-dansan1.png', 21),
(39, 'caitao2-dansan2.png', 21),
(40, 'caitao2-dansan3.png', 21),
(41, 'caitao2-dansan4.png', 21),
(42, 'caitao2-cuonsang1.png', 22),
(43, 'caitao2-cuonsang2.png', 22),
(44, 'caitao2-cuonsang3.png', 22),
(45, 'caitao2-dantuong2.png', 23),
(46, 'caitao2-dangiay1.png', 24),
(47, 'caitao2-dangiay2.png', 24),
(48, 'caitao2-dangiay4.png', 24),
(49, '', 25),
(50, '', 26),
(51, '', 27),
(52, '', 28),
(53, '', 29),
(54, '', 30),
(55, '', 31),
(56, '', 32),
(57, '', 33),
(58, '', 34),
(59, 'ga1.png', 35),
(60, 'ga2.png', 35),
(61, 'ga3.png', 35),
(62, 'ga5.png', 35),
(63, 'ga6.png', 35),
(64, 'thamtreo2.png', 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_import_detail`
--

CREATE TABLE `tbl_import_detail` (
  `import_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `import_price` int(11) NOT NULL,
  `import_quality` int(11) NOT NULL,
  `import_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_import_detail`
--

INSERT INTO `tbl_import_detail` (`import_detail_id`, `product_id`, `import_price`, `import_quality`, `import_id`) VALUES
(21, 36, 25000, 20, 14),
(22, 35, 190000, 48, 14),
(23, 34, 250000, 9, 14),
(24, 33, 150000, 26, 14),
(25, 32, 15000, 50, 15),
(26, 24, 45000, 91, 15),
(27, 23, 4000, 800, 15),
(28, 22, 20000, 100, 15),
(29, 21, 5000, 1000, 15),
(30, 31, 70000, 50, 16),
(31, 30, 140000, 48, 16),
(32, 29, 70000, 29, 16),
(33, 28, 400000, 9, 16),
(34, 27, 15000, 50, 16),
(35, 26, 50000, 59, 16),
(36, 25, 15000, 50, 16),
(37, 13, 300000, 18, 16),
(38, 20, 150000, 38, 17),
(39, 19, 200000, 24, 17),
(40, 25, 15000, 10, 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_import_goods`
--

CREATE TABLE `tbl_import_goods` (
  `import_id` int(11) NOT NULL,
  `import_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `import_created_by` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `import_total` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `import_status` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_import_goods`
--

INSERT INTO `tbl_import_goods` (`import_id`, `import_date`, `import_created_by`, `supplier_id`, `import_total`, `import_status`) VALUES
(14, '2022-11-27 03:15:00', '1', 5, '15770000', 'Đã thanh toán'),
(15, '2022-12-07 03:24:00', '1', 4, '15045000', 'Đã thanh toán'),
(16, '2022-11-28 03:42:00', '1', 3, '25700000', 'Đã thanh toán'),
(17, '2022-11-30 03:56:00', '1', 2, '10500000', 'Đã thanh toán'),
(18, '2022-12-08 01:05:00', '1', 5, '150000', 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `order_fullname` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `order_phone` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `order_address` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `order_email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `order_num` int(11) NOT NULL,
  `order_total` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `order_note` tinytext COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `order_payment` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status_id` int(11) NOT NULL,
  `order_created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `order_fullname`, `order_phone`, `order_address`, `order_email`, `order_num`, `order_total`, `order_note`, `order_payment`, `status_id`, `order_created_date`, `user_id`) VALUES
(42, 'Trịnh Lộc Uyển', '0932024582', '243 Điện Biên Phủ, TP Rạch Gía, Kiên Giang', 'trinhlocuyen@gmail.com', 3, '653000', '', 'Thanh toán tại nhà', 3, '2022-11-07 17:00:00', 5),
(43, 'Trần Thu Hà', '0922222234', '243 Trần Quang Khải, Q.7, TP.HCM', 'thuha@gmail.com', 50, '295000', '', 'Thanh toán tại nhà', 3, '2022-11-08 17:00:00', 6),
(44, 'Trịnh Lộc Uyển', '0932024582', '243 Điện Biên Phủ, TP Rạch Gía, Kiên Giang', 'trinhlocuyen@gmail.com', 49, '17395000', '', 'Thanh toán chuyển kh', 3, '2022-11-09 17:00:00', 5),
(48, 'Trần Thùy Trang', '0922777234', '669, Đường Trần Hưng Đạo, Khu Vực 4, Vị Thanh, Hậu Giang,', 'thuytrang@gmail.com', 5, '1139000', 'Giao hành chính', 'Thanh toán tại nhà', 3, '2022-11-11 17:00:00', 7),
(49, 'Lưu Gia Hân', '0922224444', '669, Đường Trần Hưng Đạo, Khu Vực 4, Vị Thanh, Hậu Giang,', 'giahan@gmail.com', 1, '360000', '', 'Thanh toán vnpay', 3, '2022-11-13 17:00:00', 8),
(50, 'Trần Thu Hà', '0922222234', '22 Đ. Hà Hoàng Hổ, Phường Mỹ Xuyên, Thành phố Long Xuyên, An Giang ', 'thuha@gmail.com', 82, '483800', '', 'Thanh toán tại nhà', 3, '2022-11-30 17:00:00', 6),
(51, 'Lưu Gia Hân', '0922224444', '669, Đường Trần Hưng Đạo, Ninh Kiều, Cần Thơ', 'giahan@gmail.com', 5, '1158000', '', 'Thanh toán chuyển kh', 3, '2022-12-02 02:00:00', 12),
(52, 'Trần Thu Hà', '0922222234', '282 Nguyễn Trung Trực, P.Mĩ Thạnh, Điện Biên', 'thuha@gmail.com', 16, '2033000', '', 'Thanh toán tại nhà', 3, '2022-12-02 06:00:00', 6),
(53, 'Trần Thùy Trang', '0922777234', '99 Ngọc Cư Trinh, TP. Rạch Gía, Kiên Giang', 'thuytrang@gmail.com', 11, '439000', 'giao buổi chiều', 'Thanh toán tại nhà', 3, '2022-12-02 09:04:28', 7),
(54, 'Trịnh Lộc Uyển', '0739999333', '99 Ngọc Cư Trinh, TP. Rạch Gía, Kiên Giang', 'trinhlocuyen@gmail.com', 100, '600000', '', 'Thanh toán tại nhà', 3, '2022-12-02 12:05:22', 5),
(55, 'Trịnh Lộc Uyển', '0932024582', '234 Lâm Quang Ky. Rạch Gía, Kiên Giang', 'trinhlocuyen@gmail.com', 2, '498000', '', 'Thanh toán tại nhà', 3, '2022-12-08 02:00:36', 5),
(56, 'Lưu Gia Hân', '0922224444', '234 Lâm Quang Ky. Rạch Gía, Kiên Giang', 'giahan@gmail.com', 1, '360000', '', 'Thanh toán tại nhà', 3, '2022-12-11 13:56:32', 8),
(65, 'Lưu Gia Hân', '0922224444', '234 Lâm Quang Ky. Rạch Gía, Kiên Giang', 'trinhlocuyen@gmail.com', 1, '149000', 'giao hàng lúc 6h', 'Thanh toán tại nhà', 2, '2022-12-19 15:37:30', 8),
(66, 'Trần Thùy Trang', '0922777234', '183 Trần Phú, P.Vĩnh Thanh Vân, TP.Rạch Gía, Kiên Giang', 'trinhlocuyen@gmail.com', 200, '1180000', 'Đang làm thì thiếu cần giao gấp', 'Thanh toán tại nhà', 3, '2022-12-19 16:39:51', 7),
(67, 'Trịnh Lộc Uyển', '0932024582', '243 Điện Biên Phủ, TP.Rạch Gía, Kiên Giang', 'locuyen@gmail.com', 49, '17395000', 'Giao vào chủ nhật', 'Thanh toán chuyển kh', 2, '2022-12-20 10:41:03', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `price` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`id`, `order_id`, `product_id`, `quatity`, `price`, `created_date`) VALUES
(37, 41, 4, 1, '650000', '2022-11-27 16:21:30'),
(38, 42, 14, 1, '355000', '2022-11-29 13:29:07'),
(39, 42, 17, 2, '298000', '2022-11-29 13:29:07'),
(40, 43, 21, 50, '295000', '2022-11-29 14:25:29'),
(41, 44, 14, 49, '17395000', '2022-11-29 14:46:51'),
(42, 45, 14, 1, '355000', '2022-11-29 15:00:00'),
(43, 46, 14, 1, '355000', '2022-11-29 15:01:44'),
(44, 46, 17, 2, '298000', '2022-11-29 15:01:44'),
(45, 47, 14, 49, '17395000', '2022-11-29 15:03:23'),
(46, 48, 30, 1, '152000', '2022-12-01 14:47:22'),
(47, 48, 18, 2, '398000', '2022-12-01 14:47:22'),
(48, 48, 29, 1, '99000', '2022-12-01 14:47:22'),
(49, 48, 28, 1, '490000', '2022-12-01 14:47:22'),
(50, 49, 13, 1, '360000', '2022-12-01 14:49:37'),
(51, 50, 21, 82, '483800', '2022-12-01 14:54:36'),
(52, 51, 35, 2, '480000', '2022-12-02 16:11:54'),
(53, 51, 15, 2, '498000', '2022-12-02 16:11:54'),
(54, 51, 19, 1, '180000', '2022-12-02 16:11:54'),
(55, 52, 24, 9, '477000', '2022-12-02 16:16:31'),
(56, 52, 33, 1, '178000', '2022-12-02 16:16:31'),
(57, 52, 17, 2, '298000', '2022-12-02 16:16:31'),
(58, 52, 34, 1, '300000', '2022-12-02 16:16:31'),
(59, 52, 13, 1, '360000', '2022-12-02 16:16:31'),
(60, 52, 20, 2, '420000', '2022-12-02 16:16:31'),
(61, 53, 30, 1, '152000', '2022-12-03 03:04:28'),
(62, 53, 22, 9, '225000', '2022-12-03 03:04:28'),
(63, 53, 26, 1, '62000', '2022-12-03 03:04:28'),
(64, 54, 23, 100, '600000', '2022-12-03 03:05:22'),
(65, 55, 15, 2, '498000', '2022-12-08 02:00:36'),
(66, 56, 13, 1, '360000', '2022-12-11 13:56:32'),
(67, 57, 13, 1, '360000', '2022-12-12 12:25:57'),
(68, 57, 14, 1, '355000', '2022-12-12 12:25:57'),
(69, 58, 17, 1, '149000', '2022-12-12 12:27:35'),
(70, 59, 16, 2, '378000', '2022-12-12 13:31:35'),
(71, 60, 26, 3, '186000', '2022-12-13 12:51:21'),
(72, 61, 30, 1, '152000', '2022-12-13 13:05:26'),
(73, 62, 22, 1, '25000', '2022-12-13 13:16:37'),
(74, 63, 22, 1, '25000', '2022-12-13 13:18:55'),
(75, 64, 22, 1, '25000', '2022-12-13 13:24:36'),
(76, 65, 17, 1, '149000', '2022-12-19 15:37:30'),
(77, 66, 21, 200, '1180000', '2022-12-19 16:39:51'),
(78, 67, 14, 49, '17395000', '2022-12-20 10:41:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_permissions`
--

CREATE TABLE `tbl_permissions` (
  `permission_id` int(11) NOT NULL,
  `permission_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `permission_url` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_permissions`
--

INSERT INTO `tbl_permissions` (`permission_id`, `permission_name`, `permission_url`) VALUES
(1, 'Sản phẩm | Danh mục | Danh sách', '\\?mod=products&controller=cate&action=index'),
(2, 'Sản phẩm | Danh mục | Thêm', '\\?mod=products&controller=cate&action=add'),
(3, 'Sản phẩm | Danh mục | Sửa', '\\?mod=products&controller=cate&action=update&id=\\d'),
(4, 'Sản phẩm | Danh mục | Xóa', '\\?mod=products&controller=cate&action=delete&id=\\d'),
(5, 'Sản phẩm | Danh Sách', '\\?mod=products&action=index'),
(6, 'Sản phẩm | Thêm', '\\?mod=products&action=add'),
(7, 'Sản phẩm | Sửa', '\\?mod=products&controller=index&action=update&id=\\d'),
(8, 'Sản phẩm | Xóa', '\\?mod=products&controller=index&action=delete&id=\\d'),
(9, 'Đơn vị sản phẩm | Danh sách', '\\?mod=products&controller=unit'),
(10, 'Đơn vị sản phẩm | Thêm', '\\?mod=products&controller=unit&action=add'),
(11, 'Đơn vị sản phẩm | Sửa', '\\?mod=products&controller=unit&action=update&id=\\d'),
(12, 'Đơn vị sản phẩm | Xóa', '\\?mod=products&controller=unit&action=delete&id=\\d'),
(13, 'Đánh giá sản phẩm | Danh sách', '\\?mod=products&controller=rating&action=index'),
(14, 'Đánh giá sản phẩm | Xóa', '\\?mod=products&controller=rating&action=delete&id=\\d'),
(15, 'Bài viết | Danh mục | Danh sách', '\\?mod=products&controller=cate&action=index'),
(16, 'Bài viết | Danh mục | Thêm', '\\?mod=products&controller=cate&action=add'),
(17, 'Bài viết | Danh mục | Sửa', '\\?mod=posts&controller=cate&action=update&id=\\d'),
(18, 'Bài viết | Danh mục | Xóa', '\\?mod=posts&controller=cate&action=delete&id=\\d'),
(19, 'Bài viết | Danh sách', '\\?mod=posts&action=index'),
(20, 'Bài viết | Thêm', '\\?mod=posts&action=add'),
(21, 'Bài viết | Sửa', '\\?mod=posts&controller=index&action=update&id=\\d'),
(22, 'Bài viết | Xóa', '\\?mod=posts&controller=index&action=delete&id=\\d'),
(23, 'Đơn hàng | Danh sách', '\\?mod=orders&action=index'),
(24, 'Đơn hàng | Chi tiết', '\\?mod=orders&action=detail&id=\\d'),
(25, 'Đơn hàng | Xóa', '\\?mod=orders&action=delete&id=\\d'),
(26, 'Nhà cung cấp | Danh sách', '\\?mod=suppliers&action=index'),
(27, 'Nhà cung cấp | Thêm', '\\?mod=suppliers&action=add'),
(28, 'Nhà cung cấp | Sửa', '\\?mod=suppliers&action=update&id=\\d'),
(29, 'Nhà cung cấp | Xóa', '\\?mod=suppliers&action=delete&id=\\d'),
(30, 'Nhập hàng | Danh sách', '\\?mod=import_goods&action=index'),
(31, 'Nhập hàng | Thêm', '\\?mod=import_goods&action=add'),
(32, 'Nhập hàng | Chi tiết nhập', '\\?mod=import_goods&action=detail&id=\\d'),
(33, 'Nhập hàng | Xóa', '\\?mod=import_goods&action=delete&id=\\d'),
(34, 'Nhập hàng | In hóa đơn nhập', '\\?mod=import_goods&action=prinf'),
(35, 'Đội ngũ Decor | Danh sách', '\\?mod=decor_service&action=index'),
(36, 'Đội ngũ Decor | Xóa', '\\?mod=decor_service&action=delete'),
(37, 'Phản hồi | Danh sách', '\\?mod=feedback&action=index'),
(38, 'Thống kê | Doanh thu', '\\?mod=chart'),
(39, 'Nhóm quyền | Danh sách', '\\?mod=privileges&action=index'),
(40, 'Nhóm quyền | Thêm ', '\\?mod=privileges&action=add'),
(41, 'Nhóm quyền | Cập nhật phân quyền', '\\?mod=privileges&action=update&id=\\d'),
(42, 'Nhóm quyền | Xóa', '\\?mod=privileges&action=delete&id=\\d'),
(43, 'Người dùng | Danh sách', '\\?mod=users&controller=team&action=index'),
(44, 'Người dùng | Thêm', '\\?mod=users&controller=team&action=add'),
(45, 'Người dùng | Sửa', '\\?mod=users&controller=team&action=update&id=\\d'),
(46, 'Người dùng | Xóa', '\\?mod=users&controller=team&action=delete&id=\\d');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `post_image` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `post_short_desc` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `post_detail` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` int(20) NOT NULL,
  `post_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post_cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_image`, `post_short_desc`, `post_detail`, `user_id`, `post_created_date`, `post_cate_id`) VALUES
(1, 'Mẫu thiết kế và cải tạo phòng ngủ sinh viên đẹp, đơn giản và tiết kiệm nhất', 'anhbaiviet4.png', 'Đối với mẫu phòng ngủ sinh viên thì tiêu chí hàng đầu khi thiết kế đó chính là tiết kiệm, đơn giản và đẹp. Nếu như bạn đang băn khoăn không biết nên chọn mẫu thiết kế phòng ngủ sinh viên nào đáp ứng được những tiêu chí ở trên, thì hãy cùng tham khảo gợi ý dưới đây nhé.', '<h2><b>C&aacute;ch cải tạo ph&ograve;ng trọ cũ</b></h2>\r\n\r\n<p>Để&nbsp;<b>cải tạo v&agrave; thiết kế lại ph&ograve;ng trọ&nbsp;</b>bạn c&oacute; thể tham khảo một số c&aacute;ch đơn giản dưới đ&acirc;y:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><b>T&iacute;nh to&aacute;n vật dụng trong ph&ograve;ng</b>: Ph&ograve;ng trọ sinh vi&ecirc;n thường c&oacute; diện t&iacute;ch kh&aacute; nhỏ, v&igrave; vậy bạn n&ecirc;n t&iacute;nh to&aacute;n để lựa chọn c&aacute;c vật dụng tiết kiệm tối đa kh&ocirc;ng gian. C&oacute; thể chia vật dụng trong ph&ograve;ng th&agrave;nh nh&oacute;m: Đồ d&ugrave;ng c&aacute; nh&acirc;n thiết yếu, vật dụng &iacute;t d&ugrave;ng v&agrave; đồ d&ugrave;ng kh&ocirc;ng c&ograve;n sử dụng.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><b>Tận dụng kh&ocirc;ng gian tối đa</b>: Khi biết c&aacute;ch tận dụng kh&ocirc;ng gian sẽ gi&uacute;p căn ph&ograve;ng ngủ của bạn trở n&ecirc;n tho&aacute;ng đ&atilde;ng hơn. Để l&agrave;m được điều n&agrave;y bạn c&oacute; thể sử dụng những m&oacute;n đồ nội thất nhỏ gọn v&agrave; n&ecirc;n d&ugrave;ng c&aacute;c loại kệ treo tường để tận dụng khoảng kh&ocirc;ng gian b&ecirc;n tr&ecirc;n. Ngo&agrave;i ra, bạn cũng c&oacute; thể tận dụng những &ldquo;g&oacute;c chết&rdquo; để chứa đồ d&ugrave;ng h&agrave;ng ng&agrave;y. Chẳng hạn như, ph&iacute;a dưới b&agrave;n học c&oacute; thể sử dụng để k&ecirc; kệ chứa đồ d&ugrave;ng sinh hoạt.</p>\r\n	</li>\r\n	<li>\r\n	<p><b>Sắp xếp đồ đạc gọn g&agrave;ng</b>: Khi&nbsp;<b>thiết kế ph&ograve;ng ngủ sinh vi&ecirc;n</b>&nbsp;bạn cũng n&ecirc;n sắp xếp đồ d&ugrave;ng sao cho gọn g&agrave;ng v&agrave; h&agrave;i h&ograve;a với tổng thể kh&ocirc;ng gian. V&iacute; dụ như: N&ecirc;n chọn loại giường ngủ gấp hay kh&ocirc;ng d&ugrave;ng giường hoặc k&ecirc; kệ s&aacute;ch cạnh với b&agrave;n học để tiết kiệm diện t&iacute;ch.</p>\r\n	</li>\r\n	<li>\r\n	<p><b>Tiết kiệm chi ph&iacute; với đồ second hand</b>: Đồ d&ugrave;ng nội thất thường c&oacute; gi&aacute; kh&aacute; cao, v&igrave; vậy bạn c&oacute; thể tận dụng đồ cũ. Tham khảo mua h&agrave;ng tr&ecirc;n những hội nh&oacute;m hay qua bạn b&egrave; giới thiệu để chọn được những m&oacute;n đồ gi&aacute; rẻ.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<section aria-label=\"image\">\r\n<p>&nbsp;</p>\r\n<img alt=\"Cách cải tạo phòng trọ cũ\" data-main-image=\"\" decoding=\"async\" loading=\"lazy\" sizes=\"(min-width: 720px) 720px, 100vw\" src=\"https://www.cleanipedia.com/images/5iwkm8ckyw6v/67WrqoimIEhNHwObrdD5gK/0873efb00aad8e115cba0e9fcd267d1b/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLjMzLmpwZw/720w-479h/c%C3%A1ch-c%E1%BA%A3i-t%E1%BA%A1o-ph%C3%B2ng-tr%E1%BB%8D-c%C5%A9.jpg\" srcset=\"https://www.cleanipedia.com/images/5iwkm8ckyw6v/67WrqoimIEhNHwObrdD5gK/0873efb00aad8e115cba0e9fcd267d1b/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLjMzLmpwZw/180w-120h/c%C3%A1ch-c%E1%BA%A3i-t%E1%BA%A1o-ph%C3%B2ng-tr%E1%BB%8D-c%C5%A9.jpg 180w,https://www.cleanipedia.com/images/5iwkm8ckyw6v/67WrqoimIEhNHwObrdD5gK/0873efb00aad8e115cba0e9fcd267d1b/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLjMzLmpwZw/360w-240h/c%C3%A1ch-c%E1%BA%A3i-t%E1%BA%A1o-ph%C3%B2ng-tr%E1%BB%8D-c%C5%A9.jpg 360w,https://www.cleanipedia.com/images/5iwkm8ckyw6v/67WrqoimIEhNHwObrdD5gK/0873efb00aad8e115cba0e9fcd267d1b/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLjMzLmpwZw/720w-479h/c%C3%A1ch-c%E1%BA%A3i-t%E1%BA%A1o-ph%C3%B2ng-tr%E1%BB%8D-c%C5%A9.jpg 720w\" title=\"Cách cải tạo phòng trọ cũ\" /></section>\r\n\r\n<h2><b>C&aacute;ch tiết kiệm kh&ocirc;ng gian ph&ograve;ng trọ</b></h2>\r\n\r\n<p>Khi&nbsp;<b>thiết kế ph&ograve;ng ngủ sinh vi&ecirc;n</b>&nbsp;bạn cũng c&oacute; thể tham khảo một số c&aacute;ch tiết kiệm kh&ocirc;ng gian ph&ograve;ng trọ cực hiệu quả dưới đ&acirc;y:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Tăng diện t&iacute;ch căn ph&ograve;ng với v&aacute;ch đa năng gi&uacute;p ph&acirc;n chia kh&ocirc;ng gian được khoa học v&agrave; dễ d&agrave;ng sắp xếp đồ d&ugrave;ng c&aacute; nh&acirc;n hợp l&yacute; nhất. B&ecirc;n cạnh đ&oacute; bạn c&oacute; thể chọn m&agrave;u sắc năng động gi&uacute;p căn ph&ograve;ng lu&ocirc;n tr&agrave;n ngập sức sống.</p>\r\n	</li>\r\n	<li>\r\n	<p>N&ecirc;n chọn những t&ocirc;ng m&agrave;u năng động như gam m&agrave;u trắng gi&uacute;p căn ph&ograve;ng được rộng r&atilde;i hơn. Hoặc t&ocirc;ng m&agrave;u v&agrave;ng mang tới sự tươi trẻ v&agrave; ngọt ng&agrave;o cho căn ph&ograve;ng.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Lựa chọn những m&oacute;n đồ nội thất tối giản vừa đảm bảo kh&ocirc;ng gian sống v&agrave; thuận tiện trong sinh hoạt h&agrave;ng ng&agrave;y. B&ecirc;n cạnh đ&oacute; bạn c&oacute; thể sử dụng những m&oacute;n đồ trang tr&iacute; như bức tranh đầy m&agrave;u sắc hoặc chậu c&acirc;y nhỏ.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Tận dụng t&ocirc;ng m&agrave;u s&aacute;ng cho ph&ograve;ng trọ như trắng s&aacute;ng vừa đảm bảo t&iacute;nh thẩm mỹ lại gi&uacute;p căn ph&ograve;ng th&ecirc;m rộng hơn. Ngo&agrave;i ra, c&oacute; thể chọn chất liệu gạch l&aacute;t, m&agrave;u sơn tường, trần nh&agrave; tươi s&aacute;ng cho căn ph&ograve;ng.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Sử dụng tủ kệ c&oacute; thiết kế th&ocirc;ng minh gi&uacute;p tiết kiệm kh&ocirc;ng gian vừa gi&uacute;p lưu trữ đồ đạc gọn g&agrave;ng lại đảm bảo kh&ocirc;ng gian sinh hoạt được thoải m&aacute;i nhất.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Tham khảo:&nbsp;<a href=\"https://www.cleanipedia.com/vn/trong-nha/4-cach-bo-tri-phong-ngu-nho-giup-tiet-kiem-khong-gian.html\">29 C&aacute;ch trang tr&iacute; decor ph&ograve;ng ngủ nhỏ từ 6m2 đẹp rộng m&aacute;t tiện nghi</a></p>\r\n\r\n<section aria-label=\"image\">\r\n<p>&nbsp;</p>\r\n<img alt=\"Cách tiết kiệm không gian phòng trọ\" data-main-image=\"\" decoding=\"async\" loading=\"lazy\" sizes=\"(min-width: 720px) 720px, 100vw\" src=\"https://www.cleanipedia.com/images/5iwkm8ckyw6v/3jyh1pxXK05uxC5bgxwwXr/96500fcab053e5f56ba5a7304ebfaeca/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi5qcGc/720w-416h/c%C3%A1ch-ti%E1%BA%BFt-ki%E1%BB%87m-kh%C3%B4ng-gian-ph%C3%B2ng-tr%E1%BB%8D.jpg\" srcset=\"https://www.cleanipedia.com/images/5iwkm8ckyw6v/3jyh1pxXK05uxC5bgxwwXr/96500fcab053e5f56ba5a7304ebfaeca/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi5qcGc/180w-104h/c%C3%A1ch-ti%E1%BA%BFt-ki%E1%BB%87m-kh%C3%B4ng-gian-ph%C3%B2ng-tr%E1%BB%8D.jpg 180w,https://www.cleanipedia.com/images/5iwkm8ckyw6v/3jyh1pxXK05uxC5bgxwwXr/96500fcab053e5f56ba5a7304ebfaeca/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi5qcGc/360w-208h/c%C3%A1ch-ti%E1%BA%BFt-ki%E1%BB%87m-kh%C3%B4ng-gian-ph%C3%B2ng-tr%E1%BB%8D.jpg 360w,https://www.cleanipedia.com/images/5iwkm8ckyw6v/3jyh1pxXK05uxC5bgxwwXr/96500fcab053e5f56ba5a7304ebfaeca/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi5qcGc/720w-416h/c%C3%A1ch-ti%E1%BA%BFt-ki%E1%BB%87m-kh%C3%B4ng-gian-ph%C3%B2ng-tr%E1%BB%8D.jpg 720w\" title=\"Cách tiết kiệm không gian phòng trọ\" /></section>\r\n\r\n<h2><b>Trang tr&iacute; ph&ograve;ng trọ sinh vi&ecirc;n với chi ph&iacute; tiết kiệm</b></h2>\r\n\r\n<p><b>Trang tr&iacute; ph&ograve;ng ngủ sinh vi&ecirc;n</b>&nbsp;tiết kiệm bạn c&oacute; thể tham khảo một số gợi &yacute; sau:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><b>Decor ph&ograve;ng trọ sinh vi&ecirc;n tone x&aacute;m</b>: Tone m&agrave;u x&aacute;m gi&uacute;p cho kh&ocirc;ng gian ph&ograve;ng ngủ vừa ấm c&uacute;ng, thanh lịch lại kh&ocirc;ng k&eacute;m phần sang trọng. Bạn c&oacute; thể kết hợp với đồ nội thất c&oacute; m&agrave;u sắc tương phản v&agrave; m&agrave;u sơn tường s&aacute;ng gi&uacute;p căn ph&ograve;ng th&ecirc;m nổi bật.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<section aria-label=\"image\">\r\n<p>&nbsp;</p>\r\n<img alt=\"Decor phòng trọ sinh viên tone xám\" data-main-image=\"\" decoding=\"async\" loading=\"lazy\" sizes=\"(min-width: 720px) 720px, 100vw\" src=\"https://www.cleanipedia.com/images/5iwkm8ckyw6v/4T8cvaaSZHFj5J4SXPi2Ar/033a3d1212219436fcfdc641e6d5fef3/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLmpwZw/720w-540h/decor-ph%C3%B2ng-tr%E1%BB%8D-sinh-vi%C3%AAn-tone-x%C3%A1m.jpg\" srcset=\"https://www.cleanipedia.com/images/5iwkm8ckyw6v/4T8cvaaSZHFj5J4SXPi2Ar/033a3d1212219436fcfdc641e6d5fef3/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLmpwZw/180w-135h/decor-ph%C3%B2ng-tr%E1%BB%8D-sinh-vi%C3%AAn-tone-x%C3%A1m.jpg 180w,https://www.cleanipedia.com/images/5iwkm8ckyw6v/4T8cvaaSZHFj5J4SXPi2Ar/033a3d1212219436fcfdc641e6d5fef3/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLmpwZw/360w-270h/decor-ph%C3%B2ng-tr%E1%BB%8D-sinh-vi%C3%AAn-tone-x%C3%A1m.jpg 360w,https://www.cleanipedia.com/images/5iwkm8ckyw6v/4T8cvaaSZHFj5J4SXPi2Ar/033a3d1212219436fcfdc641e6d5fef3/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLmpwZw/720w-540h/decor-ph%C3%B2ng-tr%E1%BB%8D-sinh-vi%C3%AAn-tone-x%C3%A1m.jpg 720w,https://www.cleanipedia.com/images/5iwkm8ckyw6v/4T8cvaaSZHFj5J4SXPi2Ar/033a3d1212219436fcfdc641e6d5fef3/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLmpwZw/1440w-1080h/decor-ph%C3%B2ng-tr%E1%BB%8D-sinh-vi%C3%AAn-tone-x%C3%A1m.jpg 1440w\" title=\"Decor phòng trọ sinh viên tone xám\" /></section>\r\n\r\n<ul>\r\n	<li>\r\n	<p><b>Decor ph&ograve;ng trọ sinh vi&ecirc;n c&oacute; g&aacute;c x&eacute;p</b>: Đ&acirc;y l&agrave; mẫu trang tr&iacute; quen thuộc được nhiều bạn sinh vi&ecirc;n y&ecirc;u th&iacute;ch. Với mẫu ph&ograve;ng c&oacute; g&aacute;c x&eacute;p gi&uacute;p tận dụng khoảng kh&ocirc;ng gian b&ecirc;n tr&ecirc;n, c&oacute; thể sử dụng 2 ph&ograve;ng ngủ hoặc để chứa đồ. Với&nbsp;<b>decor ph&ograve;ng ngủ sinh vi&ecirc;n</b>&nbsp;n&agrave;y sẽ gi&uacute;p bạn tiết kiệm được một khoản chi ph&iacute; nữa đấy!</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Tham khảo:&nbsp;<a href=\"https://www.cleanipedia.com/vn/trong-nha/thiet-ke-phong-ngu.html\">Tổng hợp c&aacute;c mẫu thiết kế nội thất ph&ograve;ng ngủ Đẹp, Đơn Giản, Hiện Đại</a></p>\r\n\r\n<section aria-label=\"image\">\r\n<p>&nbsp;</p>\r\n<img alt=\"Decor phòng trọ sinh viên có gác xép\" data-main-image=\"\" decoding=\"async\" loading=\"lazy\" sizes=\"(min-width: 720px) 720px, 100vw\" src=\"https://www.cleanipedia.com/images/5iwkm8ckyw6v/7GOua2DzrpeYXjXHyLZ8Iz/e401fb1a9b32b30b90fd347a947cea75/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLjIuanBn/720w-430h/decor-ph%C3%B2ng-tr%E1%BB%8D-sinh-vi%C3%AAn-c%C3%B3-g%C3%A1c-x%C3%A9p.jpg\" srcset=\"https://www.cleanipedia.com/images/5iwkm8ckyw6v/7GOua2DzrpeYXjXHyLZ8Iz/e401fb1a9b32b30b90fd347a947cea75/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLjIuanBn/180w-108h/decor-ph%C3%B2ng-tr%E1%BB%8D-sinh-vi%C3%AAn-c%C3%B3-g%C3%A1c-x%C3%A9p.jpg 180w,https://www.cleanipedia.com/images/5iwkm8ckyw6v/7GOua2DzrpeYXjXHyLZ8Iz/e401fb1a9b32b30b90fd347a947cea75/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLjIuanBn/360w-215h/decor-ph%C3%B2ng-tr%E1%BB%8D-sinh-vi%C3%AAn-c%C3%B3-g%C3%A1c-x%C3%A9p.jpg 360w,https://www.cleanipedia.com/images/5iwkm8ckyw6v/7GOua2DzrpeYXjXHyLZ8Iz/e401fb1a9b32b30b90fd347a947cea75/dGhpZXQta2UtcGhvbmctbmd1LXNpbmgtdmllbi0xLjIuanBn/720w-430h/decor-ph%C3%B2ng-tr%E1%BB%8D-sinh-vi%C3%AAn-c%C3%B3-g%C3%A1c-x%C3%A9p.jpg 720w\" title=\"Decor phòng trọ sinh viên có gác xép\" /></section>\r\n\r\n<section aria-label=\"image\">&nbsp;</section>\r\n', 1, '2022-12-13 13:41:49', 1),
(2, 'Bật mí 6 cách trang trí phòng trọ đơn giản mà cực kỳ đẹp và tinh tế', 'baiviet5.jpg', 'Khi nhắc đến nhà trọ của sinh viên và những công nhân viên sống xa quê, nhiều người sẽ nghĩ đến những căn phòng trọ nhỏ hẹp, xấu xí và không sạch sẽ. Thế nhưng bạn hoàn toàn có thể cải tạo chúng trở nên sinh động hơn với các gợi ý về cách trang trí phòng trọ dưới đây của Saigon Express.\r\n\r\nTạm biệt những hình ảnh xấu xí về căn phòng trọ chật hẹp. Thay vào đó, mọi người sẽ phải trầm trồ bởi hình ảnh phòng trọ hoàn toàn mới mẻ, không gian được bày biện tinh tế, thông thoáng và đẹp đẽ không kém gì các căn hộ thu nhỏ.', '<h2 dir=\"ltr\"><strong>1. C&Aacute;CH TRANG TR&Iacute; PH&Ograve;NG TRỌ</strong></h2>\r\n\r\n<p dir=\"ltr\">Hiện nay nhu cầu thu&ecirc; trọ của sinh vi&ecirc;n v&agrave; c&ocirc;ng nh&acirc;n tại c&aacute;c th&agrave;nh phố lớn rất cao. Để đ&aacute;p ứng nhu cầu đ&oacute;, c&aacute;c ph&ograve;ng trọ mọc l&ecirc;n khắp nơi. Tuy nhi&ecirc;n v&igrave; &ldquo;tất đất tất v&agrave;ng&rdquo; v&agrave; diện t&iacute;ch đất tại th&agrave;nh thị c&oacute; hạn n&ecirc;n c&aacute;c chủ nh&agrave; thường x&acirc;y dựng c&aacute;c ph&ograve;ng trọ nhỏ gọn. Với diện t&iacute;ch dao động từ 9 đến 30 m&eacute;t vu&ocirc;ng. Diện t&iacute;ch c&agrave;ng lớn, đồng nghĩa với gi&aacute; tiền cũng c&agrave;ng cao.</p>\r\n\r\n<p dir=\"ltr\">V&igrave; kh&ocirc;ng gian ph&ograve;ng trọ nhỏ n&ecirc;n rất dễ bị b&iacute; b&aacute;ch v&agrave; chật hẹp nếu bạn kh&ocirc;ng biết cải tạo ph&ograve;ng trọ, b&agrave;y tr&iacute; ph&ograve;ng trọ, sắp xếp đồ đạc kh&ocirc;ng khoa học. Tuy nhi&ecirc;n, bạn cũng kh&ocirc;ng cần qu&aacute; lo lắng, dưới đ&acirc;y l&agrave; 6&nbsp;<strong>c&aacute;ch trang tr&iacute; ph&ograve;ng trọ nhỏ</strong>&nbsp;hẹp gi&uacute;p nơi ở của bạn trở n&ecirc;n tuyệt vời hơn.</p>\r\n\r\n<h3><strong>1.1. C&aacute;ch trang tr&iacute; ph&ograve;ng trọ bằng giấy d&aacute;n tường</strong></h3>\r\n\r\n<p><strong><img alt=\"\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/Trang-tri-phong-tro-bang-giay-dan-tuong.jpg\" /></strong></p>\r\n\r\n<p>Theo thời gian, c&aacute;c ph&ograve;ng trọ sẽ dần xuất hiện những vết t&iacute;ch hoen m&agrave;u của những người đ&atilde; thu&ecirc; trước. Những vết t&iacute;ch n&agrave;y sẽ l&agrave;m cho căn ph&ograve;ng trở n&ecirc;n cũ kỹ v&agrave; xấu x&iacute;.</p>\r\n\r\n<p>C&aacute;ch giải quyết truyền thống để x&oacute;a hết những dấu vết n&agrave;y l&agrave; sơn lại tường. Tuy nhi&ecirc;n, sơn tường lại tốn kh&aacute; nhiều chi ph&iacute; v&agrave; mất nhiều thời gian. Một gợi &yacute; thay thế v&agrave; kh&aacute; hiệu quả cho bạn l&agrave; sử dụng giấy d&aacute;n tường. Sau đ&acirc;y l&agrave; 4 l&yacute; do bạn n&ecirc;n sử dụng giấy d&aacute;n tường ph&ograve;ng trọ để thay thế việc sơn tường:</p>\r\n\r\n<p dir=\"ltr\">+ Thứ nhất: Chi ph&iacute; cho việc d&ugrave;ng giấy d&aacute;n tường ph&ograve;ng trọ sẽ rẻ hơn d&ugrave;ng sơn trong việc trang tr&iacute; lại hay sửa ph&ograve;ng trọ.</p>\r\n\r\n<p dir=\"ltr\">+ Thứ hai: Nếu bạn d&ugrave;ng sơn th&igrave; sau n&agrave;y muốn thay đổi m&agrave;u kh&aacute;c, ch&uacute;ng ta lại phải sơn một lớp l&oacute;t v&agrave; sơn m&agrave;u mới. Việc n&agrave;y mất qu&aacute; nhiều thời gian v&agrave; chi ph&iacute; khi sơn lại. C&ograve;n nếu bạn sử dụng giấy d&aacute;n tường th&igrave; lại rất nhanh gọn v&agrave; tiện dụng. Chỉ cần x&eacute; bỏ giấy cũ v&agrave; thay bằng giấy mới, thế l&agrave; xong.</p>\r\n\r\n<p dir=\"ltr\">+ Thứ ba: Sơn tường chắc chắn sẽ khiến sơn vấy ra s&agrave;n nh&agrave; hoặc đồ đạc. Sau khi cải tạo ph&ograve;ng trọ, đ&ograve;i hỏi bạn phải vất vả hơn khi vệ sinh, dọn dẹp. Trong khi đ&oacute; sử dụng giấy d&aacute;n tường đơn giản v&agrave; sạch sẽ hơn rất nhiều.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">+ Thứ tư: Khi trang tr&iacute; ph&ograve;ng trọ bằng giấy d&aacute;n tường, kh&ocirc;ng gian căn ph&ograve;ng sẽ sinh động, m&agrave;u sắc hơn. Bởi giấy d&aacute;n tường c&oacute; rất nhiều mẫu m&atilde; c&oacute; hoa văn đa dạng như hoa l&aacute;, c&acirc;y cỏ&hellip;để bạn chọn lựa</p>\r\n\r\n<p dir=\"ltr\"><strong>Lưu &yacute; khi trang tr&iacute; ph&ograve;ng trọ bằng giấy d&aacute;n tường:&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Về m&agrave;u sắc</strong>: Gam m&agrave;u th&iacute;ch hợp &quot;giải cứu&quot; cho ph&ograve;ng trọ chật dẹp l&agrave; gam m&agrave;u s&aacute;ng hay trung t&iacute;nh như trắng, xanh nhạt, v&agrave;ng, kem,... Những m&agrave;u sắc n&agrave;y gi&uacute;p tạo cảm gi&aacute;c tho&aacute;ng đ&atilde;ng, rộng r&atilde;i hơn. C&aacute;c m&agrave;u đỏ, x&aacute;m, m&agrave;u đậm dễ khiến căn ph&ograve;ng t&ugrave; t&uacute;ng chật hẹp hơn.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Về hoạ tiết</strong>: Mẹo vặt ph&ograve;ng trọ&nbsp;c&oacute; cảm gi&aacute;c rộng hơn nếu sử dụng họa tiết sọc ngang, tuy nhi&ecirc;n khiến trần nh&agrave; c&oacute; vẻ thấp. Trong khi đ&oacute;, d&aacute;n tường ph&ograve;ng trọ đẹp với họa tiết sọc dọc sẽ gi&uacute;p căn ph&ograve;ng tr&ocirc;ng cao hơn. V&agrave; đặc biệt bạn n&ecirc;n nhớ, trang tr&iacute; ph&ograve;ng trọ nhỏ hẹp n&ecirc;n ưu ti&ecirc;n c&aacute;c hoa văn nhỏ nhắn vừa phải. V&igrave; hoa văn to bản hoặc qu&aacute; cầu kỳ sẽ l&agrave;m ph&ograve;ng trọ bị hẹp đi.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3 dir=\"ltr\"><strong>1.2. C&aacute;ch trang tr&iacute; ph&ograve;ng trọ bằng khung ảnh, tranh treo</strong></h3>\r\n\r\n<p dir=\"ltr\"><strong><img alt=\"Cách trang trí nhà trọ bằng tranh treo khung ảnh\" id=\"Cách trang trí nhà trọ bằng tranh treo khung ảnh\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/C%C3%A1ch%20trang%20tr%C3%AD%20nh%C3%A0%20tr%E1%BB%8D%20b%E1%BA%B1ng%20tranh%20treo%20khung%20%E1%BA%A3nh\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/trang-tri-phong-tro-bang-khung-anh.jpg\" title=\"Cách trang trí nhà trọ bằng tranh treo khung ảnh\" /></strong></p>\r\n\r\n<p dir=\"ltr\">Một c&aacute;ch trang tr&iacute; ph&ograve;ng trọ đơn giản m&agrave; mang yếu tố s&aacute;ng tạo v&agrave; thẩm mỹ cao, ph&ugrave; hợp cả với thiết kế căn hộ mini 10m2 đ&oacute; l&agrave; sử dụng khung ảnh, tranh treo. Việc sử dụng c&aacute;c khung ảnh chứa h&igrave;nh c&aacute; nh&acirc;n, gia đ&igrave;nh, bạn b&egrave;, cảnh vật để trang tr&iacute; mang đến sự ấm &aacute;p, gần gũi.</p>\r\n\r\n<p dir=\"ltr\">B&ecirc;n cạnh đ&oacute;, c&aacute;c c&aacute;ch bố tr&iacute; ph&ograve;ng trọ đẹp khuy&ecirc;n bạn n&ecirc;n&nbsp;sử dụng những bức tranh m&agrave; m&igrave;nh y&ecirc;u th&iacute;ch để che khuất c&aacute;c khoảng trống v&agrave; che những vết ố tr&ecirc;n tường.</p>\r\n\r\n<p dir=\"ltr\">Tương tự như lựa chọn giấy d&aacute;n tường, makeover ph&ograve;ng trọ bằng khung ảnh hay tranh treo trong ph&ograve;ng trọ nhỏ n&ecirc;n c&oacute; m&agrave;u sắc s&aacute;ng sủa v&agrave; k&iacute;ch thước vừa phải. Như vậy mới tạo n&ecirc;n sự h&agrave;i h&ograve;a v&agrave; sinh động.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>1.3. C&aacute;ch trang tr&iacute; ph&ograve;ng trọ bằng r&egrave;m cửa</strong></h3>\r\n\r\n<p dir=\"ltr\"><strong><img alt=\"Cách trang trí nhà trọ bằng rèm cửa\" id=\"Cách trang trí nhà trọ bằng rèm cửa\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/C%C3%A1ch%20trang%20tr%C3%AD%20nh%C3%A0%20tr%E1%BB%8D%20b%E1%BA%B1ng%20r%C3%A8m%20c%E1%BB%ADa\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/Trang-tri-phong-tro-bang-rem-cua.jpg\" title=\"Cách trang trí nhà trọ bằng rèm cửa\" /></strong></p>\r\n\r\n<p dir=\"ltr\">C&aacute;ch trang tr&iacute; ph&ograve;ng trọ nhỏ kh&ocirc;ng g&aacute;c với &ocirc; cửa sổ kh&aacute; lớn hay trang tr&iacute; ph&ograve;ng trọ kiểu H&agrave;n Quốc thường sử dụng một tấm r&egrave;m hoạ tiết nhỏ b&ecirc;n cửa sổ, kết hợp hai nơ nhỏ, dễ thương để&nbsp;gi&uacute;p cho kh&ocirc;ng gian ph&ograve;ng trọ đẹp hơn!&nbsp;Bạn kh&ocirc;ng cần mua c&aacute;c r&egrave;m cửa sổ với c&aacute;c họa tiết cầu kỳ, chất liệu phải xịn hay được may qu&aacute; kiểu c&aacute;ch.</p>\r\n\r\n<p dir=\"ltr\">Bạn c&oacute; thể mua vải v&agrave; may theo sở th&iacute;ch của m&igrave;nh. C&oacute; rất nhiều loại vải với hoa văn, mẫu m&atilde; v&agrave; kiểu d&aacute;ng để bạn tha hồ s&aacute;ng tạo. Chiếc r&egrave;m &ldquo;chất như nước cất&rdquo; sẽ g&oacute;p phần tạo điểm nhấn khi bước v&agrave;o ph&ograve;ng trọ của bạn. Nhưng nhớ chỉ n&ecirc;n chọn r&egrave;m cửa c&oacute; họa tiết v&agrave; m&agrave;u sắc s&aacute;ng sủa, tươi vui nh&eacute;!</p>\r\n\r\n<h3 dir=\"ltr\"><strong>1.4. C&aacute;ch trang tr&iacute; ph&ograve;ng trọ bằng c&acirc;y xanh</strong></h3>\r\n\r\n<p dir=\"ltr\"><strong><img alt=\"Cách trang trí nhà trọ bằng cây xanh\" id=\"Cách trang trí nhà trọ bằng cây xanh\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/C%C3%A1ch%20trang%20tr%C3%AD%20nh%C3%A0%20tr%E1%BB%8D%20b%E1%BA%B1ng%20c%C3%A2y%20xanh\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/Trang-tri-phong-tr%E1%BB%8D-bang-cay-xanh.jpg\" title=\"Cách trang trí nhà trọ bằng cây xanh\" /></strong></p>\r\n\r\n<p dir=\"ltr\">C&acirc;y xanh cũng l&agrave; một &yacute; tưởng hay để trang tr&iacute; ph&ograve;ng trọ. Bởi kh&ocirc;ng chỉ gi&uacute;p thanh lọc kh&ocirc;ng kh&iacute;, c&acirc;y xanh c&ograve;n tạo n&ecirc;n vẻ đẹp kh&aacute;c biệt cho kh&ocirc;ng gian ph&ograve;ng trọ. Chỉ một d&acirc;y leo b&ecirc;n cửa sổ, chậu c&acirc;y đặt trong g&oacute;c tường,... cũng đ&atilde; mang m&agrave;u xanh m&aacute;t từ thi&ecirc;n nhi&ecirc;n v&agrave;o căn ph&ograve;ng trọ của bạn.</p>\r\n\r\n<p dir=\"ltr\">Với những ph&ograve;ng trọ g&aacute;c lửng đẹp, bạn c&oacute; thể chọn c&acirc;y lưỡi hổ, sen đ&aacute; hoặc trầu b&agrave; để đỡ tốn thời gian chăm s&oacute;c. Ngo&agrave;i ra bạn c&oacute; thể tham khảo&nbsp;<a href=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/cay-trong-phong-thuy-nha-moi-806\" target=\"_blank\"><strong>c&aacute;c c&acirc;y trồng phong thủy</strong>&nbsp;</a>&nbsp;để chọn ra loại c&acirc;y hợp với tuổi mệnh để bố tr&iacute; ph&ograve;ng trọ nhỏ tho&aacute;ng m&aacute;t hơn.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>1.5. C&aacute;ch trang tr&iacute; ph&ograve;ng trọ bằng việc sắp xếp ngăn nắp, gọn g&agrave;ng</strong></h3>\r\n\r\n<p dir=\"ltr\">Việc sắp xếp đồ đạc trong ph&ograve;ng trọ gọn g&agrave;ng ngăn nắp cũng gi&uacute;p căn ph&ograve;ng tho&aacute;ng m&aacute;t v&agrave; rộng r&atilde;i hơn. Chỉ n&ecirc;n mua sắm v&agrave; sử dụng những vật dụng, thiết bị cần thiết. Khi bắt đầu trang tr&iacute; ph&ograve;ng trọ bạn n&ecirc;n kiểm trả lại tất cả đồ đạc, vật dụng m&igrave;nh đang c&oacute; v&agrave; chia th&agrave;nh 3 nh&oacute;m để tiện sắp xếp :</p>\r\n\r\n<p dir=\"ltr\">+ Nh&oacute;m 1: Những đồ đạc sử dụng thường xuy&ecirc;n v&agrave; c&ograve;n gi&aacute; trị như: quần &aacute;o, mỹ phẩm, s&aacute;ch&hellip; n&ecirc;n sắp xếp nơi dễ thấy để sử dụng hằng ng&agrave;y.</p>\r\n\r\n<p dir=\"ltr\">+ Nh&oacute;m 2: Những đồ đạc &iacute;t khi sử dụng như chăn nhung m&ugrave;a đ&ocirc;ng, quần &aacute;o m&ugrave;a đ&ocirc;ng,... bạn n&ecirc;n xếp ch&uacute;ng v&agrave;o tủ v&agrave; c&aacute;c th&ugrave;ng carton để căn ph&ograve;ng trọ gọn g&agrave;ng v&agrave; tiết kiệm diện t&iacute;ch hơn.</p>\r\n\r\n<p dir=\"ltr\">+ Nh&oacute;m 3: Những đồ đạc đ&atilde; cũ v&agrave; kh&ocirc;ng c&ograve;n sử dụng như: b&aacute;o cũ, s&aacute;ch cũ, tờ rơi, điện thoại hư, &aacute;o quần cũ kh&ocirc;ng mặc...n&ecirc;n bỏ đi hoặc t&igrave;m&nbsp;<strong><a href=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/mot-so-cach-giup-ban-thanh-ly-do-chuyen-nha-hieu-qua-757\" target=\"_blank\">c&aacute;ch thanh l&yacute; đồ cũ</a>&nbsp;</strong>để kh&ocirc;ng gian ph&ograve;ng trọ ngăn nắp hơn.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>1.6 C&aacute;ch trang tr&iacute; ph&ograve;ng trọ bằng những vật trang tr&iacute; t&aacute;i chế</strong></h3>\r\n\r\n<p dir=\"ltr\"><strong><img alt=\"Cách trang trí nhà trọ bằng đồ tái chế\" id=\"Cách trang trí nhà trọ bằng đồ tái chế\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/C%C3%A1ch%20trang%20tr%C3%AD%20nh%C3%A0%20tr%E1%BB%8D%20b%E1%BA%B1ng%20%C4%91%E1%BB%93%20t%C3%A1i%20ch%E1%BA%BF\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/Trang-tri-phong-tro-bang-vat-lieu-tai-che.jpg\" title=\"Cách trang trí nhà trọ bằng đồ tái chế\" /></strong></p>\r\n\r\n<p dir=\"ltr\">Để tạo n&ecirc;n một ph&ograve;ng trọ c&aacute; t&iacute;nh v&agrave; đẹp mắt hơn, bạn c&oacute; thể tận dụng hết c&aacute;c kh&ocirc;ng gian trống của ph&ograve;ng để treo v&agrave; sắp xếp những vật dụng handmade bạn tự l&agrave;m.</p>\r\n\r\n<p dir=\"ltr\">Bạn c&oacute; thể tạo ra những m&oacute;n đồ trang tr&iacute; ph&ograve;ng trọ đẹp hơn bằng việc t&aacute;i chế c&aacute;c đồ vật cũ như: ống snack th&agrave;nh hộp đựng b&uacute;t, chiếc chiếc ly cũ th&agrave;nh c&aacute;c chậu để trồng c&acirc;y, những chiếc &aacute;o cũ tạo th&agrave;nh chiếc t&uacute;i đựng mỹ phẩm,... Đừng qu&ecirc;n tham khảo th&ecirc;m<strong>&nbsp;<a href=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/meo-tai-che-do-cu-khi-chuyen-ve-nha-moi-596\" target=\"_blank\">16 mẹo t&aacute;i chế đồ cũ cực hay</a></strong>, hay&nbsp;<strong><a href=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/cach-tai-che-chai-nhua-thanh-do-dung-trong-nha-1504923201-618\" target=\"_blank\">42&nbsp;c&aacute;ch t&aacute;i chế chai nhựa th&agrave;nh đồ d&ugrave;ng trong nh&agrave;</a></strong>.</p>\r\n\r\n<h2 dir=\"ltr\"><strong>2. VẬT DỤNG, NỘI THẤT TRANG TR&Iacute; PH&Ograve;NG TRỌ</strong></h2>\r\n\r\n<p dir=\"ltr\">Với đặc trưng của c&aacute;c thiết kế ph&ograve;ng trọ l&agrave; diện t&iacute;ch nhỏ hẹp chật chội th&igrave; việc lựa chọn vật dụng, nội thất cần hết sức tinh tế. Bởi phải vừa gọn g&agrave;ng tiết kiệm kh&ocirc;ng gian nhưng vẫn phải đảm bảo t&iacute;nh thẩm mỹ. H&atilde;y bắt đầu từ việc chọn cho m&igrave;nh những vật dụng, nội thất trang tr&iacute; ph&ograve;ng trọ sau đ&acirc;y:</p>\r\n\r\n<p dir=\"ltr\">+&nbsp;<strong>Giường ngủ:</strong>&nbsp;Bạn n&ecirc;n chọn loại giường thấp, kiểu r&aacute;p giường v&agrave; k&egrave;m theo một chiếc đệm d&agrave;y v&agrave; ga trải giường m&agrave;u s&aacute;ng. Chọn giường thấp gi&uacute;p cho căn ph&ograve;ng của bạn cao r&aacute;o tho&aacute;ng đ&atilde;ng hơn.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">+&nbsp;<strong>Tủ quần &aacute;o:&nbsp;</strong>Chọn những chiếc tủ vừa vặn với ph&ograve;ng trọ của bạn. Kh&ocirc;ng n&ecirc;n sử dụng c&aacute;c chiếc tủ qu&aacute; lớn, họa tiết qu&aacute; nhiều g&acirc;y cảm gi&aacute;c rối mắt khi v&agrave;o ph&ograve;ng. N&ecirc;n chọn những chiếc tủ c&oacute; họa tiết đơn giản hoặc l&agrave;&nbsp; những chiếc tủ trơn kh&ocirc;ng c&oacute; họa tiết.</p>\r\n\r\n<p dir=\"ltr\">+<strong>&nbsp;B&agrave;n học:</strong>&nbsp;Bạn n&ecirc;n chọn c&aacute;c mẫu b&agrave;n học c&oacute; gi&aacute; s&aacute;ch đi k&egrave;m tr&ecirc;n mặt b&agrave;n. Việc n&agrave;y sẽ gi&uacute;p bạn c&oacute; th&ecirc;m kh&ocirc;ng gian bố tr&iacute; c&aacute;c vật dụng như đ&egrave;n học, khung ảnh nhỏ, một chậu c&acirc;y nhỏ xinh xinh tr&ecirc;n b&agrave;n. Ngo&agrave;i ra gi&aacute; s&aacute;ch cũng sẽ tạo sự thuận tiện cho việc lấy v&agrave; cất giữ s&aacute;ch hơn.</p>\r\n\r\n<p dir=\"ltr\">+&nbsp;<strong>Bếp ăn:</strong>&nbsp;Nếu bạn chỉ ở một m&igrave;nh th&igrave; chỉ cần một chiếc bếp ga đơn, c&ograve;n 3 người trở l&ecirc;n n&ecirc;n chọn bếp ga đ&ocirc;i lớn. B&ecirc;n cạnh đ&oacute; bạn cũng n&ecirc;n mua th&ecirc;m một chiếc kệ bếp mini để sắp xếp c&aacute;c vật dụng l&agrave;m bếp ngăn nắp v&agrave; dễ t&igrave;m kiếm khi cần. K&egrave;m theo đ&oacute; l&agrave; c&aacute;c vật dụng th&ecirc;m như ch&eacute;n, đĩa, xoong nồi, th&igrave;a, đũa,&hellip;.</p>\r\n\r\n<p dir=\"ltr\">Ngo&agrave;i những vật dụng, nội thất ph&ograve;ng trọ cơ bản n&ecirc;u tr&ecirc;n, nếu bạn muốn ph&ograve;ng trọ đầy đủ v&agrave; tiện nghi hơn nữa th&igrave; c&oacute; thể c&acirc;n nhắc mua th&ecirc;m tivi, b&agrave;n ghế, tủ lạnh, m&aacute;y giặt,...&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><strong>*** Những lưu &yacute; khi chọn vật dụng, nội thất để trang tr&iacute; ph&ograve;ng trọ:</strong></p>\r\n\r\n<p dir=\"ltr\">+&nbsp; Chọn những nội thất s&aacute;ng m&agrave;u để tăng độ s&aacute;ng v&agrave; tạo cảm gi&aacute;c rộng cho căn ph&ograve;ng bạn. Tr&aacute;nh chọn những vật dụng, nội thất tối m&agrave;u để trang tr&iacute; căn ph&ograve;ng trọ sẽ l&agrave;m cho kh&ocirc;ng gian tối lại.</p>\r\n\r\n<p dir=\"ltr\">+ N&ecirc;n tận dụng đồ đạc, vật dụng đa chức năng để ph&ograve;ng trọ gọn g&agrave;ng v&agrave; kh&ocirc;ng qu&aacute; nhiều vật dụng g&acirc;y lộn xộn v&agrave; mất thẩm mỹ.</p>\r\n\r\n<p dir=\"ltr\">+ Giảm họa tiết tr&ecirc;n đồ nội thất sẽ gi&uacute;p ph&ograve;ng trọ c&acirc;n đối, kh&ocirc;ng bị rối mắt v&igrave; qu&aacute; sặc sỡ.</p>\r\n\r\n<p dir=\"ltr\">+ Nếu ph&ograve;ng trọ bạn c&oacute; ban c&ocirc;ng, h&atilde;y tận dụng lắp một chiếc tấm chắn để nấu ăn ở ngo&agrave;i ban c&ocirc;ng để m&ugrave;i thức ăn kh&ocirc;ng b&aacute;m v&agrave;o quần &aacute;o hay bầu kh&ocirc;ng kh&iacute; của căn ph&ograve;ng.</p>\r\n\r\n<p dir=\"ltr\">+ N&ecirc;n chọn những vật dụng, nội thất cần thiết v&agrave; c&oacute; k&iacute;ch thước ph&ugrave; hợp với nh&agrave; trọ của bạn. Tr&aacute;nh chọn k&iacute;ch thước qu&aacute; lớn l&agrave;m kh&ocirc;ng gian ph&ograve;ng trọ trở n&ecirc;n chật hẹp.</p>\r\n\r\n<p dir=\"ltr\"><strong>C&Oacute; THỂ BẠN QUAN T&Acirc;M:&nbsp;&nbsp;<a href=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/cac-khu-vuc-tap-trung-nhieu-nha-tro-gia-re-tai-sai-gon-771\" target=\"_blank\">C&aacute;c khu vực tập trung nhiều nh&agrave; trọ gi&aacute; rẻ tại S&agrave;i G&ograve;n</a></strong></p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/kinh-nghiem-tim-thue-nha-tro-815\" target=\"_blank\"><strong>9 kinh nghiệm t&igrave;m thu&ecirc; nh&agrave; trọ bạn cần biết để tr&aacute;nh &quot;tiền mất tật mang&quot;</strong></a></p>\r\n\r\n<h2 dir=\"ltr\"><strong>3. C&Aacute;CH SẮP XẾP C&Aacute;C PH&Ograve;NG TRỌ C&Oacute; K&Iacute;CH THƯỚC KH&Aacute;CH NHAU</strong></h2>\r\n\r\n<p dir=\"ltr\">Hiện nay, c&oacute; nhiều thiết kế ph&ograve;ng trọ từ 9m2, 10m2, 15m2, 20m2 cho tới 40m, 50m2 cao cấp. Với những ph&ograve;ng trọ c&oacute; lớn như 40m, 50m2 th&igrave; việc trang tr&iacute; ph&ograve;ng trọ c&oacute; thể dễ d&agrave;ng hơn bởi rộng r&atilde;i v&agrave; c&oacute; c&aacute;c ph&ograve;ng ph&acirc;n chia r&otilde; rệt. Nhưng đối với c&aacute;c thiết kế ph&ograve;ng trọ nhỏ hẹp th&igrave; kh&ocirc;ng gian sinh hoạt thường hạn chế. Nhưng bạn ho&agrave;n to&agrave;n c&oacute; thể cải thiện bằng c&aacute;c c&aacute;ch bố tr&iacute; ph&ograve;ng trọ cho sinh vi&ecirc;n, c&ocirc;ng nh&acirc;n trở th&agrave;nh một ph&ograve;ng trọ lung linh v&agrave; tiện nghi hơn:</p>\r\n\r\n<h3 dir=\"ltr\"><strong>3.1. C&aacute;ch bố tr&iacute; ph&ograve;ng trọ 9m2 đơn giản v&agrave; gọn g&agrave;ng</strong></h3>\r\n\r\n<p dir=\"ltr\">Ph&ograve;ng trọ với diện t&iacute;ch 9m2 khi nh&igrave;n v&agrave;o qu&aacute; nhỏ, b&iacute; b&aacute;ch, chật chội v&agrave; kh&ocirc;ng th&ocirc;ng tho&aacute;ng. Vậy l&agrave;m c&aacute;ch n&agrave;o để trang tr&iacute; căn ph&ograve;ng trở n&ecirc;n đẹp v&agrave; th&ocirc;ng tho&aacute;ng hơn?</p>\r\n\r\n<p dir=\"ltr\">Việc đầu ti&ecirc;n bạn cần l&agrave;m để thiết kế ph&ograve;ng trọ 9m2 l&agrave; dọn ph&ograve;ng, loại bỏ những đồ d&ugrave;ng kh&ocirc;ng cần thiết. Tiếp theo bạn l&agrave;m sạch tường v&agrave; d&ugrave;ng giấy d&aacute;n tường bằng những gam m&agrave;u s&aacute;ng để gi&uacute;p căn ph&ograve;ng s&aacute;ng sủa v&agrave; sạch sẽ. Bạn chọn những đồ d&ugrave;ng, nội thất cần thiết để bố tr&iacute; trong căn ph&ograve;ng trọ trở n&ecirc;n tuyệt vời hơn. Nếu bạn l&agrave; sinh vi&ecirc;n c&oacute; thể chọn mua những vật dụng c&oacute; k&iacute;ch thước nhỏ như: kệ s&aacute;ch treo tường mini, kệ bếp mini, giường ngủ gi&aacute; rẻ sinh vi&ecirc;n, ...</p>\r\n\r\n<h3 dir=\"ltr\"><strong>3.2. C&aacute;ch bố tr&iacute; ph&ograve;ng trọ 10m2 sạch sẽ v&agrave; th&ocirc;ng tho&aacute;ng</strong></h3>\r\n\r\n<p dir=\"ltr\">Thiết kế ph&ograve;ng trọ 10m2 ph&ugrave; hợp với một người ở, kh&ocirc;ng c&ograve;n xa lạ với sinh vi&ecirc;n v&agrave; c&ocirc;ng nh&acirc;n vi&ecirc;n c&oacute; thu nhập thấp. Tương tự như ph&ograve;ng trọ 9m2, đầu ti&ecirc;n bạn n&ecirc;n l&agrave;m l&agrave; dọn dẹp căn ph&ograve;ng, cạo bỏ lớp tường sơn cũ tr&ecirc;n tường, vệ sinh ph&ograve;ng sạch sẽ. Tiến đến bạn n&ecirc;n chọn c&aacute;c tờ giấy d&aacute;n tường m&agrave;u trắng để che đi những bức tường cũ kỹ. Nếu ph&ograve;ng c&oacute; cửa sổ, h&atilde;y trang tr&iacute; th&ecirc;m những chiếc r&egrave;m cửa để căn ph&ograve;ng đẹp hơn. H&atilde;y chọn những vật dụng, nội thất cho căn ph&ograve;ng cũng c&oacute; k&iacute;ch thước nhỏ để ph&ograve;ng trọ gọn g&agrave;ng để tạo n&ecirc;n một kh&ocirc;ng gian rộng r&atilde;i v&agrave; tho&aacute;ng m&aacute;t hơn.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>3.3. C&aacute;ch bố tr&iacute; ph&ograve;ng trọ 12m2 đẹp v&agrave; gọn g&agrave;ng</strong></h3>\r\n\r\n<p dir=\"ltr\">Ph&ograve;ng trọ 12m2 thường c&oacute; k&iacute;ch thước d&agrave;i rộng l&agrave; 4mx3m. Với diện t&iacute;ch n&agrave;y bạn c&oacute; thể bố tr&iacute; một chiếc giường, b&agrave;n học v&agrave; tủ quần &aacute;o với k&iacute;ch thước gọn g&agrave;ng. Kh&ocirc;ng gian ph&ograve;ng kh&ocirc;ng qu&aacute; lớn n&ecirc;n khi trang tr&iacute; h&atilde;y sử dụng &iacute;t m&agrave;u sắc để căn ph&ograve;ng kh&ocirc;ng rối mắt. Bạn c&oacute; thể sơn hoặc d&ugrave;ng giấy d&aacute;n tường để bức tường sinh động v&agrave; đẹp hơn. Ngo&agrave;i ra bạn c&oacute; thể sử dụng s&agrave;n gỗ tự nhi&ecirc;n để tạo ra sự kh&aacute;c biệt cho căn ph&ograve;ng v&agrave; tăng sự ấm c&uacute;ng. H&atilde;y chọn th&ecirc;m cho ph&ograve;ng trọ một số c&acirc;y xanh để thanh lọc kh&ocirc;ng kh&iacute; tốt hơn.&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><strong>3.4. C&aacute;ch bố tr&iacute; ph&ograve;ng trọ 15m2 hợp l&yacute; v&agrave; ngăn nắp</strong></h3>\r\n\r\n<p dir=\"ltr\">C&aacute;ch bố tr&iacute; thiết kế ph&ograve;ng trọ 15m2 đẹp n&ecirc;n tận dụng tối đa kh&ocirc;ng gian v&agrave; ng&otilde; ng&aacute;ch để căn ph&ograve;ng tho&aacute;ng đ&atilde;ng hơn. C&oacute; thể bố tr&iacute; một chiếc giường với gầm cao được thiết kế nhiều ngăn như một chiếc tủ để đồ. Ngo&agrave;i ra bạn n&ecirc;n c&oacute; một chiếc b&agrave;n gắn th&ecirc;m kệ để chứa s&aacute;ch v&agrave; c&aacute;c đồ vật bạn y&ecirc;u th&iacute;ch. Sự. B&ecirc;n cạnh bạn c&oacute; thể bố tr&iacute; ph&ograve;ng trọ 15m2 với những vật dụng, nội thất đầy đủ như tivi tủ lạnh, ghế sofa, kệ bếp.. biến ch&uacute;ng th&agrave;nh căn nh&agrave; thu nhỏ đầy đủ tiện nghi.&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><strong>3.5.&nbsp; C&aacute;ch bố tr&iacute; ph&ograve;ng trọ c&oacute; g&aacute;c lửng</strong></h3>\r\n\r\n<p dir=\"ltr\"><strong><img alt=\"Cách trang trí nhà trọ có gác lửng\" id=\"Cách trang trí nhà trọ có gác lửng\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/C%C3%A1ch%20trang%20tr%C3%AD%20nh%C3%A0%20tr%E1%BB%8D%20c%C3%B3%20g%C3%A1c%20l%E1%BB%ADng\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/Trang-tri-phong-tro-gac-lung.jpg\" title=\"Cách trang trí nhà trọ có gác lửng\" /></strong></p>\r\n\r\n<p dir=\"ltr\">Ph&ograve;ng trọ c&oacute; g&aacute;c lửng sẽ lợi thế hơn những ph&ograve;ng trọ kh&ocirc;ng c&oacute; g&aacute;c c&oacute; c&ugrave;ng diện t&iacute;ch. Với thiết kế ph&ograve;ng trọ c&oacute; g&aacute;c lửng, bạn c&oacute; thể tận dụng được khoảng kh&ocirc;ng gian s&agrave;n nh&agrave; v&agrave; phần g&aacute;c xếp. Để sắp xếp ph&ograve;ng trọ c&oacute; g&aacute;c lửng đẹp v&agrave; hợp l&yacute;, gọn g&agrave;ng tham khảo c&aacute;c bước sau:</p>\r\n\r\n<p dir=\"ltr\"><strong>+ Bước 1: Dọn dẹp căn ph&ograve;ng</strong>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">H&atilde;y loại bỏ những vật dụng kh&ocirc;ng cần thiết ra khỏi ph&ograve;ng v&agrave; sắp xếp ngăn nắp c&aacute;c vật dụng c&ograve;n lại v&agrave;o chỗ trống căn ph&ograve;ng.</p>\r\n\r\n<p dir=\"ltr\"><strong>+ Bước 2: Trang tr&iacute; bức tường của ph&ograve;ng</strong></p>\r\n\r\n<p dir=\"ltr\">Bạn c&oacute; thể sử dụng giấy d&aacute;n tường ph&ograve;ng trọ đối với c&aacute;c bức tường cũ kỹ. Nếu căn ph&ograve;ng c&oacute; lớp sơn tường c&ograve;n mới bạn kh&ocirc;ng n&ecirc;n d&ugrave;ng giấy d&aacute;n tường. Thay v&agrave;o đ&oacute; bạn c&oacute; thể sử dụng tranh ảnh để treo l&ecirc;n tường tạo điểm nhấn đồng thời l&agrave;m cho bức tường sinh động hơn.</p>\r\n\r\n<p dir=\"ltr\"><strong>+ Bước 3: Trang tr&iacute; g&aacute;c lửng ph&iacute; tr&ecirc;n</strong></p>\r\n\r\n<p dir=\"ltr\">Đ&acirc;y c&oacute; thể xem như căn ph&ograve;ng ngủ của bạn. N&ecirc;n sắp xếp một chiếc nệm v&agrave; một chiếc b&agrave;n nhỏ để trang tr&iacute; ph&ograve;ng trọ g&aacute;c lửng. B&ecirc;n cạnh đ&oacute; bạn c&oacute; thể treo th&ecirc;m một số bức tranh để kh&ocirc;ng gian sinh động hơn. Một chiếc tivi cũng sẽ l&agrave; lựa chọn th&ocirc;ng minh phục vụ việc nghỉ ngơi v&agrave; giải tr&iacute; tr&ecirc;n g&aacute;c lửng của căn ph&ograve;ng. Kh&ocirc;ng n&ecirc;n để nhiều vật dụng kh&ocirc;ng cần thiết sẽ khiến g&aacute;c lửng trở n&ecirc;n chật chội, n&oacute;ng nực.</p>\r\n\r\n<p dir=\"ltr\"><strong>+ Bước 4: Sắp xếp đồ đạc ph&iacute;a dưới tầng trệt</strong></p>\r\n\r\n<p dir=\"ltr\">Sau khi trang tr&iacute; xong tường nh&agrave; v&agrave; g&aacute;c lửng h&atilde;y bắt tay bố tr&iacute; đồ đạc dưới tầng trệt cho ngăn nắp, sạch sẽ. H&atilde;y sắp xếp tủ &aacute;o quần gọn g&agrave;ng v&agrave; một g&oacute;c. Tủ lạnh v&agrave; bếp nấu ăn nơi g&oacute;c ph&ograve;ng cạnh cửa sổ để thuận tiện khi sử dụng. Trong thiết kế g&aacute;c lửng c&oacute; cầu thang g&aacute;c x&eacute;p, bạn c&oacute; thể tận dụng khoảng trống dưới ch&acirc;n cầu thang để lắp đặt một chiếc tivi v&agrave; một bộ b&agrave;n ghế để tạo n&ecirc;n căn ph&ograve;ng kh&aacute;ch mini. Ngo&agrave;i ra bạn c&oacute; thể bố tr&iacute; những vật dụng kh&aacute;c như kệ gi&agrave;y, c&aacute;c chậu c&acirc;y xanh,.... để kh&ocirc;ng gian lung linh v&agrave; đầy đủ c&aacute;c tiện nghi.</p>\r\n\r\n<p dir=\"ltr\">Với những gợi &yacute; n&ecirc;u tr&ecirc;n, hy vọng bạn đ&atilde; t&igrave;m được cho m&igrave;nh &yacute; tưởng ph&ugrave; hợp nhất để trang tr&iacute; ph&ograve;ng trọ đang thu&ecirc;.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Nếu bạn đang dự định chuyển nh&agrave; trọ m&agrave; c&oacute; qu&aacute; nhiều vật dụng v&agrave; nội thất, h&atilde;y tham khảo<strong>&nbsp;<a href=\"https://taxitaisaigon.vn/dich-vu/dich-vu-chuyen-nha-sinh-vien-gia-re-tai-tphcm-153\" target=\"_blank\">dịch vụ chuyển ph&ograve;ng trọ&nbsp;sinh vi&ecirc;n gi&aacute; rẻ</a>&nbsp;&nbsp;</strong>hoặc<strong>&nbsp;<a href=\"https://taxitaisaigon.vn/dich-vu/dich-vu-chuyen-nha-tron-goi-5\" target=\"_blank\">dịch vụ chuyển nh&agrave; trọn g&oacute;i uy t&iacute;n&nbsp;</a></strong>của SaiGon Express để được hỗ trợ nh&eacute;!</p>\r\n\r\n<p dir=\"ltr\">Một v&agrave;i mẫu nh&agrave; trọ đẹp bạn c&oacute; thể tham khảo:</p>\r\n\r\n<p dir=\"ltr\"><img alt=\"Cách trang trí nhà trọ phòng trọ\" id=\"Cách trang trí nhà trọ phòng trọ\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/C%C3%A1ch%20trang%20tr%C3%AD%20nh%C3%A0%20tr%E1%BB%8D%20ph%C3%B2ng%20tr%E1%BB%8D\" src=\"https://taxitaisaigon.vn/upload/files/cach-trang-tri-phong-tro.jpg\" title=\"Cách trang trí nhà trọ phòng trọ\" /></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"mẫu trang trí phòng trọ đẹp\" id=\"mẫu trang trí phòng trọ đẹp\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/m%E1%BA%ABu%20trang%20tr%C3%AD%20ph%C3%B2ng%20tr%E1%BB%8D%20%C4%91%E1%BA%B9p\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/Mau-trang-tri-phong-tro-4.jpg\" title=\"mẫu trang trí phòng trọ đẹp\" /></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"mẫu trang trí phòng trọ đẹp\" id=\"mẫu trang trí phòng trọ đẹp\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/m%E1%BA%ABu%20trang%20tr%C3%AD%20ph%C3%B2ng%20tr%E1%BB%8D%20%C4%91%E1%BA%B9p\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/Mau-trang-tri-phong-tro.jpg\" title=\"mẫu trang trí phòng trọ đẹp\" /></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"mẫu trang trí phòng trọ đẹp\" id=\"mẫu trang trí phòng trọ đẹp\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/m%E1%BA%ABu%20trang%20tr%C3%AD%20ph%C3%B2ng%20tr%E1%BB%8D%20%C4%91%E1%BA%B9p\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/Mau-trang-tri-phong-tro-1.jpg\" title=\"mẫu trang trí phòng trọ đẹp\" /></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"mẫu trang trí phòng trọ đẹp\" id=\"mẫu trang trí phòng trọ đẹp\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/m%E1%BA%ABu%20trang%20tr%C3%AD%20ph%C3%B2ng%20tr%E1%BB%8D%20%C4%91%E1%BA%B9p\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/Mau-trang-tri-phong-tro-2.jpg\" title=\"mẫu trang trí phòng trọ đẹp\" /></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"mẫu trang trí phòng trọ đẹp\" id=\"mẫu trang trí phòng trọ đẹp\" longdesc=\"https://taxitaisaigon.vn/bai-viet-chi-tiet/m%E1%BA%ABu%20trang%20tr%C3%AD%20ph%C3%B2ng%20tr%E1%BB%8D%20%C4%91%E1%BA%B9p\" src=\"https://taxitaisaigon.vn/upload/files/baiviet/Mau-trang-tri-phong-tro-3.jpg\" title=\"mẫu trang trí phòng trọ đẹp\" /></p>\r\n', 1, '2022-12-11 09:16:14', 2);
INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_image`, `post_short_desc`, `post_detail`, `user_id`, `post_created_date`, `post_cate_id`) VALUES
(3, 'Thiết kế phòng trọ không gác: Mẹo “ăn gian” diện tích cực hay', 'baiviet3.jpg', 'Thiết kế phòng trọ không gác như thế nào để tiết kiệm diện tích mà vẫn đảm bảo đủ công năng. Mời bạn tham khảo ngay những mẹo cực hay dưới đây của Homedy!', '<h2 dir=\"ltr\"><strong>Đặc điểm của ph&ograve;ng trọ kh&ocirc;ng g&aacute;c</strong></h2>\r\n\r\n<p dir=\"ltr\">Trước khi kh&aacute;m ph&aacute; những mẹo&nbsp;<strong>thiết kế ph&ograve;ng trọ kh&ocirc;ng g&aacute;c</strong>, c&ugrave;ng điểm qua một số đặc điểm của kiểu ph&ograve;ng trọ kh&ocirc;ng g&aacute;c lửng n&agrave;y nh&eacute;.</p>\r\n\r\n<p dir=\"ltr\">Hiện nay,&nbsp;<a href=\"https://homedy.com/cho-thue-nha-tro-phong-tro\"><em><strong>ph&ograve;ng trọ cho thu&ecirc;</strong></em></a>&nbsp;chủ yếu c&oacute; 2 loại ch&iacute;nh l&agrave; ph&ograve;ng c&oacute; g&aacute;c lửng v&agrave; kh&ocirc;ng c&oacute; g&aacute;c lửng. Những người thu&ecirc; ph&ograve;ng trọ kh&ocirc;ng g&aacute;c lửng thường kh&ocirc;ng th&iacute;ch leo tr&egrave;o. Hoặc, họ cảm thấy kh&ocirc;ng gian sinh hoạt tr&ecirc;n cũng một s&agrave;n tiện lợi, thoải m&aacute;i hơn.</p>\r\n\r\n<figure><img alt=\"Mẫu phòng trọ không gác\" height=\"358\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-01-637629122864499089.jpg\" width=\"650\" />\r\n<figcaption><em>Mẫu ph&ograve;ng trọ kh&ocirc;ng g&aacute;c lửng</em></figcaption>\r\n</figure>\r\n\r\n<p dir=\"ltr\">Những căn ph&ograve;ng trọ kh&ocirc;ng c&oacute; g&aacute;c lửng l&agrave; thường c&oacute; diện t&iacute;ch tương đối. Do kh&ocirc;ng c&oacute; th&ecirc;m khoảng kh&ocirc;ng gian tr&ecirc;n g&aacute;c n&ecirc;n mặt s&agrave;n của những ph&ograve;ng trọ n&agrave;y phải đủ để bố tr&iacute; c&aacute;c kh&ocirc;ng gian chức năng: nghỉ ngơi, học tập, l&agrave;m việc, nấu ăn,... T&ugrave;y theo diện t&iacute;ch ph&ograve;ng trọ 9m2, 12m2 hay 20m2,... m&agrave; ph&ugrave; hợp cho 1 đến nhiều người ở.</p>\r\n\r\n<p dir=\"ltr\">Việc decor ph&ograve;ng trọ kh&ocirc;ng g&aacute;c cũng tốn &iacute;t chi ph&iacute; hơn. Người ở cũng sẽ tiết kiệm được kha kh&aacute; chi ph&iacute; đ&egrave;n, điện v&igrave; căn ph&ograve;ng kh&ocirc;ng bị ph&acirc;n chia th&agrave;nh nhiều kh&ocirc;ng gian.</p>\r\n\r\n<h2 dir=\"ltr\"><strong>Nguy&ecirc;n tắc thiết kế ph&ograve;ng trọ kh&ocirc;ng g&aacute;c</strong></h2>\r\n\r\n<h3 dir=\"ltr\"><strong>Bố tr&iacute; kh&ocirc;ng gian chức năng r&otilde; r&agrave;ng</strong></h3>\r\n\r\n<p dir=\"ltr\">Th&ocirc;ng thường, kiểu ph&ograve;ng trọ c&oacute; g&aacute;c lửng, ch&uacute;ng ta c&oacute; thể t&aacute;ch biệt kh&ocirc;ng gian nghỉ ngơi, học tập với khu vực tiếp kh&aacute;ch, nấu nướng. Tuy nhi&ecirc;n, với những mẫu nh&agrave; trọ kh&ocirc;ng g&aacute;c, việc bố tr&iacute;, ph&acirc;n chia kh&ocirc;ng gian chức năng kh&oacute; khăn hơn.</p>\r\n\r\n<p dir=\"ltr\">Ch&iacute;nh v&igrave; vậy, bạn cần lưu &yacute; t&aacute;ch biệt c&aacute;c kh&ocirc;ng gian chức năng r&otilde; r&agrave;ng. Bố tr&iacute; khu vực nấu nướng, ăn uống c&aacute;ch xa nơi ngủ nghỉ để tr&aacute;nh &aacute;m m&ugrave;i, g&acirc;y kh&oacute; chịu trong qu&aacute; tr&igrave;nh sinh hoạt.</p>\r\n\r\n<p dir=\"ltr\">Để tăng t&iacute;nh ri&ecirc;ng tư cho giường ngủ, bạn cũng c&oacute; thể lắp th&ecirc;m r&egrave;m chắn c&oacute; thể k&eacute;o ra, k&eacute;o v&agrave;o linh động. Vừa đảm bảo sự ri&ecirc;ng tư, vừa kh&ocirc;ng l&agrave;m căn ph&ograve;ng bị chật chội, b&iacute; b&aacute;ch.</p>\r\n\r\n<figure><img alt=\"Bố trí không gian chức năng rõ ràng\" height=\"867\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-tu-sach-ngan-637629128005725097.jpg\" width=\"650\" />\r\n<figcaption><em>Ph&acirc;n chia kh&ocirc;ng gian ph&ograve;ng trọ bằng kệ s&aacute;ch</em></figcaption>\r\n</figure>\r\n\r\n<p dir=\"ltr\">B&ecirc;n cạnh đ&oacute;, bạn cũng c&oacute; thể kh&eacute;o l&eacute;o ph&acirc;n t&aacute;ch kh&ocirc;ng gian bằng những kệ tủ, gi&aacute; s&aacute;ch, hoặc v&agrave;i chậu c&acirc;y cảnh trang tr&iacute;.&nbsp;<strong>Thiết kế ph&ograve;ng trọ kh&ocirc;ng g&aacute;c lửng</strong>, h&atilde;y hạn chế sử dụng tấm ngăn thạch cao hoặc những bức v&aacute;ch &ldquo;k&iacute;n bưng&rdquo; sẽ khiến kh&ocirc;ng gian sống trở n&ecirc;n t&ugrave; t&uacute;ng, chật chội hơn đấy!</p>\r\n\r\n<h3 dir=\"ltr\"><strong>Giữ ph&ograve;ng trọ gọn g&agrave;ng, sạch sẽ</strong></h3>\r\n\r\n<p dir=\"ltr\">Căn ph&ograve;ng d&ugrave; rộng đến mấy nhưng đồ đạc vứt ngổn ngang cũng sẽ trở n&ecirc;n bừa bộn, xấu x&iacute;. Đặc biệt, với những căn ph&ograve;ng trọ kh&ocirc;ng g&aacute;c, chỉ cần bước v&agrave;o cửa nh&agrave; th&ocirc;i l&agrave; đ&atilde; đủ nh&igrave;n to&agrave;n bộ căn ph&ograve;ng. Sẽ kh&ocirc;ng c&oacute; nhiều khoảng</p>\r\n\r\n<p dir=\"ltr\">Ch&iacute;nh v&igrave; vậy, chưa t&iacute;nh đến chuyện decor ph&ograve;ng trọ kh&ocirc;ng g&aacute;c sao cho đẹp. H&atilde;y lu&ocirc;n nhớ giữ căn ph&ograve;ng gọn g&agrave;ng, ngăn nắp để tạo cảm gi&aacute;c thoải m&aacute;i, dễ chịu cho kh&ocirc;ng gian sống trước đ&atilde; nh&eacute;.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>Decor ph&ograve;ng trọ kh&ocirc;ng g&aacute;c với nội thất thấp</strong></h3>\r\n\r\n<p dir=\"ltr\">Hầu hết đồ đạc của c&aacute;c căn ph&ograve;ng trọ đều c&oacute; k&iacute;ch thước kh&aacute; nhỏ, vừa vặn để sử dụng v&igrave; những l&yacute; do sau đ&acirc;y:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Gi&uacute;p tiết kiệm diện t&iacute;ch sử dụng</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Tạo ra sự c&acirc;n đối trong bố cục, căn ph&ograve;ng</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Linh động th&aacute;o lắp, di chuyển khi chủ nh&agrave; chuyển trọ</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">Ch&iacute;nh v&igrave; vậy, mẹo hay khi thiết kế ph&ograve;ng trọ kh&ocirc;ng g&aacute;c l&agrave; bạn hay sử dụng những m&oacute;n đồ nội thất thấp. Ch&uacute;ng sẽ gi&uacute;p tầm nh&igrave;n được tho&aacute;ng hơn, tạo hiệu ứng rộng r&atilde;i cho căn ph&ograve;ng.</p>\r\n\r\n<h2 dir=\"ltr\"><strong>Mẹo &ldquo;ăn gian&rdquo; diện t&iacute;ch ph&ograve;ng trọ nhỏ</strong></h2>\r\n\r\n<h3 dir=\"ltr\"><strong>Sử dụng gương soi tạo hiệu ứng chiều s&acirc;u</strong></h3>\r\n\r\n<p dir=\"ltr\">Hẳn trong căn ph&ograve;ng trọ của bất kỳ ai đều kh&ocirc;ng thể thiếu được gương soi. Thế nhưng, bạn đ&atilde; biết tận dụng triệt để t&aacute;c dụng của gương chưa?&nbsp;</p>\r\n\r\n<figure><img alt=\"Sử dụng gương soi tạo hiệu ứng chiều sâu\" height=\"433\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-guong-soi-637629123228761474.jpg\" width=\"650\" />\r\n<figcaption><em>Sử dụng gương soi tạo hiệu ứng chiều s&acirc;u</em></figcaption>\r\n</figure>\r\n\r\n<figure><img alt=\"Sử dụng gương soi tạo hiệu ứng chiều sâu\" height=\"813\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-guong-soi-01-637629123465245199.jpg\" width=\"650\" />\r\n<figcaption><em>Gương c&oacute; khả năng khiến kh&ocirc;ng gian nh&igrave;n rộng v&agrave; s&acirc;u hơn</em></figcaption>\r\n</figure>\r\n\r\n<p dir=\"ltr\">B&ecirc;n cạnh một m&oacute;n đồ để soi chiếu, gương d&ugrave;ng để trang tr&iacute;, v&agrave; c&oacute; khả năng &ldquo;đ&aacute;nh lừa&rdquo; thị gi&aacute;c, tạo hiệu ứng chiều s&acirc;u cho căn ph&ograve;ng đấy. Gương phản chiếu h&igrave;nh ảnh, khiến kh&ocirc;ng gian như được nh&acirc;n hai. Thiết kế ph&ograve;ng trọ kh&ocirc;ng g&aacute;c với gương khổ lớn sẽ gi&uacute;p &ldquo;h&ocirc; biến&rdquo; căn ph&ograve;ng trọ nhỏ b&eacute; của bạn trở n&ecirc;n rộng r&atilde;i v&agrave; c&oacute; chiều s&acirc;u hơn đ&aacute;ng kể.</p>\r\n\r\n<p dir=\"ltr\">B&ecirc;n cạnh đ&oacute;, khi kết hợp gương với đ&egrave;n, &aacute;nh s&aacute;ng từ cửa sổ c&ograve;n gi&uacute;p căn ph&ograve;ng của bạn trở n&ecirc;n s&aacute;ng sủa hơn rất nhiều. Từ đ&oacute;, mang đến cảm gi&aacute;c tho&aacute;ng đ&atilde;ng, thoải m&aacute;i khi ở.</p>\r\n\r\n<figure><img alt=\"Decor phòng trọ không gác lửng với gương và cửa sổ\" height=\"937\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-guong-va-cua-so-637629128482092209.jpg\" width=\"650\" />\r\n<figcaption><em>Decor ph&ograve;ng trọ kh&ocirc;ng g&aacute;c lửng với gương v&agrave; cửa sổ để tăng hiệu ứng &aacute;nh s&aacute;ng</em></figcaption>\r\n</figure>\r\n\r\n<h3 dir=\"ltr\"><strong>&ldquo;Đồng m&agrave;u h&oacute;a&rdquo; đồ đạc v&agrave; m&agrave;u sơn tường</strong></h3>\r\n\r\n<p dir=\"ltr\">Để &ldquo;ăn gian&rdquo; diện t&iacute;ch khi thiết kế ph&ograve;ng trọ kh&ocirc;ng gi&aacute;c, bạn c&ograve;n c&oacute; thể &aacute;p dụng c&aacute;c mẹo về m&agrave;u sắc.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Thứ nhất, h&atilde;y sơn tường bằng những gam m&agrave;u s&aacute;ng như: trắng, be,... ch&uacute;ng sẽ gi&uacute;p phản chiếu &aacute;nh s&aacute;ng tốt. Đồng thời, tạo hiệu ứng kh&ocirc;ng gian mở.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Thứ hai, h&atilde;y sử dụng c&aacute;c m&oacute;n đồ nội thất như: r&egrave;m cửa, kệ tủ, chăn ga gối,... đồng m&agrave;u với m&agrave;u tường. Điều n&agrave;y kh&ocirc;ng chỉ gi&uacute;p kh&ocirc;ng gian như rộng r&atilde;i hơn m&agrave; c&ograve;n tạo ra sự đồng bộ trong<strong>&nbsp;<a href=\"https://homedy.com/thiet-ke-nha-dep/phong-tro\">thiết kế ph&ograve;ng trọ</a></strong>.</p>\r\n\r\n	<figure><img alt=\"Đồ đạc và sơn tường đều màu trắng\" height=\"433\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-dong-bo-mau-sac-637629124088774477.jpg\" width=\"650\" />\r\n	<figcaption><em>Đồ đạc v&agrave; sơn tường đều m&agrave;u trắng</em></figcaption>\r\n	</figure>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3 dir=\"ltr\"><strong>Trang tr&iacute; mảng tường 3D</strong></h3>\r\n\r\n<p dir=\"ltr\">Decor ph&ograve;ng trọ kh&ocirc;ng g&aacute;c bằng tranh 3D hẳn l&agrave; một &yacute; tưởng mới lạ phải kh&ocirc;ng? Những bức tranh 3D khổ lớn s&aacute;ng tạo với hiệu ứng chiều s&acirc;u sẽ gi&uacute;p đ&aacute;nh lừa thị gi&aacute;c, khiến căn nh&agrave; của bạn dường như &ldquo;s&acirc;u thẳm&rdquo;. Nếu vẫn chưa h&igrave;nh dung ra t&aacute;c dụng của những h&igrave;nh ảnh 3D, h&atilde;y tham khảo ngay những &yacute; tưởng cực độc đ&aacute;o sau đ&acirc;y:</p>\r\n\r\n<figure><img alt=\"Trang trí phòng trọ không gác với những mảng tường 3D\" height=\"488\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-tranh-3d-637629124477860964.jpg\" width=\"650\" />\r\n<figcaption>Biến căn ph&ograve;ng trở n&ecirc;n độc đ&aacute;o với những mảng tường 3D</figcaption>\r\n</figure>\r\n\r\n<figure><img alt=\"Biến căn phòng trở nên độc đáo với những mảng tường 3D\" height=\"650\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-tranh-3d-01-637629125074491002.jpg\" width=\"650\" />\r\n<figcaption><em>Biến căn ph&ograve;ng trở n&ecirc;n độc đ&aacute;o với những mảng tường 3D</em></figcaption>\r\n</figure>\r\n\r\n<figure><img alt=\"Tranh 3D ấn tượng tạo cảm giác không gian có chiều sâu hơn\" height=\"1067\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-tranh-3d-02-637629125317343777.jpg\" width=\"650\" />\r\n<figcaption><em>Tranh 3D ấn tượng tạo cảm gi&aacute;c kh&ocirc;ng gian c&oacute; chiều s&acirc;u hơn</em></figcaption>\r\n</figure>\r\n\r\n<figure><img alt=\"Tranh 3D ấn tượng tạo cảm giác không gian có chiều sâu hơn\" height=\"445\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-tranh-3d-04-637629125772165405.jpg\" width=\"650\" />\r\n<figcaption><em>Một bức tường dẫn l&ecirc;n tầng 2 b&iacute; ẩn?</em></figcaption>\r\n</figure>\r\n\r\n<figure><img alt=\"Tranh 3D ấn tượng tạo cảm giác không gian có chiều sâu hơn\" height=\"415\" src=\"https://img.homedy.com/store/images/2021/07/26/thiet-ke-phong-tro-khong-gac-tranh-3d-03-637629126062503092.jpg\" width=\"650\" />\r\n<figcaption><em>Tranh 3D ấn tượng tạo cảm gi&aacute;c kh&ocirc;ng gian c&oacute; chiều s&acirc;u hơn</em></figcaption>\r\n</figure>\r\n\r\n<p dir=\"ltr\">Nếu y&ecirc;u th&iacute;ch nghệ thuật trang tr&iacute; tường v&agrave; &ldquo;chịu chi&rdquo;, bạn ho&agrave;n to&agrave;n c&oacute; thể đầu tư sơn vẽ tường thay v&igrave; treo tranh. Ch&uacute;ng sẽ mang đến cảm gi&aacute;c ch&acirc;n thật hơn rất nhiều. Căn ph&ograve;ng trọ của bạn chắc chắn sẽ vừa &ldquo;s&acirc;u&rdquo;, vừa ấn tượng cực kỳ!</p>\r\n\r\n<h3 dir=\"ltr\"><strong>Sử dụng giường tầng kết hợp b&agrave;n học</strong></h3>\r\n\r\n<p dir=\"ltr\">Những chiếc giường tầng kết hợp với kệ s&aacute;ch v&agrave; b&agrave;n học l&agrave; giải ph&aacute;p cực hữu &iacute;ch khi thiết kế ph&ograve;ng trọ kh&ocirc;ng g&aacute;c. Ch&uacute;ng c&oacute; thể giải quyết hạn chế của kiểu nh&agrave; trọ n&agrave;y, mang đến kh&ocirc;ng gian nghỉ ngơi t&aacute;ch biệt, ri&ecirc;ng tư cho bạn. Đồng thời, tiết kiệm được rất nhiều diện t&iacute;ch nh&agrave;.</p>\r\n\r\n<p dir=\"ltr\">Hiện nay tr&ecirc;n thị trường c&oacute; rất nhiều mẫu giường tầng kết hợp b&agrave;n, tủ kh&aacute;c nhau. Từ chất liệu gỗ, đến th&eacute;p, inox,... T&ugrave;y v&agrave;o sở th&iacute;ch v&agrave; khả năng t&agrave;i ch&iacute;nh m&agrave; bạn c&oacute; thể lựa chọn những mẫu giường ph&ugrave; hợp với m&igrave;nh. Bạn c&oacute; thể tham khảo một số thiết kế ph&ograve;ng trọ c&oacute; bố tr&iacute; giường tầng rất đẹp v&agrave; hợp l&yacute; dưới đ&acirc;y:</p>\r\n\r\n<figure><img alt=\"Sử dụng giường tầng kết hợp bàn học\" height=\"650\" src=\"https://img.homedy.com/store/images/2021/07/26/decor-phong-tro-khong-gac-giuong-tang-637629126518417781.jpg\" width=\"650\" />\r\n<figcaption><em>Decor ph&ograve;ng trọ kh&ocirc;ng g&aacute;c đẹp tiết kiệm diện t&iacute;ch với giường tầng</em></figcaption>\r\n</figure>\r\n\r\n<figure><img alt=\"Decor phòng trọ không gác đẹp tiết kiệm diện tích với giường tầng\" height=\"719\" src=\"https://img.homedy.com/store/images/2021/07/26/decor-phong-tro-khong-gac-giuong-tang-02-637629126675210147.jpg\" width=\"650\" />\r\n<figcaption><em>Với thiết kế n&agrave;y, bạn c&oacute; thể c&oacute; đến 2 chiếc giường cho căn ph&ograve;ng trọ của m&igrave;nh</em></figcaption>\r\n</figure>\r\n\r\n<figure><img alt=\"Mẫu giường tầng kiêm bàn làm việc bằng sắt trang trí phòng trọ không gác lửng\" height=\"650\" src=\"https://img.homedy.com/store/images/2021/07/26/decor-phong-tro-khong-gac-giuong-tang-01-637629126901201698.jpg\" width=\"650\" />\r\n<figcaption><em>Mẫu giường tầng ki&ecirc;m b&agrave;n l&agrave;m việc bằng sắt</em></figcaption>\r\n</figure>\r\n\r\n<h2 dir=\"ltr\"><strong>Dự tr&ugrave; chi ph&iacute; trang tr&iacute; ph&ograve;ng trọ kh&ocirc;ng g&aacute;c lửng</strong></h2>\r\n\r\n<p dir=\"ltr\"><em>&ldquo;Chi ph&iacute; trang tr&iacute; ph&ograve;ng trọ kh&ocirc;ng g&aacute;c l&agrave; bao nhi&ecirc;u?</em>&rdquo; Đ&acirc;y l&agrave; băn khoăn của kh&ocirc;ng &iacute;t bạn học sinh, sinh vi&ecirc;n hoặc những người đang c&oacute; &yacute; định thu&ecirc; trọ. Với căn ph&ograve;ng từ 25 - 30m2, Homedy xin dự tr&ugrave; khoản chi ph&iacute; trang tr&iacute; ph&ograve;ng trọ kh&ocirc;ng g&aacute;c như sau:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Chi ph&iacute; sơn sửa to&agrave;n bộ ph&ograve;ng: 2.000.000đ</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Mua giường tầng kết hợp với b&agrave;n, kệ tủ (giường sắt): 2.000.000đ</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Mua tủ bếp mini cho ph&ograve;ng trọ (nh&ocirc;m k&iacute;nh): 1.500.000đ</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Mua b&agrave;n ăn v&agrave; ghế ăn: 500.000đ&nbsp;</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Mua tủ quần &aacute;o nhựa: 2.000.000đ</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Mua đệm, ga gối, đồ decor kh&aacute;c: 2.000.000đ</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">Như vậy, tổng chi ph&iacute; trang tr&iacute; lại ph&ograve;ng trọ kh&ocirc;ng g&aacute;c sẽ tốn khoảng 10 triệu đồng. Đ&acirc;y chỉ l&agrave; mức chi ph&iacute; cơ bản để bạn tham khảo. T&ugrave;y theo c&aacute;c loại vật liệu kh&aacute;c nhau th&igrave; gi&aacute; th&agrave;nh sẽ kh&aacute;c nhau.</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; những mẹo nhỏ khi decor&nbsp;<strong>thiết kế ph&ograve;ng trọ kh&ocirc;ng g&aacute;c</strong>. Hy vọng đ&atilde; mang đến những &yacute; tưởng hữu &iacute;ch cho bạn.&nbsp;<a href=\"https://homedy.com/\"><strong>Bất động sản</strong></a>&nbsp;Homedy ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng!</p>\r\n', 1, '2022-12-11 09:16:14', 1),
(7, 'Xem người ta decor để lấy động lực nào, giấc mơ có căn phòng đẹp đâu xa xôi đâu phải không?', 'baivietanh2.png', 'Check in ở cà phê sang chảnh, nhà hàng đắt đỏ hay resort xa xỉ để chứng tỏ độ \"chịu chơi\" thì bình thường quá rồi. Muốn ghi điểm tuyệt đối phải check in ở... nhà cơ. Nghe thì có vẻ lạ nhưng gần đây, dân tình đang thi nhau khoe ảnh với căn nhà (hoặc phòng trọ) do chính tay họ decor xinh xắn, lung linh chẳng kém gì studio hay quán cà phê.', '<p>Một&nbsp;<a href=\"https://kenh14.vn/khong-gian-song.html\" rel=\"nofollow\" target=\"_blank\" title=\"không gian sống xinh đẹp\">kh&ocirc;ng gian sống xinh đẹp</a>&nbsp;thể hiện rất nhiều về chủ nh&acirc;n đấy nh&eacute;. N&oacute; chứng tỏ bạn l&agrave; người c&oacute; gu thẩm mỹ lại rất gọn g&agrave;ng, ngăn nắp v&agrave; kh&eacute;o tay, chịu kh&oacute;. Vậy n&ecirc;n, chỉ cần khoe một căn ph&ograve;ng si&ecirc;u ấm c&uacute;ng th&igrave; ai m&agrave; chẳng muốn c&ugrave;ng bạn &quot;Netflix and chill&quot; trong ng&agrave;y cuối tuần!</p>\r\n\r\n<p>Nh&igrave;n loạt ảnh dưới đ&acirc;y để được truyền cảm hứng v&agrave; l&ecirc;n plan để &quot;biến h&igrave;nh&quot; cho ph&ograve;ng của m&igrave;nh ngay đi!</p>\r\n\r\n<h3>Mới đ&acirc;y, một c&ocirc; bạn c&oacute; t&ecirc;n Nguyễn Kh&aacute;nh Linh (sinh năm 1994, sống tại H&agrave;n Quốc) đ&atilde; khiến d&acirc;n t&igrave;nh t&eacute; ngửa khi F5 th&agrave;nh c&ocirc;ng 1 căn ph&ograve;ng nhỏ bao gồm ph&ograve;ng ngủ v&agrave; khu bếp.</h3>\r\n\r\n<figure><a data-thumbnail=\"https://kenh14cdn.com/thumb_w/660/2020/3/11/8830146415195137615450792299779559068794880o-1583801003452615513575-158394275481114403856.jpg\" data-title=\"\" href=\"https://kenh14cdn.com/2020/3/11/8830146415195137615450792299779559068794880o-1583801003452615513575-158394275481114403856.jpg\" rel=\"lightbox\" title=\"\"><img alt=\"Rần rần trào lưu khoe phòng được F5 \" x=\"\" xinh=\"\" /></a></figure>\r\n\r\n<figure><a data-thumbnail=\"https://kenh14cdn.com/thumb_w/660/2020/3/11/8826171415195140815450474422142420095860736o-15838010034491839685526-1583942754829125064207.jpg\" data-title=\"\" href=\"https://kenh14cdn.com/2020/3/11/8826171415195140815450474422142420095860736o-15838010034491839685526-1583942754829125064207.jpg\" rel=\"lightbox\" title=\"\"><img alt=\"Rần rần trào lưu khoe phòng được F5 \" x=\"\" xinh=\"\" /></a></figure>\r\n\r\n<h3>Cả căn ph&ograve;ng ngập trong tone m&agrave;u hồng kem v&ocirc; c&ugrave;ng ngọt ng&agrave;o, nữ t&iacute;nh. Từ giường, chỗ để đồ đến phần bếp đều ton sur ton với những m&oacute;n nội thất đơn giản nhưng xinh xắn.</h3>\r\n\r\n<figure><a data-thumbnail=\"https://kenh14cdn.com/thumb_w/660/2020/3/11/8943655215195144282116794672972568926355456o-15838010034612041125933-15839427548321102695297.jpg\" data-title=\"\" href=\"https://kenh14cdn.com/2020/3/11/8943655215195144282116794672972568926355456o-15838010034612041125933-15839427548321102695297.jpg\" rel=\"lightbox\" title=\"\"><img alt=\"Rần rần trào lưu khoe phòng được F5 \" x=\"\" xinh=\"\" /></a></figure>\r\n\r\n<figure><a data-thumbnail=\"https://kenh14cdn.com/thumb_w/660/2020/3/11/8834698815195138648784023345945287846789120o-15838010034551144601956-1583942754837975771568.jpg\" data-title=\"\" href=\"https://kenh14cdn.com/2020/3/11/8834698815195138648784023345945287846789120o-15838010034551144601956-1583942754837975771568.jpg\" rel=\"lightbox\" title=\"\"><img alt=\"Rần rần trào lưu khoe phòng được F5 \" x=\"\" xinh=\"\" /></a></figure>\r\n\r\n<figure><a data-thumbnail=\"https://kenh14cdn.com/thumb_w/660/2020/3/11/8481960215195139115450647046923185245126656o-1583801003443902079350-15839427548691456389707.jpg\" data-title=\"8481960215195139115450647046923185245126656o-1583801003443902079350\" href=\"https://kenh14cdn.com/2020/3/11/8481960215195139115450647046923185245126656o-1583801003443902079350-15839427548691456389707.jpg\" rel=\"lightbox\" title=\"8481960215195139115450647046923185245126656o-1583801003443902079350\"><img alt=\"Rần rần trào lưu khoe phòng được F5 \" x=\"\" xinh=\"\" /></a></figure>\r\n\r\n<figure><a data-thumbnail=\"https://kenh14cdn.com/thumb_w/660/2020/3/11/8902976415195139915450562645541911208656896o-1583801003458766993064-15839427548401404060972.jpg\" data-title=\"8902976415195139915450562645541911208656896o-1583801003458766993064\" href=\"https://kenh14cdn.com/2020/3/11/8902976415195139915450562645541911208656896o-1583801003458766993064-15839427548401404060972.jpg\" rel=\"lightbox\" title=\"8902976415195139915450562645541911208656896o-1583801003458766993064\"><img alt=\"Rần rần trào lưu khoe phòng được F5 \" x=\"\" xinh=\"\" /></a></figure>\r\n\r\n<hr />\r\n<h3>Một c&ocirc; n&agrave;ng c&oacute; t&ecirc;n Nguyễn &Aacute;nh Nguyệt (24 tuổi, H&agrave; Nội) cũng đ&atilde; khiến d&acirc;n t&igrave;nh trầm trồ khi &quot;ph&ugrave; ph&eacute;p&quot; biến căn ph&ograve;ng 20m2 si&ecirc;u cũ kĩ th&agrave;nh một căn ph&ograve;ng m&agrave;u hồng xinh xắn như studio. Tone m&agrave;u n&agrave;y thực sự rất &quot;được l&ograve;ng&quot; c&aacute;c c&ocirc; g&aacute;i nhỉ?</h3>\r\n\r\n<p><a data-fancybox-group=\"img-lightbox\" href=\"https://kenh14cdn.com/2020/3/11/8798444536835740216846482594821530013663232o-15833125988851299204947-1-15839427548211179108991.jpg\" target=\"_blank\" title=\"\"><img alt=\"Rần rần trào lưu khoe phòng được F5 xinh xỉu: Nhìn mà muốn xin một slot sở cùng nhà ngay và luôn! - Ảnh 4.\" data-original=\"https://kenh14cdn.com/2020/3/11/8798444536835740216846482594821530013663232o-15833125988851299204947-1-15839427548211179108991.jpg\" h=\"407\" height=\"\" id=\"img_38774310-63b2-11ea-a730-2faeb99b0794\" photoid=\"38774310-63b2-11ea-a730-2faeb99b0794\" rel=\"lightbox\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/11/8798444536835740216846482594821530013663232o-15833125988851299204947-1-15839427548211179108991.jpg\" title=\"Rần rần trào lưu khoe phòng được F5 xinh xỉu: Nhìn mà muốn xin một slot sở cùng nhà ngay và luôn! - Ảnh 4.\" type=\"photo\" w=\"620\" width=\"\" /></a></p>\r\n\r\n<figure>&nbsp;</figure>\r\n', 1, '2022-12-13 12:46:12', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post_category`
--

CREATE TABLE `tbl_post_category` (
  `post_cate_id` int(11) NOT NULL,
  `post_cate_title` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post_category`
--

INSERT INTO `tbl_post_category` (`post_cate_id`, `post_cate_title`) VALUES
(1, 'Mẹo decor'),
(2, 'Decor phòng trọ'),
(3, 'Decor phòng ngủ'),
(4, 'Góc khoe phòng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_privileges`
--

CREATE TABLE `tbl_privileges` (
  `privilege_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `privilege_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `privilege_url` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `privilege_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_privileges`
--

INSERT INTO `tbl_privileges` (`privilege_id`, `group_id`, `privilege_name`, `privilege_url`, `privilege_created`) VALUES
(1, 1, 'Danh sách danh mục sản phẩm', '\\?mod=products&controller=cate&action=index', '2022-11-08'),
(2, 1, 'Thêm danh mục sản phẩm', '\\?mod=products&controller=cate&action=add', '2022-11-09'),
(3, 1, 'Sửa danh mục sản phẩm', '\\?mod=products&controller=cate&action=update&id=\\d', '2022-11-09'),
(4, 1, 'Xóa danh mục sản phẩm', '\\?mod=products&controller=cate&action=delete&id=\\d', '2022-11-09'),
(5, 2, 'Danh sách sản phẩm', '\\?mod=products&action=index', '2022-11-09'),
(6, 2, 'Thêm sản phẩm', '\\?mod=products&action=add', '2022-11-09'),
(7, 2, 'Sửa sản phẩm', '\\?mod=products&controller=index&action=update&id=\\d', '2022-11-09'),
(8, 2, 'Xóa sản phẩm', '\\?mod=products&controller=index&action=delete&id=\\d', '2022-11-09'),
(9, 3, 'Danh sách danh mục bài viết', '\\?mod=posts&controller=cate&action=index', '2022-11-10'),
(10, 3, 'Thêm danh mục bài viết', '\\?mod=posts&controller=cate&action=add', '2022-11-10'),
(11, 3, 'Sửa danh mục bài viết', '\\?mod=posts&controller=cate&action=update&id=\\d', '2022-11-10'),
(12, 3, 'Xóa danh mục bài viết', '\\?mod=posts&controller=cate&action=delete&id=\\d', '2022-11-10'),
(13, 4, 'Danh sách bài viết', '\\?mod=posts&action=index', '2022-11-10'),
(14, 4, 'Thêm bài viết', '\\?mod=posts&action=add', '2022-11-10'),
(15, 4, 'Sửa bài viết', '\\?mod=posts&controller=index&action=update&id=\\d', '2022-11-10'),
(16, 4, 'Xóa bài viết', '\\?mod=posts&controller=index&action=delete&id=\\d', '2022-11-10'),
(17, 5, 'Danh sách đơn hàng', '\\?mod=orders&action=index', '2022-11-10'),
(18, 5, 'Chi tiết đơn hàng', '\\?mod=orders&action=detail&id=\\d', '2022-11-10'),
(19, 5, 'Xóa đơn hàng', '\\?mod=orders&action=delete&id=\\d', '2022-11-10'),
(20, 6, 'Danh sách khách hàng', '\\?mod=customers&action=index', '2022-11-10'),
(21, 7, 'Danh sách nhà cung cấp', '\\?mod=suppliers&action=index', '2022-11-10'),
(22, 7, 'Thêm nhà cung cấp', '\\?mod=suppliers&action=add', '2022-11-10'),
(23, 7, 'Sửa nhà cung cấp', '\\?mod=suppliers&action=update&id=\\d', '2022-11-10'),
(24, 7, 'Xóa nhà cung cấp', '\\?mod=suppliers&action=delete&id=\\d', '2022-11-10'),
(25, 8, 'Danh sách nhập hàng', '\\?mod=import_goods&action=index', '2022-11-10'),
(26, 8, 'Thêm hàng hóa', '\\?mod=import_goods&action=add', '2022-11-10'),
(27, 8, 'Chi tiết nhập hàng', '\\?mod=import_goods&action=detail&id=\\d', '2022-11-10'),
(28, 8, 'Xóa nhập hàng', '\\?mod=import_goods&action=delete&id=\\d', '2022-11-10'),
(29, 8, 'In hóa đơn nhập', '\\?mod=import_goods&action=prinf', '2022-11-10'),
(30, 9, 'Danh sách đơn vị sản phẩm', '\\?mod=import_goods&controller=unit', '2022-11-10'),
(31, 9, 'Thêm đơn vị sản phẩm', '\\?mod=import_goods&controller=unit&action=add', '2022-11-10'),
(32, 9, 'Sửa đơn vị sản phẩm', '\\?mod=import_goods&controller=unit&action=update&id=\\d', '2022-11-10'),
(33, 9, 'Xóa đơn vị sản phẩm', '\\?mod=import_goods&controller=unit&action=delete&id=\\d', '2022-11-10'),
(34, 10, 'Danh sách dịch vụ decor', '\\?mod=decor_service&action=index', '2022-11-10'),
(35, 10, 'Xóa dịch vụ decor', '\\?mod=decor_service&action=delete', '2022-11-10'),
(36, 11, 'Danh sách thành viên', '\\?mod=users&controller=team', '2022-11-10'),
(37, 11, 'Sửa thành viên', '\\?mod=users&controller=team&action=update&id=\\d', '2022-11-10'),
(38, 11, 'Xóa thành viên', '\\?mod=users&controller=team&action=delete&id=\\d', '2022-11-10'),
(39, 11, 'Thông tin thành viên', '\\?mod=users&action=update', '2022-11-10'),
(40, 11, 'Thành viên reset', '\\?mod=users&action=reset', '2022-11-10'),
(41, 11, 'Phân quyền thành viên', '\\?mod=users&controller=team&action=privilege&id=\\d', '2022-11-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_privilege_group`
--

CREATE TABLE `tbl_privilege_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `group_position` int(11) NOT NULL,
  `group_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_privilege_group`
--

INSERT INTO `tbl_privilege_group` (`group_id`, `group_name`, `group_position`, `group_created`) VALUES
(1, 'Danh mục sản phẩm', 1, '2022-11-08'),
(2, 'Sản phẩm', 2, '2022-11-08'),
(3, 'Danh mục bài viết', 3, '2022-11-08'),
(4, 'Bài viết', 4, '2022-11-08'),
(5, 'Đơn hàng', 5, '2022-11-08'),
(6, 'Khách hàng', 6, '2022-11-08'),
(7, 'Nhà cung cấp', 7, '2022-11-08'),
(8, 'Nhập hàng', 8, '2022-11-08'),
(9, 'Đơn vị sản phẩm', 9, '2022-11-08'),
(10, 'Dịch vụ decor', 10, '2022-11-08'),
(11, 'Thành viên', 11, '2022-11-08'),
(12, 'Đánh giá sản phẩm', 12, '2022-12-06'),
(13, 'Chăm sóc khách hàng', 13, '2022-12-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_title` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_price` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_discount` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_image` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `product_description` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_detail` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `product_updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_cate_id` int(11) NOT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `product_num` int(11) DEFAULT NULL,
  `product_recommendation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_code`, `product_title`, `product_price`, `product_discount`, `product_image`, `product_description`, `product_detail`, `user_id`, `product_updated_date`, `product_cate_id`, `unit_id`, `product_num`, `product_recommendation`) VALUES
(13, 'NT1PLANET1', 'Giường planet', '400000', '360000', 'notthat1-planet2.png', '<p><label>Chất liệu</label>: Nhựa, Gỗ</p>\r\n\r\n<p><label>Xuất xứ</label>: Việt Nam</p>\r\n\r\n<p><label>K&iacute;ch thước (d&agrave;i x rộng x cao)</label>:100x100x25</p>\r\n\r\n', '<p>✪ Chất liệu: Gỗ thông cao cấp nhập khẩu, MỚI 100%, đã được xử lý chống mối mọt, cong vênh.</p>\r\n\r\n<p>✪ Màu sắc: Vàng gỗ tự nhiên.</p>\r\n\r\n<p>✪ Kích thước: linh hoạt,&nbsp;1m6x2m</p>\r\n\r\n<p>✪ H&agrave;ng được gia c&ocirc;ng kỹ, bề mặt nhẵn, l&aacute;ng, 4 g&oacute;c giường được m&agrave;i kỹ.</p>\r\n\r\n<p>✪ Kh&aacute;ch cần k&iacute;ch thước kh&aacute;c, c&oacute; thể li&ecirc;n hệ xưởng.</p>\r\n\r\n<p>✪ H&agrave;ng c&oacute; sẵn trong kho, nếu kh&aacute;ch cần giao trong ng&agrave;y, c&oacute; thể inbox/zalo qua sdt của xưởng.</p>\r\n\r\n<p>✪ Ch&acirc;n cao 20cm trở l&ecirc;n.</p>\r\n', 1, '2022-11-28 16:45:18', 1, 2, 34, 0),
(14, 'NT1BAN1', 'Bàn làm việc ', '390000', '355000', 'notthat1-bantrang2.png', '<p><label>Lắp r&aacute;p</label>: Y&ecirc;u cầu lắp r&aacute;p</p>\r\n\r\n<p><label>Chất liệu</label>: Kim loại, Gỗ</p>\r\n\r\n<p><label>K&iacute;ch thước (d&agrave;i x rộng x cao)</label>: 80/120 x 40/60 x 75cm</p>\r\n', '<p>- M&agrave;u sắc: Mặt b&agrave;n (Trắng - v&acirc;n gỗ), ch&acirc;n b&agrave;n m&agrave;u trắng</p>\r\n\r\n<p>- K&iacute;ch thước: Nhỏ (80x40x75cm), Lớn (120x60x75cm)</p>\r\n\r\n<p>- Chất liệu: Mặt b&agrave;n gỗ MDF phủ melamin chống xước chống nước, ch&acirc;n th&eacute;p chống ghỉ sơn tĩnh điện</p>\r\n\r\n<p>- Thiết kế hiện đại tối giản dễ d&agrave;ng decor th&agrave;nh b&agrave;n học, b&agrave;n gaming, b&agrave;n trang điểm...</p>\r\n\r\n<p>- Cấu tạo: Lắp r&aacute;p đ&oacute;ng g&oacute;i an to&agrave;n theo ti&ecirc;u chuẩn xuất khẩu</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2022-11-29 03:58:57', 1, 2, 1, 0),
(15, 'NT1BAN2', 'Bàn làm việc bệt', '300000', '249000', 'notthat1-banden1.png', '<p><label>Loại b&agrave;n</label>:B&agrave;n văn ph&ograve;ng</p>\r\n\r\n<p><label>Nội thất gấp lại</label>: C&oacute;</p>\r\n\r\n<p>K&iacute;ch thước: R40cm, D80cm, C35cm</p>\r\n', '<p>☘ C&ocirc;ng dụng: l&agrave;m b&agrave;n học, b&agrave;n l&agrave;m việc, b&agrave;n ăn</p>\r\n\r\n<p>☘ Ưu điểm: chịu nước v&agrave; nhiệt được, c&oacute; thể gấp lại được</p>\r\n\r\n<p>☘ Chất liệu: mặt b&agrave;n l&agrave;m bằng gỗ cao su d&agrave;y 18ly phủ keo b&oacute;ng hai mặt, ch&acirc;n sắt hộp d&agrave;y 1ly, kết hợp với bản lề gấp gọn, dưới ch&acirc;n c&oacute; 4 đế cao su tạo n&ecirc;n sự &ecirc;m &aacute;i v&agrave; tr&aacute;nh l&agrave;m xước nền nh&agrave; bạn</p>\r\n\r\n<p>☘ K&iacute;ch thước: R40cm, D80cm, C35cm</p>\r\n', 1, '2022-11-29 04:09:26', 1, 2, 36, 0),
(16, 'NT1GHE1', 'Ghế', '220000', '189000', 'notthat1-ghe1.png', '<p><label>Chất liệu</label>: Kim loại, Nhựa, Gỗ</p>\r\n\r\n<p><label>Nội thất gấp lại</label>: Kh&ocirc;ng</p>\r\n\r\n<p><label>K&iacute;ch thước (d&agrave;i x rộng x cao)</label>: 45*45*81</p>\r\n', '<p>&bull;Chất liệu: Nhựa, ch&acirc;n gỗ , sắt sơn tĩnh điện</p>\r\n\r\n<p>&bull;K&iacute;ch thước: 46 x 56 x 41 x 81 (cm) - cao 45cm từ mặt đất l&ecirc;n mặt ngồi.</p>\r\n\r\n<p>➡️Ghế Eames l&agrave; một sản phẩm tuyệt vời do Eames thiết kế lu&ocirc;n c&oacute; sức h&uacute;t v&agrave; lan truyền kỳ lạ, từ những tạp ch&iacute; nội thất nổi tiếng đến những nh&agrave; h&agrave;ng kh&aacute;ch sạn sang trọng hay trong c&aacute;c gia đ&igrave;nh tầng lớp thượng lưu bạn đều c&oacute; thể bắt gặp.</p>\r\n\r\n<p>➡️Mặt ngồi ghế h&otilde;m s&acirc;u, d&aacute;ng ghế như một th&aacute;c nước đổ xuống giữ cho người ngồi thoải m&aacute;i bằng c&aacute;ch giảm &aacute;p lực l&ecirc;n lưng v&agrave; đ&ugrave;i. Qua đ&oacute; bạn c&oacute; thể ngồi l&acirc;u hơn tr&ecirc;n ghế m&agrave; kh&ocirc;ng cảm thấy mỏi.</p>\r\n\r\n<p>➡️L&agrave; một thiết kế cổ điển, nhưng r&otilde; r&agrave;ng c&oacute; khả năng th&iacute;ch ứng rất cao với mọi kh&ocirc;ng gian v&agrave; mọi phong c&aacute;ch: từ b&agrave;n tr&agrave;, b&agrave;n c&agrave; ph&ecirc;, b&agrave;n ăn, ph&ograve;ng bếp đến g&oacute;c học tập hay l&agrave;m việc&hellip;</p>\r\n\r\n<p>➡️Các m&acirc;̃u gh&ecirc;́ Eames được đúc nguy&ecirc;n kh&ocirc;́i với những đường cong n&acirc;ng niu cơ th&ecirc;̉ người dùng, mang lại m&ocirc;̣t ch&ocirc;̃ ng&ocirc;̀i thoải mái và linh hoạt cùng sự đa dạng màu sắc đ&ecirc;̉ bạn thoải mái lựa chọn sẽ đem đ&ecirc;́n cho b&acirc;́t kỳ kh&ocirc;ng gian nào có nó m&ocirc;̣t làn sóng mới vừa hi&ecirc;̣n đại, vừa c&ocirc;̉ đi&ecirc;̉n, đẹp tinh t&ecirc;́ và sang trọng. Gh&ecirc;́ Eames đặc bi&ecirc;̣t được các quán cà ph&ecirc;, nhà hàng khắp th&ecirc;́ giới ưa chu&ocirc;̣ng và hi&ecirc;̣n nay các quán cà ph&ecirc; ở Vi&ecirc;̣t Nam cũng bắt đ&acirc;̀u săn lùng chi&ecirc;́c gh&ecirc;́ này đ&ecirc;̉ mang lại vẻ đẹp tinh t&ecirc;́ thanh thoát và vẻ sang trọng hi&ecirc;̣n đại mà chiếc ghế mang lại cho kh&ocirc;ng gian có nó.</p>\r\n', 1, '2022-11-29 04:15:17', 1, 2, 98, 0),
(17, 'NT1KETREO1', 'Kệ treo quần áo chữ A', '190000', '149000', 'notthat1-ketreo1.png', '<p><label>Loại tủ quần &aacute;o</label>: Kệ treo quần &aacute;o, trang tr&iacute;</p>\r\n\r\n<p><label>Loại bảo h&agrave;nh</label>: 1 đổi 1 trong 7 ng&agrave;y</p>\r\n\r\n<p><label>K&iacute;ch thước (d&agrave;i x rộng x cao)</label>: 2 tầng: 83x34x150cm, 1 tầng: 74x33x140cm</p>\r\n', '<p>- H&agrave;ng chất lượng đảm bảo ti&ecirc;u ch&iacute; NGON-BỔ-RẺ</p>\r\n\r\n<p>- H&agrave;ng h&oacute;a được test rất kỹ trước khi gửi (hạn chế t&igrave;nh trạng lỗi do NSX)</p>\r\n\r\n<p>- Chế độ bảo h&agrave;nh 1 đổi 1 trong 10 ng&agrave;y đầu cho tất cả sản phẩm.</p>\r\n\r\n<p>- Cam kết về chất lượng sản phẩm, Shop cam kết cả về CHẤT LIỆU cũng như H&Igrave;NH ẢNH (đ&uacute;ng với những g&igrave; được n&ecirc;u bật trong phần m&ocirc; tả sản phẩm).</p>\r\n\r\n<p>- Hỗ trợ giải quyết đơn h&agrave;ng trong thời gian sớm nhất với phương &aacute;n tốt nhất để kh&aacute;ch h&agrave;ng lu&ocirc;n cảm thấy h&agrave;i l&ograve;ng v&agrave; y&ecirc;n t&acirc;m khi mua sắm.</p>\r\n\r\n<p>Kệ Treo Quần &Aacute;o Chữ A 2 Tầng Gỗ Th&ocirc;ng Cao Cấp - Gi&aacute; Gỗ Th&ocirc;ng Treo Đồ - K&iacute;ch Thước 150*85*34cm - Bảo H&agrave;nh 1 Năm</p>\r\n\r\n<p>🍀 TH&Ocirc;NG SỐ:</p>\r\n\r\n<p>- K&iacute;ch thước:</p>\r\n\r\n<p>+ Kệ Treo Quần &Aacute;o Chữ A 2 Tầng: 150x83x33cm (cao x d&agrave;i x rộng) - C&acirc;y S&agrave;o phi 2cm</p>\r\n\r\n<p>K&iacute;ch thước đ&oacute;ng hộp: 150*35*7cm</p>\r\n\r\n<p>- Chất liệu: Gỗ th&ocirc;ng nhập khẩu Brazil/Phần Lan/Mỹ/ Newzealand t&ugrave;y thời điểm</p>\r\n\r\n<p>- M&agrave;u sắc: Gỗ th&ocirc;ng tự nhi&ecirc;n</p>\r\n\r\n<p>- Xuất xứ: Việt Nam</p>\r\n\r\n<p>- Mẫu m&atilde; thiết kế: H&agrave;n Quốc</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>🍀 C&Ocirc;NG DỤNG:</p>\r\n\r\n<p>- Kệ Treo Quần &Aacute;o Chữ A 2 Tầng d&ugrave;ng để treo v&agrave; cất giữ quần &aacute;o trong ph&ograve;ng ngủ thay thế tủ đồ.</p>\r\n\r\n<p>- Gi&aacute; gỗ th&ocirc;ng treo đồ đa năng ph&ugrave; hợp cho Shop thời trang treo c&aacute;c sản phẩm quần &aacute;o .</p>\r\n\r\n<p>- Ph&ugrave; hợp với c&aacute;c căn hộ nhỏ, chung cư, dịch vụ homestay,...</p>\r\n\r\n<p>- Kệ Treo Quần &Aacute;o Chữ A 2 Tầng dễ d&agrave;ng th&aacute;o lắp, di chuyển &amp; t&ugrave;y biến mục đ&iacute;ch sử dụng theo &yacute; muốn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>🍀 HƯỚNG DẪN SỬ DỤNG:</p>\r\n\r\n<p>- Gi&aacute; Treo Quần &Aacute;o Chữ A 2 Tầng tự lắp r&aacute;p, nguy&ecirc;n kiện bao gồm bộ dụng cụ lắp r&aacute;p.</p>\r\n\r\n<p>- Hạn chế tiếp x&uacute;c với &aacute;nh nắng mặt trời, nơi ẩm ướt. Sử dụng c&aacute;c chất tẩy rửa chuy&ecirc;n dụng để kh&ocirc;ng l&agrave;m mất độ thẩm mỹ của gỗ.</p>\r\n\r\n<p>- Bảo h&agrave;nh 1 đổi 1 trong v&ograve;ng 7 ng&agrave;y lỗi c&aacute;c lỗi do sản xuất v&agrave; vận chuyển.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2022-11-29 04:21:51', 1, 4, 32, 0),
(18, 'NT1KESACH1', 'Kệ sách', '255000', '199000', 'notthat1-kesach1.png', '<p><label>Lắp r&aacute;p</label>: Y&ecirc;u cầu lắp r&aacute;p</p>\r\n\r\n<p><label>Chất liệu</label>: Gỗ</p>\r\n\r\n<p><label>K&iacute;ch thước (d&agrave;i x rộng x cao)</label>: 70x20x140</p>\r\n', '<p>🌿🌿🌿M&ocirc; tả sản Phẩm🌿🌿🌿</p>\r\n\r\n<p>❤️ Chất liệu: Gỗ MDF nhập khẩu loại tốt, phủ nhựa menamin b&oacute;ng l&aacute;ng. Bề mặt vật liệu kh&ocirc;ng thấm nước, cấu tr&uacute;c bền vững kh&ocirc;ng ẩm mốc mối mọt.</p>\r\n\r\n<p>❤️K&iacute;ch thước: cao 140cm x ngang 70cm x rộng 20cm</p>\r\n\r\n<p>❤️ M&agrave;u sắc Trắng , gỗ d&agrave;y 12mm tạo n&ecirc;n sự sang trọng cho ng&ocirc;i nh&agrave; bạn.</p>\r\n\r\n<p>❤️ kiểu d&aacute;ng tinh tế, m&agrave;u sắc trang nh&atilde;.</p>\r\n\r\n<p>❤️ Kết hợp vừa l&agrave; kệ treo, vừa l&agrave;m kệ đựng quần &aacute;o, gi&agrave;y d&eacute;p v&agrave; c&aacute;c phụ kiện cần thiết.</p>\r\n\r\n<p>🌿🌿🌿CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH🌿🌿🌿</p>\r\n\r\n<p>❤️ Được kiểm h&agrave;ng kỹ trước khi thanh to&aacute;n</p>\r\n\r\n<p>❤️ 1 đổi 1 trong v&ograve;ng 30 ng&agrave;y nếu lỗi do nh&agrave; sản xuất</p>\r\n\r\n<p>❤️ Hỗ trợ đổi trả v&agrave; giải quyết trong trường hợp hư hỏng do vận chuyển , l&agrave;m kh&aacute;ch h&agrave;ng kh&ocirc;ng sử dụng được .</p>\r\n\r\n<p>❤️ Tư vấn hỗ trợ kỹ thuật trọn đời .</p>\r\n\r\n<p>❤️ Đồng &yacute; thu hồi sản phẩm , đổi sang sản phẩm kh&aacute;c của shop trong v&ograve;ng 30 ng&agrave;y theo y&ecirc;u cầu kh&aacute;ch.</p>\r\n', 1, '2022-11-29 04:59:14', 1, 4, 18, 1),
(19, 'NT1KEDEP1', 'Kệ dép', '230000', '180000', 'notthat1-ketdep1.png', '<p><label>Lắp r&aacute;p</label>: Y&ecirc;u cầu lắp r&aacute;p</p>\r\n\r\n<p><label>Chất liệu</label>: Kim loại</p>\r\n\r\n<p><label>Xuất xứ</label>: Trung Quốc</p>\r\n', '<p>Kệ để gi&agrave;y d&eacute;p đa năng 5 tầng c&oacute; m&oacute;c treo</p>\r\n\r\n<p>--------------------------------------</p>\r\n\r\n<p>💯 Kệ để gi&agrave;y d&eacute;p đa năng 5 tầng c&oacute; m&oacute;c treo c&oacute; thiết kế đa năng cơ bản ch&iacute;nh vẫn l&agrave; để gi&agrave;y d&eacute;p nhưng c&oacute; thiết kế th&ecirc;m gi&aacute; treo đồ b&ecirc;n tr&ecirc;n rất tiện lợi, họa văn dễ thương với 3,4, 5, tầng dễ d&agrave;ng lắp r&aacute;p th&aacute;o rời, bảo vệ gi&agrave;y d&eacute;p được cất giữ gọn g&agrave;ng ngăn nắp. 💯</p>\r\n\r\n<p>--------------------------------------</p>\r\n\r\n<p>👉 Kệ để gi&agrave;y d&eacute;p đa năng 5 tầng c&oacute; m&oacute;c treo đầy đủ bao gồm :</p>\r\n\r\n<p>❶ Kệ để gi&agrave;y d&eacute;p</p>\r\n\r\n<p>❷ Hộp đựng. --------------------------------------</p>\r\n\r\n<p>👉 T&Iacute;NH NĂNG của Kệ để gi&agrave;y d&eacute;p đa năng 5 tầng c&oacute; m&oacute;c treo: &ndash; Kệ gi&agrave;y gi&uacute;p bạn lưu trữ v&agrave; quản l&yacute; gi&agrave;y, d&eacute;p một c&aacute;ch gọn g&agrave;ng, ngăn nắp, giữ form gi&agrave;y, d&eacute;p lu&ocirc;n đẹp như mới. &ndash; Kiểu d&aacute;ng chắc chắn, nhỏ gọn gi&uacute;p tiết kiệm được tối đa diện t&iacute;ch nh&agrave; bạn. &ndash; C&oacute; thể d&ugrave;ng l&agrave;m kệ để s&aacute;ch b&aacute;o, cặp t&uacute;i, gấu b&ocirc;ng cho b&eacute;&hellip; &ndash; Thiết kế cơ động, dễ d&agrave;ng để lắp hoặc th&aacute;o rời. &ndash; Chất liệu cao cấp , bền đẹp &ndash; C&oacute; gi&aacute; để đồ b&ecirc;n tr&ecirc;n rất tiện lợi &ndash; Mẫu m&atilde; đẹp, ph&ugrave; hợp cho trong mọi kh&ocirc;ng gian nội thất nh&agrave; bạn.</p>\r\n\r\n<p>--------------------------------------</p>\r\n\r\n<p>📌📌 TH&Ocirc;NG SỐ CHI TIẾT của Kệ để gi&agrave;y d&eacute;p Inox đa năng SAGOKER:</p>\r\n\r\n<p>- Chất liệu: Khung th&eacute;p chống gỉ</p>\r\n\r\n<p>- Chất liệu chốt nối: Nhựa -</p>\r\n\r\n<p>K&iacute;ch thước: + 4 tầng - Xịn: 60 x 26 x 152 (cm) + 5 tầng - Xịn: 60 x 26 x 172 (cm) + 5 tầng</p>\r\n\r\n<p>--------------------------------------</p>\r\n\r\n<p>✅ Lưu &yacute;: Do &aacute;nh s&aacute;ng đ&egrave;n cao khi chụp sản phẩm v&agrave; h&igrave;nh ảnh m&ocirc; tả to nhỏ khi chụp ảnh kh&aacute;c nhau n&ecirc;n m&agrave;u sắc của sản phẩm v&agrave; k&iacute;ch thước c&oacute; thể kh&aacute;c một ch&uacute;t so với thực tế,</p>\r\n\r\n<p>⭐ BẢO H&Agrave;NH 1 ĐỔI 1 KH&Ocirc;NG CẦN BIẾT L&Iacute; DO TRONG V&Ograve;NG 3 NG&Agrave;Y, NẾU KH&Ocirc;NG H&Agrave;I L&Ograve;NG VỀ SẢN PHẨM, VUI L&Ograve;NG LI&Ecirc;N HỆ SHOP ĐỂ ĐƯỢC ĐỔI TRẢ HOẶC HO&Agrave;N TIỀN ⭐</p>\r\n', 1, '2022-11-29 05:13:11', 1, 4, 48, 0),
(20, 'NT1SOFA1', 'Ghế sofa lười', '250000', '210000', 'notthat1-gheluoi1.png', '<p><label>Bọc vải</label>: Antara, Cotton</p>\r\n\r\n<p><label>Nội thất gấp lại</label>: C&oacute;</p>\r\n\r\n<p>B&ecirc;n trong: đ&atilde; c&oacute; b&ocirc;ng hạt đệm</p>\r\n', '<p>1 T&uacute;i Đậu Người Lớn, Sofa Trong Nh&agrave;, Kh&ocirc;ng C&oacute; Đệm. Mềm mại v&agrave; thoải m&aacute;i, nắp v&agrave; lớp l&oacute;t được t&aacute;ch rời để dễ d&agrave;ng vệ sinh.</p>\r\n\r\n<p>C&oacute; thể giặt m&aacute;y hoặc giặt tay. Số ba.</p>\r\n\r\n<p>Thiết kế tiện dụng, hỗ trợ cơ thể ho&agrave;n hảo, tư thế ngồi thoải m&aacute;i. Si&ecirc;u thoải m&aacute;i, ho&agrave;n hảo để ngồi, vỗ nhẹ v&agrave; đi ra ngo&agrave;i.</p>\r\n\r\n<p>Trang tr&iacute; đẹp mắt, th&iacute;ch hợp cho ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, ph&ograve;ng tr&ograve; chơi, k&yacute; t&uacute;c x&aacute;, v.v.</p>\r\n\r\n<p>Ti&ecirc;u chuẩn: Sản phẩm n&agrave;y kh&ocirc;ng chứa bất kỳ chất phụ gia n&agrave;o. Chất liệu mềm DIY c&oacute; thể nạp lại, dễ d&agrave;ng th&aacute;o rời v&agrave; vệ sinh. Th&iacute;ch hợp cho ghế sofa v&agrave; đồ trang tr&iacute;.</p>\r\n\r\n<p>Chất liệu: vải</p>\r\n\r\n<p>Ứng dụng: Ph&ograve;ng kh&aacute;ch</p>\r\n\r\n<p>D&agrave;nh cho: người lớn</p>\r\n\r\n<p>Khung: kh&ocirc;ng c&oacute; khung xương</p>\r\n\r\n<p>Đệm b&ecirc;n trong: kh&ocirc;ng c&oacute;</p>\r\n', 1, '2022-11-29 05:22:31', 1, 2, 76, 0),
(21, 'CT2SAN1', 'Miếng dán sàn giả gỗ', '10000', '5900', 'caitao2-dansan4.png', '<p><label>Loại thảm</label>: L&oacute;t s&agrave;n</p>\r\n\r\n<p><label>Chiều rộng</label>: 15.2cm</p>\r\n\r\n<p><label>Chiều d&agrave;i</label>: 91.4cm</p>\r\n', '<p>S&Agrave;N NHỰA GIẢ V&Acirc;N GỖ CAO CẤP LOẠI 1.</p>\r\n\r\n<p>Chất liệu nhựa PVC + Khi mua sản phẩm của shop, kh&aacute;ch vui l&ograve;ng inbox để shop gửi hướng dẫn thi c&ocirc;ng sao cho đẹp v&agrave; bền nhất + Hiện tại tr&ecirc;n thị trường đang b&aacute;n 1 số mặt h&agrave;ng nh&aacute;i k&eacute;m chất lượng. Qu&yacute; kh&aacute;ch h&atilde;y cẩn trọng v&agrave; chọn cho m&igrave;nh 1 sản phẩm tốt, đảm bảo sức khỏe gia đ&igrave;nh, c&oacute; độ bền cao.</p>\r\n\r\n<p>K&iacute;ch thước tấm: 152 x 914 x 2 mm</p>\r\n\r\n<p>Trọng lượng tấm: 500gr C&aacute;ch t&iacute;nh ra số tấm: bạn lấy (chiều ngang x chiều rộng) x 7.2 = số tấm cần d&ugrave;ng cho diện t&iacute;ch nh&agrave; m&igrave;nh.</p>\r\n\r\n<p>🌅S&agrave;n nhựa giả gỗ d&aacute;n keo Vinyl thế hệ mới c&oacute; g&igrave; đặc biệt hơn???? Đặc biệt lớn nhất của loại s&agrave;n nhựa giả gỗ n&agrave;y l&agrave; c&oacute; lớp keo d&aacute;n sẵn, chỉ việc b&oacute;c lớp giấy bảo vệ ra v&agrave; dễ d&agrave;ng d&aacute;n l&ecirc;n bất k&igrave; bề mặt chất liệu n&agrave;o v&agrave; bất k&igrave; ai cũng c&oacute; thể tự thi c&ocirc;ng được, kh&ocirc;ng cần thu&ecirc; người, tốn th&ecirc;m chi ph&iacute;.</p>\r\n\r\n<p>♻️S&agrave;n nhựa giả gỗ tự d&aacute;n c&oacute; tốt kh&ocirc;ng? Đ&acirc;y l&agrave; sản phẩm s&agrave;n nhựa thế hệ mới 2019, với c&ocirc;ng nghệ sản xuất đặc biệt thay thế cho loại s&agrave;n nhựa cũ, với chất lượng keo đi k&egrave;m c&oacute; độ b&aacute;m d&iacute;nh đạt ti&ecirc;u chuẩn EC ( ti&ecirc;u chuẩn Ch&acirc;u &acirc;u), ch&uacute;ng t&ocirc;i cam kết độ bền tr&ecirc;n 5 năm so với c&aacute;c sản phẩm nổi trội... Thi c&ocirc;ng: S&agrave;n nhựa v&acirc;n gỗ c&oacute; thể d&aacute;n trực tiếp xuống nền xi măng hoặc nền gạch b&ocirc;ng cũ m&agrave; kh&ocirc;ng cần th&ecirc;m bất cứ lớp đệm n&agrave;o. Hoa văn: So về mẫu m&atilde;, s&agrave;n gỗ c&ocirc;ng nghiệp hay s&agrave;n gỗ tự nhi&ecirc;n sẽ bị hạn chế về mẫu m&atilde;, trong khi s&agrave;n nhựa giả gỗ d&aacute;n keo Vinyl thế hệ mới rất đa dạng về m&agrave;u sắc, s&agrave;n gỗ g&acirc;y tiếng ồn c&ograve;n s&agrave;n nhựa khi di chuyển th&igrave; kh&ocirc;ng hề tạo ra bất cứ tiếng ồn n&agrave;o. K&iacute;ch thước của tấm nguy&ecirc;n l&agrave; 152.194mm trong mục ph&acirc;n loại shop l&agrave;m tr&ograve;n 15.91cm cho dễ t&iacute;nh diện t&iacute;ch qu&yacute; kh&aacute;ch nh&eacute;.</p>\r\n\r\n<p>###kh&aacute;ch vui l&ograve;ng ghi số loại d&aacute;n s&agrave;n v&agrave;o ghi ch&uacute; khi đặt h&agrave;ng.</p>\r\n', 1, '2022-11-29 08:49:08', 2, 3, 1668, 1),
(22, 'CT2SAN2', 'Sàn cuộn nhựa simili trải sàn vân gỗ nhám', '30000', '25000', 'caitao2-cuonsang1.png', '<p><label>Loại thảm</label>: L&oacute;t s&agrave;n</p>\r\n\r\n<p><label>Xuất xứ</label>: Trung Quốc</p>\r\n\r\n<p><label>Chất liệu</label>: nhựa PVC</p>\r\n', '<p>THẢM NHỰA TRẢI S&Agrave;N GIẢ GỖ - SIMILI V&Acirc;N GỖ NH&Aacute;M</p>\r\n\r\n<p>#####Vui l&ograve;ng ghi m&atilde; số m&agrave;u v&agrave;o ghi ch&uacute; khi đặt h&agrave;ng</p>\r\n\r\n<p>- Bề mặt simili nh&aacute;m r&otilde; v&acirc;n gỗ nh&igrave;n như gỗ thật rất đẹp - Do được sản xuất từ chất liệu nhựa cao cấp, thảm simili l&oacute;t s&agrave;n c&oacute; khả năng chống thấm nước, chống trơn trượt, chống ch&aacute;y v&agrave; chịu nhiệt tốt. - thảm nhựa trải s&agrave;n v&acirc;n gỗ</p>\r\n\r\n<p>- simili trải s&agrave;n v&acirc;n gỗ c&oacute; nhiều m&agrave;u c&aacute;c bạn nhấn v&agrave;o đặt mua n&oacute; sẽ hiện ra ,m&agrave;u sắc cho c&aacute;c bạn chọn nhe.</p>\r\n\r\n<p>- Chịu được m&agrave;i m&ograve;n b&aacute;nh xe, chịu được lực ma s&aacute;t, &iacute;t l&agrave;m thay đổi cốt nền, c&oacute; khả năng c&aacute;ch điện, chống h&oacute;a chất ăn m&ograve;n. - kh&ocirc;ng thấm nước, thuận tiện cho việc lau chịu m&agrave; kh&ocirc;ng lo sản phẩm bị ẩm mốc khi lau ch&ugrave;i.</p>\r\n\r\n<p>- Khả năng đ&agrave;n hồi tốt, kh&ocirc;ng bị c&aacute;c vết hằn hay biến dạng khi bị vật nặng đ&egrave; l&ecirc;n hoặc khi người đi lại nhiều. - Độ bền tốt, c&oacute; khả năng giữ m&agrave;u cao với c&aacute;c sản phẩm c&oacute; t&ocirc;ng m&agrave;u sẫm.</p>\r\n\r\n<p>- B&ecirc;n m&igrave;nh chuy&ecirc;n b&aacute;n simili v&acirc;n gỗ nh&aacute;m , thảm nỉ trải s&agrave;n , cỏ nh&acirc;n tạo ...</p>\r\n\r\n<p>- Simili kh&ocirc;ng c&oacute; keo b&ecirc;n dưới n&ecirc;n c&aacute;c bạn mua th&ecirc;m keo sữa để d&aacute;n nhe . B&ecirc;n m&igrave;nh c&oacute; b&aacute;n keo sữa v&agrave; tấm gạt nhựa để d&aacute;n ạ . C&Aacute;CH ĐẶT H&Agrave;NG :</p>\r\n\r\n<p>- Simili khổ 1m b&aacute;n theo m&eacute;t tới , n&ecirc;n c&aacute;c bạn đặt nhiều sẽ cắt th&agrave;nh 1 cuộn chứ ko cắt lẻ từng tấm nh&eacute;</p>\r\n\r\n<p>- V&iacute; dụ c&aacute;c bạn đặt số lượng 10 th&igrave; sẽ được 1 cuộn ngang 1m d&agrave;i 10m nhe</p>\r\n\r\n<p>C&Aacute;CH SỬ DỤNG :</p>\r\n\r\n<p>- c&aacute;c bạn vệ sinh sạch bề mặt s&agrave;n trước khi d&aacute;n nhe , sau khi vệ sinh xong qu&eacute;t 1 lớp keo mỏng dưới mặt s&agrave;n rồi trải simili l&ecirc;n , sau đ&oacute; d&ugrave;ng tấm gạt nhựa gạt cho tấm thảm simili phẳng , phần simili c&ograve;n dư trong g&oacute;c th&igrave; d&ugrave;ng dao rọc giấy cắt bỏ .</p>\r\n\r\n<p>- Những m&iacute; nối c&aacute;c bạn n&ecirc;n b&ocirc;i nhiều keo hơn nhe .</p>\r\n\r\n<p>C&Aacute;CH G&Oacute;I H&Agrave;NG :</p>\r\n\r\n<p>- Simili khổ 1m b&ecirc;n m&igrave;nh cuộn tr&ograve;n lại th&agrave;nh 1 cuộn d&agrave;i 1m , rồi bọc m&agrave;ng PE b&ecirc;n ngo&agrave;i 2 đầu bọc xốp bạc , đảm bảo khi giao đến kh&aacute;ch h&agrave;ng simili c&ograve;n nguy&ecirc;n vẹn kh&ocirc;ng bị gấp nếp hay r&aacute;ch .</p>\r\n', 1, '2022-11-29 09:04:13', 2, 1, 139, 0),
(23, 'CT2TUONG1', 'Miếng dán tường/trần nhà bằng xốp stereo 3d', '8000', '6000', 'caitao2-dantuong1.png', '<p>K&iacute;ch thước: 45x45cm</p>\r\n\r\n<p>Chất liệu: xốp</p>\r\n', '<p>Sử dụng cho: Tường nh&agrave; bếp, Ph&ograve;ng ngủ, Ph&ograve;ng kh&aacute;ch, Nền TV</p>\r\n\r\n<p>Điểm nổi bật: Tự d&iacute;nh, Kh&ocirc;ng thấm nước, C&oacute; thể th&aacute;o rời, Mặt sau c&oacute; keo</p>\r\n\r\n<p>### vui l&ograve;ng ghi số m&agrave;u ở ghi ch&uacute; khi đặt h&agrave;ng</p>\r\n\r\n<p>Đặc điểm:</p>\r\n\r\n<p>1: Chất xốp mềm trang tr&iacute; ba chiều, chống va chạm cho trẻ, chăm s&oacute;c cho gia đ&igrave;nh bạn an to&agrave;n.</p>\r\n\r\n<p>2: An to&agrave;n v&agrave; bảo vệ m&ocirc;i trường, kh&ocirc;ng độc hại v&agrave; kh&ocirc;ng m&ugrave;i, ph&ugrave; hợp với kh&ocirc;ng gian gia đ&igrave;nh v&agrave; an to&agrave;n cho gia đ&igrave;nh.</p>\r\n\r\n<p>3: Sống động như thật, hiệu ứng v&acirc;n gạch tự nhi&ecirc;n, phong c&aacute;ch đơn giản v&agrave; hiện đại.</p>\r\n\r\n<p>4: Tự do DIY, thiết kế tự d&iacute;nh dễ d&agrave;ng, lắp đặt, cắt d&aacute;n th&ocirc;ng thường, cắt t&ugrave;y &yacute;.</p>\r\n\r\n<p>5: Hiệu quả giảm tiếng ồn tốt hơn so với giấy d&aacute;n tường. Phương ph&aacute;p v&agrave; c&ocirc;ng cụ lắp đặt Chuẩn bị: D&aacute;n l&ecirc;n bề mặt sạch c&oacute; độ b&aacute;m d&iacute;nh như: bề mặt gỗ, bề mặt k&iacute;nh, tường kh&ocirc;ng bụi, bột tr&eacute;t ch&acirc;n tường, vv.</p>\r\n\r\n<p>D&aacute;n: Mặt lưng c&oacute; miếng giấy d&aacute;n dạng lột với dụng cụ hỗ trợ: k&eacute;o, dao tiện lợi Ch&uacute; &yacute;: Vui l&ograve;ng mua đủ số lượng mỗi lần để đảm bảo ch&uacute;ng đến từ c&ugrave;ng một l&ocirc; để tr&aacute;nh sự kh&aacute;c biệt về m&agrave;u.</p>\r\n', 1, '2022-11-29 09:11:48', 2, 1, 1200, 2),
(24, 'CT2TUONG2', 'Giấy Dán Tường Xi Măng Sẵn Keo Bóc Dán', '60000', '53000', 'caitao2-dangiay4.png', '<p>Chất liệu: PVC</p>\r\n\r\n<p>K&iacute;ch thước: 0.45cmx10m</p>\r\n', '<p>10M Giấy D&aacute;n Tường Xi Măng, B&ecirc; T&ocirc;ng Sẵn Keo B&oacute;c D&aacute;n, Khổ 45cm, Dễ D&aacute;n</p>\r\n\r\n<p>####Vui l&ograve;ng ghi số m&agrave;u v&agrave;o ghi ch&uacute; khi đặt h&agrave;ng</p>\r\n\r\n<p>* GIẤY C&Oacute; KHỔ RỘNG CỐ ĐỊNH 0.45 CM, CHIỀU D&Agrave;I ĐỂ D&Agrave;I 10 M&Eacute;T.</p>\r\n\r\n<p>* GIẤY C&Oacute; SẴN KEO Ở MẶT SAU, KH&Ocirc;NG CẦN B&Ocirc;I TH&Ecirc;M KEO, CHỈ LỘT RA V&Agrave; D&Aacute;N * .</p>\r\n\r\n<p>* Ưu điểm:</p>\r\n\r\n<p>- Dai bền, lau ch&ugrave;i thoải m&aacute;i bằng nước. dễ d&agrave;ng lau ch&ugrave;i v&agrave; thay đổi decal mới. Độ b&aacute;m d&iacute;nh tốt, kh&ocirc;ng g&acirc;y hại đến sức khoẻ, th&acirc;n thiện với m&ocirc;i trường.</p>\r\n\r\n<p>- D&aacute;n được tr&ecirc;n nhiều loại bề mặt vật liệu bằng phẳng: tường v&ocirc;i bằng phẳng, gỗ, v&aacute;n, k&iacute;nh, đ&aacute; thạch anh&hellip;,Kh&ocirc;ng th&iacute;ch hợp d&aacute;n tr&ecirc;n tường ẩm ướt, bong tr&oacute;c, nh&aacute;m, th&ocirc;..(cần c&oacute; xử l&yacute; chống thấm, lăn bột chuy&ecirc;n dụng trước khi d&aacute;n).</p>\r\n\r\n<p>* Đối với mặt tường phẳng mịn kh&ocirc;ng bong tr&oacute;c ẩm ướt, độ bền sử dụng c&oacute; thể l&ecirc;n tới 5-6 năm.</p>\r\n\r\n<p>* C&aacute;ch t&iacute;nh giấy 1 bức tường: (chiều d&agrave;i ( hoặc rộng) x chiều cao) / 0.45= số m&eacute;t giấy cần mua. Vd: 1 bức tường c&oacute; chiều d&agrave;i 3m x chiều cao 3m = 9 m&eacute;t vu&ocirc;ng/0.45 = mua 20 m&eacute;t giấy (nhấp chọn số lượng 20)</p>\r\n\r\n<p>* Lời khuy&ecirc;n: N&ecirc;n đo tường t&iacute;nh giấy, trừ hao v&agrave; mua đủ giấy một lần, tr&aacute;nh t&igrave;nh trạng mua hai lần bị lệch m&agrave;u (do kh&aacute;c l&ocirc; h&agrave;ng sản xuất). SHOP KH&Ocirc;NG CHỊU TR&Aacute;CH GIẢI QUYẾT VẤN ĐỀ LỆCH M&Agrave;U DO KH&Aacute;CH MUA HAI LẦN KH&Aacute;C NHAU.</p>\r\n\r\n<p>* C&aacute;ch d&aacute;n giấy: lột giấy d&aacute;n từ tr&ecirc;n đỉnh cao d&aacute;n xuống thấp, d&aacute;n tới đ&acirc;u lột giấy ra tới đ&oacute;, miết chặt giấy v&agrave;o tường bằng dụng cụ miết giấy hoặc vải kh&ocirc; mềm. C&oacute; thể d&ugrave;ng m&aacute;y sấy t&oacute;c sấy n&oacute;ng v&agrave; &eacute;p miết giấy một lần nữa v&agrave;o tường, đặc biệt l&agrave; c&aacute;c mối nối, m&eacute;p g&oacute;c, để giấy b&aacute;m chắc hơn.Khi kh&ocirc;ng th&iacute;ch sử dụng x&eacute; giấy bỏ đi, lấy m&aacute;y sấy t&oacute;c sấy n&oacute;ng v&agrave; lột từ từ để kh&ocirc;ng l&agrave;m hư v&agrave; dơ tường.</p>\r\n', 1, '2022-11-29 09:21:37', 2, 1, 182, 1),
(25, 'TT3KETREO1', 'Kệ Decor Phòng', '30000', '22000', 'trangtri3-ke1.png', '<p><label>Chất liệu</label>: Kim loại, Gỗ</p>\r\n\r\n<p><label>Lắp r&aacute;p</label>:Lắp r&aacute;p ho&agrave;n chỉnh</p>\r\n\r\n<p>K&iacute;ch thước: 54cmx14cm</p>\r\n', '<p>###Ghi m&agrave;u v&agrave;o ghi ch&uacute;</p>\r\n\r\n<p>Th&ocirc;ng tin sản phẩm: Kệ Đựng Gia Vị Treo Tường Nh&agrave; Bếp, Kệ Sắt Đ&aacute;y Gỗ Bằng Th&eacute;p Kh&ocirc;ng Gỉ D&aacute;n Tường Để Đồ Đa Năng</p>\r\n\r\n<p>- M&agrave;u Sắc : M&agrave;u Đen , trắng</p>\r\n\r\n<p>- Tặng k&egrave;m miếng d&aacute;n</p>\r\n\r\n<p>- Chất liệu: kệ sắt + đ&aacute;y gỗ , v&agrave; loại kệ sắt h&igrave;nh chữ nhật,</p>\r\n\r\n<p>- Thiết kế : C&oacute; R&agrave;o Chắn</p>\r\n\r\n<p>- Tặng đinh hoặc m&oacute;c treo tường</p>\r\n\r\n<p>KỆ ĐI K&Egrave;M 2 ĐINH 4 CH&Acirc;N V&Agrave; M&Oacute;C TREO TƯỜNG</p>\r\n\r\n<p>Kệ sắt treo tường đ&aacute;y gỗ đa năng đ&atilde; l&agrave;m rất tốt vai tr&ograve; v&agrave; c&ocirc;ng dụng của n&oacute;,</p>\r\n\r\n<p>Kệ sắt đ&aacute;y gỗ kh&ocirc;ng những mang lại cho bạn kh&ocirc;ng gian mang đậm hơi thở hiện đại v&agrave; ch&uacute;ng c&ograve;n gi&uacute;p bạn đựng những c&ocirc;ng cụ, vật dụng c&aacute; nh&acirc;n rất tiện &iacute;ch.</p>\r\n\r\n<p>Kệ Treo Tường đa năng 2 in 1 như vậy hi vọng sẽ đem đến cho bạn cuộc sống ngăn nắp v&agrave; thoải m&aacute;i hơn.</p>\r\n\r\n<p>Ưu điểm:</p>\r\n\r\n<p>- Trang tr&iacute; mang đậm phong c&aacute;ch hiện đại, năng động</p>\r\n\r\n<p>- C&oacute; thể đựng những vật dụng c&aacute; nh&acirc;n, đồ trang tr&iacute; t&ugrave;y theo nhu cầu sử dụng của mỗi gia chủ</p>\r\n\r\n<p>- C&oacute; nhiều k&iacute;ch thước v&agrave; m&agrave;u sắc cho bạn lựa chọn - Chất liệu khung sắt, đ&aacute;y gỗ an to&agrave;n, bền chắc, khả năng chịu sức nặng tốt, ổn định</p>\r\n\r\n<p>- Ph&ugrave; hợp với mọi kh&ocirc;ng gian: ph&ograve;ng kh&aacute;ch, ph&ograve;ng l&agrave;m việc, ph&ograve;ng ngủ, qu&aacute;n tr&agrave;, ph&ograve;ng nghi&ecirc;n cứu,...</p>\r\n\r\n<p>- C&oacute; thể treo tường hoặc để b&agrave;n đều mang lại những ấn tượng ri&ecirc;ng cho kh&ocirc;ng gian của bạn</p>\r\n', 1, '2022-12-01 09:39:42', 3, 2, 110, 0),
(26, 'TT3HINH1', 'Hình dán decal', '70000', '62000', 'hinhdan1.png', '<p>- Kích thước đóng gói: 2 tờ 60*90cm</p>\r\n\r\n<p>- Kích thước sau khi dán 1,4*1,8m</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>&mdash;-🔰 DECAL DÁN TƯỜNG</p>\r\n\r\n<p>Decal làm bằng chất liệu PVC Vinyl (polyme) với thiết kế các phần trên tranh là từng phần riêng lẻ, có thể bóc ra dễ dàng, thi công đơn giản, nhanh gọn.</p>\r\n\r\n<p>🍁 Dòng decal đặc biệt không hề có viền trắng như các dòng thông thường, giống như bức tường được vẽ lên cách kỳ diệu, sống động và chân thực đến kỳ lạ.</p>\r\n\r\n<p>🍁 Không gian hạn mà đưa đến sự thoải mái nhất cho các thành viên trong gia đình với các dòng decal cho phòng khách, phòng ngủ, phòng bé và không gian nhà bếp.<br />\r\n&nbsp;</p>\r\n', 1, '2022-12-01 09:42:54', 3, 1, 115, 0),
(27, 'TT3DENLED1', 'Dây đèn led Cherry Ball 40', '35000', '29000', 'trangtri3-den1.png', '<p>Kh&ocirc;ng bảo h&agrave;nh</p>\r\n', '<p>1. Đ&egrave;n led d&agrave;i 1,5 m&eacute;t gồm 10 b&oacute;ng Cherry Ball trang tr&iacute;</p>\r\n\r\n<p>Gồm 3 k&iacute;ch cỡ D&acirc;y đ&egrave;n led sử dụng 2 vi&ecirc;n pin con thỏ Aa ( 💥chưa k&egrave;m pin)</p>\r\n\r\n<p>Gồm 10 quả cherry nhựa như h&igrave;nh , d&acirc;y d&agrave;i 1,5 m&eacute;t ( d&ugrave;ng pin aa)</p>\r\n\r\n<p>2: d&acirc;y đ&egrave;n led d&agrave;i 6 m&eacute;t c&oacute; 40 b&oacute;ng cherry bale d&ugrave;ng usb hoặc sạc điện thoại .</p>\r\n\r\n<p>💥Mới về th&ecirc;m loại 6 m&eacute;t 40 b&oacute;ng chery ball d&ugrave;ng pin aa c&oacute; chế độ lu&ocirc;n s&aacute;ng v&agrave; chớp nh&aacute;y</p>\r\n\r\n<p>3: d&acirc;y đ&egrave;n d&agrave;i 3 m&eacute;t c&oacute; 20 b&oacute;ng cherry d&ugrave;ng usb , pin dự ph&ograve;ng hoặc sạc điện thoại , c&aacute;c bạn xem ở h&igrave;nh ảnh 9 để dễ hiểu nh&eacute;</p>\r\n\r\n<p>✨d&acirc;y đ&egrave;n led d&ugrave;ng trang tr&iacute; kh&ocirc;ng gian ph&ograve;ng ngủ , trang tr&iacute; nh&agrave; h&agrave;ng , mang đi chụp ảnh tự sướng ở những nơi kh&ocirc;ng c&oacute; điện .</p>\r\n\r\n<p>✨d&acirc;y đ&egrave;n led vi&ecirc;n bi khi bật l&ecirc;n c&oacute; &aacute;nh s&aacute;ng v&agrave;ng ấm &aacute;p lung linh .</p>\r\n', 1, '2022-12-01 09:50:45', 3, 4, 100, 1),
(28, 'TT3GUONG1', 'Gương toàn thân led cảm ứng', '500000', '490000', 'trangtri3-guong1.png', '<p><label>Hạn bảo h&agrave;nh</label>: 12 th&aacute;ng</p>\r\n\r\n<p><label>Loại gương</label>: Gương treo tường</p>\r\n\r\n<p><label>Chất liệu</label>: Thủy tinh</p>\r\n', '<p>TH&Ocirc;NG TIN M&Ocirc; TẢ</p>\r\n\r\n<p>- K&iacute;ch thước: 40x110cm</p>\r\n\r\n<p>- Mẫu: V&ograve;m, chữ nhật v&agrave; Oval (kh&aacute;ch đặt theo đ&uacute;ng t&ecirc;n v&agrave; k&iacute;ch thước trong phần ph&acirc;n loại)</p>\r\n\r\n<p>- Combo bao gồm gương v&agrave; bộ phụ kiện treo (nếu kh&aacute;ch h&agrave;ng muốn l&agrave;m th&ecirc;m ch&acirc;n tựa th&igrave; chi ph&iacute; th&ecirc;m 100k v&agrave; cần note trong đơn h&agrave;ng gi&uacute;p shop)</p>\r\n\r\n<p>- Xuất xứ : Việt Nam.</p>\r\n\r\n<p>- Chất liệu: Bộ phụ kiện nguồn cảm ứng v&agrave; d&acirc;y led cao cấp an to&agrave;n tuyệt đối cho người sử dụng (Shop sử dụng bộ nguồn ri&ecirc;ng chứ kh&ocirc;ng đấu trực tiếp d&acirc;y led để tuổi thọ d&acirc;y led được tốt nhất v&agrave; an to&agrave;n nhất d&ugrave; ở bất kỳ kh&ocirc;ng gian hay m&ocirc;i trường n&agrave;o), ph&ocirc;i gương Việt Nhật tr&aacute;ng bạc, h&igrave;nh ảnh ch&acirc;n thực r&otilde; n&eacute;t, s&aacute;ng r&otilde;</p>\r\n', 1, '2022-12-01 09:56:11', 3, 2, 18, 0),
(29, 'GD4KE1', 'Kệ Nhả Kem Đánh Răng Tự Động', '150000', '99000', 'giadung4-ke1.png', '<p>- Lắp đặt d&iacute;nh tường</p>\r\n\r\n<p>- Chất liệu: Nhựa ABS</p>\r\n', '<p>- M&agrave;u sắc: Trắng x&aacute;m hiện đại v&agrave; trang nh&atilde;</p>\r\n\r\n<p>- Sản phẩm gồm: 1 Kệ nh&agrave; tắm t&iacute;ch hợp chức năng lấy kem tự động + Cốc h&uacute;t từ t&iacute;nh + miếng d&aacute;n tường</p>\r\n\r\n<p>- Cấu tạo: Thiết kế với đầy đủ c&aacute;c vị tr&iacute; để đồ cần thiết, ngăn chứa đồ, kệ g&aacute; điện thoại</p>\r\n\r\n<p>* T&Iacute;NH ỨNG DỤNG</p>\r\n\r\n<p>Bộ Nhả Kem Đ&aacute;nh Răng Tự Động</p>\r\n\r\n<p>- Kệ được thiết kế hiện đại, tối ưu h&oacute;a kh&ocirc;ng gian m&agrave; vẫn đảm bảo nhu cầu sử dụng cần thiết.</p>\r\n\r\n<p>- Cốc từ h&uacute;t ngược hiện đại gi&uacute;p vật dụng lu&ocirc;n sạch sẽ v&agrave; kh&ocirc; r&aacute;o.</p>\r\n\r\n<p>- B&agrave;n chải được gắn trong kh&ocirc;ng gian k&iacute;n chắn bụi bẩn từ b&ecirc;n ngo&agrave;i.</p>\r\n\r\n<p>- Kệ c&oacute; khả năng giữ được rất nhiều đồ với tải trọng tối đa 6KG.</p>\r\n\r\n<p>- Kệ c&oacute; thiết kế th&ecirc;m 1 ngăn k&eacute;o để đồ rất tiện lợi.</p>\r\n\r\n<p>- Thiết kế c&aacute;c kh&ocirc;ng gian để kem đ&aacute;nh răng, b&agrave;n chải, sữa tắm, g&aacute; điện thoại rất tinh tế v&agrave; hiện đại.</p>\r\n\r\n<p>* HƯỚNG DẪN LẮP ĐẶT : Bộ Nhả Kem Đ&aacute;nh Răng Tự Động</p>\r\n\r\n<p>- Bước 1: L&agrave;m sạch bề mặt tường (vị tr&iacute; lắp đặt kệ)</p>\r\n\r\n<p>- Bước 2: Lắp miếng d&aacute;n v&agrave;o kệ &amp; loại bỏ m&agrave;ng bảo vệ miếng d&aacute;n</p>\r\n\r\n<p>- Bước 3: D&aacute;n kệ l&ecirc;n tường (vị tr&iacute; lắp đặt)</p>\r\n\r\n<p>- Bước 4: Nhấc kệ ra &amp; d&ugrave;ng tay &eacute;p hết kh&ocirc;ng kh&iacute; trong miếng d&aacute;n</p>\r\n\r\n<p>- Bước 5: Cố định miếng d&aacute;n trong 12 giờ đồng hồ</p>\r\n\r\n<p>- Bước 6: Gắn kệ v&agrave;o vị tr&iacute; cố định v&agrave; cho c&aacute;c vật dụng v&agrave;o (Đảm bảo 12 giờ sau khi miếng d&aacute;n d&iacute;nh v&agrave;o tường).</p>\r\n', 1, '2022-12-01 10:14:01', 4, 4, 58, 0),
(30, 'GD4KEBEP2', 'Kệ Gia Vị Để Bàn Nhà Bếp 3 Tầng', '170000', '152000', 'giadung4-ke2.png', '<p>- Cấu tạo:H&agrave;ng Lắp r&aacute;p</p>\r\n\r\n<p>- K&iacute;ch thước b&agrave;n: D&agrave;i 40cm, Rộng 24cm, Cao 64cm.</p>\r\n', '<p>KỆ GIA VỊ ĐỂ B&Agrave;N AD03NHỎ GỌN, TIỆN LỢI PH&Ugrave; HỢP VỚI NHIỀU KH&Ocirc;NG GIAN BẾP -</p>\r\n\r\n<p>--------------- TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>- K&iacute;ch thước b&agrave;n: D&agrave;i 40cm, Rộng 24cm, Cao 64cm.</p>\r\n\r\n<p>- Chất liệu: Khung th&eacute;p sơn tĩnh điện chống ghỉ</p>\r\n\r\n<p>- C&ocirc;ng năng: Sắp xếp hũ gia vị, nước tương, dầu ăn...gi&uacute;p ph&ograve;ng bếp gọn g&agrave;ng</p>\r\n\r\n<p>- Cấu tạo:H&agrave;ng Lắp r&aacute;p</p>\r\n', 1, '2022-12-01 10:16:57', 4, 4, 95, 0),
(31, 'GD4TU2', 'Tủ Đựng Mỹ Phẩm Đa Năng Dán Tường', '100000', '91000', 'giadung4-ke3.png', '<p>Định lượng: 80% nhựa 20% kính</p>\r\n\r\n<p>Thành ph&acirc;̀n: Nhựa và kính</p>\r\n', '<p>✔️Tủ Đựng Mỹ Phẩm Đa Năng D&aacute;n Tường Ph&ograve;ng Tắm l&agrave; sản phẩm được thiết kế theo phong c&aacute;ch độc đ&aacute;o, sang trọng ph&ugrave; hợp với nhiều kh&ocirc;ng gian ph&ograve;ng tắm kh&aacute;c nhau</p>\r\n\r\n<p>✔️Sản phẩm được l&agrave;m ho&agrave;n to&agrave;n bằng nhựa dẻo ABS kết hợp mặt nhựa k&iacute;nh mica trong suốt gi&uacute;p bạn c&oacute; thể dễ d&agrave;ng quan s&aacute;t được đồ đạc b&ecirc;n trong tủ</p>\r\n\r\n<p>✔️Tủ Đựng Mỹ Phẩm như một ng&ocirc;i nh&agrave; nhỏ cho c&aacute;c loại mỹ phẩm đắt tiền của bạn, biến g&oacute;c ph&ograve;ng tắm nh&agrave; bạn trở l&ecirc;n lung linh hơn.</p>\r\n\r\n<p>✔️Thiết kế hộp k&iacute;n gi&uacute;p tủ c&oacute; khả năng chống bụi tốt v&agrave; vệ sinh dễ d&agrave;ng.</p>\r\n\r\n<p>✔️Tiết kiệm thời gian mỗi khi phải t&igrave;m mỹ phẩm cũng như kh&ocirc;ng gian trở n&ecirc;n gọn g&agrave;ng sang trọng nhất.</p>\r\n\r\n<p>✔️ Khả năng chịu lực lớn nhưng nắp đặt lại v&ocirc; c&ugrave;ng dễ d&agrave;ng, ngay cả chị em phụ nữ cũng c&oacute; thể dễ d&agrave;ng lắp đặt</p>\r\n\r\n<p>✔️Thực sự n&oacute; được v&iacute; như một chiếc tủ vạn năng tiện lợi m&agrave; bất k&igrave; c&ocirc; g&aacute;i, sinh vi&ecirc;n hay chị em phụ nữ đều muốn sở hữu 1 c&aacute;i cho ri&ecirc;ng m&igrave;nh.</p>\r\n', 1, '2022-12-01 10:21:14', 4, 4, 80, 0),
(32, 'GD4DANBEP1', 'Decal dán tường bếp giả gạch', '22000', '20000', 'decal.png', '<p><label>T&iacute;nh năng giấy d&aacute;n tường</label>: Kh&ocirc;ng thấm nước</p>\r\n\r\n<p><label>Xuất xứ</label>: H&agrave;n Quốc</p>\r\n\r\n<p>K&iacute;ch thước: 0.5mx1.2m</p>\r\n', '<p>Đặc điểm nổi bật của giấy d&aacute;n bếp chống dầu mỡ</p>\r\n\r\n<p>- Sẵn keo, bạn chỉ cần lột ra d&aacute;n th&ocirc;i</p>\r\n\r\n<p>- Bề mặt phủ 1 lớp pvc chống nước, chống dầu mỡ</p>\r\n\r\n<p>- Dễ d&agrave;ng lau ch&ugrave;i sạch sẽ - 6 mẫu hot ưa chuộng nhất</p>\r\n\r\n<p>- Gi&aacute; th&agrave;nh rẻ</p>\r\n\r\n<p>- D&aacute;n được cho tường, tủ bếp, mặt b&agrave;n bếp</p>\r\n', 1, '2022-12-01 10:50:20', 4, 1, 100, 0),
(33, 'TCM1THAM', 'Thảm lông trải sàn', '180000', '178000', 'tham1.png', '<p>k&iacute;ch thước : 1m6x2m</p>\r\n', '<p>Mẫu thảm cao cấp sang si&ecirc;u xinh n&agrave;y sẽ biến căn ph&ograve;ng bạn trở n&ecirc;n lung linh hơn bao giờ hết.</p>\r\n\r\n<p>- Mặt tr&ecirc;n l&agrave; lớp l&ocirc;ng d&agrave;i mượt m&agrave; kh&ocirc;ng bết d&iacute;nh, &ecirc;m ềm mềm mềm, mặt sau l&agrave; lớp cao su chống ấm mốc, trơn trượt.</p>\r\n\r\n<p>- cực k&igrave; an to&agrave;n cho da b&eacute;</p>\r\n\r\n<p>- cam kết kh&ocirc;ng dụng l&ocirc;ng</p>\r\n\r\n<p>- Chỉ cần c&oacute; em n&agrave;y l&agrave; ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ sẽ auto lung linh ạ 😍😍</p>\r\n\r\n<p>- Bạn d&ugrave;ng l&agrave;m nền chụp ảnh cũng bao lung linh</p>\r\n', 1, '2022-12-01 10:57:42', 5, 2, 52, 0),
(34, 'TCM1MEM', 'Topper Nệm', '360000', '300000', 'toping.png', '<p><label>Chất liệu</label>: Cotton, Cotton đũi</p>\r\n\r\n<p>K&iacute;ch thước: 1m8x2m</p>\r\n', '<p>🍎D&ugrave;ng trực tiếp hoặc phủ ga tr&ecirc;n bề mặt topper hoặc d&ugrave;ng trải tr&ecirc;n mặt phẳng</p>\r\n\r\n<p>🍎Topper thiết kế &ocirc; vu&ocirc;ng v&agrave; c&oacute; v&aacute;ch ngăn tạo độ phồng, độ &ecirc;m. Đặc biệt ngăn kh&ocirc;ng cho b&ocirc;ng bị dồn, l&agrave;m b&ocirc;ng trải đều tất cả tr&ecirc;n bề mặt Topper c&oacute; độ d&agrave;y phồng 7cm Sản phẩm được &eacute;p ch&acirc;n kh&ocirc;ng để thực hiện vận chuyển cho kh&aacute;ch.</p>\r\n\r\n<p>Khi nhận được sản phẩm, c&aacute;c bạn vỗ đều tay l&ecirc;n mặt đệm để b&ocirc;ng nảy đều v&agrave; đ&agrave;n hồi nh&eacute;. B&ecirc;n trong l&otilde;i topper l&agrave; b&ocirc;ng nguy&ecirc;n tấm trắng n&ecirc;n giặt giũ m&agrave; kh&ocirc;ng sợ bị v&oacute;n b&ocirc;ng, x&ocirc; b&ocirc;ng.</p>\r\n', 1, '2022-12-01 11:01:56', 5, 4, 18, 0),
(35, 'TCM1GA', 'Bộ chăn ga gối đệm Cotton', '250000', '240000', 'ga6.png', '<p>Chất liệu vải: cotton tici</p>\r\n', '<p>Ph&ograve;ng ngủ kh&ocirc;ng chỉ l&agrave; nơi để ngủ</p>\r\n\r\n<p>&hearts;️ Đ&acirc;y l&agrave; nơi thư gi&atilde;n sau ng&agrave;y d&agrave;i mệt mỏi, nơi đ&oacute;n tiếp bạn b&egrave;, nơi l&agrave;m việc, đọc s&aacute;ch, xem phim, v&agrave; cũng l&agrave; nơi: bạn l&agrave; ch&iacute;nh bạn.</p>\r\n\r\n<p>&hearts;️ Với 1 bộ chăn ga gối th&igrave;: chỉ 10 ph&uacute;t, bạn đ&atilde; h&ocirc; biến ph&ograve;ng ngủ của m&igrave;nh trở n&ecirc;n tuyệt vời hơn rất nhiều. Nhanh nhanh bắt tay v&agrave;o thực hiện th&ocirc;i n&agrave;o.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&hearts;️ Full bộ chăn ga gối gồm</p>\r\n\r\n<p>- 2 vỏ gối nằm 50x70</p>\r\n\r\n<p>- 1 vỏ chăn 2mx2m2 | c&oacute; kh&oacute;a k&eacute;o để lồng ruột</p>\r\n\r\n<p>- 1 vỏ ga (k&iacute;ch thước được bo chun theo y&ecirc;u cầu)</p>\r\n\r\n<p>- Với thiết kế đơn giản v&agrave; hiện đại, sản phẩm được nhiều bạn trẻ y&ecirc;u th&iacute;ch sử dụng để bắt kịp xu hướng ph&ograve;ng ngủ hiện nay.</p>\r\n\r\n<p>- Chất liệu cotton tici d&agrave;y dặn, độ bền cao. Kh&ocirc;ng nhăn khi giặt m&aacute;y v&agrave; nhanh kh&ocirc; hơn c&aacute;c loại vải kh&aacute;c.</p>\r\n\r\n<p>Hơn nữa vải rất mềm mại với mật độ vải l&ecirc;n đến 200 sợi. Bạn sẽ cảm nhận được ngay sự thoải m&aacute;i, &ecirc;m &aacute;i khi nằm l&ecirc;n n&oacute;.</p>\r\n\r\n<p>- Sản phẩm sử dụng c&ocirc;ng nghệ nhuộm in phản ứng, gi&uacute;p vải kh&ocirc;ng ra m&agrave;u, an to&agrave;n cho da khi sử dụng.</p>\r\n\r\n<p>- Thiết kế kh&oacute;a k&eacute;o chắc chắn, gi&uacute;p bạn lồng chăn một c&aacute;ch dễ d&agrave;ng</p>\r\n\r\n<p>-Vỏ gối k&iacute;ch thước ti&ecirc;u chuẩn, thiết kế kh&ocirc;ng kh&oacute;a k&eacute;o theo phong c&aacute;ch H&agrave;n Quốc, gi&uacute;p bạn kh&ocirc;ng bị cấn, xước khi v&ocirc; t&igrave;nh đụng kh&oacute;a k&eacute;o tr&ecirc;n gối.</p>\r\n\r\n<p>- Chun được may xung quanh ga, với 3 đường chỉ chắc chắn, kh&ocirc;ng những tạo độ thẩm mỹ khi sử dụng m&agrave; c&ograve;n tr&aacute;nh bung chỉ khi giặt nhiều lần.</p>\r\n', 1, '2022-12-01 11:08:41', 5, 4, 96, 1),
(36, 'TCM1THAM1', 'Thảm Treo Tường Trang Trí Phòng Ngủ', '45000', '40000', 'thamtreo1.png', '<p>K&iacute;ch thước: 150cmx130cm</p>\r\n', '<p>THẢM TREO TƯỜNG</p>\r\n\r\n<p>- TRANH VẢI DECOR 1m3x1m5 tặng k&egrave;m m&oacute;c treo tiện lợi</p>\r\n\r\n<p>✅H&agrave;ng VIỆT NAM sản xuất, chất liệu vải được in sợi polyester mềm mịn ( d&agrave;y hơn c&aacute;c loại kh&aacute;c rất rất nhiều ạ )</p>\r\n\r\n<p>✅Với c&ocirc;ng nghệ in chuyển nhiệt 3D sắc n&eacute;t gi&uacute;p thảm vải d&ugrave;ng bền theo năm th&aacute;ng, kh&ocirc;ng bị phai m&agrave;u, kh&ocirc;ng ố v&agrave;ng , kh&ocirc;ng nh&agrave;u n&aacute;t , giặt kh&ocirc;ng phai</p>\r\n\r\n<p>🌸Phong c&aacute;ch thời trang, c&oacute; thể được sử dụng để l&agrave;m PHỤ KIỆN TRANG TR&Iacute; PH&Ograve;NG: treo tường, biểu tượng treo tường, khăn phủ b&agrave;n, r&egrave;m, ga trải giường hoặc khăn trải b&agrave;n, để căn ph&ograve;ng tr&agrave;n đầy sức sống. Chất liệu: vải Phong c&aacute;ch: Phong c&aacute;ch Bắc &Acirc;u H&igrave;nh dạng tấm</p>\r\n\r\n<p>THẢM DECOR TREO TƯỜNG:</p>\r\n\r\n<p>H&igrave;nh chữ nhật K&iacute;ch thước: L: Chiều d&agrave;i 150cm * Chiều cao 130cm / Chiều d&agrave;i 59.06&quot;* Chiều cao 51.18&quot;</p>\r\n\r\n<p>🎀M&oacute;c miễn ph&iacute;</p>\r\n\r\n<p>🎀 Sản phẩm chưa bao gồm đ&egrave;n LED</p>\r\n\r\n<p>🌸C&aacute;c lưu &yacute; khi giặt: N&ecirc;n giặt nhẹ nh&agrave;ng bằng nước lạnh, kh&ocirc;ng n&ecirc;n phơi nắng qu&aacute; l&acirc;u.</p>\r\n', 1, '2022-12-01 11:16:52', 5, 3, 40, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `product_cate_id` int(11) NOT NULL,
  `product_cate_title` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`product_cate_id`, `product_cate_title`) VALUES
(1, 'Nội thất'),
(2, 'Cải tạo'),
(3, 'Trang trí'),
(4, 'Đồ gia dụng'),
(5, 'Thảm-Chăn-Mềm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ratings`
--

CREATE TABLE `tbl_ratings` (
  `rating_id` int(11) NOT NULL,
  `rating_comment` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `rating_star` int(11) NOT NULL,
  `rating_image` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating_date_creaded` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ratings`
--

INSERT INTO `tbl_ratings` (`rating_id`, `rating_comment`, `rating_star`, `rating_image`, `user_id`, `product_id`, `rating_date_creaded`) VALUES
(9, 'Sản phẩm đẹp, dễ lắp ráp, chắc chắn nhưng giao lâu', 4, NULL, 5, 14, '2022-12-03'),
(10, 'Đẹp, Không bị móc như loại khác', 5, NULL, 8, 13, '2022-12-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`) VALUES
(1, 'Toàn quyền'),
(2, 'Nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_role_permission`
--

CREATE TABLE `tbl_role_permission` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_role_permission`
--

INSERT INTO `tbl_role_permission` (`id`, `role_id`, `permission_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16),
(17, 1, 17),
(18, 1, 18),
(19, 1, 19),
(20, 1, 20),
(21, 1, 21),
(22, 1, 22),
(23, 1, 23),
(24, 1, 24),
(25, 1, 25),
(26, 1, 26),
(27, 1, 27),
(28, 1, 28),
(29, 1, 29),
(30, 1, 30),
(31, 1, 31),
(32, 1, 32),
(33, 1, 33),
(34, 1, 34),
(35, 1, 35),
(36, 1, 36),
(37, 1, 37),
(38, 1, 38),
(39, 1, 39),
(40, 1, 40),
(41, 1, 41),
(42, 1, 42),
(43, 1, 43),
(44, 1, 44),
(45, 1, 45),
(124, 2, 1),
(125, 2, 2),
(126, 2, 3),
(127, 2, 4),
(128, 2, 5),
(129, 2, 6),
(130, 2, 7),
(131, 2, 8),
(132, 2, 9),
(133, 2, 10),
(134, 2, 11),
(135, 2, 12),
(136, 2, 13),
(137, 2, 14),
(138, 2, 15),
(139, 2, 16),
(140, 2, 17),
(141, 2, 18),
(142, 2, 19),
(143, 2, 20),
(144, 2, 21),
(145, 2, 22),
(146, 2, 23),
(147, 2, 24),
(148, 2, 25),
(149, 2, 26),
(150, 2, 27),
(151, 2, 28),
(152, 2, 29),
(153, 2, 30),
(154, 2, 31),
(155, 2, 32),
(156, 2, 33),
(157, 2, 34),
(158, 2, 35),
(159, 2, 36),
(160, 2, 37);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status_name`) VALUES
(1, 'Chờ duyệt'),
(2, 'Đang vận chuyển'),
(3, 'Thành công'),
(4, 'Hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_status_detail`
--

CREATE TABLE `tbl_status_detail` (
  `id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `note` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_status_detail`
--

INSERT INTO `tbl_status_detail` (`id`, `status_id`, `order_id`, `update_date`, `note`) VALUES
(1, 1, 65, '2022-12-19 16:14:31', 'giao vào 6h'),
(2, 2, 65, '2022-12-19 16:16:31', 'Khách liên hệ có việc nên giao vào chủ nhật mới nhận hàng'),
(3, 1, 66, '2022-12-19 16:39:51', 'Đang làm thì thiếu cần giao gấp'),
(4, 2, 66, '2022-12-19 16:41:26', 'Khách liên hệ cần giao gấp trong 2 ngày'),
(5, 3, 66, '2022-12-22 02:42:56', 'Khách bảo giao cho bên sửa phòng nhận hàng'),
(6, 1, 67, '2022-12-20 10:41:03', 'Giao vào chủ nhật'),
(7, 2, 67, '2022-12-20 10:48:19', 'Khách liên hệ yêu cầu khi giao hàng phải cho bên sửa phòng kiểm tra số lượng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_suppliers`
--

CREATE TABLE `tbl_suppliers` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `supplier_email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `supplier_phone` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `supplier_address` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `supplier_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_suppliers`
--

INSERT INTO `tbl_suppliers` (`supplier_id`, `supplier_name`, `supplier_email`, `supplier_phone`, `supplier_address`, `supplier_created`) VALUES
(1, 'IKEA', 'ikea@gmail.com', '0933333983', '127 Nguyễn Huy, P.Nghĩa Lâm, Q1, TP.HCM', '2022-09-28'),
(2, 'thanhlong', 'thanhlong@gmail.com', '0933333222', '29 Ngô Quyền, P.Xuân Hòa, Điện Biên', '2022-09-29'),
(3, 'Hải Dương', 'haiduong@gmail.com', '0922229999', '292 Trần Phú, P.Hoàng Tiền, Q.Hoàn Kiếm, Hà Nội', '2022-11-28'),
(4, 'QuanChuan', 'aquachuan@gmail.com', '0922828282', '119 Quang Trung, P.Hoàng Tiền, Q.Hoàn Kiếm, Hà Nội', '2022-11-28'),
(5, 'Thamhuynh', 'Thamhuynhgiaco@gmai.com ', '0934541520', '10 Nguyễn Văn Linh, Bình Chánh Tp HCM', '2022-11-28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_units`
--

CREATE TABLE `tbl_units` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_units`
--

INSERT INTO `tbl_units` (`unit_id`, `unit_name`) VALUES
(1, 'miếng'),
(2, 'cái'),
(3, 'tấm'),
(4, 'bộ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_username` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `user_phone_number` varchar(12) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `user_address` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `user_created_date` date NOT NULL DEFAULT current_timestamp(),
  `reset_token` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_fullname`, `user_username`, `user_password`, `user_email`, `user_phone_number`, `user_address`, `user_created_date`, `reset_token`, `role_id`) VALUES
(1, 'Trịnh Lộc Uyển', 'Admin', '75b82c0c9eb6c6c1beb454d04117e55f', 'roomdecor520@gmail.com', '0932024582', '182 Điện Biên Phủ, Rạch Gía, Kiên Giang', '2022-09-06', '853dca04c9eedac225ab5376960a9088', 1),
(2, 'Lâm Bảo Ngọc', 'baongoc', 'bcb893a5df7f6bb53a80c79adead2900', 'baongoc@gmail.com', '0932227777', '23 Nguyễn Trãi, TP.Rạch Gía, Kiên Giang', '2022-11-06', '73627ff7577fa630537ab8e54eadc7b0', 2),
(4, 'Chu Nguyên Chương', 'nguyenchuong', '2876060ccd750e283dbbd030e5d56614', 'nguyenchuong@gmail.com', '0935557776', '283 Nguyễn Trãi, P.Vĩnh Quang, TP.Rạch Gía, Kiên Giang', '2022-11-08', '', 0),
(5, 'Trịnh Lộc Uyển', 'LocUyen', '269421d0fc3085bb9565d2d34e8ff4a7', 'locuyen@gmail.com', '0932024582', '382B đường Tân Tạo, Q.Bình Tân, TP.HCM', '2022-11-24', '269421d0fc3085bb9565d2d34e8ff4a7', 0),
(6, 'Trần Thu Hà', 'ThuHa', 'f69b2083db570b5c4c8b021bf181c267', 'thuha@gmail.com', '0922222234', NULL, '2022-11-24', '', 0),
(7, 'Trần Thùy Trang', 'ThuyTrang', '43eb27b08e9a2bb1b9587e9e51edd823', 'trinhlocuyen@gmail.com', '0922777234', '', '2022-11-24', '95191dfed4a8c69eb25e3917c305a601', 0),
(8, 'Lưu Gia Hân', 'GiaHan', '08f3ec728c4bfb2da75d975f3b7c9990', 'giahan@gmail.com', '0922224444', '233 Lâm Quang Ky', '2022-11-24', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user_privilege`
--

CREATE TABLE `tbl_user_privilege` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user_privilege`
--

INSERT INTO `tbl_user_privilege` (`id`, `user_id`, `privilege_id`, `created`) VALUES
(2, 1, 1, '2022-11-09'),
(3, 1, 2, '2022-11-09'),
(4, 1, 3, '2022-11-09'),
(5, 1, 4, '2022-11-09'),
(6, 1, 5, '2022-11-09'),
(7, 1, 6, '2022-11-09'),
(8, 1, 7, '2022-11-09'),
(9, 1, 8, '2022-11-09'),
(10, 1, 9, '2022-11-10'),
(11, 1, 10, '2022-11-10'),
(12, 1, 11, '2022-11-10'),
(13, 1, 12, '2022-11-10'),
(14, 1, 13, '2022-11-10'),
(15, 1, 14, '2022-11-10'),
(16, 1, 15, '2022-11-10'),
(17, 1, 16, '2022-11-10'),
(18, 1, 17, '2022-11-10'),
(19, 1, 18, '2022-11-10'),
(20, 1, 19, '2022-11-10'),
(21, 1, 20, '2022-11-10'),
(22, 1, 21, '2022-11-10'),
(23, 1, 22, '2022-11-10'),
(24, 1, 23, '2022-11-10'),
(25, 1, 24, '2022-11-10'),
(26, 1, 25, '2022-11-10'),
(27, 1, 26, '2022-11-10'),
(28, 1, 27, '2022-11-10'),
(29, 1, 28, '2022-11-10'),
(30, 1, 29, '2022-11-10'),
(31, 1, 30, '2022-11-10'),
(32, 1, 31, '2022-11-10'),
(33, 1, 32, '2022-11-10'),
(34, 1, 33, '2022-11-10'),
(35, 1, 34, '2022-11-10'),
(36, 1, 35, '2022-11-10'),
(37, 1, 36, '2022-11-10'),
(38, 1, 37, '2022-11-10'),
(39, 1, 38, '2022-11-10'),
(40, 1, 39, '2022-11-10'),
(41, 1, 40, '2022-11-10'),
(100, 2, 1, '2022-12-06'),
(101, 2, 2, '2022-12-06'),
(102, 2, 9, '2022-12-06'),
(103, 2, 10, '2022-12-06'),
(104, 2, 20, '2022-12-06'),
(105, 2, 21, '2022-12-06'),
(106, 2, 22, '2022-12-06'),
(107, 2, 23, '2022-12-06'),
(108, 2, 24, '2022-12-06'),
(109, 2, 25, '2022-12-06'),
(110, 2, 26, '2022-12-06'),
(111, 2, 27, '2022-12-06'),
(112, 2, 28, '2022-12-06'),
(113, 2, 29, '2022-12-06'),
(114, 2, 30, '2022-12-06'),
(115, 2, 31, '2022-12-06'),
(116, 2, 32, '2022-12-06'),
(117, 2, 33, '2022-12-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `vnp_id` int(11) NOT NULL,
  `vnp_amount` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `vnp_bankcode` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `vnp_banktranno` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `vnp_cardtype` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `vnp_orderinfo` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `vnp_paydate` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `vnp_tmncode` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `vnp_transactionno` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `vnp_transactionstatus` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vnpay`
--

INSERT INTO `tbl_vnpay` (`vnp_id`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `vnp_transactionstatus`) VALUES
(1, '44000000', 'NCB', 'VNP13847823', 'ATM', 'Thanh toán đơn hàng tại web', '20221003152931', 'V4982DP4', '13847823', '00'),
(2, '44000000', 'NCB', 'VNP13851306', 'ATM', 'Thanh toán đơn hàng tại web', '20221006220019', 'V4982DP4', '13851306', '00'),
(3, '36000000', 'NCB', 'VNP13892559', 'ATM', 'Thanh toán đơn hàng tại web', '20221201215100', 'V4982DP4', '13892559', '00'),
(4, '2500000', 'NCB', 'VNP13903227', 'ATM', 'Thanh toán đơn hàng tại web', '20221213201702', 'V4982DP4', '13903227', '00'),
(5, '2500000', 'NCB', 'VNP13903233', 'ATM', 'Thanh toán đơn hàng tại web', '20221213202504', 'V4982DP4', '13903233', '00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_decor_service`
--
ALTER TABLE `tbl_decor_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Chỉ mục cho bảng `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Chỉ mục cho bảng `tbl_import_detail`
--
ALTER TABLE `tbl_import_detail`
  ADD PRIMARY KEY (`import_detail_id`);

--
-- Chỉ mục cho bảng `tbl_import_goods`
--
ALTER TABLE `tbl_import_goods`
  ADD PRIMARY KEY (`import_id`);

--
-- Chỉ mục cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Chỉ mục cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Chỉ mục cho bảng `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  ADD PRIMARY KEY (`post_cate_id`);

--
-- Chỉ mục cho bảng `tbl_privileges`
--
ALTER TABLE `tbl_privileges`
  ADD PRIMARY KEY (`privilege_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Chỉ mục cho bảng `tbl_privilege_group`
--
ALTER TABLE `tbl_privilege_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Chỉ mục cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`product_cate_id`);

--
-- Chỉ mục cho bảng `tbl_ratings`
--
ALTER TABLE `tbl_ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Chỉ mục cho bảng `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_id` (`permission_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Chỉ mục cho bảng `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Chỉ mục cho bảng `tbl_status_detail`
--
ALTER TABLE `tbl_status_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Chỉ mục cho bảng `tbl_units`
--
ALTER TABLE `tbl_units`
  ADD PRIMARY KEY (`unit_id`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `tbl_user_privilege`
--
ALTER TABLE `tbl_user_privilege`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`user_id`),
  ADD KEY `privilege_id` (`privilege_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`vnp_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_decor_service`
--
ALTER TABLE `tbl_decor_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `tbl_import_detail`
--
ALTER TABLE `tbl_import_detail`
  MODIFY `import_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `tbl_import_goods`
--
ALTER TABLE `tbl_import_goods`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  MODIFY `post_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_privileges`
--
ALTER TABLE `tbl_privileges`
  MODIFY `privilege_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_privilege_group`
--
ALTER TABLE `tbl_privilege_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  MODIFY `product_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_ratings`
--
ALTER TABLE `tbl_ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT cho bảng `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_status_detail`
--
ALTER TABLE `tbl_status_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_units`
--
ALTER TABLE `tbl_units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_user_privilege`
--
ALTER TABLE `tbl_user_privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `vnp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_privileges`
--
ALTER TABLE `tbl_privileges`
  ADD CONSTRAINT `tbl_privileges_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tbl_privilege_group` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  ADD CONSTRAINT `tbl_role_permission_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `tbl_permissions` (`permission_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_role_permission_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_user_privilege`
--
ALTER TABLE `tbl_user_privilege`
  ADD CONSTRAINT `tbl_user_privilege_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_user_privilege_ibfk_2` FOREIGN KEY (`privilege_id`) REFERENCES `tbl_privileges` (`privilege_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
