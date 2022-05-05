-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2022 at 01:30 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotrotimvieclam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `User` text COLLATE utf8_unicode_ci NOT NULL,
  `Password` text COLLATE utf8_unicode_ci NOT NULL,
  `HotenAdmin` text COLLATE utf8_unicode_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Gioitinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  `SDT` text COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `Hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `Quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `User`, `Password`, `HotenAdmin`, `Ngaysinh`, `Gioitinh`, `Email`, `SDT`, `Diachi`, `Hinhanh`, `Quyen`) VALUES
(1, 'admin', 'admin', 'Nguyễn Văn Phần', '2000-06-10', 'Nam', 'nguyenvanphan0708@gmail.com', '0338313262', 'số 200 Trần Văn Ơn, Phú Hoà', 'phan.jpg', 1),
(2, 'bo', 'admin', 'Phạm Tuấn Anh', '2000-01-01', 'Nam', 'bo123@gmail.com', '09093509902', 'số 10 Trần Văn Ơn, Phú Hoà', 'phan.jpg', 1),
(5, 'a', 'a', 'abc', '2021-11-08', 'Nữ', 'a@gmail.com', '0338313262', 'abc', '437e0bc9499082cedb8188.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `camnan`
--

CREATE TABLE `camnan` (
  `idCamnan` int(11) NOT NULL,
  `Tencamnan` text COLLATE utf8_unicode_ci NOT NULL,
  `Tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `Hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `Gioithieu` text COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `camnan`
--

INSERT INTO `camnan` (`idCamnan`, `Tencamnan`, `Tieude`, `Hinhanh`, `Gioithieu`, `Link`) VALUES
(1, 'Cẩm Nang', 'Cẩm nang chống thất nghiệp cho sinh viên IT', 'cam-nan-chong-that-nghiep-cho-sinh-vien-it.jpg', 'Cẩm nang chống thất nghiệp cho sinh viên là một cẩm nang hay, nói về vấn đề thực tế hiện nay. Giúp sinh viên khắc phục lỗi và giải quyết vấn đề tìm việc', 'https://codelearn.io/sharing/tip-chong-that-nghiep-cho-sinh-vien-it'),
(2, 'Cẩm Nang', 'Cẩm nang chọn nghề', 'cam-nang-chon-nghe.jpg', 'chưa cập nhật', 'https://www.dtv-ebook.com/cam-nang-chon-nghe_12058.html'),
(3, 'Cẩm Nang', 'Cẩm nang tri thức', 'Cam-Nang-Tri-Thuc.png', 'Cuốn sách Cẩm nang tri thức của tôi là một cuốn sách tham khảo lý tưởng dành cho độc giả mọi lứa tuổi. Với hình minh họa trực quan và nội dung dễ hiểu sẽ thúc đẩy sự tìm tòi và học hỏi. Được thiết kế trên nền hai trang với những mục “Thông tin thú vị” và “Bạn có biết” sẽ cung cấp cho bạn đọc thông tin chi tiết chưa từng có về nhiều chủ đề khác nhau. Cuốn sách là nguồn tư liệu quý giá dành cho học sinh, gia đình và thầy cô giáo.', 'https://www.apo-tokyo.org/publications/wp-content/uploads/sites/5/KM-Tools-and-Texhniques-Manual.pdf'),
(4, 'Cẩm Nang', 'Cẩm nang việc làm', 'cam-nang-viec-lam.jpg', 'Đây là trang web có thể giúp bạn biết thêm những kiến thức cần có khi đi làm cũng như khi ứng tuyển vào các công ty.', 'https://www.danang43.vn/cam-nang-viec-lam'),
(5, 'Cẩm Nang', 'Blockchain là gì', 'it-la-gi-cong-nghe-thong-tin-la-gi.jpg', 'Giúp bạn hiểu biết thêm về công nghệ mới, công nghệ blockchain', 'https://wincolaw.com.vn/vi/cong-nghe-blockchain-la-gi-ung-dung-thuc-te-cua-blockchain-trong-cuoc-song.html'),
(6, 'Cẩm Nang', 'Quản lý dự án', 'quan-ly-du-an.jpg', 'Giúp bạn hướng tới vị trí leader hoặc manager trong tương lai', 'https://itguru.vn/blog/5-ky-nang-quan-trong-bat-nhat-de-quan-ly-du-an-phan-mem-thanh-cong/'),
(7, 'Cẩm Nang', 'Trở thành sếp tốt', 'tro-thanh-sep-tot.jpg', 'chưa cập nhật', 'https://nghenghiep.vieclam24h.vn/6-bi-quyet-giup-ban-tro-thanh-sep-tot');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `idCompany` int(11) NOT NULL,
  `Tencongty` text COLLATE utf8_unicode_ci NOT NULL,
  `Hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Link` text COLLATE utf8_unicode_ci NOT NULL,
  `Gioithieu` text COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `SDT` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`idCompany`, `Tencongty`, `Hinhanh`, `Email`, `Link`, `Gioithieu`, `Diachi`, `SDT`) VALUES
(1, 'Công ty TMA Solution', 'TMA.png', 'tmasolution.vn@gmail.com.vn', 'https://www.tma.vn/', 'TMA solution là công ty công nghệ lớn tại Việt Nam với hàng trăm chi nhánh ở khắp nơi', 'abc phương phú hoà, tp thủ dâu', '0338313262'),
(2, 'Công ty FPT', 'fpt.png', 'fpt.vn@gmail.com.vn', 'https://fptshop.com.vn/', 'FPT là công ty công nghệ lớn tại Việt Nam với hàng trăm chi nhánh ở khắp nơi', 'cmd phương phú hoà, tp thủ dâu', '0338313265'),
(3, 'Công ty FSI Solution', 'fsi.jpg', 'fsi.vn@gmail.com.vn', 'https://fsivietnam.com.vn/', 'FSI solution là công ty công nghệ lớn tại Việt Nam với hàng trăm chi nhánh ở khắp nơi', 'xyzc phương phú hoà, tp thủ dâu', '09093509902'),
(4, 'Công ty HTP Solution', 'HTP.jpg', 'htp.vn@gmail.com.vn', 'http://www.htpvn.com.vn/', 'HTP solution là công ty công nghệ lớn tại Việt Nam với hàng trăm chi nhánh ở khắp nơi', 'abc phương phú hoà, tp thủ dâu', '0338313262'),
(5, 'Công ty VNPT Solution', 'VNPT.jpg', 'vnpt.vn@gmail.com.vn', 'https://vnpt.com.vn/', 'VNPT solution là công ty công nghệ lớn tại Việt Nam với hàng trăm chi nhánh ở khắp nơi', 'abc phương phú hoà, tp thủ dâu', '0338313262'),
(6, 'Công ty VNTT Solution', 'vntt.jpg', 'phannv@gmail.com.vn', 'https://vntt.com.vn/', 'VNTT solution là công ty công nghệ lớn tại Việt Nam với hàng trăm chi nhánh ở khắp nơi', 'abc phương phú hoà, tp thủ dâu', '0338313262');

-- --------------------------------------------------------

--
-- Table structure for table `daduyet`
--

CREATE TABLE `daduyet` (
  `id` int(11) NOT NULL,
  `idJob` int(11) NOT NULL,
  `Thoigiandang` date NOT NULL,
  `Daduyet` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourite_job`
--

CREATE TABLE `favourite_job` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idJob` int(11) NOT NULL,
  `Trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `favourite_job`
--

INSERT INTO `favourite_job` (`id`, `idUser`, `idJob`, `Trangthai`) VALUES
(1, 1, 1, 0),
(2, 1, 4, 1),
(3, 2, 5, 1),
(4, 2, 7, 0),
(5, 1, 1, 0),
(6, 1, 2, 0),
(7, 1, 1, 0),
(8, 1, 7, 0),
(9, 1, 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `infomation`
--

CREATE TABLE `infomation` (
  `idInfo` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Gioitinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `Gioithieu` text COLLATE utf8_unicode_ci NOT NULL,
  `Chuyennganh` text COLLATE utf8_unicode_ci NOT NULL,
  `Trinhdo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `infomation`
--

INSERT INTO `infomation` (`idInfo`, `idUser`, `Hoten`, `SDT`, `Diachi`, `Ngaysinh`, `Gioitinh`, `Hinhanh`, `Gioithieu`, `Chuyennganh`, `Trinhdo`) VALUES
(1, 1, 'Nguyễn Văn Phần', '0338313262', 'abc đường bcd', '2000-06-10', 'Nam', 'phan.jpg', 'chưa cập nhật', 'Kỹ Thuật Phần Mềm', ''),
(2, 2, 'Phạm Tuấn Anh', '09093509902', 'abc đường xyz', '2000-01-10', 'Nam', 'phan.jpg', 'chưa cập nhật', 'Kỹ Thuật Phần Mềm', '');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `idJob` int(11) NOT NULL,
  `idCompany` int(11) NOT NULL,
  `Nganhnghe` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Luong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Hinhthuc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Capbac` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Kinhnghiem` text COLLATE utf8_unicode_ci NOT NULL,
  `Phucloi` text COLLATE utf8_unicode_ci NOT NULL,
  `Mota` text COLLATE utf8_unicode_ci NOT NULL,
  `Yeucau` text COLLATE utf8_unicode_ci NOT NULL,
  `Quyenloi` text COLLATE utf8_unicode_ci NOT NULL,
  `Lydo` text COLLATE utf8_unicode_ci NOT NULL,
  `Ngaycapnhat` date NOT NULL,
  `Ngayhethan` date NOT NULL,
  `daduyet` int(1) NOT NULL,
  `Luottheodoi` int(11) NOT NULL,
  `Soluonghoso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`idJob`, `idCompany`, `Nganhnghe`, `Luong`, `Hinhthuc`, `Capbac`, `Kinhnghiem`, `Phucloi`, `Mota`, `Yeucau`, `Quyenloi`, `Lydo`, `Ngaycapnhat`, `Ngayhethan`, `daduyet`, `Luottheodoi`, `Soluonghoso`) VALUES
(1, 1, 'Lập Trình Viên PHP', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên website php', 'biết PHP, Mysql, framework Laravel', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 0, 334, 25),
(2, 1, 'Lập Trình Viên C#', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên website C#', 'biết C#, SQL Server, framework MVC, ASP.NET', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-26', '2021-12-31', 1, 0, 0),
(3, 1, 'Lập Trình Viên Nodejs', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên NodeJs', 'biết NodeJS', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(4, 1, 'Lập Trình Viên Android', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên Android', 'biết React Native hoặc C#', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 6485, 155),
(5, 2, 'Lập Trình Viên C#', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên website C#', 'biết C#, SQL Server, framework MVC, ASP.NET', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 602, 120),
(6, 2, 'Lập Trình Viên Nodejs', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên NodeJs', 'biết NodeJS', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-11-24', 1, 0, 0),
(7, 2, 'Lập Trình Viên Android', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên Android', 'biết React Native hoặc C#', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 325, 120),
(8, 2, 'Lập Trình Viên PHP', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên PHP', 'biết PHP framework Laravel', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(9, 3, 'Lập Trình Viên C#', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên website C#', 'biết C#, SQL Server, framework MVC, ASP.NET', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(10, 3, 'Lập Trình Viên Nodejs', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên NodeJs', 'biết NodeJS', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(11, 3, 'Lập Trình Viên Android', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên Android', 'biết React Native hoặc C#', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 50, 10),
(12, 3, 'Lập Trình Viên PHP', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên PHP', 'biết PHP framework Laravel', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(13, 4, 'Lập Trình Viên C#', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên website C#', 'biết C#, SQL Server, framework MVC, ASP.NET', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(14, 4, 'Lập Trình Viên Nodejs', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên NodeJs', 'biết NodeJS', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(15, 4, 'Lập Trình Viên Android', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên Android', 'biết React Native hoặc C#', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 61, 20),
(16, 4, 'Lập Trình Viên PHP', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên PHP', 'biết PHP framework Laravel', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(17, 5, 'Lập Trình Viên C#', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên website C#', 'biết C#, SQL Server, framework MVC, ASP.NET', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(18, 5, 'Lập Trình Viên Nodejs', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên NodeJs', 'biết NodeJS', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(19, 5, 'Lập Trình Viên Android', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên Android', 'biết React Native hoặc C#', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 6800, 230),
(20, 5, 'Lập Trình Viên PHP', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên PHP', 'biết PHP framework Laravel', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(21, 6, 'Lập Trình Viên C#', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên website C#', 'biết C#, SQL Server, framework MVC, ASP.NET', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(22, 6, 'Lập Trình Viên Nodejs', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên NodeJs', 'biết NodeJS', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 512, 433),
(23, 6, 'Lập Trình Viên Android', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên Android', 'biết React Native hoặc C#', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 0, 0),
(24, 6, 'Lập Trình Viên PHP', '1000$', 'Nhân viên chính thức', 'Nhân viên', '1 năm kinh nghiệm', 'Du lịch, lương tháng 13, bhxh', 'làm lập trình viên PHP', 'biết PHP framework Laravel', 'du lịch với công ty 1 lần/năm', 'Là nới có tính cạnh tranh cao, giúp nâng cao tay nghề nhanh chóng. Các ưu đãi hấp dẫn', '2021-11-23', '2021-12-31', 1, 564, 10),
(25, 1, 'Tester', 'up to 2000$', 'Nhân viên chính thức', 'Nhân Viên', '1 năm kinh nghiệm', 'không', 'không', 'không', 'không', 'không', '2021-11-26', '2021-11-28', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

CREATE TABLE `quangcao` (
  `idQuangcao` int(11) NOT NULL,
  `Slogan` text COLLATE utf8_unicode_ci NOT NULL,
  `Hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `Link` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quangcao`
--

INSERT INTO `quangcao` (`idQuangcao`, `Slogan`, `Hinhanh`, `Link`) VALUES
(1, 'Gấp Đôi Canxi Để Làm Gì???', 'fami.jpg', 'http://www.vinasoycorp.vn/nhan-hieu/sua-dau-nanh-fami'),
(2, 'Đã quá Pepsi ơi', 'pepsi.jpg', 'https://www.pepsi.com/en-us/'),
(3, 'Mirinda ngon xoắn lưỡi', 'mirinda.jpg', 'https://www.mirinda.sk/'),
(4, 'Kẹo sữa mikita được làm từ sữa', 'keosua.jpg', 'https://www.bachhoaxanh.com/keo-cung-milkita'),
(5, 'Sữa chua nhà làm, ngon như nhà làm', 'suachua.jpg', 'vinamilk.com.vn'),
(6, 'Xúc Xích Ponnie 88% Thịt', 'xucxich.jpg', 'https://www.foody.vn/ho-chi-minh/xuc-xich-duc-via-he-duong-ba-trac');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(100) NOT NULL,
  `Taikhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  `Tuyendung` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `Taikhoan`, `Matkhau`, `Email`, `Tuyendung`) VALUES
(1, 'Phan', 'abc', 'nguyenvanphan0708@gmail.com', 1),
(2, 'Anh', '123', 'phamtuananh@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `camnan`
--
ALTER TABLE `camnan`
  ADD PRIMARY KEY (`idCamnan`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`idCompany`);

--
-- Indexes for table `daduyet`
--
ALTER TABLE `daduyet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite_job`
--
ALTER TABLE `favourite_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infomation`
--
ALTER TABLE `infomation`
  ADD PRIMARY KEY (`idInfo`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`idJob`),
  ADD UNIQUE KEY `idJob` (`idJob`);

--
-- Indexes for table `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`idQuangcao`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `camnan`
--
ALTER TABLE `camnan`
  MODIFY `idCamnan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `idCompany` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daduyet`
--
ALTER TABLE `daduyet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourite_job`
--
ALTER TABLE `favourite_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `infomation`
--
ALTER TABLE `infomation`
  MODIFY `idInfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `idJob` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `idQuangcao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
