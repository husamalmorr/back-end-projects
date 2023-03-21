-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2021 at 05:18 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15436184_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `academy`
--

CREATE TABLE `academy` (
  `id` int(11) NOT NULL,
  `academy2` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `academy`
--

INSERT INTO `academy` (`id`, `academy2`) VALUES
(1, '(90% فما فوق)'),
(2, '(85%-89%)'),
(3, '(80%-84%)'),
(4, '(75%-79%)'),
(5, ' (ما دون 75%)');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `updationDate` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'aa19ef2047f88d21e592509fe43f9117', '06-11-2020 05:56:19 PM');

-- --------------------------------------------------------

--
-- Table structure for table `behave`
--

CREATE TABLE `behave` (
  `id` int(11) NOT NULL,
  `behave2` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `behave`
--

INSERT INTO `behave` (`id`, `behave2`) VALUES
(1, 'ممتاز'),
(2, 'جيد جدا'),
(3, 'جيد'),
(4, 'مقبول'),
(5, 'ابدا');

-- --------------------------------------------------------

--
-- Table structure for table `bus2`
--

CREATE TABLE `bus2` (
  `id` int(11) NOT NULL,
  `bus2` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `bus2`
--

INSERT INTO `bus2` (`id`, `bus2`) VALUES
(1, 'ّذهاب'),
(2, 'عودة'),
(3, 'ذهاب و عودة'),
(4, 'غير مسجل');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `categoryDescription` longtext CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(6, 'مدارس الايزو', '', '2020-11-18 15:50:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  `from_user_id` int(11) DEFAULT NULL,
  `message` text COLLATE utf8_bin DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_message_id`, `to_user_id`, `from_user_id`, `message`, `timestamp`, `status`) VALUES
(27, NULL, NULL, 's', '2021-02-20 22:33:58', NULL),
(28, NULL, NULL, 'ss', '2021-02-20 22:34:28', NULL),
(29, NULL, NULL, 'd', '2021-02-20 22:34:48', NULL),
(30, NULL, NULL, '1', '2021-02-20 22:37:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complaintremark`
--

CREATE TABLE `complaintremark` (
  `id` int(11) NOT NULL,
  `complaintNumber` int(11) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `remark` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintremark`
--

INSERT INTO `complaintremark` (`id`, `complaintNumber`, `status`, `remark`, `remarkDate`) VALUES
(35, 13, 'in process', 'rf', '2021-02-28 13:23:01'),
(36, 9, 'closed', 'gfgfd', '2021-02-28 13:23:46'),
(37, 43, 'in process', 'afsf', '2021-03-01 07:57:04'),
(38, 44, 'closed', 'defsdf', '2021-03-01 07:57:37'),
(39, 54, 'closed', 'تم الحل', '2021-03-01 10:06:39'),
(40, 56, 'in process', 'سيتم العمل الان على حل الشكوى', '2021-03-03 14:05:20'),
(41, 63, 'in process', 'يتم العمل عليها', '2021-03-03 16:53:33'),
(42, 55, 'in process', 'In process', '2021-04-12 18:15:13'),
(43, 77, 'in process', 'قيد العمل', '2021-04-14 07:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `eacademic`
--

CREATE TABLE `eacademic` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `states` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `eacademic`
--

INSERT INTO `eacademic` (`id`, `username`, `password`, `states`) VALUES
(2, 'mohammad', 'aa19ef2047f88d21e592509fe43f9117', 'القسم الاكاديمي');

-- --------------------------------------------------------

--
-- Table structure for table `ebus`
--

CREATE TABLE `ebus` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `states` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE `edu` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `states` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `edu`
--

INSERT INTO `edu` (`id`, `username`, `password`, `states`) VALUES
(1, 'asia', 'aa19ef2047f88d21e592509fe43f9117', 'القسم التربوي و الارشاد');

-- --------------------------------------------------------

--
-- Table structure for table `fbaccount`
--

CREATE TABLE `fbaccount` (
  `id` int(11) NOT NULL,
  `fbaccounts` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `states` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id`, `username`, `password`, `states`) VALUES
(2, 'sameer', 'aa19ef2047f88d21e592509fe43f9117', 'قسم اللوازم');

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE `it` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `states` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`id`, `username`, `password`, `states`) VALUES
(30, 'husam', 'aa19ef2047f88d21e592509fe43f9117', 'قسم الاي تي');

-- --------------------------------------------------------

--
-- Table structure for table `location2`
--

CREATE TABLE `location2` (
  `id` int(11) NOT NULL,
  `location2` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `location2`
--

INSERT INTO `location2` (`id`, `location2`) VALUES
(1, 'خلدا'),
(2, 'تلاع العلي'),
(3, 'دابوق'),
(4, 'شيميساني'),
(5, 'الرابية'),
(6, 'ضاحية الرشيد'),
(7, 'ضاحية الاقصى'),
(8, 'صويلح');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `states` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`id`, `username`, `password`, `states`) VALUES
(1, 'alaa', 'aa19ef2047f88d21e592509fe43f9117', 'قسم المالية');

-- --------------------------------------------------------

--
-- Table structure for table `percent`
--

CREATE TABLE `percent` (
  `id` int(11) NOT NULL,
  `per` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `percent`
--

INSERT INTO `percent` (`id`, `per`) VALUES
(1, '5%'),
(2, '10%'),
(3, '15%'),
(4, '20%'),
(5, '25%'),
(6, '30%\r\n'),
(7, '35%'),
(8, '40%'),
(9, '45%'),
(10, '50%'),
(11, '55%'),
(12, '60%'),
(13, '65%'),
(14, '70%'),
(15, '75%'),
(16, '80%'),
(17, '85%'),
(18, '90%'),
(19, '95%'),
(20, '100%');

-- --------------------------------------------------------

--
-- Table structure for table `private`
--

CREATE TABLE `private` (
  `id` int(11) NOT NULL,
  `private2` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `private`
--

INSERT INTO `private` (`id`, `private2`) VALUES
(1, 'مسجل'),
(2, 'غير مسجل\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `privateattend`
--

CREATE TABLE `privateattend` (
  `id` int(11) NOT NULL,
  `privateattends` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `privateattend`
--

INSERT INTO `privateattend` (`id`, `privateattends`) VALUES
(1, 'يحضر'),
(2, 'لا يحضر');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `stateName` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `stateDescription` tinytext CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `stateName`, `stateDescription`, `postingDate`, `updationDate`, `username`) VALUES
(2, 'قسم اللوازم', '', '2020-11-18 16:06:59', '2021-02-27 22:26:12', ''),
(3, 'القسم التربوي و الارشاد', '', '2020-11-18 16:07:05', '2021-02-27 22:26:35', ''),
(4, 'قسم الاي تي', '', '2021-01-25 15:30:21', '2021-02-27 22:32:19', ''),
(5, 'قسم المالية', '', '2021-01-29 10:58:08', '2021-02-27 22:33:57', ''),
(8, 'قسم المواصلات', '', '2021-02-08 10:57:05', NULL, ''),
(14, 'القسم الاكاديمي', '', '2021-02-20 15:01:18', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentid` int(11) NOT NULL,
  `studentname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `discount` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `phoneno1` int(11) DEFAULT NULL,
  `fbaccount` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `privateattend` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `facebook` varchar(10000) COLLATE utf8_bin DEFAULT NULL,
  `behaivor` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `academic` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `privateedu` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `interests` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `bus` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `complaint` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `subcategory` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentid`, `studentname`, `discount`, `phoneno1`, `fbaccount`, `privateattend`, `facebook`, `behaivor`, `academic`, `privateedu`, `interests`, `location`, `bus`, `complaint`, `subcategory`) VALUES
(1, 'حسن احمد حسن سعد - رابع ', '50%', 796666873, NULL, NULL, NULL, 'مهذب وخلوق يحتاج متابعة ', '80', NULL, NULL, 'ميداس مركز أمن تلاع العلي', 'ذهاب و عودة', NULL, 'بنين'),
(2, 'راشد سامر الخلايلة - رابع', '45%', 799716670, NULL, NULL, NULL, 'خلوق وقيادي ومثابر ومجتهد', '98', NULL, NULL, 'عرقوب خلدا -سلاح الجو شارع ابن منذر النيسابوري', 'ّذهاب', NULL, 'بنين'),
(3, 'حسن احمد العساف - رابع ', '45%', 795546002, NULL, NULL, NULL, 'خلوق وقيادي ومثابر ومجتهد', '96', NULL, NULL, 'تلاع العلي  حي الصالحين', 'ّذهاب', NULL, 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', '35%', 791555229, NULL, NULL, NULL, 'خلوق وقيادي ومثابر', '98', NULL, NULL, 'حي الكرسي', 'ّذهاب', NULL, 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة - رابع ', '35%', 796541517, NULL, NULL, NULL, 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', NULL, NULL, 'صويلح حي الرحمانية ', 'ّذهاب', NULL, 'بنين'),
(6, 'محمد  ياسين رضوان خالد السخني-  رابع ', '50%', 799955907, NULL, NULL, NULL, 'مهذب وخلوق ونشيط يحتاج متابعة', '91', NULL, NULL, 'الجاردنز', 'ّذهاب', NULL, 'بنين'),
(7, 'حمزة خالد منير فوزي علاء الدين - رابع ', '55%', 795515623, NULL, NULL, NULL, 'خلوق وقيادي ومثابر ومجتهد', '98', NULL, NULL, 'تلاع العلي شارع المحمدية بجانب صالون خالد منير', 'ّذهاب', NULL, 'بنين'),
(8, 'عمرخالد نوفيق العساف - رابع', '50%', 795468959, NULL, NULL, NULL, 'خلوق وقيادي ومثابر ومجتهد', '96', NULL, NULL, 'مقابل مدارس الآيزو', 'ّذهاب', NULL, 'بنين'),
(9, 'عبدالله هشام التل - رابع', '30%\r\n', 799159991, NULL, NULL, NULL, 'مهذب وخلوق ونشيط', '94', NULL, NULL, '', 'ذهاب و عودة', NULL, 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '30%\r\n', 798744384, NULL, NULL, NULL, 'مهذب وقيادي ومثابر', '96', NULL, NULL, '', 'ّذهاب', NULL, 'بنين'),
(11, 'محمد علاء الدين سليمان محمود الصبيحات - رابع', '45%', 795605515, NULL, NULL, NULL, 'خلوق وقيادي ومثابر ومتفاعل', '98', NULL, NULL, '', 'ّذهاب', NULL, 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', '30%\r\n', 796887049, NULL, NULL, NULL, 'مهذب وخلوق ونشيط', '92', NULL, NULL, 'تلاع العلي', 'ّذهاب', NULL, 'بنين'),
(13, 'معتز خليل سليمان الزيدانيين - رابع', '40%', 795810838, NULL, NULL, NULL, 'خلوق وقيادي ومثابر', '97', NULL, NULL, '', 'ّذهاب', NULL, 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', '30%\r\n', 797667613, NULL, NULL, NULL, 'مهذب وخلوق ومثابر', '95', NULL, NULL, 'خلدا', 'ّذهاب', NULL, 'بنين'),
(15, 'باسل  محمد سليم القضاة - رابع ', '35%', 799707033, NULL, NULL, NULL, 'مهذب وخلوق ونشيط', '97', NULL, NULL, 'خلدا مركز أمن تلاع العلي', 'ّذهاب', NULL, 'بنين'),
(16, 'عمرو عبدالله شموط - رابع', '35%', 795182608, NULL, NULL, NULL, 'مهذب وخلوق', '85', NULL, NULL, 'شارع عبدالله غوشة ', 'ّذهاب', NULL, 'بنين'),
(17, 'عبدالله بهاء نظير الخاروف - رابع', '45%', 0, NULL, NULL, NULL, 'خلوق وقيادي ومثابر واجتماعي ومتعاون', '98', NULL, NULL, 'تلاع العلي الشمالي', 'ّذهاب', NULL, 'بنين'),
(18, 'ريان سليمان عبداللطيف العساف - رابع ', '45%', 777540966, NULL, NULL, NULL, 'مهذب ومتفاعل ونشيط يحتاج متابعة', '91', NULL, NULL, 'تلاع العلي خلف روضة أرض الفرح', 'ّذهاب', NULL, 'بنين'),
(19, 'عبدالكريم احمد ابو لبه - رابع', '45%', 799283000, NULL, NULL, NULL, 'مهذب وخلوق ومثابر هادئ', '98', NULL, NULL, 'أم أذينة', 'ّذهاب', NULL, 'بنين'),
(20, 'جمال الدين محمد جمال طاهر محمد - رابع ', '50%', 799091017, NULL, NULL, NULL, 'مهذب وخلوق ونشيط ومثابر', '95', NULL, NULL, 'خلدا مركز أمن تلاع العلي', 'ّذهاب', NULL, 'بنين'),
(21, 'موسى طارق موسى الصاحب - رابع', '45%', 798828940, NULL, NULL, NULL, 'مهذب وخلوق ومثابر ومجتهد', '99', NULL, NULL, 'خلدا حي الصالحين  شارع سليمان طوقان', 'ّذهاب', NULL, 'بنين'),
(23, 'محمد اسامه محمد بديع موسى - رابع', '50%', 777294299, NULL, NULL, NULL, 'مهذب وخلوق و مجتهد', '96', NULL, NULL, 'أم السماق  مقابل مسجد التلاوي', 'ّذهاب', NULL, 'بنين'),
(24, 'محمد طه برهان الصمادي - رابع ', '40%', 790578772, NULL, NULL, NULL, 'مهذب وخلوق ', '90', NULL, NULL, 'الدوار السابع', 'ّذهاب', NULL, 'بنين'),
(25, 'عبدالله بسام محمد ابو سارة - رابع', '50%', 798798877, NULL, NULL, NULL, 'مهذب وخلوق ويحتاج إلى متابعة', '92', NULL, NULL, 'الصويفية', 'ّذهاب', NULL, 'بنين'),
(26, 'تامر عبدالله عماد الزعبي - رابع ', '35%', 798652988, NULL, NULL, NULL, 'مهذب وخلوق ', '96', NULL, NULL, 'ضاحية الرشيد  ', 'ّذهاب', NULL, 'بنين'),
(27, 'عزالدين فريحات -رابع', '50%', 772069300, NULL, NULL, NULL, 'مهذب وخلوق يحتاج متابعة ', '91', NULL, NULL, 'خلدا حي الصالحين', 'ّذهاب', NULL, 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', '30%\r\n', 799167085, NULL, NULL, NULL, 'خلوق وقيادي ومثابر', '94', NULL, NULL, 'أم السماق شارع البحات', 'ّذهاب', NULL, 'بنين'),
(29, 'نسيم اشرف هاني الغزاوي', '40%', 790487023, NULL, NULL, NULL, 'مهذب وخلوق ', '85', NULL, NULL, 'ضاحية الأمير راشد', 'ّذهاب', NULL, 'بنين'),
(30, 'ريان ياسر جردات - رابع', NULL, NULL, NULL, NULL, NULL, ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', NULL, NULL, 'شفا بدران', NULL, NULL, 'بنين');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(2, 6, 'بنات', '2020-11-18 15:51:23', '2020-11-18 16:01:15'),
(3, 6, 'بنين', '2020-11-18 16:01:51', '2021-02-01 19:36:45'),
(4, 6, 'روضة', '2021-01-31 08:53:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supervisoracademic`
--

CREATE TABLE `supervisoracademic` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `states` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `supervisoracademic`
--

INSERT INTO `supervisoracademic` (`id`, `username`, `password`, `states`) VALUES
(3, 'academy', 'aa19ef2047f88d21e592509fe43f9117', 'القسم الاكاديمي');

-- --------------------------------------------------------

--
-- Table structure for table `supervisorbus`
--

CREATE TABLE `supervisorbus` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `states` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `supervisorbus`
--

INSERT INTO `supervisorbus` (`id`, `username`, `password`, `states`) VALUES
(3, 'bus', 'aa19ef2047f88d21e592509fe43f9117', 'قسم المواصلات');

-- --------------------------------------------------------

--
-- Table structure for table `supervisoredu`
--

CREATE TABLE `supervisoredu` (
  `id` int(11) NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(250) NOT NULL,
  `states` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisoredu`
--

INSERT INTO `supervisoredu` (`id`, `username`, `password`, `states`) VALUES
(4, 'edu', 'aa19ef2047f88d21e592509fe43f9117', 'القسم التربوي و الارشاد');

-- --------------------------------------------------------

--
-- Table structure for table `supervisorguide`
--

CREATE TABLE `supervisorguide` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `updationDate` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `states` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `supervisorguide`
--

INSERT INTO `supervisorguide` (`id`, `username`, `password`, `updationDate`, `states`) VALUES
(4, 'guide', 'aa19ef2047f88d21e592509fe43f9117', NULL, 'قسم اللوازم');

-- --------------------------------------------------------

--
-- Table structure for table `supervisorit`
--

CREATE TABLE `supervisorit` (
  `id` int(11) NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(250) NOT NULL,
  `states` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisorit`
--

INSERT INTO `supervisorit` (`id`, `username`, `password`, `states`) VALUES
(7, 'it', 'aa19ef2047f88d21e592509fe43f9117', 'قسم الاي تي');

-- --------------------------------------------------------

--
-- Table structure for table `supervisormoney`
--

CREATE TABLE `supervisormoney` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `states` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `supervisormoney`
--

INSERT INTO `supervisormoney` (`id`, `username`, `password`, `states`) VALUES
(4, 'money', 'aa19ef2047f88d21e592509fe43f9117', 'قسم المالية');

-- --------------------------------------------------------

--
-- Table structure for table `table_name`
--

CREATE TABLE `table_name` (
  `studentid` double DEFAULT NULL,
  `studentname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fbaccount` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `behaivor` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `academic` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `privateedu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interests` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subcategory` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_name`
--

INSERT INTO `table_name` (`studentid`, `studentname`, `fbaccount`, `facebook`, `behaivor`, `academic`, `privateedu`, `interests`, `location`, `subcategory`) VALUES
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(13, 'معتز خليل سليمان الزيدانيين - رابع', 'Amal daoud', '', 'خلوق وقيادي ومثابر', '97', 'لا', '', '', 'بنين'),
(24, 'طه برهان الصمادي - رابع ', '', '', 'مهذب وخلوق ', '90', 'شارك في المركز وبعدها توقف ', '', 'الدوار السابع', 'بنين'),
(29, 'نسيم اشرف هاني الغزاوي', 'sanaa ashraf', 'مدرسة مميزة بمعلمينها ومعلماتها يعطيكم العافية', 'مهذب وخلوق ', '85', 'لا', 'ثقافي', 'ضاحية الأمير راشد', 'بنين'),
(2, 'راشد سامر الخلايلة - رابع', 'rashed asahouri', '', 'خلوق وقيادي ومثابر ومجتهد', '98', 'لا', '', 'عرقوب خلدا -سلاح الجو شارع ابن منذر النيسابوري', 'بنين'),
(3, 'حسن احمد العساف - رابع ', 'لا يوجد', 'مدرسة رائعة بكل المقاييس وكادر تعليمي مميز وأكثر من رائع ', 'خلوق وقيادي ومثابر ومجتهد', '96', 'نعم يوم الخميس', 'رياضي الجمباز والكراتيه والوثب وعلمي  وثقافي إلقاء شعر ', 'تلاع العلي  حي الصالحين', 'بنين'),
(11, 'محمد علاء الدين سليمان محمود الصبيحات - رابع', 'Esra Mansour Alassaf', '', 'خلوق وقيادي ومثابر ومتفاعل', '98', 'لا', 'رياضي علمي والديني صوته جميل ', '', 'بنين'),
(17, 'عبدالله بهاء نظير الخاروف - رابع', 'Lama Alqadi', 'مدرسة رائعة بكل المقاييس وكادر تعليمي مميز وأكثر من رائع ', 'خلوق وقيادي ومثابر واجتماعي ومتعاون', '98', 'لا', 'رياضي وثقافي وقراءة القرآن', 'تلاع العلي الشمالي', 'بنين'),
(18, 'ريان سليمان عبداللطيف العساف - رابع ', '', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب ومتفاعل ونشيط يحتاج متابعة', '91', 'لا', 'الرياضي كرة القدم', 'تلاع العلي خلف روضة أرض الفرح', 'بنين'),
(19, 'عبدالكريم احمد ابو لبه - رابع', 'Sereen madi', '', 'مهذب وخلوق ومثابر هادئ', '98', 'لا', 'رياضي وعلمي ', 'أم أذينة', 'بنين'),
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(13, 'معتز خليل سليمان الزيدانيين - رابع', 'Amal daoud', '', 'خلوق وقيادي ومثابر', '97', 'لا', '', '', 'بنين'),
(24, 'طه برهان الصمادي - رابع ', '', '', 'مهذب وخلوق ', '90', 'شارك في المركز وبعدها توقف ', '', 'الدوار السابع', 'بنين'),
(29, 'نسيم اشرف هاني الغزاوي', 'sanaa ashraf', 'مدرسة مميزة بمعلمينها ومعلماتها يعطيكم العافية', 'مهذب وخلوق ', '85', 'لا', 'ثقافي', 'ضاحية الأمير راشد', 'بنين'),
(2, 'راشد سامر الخلايلة - رابع', 'rashed asahouri', '', 'خلوق وقيادي ومثابر ومجتهد', '98', 'لا', '', 'عرقوب خلدا -سلاح الجو شارع ابن منذر النيسابوري', 'بنين'),
(3, 'حسن احمد العساف - رابع ', 'لا يوجد', 'مدرسة رائعة بكل المقاييس وكادر تعليمي مميز وأكثر من رائع ', 'خلوق وقيادي ومثابر ومجتهد', '96', 'نعم يوم الخميس', 'رياضي الجمباز والكراتيه والوثب وعلمي  وثقافي إلقاء شعر ', 'تلاع العلي  حي الصالحين', 'بنين'),
(11, 'محمد علاء الدين سليمان محمود الصبيحات - رابع', 'Esra Mansour Alassaf', '', 'خلوق وقيادي ومثابر ومتفاعل', '98', 'لا', 'رياضي علمي والديني صوته جميل ', '', 'بنين'),
(17, 'عبدالله بهاء نظير الخاروف - رابع', 'Lama Alqadi', 'مدرسة رائعة بكل المقاييس وكادر تعليمي مميز وأكثر من رائع ', 'خلوق وقيادي ومثابر واجتماعي ومتعاون', '98', 'لا', 'رياضي وثقافي وقراءة القرآن', 'تلاع العلي الشمالي', 'بنين'),
(18, 'ريان سليمان عبداللطيف العساف - رابع ', '', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب ومتفاعل ونشيط يحتاج متابعة', '91', 'لا', 'الرياضي كرة القدم', 'تلاع العلي خلف روضة أرض الفرح', 'بنين'),
(19, 'عبدالكريم احمد ابو لبه - رابع', 'Sereen madi', '', 'مهذب وخلوق ومثابر هادئ', '98', 'لا', 'رياضي وعلمي ', 'أم أذينة', 'بنين'),
(1, 'ريان ياسر جردات', '', 'تشكر المعلمات و المدرسة بشكل عام ', ' مهذب و قيادي و نشيط ', ' ممتاز +A                99.6    ', 'A                          متنظم و يحضر باستمرار (كل خميس)', 'روبوت  عنده اهتمام وفضول شديد لتعلمه  Rsmas      ', 'شفا بدران', 'بنين'),
(9, 'عبدالله هشام التل - رابع', '', '', 'مهذب وخلوق ونشيط', '94', 'لا', '', '', 'بنين'),
(10, 'هاشم عيسى زيدان السوالمة - رابع', '', '', 'مهذب وقيادي ومثابر', '96', 'لا', '', '', 'بنين'),
(12, 'سند سائد محمد سليمان الصعوب - رابع ', 'ola mallah', 'تشكر المعلمين والمعلمات على جهودهم ', 'مهذب وخلوق ونشيط', '92', 'لا', 'رياضي وعلمي', 'تلاع العلي', 'بنين'),
(14, 'بلال ابو العباس عبدالحميد سعود الهيتي - رابع', 'Bright smile', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ومثابر', '95', 'لا', 'رياضي وعلمي', 'خلدا', 'بنين'),
(28, 'يحيى عمر عبدالله عمر الكعود - رابع ', 'yahya Algaood', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '94', 'لا', '', 'أم السماق شارع البحات', 'بنين'),
(4, 'كرم اسلام محمد اسلام نصير- رابع ', 'eman nusairat um karam', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'خلوق وقيادي ومثابر', '98', 'لا', 'علمي مهني رياضي', 'حي الكرسي', 'بنين'),
(5, 'عمر عبدالله علي عبدالله أبو هلالة', 'Wafaa Sandouqa', 'الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'مهذب وخلوق ونشيط ومجتهد يحتاج متابعة', '98', 'لا', 'رياضي', 'صويلح حي الرحمانية ', 'بنين'),
(15, 'باسل  محمد سليم القضاة - الرابع ', 'Rodyna alqudah', '\"الشكر الجزيل للإدارة و المعلمين والمعلمات وجزاكم الله خير الجزاء ', 'وتطلب العمل على جودة الصوت\"', 'مهذب وخلوق ونشيط', '97', 'لا', 'الرسم وتايكوندو', 'خلدا مركز أمن تلاع العلي'),
(16, 'عمرو عبدالله شموط - الرابع', 'Aman Ajaj', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق', '85', 'لا', 'علمي ورياضي', 'شارع عبدالله غوشة ', 'بنين'),
(13, 'معتز خليل سليمان الزيدانيين - رابع', 'Amal daoud', '', 'خلوق وقيادي ومثابر', '97', 'لا', '', '', 'بنين'),
(24, 'طه برهان الصمادي - رابع ', '', '', 'مهذب وخلوق ', '90', 'شارك في المركز وبعدها توقف ', '', 'الدوار السابع', 'بنين'),
(29, 'نسيم اشرف هاني الغزاوي', 'sanaa ashraf', 'مدرسة مميزة بمعلمينها ومعلماتها يعطيكم العافية', 'مهذب وخلوق ', '85', 'لا', 'ثقافي', 'ضاحية الأمير راشد', 'بنين'),
(2, 'راشد سامر الخلايلة - رابع', 'rashed asahouri', '', 'خلوق وقيادي ومثابر ومجتهد', '98', 'لا', '', 'عرقوب خلدا -سلاح الجو شارع ابن منذر النيسابوري', 'بنين'),
(3, 'حسن احمد العساف - رابع ', 'لا يوجد', 'مدرسة رائعة بكل المقاييس وكادر تعليمي مميز وأكثر من رائع ', 'خلوق وقيادي ومثابر ومجتهد', '96', 'نعم يوم الخميس', 'رياضي الجمباز والكراتيه والوثب وعلمي  وثقافي إلقاء شعر ', 'تلاع العلي  حي الصالحين', 'بنين'),
(11, 'محمد علاء الدين سليمان محمود الصبيحات - رابع', 'Esra Mansour Alassaf', '', 'خلوق وقيادي ومثابر ومتفاعل', '98', 'لا', 'رياضي علمي والديني صوته جميل ', '', 'بنين'),
(17, 'عبدالله بهاء نظير الخاروف - رابع', 'Lama Alqadi', 'مدرسة رائعة بكل المقاييس وكادر تعليمي مميز وأكثر من رائع ', 'خلوق وقيادي ومثابر واجتماعي ومتعاون', '98', 'لا', 'رياضي وثقافي وقراءة القرآن', 'تلاع العلي الشمالي', 'بنين'),
(18, 'ريان سليمان عبداللطيف العساف - رابع ', '', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب ومتفاعل ونشيط يحتاج متابعة', '91', 'لا', 'الرياضي كرة القدم', 'تلاع العلي خلف روضة أرض الفرح', 'بنين'),
(19, 'عبدالكريم احمد ابو لبه - رابع', 'Sereen madi', '', 'مهذب وخلوق ومثابر هادئ', '98', 'لا', 'رياضي وعلمي ', 'أم أذينة', 'بنين'),
(1, 'حسن احمد حسن سعد - رابع ', 'Um Hasan Alajarmeh', 'أنتم من أفضل المدرسين والمدرسات واهتمامكم  بأبنائنا  ممتازة', 'مهذب وخلوق يحتاج متابعة ', '80', 'لا', '', 'ميداس مركز أمن تلاع العلي', 'بنين'),
(6, 'محمد  ياسين رضوان خالد السخني-  رابع ', 'Alaa daaboul', 'مدرسة رائعة بكل المقاييس وكادر تعليمي مميز وأكثر من رائع ', 'مهذب وخلوق ونشيط يحتاج متابعة', '91', 'لا', 'رياضي وعلمي', 'الجاردنز', 'بنين'),
(8, 'عمرخالد نوفيق العساف - رابع', 'Reema khazale', '', 'خلوق وقيادي ومثابر ومجتهد', '96', 'لا', 'علمي عمل تجارب وأنشطة  ورياضي ', 'مقابل مدارس الآيزو', 'بنين'),
(20, 'جمال الدين محمد جمال طاهر محمد - رابع ', '', 'الشكر والتقدير', 'مهذب وخلوق ونشيط ومثابر', '95', 'لا', 'رياضة', 'خلدا مركز أمن تلاع العلي', 'بنين');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaints`
--

CREATE TABLE `tblcomplaints` (
  `complaintNumber` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `subcategory` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `complaintType` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `users` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `noc` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `complaintDetails` mediumtext COLLATE utf8_bin DEFAULT NULL,
  `complaintFile` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `studentn` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT current_timestamp(),
  `date` datetime(6) DEFAULT NULL,
  `hours` time DEFAULT NULL,
  `feedback` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mfeedback` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tblcomplaints`
--

INSERT INTO `tblcomplaints` (`complaintNumber`, `userId`, `category`, `subcategory`, `complaintType`, `state`, `users`, `noc`, `complaintDetails`, `complaintFile`, `sid`, `studentn`, `regDate`, `status`, `lastUpdationDate`, `date`, `hours`, `feedback`, `mfeedback`) VALUES
(64, 5, 6, 'بنات', ' شكوى', 'قسم الاي تي', NULL, '', 'مشكلة اي تي', '', 4, '4كرم اسلام محمد اسلام نصير- رابع ', '2021-03-08 17:31:35', NULL, '2021-03-08 15:31:35', '2021-03-08 18:31:00.000000', NULL, 'حل المشكلة', NULL),
(65, 5, 6, 'بنين', ' شكوى', 'القسم الاكاديمي', NULL, '', 'مشكلة راضيات', '', 18, '18ريان سليمان عبداللطيف العساف - رابع ', '2021-03-11 09:10:02', NULL, '2021-03-11 07:10:02', '2021-03-11 11:07:00.000000', NULL, NULL, NULL),
(66, 5, 6, 'بنين', ' شكوى', 'قسم الاي تي', NULL, '', 'مشكلة اي تي', '', 3, '3حسن احمد العساف - رابع ', '2021-03-11 09:22:25', NULL, '2021-03-11 07:22:25', '2021-03-11 00:21:00.000000', NULL, NULL, NULL),
(67, 5, 6, 'بنين', ' شكوى', 'قسم الاي تي', NULL, '', '5555', '', 3, '3حسن احمد العساف - رابع ', '2021-03-11 09:23:27', NULL, '2021-03-11 07:23:27', '2021-03-11 11:23:00.000000', NULL, NULL, NULL),
(68, 5, 6, 'روضة', ' شكوى', 'القسم الاكاديمي', NULL, '', 'مشكلة اكاديمية', '', 3, '3حسن احمد العساف - رابع ', '2021-03-13 10:14:32', NULL, '2021-03-13 08:14:32', '2021-03-13 22:13:00.000000', NULL, NULL, NULL),
(69, 5, 6, 'بنين', ' شكوى', 'قسم الاي تي', NULL, '', 'اي تي', '', 20, '20جمال الدين محمد جمال طاهر محمد - رابع ', '2021-03-15 00:43:52', NULL, '2021-03-14 22:43:52', '2021-03-15 02:39:00.000000', NULL, NULL, NULL),
(70, 5, 6, 'بنين', ' شكوى', 'قسم الاي تي', NULL, '', 'مشكلة اي تي', '', 4, '4كرم اسلام محمد اسلام نصير- رابع ', '2021-03-20 19:59:45', NULL, '2021-03-20 17:59:45', '2021-03-21 21:58:00.000000', NULL, NULL, NULL),
(75, 5, 6, 'بنات', ' شكوى', 'قسم الاي تي', NULL, '', 'اللغة الانجليزية مشكلة ', '', 2, '2راشد سامر الخلايلة - رابع', '2021-04-13 14:19:09', NULL, '2021-04-13 11:19:09', '2021-04-13 16:17:00.000000', NULL, NULL, NULL),
(76, 5, 6, 'بنين', ' شكوى', 'قسم الاي تي', NULL, '', 'ENGLISH', '', 4, '4كرم اسلام محمد اسلام نصير- رابع ', '2021-04-13 14:21:40', NULL, '2021-04-13 11:21:40', '2021-04-14 16:20:00.000000', NULL, NULL, NULL),
(77, 5, 6, 'بنات', ' شكوى', 'قسم الاي تي', NULL, '', 'مشكلة منصة ', '', 3, '3حسن احمد العساف - رابع ', '2021-04-14 10:37:03', 'in process', '2021-04-14 07:37:03', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(84, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-25 14:21:22', '25-01-2021 08:09:45 PM', 1),
(85, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-25 14:58:38', '25-01-2021 08:28:58 PM', 1),
(86, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-25 15:07:43', '25-01-2021 08:38:10 PM', 1),
(87, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-25 15:13:09', '25-01-2021 08:43:43 PM', 1),
(88, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-25 15:15:29', '25-01-2021 08:59:30 PM', 1),
(89, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-25 15:30:41', '25-01-2021 09:20:36 PM', 1),
(90, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-25 15:59:58', '', 1),
(91, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-25 18:05:29', '25-01-2021 11:52:55 PM', 1),
(92, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-29 10:18:38', '29-01-2021 03:50:47 PM', 1),
(93, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-29 10:39:54', '29-01-2021 04:11:05 PM', 1),
(94, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-29 10:42:31', '29-01-2021 04:12:49 PM', 1),
(95, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-29 11:00:13', '29-01-2021 04:30:29 PM', 1),
(96, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-29 11:06:35', '29-01-2021 04:37:16 PM', 1),
(97, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-29 12:55:28', '29-01-2021 06:30:14 PM', 1),
(98, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-29 13:03:23', '29-01-2021 06:38:08 PM', 1),
(99, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-30 09:42:19', '30-01-2021 03:12:47 PM', 1),
(100, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-30 09:43:44', '30-01-2021 03:14:07 PM', 1),
(101, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-30 09:49:04', '30-01-2021 03:19:32 PM', 1),
(102, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-30 09:55:16', '30-01-2021 03:30:31 PM', 1),
(103, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-30 10:03:55', '30-01-2021 03:34:12 PM', 1),
(104, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-30 10:10:19', '30-01-2021 03:40:39 PM', 1),
(105, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-30 10:35:57', '30-01-2021 04:06:14 PM', 1),
(106, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-31 08:43:58', '31-01-2021 02:16:02 PM', 1),
(107, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-31 08:46:41', '31-01-2021 02:22:58 PM', 1),
(108, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-31 09:00:43', '31-01-2021 02:31:33 PM', 1),
(109, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-31 09:10:28', '31-01-2021 02:49:20 PM', 1),
(110, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-31 09:30:39', '31-01-2021 03:01:51 PM', 1),
(111, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-01-31 09:57:39', '31-01-2021 03:36:47 PM', 1),
(112, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-01 18:05:01', '01-02-2021 11:35:14 PM', 1),
(113, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-02 09:54:06', '02-02-2021 03:24:15 PM', 1),
(114, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-02 10:00:11', '02-02-2021 03:30:36 PM', 1),
(115, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-02 10:04:05', '02-02-2021 03:34:22 PM', 1),
(116, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-08 11:12:43', '08-02-2021 04:43:32 PM', 1),
(117, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-08 12:43:22', '08-02-2021 06:13:40 PM', 1),
(118, 0, 'admin', 0x3132372e302e302e3100000000000000, '2021-02-08 12:43:54', '', 0),
(119, 0, 'admin', 0x3132372e302e302e3100000000000000, '2021-02-08 12:44:00', '', 0),
(120, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-08 12:46:06', '08-02-2021 06:18:27 PM', 1),
(121, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-08 12:57:28', '', 1),
(122, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-08 20:49:52', '09-02-2021 02:20:58 AM', 1),
(123, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-08 21:04:53', '09-02-2021 02:53:52 AM', 1),
(124, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 08:20:32', '09-02-2021 01:51:54 PM', 1),
(125, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 08:44:20', '09-02-2021 02:22:23 PM', 1),
(126, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 08:52:29', '09-02-2021 02:22:36 PM', 1),
(127, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 08:58:12', '09-02-2021 02:28:30 PM', 1),
(128, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 09:34:19', '09-02-2021 03:06:57 PM', 1),
(129, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 09:44:43', '09-02-2021 03:15:35 PM', 1),
(130, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 09:59:13', '09-02-2021 03:29:45 PM', 1),
(131, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 10:02:47', '09-02-2021 03:33:13 PM', 1),
(132, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 10:03:59', '09-02-2021 03:34:33 PM', 1),
(133, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 10:05:25', '09-02-2021 03:38:27 PM', 1),
(134, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 10:12:17', '09-02-2021 03:49:00 PM', 1),
(135, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 10:37:21', '09-02-2021 04:07:56 PM', 1),
(136, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-09 11:10:42', '09-02-2021 04:41:01 PM', 1),
(137, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-10 12:01:21', '10-02-2021 05:31:50 PM', 1),
(138, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-10 12:03:24', '10-02-2021 05:34:40 PM', 1),
(139, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-10 12:08:49', '10-02-2021 05:53:43 PM', 1),
(140, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-10 12:25:56', '10-02-2021 06:30:51 PM', 1),
(141, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-10 13:06:13', '10-02-2021 06:44:37 PM', 1),
(142, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-10 13:21:55', '', 1),
(143, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 13:27:43', '11-02-2021 06:59:51 PM', 1),
(144, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 13:46:24', '11-02-2021 07:16:59 PM', 1),
(145, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 13:49:23', '11-02-2021 07:19:45 PM', 1),
(146, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 13:57:55', '11-02-2021 07:28:12 PM', 1),
(147, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 14:37:19', '11-02-2021 11:38:58 PM', 1),
(148, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 18:09:56', '11-02-2021 11:41:40 PM', 1),
(149, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 18:12:16', '11-02-2021 11:42:36 PM', 1),
(150, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 18:13:02', '11-02-2021 11:43:41 PM', 1),
(151, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 18:15:09', '11-02-2021 11:45:52 PM', 1),
(152, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 18:16:47', '11-02-2021 11:47:07 PM', 1),
(153, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 18:19:56', '11-02-2021 11:50:20 PM', 1),
(154, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 18:24:17', '11-02-2021 11:58:18 PM', 1),
(155, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 18:30:10', '12-02-2021 12:00:34 AM', 1),
(156, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-11 18:37:21', '12-02-2021 12:07:56 AM', 1),
(157, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 14:26:03', '14-02-2021 08:01:12 PM', 1),
(158, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 14:31:53', '14-02-2021 08:02:39 PM', 1),
(159, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 14:38:20', '14-02-2021 08:08:36 PM', 1),
(160, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 14:42:03', '14-02-2021 08:12:18 PM', 1),
(161, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 14:45:53', '14-02-2021 08:16:07 PM', 1),
(162, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 15:00:31', '14-02-2021 11:56:47 PM', 1),
(163, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 18:29:38', '14-02-2021 11:59:56 PM', 1),
(164, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 18:30:22', '15-02-2021 12:12:10 AM', 1),
(165, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 18:48:37', '15-02-2021 12:22:37 AM', 1),
(166, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 18:55:13', '15-02-2021 12:28:47 AM', 1),
(167, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 18:58:55', '15-02-2021 12:46:33 AM', 1),
(168, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 19:28:04', '15-02-2021 01:07:03 AM', 1),
(169, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-14 19:54:43', '', 1),
(170, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-15 14:23:13', '15-02-2021 08:29:12 PM', 1),
(171, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-15 16:55:44', '15-02-2021 10:36:22 PM', 1),
(172, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-15 17:13:24', '15-02-2021 10:46:38 PM', 1),
(173, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-15 17:43:30', '15-02-2021 11:33:26 PM', 1),
(174, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-15 18:05:12', '', 1),
(175, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-15 18:30:18', '16-02-2021 12:00:49 AM', 1),
(176, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-15 20:06:42', '16-02-2021 04:12:34 AM', 1),
(177, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-15 22:47:55', '', 1),
(178, 0, 'admin', 0x3132372e302e302e3100000000000000, '2021-02-16 07:49:44', '', 0),
(179, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-16 07:54:33', '', 1),
(180, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-16 09:10:17', '16-02-2021 11:56:05 PM', 1),
(181, 0, 'admin', 0x3132372e302e302e3100000000000000, '2021-02-16 18:26:35', '17-02-2021 01:11:42 AM', 0),
(182, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-16 19:41:46', '', 1),
(183, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-17 08:39:00', '17-02-2021 02:09:49 PM', 1),
(184, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-17 09:12:27', '', 1),
(185, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-17 21:13:48', '', 1),
(186, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-17 22:14:23', '18-02-2021 04:05:08 AM', 1),
(187, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-18 11:44:32', '', 1),
(188, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-18 16:40:07', '18-02-2021 10:19:51 PM', 1),
(189, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-18 22:01:05', '19-02-2021 03:34:08 AM', 1),
(190, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-19 12:12:54', '19-02-2021 05:46:26 PM', 1),
(191, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-19 12:42:37', '', 1),
(192, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-20 22:42:23', '21-02-2021 04:13:51 AM', 1),
(193, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-20 23:09:26', '21-02-2021 04:40:03 AM', 1),
(194, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 08:16:25', '21-02-2021 01:49:54 PM', 1),
(195, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 08:24:10', '21-02-2021 01:56:04 PM', 1),
(196, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 08:26:14', '', 1),
(197, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 08:35:57', '21-02-2021 02:05:58 PM', 1),
(198, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 08:36:35', '', 1),
(199, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 08:51:43', '', 1),
(200, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 09:27:55', '', 1),
(201, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 09:42:56', '', 1),
(202, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 10:49:52', '21-02-2021 05:31:46 PM', 1),
(203, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 12:01:51', '', 1),
(204, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 17:50:51', '22-02-2021 12:01:35 AM', 1),
(205, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 18:31:43', '22-02-2021 12:02:35 AM', 1),
(206, 6, 'alaa@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 18:33:08', '22-02-2021 12:24:52 AM', 1),
(207, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 18:54:56', '22-02-2021 12:26:45 AM', 1),
(208, 6, 'alaa@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 18:56:54', '28-02-2021 02:15:09 AM', 1),
(209, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 19:00:08', '22-02-2021 12:30:33 AM', 1),
(210, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 19:06:22', '22-02-2021 12:40:24 AM', 1),
(211, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 19:11:46', '22-02-2021 01:02:23 AM', 1),
(212, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 20:22:49', '22-02-2021 01:54:07 AM', 1),
(213, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 20:24:10', '22-02-2021 01:54:36 AM', 1),
(214, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-21 22:33:16', '', 1),
(215, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-22 01:29:32', '22-02-2021 07:01:03 AM', 1),
(216, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-22 07:26:44', '22-02-2021 01:01:23 PM', 1),
(217, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-22 07:32:10', '22-02-2021 01:04:33 PM', 1),
(218, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-22 07:35:14', '22-02-2021 01:07:11 PM', 1),
(219, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-22 07:47:10', '22-02-2021 01:17:22 PM', 1),
(220, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:47:32', '', 0),
(221, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:47:40', '', 0),
(222, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:47:44', '', 0),
(223, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:47:56', '', 0),
(224, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:50:12', '', 0),
(225, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:51:13', '', 0),
(226, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:51:19', '', 0),
(227, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:51:39', '', 0),
(228, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:54:57', '', 0),
(229, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:55:04', '', 0),
(230, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:55:14', '', 0),
(231, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:56:19', '', 0),
(232, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:57:27', '', 0),
(233, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 01:57:48', '', 0),
(234, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 01:59:21', '', 1),
(235, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 01:59:44', '24-02-2021 07:29:49 AM', 1),
(236, 0, '', 0x3132372e302e302e3100000000000000, '2021-02-24 02:00:48', '', 0),
(237, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 02:01:50', '', 1),
(238, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 02:03:16', '24-02-2021 07:33:18 AM', 1),
(239, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 02:04:31', '', 1),
(240, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 02:04:42', '', 1),
(241, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 06:54:51', '', 1),
(242, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 07:08:13', '24-02-2021 12:40:12 PM', 1),
(243, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 07:10:49', '24-02-2021 01:01:18 PM', 1),
(244, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 09:21:27', '24-02-2021 02:52:02 PM', 1),
(245, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 10:04:51', '24-02-2021 03:35:59 PM', 1),
(246, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 10:24:24', '24-02-2021 03:54:32 PM', 1),
(247, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 11:43:18', '24-02-2021 05:13:25 PM', 1),
(248, 0, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 11:49:46', '', 0),
(249, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 11:49:52', '24-02-2021 05:19:56 PM', 1),
(250, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 11:50:36', '24-02-2021 05:20:43 PM', 1),
(251, 5, 'halmor@isoeducation.edu.jo', 0x3132372e302e302e3100000000000000, '2021-02-24 11:52:30', '03-09-2021 02:03:30 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` bigint(11) DEFAULT NULL,
  `address` tinytext DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` blob DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `address`, `State`, `country`, `pincode`, `userImage`, `regDate`, `updationDate`, `status`) VALUES
(5, 'husam', 'halmor@isoeducation.edu.jo', 'aa19ef2047f88d21e592509fe43f9117', 796463366, NULL, NULL, NULL, NULL, NULL, '2021-01-21 10:47:55', NULL, 1),
(6, 'alaa abu shakra', 'alaa@isoeducation.edu.jo', 'aa19ef2047f88d21e592509fe43f9117', 753452342, NULL, NULL, NULL, NULL, NULL, '2021-02-21 18:33:01', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academy`
--
ALTER TABLE `academy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `behave`
--
ALTER TABLE `behave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus2`
--
ALTER TABLE `bus2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `complaintremark`
--
ALTER TABLE `complaintremark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eacademic`
--
ALTER TABLE `eacademic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebus`
--
ALTER TABLE `ebus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fbaccount`
--
ALTER TABLE `fbaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it`
--
ALTER TABLE `it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location2`
--
ALTER TABLE `location2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `percent`
--
ALTER TABLE `percent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private`
--
ALTER TABLE `private`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privateattend`
--
ALTER TABLE `privateattend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisoracademic`
--
ALTER TABLE `supervisoracademic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisorbus`
--
ALTER TABLE `supervisorbus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisoredu`
--
ALTER TABLE `supervisoredu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisorguide`
--
ALTER TABLE `supervisorguide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisorit`
--
ALTER TABLE `supervisorit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisormoney`
--
ALTER TABLE `supervisormoney`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  ADD PRIMARY KEY (`complaintNumber`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academy`
--
ALTER TABLE `academy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `behave`
--
ALTER TABLE `behave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bus2`
--
ALTER TABLE `bus2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `complaintremark`
--
ALTER TABLE `complaintremark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `eacademic`
--
ALTER TABLE `eacademic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ebus`
--
ALTER TABLE `ebus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edu`
--
ALTER TABLE `edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fbaccount`
--
ALTER TABLE `fbaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `it`
--
ALTER TABLE `it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `location2`
--
ALTER TABLE `location2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `percent`
--
ALTER TABLE `percent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `private`
--
ALTER TABLE `private`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `privateattend`
--
ALTER TABLE `privateattend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervisoracademic`
--
ALTER TABLE `supervisoracademic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supervisorbus`
--
ALTER TABLE `supervisorbus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supervisoredu`
--
ALTER TABLE `supervisoredu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervisorguide`
--
ALTER TABLE `supervisorguide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervisorit`
--
ALTER TABLE `supervisorit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supervisormoney`
--
ALTER TABLE `supervisormoney`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  MODIFY `complaintNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
