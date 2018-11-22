-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2016 at 09:37 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sunshine`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `msg` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `msg`) VALUES
(1, '<p><span style="font-size:36px"><span style="color:#0000FF">About Company</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:22px"><span style="color:#808080">SunShine Properties is a leading plain land provider of Ahmedabad.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:22px"><span style="color:#808080">The compay represents real estate professionals of more than&nbsp;two decades long experience </span></span></p>\r\n\r\n<p><span style="font-size:22px"><span style="color:#808080">who subscribe to a strict&nbsp;</span></span><span style="font-size:22px"><span style="color:#808080">code of ethics.</span></span></p>\r\n\r\n<p><br />\r\n<span style="font-size:22px"><span style="color:#808080">The promoters of the company working in the field of plain land since 25&nbsp;years ,&nbsp;while</span></span></p>\r\n\r\n<p><span style="font-size:22px"><span style="color:#808080">achieving their goal to assist the </span></span><span style="font-size:22px"><span style="color:#808080">precious clients in conducting business&nbsp;successfully</span></span></p>\r\n\r\n<p><span style="font-size:22px"><span style="color:#808080">and ethically along with promoting the preservation of the right to&nbsp;</span></span><span style="font-size:22px"><span style="color:#808080">own,&nbsp;transfer and use</span></span></p>\r\n\r\n<p><span style="font-size:22px"><span style="color:#808080">real property.&nbsp;</span></span></p>\r\n\r\n<p><br />\r\n<span style="font-size:22px"><span style="color:#808080">Our clients are from Ahmedabad&nbsp;.&nbsp;</span></span></p>\r\n\r\n<p><br />\r\n<span style="font-size:22px"><span style="color:#808080">This, perhaps, speaks a lot about how we take care of uncertainty associated with&nbsp;</span></span></p>\r\n\r\n<p><span style="font-size:22px"><span style="color:#808080">real estate market with the application&nbsp;</span></span><span style="font-size:22px"><span style="color:#808080">of the specific standards for a meaningful</span></span></p>\r\n\r\n<p><span style="font-size:22px"><span style="color:#808080">&nbsp;transaction business to take place.</span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `city_area`
--

CREATE TABLE IF NOT EXISTS `city_area` (
  `city_area_id` int(10) NOT NULL AUTO_INCREMENT,
  `city_area_name` varchar(100) NOT NULL,
  PRIMARY KEY (`city_area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `city_area`
--

INSERT INTO `city_area` (`city_area_id`, `city_area_name`) VALUES
(1, 'Isanpur'),
(2, 'Bapunagar'),
(3, 'Satellite'),
(4, 'S.G.Highway'),
(5, 'Sanand'),
(6, 'Bopal'),
(7, 'Naroda'),
(8, 'Ambavadi'),
(9, 'Ushmanpura'),
(10, 'Bavla'),
(12, 'Rakhiyal'),
(13, 'Maninagar');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `emaill` varchar(25) NOT NULL,
  `subje` varchar(50) NOT NULL,
  `mono` varchar(13) NOT NULL,
  `msg` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `emaill`, `subje`, `mono`, `msg`) VALUES
(2, 'Jash', 'jash@gmail.com', 'Land', '8866223311', 'Please Send Me The Address Of Your Company .\r\n'),
(3, 'Mpreksh', 'Mpreksh@gmail.com', 'About Land', '9426353302', 'When We can Disscuss About This Land'),
(4, 'Mahendra', 'Mahendra@gmail.com', 'Negotiate', '8866554433', 'Negotiate Price ?');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_product`
--

CREATE TABLE IF NOT EXISTS `feedback_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `subje` varchar(30) NOT NULL,
  `mobo` varchar(13) NOT NULL,
  `msg` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback_product`
--

INSERT INTO `feedback_product` (`id`, `name`, `subje`, `mobo`, `msg`) VALUES
(2, 'Ashish', 'Isanpur land', '8460285358', 'Abc');

-- --------------------------------------------------------

--
-- Table structure for table `inquery`
--

CREATE TABLE IF NOT EXISTS `inquery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `land_name` varchar(20) NOT NULL,
  `land_price` varchar(10) NOT NULL,
  `path` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `emaill` varchar(25) NOT NULL,
  `mono` varchar(13) NOT NULL,
  `msg` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `inquery`
