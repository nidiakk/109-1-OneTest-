-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-20 08:48:13
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- 資料表結構 `bulletin`
--

DROP TABLE IF EXISTS `bulletin`;
CREATE TABLE `bulletin` (
  `bid` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1.系上公告2.招生訊息\r\n3.企業徵才',
  `title` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `bulletin`
--

INSERT INTO `bulletin` (`bid`, `type`, `title`, `content`, `time`) VALUES
(1, 1, '109-1明新科大TOEIC校園考試報名至11/18截止', '109-1 明新科大 TOEIC校園考試 考試資訊\r\n\r\n報名時間：109/11/11~109/11/20\r\n\r\n考試日期：109/12/16 13:30\r\n\r\n成績查詢：2021/01/06\r\n\r\n考試費用：1200\r\n\r\n報名網址：\r\n\r\nhttps://www.examservice.com.tw/Home/preindex?setStoreID=B6102C\r\n\r\n特殊考生報名資格及參考資訊：\r\n\r\nhttp://www.toeic.com.tw/toeic_news_pub.jsp?type=8&pmid=133\r\n\r\n特殊考生請使用紙本報名，紙本報名表至鴻超樓514領取。\r\n\r\n若有疑問請洽詢：\r\n\r\n應用外語系    吳桂枝老師(分機1257) (鴻超樓513)\r\n\r\n語言教學中心 吳紘安老師(分機1289) (鴻超樓514)', '2020-10-23'),
(2, 2, '109學年度第二學期轉學生招生入學', '一、招生網頁：http://webs.must.edu.tw/ocmust104/index.php\r\n\r\n二、簡章下載：http://webs.must.edu.tw/ocmust104/index.php/2018-03-04-15-19-32\r\n\r\n三、報名時間：109/12/09(三) 09:00 - 110/01/15(五) 12:00止。\r\n\r\n四、報名方式：https://exam.must.edu.tw/examweb/ (一律採網路報名)\r\n\r\n五、招生年級：二、三年級。\r\n\r\n六、報名表及審查資料繳交期限：109/12/09(三) - 110/01/15(五) 15:00止。', '2020-11-13'),
(3, 1, '109-1學生證照獎勵線上申請，即日起至9/30前輸入截止', '【明新首頁-線上服務-學生專區-學生證照及畢業門檻審核系統 http://muststdsystem.must.edu.tw/】\r\n\r\n系統操作手冊詳附件。\r\n\r\n\r\n\r\n109-1證照獎勵金申請，以證照生效日落在【民109(2020)/2/1~民109(2020)/7/31】期間的證照為主，申請時限自即日起至109/9/30截止申請。\r\n\r\n無法進入系統者及新生，需先進入學生服務系統申請帳號密碼 https://sss.must.edu.tw/\r\n\r\n若輸入多次證照關鍵字仍查詢不到該證照，請持證照正本洽系辦公室詢問。\r\n\r\n證照的生效日若只標註年份、月份，則日期請點選當月的1號。例如證照生效日為2020年2月，請填2020/2/1。\r\n\r\n務必上傳清晰的照片檔(檔案大小限3MB)，若證照為正反面中英文者，請同時掃描中英文在同一個檔案，例如勞動部的乙級電腦軟體應用。\r\n\r\n若該類證照附有多張證明，請掃描在同一個檔，必須附到有生效日期的佐證資料。\r\n\r\n手機號碼及電子郵件請確實填寫，申請資料有問題時才能立即聯繫，系統退件時也才會收到EMAIL通知。\r\n\r\n相關辦法及表格請參考系網的證照專區。\r\nAttachments:\r\nAccess this URL (系統操作手冊)系統操作手冊\r\n', '2020-09-15'),
(4, 3, '數位時代_巨思文化股份有限公司--誠徵PHP工程師1名', '職缺資訊：PHP工程師\r\n\r\n工作內容：\r\n\r\n1. 公司網站開發\r\n\r\n2. 內部系統開發\r\n\r\n3. 協助新產品研發 \r\n\r\n工作經驗：0-3年皆可\r\n\r\n擅長工具：Linux、PHP、MySQL、JavaScript\r\n\r\n \r\n\r\n歡迎有興趣的同學自行投遞履歷\r\n\r\n職缺資訊與104人力銀行連結 https://www.104.com.tw/job/6byra?jobsource=company_job\r\n\r\n----------------------------------------\r\n\r\n \r\n\r\n聯絡窗口\r\n\r\n聯絡人：Penny Chen 陳小姐\r\n\r\n信箱：penny.chen@bnext.com.tw\r\n\r\n電話：02-8773-9808 分機304', '2020-08-06'),
(5, 3, '1111人力銀行提供最新期的-資管類精選職缺快報', '詳情請點徵才網址：http://www.1111.com.tw/119817/', '2020-07-28');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` varchar(40) NOT NULL,
  `pwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `pwd`) VALUES
('cindy', '00256'),
('vivin', '7452*'),
('coco', 'coco123'),
('jack', 'jack579');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`bid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
