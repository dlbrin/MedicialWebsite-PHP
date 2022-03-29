-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 02:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arina`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `role`) VALUES
(1, 'dlbrenakre17@gmail.com', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457', 'super'),
(2, 'dlbrenakre@yahoo.com', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457', 'moderator');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Dla Azad', 'dlbrenakre17@gmail.com', 2147483647, 'test'),
(2, 'Dla Azad', 'dlbrenakre17@gmail.com', 2147483647, 'test2'),
(4, 'Dlbrin Akreyi', 'dlaakre26@gmail.com', 2147483647, 'hello arina'),
(5, 'Dlbrin Akreyi', 'dlaakre26@gmail.com', 2147483647, 'hello arina'),
(6, 'Dlbrin Akreyi', 'dlaakre26@gmail.com', 2147483647, 'hello arina'),
(7, 'Dlbrin Akreyi', 'dlaakre26@gmail.com', 2147483647, 'hello arina'),
(8, 'Dlbrin Akreyi', 'dlaakre26@gmail.com', 2147483647, 'hello arina'),
(9, 'Dlbrin Akreyi', 'dlaakre26@gmail.com', 2147483647, 'hello arina'),
(10, 'Dlbrin Akreyi', 'dlaakre26@gmail.com', 2147483647, 'hello arina'),
(11, 'Dla Azad', 'dlbrenakre17@gmail.com', 2147483647, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `examples`
--

CREATE TABLE `examples` (
  `id` int(11) NOT NULL,
  `examples_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examples`
--

INSERT INTO `examples` (`id`, `examples_id`, `name`, `lang`, `images`) VALUES
(1, 1, 'چاندنەوەی قژ', 'bs', 'arinahair.png'),
(2, 2, 'چاندنەوەی ڕیش و سمێل', 'bs', 'bearda.png'),
(3, 3, 'چاندنەوەی برۆ', 'bs', 'arinaeyebrow.png'),
(4, 1, 'Hair transplant', 'en', 'arinahair.png'),
(5, 2, ' Beard transplant', 'en', 'bearda.png'),
(6, 3, 'Eyebrow transplant', 'en', 'arinaeyebrow.png'),
(7, 1, 'زراعة الشعر', 'ar', 'arinahair.png'),
(8, 2, 'زراعة اللحية', 'ar', 'bearda.png'),
(9, 3, 'زراعة الحاجب', 'ar', 'arinaeyebrow.png');

-- --------------------------------------------------------

--
-- Table structure for table `examples_img_hair`
--

CREATE TABLE `examples_img_hair` (
  `id` int(11) NOT NULL,
  `example_id` int(11) NOT NULL,
  `img_after` varchar(255) NOT NULL,
  `img_before` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examples_img_hair`
--

