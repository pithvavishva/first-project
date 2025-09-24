-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2025 at 07:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` decimal(20,0) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_name`, `product_price`, `product_image`, `product_quantity`) VALUES
(1, 0, 'RING SET', 5000000, '1755837718_OIP (3).webp', 1),
(6, 0, 'RING', 40000000, '1755837557_il_1588xN.3561145861_p4t0.webp', 1),
(7, 25, 'RING SET', 5000000, '1755837718_OIP (3).webp', 1),
(8, 25, 'RING', 40000000, '1755837557_il_1588xN.3561145861_p4t0.webp', 1),
(9, 0, 'REAL GOLD ERRINGS', 9000000, '1755836368_ER092_3.webp', 1),
(10, 26, 'RING SET', 5000000, '1755837718_OIP (3).webp', 1),
(11, 26, 'REAL GOLD SET', 400000000, '1755836834_PD0325_5_9ab2384b-11ff-4da6-ae1d-42a2ae8f8deb.webp', 1),
(12, 26, 'REAL SILVER BRASLATE', 5000000, '1755836571_b4.webp', 1),
(13, 26, 'RING', 40000000, '1755837557_il_1588xN.3561145861_p4t0.webp', 1),
(14, 0, 'REAL DAIMOND ', 200000000, '1755750741_neakles.jpeg', 1),
(15, 0, 'SILVER ', 200000, '1755750406_BR01231_5.webp', 1),
(21, 27, 'REAL GOLD ERRINGS', 9000000, '1755836368_ER092_3.webp', 1),
(26, 0, 'REAL GOLD SET', 20000000, '1755835017_PD02308_5.webp', 1),
(41, 0, 'SILVER ANKLETS', 4000000, '1755837070_A073_5.webp', 1),
(46, 0, 'REAL SILVER', 2000000, '1755836962_ring1.webp', 1),
(48, 0, 'GOLDEN STAR ANKLETS', 290000000, '<br />\r\n<b>Warning</b>:  Undefined array key ', 1),
(61, 0, 'CHAIN', 40000, '', 1),
(64, 0, 'REAL GOLD RIGN', 400000, '1755836023_ring7.webp', 1),
(67, 0, 'REAL SILVER BRASLATE', 5000000, '1755836571_b4.webp', 1),
(74, 28, 'REAL SILVER BRASLATE', 5000000, '1755836571_b4.webp', 3),
(75, 28, 'RING', 40000000, '1755837557_il_1588xN.3561145861_p4t0.webp', 3),
(76, 28, 'REAL GOLD SET', 20000000, '1755835017_PD02308_5.webp', 1),
(77, 28, 'REAL DAIMOND ', 500000, '', 1),
(105, 23, 'ANKLETS ', 400000, '1755750334_BR0526_5.webp', 1),
(106, 23, 'JUMKHA', 50000, 'products2/1755675046_ER02543_R01616_5_7079d831-9f29-43aa-acf1-fc6653741594.webp', 1),
(107, 23, 'SILVER', 4000, '1755676499_ER0413_5.webp', 1),
(108, 0, 'ANKLETS ', 400000, '1755750334_BR0526_5.webp', 1),
(150, 30, 'PENDAL', 500000, 'products2/1755675814_PD0361_3_c6706ef8-4886-4416-b41f-90ced7d5459a.webp', 1),
(151, 30, 'REAL DAIMOND', 5000000, 'products2/1755675765_PD02281_ER02522_BR047_5.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `catname` varchar(100) NOT NULL,
  `catdescription` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catname`, `catdescription`, `image`) VALUES
(13, 'GIFT ', 'GIFT FOR YOUR HEART CLOSE PERSON ', '1753675091_logos.jpg'),
(14, 'SILVER', 'ALL SILVER TYPE JEWELLERY', '1752335174_0d5b0c47e8afb342d1aabca88f97f594.jpg'),
(15, 'GOLD', 'OLD IS GOLD AND GOLD IS NEW', '1752335223_2-SBC-FJ_01._CB621788843_.jpg'),
(17, 'BABYS', 'SMALL', '1753677923_arct-icon.png'),
(18, 'MEN', 'MENS', '1754110951_j1.avif');

-- --------------------------------------------------------

--
-- Table structure for table `category2`
--

CREATE TABLE `category2` (
  `id` int(10) NOT NULL,
  `catnam` varchar(100) NOT NULL,
  `catdes` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category2`
--

INSERT INTO `category2` (`id`, `catnam`, `catdes`, `image`) VALUES
(1, 'OFFICE JEWELLERY', 'BRASLATE', '1752637463_b2.webp'),
(2, 'EVERYDAY', 'SIMPLE LOOK', '1752812121_a1.jpg'),
(3, 'PARTY', 'CRAZY LOOK', '1752813519_b7.webp'),
(4, 'WEDDING', 'NEW', '1752813545_b2.webp'),
(5, 'TRADITIONAL', 'NEW', '1752813570_a1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'vishva', 'vishvapithva@gmail.com', 'your website is amazing', '2025-09-18 10:34:04'),
(2, 'v', 'v@gmail.com', 'thank you', '2025-09-18 10:34:15'),
(3, 'v', 'v@gmail.com', 'thank you', '2025-09-18 10:42:24'),
(4, 'vishva', 'vishva@gmail.com', 'thank you so much for good delivery', '2025-09-18 10:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(155) NOT NULL,
  `items` text NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `items`, `total_amount`, `order_date`, `user_name`, `user_email`, `user_phone`, `user_city`, `user_address`) VALUES
(1, 22, 'REAL SILVER BRASLATE (x1), REAL GOLD SET (x1)', 99999999.99, '2025-09-17 12:24:06', '', '', '', '', ''),
(2, 22, 'REAL GOLD ERRINGS (x1)', 0.00, '2025-09-17 12:24:38', '', '', '', '', ''),
(3, 22, 'REAL GOLD SET (x2)', 99999999.99, '2025-09-17 12:26:10', '', '', '', '', ''),
(4, 22, 'REAL SILVER BRASLATE (x1)', 5000000.00, '2025-09-17 12:33:37', '', '', '', '', ''),
(5, 22, 'REAL SILVER BRASLATE (x1)', 5000000.00, '2025-09-17 12:34:35', '', '', '', '', ''),
(6, 22, 'REAL GOLD ERRINGS (x1)', 9000000.00, '2025-09-17 12:36:26', '', '', '', '', ''),
(7, 22, 'REAL SILVER BRASLATE (x1)', 5000000.00, '2025-09-17 12:37:34', '', '', '', '', ''),
(8, 22, 'REAL GOLD SET (x1)', 99999999.99, '2025-09-17 12:38:48', '', '', '', '', ''),
(9, 22, 'REAL GOLD ERRINGS (x1)', 9000000.00, '2025-09-17 12:42:14', '', '', '', '', ''),
(10, 22, 'ANKLETS  (x1)', 400000.00, '2025-09-17 12:46:50', '', '', '', '', ''),
(11, 22, 'RING SET  (x3)', 18000000.00, '2025-09-17 12:55:14', '', '', '', '', ''),
(12, 22, 'REAL GOLD ERRINGS (x1)', 9000000.00, '2025-09-17 15:47:17', '', '', '', '', ''),
(13, 29, 'REAL SILVER (x1)', 2000000.00, '2025-09-17 16:46:32', '', '', '', '', ''),
(14, 22, 'REAL SILVER BRASLATE (x1), RING SET  (x1)', 11000000.00, '2025-09-18 05:54:45', '', '', '', '', ''),
(15, 22, 'RING SET (x1)', 5000000.00, '2025-09-18 06:20:47', '', '', '', '', ''),
(16, 22, 'REAL SILVER BRASLATE (x1)', 5000000.00, '2025-09-18 06:26:50', 'v', 'v@gmail.com', '01234567890', 'Rajkot', 'chotila\r\nGujarat, India'),
(17, 22, 'REAL DAIMOND  (x1), REAL GOLD SET (x1), GOLDEN STAR ANKLETS (x1)', 99999999.99, '2025-09-18 06:28:59', 'v', 'v@gmail.com', '01234567890', 'Rajkot', 'chotila\r\nGujarat, India'),
(18, 22, 'GOLDEN STAR ANKLETS (x1)', 99999999.99, '2025-09-18 06:31:36', 'v', 'v@gmail.com', '01234567890', 'Rajkot', 'ahemdabad'),
(19, 22, 'KADA2 (x1)', 600000.00, '2025-09-18 06:32:15', 'v', 'v@gmail.com', '01234567890', 'Rajkot', 'ahemdabad'),
(20, 22, 'SILVER (x1)', 4000.00, '2025-09-18 06:33:33', 'v', 'v@gmail.com', '01234567890', 'Rajkot', 'new website'),
(21, 22, 'REAL SILVER BRASLATE (x1), REAL GOLD SET (x1)', 99999999.99, '2025-09-18 06:39:51', 'v', 'v@gmail.com', '01234567890', 'Rajkot', 'ahemdabad'),
(22, 22, 'KADA2 (x1), REAL SILVER (x1)', 2600000.00, '2025-09-18 06:45:36', 'root', 'vishvapithva@gmail.com', '1234567890', 'Rajkot', 'chotila\r\nGujarat, India'),
(23, 22, 'ANKLETS  (x1)', 400000.00, '2025-09-18 06:46:07', 'vishva', 'vishvapithva@gmail.com', '1234567890', 'Rajkot', 'ahemdabad'),
(24, 30, 'REAL SILVER BRASLATE (x1)', 5000000.00, '2025-09-18 06:51:06', 'vishva', 'vishvapithva@gmail.com', '1234567890', 'Rajkot', 'new record');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `catid` int(10) NOT NULL,
  `subcatid` int(50) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productdescription` text NOT NULL,
  `productprice` int(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catid`, `subcatid`, `productname`, `productdescription`, `productprice`, `image`) VALUES
(8, 14, 8, 'DAIMOND', 'DAIMOND ERA', 300000000, '1755836885_ring5.webp'),
(12, 14, 8, 'REAL SILVER', 'rose gold', 2000000, '1755836962_ring1.webp'),
(16, 18, 26, 'DAIMOND', 'REAL DAIMOND', 5000000, '1755675995_R01988_17_5.webp'),
(17, 18, 26, 'TRISHUL', 'MENS LOOKING', 60000, '1755676052_R02058_17_5.webp'),
(18, 18, 27, 'CHAIN', 'SIMPLE', 40000, '1755676125_CH0109_5.webp'),
(19, 18, 28, 'KADA2', 'ROUND SHAPE', 600000, '1755676269_BR01083_5.webp'),
(20, 17, 23, 'SILVER', 'CUTE BABY', 4000, '1755676499_ER0413_5.webp'),
(21, 17, 23, 'FISH', 'CUTE BABY', 40000, '1755676596_ER0771_5.webp'),
(22, 17, 22, 'GOLDEN', 'CUTE BABY', 500000, '1755676812_PD02742_5.webp'),
(23, 17, 22, 'SILVER', 'FLOWER', 600000, '1755676851_PD02549_5.jpg'),
(24, 17, 21, 'ANKLETS ', 'BEAUTIFUL BABYS ', 400000, '1755750334_BR0526_5.webp'),
(25, 17, 21, 'SILVER ', 'THIS IS BABYS LOOK CUTE', 200000, '1755750406_BR01231_5.webp'),
(26, 15, 15, 'REAL DAIMOND ', 'FOR BEAUTY OF HAND ', 500000, '1755750618_B1.webp'),
(27, 15, 6, 'REAL DAIMOND ', 'FOR BEAUTIFUL BRIDE', 200000000, '1755750741_neakles.jpeg'),
(29, 15, 14, 'REAL GOLD SET', 'BEAUTIFULL WEDDING', 20000000, '1755835017_PD02308_5.webp'),
(30, 15, 13, 'GOLDEN STAR ANKLETS', 'ITS JUST BEAUTIFULL', 290000000, '1755835877_A0191_5.webp'),
(31, 15, 12, 'REAL GOLD RIGN', 'FOR HANDS BEAUTY', 400000, '1755836023_ring7.webp'),
(32, 15, 7, 'REAL GOLD ERRINGS', 'BEAUTIFULL', 9000000, '1755836368_ER092_3.webp'),
(33, 14, 18, 'REAL SILVER BRASLATE', 'PURPLE DAIMOND STAR ', 5000000, '1755836571_b4.webp'),
(34, 14, 17, 'REAL GOLD SET', 'DAIMOND JUST BEAUTIFULL', 400000000, '1755836834_PD0325_5_9ab2384b-11ff-4da6-ae1d-42a2ae8f8deb.webp'),
(35, 14, 19, 'SILVER ANKLETS', 'SAMLL POINT OF SILVER', 4000000, '1755837070_A073_5.webp'),
(36, 13, 9, 'RING', 'FOR CLOSE PERSON TO GIFT RING ', 40000000, '1755837557_il_1588xN.3561145861_p4t0.webp'),
(37, 13, 25, 'RING SET', 'BEAUTIFULL ANNIVERSARY GIFT', 5000000, '1755837718_OIP (3).webp'),
(38, 13, 24, 'RING SET ', 'FOR WEDDING GIFT', 6000000, '1755837779_what-wedding-band-goes-with-oval-engagement-ring.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE `products2` (
  `proid` int(10) NOT NULL,
  `id` int(100) NOT NULL,
  `proname` varchar(100) NOT NULL,
  `prodescription` text NOT NULL,
  `proprice` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products2`
--

INSERT INTO `products2` (`proid`, `id`, `proname`, `prodescription`, `proprice`, `image`) VALUES
(3, 1, 'REAL DAIMOND', 'DAIMOND PAIR', 5000000, '1755675765_PD02281_ER02522_BR047_5.webp'),
(8, 4, 'BRIDE', 'BEAUTIFULL BRIDE', 600000000, '1755674954_PD0469_ER0618_5.webp'),
(11, 5, 'SET', 'SIMPLE BRIDE', 400000, '1755674818_Set047_1.webp'),
(12, 5, 'SET', 'BEAUTIFUL', 200000, '1755674853_PD02287_ER02530_5.webp'),
(13, 4, 'JUMKHA', 'NATURAL BEAUTY', 50000, '1755675046_ER02543_R01616_5_7079d831-9f29-43aa-acf1-fc6653741594.webp'),
(16, 2, 'PENDAL', 'BEAUTY OF WOMEN', 4000, '1755675406_ER02905_PD02628_5.webp'),
(18, 2, 'SIMPLE SET', 'FOR EVERYDAY LOOK', 30000, '1755675528_PD0107_ER093_R056.webp'),
(19, 3, 'SIMPLE SET', 'GOOD LOOK', 100000, '1755675591_PD01702_5.webp'),
(20, 3, 'PENDAL', 'CRAZY LOOK', 20000, '1755675667_PD0145_0.webp'),
(21, 1, 'PENDAL', 'BEAUTY OF JEWELLRY', 500000, '1755675814_PD0361_3_c6706ef8-4886-4416-b41f-90ced7d5459a.webp');

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` int(5) NOT NULL,
  `sitename` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phoneno` int(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `sitename`, `address`, `phoneno`, `email`, `image`) VALUES
(1, 'sparkle jewellers', 'ahemdabad', 1234567890, 'sparkle77@gmail.com', '1752028792_erring.webp');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(5) NOT NULL,
  `catid` int(10) NOT NULL,
  `subcatname` varchar(100) NOT NULL,
  `subcatdescription` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `catid`, `subcatname`, `subcatdescription`, `image`) VALUES
(6, 15, 'NACKLACES', 'GOLD NACKLACE ARE THE BEST ', '1753677729_OIP (1).webp'),
(7, 15, 'EARRINGS', 'EVERY JEWELLERY ARE BEAUTIFULL FEEL ', '1753676379_d32b055241aa840cd8f793a891a5130b.jpg'),
(8, 14, 'RINGS', 'ANGGENGMENT RINGS TO MAKE MORE SPECIAL YOUR DAY ', '1754108305_R021_5.webp'),
(9, 13, 'BIRTHDAY GIFT', 'MAKE YOUR HEART CLOSEST PERSON BITHDAY SPECIAL TO GIFT THIS JEWELLERY', '1754110515_pexels-feelartfeelant-1028723.jpg'),
(12, 15, 'RINGS', 'Angagement rings', '1753675836_Engegement-_-Bridal02.jpg'),
(13, 15, 'ANKLETS', 'STYLIST', '1753675976_roma-designer-jewelry-silver-anklet-set-in-sterling-silver-with-rhodium-overlay-6207650955361_2000x.jpg'),
(14, 15, 'SET', 'COLLECTION', '1753677619_OIP.webp'),
(15, 15, 'BRASLATE', 'COLLECTION', '1753677788_b7.webp'),
(17, 14, 'PENDANTS SET', 'COLLECTION', '1754108652_PD01869_ER01978_2_ec827892-e928-474f-b438-939fccd584e6.webp'),
(18, 14, 'BRASLATE', 'COLLECTION', '1754108688_b2.webp'),
(19, 14, 'ANKLETS', 'NEW', '1754108778_A073_2_f1159473-3cd8-4fce-be55-518e0da426b3.webp'),
(20, 17, 'RINGS', 'SMALL', '1754108918_R0654_2.webp'),
(21, 17, 'ANKLETS', 'SMALL', '1754108975_A0435_2_d51979fd-a0e4-425d-ba8f-1306435e166d.webp'),
(22, 17, 'PENDANTS ', 'SMALL', '1754109056_PD0621_2.webp'),
(23, 17, 'EARRINGS', 'SMALL', '1754109149_ER02293_5.webp'),
(24, 13, 'WEDDING GIFT', 'LOVELY', '1754110549_360_F_613216134_AJFUjbuUPLtwrMmXXUPvXgiOznp4QOlB.jpg'),
(25, 13, 'ANNIVERSARY GIFT', 'LOVELY', '1754110715_OIP (2).webp'),
(26, 18, 'RINGS', 'NEW', '1754111086_R02240_17_2.webp'),
(27, 18, 'chain', 'new', '1754111382_CH0109_5.webp'),
(28, 18, 'BRASLATE', 'NEW', '1754111487_BR01088_2.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, '', 'vishva', 'abcd'),
(2, '', 'vishvapithva@gmail.com', 'abcd'),
(4, '', 'test22@gmail.com', 'abcd'),
(5, '', 'bhavishavaru23@gmail.com', 'abcd'),
(6, '', 'abcd@gmail.com', 'abcd'),
(10, '', 'test@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(14, 'abcd', 'abcdefg@gmail.com', '$2y$10$y/yvrf7P/CnnWW5FmlrnyetWs6w9d2ZvJw8HLnQg0Kroa9kKbCtxq'),
(15, 'admin', 'admin@gmail.com', '$2y$10$JQHu4iSC9Do2SzFARxlvbuFnhPqDCVWuSVWBNkMt734hk1doLSs.C'),
(16, '', 'ad@gmail.com', 'aa6ec9bf967afd962bf57cda5c588104'),
(17, '', 'test2@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(18, '', 'ab@gmail.com', '187ef4436122d1cc2f40dc2b92f0eba0'),
(19, 'vi', 'vis@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(20, 'vis', 'vishva@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(21, 'abc', 'abc@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(22, 'v', 'v@gmail.com', '9e3669d19b675bd57058fd4664205d2a'),
(23, 'a', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(24, 'b', 'b@gamil.com', '92eb5ffee6ae2fec3ad71c777531578f'),
(25, 'c', 'c@gmail.com', '4a8a08f09d37b73795649038408b5f33'),
(26, 'd', 'd@gmail.com', '8277e0910d750195b448797616e091ad'),
(27, 'e', 'e@gmail.com', 'e1671797c52e15f763380b45e841ec32'),
(28, 'user1', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee'),
(29, 'foram', 'foramanadkat@gmail.com', '9ac8320271a9e9a150fc8c61a11a0522'),
(30, 'new', 'new@gmail.com', '22af645d1859cb5ca6da0c484f1f37ea');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `city`) VALUES
(1, 'admin', '2fa2407858e221170c25cb86956ad0e6', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`) VALUES
(4, 23, 26),
(6, 22, 3),
(8, 22, 1),
(9, 22, 1),
(10, 22, 24),
(11, 22, 4),
(12, 22, 37),
(13, 22, 18),
(14, 29, 4),
(16, 30, 29),
(17, 30, 38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`,`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category2`
--
ALTER TABLE `category2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category2`
--
ALTER TABLE `category2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products2`
--
ALTER TABLE `products2`
  MODIFY `proid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
