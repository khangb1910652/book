-- drop database project;
-- create database project;
-- use project;
create table user(
	username varchar(50) primary key,
    password varchar(50) not null
);
create table category(
	id_cat varchar(50) primary key,
    name_cat varchar(50) not null
);
create table book(
	id_book int(10) auto_increment primary key,
    name_book varchar(30) not null,
    author varchar(50) not null,
    des varchar(500) not null,
    img varchar(100) not null,
    date timestamp default current_timestamp,
    id_cat varchar(50) references caterogy(id_cat),
	username varchar(50) references user(username)
);
INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');
INSERT INTO `category` (`id_cat`, `name_cat`) VALUES
('comic', 'comic'),
('nonfiction', 'nonfiction'),
('novel', 'novel'),
('poem', 'poem'),
('science', 'science');
INSERT INTO `book` (`id_book`, `name_book`, `author`, `des`, `img`, `date`, `id_cat`, `username`) VALUES
(1, 'Sóng', 'Xuân Quỳnh', 'Bài thơ diễn tả tình yêu của người phụ nữ thiết tha, nồng nàn, chung thủy, muốn vượt lên thử thách của thời gian và sự hữu hạn của đời người. Từ đó cho thấy tình yêu là một thứ tình cảm cao đẹp, một hạnh phúc lớn lao của con người. Hình ảnh sóng đôi sóng và em, thể thơ năm chữ, ngôn ngữ dung dị, trong sáng...', 'image/song-xuan-quynh-01.jpg', '2022-04-21 07:04:02', 'poem', 'admin'),
(2, 'Tôi là ai - và nếu vậy thì bao', 'Richard David Precht', 'Cuốn sách này không bàn những vấn đề kinh viện, mà nó bàn ngay vào ba câu hỏi mà con người luôn phải đối diện trong cuộc sống: Tôi có thể biết gì? Tôi nên làm gì? và Tôi có quyền hy vọng gì?', 'image/toilaai.jpg', '2022-04-21 07:05:36', 'novel', 'admin'),
(3, 'Rừng Na Uy', 'Murakami Haruki', 'Rừng Na Uy là cuốn tiểu thuyết đã bán được 7 triệu bản ở Nhật Bản và có ảnh hưởng lớn tới nhiều thế hệ thanh niên Nhật từ hơn 20 năm nay. Cuốn sách được Nhà xuất bản Văn Học in lần đầu năm 1997 ở Việt Nam nhưng bị cắt xén nhiều đoạn \"nhạy cảm\". Bản dịch của Trịnh Lữ do Nhã Nam in năm 2006 là bản dịch đầy đủ và đã có tiếng vang đáng kể ở Việt Nam. Trên các mạng xã hội hiện nay có hàng trăm topic tranh luận về cuốn sách này cho thấy sự quan tâm của giới trẻ Việt Nam tới tác phẩm.', 'image/rungnauy.jpg', '2022-04-21 07:06:16', 'comic', 'admin'),
(4, 'Đắc Nhân Tâm', 'Dale Carnegie', 'Đắc Nhân Tâm (How to Win Friends and Influence People) được mệnh danh là quyển sách hay nhất, nổi tiếng nhất, bán chạy nhất và nó có tầm ảnh hưởng đi xa nhất mọi thời đại, Đắc Nhân Tâm của soạn giả Dale Carnegie là 1 quyển sách hay nên đọc để bạn biết về nghệ thuật thu phục lòng người và làm tất cả mọi người phải yêu mến mình.', 'image/sach-hay-dac-nhan-tam.jpg.webp', '2022-04-21 23:33:06', 'comic', 'admin'),
(5, 'Nhà giả kim', 'Paulo Coelho', 'Nhà giả kim (The Alchemist) của Paulo Coelho là một cuốn sách hay dành cho những người đã đánh mất đi ước mơ hoặc chưa bao giờ có nó. Nếu bạn đang cần tìm những cuốn sách nên đọc để thành công thì Nhà Giả Kim rất xứng đáng. Thành công như thế nào: thành công trong trong suy nghĩ và hành động.', 'image/sach-hay-nha-gia-kim.jpg.webp', '2022-04-21 23:33:43', 'comic', 'admin'),
(6, 'Tội Ác Và Hình Phạt', 'Fyodor Dostoevsky', 'Tội Ác Và Hình Phạt – Cuốn sách này nằm trong khá nhiều danh sách “những cuốn sách hàng đầu nên đọc trong suốt cuộc đời của bạn“. Và, sau khi cuốn sách này bị lãng quên trên giá sách của tôi trong một thời gian dài (tôi thực sự sở hữu nó trên Kindle, vì vậy về mặt kỹ thuật, tôi sở hữu hai bản), tôi đã đọc nó.', 'image/sach-hay-toi-ac-va-hinh-phat.jpg.webp', '2022-04-21 23:34:35', 'comic', 'admin'),
(7, 'Mỗi lần vấp ngã là một lần Trư', 'Nhà xuất bản thanh ', '“Mỗi lần vấp ngã là một lần Trưởng Thành” là cuốn sách hay về cuộc sống với nội dung theo kiểu kể chuyện và phân tích. Đây là cuốn sách giúp bạn trưởng thành hơn mà một lần vô tình ghé nhà sách, tôi bắt gặp tựa đề quá hay. Những câu chuyện trong đây như một dẫn chứng cụ thể và sống động trong cuộc sống thường ngày của mỗi chúng ta, trong đó có tôi và bạn đấy.', 'image/sach-hay-moi-lan-vap-nga-la-mot-lan-truong-thanh.jpg.webp', '2022-04-21 23:35:13', 'comic', 'admin'),
(8, 'Tuổi Trẻ Đáng Giá Bao Nhiêu?', 'Rosie Nguyễn', 'Tuổi trẻ đáng giá bao nhiêu? được tác giả chia làm 3 phần: HỌC, LÀM, ĐI. Nhưng tôi thấy cuốn sách còn thể hiện một phần thứ tư nữa, đó là ĐỌC. Hãy đọc sách, nếu bạn đọc sách một cách bền bỉ, sẽ đến lúc bạn bị thôi thúc không ngừng bởi ý muốn viết nên cuốn sách của riêng mình. Nếu tôi còn ở tuổi đôi mươi, hẳn là tôi sẽ đọc Tuổi trẻ đáng giá bao nhiêu? nhiều hơn một lần.”', 'image/sach-hay-tuoi-tre-dang-gia-bao-nhieu.jpg.webp', '2022-04-21 23:35:50', 'comic', 'admin'),
(9, 'Đời thay đổi khi chúng ta thay', 'Andrew Matthews', '“Đời thay đổi khi chúng ta thay đổi” (Being A Happy Teenager) đem lại cho độc giả những tình huống vô cùng thực tế, thậm chí là các câu chuyện vừa “nhỏ nhặt” lại vừa “quan trọng” với cách ứng xử khôn ngoan, thú vị và hài hước… Đồng thời, độc giả như bắt gặp chính mình trong đó, có những cạnh tranh, thất bại, và có những tình huống giao tiếp vừa chân thật lại vừa bổ ích.', 'image/sach-hay-doi-thay-doi-khi-chung-ta-thay-doi.jpg.webp', '2022-05-08 14:15:35', 'comic', 'admin'),
(10, 'Dạy Con Làm Giàu', 'Robert Kiyosaki', 'Cuốn sách dạy con: Cách suy nghĩ về đồng tiền sẽ quyết định tương lai và sự giàu có của bạn.  Có rất nhiều phương pháp để tôi và bạn cải thiện cuộc sống và thu nhập, nhưng với Dạy Con Làm Giàu của tác giả Robert Kiyosaki, bạn sẽ biết được chìa khóa nền tảng để trở nên giàu có hơn.  Nếu như bạn muốn có thật nhiều tiền, tiêu pha vô tư thì bạn hãy đọc Dạy Con Làm Giàu vì cuốn sách kinh tế này giới thiệu vô vàn kiến thức bổ ích về thị trường marketing và tình hình tài chính sau này của bạn.', 'image/sach-hay-day-con-lam-giau.jpg.webp', '2022-05-08 14:18:02', 'nonfiction', 'admin'),
(11, 'Nhà Lãnh Đạo không Chức Danh', 'Robin Sharma', 'Cho dù bạn làm gì trong tổ chức và cuộc sống hiện nay của bạn như thế nào, một thực tế quan trọng duy nhất là bạn hoàn toàn có khả năng thể hiện năng lực để làm lãnh đạo. Cho dù sự nghiệp hiện nay của bạn đang ở đâu, bạn vẫn luôn cần thể hiện các khả năng tột đỉnh của mình. Cuốn sách này sẽ hướng dẫn bạn làm thế nào để khai thác tối đa khả năng trong chính bạn, cũng như thay đổi cuộc sống và thế giới ở quanh bạn.', 'image/sach-hay-nha-lanh-dao-khong-chuc-danh.jpg.webp', '2022-05-08 14:19:30', 'nonfiction', 'admin'),
(12, 'Harry Potter', 'J. K. Rowling', 'Nội dung câu chuyện viễn tưởng từng gây sốt trên nhiều thị trường sách này đề cập về cuộc chiến của cậu bé phù thủy Harry Potter 1 mình chống lại một phù thủy hắc ám Chúa tể Voldemort, người đã giết cha mẹ cậu cũng như toàn bộ phù thủy chống lại hắn để thực hiện tham vọng làm chủ thế giới phù thủy và con người.', 'image/sach-hay-phieu-luu-harry-potter.jpg.webp', '2022-05-08 14:20:57', 'comic', 'admin'),
(13, 'Cho tôi xin 1 vé đi tuổi thơ', 'Nguyễn Nhật Ánh', 'Với cuốn “Cho tôi xin một vé đi tuổi thơ” của Nguyễn Nhật Ánh đã thổi hồn vào những nhân vật xuyên suốt trong câu chuyện của mình. Từ cậu cu Mùi muốn tập tành làm “nhà cách mạng tí hon”, có trí mường tượng phong phú luôn muốn thay đổi tất cả những điều tất yếu và nhàm chán trong cuộc sống thường ngày đến các triết lí nghe có lúc ngô nghê, đôi khi lại đầy sâu sắc của những đứa trẻ chưa đi hết một phần 8 cuộc đời.', 'image/sach-hay-cho-toi-xin-mot-ve-di-tuoi-tho.jpg.webp', '2022-05-08 14:23:13', 'novel', 'admin'),
(14, 'Đừng Bao Giờ Đi Ăn Một Mình', 'Keith Ferrazzi', 'Trong quyển sách Đừng bao giờ đi ăn một mình (Never Eat Alone), Ferrazzi cũng chỉ ra từng bước cách thức – và lý do – mà chính ông đã áp dụng để kết nối với hàng ngàn người là đồng nghiệp, bạn bè có tên trong số danh bạ, đó là những người ông đã giúp đỡ và ngược lại cũng chuẩn bị giúp đỡ ông.', 'image/dung-bao-gio-di-an-mot-minh-pdf.jpg.webp', '2022-05-08 14:25:32', 'novel', 'admin'),
(15, 'Bắt Trẻ Đồng Xanh ', 'J.D.Salinger', 'Bắt trẻ đồng xanh mượn lời của Holden Caufield để nhìn ra cuộc sống một cách hài hước và chân thực hơn. Nội dung của sách đa phần là những lời lảm nhảm hàng giờ liền của Holden, nhưng tôi thấy nó không hề nhàm chán mà ngược lại rất hài hước và lôi cuốn đến từng trang cuối.', 'image/sach-hay-bat-tre-dong-xanh.jpg.webp', '2022-05-08 14:27:11', 'novel', 'admin'),
(16, 'Ông Già Và Biển Cả', 'Hemingway', 'Trong tác phẩm này, ông đã triệt để sử dụng nguyên lý mà ông gọi là “tảng băng trôi”, chỉ mô tả một phần nổi còn lại bảy phần chìm, lúc mô tả sức mạnh của con cá, sự chênh lệch về lực lượng, về cuộc chiến đấu không cân sức giữa con cá hung dữ với ông già. Tác phẩm ca ngợi niềm tin, sức lao động và khát vọng của con người.', 'image/sach-hay-ong-gia-va-bien-ca.jpg.webp', '2022-05-08 14:28:42', 'science', 'admin'),
(17, 'Bố già', 'Mario Puzo', 'Thế giới ngầm được phản ánh trong tiểu thuyết “Bố già” (The Godfather) là sự gặp gỡ giữa 1 bên là ý chí cương cường và nền tảng gia tộc chặt chẽ theo truyền thống Mafia xứ Sicily với 1 bên là xã hội Mỹ nhập nhằng đen trắng, mảnh đất màu mỡ cho những cơ hội làm cho ăn bất chính hứa hẹn các món lợi kếch xù. Trong thế giới ấy, hình tượng Bố già được tác giả dày công khắc họa đã phát triển thành bức chân dung bất hủ trong lòng người đọc.', 'image/sach-hay-bo-gia.jpg.webp', '2022-05-08 14:29:45', 'novel', 'admin'),
(18, 'Cuốn Theo Chiều Gió', 'Gone With The Wind', 'Cuốn Theo Chiều Gió mang sức hấp dẫn mãnh liệt đến người trẻ tại Mỹ cũng như bạn trẻ toàn thế giới vì đây là cuốn tiểu thuyết tình yêu đặc sắc. Lạ kỳ thay, trong chiến tranh và các năm hậu chiến rất gian khổ, tình yêu lại luôn luôn chói ngời, nó trở nên là điểm tựa vững chắc giúp cho con người vượt qua chết chóc, đói khổ và sự hèn hạ…', 'image/sach-hay-cuon-theo-chieu-gio.jpg.webp', '2022-05-08 14:30:58', 'novel', 'admin');
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;