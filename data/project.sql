-- drop database project;
-- create database project;
-- use project;
-- SELECT * FROM book b join category c on b.id_cat = c.id_cat;
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
    id_cat varchar(50) references caterogy(id_cat)
);
INSERT INTO `category` (`id_cat`, `name_cat`) VALUES
('comic', 'comic'),
('novel', 'novel'),
('poem', 'poem');
INSERT INTO `book` (`id_book`, `name_book`, `author`, `des`, `img`, `date`, `id_cat`) VALUES
(1, 'Sóng', 'Xuân Quỳnh', 'Sóng bắt đầu từ gió', 'image/song-xuan-quynh-01.jpg', '2022-04-21 14:04:02', 'poem'),
(2, 'Tôi là ai - và nếu vậy thì bao', 'Richard David Precht', 'Cuốn sách này không bàn những vấn đề kinh viện, mà nó bàn ngay vào ba câu hỏi mà con người luôn phải đối diện trong cuộc sống: Tôi có thể biết gì? Tôi nên làm gì? và Tôi có quyền hy vọng gì?', 'image/toilaai.jpg', '2022-04-21 14:05:36', 'novel'),
(3, 'Rừng Na Uy', 'Murakami Haruki', 'Rừng Na Uy là cuốn tiểu thuyết đã bán được 7 triệu bản ở Nhật Bản và có ảnh hưởng lớn tới nhiều thế hệ thanh niên Nhật từ hơn 20 năm nay. Cuốn sách được Nhà xuất bản Văn Học in lần đầu năm 1997 ở Việt Nam nhưng bị cắt xén nhiều đoạn \"nhạy cảm\". Bản dịch của Trịnh Lữ do Nhã Nam in năm 2006 là bản dịch đầy đủ và đã có tiếng vang đáng kể ở Việt Nam. Trên các mạng xã hội hiện nay có hàng trăm topic tranh luận về cuốn sách này cho thấy sự quan tâm của giới trẻ Việt Nam tới tác phẩm.', 'image/rungnauy.jpg', '2022-04-21 14:06:16', 'comic'),
(4, 'Đắc Nhân Tâm', 'Dale Carnegie', 'Đắc Nhân Tâm (How to Win Friends and Influence People) được mệnh danh là quyển sách hay nhất, nổi tiếng nhất, bán chạy nhất và nó có tầm ảnh hưởng đi xa nhất mọi thời đại, Đắc Nhân Tâm của soạn giả Dale Carnegie là 1 quyển sách hay nên đọc để bạn biết về nghệ thuật thu phục lòng người và làm tất cả mọi người phải yêu mến mình.', 'image/sach-hay-dac-nhan-tam.jpg.webp', '2022-04-22 06:33:06', 'comic'),
(5, 'Nhà giả kim', 'Paulo Coelho', 'Nhà giả kim (The Alchemist) của Paulo Coelho là một cuốn sách hay dành cho những người đã đánh mất đi ước mơ hoặc chưa bao giờ có nó. Nếu bạn đang cần tìm những cuốn sách nên đọc để thành công thì Nhà Giả Kim rất xứng đáng. Thành công như thế nào: thành công trong trong suy nghĩ và hành động.', 'image/sach-hay-nha-gia-kim.jpg.webp', '2022-04-22 06:33:43', 'comic'),
(6, 'Tội Ác Và Hình Phạt', 'Fyodor Dostoevsky', 'Tội Ác Và Hình Phạt – Cuốn sách này nằm trong khá nhiều danh sách “những cuốn sách hàng đầu nên đọc trong suốt cuộc đời của bạn“. Và, sau khi cuốn sách này bị lãng quên trên giá sách của tôi trong một thời gian dài (tôi thực sự sở hữu nó trên Kindle, vì vậy về mặt kỹ thuật, tôi sở hữu hai bản), tôi đã đọc nó.', 'image/sach-hay-toi-ac-va-hinh-phat.jpg.webp', '2022-04-22 06:34:35', 'comic'),
(7, 'Mỗi lần vấp ngã là một lần Trư', 'Nhà xuất bản thanh ', '“Mỗi lần vấp ngã là một lần Trưởng Thành” là cuốn sách hay về cuộc sống với nội dung theo kiểu kể chuyện và phân tích. Đây là cuốn sách giúp bạn trưởng thành hơn mà một lần vô tình ghé nhà sách, tôi bắt gặp tựa đề quá hay. Những câu chuyện trong đây như một dẫn chứng cụ thể và sống động trong cuộc sống thường ngày của mỗi chúng ta, trong đó có tôi và bạn đấy.', 'image/sach-hay-moi-lan-vap-nga-la-mot-lan-truong-thanh.jpg.webp', '2022-04-22 06:35:13', 'comic'),
(8, 'Tuổi Trẻ Đáng Giá Bao Nhiêu?', 'Rosie Nguyễn', 'Tuổi trẻ đáng giá bao nhiêu? được tác giả chia làm 3 phần: HỌC, LÀM, ĐI. Nhưng tôi thấy cuốn sách còn thể hiện một phần thứ tư nữa, đó là ĐỌC. Hãy đọc sách, nếu bạn đọc sách một cách bền bỉ, sẽ đến lúc bạn bị thôi thúc không ngừng bởi ý muốn viết nên cuốn sách của riêng mình. Nếu tôi còn ở tuổi đôi mươi, hẳn là tôi sẽ đọc Tuổi trẻ đáng giá bao nhiêu? nhiều hơn một lần.”', 'image/sach-hay-tuoi-tre-dang-gia-bao-nhieu.jpg.webp', '2022-04-22 06:35:50', 'comic');