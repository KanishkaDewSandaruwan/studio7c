-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 07:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studio7c`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `title`, `description`) VALUES
('22.jpg', 'What We do', '<h1>Studio 7C</h1><ul><li>Photography</li><li>Videography</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `pack_id` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `trndate` datetime NOT NULL,
  `complete` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `customer_id`, `pack_id`, `booking_date`, `booking_time`, `location`, `description`, `price`, `trndate`, `complete`) VALUES
(2, '7', '4', '2021-01-15', '00:36:00', 'Sinharaja Geust', 'Patta sssds', 2500, '2021-01-14 01:08:52', 'Completed'),
(4, '7', '3', '2021-01-16', '02:19:00', 'Sinharaja Geust', 'Patta sssds', 350, '2021-01-14 01:09:28', 'Reject'),
(6, '12', '4', '2021-01-15', '03:01:00', 'Sinharaja Geust', 'Painkillers', 2500, '2021-01-14 01:10:39', 'Completed'),
(7, '12', '2', '2021-01-08', '04:51:00', 'Sinharaja Geust', 'Patta sssds', 2500, '2021-01-14 01:12:47', 'Completed'),
(8, '12', '4', '2021-01-30', '11:08:00', 'Sinharaja Geust', 'Patta sssds', 2500, '2021-01-15 01:18:13', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `date_of_birth`, `phone`, `email`, `address`, `password`, `trn_date`) VALUES
(6, 'Kanishka', 'Sandaruwan', '2020-10-22', 713664071, 'kanishkadewsandaruwan123@gmail.com', 'Banwalgodalla, Kosmulla', '827ccb0eea8a706c4c34a16891f84e7b', '2020-12-22 12:15:36'),
(9, 'Kanishka', 'Sandaruwan', '2021-01-07', 713664071, 'Kanishkadewsandaruwan1@gmail.com', 'Banwalgodalla, Kosmulla', '827ccb0eea8a706c4c34a16891f84e7b', '2021-01-05 01:13:56'),
(11, 'Thilini', 'Maheshik', '1999-01-01', 713664072, 'thili@gmail.com', 'Thawalama', '827ccb0eea8a706c4c34a16891f84e7b', '2021-01-11 01:13:44'),
(12, 'Kanishka Dew ', 'Sandaruwan', '1996-09-65', 713664071, 'kanishkadewsandaruwan@gmail.com', 'Banwalgodalla, Kosmulla, Neluwa', 'e10adc3949ba59abbe56e057f20f883e', '2021-01-14 01:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `customer_backup`
--

CREATE TABLE `customer_backup` (
  `backup_id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_backup`
--

INSERT INTO `customer_backup` (`backup_id`, `customer_id`, `name`, `phone`, `email`, `trn_date`) VALUES
(3, '3', 'Kanishka Dew Sandaruwan', '713664072', 'kanishkadewsandaruwan@gmail.com', '2020-12-24 12:18:02'),
(4, '8', 'Kanishka Sandaruwan', '713664071', 'kaniya@gmail.com', '2020-12-27 12:09:52'),
(5, '10', 'Thilini Maheshika', '713664071', 'kthilini@gmail.com', '2021-01-12 01:18:28'),
(6, '7', 'Kanishka Sandaruwan', '713664071', 'kanishkadewsandaruwan@gmail.com', '2021-01-14 01:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `details_block`
--

CREATE TABLE `details_block` (
  `image1` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `description3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `title4` varchar(255) NOT NULL,
  `description4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details_block`
--

