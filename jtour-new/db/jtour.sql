-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 09:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jtour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(55) NOT NULL,
  `fullname` varchar(55) COLLATE utf8_bin NOT NULL,
  `email` varchar(55) COLLATE utf8_bin NOT NULL,
  `password` varchar(55) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'admin2', 'admin2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(55) NOT NULL,
  `name` varchar(55) COLLATE utf8_bin NOT NULL,
  `image` varchar(55) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `image`) VALUES
(1, 'Amman', 'amman-small.png'),
(2, 'Aqaba', 'aqaba-small.png'),
(3, 'Salt', 'salt-small.png'),
(4, 'Ajloun', 'ajloun-small.png'),
(5, 'Jarash', 'jarash-small.png'),
(6, 'Karak', 'karak-small.png'),
(7, 'Irbid', 'Irbid-small.png'),
(8, 'Tafilah', 'tafilah-small.png'),
(9, 'Ma\'an', 'maan-small.png'),
(10, 'Madaba', 'madaba-small.png'),
(11, 'Zarqa', 'zarqa-small.png'),
(12, 'Mafraq', 'mafraq-small.png');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `placename` varchar(55) COLLATE utf8_bin NOT NULL,
  `detailsid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `userid`, `placename`, `detailsid`) VALUES
(95, 1, 'Aqaba Red sea', 16),
(96, 1, 'Citadel', 3),
(97, 1, 'Aqaba Castle', 17),
(98, 1, 'Aqaba Marina Park', 18),
(99, 1, 'Iskandarani Cafe', 38),
(100, 1, 'Alkhawaja cafe', 65),
(103, 1, 'Nasim', 13),
(104, 1, 'Down Town', 6);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(55) NOT NULL,
  `name` varchar(55) COLLATE utf8_bin NOT NULL,
  `image` varchar(55) COLLATE utf8_bin NOT NULL,
  `cityname` varchar(55) COLLATE utf8_bin NOT NULL,
  `type` varchar(55) COLLATE utf8_bin NOT NULL,
  `details` varchar(15000) COLLATE utf8_bin NOT NULL,
  `location` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `image`, `cityname`, `type`, `details`, `location`) VALUES
(1, 'Roman Theater', 'Amman-Roman-Theatre.jpg', 'Amman', 'Tourist', 'The theater is built into the side of a hill and has a semi-circular shape, with three tiers of seating and a stage at the bottom. The walls of the theater are decorated with carvings and reliefs, and there are several underground passageways and chambers beneath the stage.', 'https://goo.gl/maps/saSTjBppsiNh9P2bA'),
(2, 'Darat Al Funun', 'darat-alfunun.jpg', 'Amman', 'Tourist', 'Darat Al funun is a famous place in amman where you  can find the best artist things about amman with also the ability of making your own artist and display it in it, you can also learn many different artists such as music, painting and others inside Darat Al funun', ''),
(3, 'Citadel', 'citadel-big.jpg', 'Amman', 'Tourist', 'The Amman Citadel (Arabic: جبل القلعة, romanized: Jabal Al-Qal\'a) is an archeological site at the center of downtown Amman, the capital of Jordan. The L-shaped hill is one of the seven hills (jabals) that originally made up Amman.', ''),
(4, 'Jordan Museum', 'museum-big.png', 'Amman', 'Tourist', 'The Jordan Museum is located in Ras Al-Ein district of Amman, Jordan. Built in 2014, the museum is the largest museum in Jordan and hosts the country\'s most important archaeological findings.', ''),
(5, 'Mushatta Palace', '881088.jpg', 'Amman', 'Tourist', 'Qasr Mushatta (Arabic: قصر المشتى, ', ''),
(6, 'Down Town', 'Downtown-Amman-Jordan-at-dusk..jpg', 'Amman', 'Tourist', 'The Balad is the oldest section of the city. It is believed to have first been inhabited during the Neolithic period (around 6500 B.C.).The seven jabals (hills) around it were occupied during the same time and formed the perimeter of the young city. The Amman Citadel sits atop Citadel Hill.', ''),
(8, 'Rainbow Street', 'amman-rainbow-street-5.jpg', 'Amman', 'Tourist', 'Rainbow Street in Amman is a promenade of restaurants and shops that is popular with both locals and tourists alike. From cafes to luxury restaurants, Rainbow Street has a large number of places to eat. The food here has a good reputation and it is a great place to meet fellow travelers and share stories with the locals.', ''),
(9, 'King Hussein Mosque', 'hussein-big.png', 'Amman', 'Religous', 'King Hussein Bin Talal Mosque, better known as the King Hussein Mosque, is the largest mosque in Jordan. Not to be confused with the 1924 Grand Al-Husseini Mosque, also known as King Hussein Mosque, in Downtown Amman.', ''),
(10, 'The Islamic Museum', 'islamic-big.png', 'Amman', 'Religous', ' Antiquities in the Amman Citadel on a hill called Jabal al-Qalaa. The building area is 525 square meters and is built on two floors. The ground floor is used for storage, and the first floor includes a display area that consists of three exhibition halls and administrative offices.', ''),
(11, 'Paia Cafe', 'paia-big.png', 'Amman', 'Cafe', 'PAIA is a place in Hawaii and PAIA Cafe and Restaurant in Amman adopted that name and strives to bring you great food, coffee, argeela and a wonderful experience as if you were on a faraway island yourself. PAIA Amman recently opened its doors on Abdallah Ghosha street, opposite of Total gas station. It is a double story big place with lots of ligh', ''),
(12, 'Books at Cafe', 'books-big.png', 'Amman', 'Cafe', 'Books at Cafe is a place in Hawaii and PAIA Cafe and Restaurant in Amman adopted that name and strives to bring you great food, coffee, argeela and a wonderful experience as if you were on a faraway island yourself. PAIA Amman recently opened its doors on Abdallah Ghosha street, opposite of Total gas station. It is a double story big place with lot', ''),
(13, 'Nasim', 'nasim-big.png', 'Amman', 'Resturants', 'Enjoy an authentic menu focusing on the freshest regional produce and traditional recipes executed impeccably in a friendly, homely atmosphere. Whether you\'re going out to dinner with the family, or hanging out with friends to enjoy an evening shisha, Nasim Restaurant ', ''),
(16, 'Aqaba Red sea', 'Jordan-Aqaba-Red-Sea-swimmig.jpg', 'Aqaba', 'Tourist', ' The port city of Aqaba overlooks the Red Sea in Jordan and is known for the extensive watersports, snorkeling and scuba diving. In fact, the Red Sea is famous for the coral reef, attracting divers from around the world eager to see the well-known Yamanieh coral reef which is found in the Aqaba Marine Park.', 'https://goo.gl/maps/bAwepeKevYDc2Q4g6'),
(17, 'Aqaba Castle', 'caption.jpg', 'Aqaba', 'Tourist', ' Every corner in Aqaba tells  a tale. The Aqaba Fort offers a glimpse into Jordan’s history. It dates back to the region of the Mamluke Sultan Qanswah el-Ghawri (1501-1517 AD). The fort was used and renovated during many historical dynasties from the Mamluks themselves to Ottomans. Situated on the coastline, it would later on serve as vital base for overthrowing the Ottomans Empire.\r\n\r\nThe fort was part of the pilgrimage stops aligning the Northern Way (Darb Al-Sham).Larger than the other forts, considering its location at the Red Sea. Pilgrims and travelers would flock to the area seeking safety and lodging within the gates of the fort, which offered compartments and accommodation for passers-by.\r\n\r\n The fort was designed in a rectangular 56.5m x 58m shape, with towers protruding from the corners, from the middle of the northern side stood the two towered gatehouse. The towers where structured with around internal space, and a polygonal exterior. However, with time they were rebuilt to take an overall rounded structure.', 'https://goo.gl/maps/gWF7a4a7EfuUgyNp6'),
(18, 'Aqaba Marina Park', 'image_processing20190731-4-7rfbuv.jpg', 'Aqaba', 'Tourist', ' Complete your tour of Aqaba and indulge in the warm and clear waters by paying a visit to Aqaba Marine Park. It is located south of Aqaba. Its aim is to preserve the marine biosphere and it habitants for future generations. The park aim to encourage people to commit, to support the rules and regulations implemented to protect aquatic environments, habitants, and natural wonders. The park operates 19 diving sites within the coastline, with fully equipped facilities where visitors can explore different aquatic marvels.\r\n\r\nThe coral reef is a crucial habitat for various fish and aquatic organisms. Jordanian waters are home to more than 450 species of fish, and more than 127 types of coral formation. Within the shallow waters of 0.5m to 40m, there are different types of sea grass, which are a vital environment for fish. Aqaba Marine Park is managed by ASEZA; it is located south of Aqaba 15 km towards the city center, expanding 7km in length.', 'https://goo.gl/maps/7dWkVZtMMaZST4gU7'),
(19, 'Aqaba Museum', '1.jpg', 'Aqaba', 'Religous', ' This museum is located in the former house of Sharif Hussein bin Ali, it  includes artefacts from excavated sites in the Aqaba district; they range in date from the mid-7th millennium BC to the beginning of the AD 12th century. Particularly important are the ceramic and steatite vessels excavated from Islamic Ayla.', 'https://goo.gl/maps/EohPqFxUxpwm1Zr26'),
(20, 'Aqaba Music Museum', 'semsemieh1new.jpg', 'Aqaba', 'Tourist', ' Keep an ear out for the very Simsimiyya music; a traditional plucked lyre used in Egypt, Jordan and Yemen and mostly used by Bedouins as a social instrument. Music is everyone as you wander through the center of Aqaba and souk which comes accompanied by live music, food, and colourful handicrafts.', ''),
(21, 'Aqaba South Beach', 'activities_07.jpg', 'Aqaba', 'Tourist', 'Aqaba South Beach is a popular beach located in the city of Aqaba, Jordan. It is located on the Red Sea and is known for its clear, warm waters and sandy beaches. The beach is popular for swimming, sunbathing, and other beach activities. There are also several restaurants, cafes, and shops located near the beach, as well as a number of hotels and resorts that offer accommodations for visitors. The beach is also a popular spot for snorkeling and diving, as the waters around Aqaba are home to a variety of marine life, including coral reefs and colorful fish.', 'https://goo.gl/maps/JUS3V3ezhQqudwQ66'),
(22, 'Tala Bay', 'tala-bay-vacation-homes.jpg', 'Aqaba', 'Tourist', ' Tala Bay is a residential and tourist development located on the Red Sea in Aqaba, Jordan. It is known for its beautiful beaches and luxury villas, as well as its wide range of recreational and entertainment options. The development includes a variety of hotels, resorts, and residential properties, as well as a number of restaurants, cafes, and shops. Tala Bay is also home to a marina and a number of recreational facilities, including a golf course and tennis courts. The development is a popular destination for both local and international visitors, who come to enjoy the warm climate and beautiful surroundings.', 'https://goo.gl/maps/fTHSrfenEer3AXfs5'),
(23, 'Aqaba Church', 'one-of-the-many-churches.jpg', 'Aqaba', 'Religous', ' Aqaba Church is a church located in the city of Aqaba, Jordan. It serves the Christian community in Aqaba and the surrounding area. The church is located in the center of the city and is easily accessible by car or public transportation. It is a popular tourist attraction for visitors interested in the history and culture of the region, as well as for those who want to attend religious services while traveling. The church may have additional information about its history, services, and other details available on its website or through a local tourism agency.', 'https://goo.gl/maps/kP1Qa7xjPdwC8pNV8'),
(24, 'Bethany', 'baptism-world-heritage-jordan.jpg', 'Aqaba', 'Religous', 'Bethany Beyond the Jordan is a site located in the Hashemite Kingdom of Jordan, on the eastern bank of the Jordan River. It is believed to be the place where John the Baptist baptized Jesus, as described in the New Testament of the Bible. The site is considered to be a holy place for Christians, and is a popular destination for religious pilgrimages. It is also a popular tourist attraction for visitors interested in the history and culture of the region.\r\n\r\nThe site includes a number of ancient churches and monasteries, as well as a modern visitor center. It is located a short drive from the city of Aqaba, and is easily accessible by car or public transportation. The site may have additional information about its history, attractions, and other details available on its website or through a local tourism agency. ', 'https://goo.gl/maps/SisnhfEbBBuZ2w448'),
(25, 'MELANGE Coffee', 'outdoor.jpg', 'Aqaba', 'Cafe', ' This would be an amazing comfort place for anyone They offer great coffee and a cozy atmosphere An amazing place to work and study or to meet up with friends. I can’t stress enough how friendly the staff are. Truly an incredible experience!', 'https://goo.gl/maps/7fUiBGati3EebQvq9'),
(26, 'Azad Cafe', 'unnamed.jpg', 'Aqaba', 'Cafe', ' Azad Restaurant and Cafe is a popular restaurant and cafe located in Aqaba, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant and cafe offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Aqaba, making it easily accessible by car or public transportation. You can find more information about Azad Restaurant and Cafe, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/sXs3BXsT3pRxEYDS8'),
(27, 'AM PM Restaurant', 'AM PM Terrace (1).jpg', 'Aqaba', 'Resturants', ' AM PM Restaurant is a popular restaurant located in Aqaba, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Aqaba, making it easily accessible by car or public transportation. You can find more information about AM PM Restaurant, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/cBQEYZGePkqzJMa7A'),
(28, 'Pachi pizza & pasta', '2021-06-15.jpg', 'Aqaba', 'Resturants', ' Pachi Pizza & Pasta is a popular restaurant located in Aqaba, Jordan. It is known for its wide range of pizza and pasta dishes, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Italian dishes, as well as other international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Aqaba, making it easily accessible by car or public transportation. You can find more information about Pachi Pizza & Pasta, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/nPVZ8TLVwaRRnntD8'),
(31, 'Salt Museum', 'salt-m.jpg', 'Salt', 'Tourist', ' The Salt Archaeological Museum is a museum located in the city of Salt, Jordan. It is dedicated to showcasing the history and culture of the region, and features a variety of exhibits on topics such as ancient civilizations, art, and archaeology. The museum is located in the center of Salt and is easily accessible by car or public transportation. It is a popular tourist attraction for visitors interested in the history and culture of the region, and is open to the public on a regular schedule. The museum may have additional information about its exhibits, opening hours, and other details available on its website or through a local tourism agency.', 'https://goo.gl/maps/GWyGJPLnzCVXfRCi8'),
(32, 'Mismar House', 'unnamed (1).jpg', 'Salt', 'Tourist', ' Mismar House is a historic house located in the city of Salt, Jordan. It is a popular tourist attraction for visitors interested in the history and culture of the region. The house is believed to be one of the oldest houses in Salt and is an example of traditional Jordanian architecture. It is located in the center of the city and is easily accessible by car or public transportation. The house may have additional information about its history, tours, and other details available on its website or through a local tourism agency.', 'https://goo.gl/maps/yiqkW5yr4rVqgJAv8'),
(33, 'Salt Folklore Museum', '20181222_151929.jpg', 'Salt', 'Tourist', ' The Salt Folklore Museum is a museum located in the city of Salt, Jordan. It is dedicated to showcasing the traditional culture and crafts of the region, and features a variety of exhibits on topics such as traditional clothing, jewelry, and pottery. The museum is located in the center of Salt and is easily accessible by car or public transportation. It is a popular tourist attraction for visitors interested in the culture and traditions of the region, and is open to the public on a regular schedule. The museum may have additional information about its exhibits, opening hours, and other details available on its website or through a local tourism agency.', 'https://goo.gl/maps/GzJpLzPFtP3LpEKW6'),
(34, '‪Prophet Shoaib Shrine‬', 'mosque-of-shoaib-prophet.jpg', 'Salt', 'Religous', ' Prophet Shoaib is an important figure in Islam, and is revered as a prophet in the Abrahamic tradition. According to Islamic tradition, Prophet Shoaib was a prophet who was sent by God to the people of Midian, a region that is now located in present-day Saudi Arabia. He is believed to have preached monotheism and urged the people of Midian to worship only one God.\r\n\r\nIt is not uncommon for places associated with important religious figures, such as shrines or mosques, to become destinations for religious tourism. It is possible that the Prophet Shoaib Shrine is a site that is visited by Muslims who are interested in learning more about the life and teachings of Prophet Shoaib, or who wish to pay their respects to this important figure in Islamic history.', 'https://goo.gl/maps/UmNoba4kB7rTfrSY9'),
(35, ' Shrine of Yusha', '2022-12-05.jpg', 'Salt', 'Religous', ' Prophet Yusha, also known as Joshua, is an important figure in Judaism, Christianity, and Islam. He is revered as a prophet and a military leader, and is best known for leading the Israelites into the Promised Land after the death of Moses.According to tradition, Prophet Yusha was buried in the city of Timnath-Serah, which is located in present-day Palestine. It is possible that the Shrine of Prophet Yusha, or Joshua, is a site that is associated with this location and is visited by people who are interested in the life and teachings of Prophet Yusha. It is also possible that the shrine is a place of worship for those who follow the Abrahamic faiths and believe in the teachings of Prophet Yusha.', 'https://goo.gl/maps/YWTSSNwjdC2t6ksp7'),
(37, 'Akthams Cafe', 'download.jpeg', 'Salt', 'Cafe', '  Akthams Cafe is a popular restaurant located in Salt, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Salt, making it easily accessible by car or public transportation. You can find more information about Akthams Cafe, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/Rf7za1wCrhAxhmHT8'),
(38, 'Iskandarani Cafe', '2022-05-31.jpg', 'Salt', 'Cafe', 'Iskandarani Café is a popular restaurant located in Salt, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Salt, making it easily accessible by car or public transportation. You can find more information about Iskandarani Café, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/pjZYckgDmVTqTDMPA'),
(39, ' Al-osmali Restaurant', '2021-08-15.jpg', 'Salt', 'Resturants', 'Al-osmali Restaurant is a popular restaurant located in Salt, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Salt, making it easily accessible by car or public transportation. You can find more information about  Al-osmali Restaurant, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/8CusU2j8iEzV7qdSA'),
(40, 'Zyara Restaurant', 'xxx.jpg', 'Salt', 'Resturants', ' Zyara Restaurant is a popular restaurant located in Salt, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Salt, making it easily accessible by car or public transportation. You can find more information about Zyara Restaurant, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/McwPXhsmNB3kgV367'),
(41, 'Ajloun Castle', '5f.jpg', 'Ajloun', 'Tourist', ' Ajloun Castle, also known as the Castle of the Moors or the Castle of Ijlun, is a 12th-century castle located in Ajloun, Jordan. It was built by the Ayyubid sultan Saladin in the late 12th century to control the iron mines of Ajloun and defend against Crusader invasions. The castle is situated on a hilltop in the north of Ajloun, offering panoramic views of the surrounding countryside. It consists of a main square tower, surrounded by a series of smaller towers and walled enclosures. The castle is well-preserved and open to visitors, who can explore its interior and climb to the top of the main tower for views of the surrounding landscape. Ajloun Castle is a popular tourist attraction in Jordan and is considered one of the best-preserved castles in the country.', 'https://goo.gl/maps/oeNsXttakJcU3tCe7'),
(42, 'Olive Press Museum', '2021-12-12.jpg', 'Ajloun', 'Tourist', ' The Olive Press Museum is a museum in Ajloun, Jordan, dedicated to the history and process of olive oil production. It is located in the center of Ajloun and is housed in a restored 19th-century olive press. The museum exhibits a variety of antique olive oil production equipment, including millstones, presses, and storage jars, as well as tools used for harvesting and processing olives. It also features displays on the history of olive oil production in Jordan and its cultural significance. The Olive Press Museum is a popular attraction for visitors to Ajloun and is a good place to learn about the history and importance of olive oil production in the region.', 'https://goo.gl/maps/gZQnRFUvpY2wrYzi8'),
(43, 'The Forest of Ajloun', '2022-12-14.jpg', 'Ajloun', 'Tourist', ' The Forest of Ajloun is a protected forest area located in the north of Ajloun, Jordan. It covers an area of approximately 15,000 hectares and is home to a variety of plant and animal species, including oak trees, pines, and Mediterranean cypresses, as well as wild boars, wolves, hyenas, and over 150 species of birds. The forest is a popular destination for nature enthusiasts, who can enjoy hiking, birdwatching, and picnicking in the beautiful surroundings. The Forest of Ajloun is also home to several historical and cultural sites, including the Ajloun Castle and several ancient churches. It is considered an important ecological and cultural resource in Jordan and is protected by the government.', 'https://goo.gl/maps/P5ix6wJkM9ZErFHt6'),
(44, 'Ajloun Church', '2017-12-07.jpg', 'Ajloun', 'Religous', '  a Greek Orthodox church located in the center of Ajloun, dating back to the 12th century. The church is named after St. George, the patron saint of Ajloun.', 'https://goo.gl/maps/oheDTtEAhkqWQP339'),
(45, 'Brazilian Coffee House', '2021-10-01.jpg', 'Ajloun', 'Cafe', 'Brazilian Coffee House is a popular restaurant located in Ajloun, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Ajloun, making it easily accessible by car or public transportation. You can find more information about Brazilian Coffee House, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/ayWi1mkQJzNc6oG68'),
(46, 'Daliy Dose Coffee', '2018-10-07.jpg', 'Ajloun', 'Cafe', 'Daliy Dose Coffee is a popular restaurant located in Ajloun, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Ajloun, making it easily accessible by car or public transportation. You can find more information about Daliy Dose Coffee, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/eQJ6jNfvtig7yZMv8'),
(47, 'Ajloun Restaurant', '2020-01-17.jpg', 'Ajloun', 'Resturants', ' Aljloun Restaurant is a popular restaurant located in Ajloun, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Ajloun, making it easily accessible by car or public transportation. You can find more information about  Ajloun Restaurant, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/mbermWMKJRW4Wznj8'),
(48, 'Royal Restaurant', 'download (1).jpeg', 'Ajloun', 'Resturants', ' Royal Academy Restaurant is a popular restaurant located in Ajloun, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Ajloun, making it easily accessible by car or public transportation. You can find more information about Royal Academy Restaurant , including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/xiHa2iZfibFDJxfM9'),
(49, 'Roman City of Jerash', '2022-11-02.jpg', 'Jarash', 'Tourist', '  a well-preserved Roman city located in the center of Jarash, featuring a number of ancient ruins, including a forum, temples, amphitheater, and arches.', 'https://goo.gl/maps/1hFk3indY6Pn28dd9'),
(50, 'The Temple of Artemis', '20220929_144609.jpg', 'Jarash', 'Tourist', ' The Temple of Artemis is an ancient temple located in the center of Jarash, Jordan. It is dedicated to the Greek goddess Artemis, who was worshipped as a huntress and the protectress of women. The temple is believed to have been built in the 2nd century AD and is one of the best-preserved temples in Jordan. It features a colonnaded front with Corinthian columns, as well as an altar and a cult statue of Artemis. The temple is a popular tourist attraction in Jarash and is a good place to learn about the ancient Greek religion and culture.', 'https://goo.gl/maps/tmqeadWcjeNedBE68'),
(51, 'The Temple of Zeus', '2022-10-30.jpg', 'Jarash', 'Tourist', ' The Temple of Zeus is an ancient temple located in the center of Jarash, Jordan. It is dedicated to the Greek god Zeus, who was revered as the king of the gods and the god of thunder and lightning. The temple is believed to have been built in the 2nd century AD and is one of the best-preserved temples in Jordan. It features a colonnaded front with Corinthian columns, as well as an altar and a cult statue of Zeus. The temple is a popular tourist attraction in Jarash and is a good place to learn about the ancient Greek religion and culture.', 'https://goo.gl/maps/SuSaypBuL3TqbEWj8'),
(52, 'The South Theater', '2022-06-14.jpg', 'Jarash', 'Tourist', ' The South Theater is an ancient Roman theater located in the south of Jarash, Jordan. It is a well-preserved theater, known for its stage and seating area, which are made of finely carved stone. The theater was built in the 2nd century AD and could seat up to 3,000 spectators. It was used for a variety of entertainment events, including plays, musical performances, and gladiator games. The South Theater is a popular tourist attraction in Jarash and is a good place to learn about the ancient Roman culture and society. Visitors can explore the theater and learn about its history through guided tours and interpretive displays.', 'https://goo.gl/maps/22832chyFKK5YU3t5'),
(53, 'Cosmas Church', '2022-11-15.jpg', 'Jarash', 'Religous', ' a Greek Orthodox church located in the center of Jarash, believed to have been built in the 4th century AD. The church is named after two early Christian saints, Cosmas and Damian, who were revered as martyrs and healers.', 'https://goo.gl/maps/ekDebZLPfVb8KaCe8'),
(54, 'The Shrine of Hud', 'hud.jpg', 'Jarash', 'Religous', ' a shrine located in the south of Jarash, dedicated to Hud, a prophet in Islam. The shrine is a popular place of pilgrimage for believers.', 'https://goo.gl/maps/5VTsWj64bPB8qeneA'),
(55, 'Cello cafe', '2022-12-01.jpg', 'Jarash', 'Cafe', ' Cello cafe is a popular restaurant located in Jarash, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Jarash, making it easily accessible by car or public transportation. You can find more information about Cello cafe, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/NMPXB8HasA7dbLks7'),
(56, 'Gravity Coffee', 'DSC_9137-01.jpg', 'Jarash', 'Cafe', 'Gravity Coffee is a popular restaurant located in Jarash, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Jarash, making it easily accessible by car or public transportation. You can find more information about Gravity Coffee, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.\r\n', 'https://goo.gl/maps/hPa1sCBzASbp2wZ28'),
(57, 'Alwadi Restaurant', 'res.jpg', 'Jarash', 'Resturants', ' Jaret Alwadi Restaurant is a popular restaurant located in Jarash, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Jarash, making it easily accessible by car or public transportation. You can find more information about  Jaret Alwadi Restaurant, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/peyZCmnzmB6syzX36'),
(58, 'JGate Restaurant', 'IMG_20171022_134359.jpg', 'Jarash', 'Resturants', 'Jerash Gate Restaurant is a popular restaurant located in Jarash, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Jarash, making it easily accessible by car or public transportation. You can find more information about  Jerash Gate Restaurant, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/pe9QfczxcZyaB7Ew9'),
(59, 'Karak Castle', '2022-07-10.jpg', 'Karak', 'Tourist', ' Karak Castle is a Crusader castle located in the city of Karak in Jordan. It was built in the 12th century by the Crusaders and was used as a defensive fortress against Muslim attacks. The castle is built on a hill overlooking the city and offers beautiful views of the surrounding area. It is a popular tourist attraction in Karak and is known for its well-preserved architecture and historical significance. The castle is open to the public and can be visited daily.', 'https://goo.gl/maps/jSe29LbEqpLtcUh58'),
(60, 'Karak Museum', '2022-12-12.jpg', 'Karak', 'Tourist', ' Karak Archaeological Museum  houses a collection of artifacts and relics from the ancient city of Al-Karak, including pottery, coins, and sculptures.', 'https://goo.gl/maps/wTMLFchQ36FKStwK9'),
(61, 'Salahuddin Mosque', '2022-01-04.jpg', 'Karak', 'Religous', ' Salahuddin Al-Ayoubi Mosque is a mosque located in the city of Karak in Jordan. It is named after Saladin, a Muslim military leader who was born in the city of Karak in the 12th century. Saladin is known for his role in defeating the Crusaders in the Middle East and is highly regarded in Islamic history. The mosque is a popular tourist attraction in Karak and is known for its beautiful architecture. It is open to the public and can be visited daily.', 'https://goo.gl/maps/1b1RYLao4AYVHeEAA'),
(62, 'Al omari Mosque', '2021-07-02.jpg', 'Karak', 'Religous', ' Al Omari Mosque is a mosque located in the city of Karak in Jordan. It is named after Al-Omari, a companion of the Prophet Muhammad who is believed to have preached in the city of Karak. The mosque is a popular tourist attraction in Karak and is known for its beautiful architecture. It is open to the public and can be visited daily.', 'https://goo.gl/maps/iHbTF5ev6EdM8a7s8'),
(63, 'St. George Church', 'IMG_20220425_105155.jpg', 'Karak', 'Religous', 'St. George Church is a church located in the old city of Karak in Jordan. It is named after Saint George, the patron saint of the city. The church is a popular tourist attraction in Karak and is known for its beautiful architecture. It is a popular pilgrimage site for Christians and is a place of worship for the local Christian community.', 'https://goo.gl/maps/BqSBPu7gsQr61BSx6'),
(64, 'Dhofar Coffee', '2020-10-03.jpg', 'Karak', 'Cafe', 'Dhofar Coffee is a popular restaurant located in Karak, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Karak, making it easily accessible by car or public transportation. You can find more information about Dhofar Coffee, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.\r\n', 'https://goo.gl/maps/GBeZaS5nhcZCBehr9'),
(65, 'Alkhawaja cafe', '2019-03-19.jpg', 'Karak', 'Cafe', ' Alkhawaja cafe is a popular restaurant located in Karak, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Karak, making it easily accessible by car or public transportation. You can find more information about Alkhawaja cafe, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/79ZvrT8GSzVEZqo19'),
(66, 'Kir Heres Restaurant', '2022-09-09.jpg', 'Karak', 'Resturants', 'Kir Heres Restaurant is a popular restaurant located in Karak, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Karak, making it easily accessible by car or public transportation. You can find more information about Kir Heres Restaurant, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/AWxB5xGa8DrT7ViK7'),
(67, 'Saraya Restaurant', '2021-09-25.jpg', 'Karak', 'Resturants', 'Saraya Restaurant is a popular restaurant located in Karak, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Karak, making it easily accessible by car or public transportation. You can find more information about  Saraya Restaurant, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/eDFRp6bgjgMHokhTA'),
(68, 'V Lounge & Restaurant', 'vlonge.jpg', 'Amman', 'Resturants', ' V Lounge & Restaurant is a popular restaurant located in Amman, Jordan. It is known for its wide range of dishes and drinks, as well as its cozy atmosphere and friendly service. The restaurant offers a variety of traditional Jordanian dishes, as well as international cuisine, to suit different tastes and preferences. It is a popular destination for both local and international visitors, and is located in the center of Amman, making it easily accessible by car or public transportation. You can find more information about  V Lounge & Restaurant, including its menu and opening hours, by contacting the restaurant directly or through a local tourism agency.', 'https://goo.gl/maps/i5QnPSVAihZ93Eme6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(55) NOT NULL,
  `fullname` varchar(55) COLLATE utf8_bin NOT NULL,
  `email` varchar(55) COLLATE utf8_bin NOT NULL,
  `password` varchar(55) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'husam', 'husamalmorr@gmail.com', '14e1b600b1fd579f47433b88e8d85291'),
(8, 'omar', 'omar@gmail.com', '14e1b600b1fd579f47433b88e8d85291');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
