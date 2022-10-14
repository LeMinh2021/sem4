-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 10, 2022 lúc 12:00 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cuahang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `Id` int(11) NOT NULL,
  `Id_Taikhoan` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Dia_Chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Id_SanPham` int(11) NOT NULL,
  `GiaSanPham` int(11) NOT NULL,
  `HinhSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuongSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Id_DonDatHang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`Id`, `Id_Taikhoan`, `Username`, `Dia_Chi`, `Email`, `SoDienThoai`, `Id_SanPham`, `GiaSanPham`, `HinhSanPham`, `SoLuongSanPham`, `TenSanPham`, `Id_DonDatHang`) VALUES
(90, 1, 'admin', 'ddddddd', 'thaibasang8@gmail.com', '0366426402', 9, 900000, 'https://cf.shopee.vn/file/e9ce3b55cc59d1bc1e5a2d473645cb33', 3, 'CK JEANS - Áo Thun Nữ\n', 84);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten`, `hinhicon`) VALUES
(1, 'Áo Sơ Mi', 'https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2021/4/6/896286/Qua-Tao-1.jpg'),
(2, 'Áo Thun', 'https://hoaquafuji.com/storage/app/media/cam-ruot-do-my-fuji-0-3.jpg'),
(3, 'Áo POLO', 'https://cafefcdn.com/thumb_w/650/203337114487263232/2021/9/15/photo1631710626805-16317106270301338640448.jpg'),
(4, 'Áo HOODIE', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGCBUVExcVFRUXGBcZGiQcGxoaGSMjHBwaHR0aGxwcHBwjHy0jIB0oHRocJTUkKCwuMjIyHCE3PDcxOysxMi4BCwsLDw4PHRERHTkoIygxMTkzNjMxMTMzMTExMTExMTExMzExMTExMTExMTExMTExMTExMTExMTExMTExMTExMf/AABEIALsBDgMBIgACEQEDEQH/'),
(5, 'Quần JEANS', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTq73fcoDxJ3u76QapuOLGY0lU7AKFbiODGSirJqOL_j5mt508Tu16yxLBBz00d6GoWozg&usqp=CAU'),
(6, 'QUẦN DÀI', 'https://vnn-imgs-f.vgcloud.vn/2019/10/02/10/qua-hong-se-phat-huy-tac-dung-tot-cho-suc-khoe-neu-tranh-nhung-dieu-sau.jpg'),
(7, 'QUẦN SHORT', 'https://product.hstatic.net/200000325223/product/sau_rieng_new-01_63392fbb5c3d449e913faebc332ae80f_master.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `Id_DonHang` int(11) NOT NULL,
  `NgayDat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TrinhTrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Id_TaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`Id_DonHang`, `NgayDat`, `TrinhTrang`, `Id_TaiKhoan`) VALUES
