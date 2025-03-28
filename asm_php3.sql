-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 27, 2025 lúc 03:37 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thế Giới', NULL, NULL),
(2, 'Thời Sự', NULL, NULL);

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
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(10, '0001_01_01_000000_create_users_table', 1),
(11, '0001_01_01_000001_create_cache_table', 1),
(12, '0001_01_01_000002_create_jobs_table', 1),
(13, '2025_03_11_065502_create_products_table', 1),
(14, '2025_03_17_070853_create_news_table', 1),
(15, '2025_03_17_084202_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) NOT NULL,
  `description_short` varchar(1000) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `views` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description_short`, `description`, `image`, `views`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Nga yêu cầu cấm Ukraine gia nhập NATO trong thỏa thuận hòa bình', 'Thứ trưởng Ngoại giao Nga Grushko cho biết thỏa thuận hòa bình cần đảm bảo Ukraine không gia nhập NATO và Kiev phải duy trì sự trung lập.', 'Thứ trưởng Ngoại giao Nga Grushko cho biết thỏa thuận hòa bình cần đảm bảo Ukraine không gia nhập NATO và Kiev phải duy trì sự trung lập.\r\n\r\n\"Chúng tôi sẽ yêu cầu thỏa thuận hòa bình phải bao gồm những bảo đảm an ninh vững chắc. Bên cạnh đó, Ukraine phải duy trì tình trạng trung lập và NATO từ chối kết nạp nước này vào liên minh\", Thứ trưởng Ngoại giao Nga Alexander Grushko hôm nay cho hay.\r\n\r\nTheo ông Grushko, các đồng minh châu Âu của Kiev nên hiểu rằng an ninh khu vực chỉ được đảm bảo khi không kết nạp Ukraine vào NATO và loại trừ khả năng triển khai lực lượng quân sự nước ngoài trên lãnh thổ nước này.\r\n\r\n\"Khi đó, an ninh của Ukraine và toàn bộ khu vực sẽ được đảm bảo vì một trong những nguyên nhân gốc rễ của xung đột đã bị loại bỏ\", Thứ trưởng Grushko nhấn mạnh.\r\n\r\nÔng cũng nhắc lại lập trường của Điện Kremlin rằng Nga kiên quyết phản đối ý tưởng triển khai lực lượng NATO tới Ukraine để giám sát thỏa thuận ngừng bắn.\r\n\r\nAnh và Pháp trước đó đều tuyên bố sẵn sàng điều lực lượng gìn giữ hòa bình để giám sát lệnh ngừng bắn tiềm năng ở Ukraine. Thủ tướng Australia Anthony Albanese cũng cho biết Canberra sẵn sàng làm như vậy nếu được yêu cầu.\r\n\r\n\"Việc lực lượng NATO được triển khai trên lãnh thổ Ukraine dưới danh nghĩa Liên minh châu Âu (EU), NATO hoặc quốc gia nào đó đều không quan trọng. Họ xuất hiện sẽ đồng nghĩa với việc được triển khai ở khu vực xung đột và phải chịu mọi hậu quả với tư cách bên tham gia xung đột\", Thứ trưởng Ngoại giao Nga nhấn mạnh.\r\n\r\nThứ trưởng Ngoại giao Nga Alexander Grushko tại Moskva tháng 8/2023. Ảnh: Reuters\r\n\r\nThứ trưởng Ngoại giao Nga Alexander Grushko tại Moskva tháng 8/2023. Ảnh: Reuters\r\n\r\nTheo ông, việc triển khai lực lượng quan sát viên không vũ trang sau xung đột chỉ có thể được thảo luận khi đã đạt được thỏa thuận hòa bình. \"Một phái bộ dân sự sẽ giám sát việc thực hiện từng khía cạnh của thỏa thuận này hoặc các cơ chế bảo đảm\", ông Grushko nói.\r\n\r\nTrong bài phát biểu hôm 16/3, Tổng thống Pháp Emmanuel Macron cho rằng việc triển khai lính gìn giữ hòa bình tại Ukraine là vấn đề do Kiev quyết định, không phải do Moskva.\r\n\r\nĐáp lại, Phó chủ tịch Hội đồng An ninh Quốc gia Nga Dmitry Medvedev cho rằng sự hiện diện của lực lượng gìn giữ hòa bình phương Tây tới Ukraine đồng nghĩa \"chiến tranh giữa NATO và Nga\".\r\n\r\nCác tuyên bố của Nga được đưa ra giữa lúc các cuộc đàm phán vẫn tiếp tục về lệnh ngừng bắn cho cuộc chiến đã kéo dài ba năm ở Ukraine. Mỹ và Ukraine đã nhất trí về đề xuất ngừng bắn 30 ngày, song Nga chưa chấp thuận, cho rằng cần phải thảo luận thêm về các điều kiện. Thứ trưởng Ngoại giao Nga không đề cập đến đề xuất này trong bài phát biểu.\r\n\r\nPhái viên Mỹ Steve Witkoff, người gặp ông Putin tại Moskva hôm 13/3, nói rằng Tổng thống Donald Trump và lãnh đạo Nga dự kiến điện đàm \"trong tuần này\", song từ chối trả lời về cách giải quyết vấn đề những vùng lãnh thổ Nga đang kiểm soát ở Ukraine trong thỏa thuận tiềm năng. Nga hiện kiểm soát khoảng 1/5 diện tích Ukraine.', 'https://i1-vnexpress.vnecdn.net/2025/03/17/2023-08-31t133133z-1395259347-2478-7627-1742181548.jpg?w=220&h=132&q=100&dpr=2&fit=crop&s=ZPzskRPbtyJ3idiUZVpupQ', 10000, 1, '2025-03-17 07:52:42', NULL),
(2, 'Ông Trump: Tôi sẽ điện đàm với ông Putin ngày 18/3', 'Tổng thống Mỹ cho biết sẽ điện đàm với ông Putin vào ngày 18/3 để thảo luận về khả năng chấm dứt cuộc xung đột Ukraine. ', 'Tổng thống Mỹ cho biết sẽ điện đàm với ông Putin vào ngày 18/3 để thảo luận về khả năng chấm dứt cuộc xung đột Ukraine.\r\n\r\n\"Chúng tôi đã làm được nhiều việc vào cuối tuần qua\", Tổng thống Mỹ Donald Trump đêm 16/3 nói với phóng viên trên chuyên cơ Không lực Một khi trên đường từ Florida trở về Washington. \"Tôi sẽ điện đàm với Tổng thống Putin vào ngày 18/3\".\r\n\r\n\"Chúng tôi muốn xem liệu có thể chấm dứt cuộc chiến này hay không. Tôi nghĩ chúng ta đang có cơ hội rất tốt để làm điều đó\", ông Trump nói thêm, dù thừa nhận cuộc thảo luận \"có thể thành công, cũng có thể thất bại\".\r\n\r\nTổng thống Mỹ Donald Trump tại Nhà Trắng hôm 7/3. Ảnh: AFP\r\n\r\nTổng thống Mỹ Donald Trump tại Nhà Trắng hôm 7/3. Ảnh: AFP\r\n\r\nTổng thống Mỹ cho hay hai lãnh đạo sẽ thảo luận thêm về lãnh thổ và các nhà máy điện trong cuộc điện đàm, nhưng không nêu chi tiết.\r\n\r\nĐiện Kremlin chưa xác nhận thông tin này.\r\n\r\nTrước đó, Steve Witkoff, đặc phái viên của Tổng thống Trump nói rằng \"hai Tổng thống sẽ có một cuộc thảo luận thực sự tốt và tích cực trong tuần này\".\r\n\r\n\"Đây là tình huống rất phức tạp, nhưng chúng tôi đang thu hẹp khoảng cách giữa hai bên\", ông Witkoff nói và thêm rằng Tổng thống Trump \"thực sự mong đợi đạt thỏa thuận trong những tuần tới và tôi cũng tin việc đó sẽ thành hiện thực\".\r\n\r\nNgoại trưởng Mỹ Marco Rubio ngày 16/3 mô tả cuộc thảo luận của ông với người đồng cấp Nga Sergei Lavrov một ngày trước đó \"có triển vọng\" và \"hy vọng chúng tôi sẽ sớm có điều gì đó để công bố\".\r\n\r\nTuy nhiên, giới chức Mỹ ám chỉ Ukraine phải chấp nhận nhượng bộ để đạt được thỏa thuận.\r\n\r\nCố vấn An ninh Quốc gia Mỹ Mike Waltz ngày 16/3 ám chỉ Ukraine có thể phải nhượng bộ một số vùng lãnh thổ cho Nga, khi ông được hỏi liệu thỏa thuận ngừng bắn có yêu cầu Ukraine phải từ bỏ khu vực Donbass ở phía đông mà Nga đang kiểm soát phần lớn hay không.\r\n\r\nCố vấn an ninh quốc gia Mỹ Mike Waltz tại Riyadh, Arab Saudi ngày 18/2. Ảnh: Reuters\r\nCố vấn an ninh quốc gia Mỹ Mike Waltz tại Riyadh, Arab Saudi ngày 18/2. Ảnh: Reuters\r\n\r\n\"Đây sẽ là kiểu thỏa thuận đổi lãnh thổ lấy đảm bảo an ninh trong tương lai, đây là thực trạng tương lai của Ukraine\", ông Waltz nói.\r\n\r\nÔng cũng nhấn mạnh khả năng Ukraine được vạch lộ trình gia nhập NATO hay trao tư cách thành viên liên minh là \"điều cực kỳ khó xảy ra\".\r\n\r\nSau cuộc họp giữa hai phái đoàn Mỹ và Ukraine tại Arab Saudi đầu tuần trước, Kiev thông báo chấp nhận đề xuất ngừng bắn 30 ngày mà Washington đưa ra. Tổng thống Putin tuyên bố Nga ủng hộ những đề xuất chấm dứt chiến sự Ukraine, trong đó có ngừng bắn 30 ngày, với điều kiện chúng phải hướng đến hòa bình lâu dài và giải quyết triệt để nguồn cơn dẫn đến xung đột.\r\n\r\nNga từ lâu khẳng định coi việc Ukraine gia nhập NATO là \"lằn ranh đỏ\" đối với nước này, trong khi Kiev cũng nhiều lần tuyên bố loại trừ khả năng nhượng bộ lãnh thổ.\r\n\r\nTrong cuộc phỏng vấn với đài truyền hình CBS cuối tuần qua, ông Witkoff mô tả các cuộc đàm phán hòa bình trong tương lai sẽ \"rất phức tạp\", liệt kê nhiều chủ đề thảo luận đầy thách thức như việc chấm dứt giao tranh dọc biên giới 2.000 km, cuộc tấn công của Ukraine vào tỉnh Kursk của Nga, số phận lò phản ứng hạt nhân Ukraine và quyền tiếp cận các cảng ở Biển Đen.\r\n\r\n\"Tất cả các bên, gồm cả những người châu Âu, đều cam kết làm mọi thứ cần làm để đạt được giải pháp thành công\", ông nói.', 'https://i1-vnexpress.vnecdn.net/2025/03/17/afp-20250307-36zj8gj-v1-highre-6041-9260-1742186429.jpg?w=180&h=108&q=100&dpr=2&fit=crop&s=1cgkxUGsoIuYZ1LjWb06jw', 1727, 1, '2025-03-18 07:52:47', NULL),
(3, 'Đề xuất xây cầu vượt thép ở trung tâm Nha Trang để giảm ùn tắc', 'Khánh HòaTP Nha Trang đề xuất làm nút giao Mả Vòng tổng mức đầu tư 390 tỷ đồng, trong đó có xây cầu vượt thép để giảm ùn tắc tại khu vực trung tâm.', 'Khánh HòaTP Nha Trang đề xuất làm nút giao Mả Vòng tổng mức đầu tư 390 tỷ đồng, trong đó có xây cầu vượt thép để giảm ùn tắc tại khu vực trung tâm.\r\n\r\nNút giao Mả Vòng nằm gần ga Nha Trang ở trung tâm thành phố, là điểm giao các tuyến đường lớn như Thái Nguyên, Thống Nhất, Yersin, Lê Hồng Phong và có đường sắt cắt qua nên mật độ xe rất cao, nhất là giờ cao điểm.\r\n\r\nTheo phương án được chính quyền Nha Trang đề xuất, nút giao gồm cầu vượt đường sắt cho các tuyến đường từ Thái Nguyên, Thống Nhất, Yersin rẽ trái sang đường Lê Hồng Phong và ngược lại; phía đường Lê Hồng Phong sẽ có đường nội bộ cho xe lên cầu và đi vào các khu dân cư.\r\n\r\nPhối cảnh cầu vượt tại dự án nút giao vòng xoay Mả Vòng. Đồ họa: UBND TP Nha Trang\r\nPhối cảnh cầu vượt tại dự án nút giao vòng xoay Mả Vòng. Đồ họa: UBND TP Nha Trang\r\n\r\nTrong tổng mức đầu tư, chi phí xây dựng khoảng 211 tỷ đồng, 118 tỷ đồng còn lại là tiền giải phóng mặt bằng 118 tỷ đồng. Dự án xây dựng cầu thép vĩnh cửu, vận tốc trên cầu 20 km/h. Đường vào nút giao vận tốc 40 km/h, đường gom dưới cầu vận tốc 30 km/h.\r\n\r\nSau khi hoàn thành, xe đi trên đường 23 tháng 10, Lê Hồng Phong, Thái Nguyên, Thống Nhất, Yersin muốn vượt đường sắt đều phải đi trên cầu vượt.\r\n\r\nKhu vực nút giao vòng xoay Mả Vòng ùn ứ vào giờ cao điểm khi có tàu hỏa đi qua. Ảnh: Bùi Toàn\r\nKhu vực nút giao vòng xoay Mả Vòng ùn ứ vào giờ cao điểm khi có tàu hỏa đi qua. Ảnh: Bùi Toàn\r\n\r\nHiện đường nội bộ của Khu đô thị mới Lê Hồng Phong II (cách dự án khoảng vài trăm m) đang đóng không cho xe chạy. Tuy nhiên, khi cầu vượt tại nút giao Mả Vòng được xây dựng, đường này sẽ được mở ra; tại dự án cũng bố trí cầu đi bộ qua đường sắt.\r\n\r\nTheo lãnh đạo UBND TP Nha Trang, dự án Nút giao vòng xoay Mả Vòng phù hợp định hướng quy hoạch theo Đồ án Điều chỉnh Quy hoạch chung và Đề án tổ chức, phát triển giao thông đường bộ của thành phố đến năm 2040. Việc đầu tư dự án rất cấp thiết nhằm giải quyết xung đột giao thông, hạn chế ảnh hưởng của đường sắt đến giao thông đường bộ.', 'https://i1-vnexpress.vnecdn.net/2025/03/17/phoicanhnhatrang-1742178503-17-5509-6683-1742179071.png?w=680&h=408&q=100&dpr=2&fit=crop&s=ij5-cLtdSCb9C1yvFiHCyg', 122, 2, '2024-07-17 03:25:20', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('duongdtpa00194@gmail.com', '$2y$12$N0s2U3k.bSBByYWTHvF3/eYlQg6537m/QMPFtVPLAGZzS5bQaDtyG', '2025-03-27 06:56:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('RaS3MWg6AZwXGS5DoLQzNrh0PiNPvApABMGqFuBz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36 Edg/134.0.0.0', 'YTo1OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwIjt9czo2OiJfdG9rZW4iO3M6NDA6Im9wa2VneWhoZXNyS1B6bEtBdDBhZk1CRkkzVGdBWFU1VlkxVnVwNjMiO3M6NzoidXNlcl9pZCI7aToxNztzOjk6InVzZXJfbmFtZSI7czoxOToixJDDoG8gVMO5bmcgRMawxqFuZyI7fQ==', 1743086130);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `activation_token` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `activation_token`, `created_at`, `updated_at`) VALUES
(16, 'Đào Tùng Dương', 'duongdtpa00194@gmail.com', '2025-03-27 07:08:12', '$2y$12$hflLFpTSBwSMUAzUQR61cOKwEkqxl6hkbHQLQQXzXWw.78cfztYCy', NULL, NULL, '2025-03-27 07:07:45', '2025-03-27 07:08:12'),
(17, 'Đào Tùng Dương', 'dt939708@gmail.com', '2025-03-27 14:35:13', '$2y$12$Mbs/wT9bGsmJ7e8GeHrM5.kRZ8rskYblg4UjoYPmMg81hFbUAFIlu', NULL, NULL, '2025-03-27 07:23:37', '2025-03-27 07:24:13');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
