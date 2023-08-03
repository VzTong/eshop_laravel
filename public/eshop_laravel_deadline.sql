-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 03, 2023 lúc 09:24 AM
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
-- Cơ sở dữ liệu: `eshop_laravel_deadline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'Tên quản trị viên',
  `ad_phone` varchar(255) NOT NULL COMMENT 'SĐT quản trị viên',
  `ad_email` varchar(255) NOT NULL COMMENT 'Email QTV',
  `ad_email_verified_at` timestamp NULL DEFAULT NULL COMMENT 'Thời điểm xác nhận Email QTV',
  `password` varchar(255) NOT NULL COMMENT 'Mật khẩu QTV',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `ad_phone`, `ad_email`, `ad_email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1231231233', 'admin123@gmail.com', NULL, '$2y$10$da33E7WDXrx/SFdMHg1uou7/aZ4CimjLLdv1XYSVCbdYaKofS5vY6', NULL, '2023-08-03 00:08:07', '2023-08-03 00:08:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `ctg_code` varchar(5) NOT NULL COMMENT 'Mã loại',
  `ctg_names` varchar(150) DEFAULT NULL COMMENT 'Tên loại',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`ctg_code`, `ctg_names`, `created_at`, `updated_at`) VALUES
('H03', 'Household', NULL, NULL),
('K01', 'Kitchen', NULL, NULL),
('PC02', 'Personal Care', NULL, NULL),
('SP04', 'Special Offer', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `centals`
--

CREATE TABLE `centals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `centals_name` varchar(255) DEFAULT NULL COMMENT 'Tên đơn vị trọng lượng',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `centals`
--

INSERT INTO `centals` (`id`, `centals_name`, `created_at`, `updated_at`) VALUES
(1, 'G', NULL, NULL),
(2, 'Kg', NULL, NULL),
(3, 'L', NULL, NULL),
(4, 'Ml', NULL, NULL),
(5, 'Pc', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_09_175528_create_categories_table', 1),
(6, '2023_07_09_181216_create_centals_table', 1),
(7, '2023_07_11_152941_create_products_table', 1),
(8, '2023_07_14_163531_create_customers_table', 1),
(9, '2023_07_14_165043_create_admins_table', 1),
(10, '2023_08_02_065127_create_statuses_table', 1),
(11, '2023_08_02_065222_create_orders_table', 1),
(12, '2023_08_02_070631_create_order__details_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_time` date NOT NULL COMMENT 'Ngày_giờ',
  `usr_name` varchar(255) NOT NULL COMMENT 'Tên người dùng',
  `addr` varchar(255) NOT NULL COMMENT 'Địa chỉ',
  `phone` varchar(255) NOT NULL COMMENT 'SĐT',
  `email` varchar(255) NOT NULL,
  `total_money` double(8,2) UNSIGNED NOT NULL COMMENT 'Tổng tiền',
  `id_status` bigint(20) NOT NULL COMMENT 'Trạng thái',
  `id_users` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order__details`
--

CREATE TABLE `order__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_orders` bigint(20) NOT NULL,
  `id_prd` bigint(20) NOT NULL,
  `price` double(8,2) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prd_code` varchar(5) NOT NULL COMMENT 'Mã sản phẩm',
  `prd_names` varchar(200) DEFAULT NULL COMMENT 'Tên sản phẩm',
  `prd_heft` int(10) UNSIGNED DEFAULT 0 COMMENT 'Trọng lượng sản phẩm',
  `id_cental` bigint(20) NOT NULL COMMENT 'ID Đơn vị trọng lượng sp',
  `prd_original_price` double(8,2) UNSIGNED DEFAULT 0.00 COMMENT 'Giá gốc sp',
  `prd_selling_price` double(8,2) UNSIGNED DEFAULT 0.00 COMMENT 'Giá bán sp',
  `prd_details` longtext DEFAULT NULL COMMENT 'Thông tin chi tiết sp',
  `quantity_prd` int(10) UNSIGNED NOT NULL COMMENT 'Số lượng sản phẩm`',
  `prd_cover` varchar(255) DEFAULT NULL COMMENT 'Ảnh sp',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `prd_code`, `prd_names`, `prd_heft`, `id_cental`, `prd_original_price`, `prd_selling_price`, `prd_details`, `quantity_prd`, `prd_cover`, `created_at`, `updated_at`) VALUES
