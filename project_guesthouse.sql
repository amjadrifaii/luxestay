-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2025 at 04:10 PM
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
-- Database: `project_guesthouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest_houses`
--

CREATE TABLE `guest_houses` (
  `guest_house_id` int(11) NOT NULL,
  `guest_house_name` varchar(20) NOT NULL,
  `area` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `garages` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `guest_house_des` varchar(1000) NOT NULL,
  `guest_house_about` varchar(1000) NOT NULL,
  `guest_house_persons` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `house_type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `guest_houses`
--

INSERT INTO `guest_houses` (`guest_house_id`, `guest_house_name`, `area`, `beds`, `baths`, `garages`, `cost`, `guest_house_des`, `guest_house_about`, `guest_house_persons`, `location_id`, `house_type`) VALUES
(1, 'Cozy Haven', 130, 4, 2, 2, 130, 'Nestled in the heart of Jbeil, \r\n                Cozy Heaven House offers a warm and inviting retreat for those seeking comfort and tranquility.', 'Nestled in the heart of Jbeil, Cozy Heaven House offers a warm and inviting retreat for those seeking comfort and tranquility. This charming guesthouse features cozy interiors, modern amenities, and a peaceful outdoor space, perfect for relaxing and unwinding. Whether you\'re visiting family, exploring the beauty of South Lebanon, or simply escaping the city, our home provides the ideal setting for a memorable stay. Book your getaway today and experience true comfort in a welcoming atmosphere!', 4, 9, 9),
(2, 'Garden Retreat', 60, 2, 2, 3, 80, 'A charming guesthouse surrounded by beautiful gardens, offering a peaceful and relaxing stay.', 'A charming guesthouse surrounded by beautiful gardens, offering a peaceful and relaxing stay, where you can unwind amidst nature\'s serenity, enjoy the soothing sounds of birdsong, and experience warm hospitality in a cozy, home-like atmosphere. Whether you\'re seeking a quiet retreat or a base to explore the surrounding area, this guesthouse provides the perfect blend of comfort and tranquility at the Zahl&eacute; Mounts.', 2, 14, 4),
(3, 'Serenity House', 80, 2, 1, 1, 60, '  A tranquil and serene guesthouse, designed to promote relaxation and rejuvenation.', 'Each space is carefully curated for comfort, featuring soft lighting, cozy furnishings, and calming decor. Wake up to the gentle sounds of nature, indulge in peaceful moments on a private terrace, or enjoy a refreshing spa treatment.\r\n\r\nWhether you seek a quiet getaway, a wellness retreat, or simply a place to relax, our guesthouse provides the perfect sanctuary for rest and renewal.', 2, 3, 10),
(4, 'Mountain View', 80, 2, 2, 2, 100, 'A guesthouse situated in the mountains.Offering breathtaking views and a peaceful escape from the city.', 'A guesthouse situated in the Tripoli Heights, offering breathtaking views and a peaceful escape from the city, where crisp mountain air rejuvenates your senses and panoramic vistas of rolling hills or snow-capped peaks greet you at every turn. Whether you\'re cozying up by the fireplace, exploring scenic trails, or simply soaking in the tranquility of nature, this mountain retreat promises an unforgettable experience of serenity and adventure.\r\n', 2, 12, 9),
(5, 'Peaceful Cottage', 45, 1, 1, 1, 40, 'A charming cottage-style guesthouse, providing a peaceful and relaxing environment for guests.', 'A charming cottage-style guesthouse, providing a peaceful and relaxing environment for guests, nestled in the historic heart of Baalbek, where ancient ruins and timeless landscapes create a magical backdrop. Surrounded by lush gardens and the gentle whispers of history, this retreat offers a perfect blend of rustic charm and modern comfort. Wake up to the golden hues of sunrise over the iconic Roman temples, savor traditional Lebanese breakfasts on the terrace, and unwind in the serene ambiance of this enchanting haven. Whether you\'re exploring the archaeological wonders of Baalbek or simply enjoying the tranquility of the countryside, this guesthouse is your ideal escape', 2, 5, 6),
(6, 'Pine Ridge', 100, 4, 2, 2, 140, 'A rustic and cozy guesthouse nestled in a pine forest, offering a secluded and peaceful retreat.', 'A rustic and cozy guesthouse nestled in a pine forest, offering a secluded and peaceful retreat, in the picturesque town of Zahl&eacute;, where the scent of pine trees mingles with the fresh mountain breeze. Surrounded by lush greenery and the soothing sounds of nature, this charming hideaway is the perfect escape from the hustle and bustle of everyday life. Spend your days exploring nearby vineyards, strolling along the serene Berdawni River, or simply relaxing on the wooden porch with a cup of locally brewed coffee. As the sun sets, gather around a crackling fire pit under a canopy of stars, and let the tranquility of this forested haven rejuvenate your soul. Whether you\'re seeking adventure or relaxation, this guesthouse in Zahl&eacute; promises an unforgettable retreat.', 4, 11, 5),
(7, 'Sunrise', 130, 5, 2, 2, 150, '  A guesthouse that boasts beautiful sunrise views, perfect for early risers and nature lovers.', 'Enjoy a peaceful start to your day with a warm cup of coffee on the terrace, surrounded by the soothing sounds of nature. Whether you\'re here for a restful getaway or an adventure-filled escape, our guesthouse provides a tranquil setting to reconnect with nature and embrace the beauty of each new day.', 5, 8, 7),
(8, 'Sunset Villa', 200, 5, 4, 4, 300, 'A guesthouse with stunning sunset views, ideal for those looking to enjoy the luxurious life.', 'A guesthouse in the heart of Batroun, with stunning sunset views, ideal for those looking to enjoy the luxurious life, where every evening paints the sky in vibrant hues of gold, pink, and orange, creating a mesmerizing backdrop for your stay. Designed with elegance and sophistication, this retreat offers spacious, beautifully appointed rooms, private balconies, and infinity pools that seem to blend seamlessly with the horizon. Indulge in gourmet dining experiences, unwind with bespoke spa treatments, and savor the finest wines as you watch the sun dip below the horizon. Whether you\'re celebrating a special occasion or simply seeking a lavish escape, this guesthouse promises an unparalleled experience of opulence and tranquility, where every moment feels like a dream', 7, 6, 3),
(9, 'Tranquil Hideaway', 60, 2, 1, 1, 90, '   A hidden gem of a guesthouse, offering a tranquil and secluded escape from the hustle and bustle of daily life.', 'Each room is thoughtfully designed with comfort in mind, featuring cozy furnishings, soft lighting, and calming decor. Wake up to the gentle sounds of nature, enjoy a nourishing breakfast, and take in the soothing ambiance of our tranquil retreat.\r\n\r\nWhether you\'re seeking a quiet weekend getaway, a wellness retreat, or simply a place to rejuvenate, our guesthouse offers a sanctuary of peace and comfort. Come and experience serenity like never before.', 3, 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `house_types`
--

CREATE TABLE `house_types` (
  `type_id` int(11) NOT NULL,
  `type_desc` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `house_types`
--

INSERT INTO `house_types` (`type_id`, `type_desc`) VALUES
(1, 'Pool'),
(2, 'Villa'),
(3, 'Chalet'),
(4, 'Cabin'),
(5, 'Mansion'),
(6, 'Farmhouse'),
(7, 'Hut'),
(8, 'Apartment'),
(9, 'Townhouse'),
(10, 'Courtyard'),
(11, 'Duplex'),
(12, 'Beach'),
(13, 'Studio');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `guest_house_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_path`, `guest_house_id`) VALUES
(1, 'assets/img/property-slide/cozyHaven.jpg', 1),
(3, 'assets/img/property-slide/cozyHaven3.jpg', 1),
(5, 'assets/img/property-slide/gardenRetreat2.jpg', 2),
(6, 'assets/img/property-slide/gardenRetreat3.jpg', 2),
(10, 'assets/img/property-slide/mountainView.jpg', 4),
(11, 'assets/img/property-slide/mountainView2.jpg', 4),
(12, 'assets/img/property-slide/mountainView3.jpg', 4),
(13, 'assets/img/property-slide/peacefulCottage.jpg', 5),
(14, 'assets/img/property-slide/peacefulCottage2.jpg', 5),
(15, 'assets/img/property-slide/peacefulCottage3.jpg', 5),
(16, 'assets/img/property-slide/pineRidge.jpg', 6),
(17, 'assets/img/property-slide/pineRidge2.jpg', 6),
(18, 'assets/img/property-slide/pineRidge3.jpg', 6),
(19, 'assets/img/property-slide/sunrise.jpg', 7),
(20, 'assets/img/property-slide/sunrise2.jpg', 7),
(21, 'assets/img/property-slide/sunrise3.jpg', 7),
(23, 'assets/img/property-slide/sunsetVilla2.jpg', 8),
(25, 'assets/img/property-slide/tranquil.jpg', 9),
(27, 'assets/img/property-slide/tranquil3.jpg', 9),
(29, 'assets/img/property-slide/cozyHaven2.jpg', 1),
(31, 'assets/img/property-slide/gardenRetreat.jpg', 2),
(36, 'assets/img/property-slide/mountainView3.jpg', 3),
(37, 'assets/img/property-slide/peacefulCottage.jpg', 4),
(38, 'assets/img/property-slide/peacefulCottage2.jpg', 4),
(39, 'assets/img/property-slide/peacefulCottage3.jpg', 4),
(40, 'assets/img/property-slide/pineRidge.jpg', 5),
(61, 'assets/img/property-slide/wallpaper.jpg', 28),
(42, 'assets/img/property-slide/pineRidge3.jpg', 5),
(43, 'assets/img/property-slide/serenityHouse.jpg', 3),
(44, 'assets/img/property-slide/serenityHouse2.jpg', 3),
(62, 'assets/img/property-slide/wallpaper1.jpg', 28),
(63, 'assets/img/property-slide/wallpaper2.jpg', 28),
(49, 'assets/img/property-slide/sunsetVilla.jpg', 8),
(51, 'assets/img/property-slide/sunsetVilla3.jpg', 8),
(53, 'assets/img/property-slide/tranquil2.jpg', 9),
(56, 'assets/img/property-slide/rustyLake1.jpg', 27),
(57, 'assets/img/property-slide/rustyLake3.jpeg', 27),
(59, 'assets/img/property-slide/rustyLake2.jpg', 27);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `location_desc` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location_desc`) VALUES
(1, 'Beirut'),
(2, 'Tripoli'),
(3, 'Sidon'),
(4, 'Byblos '),
(5, 'Baalbek'),
(6, 'Batroun'),
(7, 'Nabatieh'),
(8, 'Jounieh'),
(9, 'Bint Jbeil'),
(10, 'Marjeyoun'),
(11, 'Zgharta'),
(12, 'Rashaya'),
(13, 'Hasbaya'),
(14, 'Zahle');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `reservation_date` varchar(15) NOT NULL,
  `house_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `reservation_date`, `house_id`, `user_id`) VALUES
(751, '2025-02-28', 8, 1011),
(752, '2025-02-23', 2, 1011),
(753, '2025-02-24', 2, 1011),
(754, '2025-02-22', 2, 1011),
(756, '2025-02-28', 1, 1011),
(759, '2025-02-17', 1, 1011),
(760, '2025-02-18', 1, 1011),
(761, '2025-02-19', 1, 1011),
(762, '2025-02-23', 1, 1011),
(763, '2025-02-17', 5, 1011),
(764, '2025-02-18', 5, 1011),
(765, '2025-02-26', 5, 1011),
(766, '2025-02-18', 9, 1011),
(767, '2025-02-19', 9, 1011),
(768, '2025-02-20', 9, 1011),
(775, '2025-02-25', 1, 1025),
(776, '2025-03-17', 2, 1028),
(777, '2025-03-17', 1, 1026);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `user_lastName` varchar(25) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `user_phone` varchar(30) DEFAULT NULL,
  `user_password` varchar(150) DEFAULT NULL,
  `urole` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_lastName`, `user_email`, `user_phone`, `user_password`, `urole`) VALUES
