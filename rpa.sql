-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2023 lúc 11:06 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rpa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `affilate_level`
--

CREATE TABLE `affilate_level` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `affilate_level`
--

INSERT INTO `affilate_level` (`id`, `name`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Đại sứ tri thức 3 sao', '1', NULL, NULL),
(2, 'Đại sứ tri thức 2 sao', '2', NULL, NULL),
(3, 'Đại sứ tri thức 1 sao', '3', NULL, NULL),
(4, 'Đại sứ tri thức', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `affilate_setting`
--

CREATE TABLE `affilate_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` int(11) DEFAULT NULL,
  `commission_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_direct` int(11) DEFAULT NULL,
  `personal_balance` int(11) DEFAULT NULL,
  `group_balance` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `indirect_level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `affilate_setting`
--

INSERT INTO `affilate_setting` (`id`, `name`, `commission`, `commission_type`, `description`, `type`, `level_group`, `number_direct`, `personal_balance`, `group_balance`, `created_at`, `updated_at`, `indirect_level_id`, `level_id`) VALUES
(1, 'Doanh thu cá nhân trực tiếp', 40, 'direct', NULL, 'personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'Doanh thu cá nhân gián tiếp (từ Đại sứ tri thức 2 sao )', 5, 'indirect', NULL, 'personal', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1),
(3, 'Doanh thu cá nhân gián tiếp (từ Đại sứ tri thức 1 sao)', 10, 'indirect', NULL, 'personal', NULL, NULL, NULL, NULL, NULL, NULL, 3, 1),
(4, 'Doanh thu cá nhân gián tiếp (từ Đại sứ tri thức) ', 15, 'indirect', NULL, 'personal', NULL, NULL, NULL, NULL, NULL, NULL, 4, 1),
(5, 'Doanh thu Nhóm kinh doanh', 2, 'indirect', NULL, 'group', '1,2,3,4', 6, 75000000, 75000000, NULL, NULL, NULL, 1),
(6, 'Doanh thu cá nhân trực tiếp', 35, 'direct', NULL, 'personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(7, 'Doanh thu cá nhân gián tiếp (từ Đại sứ tri thức 1 sao )', 5, 'indirect', NULL, 'personal', NULL, NULL, NULL, NULL, NULL, NULL, 3, 2),
(8, 'Doanh thu cá nhân gián tiếp (từ Đại sứ tri thức) ', 15, 'indirect', NULL, 'personal', NULL, NULL, NULL, NULL, NULL, NULL, 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `combo`
--

CREATE TABLE `combo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `combo`
--

INSERT INTO `combo` (`id`, `title`, `code`, `thumbnail`, `price`, `price_sale`, `description`, `content`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Đột phá để dẫn đầu', NULL, 'http://localhost/rpa/public/uploads/images/BVm9Zet1oj.jpg', 5000000, NULL, NULL, NULL, NULL, NULL, 'dot-pha-de-dan-dau');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `combo_course`
--

CREATE TABLE `combo_course` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `combo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `combo_course`
--

INSERT INTO `combo_course` (`id`, `course_id`, `combo_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, NULL, NULL),
(4, 10, 1, NULL, NULL),
(5, 7, 1, NULL, NULL),
(6, 9, 1, NULL, NULL),
(7, 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_best_seller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_intro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `is_published` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id`, `title`, `slug`, `thumbnail`, `code`, `point`, `price`, `price_sale`, `description`, `content`, `is_best_seller`, `is_certificate`, `video_intro`, `time`, `is_published`, `created_at`, `updated_at`, `level_id`, `teacher_id`, `sort`) VALUES
(5, 'Tư duy đột phá', 'tu-duy-dot-pha', 'http://localhost/rpa/public/uploads/images/OMCRcEehKh.jpg', NULL, NULL, 999000, NULL, NULL, NULL, '1', '1', NULL, 3, 1, '2023-01-17 00:32:46', NULL, 1, 3, 1),
(6, 'Kỹ năng quản trị cảm xúc', 'ky-nang-quan-tri-cam-xuc', 'http://localhost/rpa/public/uploads/images/BVm9Zet1oj.jpg', NULL, NULL, 999000, NULL, '<p>Mô tả khóa học</p>', '<p>Nội dung khóa học</p>', '0', '1', 'https://iframe.mediadelivery.net/embed/87177/c5954269-f422-4a4a-b6b2-777c48d5191e?autoplay=false', 3, 1, '2023-01-15 21:04:35', NULL, 3, 3, 2),
(7, 'Nghệ thuật giao tiếp kết nối bậc thầy', 'nghe-thuat-giao-tiep-ket-noi-bac-thay', 'http://localhost/rpa/public/uploads/images/S8dXvKcdTh.png', NULL, NULL, 999000, NULL, NULL, NULL, '0', '0', NULL, 3, 1, '2023-01-15 19:26:26', NULL, 4, 3, 3),
(8, 'Kỹ năng thuyết trình', 'ky-nang-thuyet-trinh', 'http://localhost/rpa/public/uploads/images/fXBJYmftAi.jpg', NULL, NULL, 999000, NULL, NULL, NULL, '0', '0', NULL, 3, 1, '2023-01-15 19:26:31', NULL, 4, 3, 4),
(9, 'Bán hàng đỉnh cao', 'ban-hang-dinh-cao', 'http://localhost/rpa/public/uploads/images/RMLgvi7Dss.jpg', NULL, NULL, 999000, NULL, NULL, NULL, '0', '0', NULL, 3, 1, '2023-01-15 19:26:43', NULL, 4, 3, 5),
(10, 'Nghệ thuật lãnh đạo', 'nghe-thuat-lanh-dao', 'http://localhost/rpa/public/uploads/images/VXbCzzLrIz.jpg', NULL, NULL, 999000, NULL, NULL, NULL, '0', '0', NULL, 3, 1, '2023-01-15 19:26:51', NULL, 4, 3, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_lession_document`
--

CREATE TABLE `course_lession_document` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED DEFAULT NULL,
  `document_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_teacher_lession_question`
--

CREATE TABLE `course_teacher_lession_question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document`
--

CREATE TABLE `document` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson`
--

CREATE TABLE `lesson` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` int(10) UNSIGNED DEFAULT NULL,
  `_rgt` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_try` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lesson`
--

INSERT INTO `lesson` (`id`, `title`, `video`, `content`, `parent_id`, `_lft`, `_rgt`, `created_at`, `updated_at`, `is_try`, `course_id`) VALUES
(45, 'Bài 1', 'cb086087-39eb-400c-9079-075b5c4e7be7', NULL, NULL, 1, 4, '2023-01-15 20:22:36', NULL, '1', 6),
(46, 'Bài 2', '2d2f4227-7682-45ea-953e-d71accb09435', NULL, NULL, 5, 8, '2023-01-15 20:21:27', NULL, '0', 6),
(47, 'Bài 3', '5ffe6ff1-dfa8-4fdf-b4e9-17d8fb605b4d', NULL, NULL, 9, 10, '2023-01-15 19:59:39', NULL, '0', 6),
(48, 'Bài 4', '3372529f-f4f9-4872-a563-06badd58ec27', NULL, NULL, 11, 12, '2023-01-15 19:59:55', NULL, '0', 6),
(49, 'Bài 5', 'b9ca6d2e-6f6a-4588-b384-31d3255bff59', NULL, NULL, 13, 14, '2023-01-15 20:00:06', NULL, '0', 6),
(50, 'Bài 6', 'd92f4549-6c54-4229-bcc7-c46f8ab96190', NULL, NULL, 15, 16, '2023-01-15 20:00:21', NULL, '0', 6),
(51, 'Bài 7', '3db6b1fe-59e8-4cad-a5dd-57550d9a57f1', NULL, NULL, 17, 18, '2023-01-15 20:00:33', NULL, '0', 6),
(52, 'Bài 8', '730f71da-15af-4a35-816b-5a413940bb84', NULL, NULL, 19, 20, '2023-01-15 20:00:50', NULL, '0', 6),
(53, 'Bài 9', 'ccd1cc87-f888-4d75-b2da-39188ce5e82c', NULL, NULL, 21, 22, '2023-01-15 20:01:01', NULL, '0', 6),
(54, 'Bài 10', '10c6a24c-fd9c-451b-83fc-8bb7eaffeff3', NULL, NULL, 23, 24, '2023-01-15 20:01:26', NULL, '0', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level`
--

CREATE TABLE `level` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `level`
--

INSERT INTO `level` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Cơ bản', '2023-01-09 21:50:23', NULL),
(2, 'Nâng cao', '2023-01-09 21:50:36', NULL),
(3, 'Chuyên nghiệp', '2023-01-09 21:50:42', NULL),
(4, 'Mọi trình độ', '2023-01-12 03:00:27', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_12_20_074311_create_user_table', 1),
(3, '2022_12_20_074630_create_user_group_table', 1),
(4, '2022_12_20_075017_add_group_id_to_user_table', 1),
(5, '2022_12_20_150405_add_is_default_to_user_group', 1),
(6, '2022_12_26_150001_create_taxonomy_table', 1),
(7, '2022_12_26_161122_add_thumbnail_to_taxonomy_table', 1),
(8, '2022_12_27_033251_add_sortorder_to_taxonomy_table', 1),
(9, '2022_12_27_035742_add_slug_to_taxonomy_table', 1),
(10, '2022_12_27_041333_add_seo_to_taxonomy_table', 1),
(11, '2022_12_27_063442_create_supplier_table', 1),
(12, '2022_12_27_070144_create_product_table', 1),
(13, '2022_12_27_070814_create_product_meta_table', 1),
(14, '2022_12_27_084508_add_supplier_id_to_product_table', 1),
(15, '2022_12_27_090836_create_taxonomy_relationship_table', 1),
(16, '2022_12_27_091131_add_taxonomy_type_to_taxonomy_relationship_table', 1),
(17, '2022_12_27_091555_add_percent_to_product_table', 1),
(18, '2022_12_28_081115_add_is_show_to_user_group_table', 1),
(19, '2022_12_29_043029_create_order_table', 1),
(20, '2022_12_29_061144_add_code_to_order_table', 1),
(21, '2022_12_29_062530_add_status_to_order_table', 1),
(22, '2022_12_29_071517_add_total_point_to_order_table', 1),
(23, '2022_12_29_075909_add_total_commission_to_order_table', 1),
(24, '2022_12_29_081456_create_payment_history_table', 1),
(25, '2022_12_30_043330_create_upload_table', 1),
(26, '2022_12_30_083557_add_aff_number_to_user_table', 1),
(27, '2022_12_30_135310_create_product_group_table', 1),
(28, '2022_12_30_140235_add_group_id_to_product_table', 1),
(29, '2022_12_31_064043_add_lft_rgt_to_user_table', 1),
(30, '2022_12_31_080944_create_ticket_table', 1),
(31, '2022_12_31_082002_add_parent_id_to_ticket_table', 1),
(32, '2022_12_31_083639_add_code_status_to_ticket_table', 1),
(33, '2022_12_31_090553_add_lft_rgt_to_ticket_table', 1),
(34, '2023_01_06_072020_create_course_table', 1),
(35, '2023_01_06_072330_create_level_table', 1),
(36, '2023_01_06_072409_add_level_id_to_course_id', 1),
(37, '2023_01_06_072536_create_teacher_table', 1),
(38, '2023_01_06_072624_add_teacher_id_to_course_id', 1),
(39, '2023_01_06_073100_create_lesson_table', 2),
(40, '2023_01_06_073346_create_document_table', 3),
(41, '2023_01_06_073503_create_course_lession_document_table', 4),
(42, '2023_01_06_074457_create_question_table', 5),
(43, '2023_01_06_074835_create_course_teacher_lession_question_table', 5),
(44, '2023_01_06_075025_create_order_course_user_table', 5),
(45, '2023_01_09_135810_add_course_id_to_taxonomy_relationship_table', 6),
(46, '2023_01_10_090727_add_is_try_to_lesson_table', 7),
(47, '2023_01_11_080009_add_course_id_to_lesson_table', 8),
(51, '2023_01_12_080946_create_affilate_setting_table', 9),
(52, '2023_01_12_081001_create_affilate_level_table', 9),
(53, '2023_01_12_081059_add_indirect_level_id_to_affilate_setting', 9),
(54, '2023_01_12_081948_add_level_id_to_affilate_setting', 10),
(55, '2023_01_12_083330_add_level_id_to_user_table', 11),
(58, '2023_01_12_110921_create_course_combo_table', 12),
(59, '2023_01_12_111301_create_combo_course_table', 13),
(60, '2023_01_16_014906_add_sort_to_course_table', 14),
(61, '2023_01_16_063910_add_slug_to_teacher_table', 15),
(62, '2023_01_16_073002_add_slug_to_combo_table', 16),
(64, '2023_01_17_073049_create_setting_table', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `info_order` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`info_order`)),
  `info_shipping` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`info_shipping`)),
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`payment`)),
  `products` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`products`)),
  `shipping` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`shipping`)),
  `subtotal` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `total_weight` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_point` int(11) DEFAULT NULL,
  `total_commission` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_course_user`
--

CREATE TABLE `order_course_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_course_user`
--

INSERT INTO `order_course_user` (`id`, `course_id`, `user_id`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, NULL, NULL, '2023-01-16 02:38:20', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_history`
--

CREATE TABLE `payment_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_commission` int(11) DEFAULT NULL,
  `total_point` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orgin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `regular_price` int(11) DEFAULT NULL,
  `in_stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `is_published` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `supplier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `product_group_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_group`
--

CREATE TABLE `product_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_meta`
--

CREATE TABLE `product_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `meta_key`, `meta_value`) VALUES
(24, 'logo', 'http://localhost/rpa/public/uploads/images/JstDpFm8gU.png'),
(25, 'icon', 'http://localhost/rpa/public/uploads/images/OZA4GBSqkN.jpg'),
(26, 'seo_default', '{\"meta_title\":\"Rpagroup.vn - H\\u1ecdc online c\\u00f9ng chuy\\u00ean gia\",\"meta_description\":\"Rpagroup h\\u1ecdc online v\\u1edbi h\\u01a1n 700 kh\\u00f3a h\\u1ecdc tr\\u1ef1c tuy\\u1ebfn thu\\u1ed9c nhi\\u1ec1u l\\u0129nh v\\u1ef1c nh\\u01b0 k\\u1ef9 n\\u0103ng qu\\u1ea3n tr\\u1ecb, ngo\\u1ea1i ng\\u1eef, t\\u00e0i ch\\u00ednh, b\\u1ea5t \\u0111\\u1ed9ng s\\u1ea3n, b\\u1ea3o hi\\u1ec3m, ch\\u1ee9ng kho\\u00e1n, ti\\u1ebfp th\\u1ecb b\\u00e1n h\\u00e0ng\",\"meta_keyword\":\"Rpa, Rpagroup\",\"robots\":\"0\"}'),
(27, 'social', '{\"facebook\":\"https:\\/\\/www.facebook.com\\/dainghiagroup\",\"twitter\":\"https:\\/\\/www.twitter.com\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/\",\"instagram\":\"https:\\/\\/www.Instagram.com\\/\",\"linkedin\":null,\"zalo\":null,\"fb_id\":\"110984141740834\"}'),
(28, 'other_social_icon', '[null]'),
(29, 'other_social_link', '[null]'),
(30, 'payment_method', '[\"paypal\",\"master_card\",\"visa\",\"jcb\",\"cash\",\"internet-banking\",\"installment\"]'),
(31, 'payment_icon', '{\"paypal\":null,\"master_card\":null,\"visa\":null,\"jcb\":null,\"cash\":null,\"internet-banking\":null,\"installment\":null}'),
(32, 'other_payment_icon', '[null]'),
(33, 'datetime_format', 'd/m/Y'),
(34, 'website_name', 'Rpagroup.vn - Học online cùng chuyên gia'),
(35, 'email', 'support@rpagroup.vn'),
(36, 'phone', '0932 730 394'),
(37, 'address', '<p>Tầng 4, Tòa C\'land, Số 81 Lê Đức Thọ, P. Mỹ Đình 2, Q. Nam Từ Liêm, Tp. Hà Nội</p>'),
(38, 'send_customer_contact_to_admin_email', '1'),
(39, 'contact_captcha', '0'),
(40, 'contact_required_email', '0'),
(41, 'contact_required_phone', '1'),
(42, 'contact_thankyou_link', NULL),
(43, 'maps', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.244368572698!2d103.9651236!3d22.4950129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd139cb873ae31%3A0x33def7866a7c16f1!2zMzYgxJDhurduZyBUcuG6p24gQ8O0biwgQ-G7kWMgTOG6v3UsIFRYLkzDoG8gQ2FpLCBMw6BvIENhaQ!5e0!3m2!1svi!2s!4v1663940152285!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(44, 'payment_info', '<p>Bạn có thể đến bất kỳ ngân hàng nào ở Việt Nam (hoặc sử dụng Internet Banking) để chuyển tiền theo thông tin bên dưới:</p>\r\n\r\n<ul>\r\n	<li>Số tài khoản:<strong>1903 50585 30017</strong></li>\r\n	<li>Chủ tài khoản:Công ty TNHH Đào Tạo Nguồn Lực Việt</li>\r\n	<li>Ngân hàng:Ngân Hàng Thương Mại Cổ Phần Kỹ Thương Việt Nam (Techcombank) - Chi nhánh Bình Thạnh, Tp.Hồ Chí Minh</li>\r\n	<br />\r\n	<li>Số tài khoản:053 100 259 0569</li>\r\n	<li>Chủ tài khoản:Công ty TNHH Đào Tạo Nguồn Lực Việt</li>\r\n	<li>Ngân hàng:Ngân Hàng Thương Mại Cổ Phần Ngoại Thương Việt Nam (Vietcombank) - Chi nhánh Đông Sài Gòn, Tp.Hồ Chí Minh</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taxonomy`
--

CREATE TABLE `taxonomy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxonomy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taxonomy`
--

INSERT INTO `taxonomy` (`id`, `name`, `taxonomy`, `description`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `thumbnail`, `sort_order`, `slug`, `meta_keyword`, `h1`) VALUES
(3, 'Sale - CSKH', 'course_cat', NULL, 1, 8, NULL, '2023-01-12 02:26:40', NULL, NULL, NULL, 'sale-cskh', 'Sale - CSKH', 'Sale - CSKH'),
(4, 'Bán hàng', 'course_cat', NULL, 2, 3, 3, '2023-01-12 02:26:51', NULL, NULL, NULL, 'ban-hang', 'Bán hàng', 'Bán hàng'),
(5, 'Chăm sóc khách hàng', 'course_cat', NULL, 4, 5, 3, '2023-01-12 02:27:03', NULL, NULL, NULL, 'cham-soc-khach-hang', 'Chăm sóc khách hàng', 'Chăm sóc khách hàng'),
(6, 'Telesale', 'course_cat', NULL, 6, 7, 3, '2023-01-12 02:27:15', NULL, NULL, NULL, 'telesale', 'Telesale', 'Telesale'),
(7, 'Kỹ năng công việc', 'course_cat', NULL, 9, 14, NULL, '2023-01-12 02:27:25', NULL, NULL, NULL, 'ky-nang-cong-viec', 'Kỹ năng công việc', 'Kỹ năng công việc'),
(8, 'Thuyết trình', 'course_cat', NULL, 10, 11, 7, '2023-01-12 02:27:37', NULL, NULL, NULL, 'thuyet-trinh', 'Thuyết trình', 'Thuyết trình'),
(9, 'Nâng cao hiệu suất', 'course_cat', NULL, 12, 13, 7, '2023-01-12 02:27:51', NULL, NULL, NULL, 'nang-cao-hieu-suat', 'Nâng cao hiệu suất', 'Nâng cao hiệu suất'),
(10, 'Kỹ năng con người', 'course_cat', NULL, 15, 16, NULL, '2023-01-12 02:28:08', NULL, NULL, NULL, 'ky-nang-con-nguoi', 'Kỹ năng con người', 'Kỹ năng con người'),
(11, 'Kỹ năng quản trị', 'course_cat', NULL, 17, 18, NULL, '2023-01-12 02:28:18', NULL, NULL, NULL, 'ky-nang-quan-tri', 'Kỹ năng quản trị', 'Kỹ năng quản trị'),
(12, 'Ngoại ngữ', 'course_cat', NULL, 19, 20, NULL, '2023-01-12 02:28:28', NULL, NULL, NULL, 'ngoai-ngu', 'Ngoại ngữ', 'Ngoại ngữ'),
(13, 'Thiết kế đồ họa', 'course_cat', NULL, 21, 22, NULL, '2023-01-12 02:28:41', NULL, NULL, NULL, 'thiet-ke-do-hoa', 'Thiết kế đồ họa', 'Thiết kế đồ họa'),
(14, 'Ứng dụng phần mềm', 'course_cat', NULL, 23, 24, NULL, '2023-01-12 02:28:50', NULL, NULL, NULL, 'ung-dung-phan-mem', 'Ứng dụng phần mềm', 'Ứng dụng phần mềm'),
(15, 'Marketing và truyền thông', 'course_cat', NULL, 25, 26, NULL, '2023-01-12 02:29:03', NULL, NULL, NULL, 'marketing-va-truyen-thong', 'Marketing và truyền thông', 'Marketing và truyền thông'),
(16, 'IT và lập trình', 'course_cat', NULL, 27, 28, NULL, '2023-01-12 02:29:17', NULL, NULL, NULL, 'it-va-lap-trinh', 'IT và lập trình', 'IT và lập trình'),
(17, 'Hành chính nhân sự', 'course_cat', NULL, 29, 30, NULL, '2023-01-12 02:29:34', NULL, NULL, NULL, 'hanh-chinh-nhan-su', 'Hành chính nhân sự', 'Hành chính nhân sự');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taxonomy_relationship`
--

CREATE TABLE `taxonomy_relationship` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `taxonomy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `taxonomy_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taxonomy_relationship`
--

INSERT INTO `taxonomy_relationship` (`id`, `product_id`, `taxonomy_id`, `sort_order`, `created_at`, `updated_at`, `taxonomy_type`, `course_id`) VALUES
(4, NULL, 3, NULL, NULL, NULL, 'main', 5),
(5, NULL, 3, NULL, NULL, NULL, 'main', 6),
(6, NULL, 3, NULL, NULL, NULL, 'main', 7),
(7, NULL, 3, NULL, NULL, NULL, 'main', 8),
(8, NULL, 3, NULL, NULL, NULL, 'main', 9),
(9, NULL, 3, NULL, NULL, NULL, 'main', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`id`, `title`, `position`, `thumbnail`, `description`, `content`, `created_at`, `updated_at`, `slug`) VALUES
(2, 'Lê Trọng Nghĩa', 'Giam Doc', 'http://localhost/rpa/public/uploads/images/hNkTAhA92h.jpg', NULL, '<p>Vị trí</p>\r\n\r\n<p>CEO - 1LINE</p>\r\n\r\n<p>Planning Manager - Hung Thinh Agency</p>\r\n\r\n<p>Account Executive - Ureka Media</p>', '2023-01-12 03:00:46', NULL, NULL),
(3, 'Đàm Thu Chung', 'NLP Trainer - Master Coach', 'http://localhost/rpa/public/uploads/images/OZA4GBSqkN.jpg', NULL, '<h2>Đàm Thu Chung – Người Truyền Cảm Hứng Cho Những Điều Tốt Đẹp</h2>\r\n\r\n<p>Được xem là người truyền cảm hứng, động lực để tư duy và hành động, nữ doanh nhân Đàm Thu Chung có nhiều lợi thế để trở thành “sứ giả yêu thương”. Đó có thể là tài năng, tâm sáng của một người nhiều năm công tác trong ngành giáo dục, đó còn là vẻ đẹp cả về nội tâm lẫn ngoại hình cực kỳ sắc sảo, quý phái của chị.</p>\r\n\r\n<p>Từ nhỏ, Đàm Thu Chung đặc biệt yêu thích hát, múa, nghệ thuật và thích thể hiện bản thân là người cá tính, khá năng động và yêu đời. Tốt nghiệp cấp 3, chị thi đậu vào trường ĐH Sư phạm Thái nguyên và có hơn 4 năm giảng dạy tại Cao Bằng. Trong khoảng thời gian này, chị học cao học, lấy học vị thạc sĩ và chuyển công tác đến Sở GD&amp;ĐT Cao Bằng.</p>\r\n\r\n<p>Mẹ chị vốn là giáo viên toán học nên cũng ủng hộ chị theo nghề giáo và hoạt động trong ngành giáo dục. Đây chính là động lực để chị nhiều năm liền gắn bó với công tác giảng dạy.</p>\r\n\r\n<p>Tuy nhiên, một sự kiện nhỏ đã diễn ra và nó ảnh hưởng quyết định đến suy nghĩ và cuộc đời của chị sau này. Vô tình nhìn thấy video quay cảnh 2 đứa trẻ đánh nhau, xung quanh có nhiều đứa trẻ con khác nhưng chúng nó không làm gì cả, cầm điện thoại livetream. Chị suy nghĩ cảm tưởngdường như &nbsp;tất cả những gì mình giảng dạy bọn trẻ không tiếp thu, không dùng trong cuộc sống. Giá trị niềm tin của một bộ phận thanh thiếu niên không có. Chính vì vậy Đàm Thu Chung quyết tâm trở thành người truyền động lực.</p>\r\n\r\n<p>Vì thế, nhiều người gọi chị là &nbsp;“Sứ Giả yêu Thương” &nbsp;với mong muốn dùng tình yêu thương của mình để đóng góp nhiều điều tốt đẹp cho cuộc sống. Bởi lẽ một khi tình yêu thương được lan truyền thì cuộc sống mới thêm vạn phần ý nghĩa.</p>\r\n\r\n<p>Nghĩ là làm, chị quyết định xuống Hà Nội học các lớp tư duy, lớp kỹ năng mềm với những người thầy như Mr Why – Phạm Ngọc Anh, Mr Vas… 3 năm làm việc tại thủ đô, chị trở thành giảng viên, người truyền cảm hứng, đã đàotạo cho các doanh nghiệp về tư duy và kỹ năng bán hàng, kỹ năng thuyết trình đỉnh cao, tạo cách trẻ hơn, khỏe hơn đẹp hơn, sử dụng tư duy để hạnh phúc.</p>\r\n\r\n<p>Đầu năm 2018, chị thành lập doanh nghiệp và trở thành PGĐ Công ty TNHH Tư vấn và Đào tạo RPA. Dù mới thành lập nhưng RPA hoạt động độc lập, quyết đoán và đã thực hiện các chương trình: tạo động lực sách, đọc sách, yêu sách dành cho các em học sinh trường Phú Bình, Thái Nguyên; Tạo động lực về sách cho trẻ em ở ở các cơ sở tôn giáo…</p>\r\n\r\n<p><i></i></p>', '2023-01-15 23:42:30', NULL, 'dam-thu-chung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED DEFAULT NULL,
  `_rgt` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `phone`, `type`, `content`, `user_id`, `created_at`, `updated_at`, `parent_id`, `status`, `code`, `_lft`, `_rgt`) VALUES
(1, 'test', '0932730394', 'team', '<p>test</p>', 2, '2023-01-12 03:02:46', NULL, NULL, 'pending', 'NS398944', 1, 6),
(2, NULL, NULL, NULL, '<p>test12521521</p>', 2, '2023-01-12 03:02:54', NULL, 1, 'pending', 'NS326991', 2, 3),
(3, NULL, NULL, NULL, '<p>te12512521521</p>', 2, '2023-01-12 03:03:00', NULL, 1, 'pending', 'NS444039', 4, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `upload`
--

CREATE TABLE `upload` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newtime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `upload`
--

INSERT INTO `upload` (`id`, `type`, `title`, `caption`, `url`, `thumb`, `time`, `size`, `disk`, `folder_id`, `folder`, `newtime`, `created_at`, `updated_at`) VALUES
(1, 'jpg', 'zWaAc8SFaO.jpg', 'zWaAc8SFaO.jpg', 'http://localhost/rpa/public/uploads/images/zWaAc8SFaO.jpg', 'http://localhost/rpa/public/uploads/images/zWaAc8SFaO.jpg', '1673326273', 345184, 'public', '0', NULL, '2023-01-10 04:51:13', NULL, NULL),
(2, 'jpg', 'hNkTAhA92h.jpg', 'hNkTAhA92h.jpg', 'http://localhost/rpa/public/uploads/images/hNkTAhA92h.jpg', 'http://localhost/rpa/public/uploads/images/hNkTAhA92h.jpg', '1673515976', 49673, 'public', '0', NULL, '2023-01-12 09:32:56', NULL, NULL),
(3, 'jpg', 'tRpthHPFf2.jpg', 'tRpthHPFf2.jpg', 'http://localhost/rpa/public/uploads/images/tRpthHPFf2.jpg', 'http://localhost/rpa/public/uploads/images/tRpthHPFf2.jpg', '1673516036', 41587, 'public', '0', NULL, '2023-01-12 09:33:56', NULL, NULL),
(4, 'jpg', 'OMCRcEehKh.jpg', 'OMCRcEehKh.jpg', 'http://localhost/rpa/public/uploads/images/OMCRcEehKh.jpg', 'http://localhost/rpa/public/uploads/images/OMCRcEehKh.jpg', '1673834621', 39944, 'public', '0', NULL, '2023-01-16 02:03:41', NULL, NULL),
(5, 'jpg', 'BVm9Zet1oj.jpg', 'BVm9Zet1oj.jpg', 'http://localhost/rpa/public/uploads/images/BVm9Zet1oj.jpg', 'http://localhost/rpa/public/uploads/images/BVm9Zet1oj.jpg', '1673834706', 208370, 'public', '0', NULL, '2023-01-16 02:05:06', NULL, NULL),
(6, 'png', 'S8dXvKcdTh.png', 'S8dXvKcdTh.png', 'http://localhost/rpa/public/uploads/images/S8dXvKcdTh.png', 'http://localhost/rpa/public/uploads/images/S8dXvKcdTh.png', '1673834885', 180164, 'public', '0', NULL, '2023-01-16 02:08:05', NULL, NULL),
(7, 'jpg', 'fXBJYmftAi.jpg', 'fXBJYmftAi.jpg', 'http://localhost/rpa/public/uploads/images/fXBJYmftAi.jpg', 'http://localhost/rpa/public/uploads/images/fXBJYmftAi.jpg', '1673834962', 117114, 'public', '0', NULL, '2023-01-16 02:09:22', NULL, NULL),
(8, 'jpg', 'RMLgvi7Dss.jpg', 'RMLgvi7Dss.jpg', 'http://localhost/rpa/public/uploads/images/RMLgvi7Dss.jpg', 'http://localhost/rpa/public/uploads/images/RMLgvi7Dss.jpg', '1673835001', 83503, 'public', '0', NULL, '2023-01-16 02:10:01', NULL, NULL),
(9, 'jpg', 'VXbCzzLrIz.jpg', 'VXbCzzLrIz.jpg', 'http://localhost/rpa/public/uploads/images/VXbCzzLrIz.jpg', 'http://localhost/rpa/public/uploads/images/VXbCzzLrIz.jpg', '1673835101', 101015, 'public', '0', NULL, '2023-01-16 02:11:41', NULL, NULL),
(10, 'jpg', 'DuEQHjjO77.jpg', 'DuEQHjjO77.jpg', 'http://localhost/rpa/public/uploads/images/DuEQHjjO77.jpg', 'http://localhost/rpa/public/uploads/images/DuEQHjjO77.jpg', '1673835724', 258729, 'public', '0', NULL, '2023-01-16 02:22:04', NULL, NULL),
(11, 'jpg', 'OZA4GBSqkN.jpg', 'OZA4GBSqkN.jpg', 'http://localhost/rpa/public/uploads/images/OZA4GBSqkN.jpg', 'http://localhost/rpa/public/uploads/images/OZA4GBSqkN.jpg', '1673835770', 322623, 'public', '0', NULL, '2023-01-16 02:22:50', NULL, NULL),
(12, 'png', 'JstDpFm8gU.png', 'JstDpFm8gU.png', 'http://localhost/rpa/public/uploads/images/JstDpFm8gU.png', 'http://localhost/rpa/public/uploads/images/JstDpFm8gU.png', '1673945100', 77495, 'public', '0', NULL, '2023-01-17 08:45:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `aff_number` int(11) DEFAULT NULL,
  `_lft` int(10) UNSIGNED DEFAULT NULL,
  `_rgt` int(10) UNSIGNED DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `avatar`, `password`, `email`, `birthday`, `gender`, `address`, `phone`, `code`, `token`, `secret`, `parent_id`, `role`, `status`, `created_at`, `group_id`, `aff_number`, `_lft`, `_rgt`, `level_id`) VALUES
(1, 'admin', 'admin', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, '2023-01-10 05:49:29', NULL, NULL, NULL, NULL, NULL),
(2, 'Duy Anh', 'anhnnd', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'anhnnd.hotro@gmail.com', NULL, NULL, NULL, '0932730394', 'NS926248', 'cCc25LwjW574ppBsDdHEfyE7YJ1yvqbwfar0W2QI', NULL, NULL, 'user', 'active', '2023-01-10 06:51:46', NULL, 3, 1, 4, 1),
(4, 'Paul Nguyễn', 'paulnguyen', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'paulnguyen.moondigi@gmail.com', NULL, NULL, NULL, NULL, 'NS971543', 'foHIMVEakPItLCmLfGi0YA3I9va5WxGgfEVnHHIw', NULL, '2', 'user', 'pending', '2023-01-12 08:36:26', NULL, NULL, 2, 3, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_group`
--

CREATE TABLE `user_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `sales` int(11) DEFAULT NULL,
  `monthly_income` int(11) DEFAULT NULL,
  `group_commission` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_show` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `affilate_level`
--
ALTER TABLE `affilate_level`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `affilate_setting`
--
ALTER TABLE `affilate_setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affilate_setting_indirect_level_id_foreign` (`indirect_level_id`),
  ADD KEY `affilate_setting_level_id_foreign` (`level_id`);

--
-- Chỉ mục cho bảng `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `combo_course`
--
ALTER TABLE `combo_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `combo_course_course_id_foreign` (`course_id`),
  ADD KEY `combo_course_combo_id_foreign` (`combo_id`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_level_id_foreign` (`level_id`),
  ADD KEY `course_teacher_id_foreign` (`teacher_id`);

--
-- Chỉ mục cho bảng `course_lession_document`
--
ALTER TABLE `course_lession_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_lession_document_lesson_id_foreign` (`lesson_id`),
  ADD KEY `course_lession_document_document_id_foreign` (`document_id`),
  ADD KEY `course_lession_document_course_id_foreign` (`course_id`);

--
-- Chỉ mục cho bảng `course_teacher_lession_question`
--
ALTER TABLE `course_teacher_lession_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_teacher_lession_question_lesson_id_foreign` (`lesson_id`),
  ADD KEY `course_teacher_lession_question_teacher_id_foreign` (`teacher_id`),
  ADD KEY `course_teacher_lession_question_course_id_foreign` (`course_id`);

--
-- Chỉ mục cho bảng `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_course_id_foreign` (`course_id`);

--
-- Chỉ mục cho bảng `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_course_user`
--
ALTER TABLE `order_course_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_course_user_course_id_foreign` (`course_id`),
  ADD KEY `order_course_user_user_id_foreign` (`user_id`),
  ADD KEY `order_course_user_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_history_order_id_foreign` (`order_id`),
  ADD KEY `payment_history_user_id_foreign` (`user_id`),
  ADD KEY `payment_history_approved_by_foreign` (`approved_by`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_supplier_id_foreign` (`supplier_id`),
  ADD KEY `product_product_group_id_foreign` (`product_group_id`);

--
-- Chỉ mục cho bảng `product_group`
--
ALTER TABLE `product_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_meta`
--
ALTER TABLE `product_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_meta_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taxonomy`
--
ALTER TABLE `taxonomy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taxonomy__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Chỉ mục cho bảng `taxonomy_relationship`
--
ALTER TABLE `taxonomy_relationship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taxonomy_relationship_product_id_foreign` (`product_id`),
  ADD KEY `taxonomy_relationship_taxonomy_id_foreign` (`taxonomy_id`),
  ADD KEY `taxonomy_relationship_course_id_foreign` (`course_id`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_group_id_foreign` (`group_id`),
  ADD KEY `user_level_id_foreign` (`level_id`);

--
-- Chỉ mục cho bảng `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `affilate_level`
--
ALTER TABLE `affilate_level`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `affilate_setting`
--
ALTER TABLE `affilate_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `combo`
--
ALTER TABLE `combo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `combo_course`
--
ALTER TABLE `combo_course`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `course_lession_document`
--
ALTER TABLE `course_lession_document`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `course_teacher_lession_question`
--
ALTER TABLE `course_teacher_lession_question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `document`
--
ALTER TABLE `document`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `level`
--
ALTER TABLE `level`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_course_user`
--
ALTER TABLE `order_course_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product_group`
--
ALTER TABLE `product_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product_meta`
--
ALTER TABLE `product_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taxonomy`
--
ALTER TABLE `taxonomy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `taxonomy_relationship`
--
ALTER TABLE `taxonomy_relationship`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `upload`
--
ALTER TABLE `upload`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `affilate_setting`
--
ALTER TABLE `affilate_setting`
  ADD CONSTRAINT `affilate_setting_indirect_level_id_foreign` FOREIGN KEY (`indirect_level_id`) REFERENCES `affilate_level` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `affilate_setting_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `affilate_level` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `combo_course`
--
ALTER TABLE `combo_course`
  ADD CONSTRAINT `combo_course_combo_id_foreign` FOREIGN KEY (`combo_id`) REFERENCES `combo` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `combo_course_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `course_lession_document`
--
ALTER TABLE `course_lession_document`
  ADD CONSTRAINT `course_lession_document_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_lession_document_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `document` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_lession_document_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lesson` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `course_teacher_lession_question`
--
ALTER TABLE `course_teacher_lession_question`
  ADD CONSTRAINT `course_teacher_lession_question_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_teacher_lession_question_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lesson` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_teacher_lession_question_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_course_user`
--
ALTER TABLE `order_course_user`
  ADD CONSTRAINT `order_course_user_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_course_user_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_course_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `payment_history`
--
ALTER TABLE `payment_history`
  ADD CONSTRAINT `payment_history_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_history_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_product_group_id_foreign` FOREIGN KEY (`product_group_id`) REFERENCES `product_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_meta`
--
ALTER TABLE `product_meta`
  ADD CONSTRAINT `product_meta_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `taxonomy_relationship`
--
ALTER TABLE `taxonomy_relationship`
  ADD CONSTRAINT `taxonomy_relationship_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `taxonomy_relationship_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `taxonomy_relationship_taxonomy_id_foreign` FOREIGN KEY (`taxonomy_id`) REFERENCES `taxonomy` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `user_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `affilate_level` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
