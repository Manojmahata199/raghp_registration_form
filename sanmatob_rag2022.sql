-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2023 at 01:18 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanmatob_rag2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `quote` text,
  `img_path` varchar(150) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content1` text,
  `content2` text,
  `heading` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `quote`, `img_path`, `reg_date`, `content1`, `content2`, `heading`) VALUES
(1, 'वर्ष 1949 में स्थापित \"हिन्दी दैनिक सन्मार्ग\" पूर्वी भारत का सर्वाधिक प्रसारित और व्यापक रूप से पढ़ा जाने वाला समाचार पत्र है । इसका मुख्यालय कोलकाता में है । अपनी  76 वर्षों की उल्लेखनीय यात्रा में इसने पश्चिम बंगाल, उड़ीसा, बिहार और झारखंड में अपने 10 लाख पाठक बनाये हैं ।\r\n\"सन्मार्ग फाउंडेशन\"  \"हिन्दी दैनिक सन्मार्ग\" की सीएसआर शाखा है । इसका मुख्य उद्देश्य शिक्षा के क्षेत्र में कार्य करना  है,  साथ ही  देश के छात्रों  को हिन्दी के विकास और प्रचार-प्रसार कार्य में उत्कृष्टता लाने के लिए प्रोत्साहित करना है । \r\n\"राम अवतार गुप्त प्रतिभा पुरस्कार\" हमारे संस्थापक संपादक स्व. आर. ए. गुप्त को समर्पित है । इसकी स्थापना वर्ष 2006 में हुई  । इसका उद्देश्य उन छात्रों, शिक्षकों और संस्थानों को  प्रोत्साहित एवं पुरस्कृत करना है जो हिन्दी में  बेहतरीन कार्य कर रहे हैं । हमें यह बताते हुए गर्व की अनुभूति हो रही है कि हमने छात्रों, संकायों और संस्थानों में  हिन्दी के प्रति अभिरुचि बढ़ाने में मदद की है ।   हर वर्ष इसके आयोजन में आवेदकों की संख्या बढ़ती गयी  । वर्ष 2019 में 15000 से ज्यादा आवेदन हमें प्राप्त हुए, 250 पुरस्कार एवं हजारों प्रमाणपत्र प्रदान किये गये । इसके अतिरिक्त हम विद्यालय के वरिष्ठ हिन्दी शिक्षकों तथा हिन्दी में उत्कृष्ट परिणाम लाने वाले विद्यालयों को भी सम्मानित करते हैं ।\r\nवर्ष 2013 में हमने   पूरे बंगाल में इसका आयोजन प्रारंभ कर दिया । \r\n हमारा मुख्य उद्देश्य हिन्दी में उत्कृष्ट प्रदर्शन करने वाले छात्रों को प्रोत्साहित करना और हिन्दी के प्रति उनके मन में  गर्व की भावना को  जागृत करना है ।\r\nजो छात्र अपनी उच्च शिक्षा  हिन्दी में करना चाहते हैं , उन्हें हम छात्रवृत्ति भी प्रदान करते हैं ।\r\nहमें यह बताते हुए गर्व की अनुभूति हो रही है कि हमारा नवीनतम कदम है \"समार्ट विद्यार्थी \"।  यह पूरे बंगाल के हिन्दी माध्यम के विद्यालयों में अध्ययन कर रहे 9 लाख छात्रों को नि:शुल्क ई-​शिक्षा प्रदान करने का प्रयास   है । यह कार्य हम पश्चिम बंगाल सरकार के शिक्षा विभाग के सहयोग से कर रहे हैं । कोरोना महामारी को देखते हुए इसका आरंभ अप्रैल 2020 में किया गया ।', 'assets/images/about-us/', '2021-06-25 06:42:03', 'Sanmarg meaning the righteous path is the largest circulated Hindi daily in Eastern India, head\r\nquartered in Kolkata. Founded in 1949, it has built a 1million+ loyal reader database across West\r\nBengal, Jharkhand, Bihar &amp; Orissa. Keeping up with times Sanmarg enjoys a strong presence across\r\nall digital platforms.\r\nSanmarg foundation is the CSR wing of Sanmarg established with the aim of facilitating education.\r\nThe primary focus being on promoting excellence in Hindi amongst students, teachers and\r\ninstitutions.\r\nRam Awatar Gupt Pratibha Puraskar was initiated in 2006 by our founder editor the late R. A.\r\nGupta. and today the name symbolises &quot;Excellence &amp; Pride in Hindi&quot;. We proudly claim that we\r\nhelped increase interest towards the Hindi language in the youth of today.\r\nThe award ceremony accolades thousands of students, teachers and institution&#39;s for their work in\r\nHindi. Each edition is more memorable and expansive than the other. Today we have various\r\neditions across Bengal.\r\nThe cause is furthered by providing scholarships to students wanting to pursue Hindi for their higher\r\nstudies.\r\nWe practice what we believe in and this led to the birth of &quot;Smart Vidyarthi&quot; during the 2020\r\npandemic. It is an effort to impart free online education to 9 lakh+ students studying in Hindi\r\nmedium schools across Bengal. This is in partnership with the Government of West Bengal Department of\r\nEducation and was started in April 2020.', 'He lay on his armour-like  back, and if he lifted. ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing.', '&quot; हमारा सपना हर छात्र हिंदी को माने अपना &quot;');

-- --------------------------------------------------------

--
-- Table structure for table `aparajay_student_data`
--

CREATE TABLE `aparajay_student_data` (
  `id` int(2) NOT NULL,
  `form_date_time` varchar(111) NOT NULL,
  `reg_id` varchar(111) NOT NULL,
  `ip_address` varchar(111) NOT NULL,
  `reg_location` varchar(111) NOT NULL,
  `boardexam` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `disorder` varchar(111) NOT NULL,
  `phy_disorder_name` varchar(111) NOT NULL,
  `mental_disorder_name` varchar(111) NOT NULL,
  `disorder_detail` varchar(200) NOT NULL,
  `disorder_file` varchar(111) NOT NULL,
  `fname` varchar(111) NOT NULL,
  `lname` varchar(111) NOT NULL,
  `hname` varchar(111) NOT NULL,
  `hlname` varchar(111) NOT NULL,
  `student_photo_file` varchar(111) NOT NULL,
  `hname_correct` varchar(111) NOT NULL,
  `hname_file` varchar(111) NOT NULL,
  `student_gender` varchar(111) NOT NULL,
  `student_dob` varchar(100) NOT NULL,
  `student_email` varchar(111) NOT NULL,
  `student_mobile` varchar(111) NOT NULL,
  `board_roll_no` varchar(111) NOT NULL,
  `admit_card_file` varchar(111) NOT NULL,
  `school_name` varchar(111) NOT NULL,
  `school_address` varchar(200) NOT NULL,
  `other_school_name` varchar(111) NOT NULL,
  `other_school_address` varchar(200) NOT NULL,
  `school_medium` varchar(111) NOT NULL,
  `class` varchar(100) NOT NULL,
  `last_year_marks1` varchar(111) NOT NULL,
  `last_year_marks2` varchar(111) NOT NULL,
  `last_year_marks3` varchar(111) NOT NULL,
  `current_year_marks1` varchar(111) NOT NULL,
  `current_year_marks2` varchar(111) NOT NULL,
  `current_year_preboards` varchar(111) NOT NULL,
  `marksheet_one` varchar(100) NOT NULL,
  `marksheet_eleven` varchar(100) NOT NULL,
  `parent_name` varchar(111) NOT NULL,
  `parent_mobile` varchar(111) NOT NULL,
  `emergency_landline` varchar(111) NOT NULL,
  `parent_email` varchar(100) NOT NULL,
  `home_address` varchar(200) NOT NULL,
  `city` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `pincode` varchar(111) NOT NULL,
  `family_income` varchar(111) NOT NULL,
  `facebook_handle` varchar(111) NOT NULL,
  `twitter_handle` varchar(111) NOT NULL,
  `ragaward_source` varchar(111) NOT NULL,
  `ragaward_source_other` varchar(111) NOT NULL,
  `sanmarg_reader` varchar(100) NOT NULL,
  `hawker_name` varchar(111) NOT NULL,
  `hawker_telephone` varchar(111) NOT NULL,
  `rag_pariksha_participated` varchar(111) NOT NULL,
  `rag_pariksha_rollno` varchar(111) NOT NULL,
  `rag_pariksha_marks` varchar(111) NOT NULL,
  `rag_participated_chk` varchar(111) NOT NULL,
  `ankur` varchar(111) NOT NULL,
  `ankur_activity_textwork` varchar(200) NOT NULL,
  `ankur_activity_file` varchar(111) NOT NULL,
  `all_activity_file` varchar(100) NOT NULL,
  `yuva` varchar(111) NOT NULL,
  `marksheet_file` varchar(100) NOT NULL,
  `board_total_mark` varchar(100) NOT NULL,
  `board_hindi_mark` varchar(100) NOT NULL,
  `Board_hindi_mark_percent` varchar(100) NOT NULL,
  `qualified` enum('yes','no') NOT NULL DEFAULT 'no',
  `verified` enum('yes','no') NOT NULL DEFAULT 'no',
  `hindi_grade` varchar(100) NOT NULL,
  `hnd_tech_name` varchar(100) NOT NULL,
  `hnd_tech_mob` varchar(100) NOT NULL,
  `essay_file` varchar(100) NOT NULL,
  `essay_video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aparajay_student_data`
--

INSERT INTO `aparajay_student_data` (`id`, `form_date_time`, `reg_id`, `ip_address`, `reg_location`, `boardexam`, `category`, `disorder`, `phy_disorder_name`, `mental_disorder_name`, `disorder_detail`, `disorder_file`, `fname`, `lname`, `hname`, `hlname`, `student_photo_file`, `hname_correct`, `hname_file`, `student_gender`, `student_dob`, `student_email`, `student_mobile`, `board_roll_no`, `admit_card_file`, `school_name`, `school_address`, `other_school_name`, `other_school_address`, `school_medium`, `class`, `last_year_marks1`, `last_year_marks2`, `last_year_marks3`, `current_year_marks1`, `current_year_marks2`, `current_year_preboards`, `marksheet_one`, `marksheet_eleven`, `parent_name`, `parent_mobile`, `emergency_landline`, `parent_email`, `home_address`, `city`, `state`, `pincode`, `family_income`, `facebook_handle`, `twitter_handle`, `ragaward_source`, `ragaward_source_other`, `sanmarg_reader`, `hawker_name`, `hawker_telephone`, `rag_pariksha_participated`, `rag_pariksha_rollno`, `rag_pariksha_marks`, `rag_participated_chk`, `ankur`, `ankur_activity_textwork`, `ankur_activity_file`, `all_activity_file`, `yuva`, `marksheet_file`, `board_total_mark`, `board_hindi_mark`, `Board_hindi_mark_percent`, `qualified`, `verified`, `hindi_grade`, `hnd_tech_name`, `hnd_tech_mob`, `essay_file`, `essay_video`) VALUES
(1, '2023-05-04 15:45:04', '0000001', '136.232.70.46', 'Kolkata-Howrah,Hooghly', 'WBBSE', 'Aparajay', 'Physically Challenged', 'Cancer', '', 'I have Cancer', 'file1.pdf', 'Testing', 'Mahata', 'मनोज कुमार', 'महता', '', 'Yes', '', 'Male', '01-01-2006', 'manojmahatayt@gmail.com', '8637583151', '0000000000000000000001', 'file1.pdf', 'AGARPARA SABITRI MAHAJATI BALIKA VIDYAPITH', 'TETULTALA, MATAGIRI HARNA PALLY, AGARPARA Kolkata, West Bengal KOLKATA  700109', '', '', 'Hindi Medium', 'Class-12', '77', '77', '', '77', '77', '77', '', 'file1.pdf', 'parent name', '8637583151', '', 'parent@gmail.com', 'Baruipur,Kolkata', 'Kolkata', 'West Bengal', '700144', 'below 2.5 lakhs', '', '', 'Sanmarg Newspaper', '', 'Yes', '', '', '', '', '', 'Yes', 'Yes', 'This is my Extracurricular Activity', 'file1.pdf', '', '', 'Screenshot 2023-05-03 112301.png', '677', '67', '67', 'no', 'no', '', 'teacher name', '', 'ragp-form-2023 (6).pdf', 'sample_mp4.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `heading1` varchar(1000) DEFAULT NULL,
  `heading2` varchar(1000) DEFAULT NULL,
  `heading3` text,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `btn_name` varchar(100) DEFAULT NULL,
  `btn_link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `page_name`, `img_path`, `heading1`, `heading2`, `heading3`, `reg_date`, `btn_name`, `btn_link`) VALUES
