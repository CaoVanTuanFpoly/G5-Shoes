-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2022 at 12:21 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vaiTro` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `vaiTro`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `maCTHD` int(11) NOT NULL,
  `maHD` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soLuong` int(11) NOT NULL,
  `giaTien` float NOT NULL,
  PRIMARY KEY (`maCTHD`),
  KEY `mahd_fr_idx` (`maHD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `maHD` int(11) NOT NULL AUTO_INCREMENT,
  `maKH` int(11) NOT NULL,
  `maTT` int(11) NOT NULL,
  `tongTien` float DEFAULT NULL,
  `diaChiNhan` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maHD`),
  KEY `mahd_fr_idx` (`maTT`),
  KEY `fr_hoadonkhachhang_idx` (`maKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `maKH` int(11) NOT NULL AUTO_INCREMENT,
  `hoTen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaySinh` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soDT` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` int(11) DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `avata` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`maKH`),
  KEY `fr_vaitro_idx` (`isAdmin`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `hoTen`, `ngaySinh`, `diaChi`, `mail`, `soDT`, `isAdmin`, `password`, `avata`) VALUES
(1, 'Nguyễn Nhật Khánh', '2022-06-29', '258/3 Dương Quảng Hàm, phường 5, Q.Gò Vấp', 'huydeptrai19062002@gmail.com', '0961022334', 2, '202cb962ac59075b964b07152d234b70', NULL),
(5, 'Nguyễn Quang Huy', '2022-06-29', '258/3 Dương Quảng Hàm, phường 5, Q.Gò Vấp', 'josephhuy19082002@gmail.com', '0961022334', 1, '202cb962ac59075b964b07152d234b70', 'huy.jpg'),
(6, 'Cao Văn Tuấn', '2002-05-2', '258/3 Dương Quảng Hàm, phường 5, Q.Gò Vấp', 'tuancvps19280@fpt.edu.vn', '0961067890', 1, '202cb962ac59075b964b07152d234b70', 'myavatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `maLoai` int(11) NOT NULL AUTO_INCREMENT,
  `tenLoai` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maLoai`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`maLoai`, `tenLoai`) VALUES
