-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 04:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Hardik Kanajariya', 'hardik', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `thumbnail`, `time`) VALUES
(1, 'How to do Farming?', '<article>\r\n                        <p style=\"text-align: justify;\">Food is a basic requirement for every living being. We depend on\r\n                            plant and animals for food. Ancient men began the cultivation of food in a small area and\r\n                            used certain procedures for their management and improvement. This art of cultivation of the\r\n                            crop is called agriculture.</p>\r\n                        <p style=\"text-align: justify;\">In agriculture, there are certain parameters to be considered\r\n                            such as the type of crop, properties of soil, climate etc. Depending upon these parameters,\r\n                            farmers decide which crop is to be cultivated at what time of the year and place. Moreover,\r\n                            to yield a high-quality product, suitable soil, climate and season are not sufficient. It\r\n                            requires a set of procedures which needed to be followed. The measures which are followed to\r\n                            raise crops are called agricultural practices. Different agricultural practices are\r\n                            discussed below.</p>\r\n                        <p><img class=\"aligncenter wp-image-5338 size-medium\" title=\"Agricultural Practices\"\r\n                                src=\"https://cdn1.byjus.com/wp-content/uploads/2018/11/biology/2016/07/12104759/Agricultural-Practices-300x272.png\"\r\n                                alt=\"Agricultural Practices\" width=\"300\" height=\"272\"></p>\r\n                        <h2 style=\"text-align: justify;\"><strong>Agriculture &amp; Agricultural Practices</strong></h2>\r\n                        <h3 style=\"text-align: justify;\"><strong>Soil preparation</strong></h3>\r\n                        <p><img class=\"aligncenter wp-image-12240 size-full\" title=\"Soil Preparation\"\r\n                                src=\"https://cdn1.byjus.com/wp-content/uploads/2018/11/biology/2016/08/02093521/Soil-preparation.jpg\"\r\n                                alt=\"\" width=\"275\" height=\"183\"></p>\r\n                        <p style=\"text-align: justify;\">Before raising a crop, the soil in which it is to be grown is\r\n                            prepared by ploughing, levelling, and manuring. Ploughing is the process of loosening and\r\n                            digging of soil using a plough. This helps in proper aeration of the soil. After ploughing,\r\n                            the soil is distributed evenly and levelled in the process called levelling. The soil is\r\n                            then manured.</p>\r\n                        <h3 style=\"text-align: justify;\"><strong>Sowing</strong></h3>\r\n                        <p><img class=\"aligncenter wp-image-12241 size-full\" title=\"Sowing\"\r\n                                src=\"https://cdn1.byjus.com/wp-content/uploads/2018/11/biology/2016/08/02093658/Sowing.jpg\"\r\n                                alt=\"\" width=\"183\" height=\"276\"></p>\r\n                        <p style=\"text-align: justify;\">Selection of seeds of good quality crop strains is the primary\r\n                            stage of sowing. After the preparation of soil, these seeds are dispersed in the field and\r\n                            this is called sowing. Sowing can be done manually, by hand or by using seed drilling\r\n                            machines. Some crops like paddy are first grown into seedlings in a small area and then\r\n                            transplanted to the main field.</p>\r\n                        <h3 style=\"text-align: justify;\"><strong>Manuring</strong></h3>\r\n                        <p><img class=\"aligncenter wp-image-12242 size-full\" title=\"Manuring\"\r\n                                src=\"https://cdn1.byjus.com/wp-content/uploads/2018/11/biology/2016/08/02093847/Manuring.jpg\"\r\n                                alt=\"\" width=\"259\" height=\"194\"></p>\r\n                        <p style=\"text-align: justify;\">Crops need nutrients to grow and produce yield. Thus, the supply\r\n                            of nutrients at regular intervals is necessary. Manuring is the step where nutritional\r\n                            supplements are provided and these supplements may be natural (manure) or chemical compounds\r\n                            (fertilizers). Manure is the decomposition product of plant and animal wastes. Fertilizers\r\n                            are chemical compounds consisting of plant nutrients and are produced commercially. Apart\r\n                            from providing nutrients to crop, manure replenishes soil fertility as well. Other methods\r\n                            for soil replenishment are vermicompost, crop rotation, planting of leguminous plants.</p>\r\n                        <h3 style=\"text-align: justify;\"><strong>Irrigation</strong></h3>\r\n                        <p><img class=\"aligncenter wp-image-12244 size-medium\" title=\"Irrigation\"\r\n                                src=\"https://cdn1.byjus.com/wp-content/uploads/2018/11/biology/2017/09/02094054/Irrigation-300x199.jpg\"\r\n                                alt=\"\" width=\"300\" height=\"199\"></p>\r\n                        <p style=\"text-align: justify;\"><a href=\"https://byjus.com/biology/irrigation/\">Irrigation</a>\r\n                            is the supply of water. Sources of water can be wells, ponds, lakes, canals, dams etc. Over\r\n                            irrigation may lead to waterlogging and damage the crop. This frequency and interval between\r\n                            successive irrigation need to be controlled.</p>\r\n                        <h3 style=\"text-align: justify;\"><strong>Weeding</strong></h3>\r\n                        <p><img class=\"aligncenter wp-image-12245 size-full\" title=\"Weeding\"\r\n                                src=\"https://cdn1.byjus.com/wp-content/uploads/2018/11/biology/2017/09/02094129/Weeding.jpg\"\r\n                                alt=\"\" width=\"276\" height=\"183\"></p>\r\n                        <p style=\"text-align: justify;\">Weeds are unwanted plants which grow among crops. They are\r\n                            removed by using weedicides, by manually pulling them with hands and some are removed during\r\n                            soil preparation.</p>\r\n                        <h3 style=\"text-align: justify;\"><strong>Harvesting</strong></h3>\r\n                        <p><img class=\"aligncenter wp-image-12246 size-medium\" title=\"Harvesting\"\r\n                                src=\"https://cdn1.byjus.com/wp-content/uploads/2018/11/biology/2017/09/02094327/Harvesting-300x199.jpg\"\r\n                                alt=\"\" width=\"300\" height=\"199\"></p>\r\n                        <p style=\"text-align: justify;\">Once the crop is matured, it is cut and gathered, this process\r\n                            is called harvesting. Followed by harvesting, grains are separated from the chaff either by\r\n                            threshing, or manually in small scale (winnowing).</p>\r\n                        <h3 style=\"text-align: justify;\"><strong>Storage</strong></h3>\r\n                        <p><img class=\"aligncenter wp-image-12247 size-medium\" title=\"Storage\"\r\n                                src=\"https://cdn1.byjus.com/wp-content/uploads/2018/11/biology/2017/09/02094829/Storage-300x200.jpg\"\r\n                                alt=\"\" width=\"300\" height=\"200\"></p>\r\n                        <p style=\"text-align: justify;\">Grains yielded are stored in granaries or bins at godowns for\r\n                            later use or marketing. Therefore, methods of <a\r\n                                href=\"https://byjus.com/biology/crop-protection/\">crop protection</a> need to be better.\r\n                            In order to protect grains from pest and rodents- cleaning, drying, fumigation, etc., are\r\n                            done prior to storing.</p>\r\n                        <p style=\"text-align: justify;\">For successful agriculture, proper methods and practices are to\r\n                            be followed.</p>\r\n                        <p style=\"text-align: justify;\">To know more about agriculture and its practices download\r\n                            BYJU’S-The Learning app.</p>\r\n                    </article>', 'jed-owen-1JgUGDdcWnM-unsplash.jpg', '2022-05-28 03:29:44'),
(2, 'Blog 2', 'this is another blog ', 'sincerely-media-GrHWJVA1KTA-unsplash.jpg', '2022-05-28 09:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `cmt_text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `id` int(11) NOT NULL,
  `farmer-id` int(11) NOT NULL,
  `post-text` varchar(500) NOT NULL,
  `post-picture` varchar(999) DEFAULT NULL,
  `post-like` int(11) NOT NULL DEFAULT 0,
  `share` int(11) NOT NULL DEFAULT 0,
  `cmt-count` int(11) NOT NULL DEFAULT 0,
  `time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id`, `farmer-id`, `post-text`, `post-picture`, `post-like`, `share`, `cmt-count`, `time`) VALUES
