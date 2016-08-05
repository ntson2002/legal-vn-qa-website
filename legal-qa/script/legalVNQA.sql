-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 05, 2016 at 06:03 PM
-- Server version: 5.5.42
-- PHP Version: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legalVNQA`
--

-- --------------------------------------------------------

--
-- Table structure for table `Pair`
--

CREATE TABLE `Pair` (
  `id` int(11) NOT NULL,
  `question` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `source_title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `add_by` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `comment` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Pair`
--

INSERT INTO `Pair` (`id`, `question`, `answer`, `source_title`, `add_by`, `score`, `date_added`, `comment`, `status`, `other`) VALUES
(8, 'Các bên được xã cấp đất ở có diện tích như nhau, nhưng khi được cấp giấy chứng nhận quyền sử dụng đất lại có sai lệch về diện tích của hai thửa đất dẫn đến tranh chấp về diện tích đất sai lệch đó. Việc giải quyết tranh chấp này thuộc Ủy ban nhân dân hay Tòa án?', 'Điều 17. Quy định diện tích tối thiểu được tách thửa và việc cấp Giấy chứng nhận cho thửa đất có diện tích nhỏ hơn diện tích tối thiểu đó\r\n\r\n1. Ủy ban nhân dân cấp tỉnh quy định diện tích tối thiểu được phép tách thửa đối với từng loại đất cho phù hợp với điều kiện cụ thể của địa phương.\r\n\r\n2. Thửa đất đang sử dụng có diện tích nhỏ hơn diện tích tối thiểu theo quy định của Ủy ban nhân dân cấp tỉnh nhưng đủ điều kiện cấp Giấy chứng nhận thì người đang sử dụng đất được cấp Giấy chứng nhận ; việc xây dựng nhà ở , công trình trên thửa đất đó phải theo quy định của Ủy ban nhân dân cấp tỉnh.\r\n\r\n3. Không cấp Giấy chứng nhận đối với trường hợp tự tách thửa đất thành hai hoặc nhiều thửa đất trong đó có một hoặc nhiều thửa đất có diện tích nhỏ hơn diện tích đất tối thiểu theo quy định của Ủy ban nhân dân cấp tỉnh.\r\n\r\n4. Cơ quan công chứng , Ủy ban nhân dân cấp xã không được làm thủ tục công chứng , chứng thực chuyển quyền sử dụng đất đối với trường hợp tách thửa đất thành hai hoặc nhiều thửa đất trong đó có một hoặc nhiều thửa đất có diện tích nhỏ hơn diện tích đất tối thiểu theo quy định của Ủy ban nhân dân cấp tỉnh . ', 'NGHỊ ĐỊNH CỦA CHÍNH PHỦ SỐ 84/2007/NĐ-CP NGÀY 25 THÁNG 5 NĂM 2007 QUY ĐỊNH BỔ SUNG VỀ VIỆC CẤP GIẤY CHỨNG NHẬN QUYỀN SỬ DỤNG ĐẤT, THU HỒI ĐẤT, THỰC HIỆN QUYỀN SỬ DỤNG ĐẤT, TRÌNH TỰ, THỦ TỤC BỒI THƯỜNG, HỖ TRỢ, TÁI ĐỊNH CƯ KHI NHÀ NƯỚC THU HỒI ĐẤT VÀ GIẢI QUYẾT KHIẾU NẠI VỀ ĐẤT ĐAI', 'admin', 5, '2016-08-05 04:32:40', 'No comment', 'REVISED', ''),
(9, 'a', 'c', 'b', 'admin', 5, '2016-08-05 05:15:22', 'No comment', 'REVISED', ''),
(10, 'f', 'e ', 'c', 'admin', 5, '2016-08-05 05:17:27', 'No comment', 'REVISED', '');

-- --------------------------------------------------------

--
-- Table structure for table `Pair_FeedBack`
--

CREATE TABLE `Pair_FeedBack` (
  `id` int(11) NOT NULL,
  `question` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `source_title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `add_by` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `comment` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Pair_FeedBack`
--

INSERT INTO `Pair_FeedBack` (`id`, `question`, `answer`, `source_title`, `add_by`, `score`, `date_added`, `comment`, `status`, `other`) VALUES
(0, ' Các bên được xã cấp đất ở có diện tích như nhau, nhưng khi được cấp giấy chứng nhận quyền sử dụng đất lại có sai lệch về diện tích của hai thửa đất dẫn đến tranh chấp về diện tích đất sai lệch đó. Việc giải quyết tranh chấp này thuộc Ủy ban nhân dân hay Tòa án?', 'Điều 17. Quy định diện tích tối thiểu được tách thửa và việc cấp Giấy chứng nhận cho thửa đất có diện tích nhỏ hơn diện tích tối thiểu đó \r\n1. Ủy ban nhân dân cấp tỉnh quy định diện tích tối thiểu được phép tách thửa đối với từng loại đất cho phù hợp với điều kiện cụ thể của địa phương. \r\n2. Thửa đất đang sử dụng có diện tích nhỏ hơn diện tích tối thiểu theo quy định của Ủy ban nhân dân cấp tỉnh nhưng đủ điều kiện cấp Giấy chứng nhận thì người đang sử dụng đất được cấp Giấy chứng nhận ; việc xây dựng nhà ở , công trình trên thửa đất đó phải theo quy định của Ủy ban nhân dân cấp tỉnh. \r\n3. Không cấp Giấy chứng nhận đối với trường hợp tự tách thửa đất thành hai hoặc nhiều thửa đất trong đó có một hoặc nhiều thửa đất có diện tích nhỏ hơn diện tích đất tối thiểu theo quy định của Ủy ban nhân dân cấp tỉnh. \r\n4. Cơ quan công chứng , Ủy ban nhân dân cấp xã không được làm thủ tục công chứng , chứng thực chuyển quyền sử dụng đất đối với trường hợp tách thửa đất thành hai hoặc nhiều thửa đất trong đó có một hoặc nhiều thửa đất có diện tích nhỏ hơn diện tích đất tối thiểu theo quy định của Ủy ban nhân dân cấp tỉnh . \r\n', 'NGHỊ ĐỊNH CỦA CHÍNH PHỦ SỐ 84/2007/NĐ-CP NGÀY 25 THÁNG 5 NĂM 2007 QUY ĐỊNH BỔ SUNG VỀ VIỆC CẤP GIẤY CHỨNG NHẬN QUYỀN SỬ DỤNG ĐẤT, THU HỒI ĐẤT, THỰC HIỆN QUYỀN SỬ DỤNG ĐẤT, TRÌNH TỰ, THỦ TỤC BỒI THƯỜNG, HỖ TRỢ, TÁI ĐỊNH CƯ KHI NHÀ NƯỚC THU HỒI ĐẤT VÀ GIẢI QUYẾT KHIẾU NẠI VỀ ĐẤT ĐAI', 'user', 2, '2016-08-05 05:52:32', 'No comment', 'REVISED', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Pair`
--
ALTER TABLE `Pair`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Pair`
--
ALTER TABLE `Pair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
