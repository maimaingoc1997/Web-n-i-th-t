-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 22, 2021 lúc 05:20 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fashionshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(50) NOT NULL,
  `tieu_de` varchar(500) NOT NULL,
  `noi_dung` varchar(10000) NOT NULL,
  `anh` varchar(500) NOT NULL,
  `the_loai` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id_blog`, `tieu_de`, `noi_dung`, `anh`, `the_loai`, `username`, `ngay`) VALUES
(1, 'Top 5 phong cách Thời Trang Dạo Phố', 'Là phụ nữ, đẹp thôi là chưa đủ. Bạn cần phải sở hữu thêm những phong cách thời trang dạo phố thời thượng – tương xứng với tuổi tác. Và ngay cả khi ra ngoài đường, các cô gái cũng phải luôn xinh đẹp và sành điệu. Nếu bạn vẫn chưa trang bị được nhiều cho bản thân các bí quyết mix đồ dạo phố xinh xắn thì hãy cùng chúng tôi tìm hiểu nhé!', 'blog-01.jpg', 'Thời trang mùa đông', 'Huyền', '2021-11-24'),
(20, '5 Xu Hướng Thời Trang Đông Xuân Nên Thử Ngay', 'Cùng Harper’s Bazaar điểm lại 5 xu hướng thời trang thống lĩnh sàn diễn Thu Đông 2021, để cảm nhận rõ hơi nhịp thở đa dạng của thời trang mùa này.', 'blog-06.jpg', 'thời trang đường phố', 'huyen', '2021-11-13'),
(21, 'Món quà ý nghĩa dành tặng bạn trai', 'Sinh nhật bạn trai tặng quà gì cho ý nghĩa và bất ngờ? Đây chắc chắn là câu hỏi mà nhiều chị em phụ nữ canh cánh trong lòng khi gần đến ngày sinh nhật của người yêu. Tham khảo cẩm nang chọn quà sinh nhật cho bạn trai dưới đây để tìm ra được cho mình một món quà phù hợp nhé! \r\n', 'blog-02.jpg', 'Quà tặng', 'Huyen', '2021-11-19'),
(22, 'Item hót nhất mùa đông 2021', 'Mùa đông đến là thời điểm lý tưởng để những bạn nữ gầy có thể mix những bộ đồ để trông đầy đặn và xinh xắn hơn, dưới đây là 8 cách phối đồ mùa đông cho nữ gầy cần phải biết.', 'gallery-02.jpg', 'Thời trang thu đông', 'Huyền', '2021-11-19'),
(24, 'Những món đồ \"chân ái\" vào mùa đông của các chị em yêu thích vẻ ngoài sành điệu', 'Bài viết này sẽ gợi ý cho các bạn nữ những món đồ cần thiết cho mùa đông năm nay.', 'blazer3-0900.png', 'Thời trang mùa đông', 'Huyền', '2021-11-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `thanh_vien` varchar(100) NOT NULL COMMENT 'thành viên thanh toán',
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `thanh_vien`, `money`, `note`, `vnp_response_code`, `code_vnpay`, `code_bank`, `time`) VALUES
(1, '742874161', 'abc', 100000, 'chinh chuyển khoản', '00', '13401455', 'NCB', '2020-10-10 01:00:00'),
(2, '608324672', 'abc', 1000000, 'test chuyển khoản', '00', '13401811', 'NCB', '2020-10-11 21:00:00'),
(3, '1134065293', 'CT2', 150000, 'học phí', '00', '13407163', 'NCB', '2020-10-22 23:00:00'),
(4, '596509313', 'CT2', 5000000, 'học phí', '00', '13407176', 'NCB', '2020-10-23 00:00:00'),
(5, '70267166', 'CT2', 5000000, 'học phí', '00', '13407178', 'NCB', '2020-10-23 00:00:00'),
(6, '1672349048', 'CT1', 150000, 'học phí', '00', '13407729', 'NCB', '2020-10-23 21:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `capquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `admin_name`, `capquyen`) VALUES
(2, 'huyen@gmail.com', 'huyen', 'Huyenn Pham', 1),
(4, 'long@gmail.com', 'long', 'Hoàng Long', 1),
(5, 'haianh@gmail.com', 'anh', 'Hải Anh', 1),
(6, 'abcd@gmail.com', '123', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ctoder`
--

CREATE TABLE `tbl_ctoder` (
  `id_CT` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` varchar(3) NOT NULL,
  `gia_sanpham` varchar(20) NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_ctoder`
--

INSERT INTO `tbl_ctoder` (`id_CT`, `id_sanpham`, `soluong`, `gia_sanpham`, `id_order`) VALUES
(14, 4, '2', '340000', 0),
(15, 9, '1', '180000', 0),
(16, 14, '1', '8100000', 0),
(17, 13, '2', ' 320000', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Tất cả sản phẩm'),
(2, 'Thời trang nữ'),
(3, 'Thời trang nam'),
(4, 'Balo/Túi'),
(5, 'Giày'),
(7, 'Đồng hồ'),
(8, 'Mũ/Nón');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(25) NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `name`, `phone`, `address`, `note`, `email`, `password`, `giaohang`) VALUES
(5, 'Huyền Phạm', '0337521915', 'Đông Anh, Hà Nội', '', 'a@gmail.com', '123', 0),
(6, 'hải anh', '', '', '', 'anh@gmail.com', '123', 0),
(7, 'lan', '', '', '', 'lan@gmail.com', '123', 0),
(8, 'mai', '', '', '', 'mai@gmail.com', '123', 0),
(11, 'miu miu', '', '', '', 'miu@gmail.com', 'c3d113f1ad562ac247f7e2a85', 0),
(12, 'linh', '', '', '', 'linh@gmail.com', '892da3d819056410c05bca774', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_lienhe`, `email`, `noi_dung`) VALUES
(1, 'abc@gmail.com', 'fdsfdsf'),
(2, 'abc@gmail.com', 'gfdgsdsadsadsad'),
(3, 'pthihuyen72@gmail.com', 'gjhfhjfhj');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id_order` int(11) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `TenKH` varchar(100) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `GhiChu` text NOT NULL,
  `HinhThucTT` varchar(100) DEFAULT NULL,
  `ngay` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_orders`
