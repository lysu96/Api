-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 30, 2021 lúc 12:19 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `api`
--

CREATE TABLE `api` (
  `id` int(11) NOT NULL,
  `url` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_layout` int(11) NOT NULL,
  `thumbnail_post` text COLLATE utf8_unicode_ci NOT NULL,
  `title_post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_post` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_post` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `status_post` int(11) NOT NULL,
  `date_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `api`
--

INSERT INTO `api` (`id`, `url`, `id_layout`, `thumbnail_post`, `title_post`, `url_post`, `text_post`, `id_category`, `status_post`, `date_post`) VALUES
(1, 'https://www.photopea.com/', 2, 'https://ludelweb.net/wp-content/uploads/2021/05/Adobe-Photoshop-CC-2021-Full.png', 'photoshop online', 'photoshop-online', 'hotoshop Online free là Photoshop online chỉnh sửa ảnh online và ghép ảnh online tốt nhất. Học photoshop cs6 trực tuyến miễn phí với giáo trình bài hướng dẫn. Photoshop Online miễn phí 1doi1.com khi viết tiếng việt là Pho to shop online làm công cụ ghép ảnh trực tuyến nhanh. Bạn có thể tìm với từ khóa là pts online hay photoshop cs6 online trên google. Dùng để mở open file psd trên website tương tự adobe photopea', 1, 1, '2021-09-01 02:12:05'),
(2, 'https://html5.gamedistribution.com/79b35da5e8ec44d7b62c948ff34e0eaa/', 1, 'https://vn.bignox.com/blog/wp-content/uploads/2021/03/8-Ball-Billiards-3D-1.jpg', 'game bi a online 2021', 'game-bi-a-online-2021', 'Bida ( hay còn gọi là Bia) là bộ môn thể thao được mọi lứa tuổi yêu thích, đặc biệt là giới trẻ, bởi nó đòi hỏi tư duy nhạy bén, kỹ năng linh hoạt và dày dặn kinh nghiệm để xử lý các pha bóng phức tạp. Chính bởi sức hấp dẫn của Bia nên các trò chơi mô phỏng Bia trên điện thoại cũng trở nên rất thịnh hành trong vài năm trở lại đây. Chơi bia tại nhà thông qua điện thoại hoặc máy tính đang là trào lưu được giới trẻ yêu thích bởi trong game, bạn có thể thi đấu trực tuyến với rất nhiều người chơi khác không chỉ tại Việt Nam mà cả cơ thủ trên toàn thế giới mọi lúc mọi nơi.\r\n\r\nBi da là trò chơi đòi hỏi cao về kỹ năng, và có quy tắc chơi khá phức tạp. bạn sẽ lựa chọn các loại gậy bia khác nhau để điều khiển bi cái ( màu trắng) tác động vào các bi khác nhiều màu sắc để đưa bi xuống lỗ theo quy định. Trên bàn bia thường thấy được chia làm 5 loại: bida 8 bóng, bida 9 bóng, bida 10 bóng, bida bài, bida 15 xoay vòng. Mỗi loại sẽ có lối chơi và quy tắc khác nhau\r\n\r\nHôm nay, NoxPlayer sẽ tổng hợp và giới thiệu đến bạn 5 tựa game chơi Bia ( Bida) được yêu thích nhất tại thời điểm hiện tại. Hãy cùng xem nhé.', 2, 1, '2021-09-30 08:51:09'),
(3, 'https://s-m.game24h.vn//html5game/hoa-qua-noi-gian/', 1, 'https://i.pinimg.com/originals/66/e2/40/66e240a80c78f0ab926b7c5ee5d142c7.jpg', 'Game plants vs zombies online 2021', 'game-plants-vs-zombies-online-2021', 'Plants vs.Zombies Tải xuống, Plants vs. Zombies Miễn phí, Plants vs. Zombies Tải xuống miễn phí phiên bản đầy đủ, Tải xuống Plants vs', 2, 1, '2021-09-30 11:17:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_contact`, `customer_address`, `country`) VALUES
(1, 'Nguyen van A', 'contact@cluemediator.com', '9998887776', 'Address', 'VN'),
(2, 'Dao Thi B', 'daothib@gmail.com', '0366568099', 'Ha noi', 'VN'),
(3, 'Do van H', 'vanhie16@gmail.com', '0377579012', 'Thai nguyen', 'VN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `emp`
--

INSERT INTO `emp` (`id`, `name`, `skills`, `address`, `designation`, `age`) VALUES
(1, 'Nguyễn thị x', 'Nữ', 'Hà nội', 'Ngoại ngữ', 20),
(2, 'Trường giang', 'Nam', 'Thái nguyên', 'Lập trình viên', 21),
(3, 'Nguyễn văn A', 'Nam', 'Điện biên', 'Marketing online', 25),
(4, 'Văn sơn', 'Nam', 'TN', 'ĐH', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL,
  `url_category` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `url_category`, `name_category`) VALUES
(1, 'pham-men-online', 'phầm mềm online'),
(2, 'game-online', 'Game online');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_layout`
--

CREATE TABLE `tbl_layout` (
  `id_layout` int(11) NOT NULL,
  `url_layout` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_layout`
--

INSERT INTO `tbl_layout` (`id_layout`, `url_layout`, `name_layout`) VALUES
(1, 'layout-iframe', 'màng 2x10'),
(2, 'layout-iframe-full', 'màng 12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `tbl_layout`
--
ALTER TABLE `tbl_layout`
  ADD PRIMARY KEY (`id_layout`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `api`
--
ALTER TABLE `api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_layout`
--
ALTER TABLE `tbl_layout`
  MODIFY `id_layout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