--

INSERT INTO `inquery` (`id`, `land_name`, `land_price`, `path`, `name`, `emaill`, `mono`, `msg`) VALUES
(12, 'Satellite', 'â‚¹ 1 Cr', 'sale_land/img_40.jpg', 'Jash', 'jash@gmail.com', '9426353302', 'Intrested'),
(13, 'S.G.Highway', 'â‚¹ 1.2 Cr', 'sale_land/img_43.jpg', 'Jash', 'jash@gmail.com', '9090909090', 'intrested'),
(14, 'Ushmanpura', 'â‚¹ 1.0 Cr', 'sale_land/img_41.jpg', 'Jash', 'jash@gmail.com', '8866223311', 'It Can Be Negotiate ?'),
(15, 'Ushmanpura', 'â‚¹ 1.0 Cr', 'sale_land/img_41.jpg', 'Jash', 'jash@gmail.com', '8460285358', 'intrested');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `type`) VALUES
(1, 'preksh.mehta27@gmail.com', '12345', 1),
(4, 'sumitp@gmail.com', '12345', 1),
(5, 'Megha@gmail.com', '12345', 1),
(6, 'hima@gmai.com', '12345', 1),
(7, 'ashish@gmail.com', '12345', 1),
(8, 'keval@gmail.com', '12345', 2),
(9, 'preksh@gmail.com', '123@abc', 2),
(10, 'jash@gmail.com', '12345', 1),
(11, 'abhi2939@gmail.com', 'abhi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titel` varchar(10000) NOT NULL,
  `msg` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `titel`, `msg`) VALUES
(8, 'PM Modi woos German companies, says India is now a changed country   ', '<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:20px"><span style="color:#000000">Prime Minister Narendra Modi on Monday made a strong pitch for German companies to invest in India asking them to come and feel the change.<br />\r\n<br />\r\nStating that India is now a changed country, PM Modi said &quot;we have removed lot of regressive taxation regimes.&quot;<br />\r\n<br />\r\n&quot;Our regulatory regime is much more transparent, responsive and stable,&quot; PM said inaugurating the India-German business summit.<br />\r\n<br />\r\nStating that there was more potential in India-German economic collaboration, PM Modi said, &quot;Our economic partnership not as much as what both nations would like to have. I am here to assure the German companies that India is now a changed country.&quot;<br />\r\n<br />\r\n&quot;It is the effort of my government to encourage innovation, R &amp; D and entrepreneurship in the country,&quot; PM said adding, &quot;I take this opportunity for inviting more and more German companies to India. Assure all support from my side.&quot;&nbsp;<br />\r\nEarlier, speaking at the inauguration of the &#39;India Pavilion&#39; at the Hannover Messe, Modi said India has a huge potential to become a global manufacturing hub as he invited the whole world to partner with the fastest growing economy in this endeavour.<br />\r\n<br />\r\n&quot;The entire world is looking at India. Demography, democracy and demand are attracting the world to India,&quot; Modi said as he along with German chancellor Angela Merkel opened the &#39;India Pavilion&#39; at the Hannover Messe, the world&#39;s largest industrial fair.<br />\r\n<br />\r\nIndia is the partner country at the fair. &quot;</span><a href="http://timesofindia.indiatimes.com/india/PM-Modi-woos-German-companies-says-India-is-now-a-changed-country/articleshow/46905513.cms" style="box-sizing: border-box; margin-top: 5px; padding: 0px; color: rgb(132, 211, 241); text-decoration: none; text-shadow: none; transition: all 0.2s linear;"><span style="color:#000000">Not only Germany, the whole world is looking at India</span></a><span style="color:#000000">,&quot; Modi said.<br />\r\n<br />\r\n&quot;Low-cost manufacturing, efficient governance and no-defect manufacturing makes India a global engine in the manufacturing centre,&quot; he said, adding there is a huge potential of India becoming a manufacturing hub.<br />\r\n<br />\r\nThe Prime Minister invited the whole world to come to India and increase their partnership with the country and make use of the opportunities India offer to scale new heights of success.<br />\r\n<br />\r\n&quot;All kinds of rating agencies of the world are saying India is the fastest growing economy,&quot; he said.<br />\r\nMerkel said she was impressed with what India is showcasing at the fair</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:20px"><span style="color:#000000">(Source: Times of India)</span></span></p>\r\n'),
(14, 'RBI governor urges developers to slash prices to improve sales     ', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:22px">After a proposed cut in the interest rates, the Reserve Bank of India (RBI) Governor, Raghuram Rajan, has urged the real estate developers to consider reducing prices to encourage residential sales.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:22px">His statement came at a time when the real estate industry is reeling under the pressures of an inventory overhang and low housing demand. Rajan shared that post interest rate fall, buying will increase and prices will stabilise in turn encouraging people to buy, he said while delivering Y B Chavan Memorial Lecture.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:22px">According to reports, the RBI has already cut interest rates by 1.5 percent since January last year. The policy rate has also come down by 0.25 percent to 6.25 percent, which is the lowest in the last five years.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:22px">Rajan said that to revive the real estate industry of the country, a little bit of everything must be done.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:22px">Rajan appreciated the corrective measures to include affordable housing loans under priority sector. He believes the strategy adopted by the government will take care of financing woes.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:22px">Emphasizing on transparency in real estate, Rajan said that transparency on land acquisition, construction, and sales is important to help financiers to track flow of their funds.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:22px">He stated that construction in the country is important as it paves way for growth.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `mobo` varchar(13) NOT NULL,
  `emaill` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `gender`, `dob`, `mobo`, `emaill`, `pass`) VALUES