(5, 1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, quisquam.', 'dan-cristian-padure-4jHCWfX3_G4-unsplash.jpg', 22, 4, 0, '2022-06-06 23:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE `crop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`id`, `name`, `description`, `image`, `time`) VALUES
(1, 'onion', 'The onion, also known as the bulb onion or common onion, is a vegetable that is the most widely cultivated species of the genus Allium. The shallot is a botanical variety of the onion which was classified as a separate species until 2010. Its close relatives include garlic, scallion, leek, and chive.', 'sincerely-media-GrHWJVA1KTA-unsplash.jpg', '2022-05-27 14:35:03'),
(2, 'soybean', 'soybean, (Glycine max), also called soja bean or soya bean, annual legume of the pea family (Fabaceae) and its edible seed. The soybean is economically the most important bean in the world, providing vegetable protein for millions of people and ingredients for hundreds of chemical products.', 'kelly-sikkema-k1cpHnqBuMM-unsplash.jpg', '2022-06-06 14:25:08'),
(3, 'Cotton ', 'Cotton is a Kharif crop in the major parts of the country viz. Punjab, Haryana, Rajasthan, Uttar Pradesh, Madhya Pradesh, Gujarat, Maharashtra and parts of Andhra Pradesh & Karnataka.', 'karl-wiggers--X401Lkrm0g-unsplash.jpg', '2022-06-06 14:27:06'),
(4, 'Paddy', 'A paddy field is a flooded field of arable land used for growing semiaquatic crops, most notably rice and taro. It originates from the Neolithic rice-farming cultures of the Yangtze River basin in southern China, associated with pre-Austronesian and Hmong-Mien cultures.', 'sreehari-devadas-WDI95CIPW00-unsplash.jpg', '2022-06-06 14:27:41'),
(5, 'Sugar Cane', 'Sugarcane or sugar cane is a species of tall, perennial grass that is used for sugar production. The plants are 2–6 m tall with stout, jointed, fibrous stalks that are rich in sucrose, which accumulates in the stalk internodes.', 'victoria-priessnitz-IPuuhSmsFIc-unsplash.jpg', '2022-06-06 14:32:19'),
(6, 'Wheat', 'The crop is grown mostly across Bhal region of Gujarat, including Ahmedabad, Anand, Kheda, Bhavanagar, Surendranagar, Bharuch districts. The unique characteristic of the wheat variety is that grown in rainfed conditions and cultivated in about two lakh hectares in Gujarat.', 'evi-radauscher-NLlvBb9sLts-unsplash.jpg', '2022-06-06 14:35:05'),
(7, 'Strawberry', 'Strawberry, a fruit traditionally flourishing in cold and hilly places, has wonderfully adapted itself even to the harsh and arid terrains of Kutch. A farmer in Bhuj taluka of Kutch district was hugely surprised last week when he saw sweet success budding in the plants that he had planted on a trial mode.', 'massimiliano-martini-IeEFsajuORc-unsplash.jpg', '2022-06-06 14:35:29'),
(8, 'Brocolli', 'Broccoli is an edible green plant in the cabbage family whose large flowering head, stalk and small associated leaves are eaten as a vegetable. Broccoli is classified in the Italica cultivar group of the species Brassica oleracea.', 'hans-ripa-4cEmT3AsoVc-unsplash.jpg', '2022-06-06 14:36:21'),
(9, 'Banana', 'A banana is an elongated, edible fruit – botanically a berry – produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called \"plantains\", distinguishing them from dessert bananas.', 'rodrigo-dos-reis-DkTuGvgPotA-unsplash.jpg', '2022-06-06 14:36:50'),
(10, 'Peanut ', 'The peanut also known as the groundnut, goober, pindar or monkey nut, is a legume crop grown mainly for its edible seeds. It is widely grown in the tropics and subtropics, being important to both small and large commercial producers.', 'vladislav-nikonov-13lLAWadKwU-unsplash.jpg', '2022-06-06 14:37:51'),
(11, 'Lemon', 'The lemon is a species of small evergreen trees in the flowering plant family Rutaceae, native to Asia, primarily Northeast India, Northern Myanmar or China', 'ernest-porzi-Z-Y6I45f9kQ-unsplash.jpg', '2022-06-06 14:38:46'),
(12, 'Potato', 'The potato is a starchy tuber of the plant Solanum tuberosum and is a root vegetable native to the Americas. The plant is a perennial in the nightshade family Solanaceae. Potato. Potato cultivars appear in a variety of colors, shapes, and sizes. Scientific classification.', 'jeshoots-com-fp1x-X7DwDs-unsplash.jpg', '2022-06-06 14:39:17'),
(13, 'Brinjal', 'Eggplant, aubergine or brinjal is a plant species in the nightshade family Solanaceae. Solanum melongena is grown worldwide for its edible fruit. Most commonly purple, the spongy, absorbent fruit is used in several cuisines. Typically used as a vegetable in cooking, it is a berry by botanical definition.', 'piyush-patil-vHTcsb4LbYU-unsplash.jpg', '2022-06-06 14:40:23'),
(14, 'Garlic', 'Garlic is a species of bulbous flowering plant in the genus Allium. Its close relatives include the onion, shallot, leek, chive, Welsh onion and Chinese onion.', 'shelley-pauls-MSJMH0zW64c-unsplash.jpg', '2022-06-06 14:42:16'),
(15, 'Coriander ', 'Coriander is a plant. Both the leaves and fruit (seeds) of coriander are used as food and medicine. However, the term \"coriander\" is typically used to refer to the fruit. Coriander leaves are usually referred to as cilantro. In the following sections, the term \"coriander\" will be used to describe the fruit.', 'chandan-chaurasia-N73L0EzbJ8Y-unsplash.jpg', '2022-06-06 14:42:41'),
(16, 'Water Melon', 'Watermelon is a flowering plant species of the Cucurbitaceae family and the name of its edible fruit. A scrambling and trailing vine-like plant, it is a highly cultivated fruit worldwide, with more than 1,000 varieties.', 'juven-dunn-hUkZv0Y47Ic-unsplash.jpg', '2022-06-06 14:43:03'),
(17, 'Cabbage', 'Cabbage, comprising several cultivars of Brassica oleracea, is a leafy green, red, or white biennial plant grown as an annual vegetable crop for its dense-leaved heads.', 'dan-cristian-padure-4jHCWfX3_G4-unsplash.jpg', '2022-06-06 14:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `crop-tracking`
--

CREATE TABLE `crop-tracking` (
  `id` int(11) NOT NULL,
  `crop_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `sowing_date` date NOT NULL,
  `farm_area` decimal(10,0) NOT NULL,
  `area_type` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop-tracking`
--

INSERT INTO `crop-tracking` (`id`, `crop_id`, `farmer_id`, `sowing_date`, `farm_area`, `area_type`, `time`) VALUES
(6, 13, 1, '2022-06-21', '10', 'hacter', '2022-06-06 20:50:27'),
(8, 10, 2, '2022-05-11', '5', 'vigha', '2022-06-06 20:55:01'),
(9, 7, 1, '2022-06-15', '2', 'acre', '2022-06-06 21:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `followers` int(11) DEFAULT 0,
  `following` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `name`, `mobile`, `email`, `followers`, `following`, `username`, `password`, `timestamp`) VALUES
(1, 'Hardik Kanajariya', '6353485415', 'legirag200@steamoh.com', 0, 0, 'hardik', '202cb962ac59075b964b07152d234b70', '2022-05-26 19:22:27'),
(2, 'Yash Kanajariya', '9909520639', 'legirag2001@steamoh.com', 0, 0, 'yash', '202cb962ac59075b964b07152d234b70', '2022-05-28 12:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `recent-updates`
--

CREATE TABLE `recent-updates` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recent-updates`
--

INSERT INTO `recent-updates` (`id`, `image`, `msg`, `time`) VALUES
(8, 'jed-owen-1JgUGDdcWnM-unsplash.jpg', 'Welcome to VFA: The farmer is the only man in our economy who buys everything at retail, sells everything at wholesale, and pays the freight both ways.', '2022-06-06 18:34:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `thumbnail` (`thumbnail`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `crop-tracking`
--
ALTER TABLE `crop-tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crop_id` (`crop_id`),
  ADD KEY `farmer_id` (`farmer_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `mobile-no` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `recent-updates`
--
ALTER TABLE `recent-updates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `crop-tracking`
--
ALTER TABLE `crop-tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recent-updates`
--
ALTER TABLE `recent-updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crop-tracking`
--
ALTER TABLE `crop-tracking`
  ADD CONSTRAINT `crop-tracking_ibfk_1` FOREIGN KEY (`crop_id`) REFERENCES `crop` (`id`),
  ADD CONSTRAINT `crop-tracking_ibfk_2` FOREIGN KEY (`farmer_id`) REFERENCES `farmer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