(1026, 'pierre', 'abdo', 'pierreabdo@hotmail.com', '76665529', '$2y$10$lXIQYN1xSrAtY37fmzdSyOWRDso76SYNE7lKJD.BOdSBbNGBcZv9O', 'user'),
(1027, 'joseph', 'merhej', 'joseph@hotmail.com', '76666666', '$2y$10$sVI4rQTXyremposocA.n4.qiqgpApwVE4xGZiH5/n2WKMoXcEuybS', 'user'),
(1028, 'elio', 'abdo', 'elioabdo@hotmail.com', '76744785', '$2y$10$eKzOG58ZYLObk0EcqWaKH.SpKv.I9pKNsbR9DwNIaCV0lxuWe1awu', 'admin'),
(1029, 'elia', 'abel masih', 'Eliaabelmasih@hotmail.com', '76330429', '$2y$10$NMaL5PlsY4ceEpM.a/DjpO818UFbPbaFuQVLThVc9z3EUCeKFSqLm', 'admin'),
(1030, 'amjad', 'rifaii', 'amjadrifaii@gmail.com', '71797400', '$2y$10$7Sll05uV4wuTHj8tfRnFvOA9soxQu2O0VZGS9w49odAA0td1hbiX2', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `website_images`
--

CREATE TABLE `website_images` (
  `image_id` int(11) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_images`
--

INSERT INTO `website_images` (`image_id`, `image_path`, `section`) VALUES
(1, 'assets/img/luxestay.png', 'about');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_houses`
--
ALTER TABLE `guest_houses`
  ADD PRIMARY KEY (`guest_house_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `house_type` (`house_type`);

--
-- Indexes for table `house_types`
--
ALTER TABLE `house_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `guest_house_id` (`guest_house_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `website_images`
--
ALTER TABLE `website_images`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest_houses`
--
ALTER TABLE `guest_houses`
  MODIFY `guest_house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `house_types`
--
ALTER TABLE `house_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=778;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1031;

--
-- AUTO_INCREMENT for table `website_images`
--
ALTER TABLE `website_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
