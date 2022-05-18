-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 18, 2022 lúc 04:08 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_senda`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `senda`
--

CREATE TABLE `senda` (
  `id` int(5) UNSIGNED NOT NULL,
  `avt` varchar(255) NOT NULL,
  `ten` varchar(20) NOT NULL,
  `mau_sac` varchar(255) NOT NULL,
  `kich_thuoc` text NOT NULL,
  `hinh_dang` varchar(255) NOT NULL,
  `dac_tinh` text NOT NULL,
  `y_nghia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `senda`
--

INSERT INTO `senda` (`id`, `avt`, `ten`, `mau_sac`, `kich_thuoc`, `hinh_dang`, `dac_tinh`, `y_nghia`) VALUES
(50, '../../uploads/sen-da-co-tim-247x247.jpg', 'Sen Đá Cỏ Tím', 'thường chủ yếu có màu xanh', 'có kích thước nhỏ.', 'Sen Đá Cỏ Tím ra hoa vào thời điểm cuối mùa hè. Hoa có màu trắng hồng mọc thành từng chùm tuy có kích thước nhỏ nhưng vẫn tạo được điểm nhấn cho cây. Bởi hình dáng nhỏ nhắn cùng sắc trắng nổi bật giữa màu tím của cây đã thu hút được sự quan tâm của người ', 'Sen Đá Cỏ Tím là loài sen đá có hình dáng đặc biệt bởi sự kết hợp giữa cây mọng nước với cây thân thảo. Thêm vào đó là màu tím vô cùng bắt mắt nên cây rất được ưa chuộng. Hãy cùng Cây Xinh tìm hiểu đặc điểm nổi bật của loài cây này qua bài chia sẻ sau đây.', 'Cũng giống các loại sen đá khác, Có Tím cũng có những công dụng và ý nghĩa chúng ta nên tìm hiểu. Đây là những lý do khiến cây được lựa chọn trồng phổ biến hiện nay.  Sen Đá Cỏ Tím có màu sắc tương đối khác so với những loài sen đá thường gặp nên cây được ưu tiên lựa chọn để trang trí bàn làm việc, bàn học, quán cà phê tạo nên sự mới lạ, độc đáo.  Cây cũng có công dụng mang lại không khí trong lành hơn.Cây cũng giúp hạn chế những tác hại từ các tia điện tử trong không gian làm việc có sử dụng nhiều thiết bị vi tính.   Sen Đá Cỏ Tím với đặc tính dễ sinh trưởng, lá cây sum suê mang ý nghĩa của sức sống mạnh mẽ, nhiều năng lượng. Trồng cây trong không gian làm việc tạo được năng lượng tích cực cho người sở hữu cây.  Ngoài ra, ý nghĩa của loài sen đá nói chung là sự bền bỉ, lâu dài. Cây thường được chọn làm quà tặng cho người thân thiết với ý nghĩa hãy luôn mạnh mẽ, kiên trì để vượt qua mọi gian nan, vất vả.  Hơn thế, xưa nay màu tím vốn là biểu tượng của sự mơ mộng, thủy chung trong tình yêu. Nếu ai đó tặng bạn một chậu Sen Đá Cỏ Tím có nghĩa là lời hứa về sự gắn bó lâu bền, son sắt. '),
(51, '../../uploads/sen-da-vien-tim-canh-nhon-247x247.jpg', 'Sen Đá Viền Tím Cánh', 'Màu tím', 'có hình dáng nhỏ nhắn', 'Sen Đá Viền Tím Cánh Nhọn là cây mọng nước, có hình dáng nhỏ nhắn. Cây có những chiếc lá thuôn dài và nhọn dần ở phần đầu. Chúng có màu xanh lục, nhưng gam màu đậm hơn so với đa số các cây sen đá khác. Vì vậy, cây tạo được sự nổi bật và ấn tượng riêng.', 'Những chiếc lá được sắp xếp rất khéo léo, hài hòa tạo thành hình đài hoa nhỏ nhắn đẹp mắt. Chúng được ví như những kiệt tác nghệ thuật của người mẹ thiên nhiên.', 'Sen Đá Viền Tím Cánh Nhọn thường được sử dụng để trang trí không gian trong nhà ở, phòng làm việc. Ngoài ra, cây cũng được đặt ở ban công hoặc sân thượng. Chúng giúp cho không gian của bạn trở nên tinh tế, giàu tính thẩm mỹ và sinh động hơn.  sen đá viền tím cánh nhọn Hình ảnh: Sen Đá Viền Tím cánh nhọn Trồng Sen Đá Viền Tím Cánh Nhọn cũng như các cây mọng nước khác đang trở thành xu hướng của cuộc sống hiện đại. Bởi vì chúng làm giảm tác động của các chất độc hại đến sức khỏe con người.  Hiện nay, thiết bị điện tử được sử dụng ngày càng nhiều và phổ biến. Do vậy, trồng cây trong nhà có tác dụng làm hạn chế ảnh hưởng xấu của các tia bức xạ phát ra từ các thiết bị điện.'),
(52, '../../uploads/sen-da-hoa-hong-xanh.jpg', 'Sen Đá Hoa Hồng Xanh', 'Hồng Xanh', 'Sen Đá Hoa Hồng Xanh có kích thước nhỏ, chỉ cao khoảng 12cm khi trưởng thành', 'Sở hữu những lớp cánh mềm mại trông giống hệt những bông hồng, Sen Đá Hoa Hồng Xanh được rất nhiều người yêu thích và tìm kiếm. Những ai đang tìm kiếm một món quà thật ý nghĩa để tặng cho người thân, bạn bè thì nhất định không nên bỏ qua loài cây này.', 'Sen Đá Hoa Hồng Xanh với hai tên khoa học đều được chấp nhận là Aeonium dodrantale và Greenovia dodrantalis. Việc đặt tên kép là kết quả của việc phân loại lại phân loại của cây, điều này xảy ra khá thường xuyên trong thực vật học. Tuy nhiên, hầu hết mọi người chỉ gọi nó là Sen Đá Hoa Hồng – Rose Succulent, một cái tên hoàn hảo.', 'Sappho – một nhà thơ trữ tình nổi tiếng của Hy Lạp là đã từng viết rằng: “Nếu như vị thần Jupiter – vị chúa tể của các vị thần – muốn tìm một nữ hoàng cho thế giới loài hoa thì hẳn Người sẽ chọn Hoa Hồng. Hoa Hồng là đứa con xinh xắn nhất của buổi sáng đẫm sương, là viên ngọc quý trang điểm cho bộ ngực trái đất, là ánh sáng rực rỡ trên những thảm cỏ xanh và là hơi thở của tình yêu…”.  Tặng Sen Đá Hoa Hồng Xanh mang nhiều ý nghĩa:  Cây mang ý nghĩa về sự bí ẩn Giống như nguồn gốc bí ẩn của cây, Sen Đá Hoa Hồng Xanh có nghĩa là bí ẩn. Cây thể hiện một không gian xa vời không thể với tới, một bí ẩn không thể được làm sáng tỏ. Sự bay bổng lãng mạn không thể kìm nén là tất cả những gì loại sen đá này diễn đạt. Cây đại diện cho sự hoàn hảo Bản thân Sen Đá Hoa Hồng Xanh thể hiện ẩn ý: “Bạn cực kỳ tuyệt vời”. Một cá tính thật sự hoàn hảo, nổi bật là điều mà Hoa Hồng Xanh muốn bày tỏ về người nhận.'),
(53, '../../uploads/sen-da-do-100620-01-510x510.jpg', 'Sen Đá Đỏ Lá Dài', 'màu hồng cam độc đáo', 'dài khoảng 5cm khi trưởng thành', 'Lá Sen Đá Đỏ nhọn dày, dài khoảng 5cm khi trưởng thành. Nếu được trồng trong bóng râm, lá cây sẽ có màu vàng xanh. Khi nhận được ánh sáng đầy đủ, lá chuyển màu màu đỏ đồng. Cây thường nở hoa vào mùa xuân với những cụm hoa tròn màu trắng có mùi thơm nhẹ vớ', 'Đây là một loại cây mọng nước phổ biến với kích thước nhỏ gọn, có màu hồng cam độc đáo. Các lá của cây tập trung ở ngọn, khi còn non có màu xanh xám. Nếu sinh trưởng trong thời tiết mùa đông se lạnh, lá cây con cũng có thể có màu đỏ cam ngay từ khi mới hình thành.', 'Chính nhờ màu sắc đỏ đặc trưng mà Sen Đá Đỏ được dùng làm quà tặng rất ý nghĩa, màu đỏ biểu trưng cho sự sôi động, nhiệt huyết, ý muốn nói rằng hãy cố gắng hết mình trong cuộc sống. Người ta thường đặt loại sen đá này trên bàn làm việc để cổ vũ tinh thần cho bản thân.'),
(55, '../../uploads/d091d8f8-4569-4331-bf4c-15bbfd2fc4f5_2.jpg', 'Sen Đá Hoa Hồng Xanh', 'Lá cây có màu xanh nhạt được phủ một lớp màu trắng', 'nhỏ, chỉ cao khoảng 12cm khi trưởng thành', 'thân cây tiêu biến hoàn toàn, mọc sát mặt đất hoặc có thân rất ngắn', 'cây xanh thì lá cũng xanh chim đậu trên cành chim hót lếu lo', 'là viên ngọc quý trang điểm cho bộ ngực trái đất, là ánh sáng rực rỡ trên những thảm cỏ xanh và là hơi thở của tình yêu'),
(56, '../../uploads/sen-da-kim-cuong-247x247.jpg', 'Sen Đá Hoa Hồng Xanh', 'Lá cây có màu xanh nhạt được phủ một lớp màu trắng', 'nhỏ, chỉ cao khoảng 12cm khi trưởng thành', 'thân cây tiêu biến hoàn toàn, mọc sát mặt đất hoặc có thân rất ngắn', 'cây xanh thì lá cũng xanh chim đậu trên cành chim hót lếu lo', 'là viên ngọc quý trang điểm cho bộ ngực trái đất, là ánh sáng rực rỡ trên những thảm cỏ xanh và là hơi thở của tình yêu'),
(57, '../../uploads/d091d8f8-4569-4331-bf4c-15bbfd2fc4f5_2.jpg', 'Sen Đá Hoa Hồng Xanh', 'Lá cây có màu xanh nhạt được phủ một lớp màu trắng', 'nhỏ, chỉ cao khoảng 12cm khi trưởng thành', 'thân cây tiêu biến hoàn toàn, mọc sát mặt đất hoặc có thân rất ngắn', 'cây xanh thì lá cũng xanh chim đậu trên cành chim hót lếu lo', 'là viên ngọc quý trang điểm cho bộ ngực trái đất, là ánh sáng rực rỡ trên những thảm cỏ xanh và là hơi thở của tình yêu'),
(63, '../../uploads/sen-da-soi-vien-do-247x247.jpg', 'Sen đá cỏ ngọc', 'xanh', '10cm', 'cao', 'ua nuoc, chiu nhiet tot', 'may man');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `avt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `avt`) VALUES
(5, 'nhub19101201122', '123123', '../../uploads/sen-da-da-ran.jpg'),
(6, 'test123', '123123', ''),
(7, 'nhu', '123123', '../../uploads/sen-da-vien-tim-canh-nhon-247x247.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `senda`
--
ALTER TABLE `senda`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `senda`
--
ALTER TABLE `senda`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