(1, 'SP04', 'Moong2', 1, 2, 2.00, 1.50, 'Đậu xanh vị ngọt, hơi tanh, tính hàn, không độc, bổ nguyên khí, thanh nhiệt mát gan. Nhờ những chất chống oxy hóa vitexin và isovitexin trong đậu xanh có thể giúp bảo vệ tế bào khỏi các tổn thương do sốc nhiệt. Thích hợp với các bệnh nhân bị say nắng, miệng khát, người nóng, thấp nhiệt, ung nhọt,...', 20, 'images/of.png', NULL, NULL),
(2, 'K01', 'Wheat', 500, 1, 7.00, 6.00, 'Lúa mì hay lúa miến, tiểu mạch, tên khoa học: Triticum spp. là cây lương thực, thuộc một nhóm các loài cỏ đã thuần dưỡng từ khu vực Levant và được gieo trồng rộng khắp thế giới. Về tổng thể, lúa mì là thực phẩm quan trọng cho loài người, sản lượng của nó chỉ đứng sau bắp và lúa gạo trong số các loài cây lương thực.', 31, 'images/of24.png', NULL, NULL),
(3, 'PC02', 'Baby Oil', 250, 4, 7.00, 6.00, 'Dầu mát-xa và dưỡng ẩm Johnson\'s baby Oil 250ml chứa công thức khóa độ ẩm cao hơn gấp 10 lần so với các loại kem dưỡng da thông thường trên da khô, đảm bảo mang đến cho bé một sản phẩm chăm sóc làn da vô cùng hoàn hảo. Sản phẩm đã được chứng minh lâm sàng có tác dụng ngăn ngừa việc mất độ ẩm quá mức trên da, do đó thích hợp sử dụng không chỉ cho bé mà cho tất cả các thành viên gia đình, đặc biệt vào những ngày thời tiết hanh khô. Johnson\'s baby Oil được làm từ dầu khoáng tinh khiết nên cũng rất thích hợp để mát-xa cho bé trước và sau khi tắm giúp làm và giữ ấm cho cơ thể. ', 13, 'images/of36.png', NULL, NULL),
(4, 'SP04', 'Sunflower Oil', 5, 2, 10.00, 9.00, 'Dầu hướng dương có nhiều loại khác nhau với tỷ lệ acid béo không no khác nhau. Chính thành phần các acid béo không no cao này trong dầu hướng dương khiến dầu hướng dương trở thành một trong những loại dầu và mỡ thực vật tốt nhất cho sức khỏe, đặc biệt là đối với những người có nguy cơ mắc bệnh tim mạch. Trong một số loại dầu hướng dương chế biến, tỷ lệ acid béo không no, đặc biệt là acid béo không no ngắn thậm chí còn cao hơn cả trong dầu ô liu. Dầu hướng dương cũng thường được chế biến thành diesel sinh học do chi phí sản xuất dầu hướng dương rẻ hơn dầu đậu nành và dầu ô liu.', 2, 'images/of1.png', NULL, NULL),
(5, 'H03', 'Cat Food', 500, 1, 7.00, 6.00, 'Thức ăn cho mèo là thức ăn riêng biệt dành cho loài mèo sử dụng. Mèo có các yêu cầu cụ thể về hàm lượng chất dinh dưỡng trong chế độ ăn uống của chúng.', 0, 'images/of48.png', NULL, NULL),
(6, 'PC02', 'Soap', 250, 1, 5.00, 4.50, 'Xà phòng là muối kali hay natri của axit béo hay xà phòng tổng hợp đều có hai phần. Một là đầu hiđrocacbon kị nước, còn một đầu là ion kim loại ưa nước. Đối với các vết bẩn, dầu mỡ bám trên mặt vải thì đầu kị nước sẽ quay vào trong vết bẩn, đầu ưa nước hướng ra ngoài. Sau đó sẽ tạo thành mixen là một khối dạng cầu có đầu ưa nước quay ra ngoài tách vết bẩn ra khỏi bề mặt vải.', 9, 'images/of37.png', NULL, NULL),
(7, 'PC02', 'Hair Gel', 100, 1, 4.00, 3.50, 'Gel vuốt tóc là một sản phẩm tạo kiểu tóc được sử dụng để hóa cứng tóc thành một kiểu tóc riêng biệt.', 26, 'images/of38.png', NULL, NULL),
(8, 'PC02', 'Lotion', 100, 4, 1.00, 0.80, 'Sữa dưỡng thể hay sữa dưỡng da là loại mỹ phẩm pha chế có độ nhớt thấp, thoa da không bị bong tróc. Ngược lại, kem và gel có độ nhớt cao hơn. Sữa dưỡng thể thoa da bên ngoài bằng tay không, bàn chải, vải sạch, bông hoặc gạc.', 7, 'images/of39.png', NULL, NULL),
(9, 'H03', 'Safety Pins', 100, 1, 5.00, 4.50, 'The safety pin is a variation of the regular pin which includes a simple spring mechanism and a clasp. The clasp forms a closed loop to properly fasten the pin to whatever it is applied to and covers the end of the pin to protect the user from the sharp point.', 0, 'images/of49.png', NULL, NULL),
(10, 'H03', 'Apple', 200, 1, 4.00, 3.50, 'Apple Indian is blush red and the texture is smooth. Flesh is greenish white and grained, sweet and juicy. Its crispiness and aromatic features made it more attractive. Contains soluble fiber which controls cholesterol levels, Control your weight, Detoxify your liver. The phytonutrients and antioxidants in apples may help reduce the risk of developing cancer,...', 37, 'images/of11.png', NULL, NULL),
(11, 'H03', 'Candle Set', 1, 5, 1.00, 0.80, 'A luxury candle that warms any room with the comforting, fresh scent of a Lazy Sunday Morning.', 0, 'images/si.jpg', NULL, NULL),
(12, 'K01', 'Peach Halves', 250, 1, 5.00, 4.50, 'Choice sliced and halved clingstone peaches in heavy syrup shall be prepared from peaches of similar varietal characteristics that have been washed, peeled and hand sorted for quality.', 91, 'images/of25.png', NULL, NULL),
(13, 'K01', 'Banana', 1, 2, 4.00, 3.50, 'Chuối là tên gọi loại quả của các loài cây thuộc chi Chuối; đây được coi là một trong các loại trái cây được ăn rộng rãi nhất. Những cây chuối có gốc từ vùng nhiệt đới ở Đông Nam Á và Úc. Ngày nay, chuối được trồng khắp vùng nhiệt đới.', 0, 'images/of26.png', NULL, NULL),
(14, 'K01', 'Rice', 500, 1, 1.00, 0.80, 'Gạo là một sản phẩm lương thực thu từ cây lúa. Hạt gạo thường có màu trắng, nâu hoặc đỏ thẫm, chứa nhiều dinh dưỡng. Hạt gạo chính là nhân của thóc sau khi xay để tách bỏ vỏ trấu. ', 5, 'images/of27.png', NULL, NULL),
(15, 'SP04', 'Kabuli Chana', 1, 2, 3.00, 2.00, 'The chickpea is a key ingredient in Mediterranean and Middle Eastern cuisines, used in hummus, and, when soaked and coarsely ground with herbs and spices then made into patties and fried, falafel. It also is important in Indian cuisine, used in salads, soups and stews, and curry, in chana masala, and in other food products that contain channa (chickpeas). In 2019, India was responsible for 70% of global chickpea production.', 84, 'images/of2.png', NULL, NULL),
(16, 'SP04', 'Soya Chunks', 1, 2, 4.00, 3.50, 'MDH Soyateun Chunks cung cấp vitamin, khoáng chất và chất xơ. Hạt cốm siêu mềm, dễ tiêu hóa, hảo hạng và tốt cho mọi lứa tuổi. Chúng giảm trọng lượng cơ thể do hàm lượng chất béo thấp, loại bỏ các Cholesterol xấu, tăng cường sức khỏe của xương.  Sử dụng tromg các món salad, món hầm, súp.', 5, 'images/of3.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(255) NOT NULL COMMENT 'Tên trạng thái',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `statuses`
--

INSERT INTO `statuses` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'Cancelled', NULL, NULL),
(2, 'Delivered', NULL, NULL),
(3, 'Freight', NULL, NULL),
(4, 'Order confirmation', NULL, NULL),
(5, 'wait for confirmation', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'Tên người dùng',
  `usr_phone` varchar(255) NOT NULL COMMENT 'SĐT người dùng',
  `usr_email` varchar(255) NOT NULL COMMENT 'Email người dùng',
  `usr_email_verified_at` timestamp NULL DEFAULT NULL COMMENT 'Thời điểm xác nhận email ng dùng',
  `password` varchar(255) NOT NULL COMMENT 'Mật khẩu ng dùng',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `usr_phone`, `usr_email`, `usr_email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', '1231231231', 'test123@gmail.com', NULL, '$2y$10$IoyyZwmHiyjX05Z4ZzQFkOI0eEvdcJoD/UlUZ3OQMnkFJcrDpCVpK', NULL, '2023-08-02 23:59:07', '2023-08-02 23:59:07'),
(2, 'user', '1231231230', 'user123@gmail.com', NULL, '$2y$10$OUSpsI5BmSMAkhFlg.wHhOTs9RD3iu.uJfpeiYK.y81UOnuwu.r3i', NULL, '2023-08-03 00:10:33', '2023-08-03 00:10:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_ad_email_unique` (`ad_email`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ctg_code`);

--
-- Chỉ mục cho bảng `centals`
--
ALTER TABLE `centals`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_order_id_status` (`id_status`),
  ADD KEY `idx_order_id_users` (`id_users`);

--
-- Chỉ mục cho bảng `order__details`
--
ALTER TABLE `order__details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_order__details_id_orders` (`id_orders`),
  ADD KEY `idx_order__details_id_prd` (`id_prd`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_prd_names_unique` (`prd_names`),
  ADD KEY `products_prd_code_foreign` (`prd_code`),
  ADD KEY `idx_products_id_cental` (`id_cental`);

--
-- Chỉ mục cho bảng `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_usr_email_unique` (`usr_email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `centals`
--
ALTER TABLE `centals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order__details`
--
ALTER TABLE `order__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_prd_code_foreign` FOREIGN KEY (`prd_code`) REFERENCES `categories` (`ctg_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