(84, '2022-10-10', 'Chờ Xét Duyệt', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `Id` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Sanpham` int(11) NOT NULL,
  `Ten_Sanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_30_094315_create_quangcaos_table', 1),
(5, '2019_10_01_093905_create_danhmucs_table', 1),
(6, '2019_10_05_094028_create_linhkienlaptops_table', 1),
(7, '2019_10_05_161845_create_thietbingenhins_table', 1),
(8, '2019_10_07_231544_create_sanphams_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanloaitaikhoan`
--

CREATE TABLE `phanloaitaikhoan` (
  `id` int(11) NOT NULL,
  `loaitaikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanloaitaikhoan`
--

INSERT INTO `phanloaitaikhoan` (`id`, `loaitaikhoan`) VALUES
(0, 'Khách Hàng'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quangcao`
--

INSERT INTO `quangcao` (`Id`, `HinhAnh`, `NoiDung`, `Id_Sanpham`) VALUES
(1, 'http://kleverfruits.com.vn/images/products/large/1ac4d48a40e6a2b8fbf7_1554891169.jpg', 'Táo Fuji là giống táo được lai chéo giữa hai giống táo Mỹ (Red Delicious) và giống Virginia Ralls Genet bởi những chuyên gia cây trồng tại Trạm nghiên cứu Tohoku thuộc thị trấn Fujisaki, Aomori, Nhật Bản vào những năm 1930 và được đưa ra thị trường vào nă', 1),
(2, 'https://admin.nongsandungha.com/wp-content/uploads/2021/08/tao-mat-fuji-1.jpg', 'Táo mật Fuji hay còn có rất nhiều những tên gọi khác như táo Fụi, táo mật Nhật Bản, táo mật Phú Sĩ, táo Phú Sĩ, táo Nhật,.... đang là một loại trái cây thực sự hot và đang được mọi người săn đón. Đây là giống táo có xuất xứ từ đất nước Nhật bản, đất nước ', 2),
(3, 'https://familyfruits.com.vn/wp-content/uploads/2021/01/tao-rockit-my-ong-4-trai.jpg', '– Táo Rockit là dòng táo có nguồn gốc xuất xứ từ vịnh Hawke của New Zealand với hình dáng nhỏ nên còn gọi là Táo Bi, vỏ ngoài màu hồng đậm pha chút sắc vàng.\r\n\r\n– Táo Rockit là dòng táo biến đổi gen, được lai tạo từ nhiều giống táo khác nhau để tạo sự độc', 3),
(4, 'http://luontuoisach.vn/public/files/upload/product/1474510458envy-to-2.jpg', 'Envy size lớn hình trái tim bắt mắt, vỏ màu đỏ ruby, căng mịm, cuống màu xanh lá cây, chắc thịt, rất giòn và nhiều nước.\r\n\r\n- Táo chứa nhiều chất chống oxy hóa ngăn chặn tế bào và tổn thương mô khỏi các gốc tự do trong cơ thể bằng cách ngăn chặn hoặc làm ', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `Id` int(11) NOT NULL,
  `TenSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnhSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `Gia` int(255) NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `NgayDang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayKhuyenMai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GiamGia` int(10) NOT NULL,
  `Loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhMoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`Id`, `TenSanPham`, `HinhAnhSanPham`, `MoTa`, `Gia`, `SoLuong`, `NgayDang`, `NgayKhuyenMai`, `GiamGia`, `Loai`, `HinhMoTa`, `id_danhmuc`) VALUES
(1, 'COTTON ON - Áo Sơ Mi Dài Tay Nam - Brunswick Shirt 3\n', 'https://vn-test-11.slatic.net/p/ec92b35dcdb855d723a4ce0e0c6399a6.jpg', 'Ra mắt năm 1991, Cotton:On trở thành một trong những điểm đến thời trang nổi tiếng toàn cầu với mạng lưới hơn 600 cửa hàng trên toàn thế giới.\n\nCotton:On đưa đến làn gió mới trong cộng đồng thời trang với các xu hướng mang đậm dấu ấn cá nhân, cùng bạn thể hiện phong cách riêng biệt tạo nên nhiều sự khác biệt tích cực và truyền cảm hứng thời trang đến với cộng đồng. Các dòng sản phẩm phổ biến nhất của Cotton On gồm trang phục nữ, trang phục nam và phụ kiện.Táo Fuji là giống táo được lai chéo giữa hai giống táo Mỹ (Red Delicious) và giống Virginia Ralls Genet bởi những chuyên gia cây trồng tại Trạm nghiên cứu Tohoku thuộc thị trấn Fujisaki, Aomori, Nhật Bản vào những năm 1930 và được đưa ra thị trường vào năm 1962. Người ta thường tin rằng táo Fuji được đặt tên theo hình tượng ngọn núi Phú Sĩ. Nhưng thực ra đó là một thị trấn nhỏ ở quận Aomori, nơi nó được trồng vào những năm 1930. \n\nTáo Fuji Nhật có vỏ màu đỏ xen kỹ các chấm trắng rất lạ mắt, vị ngọt sắc (hàm lượng đường trong táo khoảng 12~ 14 Brix), độ giòn cao. ', 500000, 200, '19/5/2022', '19/5/2022', 50, 'Áo Sơ Mi', 'https://thumb.danhsachcuahang.com/image/2019/09/danh-sach-shop-ban-ao-so-mi-cho-nam-lich-lam-tai-hai-phong-thumb-716.png@https://vn-test-11.slatic.net/p/f1364807249dbe5e8cce7248b3438da7.jpg@https://vn-test-11.slatic.net/p/26094a9539fb98526c67e1226f8f8749.jpg', 1),
(2, 'OLD NAVY - Áo sơ mi Nam\n', 'https://taru.vn/image/data/product-4646/220661.jpg', 'Old Navy là thương hiệu thuộc sở hữu của Tập đoàn Gap Inc, thời trang Old Navy đậm chất Mỹ với màu sắc trẻ trung, năng động cùng tính ứng dụng cao. Thời trang Old Navy tạo nên không gian mua sắm cho mọi thành viên trong gia đình, mang đến thế giới thời trang đa dạng cho mọi nhà với giá thành hợp lý.\nKhông chỉ chinh phục các tín đồ thời trang bởi phong cách cá tính, quyến rũ nhưng vẫn thanh lịch, PARFOIS đang sẵn sàng trở thành thương hiệu phù hợp cho cả phụ nữ hiện đại và truyền thống, mang đến các sản phẩm có chất lượng tốt nhất đi cùng với mức giá hợp lý. Với các sản phẩm như: túi xách, trang sức, kính mát, thắt lưng, khăn choàng, giày dép, đồng hồ, phụ kiện tóc, quần áo... những bộ sưu tập của PARFOIS là sự cân bằng hoàn hảo giữa thời trang và phong cách sống hiện đại.', 700000, 100, '5/5/2022', '5/5/2022', 0, 'Áo Sơ Mi', 'https://media3.scdn.vn/img3/2019/7_2/mLAFCy_simg_b5529c_250x250_maxb.jpg@https://cf.shopee.vn/file/26f141d84b7376b8f85f756c0c452a4d@https://cf.shopee.vn/file/45d9bc67591becb3abce31dd85ca3919', 1),
(3, 'GAP - Áo Sơ Mi Tay Dài Nữ\n', 'https://cf.shopee.vn/file/20b15844431e09b409d3234973157919', 'GAP là thương hiệu thời trang Quốc tế đến từ Mỹ với các sản phẩm thời trang đa dạng dành cho nam, nữ và trẻ em.  Được thành lập vào năm 1969 tại San Francisco, đến nay GAP đã có hơn 3.100 cửa hàng trên toàn thế giới. GAP chính là biểu tượng cho tinh thần Mỹ - một tinh thần Lạc quan, Phóng khoáng với những thiết kế mang phong cách Trẻ trung, Hiện đại và đề cao sự Thoải mái cho người mặc. Không chỉ chú trọng đến chất lượng của sản phẩm, GAP còn là một trong những thương hiệu tiên phong theo đuổi mục tiêu phát triển bền vững.', 800000, 150, '19/5/2022', '19/5/2022', 30, 'Áo Sơ Mi', 'https://cf.shopee.vn/file/a03fc4a190bffc8409cc64719b4852f5@http://file.hstatic.net/1000304191/article/bao-quan-ao-so-mi-764309_6c591dbd35e14fc18e63f0d238196426_6c8be35ac3cd4f5382ebd4dcce6bf899.jpg@https://toplist.vn/images/800px/so-mi-voan-867222.jpg', 1),
(5, 'BANANA REPUBLIC', 'https://vn-test-11.slatic.net/p/8e1f6b2861c4d0d399acb34a33f49912.jpg', 'Banana\nBanana Republic là thương hiệu thời trang Mỹ được thành lập vào năm 1978 bởi Mel và Patricia Ziegler tại California. Hiện thương hiệu đang thuộc quyền sở hữu của Tập đoàn GAP Inc và được phân phối bởi Công Ty TNHH Thời Trang và Mỹ Phẩm Âu Châu (ACFC) tại Việt Nam năm 2012.\n\nBanana Republic mang đến các thiết kế đa dạng, là sự kết hợp hài hòa giữa nét đẹp cổ điển và xu hướng đương đại. Thông qua các thiết kế chỉn chu, chúng tôi mang đến những sản phẩm quần áo và phụ kiện được may đo tỉ mỉ trên nền chất liệu cao cấp.\n\nBanana Republic mang sứ mệnh làm đẹp cho cả nam giới và phụ nữ, những người luôn mang trong mình năng lượng sống tích cực và luôn tìm kiếm cho bản thân những cơ hội và những điều mới mẻ. Chúng tôi luôn nhìn thấy sự khác biệt trong cuộc sống.\n\nBanana Republic với một tinh thần phóng khoáng luôn mang lại cho bạn những thiết kế đơn giản, tinh tế nhưng không kém phần thanh lịch, phù hợp mọi phong cách cho cuộc sống bận rộn.\n', 1400000, 100, '25/5/2022', '25/5/2022', 40, 'Áo Sơ Mi', 'https://maydongphucviet.com/upload/product/2019/09/12/dong-phuc-cong-so-ao-so-mi-nu-tay-dai-that-no-image-20190912095104-264697.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVPLWJ_Eg5qVlDbnI0ZC97NLorl9e3bWfwpuG52Yt2OSUha8crjkB2u3oudEZf4fl1m0s&usqp=CAU@https://chuyenmaydongphuc.vn/pictures/products/Dong%20Phuc%20So%20Mi_07_1571023033277.jpg', 1),
(9, 'CK JEANS - Áo Thun Nữ\n', 'https://cf.shopee.vn/file/e9ce3b55cc59d1bc1e5a2d473645cb33', 'Calvin Klein là một trong những thương hiệu thời trang hàng đầu trên thế giới được nhà thiết kế cùng tên Calvin Richard Klein thành lập năm 1968. Calvin Klein luôn cải tiến và đi đầu trong công nghệ và chất liệu để nhằm mang đến cho khách hàng những sản phẩm thời trang cao cấp với chất lượng tốt nhất.\n\nVẻ đẹp từ sự tối giản, những chiếc áo thun in logo kinh điển, những thiết kế Denim hoàn hảo từ phom dáng, đến những đường cắt cúp tinh tế. Calvin Klein Jeans luôn duy trì sự đột phá để tạo ra những kích thước chuẩn mực, mang đến phong cách trẻ trung, năng động qua những thiết kế dành riêng cho giới trẻ yêu thời trang, thích sự đương đại tự tin.', 300000, 97, '30/5/2022', '30/5/2022', 20, 'Cam ', 'https://salt.tikicdn.com/cache/w1200/ts/product/cb/d2/a0/c2bd00e68910e5162272f0dc2ef165f1.jpg@https://thoitrangngaynay.com/upload/images/ao-thun-nu-phong-cach-don-gian-nhe-nhang%20(2).jpg@https://cf.shopee.vn/file/191e83fa2760535ec227816537cda33d', 2),
(10, 'GAP - Áo Thun Tay Ngắn Nữ\n', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2IRPtyXvXtB0d-sTdPwo3SzVP9xuuwuF4p0EvabCuG00m9TicYP26Rx0vAt_bBr_mC88&usqp=CAU', 'GAP/\nGAP là thương hiệu thời trang Quốc tế đến từ Mỹ với các sản phẩm thời trang đa dạng dành cho nam, nữ và trẻ em.  Được thành lập vào năm 1969 tại San Francisco, đến nay GAP đã có hơn 3.100 cửa hàng trên toàn thế giới. GAP chính là biểu tượng cho tinh thần Mỹ - một tinh thần Lạc quan, Phóng khoáng với những thiết kế mang phong cách Trẻ trung, Hiện đại và đề cao sự Thoải mái cho người mặc. Không chỉ chú trọng đến chất lượng của sản phẩm, GAP còn là một trong những thương hiệu tiên phong theo đuổi mục tiêu phát triển bền vững.', 45, 0, '29/5/2022', '29/5/2022', 35, 'Cam ', 'https://salt.tikicdn.com/cache/w1200/ts/product/cb/d2/a0/c2bd00e68910e5162272f0dc2ef165f1.jpg@https://thoitrangngaynay.com/upload/images/ao-thun-nu-phong-cach-don-gian-nhe-nhang%20(2).jpg@https://cf.shopee.vn/file/191e83fa2760535ec227816537cda33d', 2),
(11, 'CK JEANS - Áo Thun Nữ Modern Straight Fit\n', 'https://cf.shopee.vn/file/e9ce3b55cc59d1bc1e5a2d473645cb33', 'Calvin Klein là một trong những thương hiệu thời trang hàng đầu trên thế giới được nhà thiết kế cùng tên Calvin Richard Klein thành lập năm 1968. Calvin Klein luôn cải tiến và đi đầu trong công nghệ và chất liệu để nhằm mang đến cho khách hàng những sản phẩm thời trang cao cấp với chất lượng tốt nhất.\n\nVẻ đẹp từ sự tối giản, những chiếc áo thun in logo kinh điển, những thiết kế Denim hoàn hảo từ phom dáng, đến những đường cắt cúp tinh tế. Calvin Klein Jeans luôn duy trì sự đột phá để tạo ra những kích thước chuẩn mực, mang đến phong cách trẻ trung, năng động qua những thiết kế dành riêng cho giới trẻ yêu thời trang, thích sự đương đại tự tin.', 60, 100, '1/6/2022', '1/6/2022', 10, 'Cam', 'https://salt.tikicdn.com/cache/w1200/ts/product/cb/d2/a0/c2bd00e68910e5162272f0dc2ef165f1.jpg@https://thoitrangngaynay.com/upload/images/ao-thun-nu-phong-cach-don-gian-nhe-nhang%20(2).jpg@https://cf.shopee.vn/file/191e83fa2760535ec227816537cda33d', 2),
(1003, 'TOMMY HILFIGER - Áo Polo ', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/1-af0c84b6-d733-4bef-8dcf-d8a7d6bc30b8.jpg', 'TOMMY HILFIGER là thương hiệu thời trang hàng đầu thế giới, tôn vinh phong cách cổ điển kiểu Mỹ, đặc trưng với những thiết kế preppy phá cách.\r\n\r\nĐược thành lập vào năm 1985, Tommy Hilfiger mang đến những thiết kế thời thượng cao cấp cho người tiêu dùng trên toàn thế giới qua các thương hiệu TOMMY HILFIGER và TOMMY JEANS, với nhiều bộ sưu tập gồm thời trang phong cách thể thao nam, nữ, denim, phụ kiện, và giày dép. Người sáng lập thương hiệu – ông Tommy Hilfiger vẫn là nhà thiết kế chính, dẫn dắt và chỉ đạo cho toàn bộ quá trình thiết kế của thương hiệu.\r\n\r\nThông qua các công ty được cấp phép chính thức, Tommy Hilfiger cung cấp các sản phẩm khác như kính mắt, đồ bơi, tất, đồ da. Dòng sản phẩm Tommy Jeans bao gồm quần jean và giày nam, nữ và phụ kiện. Các sản phẩm của Tommy Hilfiger và Tommy Jeans có mặt trên toàn thế giới thông qua mạng lưới các cửa hàng bán lẻ của Tommy Hilfiger và Tommy Jeans.', 1000000, 100, '10/10/2022', '20/10/2022', 10, 'Ao POLO', 'https://cf.shopee.vn/file/3a1a9a2faad08ec9e9a9998cfccd1824@https://s4.nhattao.com/data/attachment-files/2022/10/18328190_ao-po-lo-sai-gon-3.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiHHfLkRWvkq78-B04Ft5DpvaByB34vBA8-fFdZ9FE6WpUobpAOpGaEhRej_wKvW6pcOY&usqp=CAU', 3),
(1004, 'FRENCH CONNECTION - Áo Dệt Kim Nữ Lilly Mozart Jumper\r\n', 'https://media3.scdn.vn/img2/2016/12_31/x8Tc9G_simg_de2fe0_500x500_maxb.jpg', 'Được Stephen Marks thành lập vào năm 1972, French Connection (FCUK) - thương hiệu với phong cách nổi loạn, phá cách và phóng khoáng đã tạo nên sự thu hút tới thị trường thời trang rộng lớn với chất lượng tốt và giá cả hợp lý.\r\n\r\nThông qua những thiết kế độc đáo và hợp thời, cũng chính là điều kiện cốt lõi trong kinh doanh của thương hiệu, những năm gần đây FCUK còn mở rộng thêm các sản phẩm mới bao gồm đồ dùng cho nam và nữ, mắt kính, đồng hồ và giày dép.\r\n\r\nNắm lấy cơ hội và cải tiến để hoàn thiện hơn, điểm mạnh của French Connection là sự kết hợp hài hòa giữa những ý tưởng cũ và mới với sự cam đoan về chất lượng và giá cả từ khi bắt đầu thành lập công ty đến nay. Xuyên suốt quá trình phát triển, FCUK vẫn giữ nguyên giá trị của thương hiệu với những thiết kế dẫn đầu xu hướng một cách đặc sắc nhất.', 1500000, 100, '10/10/2022', '20/10/2022', 10, 'Áo HOODIE', 'https://cf.shopee.vn/file/6d67f18b6dd6be0a116a5f841f891375@https://cf.shopee.vn/file/3c66d9bedc9bda788393bc5d243f15a8@https://mikaystore.r.worldssl.net/wp-content/uploads/2021/01/ao-hoodie-nu.png', 4),
(1005, 'CK JEANS - Quần Jeans Nữ\r\n', 'https://cf.shopee.vn/file/0be7ee1bd795a7af415163e55b61b0e7_tn', 'CK\r\nCalvin Klein là một trong những thương hiệu thời trang hàng đầu trên thế giới được nhà thiết kế cùng tên Calvin Richard Klein thành lập năm 1968. Calvin Klein luôn cải tiến và đi đầu trong công nghệ và chất liệu để nhằm mang đến cho khách hàng những sản phẩm thời trang cao cấp với chất lượng tốt nhất.\r\n\r\nVẻ đẹp từ sự tối giản, những chiếc áo thun in logo kinh điển, những thiết kế Denim hoàn hảo từ phom dáng, đến những đường cắt cúp tinh tế. Calvin Klein Jeans luôn duy trì sự đột phá để tạo ra những kích thước chuẩn mực, mang đến phong cách trẻ trung, năng động qua những thiết kế dành riêng cho giới trẻ yêu thời trang, thích sự đương đại tự tin.', 450000, 100, '10/10/2022', '20/10/2022', 10, 'Quần JEANS', 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/445646/item/vngoods_64_445646.jpg?width=1600&impolicy=quality_75@https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/445646/sub/vngoods_445646_sub6.jpg?width=1600&impolicy=quality_75', 5),
(1006, 'FRENCH CONNECTION - Quần Dài Nữ Ft Bayami Whispr Slim Flrd Trs\r\n', 'https://cf.shopee.vn/file/816709a2182243eec55f999823d73e43', 'Được Stephen Marks thành lập vào năm 1972, French Connection (FCUK) - thương hiệu với phong cách nổi loạn, phá cách và phóng khoáng đã tạo nên sự thu hút tới thị trường thời trang rộng lớn với chất lượng tốt và giá cả hợp lý.\r\n\r\nThông qua những thiết kế độc đáo và hợp thời, cũng chính là điều kiện cốt lõi trong kinh doanh của thương hiệu, những năm gần đây FCUK còn mở rộng thêm các sản phẩm mới bao gồm đồ dùng cho nam và nữ, mắt kính, đồng hồ và giày dép.\r\n\r\nNắm lấy cơ hội và cải tiến để hoàn thiện hơn, điểm mạnh của French Connection là sự kết hợp hài hòa giữa những ý tưởng cũ và mới với sự cam đoan về chất lượng và giá cả từ khi bắt đầu thành lập công ty đến nay. Xuyên suốt quá trình phát triển, FCUK vẫn giữ nguyên giá trị của thương hiệu với những thiết kế dẫn đầu xu hướng một cách đặc sắc nhất.\r\n\r\nTinh thần thương hiệu: Táo bạo - Cá tính - Sành điệu', 600000, 100, '10/10/2022', '20/10/2022', 10, 'QUẦN DÀI', 'https://cf.shopee.vn/file/d2afa71d0d4c10a44653a6b48e8e4668@https://cf.shopee.vn/file/816709a2182243eec55f999823d73e43@https://salt.tikicdn.com/cache/400x400/ts/product/63/43/d7/a6e1613c73380f6392746848bd18a0f7.png', 6),
(1007, 'TOMMY HILFIGER - Quần Short Nữ\r\n', 'https://sakurafashion.vn/upload/sanpham/large/7643-quan-short-nu-mau-tron-1.jpg', 'Tommy\r\nTOMMY HILFIGER là thương hiệu thời trang hàng đầu thế giới, tôn vinh phong cách cổ điển kiểu Mỹ, đặc trưng với những thiết kế preppy phá cách.\r\n\r\nĐược thành lập vào năm 1985, Tommy Hilfiger mang đến những thiết kế thời thượng cao cấp cho người tiêu dùng trên toàn thế giới qua các thương hiệu TOMMY HILFIGER và TOMMY JEANS, với nhiều bộ sưu tập gồm thời trang phong cách thể thao nam, nữ, denim, phụ kiện, và giày dép. Người sáng lập thương hiệu – ông Tommy Hilfiger vẫn là nhà thiết kế chính, dẫn dắt và chỉ đạo cho toàn bộ quá trình thiết kế của thương hiệu.\r\n\r\nThông qua các công ty được cấp phép chính thức, Tommy Hilfiger cung cấp các sản phẩm khác như kính mắt, đồ bơi, tất, đồ da. Dòng sản phẩm Tommy Jeans bao gồm quần jean và giày nam, nữ và phụ kiện. Các sản phẩm của Tommy Hilfiger và Tommy Jeans có mặt trên toàn thế giới thông qua mạng lưới các cửa hàng bán lẻ của Tommy Hilfiger và Tommy Jeans.', 650000, 100, '10/10/2022', '20/10/2022', 10, 'QUẦN SHORT', 'https://p-vn.ipricegroup.com/21c44f90bd4b5ef39bea31117685b057dfdd3830_0.jpg?position=4@https://giatott.com/media/images/quan-short-nu-dui-chat-dui-san-nhe-mac-o-nha-thoang-mat-1.jpg@https://sosanhgianhanh.com/wp-content/uploads/thumbs_dir/qu-n-short-n-ng-r-ng-qu-n-dui-d-i-1-p85h285hwry7xq3swvu5z58nw3jh9lh06tf9tkuwlk.jpg', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PassWord` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumBer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`Id`, `UserName`, `PassWord`, `Email`, `PhoneNumBer`, `Adress`, `Hinh`, `loai`) VALUES
(1, 'admin', 'a2505162af430dcdf773ed6a10861833', 'thaibasang8@gmail.com', 'tyhhhhttt', 'Dai Hung-Dai Loc- Quang Nam', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTp8ueC6GiRRRy7muStewczNrdHKOQM8hJYL_EmR_XIeqksvrRp9g&s', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_chitietdonhang_id` (`Id_DonDatHang`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`Id_DonHang`),
  ADD KEY `fk_dondathang` (`Id_TaiKhoan`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_giohang` (`Id_User`),
  ADD KEY `fk_giohangidsp` (`Id_Sanpham`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanloaitaikhoan`
--
ALTER TABLE `phanloaitaikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_quangcao` (`Id_Sanpham`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `fk_danhgia` (`UserName`),
  ADD KEY `fk_taikhoan_loai` (`loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `Id_DonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `phanloaitaikhoan`
--
ALTER TABLE `phanloaitaikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_chitietdonhang_id` FOREIGN KEY (`Id_DonDatHang`) REFERENCES `dondathang` (`Id_DonHang`);

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `fk_dondathang` FOREIGN KEY (`Id_TaiKhoan`) REFERENCES `taikhoan` (`Id`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_giohang` FOREIGN KEY (`Id_User`) REFERENCES `taikhoan` (`Id`),
  ADD CONSTRAINT `fk_giohangidsp` FOREIGN KEY (`Id_Sanpham`) REFERENCES `sanpham` (`Id`);

--
-- Các ràng buộc cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD CONSTRAINT `fk_quangcao` FOREIGN KEY (`Id_Sanpham`) REFERENCES `sanpham` (`Id`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_taikhoan_loai` FOREIGN KEY (`loai`) REFERENCES `phanloaitaikhoan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