(1, 'Jordan'),
(2, 'Nike'),
(3, 'Puma'),
(4, 'Adidas');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `maSP` int(11) NOT NULL AUTO_INCREMENT,
  `tenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maLoai` int(11) NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giaTien` float NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `giaCu` float DEFAULT NULL,
  PRIMARY KEY (`maSP`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `maLoai`, `hinh`, `giaTien`, `mota`, `giaCu`) VALUES
(1, 'Air Jordan 1 Mid', 2, '1.1nike.png', 3519000, 'Thật dễ dàng với màu xanh lá cây. AJ1 mùa hè này được trang trí với sắc thái tươi mát của xanh và bạc hà, được thiết kế với hình dáng cổ điển. Da cao cấp và đệm Air nhẹ hoàn thiện gói sản phẩm với cảm giác thoải mái sẵn sàng trên đường phố kéo dài cả ngày.', NULL),
(2, 'Nike Air Zoom Pegasus 39', 2, '2.1nike.png', 3519000, 'Chạy là hoạt động hàng ngày của bạn, với mỗi bước sẽ đưa bạn đến gần hơn với mục tiêu cá nhân của mình. Hãy để Nike Air Zoom Pegasus 39 giúp bạn nâng lên tầm cao mới — cho dù bạn đang tập luyện hay chạy bộ — với thiết kế trực quan của nó. Trọng lượng nhẹ hơn Pegasus 38 và lý tưởng để đeo vào bất kỳ mùa nào, nó có cảm giác hỗ trợ để giúp giữ chân bạn, trong khi đệm dưới chân và các bộ phận Zoom Air gấp đôi (nhiều hơn 1 chiếc so với Peg 38) cho bạn thêm cảm giác thoải mái bước của bạn. Chú ngựa ô đáng tin cậy với đôi cánh của bạn đã trở lại. Đã đến giờ cất cánh.', NULL),
(3, 'Nike ZoomX Streakfly', 2, '3.1nike.png', 4699000, 'Giày đua nhẹ nhất của chúng tôi, Nike ZoomX Streakfly là tất cả về tốc độ bạn cần để tham gia cuộc thi trong cuộc đua một dặm, 5K hoặc 10K. Kiểu dáng thấp với các chi tiết bóng bẩy, cảm giác như nó biến mất trên bàn chân của bạn để giúp bạn kết nối tốt hơn với con đường trên con đường đạt được mục tiêu cá nhân của bạn tốt nhất.', NULL),
(4, 'Nike Go FlyEase', 2, '4.1nike.png', 3519000, 'Ngay khi bạn nghĩ rằng bạn đã xem tất cả, Nike đã đưa ra một cách hoàn toàn mới để mang vào giày của bạn một cách nhanh chóng và dễ dàng. Tuyệt vời cho những người bị hạn chế về khả năng di chuyển tìm kiếm sự dễ dàng mang vào hoặc bất kỳ ai muốn có một cách nhanh hơn để mang và cởi ra! Toàn bộ gót chân (bao gồm cả đế) của trục Nike Go FlyEase mở ra để bạn có thể sử dụng hoàn toàn rảnh tay.', NULL),
(5, 'Nike Revolution 5', 2, '5.1nike.png', 1759000, 'Khi con đường vẫy gọi, hãy trả lời cuộc gọi bằng một đôi giày nhẹ sẽ giúp bạn di chuyển hết dặm này qua dặm khác. Mút mềm đệm cho sải chân của bạn và gót chân được gia cố mang lại một chuyến đi êm ái và ổn định. Được làm từ chất liệu đan để hỗ trợ thoáng khí, trong khi thiết kế tối giản phù hợp với mọi nơi trong ngày của bạn.', NULL),
(6, 'Nike Dunk High Up', 2, '6.1nike.png', 3519000, 'Không bao giờ sai khi đứng cao. đế giữa, nó vẫn đúng với vòng lặp DNA trong khi cho phép bạn tạo sự tự tin trong mỗi bước đi. Được làm bằng gỗ cứng nhưng được mang ra đường phố, Nike Dunk High Up mang đến cho biểu tượng bóng b-ball thập niên 80 một sức nâng hoàn hảo. Nó vẫn đúng với vòng lặp DNA trong khi cho phép bạn củng cố sự tự tin trong mỗi bước đi.', NULL),
(7, 'Nike Free Metcon 4', 2, '7.1nike.png', 3519000, 'Nike Free Metcon 4 kết hợp tính linh hoạt với sự ổn định để giúp bạn đạt được hiệu quả cao nhất trong chương trình tập luyện của mình. Lưới \"chain-link\" được cập nhật sẽ làm mát và uốn dẻo khi bạn tăng tốc trong các bài tập về sự nhanh nhẹn, đồng thời hỗ trợ ở bàn chân giữa và gót chân giúp bạn có được những set nặng nhất trong phòng tập.', NULL),
(8, 'Nike Waffle Debut', 2, '8.1nike.png', 2189000, 'Retro được hiện đại hóa trong Nike Waffle Debut. Các lớp phủ bằng da mềm và đế giữa có hình nêm được cập nhật mang đến cho bạn sự thoải mái sang trọng và tăng thêm lực nâng trong khi vẫn duy trì sự rung cảm hoài cổ. Đế ngoài Waffle đã được thử nghiệm, thực sự và đáng tin cậy bổ sung lực kéo, độ bền và phong cách di sản cho bước đi của bạn, làm cho chúng trở thành sự bổ sung hoàn hảo lấy cảm hứng từ trường đại học cho hoạt động hàng ngày của bạn.', NULL),
(9, 'Nike Air Zoom Pegasus 38 Ekiden', 2, '9.1nike.png', 3063200, 'Là một con ngựa được chế tạo để giúp bạn tiếp thêm sức mạnh qua từng dặm đường đua, Nike Air Zoom Pegasus 38 Ekiden tiếp tục tạo ra một lò xo trong bước đi của bạn, sử dụng cùng một loại bọt phản hồi như người tiền nhiệm của nó. Lưới ở phía trên kết hợp sự thoải mái và độ bền mà bạn muốn với sự vừa vặn quay trở lại với Kiểu dáng cổ điển.', NULL),
(10, 'Nike SB Force 58', 2, '10.1nike.png', 2189000, 'Là cải tiến mới nhất và tuyệt vời nhất để tung ra đường phố, Nike SB Force 58 mang đến cho bạn độ bền của đế lót giày cùng với sự linh hoạt của một đôi giày được làm từ chất liệu lưu hóa, toàn bộ diện mạo đều được truyền tải DNA bóng rổ di sản.', NULL),
(11, 'Fusion Nitro Basketball Shoes', 3, '1.1puma.png', 2977000, 'Mẫu Hoops sáng tạo nhất cho đến nay kết hợp tất cả các tính năng công nghệ chính của PUMA vào một đôi giày đáng chú ý. Nitro Foam kết hợp vật liệu mềm, nhẹ với lớp đệm đặc biệt và khả năng phục hồi bất bại cho độ nảy lớn nhất của chúng tôi. Chân được khóa an toàn vào Fusion Nitro với dải nén thích ứng có trong phần trên được thiết kế linh hoạt. Đế ngoài bằng cao su chứa hợp chất cao su dính, mài mòn cao của PUMA để tạo ra lực kéo toàn bộ khi chân bạn chạm sàn.', NULL),
(12, 'Speedcat Shield Leather Driving Shoes', 3, '2.1puma.png', 1800000, 'Sẵn sàng đưa bạn đến với bộ sưu tập Speedcat của chúng tôi là Giày Speedcat Shield. Đôi giày cổ điển này được thiết kế với DNA thể thao đích thực, là sự bổ sung hoàn hảo cho tủ quần áo của bất kỳ tín đồ đua xe thể thao nào.', NULL),
(13, 'Speedcat OG + Sparco Driving Shoes', 3, '3.1puma.png', 2300000, 'Hãy sẵn sàng cho một số tốc độ thực sự trong Speedcat OG + Sparco Motorsport Shoes. Với thiết kế đẹp mắt và logo nổi bật, đôi giày này sẽ đảm bảo bạn luôn bắt kịp tốc độ trên đường đua theo phong cách đua xe thể thao PUMA đích thực.', NULL),
(14, 'Suede Classic XXI Men\'s Sneakers', 3, '4.1puma.png', 1600000, 'Suede ra mắt vào năm 1968 và đã thay đổi trò chơi kể từ đó. Nó đã được mặc bởi các biểu tượng của mọi thế hệ và nó vẫn cổ điển qua tất cả. Có thể nhận biết ngay lập tức và liên tục được đổi mới, di sản của Suede tiếp tục phát triển và được hợp pháp hóa bởi những cá nhân chân thực và biểu cảm nắm lấy chiếc giày mang tính biểu tượng. Hãy nằm ngoài lịch sử của Suede, mọi thời đại.', NULL),
(15, 'H.ST.20 Men\'s Training Shoes', 3, '5.1puma.png', 1955000, 'Chúng tôi đã truy cập vào kho lưu trữ cho cái này. Đánh vào những con phố vào đầu những năm 2000 như một hình bóng thấp bé với nguồn gốc từ thời kỳ tăng vọt về khoảng cách tối giản, H.ST.20 đang tiến thẳng đến tương lai. Được phát triển với đế ngoài bằng cao su năng động, hình ảnh bên hông táo bạo và đệm ổn định LQDCELL, cú đá lấy cảm hứng từ đường chạy này đã trở lại trong một vòng lịch sử khác.', NULL),
(16, 'PUMA x DUNKIN\' Triple Basketball Sneakers', 3, '6.1puma.png', 1900000, 'Bắt đầu ngày nghỉ của bạn ngay. Lấy cảm hứng từ món cà phê đá được yêu thích ở Mỹ, bộ sưu tập các loại đá này đã sẵn sàng để bổ sung thêm thứ gì đó cho buổi chạy Dunkin ’buổi sáng của bạn. Bản cộng tác PUMA x DUNKIN \'hoàn toàn mới có tính năng mới mẻ về những hình bóng yêu thích của chúng tôi. Đôi giày này biến đổi PUMA Triple với các chi tiết đồ họa, màu hồng và cam mang tính biểu tượng, và thương hiệu hợp tác táo bạo.', NULL),
(17, 'Roma Basic Sneakers', 3, '7.1puma.png', 1500000, 'Từ Kho lưu trữ PUMA năm 1968, Roma là một đôi giày tập nhẹ được trang bị lưỡi dày, đệm và hỗ trợ vòm chỉnh hình. Chiếc Roma trở lại cho thế hệ tiếp theo với phần trên bằng da tổng hợp mịn và giao diện sạch sẽ.', NULL),
(18, 'RS-X Galaxy Sneakers', 3, '8.1puma.png', 2800000, 'LaMelo Ball là hình ảnh thu nhỏ của thế giới khác và Bộ sưu tập Galaxy mới của anh ấy củng cố sự thật rằng anh ấy không đến từ đây. Sự bổ sung mới nhất cho bộ sưu tập mang lại năng lượng này cho các đường phố. RS-X Galaxy nắm bắt được sự rung cảm này bằng các vệt màu huỳnh quang làm nổi bật hình ảnh thiên hà. Thẩm mỹ thiên văn học xung đột với phong cách đồng thương hiệu và không gian thời đại táo bạo. Hãy chứng minh bạn Không phải Từ Đây và ngoài tòa án.', NULL),
(19, 'Speedcat Shield SD Driving Shoes', 3, '9.1puma.png', 2100000, 'Tăng tốc với Giày lái xe Speedcat Shield. Những đôi giày cổ điển này được truyền DNA của môn đua xe thể thao đích thực - chúng là đôi giày hoàn hảo cho tất cả những người hâm mộ môn đua xe thể thao ngoài kia.', NULL),
(20, 'Cell Fraction Mesh Men\'s Running Shoes', 3, '10.1puma.png', 1900000, 'Đẩy mạnh quá trình đào tạo của bạn hơn bao giờ hết với Cell Fraction Mesh. Những đôi giày chạy bộ cần có này được thiết kế để thúc đẩy bạn đạt được hiệu suất cao nhất, với miếng 10CELL lớn ở cả hai bên để mang lại sự thoải mái và ổn định cho bạn, trong khi miếng đệm CMEVA có chiều dài đầy đủ cung cấp sự hỗ trợ lâu dài và đế ngoài bằng cao su giúp tăng cường lực kéo. Cấu trúc vỏ sò táo bạo giúp tăng độ vừa vặn và giúp bạn dễ dàng thực hiện thao tác bật và tắt, trong khi lồng TPU nổi bật và thương hiệu PUMA Formstrip mới mẻ chứng minh rằng giày dép này có nhiều kiểu dáng như chất liệu của nó.', NULL),
(21, 'Jordan Delta 3 SP', 1, '1.1jordan.png', 4000000, 'Kết hợp giữa thủ công cao cấp với các tính năng công nghệ cao, những cú đá này là hiện thân của sự ngầu. Đường viền thoáng mát và đôi da lộn mềm mại với nội thất liền mạch cho vẻ ngoài cổ điển và sự thoải mái của Thương hiệu Jordan cao cấp.', NULL),
(22, 'Air Jordan XXXVI GC PF', 1, '2.1jordan.png', 4800000, 'Từ chu vi đến vòng bo, tự tin chiếm lấy tòa án. Đây là một trong những chiếc Air Jordans nhẹ nhất cho đến nay, với phần trên tối giản nhưng bền bỉ được gia cố bằng các chi tiết nhựa cứng. Đệm Zoom Air mang lại khả năng hồi phục năng lượng tốt nhất trong phân khúc và khả năng phản hồi ưu việt, cho dù bạn đang chơi trong nhà hay ngoài trời. Phiên bản này có cấu hình rộng hơn và màu sắc phiên bản đặc biệt mừng Tết Nguyên Đán.', NULL),
(23, 'Jordan 6 Rings', 1, '3.1jordan.png', 3910000, 'Kỷ niệm sự nghiệp huyền thoại của \"His Airness\" với Jordan 6 Rings. Kết hợp các tính năng chính của mỗi đôi giày được mang trong loạt giải vô địch, nó có các chi tiết cao cấp và đệm Zoom Air nhẹ, cấu hình thấp mang lại cảm giác nhạy bén dưới chân.', NULL),
(24, 'Jordan Delta 2 SE', 1, '4.1jordan.png', 3220000, 'Jordan Delta 2 mang đến sự mới mẻ, không sợ hãi với các tính năng bạn muốn: độ bền, sự thoải mái và thái độ cốt lõi là Jordan. Chúng tôi đã cập nhật các đường nét thiết kế và nâng cấp một số thành phần, trong khi vẫn giữ nguyên các nguyên tắc cơ bản mà bạn yêu thích từ chiếc Delta đầu tiên. Tận hưởng sự kết hợp tương tự giữa các vật liệu hỗ trợ, sáng tạo, với kết cấu mới và đường khâu dày để tạo ra một cái nhìn vừa mạo hiểm vừa mang tính biểu tượng.', NULL),
(25, 'Air Jordan 11 CMFT Low', 1, '5.1jordan.png', 2875000, 'Thưởng thức sự thoải mái trong khi gõ một biểu tượng. Trong đôi giày thể thao này, bạn sẽ có được những gì tốt nhất của cả hai thế giới: cảm giác sang trọng của một đôi giày đi bộ được bọc trong phong cách không thể bắt chước của AJ11. Các vòng ren dạng lưới giúp cho việc bật và tắt dễ dàng và phần dưới bàn chân xốp mềm có các miếng cao su ở đúng vị trí để tạo lực kéo.', NULL),
(26, 'Air Jordan XXXVI FS', 1, '6.1jordan.png', 4260000, 'Tiếp theo trong loạt phim AJ mang tính biểu tượng: một biểu hiện có thể đeo được của động lực và năng lượng đã châm ngòi cho một cuộc cách mạng bóng rổ. Thiết kế của nó tối giản nhưng bền, dẫn đến một trong những đôi giày chơi game Air Jordan nhẹ nhất cho đến nay. Được trang bị bộ phận Zoom Air Strobel có chiều dài đầy đủ xếp chồng lên bộ phận Zoom Air ở bàn chân trước, bạn sẽ nhận được năng lượng trở lại và khả năng phản hồi ưu việt khi bạn cần. Bước ra tòa với sự tự tin rằng bất cứ điều gì bạn làm - đó là công việc nhẹ nhàng.', NULL),
(27, 'Jordan Zoom Separate', 1, '7.1jordan.png', 2530000, 'Cú đánh lùi là nàng thơ cho Jordan Zoom Separate, một đôi giày đế thấp nhẹ được thiết kế để giúp bạn kiểm soát trên sân. Đệm chắc chắn hơn dọc theo bên ngoài của bàn chân và mềm hơn dọc theo bên trong, vì vậy bạn có thể tựa mạnh khi vận động và thay đổi hướng. Một bộ phận Zoom Air giúp bạn thoát khỏi hậu vệ và nhìn rõ rổ.', NULL),
(28, 'Jordan Point Lane', 1, '8.1jordan.png', 2369000, 'Jordan Point Lane kết hợp các yếu tố từ đôi giày thi đấu mà MJ đã mang trong 3 mùa giải đáng nhớ nhất của anh ấy. Được đặt tên theo địa chỉ Chicago của anh ấy, sự kết hợp này kết hợp các bit và mảnh từ AJ3, AJ6 và AJ11 để tạo ra một đôi giày lấy cảm hứng từ sự tuyệt vời và sự thoải mái của nó.', NULL),
(29, 'Jordan ADG 3', 1, '9.1jordan.png', 1955000, 'Lấy dấu hiệu từ Jordan 4, Jordan ADG 3 là sự kết hợp hoàn hảo giữa phong cách biểu tượng và hiệu suất chơi gôn. Với tính năng Zoom Air nhạy bén và khoen trên hình cánh khét tiếng, chúng sẽ đệm và hỗ trợ bàn chân của bạn từ sân đến bê tông và ở mọi nơi ở giữa.', NULL),
(30, 'Air Jordan XXXVI SE', 1, '10.1jordan.png', 2440000, 'Việc phá vỡ các rào cản và làm nên lịch sử với tư cách là cầu thủ gốc Nhật Bản đầu tiên được chọn ở vòng một chỉ là bước khởi đầu cho Rui Hachimura. Với các trận đấu lớn nhất thế giới ở quê nhà lần đầu tiên sau hơn 50 năm, Rui biết rằng anh ấy ở đây là có lý do. Lấy cảm hứng từ tất cả những nơi Rui có thể chơi bóng rổ, Air Jordan XXXVI SE “Black Samurai” tôn vinh mục đích và niềm tự hào đi kèm với việc tôn lên màu sắc của đất nước bạn.', NULL),
(31, 'GIÀY STAN SMITH PRIDE', 4, '1.1adidas.png', 2000000, 'Bộ sưu tập adidas X Kris Andrew Small Pride 2022 lấy cảm hứng từ các nhà hoạt động Stonewall tham gia cuộc nổi dậy Stonewall năm 1969. adidas và Kris Andrew Small cùng nhau sáng tạo nên một bộ sưu tập nêu bật tinh thần đoàn kết cũng như tôn vinh quá khứ & hiện tại của cộng đồng LGBTQIA+, trân trọng tính cá thể cũng như tập thể – đưa ra một thông điệp graphic đa dạng & đầy màu sắc trong bộ sưu tập tràn đầy lạc quan & xóa nhòa khoảng cách này. Dự án hợp tác này cũng gắn liền với hai đối tác Global Purpose chủ chốt của adidas là Athlete Ally & Stonewall UK. Tình yêu thương. Sự đa dạng. Và niềm vui. Chúng tôi trân trọng tất cả những điều đó, và đôi giày adidas Stan Smith này hòa chung tinh thần ấy một cách cực kỳ táo bạo. Họa tiết graphic phủ khắp thân giày, cất lên một thông điệp mạnh mẽ với sắc màu rực rỡ.', NULL),
(32, 'GIÀY FORUM LOW CL', 4, '2.1adidas.png', 2500000, 'Khi dạo bước qua các gian hàng trong khu chợ flea market tấp nập, bạn không bao giờ biết được mình sẽ tìm thấy những món đồ thú vị nào. Và dù cho bạn đã biết chắc rằng giày adidas Forum là item mới toanh và đậm chất bóng rổ, nhưng phiên bản này cũng ngập tràn hoài niệm và gợi nhớ những trải nghiệm săn đồ thrift. Đôi giày này có các điểm nhấn màu sắc vintage, chất liệu da mịn và đế giày trắng ngà.', NULL),
(33, 'GIÀY ULTRABOOST 22', 4, '3.1adidas.png', 5200000, 'Đôi giày chạy bộ Ultraboost này đem lại sự thoải mái và đàn hồi. Đế giữa BOOST mang đến nguồn năng lượng bất tận, cùng hệ thống Linear Energy Push và đế ngoài bằng cao su Continental™ Rubber. Thân giày làm từ loại sợi hiệu năng cao có chứa ít nhất 50% chất liệu Parley Ocean Plastic — rác thải nhựa tái chế thu gom từ các vùng đảo xa, bãi biển, khu dân cư ven biển và đường bờ biển, nhằm ngăn chặn ô nhiễm đại dương.', NULL),
(34, 'GIÀY STAN SMITH', 4, '4.1adidas.png', 2500000, 'Vẻ đẹp kinh điển. Phong cách vốn dĩ. Đa năng hàng ngày. Suốt hơn 50 năm qua và chưa dừng ở đó, giày adidas Stan Smith luôn giữ vững vị trí là một biểu tượng. Đôi giày này là phiên bản cải biên mới mẻ, là một phần cam kết của adidas hướng tới chỉ sử dụng polyester tái chế bắt đầu từ năm 2024. Với thân giày vegan và đế ngoài làm từ cao su phế liệu, đôi giày này vẫn mang phong cách đầy tính biểu tượng, đồng thời thân thiện với môi trường. Giày sử dụng chất liệu vegan thay cho thành phần hoặc chất liệu có nguồn gốc từ động vật. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', NULL),
(35, 'GIÀY SUPERSTAR', 4, '5.1adidas.png', 1700000, 'Đây từng là lựa chọn giày bóng rổ cổ thấp hàng đầu trong quá khứ. Ngày nay, đôi giày đã trở thành biểu tượng thời trang đường phố. Mẫu giày thiếu niên này ra mắt nhân dịp kỷ niệm 50 năm dòng adidas Superstar. Phiên bản kỷ niệm này tôn vinh thiết kế đặc trưng của adidas từ mũi vỏ sò kinh điển đến 3 Sọc viền răng cưa. Với kiểu dáng đế cupsole bằng cao su thoải mái, giày luôn mang phong cách mới mẻ và thú vị với mọi phiên bản màu sắc.', NULL),
(36, 'GIÀY HARDEN STEPBACK 3', 4, '6.1adidas.png', 2300000, 'Không có thứ vũ khí nào đáng sợ hơn cú step-back trong những trận đấu bóng rổ hiện đại, và không một ai làm được điều này tốt hơn James Harden. Đôi giày signature adidas này tôn vinh lối chơi sáng tạo của anh trên sân bóng rổ. Đế giữa Bounce đàn hồi mang đến cảm giác thoải mái trên từng sải bước, bất kể bạn đang rèn luyện kỹ năng xử lý bóng hay ném bóng từ khoảng cách xa. Lỗ xỏ dây giày bố trí hợp lý kết hợp cùng dây buộc và gót giày đúc cho cảm giác cố định.', NULL),
(37, 'GIÀY ULTRABOOST 22', 4, '7.1adidas.png', 5200000, 'Đây có lẽ là đôi giày chạy bộ thoải mái nhất đến từ adidas. Giày Ultraboost 22 mang đến cho bạn sải bước đàn hồi, bất kể cự ly hay cường độ tập luyện. Cảm giác thoải mái đến từ thân giày adidas PRIMEKNIT ôm chân và khả năng hoàn trả năng lượng tuyệt vời của đế BOOST. Thêm vào đó là hệ thống Linear Energy Push tăng cường ổn định và đàn hồi hơn bao giờ hết cho phần mũi chân và giữa bàn chân.', NULL),
(38, 'GIÀY FORUM LOW CL', 4, '8.1adidas.png', 2500000, 'Khi dạo bước qua các gian hàng trong khu chợ flea market tấp nập, bạn không bao giờ biết được mình sẽ tìm thấy những món đồ thú vị nào. Và dù cho bạn đã biết chắc rằng giày adidas Forum là item mới toanh và đậm chất bóng rổ, nhưng phiên bản này cũng ngập tràn hoài niệm và gợi nhớ những trải nghiệm săn đồ thrift. Đôi giày này có các điểm nhấn màu sắc vintage, chất liệu da mịn và đế giày trắng ngà.', NULL),
(39, 'GIÀY ADISTAR CS', 4, '9.1adidas.png', 4200000, 'Lấy cảm hứng từ chuyển động vĩnh cửu, giày ADISTAR CS hỗ trợ các runner chinh phục kỷ lục cá nhân cự ly dài và hơn thế nữa. Nhằm mang lại cảm giác thoải mái và nâng đỡ, đôi giày này có đường cong dài ôm dọc mũi giày, tạo chuyển động nhịp nhàng, mượt mà và đều đặn giúp bạn sải bước tiếp theo. Thiết kế chú trọng khả năng bảo vệ gót chân và nâng đỡ thân giày.', NULL),
(40, 'GIÀY NMD_R1', 4, '10.1adidas.png', 3600000, 'Phong cách giày chạy bộ dành cho hành trình khám phá mỗi ngày. Phiên bản cải tiến này của đôi giày adidas NMD_R1 là bước tiến đột phá dựa trên đôi giày nguyên bản phong cách thập niên 80, với các miếng bịt đế giữa có tô viền và đầu bọc dây giày sặc sỡ mang đến nét mới mẻ cho thiết kế. Thân giày bằng vải dệt kim co giãn ôm chân cho cảm giác thoải mái khi di chuyển. Quãng đường dài di chuyển mỗi ngày hay lề đường trơn trượt đều là chuyện nhỏ, nhờ có đệm BOOST và đế ngoài bằng cao su siêu bám. Thân giày làm từ loại sợi hiệu năng cao có chứa tối thiểu 50% chất liệu Parley Ocean Plastic — rác thải nhựa tái chế thu gom từ các vùng đảo xa, bãi biển, khu dân cư ven biển và đường bờ biển, nhằm ngăn chặn ô nhiễm đại dương. 50% thành phần còn lại của sợi dệt là polyester tái chế', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `idSize` int(11) NOT NULL AUTO_INCREMENT,
  `size` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  PRIMARY KEY (`idSize`),
  KEY `size_idx` (`maSP`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`idSize`, `size`, `soLuong`, `maSP`) VALUES
(1, 37, 10, 1),
(2, 38, 5, 1),
(3, 39, 5, 1),
(4, 40, 15, 1),
(5, 41, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

DROP TABLE IF EXISTS `trangthai`;
CREATE TABLE IF NOT EXISTS `trangthai` (
  `maTT` int(11) NOT NULL,
  `tenTT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  KEY `fr_trangthai_idx` (`maTT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `mahd_fr` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fr_hoadonkhachhang` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `fr_vaitro` FOREIGN KEY (`isAdmin`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `loaisp_fr` FOREIGN KEY (`maLoai`) REFERENCES `sanpham` (`maSP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `size`
--
ALTER TABLE `size`
  ADD CONSTRAINT `size` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trangthai`
--
ALTER TABLE `trangthai`
  ADD CONSTRAINT `fr_trangthai` FOREIGN KEY (`maTT`) REFERENCES `hoadon` (`maTT`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