INSERT INTO `examples_img_hair` (`id`, `example_id`, `img_after`, `img_before`) VALUES
(1, 1, '1a.jpeg', '1b.png'),
(2, 1, '2a.png', '2b.png'),
(3, 1, '3a.png', '3b.png'),
(4, 1, '4a.png', '4bb.png'),
(5, 1, '5a.png', '5b.png'),
(6, 1, '6a.png', '6bb.png'),
(7, 1, '7aa.png', '7b.png'),
(8, 1, '8a.png', '8b.png'),
(9, 1, '9a.png', '9b.png'),
(10, 1, '10a.png', '10b.png'),
(11, 1, '11a.png', '11b.png'),
(12, 2, 'beard2.png', 'beard22.png'),
(13, 2, 'beardbbb.png', 'beardd.png'),
(14, 3, 'eyebrowww.png', ''),
(15, 3, 'arinaeyebrow.png', ''),
(16, 3, 'eyebrow2.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `details` longtext NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `lang`, `details`, `content`, `img`) VALUES
(1, 'Hair transplant', 'en', 'It is the lifting of the onion (base) of the hair behind the head or any part of the head or the body itself that carries a significant amount of hair and transferring it to the part that is affected by hair loss for any reason.', 'HAIR TRANSPLANT\r\nHair transplantation is a surgical technique that removes hair follicles from one part of the body, called the \'donor site\', to a bald or balding part of the body known as the \'recipient site\'.. In this minimally invasive procedure, grafts containing hair follicles that are genetically resistant to balding (like the back of the head) are transplanted to the bald scalp. Hair transplantation can also be used to restore eyelashes, eyebrows, beard hair, chest hair, pubic hair and to fill in scars caused by accidents or surgery such as face-lifts and previous hair transplants.\r\n<center><img src=\"assets/images/hair.jpeg\"></center>\r\n<p>HAIR TRANSPLANT PROCEDURES:\r\nBelow, you can learn more about two primary surgical methods for the excision and transplanting of hair follicles, FUE and FUT\r\nFOLLICULAR UNIT EXCISION (FUE , FIT) \r\nFUE is a minimally invasive hair transplantation technique in which follicular unit grafts (containing 1 to 4 hair follicles) are individually removed from the patient’s donor area and then individually transplanted to the recipient area. \r\nThere are no stitches required there is no linear scar. Your donor area will be virtually undetectable within just a few days\r\nFollicular unit transplant (FUT)\r\nFollicular unit transplantation (FUT) is the traditional hair transplant method which involves extracting a linear strip of hair bearing skin from the back or the side of the scalp. The strip is then dissected to separate individual grafts. \r\nFUE VS. FUT HAIR TRANSPLANTS\r\nIf you’re just starting your research into hair transplantation, you’re probably wondering about the difference between an FUE and an FUT. While these procedures are similar, and both offer completely natural-looking results, there are some key differences to consider</p>\r\n<center><img src=\"assets/images/FUE-vs.-FUT.jpg\"></center>', 'trr.png'),
(2, 'Eyebrow transplant', 'en', 'Many women have problems with bronchitis or lack of strength, and seek refuge in pens, tattoos and microblading to hide their weakness.  Planting is a permanent solution to go thin and weak.  The method is different from hair or beard and mustache.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'eyebrow.png'),
(3, 'Beard transplant', 'en', ' Those with thin and weak beards or beards have a very good transplant surgery to get their desired face.  It is taken from the back of the hair to grow a beard and mustache and is placed in a very natural way.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'beard.png'),
(6, 'PRP', 'en', 'Plasma needles, which work on the removal of hair follicles and treatments while at the same time providing food for the hair.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'plazmaa.png'),
(7, 'چاندنەوەی قژ', 'bs', 'بریتیە لە هەڵگرتنی پیازی (بنکی) موو لە پشتی سەر یان هەر بەشێک لە سەر یا خود جەستە کە هەڵگری رێژەێێکی بەرچاو لە مووە و گواستنە وەی بۆ ئەو بەشەی کە تووشی رووتانەوەی قژ بووە بە هەر هۆکارێک.', '   بە درێژی مێژوو مرۆڤ خولیای جوانی و ‌حەزی راکێشانی سەرنجی بەرامبەری لە مێشک بووەو بۆ ئەم بابەتە هەوڵ و ماندوو بوونێکی زۆری داوەتە بەر خۆی. موو (قژ، پرچ) کاریگەری زۆری لە جوانی  و پێکهاتەی روخسار و هەروەها گەنج دەرکەوتنی دەم و چاو هەیە. هەروەها جێگەی ئاماژەیە برۆ و برژانگ و ریش و سمێڵ دەورێکی بەرچاو و کارەگەریان هەیە لە جوانی و سەرنج راکێشانی روخساری هەر تاکێک. رووتانەوە بە کۆمەڵێک هۆکارروو ئەدات لەوانە ژنتیک واتە فاکتەرە بۆماوەییەکان، یان لەدەس دانی مووبە کارەساتی نەخوازراو وەک سوتمان و برین و هتد. خۆشبەختانە پێشکەوتنەکانی پزیشکی لە بواری جوانکاری و بە تایبەت نەشتەرگەری چاندنەوەی قژ تا رادەێیکی بەرچاو هیوا و ئومێدی بەخشیوە بەو کەسانەی گرفتی رووتانەوەی قژیان هەیە. \r\nچاندنه وەی قژ: بریتیە لە هەڵگرتنی پیازی (بنکی) موو لە پشتی سەر یان هەر بەشێک لە سەر یا خود جەستە کە هەڵگری رێژەێێکی بەرچاو لە مووە و گواستنە وەی بۆ ئەو بەشەی کە تووشی رووتانەوەی قژ بووە بە هەر هۆکارێک.\r\n  لە گەڵ ئەوەی لەرووی کاتەوە نەشتەرگەریێکی وەختگرە ، بە گشتی پرۆسەێێکی ئاسان و سووکە و پاش تەواو بوون ، لە ماوەێێکی  کانی ئە م ناشتەرگەرییە دەگمەن و چارەسەرییان سادەیە.(side effect)کورت دا نەخۆش ئەگەرێتەوە رەوتی ئاسایی ژیان.  \r\n<br>\r\n<center><img src=\"assets/images/hair.jpeg\"></center>\r\n<br><p>\r\n              لێکەوتەشێوازەکانی چاندنەوەی قژ؛\r\n               <br>\r\nجیاوازی شێوازی چاندنەوەی قژ لە جۆری وەرگرتنی پیاز (بنکی) موو لە مەخزەنی مووەکەیە بۆ ئەم مەبەستە دوو شێواز هەیە؛\r\nFIT) ،Follicular Unit Extraction (FUE ؛ لەم شێوازە بە جیازێکی تایبەت فوڵیکڵ واتە پیازی مووەکە دانە دانەجیا ئەکرێتەوە بە پێی ستاندارد و  پرۆتۆکۆلێکی دیاریکراوی پزیشکی نەشتەرگەر، پاشان لە شوێنی رووتانەوە دادەنرێت.\r\n(Follicular Unit Transplantation (FUT ؛ لەم شێوازە پارچەێێک لە مەخزەنەکە بە نەشتەرگەری ئەبردرێت ولە ژێر ئامێری وردبین پیازی مووەکان جیا ئەکرێتەوە پاشان لە شوێنی مەبەست ئەچێندرێت.\r\n</p>\r\n<br>\r\n<center><img src=\"assets/images/FUE-vs.-FUT.jpg\"></center>', 'trr.png'),
(8, 'چاندنەوەی برۆ', 'bs', 'بەشێکی زۆر لە خانمان گرفتی نەبوون یان تەنکی بێ هێزی برۆیان هەیە و بۆ شاردنەوەی لاوازبوونی برۆیان پەنا دەبەنە بەر قەڵەم و تاتۆ و مایکرۆبلیدینگ . چاندنەوە چارەسەرێکی هەمیشەییە بۆ برۆی تەنک و لاواز. شێوازەکە ی جیاوازە لە چاندنەوەی قژ یان ریش و سمێڵ.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'eyebrow.png'),
(9, 'چاندنەوەی ریش و سمێل', 'bs', 'ئەو کەسانەی ریش یان سمێڵکی تەنک و کەم هێزیان هەیە نەشتەرگەری چاندنەوە زۆر یارمەتیدەرە بۆ ئەوەی ببنە خاوەنی روخساری دڵخوازی خۆیان. بۆ چاندنەوەی ریش و سمێڵ لە مووی پشتی سەر وەردەگیردرێت  و بە شێوازێکی زۆر سروشتی دادەنرێت.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'beard.png'),
(10, 'دەرزی میزۆ', 'bs', ' دەرزی میزۆ دەبێتە هۆی بوژانەوەی گەشەی خانەکانی پێستی سەرگرنگییەکی زۆری هەیە لەبنەبڕکردن و ڕاگرتنی هەڵوەرینی قژ,بەهێز کردنی تاڵەکانی قژ,قژ بە بریقەو نەرمی دەهێڵێتەوە.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'leserr.png'),
(11, '‎دەرزی پلازما', 'bs', 'دە رزی پلازما, ئەو دەرزییە کەکار دەکات لەسەر ڕاگردنی قژ ھەڵ وەرین و چارەسەری وەلە ھمان کاتدا دابین کردنی خۆراک بۆ قژ.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'plazmaa.png'),
(17, 'Mesotherapy', 'en', 'Mizo needles cause the revitalization of the growth of skin cells which are of great importance in cutting and stopping hair loss, strengthening the hair strands, leaving the hair shiny and soft.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'leserr.png'),
(18, 'زراعة الشعر', 'ar', 'هو رفع بصلة (قاعدة) الشعر خلف الرأس أو أي جزء من الرأس أو الجسم نفسه الذي يحمل كمية كبيرة من الشعر ونقله إلى الجزء المصاب بتساقط الشعر لأي سبب من الأسباب.', 'زراعة الشعر\r\nزراعة الشعر هي تقنية جراحية تزيل بصيلات الشعر من جزء واحد من الجسم ، يسمى \"موقع المتبرع\" ، إلى جزء أصلع أو أصلع من الجسم يُعرف باسم \"الموقع المتلقي\" .. في هذا الإجراء طفيف التوغل ، يتم استخدام الطعوم التي تحتوي على يتم زرع بصيلات الشعر المقاومة للصلع وراثيًا (مثل مؤخرة الرأس) في فروة الرأس الصلعاء. يمكن أيضًا استخدام زراعة الشعر لاستعادة الرموش والحواجب وشعر اللحية وشعر الصدر وشعر العانة ولملء الندبات الناتجة عن الحوادث أو الجراحة مثل شد الوجه وعمليات زراعة الشعر السابقة.\r\n<center><img src=\"assets/images/hair.jpeg\"></center>\r\n<p>\r\nإجراءات زراعة الشعر:\r\nأدناه ، يمكنك معرفة المزيد عن طريقتين جراحيتين أساسيتين لاستئصال بصيلات الشعر وزرعها ، FUE و FUT\r\n(FUE، FIT) وحدة البصيلات (FUE، FIT)\r\nFUE هي تقنية زراعة شعر طفيفة التوغل يتم فيها إزالة طعوم وحدة المسام (التي تحتوي على 1 إلى 4 بصيلات شعر) بشكل فردي من المنطقة المانحة للمريض ثم يتم زرعها بشكل فردي في المنطقة المستقبلة.\r\nلا توجد غرز مطلوبة ولا توجد ندبة خطية. ستكون منطقة المتبرع تقريبًا غير قابلة للكشف في غضون أيام قليلة\r\nزرع وحدة بصيلات الشعر (FUT)\r\nزراعة الشعر بالوحدة المسامية (FUT) هي طريقة زراعة الشعر التقليدية التي تتضمن استخراج شريط خطي من الجلد الحامل للشعر من الخلف أو من جانب فروة الرأس. ثم يتم تشريح الشريط لفصل الطعوم الفردية.\r\nFUE مقابل. زراعة الشعر في FUT\r\nإذا كنت قد بدأت للتو البحث في زراعة الشعر ، فمن المحتمل أنك تتساءل عن الفرق بين FUE و FUT. في حين أن هذه الإجراءات متشابهة ، وكلاهما يقدم نتائج طبيعية تمامًا ، إلا أن هناك بعض الاختلافات الرئيسية التي يجب مراعاتها\r\n</p>\r\n<center><img src=\"assets/images/FUE-vs.-FUT.jpg\"></center>', 'trr.png'),
(19, 'زراعة الحاجب', 'ar', 'تعاني العديد من النساء من مشاكل التهاب الشعب الهوائية أو قلة القوة ، ويلجأن إلى الأقلام والوشم والميكروبلادينج لإخفاء ضعفهن. الزراعة هي الحل الدائم للنحافة والضعف. تختلف الطريقة عن الشعر أو اللحية والشارب.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'eyebrow.png'),
(20, 'زراعة اللحية', 'ar', 'أولئك الذين لديهم لحى أو لحى رقيقة وضعيفة لديهم جراحة زرع جيدة جدًا للحصول على الوجه المطلوب. يؤخذ من الجزء الخلفي من الشعر لتنمو لحية وشارب ويوضع بطريقة طبيعية جدا.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'beard.png'),
(21, 'إبر البلازما', 'ar', 'إبر البلازما التي تعمل على إزالة بصيلات الشعر وعلاجها وفي نفس الوقت توفر الغذاء للشعر.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'plazmaa.png'),
(22, 'الميزوثيرابي', 'ar', 'تعمل إبر الميزو على تنشيط نمو خلايا الجلد والتي لها أهمية كبيرة في قص ووقف تساقط الشعر وتقوية خيوط الشعر وترك الشعر لامعاً وناعماً.', '<center><img src=\"assets/images/comingsoon.gif\"></center>', 'leserr.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'arinacenter', 'fb82eb5181a82b91fa289f497dcda9f7c39b634b66284d07d4477d0c9ce04b83');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`) VALUES
(1, 0),
(2, 192168);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examples`
--
ALTER TABLE `examples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examples_img_hair`
--
ALTER TABLE `examples_img_hair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip` (`ip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `examples`
--
ALTER TABLE `examples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `examples_img_hair`
--
ALTER TABLE `examples_img_hair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