(1, 'home', 'assets/images/slider-main/bg4.jpg', '\"राम अवतार गुप्त प्रतिभा पुरस्कार\" यह नाम आज, \"हिंदी में उत्कृष्टता एवं गौरव\" का पर्याय बन गया है | इस पुरस्कार समारोह में हजारों छात्रों, शिक्षकों और संस्थानो को हिंदी में उनके काम के लिए सम्मानित किया जाता है।\r\n\r\n', 'Construction Industry', 'You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like.', '2021-06-11 10:46:49', 'Know us', 'home/about/about'),
(2, 'home', 'assets/images/slider-main/bg5.jpg', '\"राम अवतार गुप्त प्रतिभा पुरस्कार\" यह नाम आज, \"हिंदी में उत्कृष्टता एवं गौरव\" का पर्याय बन गया है | इस पुरस्कार समारोह में हजारों छात्रों, शिक्षकों और संस्थानो को हिंदी में उनके काम के लिए सम्मानित किया जाता है।\r\n\r\n', 'Your Choice is Simple', 'You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like.', '2021-06-11 10:49:23', 'Contact us', 'home/contact/contact'),
(3, 'about', 'assets/images/banner/banner1.jpg', 'About', NULL, NULL, '2021-06-01 08:53:10', NULL, NULL),
(4, 'contact', 'assets/images/banner/banner1.jpg', 'Contact', NULL, NULL, '2021-06-01 11:01:38', NULL, NULL),
(5, '2020', 'assets/images/banner/prv2020.jpg', NULL, NULL, NULL, '2021-06-25 12:32:15', NULL, NULL),
(6, '2019', 'assets/images/banner/banner4.jpg', NULL, NULL, NULL, '2021-06-23 06:37:02', NULL, NULL),
(7, '2018', 'assets/images/banner/prv2018.jpg', NULL, NULL, NULL, '2021-06-25 12:32:48', NULL, NULL),
(8, '2017', 'assets/images/banner/banner1.jpg', NULL, NULL, NULL, '2021-06-04 13:04:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `heading`, `content`, `reg_date`) VALUES
(1, 'Find Our Location', '{\"address\":[{\"heading\":\"Visit Our Office\",\"icon\":\"fas fa-map-marker-alt\",\"content\":\"160/B, Chittaranjan Avenue, Kolkata\"}],\"email\":[{\"heading\":\"Email Us\",\"icon\":\"fa fa-envelope\",\"content\":\"ragpp@sanmarg.in\"}],\"phone\":[{\"heading\":\"Call Us\",\"icon\":\"fa fa-phone-square\",\"content\":\"9830222232<br> Monday - Friday (11:00am - 5:00pm)\"}]}', '2021-06-25 08:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `env_board_dtl`
--

CREATE TABLE `env_board_dtl` (
  `id` int(2) NOT NULL,
  `board_name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `env_board_dtl`
--

INSERT INTO `env_board_dtl` (`id`, `board_name`) VALUES
(1, 'WBBSE'),
(2, 'WBCHSE'),
(3, 'CBSE'),
(4, 'ICSE'),
(5, 'IB'),
(6, 'IGCSE'),
(7, 'ISC');

-- --------------------------------------------------------

--
-- Table structure for table `env_locations`
--

CREATE TABLE `env_locations` (
  `id` int(2) NOT NULL,
  `location_name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `env_locations`
--

INSERT INTO `env_locations` (`id`, `location_name`) VALUES
(1, 'Kolkata-Howrah,Hooghly'),
(2, 'North Bengal-Siliguri,Darjeeling'),
(3, 'South Bengal-Durgapur,Raniganj,Asansol'),
(4, 'Rest Of Bengal'),
(5, 'Rest Of India (Outside of Bengal)\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `header_above`
--

CREATE TABLE `header_above` (
  `id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `fb_link` varchar(150) NOT NULL,
  `twitter_link` varchar(150) NOT NULL,
  `insta_link` varchar(150) NOT NULL,
  `reg_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_above`
--

INSERT INTO `header_above` (`id`, `address`, `fb_link`, `twitter_link`, `insta_link`, `reg_datetime`) VALUES
(1, '160/B, Chittaranjan Avenue, Kolkata', 'https://facebbok.com/themefisher.com', 'https://twitter.com/themefisher.com', 'https://instagram.com/themefisher.com', '2021-06-11 10:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `header_below`
--

CREATE TABLE `header_below` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `btn_name` varchar(500) NOT NULL,
  `btn_link` varchar(500) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_below`
--

INSERT INTO `header_below` (`id`, `heading`, `btn_name`, `btn_link`, `reg_date`) VALUES
(1, 'Register here for RAG 2021', 'REGISTER NOW', 'https://www.w3schools.com/', '2021-06-25 10:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) DEFAULT NULL,
  `content` text NOT NULL,
  `img_path` varchar(500) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `heading`, `content`, `img_path`, `reg_date`, `section`) VALUES
(1, 'What RAG is', '{\"right\":[{\"heading\":\"विद्यार्थी अभिदाता\",\"details\":\"3 selected अभिदाता from each board & class will be provided a scholarship to pursue their education.\"},{\"heading\":\"उच्च विद्यार्थी अभिदाता\",\"details\":\"3 अभिदाता (B.A. & M.A. ) will be assisted for further development.\"},{\"heading\":\"गुरु प्रोत्साहन**\",\"details\":\"The work of 3 Hindi teachers will be promoted extensively.\"}],\"left\":[{\"heading\":\"अपराजय\",\"details\":\"Assistance to especially abled children to pursue their education in Hindi.\"},{\"heading\":\"अंकुर\",\"details\":\"Assistance to students for enhancing their vocational skills in Hindi.\"},{\"heading\":\"सर्वश्रेष्ठ संस्थान\",\"details\":\"Encouraging institutions which work towards development\"}]}', 'assets/images/services/R_abt.jpg', '2021-06-25 06:23:01', 'about_rag'),
(3, NULL, '{\"counter\":[{\"title\":\"Years\",\"img_path\":\"assets/images/icon-image/fact1.png\",\"count\":\"1789\"},{\"title\":\"Total registration\",\"img_path\":\"assets/images/icon-image/fact2.png\",\"count\":\"647\"},{\"title\":\"Prices\",\"img_path\":\"assets/images/icon-image/fact3.png\",\"count\":\"4000\"}]}', NULL, '2021-05-29 10:02:55', 'counter'),
(4, 'Gallery', '{\"2020\":[\"assets/images/projects/2020/\"],\"2019\":[\"assets/images/projects/2019/\"],\"2018\":[\"assets/images/projects/2018/\"]}', 'assets/images/projects/', '2021-06-25 12:54:45', 'gallery'),
(5, NULL, '{\"right\":[{\"heading\":\"Can We Help?\",\"content\":\"9830222232\"}],\"left\":[{\"heading\":\"to assist you\",\"content\":\"We are here\"}]}', NULL, '2021-06-14 07:16:08', 'help_center'),
(6, 'Our Sponsors', '[\"client1.png\",\"client2.png\",\"client3.png\",\"client4.png\",\"client5.png\",\"client6.png\"]', 'assets/images/client/2019/', '2021-06-14 09:50:43', 'sponsor');

-- --------------------------------------------------------

--
-- Table structure for table `new_student_data`
--

CREATE TABLE `new_student_data` (
  `id` int(2) NOT NULL,
  `form_date_time` varchar(111) NOT NULL,
  `reg_id` varchar(111) NOT NULL,
  `ip_address` varchar(111) NOT NULL,
  `reg_location` varchar(111) NOT NULL,
  `boardexam` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `disorder` varchar(111) NOT NULL,
  `phy_disorder_name` varchar(111) NOT NULL,
  `mental_disorder_name` varchar(111) NOT NULL,
  `disorder_detail` varchar(100) NOT NULL,
  `disorder_file` varchar(111) NOT NULL,
  `fname` varchar(111) NOT NULL,
  `lname` varchar(111) NOT NULL,
  `hname` varchar(111) NOT NULL,
  `hlname` varchar(111) NOT NULL,
  `student_photo_file` varchar(111) NOT NULL,
  `hname_correct` varchar(111) NOT NULL,
  `hname_file` varchar(111) NOT NULL,
  `student_gender` varchar(111) NOT NULL,
  `student_dob` varchar(100) NOT NULL,
  `student_email` varchar(111) NOT NULL,
  `student_mobile` varchar(111) NOT NULL,
  `board_roll_no` varchar(111) NOT NULL,
  `admit_card_file` varchar(111) NOT NULL,
  `school_name` varchar(111) NOT NULL,
  `school_address` varchar(111) NOT NULL,
  `other_school_name` varchar(111) NOT NULL,
  `other_school_address` varchar(111) NOT NULL,
  `school_medium` varchar(111) NOT NULL,
  `class` varchar(100) NOT NULL,
  `last_year_marks1` varchar(111) NOT NULL,
  `last_year_marks2` varchar(111) NOT NULL,
  `last_year_marks3` varchar(111) NOT NULL,
  `current_year_marks1` varchar(111) NOT NULL,
  `current_year_marks2` varchar(111) NOT NULL,
  `current_year_preboards` varchar(111) NOT NULL,
  `marksheet_one` varchar(100) NOT NULL,
  `marksheet_eleven` varchar(100) NOT NULL,
  `parent_name` varchar(111) NOT NULL,
  `parent_mobile` varchar(111) NOT NULL,
  `emergency_landline` varchar(111) NOT NULL,
  `parent_email` varchar(100) NOT NULL,
  `home_address` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `pincode` varchar(111) NOT NULL,
  `family_income` varchar(111) NOT NULL,
  `facebook_handle` varchar(111) NOT NULL,
  `twitter_handle` varchar(111) NOT NULL,
  `ragaward_source` varchar(111) NOT NULL,
  `ragaward_source_other` varchar(111) NOT NULL,
  `sanmarg_reader` varchar(100) NOT NULL,
  `hawker_name` varchar(111) NOT NULL,
  `hawker_telephone` varchar(111) NOT NULL,
  `rag_pariksha_participated` varchar(111) NOT NULL,
  `rag_pariksha_rollno` varchar(111) NOT NULL,
  `rag_pariksha_marks` varchar(111) NOT NULL,
  `rag_participated_chk` varchar(111) NOT NULL,
  `ankur` varchar(111) NOT NULL,
  `ankur_activity_textwork` varchar(111) NOT NULL,
  `ankur_activity_file` varchar(111) NOT NULL,
  `all_activity_file` varchar(100) NOT NULL,
  `yuva` varchar(111) NOT NULL,
  `marksheet_file` varchar(100) NOT NULL,
  `board_total_mark` varchar(100) NOT NULL,
  `board_hindi_mark` varchar(100) NOT NULL,
  `Board_hindi_mark_percent` varchar(100) NOT NULL,
  `qualified` enum('yes','no') NOT NULL DEFAULT 'no',
  `verified` enum('yes','no') NOT NULL DEFAULT 'no',
  `hindi_grade` varchar(100) NOT NULL,
  `hnd_tech_name` varchar(100) NOT NULL,
  `hnd_tech_mob` varchar(100) NOT NULL,
  `essay_file` varchar(100) NOT NULL,
  `essay_video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_student_data`
--

INSERT INTO `new_student_data` (`id`, `form_date_time`, `reg_id`, `ip_address`, `reg_location`, `boardexam`, `category`, `disorder`, `phy_disorder_name`, `mental_disorder_name`, `disorder_detail`, `disorder_file`, `fname`, `lname`, `hname`, `hlname`, `student_photo_file`, `hname_correct`, `hname_file`, `student_gender`, `student_dob`, `student_email`, `student_mobile`, `board_roll_no`, `admit_card_file`, `school_name`, `school_address`, `other_school_name`, `other_school_address`, `school_medium`, `class`, `last_year_marks1`, `last_year_marks2`, `last_year_marks3`, `current_year_marks1`, `current_year_marks2`, `current_year_preboards`, `marksheet_one`, `marksheet_eleven`, `parent_name`, `parent_mobile`, `emergency_landline`, `parent_email`, `home_address`, `city`, `state`, `pincode`, `family_income`, `facebook_handle`, `twitter_handle`, `ragaward_source`, `ragaward_source_other`, `sanmarg_reader`, `hawker_name`, `hawker_telephone`, `rag_pariksha_participated`, `rag_pariksha_rollno`, `rag_pariksha_marks`, `rag_participated_chk`, `ankur`, `ankur_activity_textwork`, `ankur_activity_file`, `all_activity_file`, `yuva`, `marksheet_file`, `board_total_mark`, `board_hindi_mark`, `Board_hindi_mark_percent`, `qualified`, `verified`, `hindi_grade`, `hnd_tech_name`, `hnd_tech_mob`, `essay_file`, `essay_video`) VALUES
(1, '2023-05-18 15:44:57', '0000001', '136.232.70.46', 'Kolkata-Howrah,Hooghly', 'WBBSE', '', '', '', '', '', '', 'Testing Kumar', 'Mahata', 'परीक्षण कुमार', 'महता', '', 'No', '', 'Male', '23-01-2006', 'manojmahatayt@gmail.com', '8637583151', '99999999999999999', 'file1.pdf', 'CALCUTTA ANGLO GUJARATI SCHOOL, BOYS MARKETTING', '6, POLLOCK STREET , PS HARE STREET 5, India Exchange Place Road, Poddar Court, 29, Pollock St, Chitpur KOLKATA', '', '', 'Hindi Medium', 'Class-12', '77', '77', '', '77', '77', '77', '', 'file1.pdf', 'parent name', '8637583151', '', 'parent@gmail.com', 'Baruipur', 'Kolkata', 'West Bengal', '700144', 'below 2.5 lakhs', '', '', 'Sanmarg Newspaper', '', 'Yes', '', '', '', '', '', 'Yes', 'Yes', 'thats it', 'file1.pdf', '', '', '', '', '', '', 'no', 'no', '', 'Manoj Mahata', '', '', ''),
(2, '2023-05-18 16:09:47', '0000002', '136.232.70.46', 'Rest Of Bengal', 'CBSE', '', '', '', '', '', '', 'Manoj Kumar', 'Mahata', 'मनोज कुमार', 'महता', '', 'Yes', '', 'Male', '09-01-2005', 'manojmahata.mid@gmail.com', '8637583151', '8888888888888888', 'file1.pdf', 'others', 'OTHERS', 'Baruipur Swami Vivekananda Sikha Mandir(H.S)', 'Baruipur', 'Others', 'Class-12', '88', '88', '', '88', '88', '88', '', 'file1.pdf', 'parent name', '8637578314', '', 'parent@gmail.com', 'nnnkdfsf', 'Kolkata', 'Karnataka', '721516', 'above 5lakhs', '', '', 'Sanmarg Newspaper', '', 'Yes', '', '', '', '', '', 'Yes', 'Yes', 'askgdkagdkjad', 'file1.pdf', '', '', '', '', '', '', 'no', 'no', '', 'Manoj Mahata', '', '', ''),
(3, '2023-05-18 17:07:08', '0000003', '136.232.70.46', 'Kolkata-Howrah,Hooghly', 'WBBSE', '', '', '', '', '', '', 'Testing Kumar', 'Mukherjee', 'परीक्षण कुमार', 'मुखर्जी', '', 'Yes', '', 'Male', '15-01-2006', 'sanmargdev3@gmail.com', '8637583151', '4234234', 'file1.pdf', 'CALCUTTA ANGLO GUJARATI SCHOOL, BOYS MARKETTING', '6, POLLOCK STREET , PS HARE STREET 5, India Exchange Place Road, Poddar Court, 29, Pollock St, Chitpur KOLKATA', '', '', 'Hindi Medium', 'Class-12', '99', '99', '', '99', '99', '99', '', 'file1.pdf', 'parent name', '8637583151', '', 'parent@gmail.com', 'Baruipur', 'Kolkata', 'West Bengal', '700144', 'below 2.5 lakhs', '', '', 'Sanmarg Newspaper', '', 'Yes', '', '', '', '', '', 'Yes', 'No', '', '', '', '', '', '', '', '', 'no', 'no', '', 'Manoj Mahata', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `school_list`
--

CREATE TABLE `school_list` (
  `id` int(11) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_address` varchar(111) NOT NULL,
  `school_location` varchar(100) NOT NULL,
  `board` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_list`
--

INSERT INTO `school_list` (`id`, `school_name`, `school_address`, `school_location`, `board`) VALUES
(1, 'BIRLA DIVYA JYOTI', 'ZONE - F , UTTARAYON TOWNSHIP P.O -MATIGARA, SILIGURI SILIGURI 734010', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(2, 'NIRMAAN VIDYA JYOTI SCHOOL', 'LOWER BHANUNAGAR, SILIGURI Sevoke Road, Siliguri  SILIGURI 734001', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(3, 'K E CARMEL SCHOOL', 'AMBARI, RANGALIVITA, SAHUDANGI HAAT JALPAIGURI JALPAIGURI 735135', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(4, 'HINDI BALIKA VIDYAPITH', 'S.P. MUKHERJEE ROAD, KHALPARA, SILIGURI  SILIGURI 734005', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(5, 'LITTLE ANGELS SCHOOL', 'NEOPANE LANE, MILAN MORE P.O- CHAMPASARI , SILIGURI SILIGURI 734003', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(6, 'AMARPATI LIONS CITIZENS PUBLIC SCHOOL', 'BHOLANATH PARA, EASTERN BYPASS  P.O- GHUGHUMARI, SILIGURI SILIGURI 734006', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(7, 'SILIGURI PUBLIC CO-ED SCHOOL', 'THIKNIKATA P.O- SUSRUTNAGAR, SILIGURI SILIGURI 734012', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(8, 'SILIGURI MOUNT POINT SCHOOL', 'SOUTH AMBEDKAR COLONY , WARD NO 1  SILIGURI 734005', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(9, 'HOLY CROSS SCHOOL', 'BALAIGACH , P.O- MANUAGANJ, RAJGANJ Dist. Jalpaiguri, West Bengal JALPAIGURI 735135', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(10, 'DAV SCHOOL', 'NEAR MAHANANDA BARRAGE PROJECT, FULBARI  FULBARI 734015', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(11, 'SRI SRI ACADEMY', '37A, ALIPUR RD,ALIPORE,KOLKATA,WEST BENGAL 700027', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(12, 'DELHI PUBLIC SCHOOL', 'DAGAPUR, DARJEELING ROAD, PRADHANNAGAR  SILIGURI 734003', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(13, 'SILIGURI MODEL HIGH SCHOOL', 'GURUNG BASTI ; PO- PRADHAN NAGAR; SILIGURI  SILIGURI 734003', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(14, 'TECHNO INDIA GROUP PUBLIC SCHOOL', 'Jamidarpara, Paharpur, Netaji Subhash Chandra Bose Rd, Jalpaiguri  JALPAIGURI 735121', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(15, 'GODWIN MODERN SCHOOL', 'MONTIVIOTE ROAD, GANDHIGRAM , KURSEONG  DARJEELING 734203', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(16, 'G.D. GOENKA PUBLIC SCHOOL', 'DHUKURIA , P.O- NEW CHUMTA, DAGAPUR  SILIGURI 734009', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(17, 'DOON HERITAGE', 'KOLABARI , CHAMPASARI  SILIGURI 734003', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(18, 'MODELLA CARETAKER CENTRE & SCHOOL', 'Jatiakhali,P.O- PHULBARI , JALPAIGURI  JALPAIGURI 734015', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(19, 'SHRI KRISHNA PRANAMI VIDYA NIKETAN', 'SHIVMANDIR ROAD, HAIDERPARA , SILIGURI  JALPAIGURI 734001', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(20, 'ARMY PUBLIC SCHOOL', 'BENGDUBI, PANIGHATA  DARJEELING 734424', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(21, 'MODI PUBLIC SCHOOL', 'PATHARGHATA , MATIGARA , SILIGURI  SILIGURI 734010', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(22, 'NARAYANA SCHOOL', 'NARAYANA SCHOOL NEAR SONA PETROL PUMP, SEVOKE ROAD, SALUGARA  SILIGURI 734008', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(23, 'CAMPION INTERNATIONAL SCHOOL', 'RIVERSIDE AVENUE SALBARI, SILIGURI  SILIGURI 734009', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(24, 'USHA MARTIN SCHOOL , MALDA', 'SHIMULDHAB , WW - 34 Near Malda Water ParK\nPost Office – Bheema Digh MALDA 732128', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(25, 'BETHANY MISSION SCHOOL', 'VILL - RUPAHAR , P.O - DEBINAGAR , P.S - RAIGANJ  UTTAR DINAJPUR 733123', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(26, 'KENDRIYA VIDYALAYA BALURGHAT', 'VILL - PACHIM RAINAGAR , P.O - AMRITAKHANDA HUT BALURGHAT DINAJPUR 733103', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(27, 'TECHNO INDIA GROUP PUBLIC SCHOOL , RAIGANJ', 'GOVINDAPUR RAIGANJ DINAJPUR 733134', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(28, 'DELHI PUBLIC SCHOOL , NTDC FARAKKA', 'P.O - NABARUN Farakka MURSHIDABAD 742246', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(29, 'KENDRIYA VIDYALAYA BEHRAMPORE', '51/A BABULBORA ROAD , MADHUPUR   BERHAMPORE MURSHIDABAD 742101', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(30, 'THE FUTURE SHINING ACADEMY', 'VILLT , P.S - RATANPUR Station Rd, Dhuliyan,Ratanpur MURSHIDABAD 742202', 'North Bengal-Siliguri,Darjeeling', 'CBSE'),
(31, 'HIMALAYAN INTERNATIONAL RESIDENTIAL SCHOOL', 'P.O- RAJGANJ, JALPAIGURI  JALPAIGURI 735134', 'North Bengal-Siliguri,Darjeeling', 'CBSE '),
(32, 'LINCOLNS HIGH SCHOOL', 'KARAIBARI , MILANMORE P.O- CHAMPASARI , SILIGURI SILIGURI 734003', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(33, 'DON BOSCO SCHOOL ', 'SEVOKE ROAD, 2ND MILE, SILIGURI  SILIGURI 734001', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(34, 'ISABELLA SCHOOL', 'P.O- SALUGARA, SILIGURI  SILIGURI 734008', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(35, 'HEBRON ENGLISH SCHOOL', 'NAXALBARRY ROAD, UPPER BAGDOGRA Dist – Darjeeling, West Bengal  SILIGURI 734014', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(36, 'GOOD SHEPHERD SCHOOL', 'BASE HOSPITAL ROAD, ARMY CANT. AREA, BAGDOGRA Darjeeling District, Uttar Bagdogra, Bagdogra, West Bengal  SILIG', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(37, 'SACRED HEART SCHOOL', 'PANCHANAND SARANI ROAD, JYOTIMOY COLONY  P.O- NEW RANGIA SILIGURI 734013', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(38, 'GELNHILL PUBLIC SCHOOL', '39 DOWHILL ROAD, P.O - KURSEONG  KURSEONG 734203', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(39, 'DOWHILL SCHOOL', 'FOREST SCHOOL, DOWHILL ROAD, KURSEONG, WEST BENGAL 734203  KURSEONG 734204', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(40, 'MODERN ENGLISH SCHOOL', '59/14A, J.M. GOENKA ROAD, KURSEONG  KURSEONG 734217', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(41, 'DON BOSCO OODLABARI', 'P.O - MANABARI, OODLABARI , KRANTI ROAD  OODLABARI 735222', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(42, 'AUXILIUM CONVENT SCHOOL', 'SEVOKE ROAD, WARD 41, JYOTI NAGAR, SILIGURI  SILIGURI 734001', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(43, 'MAHBERT HIGH SCHOOL', 'DAGAPUR , SILIGURI  SILIGURI 734010', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(44, 'HIMALI BOARDING SCHOOL', 'Doomaram, P.O. Kurseong   DARJEELING 734203', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(45, 'NIRMALA CONVENT SCHOOL', '3RD MILE, WARD 42, SEOKE ROAD, CHAYAN PARA, SILIGURI  SILIGURI 734008', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(46, 'ROYAL ACADEMY', 'BEHIND LEXICON AUTO, PATHARGHATA ROAD MOTAJOTE, MATIGARA  SILIGURI 734010', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(47, 'LORETO CONVENT', 'LEBONG CART ROAD , CHAUK BAZAAR, DARJEELING  DARJEELING 734101', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(48, 'HOLY CHILD ENGLISH ACADEMY', 'GHORAPIR , NOONBAHI ROAD Uttar Ramchandrapur MALDA 732101', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(49, 'NORTH POINT ENGLISH ACADEMY', 'MAHANANDA PALLI Jhaljhalia MALDA 732102', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(50, 'ST. MARY SCHOOL ', 'NAZRULBAGH  MALDA 732101', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(51, 'ST. CLARET SCHOOL', 'BISHRAIL , CHENCHRA POST, GANGARAMPUR DINAJPUR 733124', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(52, 'HOLYFAITH ACADEMY', 'NEW DAKBANGLOW , NEW NH 34 Near Nur Md Smiriti Mahavidyalay, MURSHIDABAD 742202', 'North Bengal-Siliguri,Darjeeling', 'ICSE'),
(53, 'WEST POINT SCHOOL', 'MATIGARA , TUMBAJOTE, P.O - MATIGARA  SILIGURI 734010', 'North Bengal-Siliguri,Darjeeling', 'ICSE '),
(54, 'GYANODAY NIKETAN', 'Shyam Cottage\nDarjeeling  DARJEELING 734101', 'North Bengal-Siliguri,Darjeeling', 'ISC'),
(55, 'NATIONAL PUBLIC SCHOOL', 'POKHAIJOTE, CHAMPASARI  SILIGURI 734003', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(56, 'HOLY CROWN SCHOOL', 'GANDHINAGAR, SILIGURI  SILIGURI 734001', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(57, 'MILTON HIGH SCHOOL', 'GANDHINAGAR, SILIGURI  SILIGURI 734001`', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(58, 'ST. ALPHONSUS HIGHER SECONDARY SCHOOL', 'TENZING NORGAY ROAD , KURSEONG   KURSEONG 734203', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(59, 'ANGELA ENGLISH SCHOOL', 'MUKUNDO DAS ROAD, MILLANPALLY, SILIGURI  SILIGURI 734401', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(60, 'BARLOW GIRLS HIGH SCHOOL', '\nRamakrishna Mission Road English bazar MALDA 732103', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(61, 'GEETANJALI VIDYAPITH', 'P.O - SHERSHAHI , P.S - KALIACHAK  MALDA 732201', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(62, 'LALIT MOHAN SHAYAM MOHINI HIGH SCHOOL', 'GANGABAG  MALDA 732101', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(63, 'MALDA C.C  GIRLS HIGH SCHOOL', 'PURATULI , RAJA SARAT CHANDRA ROAD   MALDA 732101', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(64, 'MALDA ZILLA SCHOOL', 'RABINDRA AVENUE  MALDA 732101', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(65, 'RAMAKRISHNA MISSION VIVEKANANDA VIDYAMANDIR', 'R.K MISSION ROAD Mokdumpur MALDA 732101', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(66, 'VIDYASAGAR VIDYAPITH', 'HARUCHALK , VIA - SAHABAJPUR , KALIACHAK   English Bazar(Block) MALDA 732201', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(67, 'VIKASH MISSION SCHOOL', 'SAHABAJPUR , MASTERPARA, KALIACHAK  MALDA 732201', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(68, 'RAIGANJ INTEGRATED GOVERNMENT SCHOOL', 'CHHATARPUR , P.O- RAIPUR , RAIGANJ Gangarampur-ps  DAKHIN DINAJPUR 733134', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(69, 'NISHINDRA HIGH SCHOOL ', 'Malay Rd,NISHINDRA , P.O - SRIMANTAPORE P.S - FARAKKA MURSHIDABAD 742212', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(70, 'PRANABANANDA VIDYAPITH', 'FARAKKA BARAGGE , TOWNSHIP    MURSHIDABAD 742212', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(71, 'SOFIA MEMORIAL SCHOOL', 'KHAIRAKANDHI , BENIAGRAM P.S - FARAKKA MURSHIDABAD 742212', 'North Bengal-Siliguri,Darjeeling', 'WBBSE'),
(72, 'BRIDGE INTERNATIONAL', '77/1/1, HAZRA ROAD BALLYGUNGE, KOLKATA KOLKATA  700029', 'Kolkata-Howrah,Hooghly', 'IB'),
(73, 'THE CAMBRIDGE SCHOOL', 'MANOHAR PUKUR ROAD, HAZRA, KALIGHAT, KOLKATA  KOLKATA 700026', 'Kolkata-Howrah,Hooghly', 'IB'),
(74, 'CALCUTTA INTERNATIONAL SCHOOL', '724, ANANDPUR EM BYPASS KOLKATA  700107', 'Kolkata-Howrah,Hooghly', 'IB'),
(75, 'AALOKE BHARTI MODEL SCHOOL', 'Rana Park,Aatghara, P.O - Dhalua, Garia CHOWK BAZAR, OLAICHANDITALA, CHINSURAH KOLKATA  700 152', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(76, 'ABHINAV BHARATI HIGH SCHOOL', '11, Pretoria St, Elgin 1, DR HARENDRA KUMAR MUKHERJEE SARANI,ELGIN KOLKATA  700071', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(77, 'ADAMAS WORLD SCHOOL', ' BARASAT - BARRACKPORE ROAD 24 PARGANAS (NORTH) JAGANNATHPUR KOLKATA 700126', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(78, 'ADITYA ACADEMY SR. SECONDARY, BARASAT', 'TAKI ROAD  P.O.- KADAMBAGACHI P.S.-DUTTAPUKUR, KOLKATA  700125', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(79, 'ADITYA ACADEMY SR. SECONDARY, DUM DUM', '435, JESSORE RD, VIVEKANANDA ABASAN, DUM DUM  KOLKATA  700055', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(80, 'AIR FORCE SCHOOL', 'A F S BARRACKPORE BENGAL ENAMEL  PALTA,  24 P & S (N) WEST BENGAL 743122', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(81, 'ALIPORE MULTIPURPOSE GOVERNMENT GIRLS HIGH SCHOOL', '20B, JUDGES COURT ROAD ALIPORE KOLKATA  700027', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(82, 'ALL SAINTS HIGH SCHOOL', ' RABINDRA NAGAR, PANCHUR MAUZA METIABRUZ, KOLKATA WEST BENGAL 700018', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(83, 'AMRITA VIDYALAYAM', 'NEAR, BUDGE BUDGE TRUNK RD S M NAGAR GOVERNMENT HOUSING ESTATE, SARKARPOOL, GOVINDAPUR, BENEPUKUR KOLKATA 70014', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(84, 'APEEJAY SCHOOL, PARK STREET', '115, MULLICK BAZAR, PARK STREET, MULLICK BAZAR KOLKATA  700016', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(85, 'APEEJAY SCHOOL, SALT LAKE', 'BG-180, SECTOR II, SALT LAKE  BH BLOCK KOLKATA  700091', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(86, 'ARAMBAGH VIVEKANANDA ACADEMY, ARAMBAGH', 'BASANTAPUR SPORTS COMPLEX, WARD NO-11,   PO-ARAMBAGH, HOOGHLY 712601', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(87, 'ARMY PUBLIC SCHOOL BARRACKPORE', 'NORTH GATE, BARRACKPORE CANTONMENT, BARRACKPORE  KOLKATA  700120', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(88, 'ARMY PUBLIC SCHOOL, BALLYGUNGE', '57/1, CIRCULAR RD, BALLYGUNJ MILITARY CAMP, BALLYGUNGE  KOLKATA  700019', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(89, 'ASHOKA MEMORIAL SCHOOL', 'C/E-57, RABINDRA NAGAR, AKRA ROAD  WEST BENGAL 700018', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(90, 'ASIAN INTERNATIONAL', 'NEW KOROLA, PS DOMJUR, NEAR DHULAGARH LOGISTIC CENTRE NH 6, DHULAGORI, HOWRAH HOWRAH  711302', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(91, 'B D HIGH PRIMARY SCHOOL', '69C, ABINASH CHANDRA BANERJEE LN, SUBHAS SAROBAR PARK PHOOL BAGAN, BELEGHATA, KOLKATA WEST BENGAL 700010', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(92, 'B. B. I. T PUBLIC SCHOOL', 'UNNAMED ROAD, NISHCHINTAPUR, BUDGE BUDGE  KOLKATA 700137', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(93, 'B.D.M. INTERNATIONAL', 'GARIA MAIN ROAD PRATAPGARH KOLKATA  700103', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(94, 'BAGHAJATIN BALIKA VIDYALAYA', 'BAGHAJATIN BAZAR RD, CHITTARANJAN COLONY 2 SARADA PALLY, KOLKATA  WEST BENGAL 700092', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(95, 'BARASAT INDIRA GANDHI MEMORIAL HIGH SCHOOL', '18, JESSORE ROAD(SOUTH),  RATHTALA KOLKATA 700124', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(96, 'BASUDEBPUR HIGH SCHOOL', 'SARSUNA MAIN RD, SUBODH PALLY SARSUNA, KOLKATA WEST BENGAL 700061', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(97, 'BENEPUKUR VIDYAPITH', '31 LINTON STREET ENTALLY BENIAPUKUR, KOLKATA KOLKATA  700014', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(98, 'BHOLANANDA NATIONAL VIDYALAYA', '55-56 BARRACK ROAD  BARRACKPORE 24 PARGANAS (NORTH)  WEST BENGAL 700120', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(99, 'BIDYA TEERTHA ACADEMY', 'PARIS PARA RD BASUDEVPUR COLONY, PASCHIM BARISHA WEST BENGAL 700008', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(100, 'BIRLA BHARATI', 'TARATOLLA SANTOSHPUR NEW ROAD NEAR NATURE PARK, BIDHANGARH POST KOLKATA  700066', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(101, 'BIRLA HIGH SCHOOL', '1, MORIA STREET ELGIN KOLKATA  700017', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(102, 'BODHICARIYA SR. SECONDARY SCHOOL', 'ACTION AREA II, NEWTOWN, KOLKATA  WEST BENGAL  700135', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(103, 'CALCUTTA ACADEMY', '72 RAJA RAMMOHAN SARANI PO+PS AMHERST STREET KOLKATA 700009', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(104, 'CATHEDRAL MISSION HIGH SCHOOL', 'PREMISES NO. 46, ELGIN RD, KOLKATA  WEST BENGAL 700020', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(105, 'CENTRAL MODEL SCHOOL, AMTALA', 'SUNNY PARK, KONNYA NAGAR, AMTALA 24 PGS, DIAMOND HARBOUR, W.B. WEST BENGAL 743503', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(106, 'CENTRAL MODEL SCHOOL, BARRACKPORE', '23, RIVER SIDE ROAD BARRACKPORE KOLKATA 700120', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(107, 'CHAKDAHA MODEL SCHOOL', 'LALPUR VIVEKANANDA PALLY MORE, PO CHAKDAHA.  DISTT NADIA CHAKDAHA NADIA  KALYANI 741222', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(108, 'METHODIST SCHOOL', 'COAL COMPLEX TOWNSHIP, NATIONAL HIGHWAY 2, DANKUNI Dankuni Coal Complex Township Dankuni Hooghly, Dankuni WEST ', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(109, 'CHRIST CHURCH GIRLS’ HIGH SCHOOL', '30 JESSORE ROAD,AMARPALLI DUMDUM KOLKATA  700028', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(110, 'COLLINS INSTITUTE', '140,LENIN SARANI DHARMATALA, TALTALA KOLKATA  700013', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(111, 'D.A.V. PUBLIC SCHOOL', '61, DIAMOND HARBOUR ROAD  BLOCK 6, SAHAPUR, TARATALA CROSSING, KOLKATA KOLKATA  700038', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(112, 'DELHI PUBLIC SCHOOL - HOWRAH', 'AMTA ROAD HOWRAH MAKARDAH BAZAR, DOMJUR, HOWRAH HOWRAH  711405', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(113, 'DELHI PUBLIC SCHOOL - RUBY PARK', '254, RAJDANGA CHAKRABORTY PARA RD SHANTI PALLY, NASKARHAT, KASBA KOLKATA  700107', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(114, 'DELHI PUBLIC SCHOOL, JOKA', 'GAZIPUR (KEYATALAHAT), BAKRA HAT ROAD P.O - KANGANBERIA, SOUTH 24 PARGANAS, BISHNUPUR KOLKATA  743503', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(115, 'DELHI PUBLIC SCHOOL, NORTH KOLKATA', '48A, NEAR DUNLOP CROSSINGS, BIDYATAN SARANI  KOLKATA  700035', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(116, 'DUFF HIGH SCHOOL FOR GIRLS', '23A, BALARAM GHOSH STREET HATI BAGAN, SHYAM BAZAR, KOLKATA WEST BENGAL 700004', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(117, 'EAST POINT SCHOOL', ' 2, BRICK FIELD ROAD ICHHAPUR (NEAR INDRAPURI) WEST BENGAL 743144', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(118, 'ELLIOT DAY SCHOOL', ' NO.22B, ROYD ST TALTALA, KOLKATA WEST BENGAL 700016', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(119, 'ESCORTS CO EDUCATIONAL ENGLISH MEDIUM SCHOOL', ' 73/1 KHATIR BAZAR LANE  SERAMPORE, RISHRA WEST BENGAL 712248', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(120, 'FUTURE CAMPUS SCHOOL', 'P/7/2098 SONARPUR STATION ROAD  KOLKATA  700103', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(121, 'FUTURE HOPE SCHOOL', '1/8, ROWLAND ROAD, LALA LAJPAT RAI SARANI  WEST BENGAL 700020', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(122, 'GOBRA KAZI NAZRUL SATABARSHIKI (CO-ED) SHIKSHAYATAN SCHOOL', '12, 13,14, MAHENDRA ROY LN, SEAL LANE GOBRA, KOLKATA WEST BENGAL 700046', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(123, 'GURBACHAN SINGH SONDHI GIRLS SCHOOL', '65, PRATAPADITYA ROAD LALPARA, MUDIALI, KALIGHAT, KOLKATA KOLKATA  700026', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(124, 'GURU NANAK PUBLIC SCHOOL', 'ANDUL RD, KAMRANGU, ANDUL, HOWRAH  WEST BENGAL  711302', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(125, 'GURUKUL ENGLISH MEDIUM SCHOOL', '147, GIRISH GHOSH RD, BELUR, HOWRAH  WEST BENGAL 711202', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(126, 'GURUKUL VIDYAMANDIR SECONDARY SCHOOL', 'DIAMOND HARBOUR ROAD NEAR IIMC, JOKA, PAILAN HAT, PAILAN KOLKATA  700104', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(127, 'H. M. EDUCATION CENTRE', 'HINDMOTOR COLONY UTTARPARA HOOGHLY 712233', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(128, 'HARIYANA VIDYA MANDIR', 'BA-193, SALT LAKE BYPASS, SECTOR 1  KOLKATA 700064', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(129, 'IDEAL MISSION SCHOOL, ', 'A-38, SRIJANI P.O- JOKA THAKURPRKUR KOLKATA SOUTH 24 PARGANAS 700104', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(130, 'IDEAL PUBLIC SCHOOL', 'SHIRAKOL, 24 PARGANAS (SOUTH)  SOUTH 24 PARGANAS 743513', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(131, 'IDEAL SCHOOL', 'OPP. KALYANI SHILPANCHAL RAILWAY STATION  WEST BENGAL  741235', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(132, 'IEM PUBLIC SCHOOL, SALTLAKE SECTOR 3', 'IEM PUBLIC SCHOOL, SALTLAKE SECTOR 3 OPP TO NIFT GIRLS HOSTEL, KOLKATA WEST BENGAL 700106', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(133, 'INDIRA ACADEMY', '1/1A, RANI HARSA MUKHI ROAD, CHUNIBABU BAZAR COSSIPORE, RISHI, PAIKPARA, KOLKATA WEST BENGAL 700002', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(134, 'INDIRA GANDHI MEMORIAL HIGH SCHOOL', '456 P K GUHA ROAD  ARABINDA SARANI, RAJBARI, DUM DUM KOLKATA 700028', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(135, 'INDIRA GANDHI MEMORIAL SENIOR SECONDARY SCHOOL', 'BRIJDHAM HOUSING COMPLEX V.I.P. ROAD, SREEBHUMI   KOLKATA 700048', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(136, 'INDUS VALLEY WORLD SCHOOL', '488, AJOY NAGAR, EASTERN METROPOLITAN BYPASS NEAR PEERLESS HOSPITAL,BEHIND SATYAJIT RAY FILM INSTITUTION KOLKAT', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(137, 'J.N. LORETO', ' BANGUR PARK, RISHRA  WEST BENGAL 712248', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(138, 'JADAVPUR NABAKRISHNA PAL ADARSHA SHIKSHAYATAN', '43/5H, JHEEL RD, DHAKURIA SELIMPUR, KOLKATA WEST BENGAL 700031', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(139, 'JAWAHAR NAVODAYA VIDYALAYA', 'VILLAGE DIHIBAGNAN, P.S- ARAMBAGH DIST- HOOGHLY, DIHIBAGNAN WEST BENGAL 712613', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(140, 'JAWAHAR NAVODAYA VIDYALAYA', 'IGC PHASE III, BESIDE JIS ENGINEERING COLLEGE  BARRACKPORE - KALYANI EXPY, BLOCK A5, KALYANI WEST BENGAL  74123', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(141, 'JAWAHARLAL NEHRU VIDYAPITH BOYS HIGH SCHOOL', 'JAWAHARLAL NEHRU BHAVAN, 2 KHIDIRPUR, 49/5/81 BHUKAILASH RD, NAPTANI BAGAN, KHIDIRPUR WEST BENGAL 700023', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(142, 'JRS PUBLIC SCHOOL', 'UTTARPANCHPOTA CHAKDAHA  KALYANI WEST BENGAL 741222', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(143, 'JYOTI SHISHU VIHAR', 'NATUNPALLY SONARPUR KOLKATA 700150', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(144, 'JYOTIRMOY PUBLIC SCHOOL', 'JYOTIRMOY KNOWLEDGE PARK KALIKAPUR, 24 PARGANAS KOLKATA 743330', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(145, 'KALIGHAT HIGH SCHOOL', '50, MAHIM HALDER STREET KALIGHAT KOLKATA 700026', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(146, 'KALYANI PUBLIC SCHOOL', 'MOINAGADI,NOAPARA, BARASAT  KOLKATA 700125', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(147, 'KAMARHATI UNION COLLEGIATE PRIMARY SCHOOL', 'CHHAI MADAN ROAD 20, OLD LINE KAMARHATI, KOLKATA WEST BENGAL 700058', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(148, 'KANCHRAPARA HARNETT ENGLISH MEDIUM SCHOOL', 'FOREMAN COLONY P.O. KANCHRAPARA, DISTT NORTH 24 PARGANA   WEST BENGAL  743145', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(149, 'KENDRIYA VIDYALAYA ,BALLYGUNGE', 'BALLYGUNGE MAIDAN CAMP BALLYGUNGE CIRCULAR ROAD KOLKATA 700019', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(150, 'KENDRIYA VIDYALAYA BARRACKPORE', 'PO BARRACKPORE, KOLKATA  WEST BENGAL 700120', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(151, 'KENDRIYA VIDYALAYA COSSIPORE BYJUIS ', '4, DUM DUM RD, SEVEN TANKS ESTATE  WEST BENGAL 700002', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(152, 'BODHI BHAVANS COLLEGIATE SCHOOL', '159, SARAT BOSE RD, MANOHARPUKUR, KALIGHAT  KOLKATA 700026', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(153, 'LAKE VIEW HIGH SCHOOL', 'CIT SCHEME 47, PANCHANANTALA, P9 PANCHANANTALA RD, DHAKURIA LXX11, GARIAHAT, KOLKATA KOLKATA 700029', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(154, 'NARAYANA SCHOOL', 'VIVEKANANDA PALLY, BEHALA, KOLKATA  WEST BENGAL 700034', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(155, 'KENDRIYA VIDYALAYA NO. 2, SALT LAKE', 'IC BLOCK, SEC-III, SALT LAKE  WEST BENGAL 700106', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(156, 'KENDRIYA VIDYALAYA NO.1, SALT LAKE', 'EB-BLOCK, LABONY  SECTOR-1,SALT LAKE KOLKATA 700064', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(157, 'KENDRIYA VIDYALAYA SANTRAGACHI', ' GIP COLONY, JAGACHA HOWRAH WEST BENGAL 711112', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(158, 'KENDRIYA VIDYALAYA, BAMANGACHI ', 'BAMANGACHI, SALKIA  HOWRAH  711106', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(159, 'BIDYA BHARTI SCHOOL', 'BLOCK B, 23A/27NB, Nalini Ranjan Av  KOLKATA 700053', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(160, 'KENDRIYA VIDYALAYA, FORT WILLIAM', 'FORT WILLIAM KOLKATA, OPP. PRINCEP GHAT   WEST BENGAL  700021', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(161, 'KHALSA MODEL SR. SEC. SCHOOL', '135, BT RD, DUNLOP, NARENDRA NAGAR BEEHIVE GARDEN, DAKSHINESWAR, KOLKATA KOLKATA 700108', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(162, 'KINGS PARK SCHOOL', '127/D PARK STREET, KOLKATA  WEST BENGAL 700017', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(163, 'KV, DUMDUM', 'JESSORE ROAD, DUM DUM, KOLKATA  WEST BENGAL 700028', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(164, 'LAKSHMIIPAT SINGHANIA ACADEMY', '12-B, ALIPORE ROAD  KOLKATA 700027', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(165, 'LAXMINAGAR HIGH SCHOOL', 'PO MOTIJHILL  PS DUM DUM  KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(166, 'LEE COLLINS HIGH SCHOOL', 'URIA BAGAN, BELEGHATA  KOLKATA 700085', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(167, 'M. M. MODEL SCHOOL', 'NEAR, 38, IMDAD ALI LANE, P.O. PARK STREET P.S.TALTALA KOLKATA, WEST BENGAL 700016, ALIMUDDIN ST, TALTALA WEST ', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(168, 'MAHADEVI BIRLA WORLD ACADEMY', '17A, DARGA RD, BENIAPUKUR, KOLKATA  KOLKATA 700017', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(169, 'MAHESHWARI BALIKA VIDYALAYA', '4, SOVARAM BYSACK STREET RADHA KUNJ, BARA BAZAR, JORASANKO KOLKATA 700007', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(170, 'MARIA MEMORIAL HIGH SCHOOL', '231, DR SP MUKHERJEE RD, ARABINDA SARANI  RAJBARI, DUM DUM WEST BENGAL 700028', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(171, 'MATIABURZ HIGH SCHOOL H.S', 'R/63/1/A, MASJID TALAB BASTI  METIABRUZ, KOLKATA WEST BENGAL 700024', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(172, 'MATTRIX MODERN SCHOOL', '74, RASH BEHARI AVE, NEAR 27 PALLY PARK  P.O, KALIGHAT, KOLKATA WEST BENGAL 700026', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(173, 'MIRANDA HIGH SCHOOL', '69, BORAL MAIN ROAD  WEST BENGAL 700084', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(174, 'MODERN ARYA PARISHAD VIDYALAYA (ENGLISH MEDIUM)', '1 NIMAK MAHAL ROAD,, CIRCULAR GARDEN REACH ROAD GARDEN REACH, KOLKATA WEST BENGAL 700043', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(175, 'MODERN DAY SCHOOL', '16, DR SUDHIR BOSE RD EKBALPUR, KHIDIRPUR WEST BENGAL 700023', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(176, 'MODERN LAKE POINT SCHOOL', '90/1, DAKSHINDARI RD, GHOSHPARA DAKSHINDARI, KOLKATA WEST BENGAL 700048', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(177, 'MODERN SCHOOL', '17B MONORANJAN ROY CHAUDHRY ROAD PS BENEPUKUR  KOLKATA 700017', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(178, 'MOTHER INTERNATIONAL SCHOOL', '2, KAZI NAZRUL ISLAM SARANI  OPP OLYMPIC GROUND,KONNAGAR , HOOGLY WEST BENGAL 712235', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(179, 'MOTHERS MISSION SCHOOL', 'UNIT 1: 86, UNIT 2: 7, ROY BAHADUR ROAD  KALIPRASANNA CHATTARJEE ROAD, BEHALA WEST BENGAL 700034', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(180, 'MOTHERS MISSION SCHOOL', 'UNIT 1: 86, UNIT 2: 7, ROY BAHADUR ROAD KALIPRASANNA CHATTARJEE ROAD, BEHALA, KOLKATA WEST BENGAL 700034', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(181, 'MOUNT LITERA ZEE SCHOOL, DHR', 'DIAMOND HARBOUR ROAD KHARIBERIA, 24 PARGANAS (SOUTH) WEST BENGAL 743503', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(182, 'MOUNT LITERA ZEE SCHOOL, HOWRAH (CBSE)', 'NH-6,   NIBRA, HOWRAH  711322', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(183, 'MOUNT LITERA ZEE SCHOOL, MAHESHTALA', 'D3-49/2,NEW SHIBTALA ROAD BYE LANE, BENIRPOLE, MAHESHTALA KOLKATA 700141', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(184, 'MSB EDUCATIONAL INSTITUTE', '27, PARK LANE, KOLKATA  WEST BENGAL 700016', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(185, 'NALANDA ENGLISH MEDIUM SCHOOL', 'AYNAL PARA RD, SANPA, SANTOSHPUR  WEST BENGAL 700140', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(186, 'NANDANAGAR HIGH SCHOOL', 'AMTALA, MANDAL PARA BAT TALA NANDAN NAGAR, KOLKATA, WEST BENGAL KOLKATA 700083', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(187, 'NARAYANA SCHOOL', 'KAMARBARI ROAD, BEHIND TCS ECO SPACE  NEW TOWN, RAJARHAT KOLKATA 700135', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(188, 'NARAYANA SCHOOL, RISHRA', 'NARAYANASCHOOL,100GD ROAD BADHKAL,RISHRA,HOOGLY,WEST BENGAL WEST BENGAL 712248', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(189, 'NARKELDANGA DESHABANDHU VIDYAPITH', '06, NARKELDANGA N RD, NARKELDANGA, KOLKATA  KOLKATA 700011', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(190, 'NATIONAL ENGLISH SCHOOL, DBN (NURSERY UNIT)', 'BB 5, HIGH SCHOOL ROAD, DESH BANDHU NAGAR  BAGUIATI, KOLKATA WEST BENGAL 700059', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(191, 'NATIONAL HIGH SCHOOL', '42/1, HAZRA ROAD BALLYGUNGE, KOLKATA KOLKATA 700019', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(192, 'NATIONAL INSTITUTE OF OPEN SCHOOLING', '10/1/H NATIONAL INSTITUTE OF OPEN SCHOOLING KOLKATA 700027', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(193, 'NATIONAL PUBLIC SCHOOL', 'BASANTA LAL SAHA RD, SIRITY, TOLLYGUNGE, KOLKATA  KOLKATA 700053', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(194, 'NAVA NALANDA', '192, JODHPUR PARK, KOLKATA  WEST BENGAL 700068', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(195, 'NETAJI NAGAR VIDYAMANDIR', '170/436, N. S. C. BOSE ROAD, NEAR, DAY COLLEGE GANDHI COLONY, NETAJI NAGAR, KOLKATA WEST BENGAL 700092', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(196, 'NETAJI PUBLIC SCHOOL', 'NO-148, JESSORE RD, NOTUN PALLY SATGACHI, SOUTH DUM DUM, KOLKATA WEST BENGAL 700074', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(197, 'NETAJI PUBLIC SCHOOL', '148, JESSORE RD, KOLKATA  WEST BENGAL 700074', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(198, 'NEW ALIPORE MULTIPURPOSE SCHOOL', '23A/439/1, HUMAYUN KABIR SARANI DIAMOND HARBOUR ROAD, BLOCK G, NEW ALIPORE, KOLKATA KOLKATA 700053', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(199, 'NEW CALCUTTA PUBLIC SCHOOL', ' SATGHARA BYE LN, METIABRUZ  WEST BENGAL 700044', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(200, 'NEW OXFORD HIGH SCHOOL', '10, TOPSIA ROAD  WEST BENGAL 700039', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(201, 'NORTH POINT DAY SCHOOL', '25, DUMDUM ROAD DAGA COLONY, SPACE TOWN, BAHIRAGATH COLONY KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(202, 'NORTH POINT SENIOR SECONDARY BOARDING SCHOOL', ' VIP ROAD, NEAR BAGUIATI POLICE STATION,  TEGHORIA, BAGUIATI, KOLKATA,  WEST BENGAL 700059', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(203, 'NORTHEND MODERN SCHOOL CO-ED ENGLISH MEDIUM SCHOOL', '248/1, BARRACKPORE TRUNK RD, ANANYA  JOYSHREE, BARANAGAR WEST BENGAL 700108', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(204, 'ORIENTAL PUBLIC SCHOOL', 'NADIA BLOCK A5 PHASE-III IGC COMPLEX, KALYANI  WEST BENGAL 741235', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(205, 'PADDAPUKUR CENTRAL POINT SCHOOL', '21, SIR SYED AHMED RD, PADDAPUKUR, ENTALLY  WEST BENGAL 700014', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(206, 'PANISHEOLA INDIRA SMRITI VIDYAPITH', 'VILL. & P.O.: PANISHEOLA PS HARIPAL DISTT HOOGHLY WEST BENGAL 712405', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(207, 'PICADILLY DAY SCHOOL', 'AKRA, SANTOSHPUR, MAHESHTALA  WEST BENGAL 700044', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(208, 'PRINCE ENGLISH SCHOOL', '6/8A, KUSTIA RD, P.O:, TILJALA, KOLKATA,  WEST BENGAL 700039', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(209, 'RADCLIFFE SCHOOL', '25, DR. ASHUTOSH SHASTRI ROAD  LAL BAHADUR SHASTRI RD KOLKATA 700078', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(210, 'RAMAKRISHNA MISSIONARY INSTITUTE BAGUIATI', 'J/J-7,ASWININAGAR, BAGUIATI, KOLKATA  WEST BENGAL 700159', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(211, 'RAMESH MITRA GIRLS SCHOOL', '15,JOGESH MITRA ROAD PADDAPUKUR, BHOWANIPORE KOLKATA 700025', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(212, 'RATNAGARH HIGH SCHOOL', '23/2/36 MALL ROAD DUM DUM PS DUMDUM S D BARRACKPORE KOLKATA 700080', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(213, 'S.S.PUBLIC SCHOOL', 'MAHENDRA BANERJEE RD, MILAN PARK BEHALA, MAHESHTALA KOLKATA 700061', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(214, 'SALT LAKE SHIKSHA NIKETAN', 'MB-684, MAHISHBATHAN SALT LAKE, SEC - V KOLKATA 700102', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(215, 'SANGHAMITRA VIDYALAYA', 'BNR SOUTH COLONY, GARDEN REACH  WEST BENGAL 700043', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(216, 'SARADA GARDEN SCHOOL', 'SARADAMANI PARK, WARD NO 113  WEST BENGAL 700070', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(217, 'SARASWATI VIDYA MANDIR', '4/1 B, PITAMBAR GHATAK LANE CHETLA KOLKATA 700027', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(218, 'SARAT COLONY SARAT ACADEMY SCHOOL', 'SARAT BOSE LN, RAJBARI COLONY, KHALISHA KOTA, BIRATI  KOLKATA 700081', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(219, 'SGS INTERNATIONAL SCHOOL', 'BARUIPUR CANNING ROAD, NEAR RAMNAGAR BAZAR, SOUTH RAMNAGAR  JAFFARPUR PANCHANANTALA, BARUIPUR, SOUTH 24 PARAGAN', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(220, 'SHIBRAMPUR NANILAL VIDYAPITH', 'KASTA DANGA RD, JOTH SHIBRAMPUR SHIBRAMPUR MAUZA, KOLKATA WEST BENGAL 700061', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(221, 'SHISHU NEER SCHOOL (NATUN BAZAR)', 'PORA KHOLA RD, WARD NO 112, CONGRESS PALLY NO 1 BANSDRONI, KOLKATA WEST BENGAL 700070', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(222, 'SHREE BALAKRISHNA VITHAL NATH BALIKA VIDYALAYA', '26, PRASANNA KUMAR TAGORE CASTLE STREET NEAR NATUN BAZAR KOLKATA 700006', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(223, 'SHREE BHARATI INSTITUTE- BEST ENGLISH MEDIUM MONTESSORI CONVENT SCHOOLS NEWTOWN BAGUIATI LAKETOWN', 'SULONGURI JABARDAKHAL ROAD SULANGGARI, HATIARA, KOLKATA WEST BENGAL 700059', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(224, 'SHRI RITAM VIDYAPITH', '293/1, RAJA RAMMOHAN ROY RD SARAT PALLY, KAZIPARA, KOLKATA WEST BENGAL 700041', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(225, 'SHRI SHIKSHAYATAN SCHOOL', '11, LORD SINHA ROAD  KOLKATA 700071', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(226, 'SODEPUR DESHBANDHU VIDYAPITH', 'RN AVE, BLOCK-D/32, NO. 2 DESHABONDHU NAGAR, SODEPUR, KOLKATA  WEST BENGAL 700110', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(227, 'SOUTH MELIOR SCHOOL', '65/25/19, CHAKLA PARA RD  PRABHASNAGAR, SERAMPORE, HOOGHLY WEST BENGAL 712203', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(228, 'SOUTH PIONEER ACADEMY', '1, P.O., 1, BAGHAJATIN COLONY  WEST BENGAL 700086', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(229, 'SOUTH PIONEER ACADEMY', '1, P.O., 1, BAGHAJATIN COLONY, KOLKATA  WEST BENGAL 700086', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(230, 'SOUTH SUBURBAN SCHOOL (MAIN)', 'P.O. & P.S. :, 16, GOPAL BANERJEE ST, BHOWANIPORE  WEST BENGAL 700025', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(231, 'SS PUBLIC SCHOOL', '2/179A, MAHENDRA BANERJEE RD MILAN PARK, BEHALA, MAHESHTALA WEST BENGAL 700061', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(232, 'SSM ACADEMY', 'DARI BAGPOTA, BAGPOTA, KOLKATA  WEST BENGAL 700141', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(233, 'NARAYANA SODEPUR', 'MAHISPTA NATARQARH, SODEPUR, KOLKATA  WEST BENGAL 700113', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(234, 'NARAYANA GROUP OF SCHOOL, BARASAT', 'BARASAT, KOLKATA Kazipara, Barasat, Bamangachi WEST BENGAL 700124', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(235, 'NARAYANA SCHOOL, MAIN SCHOOL BUILDING, BAGKHAL, GT ROAD, RISHRA', '100, Grand Trunk Rd, Rishra,  WEST BENGAL 712248', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(236, 'ST. ANDREWS PUBLIC SCHOOL', 'RAJARHAT RD, JYANGRA PALLYSHREE TEGHARIA, BAGUIATI, KOLKATA WEST BENGAL 700059', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(237, 'ST. FRANCIS ELITE SCHOOL', 'PRAGATI PARK, JOKA  WEST BENGAL 700063', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(238, 'ST. FRANK HIGH SCHOOL', '52, PURNA CHANDRA MITRA LN, SWISS PARK BADAM TALLA, TOLLYGUNGE, KOLKATA WEST BENGAL 700033', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(239, 'ST. JOSEPH DAY SCHOOL', '238/2, BELILIOUS ROAD, HOWRAH  WEST BENGAL 711101', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(240, 'SUNNY GREEN PRIMARY SCHOOL', 'KUSUM KANAN, BAGHAJATIN COLONY  WEST BENGAL 700086', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(241, 'SURYODAYA SCHOOL, SANTOSHPUR KOLKATA', 'C/20/3, SURVEY PARK, SANTOSHPUR, KOLKATA  WEST BENGAL 700075', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(242, 'TALBAGAN LITTLE STAR SCHOOL', 'UNNAMED ROAD, TALBAGAN, PASCHIM PUTIARY  WEST BENGAL 700093', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(243, 'THE ABACUS CENTRAL SCHOOL', ' DOMJUR JAGADISHPUR RD, MONSATALA  DAFARPUR, HOWRAH WEST BENGAL 711405', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(244, 'THE NEW HORIZON HIGH SCHOOL', '15/3, 15A, PRIYANATH MALLICK ROAD, BAKUL BAGAN BHOWANIPORE, KOLKATA WEST BENGAL 700025', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(245, 'ULTADANGA GOVT. SPONSORED HIGHER SECONDARY SCHOOL FOR GIRLS', 'BAGMARI RD, BLOCK NUMBER 5, BRS 3 GHOSE BAGAN, KOLKATA WEST BENGAL 700054', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(246, 'VIDYA BHARATI GLOBAL SCHOOL', '37, SARAT BOSE LN, SARAT COLONY  NORTH DUMDUM, KOLKATA WEST BENGAL 700081', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(247, 'DEROZIO MISSION HIGH SCHOOL', '3/135, Ramkrishna Mission Rd Block 3, Jatindas Nagar, Belghoria West Bengal  700056', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(248, 'DUFF HIGH SCHOOL FOR GIRLS', '23a, Balaram Ghosh Street, Hati Bagan Hati Bagan, Shyam Bazar West Bengal  700004', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(249, 'SACRED HEART CHINESE SCHOOL AND CHAPEL', '73, METCALFE ST, CHOWRINGHEE NORTH, KOLKATA  WEST BENGAL 700013', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(250, 'H.M. EDUCATIONAL CENTRE', 'HINDMOTOR COLONY HINDMOTOR HOOGHLY 712233', 'Kolkata-Howrah,Hooghly', 'CBSE '),
(251, 'MOUNT LITERA ZEE SCHOOL', 'Majna Road, Gimageria, Dharmadasbar  Contai, West Bengal 721401  ', 'Kolkata-Howrah,Hooghly', 'CBSE '),
(252, 'ADAMAS INTERNATIONAL SCHOOL', '58/4, MM FEEDER RD  RATHTALA, P.O, BELGHORIA KOLKATA  700056', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(253, 'AGRASAIN BALIKA SIKSHA SADAN', '1, AGRASAIN STREET LILUAH HOWRAH  711204', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(254, 'AKSHAR', '35,DIAMOND HARBOUR ROAD 35, DIAMOND HARBOUR ROAD, KOLKATA KOLKATA  700027', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(255, 'ALBANY HALL PUBLIC SCHOOL ', '47,GORACHAND ROAD BENIAPUKUR, KOLKATA KOLKATA  700014', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(256, 'ANGLO - ARABIC SECONDARY SCHOOL', '46 / 7, MAHATMA GANDHI ROAD  BAITHAKKHANA KOLKATA  700009', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(257, 'ASSEMBLY OF ANGELS SECONDARY SCHOOL', 'BUNGALOW NO.80,MIDDLE ROAD P.O.BARRACKPORE KOLKATA  700120', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(258, 'ASSEMBLY OF CHRIST SCHOOL', '29, SN BANERJEE ROAD RIVER SIDE ROAD, CANTONMENT,BARRACKPORE KOLKATA  700120', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(259, 'ASSEMBLY OF GOD CHURCH SCHOOL', '25, PARK ST, MULLICK BAZAR, PARK STREET AREA  KOLKATA  700017', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(260, 'AUXILIUM CONVENT SCHOOL, BARASAT', 'TAKI ROAD  SIMULTALA, BARASAT KOLKATA  700124', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(261, 'AUXILIUM CONVENT SCHOOL, DUM DUM', 'P.K.GUHA ROAD  ARABINDA SARANI, RAJBARI, DUM DUM KOLKATA  700028', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(262, 'BHARAT ACADEMY & SCIENCES', 'NATIONAL HIGHWAY 6, BANITABLA, ULUBERIA, HOWRAH  HOWRAH  711316', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(263, 'CALCUTTA PUBLIC SCHOOL, BAGUIATI', 'ASHWINI NAGAR BAGUIATI KOLKATA  700159', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(264, 'CALCUTTA PUBLIC SCHOOL, BIDHAN NAGAR', '1, BIDHAN PARK STATE BANK COLONY, SECTOR-1, KOLKATA KOLKATA  700090', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(265, 'CALCUTTA PUBLIC SCHOOL, KALIKAPUR', '144E,KALIKAPUR MUKUNDAPUR, KOLKATA KOLKATA  700099', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(266, 'CAMELLIA INTERNATIONAL SCHOOL', 'HALDERDIGHI, GRAND TRUNK RD, BOINCHI  KOLKATA  712134', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(267, 'CENTRAL MODERN SCHOOL, BARANAGAR', '156,M.N.K.ROAD(S) BARANAGAR KOLKATA  700036', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(268, 'DELHI PUBLIC SCHOOL - NEWTOWN', 'ACTION AREA 1, BLOCK DG/ 3 NEWTOWN, RAJARHAT KOLKATA  700156', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(269, 'DEVAKI MEMORIAL SCHOOL', 'RECKJOANI HOSPITAL RD, MAJARHATI, NEWTOWN  KOLKATA  700135', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(270, 'DIVINE MERCY SCHOOL', 'DOMJUR RAJAPUR, AMTA, RAJAPUR,  HOWRAH  711405', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(271, 'DOLNA DAY SCHOOL', 'P-V, RASH BEHARI AVE CONNECTOR CIT SCHEME 47, KASBA, KOLKATA KOLKATA  700042', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(272, 'DON BOSCO SCHOOL, BANDEL', 'AVINASH MUKHERJEE ROAD, CHINSURAH  HOOGHLY 712103', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(273, 'DON BOSCO SCHOOL, LILUAH, HOWRAH', '109, ABHAY GUHA ROAD, LILUAH, HOWRAH  HOWRAH  711204', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(274, 'DON BOSCO SCHOOL, PARK CIRCUS', '23,DARGA ROAD,NEAR CHITTARANJAN HOSPITAL PARK CIRCUS, BENIAPUKUR, KOLKATA KOLKATA  700017', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(275, 'DOUGLAS MEMORIAL H.S. SCHOOL', '52,BARRACK ROAD BARRACKPORE KOLKATA  700120', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(276, 'DREAMLAND SCHOOL, MAKHLA', '98, T N MUKHERJEE ROAD MAKHLA, HOOGHLY HOOGHLY 712245', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(277, 'EL - BETHEL SCHOOL', 'RASAPUNJA, BAKHARAT ROAD, SANKHARIPOTA  KOLKATA  700104', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(278, 'ELIAS MEYER SCHOOL & TT', '50,BB GANGULY STREET PODDAR COURT, BOWEST BWNGALAZAR KOLKATA  700012', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(279, 'G.D. BIRLA CENTRE FOR EDUCATION', '118, NETAJI SUBHASH CHANDRA BOSE RD REGENT COLONY, REGENT PARK, KOLKATA KOLKATA  700040', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(280, 'GARDEN HIGH SCHOOL', ' 318, PRANTIK PALLY RD RAJDANGA, KASBA, KOLKATA KOLKATA  700107', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(281, 'GARIA VIDYABHAVANA SOUTH SCHOOL', 'TENTULBERIA RD, TENTULBERIA MAUZA TENTULBERIA, GARIA, KOLKATA KOLKATA  700084', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(282, 'GEMS AKADEMIA INTERNATIONAL SCHOOL', 'BAKRAHAT ROAD THAKURPUKUR, PO: RASAPUNJA KOLKATA  700104', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(283, 'GRACE LING LANG ENGLISH SCHOOL', '14,GOBINDA CHANDRA KHATIK ROAD TOPSIA KOLKATA  700046', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(284, 'HARROW HALL', 'NO 27,PARK STREET  KOLKATA 700016', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(285, 'HARVARD HOUSE HIGH SCHOOL', '18,SOUTH TANGRA ROAD  KOLKATA 700010', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(286, 'HIRENDRA LEELA PATRANAVIS SCHOOL', '25/20, PRINCE GOLAM MOHAMMAD SHAH RD GOLF GARDENS, TOLLYGUNGE, KOLKATA KOLKATA 700095', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(287, 'HOLY FAMILY CONVENT SCHOOL', '55/4, RABINDRA SARANI,BHATTA NAGAR LILUAH HOWRAH  711204', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(288, 'HOLY HOME', '24,27,28B, T.C. GOSWAMI STREET SERAMPORE, HOOGHLY HOOGHLY 712201', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(289, 'IDEAL PUBLIC SCHOOL, HOWRAH', 'KULGACHIA ULUBERIA HOWRAH  711303', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(290, 'INDIRA MEMORIAL ENGLISH MEDIUM HIGH SCHOOL', '12, SACHIN MITRA LN BIDHAN SARANI, BAGHBAZAR KOLKATA 700003', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(291, 'INTERNATIONAL PUBLIC SCHOOL', 'MADHYAMGRAM MUNICIPALITY WARD 17, MICHAEL NGAR SUKANTA NAGAR, MICHAEL NAGAR, MADHYAMGRAM, KOLKATA KOLKATA 70013', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(292, 'JIBREEL INTERNATIONAL SCHOOL', '1, SHAMSUL HUDA ROAD NEAR QUEST MALL  PARK CIRCUS, BALLYGUNGE KOLKATA 700017', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(293, 'JIBREEL INTERNATIONAL SCHOOL', '1, SAMSUL HUDA RD BALLYGUNGE PARK  KOLKATA 700017', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(294, 'JULIEN DAY SCHOOL, ELGIN ROAD', '35-E, ELGIN ROAD SREEPALLY, BHOWANIPORE KOLKATA 700020', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(295, 'JULIEN DAY SCHOOL, GANGANAGAR', 'JESSORE ROAD JESSORE ROAD, GANGANAGAR KOLKATA 700132', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(296, 'JULIEN DAY SCHOOL, HOWRAH', 'KONA EXPRESSWAY,  NIBRA HOWRAH  711409', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(297, 'K.E. CARMEL SCHOOL, SARISHA', 'DIAMOND HARBOUR RD, JHINGA  SOUTH 24 PARGANAS 743368', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(298, 'KANCHRAPARA ENGLISH MEDIUM SCHOOL', 'UNNAMED ROAD, HALISAHAR, KANCHRAPARA  KANCHRAPARA  743145', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(299, 'GRACE LING LIANG HIGH SCHOOL ', 'P7, HIDE LANE NEAR CENTRAL METRO STATION (MAP) KOLKATA 700012', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(300, 'LIONS CALCUTTA GREATER VIDYA MANDIR', 'CHOWHATI BATTOLA BAZAR, RAJPUR, KOLKATA  KOLKATA 700149', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(301, 'LITTLE STAR HIGH SCHOOL', '154, G.T. ROAD   HOWRAH 711201', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(302, 'LORETO CONVENT, ENTALLY', '1, CONVENT LANE TANGRA KOLKATA 700015', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(303, 'LORETO DAY SCHOOL, BOWEST BWNGALAZAR  ', '65, BB GANGULY STREET,  BOWEST BWNGALAZAR KOLKATA 700012', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(304, 'LORETO DAY SCHOOL, DHARAMTALA ', '169, LENIN SARANI ROAD NEAR ESPLANADE METRO, DHARAMTALA KOLKATA 700013', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(305, 'LORETO HOUSE', '7,MIDDLETON ROW PARK STREET KOLKATA 700071', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(306, 'LOYOLA HIGH SCHOOL', '54/3, DIAMOND HARBOUR ROAD, NEAR CMRI HOSPITAL  KOLKATA 700027', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(307, 'LYCÉE SCHOOL, KOLKATA', '10/1, HINDUSTAN ROAD GARIAHAT, KOLKATA KOLKATA 700029', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(308, 'M.C. KEJRIWAL VIDYAPEETH', '243, G.T.ROAD(N),  LILUAH HOWRAH  711204', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(309, 'M.P. BIRLA FOUNDATION H.S. SCHOOL', 'JAMES LONG SARANI BEHALA KOLKATA 700034', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(310, 'MAHADEVI BIRLA SHISHU VIHAR', '4, IRON SIDE RD, BALLYGUNGE PARK, BALLYGUNGE  KOLKATA 700019', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(311, 'MAHARISHI VIDYA MANDIR', '344/1,N.S.C.BOSE ROAD USHA PALLY, GARIA, KOLKATA KOLKATA 700047', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(312, 'MAHAVIR INSTITUTE OF EDUCATION & RESEARCH', '17/1,CANAL STREET  SEALDAH, CANAL STREET, KOLKATA KOLKATA 700014', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(313, 'MANGALAM VIDYA NIKETAN', 'SRCM RD, CHIRIAMORE, KAIKHALI  KOLKATA 700136', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(314, 'MANSUR HABIBULLAH MEMORIAL SCHOOL', 'HAMIDA HALL, 31, CHANDI GHOSH RD KUDGHAT, ASHOK NAGAR, TOLLYGUNGE, KOLKATA KOLKATA 700040', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(315, 'MARIAN CO - EDUCATIONAL SCHOOL', '120/6, N. DEB BANERJEE ROAD PICNIC GARDEN KOLKATA 700039', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(316, 'MEGHMALA ROY EDUCATION CENTRE', '26 - A, R.B. ROAD ROYD PARK,  BEHALA KOLKATA 700134', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(317, 'MODERN HIGH SCHOOL FOR GIRLS\n', '78,SYED AMIR ALI AVENUE BALLYGUNGE KOLKATA 700019', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(318, 'MONALISA ENGLISH SCHOOL', 'MADHYAMGRAM OPP. & BEHIND MUNICIPALITY OFFICE,  CHOWMATHA KOLKATA 700129', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(319, 'NARMADA SCHOOL', '154/1, NETAJI SUBHASH CHANDRA BOSE RD GANDHI COLONY, NETAJI NAGAR, KOLKATA KOLKATA 700092', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(320, 'NATIONAL ENGLISH SCHOOL, BAGUIHATI', 'VIP ROAD BAGUIATI, BESIDE BIG BAZAR KOLKATA 700059', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(321, 'NATIONAL GEMS HIGHER SECONDARY SCHOOL', '4/5 ,DR.A.K.PAUL ROAD BEHALA KOLKATA 700034', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(322, 'ORIENT DAY SCHOOL', '33B,JAMES LONG SARANI NDRAJIT PALLY, BEHALA, KOLKATA KOLKATA 700034', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(323, 'OUR LADY QUEEN OF THE MISSIONS SCHOOL', '34, SYED AMIR ALI AVENUE  PARK CIRCUS KOLKATA 700017', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(324, 'OUR LADY QUEEN OF THE MISSIONS SCHOOL', '260A, HB-BLOCK SECTOR-III, SALT LAKE CITY KOLKATA 700106', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(325, 'OXFORD HIGH SCHOOL', '1011,1012, ANDUL RD,   SHIBPUR HOWRAH  711109', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(326, 'OXFORD HOUSE', '49 B, BALLYHUNGE PLACE  KOLKATA 700019', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(327, 'PAILAN WORLD SCHOOL', 'PLOT B-187, PHASE-III BENGAL PAILAN PARK, AAMGACHIA ROAD, JOKA KOLKATA 700104', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(328, 'PEARLS OF GOD', '5/4, DEBAIPUKUR ROAD HIND MOTORS DEBAIPUKUR   HOOGHLY 712233', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(329, 'PRAMILA MEMORIAL INSTITUTE', 'AB-8/23, DESHBANDHU NAGAR  KOLKATA 700059', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(330, 'PRATT MEMORIAL SCHOOL', '168, ACHARYA JAGADISH CH. BOSE ROAD  KOLKATA 700014', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(331, 'PURUSHOTTAM BHAGCHANDKA ACADEMIC SCHOOL', '63, BASANTA LAL SAHA RD SARAT PALLY, PASCHIM PUTIARY KOLKATA 700041', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(332, 'PURWANCHAL VIDYAMANDIR', 'P-232,C.I.T. ROAD SCHEME-VI(M), KAKURGACHI KOLKATA 700054', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(333, 'RABINDRA PATH BHABAN ACADEMY', '52, OLD NIMTA ROAD BELGHARIA, NEAR RAILWAY GATE NO. 2 KOLKATA 700083', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(334, 'RAJASTHAN VIDYA MANDIR', ' 36 BANARASI, BARANASI GHOSH ST,  JORASANKO KOLKATA 700007', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(335, 'RAM KRISHNA HINDI VIDAYALYA', 'BHATTA NAGAR   LILUAH HOWRAH  711203', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(336, 'RAM MOHAN MISSION HIGH SCHOOL', 'P1/C,440 B PRINCE ANWAR SHAH ROAD  LAKE GARDENS KOLKATA 700045', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(337, 'RATNAKAR NORTH POINT SCHOOL', '98-R, DR ABANI DUTTA RD, LILUAH HOWRAH  711101', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(338, 'RISHI AUROBINDO MEMORIAL ACADEMY', '134, P.K GUHA ROAD ADJACENT TO KUMARPARA POST OFFICE KOLKATA 700028', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(339, 'ROSEBUD SCHOOL', '268, BLOCK - A G.T. ROAD MAKHLA, UTTARPARA, HOWRAH  711204', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(340, 'SAIFEE GOLDEN JUBILEE ENGLISH PUBLIC SCHOOL', '9, PARK LANE TALTALA, KOLKATA KOLKATA 700016', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(341, 'SALT LAKE SCHOOL', 'CA - 221, CA BLOCK, SECTOR 1, BIDHANNAGAR  KOLKATA 700064', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(342, 'SALTLAKE POINT SCHOOL', 'CD-249,SECTOR-1 SALT LAKE CITY KOLKATA 700064', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(343, 'SEVENTH DAY ADVENTIST SENIOR SECONDARY SCHOOL', '36, PARK ST, MULLICK BAZAR, PARK STREET AREA  KOLKATA 700016', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(344, 'SHAW PUBLIC SCHOOL', '6,FAKIR PARA ROAD BEHALA KOLKATA 700034', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(345, 'SHRI DAULATRAM NOPANY VIDYALAYA', '2B, NANDA MALLICK LANE NEAR GIRISH PARK METRO NUTAN BAZAR, JORASANKO KOLKATA 700006', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(346, 'SISTER NIVEDITA INSTITUTE', '53 & 54 SAILO MUKHERJEE ROAD,  BABUDANGA, GOLABARI, P.S, HOWRAH HOWRAH  711101', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(347, 'SOUTH CITY INTERNATIONAL SCHOOL', '375 A, PRINCE ANWAR SHAH ROAD SOUTH CITY COMPLEX, JADAVPUR, KOLKATA KOLKATA 700068', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(348, 'SOUTH END CENTRE', '181, ANDUL ROAD, DANESH SHEIKH LANE, HOWRAH  HOWRAH 711103', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(349, 'SRI AUROBINDO INSTITUTE OF EDUCATION', '9-12,CL BLOCK,SECTOR-2 SALT LAKE CITY KOLKATA 700091', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(350, 'SRI RAM NARAYAN SINGH MEMORIAL HIGH SCHOOL', '10, NARAYAN ROY SARANI, NEAR VIVEKANANDA ROAD SIMLA, MACHUABAZAR, KOLKATA KOLKATA 700006', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(351, 'SRI SRI ACADEMY', '37A,ALIPORE ROAD  KOLKATA 700027', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(352, 'YOUNG HORIZON SCHOOL', '220, SINGHABARI, KALIKAPUR, PURBA DIGANTA SANTOSHPUR, KOLKATA KOLKATA 700099', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(353, 'WEST POINT ACADEMY', '177, GRAND TRUNK RD, MAHESH MASIRBARI, MAHESH) P.O, SERAMPORE HOOGHLY 712202', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(354, 'WELLAND GOULDSMITH SCHOOL, BOWEST BWNGALAZAR', '288,BEPIN BEHARI GANGULY STREET PODDAR COURT, BOWEST BWNGALAZAR, KOLKATA KOLKATA 700012', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(355, 'ST. CLARE SCHOOL', 'B - 25, AUROBINDO PARK  PURBAPUTIARY KOLKATA 700093', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(356, 'WELLAND GOULDSMITH SCHOOL (PATULI)', ' EASTERN METROPOLITAN BYPASS LINK ROAD BAISHNABGHATA PATULI TOWNSHIP, PATULI, KOLKATA KOLKATA 700094', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(357, 'WELKIN NATIONAL SCHOOL', 'BARUIPUR - CANNING RD, NEAR RASHMATH MAHA PRABHU TALA, BARUIPUR KOLKATA 700144', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(358, 'W. W. A. COSSIPORE ENGLISH SCHOOL BUVJUS', ' 4, DUM DUM ROAD, SEVEN TANKS LN  KOLKATA 700002', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(359, 'VIVEKANANDA MISSION SCHOOL, JOKA', '13, VIVEK VILLE, OPPOSITE IIM, PAILAN, KOLKATA  KOLKATA 700104', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(360, 'ST. HELEN SCHOOL', '21 B, RANI SHANKARI LANE  JATIN DAS PARK, PATUAPARA, BHOWANIPORE KOLKATA 700025', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(361, 'VISION INTERNATIONAL SCHOOL', '56, TN MUKERJEE RD, CHARAKTALA, MAKHLA, UTTARPARA  HOOGHLY 712245', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(362, 'ST. PETER’S HIGH SCHOOL', '90,A.J.C. BOSE ROAD MAULA ALI, ENTALLY, KOLKATA KOLKATA 700014', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(363, 'STEM WORLD SCHOOL', 'NEAR BARRACKPORE WIRELESS MORE PATULIA, BARRACKPORE WEST BENGAL 700120', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(364, 'THE ASSEMBLY OF GOD CHURCH SCHOOL', '125/1,PARK STREET MULLICK BAZAR, PARK STREET AREA, KOLKATA KOLKATA 700017', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(365, 'THE ASSEMBLY OF GOD CHURCH SCHOOL- JUNIOR SECTION', '18/1, ROYL STREET, TALTALA  KOLKATA 700016', 'Kolkata-Howrah,Hooghly', 'ICSE');
INSERT INTO `school_list` (`id`, `school_name`, `school_address`, `school_location`, `board`) VALUES
(366, 'THE BGES SCHOOL (ISCE)', '12B, HEYSHYAM ROAD, BHAWANIPUR, KOLKATA  KOLKATA 700020', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(367, 'THE BGES SCHOOL (ISE)', '5, ELGIN ROAD BHAWANIPORE KOLKATA 700020', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(368, 'THE FRANK ANTHONY PUBLIC SCHOOL ', '171, ACHARYA JAGADISH CHANDRA BOSE ROAD, BENIAPUKUR  KOLKATA 700014', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(369, 'THE FUTURE FOUNDATION SCHOOL', '3,REGENT PARK  KOLKATA 700040', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(370, 'THE HERITAGE SCHOOL', '994, CHOWEST BWNGALAGA RD, ANANDAPUR, EAST KOLKATA TWP  KOLKATA 700107', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(371, 'UNION CHAPEL SCHOOL ', '137, LENIN SARANI, DHARMATALA, DHARMATALA, KOLKATA  KOLKATA 700013', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(372, 'UNITED MISSIONARY GIRLS’ HIGH SCHOOL', '3,ASUTOSH MUKHERJEE ROAD  KOLKATA 700020', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(373, 'VIDYA NIKETAN', 'VIVEKANANDA PARK ROAD BANSDRONI P.O. REGENT PARK KOLKATA 700070', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(374, 'VIKRAMSILA ACADEMY\n', 'MOHIYARI RD, JAGACHA, HOWRAH  HOWRAH 711112', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(375, 'GENIUS NATIONAL SCHOOL', '71/13, Topsia Road (South  West Bengal  700046', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(376, 'HK EDUCATION', '15F, Topsia Rd, Topsia,  Kolkata 700039', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(377, 'KV BARRACKPORE', 'Po Barrackpore,  West Bengal  700120', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(378, 'THE NORTH ACADEMY', '47/C Rabindra Sarani Sova Bazar Road, Grey St, Raja Nabakrishna Street West Bengal 700005', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(379, 'TECHNO INDIA GROUP PUBLIC SCHOOLS-ARIADAHA', '5, N Nowdapara Rd,  Kamarhati, Ariadaha West Bengal 700057', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(380, 'TALBAGAN LITTLE STAR SCHOOL', 'Unnamed Road, Talbagan,  Paschim Putiary, Kolkata West Bengal 700093', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(381, 'SWARNA SCHOOL', '126A, Rash Behari Ave Lake Market, Kalighat KOLKATA 700029', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(382, 'MOTHERS MISSION SCHOOL', 'Unit 1: 86, Unit 2: 7, Roy bahadur Road, Kaliprasanna Chattarjee Road, Behala, Kolkata, West Bengal 700034 Kali', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(383, 'ST FLORENCE ENGLISH MEDIUM SCHOOL', 'Behala Chowrasta, Bata Colony, Barisha, KOLKATA 700008', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(384, 'SHIKSHA YATAN SCHOOL', '  KOLKATA ', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(385, 'AGRASAIN BOYS SCHOOL', '21/A, AGRASAIN STREET LILUAH   HOWRAH  711204', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(386, 'ARMENIAN COLLEGE AND PHILANTHROPIC ACADEMY', '56 B, MIRZA GHALIB STREET   KOLKATA  700016', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(387, 'AUTHPUR NATIONAL MODEL SCHOOL', 'GHOSH PARA ROAD, SHYAMNAGAR, KOLKATA  NORTH 24 PARGANAS 743127', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(388, 'AUXILIUM CONVENT SCHOOL, BANDEL', 'LENIN PALLY, SAHAGANJ, BANDEL  WEST BENGAL  712103', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(389, 'AUXILIUM PARISH CHURCH SCHOOL', '8A, MAHENDRA ROY LN, SEAL LANE TANGRA, KOLKATA WEST BENGAL 700046', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(390, 'B.R.S ENGLISH MEDIUM SCHOOL', 'BD-62, RABINDRA PALLY RD, RABINDRAPALLY KESTOPUR, KOLKATA WEST BENGAL 700101', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(391, 'BALLYGUNGE PARK DAY SCHOOL', 'P-1, SUHRAWARDY AVENUE, PARK CIRCUS, KOLKATA  WEST BENGAL 700017', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(392, 'BEACON ENGLISH SCHOOL', '46, SIR SYED AHMED RD, ENTALLY  WEST BENGAL 700014', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(393, 'CARMEL SCHOOL, BUDGE BUDGE', 'BUDGE BUDGE TRUNK ROAD, MAHESHTALA  PARBANGLA, BUDGE BUDGE, KOLKATA KOLKATA  700137', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(394, 'CENTRAL POINT SCHOOL', '62, BB GANGULY STREET, BOWEST BWNGALAZAR  WEST BENGAL 700110', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(395, 'COSSIPORE INSTITUTION FOR GIRLS', '86, COSSIPORE ROAD, BARANAGAR BAZAR SATCHASI PARA, KOLKATA WEST BENGAL 700002', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(396, 'ST. XAVIER,S COLLEGIATE SCHOOL', '30, PARK ST, MULLICK BAZAAR PARK STREET AREA KOLKATA 700016', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(397, 'CYGNET DAY SCHOOL', 'KALUPUR, BONGAON, UNAI  NORTH 24 PARGANAS 743235', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(398, 'LORETO DAY SCHOOL, ELLIOT ROAD', '9, ELLIOT ROAD, KOLKATA  KOLKATA 700016', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(399, 'DAFFODILS HIGH SCHOOL', '24, 46E SAMSUL HUDA ROAD, RIFLE RANGE ROAD RIFLE RANGE, PARK CIRCUS, BALLYGUNGE, KOLKATA WEST BENGAL 700017', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(400, 'DUM DUM SREE KRISHNA VIDYALAYA', 'WARD NUMBER 22, AMARPALLI, DUM DUM, KOLKATA  KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(401, 'FAMILIA SCHOOL', 'KANCHRAPARA - HARINGHATA RD, DAIBAGNAPUR  WEST BENGAL 743145', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(402, 'GENIUS NATIONAL SCHOOL', '71/13, TOPSIA ROAD (SOUTH)  WEST BENGAL 700046', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(403, 'GOSPEL HOME SCHOOL', '21 A / 1, SATYA CHARAN STREET RISHRA MAHESH BOSE PARA, RISHRA HOOGHLY 712248', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(404, 'HOLY CROSS SCHOOL', ' NH12, JOGIBATTALA, KHASMALLIK BARUIPUR KOLKATA 700145', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(405, 'HOWARD MEMORIAL SCHOOL', 'DEBINIBAS RD, WARD NUMBER 22, AMARPALLI  SOUTH DUM DUM, KOLKATA WEST BENGAL 700074', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(406, 'JAGRITHI VIDYAPEETH', '80/A, BONDEL RD, BALLYGUNGE PLACE BALLYGUNGE, KOLKATA WEST BENGAL 700019', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(407, 'JIBREEL INTERNATIONAL SCHOOL , BYPASS UNIT', '2, 13, 6, MAHENDRA ROY LANE GOBRA, KOLKATA WEST BENGAL 700046', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(408, 'JULIEN DAY SCHOOL, KALYANI', 'A-10 SCHOOL AREA KALYANI, NADIA  WEST BENGAL 741235', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(409, 'KAMALA CHATTERJEE SCHOOL', '4/20, FERN ROAD, BALLYGUNGE GARDENS  GARIAHAT, KOLKATA WEST BENGAL 700019', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(410, 'KENDRIYA VIDYALAYA GARDEN REACH', ' SOUTH COLONY ROAD, RAIL COLONY GARDEN REACH, KOLKATA WEST BENGAL 700043', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(411, 'K.E. CARMEL SCHOOL, BEHALA', '1/14A, BANAMALI GHOSAL LANE NEAR BEHALA BLIND SCHOOL KOLKATA 700034', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(412, 'KOLKATA MODEL SCHOOL', '73, JAMES LONG SARANI, NABAPALLY, JOKA, KOLKATA  WEST BENGAL 700104', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(413, 'LING LIANG HIGH SCHOOL', 'RAJMOHAN ST, KOLUTOLLA  WEST BENGAL 700073', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(414, 'MODERN DAY SCHOOL', '16, DR SUDHIR BOSE RD, EKBALPUR KHIDIRPUR, KOLKATA WEST BENGAL 700023', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(415, 'MODERN ENGLISH ACADEMY', '34, PARK ROAD BARRACKPORE NORTH 24 PARGANAS  KOLKATA 700120', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(416, 'NALANDA VIDYAPEETH', 'CHAK RAMNAGAR, KOLKATA  WEST BENGAL 700041', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(417, 'NARMADA SCHOOL', '154/1, NETAJI SUBHASH CHANDRA BOSE RD GANDHI COLONY, NETAJI NAGAR, KOLKATA WEST BENGAL 700040', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(418, 'NEW AGE PUBLIC SCHOOL', 'VILLAGE & P.O. CHAMPAPUKUR BASIRHAT COLLEGE ROAD   NORTH 24 PARGANAS 743291', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(419, 'NIVEDITA MISSION SCHOOL', 'NALAPUKUR LN, INDRAJIT PALLY, BEHALA  WEST BENGAL 700034', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(420, 'NOPANY HIGH', '2-C, NANDO MULLICK LANE  NEAR GIRISH PARK METRO NUTAN BAZAR, JORASANKO KOLKATA 700006', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(421, 'NORTH POINT SCHOOL', '3, BHUKAILASH RD, BABU BAZAR, KHIDIRPUR  WEST BENGAL 700023', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(422, 'PARK INSTITUTION', 'A - 112, H.B. TOWN SODEPUR NORTH 24 PARGANAS  KOLKATA 700114', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(423, 'PAULS DAY SCHOOL', '16, RAJAB ALI LANE, KOLKATA  WEST BENGAL 700023', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(424, 'R.P. ACADEMY ENGLISH MEDIUM SCHOOL', 'BUS STOP, 101 TOLLYGUNGE CIRCULAR ROAD NEAR TOLLYGUNGE MAHABIRTALA, AJOY NAGAR, BUROSHIBTALLA, NEW ALIPORE WEST', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(425, 'S. E. RLY. MIXED HIGH SCHOOL (ENGLISH MEDIUM )', 'LOCOSHED ROAD, SANTRAGACHI, HOWRAH  WEST BENGAL 711109', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(426, 'S.L. BAJORIA FOUNDATION HIGH SCHOOL', 'BIBIRHAT ROAD, NEAR BANK OF INDIA, DIST, SAJUA  WEST BENGAL 743377', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(427, 'SACRED HEART SCHOOL', '19A/1, PRASANNA NASKAR LANE TILJALA KOLKATA 700039', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(428, 'HOLY MISSION', '774, KRISHNA CHANDRA DEY SARANI, BLOCK P, NEW ALIPORE NEW ALIPORE, KOLKATA KOLKATA 700053', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(429, 'SIMON DAY SCHOOL', 'EKDALIA RD, EKDALIA, BALLYGUNGE  WEST BENGAL 700019', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(430, 'SINTHI RAMKRISHNA SANGHA VIDYAMANDIR (FOR GIRLS)', '4Q, GOUR SUNDER SETH LN, SINTHI  WEST BENGAL 700050', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(431, 'SOUTH EASTERN RAILWAY MIXED HIGHER SECONDARY SCHOOL', 'LOCOSHED ROAD, SANTRAGACHI, HOWRAH  HOWRAH  711109', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(432, 'PRETORIA HIGH SCHOOL', '3, PRETORIA STREET KOLKATA  KOLKATA 700071', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(433, 'SRI RAM NARAYAN SINGH MEMORIAL HIGH SCHOOL, ', '1582/7, RAJDANGA MAIN RD, ANANDAPUR, EAST KOLKATA TWP, KOLKATA  SOUTH 24 PARGANAS 700107', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(434, 'ST FRANCIS INTERNATIONAL SCHOOL', 'P-188, CIT SCHEME IVM,, SUREN SARKAR ROAD  WEST BENGAL 700010', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(435, 'ST. ANTHONY SCHOOL', 'STRAND ROAD, CHANDANNAGAR, HYGALI STRAND ROAD, KOLKATA WEST BENGAL 700036', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(436, 'STRATFORD DAY SCHOOL', 'WEST KAMARTHUBA ROAD, HABRA  WEST BENGAL 743268', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(437, 'SUN SHINE ENGLISH SCHOOL', '8A, TILJALA PLACE, KOLKATA  WEST BENGAL 700017', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(438, 'THE ASSEMBLY OF GOD CHURCH - JUNIOR SECTION', '18/1, ROYD ST, TALTALA, KOLKATA  WEST BENGAL 700016', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(439, 'THE ASSEMBLY OF GOD CHURCH SCHOOL - TANGRA', '34, MATHESWARTALA ROAD, TANGRA  WEST BENGAL 700046', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(440, 'THE CENTRAL MODERN SCHOOL', '4/1, GHOLA KACHARY ROAD P.O. KAZIPARA BARASAT   WEST BENGAL 700124', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(441, 'THE LORETO ENGLISH MEDIUM SCHOOL', '11/C, BARRACKPORE TRUNK RD, GOVERNMENT QUARTERS RATHTALA, SANTHI NAGRA COLONY, BELGHORIA, KOLKATA WEST BENGAL 7', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(442, 'COSSIPORE INSTITUTION FOR GIRLS', '86, Cossipore Road, Baranagar Baza  Kolkata 700002', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(443, 'DREAMLAND SCHOOL', '48/1W, BARRACKPORE TRUNK RD  UNIVERSITY OF CALCUTTA, KOLKATA WEST BENGAL 700050', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(444, 'H.S. MEMORIAL SCHOOL', 'KARMA COMPLEX, VILLAGE BAKSHA P.O.- BAKSHA, P.S. CHANDITALA DANKUNI  HOOGHLY 712304', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(445, 'NATIONAL ENGLISH SCHOOL, VIP ROAD CAMPUS', 'VIP ROAD, BAGUIATI, BESIDE BIG BAZAAR  WEST BENGAL 700059', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(446, 'NEW INTERNATIONAL PUBLIC SCHOOL', '25, RISHI BANKIM CHANDRA ROAD MAHENDRA COLONY, GOLPARK, DUM DUM WEST BENGAL 700028', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(447, 'ST. CLARET SCHOOL, DEBPUKUR', '2, KALYANI EXPY, PURBASHA, KALYANI EXPY  PURBASHA, JAFFARPUR PANCHANANTALA, BARRACKPORE WEST BENGAL 700122', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(448, 'ABBOT SHISHU HALL', 'IMAMBAZAR ROAD  CHOWK BAZAR, OLAICHANDITALA, CHINSURAH HOOGHLY 712103', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(449, 'DE PAUL SCHOOL', '209/1/1, NETAJI SUBHASH CHANDRA BOSE RD NAKTALA, REGENT GROVE, BANSDRONI WEST BENGAL 700047', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(450, 'HOLY HOME', '24, 27, & 28B, TC GOSWAMI ST, SERAMPORE  HOOGHLY 712201', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(451, 'HOLY HOME', ' SUBODH GARDEN, SUBODH PARK BANSDRONI KOLKATA 700070', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(452, 'HOLY ROCK SCHOOL', 'NAWABHAT NATIONAL HIGHWAY 2B KOLKATA 713101', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(453, 'SAINT THOMAS INSTITUTION', 'SHOP NO. P- 563, NEW ALIPORE RD, BLOCK N NEW ALIPORE, KOLKATA WEST BENGAL 700053', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(454, 'VIDYANJALI HIGH SCHOOL', '20/1,RAMMOHAN DUTTA ROAD SREEPALLY, BHOWANIPORE, KOLKATA KOLKATA 700020', 'Kolkata-Howrah,Hooghly', 'IB'),
(455, 'CHINSURAH BALIKA BANI MANDIR', 'GHATAKPARA, CHINSURAH WEST BENGAL WEST BENGAL 712101', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(456, 'CHINSURAH DESHBANDHU MEMORIAL HIGH SCHOOL', 'KAMARPARA MORE ROAD, CHINSURAH R S WEST BENGAL WEST BENGAL 712101', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(457, 'DEBISWARI VIDYAYATAN', 'MAKHLA P.S. UTTARPARA, HOOGHLY WEST BENGAL WEST BENGAL 712245', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(458, 'JADAVPUR HIGH SCHOOL', '17, EAST ROAD, JADAVPUR, KOLKATA  WEST BENGAL 700032', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(459, 'KUMAR ASHUTOSH INSTITUTION (MAIN) BOYS', ' 8E, DUM DUM RD, SATPUKUR  WEST BENGAL 700030', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(460, 'PEARL ROSARY SCHOOL - MAHESH', '40, SATISH CHANDRA GHOSH LN, MAHESH MAHESH COLONY, SERAMPORE WEST BENGAL 712202', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(461, 'SAMARITAN MISSION SCHOOL', '47/2, NOOR MOHAMMEDD MUNSHI LN KADAM TALA, HOWRAH WEST BENGAL 711101', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(462, 'CALCUTTA ANGLO GUJARATI SCHOOL, BOYS MARKETTING ', '6, POLLOCK STREET , PS HARE STREET 5, India Exchange Place Road, Poddar Court, 29, Pollock St, Chitpur KOLKATA ', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(463, 'A. K. GHOSH MEMORIAL HIGH SCHOOL', '164/A/6 PRINCE ANWAR SHAH ROAD RAJENDRA PRASAD COLONY, LAKE GARDENS KOLKATA  700045', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(464, 'A.S. MODEL SCHOOL', '49A, RAMMOHAN BERA ST, TOPSIA  WEST BENGAL 700039', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(465, 'BALIKA SIKSHA SADAN', '6,A, BT RD, TALLAHA, SHYAM BAZAR.   KOLKATA  700002', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(466, 'ADARSHA BUNIADI VIDYAMANDIR', '76, JESSORE RD, INTERNATIONAL AIRPORT MOTILAL COLONY, RAJBARI, DUM DUM, KOLKATA KOLKATA 700079', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(467, 'ADARSHA HINDI VIDYALAYA', 'M C MITRA RD PO HAZINAGAR   PS NAIHATI BARRACKPORE 24 PGS N  WEST BENGAL 743135', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(468, 'AGARPARA MAHAJATI VIDYAPITH', 'NILGUNJ RD, TETULTALA, AGARPARA  KOLKATA 700109', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(469, 'AGARPARA NETAJI SHIKSHAYATAN (H.S.)', 'TARAPUKUR ROAD,  TARA PUKUR SOUTH WEST BENGAL 700109', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(470, 'AGARPARA SABITRI MAHAJATI BALIKA VIDYAPITH', 'TETULTALA, MATAGIRI HARNA PALLY, AGARPARA Kolkata, West Bengal KOLKATA  700109', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(471, 'ALAMBAZAR MAHENDRANATH HIGH SCHOOL ', ' 80 SURYA SEN ROAD BARRACKPORE PO ALAMBAZAR SURYA SEN RD, ALAMBAZAR, BARANAGAR, KOLKATA KOLKATA 700035', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(472, 'ALAMBAZAR URDU HIGH SCHOOL', '141, BARAHANAGAR JUTE MILL AREA ASHOKGARH, KOLKATA KOLKATA 700035', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(473, 'ALIPORE GIRLS & BOYS HIGH SCHOOL', '4,BRAUNFIELD LN MOMINPORE KOLKATA  700027', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(474, 'ALIPORE TAKSHAL VIDYAPITH(H.S)', '23N/1, GORAGACHA RD, ALIPORE MINT COLONY, ALIPORE  KOLKATA 700088', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(475, 'ANANDA ASHRAM SARADA VIDYAPITH', '104, BARRACKPORE TRUNK RD, BONHOOGHLY C BLOCK BONHOOGHLY GOVERNMENT COLONY KOLKATA  700108', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(476, 'ANDHRA ASSOCIATION SCHOOL', '13A, SHAHNAGAR ROAD PS TOLLYGUNGE PO KALIGHAT KOLKATA  700026', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(477, 'ANDREWS HIGH SCHOOL', '33, GARIAHAT ROAD SOUTH  DHAKURIA,SELIMPUR KOLKATA  700031', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(478, 'ANJUMAN MUFIDUL ISLAM GIRLS HIGH SCHOOL\n', '20, NOOR ALI LANE, BENIAPUKUR RD, ENTALLY, KOLKATA  KOLKATA  700014', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(479, 'ARIADAHA KALACHAND HIGH SCHOOL', '18 M M FEEDER RD PO ARIADAHA PS BELGHARIA SUB DIV BARRACKPORE KOLKATA 700057', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(480, 'ARIADAHA RAMANAND CHARITY VIDYALAYA', '161, MM FEEDER RD, SP PAUL PALLY ARIADAHA KOLKATA  700057', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(481, 'ARIADAHA SREE VIDYANIKETAN HIGH SCHOOL', '41/1/H A C BANERJEE RD PO ARIADAHA SUB DIV BARRACKPORE  PS BELGHARIA  KOLKATA 700057', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(482, 'ARYA KANYA MAHA VIDYALAYA       MUKTA', '20,BIDHAN SARANI SIMLA, MACHUABAZAR, KOLKATA KOLKATA  700006', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(483, 'ARYA PARISHAD VIDYALAYA', 'NO 1 NIMAK MAHAL ROAD CIRCULAR GARDEN REACH ROAD KOLKATA  700043', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(484, 'ATHPUR HIGH SCHOOL', 'GHOSHPARA RD, AUTHPUR, SHYAMNAGAR, BHATPARA Bhatpara, West Bengal WEST BENGAL 743128', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(485, 'BAGBAZAR MULTIPURPOSE GIRL’S SCHOOL', '65A, BAGHBAZAR STREET BAG BAZAR COLONY, BAGHBAZAR KOLKATA  700003', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(486, 'BALIKA SIKSHA SADAN', 'GIRISH PARK, 20A, VIVEKANANDA RD MANICKTALA, AZAD HIND BAG, MACHUABAZAR KOLKATA  700006', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(487, 'BALIVARA SARASWATI VIDYAMANDIR', 'BALIVARA,, HALISAHAR, KANCHRAPARA  KOLKATA 743136', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(488, 'BALLYGUNGE GOVT. HIGH SCHOOL', '38/2, NARESH MITRA SARANI NEAR BELTALA MOTOR VEHICLES OFFICE, KOLKATA KOLKATA  700020', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(489, 'BALLYGUNGE SHIKSHA SADAN', 'DOVER TERRACE, BALLYGUNGE  KOLKATA  700019', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(490, 'BANDHAB NAGAR SWAMI VIVEKANANDA SCHOOL', 'BANDHAB NAGAR, SOUTH DUM DUM  KOLKATA 700028', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(491, 'BANDIPUR IDEAL ACADEMY FOR GIRLS (H.S.)', 'IDEAL SCHOOL RD, RAHARA  WEST BENGAL 700118', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(492, 'BANSBERIA GANGES HIGH SCHOOL', 'BANSBERIA, MITHAPUKUR MORE, WEST BENGAL  WEST BENGAL 712502', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(493, 'BARANAGAR NARENDRANATH VIDYAMANDIR', '61 KASHINATH DUTTA RD SHITHIMORE STREET, NAINAN PARA, SATCHASI PARA KOLKATA 700036', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(494, 'BARANAGAR NETAJI HIGH SCHOOL ', ' 570 NETAJI COLONY PO NOAPARA PO PS BARANAGAR BARRACKPORE KOLKATA 700090', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(495, 'BARANAGAR RAMESWAR HIGH SCHOOL', '21 RAY MATHURANATH CHAUDHURI STREET NEAR KUTIGHAT, BARANAGAR KOLKATA 700036', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(496, 'BARANAGAR SIKSHA SADAN (CO-ED) SECONDARY SCHOOL', '98 NAINAN PARA LANE PO  PS BARANAGAR SUB DIV BARRACKPORE KOLKATA 700036', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(497, 'BARANAGAR SRI SRI RAMKRISHNA VIDYAPITH', '69, P.K SAHA LANE, BARANAGAR NEAR KACHER MANDIR KOLKATA 700036', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(498, 'BARANAGAR VICTORIA HIGH SCHOOL', 'KUTI GHAT RD, KUTIGHAT BARADA BASAK STREET, ARIADAHA KOLKATA 700036', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(499, 'BARANAGAR VIDYAMANDIR SCHOOL FOR BOYS\n\n', '127, KUMAR PARA LN, BIDYAYATAN SARANI U B COLONY, ARIADAHA KOLKATA 700035', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(500, 'BARANAGORE RAMAKRISHNA MISSION ASHRAMA HIGH SCHOOL', '37 GOPAL LAL TAGORE RD PS BARANAGAR SUB DIV BARRACKPORE KOLKATA 700036', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(501, 'BARRACKPORE AMBIKA BIMALA MODEL HIGH SCHOOL', 'RASAMOY BISWAS ROAD, BARRACKPORE  KOLKATA 700123', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(502, 'BARRACKPORE CANTONMENT VIDYAPITH', 'SADAR BAZAR PS+PO BARRACKPORE SUB DIV BARRACKPORE DT 24  .PGS CANTONMENT BOARD KOLKATA 700120', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(503, 'BARRACKPORE DEBIPRASAD HIGH SCHOOL', 'MONIRAMPUR, SADAR BAZAR, BARRACKPORE  WEST BENGAL 700120', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(504, 'BARRACKPORE GOVT HIGH SCHOOL', 'BT RD, BARRACKPORE, KOLKATA  KOLKATA 700123', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(505, 'BARRACKPORE WESLEY HINDUSTHANI HIGH SCHOOL', 'S N BANERJEE RD PO BARRACKPUR PS TITAGARH 24 PGS N  WEST BENGAL 700120', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(506, 'BASUDEBPUR PALLY HITASADHANI HIGH SCHOOL', '20 K C C MITRA ST PO + PS BELGHORIA SUB DIV BARRACKPORE  WEST BENGAL 700056', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(507, 'BELEGHATA DESHABANDHU HIGH SCHOOL', '69B A C BANERJEE LANE SUBHAS SAROBAR PARK, PHOOL BAGAN, BELEGHATA KOLKATA  700014', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(508, 'BELGHARIA HIGH SCHOOL', '7 UMESH MUKHERJEE RD PS BELGHARIA SUB DIV BARRACKPORE KOLKATA  700056', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(509, 'BELGHARIA JATINDAS VIDYAMANDIR FOR GIRLS', '9, BELGHARIA STATION ROAD BLOCK 1, JATINDAS NAGAR, BELGHORIA KOLKATA  700056', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(510, 'BELGHARIA TEXMACO ESTATE SCHOOL', 'TEXMACO PRIVATE ROAD, BASUDEVPUR ROAD,  MANDAL PARA BAT TALA, BELGHORIA KOLKATA  700056', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(511, 'BELGHORIA DESHAPRIYA VIDYANIKETAN', '58, SABUJ PALLY, DESHAPRIYA NAGAR, BELGHORIA  KOLKATA  700056', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(512, 'BELGHORIA TRIVASA ACADEMY', 'BASUDEBPUR ROAD, BELGHARIA  KOLKATA  700056', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(513, 'BELIAGHATA DR.SHYAMA PRASAD MUKHERJEE INSTITUTION', 'P-277 C.I.T. NARKELDANGA MAIN PS PHOOLBAGAN KOLKATA 700054', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(514, 'BELIAGHATA SANTI SANGHA VIDYAYATAN FOR BOYS', '1/4 BARWARITALA ROAD PS BELEGHATA KOLKATA 700010', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(515, 'BELTALA GIRLS HIGH SCHOOL', '17, BELTALA ROAD KALIGHAT KOLKATA  700026', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(516, 'BETHUNE COLLEGIATE SCHOOL', '181, ABHEDANANDA ROAD,  BIDHAN SARANI, RAM BAGAN KOLKATA  700006', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(517, 'BHAGABATI DEVI BALIKA VIDYALAYA', 'AE 556, A.E. BLOCK SECTOR 1 AE BLOCK, SECTOR 1, BIDHANNAGAR KOLKATA  700064', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(518, 'BHARATIYA HINDI HIGH SCHOOL', ' 11 NEPAL BHATTACHARYA FIRST LANE, KALIGHAT   KOLKATA  700026', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(519, 'BHATPARA AMARKRISHNA PATHSALA', 'BHATPARA, JAGATDAL, BHATPARA  WEST BENGAL 743126', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(520, 'BHATPARA HIGH SCHOOL', 'BABURANI PARA RD, P.S, JAGATDAL, BHATPARA  WEST BENGAL 743126', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(521, 'BHAWANIPUR ARYA VIDYA MANDIR FOR GIRLS EDUCATION\n', '16, ABHOY SARKAR LN, MADAN MOHAN MALAVIYA SARANI PADDAPUKUR, BHOWANIPORE KOLKATA  700020', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(522, 'BHOWANIPUR MONORAMA INSTITUTION', '93 BAKUL BAGAN ROAD  PS BHOWANIPUR KOLKATA 700025', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(523, 'BHUTNATH MAHAMAYA INSTITUTION', '9 RADHANATH CHOWDHURY ROAD  PO TANGRA PS ENTALLY  KOLKATA  700015', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(524, 'BIDHANNAGAR HIGH SCHOOL (GOVT)', 'BD 303 SALT LAKE SECTOR-I PS BIDHANNAGAR KOLKATA 700064', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(525, 'BIDHANPALLY HIGH SCHOOL', 'PO ICHAPUR NAWABGANJ  PS NOAPARA SD BARRACKPORE  WEST BENGAL 743144', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(526, 'BIDYA BHABAN SCHOOL', '677, DIAMOND HARBOUR ROAD JADU COLONY, BEHALA, KOLKATA KOLKATA  700034', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(527, 'BIDYA BHARTI SCHOOL MOMINPORE', '44/2, DIAMOND HARBOUR RD, MOMINPORE  KOLKATA  700027', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(528, 'BIDYA BITHI BALIKA VIDYALAYA', '132A RAJA RAJENDRALAL MITRA ROAD PS BELEGHATA KOLKATA  700085', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(529, 'BIJOYGARH BALIKA VIDYAPITH', 'BIJOYGARH PS + PO JADAVPUR  KOLKATA 700032', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(530, 'BIJOYNAGAR BOYS HIGH SCHOOL', 'NAIHATI URBAN, NAIHATI, KOLKATA  WEST BENGAL 743165', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(531, 'BIJOYNAGAR VIDYALAYA', '3, BIJOY NAGAR, NAIHATI, NORTH 24 PARGANAS  WEST BENGAL 743165', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(532, 'BIRATI HIGH SCHOOL', 'SAHEED GANESH DUTTA RD  KHALISHA KOTA, BIRATI, KOLKATA KOLKATA 700051', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(533, 'BIRATI MAHAJATI BALIKA VIDYAMANDIR', 'MAHAJATI NAGAR RD, MAHAJATI NAGAR, BIRATI, KOLKATA  KOLKATA 700134', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(534, 'BIRATI VIDYALAYA FOR BOYS', '700, MADHUSUDAN BANERJEE RD PRATIRAKSHA NAGAR, BIRATI, KOLKATA KOLKATA 700051', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(535, 'BISHNUPUR PUBLIC (HIGH) SCHOOL', 'RAMANANDANAGAR, DALMADAL PARA, BISHNUPUR,   WEST BENGAL 722122', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(536, 'BONHOOGHLY HIGH SCHOOL', '18D, NIMCHAND MOITRA ST, BONHOOGLY, ARIADAHA, KOLKATA  KOLKATA 700035', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(537, 'BOWEST BWNGALAZAR HIGH SCHOOL', '170 B. B. GANGULI STREET PO BOWEST BWNGALAZAR PS MUCHIPARA KOLKATA 700012', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(538, 'BRAHMO BALIKA SHIKSHALAYA', '294, ACHARYA PRAFULLA CHANDRA RD, GARPAR, MACHUABAZAR PS NARKELDANGA  KOLKATA 700009', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(539, 'CALCUTTA AIRPORT ENGLISH HIGH SCHOOL', 'JESSORE ROAD, NEAR NSCBI AIRPORT GATE NO-2, KOLKATA  KOLKATA 700052', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(540, 'CARMEL HIGH SCHOOL', '41,GARIAHAT ROAD PO DHAKURIA PS JADAVPUR KOLKATA  700031', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(541, 'CHAMPDANI ADARSH SHRAMIK VIDYA MANDIR', 'CHAMPDANI, BAIDYABATI  WEST BENGAL 712222', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(542, 'CHAMPDANI ARYA VIDYAPITH', '301/1, GRAND TRUNK RD, CHAMPDANI, BAIDYABATI  HOOGHLY 712222', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(543, 'CHANDERNAGORE SRI AUROBINDO VIDYAMANDIR ', 'KABI BHARAT CHANDRA RD, HATKHOLA, CHANDANNAGAR,   WEST BENGAL 712136', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(544, 'CHANDRAMANI MEMORIAL HIGH SCHOOL', '67D, BEADON STREET  KOLKATA  700006', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(545, 'CHOWRINGHEE HIGH SCHOOL', '12A, CHOWRINGHEE LANE 2A& B CHOWRINGHEE LANE, KOLKATA KOLKATA  700016', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(546, 'CITY COLLEGE OF COMMERCE AND BUSINESS ADMINISTRATION', '13, SURYA SEN ST, LALBAJAR, COLLEGE SQUARE  KOLKATA 700012', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(547, 'CONVENT OF OUR LADY OF PROVIDENCE HIGH SCHOOL', '75 A J C BOSE ROAD PO ENTALLY PS TALTALA KOLKATA 700014', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(548, 'DAKSHINESWAR HIGH SCHOOL', '7 A C BANERJEE RD PO ARIADAHA PS BELGHARIA SUB DIV BARRACKPORE  KOLKATA 700057', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(549, 'DEROZIO MISSION HIGH SCHOOL', '3/135, RAMKRISHNA MISSION RD, BLOCK 3 JATINDAS NAGAR, BELGHORIA, KOLKATA WEST BENGAL 700056', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(550, 'DUM DUM AIRPORT HINDI HIGH SCHOOL', 'NEAR, JESSORE RD, KOLKATA AIRPORT QUARTERS KAIKHALI, KOLKATA KOLKATA 700052', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(551, 'DUM DUM BAIDYANATH INSTITUTION', '17 HARIMOHAN DUTTA RD DUM DUM CANTONMENT, RAJBARI, DUM DUM KOLKATA 700028', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(552, 'DUM DUM K.L.S.HINDI VIDYALAYA', '39/2 POST OFFICE ROAD MAHENDRA COLONY GORA BAZAR, RAJBARI, DUM DUM, KOLKATA WEST BENGAL 700028', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(553, 'DUM DUM KISHORE BHARATI HIGH SCHOOL', 'P2/A MOTIJHEEL AVENUE AMARPALLI, SOUTH DUM DUM KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(554, 'DUM DUM KRISHNA KUMAR HINDU ACADEMY', 'MOTIJHEEL AVENUE, MOTIJHEEL AMARPALLI, SOUTH DUM DUM KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(555, 'DUM DUM MOTILAL VIDYAYATAN HIGH SCHOOL', 'JESSORE RD, AIRPORT MOTILAL COLONY, RAJBARI, DUM DUM KOLKATA 700028', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(556, 'DUM DUM PRACHYA BANI MANDIR BOYS HIGH SCHOOL', '4 SETH BAGAN RD  PS DUMDUM SUB DIV BARRACKPORE KOLKATA 700030', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(557, 'DUM DUM SARVODAYA BALIKA VIDYAPITH', '216, RAFI AHMED KIDWAI ROAD BANGUR AVENUE, KOLKATA KOLKATA 700055', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(558, 'DUM DUM SRI ARABINDA VIDYA MANDIR FOR BOYS', '319, JASOOR ROAD, KHUDIRAM COLONY WARD NUMBER 21, AMARPALLI, SOUTH DUM DUM KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(559, 'DUM DUM SUBHAS NAGAR HIGH SCHOOL', '43 SARAT BOSE RD PO RABINDRANAGAR PS DUMDUM SUB DIV 6ARRACKPORE KOLKATA 700065', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(560, 'DUM DUM VIDYAMANDIR', '4 MORDECAI LANE PO MOTIJHEEL  PS DUMDUM SUB DIV BARRACKPORE  KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(561, 'DUM DUM VIVEKANANDA VIDYALAYA', '14/27, PRATAPADITYA NAGAR NAGERBAZAR, KAMARDANGA, KOLKATA KOLKATA 700028', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(562, 'DUMDUM J.N. VIDYAPITH (CO-ED HIGH)', '115 DUM DUM RD PO MOTIJHEEL PS DUMDUM SUB DIV BARRACKPORE KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(563, 'DURGANAGAR NEPAL CHANDRA VIDYAPITH HIGH SCHOOL', 'NO. 1, P. O. RABINDRA NAGAR, BADRA SCHOOL ROAD VIVEKANAND PALLY, DURGA NAGAR, NORTH DUMDUM KOLKATA 700065', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(564, 'ENAMEL NAGAR VIVEKANANDA VIDYANIKETAN', 'PO BENGAL ENAMEL  SUB DIV BARRACKPORE PS NOAPARA 24 PGS N WEST BENGAL 700125', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(565, 'ENTALLY ACADEMY', 'SARAT GHOSH ST, ENTALLY  KOLKATA 700014', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(566, 'G. B MEMORIAL INSTITUTION', '14,JADAV GHOSH ROAD  OPP 7 NO. BUS STAND, SARSUNA KOLKATA  700061', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(567, 'GARIFA HIGH SCHOOL', '449, RISHI BANKIM CHANDRA RD GARIFA, NAIHATI, KOLKATA KOLKATA 743166', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(568, 'GARULIA MILL HIGH SCHOOL', 'PO GARULIA PS NOAPARA  SUB DIV BARRACKPORE KOLKATA 743133', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(569, 'GARULIA SHREE GOURI SHANKAR JUTE MILLS HINDI VIDYALAYA', 'PO GARULIA PS NOAPARA SUB DIV BARRACKPORE 24 PGS N  WEST BENGAL 743133', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(570, 'GHOLA HIGH SCHOOL', 'SUMIT BANERJEE RD  PO GHOLA BAZAR PS GHOLA 24 PGS N  KOLKATA 700111', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(571, 'GHUGUDANGA BHARATI VIDYAMANDIR', '5 EAST SINTHEE RD PS DUMDUM GHUGHUDANGA  SUB DIV BARRACKPORE KOLKATA 700030', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(572, 'GIRINDRA BALIKA VIDYALAYA', '170 B B GANGULY STREET  170, B B GANGULY STREET, BOW BAZAAR, KOLKATA KOLKATA 700012', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(573, 'GOUR HARI HARIJAN VIDYAMANDIR', 'HOOGHLY GHAT STATION RD CHOWK BAZAR, OLAICHANDITALA HOOGHLY 712103', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(574, 'GOURIPUR HINDI HIGH SCHOOL', '20/1 GIRISH GHOSHAL ROAD, GARIFA, NAIHATI  WEST BENGAL 743166', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(575, 'GOURIPUR HINDI HIGH SCHOOL (H.S) ', '462/4 RISHI BANKIM CHANDRA ROAD  GOURIPUR, GARIFA, NAIHATI  WEST BENGAL  743166', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(576, 'GURDAH HIGH SCHOOL', 'PO SHYAMNAGAR SUB DIV BARRACKPORE PS JAGATDAL DIST 24 PGS N  WEST BENGAL 743127', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(577, 'GYAN BHARATI BALIKA VIDYALAYA ', '64-A,NIMTOLLA GHAT STREET, JORABAGAN, KOLKATA KOLKATA  700006', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(578, 'HALISAHAR ADARSHA VIDYAPITH H.S.', 'PO NABANAGAR BARRACKPORE PS BIZPUR 24 PGS N  WEST BENGAL 743136', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(579, 'HALISAHAR MALLICK BAG HIGH SCHOOL', 'GANESH DAS ROAD, HALISAHAR STATION ROAD KANCHRAPARA WEST BENGAL 743145', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(580, 'HALISAHAR RAMPRASAD VIDYAPITH', 'NABANAGAR BARRACKPORE PS BIZPUR 24 PGS  KOLKATA 743136', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(581, 'HALISAHAR RAMPRASAD VIDYAPITH', 'SUB DIV BARRACKPORE PO NABANAGAR PS BIZPUR DIST 24 PGS N WEST BENGAL 743134', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(582, 'HARE SCHOOL', '87, COLLEGE ST, CALCUTTA UNIVERSITY, COLLEGE SQUARE  KOLKATA 700073', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(583, 'HARTLEY HIGHER SECONDARY SCHOOL', '11/4, SARAT NOSE ROAD PS BHOWANIPUR PO LALA LAJPAT RAI SARANI  KOLKATA 700020', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(584, 'HAUSAHAR HIGH SCHOOL', 'BANGAON - KULPI RD, HALISAHAR, KANCHRAPARA  WEST BENGAL 743134', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(585, 'HAZINAGAR ADARSHA HINDI VIDYALAYA', '121, MC MITRA RD, HAZINAGAR, BISCHPUR, HALISAHAR,  WEST BENGAL  743135', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(586, 'HERITAGE ACADAMEY HIGH SCHOOL', ' 69, GOPAL BANERJEE LANE RAMKRISHNAPUR HOWRAH  711101', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(587, 'HIND MOTOR HIGH SCHOOL', ' BIRLA ROAD HINDMOTOR,UTTARPARA HOOGHLY 712233', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(588, 'HINDU SCHOOL', '1 B, BANKIM CHATTERJEE STREET COLLEGE SQUARE WEST, COLLEGE SQUARE, KOLKATA KOLKATA 700073', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(589, 'HOOGHLY COLLEGIATE SCHOOL', 'COOLEDGE ROAD, GHATAKPARA, CHINSURAH R S CINSURAH, WEST BENGAL WEST BENGAL 712101', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(590, 'HOWRAH HINDI HIGH SCHOOL', '31/2, RAMLAL MUKHERJEE LN BABUDANGA, BANDHAGHAT, MALI PANCHGHARA HOWRAH  711106', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(591, 'HOWRAH JANATA ADARSHA VIDYALAYA', '27, KINGS ROAD, NEAR BRIDGE AND ROOF COMPANY PILKHANA, GULMOHAR RAILWAY QUARTERS, MALI PANCHGHARA, HOWRAH HOWRA', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(592, 'HOWRAH SHIKSHA SADAN', 'TRILAKYA NATH BANERJEE LANE,  2, KADAM TALA, HOWRAH HOWRAH 711101', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(593, 'I.P. MEMORIAL SCHOOL', '266/A ,G.T. ROAD  LILUAH  HOWRAH  711106', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(594, 'ICHAPUR BIBHUKINKAR HIGH SCHOOL', 'JATIN DAS ROAD, SASTITALA, ICHAPUR  WEST BENGAL 743144', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(595, 'ICHAPUR NAWABGANJ ANANDAMATH VIDYAPITH', 'A BLOCK, ANANDAMATH, KANTHADHAR ICHHAPUR DEFENCE ESTATE, ICHAPUR WEST BENGAL 743144', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(596, 'ICHAPUR NORTHLAND (MORNING) HIGH SCHOOL', 'NORTH LAND ESTATE, SASTITALA, ICHAPUR  WEST BENGAL 743144', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(597, 'ICHAPUR RIFLE FACTORY HIGH SCHOOL', 'ICHAPUR PO ICHAPUR NAWABGANJ  PS NOAPARA BARRACKPORE 24 PGS N WEST BENGAL 743144', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(598, 'JADAVPUR VIDYAPITH', '188, RAJA SUBODH CHANDRA MALLICK RD JADAVPUR, KOLKATA KOLKATA 700032', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(599, 'JAFFARPUR BIDYARTHI BHABAN HIGH SCHOOL', '15 HAT KALITOLA, JAFFARPUR PANCHANANTALA, BARRACKPORE  WEST BENGAL 700122', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(600, 'JAGABANDHU INSTITUTION', '25, FERN ROAD  KOLKATA 700019', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(601, 'JAGADDAL KAMALA HIGH SCHOOL', '16/1/1/8 JAGATDAL KAMALA HIGH SCHOOL  WEST BENGAL 743125', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(602, 'JAGATDAL CHASMA-I-RAHAMAT HIGH SCHOOL', 'JAGATDAL, BHATPARA  WEST BENGAL 743125', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(603, 'JAGATDAL SHRI HARI UCHCHA VIDYALAYA', 'MOTI BHAWAN BL NO-7 PO+PS JAGATDAL SUB BARRACKPOR 24 PGS N WEST BENGAL 743132', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(604, 'JAGRITI HINDI VIDYAMANDIR', ' 26/14F, SAILANDRA, BHUJANG DHAR RD PATUAPARA, LILUAH, HOWRAH HOWRAH  711204', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(605, 'JATIA HIGH SCHOOL', 'VILL + PO JATIA BARRACKPORE  PS BIZPUR KOLKATA 743135', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(606, 'JAYASWAL VIDYA MANDIR H S FOR GIRLS', '172A VIVEKANANDA RD PS AMHERST STREET   KOLKATA 700006', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(607, 'JODHPUR PARK BOYS SCHOOL', 'DHAKURIA, JODHPUR PARK NEAR JADAVPUR POLICE STATION KOLKATA 700068', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(608, 'JONEPUR HIGH SCHOOL', 'BARRACKPORE - KALYANI EXPY, BARAJONEPUR, KANCHRAPARA M  WEST BENGAL 743145', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(609, 'JOSEPH DAY SCHOOL ', '49/L/1A, DR LAL MOHAN BHATTACHARJEE ROAD ENTALLY KOLKATA 700014', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(610, 'JYOTINAGAR BIDYASHREE NIKETAN (H.S.)', '41 JYOTINAGAR, DUNLOP, SAKET NAGAR BONHOOGHLY GOVERNMENT COLONY, KOLKATA KOLKATA 700108', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(611, 'K.C MILLS HIGH (HS) SCHOOL', '42,GARDEN REACH ROAD  DAMDAMA, METIABRUZ, KOLKATA KOLKATA 700024', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(612, 'KALI KAMALA VIDYAPITH', '71/B, RAJA RAJENDRA LAL MITRA RD GANGULY BAGAN, BELEGHATA, KOLKATA WEST BENGAL 700085', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(613, 'KALYAN NAGAR VIDYAPITH FOR BOYS', 'NILGANJ ROAD, KALYAN NAGAR, RAHARA, KHARDAHA  WEST BENGAL 700112', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(614, 'KALYANGRAM MADHYAMIK VIDYALAYA', 'KALYANGRAM BOYS SCHOOL, PALTA, ICHAPUR  WEST BENGAL 743144', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(615, 'KALYANI CENTRAL MODEL SCHOOL', 'B4/486 KALYANI WEST BENGAL  741235', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(616, 'KAMALA GIRLS SCHOOL', 'P-512, KAVI BHARATI SARANI, LAKE RD, BALLYGUNGE  KOLKATA 700029', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(617, 'KAMALA VIDYAMANDIR HIGH SCHOOL FOR GIRLS', 'KG BOSE SARANI, KUNDU BAGAN, BELEGHATA  KOLKATA 700085', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(618, 'KAMALAPUR KAMALA VIDYAPITH', 'JESSORE RD, KAMALAPUR, ARABINDA SARANI, DUM DUM  KOLKATA 700028', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(619, 'KAMARHATI HIGH SCHOOL', 'NEHABOOT NAGAR  KOLKATA 700058', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(620, 'KAMARHATI PRABARTAK VIDYAPITH', 'OLD NIMTA ROAD, BELGHARIA  KOLKATA 700056', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(621, 'KAMARHATI SAGORE DUTTA FREE HIGH SCHOOL ', 'KAMARHATI, BELGHORIA, KOLKATA  KOLKATA 700058', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(622, 'KAMPA HIGH SCHOOL', 'VILL + PO KAMPA PS BIZPUR SUB DIV BARRACKPORE WEST BENGAL 743145', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(623, 'KANCHRAPARA HARNETT HIGH SCHOOL', '134, NAKARI MONDAL ROAD (BY LANE) 24 PGS (N), KANCHRAPARA WEST BENGAL 743145', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(624, 'KANCHRAPARA MUNICIPAL POLYTECNIC HIGH SCHOOL', '81, NETAJI SUBHAS PATH, BIJOY, KANCHRAPARA M  WEST BENGAL 743145', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(625, 'KANCHRAPARA RAMPRASAD HIGH SCHOOL', 'PO KANCHAPARA PS BIJPUR SUB DIV BARRACKPORE 24 PGS N  WEST BENGAL 743145', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(626, 'KANCHRAPARA UDBODHINI MADHYAMIK VIDYAPITH', 'SIRAJ MONDAL RD, HALISAHAR, KANCHRAPARA M  WEST BENGAL 743145', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(627, 'KANKINARA ARYA VIDYALAYA', '32, EAST GHOSH PARA ROAD, PO-KANKINARA DIST-NORTH 24, PARGANAS WEST BENGAL  743126', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(628, 'KANKINARA HIMAYATUL GHURBA HIGH SCHOOL', 'KANKINARA NORTH 24 PGS,    WEST BENGAL  743126', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(629, 'KASBA CHITTARANJAN HIGH SCHOOL', '80, RAJ KRISHNA GHOSAL RD, BOSEPUKUR KASBA, KOLKATA WEST BENGAL 700042', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(630, 'KASISWARI DAY SCHOOL', 'BLOCK N, CHETLA, KOLKATA  WEST BENGAL 700053', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(631, 'KHALISAKOTA ADARSHA VIDYALAYA', '4 KHALISAKOTA PALLY BARRACKPORE  PO RAJBARI COLONY PS DUMDUM KOLKATA 700079', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(632, 'KHALSA ENGLISH HIGH SCHOOL', '10 JOGESH MITTER ROAD BHAWANIPORE KOLKATA 700025', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(633, 'KHALSA HIGH SCHOOL', '73, ABHOY SARKAR LN, PADDAPUKUR, BHOWANIPORE  KOLKATA 700020', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(634, 'KHANNA HIGH SCHOOL', 'PLOT NO : 9 SHIV KUMAR KHANNA SARANI, GURI PARA RD  KOLKATA 700015', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(635, 'KHARDAH MAKTAB HIGH SCHOOL', '53/A, K S PATH, TITAGARH, KOLKATA  WEST BENGAL 700119', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(636, 'KHARDAH SHIBNATH HIGH SCHOOL ', 'SHYAMSUNDAR GHAT RD PO+PS KHARDAH  SUB DIV BARRACKPORE KOLKATA 700117', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(637, 'KHARDAH SURYA SEN SIKSHA NIKETAN (HIGH) ', 'PO+PS KHARDAH  SUB DIV BARRACKPORE 24 PGS N  WEST BENGAL 700119', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(638, 'KISHORE VIDYAPITH', '27B/3A CHAULPATTY ROAD PS BELEGHATA KOLKATA 700010', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(639, 'KODALIA AGAPUR HIGH SCHOOL', 'WEST, 206, NEW BARRACKPORE STATION ROAD BHATTACHARYA PADA, CHANDRA PALLY, NEW BARRAKPUR WEST BENGAL 700131', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(640, 'KRISHNAPUR ADARSHA VIDYAMANDIR', 'DUM DUM PARK PS LAKE TOWN SUB DIV BARRACKPORE KOLKATA 700055', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(641, 'LABAN HRAD BIDYAPITH', 'AD 369 BIDHANNAGAR PO + PS BLDHANNAGAR(NORTH)  KOLKATA 700064', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(642, 'LADY ABALA BOSE BALIKA VIDYALAYA', '294/3 A P C ROAD PO AMHERST STREET PS NARKELDANGA KOLKATA 700009', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(643, 'LAKE TOWN GOVT. SPONS. GIRLS SCHOOL', '237, BLOCK B LAKE TOWN LINK ROAD KOLKATA 700089', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(644, 'LATBAGAN HIGH SCHOOL', '7, STATE HIGHWAY 1, CANTONMENT, BARRACKPORE  WEST BENGAL 700120', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(645, 'LEE MEMORIAL HIGH SCHOOL', '13 RAJA SUBODH MULLTCK SQUARE PS MUCHIPARA KOLKATA 700013', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(646, 'LENINGARH SIKSHANIKETAN HIGH SCHOOL', 'PO CHANDPUR LENINGARH  SUB DIV BARRACKPORE PS GHOLA 24 PGS N  ', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(647, 'LORETO DAY SCHOOL, SEALDAH ', '122, A.J.C.BOSE ROAD  KOLKATA 700014', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(648, 'M.G. RUNGTA ACADEMY', '54,GARIAHAT ROAD, BALLYGUNGE  KOLKATA 700019', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(649, 'MADARPUR SUBHAS HIGH SCHOOL', 'VILL + PO MADARPUR VIA GARIFA   PS NAIHATI WEST BENGAL 743166', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(650, 'MADHYA KALIKATA BALIKA VIDYALAYA', '56 SURYA SEN ST AMHERST ST PO+PS AMHERST STREET   KOLKATA 700009', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(651, 'MADRAL SRIRAM VIDYAPITH', 'VILL+PO MODRAL PS JAGADTAL   SUB DIV BARRACKPORE 24 PGS N  WEST BENGAL 743123', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(652, 'MAHENDRANATH HIGH SCHOOL', 'ASHOK RD, PATULI, GARIA, KENDUA  WEST BENGAL 700084', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(653, 'MANDALPARA VIDYANIKETAN', 'PO +VILL MANDALPARA VIA SHYAMNAGAR PS JAGATDAL WEST BENGAL 743127', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(654, 'MANIRAMPUR SWAMI MAHADEVANANDA VIDYAYATAN HIGH SCHOOL', 'SARDAR BAZAR, NORTH BARRACKPUR  WEST BENGAL 743122', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(655, 'MAHESHWARI BALIKA VIDHYALAYA ', '29,BANSTALLA GULLEE SINGHI BAGAN, JORASANKO KOLKATA 700007', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(656, 'MITRA INSTITUTION', '16A, BALARAM BOSE GHAT RD BHAWANIPUR KOLKATA 700025', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(657, 'MONIRAMPUR HIGH SCHOOL', 'S N BANERJEE RD PS + PO BARRACKPORE DIST 24 PGS N  WEST BENGAL 700120', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(658, 'MORNING BELLS ACADEMY', '310/311, EAST GHOSHPARA ROAD PINKAL, SHYAMNAGAR NORTH 24 PARGANAS 743127', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(659, 'NABAJIBAN COLONY NABAJIBAN VIDYAMANDIR', 'NABA JIBAN, BIRATI, KOLKATA  KOLKATA 700051', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(660, 'NAGENDRA SMRITI SIKSHANIKETAN', 'NAIHATI ADARSHA VIDYANIKETAN EASTERN RAILWAY COLONY PO NAIHATI NAIHATI BARRACKPUR PS NAIHATI 24 PGS N  WEST BEN', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(661, 'NAIHATI MAHENDRA HIGH SCHOOL', '31 R B C RD PO NAIHATI PS NAIHATI DIST 24 PGS N KOLKATA 743165', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(662, 'NAIHATI NARENDRA VIDYANIKETAN (H.S.)', 'AN MOHAMMAD GHAT RD, NAIHATI, KOLKATA  WEST BENGAL 743165', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(663, 'NAIHATI SARASWATI BALIKA VIDYALAYA', '89 G G, GARIFA, HALISAHAR STATION ROAD  WEST BENGAL 743165', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(664, 'NALANDA ENGLISH DAY SCHOOL', ' 8/2 BABUTALA ROAD NAGERBAZAR NEAR KAMARDANGA POLICE OUTPOST, KOLKATA KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(665, 'NALTA MAHAJATI HIGH SCHOOL FOR GIRLS', '26/A, BAKUTALA RD, NALTA DUM DUM CANTONMENT, DUM DUM, KOLKATA KOLKATA 700028', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(666, 'NARAYAN DAS MEMORIAL MULTIPURPOSE SCHOOL, BANGUR AVENUE', 'BANGUR AVENUE, BLOCK D, BANGUR LAKE TOWN, KOLKATA, WEST BENGAL KOLKATA 700055', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(667, 'NARAYANPUR HARICHARAN TARAFDAR HIGH SCHOOL', 'FINGA PARA, JAGATDAL, BHATPARA  WEST BENGAL 743126', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(668, 'NARMADA HIGH SCHOOL', '67,CHANDI GHOSH ROAD PO+PS:REGENT PARK KOLKATA 700040', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(669, 'NATAGARH SASHIMUKHI HIGH SCHOOL', 'SODEPUR, KRISHNAPUR RD, KADAMTALA, NATAGARH  KOLKATA 700113', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(670, 'NATAGARH SRI SRI RAMKRISHNA VIDYAMANDIR ', 'RAMAKRISHNAPUR, AMBIKAPUR, NATAGARH, PANIHATI  WEST BENGAL 700113', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(671, 'NATAGARH SWAMI VIVEKANANDA SEVA SAMITI VIDYALAYA ', 'SUBHASH CHANDRA ROAD, NATAGARH, SODEPUR, KOLKATA  WEST BENGAL 700113', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(672, 'NATIONAL GIRLS HIGH SCHOOL', '164, SARAT BOSE ROAD  KOLKATA 700029', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(673, 'NATIONAL MODEL HIGH SCHOOL', 'JESSORE ROAD, MICHAEL NAGAR, KOLKATA  KOLKATA 700052', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(674, 'NAVA NALANDA HIGH SCHOOL', '25, SOUTHERN AVENUE PO KALIGHAT PS TOLLYGUNGE KOLKATA 700026', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(675, 'NAWABGANJ HIGH SCHOOL', 'SRIDHAR BANSIDHAR ROAD, NAWABGANJ, ICHAPUR  WEST BENGAL 743144', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(676, 'NAWABGANJ SRIDHAR BANSIDHAR HIGH SCHOOL', 'G B MONDAL ROAD, NAWABGANJ, ICHAPUR  WEST BENGAL 743144', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(677, 'NIMTA HIGH SCHOOL', 'MADHUSUDAN BANERJEE RD, RABINDRA NAGAR ALIPORE, NIMTA, KOLKATA KOLKATA 700049', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(678, 'NONA CHANDANPUKUR UMASASHI HIGH SCHOOL', 'SHIBTALA RD, NONA CHANDANPUKUR CHAKRABORTY PARA, KOLKATA WEST BENGAL 700122', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(679, 'NONACHANDANPUKUR MANMATHA NATH HIGH SCHOOL', 'BARRACKPORE - BARASAT ROAD, MASJID MORE BARRACKPORE, KOLKATA WEST BENGAL 700122', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(680, 'NORTH KOLKATA PUBLIC HIGH SCHOOL', 'NO. 245/1, NO. 213/1, DUM DUM RD JHILBAGAN, DUM DUM, KOLKATA KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(681, 'PALASI ACHARYA DURGA PRASANNA HIGH SCHOOL', 'VILL + PO PALASI SUB DIV B K P PS BIJPORE 24 PGS N KOLKATA 743145', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(682, 'PANCHAJANYA HIGH SCHOOL FOR GIRLS', '54A K G BOSE SARANI PO K G BOSE SARANI PS BELEGHATA KOLKATA 700085', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(683, 'PANCHASAYAR SIKSHA NIKETAN (H.S.)', 'V-BLOCK PANCHASAYAR KOLKATA 700094', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(684, 'PANIHATI SRI RAMKRISHNA ASHRAM VIDYAPITH', 'ASHRAM RD, RAMKRISHNA NAGAR H B TOWN, SODEPUR, KOLKATA WEST BENGAL 700114', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(685, 'PANPUR MAKHANLAL HIGH SCHOOL', 'KANKINARA-RAFIPUR RD, BHATPARA  WEST BENGAL 743126', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(686, 'PANSILA DESHBANDHUNAGAR VIDYAMANDIR', 'MAKAL TALA, ANANDAPALLY, PANIHATI  WEST BENGAL 700112', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(687, 'PARK CIRCUS HIGH SCHOOL', '36B, DARGA RD, MADURDAHA BENIAPUKUR, KOLKATA WEST BENGAL 700017', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(688, 'PATHA BHAVAN', '103 A&C, BALLYGUNE PLACE  KOLKATA 700019', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(689, 'PATIPUKUR PALLISREE VIDYALAYA', '3 PALLISREE COLONY S K DEB RD PS LAKETOWN KOLKATA 700048', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(690, 'PATULIA HIGH SCHOOL', 'ARABINDA PALLY, TITAGARH, KOLKATA  WEST BENGAL 700118', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(691, 'PRAFULLANAGAR ACHARYA PRAFULLA CH. VIDYAPITH', 'PRAFULLA NAGAR BARRACKPORE PO BELGHARIA   PS BELGHARIA WEST BENGAL 700056', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(692, 'PRASADNAGAR HIGH SCHOOL', ' HAZINAGAR, BISCHPUR, HALISAHAR, KOLKATA  WEST BENGAL 743135', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(693, 'R.K. ACADEMIC POINT ', '40/1,BENARAS ROAD SALKIA   HOWRAH  711106', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(694, 'RAGHUMAL ARYA VIDYALA', '33C, MADAN MITRA LN SIMLA KOLKATA 700006', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(695, 'RAMAKRISHNA MISSION VIDYALAYA, NARENDRAPUR', 'MAHAVIDYALAYA PRAKTANI NAREDRAPUR KOLKATA 700103', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(696, 'RAMAKRISHNA MISSION, BELUR', 'G. T. ROAD, PO BELUR MATH, BELUR MATH  HOWRAH  711202', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(697, 'RAMKRISHNA VIVEKANANDA MISSION VIDYABHAVAN', '7 RIVERSIDE RD PO BARRACKPUR PS BARRACKPORE 24 PGS NORTH WEST BENGAL 700120', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(698, 'RANI RASHMONI HIGH SCHOOL', '104/A, SURENDRA NATH BANERJEE ROAD NEW MARKET AREA KOLKATA 700014', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(699, 'RATHTALA FINGAPARA HIGH SCHOOL ', 'SINGHAPARA, JAGATDAL THANA, MADRAL RD NEAR KABARKHANA MAIDAN, BHATPARA WEST BENGAL 743126', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(700, 'RISHRA VIDYAPITH', '22, GANDHI SARAK,RISHRA,HOOGHLY  WEST BENGAL 712248', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(701, 'ROYAL GRAMMAR SCHOOL (BUILDING-2)', '1/B, GULAM JILANI KHAN RD TOPSIA, KOLKATA WEST BENGAL 700039', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(702, 'S B MODERN HIGH SCHOOL', '13,PK TAGORE ST JORABAGAN KOLKATA 700006', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(703, 'SACRED HEART DAY HIGH SCHOOL, BARRACKPORE', '58, SN BANERJEE RD, CANTONMENT  KOLKATA 700120', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(704, 'SALIMIAH HIGH SCHOOL', 'MILL APPROACH RD PO KAMARHATI  PS BELGHARIA  KOLKATA 700058', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(705, 'SALKIA SHREE SATYANARAYAN MADHAV MISHRA VIDYALAYA', '173, BANDHAGHAT, MALI PANCHGHARA, HOWRAH  HOWRAH  711106', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(706, 'SALKIA VIKRAM VIDYALAYA', '37/1, BHAIAV DUTTA LANE,  SALKIA HOWRAH  711106', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(707, 'SANAT ROY CHOWDHURY INSTITUTION\n', '12, GOBINDA KHATICK RD, SEAL LANE, TANGRA  KOLKATA 700046', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(708, 'SANTINAGAR HIGH SCHOOL', 'SANTINAGAR, SANTI NAGAR P.O-N.C PUKUR, BABANPUR, JAFARPUR KOLKATA 700123', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(709, 'SARADA VIDYA BHAWAN', 'NO.4, DIHI ENTALLY ROAD, DEB LANE, ENTALLY  KOLKATA 700014', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(710, 'SATIN SEN NAGAR HIGH SCHOOL', '126, SATIN SEN NAGAR, JANAKALYAN PARA, AGAPUR NEW BARRAKPUR, KOLKATA WEST BENGAL 700131', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(711, 'SAVITRI PATHSALA', '5D, MUKTARAM BABU STREET SINGHI BAGAN KOLKATA 700007', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(712, 'SERAPHIMS ASSEMBLY SCHOOL BARASAT', 'BARASAT, BELGORIA, KUBERPUR, BADU  NORTH 24 PARGANAS 700128', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(713, 'SETH BAGAN ADARSHA VIDYAMANDIR', '3, SETH BAGAN, SETH COLONY, DUM DUM  KOLKATA 700030', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(714, 'SETH SOORAJMULL JALAN BALIKA VIDYALAYA', '186, CHITTARANJAN AVE, SIMLA, MACHUABAZAR  KOLKATA 700007', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(715, 'SEWLI HIGH SCHOOL', 'BARASAT - BARRACKPORE RD, COLLEGE PALLY SEWLI TELINIPARA, DEBPUKUR, BARRACKPORE WEST BENGAL 700121', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(716, 'SHANTIGARH NIVANANI SMRITI VIDYAPITH', ' SHYMNAGARH, SANTIGARH, SHYAMNAGAR  WEST BENGAL 743127', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(717, 'SHIBPUR AMBIKA HINDI HIGH SCHOOL', 'UMA CHANDRA BOSE LN,   BABUDANGA, MALI PANCHGHARA,  HOWRAH  711102', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(718, 'SHIBTALA ADARSHA HIGH SCHOOL', '504 LAKSHMINARAYAN RD PS DUMDUM SUB DIV BARRACKPUR KOLKATA 700065', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(719, 'SHISHU SATHI SCHOOL', '3/E, CHETLA RD, TOLLYGUNGE, KOLKATA  WEST BENGAL 700053', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(720, 'SHREE BALKRISHNA VITHALNATH BALIKA VIDYALAYA', 'PRASANNA KUMAR, 26, TAGORE CASTLE ST NEAR NATUN BAZAR, JORABAGAN KOLKATA 700006', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(721, 'SHREE DIGAMBAR JAIN VIDYALAYA', '13,P 34/35, NARAYAN PRASAD BABU LANE COTTON STREET,BARA BAZAAR KOLKATA 700007', 'Kolkata-Howrah,Hooghly', 'WBBSE');
INSERT INTO `school_list` (`id`, `school_name`, `school_address`, `school_location`, `board`) VALUES
(722, 'SHREE HANUMAN JUTE MILLS HINDI HIGH SCHOOL', '104, NASKARPARA ROAD, GHUSURI  HOWRAH 711107', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(723, 'SHREE JAIN JNAN BASKAR VIDYALAYA', 'DOCK EASTERN BOUNDARY RD, TIKIAPARA, KHIDIRPUR  KOLKATA 700023', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(724, 'SHREE JAIN VIDYALAYA', '18/D, PHUSRAJ BACHHAWAT PATH (SUKEAS LANE) KOLKATA 700001', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(725, 'SHREE JAIN VIDYALAYA FOR BOYS AND GIRLS', ' 25/1, BANBEHARI BOSE RD, SANDHYA BAZAR CHOURA BUSTEE, SHIBPUR, HOWRAH HOWRAH  711101', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(726, 'SHREE MAHESHWARI VIDYALAYA', '4, SOVARAM BASAK ST, RADHA KUNJ BARA BAZAR, JORASANKO, KOLKATA KOLKATA 700007', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(727, 'SHREE VISHUDHANAND SARASWATI VIDYALAY', '36,CHITTARANJAN AVE COLLEGE STREET MARKET KOLKATA 700007', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(728, 'SHYAMA PRASAD NAGAR HIGH SCHOOL', '3, BIPIN PAUL RD, SHYAMAPRASAD NAGAR, DIRI PARA, NIMTA, KOLKATA  WEST BENGAL 700049', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(729, 'SHYAMAPADA INSTITUTION', '179A, VIVEKANANDA RD, MANICKTALA, MACHUABAZAR  KOLKATA 700006', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(730, 'SHYAMBAZAR VIDYASAGAR SCHOOL', 'BIDHAN SARANI, BAGHBAZAR  KOLKATA 700003', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(731, 'SHYAMNAGAR HIGH SCHOOL', '33 SHYAM NAGAR RD PO BANGUR AVE. PS DUMDUM KOLKATA 700055', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(732, 'SHYAMNAGAR JAWAHARLAL NEHRU SMRITI VIDYAMANDIR', 'BANERJEE PARA ROAD, SHYAMNAGAR  WEST BENGAL 743127', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(733, 'SHYAMNAGAR KANTI CHANDRA HIGH SCHOOL', ' 24, SCHOOL PARA, SHYAMNAGAR,  WEST BENGAL 743127', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(734, 'SIKSHA NIKETAN HIGH SCHOOL', '9, MOTIJHEEL AVE, WARD NUMBER 22, MOTIJHEEL AMARPALLI, SOUTH DUM DUM KOLKATA 700074', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(735, 'SILVER POINT', '198/1, KASBA RD, B B CHATTERJEE ROAD BESIDE KASBA RATHTALA MINI BUS STAND, BOSEPUKUR, KASBA KOLKATA 700042', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(736, 'SINTHE RAI BAHADUR BADRIDASTULSAN VIDYAPITH', '1, KC GHOSH RD, DESHAPRIYA NAGAR COLONY, BARANAGAR, KOLKATA  KOLKATA 700050', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(737, 'SODEPUR CHANDRACHUR VIDYAPITH', 'NO 1 D B NAGAR PO SODEPUR PS KHARDAH SUB DIV BARRACKPORE 24 PGS N  WEST BENGAL 700110', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(738, 'SODEPUR HIGH SCHOOL', 'NO. 2 DESHABONDHU NAGAR, SODEPUR, KOLKATA  WEST BENGAL 700110', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(739, 'SODEPUR NABADAY INSTITUTE', 'C BLOCK PO SODEPUR PS GHOLA SUB DIV BKP 24 PGS N  WEST BENGAL 700113', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(740, 'SODEPUR SUSHIL KRISHNA SIKSHAYATAN ', ' H B TOWN, \n SODEPUR WEST BENGAL 700110', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(741, 'SOHANLAL DEORALIA BALIKA VIDYALAYA', '268/1, G.T. ROAD, LILUAH BELUR, LILUAH, HOWRAH HOWRAH  711204', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(742, 'SOUTH POINT HIGH SCHOOL', '82/7A BALLYGUNGE PLACE BALLYGUNGE KOLKATA 700019', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(743, 'SREE DIDOO MAHESHWARI PANCHAYAT VIDYALAYA', '259, RABINDRA SARANI, RAJA KATRA BARA BAZAR, JORASANKO KOLKATA 700007', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(744, 'SREE HANUMAN BALIKA VIDYALAYA', '2, SHRI AUROBINDO RD, BABUDANGA BANDHAGHAT, MALI PANCHGHARA, HOWRAH HOWRAH  711106', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(745, 'SRI AUROBINDO SIKSHA SADAN', 'NEW BANKRA BIRATI KOLKATA 700051', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(746, 'SRI BHAMA SHAH ARYA VIDYALAYA', '38A, ACHARYA JAGADISH CHANDRA BOSE RD MANICKTALA, MADHUSUDHAN MARKET, MULLICK BAZAR KOLKATA 700017', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(747, 'VIVEKANANDA ENGLISH ACADEMY(H.S)', ' B, 62, DEWANJI ST, PANCHANANTALA, BANGUR PARK, RISHRA  WEST BENGAL 712248', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(748, 'ST. LAWRENCE HIGH SCHOOL', '27, BALLYGUNGE CIRCULAR ROAD  KOLKATA 700019', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(749, 'SUKCHAR KEDARNATH PODDER HIGH SCHOOL ', '100B, BT RD, SIDHESHWARI PARA, KHARDAHA, KOLKATA  WEST BENGAL 700115', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(750, 'UDAYPUR HARADAYAL NAG ADARSHA VIDYALAYA (FOR BOY,S)', '5/1, MADHUSUDAN BANERJEE ROAD, UDAYPUR  BELGHARIA, UDAYPUR, BELGHORIA, KOLKATA WEST BENGAL 700049', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(751, 'VAISHNO DEVI ACADEMY', 'Post Krishnapur, Milan Bazar, near 206 Kheya FootBridge SAMARPALLY, P.O. KRISHNAPUR KOLKATA 700102', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(752, 'VIKRAM VIDYALAYA SCHOOL', 'GRAND TRUNK RD, KADAM TALA, HOWRAH  HOWRAH  711101', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(753, 'DOUGLAS MEMORIAL HIGHER SECONDARY SCHOOL', 'Barakpur, 52, Barrack Rd   West Bengal  700120', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(754, 'PANDIT MOTILAL INSTITUTE', 'JESSORE ROAD, NO 2 AIPORT GATE, MOTILAL COLONY RAJBARI, DUM DUM, KOLKATA WEST BENGAL 700081', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(755, 'ADARSH MADYAMIK VIDAYALYA DUM DUM (H.S)', '24, RBC RD, GOLPARK, SOUTH DUM DUM  WEST BENGAL 700028', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(756, 'ARIADAHA SARBAMANGALA BALIKA VIDYALAYA', '25, JOY KRISHNA GHOSAL RD, NEHABOOT NAGAR ARIADAHA, KOLKATA WEST BENGAL 700057', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(757, 'B. T. ROAD GOVERNMENT SPONSORED H. S. SCHOOL', '35/2, BT RD, CIT, SATCHASI PARA, KOLKATA  WEST BENGAL 700002', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(758, 'BAL HINDI VIDYALAYA', '3, TOLLYGUNGE CIRCULAR RD, CANAL ROAD, BASANTA LAL SAHA RD MAHABIRTALA, TOLLYGUNGE, KOLKAT WEST BENGAL 700053', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(759, 'BANTRA MADHUSUDAN PAL CHOUDHURY HIGH SCHOOL', '160, 161, BELILIOUS RD KADAM TALA, HOWRAH WEST BENGAL 711101', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(760, 'BARISHA PURBA PARA HIGH SCHOOL (HS)', '1, BARISHA PURBA PARA SCHOOL RD, PURBAPARA SARATPALLY, PURBA BARISHA, KOLKATA  WEST BENGAL 700063', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(761, 'BARISHA VIVEKANANDA GIRLS HIGH SCHOOL', '632, 136/1/C, DIAMOND HARBOUR RD, DOSTIPUR PORA ASWATHATOLA, STATE BANK PARK, THAKUR PUKUR, KOLKATA WEST BENGAL', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(762, 'SANTOSHPUR RISHI AUROBINDO BALIKA VIDYAPITH', 'SANTOSHPUR AVENUE, SANTOSHPUR  WEST BENGAL 700075', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(763, 'SKYLARK ENGLISH MEDIUM SCHOOL', 'SATYEN BOSE RD, GUABARIA NAZIRGANJ, HOWRAH WEST BENGAL 711109', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(764, 'BUDGE BUDGE ST. THOMAS MEMORIAL SCHOOL (H.S.0', 'HALDER PARA RD, SHYAMPUR, BUDGE BUDGE WEST BENGAL WEST BENGAL 700137', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(765, 'PEARL ROSARY SCHOOL - MAHESH', '158, G T ROAD, CHATRA, TENTULTALA  HOOGHLY, SERAMPORE WEST BENGAL 712204', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(766, 'VIVEKANANDA INSTITUTION', '75 & 77, SWAMI VIVEKANANDA ROAD, NEAR SHIBPUR, SANTRAGACHI P.O KASUNDIA RD, SHIBPUR, HOWRAH WEST BENGAL 711104', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(767, 'BAGBAZAR HIGH SCHOOL', '29A, BOSE PARA LN  WEST BENGAL 700003', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(768, 'SARASWATI SCHOOL', '2A, RAMDHAN MITRA LN HATI BAGAN, SHYAM BAZAR, KOLKATA WEST BENGAL 700004', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(769, 'AJB PUBLIC SCHOOL', '84/3, MUZAFFAR AHMED STREET Kolkata, West Bengal WEST BENGAL 700016', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(770, 'CALCUTTA MUNICIPAL SCHOOL', 'SHRI AUROBINDO SARANI RD, SOVABAZAR HATI BAGAN, SHOBHABAZAR, KOLKATA WEST BENGAL 700004', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(771, 'HK EDUCATION', '15F, TOPSIA RD, TOPSIA, KOLKATA  WEST BENGAL 700039', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(772, 'LANDMARK ACADEMY', 'KHUDIRAM PARK,KHUDIRABAD  ( NEAR DAS PARA,MUKUNDAPUR ) WEST BENGAL 700152', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(773, 'LAWRENCE DAY SCHOOL ', '45/1A, AMHERST ST, COLLEGE STREET BATA BAITHAKKHANA WEST BENGAL 700009', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(774, 'NALANDA ENGLISH DAY HIGH SCHOOL', '8/2, BABUTALA RD, NAGERBAZAR, KAMARDANGA,  WEST BENGAL 700028', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(775, 'NEWTON DAY SCHOOL', '46G, SHREE DHAR ROY ROAD  WEST BENGAL 700039', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(776, 'SARADA ACADEMY', '255, 235, PICNIC GARDEN RD PARK CIRCUS, BALLYGUNGE WEST BENGAL 700039', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(777, 'ARIADAHA GIRLS HIGH SCHOOL, DAKSHINESWAR', 'DAKSHINESWAR, KOLKATA  WEST BENGAL 700057', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(778, 'CHILDREN ACADEMY SECONDARY HIGH SCHOOL (ENGLISH MEDIUM)', 'KALI MANDIR, 1/1, NABAPALLY LINK ROAD  NEAR NABAPALLY, KOLKATA WEST BENGAL 700104', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(779, 'NABADIGANTA HIGH SCHOOL (M) HS', 'RAM GOPAL PAUL LN, APURBA COLONY GHOSHPARA, KOLKATA WEST BENGAL 700061', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(780, 'SAHAPUR GIRLS HIGH SCHOOL', '20, JYOTISH ROY RD, BUROSHIBTALLA NEW ALIPORE, KOLKATA WEST BENGAL 700053', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(781, 'SAHAPUR MATHURANATH VIDYAPITH', '3, KAILASH PANDIT LN, BUROSHIBTALLA BEHALA, KOLKATA WEST BENGAL 700053', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(782, 'SANSKRIT COLLEGIATE SCHOOL', 'COLLEGE SQUARE, KOLKATA  WEST BENGAL 700009', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(783, 'SODEPUR BALIKA VIDYALAYA', 'DAS 234, SODEPUR 1ST LN, KOLKATA  WEST BENGAL 700082', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(784, 'SRI AUROBINDO BAL MANDIR', '532, ALIPUR RD, BLOCK M, NEW ALIPORE  WEST BENGAL 700053', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(785, 'SRI SARADA ASHRAM BALIKA VIDYALAYA', 'P - 615, KRISHNA CHANDRA DEY SARANI  BLOCK O, NEW ALIPORE WEST BENGAL 700053', 'Kolkata-Howrah,Hooghly', 'WBBSE'),
(786, 'GREEN POINT ACADEMY', 'Kultora kulti,po.neamatpur   713359', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(787, 'ASANSOL NORTH POINT SCHOOL', 'NH-2 CHANDA , JAMURIA PASCHIM BARDHAMAN PASCHIM BARDHAMAN 713339', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(788, 'PRIYADARSHINI PUBLIC SCHOOL', 'NEAR KULTI POLICE STATION STATION ROAD, POST - KULTI PASCHIM BARDHAMAN 713343', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(789, 'CHANDA SOUTH END MODEL SCHOOL', 'NH-2, CHANDA, P.O - KALIPAHARI  PASCHIM BARDHAMAN 713339', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(790, 'DAV PUBLIC SCHOOL, ECL - PANDAVESWAR', 'BELDANGA ROAD PANDAVESWAR  PASCHIM BARDHAMAN 713346', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(791, 'RANIGANJ LIONS JDM CHANANI DAV PUBLIC SCHOOL', 'LIONS EYE HOSPITAL ROAD, RANIGANJ PASCHIM BARDHAMAN PASCHIM BARDHAMAN 713347', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(792, 'DELHI PUBLIC SCHOOL ASANSOL', 'ETHORA, NH-2, BYPASS Opposite Tata Motors Jupiter Service Centre ASANSOL 713359', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(793, 'EASTERN RAILWAY HIGH SCHOOL ASANSOL', 'G.T.Road, P.O. ASANSOL NEAR SANI MANDIR ASANSOL 713301', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(794, 'EASTERN RAILWAY HIGH SCHOOL , PRIMARY SECTION', '55 , DURAND RAIL COLONY,  NEAR DURAND INSTITUTE ASANSOL 713301', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(795, 'GYAN BHARATI SCHOOL', '59, COLLEGE ROAD  RANIGANJ PASCHIM BARDHAMAN 713347', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(796, 'HOLY CONVENT', 'NEW KENDA MORE , KENDA   PASCHIM BARDHAMAN ', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(797, 'K V ASNSOL', 'DOMOHANI RAILWAY COLONY P.O- KALLA ASANSOL 713340', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(798, 'SRIHARI GLOBAL SCHOOL', 'SHRISTINAGAR Near Central Excise Office ASANSOL 713305', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(799, 'UNIQUE NORTH POINT SCHOOL', 'SB GORAI ROAD, NEAR RAMSAYER MAIDAN PATHAK BARI,  ASANSOL 713301', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(800, 'DAV PUBLIC SCHOOL, RANIGANJ', 'LIONS EYE HOSPITAL RD, RANIGANJ- 713347,  Paschim Barddhaman 713347', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(801, 'DAV PUBLIC SCHOOL', 'KANYAPUR, BURDWAN BESIDE DISTRICT MAGISTRATE OFFICE, LIONS CLUB ROAD ASANSOL 713305', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(802, 'AUROBINDO VIDYA MANDIR SCHOOL', 'A-ZONE, DURGAPUR D.H.B ROAD DURGAPUR ', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(803, 'BURNPUR RIVER SIDE SCHOOL ', 'River Side, Burnpur  PASCHIM BARDHAMAN  713325', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(804, 'DAV PUBLIC SCHOOL ', 'Kanyapur, Asansol-5 BESIDE DISTRICT MAGISTRATE OFFICE, LIONS CLUB ROAD  713305', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(805, 'KV CRPF DURGAPUR ', '   713 214', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(806, 'NARAYANA SCHOOL, BURDWAN', '47 Bahir Sarbamangalapara, Near Dream Land Nursing Home  Renaissanpa Township BURDWAN 713102', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(807, 'NEW LITERARY ACADEMY', 'BY PASS ROAD , JAMURIA NEAR BISCUIT FACTORY BURDWAN 713337', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(808, 'DAV MODEL SCHOOL , DURGAPUR', 'J.M SENGUPTA ROAD , B ZONE   DURGAPUR 713205', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(809, 'DURGAPUR PUBLIC SCHOOL', 'S.S.B SARANI , BIDHANNAGAR  DURGAPUR 713212', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(810, 'MANISHA INTERNATIONAL SCHOOL', 'G.T Road, Rajbandh  DURGAPUR 713212', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(811, 'AMRITA VIDYALAYAM', 'RANGAMATIPATH, BIDHANNAGAR  DURGAPUR 713212', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(812, 'GOENKA INTERNATIONAL SCHOOL', 'NACHAN ROAD , KAMALPUR , BURDWAN  DURGAPUR 713204', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(813, 'GURU TEG BAHADUR PUBLIC SCHOOL', 'KAZI NAZRUL ISLAM ROAD , A- ZONE  DURGAPUR 713213', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(814, 'HEM SHEELA MODEL SCHOOL', 'J.N AVENUE , DURGAPUR  DURGAPUR 713214', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(815, 'JNV , DURGAPUR ', 'BIDHANNAGAR , SECTOR - 2A , PASCHIM BARDHAMAN  DURGAPUR 713212', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(816, 'KENDRIYA VIDYALAYA C.M.E.R.I DURGAPUR', 'C.M.E.R.I COLONY , P.O - DURGAPUR  DURGAPUR 713209', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(817, 'SWAMI VIVEKANANDA INTERNATIONAL SCHOOL', 'ANDAL MORE , UKHRA ROAD ANDAL DURGAPUR 713321', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(818, 'DAV MODEL SCHOOL', 'J.M.Sengupta Road,Durgapur  B-ZONE, DURGAPUR, PASCHIM BARDHAMAN Durgapur  713205', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(819, 'DELHI PUBLIC HIGH SCHOOL', 'Plot No 2D/10, Sector 2 D, Bidhannagar, Durgapur   Durgapur  713212', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(820, 'DURGAPUR PUBLIC SCHOOL', 'Bidhannagar, Durgapur  Shahid Sukumar Banerjee Sarani Durgapur  713212', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(821, 'GURU TEG BAHADUR PUBLIC SCHOOL ', 'Near Prantika Bus Stand, Kazi Nazrul Islam Road, Benachity, Durgapur  Durgapur  713213', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(822, 'JAWAHAR NAVODAYA VIDYALAYA', 'Sector 2a, Sahid Binoy Dinesh Sarani, Bidhannagar, Durgapur  Durgapur  713212', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(823, 'USHA MARTINE SCHOOL', 'CA/2, Near Bengal Ambuja Commercial Complex, Ambedkar Sarani, City Centre Durgapur, Durgapur   Durgapur  713216', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(824, 'MOTHER TERESA ACADEMY', 'Sail Co-Operative Complex, Near Bulk Supply Bus Stop, City Centre, City Centre Durgapur  Durgapur  713216', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(825, 'THE ASSEMBLY OF GOD CHURCH SCHOOL', 'RANCHI ROAD , PURULIA  PURULIA 723101', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(826, 'D.S.K.D.A.V PUBLIC SCHOOL , PURULIA', 'WILCOX ROAD , SIMULIA   PURULIA 723102', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(827, 'GRK DAV PUBLIC SCHOOL', 'NADIARA  PURULIA 723149', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(828, 'KENDRIYA VIDYALAYA ADRA', 'P.O - ADRA   PURULIA 723121', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(829, 'SAINIK SCHOOL PURULIA', 'P.O - SAINIK SCHOOL  PURULIA 723104', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(830, 'NANDLAL JALAN SIKSHA SADAN', 'Saraswati Roy Place,Egara Road,Raniganj Tilak Rd, Raniganj, West Bengal,   713347', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(831, 'SKS PUBLIC SCHOOL', 'Ranai Rd, Kajora, West Bengal    713347', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(832, 'DAV PUBLIC SCHOOL', 'Lions Eye Hospital Road, Raniganj  Burdwan 713347', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(833, 'SREE DURGA VIDYALAYA', 'P.N. Maliya Road Near SishuBagan Post Office Barddhaman Raniganj Municipality Hindi Adarsha Vidyalaya Raniganj ', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(834, 'J.K.NAGAR HIGH SCHOOL', 'J K NAGAR, Golai Ghar, Raniganj, West Bengal    713339', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(835, 'NAND LAL JALAN SHIKSHA SADAN', ' B.p Khaitan Road Raniganj Burdwan, Raniganj  Bardhaman 713347', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE'),
(836, 'INDIA INTERNATIONAL SCHOOL ', 'KALYANPUR SATELLITE TOWNSHIP  ASANSOL 713305', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE '),
(837, 'BEACHWOOD SCHOOL', 'SATYAJIT RAY SARANI , SAIL CO-OPERATIVE CITY CENTRE  DURGAPUR 713216', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE '),
(838, 'KENDRIYA VIDYALAYA CRPF DURGAPUR', 'GROUP CENTRE DURGAPUR   DURGAPUR 713214', 'South Bengal-Durgapur,Raniganj,Asansol', 'CBSE '),
(839, 'ROSA MYSTICA SCHOOL', 'BOTTOLA , BYPASS ROAD , JAMURIA  PASCHIM BARDHAMAN 713362', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(840, 'A .G. CHURCH SCHOOL,ASANSOL', 'NEAR BHAGAT SINGH MORE ,GT ROAD,RABINDRA NAGAR   713304', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(841, 'EAST WEST MODEL SCHOOL', 'SURI ROAD , BURDWAN Talit, Burdwan BURDWAN 713101', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(842, 'HOLY ROCK SCHOOL ', 'NAWAZHAAT , SURI ROAD ,  National Highway 2B BURDWAN 713104', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(843, 'CARMEL SCHOOL', 'GURUNANAK ROAD   DURGAPUR 713205', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(844, 'CARMEL CONVENT HIGH SCHOOL', 'M.A.M.C ; DURGAPUR  DURGAPUR 713210', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(845, 'RED ROSE MODEL SCHOOL', 'Nuttan Pally, Benachity,   DURGAPUR 713213', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(846, 'ST. FRANCIS XAVIER ENGLISH MEDIUM SCHOOL', 'SOUTH BAZAR , GODOWN ROAD  ANDAL DURGAPUR 713321', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(847, 'A.G.CHURCH SCHOOL BENACHITY', 'Gurudwara Road,Benachity, Durgapur  Durgapur  713213', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(848, 'A.G.CHURCH SCHOOL UKHRA', 'Bankola Area, P.O. Ukhra,Dist.Burdwan,WB   713363', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(849, 'SACRED HEART SCHOOL', 'P.O - ADRA   PURULIA 723121', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(850, 'A G CHURCH UKHRA', ' BANKOLA AREA PO WESTBENGAL   713363', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(851, 'LORETO CONVENT, ASANSOL', 'OPPOSITE LOCO TANK, G. T. ROAD   713301', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(852, 'ST. PETERS HIGH SCHOOL', 'WEST, MIRABAI AVENUE, A-ZONE, DURGAPUR   713204', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(853, 'A ZONE MULTI PURPOSE SCHOOL', 'AKBAR RD, A-ZONE, DURGAPUR   713204', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(854, 'NIRJHAR HIGHER SECONDARY SCHOOL', 'SHANTI PATH, C-ZONE, DURGAPUR   713205', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(855, 'DTPS HIGH SCHOOL', 'DVCDTPS,Durgapur-  Durgapur  713207', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(856, 'ST PETERS HIGH SCHOOL', 'Mirabai Road, Kamalpur  Durgapur  713204', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(857, 'SODPUR AREA A.G.CHARCH SCHOOL', 'Sodepur P.O. Sundarchak   713360', 'South Bengal-Durgapur,Raniganj,Asansol', 'ICSE'),
(858, 'ASANSOL COLLEGIATE SCHOOL', 'KALYANPUR SATELLITE TOWNSHIP  NORTH TO RIFLE ROAD PO- RAMAKRISHNA MISSION WEST BARDHAMAN 713305', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(859, 'DAYANAND VIDYALAYA', 'Budha, Asansiol - 1 Pathak Bari, Asansol, West Bengal, Asansol -   713301', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(860, 'D.A.V. HS SCHOOL ', 'Budha, Asansiol - 1 Hutton Road, Asansol - 713301, BUDHARAM KANHAI STHAN  ', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(861, 'ST. JOSEPH HIGH SCHOOL  ', 'Opp- loco ground, GT Rd, Asansol-1 Gt Road, Durga Market  ', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(862, 'BALBODHAN HIGH SCHOOL ', 'Chandmari, Railpar, Asansol-2   ', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(863, 'AGABEG MUNICIPAL HIGH SCHOOL ', 'Dipu para, Railpar, Asansol-2 K. S. Road, Po + Ps : Asansol, South Sub  ', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(864, 'PANCHGACHIYA HINDI HIGH SCHOOL ', 'Senreleigh More, Panchgachhiya,    713341', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(865, 'JOHARMAL JALAN INSTITUTION ', 'Asansol Bazar, Asansol-1 Pucca Bazar, Pathak Bari, Asansol Bazar, Asansol  713301', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(866, 'BARI VIDHYALAYA BURNPUR ', 'Wagon Colony, Burnpur Barddhaman Asansol Municipal Corporation Bari Vidyalaya (Hs) Amc Ward/47\n  713325', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(867, 'RAMBANDH ADARSH VIDYALAYA ', 'Ranbandh, Burnpur Asansol Chelidanga High S, Asansol Municipal Corporation, Amc Ward/43, Barddhaman  713325', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(868, 'MAHATMA GANDHI HIGH SCHOOL ', '8 No Basti, Burnpur  lala lajpat Nagar  713325', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(869, 'NARSINGH BANDH HINDI HIGH SCHOOL ', 'Nursinghbandh, Burnpur Bari Vidyalaya (Hs), Asansol Municipal Corporation, Amc Ward/40 Barddhaman 713325', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(870, 'JAY KAY NAGAR HIGH SCHOOL', ' PO- BIDHANBAG PASCHIM BARDHAMAN WB PIN 713337   713339', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(871, ' SRIPUR HAT HIGH SCHOOL.', 'Add SRIPUR BAZAAR JAMURIA, Chanda F.P. School, Jamuria Municipality, Jamuria Ward/19 Barddhaman 713373', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(872, 'KENDUWA HINDI HIGH SCHOOL ', 'Kendua Bazar, Kulti Guriya, Ranchi Gram, Kulti  Bardhaman 713343', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(873, 'BARAKAR SRI  MARWARI VIDYALAYA ', 'Barakar Kulti Municipality Begunia High School Kulti Ward/32 Barddhaman 713324', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(874, 'KULTI HINDI BALIKA VIDYALAYA ', 'L.C. More, Kulti Kulti Municipality Dishergarh A.C. Instituti Kulti Ward/29 Barddhaman 713343', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(875, 'NEPALIPADA HINDI HIGH SCHOOL', 'Nadida, Birbhanpur, Durgapur   713201', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(876, 'BENACHITY BHARTIYA HINDI HIGH SCHOOL ', 'Benachity, Durgapur  35, Gurudwara Road, Michael Sarani, Benachity, Durgapur  713213', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(877, 'BUDBUD CHATI HINDI HIGH SCHOOL ', ' Bhirsin F.P. School, Budbud/Vii,  Bardhaman 713403', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(878, 'PANAGARH BAZAR  HINDI HIGH SCHOOL  ', 'Panagarh Bazar  Bardhaman 713148', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(879, 'BURDWAN NEHRU VIDYAMANDIR HIGH SCHOOL', 'INDRAPRASTHA , BABURBAGH   Badshah Road, Bardhaman BURDWAN 713101', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(880, 'DURGAPUR MAMC TOWNSHIP MODERN HIGH SCHOOL', 'M.A.M.C ;  Lenin Sarani, Bidhannagar  DURGAPUR 713210', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(881, 'NIRJHAR DAY BOARDING SECONDARY SCHOOL ', 'Shanti Path , C-ZONE   DURGAPUR 713205', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(882, 'PANAGARH HINDI HIGH SCHOOL', 'Near Lions club panagarh bazar NH2,SH9,Panagarh WB-   713148', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(883, 'ANDAL MAHABIR HIGH SCHOOL', 'Ramprasadpur- andal bardhaman Andal Damodor Colony F.P School Ramprasadpur Barddhaman 713321', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(884, 'UKHRA NEHRU VIDYAPITH,GAIGHATA', 'G.T.Road Andal More NH-2 Durgapur    713363', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(885, 'BENACHITY BHARTIYA HINDI HIGH SCHOOL', 'Gurudwara Road, Durgapur Durgapur Municipal Corporation Nadida Birbhanpur F.P Sch Dmc Ward/19 Barddhaman 713213', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(886, 'ANDAL HINDU HIGH SCHOOL', 'Andal Andalgram F.P. School Andal   713321', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(887, 'NEPALIPADA HINDI HIGH SCHOOL', 'Nadida, Birbhanpur, Durgapur   713201', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(888, 'BENACHITY BHARTIYA HINDI HIGH SCHOOL ', 'Benachity, Durgapur  35, Gurudwara Road, Michael Sarani, Benachity, Durgapur  713213', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(889, 'UKHRA ADARSH HINDI HIGH SCHOOL', 'Post:Ukhra Dist:Burdwan   713363', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(890, 'BUDBUD CHATI HINDI HIGH SCHOOL ', ' Bhirsin F.P. School, Budbud/Vii,  Bardhaman 713403', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(891, 'MANDARBONI COLLIERY HIGH SCHOOL', 'Manderboni,Pandbeswar, Pandbeswar   713346', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(892, 'MARWARI SANATAN VIDYALAYA', 'NH 60,Raniganj, West Bengal   713347', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(893, 'BASANTI DEVI GOENKA VIDYAMANDIR', 'Raniganj, West Bengal, India near sani mandil, NSB road, Raniganj  713347', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(894, 'HOLY ANGELS PUBLIC SCHOOL', '152, Yadav Para, Raniganj HO, Raniganj    713347', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBBSE'),
(895, 'DURGAPUR TARAKNATH HIGH SCHOOL', 'TARAK NATH ROAD, PURBACHAL, INDUSTRIAL AREA  Durgapur 713201', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBSSC'),
(896, 'DURGAPUR NETAJI ADARSHA VIDYALAYA', 'KAZI NAZRUL ISLAM ROAD DURGAPUR-04,BARDHAMAN  713304', 'South Bengal-Durgapur,Raniganj,Asansol', 'WBSSC'),
(897, 'Delhi Public School Megacity Kolkata', '24 Kalikapur Rajarhat, PGS N, Kolkata, West Bengal 700136.', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(898, 'Saint Aloysius Orphanage and Day School', '2, Madhusudan Banerjee Road, Nimta, Rabindra Nagar, Alipur, Kolkata, West Bengal 700049', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(899, 'ST. ALOYSIOUS SCHOOL HOWRAH', ' Mukhram Kanodia lane, Howrah.', 'Kolkata-Howrah,Hooghly', 'IGCSE'),
(900, 'ST. ALOYSIOUS SCHOOL HOWRAH', ' Mukhram Kanodia lane,Howrah.', 'Kolkata-Howrah,Hooghly', 'ICSE'),
(901, 'ST. ALOYSIOUS SCHOOL HOWRAH', ' Mukhram Kanodia lane,Howrah.', 'Kolkata-Howrah,Hooghly', 'CBSE'),
(902, 'ST. ALOYSIOUS SCHOOL HOWRAH', ' Mukhram Kanodia lane,Howrah.', 'Kolkata-Howrah,Hooghly', 'WBBSE');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(2) NOT NULL,
  `form_date_time` varchar(111) NOT NULL,
  `reg_id` varchar(111) NOT NULL,
  `ip_address` varchar(111) NOT NULL,
  `reg_location` varchar(111) NOT NULL,
  `boardexam` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `disorder` varchar(111) NOT NULL,
  `phy_disorder_name` varchar(111) NOT NULL,
  `mental_disorder_name` varchar(111) NOT NULL,
  `disorder_detail` varchar(200) NOT NULL,
  `disorder_file` varchar(111) NOT NULL,
  `fname` varchar(111) NOT NULL,
  `lname` varchar(111) NOT NULL,
  `hname` varchar(111) NOT NULL,
  `hlname` varchar(111) NOT NULL,
  `student_photo_file` varchar(111) NOT NULL,
  `hname_correct` varchar(111) NOT NULL,
  `hname_file` varchar(111) NOT NULL,
  `student_gender` varchar(111) NOT NULL,
  `student_dob` varchar(100) NOT NULL,
  `student_email` varchar(111) NOT NULL,
  `student_mobile` varchar(111) NOT NULL,
  `board_roll_no` varchar(111) NOT NULL,
  `admit_card_file` varchar(111) NOT NULL,
  `school_name` varchar(111) NOT NULL,
  `school_address` varchar(200) NOT NULL,
  `other_school_name` varchar(111) NOT NULL,
  `other_school_address` varchar(200) NOT NULL,
  `school_medium` varchar(111) NOT NULL,
  `class` varchar(100) NOT NULL,
  `last_year_marks1` varchar(111) NOT NULL,
  `last_year_marks2` varchar(111) NOT NULL,
  `last_year_marks3` varchar(111) NOT NULL,
  `current_year_marks1` varchar(111) NOT NULL,
  `current_year_marks2` varchar(111) NOT NULL,
  `current_year_preboards` varchar(111) NOT NULL,
  `marksheet_one` varchar(100) NOT NULL,
  `marksheet_eleven` varchar(100) NOT NULL,
  `parent_name` varchar(111) NOT NULL,
  `parent_mobile` varchar(111) NOT NULL,
  `emergency_landline` varchar(111) NOT NULL,
  `parent_email` varchar(100) NOT NULL,
  `home_address` varchar(200) NOT NULL,
  `city` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `pincode` varchar(111) NOT NULL,
  `family_income` varchar(111) NOT NULL,
  `facebook_handle` varchar(111) NOT NULL,
  `twitter_handle` varchar(111) NOT NULL,
  `ragaward_source` varchar(111) NOT NULL,
  `ragaward_source_other` varchar(111) NOT NULL,
  `sanmarg_reader` varchar(100) NOT NULL,
  `hawker_name` varchar(111) NOT NULL,
  `hawker_telephone` varchar(111) NOT NULL,
  `rag_pariksha_participated` varchar(111) NOT NULL,
  `rag_pariksha_rollno` varchar(111) NOT NULL,
  `rag_pariksha_marks` varchar(111) NOT NULL,
  `rag_participated_chk` varchar(111) NOT NULL,
  `ankur` varchar(111) NOT NULL,
  `ankur_activity_textwork` varchar(200) NOT NULL,
  `ankur_activity_file` varchar(111) NOT NULL,
  `all_activity_file` varchar(100) NOT NULL,
  `yuva` varchar(111) NOT NULL,
  `marksheet_file` varchar(100) NOT NULL,
  `board_total_mark` varchar(100) NOT NULL,
  `board_hindi_mark` varchar(100) NOT NULL,
  `Board_hindi_mark_percent` varchar(100) NOT NULL,
  `qualified` enum('yes','no') NOT NULL DEFAULT 'no',
  `verified` enum('yes','no') NOT NULL DEFAULT 'no',
  `hindi_grade` varchar(100) NOT NULL,
  `hnd_tech_name` varchar(100) NOT NULL,
  `hnd_tech_mob` varchar(100) NOT NULL,
  `essay_file` varchar(100) NOT NULL,
  `essay_video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `form_date_time`, `reg_id`, `ip_address`, `reg_location`, `boardexam`, `category`, `disorder`, `phy_disorder_name`, `mental_disorder_name`, `disorder_detail`, `disorder_file`, `fname`, `lname`, `hname`, `hlname`, `student_photo_file`, `hname_correct`, `hname_file`, `student_gender`, `student_dob`, `student_email`, `student_mobile`, `board_roll_no`, `admit_card_file`, `school_name`, `school_address`, `other_school_name`, `other_school_address`, `school_medium`, `class`, `last_year_marks1`, `last_year_marks2`, `last_year_marks3`, `current_year_marks1`, `current_year_marks2`, `current_year_preboards`, `marksheet_one`, `marksheet_eleven`, `parent_name`, `parent_mobile`, `emergency_landline`, `parent_email`, `home_address`, `city`, `state`, `pincode`, `family_income`, `facebook_handle`, `twitter_handle`, `ragaward_source`, `ragaward_source_other`, `sanmarg_reader`, `hawker_name`, `hawker_telephone`, `rag_pariksha_participated`, `rag_pariksha_rollno`, `rag_pariksha_marks`, `rag_participated_chk`, `ankur`, `ankur_activity_textwork`, `ankur_activity_file`, `all_activity_file`, `yuva`, `marksheet_file`, `board_total_mark`, `board_hindi_mark`, `Board_hindi_mark_percent`, `qualified`, `verified`, `hindi_grade`, `hnd_tech_name`, `hnd_tech_mob`, `essay_file`, `essay_video`) VALUES
(1, '2023-05-04 15:42:39', '0000001', '136.232.70.46', 'Kolkata-Howrah,Hooghly', 'WBBSE', '', '', '', '', '', '', 'Testing', 'Testing', 'मनोज कुमार', 'महता', '', 'Yes', '', 'Male', '08-01-2006', 'manojmahatayt@gmail.com', '8637583151', '83627467234', 'file1.pdf', 'AGARPARA SABITRI MAHAJATI BALIKA VIDYAPITH', 'TETULTALA, MATAGIRI HARNA PALLY, AGARPARA Kolkata, West Bengal KOLKATA  700109', '', '', 'Hindi Medium', 'Class-12', '77', '77', '', '77', '77', '77', '', 'file1.pdf', 'parent name', '8637583151', '', 'parent@gmail.com', 'Baruipur,Kolkata,Westbengal,700144,India.', 'Kolkata', 'West Bengal', '700144', 'below 2.5 lakhs', '', '', 'Sanmarg Newspaper', '', 'Yes', '', '', '', '', '', 'Yes', 'Yes', 'this is my extracurricular activity', 'file1.pdf', '', '', 'Screenshot 2023-05-03 112301.png', '655', '67', '67', 'no', 'no', '', 'Manoj Mahata', '', 'Screenshot 2023-05-03 112238.png', 'sample_mp4.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--



-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'admin1', '#####', 'admin'),
(2, 'user1', '#####', 'user'),
(3, 'user2', '#####', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `winner_list`
--

CREATE TABLE `winner_list` (
  `id` int(100) NOT NULL,
  `reg_id` varchar(111) NOT NULL,
  `winner_name` varchar(111) NOT NULL,
  `winner_class` varchar(111) NOT NULL,
  `winner_board` varchar(100) NOT NULL,
  `print_status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `winner_list`
--

INSERT INTO `winner_list` (`id`, `reg_id`, `winner_name`, `winner_class`, `winner_board`, `print_status`) VALUES
(1, '0000001', 'Manoj mahata', 'Class-10', 'WBBSE', '6');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `guest` text,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `guest`, `reg_date`) VALUES
(1, '{\"2020\": [{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"}],\"2019\":[{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"}],\"2018\":[{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"}],\"2017\":[{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"},{\"img\":\"\",\"name\":\"\",\"designation\":\"\"}]}', '2021-06-04 13:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `guest` text,
  `splMoments` text,
  `winners` text,
  `gallery` text,
  `sponsor` text,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`, `guest`, `splMoments`, `winners`, `gallery`, `sponsor`, `regDate`) VALUES
(1, 2020, '{\"guest\":[{\"img_path\":\"assets/images/guest/2020/g1.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2020/g2.jpg\",\"name\":\"Ghum Touch Hospital\",\"designation\":\"Healthcare\"}]}', '{\"moments\":[{\"img_path\":\"assets/images/special-moments/2020/slide-page1.jpg\",\"heading\":\"Leadership\"},{\"img_path\":\"assets/images/special-moments/2020/slide-page2.jpg\",\"heading\":\"Relationships\"},{\"img_path\":\"assets/images/special-moments/2020/slide-page3.jpg\",\"heading\":\"Performance\"}]}', '{\"winner\":[{\"img_path\":\"assets/images/winner/2020/team1.jpg\",\"name\":\"Nats Stenman\",\"school\":\"Chief Operating Officer\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2020/team2.jpg\",\"name\":\"Angela Lyouer\",\"school\":\"Birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2020/team3.jpg\",\"name\":\"Mark Conter\",\"school\":\"Birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2020/team4.jpg\",\"name\":\"Ayesha Stewart\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2020/team5.jpg\",\"name\":\"Dave Clarkte\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2020/team6.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"}]}', 'assets/images/projects/2020/', 'assets/images/client/2020/', '2021-06-25 11:44:03'),
(2, 2019, '{\"guest\":[{\"img_path\":\"assets/images/guest/2019/g1.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2019/g2.jpg\",\"name\":\"Ghum Touch Hospital\",\"designation\":\"Healthcare\"},{\"img_path\":\"assets/images/guest/2019/g3.jpg\",\"name\":\"TNT East Facility\",\"designation\":\"Government\"},{\"img_path\":\"assets/images/guest/2019/g4.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2019/g5.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2019/g6.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2019/g7.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2019/g8.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2019/g9.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"}]}', '{\"moments\":[{\"img_path\":\"assets/images/special-moments/2019/spl1.jpg\",\"heading\":\"Leadership\"},{\"img_path\":\"assets/images/special-moments/2019/spl2.jpg\",\"heading\":\"Relationships\"},{\"img_path\":\"assets/images/special-moments/2019/spl3.jpg\",\"heading\":\"Relationships\"}]}', '{\"winner\":[{\"img_path\":\"assets/images/winner/2019/w1.jpg\",\"name\":\"Nats Stenman\",\"school\":\"Chief Operating Officer\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w2.jpg\",\"name\":\"Angela Lyouer\",\"school\":\"Birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w3.jpg\",\"name\":\"Mark Conter\",\"school\":\"Birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w4.jpg\",\"name\":\"Ayesha Stewart\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w5.jpg\",\"name\":\"Dave Clarkte\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w6.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w7.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w8.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w9.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w10.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w11.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w12.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w13.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w14.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w15.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2019/w16.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"}]}', 'assets/images/projects/2019/', 'assets/images/client/2019/', '2021-06-12 13:30:50'),
(3, 2018, '{\"guest\":[{\"img_path\":\"assets/images/guest/2018/g1.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2018/g2.jpg\",\"name\":\"Ghum Touch Hospital\",\"designation\":\"Healthcare\"},{\"img_path\":\"assets/images/guest/2018/g3.jpg\",\"name\":\"TNT East Facility\",\"designation\":\"Government\"},{\"img_path\":\"assets/images/guest/2018/g4.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2018/g5.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2018/g6.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2018/g7.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2018/g8.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"}]}', '{\"moments\":[{\"img_path\":\"assets/images/special-moments/2018/spl1.jpg\",\"heading\":\"Leadership\"},{\"img_path\":\"assets/images/special-moments/2018/spl2.jpg\",\"heading\":\"Relationships\"},{\"img_path\":\"assets/images/special-moments/2018/spl3.jpg\",\"heading\":\"Performance\"}]}', '{\"winner\":[{\"img_path\":\"assets/images/winner/2018/w1.jpg\",\"name\":\"Nats Stenman\",\"school\":\"Chief Operating Officer\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w2.jpg\",\"name\":\"Angela Lyouer\",\"school\":\"Birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w3.jpg\",\"name\":\"Mark Conter\",\"school\":\"Birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w4.jpg\",\"name\":\"Ayesha Stewart\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w5.jpg\",\"name\":\"Dave Clarkte\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w6.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w7.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w8.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w9.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w10.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w11.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w12.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w13.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w14.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w15.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2018/w16.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"}]}', 'assets/images/projects/2018/', 'assets/images/client/2018/', '2021-06-12 13:42:02'),
(4, 2017, '{\"guest\":[{\"img_path\":\"assets/images/guest/2017/project1.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"},{\"img_path\":\"assets/images/guest/2017/project2.jpg\",\"name\":\"Ghum Touch Hospital\",\"designation\":\"Healthcare\"},{\"img_path\":\"assets/images/guest/2017/project3.jpg\",\"name\":\"TNT East Facility\",\"designation\":\"Government\"},{\"img_path\":\"assets/images/guest/2017/project1.jpg\",\"name\":\"Capital Teltway Building\",\"designation\":\"Commercial, Interiors\"}]}', '{\"moments\":[{\"img_path\":\"assets/images/special-moments/2017/slide-page1.jpg\",\"heading\":\"Leadership\"},{\"img_path\":\"assets/images/special-moments/2017/slide-page2.jpg\",\"heading\":\"Relationships\"},{\"img_path\":\"assets/images/special-moments/2017/slide-page3.jpg\",\"heading\":\"Performance\"}]}', '{\"winner\":[{\"img_path\":\"assets/images/winner/2017/team1.jpg\",\"name\":\"Nats Stenman\",\"school\":\"Chief Operating Officer\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2017/team2.jpg\",\"name\":\"Angela Lyouer\",\"school\":\"Birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2017/team3.jpg\",\"name\":\"Mark Conter\",\"school\":\"Birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2017/team4.jpg\",\"name\":\"Ayesha Stewart\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2017/team5.jpg\",\"name\":\"Dave Clarkte\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"},{\"img_path\":\"assets/images/winner/2017/team6.jpg\",\"name\":\"Elton Joe\",\"school\":\"birla school\",\"description\":\"Nats Stenman began his career in construction with boots on the ground\"}]}', 'assets/images/projects/2017/', 'assets/images/client/2017/', '2021-06-11 07:49:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aparajay_student_data`
--
ALTER TABLE `aparajay_student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `env_board_dtl`
--
ALTER TABLE `env_board_dtl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `env_locations`
--
ALTER TABLE `env_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_above`
--
ALTER TABLE `header_above`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_below`
--
ALTER TABLE `header_below`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_student_data`
--
ALTER TABLE `new_student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_list`
--
ALTER TABLE `school_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winner_list`
--
ALTER TABLE `winner_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aparajay_student_data`
--
ALTER TABLE `aparajay_student_data`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `env_board_dtl`
--
ALTER TABLE `env_board_dtl`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `env_locations`
--
ALTER TABLE `env_locations`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `header_above`
--
ALTER TABLE `header_above`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_below`
--
ALTER TABLE `header_below`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `new_student_data`
--
ALTER TABLE `new_student_data`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_list`
--
ALTER TABLE `school_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=903;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1421;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `winner_list`
--
ALTER TABLE `winner_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