(1, 'meet', 'patel', 'male', '2016-02-29', '2147483647', 'meet@gmail.com', '123'),
(2, 'sumit', 'patel', 'male', '1993-11-20', '992562315', 'sumitp@gmail.com', '12345'),
(3, 'Megha', 'Mehta', 'female', '1985-01-10', '2147483647', 'Megha@gmail.com', '12345'),
(4, 's', 'm', 'female', '1993-11-20', '2147483647', 'hima@gmai.com', '12345'),
(5, 'ashish', 'patel', 'male', '1993-11-20', '2147483647', 'ashish@gmail.com', '12345'),
(6, 'keval', 'patel', 'male', '2016-04-12', '9924601285', 'keval@gmail.com', '12345'),
(7, 'preksh', 'Mehta', 'male', '1996-07-21', '8460285358', 'preksh@gmail.com', '123@abc'),
(8, 'Jash', 'Shah', 'male', '1996-05-19', '8128983310', 'jash@gmail.com', '12345'),
(9, 'Abhi', 'Shah', 'male', '1996-08-19', '9898252423', 'abhi2939@gmail.com', 'abhi');

-- --------------------------------------------------------

--
-- Table structure for table `sale_land`
--

CREATE TABLE IF NOT EXISTS `sale_land` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `imgg` varchar(100) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `pric` varchar(15) NOT NULL,
  `p_area` varchar(15) NOT NULL,
  `poass` varchar(20) NOT NULL,
  `discri` mediumtext NOT NULL,
  `area_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `sale_land`
--

INSERT INTO `sale_land` (`id`, `imgg`, `titel`, `pric`, `p_area`, `poass`, `discri`, `area_name`) VALUES
(37, 'sale_land/img_1.jpg', '  Bapunagar', 'â‚¹ 1.62 Cr', '2500 syrd', 'Immediate', 'Residential Plot 2500 sqyrd,</br>Opp. City Pulse,</br>Nr. Karnavati Bunglows,</br>Bapunagar.', 'Bapunagar'),
(38, 'sale_land/img_37.jpg', 'Bavla', 'â‚¹ 60 Lakh', '250 sqyrd', 'Immediate', 'Residential Plot 250 sqyrd,</br>Opp. Spectra House ,</br>Nr.RamdevNagar ,</br>Bavla.', 'Bavla'),
(39, 'sale_land/img_38.jpg', 'Isanpur', 'â‚¹ 50 Lakh', '300 sqyrd', 'Immediate', ' Residential Plot 300 sqyrd,</br>Opp. Vrunda App ,</br>Nr.Patelvas ,</br>Isanpur.', 'Isanpur'),
(40, 'sale_land/img_39.jpg', 'Bopal', 'â‚¹ 80 Lakh', '450 sqyrd', 'Immediate', 'Commercial Plot 450 sqyrd ,</br>Opp Sakshi Mil Factory ,</br>Bopal', 'Bopal'),
(41, 'sale_land/img_40.jpg', 'Satellite', 'â‚¹ 1 Cr', '200 sqyrd', 'Immediate', ' Very Good Resedential Plot At Satellite</br>\r\nNr Mansi Circle ,</br>\r\nOpp, Bikaner House ,</br>\r\nSatellite', 'Satellite'),
(42, 'sale_land/img_41.jpg', 'Ushmanpura', 'â‚¹ 1.0 Cr', '2000 sqyrd', 'Immediate', 'A very Good Commercial Plot At Ushmanpura,</br>\r\n2000 sqyrd,</br>\r\nNr. Rakshit Circle,</br>\r\nUshmanpura ', 'Ushmanpura'),
(43, 'sale_land/img_42.jpg', 'Ambavadi', 'â‚¹ 70 Lakh', '450 sqyrd', 'Immediate', ' Residential Plot ,</br>450 sqyrd,</br>Nr Bharat PetrolPump,</br>Ambavadi', 'Ambavadi'),
(44, 'sale_land/img_43.jpg', 'S.G.Highwaya', 'â‚¹ 1.2 Cr', '2200 sqyrd', 'Immediate', 'Residential Plot 2200 sqyrd </br>\r\nOpp Shapath V in SG Highway,</br> Ahmedabad\r\nâ‚¹ 1.2 Cr </br>\r\nAddress</br>\r\nNr Karnavati Club, SG Highway,</br>\r\n Ahmedabad ', 'S.G.Highway'),
(45, 'sale_land/img_44.jpg', 'Sanand', 'â‚¹ 50 Lakh', '700 sqyrd', 'Immediate', 'Commercial Plot ,</br>700 sqyrd,</br>Nr Sanand Highway,</br>Opp, Commercial Park,</br>Sanand.', 'Sanand'),
(46, 'sale_land/img_45.jpg', 'Naroda', 'â‚¹ 35 Lakh', '380 sqyrd', 'Immediate', ' Commercial Plot ,</br> 380 sqyrd, </br>Nr Raspan Party Plot,</br> Opp, Murti Dham Park,</br> Naroda.', 'Naroda'),
(47, 'sale_land/img_46.jpg', 'S.G.Highway', 'â‚¹ 1.5 Cr', '2500 sqyrd', 'Immediate', 'Residential Plot 2500 sqyrd \r\nPrice is â‚¹ 1.5 Cr \r\nAddress\r\nNr Karnavati Club, SG Highway,\r\nAhmedabad', 'S.G.Highway'),
(48, 'sale_land/img_47.jpg', 'Iabc', '50 Lakhs', '500 sqrd', 'Immediate', ' dbf', 'Naroda'),
(49, 'sale_land/img_48.jpg', 'Great Land At Maninagar', 'â‚¹ 50 Lakh', '250 sqyrd', 'Immediate', '18 Ramdev Nagar,</br>\r\nNr. Bhadvat naagr,</br>\r\nManinagar,\r\nAhmedabad', 'Maninagar');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `imag` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `imag`) VALUES
(26, 'slider/img_0.jpg'),
(27, 'slider/img_26.jpg'),
(28, 'slider/img_27.jpg');
