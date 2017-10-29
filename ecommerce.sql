-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 04:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `imgurl` varchar(200) NOT NULL,
  `price` float(6,2) NOT NULL,
  `discount` int(2) NOT NULL,
  `quantity` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `email`, `name`, `imgurl`, `price`, `discount`, `quantity`) VALUES
(27, 'sachin.sharma', 'Harry Potter and The Philosophers Stone', 'img/Harry-Potter-And-The-Philosopher-SDL016297875-1-46888.jpg', 250.00, 10, 3),
(28, 'jain.abhishek', 'The Alchemist', 'img/624303691271_1-ed95c.jpg', 350.00, 55, 4),
(29, 'jain.abhishek', 'Harry Potter and The Philosophers Stone', 'img/Harry-Potter-And-The-Philosopher-SDL016297875-1-46888.jpg', 250.00, 10, 4),
(30, 'jain.abhishek', 'Harry Potter and The Deathly Hallows', 'img/Harry-Potter-and-the-Deathly-SDL966048963-1-244b5.jpg', 1781.00, 15, 3),
(31, 'jain.abhishek', 'A Manifesto For Change', 'img/A-Manifesto-for-Change-A-SDL733749953-1-6b256.jpg', 250.00, 22, 1),
(32, 'sachin.sharma', 'The Alchemist', 'img/624303691271_1-ed95c.jpg', 350.00, 55, 1),
(33, 'jain.abhishek@11', 'Second Chance Of Love', 'img/Second-Chance-at-Love.jpg', 175.00, 25, 2),
(34, 'jain.abhishek@11', 'Love and Misadventure', 'img/Love-Misadventure.jpg', 499.00, 27, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user id` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user id`, `password`) VALUES
('abhishekjain.vs', 'AbhiJain@2'),
('sachin.sharma', '1230'),
('sachin.sharma', '1230');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(60) NOT NULL,
  `author` varchar(60) CHARACTER SET hp8 NOT NULL,
  `price` float(6,2) NOT NULL,
  `publisher` varchar(60) NOT NULL,
  `pages` int(4) NOT NULL,
  `language` varchar(10) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `subgenre` varchar(40) NOT NULL,
  `release date` date NOT NULL,
  `popular` float(2,1) NOT NULL,
  `offers` int(2) NOT NULL,
  `imgurl` varchar(200) NOT NULL,
  `discounted_price` float(6,2) NOT NULL,
  `quantity` int(3) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `b_name`, `author`, `price`, `publisher`, `pages`, `language`, `genre`, `subgenre`, `release date`, `popular`, `offers`, `imgurl`, `discounted_price`, `quantity`) VALUES
