-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2019 at 12:35 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Aremak`
--

-- --------------------------------------------------------

--
-- Table structure for table `Carts`
--

CREATE TABLE `Carts` (
  `UserID` int(10) NOT NULL,
  `ProductsID` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `CategoryID` int(10) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`CategoryID`, `CategoryName`, `Description`) VALUES
(1, 'DSLR Cameras', ''),
(2, 'Mirrorless Cameras', ''),
(3, 'Compact Cameras', ''),
(4, 'Portrait Lenses', ''),
(5, 'Macro Lenses', ''),
(6, 'Mirrorless Lenses', ''),
(7, 'Telephoto Lenses', ''),
(8, 'Wide Angle Lenses', '');

-- --------------------------------------------------------

--
-- Table structure for table `OrderDetails`
--

CREATE TABLE `OrderDetails` (
  `OrderID` int(10) NOT NULL,
  `ProductsID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OrdersTable`
--

CREATE TABLE `OrdersTable` (
  `OrdersID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `PaymentID` int(10) NOT NULL,
  `PaymentType` varchar(125) NOT NULL,
  `PaymentStatus` tinyint(1) NOT NULL,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Picture`
--

CREATE TABLE `Picture` (
  `PicURL` varchar(255) NOT NULL,
  `ProductsID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Picture`
--

INSERT INTO `Picture` (`PicURL`, `ProductsID`) VALUES
('nfs://192.168.64.2/opt/lampp/htdocs/AremakWeb/Images/Cameras/DSLR/canon-australia-eos-80d-body-back.png', 1),
('nfs://192.168.64.2/opt/lampp/htdocs/AremakWeb/Images/Cameras/DSLR/canon-australia-eos-80d-body-front.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `ProductsID` int(10) NOT NULL,
  `ProductsName` varchar(255) NOT NULL,
  `ProductsPrice` decimal(32,0) NOT NULL,
  `UnitsInstock` int(10) NOT NULL,
  `ProductsPicture` varchar(255) NOT NULL,
  `ProductsPicture2` varchar(255) NOT NULL,
  `ProductsPicture3` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `CategoryID` int(10) NOT NULL,
  `CategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`ProductsID`, `ProductsName`, `ProductsPrice`, `UnitsInstock`, `ProductsPicture`, `ProductsPicture2`, `ProductsPicture3`, `Description`, `CategoryID`, `CategoryName`) VALUES