--

INSERT INTO `tbl_orders` (`id_order`, `khachhang_id`, `TenKH`, `DiaChi`, `SDT`, `GhiChu`, `HinhThucTT`, `ngay`) VALUES
(13, 5, 'Huyen', 'Hà Nội', '0337521915', 'Chỉ nhận hàng giờ hành chính.', 'Thanh toán khi nhận hàng', '2021-12-22 09:49:02'),
(14, 5, 'Huyen', 'Hà Nội', '0337521915', 'abcd', 'Thanh toán khi nhận hàng', '2021-12-22 09:49:02'),
(15, 5, 'Huyen', 'Hà Nội', '0337521915', 'Chỉ nhận hàng giờ hành chính.', 'Thanh toán khi nhận hàng', '2021-12-22 09:52:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `ten_sanpham` varchar(255) NOT NULL,
  `mota_sanpham` text NOT NULL,
  `gia_sanpham` text NOT NULL,
  `anh_sanpham` text NOT NULL,
  `tonkho_sanpham` int(11) NOT NULL,
  `anh_sanpham1` text DEFAULT NULL,
  `anh_sanpham2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `id_danhmuc`, `ten_sanpham`, `mota_sanpham`, `gia_sanpham`, `anh_sanpham`, `tonkho_sanpham`, `anh_sanpham1`, `anh_sanpham2`) VALUES
(1, 2, 'Áo phao Hàn Quốc trắng', 'Siêu phẩm phao béo mũ lông cực hit hottt ra hàng sẵn sll\r\nChất phao dầy cộp 3 lớp 2 lớp gió thô, 1 lớp bông trần dầy bên tronggg\r\nMũ lông dầy tháo rời được cầm nặng tay\r\nPhom < 60kg\r\nCHUYÊN GOM SALE GIÁ TỐT????\r\n--SALE đồng giá ngập răng tận 60% mấy em áo phao này luôn????????\r\nĐÚNG LÀ MUA TRƯỚC MÙA LÚc NÀO CŨNG CÓ HÀNG NGON BỔ RẺ????\r\n\r\n????????????????Ib e gửi ảnh thật đầy đủ cho các khách xem ạ\r\n\r\n????đủ sz XS S M L Xl 2xl  (Ib để được tư vấn sz) \r\n\r\n????????Oder 4-7ng', '380000', 'aophao1.jpg', 230, 'aophao12.jpg', 'aophao11.jpg'),
(5, 8, 'Mũ lưỡi trai đen', '              ✅ Nón kết chất vải kaki xịn, hàng mềm mại đội cực kì êm đầu✅free size✅ Với thiết kế vành đơn giản đang là xu hướng hot trend năm nay,nam nữ đội đều rất ok✅ Với bảng màu cực kì đa dạng khách có thể tha hồ lựa chọn những màu thích hợp vs bản thân mình nhất     \r\n         \r\n        ', ' 150000', '4b7af976fcb39c8470cfd5868ae1217e.jpg', 100, 'mu.jpg', '6bb70dd067b6cc5a2101b4950dc147e9.jpg'),
(6, 2, 'Áo dạ tweed nữ kiểu cardigan ', '              Đặc biệt lưu ý đối với áo dạ tweed và áo cardigan:\r\n* Nên giặt tay, không giặt máy hoặc giặt bằng dây kéo hoặc vật cứng  để đảm bảo chất lượng áo dạ tweed\r\n* Quần áo denim và quần áo sẫm màu bị phai màu sau khi giặt là hiện tượng tự nhiên. Để tránh phai màu, vui lòng giặt riêng, không để chung với áo dạ tweed\r\n* Lông cừu trên quần áo có lông cừu bị rụng; Các vấn đề về vón như áo len và áo khoác là bình thường và bạn có thể xử lý chúng bằng máy cắt lông, để giúp áo cardigan đẹp hơn \r\n         \r\n        ', '  380000', 'd97f8e5eb0d9f1173bf1b67c6a0f3de2.jpg', 120, 'f819b3e01a6f18d728ae5db45d0eba63.jpg', 'd97f8e5eb0d9f1173bf1b67c6a0f3de2.jpg'),
(7, 5, 'Converse 1970s', '  Cam kết chính hãng 100%.\r\n Bảo hành chế độ hãng + thêm 2 tháng từ shop\r\nTẶNG 1 đôi dây giày 50k\r\n Đầy đủ phụ kiện đi kèm sản phẩm, replace box\r\n         \r\n        ', '1490000', 'converse.jpg', 300, 'converse.jpg', 'converse.jpg'),
(8, 2, 'ÁO LEN CARDIGAN VẶN THỪNG', '       Mã hot hit nhất VBB lun ý ah. Bán sướngggg \r\nHàng cực đẹp, đủ màu. Hàng QC nên khách iu báo sl e sớm nhe. Cứ đẹp là quất ngay đừng lăn tăn k là hết lại phải đợi lâu \r\n- Kích cỡ: Freesize\r\n- Số đo: Áo dài 66cm, ngang áo 69cm, tay áo ( đo từ vai) 69cm \r\n        ', ' 380000', '3742456c0cdb2966978262dbc8bd890c.jpg', 555, '3742456c0cdb2966978262dbc8bd890c.jpg', '3742456c0cdb2966978262dbc8bd890c.jpg'),
(9, 2, 'ÁO LEN TĂM TRỄ VAI THU ĐÔNG', '       - Chất liệu: len tăm\r\n- Size: freesize\r\n- Màu sắc tươi sáng \r\n- Đường may tinh tế, tỉ mỉ trong từng chi tiết \r\n- Phong cách: trẻ trung  \r\n        ', ' 180000', '5186c8b4763576828fdc772ca8c65031.jpg', 200, '42ea7c1b3803a1a4e28504954172d09e.jpg', 'df16251fa12ddaa9c935b7854b2c7178.jpg'),
(10, 2, 'CHÂN VÁY ĐUÔI CÁ NHÚN CẠP CAO', '  ???????? chất kaki  da kate ...???? \r\n        ', ' 100000', 'images (1).jpg', 320, 'images (1).jpg', 'images.jpg'),
(11, 2, 'Chân váy bò dáng A cạp cao', '       chân váy jean, váy bò xẻ unisex dáng dài\r\n2 màu: đen, xanh ( màu xanh ra có đợt Đậm có đợt nhạt nhé ah. ) \r\nsize sml\r\nThông tin sản phẩm:\r\nTên sản phẩm: Chân váy Xẻ Tà, chân váy cạp cao, chân váy bò, chân váy denim,...\r\nChất liệu: Bò/denim, Xẻ Tà, Cạp Cao Tôn Dáng \r\n        ', ' 150000', 'a7c115c7c2bcf5b4ba8665ed352371cf.jpg', 650, 'cf5bea4b38db6f718feefe741324e85d.jpg', '9e1bf38eedb0cb0ab1bd36ecb1480640.jpg'),
(12, 4, 'BALO BÒ SỮA', 'Balo vừa tiện dụng vừa là một món phụ kiện giúp các anh chàng, cô nàng thêm cá tính, năng động hơn. \r\n        ', ' 240000', '1b7594d348c1774ca0f726d46674681c.jpg', 140, 'ad761e81a7d8809106b5913d9fbadce5.jpg', '1b7594d348c1774ca0f726d46674681c.jpg'),
(13, 4, 'BALO HỌA TIẾT CARO', 'Balo vừa tiện dụng vừa là một món phụ kiện giúp các anh chàng, cô nàng thêm cá tính, năng động hơn. \r\n        ', ' 320000', 'caro1.jpg', 200, 'caro2.jpg', 'caro3.jpg'),
(14, 7, 'Apple Watch SE 40mm (GPS)', 'Năm 2020, chắc hẳn các iFan đang háo hức đón chờ các siêu phẩm được ra mắt từ Apple. Đặc biệt Apple Watch SE 40mm  GPS) là một trong những phiên bản được Apple ra mắt vào năm 2020 và đang được nhiều người dùng quan tâm không kém gì phiên bản chính thức cao cấp.\r\n\r\nThiết kế thời trang, màn hình Retina LTPO OLED hiển thị chất lượng cao\r\nApple Watch SE 40mm (GPS) có thiết kế vừa năng động và mang đậm tính thời trang rất giống với thế hệ trước đây mà nhà sản xuất Apple đã thiết kế.\r\n\r\nHơn thế, dây đeo được làm từ chất liệu silicon có độ đàn hồi cao giúp người dùng có thể đeo trong thời gian dài mà không bị đau tay. Với chất liệu này người dùng dễ dàng vệ sinh và hạn chế bám bẩn và mồ hôi.', '8100000', 'c0d3b50d0282ea89e3bcf9d1d975700c.jpg', 100, 'c0d3b50d0282ea89e3bcf9d1d975700c.jpg', 'c0d3b50d0282ea89e3bcf9d1d975700c.jpg'),
(15, 4, 'BRIEFCASE WITH CLASP - BAGS', 'BRIEFCASE WITH CLASP', '550000', '927c7ce8857bb108fa57cea394dc5333.jpg', 120, NULL, NULL),
(16, 4, 'INFILYTRADA NO MEU', 'Nữ hoàng Brazil đến với tất cả sự táo bạo của mình để xâm nhập vào một thứ gì đó ngoài dự kiến.', '350000', 'ab395c24699b516ec1719975b6be9ec2.jpg', 20, NULL, NULL),
(17, 4, 'TÚI ĐEO VAI MINI', 'ABC', '650000', 'd9a74ddf9b6d0b996b0e398ce3df4301.jpg', 10, NULL, NULL),
(18, 8, 'MŨ BÓNG CHÀY Dior                ', ' Đây là một chiếc mũ bóng chày với chi tiết may trên cùng và một dây đeo sau có thể điều chỉnh được. Nó được làm từ sợi bông nhẹ.                 ', '12000000                  ', 'dior.jpg', 15, NULL, NULL),
(19, 8, 'MŨ CHAMPIM', 'Đây là 1 món phụ kiện không thể thiếu GIÚP CHO OUTFIT CỦA BẠN SANG SỊN HƠN.', '500000', 'd52be559dd4c973d1f40e4595f6ecdb3.jpg', 35, NULL, NULL),
(20, 8, 'MŨ VINTAGE CU180ZNZSML\r\n', '# Cổ điển # 1954 # Thêu # 66th # Sinh nhật # Thư giãn # Phù hợp # Bông # Mũ # Thợ săn # CU180ZNZSML', '300000', '2f5a6e584fb844b9b15172a829aecc6d.jpg', 20, NULL, NULL),
(21, 3, 'ÁO THUN NAM KẺ NGANG', 'Những mẫu áo thun nam 2020 có kiểu dáng như: áo thun trơn, áo thun tay dài, áo thun in... không chỉ đẹp mà còn không bị lỗi mốt theo thời gian.', '350000', 'f4b09d2cea264bd03f859d42ee5f5e45.jpg', 200, NULL, NULL),
(22, 3, 'SWEATER NỈ MÀU NÂU', 'Mặc áo này sẽ giúp đẹp trai X100', '355000', '8e246d562478b9b9a70e5058dd5c7fc3.jpg', 210, NULL, NULL),
(23, 3, 'ÁO LEN THỜI TRANG', 'Mặc áo này auto đẹp trai', '550000', '936475a2c22821bb96cb81ddd23e6520.jpg', 200, NULL, NULL),
(24, 3, 'KHOÁC DẠ NAM', ' Áo khoác dạ nam không chỉ phù hợp với mùa Đông lạnh giá mà còn là item linh hoạt và thời trang nhất mà bạn nên có để nâng tầm cho phong cách của mình.', '670000', 'fa28bfaf069b86100b91d602b27763f3.jpg', 0, NULL, NULL),
(25, 3, 'QUẦN ÂU HÀN QUỐC', 'Đơn giản nhưng rất sành điệu, cool ngầu và lịch lãm. Đó là những gì mà style ăn mặc phái mạnh Hàn Quốc đem lại cảm giác cho chúng ta.', '210000', '440b8ea04fbb3fad1518825dc442a238.jpg', 35, NULL, NULL),
(26, 5, 'Giày Converse 1970                        ', 'Đảm bảo sẽ làm hài lòng cả những tín đồ khó tính nhất                        ', '1500000                  ', 'converse.jpg', 45, NULL, NULL),
(27, 5, 'Giày MLB Chunky Boston', ' Giày sneaker MLB Chunky Nam Nữ Rep 1:1- Shop giày Replica™ #giayMLBchunky #MLBchunky #shopgiayreplica', '550000', '218d4df7d05d164ace184676a99c03c1.jpg', 35, NULL, NULL),
(28, 5, 'Giày thể thao Gucci', 'nGHE TÊN LÀ THẤY SANG RỒI, MÚC NGAY THÔI NÀO.', '2500000', 'c7ba30fc6a0ee85f6efde933af5c0ac2.jpg', 5, NULL, NULL),
(29, 5, 'Rejeitada Pelo Supremo (REVISANDO)', 'Luísa Murphy và con lai có sức mạnh phi thường, cô cùng một cô gái ngọt ngào, tình cảm, dễ thương bị người bạn đời Rayn Walkman từ chối, càng quyết tâm thay đổi trở thành một cô gái lạnh lùng không tình cảm. Cô trở thành một cô gái lạnh lùng không có cảm xúc, tham gia vào nhiều cuộc chiến và cuối cùng gặp Laura, một người phụ nữ có vấn đề và rất điên rồ và cuối cùng họ trở thành bạn của nhau.', '700000', 'VAN.jpg', 35, NULL, NULL),
(30, 7, 'ĐỒNG HỒ CASIO NỮ', '* Vật liệu vỏ / gờ: Nhựa\r\n* Dây đeo bằng nhựa\r\n* Mặt kính nhựa\r\n* Gờ hẹn giờ\r\n* Khả năng chống nước ở độ sâu 100 mét', '500000', 'e1dfeca17408b970e412f20c150d0073.jpg', 57, NULL, NULL),
(31, 7, 'My Killer Ketos (COMPLETED)', '', '4200000', '30da7295e2cea1e2c98c60e2133fb422.jpg', 23, NULL, NULL),
(32, 7, 'Apple Watch Szilikon', 'Dây đeo bằng vải của Apple Watch với nhiều loại và màu sắc khác nhau! Dây đeo phù hợp của Apple Watch series 1 2 3 4 5 6 SE. Cũng có sẵn cho 38mm 40mm 42mm và 44mm iWatch. #AppleWatchStrap # AppleWatchStraps…', '4500000', 'c0d3b50d0282ea89e3bcf9d1d975700c.jpg', 10, NULL, NULL),
(33, 7, ' Đồng Hồ Tissot PRC 200 ', 'Dòng đồng hồ Tissot PRC 200 được cấu thành từ những chất liệu độc quyền, mặt tròn cổ điển, kính sapphire, cổ máy Thụy Sỹ,… tạo nên sự hoàn hảo cho người đeo', '1500000', '7aaccf935f4b12a7ff7bee824899a34a.jpg', 25, NULL, NULL),
(34, 7, 'Đồng hồ Analog', 'Đồng hồ lớp cơ bản Momentum với dây đeo thứ hai - Nam', '2000000', 'c147b7082af2fe83ff17f1bfcfc4375d.jpg', 12, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_ctoder`
--
ALTER TABLE `tbl_ctoder`
  ADD PRIMARY KEY (`id_CT`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_ctoder`
--
ALTER TABLE `tbl_ctoder`
  MODIFY `id_CT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