(1, 'The Alchemist', 'Paulo Coelho', 350.00, 'Harper Collins', 197, 'English', 'Fiction', 'LITERATURE, FICTION', '1988-07-07', 4.5, 55, 'img/624303691271_1-ed95c.jpg', 157.50, 8),
(2, 'Adultery', 'Paulo Coelho', 299.00, 'Vintage Books', 272, 'English', 'Fiction', 'LITERATURE, FICTION', '2014-08-19', 4.1, 34, 'img/Adultery-SDL632173149-1-9e777.jpg', 198.00, 10),
(3, 'To Kill A Mocking Bird', 'Harper Lee', 399.00, 'Arrow', 320, 'English', 'Fiction', 'LITERATURE, FICTION', '1960-07-11', 4.3, 34, 'img/684078710525_1-e812b.jpg', 265.00, 14),
(4, 'Inferno', 'Dan Brown', 399.00, 'Corgi', 624, 'English', 'Fiction', 'LITERATURE, FICTION', '2013-05-14', 4.5, 34, 'img/Inferno-Pb-SDL362006170-1-4b106.jpg', 265.00, 10),
(5, 'As a Man Thinketh', 'James Allen', 627.00, 'Createspace Independent Publishing', 64, 'English', 'Self-help', 'MOTIVATIONAL, INSPIRATIONAL', '1903-01-01', 4.0, 16, 'img/As-a-Man-Thinketh-in-SDL592345023-1-f6bd6.jpg', 527.00, 10),
(6, 'Life Decisions', 'Wanda Phillips', 1565.00, 'A-RIA Publishing', 154, 'English', 'Self-help', 'MOTIVATIONAL, INSPIRATIONAL', '2011-07-12', 4.0, 6, 'img/Life-Decisions-SDL809742540-1-c0175.jpg', 1465.00, 10),
(7, 'The Jungle Book', 'Rudyard Kipling', 250.00, 'Campfire Graphic Novels', 300, 'English', 'Fiction', 'COMICS, GRAPHIC NOVELS', '1894-01-01', 4.0, 31, 'img/JunglebookCover.jpg', 173.00, 10),
(9, 'Oliver Twist', 'Charles Dickens', 230.00, 'Campfire Graphic Novels', 445, 'English', 'Fiction', 'COMICS, GRAPHIC NOVELS', '1838-04-01', 4.7, 25, 'img/Oliver-Twist.jpg', 173.00, 10),
(10, 'Complete Prose', 'Allen Woody', 450.00, 'PAN MACMILLAN', 9999, 'English', 'Fiction', 'HUMOR', '1998-01-01', 3.8, 25, 'img/Complete-Prose.jpg', 338.00, 10),
(11, 'Adulting', 'Kelly Williams Brown', 1353.00, 'Grand Central Publishing', 288, 'English', 'Fiction', 'HUMOR', '2013-05-07', 4.0, 7, 'img/Adulting-How-to-Become-a-.jpg', 1253.00, 10),
(12, 'Life Some Rhyme No Reason', 'Joyce Marie Taylor', 1271.00, 'Createspace', 284, 'English', 'Fiction', 'HUMOR', '2008-02-23', 3.9, 8, 'img/Life-Some-Rhyme-No-Reason.jpg', 1171.00, 10),
(13, 'Second Chance Of Love', 'Ruchita Mishra', 175.00, 'Harlequin India', 264, 'English', 'Fiction', 'ROMANCE', '2013-12-14', 3.8, 25, 'img/Second-Chance-at-Love.jpg', 132.00, 8),
(14, 'Love and Misadventure', 'Lang Leav', 499.00, 'Simon & Schuster', 326, 'English', 'Fiction', 'ROMANCE', '2014-11-04', 4.1, 27, 'img/Love-Misadventure.jpg', 364.00, 9),
(15, 'Cover Of Night', 'Linda Howard', 779.00, 'Ballantine Books', 428, 'English', 'Fiction', 'ROMANCE', '2006-01-01', 3.6, 13, 'img/Cover-of-Night-SDL932344481-1-0ca45.jpg', 679.00, 10),
(16, 'A Journey', 'Narendra Modi', 295.00, 'Rupa & Company', 112, 'English', 'Fiction', 'POETRY', '2014-01-01', 3.8, 31, 'img/A-Journey-Poems-Of-Narendra-SDL030586480-1-641e6.jpg', 204.00, 10),
(17, 'Days Of Future Past', 'Lawrence J. Dixon', 3529.00, 'Createspace', 176, 'English', 'Fiction', 'POETRY', '1981-01-01', 4.3, 3, 'img/Days-of-Future-Past-SDL100413161-1-fb994.jpg', 3429.00, 10),
(18, 'Collected Poems', 'Patrick Kavanagh', 1709.00, 'W. W. Norton & Company', 224, 'English', 'Fiction', 'POETRY', '2009-04-13', 4.5, 6, 'img/Collected-Poems.jpg', 1609.00, 10),
(20, 'The Martian', 'Andy Weir', 299.00, 'Del Ray', 384, 'English', 'Fiction', 'FANTASY', '2011-05-03', 4.3, 19, 'img/The-Martian-Film-Tie-In-SDL794426149-1-16bac.jpg', 242.00, 10),
(21, 'The Martian', 'Andy Weir', 399.00, 'Del Ray', 369, 'English', 'Fiction', 'FANTASY', '2015-10-12', 4.3, 32, 'img/The-Martian-Paperback-English-2014-SDL086926920-1-6eb02.jpg', 272.00, 10),
(22, 'Harry Potter and The Philosophers Stone', 'J. K. Rowling', 250.00, 'Manjul Publishing House', 314, 'English', 'Fiction', 'FANTASY', '2004-06-16', 4.7, 10, 'img/Harry-Potter-And-The-Philosopher-SDL016297875-1-46888.jpg', 225.00, 1),
(23, 'Harry Potter and The Order Of Phoenix', 'J. K. Rowling', 699.00, 'Bloomsburry Publishing', 768, 'English', 'Fiction', 'FANTASY', '2003-06-21', 4.6, 1, 'img/Harry-Potter-and-the-Order-SDL499880297-1-66f8f.jpg', 692.00, 10),
(24, 'Harry Potter and The Deathly Hallows', 'J. K. Rowling', 1781.00, 'Bloomsburry Publishing', 608, 'English', 'Fiction', 'FANTASY', '2007-06-21', 4.9, 15, 'img/Harry-Potter-and-the-Deathly-SDL966048963-1-244b5.jpg', 1591.00, 7),
(25, 'Learn to Earn', 'Peter Lynch', 499.00, 'Simon & Schuster', 272, 'English', 'Academics', 'COMMERCE', '1995-01-25', 3.7, 26, 'img/Learn-To-Earn.jpg', 370.00, 10),
(26, 'Java Projects', 'Bpb', 313.00, 'Bpb Publication', 348, 'English', 'Academics', 'COMPUTER, INTERNET', '2012-03-12', 4.1, 0, 'img/Java-Projects.jpg', 313.00, 10),
(27, 'Mein Kampf', 'Adolf Hitler', 399.00, 'Jaico Publishing House', 636, 'English', 'Academics', 'HUMANITY', '2009-04-14', 4.0, 30, 'img/Mein-Kampf.jpg', 279.00, 10),
(28, 'Lessons For Life', 'Stalin Malhotra', 155.00, 'Cambridge University', 286, 'English', 'Academics', 'HUMANITY', '2008-08-19', 3.8, 10, 'img/Lessons-For-Life-2Nd-Edition.jpg', 140.00, 10),
(29, 'Diary Of A Wimpy Kid', 'Jeff Kinney', 299.00, 'Penguin Books', 224, 'English', 'Children & Young Adult', 'CHILDREN FICTION', '2007-09-13', 4.7, 30, 'img/Diary-Of-A-Wimpy-Kid.jpg', 209.00, 10),
(30, 'Frankenstein', 'Mary W. Shelly', 175.00, 'OM Books International', 240, 'English', 'Children & Young Adult', 'CHILDREN FICTION', '2014-06-16', 4.2, 25, 'img/Om-Illustrated-Classics-Frankenstein.jpg', 132.00, 10),
(31, 'Flawed', 'Cecelia Ahern', 350.00, 'Harper Collins', 400, 'English', 'Children & Young Adult', 'CHILDREN FICTION', '2016-01-13', 3.8, 23, 'img/Flawed.jpg', 270.00, 10),
(32, 'Peppa Pig Theatre Activity', 'LadyBird', 250.00, 'Ladybird Books', 320, 'English', 'Children & Young Adult', 'ACTIVITY', '2013-03-14', 4.4, 20, 'img/Peppa-Pig-Theatre-Activity.jpg', 199.00, 10),
(33, 'First Activity Book', 'Dreamland', 100.00, 'Dreamland Publication', 64, 'English', 'Children & Young Adult', 'ACTIVITY', '2012-01-25', 3.9, 25, 'img/first-Activity-Book.jpg', 75.00, 10),
(34, 'Mathematical FunGames and Puzzles', 'Jack Frohlichstein', 295.00, 'Dover Publication', 320, 'English', 'Children & Young Adult', 'ACTIVITY', '2011-03-14', 4.1, 23, 'img/MATHEMATICAL-FUN-GAMES-AND-PUZZLES.jpg', 227.00, 9),
(35, 'My Horse Coloring Book', 'John Green', 491.00, 'Dover Publication', 48, 'English', 'Children & Young Adult', 'ACTIVITY', '2012-03-25', 4.3, 20, 'img/My-Horse-Coloring-Book.jpg', 391.00, 10),
(37, 'Santa Claws', 'Mark Kramer', 1767.00, 'Outskirts Press', 26, 'English', 'Children & Young Adult', 'CHILDREN NON-FICTION', '1996-04-12', 4.2, 6, 'img/Santa-Claws.jpg', 1667.00, 10),
(38, 'Water Power', 'Ian F. Mahaney', 2737.00, 'Powerkids Press', 28, 'English', 'Children & Young Adult', 'CHILDREN NON-FICTION', '2010-08-20', 3.9, 4, 'img/Water-Power.jpg', 2637.00, 10),
(39, 'Learn To Draw Ancient Times', 'Sandy Phan', 520.00, 'Walter Foster Publication', 40, 'English', 'Children & Young Adult', 'CHILDREN NON-FICTION', '2014-01-02', 4.2, 19, 'img/Learn-to-Draw-Ancient-Times.jpg', 420.00, 10),
(40, 'The Frog Prince', 'Macaw', 60.00, 'Macaw Books Delhi', 182, 'English', 'Children & Young Adult', 'KNOWLEDGE', '1986-06-01', 3.4, 0, 'img/The-Frog-Prince.jpg', 60.00, 10),
(41, 'Wonder', 'R. J. Palacio', 399.00, 'Corgi Children', 336, 'English', 'Children & Young Adult', 'KNOWLEDGE', '2012-02-14', 4.0, 33, 'img/Wonder.jpg', 269.00, 10),
(42, 'Facts and More Science', 'Macaw Books', 75.00, 'Macaw Books Delhi', 265, 'English', 'Children & Young Adult', 'KNOWLEDGE', '2010-07-18', 3.8, 0, 'img/Facts-and-More-Science.jpg', 75.00, 10),
(43, 'Twilight', 'Stephenie Meyer', 499.00, 'Atom', 464, 'English', 'Children & Young Adult', 'ACTION, ADVENTURE', '2007-08-14', 4.1, 25, 'img/Twilight.jpg', 374.00, 10),
(44, 'The Book Thief', 'Markus Zusak', 499.00, 'Definitions', 592, 'English', 'Children & Young Adult', 'ACTION, ADVENTURE', '2008-07-15', 4.0, 36, 'img/Book-Thief.jpg', 319.00, 10),
(45, 'The Underwater Planet', 'Geronimo Stilton', 295.00, 'Scholastic Paperback', 128, 'English', 'Children & Young Adult', 'ACTION, ADVENTURE', '2016-01-26', 4.0, 32, 'img/The-Underwater-Planet.jpg', 201.00, 10),
(46, 'Break The Code', 'Bud Johnson', 648.00, 'Dover Publication', 84, 'English', 'Children & Young Adult', 'CRAFTS', '2008-04-21', 3.5, 15, 'img/Break-the-Code.jpg', 548.00, 10),
(47, 'Maze Adventure', 'Andy Peters', 395.00, 'Arcturus Publishing', 128, 'English', 'Children & Young Adult', 'CRAFTS', '2010-08-14', 4.0, 11, 'img/Maze-Adventure.jpg', 379.00, 10),
(48, 'Angels Coloring Books', 'Marty Noble', 413.00, 'Dover Publication', 32, 'English', 'Children & Young Adult', 'PAINTING, ARTS', '2015-08-27', 3.8, 24, 'img/Angels-Coloring-Book.jpg', 313.00, 10),
(49, 'Charles Darwin', 'John Green', 413.00, 'Dover Publication', 32, 'English', 'Children & Young Adult', 'PAINTING, ARTS', '1854-11-24', 4.0, 24, 'img/Charles-Darwin.jpg', 313.00, 10),
(50, 'Little Flowers Stained Glass', 'John Green', 256.00, 'Dover Publication', 8, 'English', 'Children & Young Adult', 'PAINTING, ARTS', '1991-01-07', 4.6, 39, 'img/Little-Flowers-Stained-Glass.jpg', 156.00, 10),
(51, 'My First Book of ABC', 'OM Books', 295.00, 'OM Books International', 28, 'English', 'Children & Young Adult', 'PAINTING, ARTS', '2008-04-14', 4.6, 15, 'img/My-First-Book-Abc.jpg', 250.00, 10),
(52, 'GGSIPU Engineering Entrance Exam guide', 'RPH Editorial Board', 440.00, 'Ramesh Publishing House', 680, 'English', 'Competitive', 'ENGINEERING', '1998-11-10', 4.3, 26, 'img/GGSIPU-Engineering-Entrance-Exam-Guide-SDL306718966-1-d29df.jpg', 326.00, 8),
(53, 'VIT Engineering', 'Arihant Experts', 345.00, 'Arihant', 450, 'English', 'Competitive', 'ENGINEERING', '2009-08-15', 4.5, 18, 'img/VIT-VELLORE-EDGE-SOLVED-PAPERS-SDL718413037-1-e8e3b.jpg', 285.00, 10),
(54, 'ACE Biology', 'Dr. Ramesh C. Narang', 700.00, 'Disha Publication', 872, 'English', 'Competitive', 'MEDICAL', '2008-04-14', 4.7, 33, 'img/ACE-Biology-for-NEET-AIPMT-SDL023330468-1-272de.jpg', 466.00, 10),
(55, 'Solved Paper For BVP', 'Arihant Experts', 335.00, 'Arihant Publications', 470, 'English', 'Competitive', 'MEDICAL', '2015-10-08', 4.2, 27, 'img/Solved-Papers-2000-2015-for-SDL162822169-1-38c87.jpg', 239.00, 10),
(56, 'AIPVT', 'RPH Editorial Board', 340.00, 'Ramesh Publishing House', 532, 'English', 'Competitive', 'MEDICAL', '2011-11-12', 4.3, 36, 'img/All-India-Pre-Veterinary-Test-SDL633444160-1-2fde3.jpg', 219.00, 10),
(57, 'Retail Banking', 'IIBF', 300.00, 'Macmillan', 328, 'English', 'Competitive', 'BANKING', '2010-08-18', 4.7, 16, 'img/RETAIL-BANKING-CAIIB-EXAMINATION-SDL409297867-1-3c022.jpg', 251.00, 10),
(58, 'Bank Interviews', 'Gautam Majumdar', 135.00, 'Arihant', 184, 'English', 'Competitive', 'BANKING', '2015-11-13', 4.8, 29, 'img/Banking-Interviews-SDL596930225-1-2f86f.jpg', 76.00, 10),
(59, 'Magical Book Series', 'K. Kundan', 285.00, 'BSC Publication', 274, 'English', 'Competitive', 'BANKING', '2016-02-24', 4.1, 2, 'img/Magical-Book-Series-Objective-Banking-SDL714303995-1-0f89d.jpg', 280.00, 10),
(60, 'General Science', 'Arihant Experts', 210.00, 'Arihant', 264, 'English', 'Competitive', 'UPSC', '2012-12-04', 4.7, 35, 'img/Magbook-General-Science-SDL770924790-1-b20ed.jpg', 136.00, 10),
(61, 'Study Guide UPSC', 'GKP', 315.00, 'GK Publisher', 375, 'English', 'Competitive', 'UPSC', '2011-11-07', 4.6, 27, 'img/Study-Guide-UPSC-Central-Armed-SDL558289846-1-86d6c.jpg', 231.00, 10),
(62, 'The Secret Letters', 'Robin Sharma', 250.00, 'Harper Collins', 210, 'English', 'Self-help', 'MOTIVATIONAL, INSPIRATIONAL', '1997-01-01', 4.5, 23, 'img/The-Secret-Letters-A-Fable-SDL542792194-1-4b45a.jpg', 192.00, 10),
(63, 'A Journey Within', 'Dr. Yeremiyah Ben Yisrael', 3814.00, 'Createspace', 200, 'English', 'Self-help', 'MOTIVATIONAL, INSPIRATIONAL', '2013-09-24', 4.5, 3, 'img/A-Journey-Within-Becoming-Better-SDL379573988-1-41290.jpg', 3714.00, 10),
(64, 'Seven Spiritual Laws of Success', 'Deepak Chopra', 194.00, 'Hayhouse India', 250, 'English', 'Self-help', 'SPIRITUAL, MEDITATION', '1994-01-01', 4.0, 30, 'img/Seven-Spiritual-Laws-Of-Success-SDL366413934-1-3d780.jpg', 139.00, 10),
(65, 'The Power Of Dreams', 'Susan L. Morgan', 2055.00, 'Createspace', 240, 'English', 'Self-help', 'SPIRITUAL, MEDITATION', '2011-06-30', 4.3, 5, 'img/The-Power-of-Dreams-Dream-SDL596368885-1-12ce4.jpg', 1955.00, 10),
(66, 'Makanda Dreams', 'Steve Eberhart', 1765.00, 'Createspace', 232, 'English', 'Self-help', 'SPIRITUAL, MEDITATION', '2010-02-24', 4.3, 6, 'img/Makanda-Dreams-A-Spiritual-Mystery-SDL219547854-1-45114.jpg', 1665.00, 10),
(67, 'The History Of Magick', 'G. Naudaeus', 2157.00, 'Createspace', 270, 'English', 'Self-help', 'SPIRITUAL, MEDITATION', '2012-02-13', 4.3, 5, 'img/The-History-of-Magick-by-SDL357279313-1-96e7b.jpg', 2057.00, 10),
(68, 'Eating Disorders', 'Gayle Schneider', 981.00, 'Createspace', 36, 'English', 'Self-help', 'EATING DISORDER', '2012-06-17', 4.5, 10, 'img/Eating-Disorders-A-Female-and-SDL424994017-1-d8453.jpg', 881.00, 10),
(69, 'Fastest Way To Lose Weight', 'Fia Furmont', 883.00, 'Createspace', 24, 'English', 'Self-help', 'EATING DISORDER', '2015-08-05', 4.4, 11, 'img/Fastest-Way-to-Lose-Weight-SDL096223291-1-ee429.jpg', 783.00, 10),
(70, 'Fat Boy Thin Man', 'Michael Prager', 2057.00, 'Fisherblue Press', 142, 'English', 'Self-help', 'EATING DISORDER', '2010-07-21', 4.3, 5, 'img/Fat-Boy-Thin-Man-SDL731331371-1-ddc07.jpg', 1957.00, 10),
(71, 'To The Moon and Back', 'MS Meaghan Anne Feran', 1570.00, 'Createspace', 190, 'English', 'Self-help', 'EATING DISORDER', '2012-03-14', 4.0, 6, 'img/To-the-Moon-and-Back-SDL625824670-1-66dfa.jpg', 1470.00, 10),
(72, 'Evernote', 'M. J. Brown', 883.00, 'Createspace', 110, 'English', 'Self-help', 'MOOD DISORDER', '2014-10-24', 4.2, 11, 'img/Evernote-Time-Management-with-Evernote-SDL208815630-1-d4b99.jpg', 783.00, 10),
(73, 'Grocery Lists Book', 'R. J. Foster', 785.00, 'Createspace Independent Publishing', 104, 'English', 'Self-help', 'MOOD DISORDER', '2015-04-05', 4.1, 13, 'img/Grocery-Lists-Book-Stay-Organized-SDL267564397-1-5a103.jpg', 685.00, 10),
(74, 'A Thousand Splendid Suns', 'Khaled Hosseini', 499.00, 'Bloomsburry Publishing', 418, 'English', 'Non-Fiction', 'BIOGRAPHY', '2007-05-22', 4.4, 26, 'img/ATSS-f9c07.jpg', 370.00, 10),
(75, 'Playing It My Way', 'Sachin Tendulkar', 499.00, 'Hoddeu & Stoughton', 486, 'English', 'Non-Fiction', 'BIOGRAPHY', '2014-11-05', 4.4, 35, 'img/Playing-It-My-Way-My-SDL271829870-1-f5101.jpg', 324.00, 10),
(76, 'Steve Jobs', 'Walter Isaacson', 550.00, 'Brown Little', 592, 'English', 'Non-Fiction', 'BIOGRAPHY', '2011-10-24', 4.3, 43, 'img/Steve-Jobs-Pb-The-Exclusive-SDL467223592-1-e2175.jpg', 311.00, 10),
(77, 'A Manifesto For Change', 'A. P. J. Abdul Kalam & V. Ponraj', 250.00, 'Harper Collins India', 264, 'English', 'Non-Fiction', 'BUSINESS', '2014-07-14', 4.4, 22, 'img/A-Manifesto-for-Change-A-SDL733749953-1-6b256.jpg', 195.00, 9),
(78, 'Think And Grow Rich', 'Napoleon Hill', 299.00, 'Vermillion', 320, 'English', 'Non-Fiction', 'BUSINESS', '1937-02-11', 4.2, 27, 'img/Think-And-Grow-Rich-SDL019082948-1-95be6.jpg', 218.00, 10),
(79, 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', 399.00, 'Perseus Books Group', 274, 'English', 'Non-Fiction', 'BUSINESS', '2000-04-01', 4.0, 35, 'img/Rich-Dad-Poor-Dad-SDL158388203-1-21643.jpg', 259.00, 10),
(80, 'History Of Modern India', 'Bipinchnadra', 375.00, 'Orient Blackswan', 351, 'English', 'Non-Fiction', 'HISTORY', '2009-06-06', 4.0, 30, 'img/History-Of-Modern-India-SDL342860399-1-b1654.jpg', 263.00, 10),
(81, 'The Hindus', 'Wendy Doniger', 799.00, 'Speaking Tiger Publishing Pvt. Ltd.', 979, 'English', 'Non-Fiction', 'HISTORY', '2009-11-24', 4.8, 31, 'img/The-Hindus-Paperback-English-SDL233792046-1-1b7f5.jpg', 549.00, 10),
(82, 'Satya Ke Sath Mere Prayog', 'M. K. Gandhi', 150.00, 'Prabhat Prakashan New-Delhi', 216, 'Hindi', 'Non-Fiction', 'HISTORY', '1948-01-01', 4.8, 27, 'img/Satya-Ke-Sath-Mere-Prayog-SDL461889641-1-9fc0d.jpg', 110.00, 10),
(84, 'shho', 'sdkl', 956.00, 'Dk', 44, 'dn', 'adn', 'dn', '0000-00-00', 4.0, 45, 'img/A-Journey-Within-Becoming-Better-SDL379573988-1-41290.jpg', 546.00, 0),
(85, 'shho', 'sdkl', 956.00, 'Dk', 44, 'dn', 'adn', 'dn', '0000-00-00', 4.0, 45, 'img/A-Journey-Within-Becoming-Better-SDL379573988-1-41290.jpg', 546.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) CHARACTER SET latin1 NOT NULL,
  `first_name` varchar(15) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(15) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `password` varchar(40) CHARACTER SET latin1 NOT NULL,
  `address_1` varchar(20) CHARACTER SET latin1 NOT NULL,
  `address_2` varchar(40) CHARACTER SET latin1 NOT NULL,
  `city` varchar(20) CHARACTER SET latin1 NOT NULL,
  `state` varchar(30) CHARACTER SET latin1 NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `title`, `first_name`, `last_name`, `email`, `password`, `address_1`, `address_2`, `city`, `state`, `pincode`, `mobile_no`) VALUES
(5, 'Mr.', 'Abhishek', 'Jain', 'jain.abhishek@11', '1230', '1/3042', 'Street No. 19, Ram Nagar', 'Shahdara', 'Delhi', 110032, 8882954306),
(6, 'Mr.', 'Sachin', 'Sharma', 'sachin.sharma', '1230', 'A-32', 'RST Enclave', 'Johripur', 'Delhi', 110094, 8882954306);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
