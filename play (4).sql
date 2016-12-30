-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-12-28 12:55:55
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `play`
--

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `id_book` int(10) UNSIGNED NOT NULL,
  `product` varchar(255) NOT NULL,
  `total` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pay_way` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `book`
--

INSERT INTO `book` (`id_book`, `product`, `total`, `name`, `address`, `phone`, `email`, `pay_way`) VALUES
(1, 'DIY竹蟬共1個,', 995, 'wenlly', 'ww', 0, 'ww', 'cod'),
(2, 'DIY竹蟬共1個,', 995, 'wenlly', 'ee', 0, 'ee', 'cod'),
(3, 'DIY竹蟬共1個,', 995, 'wenlly', 'ww', 0, 'ww', 'cod'),
(4, 'DIY飛蜻蜓共6個,', 330, 'wenlly', 'Qqqqqqaaws', 9888, 'Ddd@', 'ATM'),
(5, '', 130, 'wenlly', 'qq', 0, 'qq', 'ATM'),
(6, 'DIY飛蜻蜓共15個,', 825, 'aa', 'aaa', 912345678, 'aa@gmail.com', 'ATM'),
(7, 'DIY飛蜻蜓共1個,', 255, 'wenlly', 'sf', 534, 'fdsf', 'cod'),
(8, 'DIY竹蟬共1個,', 35, 'qwe', '中原大學', 98765454, 'aa@gmail.com', 'ATM'),
(9, 'DIY飛蜻蜓共1個,', 55, 'wenlly', 'ww', 0, 'ww', 'cod'),
(10, 'DIY飛蜻蜓共10個,', 550, 'allen', '中北路200號', 912345678, 'allen@gmail.com', 'ATM'),
(11, 'DIY飛蜻蜓共10個,', 550, 'allen', '中北路200號', 912345678, 'eating@gmail.com', 'ATM'),
(12, 'DIY竹蟬共17個,', 5445, 'ddd', 'dd', 0, 'dd', 'cod');

-- --------------------------------------------------------

--
-- 資料表結構 `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `p_product` varchar(255) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_amount` varchar(10) NOT NULL,
  `p_username` varchar(255) NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `cart`
--

INSERT INTO `cart` (`c_id`, `p_product`, `p_price`, `p_amount`, `p_username`, `p_date`) VALUES
(49, '竹蟬', 200, '44', 'ttt', '2016-12-15'),
(58, 'DIY飛蜻蜓', 55, '1', 'ttt', '2016-12-16'),
(59, 'DIY竹蟬', 35, '9', 'qaz', '2016-12-16'),
(61, 'DIY飛蜻蜓', 55, '6', 'qaz', '2016-12-16'),
(66, 'DIY竹蟬', 35, '19', 'ddd', '2016-12-17');

-- --------------------------------------------------------

--
-- 資料表結構 `func`
--

CREATE TABLE `func` (
  `use_id` int(11) NOT NULL,
  `use_name` varchar(225) NOT NULL,
  `need` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `func`
--

INSERT INTO `func` (`use_id`, `use_name`, `need`) VALUES
(1, 'water', 1000),
(2, 'seeds', 3000),
(3, 'farmer', 5000);

-- --------------------------------------------------------

--
-- 資料表結構 `learn`
--

CREATE TABLE `learn` (
  `lesson` int(10) NOT NULL,
  `L_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `point` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ex` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `learn`
--

INSERT INTO `learn` (`lesson`, `L_name`, `point`, `ex`) VALUES
(1, '植物的身體-花', '一朵花通常可以分為:花萼-花瓣-花蕊(雄蕊-雌蕊)......\r\n\r\n', '1.花萼的功能:保護花瓣。\r\n2.花瓣的功能:吸引昆蟲。\r\n3.雄蕊-雌蕊的功能:繁衍後代。 \r\n\r\n凡是具有上面四個構造的花,稱為"完全花";如果缺少其中一個部份,即稱為"不完全花"。\r\n\r\n缺少雄蕊或雌蕊的花,又稱為"單性花" 如木瓜-絲瓜。'),
(2, '植物的身體-根', '植物的根:長在地底下，緊緊抓住泥土，使植物固定在土裡，支持植物體站立在地面上，不受大風、大雨的影響......\r\n', '根可以分成:軸根以及鬚根。軸根:有些植物的根中間較粗，旁邊還有細細的根。鬚根:有些植物的根都是細細的，長得好像鬍鬚。 ');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id_num` int(255) UNSIGNED NOT NULL,
  `id` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `name_1` varchar(225) NOT NULL,
  `birth` date NOT NULL,
  `old` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `name_2` varchar(255) NOT NULL,
  `coin` bigint(20) NOT NULL,
  `touch` int(20) NOT NULL,
  `col` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id_num`, `id`, `pw`, `name_1`, `birth`, `old`, `sex`, `name_2`, `coin`, `touch`, `col`) VALUES
(1, 'ddd', 'ddd123', 'dd', '2016-11-03', 5, '0', 'dd', 66000, 0, 1),
(3, 'qaz', 'qaz', 'qaz', '2016-11-11', 11, '0', 'qaz', 105500, 1, 1),
(4, 'wenlly', '1234', 'wenlly', '2016-11-27', 12, '0', 'mother', 4001, 7, 3),
(5, 'qwer', 'qwer', 'QQ', '2016-12-01', 12, '0', 'QWQ', 0, 0, 0),
(7, '4546', '45', '45', '2016-12-10', 13, 'gitl', '45', 0, 0, 0),
(8, ' ', '123456', '吳冠興', '1995-06-01', 21, 'boy', '吳冠興的爸爸', 199982000, 15, 0),
(9, 'ttt', '12345', 'TT', '2005-11-11', 11, 'boy', 'TtT', 3000, 13, 0),
(13, 'bc', 'bc123', 'bc', '2016-12-07', 8, 'girl', 'bcm', 500, 2, 0),
(14, 'aa', 'aa', 'Aa', '1999-11-11', 5, 'girl', 'wenlly', 150000, 19, 1),
(17, 'tt', 'tt', 'uuu', '2009-12-16', 10, 'girl', 'go', 176000, 19, 0),
(18, 'qwe', 'qwe', 'any', '2010-02-05', 6, 'boy', 'wenlly', 87000, 0, 1),
(19, 'edc ', 'edc', '荷軒', '2016-12-16', 5, 'girl', 'nu', 0, 0, 0),
(23, 'allen', 'allen', 'allen', '1999-11-11', 10, 'boy', 'wenlly', 73000, 0, 1),
(25, 'eating', 'eating', 'eating', '2000-11-11', 10, 'girl', 'wenlly', 0, 1, 0),
(26, 'hh', 'hh', 'hj', '2016-12-06', 5, 'boy', 'nu', 0, 0, 0),
(27, 'hh', 'hh', 'fg', '2016-12-14', 5, 'boy', 'nu', 0, 0, 0),
(28, 'mm', 'mm', 'mm', '2015-12-17', 5, 'boy', 'nu', 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `id_P` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(6) NOT NULL,
  `amount` int(4) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`id_P`, `name`, `price`, `amount`, `category`, `img`) VALUES
(1, 'DIY飛蜻蜓', 55, 150, '組裝方便，會打結就會做。\r\n組裝好，一拉繩竹蜻蜓就會飛起來了。', 'p1.jpeg'),
(2, 'DIY竹蟬', 35, 200, '轉一轉就能傳出如蟬的叫聲，是生物課的好幫手。', 'p2.jpeg'),
(3, 'DIY彩繪手搖鼓', 60, 140, '可用水彩，彩色筆上色，做出屬於自己的手搖鼓。', 'p3.jpeg'),
(4, '劍玉 劍球 (原木色)', 100, 55, '靈活手腕運動 \r\n手部技巧訓練 \r\n大人小孩皆適合 ', 'p4.jpeg');

-- --------------------------------------------------------

--
-- 資料表結構 `question`
--

CREATE TABLE `question` (
  `Q_id` int(10) UNSIGNED NOT NULL,
  `que` varchar(255) NOT NULL,
  `A` varchar(255) NOT NULL,
  `B` varchar(255) NOT NULL,
  `C` varchar(255) NOT NULL,
  `D` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `teacher_id` varchar(11) NOT NULL,
  `err` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `question`
--

INSERT INTO `question` (`Q_id`, `que`, `A`, `B`, `C`, `D`, `ans`, `teacher_id`, `err`) VALUES
(1, '5a*3b=?', '12aa', '15ab', '12bb', '16ab', 'B', '123', '7'),
(2, '三角形有三個角A 45 B 45 C多少度?', '45', '60', '90', '120', 'C', '123', '15'),
(3, '哪一個是2的倍數?', '3', '5', '11', '8', 'D', 'teacher', '9'),
(4, '不是生命三大要素', '肥料', '空氣', '陽光', '水', 'A', 'teacher', '5'),
(5, '哪個是奇數', '6', '8', '5', '4', 'C', 'teacher', '6'),
(15, '花園裡有 32452 朵紅花、4321 朵黃花，花園裡總共有幾朵花？', '6773', '33773', '36773', '36774', 'C', 'teacher', '15'),
(19, '玩具公司去年賣出 104152 個機器人，今年賣出 94523 個機器人，二年總共賣出多少個機器人？ ', '198675', '198235', '189674', '198765', 'A', '123', '6'),
(20, '哪一個不是根的功能', '吸收', '排便', '運輸', '儲藏養分', 'B', '123', '16'),
(21, '哪個國家不位於台灣周圍？', '中國', '日本', '菲律賓', '印度', 'D', '123', '4'),
(22, '桌子上有 5/6 條巧克力，妹妹吃了 3/6 條巧克力，桌上還有幾條巧克力？ ', '5/6', '4/6', '3/6', '2/6', 'D', 'teacher', '9'),
(23, '2+10=?', '3', '12', '8', '16', 'B', '123', '6'),
(24, '『 泰 』的注音是什麼？', 'ㄊㄞ', 'ㄊㄞˊ', 'ㄊㄞˇ', 'ㄊㄞˋ', 'D', '123', '7'),
(25, '哪個程式語言只能寫網頁', 'PHP', 'JAVA', 'C#', 'Python', 'A', '123', '8'),
(26, '在PHP語言中，哪個是正確宣告變數的方式', '$text = "";', 'var text = "";', '%text = "";', '!text = "";', 'A', 'teacher', '7'),
(27, '哪個程式語言速度最快', 'JAVA', 'C++', 'C', 'C#', 'B', '123', '7'),
(28, '哪一個不是沿海地帶可看到的?', '河口', '潮間帶', '水庫', '海岸', 'C', '123', '2'),
(30, '下列哪個不是植物的營養器官?', '花', '葉', '根', '莖', 'A', '123', '10'),
(31, '『 芾 』的注音是什麼？', 'ㄈㄟ', 'ㄈㄟˊ\r\n', 'ㄈㄟˇ', 'ㄈㄟˋ', 'D', '123', '9'),
(34, '1+1=?', '2', '1', '5', '6', 'A', '123', '4'),
(36, '2+7=?', '9', '10', '11', '12', 'A', '123', '2'),
(37, '13+5=?', '14', '15', '17', '18', 'D', '123', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `teacher`
--

CREATE TABLE `teacher` (
  `t_num` int(255) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `t_pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `teacher`
--

INSERT INTO `teacher` (`t_num`, `teacher_id`, `t_pw`) VALUES
(1, 'teacher', '1234'),
(2, '123', '123');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- 資料表索引 `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- 資料表索引 `learn`
--
ALTER TABLE `learn`
  ADD PRIMARY KEY (`lesson`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_num`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_P`);

--
-- 資料表索引 `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Q_id`);

--
-- 資料表索引 `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_num`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用資料表 AUTO_INCREMENT `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id_num` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- 使用資料表 AUTO_INCREMENT `question`
--
ALTER TABLE `question`
  MODIFY `Q_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- 使用資料表 AUTO_INCREMENT `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_num` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
