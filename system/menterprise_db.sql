-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2025 at 08:02 PM
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
-- Database: `menterprise_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'businesss', 'businesss', '2025-12-06 16:20:41', '2025-12-06 16:20:45'),
(3, 'mining', 'mining', '2025-12-06 16:36:13', NULL),
(4, 'investment', 'investment', '2025-12-06 16:36:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `contact_id` varchar(100) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `compnay_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_id`, `fname`, `lname`, `email`, `compnay_name`, `phone_number`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, '768cee8e-f624-4290-9596-73af1fb26fd31765021680', 'tijani', 'moro', 'tjhackx111@gmail.com', 'mijm', '423423', 'wfewd', 0, '2025-12-06 11:48:00', NULL),
(2, '667d1d72-2830-46c3-95aa-9e37951b36b51765045709', 'hafiz', 'adam', 'hafiz@email.com', 'Nam Inc', '02202002', 'we good ...my gold did not come', 0, '2025-12-06 18:28:29', NULL),
(5, '7aaa27dd-cee8-479d-ae20-0a69b3fa5b651765046383', 'Abdul Alim', 'Husseini', 'abdul@email.com', 'Mampam Corp.', '024452222', 'I need enquires about trading process', 0, '2025-12-06 18:39:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `image`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'North Bay Acquires Mt. Vernon Gold Mine, Sierra County, California, with Assays up to 4.8 oz. Au per Ton', 'north-bay-acquires-mt-vernon-gold-mine-sierra-county-california-with-assays-up-to-4-8-oz-au-per-ton', '<p><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">North Bay Resources Inc. (the &ldquo;Company&rdquo; or &ldquo;North Bay&rdquo;) (OTC: NBRI) is pleased to announce it has entered into an agreement (the &ldquo;Agreement&rdquo;) with a private arms-length Company to acquire a 100% interest in the Mt. Vernon Mine located in Sierra County, California. The Mt. Vernon Mine is a largely undeveloped deposit, proximate to some of the richest past producing gold mines in North America. The Mt. Vernon is a permitted underground mine with modern portal, tunnel, ventilation. power, and equipment (see Picture 1). The Company plans to commence test mining immediately and initial production of 100 tons per day shortly, pending minor infrastructure and permitting updates. The ore will be shipped to the Company&rsquo;s Bishop, California Gold Mill for processing.</span></p>', '693453bf7b144.jpg', 1, 1, '2025-12-06 18:19:00', '2025-12-06 17:20:37'),
(4, 'North Bay Resources Announces Physical Gold + Shares Unit Financing', 'north-bay-resources-announces-physical-gold-shares-unit-financing', '<p><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">The offering is for a Unit consisting of 60% Common Shares of North Bay and 40% physical gold from production by North Bay. Each Unit will be issued at a price of $0.001 USD per Unit for gross proceeds of up to $1,000,000 USD (the &ldquo;Offering&rdquo;). This equates to 10,000,000 shares and 1.3 ounces of gold per $10,000 investment. Assuming the Offering is fully subscribed, the post-closing valuation of the Company will be approximately $5,500,000 USD. The net proceeds from the Offering will be used primarily for working capital, specifically for gold production.</span></p>', '693465b4dede1.jpg', 3, 1, '2025-12-06 18:18:00', '2025-12-06 17:19:48'),
(5, 'North Bay Resources Advances Development of Massive Sulphide Zone at Fran Gold Project, British Columbia', 'north-bay-resources-advances-development-of-massive-sulphide-zone-at-fran-gold-project-british-columbia', '<p><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">North Bay Resources, Inc. (the &ldquo;Company&rdquo; or &ldquo;North Bay&rdquo;) (OTC: NBRI) is pleased to announce initial test mining has been completed at the Company&rsquo;s Fran Gold Project, British Columbia. Development commenced at the location of a massive sulphide surface outcrop with recent assay of 0.5 ounce per ton gold (June 2025). The massive sulphide surface zone is between trenches of known high grade gold mineralization and is now the focus of development. Ore has been extracted in the directions of Trench B to the West, Trench C to the</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff; margin-top: 0px !important;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">East, into the hillside to the North and at depth. The ore is heavily mineralized containing gold, copper, and silver mineralization primarily in the form of chalcopyrite, marcasite, and spherulite/galena. The massive sulphide ore is grey in color, blocky when broken with visual mineralization and veinlets or otherwise heavily oxidized with similar characteristics. Grade has been confirmed in recent assay as well as previous assays in Trenches B + C up to 2.27 ounces per ton gold (see Press Release dated June 16, 2025). Near surface sediment has been stripped and approximately 10 tons of ore has been extracted and packed into supersacks. Additional loading of ore will recommence in approximately 10 days with an expanded crew followed by shipment by tractor trailers to the Company&rsquo;s Bishop Gold Mill for processing. The Company plans to</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">continue development work into the Fall.</span></p>', '69346562a8b25.png', 4, 1, '2025-12-06 18:17:00', '2025-12-06 17:18:26'),
(6, 'Commences Gold Shipments, Fran Gold Project, British Columbia; Enters Taber Gold Mine JV, Sierra County, California', 'commences-gold-shipments-fran-gold-project-british-columbia-enters-taber-gold-mine-jv-sierra-county-california', '<p><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">Further, the Company is pleased to announce it has entered into an agreement (the</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">&ldquo;Agreement&rdquo;) with a private arms-length Company to acquire a 50% interest in the Taber Mine</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">located in Sierra County, California. The Taber Mine is a largely undeveloped deposit,</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">contiguous and on the same channel as the Union-Keystone Mine the largest and most prolific</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">producer in the area. The Taber Mine is a permitted underground mine with existing on-site</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">gravity processing and sorting in excess of 100 tons per day. The property has two known</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">mineralized channels the Front and Back Channel respectively. These channels converge at the</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">North end of the property into single channel, the Bellevue Channel, which crosses into the</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">Union-Keystone Mine property, this channel being one of the most productive deposits in the</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">region with over 1.1 million ounces of gold produced at Union-Keystone alone.&nbsp;</span></p>', '69346627382a1.jpg', 1, 1, '2025-12-06 18:20:00', '2025-12-06 17:21:43'),
(7, 'North Bay Resources Announces X-Ray Silver Mine 50/50 JV with Past Production Grading 1,072 Ounces per Ton Silver, Lander County, Nevada', 'north-bay-resources-announces-x-ray-silver-mine-50-50-jv-with-past-production-grading-1-072-ounces-per-ton-silver-lander-county-nevada', '<p><span style=\"box-sizing: border-box; font-weight: 600; font-family: Inter; font-size: 15px; background-color: #ffffff;\">Reese River District History</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">Historical production of the Reese River District during its initial years of operation 1865-1891 are reported as 1,527,994 tons valued at $24,930,310 at a time where the price of silver averaged $1.15 per ounce reflecting production of approximately 21,678,530 ounces of silver which at</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">today&rsquo;s price of $40.93 (Sept. 5, 2025) equates to $887,302,250. The production numbers are confirmed by Wells Fargo record of shipment to San Francisco (USGS Bulletin 997).</span><br style=\"box-sizing: border-box; color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #777777; font-family: Inter; font-size: 15px; background-color: #ffffff;\">It is reported in official reports that mines in the area were not abandoned as a result of depletion but that lower grade material of less than 100 ounces per ton silver was left at the lower levels in favor of high-grade material both locally and subsequently in other districts as discoveries</span></p>', '693465079a601.jpg', 4, 1, '2025-12-06 18:16:00', '2025-12-06 17:16:55'),
(8, 'North Bay Resources Announces Refinery Shipment of Gold Concentrate from Bishop Gold Mill, California', 'north-bay-resources-announces-refinery-shipment-of-gold-concentrate-from-bishop-gold-mill-california', '<p style=\"box-sizing: border-box; line-height: 1.75; margin: 0px; font-size: 15px; color: #777777; font-family: Inter; background-color: #ffffff;\">The Company reports the following Mill optimization progress:</p>\r\n<p style=\"box-sizing: border-box; line-height: 1.75; margin: 18px 0px 0px; font-size: 15px; color: #777777; font-family: Inter; background-color: #ffffff;\">&bull; Centrifuge grade has been optimized from initial results of 0.5 ounce per ton to 19 ounces per ton, with a weighted average of 13 ounces per ton.</p>\r\n<p style=\"box-sizing: border-box; line-height: 1.75; margin: 18px 0px 0px; font-size: 15px; color: #777777; font-family: Inter; background-color: #ffffff;\">&bull; Double pass centrifuge grade of 45 ounces per ton has been achieved.</p>\r\n<p style=\"box-sizing: border-box; line-height: 1.75; margin: 18px 0px 0px; font-size: 15px; color: #777777; font-family: Inter; background-color: #ffffff;\">&bull; Optimization of gravity circuit has been successful with targeted results achieved in grind.</p>\r\n<p style=\"box-sizing: border-box; line-height: 1.75; margin: 18px 0px 0px; font-size: 15px; color: #777777; font-family: Inter; background-color: #ffffff;\">size and classification involving residence time in the ball mill, water flow, and residence time in the centrifuge. Final optimization of the gravity circuit is expected to increase overall recovery by up to 17%.</p>', '69347597c4817.jpeg', 3, 1, '2025-12-06 19:24:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$1.bSrQG9mkDh1B2UK74OUunSWnoGFNMbSvNWTQltGMx1egvzI9OZK', '2025-12-05 02:18:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