(1, 'EOS 80D Body', '1429', 5, '../Images/Cameras/DSLR/canon-australia-eos-80d-body-front.png', '../Images/Cameras/DSLR/canon-australia-eos-80d-body-right.png', '../Images/Cameras/DSLR/canon-australia-eos-80d-body-left.png', '', 1, 'DSLR Cameras'),
(2, 'EOS 77D Body', '1249', 5, '../Images/Cameras/DSLR/eos_77db-front.png', '../Images/Cameras/DSLR/eos_77d_-back_lcd-open.png', '../Images/Cameras/DSLR/eos_77d_side.png', '', 1, 'DSLR Cameras'),
(3, 'EOS 200D with EF-S 18-55mm', '799', 5, '../Images/Cameras/DSLR/eos_200d_single_kit_front.png', '../Images/Cameras/DSLR/eos_200d_single_kit_top.png', '../Images/Cameras/DSLR/eos_200d_single_kit_front_screen_flipped.png', '', 1, 'DSLR Cameras'),
(4, 'EOS 6D Mark II Body', '1999', 5, '../Images/Cameras/DSLR/6dii_body_front.png', '../Images/Cameras/DSLR/6dii_body_back_screen_open.png', '../Images/Cameras/DSLR/6dii_body_back_screen_open_flipped.png', '', 1, 'DSLR Cameras'),
(5, 'EOS 800D Super Kit', '1499', 3, '../Images/Cameras/DSLR/eos_800d_super_kit_front.png', '../Images/Cameras/DSLR/eos_800d_super_kit_left_with_lens.png', '../Images/Cameras/DSLR/eos_800d_super_kit_top_with_lens.png', '', 1, 'DSLR Cameras'),
(6, 'EOS 5D Mark IV Body', '3999', 2, '../Images/Cameras/DSLR/eos_5d_mark_iv_body_front.png', '../Images/Cameras/DSLR/eos_5d_mark_iv_body_back.png', '../Images/Cameras/DSLR/eos_5d_mark_iv_body_slant.png', '', 1, 'DSLR Cameras'),
(7, 'EOS RP Body', '1949', 5, '../Images/Cameras/Mirrorless/eos_rp_the_front_body.png', '../Images/Cameras/Mirrorless/eos_rp_frontslantleft_body.png', '../Images/Cameras/Mirrorless/eos_rp_top_body.png', '', 2, 'Mirrorless Cameras'),
(8, 'EOS M50 Single Kit', '949', 5, '../Images/Cameras/Mirrorless/m50_the_front_body_efm15-45stm.png', '../Images/Cameras/Mirrorless/m50_the_front_slant_down_body_efm15-45stm.png', '../Images/Cameras/Mirrorless/m50_top_body_efm15-45stm.png', '', 2, 'Mirrorless Cameras'),
(9, 'EOS M6 Super Kit', '1149', 5, '../Images/Cameras/Mirrorless/eos_m6_super_kit_black_front_angle.png', '../Images/Cameras/Mirrorless/eos_m6_super_kit_black_back_slant_screen_flash.png', '../Images/Cameras/Mirrorless/eos_m6_super_kit_black_slant_with_flash.png', '', 2, 'Mirrorless Cameras'),
(10, 'EOS M5 Body', '1049', 5, '../Images/Cameras/Mirrorless/m5_front.png', '../Images/Cameras/Mirrorless/m5_back.png', '../Images/Cameras/Mirrorless/m5_top.png', '', 2, 'Mirrorless Cameras'),
(11, 'PowerShot G7x Mark III', '1210', 5, '../Images/Cameras/Compact/powershot_g7x_III_thefront.png', '../Images/Cameras/Compact/powershot_g7x_III_top.png', '../Images/Cameras/Compact/powershot_g7x_III-screenup.png', '', 3, 'Compact Cameras'),
(12, 'PowerShot SX620 HS', '299', 3, '../Images/Cameras/Compact/powershot-sx620hsr_front.png', '../Images/Cameras/Compact/powershot-sx620hsr_slant_flash.png', '../Images/Cameras/Compact/powershot-sx620hsr_top_1.png', '', 3, 'Compact Cameras'),
(13, 'IXUS 185', '149', 5, '../Images/Cameras/Compact/ixus_185_black_slant.png', '../Images/Cameras/Compact/ixus_185_black_top.png', '../Images/Cameras/Compact/ixus_185_black_back.png', '', 3, 'Compact Cameras'),
(14, 'EF-S 17-55mm f/2.8 IS USM', '1199', 5, '../Images/Lens/Portrait/EF-S-17-55mm-f28-IS-USM.png', '../Images/Lens/Portrait/EF-S-17-55mm-f28-IS-USM.png', '../Images/Lens/Portrait/EF-S-17-55mm-f28-IS-USM.png', '', 4, 'Portrait Lenses'),
(15, 'EF 24-70mm f/4L IS USM', '1205', 5, '../Images/Lens/Portrait/ef24-7040lisu_side_nocap_1.png', '../Images/Lens/Portrait/ef24-7040lisu_slant_nocap_1.png', '', '', 4, 'Portrait Lenses'),
(16, 'EF 85mm f/1.4L IS USM', '2299', 5, '../Images/Lens/Portrait/ef-85mm-f-1-4-l-is-usm-side.png', '../Images/Lens/Portrait/ef-85mm-f-1-4-l-is-usm-side-slant.png', '', '', 4, 'Portrait Lenses'),
(17, 'RF 50mm f/1.2L USM', '3299', 3, '../Images/Lens/Portrait/ef5012lu_slant_cap_2.png', '../Images/Lens/Portrait/ef5012lu_slant_nocap_2.png', '', '', 4, 'Portrait Lenses'),
(18, 'EF-S 35mm f/2.8 Macro IS STM', '499', 5, '../Images/Lens/Macro/efs3528isstm_slant.png', '../Images/Lens/Macro/efs3528isstm_standing_with_cap.png', '', '', 5, 'Macro Lenses'),
(19, 'TS-E 135mm f/4L Macro Tilt Shift', '3299', 3, '../Images/Lens/Macro/ts-e-135mm-f4l-slant-nocap.png', '../Images/Lens/Macro/ts-e-135mm-f4l-slant-nocap-rotated.png', '../Images/Lens/Macro/ts-e-135mm-f4l-slant-adjusted.png', '', 5, 'Macro Lenses'),
(20, 'RF 35mm f/1.8 Macro IS STM', '749', 3, '../Images/Lens/Macro/rf35mm_f1_8_macro_is_stm_side.png', '../Images/Lens/Macro/rf35mm_f1_8_macro_is_stm_slant.png', '', '', 5, 'Macro Lenses'),
(21, 'EF 100mm f/2.8L Macro IS USM', '1199', 4, '../Images/Lens/Macro/ef10028lis_side_nocap.png', '../Images/Lens/Macro/ef10028lis_slant_nocap.png', '', '', 5, 'Macro Lenses'),
(22, 'RF 50mm f/1.2L USM', '3299', 5, '../Images/Lens/Mirrorless/rf-50mm-f1-2-l-usm-side.png', '../Images/Lens/Mirrorless/rf-50mm-f1-2-l-usm-slant-with-cap.png', '', '', 6, 'Mirrorless Lenses'),
(23, 'RF 85mm f/1.2L USM', '4599', 5, '../Images/Lens/Mirrorless/l290_front_slant.png', '../Images/Lens/Mirrorless/l290_side_with_cap.png', '', '', 6, 'Mirrorless Lenses'),
(24, 'RF 24-105mm f/4L IS USM', '1749', 3, '../Images/Lens/Mirrorless/rf-24-105mm-f-4l-is-usm-side.png', '../Images/Lens/Mirrorless/rf-24-105mm-f-4l-is-usm-slant-with-cap.png', '../Images/Lens/Mirrorless/rf-24-105mm-f-4l-is-usm-standing-with-cap.png', '', 6, 'Mirrorless Lenses'),
(25, 'EF-M 22mm f/2 STM', '245', 5, '../Images/Lens/Mirrorless/efm2220st_side.png', '../Images/Lens/Mirrorless/efm2220st_slant_nocap_2.png', '', '', 6, 'Mirrorless Lenses'),
(26, 'EF 28-300mm f/3.5-5.6L IS USM', '3249', 5, '../Images/Lens/Telephoto/ef28-300is_side_nocap.png', '', '', '', 7, 'Telephoto Lenses'),
(27, 'EF 70-300mm f/4-5.6 IS II USM', '749', 3, '../Images/Lens/Telephoto/efm_70_300_side_with_cap.png', '', '', '', 7, 'Telephoto Lenses'),
(28, 'EF 70-200mm f/2.8L IS II USM', '3099', 3, '../Images/Lens/Telephoto/ef-70-200mm-f-2-8-l-is-iii-usm-lens-side.png', '', '', '', 7, 'Telephoto Lenses'),
(29, 'EF 600mm f/4L IS III USM', '18399', 3, '../Images/Lens/Telephoto/ef-600mm-f-4-l-is-iii-usm-lens-slant.png', '', '', '', 7, 'Telephoto Lenses'),
(30, 'EF 70-300mm f/4-5.6L IS USM', '1899', 3, '../Images/Lens/Telephoto/ef70-300lisu_side_nocap.png', '', '', '', 7, 'Telephoto Lenses'),
(31, 'EF 8-15mm f/4L Fisheye USM', '1899', 3, '../Images/Lens/WideAngle/ef8-15l_side_nocap_5.png', '', '', '', 8, 'Wide Angle Lenses'),
(32, 'EF 16-35mm f/2.8L III USM', '3199', 5, '../Images/Lens/WideAngle/l266_slant_withcap.png', '', '', '', 8, 'Wide Angle Lenses'),
(33, 'EF 11-24mm f/4L USM', '3999', 5, '../Images/Lens/WideAngle/ef11-24l_side_cap_1_1.png', '../Images/Lens/WideAngle/ef11-24l_slant_cap_1_1.png', '', '', 8, 'Wide Angle Lenses');

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE `Rating` (
  `UserID` int(10) NOT NULL,
  `ProductsID` int(10) NOT NULL,
  `Rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UserTable`
--

CREATE TABLE `UserTable` (
  `UserID` int(10) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UserTable`
--

INSERT INTO `UserTable` (`UserID`, `UserName`, `Password`, `FName`, `LName`, `Email`, `Address`, `PhoneNumber`) VALUES
(2, 'hello1234', '$2y$10$UWMO7sP0AavOXfq7NIOsCuFJEmxmLySg5wAMlrE21KVcVPblqN6GS', 'Duc', 'Nguyen', 'boysangirl_roigiet@yahoo.com', 'laksjfalkjs', '0423403970'),
(3, 'meomeo123', '$2y$10$D0WpyjIVYpWdMmwlQEKOiu6rr0p02TTLirSmboyPekSl0YJ1nO0Cy', 'Duc', 'Nguyen', 'dsfaxis@gmail.com', 'ducnguyentranphuc98@gmail.com', '0423403970'),
(4, '', '$2y$10$jECqS.hhJwfYZNVBR5VY7eyAspi8xxCG6xYG7bpdSNbLj/JJtd9sC', '', '', '', '', ''),
(5, '', '$2y$10$9JY48MboEVaCKJgtp8YXX.eoNDkcVQ.fUW3LvY23EaG2XnyezowmS', '', '', '', '', ''),
(6, '', '$2y$10$.xOHb1WhbA5/eVV3pt2NoOiZwBHQKPvcGWXC38MIQG.X1ozvkWW02', '', '', '', '', ''),
(7, '', '$2y$10$tuGmHuFXabeT9uZvEoEU2.4PeyyEGreoLbCnfHdoGOmv5kYr1YgyK', '', '', '', '', ''),
(8, 'ducducduc', '$2y$10$YI4ovAY.3TKTpa1Yqq4k6uBT78ghTsEyRcYx9G9wiVZVeBB4wJhA6', 'Uzumaki', 'Naruto', '123@yahoo.com', '2342314', '1234567'),
(9, '', '$2y$10$pX74S.wUkrNkHPBSK09C8OknMXTfWeHIIlKaB68DvH0ByZz0Qe8kW', '', '', '', '', ''),
(10, '', '$2y$10$0ou7jmNHC.a3etcyvRuK.uuCev1FclxCJ2HKtYmKjvunOtM7O0oq.', '', '', '', '', ''),
(11, '', '$2y$10$99cbFkfFKMEs9SIl8fi6ieay4MhbmThMjuxZoPnvN/.4k/K8/iUlK', '', '', '', '', ''),
(12, '', '$2y$10$MxWu1U5Sb.Ylbs3VNJGSM.DiISrCLrYUBZOb1FRV4E9cclhyht6fe', '', '', '', '', ''),
(13, '', '$2y$10$eopDHlVTpNKLRMItiG/8E.P6YuU7LIJtndzULUynDIIAPxw/kIrI6', '', '', '', '', ''),
(14, '', '$2y$10$SL5cca4DVWZlY6EDH2faVuG/aDjlHXX0m8s5OIYgELMkxmheypgWW', '', '', '', '', ''),
(15, '', '$2y$10$.syKo7HXqEwaM4MzY2iSR.iC7jAo.SsylskbX.c2lVBZGPBS6L0ce', '', '', '', '', ''),
(16, '', '$2y$10$rfThznVL5gxpfW1Nw27s5.GusuisM0WwXGPGSE4WugQUQb0LDvHly', '', '', '', '', ''),
(17, '', '$2y$10$.sC9l.Jshh8V75vjqLtPU.KleG3LJx.HUc7lwUqNWoi0fEIBfBcGu', '', '', '', '', ''),
(18, 'mm', '$2y$10$Fg1prHN5C30Ga7nRAslZ5./ub2YwXaB6PiHsiVVflux/3rJ6IbTEu', 'mm', 'mm', 'mm@gmail.com', '12312312', '1234567'),
(19, '', '$2y$10$.mbwmEJ.ivM1YclDxH8o6e6Dbq9fwI4CVraK4up0hN/XdJ6FAQCP2', '', '', '', '', ''),
(20, '', '$2y$10$QBayZMjpQ6A1ua9JrpkOYOXT2iBMQ5xxT2u49Rk./2Nx8cYccbuaq', '', '', '', '', ''),
(21, '', '$2y$10$PsaBwXUbNbXZ9k5XTPNTgeC9CM6M7zV3hou/PL07c4UNhzskpCeQW', '', '', '', '', ''),
(22, 'user', '$2y$10$2a.6yNWDNoKWCmHrl6w37.r1Gu114LkZ0Uk.pFYMZ0cOx3ACQfBIG', 'ukata', 'sasasa', 'user@gmail.com', 'springvale', '123456789'),
(23, '', '$2y$10$ffJVGRRDuJX5rSmNYGX/f.q7Z2qkn9MI4j3undIhWfuwvc/awfqR.', '', '', '', '', ''),
(24, '', '$2y$10$OnHphn.tD5kyCpifTSrYger8FJOu/b8WOO51HHXjtNdXWozbN1h/i', '', '', '', '', ''),
(25, 'meomeomeo', '$2y$10$.EOoUfP3R8U8JnCzbvb8WuqHSLsQKicH8XFLDj9SVtqBGUKsrr1qu', 'meo', 'meo', 'meomeomeomeomeo@gmail.com', 'wefaasdv', '123456'),
(26, '', '$2y$10$VEIK/a76UsYkf.rU0qhYG.xZrikvNMSTye3nP6NY3Yd36oCi/I4VK', '', '', '', '', ''),
(27, '', '$2y$10$7rYRLmh6mMa8uNfJDhHroe6Lejq8dGV19.YjXNwMxMbisSJ77XnWi', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Wishlist`
--

CREATE TABLE `Wishlist` (
  `UserID` int(10) NOT NULL,
  `ProductsID` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Wishlist`
--

INSERT INTO `Wishlist` (`UserID`, `ProductsID`, `Quantity`) VALUES
(25, 11, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Carts`
--
ALTER TABLE `Carts`
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ProductsID` (`ProductsID`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `OrderDetails`
--
ALTER TABLE `OrderDetails`
  ADD PRIMARY KEY (`OrderID`),
  ADD UNIQUE KEY `ProductsID` (`ProductsID`);

--
-- Indexes for table `OrdersTable`
--
ALTER TABLE `OrdersTable`
  ADD PRIMARY KEY (`OrdersID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `Picture`
--
ALTER TABLE `Picture`
  ADD PRIMARY KEY (`PicURL`),
  ADD KEY `ProductsID` (`ProductsID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ProductsID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `Rating`
--
ALTER TABLE `Rating`
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ProductsID` (`ProductsID`);

--
-- Indexes for table `UserTable`
--
ALTER TABLE `UserTable`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `Wishlist`
--
ALTER TABLE `Wishlist`
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ProductID` (`ProductsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OrdersTable`
--
ALTER TABLE `OrdersTable`
  MODIFY `OrdersID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `PaymentID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `ProductsID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `UserTable`
--
ALTER TABLE `UserTable`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Carts`
--
ALTER TABLE `Carts`
  ADD CONSTRAINT `Carts_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `UserTable` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Carts_ibfk_2` FOREIGN KEY (`ProductsID`) REFERENCES `Products` (`ProductsID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `OrderDetails`
--
ALTER TABLE `OrderDetails`
  ADD CONSTRAINT `OrderDetails_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `OrdersTable` (`OrdersID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `OrdersTable`
--
ALTER TABLE `OrdersTable`
  ADD CONSTRAINT `OrdersTable_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `UserTable` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Picture`
--
ALTER TABLE `Picture`
  ADD CONSTRAINT `Picture_ibfk_1` FOREIGN KEY (`ProductsID`) REFERENCES `Products` (`ProductsID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `Products_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `Category` (`CategoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Rating`
--
ALTER TABLE `Rating`
  ADD CONSTRAINT `Rating_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `UserTable` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Rating_ibfk_2` FOREIGN KEY (`ProductsID`) REFERENCES `Products` (`ProductsID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Wishlist`
--
ALTER TABLE `Wishlist`
  ADD CONSTRAINT `Wishlist_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `UserTable` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Wishlist_ibfk_2` FOREIGN KEY (`ProductsID`) REFERENCES `Products` (`ProductsID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