INSERT INTO `details_block` (`image1`, `title1`, `description1`, `image2`, `title2`, `description2`, `image3`, `title3`, `description3`, `image4`, `title4`, `description4`) VALUES
('i1.png', 'Studio 7C', 'Make your Dream', 'i2.png', 'Fast Service', 'We are fast than any one', 'i3.png', 'Working', 'Hello Working', 'i4.png', 'ddd', 'ddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `full_name`, `address`, `phone_number`, `email`, `gender`, `password`, `username`, `trndate`) VALUES
(2, '', '', 0, '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '2020-11-22 11:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `img_id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `service`, `image`) VALUES
(1, '2', 'The-Uses-of-Technology-in-Our-Life.jpg'),
(2, '3', 'Adaraya Sundara Waradaki - Karunarathna Divulgane - Sinhala Music Audio Song - YouTube.MKV');

-- --------------------------------------------------------

--
-- Table structure for table `image_manager`
--

CREATE TABLE `image_manager` (
  `login_image` varchar(255) NOT NULL,
  `reg_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_manager`
--

INSERT INTO `image_manager` (`login_image`, `reg_image`) VALUES
('dark_bg_img.png', 'dark_bg_img2.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `msg_read` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `email`, `subject`, `message`, `trn_date`, `msg_read`) VALUES
(2, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'tjgj', '2020-12-24 12:17:24', 'Reded');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_details` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pack_id`, `package_name`, `package_details`, `service`, `price`, `availability`, `trndate`) VALUES
(2, 'Passport size Small', '<p>Hello</p><ul><li>sss</li><li>s</li><li>s</li><li>s</li></ul>', '2', 2500, 'Yes', '2021-01-04 01:15:03'),
(4, 'Short Film', '<p>Short Film</p><p><br></p><ul><li>High Quality</li><li>quick service</li></ul>', '3', 2500, 'Yes', '2021-01-07 01:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `package_backup`
--

CREATE TABLE `package_backup` (
  `back_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `pack_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_backup`
--

INSERT INTO `package_backup` (`back_id`, `package_name`, `pack_id`) VALUES
(1, 'Wedding Video', 0),
(2, 'Passport size 02', 3),
(3, 'Cartoon', 7),
(4, 'Passport size', 8),
(5, 'Wedding Video', 9);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `sid` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sid`, `service_name`, `service_image`) VALUES
(2, 'PhotoGraphy', 'post-05.jpg'),
(3, 'Videography', '38904779_1983560601707699_6189612872188821504_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_banner`
--

CREATE TABLE `slider_banner` (
  `slider_banner_id` int(11) NOT NULL,
  `slider_banner_01` varchar(255) NOT NULL,
  `slider_banner_02` varchar(255) NOT NULL,
  `slider_banner_03` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `description3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_banner`
--

INSERT INTO `slider_banner` (`slider_banner_id`, `slider_banner_01`, `slider_banner_02`, `slider_banner_03`, `title1`, `description1`, `title2`, `description2`, `title3`, `description3`) VALUES
(23, 'dark_bg_img.png', 'dark_bg_img2.png', 'post-02.jpg', 'Studio 7C', 'Make your Dream', 'Fast Service', 'We are fast than any one', 'Working', 'Hello Working');

-- --------------------------------------------------------

--
-- Table structure for table `special_details`
--

CREATE TABLE `special_details` (
  `privacy` varchar(9000) NOT NULL,
  `terms` varchar(7000) NOT NULL,
  `header_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_details`
--

INSERT INTO `special_details` (`privacy`, `terms`, `header_image`) VALUES
('<div class=\"col-md-12\" style=\"margin: 0px; padding-top: 0px; padding-bottom: 0px; width: 900px; -webkit-box-flex: 0; font-size: 15px; color: rgb(137, 137, 137); font-family: Raleway, sans-serif; background-color: rgb(255, 255, 255); outline: none !important;\"><div class=\"full\" style=\"margin: 0px 0px 30px; padding: 0px; width: 870px; float: left; outline: none !important;\"><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\">LOG FILES</h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(112, 112, 112); line-height: 21px; outline: none !important;\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p></div></div><div class=\"col-md-12\" style=\"margin: 0px; padding-top: 0px; padding-bottom: 0px; width: 900px; -webkit-box-flex: 0; font-size: 15px; color: rgb(137, 137, 137); font-family: Raleway, sans-serif; background-color: rgb(255, 255, 255); outline: none !important;\"><div class=\"full\" style=\"margin: 0px 0px 30px; padding: 0px; width: 870px; float: left; outline: none !important;\"><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\">PRIVACY POLICIES</h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(112, 112, 112); line-height: 21px; outline: none !important;\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div></div><div class=\"col-md-12\" style=\"margin: 0px; padding-top: 0px; padding-bottom: 0px; width: 900px; -webkit-box-flex: 0; font-size: 15px; color: rgb(137, 137, 137); font-family: Raleway, sans-serif; background-color: rgb(255, 255, 255); outline: none !important;\"><div class=\"full\" style=\"margin: 0px 0px 30px; padding: 0px; width: 870px; float: left; outline: none !important;\"><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\">THIRD PARTY POLICIES</h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(112, 112, 112); line-height: 21px; outline: none !important;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p></div></div>', '<div class=\"col-md-12\" style=\"margin: 0px; padding-top: 0px; padding-bottom: 0px; width: 900px; -webkit-box-flex: 0; font-size: 15px; color: rgb(137, 137, 137); font-family: Raleway, sans-serif; background-color: rgb(255, 255, 255); outline: none !important;\"><div class=\"full\" style=\"margin: 0px 0px 30px; padding: 0px; width: 870px; float: left; outline: none !important;\"><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\"><br></h3><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\"><br></h3><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\">LOG FILES</h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(112, 112, 112); line-height: 21px; outline: none !important;\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p></div></div><div class=\"col-md-12\" style=\"margin: 0px; padding-top: 0px; padding-bottom: 0px; width: 900px; -webkit-box-flex: 0; font-size: 15px; color: rgb(137, 137, 137); font-family: Raleway, sans-serif; background-color: rgb(255, 255, 255); outline: none !important;\"><div class=\"full\" style=\"margin: 0px 0px 30px; padding: 0px; width: 870px; float: left; outline: none !important;\"><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\">PRIVACY POLICIES</h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(112, 112, 112); line-height: 21px; outline: none !important;\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div></div><div class=\"col-md-12\" style=\"margin: 0px; padding-top: 0px; padding-bottom: 0px; width: 900px; -webkit-box-flex: 0; font-size: 15px; color: rgb(137, 137, 137); font-family: Raleway, sans-serif; background-color: rgb(255, 255, 255); outline: none !important;\"><div class=\"full\" style=\"margin: 0px 0px 30px; padding: 0px; width: 870px; float: left; outline: none !important;\"><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\">THIRD PARTY POLICIES</h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(112, 112, 112); line-height: 21px; outline: none !important;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p></div></div><div class=\"col-md-12\" style=\"margin: 0px; padding-top: 0px; padding-bottom: 0px; width: 900px; -webkit-box-flex: 0; font-size: 15px; color: rgb(137, 137, 137); font-family: Raleway, sans-serif; background-color: rgb(255, 255, 255); outline: none !important;\"><div class=\"full\" style=\"margin: 0px 0px 30px; padding: 0px; width: 870px; float: left; outline: none !important;\"><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\"><br></h3><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\"><br></h3><h3 style=\"margin-top: 0px; margin-bottom: 15px; padding: 0px; letter-spacing: 0px; position: relative; font-weight: 700; line-height: normal; color: rgb(0, 0, 0); font-size: 16px; font-family: inherit; outline: none !important;\">ONLINE PRIVACY</h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(112, 112, 112); line-height: 21px; outline: none !important;\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p></div></div>', 'bg2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `studio_details`
--

CREATE TABLE `studio_details` (
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `rest_address` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tweeter` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `instragram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studio_details`
--

INSERT INTO `studio_details` (`email`, `phone`, `rest_address`, `fb`, `tweeter`, `linkdin`, `instragram`) VALUES
('kanishkadewsandaruwan@gmail.com', '0713664071', 'Banwalgodalla, Kosmulla', 'https://www.facebook.com/', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `work_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `highlight` varchar(500) NOT NULL,
  `description` varchar(9000) NOT NULL,
  `head_image` varchar(255) NOT NULL,
  `worked_date` date NOT NULL,
  `trndate` datetime NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`work_id`, `title`, `highlight`, `description`, `head_image`, `worked_date`, `trndate`, `service`) VALUES
(4, 'kgkkgkgk', 'gkgkgkgk', '<p>kkkkkkkkkkkkkkkk</p>', 'client3.jpg', '2021-01-22', '2021-01-15 01:10:53', '2'),
(5, 'Handmade Dream  Catchers  medium Gift Wall deco ', 'Best Keyboard in world', '<p>ddddd</p>', 'post-04.jpg', '2021-01-29', '2021-01-15 01:10:45', '2'),
(6, 'Checken Noodles', 'Best Keyboard in world', '<p><b>ddddd</b></p><ul><li><b>ddd</b></li><li><b>ddd</b></li><li><b>d</b></li></ul>', 'post-03.jpg', '2021-01-30', '2021-01-15 01:10:04', '2');

-- --------------------------------------------------------

--
-- Table structure for table `work_albem`
--

CREATE TABLE `work_albem` (
  `albem_id` int(11) NOT NULL,
  `work_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_albem`
--

INSERT INTO `work_albem` (`albem_id`, `work_id`, `image`) VALUES
(11, '4', 'client3.png'),
(12, '4', 'dark_bg_img.png'),
(14, '4', 'dark_bg_img2.png'),
(15, '4', 'post-07.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_backup`
--
ALTER TABLE `customer_backup`
  ADD PRIMARY KEY (`backup_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `package_backup`
--
ALTER TABLE `package_backup`
  ADD PRIMARY KEY (`back_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `slider_banner`
--
ALTER TABLE `slider_banner`
  ADD PRIMARY KEY (`slider_banner_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

--
-- Indexes for table `work_albem`
--
ALTER TABLE `work_albem`
  ADD PRIMARY KEY (`albem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer_backup`
--
ALTER TABLE `customer_backup`
  MODIFY `backup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package_backup`
--
ALTER TABLE `package_backup`
  MODIFY `back_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider_banner`
--
ALTER TABLE `slider_banner`
  MODIFY `slider_banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `work_albem`
--
ALTER TABLE `work_albem`
  MODIFY `albem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
