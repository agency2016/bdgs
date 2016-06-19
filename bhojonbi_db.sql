-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2016 at 04:33 AM
-- Server version: 5.5.48-37.8
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bhojonbi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL,
  `a_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `a_desc`) VALUES
(6, '<p style="text-align: justify;">আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল <a title="Avro Keyboard - FREE" href="http://www.omicronlab.com/avro-keyboard.html" target="_blank" rel="nofollow">অভ্র^</a>\n নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যারের মধ্য দিয়ে। এর পর একে একে বাংলা \nউইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা \nতৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ \nকরে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর\n করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার। যে লেখাগুলো ফটোশপে বসিয়ে\n বাংলায় ডিযাইন করা যাবে, আবার সেই লেখাই অনলাইনে ব্যবহার করা যাবে। কিন্তু\n দুঃখজনক হলেও সত্য যে, ইংরেজিতে লাতিন Lorem Ipsum… সূচক নমুনা লেখা \n(dummy texts) থাকলেও বাংলা ভাষায় এরকম কোনো লেখা নেই। তাই নিজের তাগিদেই \nবাংলা ভাষার জন্য প্রথম নমুনা লেখা তৈরি করলাম, এ হলো বাংলা Lorem ipsum&nbsp;– \nকিন্তু তার অনুবাদ নয়। আমি একে নামকরণ করেছি:<span id="more-437"></span> অর্থহীন লেখা!</p>\n<p style="text-align: justify;">আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, \nশব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই \nএই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। \nআমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি\n আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা \nটের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… \nঅর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত \nশব্দ, বাক্যের এখানে-ওখানে রাখতে।</p>\n<p style="text-align: justify;">বাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। \nকিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। \nএ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ \nএকটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, \nইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।</p>\n\n<h4><br></h4>');

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

CREATE TABLE IF NOT EXISTS `analysis` (
  `id` int(11) NOT NULL,
  `headline` varchar(300) NOT NULL,
  `writer` varchar(110) NOT NULL,
  `a_desc` text NOT NULL,
  `a_date` datetime NOT NULL,
  `insert_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `b_date` datetime NOT NULL,
  `insert_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `centrl_comittee`
--

CREATE TABLE IF NOT EXISTS `centrl_comittee` (
  `id` int(11) NOT NULL,
  `c_desc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `constitution`
--

CREATE TABLE IF NOT EXISTS `constitution` (
  `id` int(11) NOT NULL,
  `c_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constitution`
--

INSERT INTO `constitution` (`id`, `c_desc`) VALUES
(2, '<p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক \nকিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের\n ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে \nঅর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। \nযেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে \nঅর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>\n<p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো,\n তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, \nতুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো \nনা, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো,\n আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি;\n এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।</p>\n<p>কোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো \nবলবে “আমি করবো না।” হ্যা, “আমি করবো না” বললেই সবকিছু অস্বীকার করা যায় \nনা, হয়তো তুমি মনের গহীন গভীর থেকে ঠিকই বিশ্বাস করতে শুরু করেছো সেই \nকথাটি, কিন্তু মুখে অস্বীকার করছো। তাই সচেতন থাকো, তুমি কী ভাবছো— তার \nপ্রতি; সচেতন থাকো, তুমি কি আসলেই বিশ্বাস করতে চলেছো ঐ কথাটি… শুধু এতটুকু\n বলি, যা-ই বিশ্বাস করো না কেন, আগে যাচাই করে নাও; আর এতে চাই তোমার \nপ্রত্যুৎপন্নমতিত্ব।</p>\n<p>তাই কোন কথাটি কাজে লাগবে, তা নির্ধারণ করবে তুমি— হ্যাঁ, তুমি। হয়তো \nসামান্য ক’টা বাংলা অক্ষর: খন্ড-ত, অনুস্বার, বিঃসর্গ কিংবা চন্দ্রবিন্দু— \nকিন্তু যদি তুমি বিশ্বাস করো, তাহলে হয়তো তুমি তা দিয়েই তৈরি করতে পারো এক \nউচ্চমার্গীয় মহাকাব্য- এক চিরসবুজ অর্ঘ্য। রচিত হতে পারে পৃথিবীর ১ম বিরাম \nচিহ্নের ইতিকথা – এক নতুন ঊষা। …মহাকাব্য লিখতে ঋষি-মুনি হওয়া লাগে না।<br>\nঅর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও \nনিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি \nঅর্থহীন, নাকি কিছু সত্যিই বলছে!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL,
  `c_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `c_desc`) VALUES
(4, '<br><br><br><br><br><br><br><p align="center">যেহেতু এখনও ফটোশপের অনেক ভার্ষনে ইউনিকোড লেখা সাপোর্ট করে না, তাই লেখাটি\n একই সাথে Unicode এবং ASCII ভার্ষনে দেয়া হলো। ইউনিকোড ভার্ষনটি ওয়েবসহ \nঅন্যান্য সকল ইউনিকোড সাপোর্ট করে এমন মাধ্যমে ব্যবহার করা যাবে।</p>');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `id` int(11) NOT NULL,
  `d_date` datetime NOT NULL,
  `name` varchar(300) NOT NULL,
  `amount` int(11) NOT NULL,
  `medium` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL,
  `headline` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_headline` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` datetime NOT NULL,
  `location` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_detail_front` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_detail_rest` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `elat` float NOT NULL,
  `elong` float NOT NULL,
  `insert_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `headline`, `sub_headline`, `event_date`, `location`, `event_detail_front`, `event_detail_rest`, `elat`, `elong`, `insert_date`) VALUES
(19, 'যুদ্ধাপরাধ: জামালপুরের ৮ আসামির রায় যে কোনো দিন', 'যুদ্ধাপরাধ: জামালপুরের ৮ আসামির রায় যে কোনো দিন', '2016-06-27 00:00:00', 'dhaka 2', '<h5 class=" print-only">ইসলামী ব্যাংকের সাবেক এক পরিচালকসহ জামালপুরের আট আসামির যুদ্ধাপরাধ মামলার রায় ঘোষণা হবে যে কোনো দিন।</h5>', '<div id="areas">\r\n<div id="main">\r\n<div id="breadcrumb" class="widget navigation breadcrumb widget-editable viziwyg-section-104 inpage-widget-91"><a href="http://bangla.bdnews24.com/">খবর </a> &gt; <a href="http://bangla.bdnews24.com/bangladesh/">বাংলাদেশ </a></div>\r\n<div id="news-details-page" class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-90">\r\n<h1 class=" print-only">যুদ্ধাপরাধ: জামালপুরের ৮ আসামির রায় যে কোনো দিন</h1>\r\n</div>\r\n<div class="x460x140 ">\r\n<div class="column-1">\r\n<div id="article_notations" class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-89 article_byline">\r\n<p class="byline print-only">&nbsp; জ্যেষ্ঠ প্রতিবেদক,&nbsp;&nbsp; <span class="authorName">বিডিনিউজ টোয়েন্টিফোর ডটকম</span></p>\r\n</div>\r\n<div id="article_notations" class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-88 article_dateline">\r\n<p class="dateline print-only"><span class="label">Published:</span> 2016-06-19 14:13:01.0 BdST <span class="label">Updated:</span> 2016-06-19 14:13:01.0 BdST</p>\r\n</div>\r\n</div>\r\n<div class="column-2">&nbsp;</div>\r\n</div>\r\n<div id="gallery_page_customize">\r\n<div id="single_gallery_customize" class="widget slideshowFrontpage article widget-editable viziwyg-section-104 inpage-widget-904452">\r\n<div id="slideshowFrontpage-904452" class="inner">\r\n<div id="gallery_slide_customize">\r\n<ul style="position: relative; width: 640px; height: 426px;">\r\n<li id="1" style="position: absolute; top: 0px; left: 0px; display: list-item; z-index: 1; opacity: 1;">\r\n<div class="gallery-image-box">\r\n<div class="media"><img src="http://d30fl32nd2baj9.cloudfront.net/media/2016/02/18/international-crimes-tribunal_020216_0001.jpg/ALTERNATES/w640/International+Crimes+Tribunal_020216_0001.jpg" alt="" /></div>\r\n<p class="caption">&nbsp;</p>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-85 article_lead_text">\r\n<h5 class=" print-only">ইসলামী ব্যাংকের সাবেক এক পরিচালকসহ জামালপুরের আট আসামির যুদ্ধাপরাধ মামলার রায় ঘোষণা হবে যে কোনো দিন।</h5>\r\n</div>\r\n<div class="widget ad script widget-editable viziwyg-section-104 inpage-widget-1134219"><iframe id="a90e8afd" src="http://revive.bdnews24.com/www/delivery/afr.php?zoneid=188&amp;cb=INSERT_RANDOM_NUMBER_HERE" name="a90e8afd" width="640" height="90" frameborder="0" scrolling="no" data-mce-fragment="1">&lt;a\r\n \r\nhref=''http://revive.bdnews24.com/www/delivery/ck.php?n=aa0edbd2&amp;amp;cb=INSERT_RANDOM_NUMBER_HERE''\r\n target=''_blank''&gt;&lt;img \r\nsrc=''http://revive.bdnews24.com/www/delivery/avw.php?zoneid=188&amp;amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;amp;n=aa0edbd2''\r\n border=''0'' alt='''' /&gt;&lt;/a&gt;</iframe></div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="wrappingContent ">\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-84 article_body">\r\n<div class="body print-only">\r\n<p>বাংলাদেশের স্বাধীনতাযুদ্ধের বিরোধিতায় হত্যা, অপহরণ, আটক, নির্যাতন, লুটপাট ও গুমের মত মানবতাবিরোধী অপরাধের অভিযোগ রয়েছে এই আট আসামির বিরুদ্ধে, যাদের মধ্যে ছয়জনই পলাতক।</p>\r\n<p>রোববার প্রসিকিউশন ও আসামিপক্ষের যুক্তি উপস্থাপন শেষে বিচারপতি আনোয়ারুল হকের নেতৃত্বাধীন তিন সদস্যের আন্তর্জাতিক অপরাধ ট্রাইব্যুনাল এ মামলা রায়ের জন্য অপেক্ষমান (সিএভি) রাখে।</p>\r\n<p>আট আসামি হলেন- ইসলামী ব্যাংকের সাবেক পরিচালক শরীফ আহাম্মেদ ওরফে শরীফ হোসেন, মো. আশরাফ হোসেন, মো. আব্দুল মান্নান, মো. আব্দুল বারী, হারুন, মো. আবুল হাশেম, অ্যাডভোকেট মো. শামসুল হক ওরফে &lsquo;বদর ভাই&rsquo; এবং এস এম ইউসুফ আলী।</p>\r\n<p>এদের মধ্যে শামসুল ও ইউসুফ কারাগারে আছেন; বাকি ছয়জনকে পলাতক দেখিয়ে এ মামলার বিচার চলে।</p>\r\n<p>যুদ্ধাপরাধের পাঁচ অভিযোগে গতবছর ২৬ অক্টোবর ট্রাইব্যুনাল এই আট আসামির বিরুদ্ধে অভিযোগ গঠন করে বিচার শুরুর আদেশ দেয়।&nbsp;</p>\r\n<p>আসামিপক্ষের আইনজীবী গাজী এম এইচ তামিম বিডিনিউজ টোয়েন্টিফোর ডটকমকে বলেন, &ldquo;মামলার বিচারিক কার্যক্রম শেষ হয়েছে। আদালত রায় অপেক্ষমাণ রেখেছেন। এখন যে কোনো দিন রায় ঘোষণা হতে পারে।&rdquo;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 23.8103, 90.4125, '0000-00-00 00:00:00'),
(20, 'এক বছরের মধ্যে ২৬ হাজার শিক্ষক নিয়োগ: গণশিক্ষামন্ত্রী', 'এক বছরের মধ্যে ২৬ হাজার শিক্ষক নিয়োগ: গণশিক্ষামন্ত্রী', '2016-06-27 00:00:00', 'dhaka 2', '<div id="areas">\r\n<div id="main">\r\n<h5 class=" print-only">নিবন্ধিত প্রাথমিক বিদ্যালয়ে সহকারী শিক্ষক হিসেবে নিয়োগের জন্য প্যানেলে থাকা ২৬ হাজার প্রার্থীকে আগামী এক বছরের মধ্যে নিয়োগ দেওয়া হবে বলে জানিয়েছেন প্রাথমিক ও গণশিক্ষা মন্ত্রী মোস্তাফিজুর রহমান ফিজার।</h5>\r\n</div>\r\n</div>', '<div id="areas">\r\n<div id="main">\r\n<div id="breadcrumb" class="widget navigation breadcrumb widget-editable viziwyg-section-104 inpage-widget-91"><a href="http://bangla.bdnews24.com/">খবর </a> &gt; <a href="http://bangla.bdnews24.com/bangladesh/">বাংলাদেশ </a></div>\r\n<div id="news-details-page" class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-90">\r\n<h1 class=" print-only">এক বছরের মধ্যে ২৬ হাজার শিক্ষক নিয়োগ: গণশিক্ষামন্ত্রী</h1>\r\n</div>\r\n<div class="x460x140 ">\r\n<div class="column-1">\r\n<div id="article_notations" class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-89 article_byline">\r\n<p class="byline print-only">&nbsp; সংসদ প্রতিবেদক,&nbsp; <span class="authorName">বিডিনিউজ টোয়েন্টিফোর ডটকম</span></p>\r\n</div>\r\n<div id="article_notations" class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-88 article_dateline">\r\n<p class="dateline print-only"><span class="label">Published:</span> 2016-06-19 13:47:34.0 BdST <span class="label">Updated:</span> 2016-06-19 14:02:34.0 BdST</p>\r\n</div>\r\n</div>\r\n<div class="column-2">&nbsp;</div>\r\n</div>\r\n<div id="gallery_page_customize">\r\n<div id="single_gallery_customize" class="widget slideshowFrontpage article widget-editable viziwyg-section-104 inpage-widget-904452">\r\n<div id="slideshowFrontpage-904452" class="inner">\r\n<div id="gallery_slide_customize">\r\n<ul style="position: relative; width: 640px; height: 426px;">\r\n<li id="1" style="position: absolute; top: 0px; left: 0px; display: list-item; z-index: 1; opacity: 1;">\r\n<div class="gallery-image-box">\r\n<div class="media"><img src="http://d30fl32nd2baj9.cloudfront.net/bangla-media/2013/06/06/parlament.jpg/ALTERNATES/w640/Parlament.jpg" alt="" /></div>\r\n<p class="caption">&nbsp;</p>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-85 article_lead_text">\r\n<h5 class=" print-only">নিবন্ধিত প্রাথমিক বিদ্যালয়ে সহকারী শিক্ষক হিসেবে নিয়োগের জন্য প্যানেলে থাকা ২৬ হাজার প্রার্থীকে আগামী এক বছরের মধ্যে নিয়োগ দেওয়া হবে বলে জানিয়েছেন প্রাথমিক ও গণশিক্ষা মন্ত্রী মোস্তাফিজুর রহমান ফিজার।</h5>\r\n</div>\r\n<div class="widget ad script widget-editable viziwyg-section-104 inpage-widget-1134219"><iframe id="a90e8afd" src="http://revive.bdnews24.com/www/delivery/afr.php?zoneid=188&amp;cb=INSERT_RANDOM_NUMBER_HERE" name="a90e8afd" width="640" height="90" frameborder="0" scrolling="no" data-mce-fragment="1">&lt;a\r\n \r\nhref=''http://revive.bdnews24.com/www/delivery/ck.php?n=aa0edbd2&amp;amp;cb=INSERT_RANDOM_NUMBER_HERE''\r\n target=''_blank''&gt;&lt;img \r\nsrc=''http://revive.bdnews24.com/www/delivery/avw.php?zoneid=188&amp;amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;amp;n=aa0edbd2''\r\n border=''0'' alt='''' /&gt;&lt;/a&gt;</iframe></div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="wrappingContent ">\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-84 article_body">\r\n<div class="body print-only">\r\n<p>রোববার সংসদে বাজেট প্রস্তাবের ওপর সাধারণ আলোচনায় অংশ নিয়ে তিনি বলেন, &ldquo;গত দুই বছরে আমরা ২২ হাজার শিক্ষক নিয়োগ দিয়েছি। আদালতের নির্দেশনা অনুসারে আরও প্রায় ২৬ হাজার শিক্ষক নিয়োগ দেওয়া হবে। এক বছরের মধ্যে আমরা এই নিয়োগ সম্পন্ন করব।&rdquo;</p>\r\n<p>বাংলাদেশ প্রাথমিক প্যানেল শিক্ষক ঐক্য পরিষদ প্যানেলভুক্ত সবাইকে নিয়োগ দেওয়ার জন্য বেশ কিছুদিন ধরে আন্দোলন চালিয়ে আসছে।</p>\r\n<p>মানববন্ধন ও অবস্থান ধর্মঘটের মত কর্মসূচি পালনের পাশাপাশি প্রাথমিক ও গণশিক্ষা মন্ত্রীর সঙ্গে সাক্ষাৎ করে&nbsp; নিজেদের ওই দাবির কথা তুলে ধরেছেন তারা।</p>\r\n<p>রেজিস্ট্রার্ড বেসরকারি প্রাথমিক বিদ্যালয়ের শিক্ষকদের চাকরি (নিয়োগ, পদোন্নতি, শৃঙ্খলা ও কল্যাণ) নীতিমালা-২০০৯ অনুযায়ী সহকারী শিক্ষক নিয়োগের জন্য ২০১০ সালের ২১ এপ্রিল বিজ্ঞপ্তি প্রকাশ করে সরকার।</p>\r\n<p>ওইসব বিদ্যালয়ে পর্যায়ক্রমে নিয়োগ দিতে পরীক্ষার মাধ্যমে ২০১২ সালের ৮ এপ্রিল ৪২ হাজার ৬১১ জনের মেধাতালিকা প্রকাশ করা হয়। এদের মধ্য থেকে ২০১৩ সালের আগ পর্যন্ত ১০ হাজার ৫১৪ জন নিয়োগ পান।</p>\r\n<p>২০১৩ সালের ৯ জানুয়ারি প্রধানমন্ত্রী শেখ হাসিনা ২২ হাজার ৯৯৫টি রেজিস্ট্রার্ড বেসরকারি প্রাথমিক বিদ্যালয়কে সরকারি করেন। ওইসব বিদ্যালয়েই প্যানেলভুক্ত শিক্ষকদের নিয়োগের কথা ছিল।</p>\r\n<p>প্রধানমন্ত্রীর এক ঘোষণায় বেশিরভাগ রেজিস্ট্রার্ড প্রাথমিক বিদ্যালয় জাতীয়করণ হলে প্যানেলে থাকা বাকিদের নিয়োগ ঝুলে যায়। এরপর আন্দোলনে নামেন এসব প্রার্থীরা।</p>\r\n<p>দীর্ঘ দিন আন্দোলনে কাজ না হওয়ার প্যানেলভুক্ত ৫০০ প্রার্থী হাই কোর্টে যান। এই পরিপ্রেক্ষিতে আদালতপ্যানেলভুক্ত শিক্ষকদের নিয়োগ দিতে নির্দেশ দেয়। ওই রায়ের বিরুদ্ধে সরকারের আপিলের আবেদনও খারিজ হয়ে যায়। এরপরই প্যানেলে থাকা প্রার্থীদের নিয়োগের পথ খোলে।</p>\r\n<p>হাই কোর্টের নির্দেশে সদ্য জাতীয়করণ হওয়া প্রাথমিক বিদ্যালয়ের &lsquo;শূন্যপদে&rsquo; প্যানেল প্রার্থীদের নিয়োগ দিতে গত ৬ জুন জেলা শিক্ষা কর্মকর্তাদের নির্দেশনা দেয় প্রাথমিক শিক্ষা অধিদপ্তর।</p>\r\n<p>প্যানেল থেকে নিয়োগের জন্য প্রায় ২৩ হাজার প্রার্থী নিয়োগের অপেক্ষায় থাকলেও এদের নিয়োগে শূন্যপদের শর্ত জুড়ে দেওয়ায় সবাইকে নিয়োগ দেওয়া যাচ্ছিল না।</p>\r\n<p>শূন্য পদের বাইরেও অন্য পদগুলোতে প্যানেল শিক্ষকদের নিয়োগ দিতে এক সপ্তাহ আগে নতুন আদেশ জারি করে প্রাথমিক শিক্ষা অধিদপ্তর। এর পরেও প্যানেলে থাকা সব প্রার্থী নিয়োগ পাবেন না জানিয়ে তারা কর্মসূচি পালন করছেন।</p>\r\n<p>প্রাথমিক ও গণশিক্ষা মন্ত্রী সংসদে বলেন, &ldquo;প্রাথমিকের প্রধান চ্যালেঞ্জ হলো মানসম্পন্ন শিক্ষা। এ লক্ষ্যে শিক্ষক ট্রেইনিং বাড়ানো হয়েছে। আগে প্রাইমারি ছিল পঞ্চম শ্রেণি পর্যন্ত। এখন অষ্টম শ্রেণি পর্যন্ত প্রাথমিকের আওতায় আনা হয়েছে। এ জন্য কারিকুলাম তৈরির কাজ চলছে।&rdquo;</p>\r\n<p>সারাদেশে যেসব স্কুল জরাজীর্ণ অবস্থায় আছে, আগামী ২০১৮ সালের মধ্যে সেগুলোর সংস্কার হবে বলেও জানান তিনি।</p>\r\n<p>মোস্তাফিজুর রহমান ফিজার বলেন, গতবার প্রাথমিক শিক্ষায় বাজেটে বরাদ্দ ছিল সাড়ে ১৩ হাজার কোটি টাকা। এবার সেখানে দেওয়া হয়েছে সাড়ে ২২ হাজার কোটি টাকা। শিক্ষার দুই মন্ত্রণালয় মিলে গতবার মোট বাজেট ছিল ৩২ হাজার কোটি টাকা। এবার দেওয়া হয়েছে ৫৮ হাজার কোটি টাকারও বেশি।</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 23.8103, 90.4125, '0000-00-00 00:00:00'),
(21, 'ভেনেজুয়েলাকে উড়িয়ে সেমিতে আর্জেন্টিনা', 'ভেনেজুয়েলাকে উড়িয়ে সেমিতে আর্জেন্টিনা', '2016-06-27 00:00:00', 'dhaka 2', '<h5 class=" print-only">এবার প্রথম থেকেই খেললেন লিওনেল মেসি। গোল করলেন, করালেন। আর্জেন্টিনা অধিনায়কের দুর্দান্ত নৈপুণ্যে ভেনেজুয়েলাকে উড়িয়ে কোপা আমেরিকার সেমি-ফাইনালে উঠেছে আর্জেন্টিনা।</h5>', '<div id="areas">\r\n<div id="main"><br />\r\n<div class="x460x140 ">\r\n<div class="column-2">&nbsp;</div>\r\n</div>\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-85 article_lead_text">\r\n<h5 class=" print-only">এবার প্রথম থেকেই খেললেন লিওনেল মেসি। গোল করলেন, করালেন। আর্জেন্টিনা অধিনায়কের দুর্দান্ত নৈপুণ্যে ভেনেজুয়েলাকে উড়িয়ে কোপা আমেরিকার সেমি-ফাইনালে উঠেছে আর্জেন্টিনা।</h5>\r\n</div>\r\n<div class="widget ad script widget-editable viziwyg-section-104 inpage-widget-1134219"><iframe id="a90e8afd" src="http://revive.bdnews24.com/www/delivery/afr.php?zoneid=188&amp;cb=INSERT_RANDOM_NUMBER_HERE" name="a90e8afd" width="640" height="90" frameborder="0" scrolling="no" data-mce-fragment="1">&lt;a\r\n \r\nhref=''http://revive.bdnews24.com/www/delivery/ck.php?n=aa0edbd2&amp;amp;cb=INSERT_RANDOM_NUMBER_HERE''\r\n target=''_blank''&gt;&lt;img \r\nsrc=''http://revive.bdnews24.com/www/delivery/avw.php?zoneid=188&amp;amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;amp;n=aa0edbd2''\r\n border=''0'' alt='''' /&gt;&lt;/a&gt;</iframe></div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="wrappingContent ">\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-84 article_body">\r\n<div class="body print-only">\r\n<p>গ্রুপ পর্বে অপরাজিত থাকা ভেনেজুয়েলাকে কোয়ার্টার-ফাইনালে খুব বেশি প্রতিরোধ গড়তে না দিয়ে ৪-১ গোলে হারায় কোপা আমেরিকার ১৪ বারের চ্যাম্পিয়নরা। প্রথমার্ধেই জোড়া গোল করেন হিগুয়াইন। দ্বিতীয়ার্ধে মেসি আর এরিক লামেলার গোলের মাঝে লক্ষ্যভেদ করেন সলোমন রনদন।</p>\r\n<p>ভালো কয়েকটি সুযোগ অবশ্য পেয়েছিল ভেনেজুয়েলা। একটি গোল তারা পায়নি বল পোস্টে লাগায়। অদ্ভুত পেনাল্টিতে নষ্ট হয় আরেকটি সুযোগ। আর আর্জেন্টিনা গোলরক্ষক সের্হিও রোমেরোও ছিলেন দারুণ তৎপর। তবে রক্ষণভাগের দুর্বলতার জন্যই শক্তিশালী আর্জেন্টিনার সঙ্গে পেরে উঠেনি দক্ষিণ আমেরিকার অপেক্ষাকৃত দুর্বল দলটি।</p>\r\n<p>ফক্সবরোর জিলেট স্টেডিয়ামে বাংলাদেশ সময় রোববার ভোরে শুরু হওয়া ম্যাচে টুর্নামেন্টে প্রথমবারের মতো একাদশে ছিলেন মেসি। দ্বিতীয় মিনিটে বলে প্রথম স্পর্শেই পাঁচবারের বর্ষসেরা ফুটবলার মাতালেন দর্শক। বল নিয়ে আড়াআড়ি দৌড়ে কয়েকজন খেলোয়াড়কে ফাঁকি দিয়ে ক্রস করেছিলেন; তবে তা সহজেই বিপদমুক্ত করেন গোলরক্ষক এর্নান্দেস। পরের মিনিটে আর্জেন্টিনা অধিনায়কের বাঁকানো শট যায় পোস্টের বাইরে দিয়ে।</p>\r\n<p>&nbsp;</p>\r\n<div class="inline-image"><img src="http://d30fl32nd2baj9.cloudfront.net/media/2016/06/19/01-argentina.jpg/ALTERNATES/w300/01-Argentina.jpg" alt="" width="300" height="185" />\r\n<p id="belowinlineimage">&nbsp;</p>\r\n</div>\r\n<div class="inline-image"><img src="http://d30fl32nd2baj9.cloudfront.net/media/2016/06/19/02-argentina.jpg/ALTERNATES/w300/02-Argentina.jpg" alt="" width="300" height="185" />\r\n<p id="belowinlineimage">&nbsp;</p>\r\n</div>\r\nতবে মেসির নৈপুণ্যে গোল পেতে দেরি হয়নি। অষ্টম মিনিটে প্রায় ৪০ গজ দূর থেকে রক্ষণের উপর দিয়ে তিনি বল বাড়ান ডি-বক্সে। হাফভলিতে তা জালে পাঠিয়ে টুর্নামন্টে গোলের খাতা খোলেন হিগুয়াইন।\r\n<p>&nbsp;</p>\r\n<p>২১তম মিনিটে ফিগেরা মেসিকে ডি-বক্সে ট্যাকল করলে পেনাল্টির আবেদন জানায় আর্জেন্টিনার খেলোয়াড়রা। তবে তাতে সাড়া দেননি রেফারি।</p>\r\n<p>&nbsp;</p>\r\n<div class="inline-image"><img src="http://d30fl32nd2baj9.cloudfront.net/media/2016/06/19/03-argentina.jpg/ALTERNATES/w300/03-Argentina.jpg" alt="" width="300" height="185" />\r\n<p id="belowinlineimage">&nbsp;</p>\r\n</div>\r\n<div class="inline-image"><img src="http://d30fl32nd2baj9.cloudfront.net/media/2016/06/19/04-argentina.jpg/ALTERNATES/w300/04-Argentina.jpg" alt="" width="300" height="185" />\r\n<p id="belowinlineimage">&nbsp;</p>\r\n</div>\r\nতবে ডিফেন্ডারদের ভুল বোঝাবুঝিতে দ্বিতীয় গোলটি খেতে হয় ভেনেজুয়েলার। ভিগেরার লম্বা ব্যাকপাস ধরে এগিয়ে আসা গোলরক্ষককে কাটিয়ে ফাঁকা জাঁলে গোল করেন হিগুয়াইন। জেরার্দো মার্তিনোর প্রথম পছন্দের এই স্ট্রাইকারের এটি ২৯তম আন্তর্জাতিক গোল।\r\n<p>&nbsp;</p>\r\n<p>দুই গোলে পিছিয়ে পড়ে দমে যায়নি ভেনেজুয়েলা। প্রথমার্ধের শেষ ১০ মিনিটে তো আর্জেন্টিনার রক্ষণভাগকে তারা রীতিমত নাস্তানাবুদ করে ছাড়ে। তবে গোল হয়নি গোলরক্ষক সের্হিও রোমেরোর নৈপুণ্যে।</p>\r\n<p>&nbsp;</p>\r\n<div class="inline-image"><img src="http://d30fl32nd2baj9.cloudfront.net/media/2016/06/19/05-argentina.jpg/ALTERNATES/w300/05-Argentina.jpg" alt="" width="300" height="185" />\r\n<p id="belowinlineimage">&nbsp;</p>\r\n</div>\r\n৩৫তম মিনিটে ডি-বক্সের ঠিক বাইরে থেকে রনদোনের জোরালো শট নিচু হয়ে ঝাঁপিয়ে ঠেকান রোমেরো।\r\n<p>&nbsp;</p>\r\n<p>চার মিনিট পর কর্নার থেকে লাফিয়ে উঠে রনদোনের জোরালো হেডে অবশ্য পরাস্ত হয়েছিলেন রোমেরো; তবে বল লাগে বাঁ পোস্টে।</p>\r\n<p>৪১তম মিনিটে ভেনেজুয়েলাকে আবার গোল বঞ্চিত করেন আর্জেন্টিনা গোলরক্ষক। ফ্রাঙ্ক মার্তিনেসের শট একজনের পয়ে লেগে দিক পাল্টে গোলে ঢুকছিল; পেছনের দিকে লাফিয়ে বলে আঙুল ছুঁইয়ে টুর্নামেন্টের অন্যতম সেরা সেভটি করেন রোমোরো।</p>\r\n<p>দুই মিনিট পর রোমেরো বল বিপদমুক্ত করতে গিয়ে মার্তিনেসের পায়ে ঝাঁপ দিয়ে তাকে ফেলে দিলে পেনাল্টির নির্দেশ দেন রেফারি। কিন্ত পানেলকা শট নিতে গিয়ে গড়বড় করে ফেলেন লুইস মানুয়েল সেইহাস। এই মিডফিল্ডারের চিপ জায়গায় দাঁড়িয়ে কোলে টেনে নিতে কোনো সমস্যাই হয়নি রোমেরোর।</p>\r\n<p>&nbsp;</p>\r\n<div class="inline-image"><img src="http://d30fl32nd2baj9.cloudfront.net/media/2016/06/19/06-argentina.jpg/ALTERNATES/w300/06-Argentina.jpg" alt="" width="300" height="185" />\r\n<p id="belowinlineimage">&nbsp;</p>\r\n</div>\r\n৬০তম মিনিটে নিকোলাস গাইতানের সঙ্গে বল দেওয়া নেওয়া করে গোলরক্ষকের পায়ের নিচ দিয়ে জালে বল পাঠিয়ে টুর্নামেন্টে নিজের চতুর্থ গোলটি করেন মেসি। সঙ্গে লেগে থাকা সেন্টারব্যাক আউগুস্তো ভিসকারোনদো জোর চেষ্টাই করেননি।\r\n<p>&nbsp;</p>\r\n<p>৫৪ নম্বর আন্তর্জাতিক গোল করে মেসি ছুঁলেন দেশের হয়ে গাব্রিয়েল বাতিস্তুতার সর্বোচ্চ গোলের রেকর্ড।</p>\r\n<p>৭০তম মিনিটে বাঁ দিক থেকে আসা ক্রসে লাফিয়ে উঠে চমৎকার হেডে রেমোরোকে ফাঁকি দেন রনদোন। কিন্তু পরের মিনিটেই গোল করে ভেনেজুয়েলাকে খেলায় ফিরতে দেয়নি আর্জেন্টিনা।</p>\r\n<p>মেসির বাড়ানো বলে গোলরক্ষককে ফাঁকি দেন গাইতানের বদলি হিসেবে নামা এরিক লামেলা।</p>\r\n<p>হিউস্টনে বাংলাদেশ সময় বুধবার সকালে প্রথম সেমি-ফাইনালে স্বাগতিক যুক্তরাষ্ট্রের মুখোমুখি হবে ২৩ বছর পর বড় কোনো শিরোপা জয়ের লক্ষ্যে এগিয়ে চলা আর্জেন্টিনা।</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 23.8103, 90.4125, '0000-00-00 00:00:00'),
(22, 'এক মৃত মুক্তিযোদ্ধার দিনপঞ্জির পাতা থেকে…', 'এক মৃত মুক্তিযোদ্ধার দিনপঞ্জির পাতা থেকে…', '2016-06-27 00:00:00', 'dhakaw', '<p><small>গল্পের লোভে মাঝে মাঝেই আমি এদিক ওদিক ঘুরি। নানা মানুষের সাথে মেশার চেষ্টা করি। মূলতঃ এই গল্প খোঁজার লোভ থেকেই ঢাকার মোহাম্মদপুর কলেজ গেট সংলগ্ন &lsquo;যুদ্ধাহত মুক্তিযোদ্ধা রোগমুক্তি বিশ্রামাগার&rsquo;-এ গত বছর দশেক ধরে আমার ঘোরাঘুরি। কখনো টানা ঘোরা, আবার কখনো লম্বা সময়ের বিরতিতে যাওয়া। শ', '<p><small>গল্পের লোভে মাঝে মাঝেই আমি এদিক ওদিক ঘুরি। নানা মানুষের সাথে মেশার চেষ্টা করি। মূলতঃ এই গল্প খোঁজার লোভ থেকেই ঢাকার মোহাম্মদপুর কলেজ গেট সংলগ্ন &lsquo;যুদ্ধাহত মুক্তিযোদ্ধা রোগমুক্তি বিশ্রামাগার&rsquo;-এ গত বছর দশেক ধরে আমার ঘোরাঘুরি। কখনো টানা ঘোরা, আবার কখনো লম্বা সময়ের বিরতিতে যাওয়া। শুধু বিশ্রামাগার নয়, মুক্তিযোদ্ধা সংসদ বা মুক্তিযোদ্ধা কল্যাণ ট্রাস্টের বারান্দা বা করিডোরেও আহত মুক্তিযোদ্ধাদের সাথে কথা হয়েছে প্রচুর। ২০০০ সালে &lsquo;যুদ্ধাহত মুক্তিযোদ্ধা রোগমুক্তি বিশ্রামাগার&rsquo;-এ হুইল চেয়ার বন্দি বীরপ্রতীক মোদাস্বার হোসেন মধুর সাথে আমার পরিচয়। কথায় কথায় দেখলাম স্কুল-কলেজের সার্টিফিকেটের হিসেবে এই &lsquo;স্বল্পশিক্ষিত&rsquo; মানুষটির স্বচ্ছ রাজনৈতিক চিন্তার বিন্যাস। বঙ্গবন্ধু শেখ মুজিবুর রহমানের প্রতি একদিকে যেমন রয়েছে তাঁর অপরিসীম শ্রদ্ধা, তেমনি রয়েছে ক্ষোভ। কিম্বা, বঙ্গবন্ধুর চেয়েও &lsquo;মুজিব বাহিনী&rsquo;র কেষ্ট-বিষ্টুদের প্রতিই এই ক্ষোভটা যেন বেশি। মধু, যিনি একাত্তরের যুদ্ধে প্রাক-পঁচিশেই সারাজীবনের মতো চলৎশক্তি হারিয়েছেন, তিনি একদিন আমার হাতে তুলে দিলেন একটি সাদা কাগজের সেলাই করা খাতায় বেশ কিছু পাতা লেখা। মধুর চোখে দেখা মুক্তিযুদ্ধ ও যুদ্ধের পরবর্তী কয়েক বছরের ইতিহাস।<br /> &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;<br /> <span style="color: darkviolet; font-family: solaimanlipi; font-size: large;">&ldquo;হঠাৎ রাষ্ট্রপতি জিয়াউর রহমান বলে উঠলেন, &lsquo;এ্যাটেনশন প্লিজ!&rsquo; সকলের দৃষ্টি ও কান চলে যায় রাষ্ট্রপতির দিকে। রাষ্ট্রপতি বলেন, &lsquo;আপনারা মন দিয়ে শুনুন। আমি শহীদ পরিবার ও যুদ্ধাহত মুক্তিযোদ্ধাদের বিভিন্ন ধরনের সমস্যা দূর করার লক্ষ্যে একটি কমিটি গঠন করব। কমিটিতে পুঁজির দরকার।&hellip; প্রধানমন্ত্রী শাহ আজিজুর রহমান সর্বপ্রথম যুদ্ধাহত মুক্তিযোদ্ধা কমপ্লেক্স ফান্ড কমিটিতে তাঁর এক মাসের বেতন দান করেন।&hellip; ক্ষোভে-দুঃখে তখন শুধু পাশে বসা বন্ধু নূরুল আমিনের হাতটা চেপে ধরে শরীরের রাগ মেটালাম। রাজাকারের প্রথম সাহায্যে গঠিত হল যুদ্ধাহত মুক্তিযোদ্ধা কমপ্লেক্স ফান্ড কমিটি।&rdquo; / মোদাস্বার হোসেন মধু বীর প্রতীক</span><br /> &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;-<br /> ফটোকপি করলাম। প্রচুর বানান ভুল। কাঁচা হাতের অক্ষর। তবু, মুক্তিযুদ্ধের অনেক না-বলা কথা আছে তাঁর এই লেখায়। তারপর&hellip; তারপর মধ্যবিত্ত জীবনের দৌড়, কর্মব্যস্ততা ও মধুকে আমার ভুলে যাওয়া! মধুর ঐ লেখা আমার কাছে ফাইলবন্দিই হয়ে রইলো। প্রায় বছর দশেক পরে গত বছরের শুরুতে আবার যখন &lsquo;যুদ্ধাহত মুক্তিযোদ্ধা রোগ বিশ্রামাগার&rsquo;-এ গেলাম, মধুর সহযোদ্ধারা জানালেন মধু মারা গেছেন (এর ভেতর আরো দু/তিন বার গেছিলাম। দুর্ভাগ্যক্রমে, সেই সময়গুলোয় প্রতিবারই গিয়ে শুনেছি যে মধু ক&rsquo;দিনের জন্য দেশের বাড়ি গেছেন)। মধুর স্ত্রী ছিল জানতাম। তার ছেলে-মেয়ে ক&rsquo;জন জিজ্ঞাসা করতে গেলে অপর এক হুইল-চেয়ারবন্দি সহযোদ্ধা খুব নির্বিকার ভাবে জানালেন, &lsquo;বিয়া তো করিছিল শেষের দিকি দেশের বাড়ির ঘর দেখা-শুনা করতি আর নিজির কিছু সেবা-যত্নির জন্যি। মাঝে মাঝে দেশের বাড়ি গেলি পর সেবা করার লোক লাগে না? ছেলে-মেয়ে হবি কীভাবে? যুদ্ধে ওর পায়ের মতো পেনিসও উড়ি গিছিল!&rsquo; চমকে উঠলাম। মধুর এই কয়েক পাতার অপ্রকাশিত আত্মজীবনীতে ১৯৭২ সালে বঙ্গবন্ধুর সাথে মরিয়া হয়ে দেখা করা কিছু তরুণ মুক্তিযোদ্ধার ভেতর জনৈক তরুণের হঠাৎই নিজের হাতে ট্রাউজার ও অন্তর্বাস খুলে হারিয়ে যাওয়া পৌরুষের জন্য হাহাকার করার বেদনার কথা লেখা আছে। বঙ্গবন্ধু তখন দু&rsquo;হাতে চোখ চাপা দিয়েছিলেন। মধুর হাতে লেখা দিনপঞ্জির পাতায় আবার চোখ বুলাই। হ্যাঁ, যুদ্ধে যে &lsquo;পুরুষত্ব&rsquo; হারিয়েছেন সেকথা তিনি নিজেও লিখেছেন।<span id="more-4265"></span></small></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://arts.bdnews24.com/wp-content/uploads/2011/12/madhu_4.jpg" alt="madhu_4.jpg" align="right" />&hellip;&hellip;.<br /> <small><em>মোদাস্বার হোসেন মধু বীর প্রতীকের ডায়েরির একটি পাতা</em></small><br /> &hellip;&hellip;.<br /> যাহোক, মধুর মৃত্যুর কথা জেনে ভয়ানক খারাপ লাগলো। এর পরপরই ২০০৯-এর মার্চ থেকে এপ্রিল মাস জুড়ে আমি <a href="http://arts.bdnews24.com/?p=3561">প্রায় কুড়ি/একুশ জন মুক্তিযোদ্ধার সাক্ষাৎকার</a> গ্রহণ করি। আলোকচিত্রও তুলি। কিন্তু, প্রথম ডিজিটাল ক্যামেরাটা হারিয়ে যায়। এর পর আর একটি ডিজিটাল ক্যামেরা কিনে ছবি তুলি। এবার ভাইরাস আক্রমণ। যাহোক, অল্প-স্বল্প কিছু ছবি এখনো আছে। কিন্তু, মধুর ছবিই তো নেই। এই সব আহত বীর যোদ্ধাদের সাথে কথা বলতে গিয়ে দেখেছি যে সতেরো থেকে পঁচিশের ভেতর হাত, পা, চোখ, কাণ, শিরদাঁড়া তো বটেই&hellip; অনেকেই তাদের &lsquo;মেল-অর্গ্যান&rsquo;ও হারিয়েছেন। এই যে আমি শব্দটি বাংলায় না লিখে ইংরেজিতে লিখলাম, এর কারণ হলো শৈশব থেকে যে &lsquo;রাবীন্দ্রিক&rsquo;, &lsquo;পিউরিটান&rsquo; ও রীতিমতো &lsquo;ভিক্টোরিয়&rsquo; শুচিতা-শ্লীলতাবোধে বাঙালী মধ্যবিত্ত বিশেষতঃ বাঙালী মধ্যবিত্ত নারীকে বড় করে তোলা হয়, সেই শিক্ষণের ভেতর দিয়ে যেতে যেতে একজন নারী লেখক কিছুতেই খুব কড়া সত্যকেও কড়া করে অনেক সময়ই বলতে পারেন না। কিন্তু, মুক্তিযুদ্ধে আপনার-আমার মতো মধ্যবিত্ত অংশগ্রহণ করেছেন খুব কম সংখ্যায়। সমাজের নিম্নবর্গের মানুষই অংশ নিয়েছেন বেশি। ফলে, এই প্রৌঢ় বা বৃদ্ধ মানুষগুলো&hellip; আমি তাদের বিপরীত লিঙ্গের ও বয়সে অনেক ছোট একজন হওয়া সত্ত্বেও&hellip; আমাকে &lsquo;মা&rsquo; সম্বোধন করেও তারা কোনো রাখ-ঢাক না করেই বলেছেন যুদ্ধে তাদের &lsquo;শিশ্ন&rsquo; হারানোর কথা। খুব অকপটভাবে। শ্লীলতা-শুচিতা বোধের কোনো রাখ-ঢাক বা মধ্যবিত্ত ভণিতা ছাড়াই। আমার সো-কল্ড শ্লীলতাবোধ যে অনেক বেশি অশ্লীল, তাও আমি এঁদের কাছ থেকেই শিখলাম। এই ভয়াবহ ইতিহাস শুনতে শুনতে আমার এমনও মনে হয়েছে যে মুক্তিযুদ্ধে শুধুই নারীর আব্রু হারানোর কথা আমরা পড়েছি এতদিন। পুরুষ যে তার &lsquo;পুরুষত্ব&rsquo; হারিয়েছে, সেই ইতিহাসও কি &lsquo;পুরুষতন্ত্র&rsquo;ই আলোতে আসতে দেয় নি এতদিন? কারণ, নারী তো এমন এক &lsquo;বস্তু&rsquo; যার নিগ্রহ বা অবমাননা খুব সহজ ও সম্ভব। কিন্তু, পুরুষ যখন &lsquo;পুরুষত্ব&rsquo; হারায়, তখন সেই আখ্যান অন্য পুরুষ কি লিখতে পারে না পুরুষের ভাবমূর্তির অবনমনের ভয়ে?</p>\r\n<p><small>&lsquo;মধু&rsquo;র আত্মজীবনী কিছুটা </small></p>', 23.8103, 90.4125, '0000-00-00 00:00:00'),
(23, 'ক্ষুব্ধ কামাল, স্বস্তি মারুফুলের', 'ক্ষুব্ধ কামাল, স্বস্তি মারুফুলের', '2016-06-14 00:00:00', 'dhaka 2', '<div id="areas">\r\n<div id="main">\r\n<h5 class=" print-only">অতিরিক্ত সময়ের গোলটি কোনোভাবেই মেনে নিতে পারছেন না রহমতগঞ্জ মুসলিম ফ্রেন্ডস অ্যান্ড সোসাইটির কোচ কামাল বাবু। অন্য দিকে এক গোলের জয়ে ফেডারেশন কাপের সেমি-ফাইনাল নিশ্চিত হওয়া স্বস্তি অনুভব করছেন শেখ রাসেল ক্রীড়া চক্রের কোচ মারুফুল হক।</h5>\r\n</d', '<div class="wrappingContent ">\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-84 article_body">\r\n<div class="body print-only">\r\n<p>বঙ্গবন্ধু জাতীয় স্টেডিয়ামে শনিবার প্রতিযোগিতার দ্বিতীয় কোয়ার্টার-ফাইনালে রহমতগঞ্জকে ১-০ গোলে হারায় শেখ রাসেল। ১০২ মিনিটে পল এমিলি গোলটি করেন। ওই গোলের পরই অফসাউডের দাবি নিয়ে রহমতগঞ্জের কোচ, কর্মকর্তা, খেলোয়াড়রা মাঠে ঢুকে সহকারী রেফারির সঙ্গে তর্কে জড়িয়ে পড়েন।</p>\r\n<p>ম্যাচ শেষে পলের ওই গোল নিয়ে ক্ষোভ জানান রহমতগঞ্জের কোচ কামাল।</p>\r\n<p>&ldquo;আমাদের জোর করে হারানো হয়েছে। যদি তারা এরকই করবে, তাহলে ম্যাচটা অতিরিক্ত সময়ে টেনে নেওয়ার কোনো দরকার ছিল না। আগেই এটা তারা করতে পারত। রেফারির জন্য আমরা হেরেছি।&rdquo;</p>\r\n<p>প্রথমার্ধে ম্যাচের নিয়ন্ত্রণ নিজেদের মুঠোয় রাখলেও গোল পায়নি শেখ রাসেল। দ্বিতীয়ার্ধের শেষ প্রতিপক্ষের আক্রমণে দলটি কোণঠাসা হয়ে পড়েছিল। তবে শেষ পর্যন্ত স্বস্তির জয় পাওয়া খুশি দলটির কোচ মারুফুল। প্রতিপক্ষকে প্রশংসা করতেও ভোলেননি তিনি।</p>\r\n<p>&ldquo;ওরা ভালো খেলেছে; এটা ওদের কৃতিত্ব। আমরা প্রত্যাশা অনুযায়ী খেলতে পারিনি। তবে সেমি-ফাইনালে উঠতে পেরে খুশি।&rdquo;</p>\r\n<p>যে গোলটি নিয়ে বিতর্ক, প্রতিপক্ষ কোচ ক্ষুব্ধ, সেটা নিয়ে মারুফুল বলেন, &ldquo;ওটা অফসাইড ছিল না।&rdquo;</p>\r\n</div>\r\n</div>\r\n</div>', 23.8103, 90.4125, '0000-00-00 00:00:00'),
(24, 'মেক্সিকোকে গুঁড়িয়ে শেষ চারে চিলি', 'মেক্সিকোকে গুঁড়িয়ে শেষ চারে চিলি 2', '2016-06-28 00:00:00', 'dhaka 2', '<h5 class=" print-only">দুই মহাদেশের সেরা দুই দলের লড়াইটা হলো বড়ই একতরফা। উত্তর আমেরিকার সেরা দল মেক্সিকোকে ৭-০ গোলে গুঁড়িয়ে কোপা আমেরিকার শতবর্ষী আসরের সেমি-ফাইনালে উঠেছে দক্ষিণ আমেরিকার চ্যাম্পিয়ন চিলি।</h5>', '<div class="wrappingContent ">\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-84 article_body">\r\n<div class="body print-only">\r\n<p>এই প্রথম লাতিন আমেরিকার ফুটবল শ্রেষ্ঠত্বের লড়াই হচ্ছে মহাদেশের বাইরে যুক্তরাষ্ট্রে, যেখান অনেকটা &lsquo;হোম&rsquo; ভেন্যুর সুবিধা পেয়েছিল মেক্সিকো। কিন্তু গ্যালারি ভরা সমর্থকদের তারা উপহার দিল শুধুই হতাশা। চিলির তিন ফরোয়ার্ডকে রুখতেই পারেনি কনকাকাফ গোল্ড কাপের বর্তমান চ্যাম্পিয়নরা।</p>\r\n<p>এদুয়ার্দো ভারগাস একাই করেন চার গোল। শুরু ও শেষের গোল এদসন পুচের। কোপা আমেরিকার বর্তমান চ্যাম্পিয়নদের অন্য গোলটি আরেক ফরোয়ার্ড আলেক্সিস সানচেসের।</p>\r\n<p>স্যান্টা ক্ল্যারায় বাংলাদেশ সময় রোববার সকালে শুরু থেকেই ম্যাচের নিয়ন্ত্রণ ছিল চিলির হাতে। গোলের জন্যও বেশিক্ষণ অপেক্ষা করতে হয়নি। ষোড়শ মিনিটে সানচেসের জোরালো শট ঠেকিয়েছিলেন গোলরক্ষক গিলের্মো ওচোয়া। কিন্তু তা সোজা গিয়ে পড়ে পুচের পায়ে। চিলির হয়ে প্রথম গোলটি করতে ভুল করেননি তিনি।</p>\r\n<p>বিরতির এক মিনিট আগে প্রথম গোলটি পান ভারগাস। ডি-বক্সের বাঁ দিক থেকে সানচেসের নিচু ক্রস থামিয়ে ডান পোস্ট দিয়ে জালে পাঠিয়ে দেন হফেনহাইমে খেলা এই ফরোয়ার্ড।</p>\r\n<p>দ্বিতীয়ার্ধের শুরুতেই মেক্সিকোর ম্যাচে ফেরার আশা শেষ করে দেন সানচেস। আর্তুরো ভিদালের সঙ্গে বল দেওয়া নেওয়া করে নিখুঁত শটে জালে পাঠিয়ে দেন আর্সেনালের এই ফরোয়ার্ড।</p>\r\n<p>&nbsp;</p>\r\n<div class="inline-image"><img src="http://d30fl32nd2baj9.cloudfront.net/media/2016/06/19/02-chile.jpg/ALTERNATES/w300/02-chile.jpg" alt="" width="300" height="185" />\r\n<p id="belowinlineimage">&nbsp;</p>\r\n</div>\r\nএরপর ছয় মিনিটের মধ্যে ভারগেসের দুই গোলে দিশেহারা হয়ে পড়ে মেক্সিকো। ৫২তম মিনিটে বল নিয়ে এগিয়ে ডান পোস্ট ঘেঁষে জালে পাঠিয়ে দেন। আর ৫৭তম মিনিটে জঁ বেশেজুর শট ওচোয়া ফেরালেও ফিরতি শটে হ্যাটট্রিকটা তুলে নেন ভারগাস।\r\n<p>&nbsp;</p>\r\n<p>৭৪তম মিনিটে আবার গোল ভারগাসের। মার্ক গনসালেসের ক্রসে শুয়ে পড়ে নেওয়া পুচের শট ঠেকিয়ে দিয়েছিলেন দুই ডিফেন্ডার। কিন্তু সুযোগটা নষ্ট হতে দেননি ভারগাস। দূরহ কোণ থেকে বল জালে পাঠিয়ে চতুর্থ গোলটি করেন এই ফরোয়ার্ড।</p>\r\n<p>মেক্সিকোর লজ্জার আরও বাকি ছিল। নির্ধারিত সময়ের ২ মিনিট আগে ভিদালের বাড়ানো বল ডি-বক্সের ভেতরে পেয়ে ওচোয়ার মাথার উপর দিয়ে জালে পাঠিয়ে দেন পুচ।</p>\r\n<p>যোগ করা সময়ে ম্যাচ গড়াতেই রেফারির খেলা শেষের বাঁশি কিছুটা স্বস্তি হয়েই এসেছে মেক্সিকোর জন্য!</p>\r\n<p>শিকাগোতে বাংলাদেশ সময় আগামী বৃহস্পতিবার সকালে দ্বিতীয় সেমি-ফাইনালে চিলির প্রতিপক্ষ কলম্বিয়া।</p>\r\n</div>\r\n</div>\r\n</div>', 23.8103, 90.4125, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_image`
--

CREATE TABLE IF NOT EXISTS `event_image` (
  `event_image_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_image` varchar(300) NOT NULL,
  `title` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_image`
--

INSERT INTO `event_image` (`event_image_id`, `event_id`, `event_image`, `title`, `cover_image`) VALUES
(21, 19, 'http://bhojonbilash.com/bdgs/upload/event/Make-A-Thon+2016.JPG', 'image 1', 1),
(22, 19, 'http://bhojonbilash.com/bdgs/upload/event/Make-A-Thon+20161.JPG', 'This is image title', 0),
(23, 19, 'http://bhojonbilash.com/bdgs/upload/event/Make-A-Thon+20162.JPG', 'This is image title', 0),
(24, 19, 'http://bhojonbilash.com/bdgs/upload/event/Make-A-Thon+20163.JPG', 'This is image title', 0),
(25, 20, 'http://bhojonbilash.com/bdgs/upload/event/01+Sri+Lankas+Angelo+Mathews+hits+Englands+Moeen+Ali+for+six+runs.JPG', 'This is image title', 1),
(26, 20, 'http://bhojonbilash.com/bdgs/upload/event/01+Sri+Lankas+Angelo+Mathews+hits+Englands+Moeen+Ali+for+six+runs1.JPG', 'This is image title', 0),
(27, 20, 'http://bhojonbilash.com/bdgs/upload/event/01+Sri+Lankas+Angelo+Mathews+hits+Englands+Moeen+Ali+for+six+runs2.JPG', 'This is image title', 0),
(28, 20, 'http://bhojonbilash.com/bdgs/upload/event/01+Sri+Lankas+Angelo+Mathews+hits+Englands+Moeen+Ali+for+six+runs3.JPG', '', 0),
(29, 21, 'http://bhojonbilash.com/bdgs/upload/event/162_92_1005.jpg', '', 1),
(30, 21, 'http://bhojonbilash.com/bdgs/upload/event/162_92_10051.jpg', '', 0),
(31, 21, 'http://bhojonbilash.com/bdgs/upload/event/162_92_10052.jpg', '', 0),
(32, 22, 'http://bhojonbilash.com/bdgs/upload/event/132_71_1.jpg', 'This is image title', 0),
(33, 22, 'http://bhojonbilash.com/bdgs/upload/event/132_71_11.jpg', '', 1),
(34, 23, 'http://bhojonbilash.com/bdgs/upload/event/3_ride_carshare.png', '', 0),
(35, 23, 'http://bhojonbilash.com/bdgs/upload/event/3_ride_carshare1.png', '', 1),
(36, 24, 'http://bhojonbilash.com/bdgs/upload/event/01-chile.jpg', '', 1),
(37, 24, 'http://bhojonbilash.com/bdgs/upload/event/01-chile1.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_video`
--

CREATE TABLE IF NOT EXISTS `event_video` (
  `event_video_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `video_link` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_video`
--

INSERT INTO `event_video` (`event_video_id`, `event_id`, `video_link`, `title`) VALUES
(7, 19, 'link 1', 'titl2'),
(8, 20, 'link 1', 'titl2'),
(9, 21, 'link 1', 'titl2'),
(10, 22, '', ''),
(11, 23, '', ''),
(12, 24, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `focus_event`
--

CREATE TABLE IF NOT EXISTS `focus_event` (
  `focus_event_id` int(11) NOT NULL,
  `headline` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_headline` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_detail_front` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_detail_rest` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` datetime NOT NULL,
  `location` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `elat` float NOT NULL,
  `elong` float NOT NULL,
  `insert_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `focus_event`
--

INSERT INTO `focus_event` (`focus_event_id`, `headline`, `sub_headline`, `event_detail_front`, `event_detail_rest`, `event_date`, `location`, `elat`, `elong`, `insert_date`) VALUES
(18, '??? ?????????? ???????? ???? ??? ?????????', ' ??? ?????????? ???????? ???? ??? ????????? ', '?????????? ???? ??? ???????? ????? ???? ?? ????? ??????? ?????? ?????? ????????? ?????? ???????? ?? ????? ???? ??? ????????? ???????? ??? ???? ??????? ?????? ??? ??????', '<div id="areas">\r\n<div id="main"><br />\r\n<div class="column-2">&nbsp;</div>\r\n<div id="gallery_page_customize">\r\n<div id="single_gallery_customize" class="widget slideshowFrontpage article widget-editable viziwyg-section-104 inpage-widget-904452">\r\n<div id="slideshowFrontpage-904452" class="inner">\r\n<div id="gallery_slide_customize">\r\n<ul style="position: relative; width: 640px; height: 426px;">\r\n<li id="1" style="position: absolute; top: 0px; left: 0px; display: list-item; z-index: 1; opacity: 1;">\r\n<div class="gallery-image-box">\r\n<div class="media"><img src="http://d30fl32nd2baj9.cloudfront.net/media/2016/04/01/26_tannery_010416_0003.jpg/ALTERNATES/w640/26_Tannery_010416_0003.jpg" alt="" /></div>\r\n<p class="caption">&nbsp;</p>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-85 article_lead_text">\r\n<h5 class=" print-only">?????????? ???? ??? ???????? ????? ???? ?? ????? ??????? ?????? ?????? ????????? ?????? ???????? ?? ????? ???? ??? ????????? ???????? ??? ???? ??????? ?????? ??? ??????</h5>\r\n</div>\r\n<div class="widget ad script widget-editable viziwyg-section-104 inpage-widget-1134219"><iframe id="a90e8afd" src="http://revive.bdnews24.com/www/delivery/afr.php?zoneid=188&amp;cb=INSERT_RANDOM_NUMBER_HERE" name="a90e8afd" width="640" height="90" frameborder="0" scrolling="no" data-mce-fragment="1">&lt;a\r\n \r\nhref=''http://revive.bdnews24.com/www/delivery/ck.php?n=aa0edbd2&amp;amp;cb=INSERT_RANDOM_NUMBER_HERE''\r\n target=''_blank''&gt;&lt;img \r\nsrc=''http://revive.bdnews24.com/www/delivery/avw.php?zoneid=188&amp;amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;amp;n=aa0edbd2''\r\n border=''0'' alt='''' /&gt;&lt;/a&gt;</iframe></div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="floatingContent-right " style="width: 140px;">&nbsp;</div>\r\n<div class="wrappingContent ">\r\n<div class="widget storyContent article widget-editable viziwyg-section-104 inpage-widget-84 article_body">\r\n<div class="body print-only">\r\n<p>???????? ???? ???????? ??????? ????? ? ???????? ? ?? ?? ??????? ???? ?????? ?? ??????? ?????????? ??????????? ? ???? ????</p>\r\n<p>??????????? ?? ???? ???????? ???? ????? ?? ??- ?? ??????? ??????? ????? ????? ????? ??????? ???? ? ????? ?? ????? ????????? ???? ????? ??????</p>\r\n<p>???????? ??????????? ???????? ?????? ?????????? ?????? ???????? ?? ?????? ????? ???????? ????? ?? ?????? ???? ??? ????? ?????? ??????? ????? ?? ????? ????????? ???? ????? ??? ??????</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2016-06-27 00:00:00', '', 23.8103, 90.4125, '0000-00-00 00:00:00'),
(19, 'গাব্রিয়েল গার্সিয়া মার্কেস: নিঃসঙ্গতার একশ বছর', 'গাব্রিয়েল গার্সিয়া মার্কেস: নিঃসঙ্গতার একশ বছর', 'বিশ্বসাহিত্যের ইতিহাসে নিঃসঙ্গতার একশ বছর-এর মতো আর কোনো উপন্যাস প্রকাশের পরপরই এতটা পাঠকপ্রিয়তা পেয়েছে কিনা সন্দেহ। ', '<p><big><strong>বিশ্বসাহিত্যের ইতিহাসে <em>নিঃসঙ্গতার একশ বছর</em>-এর মতো আর কোনো উপন্যাস প্রকাশের পরপরই এতটা পাঠকপ্রিয়তা পেয়েছে কিনা সন্দেহ। জনপ্রিয়তার বিচারে যেমন, তেমনি শিল্পকুশলতা আর শিল্পমুক্তির ক্ষেত্রেও এটি হয়ে উঠেছে এক অনন্য দৃষ্টান্ত। কেবল স্প্যানিশ সাহিত্যেই নয়, গোটা বিশ্বসাহিত্যের ইতিহাসেই একটি মাত্র উপন্যাসে ইতিহাস, আখ্যান, সংস্কার, কুসংস্কার, জনশ্রুতি, বাস্তব, অবাস্তব, কল্পনা, ফ্যান্টাসি, যৌন-অযাচার ও স্বপ্ন&ndash; সবকিছুর এমন স্বাভাবিক ও অবিশ্বাস্য সহাবস্থান আগে কখনও দেখা যায়নি।<br /> ঠিক এই কারণে মারিও বার্গাস যোসা এটিকে বলেছিলেন এক সামগ্রিক উপন্যাস (Novela Total), আর পাবলো নেরুদা একে বলেছিলেন, &ldquo;সের্বান্তেসের ডন কিহোতের পর স্প্যানিশ ভাষায় সম্ভবত মহত্তম উন্মোচন (&ldquo;perhaps the greatest revelation in the Spanish language since Don Quixote of Cervantes.&rdquo;)<br /> বাংলাদেশে এখনও পর্যন্ত কিংবদন্তিতুল্য এই উপন্যাসটি মূলভাষা থেকে অনূদিত হয়নি। এই প্রথম এটি আনিসুজ্জামানের অনুবাদে মূল থেকে ধারাবাহিক অনূদিত হচ্ছে। বি. স.</strong><span id="more-7701"></span></big></p>\r\n<h3>অনুবাদ: আনিসুজ্জামান</h3>\r\n<p>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<br /> <span style="color: darkviolet; font-family: solaimanlipi; font-size: x-large;"><em>ধারাবাহিক উপন্যাস । কিস্তি ৩৭</em></span><br /> বৃষ্টি চলে চার বছর এগারো মাস দুদিন। গুড়ি গুড়ি বৃষ্টির কিছু সময় এসেছিল যখন সকলেই ঢোলা যাজকীয় পোশাক পড়ে, বৃষ্টি ধরে আসাটাকে উদযাপন করার জন্য অসুখ থেকে আরোগ্য লাভের মত চেহারা করলেও, শিঘ্রই তারা বুঝতে পারে যে এই বিরতিগুলো হচ্ছে আবার কয়েকগুণ বেগে বৃষ্টি নামার পূর্ব-ঘোষনা। প্রচন্ড ঝড়ে আকাশ ভেঙ্গে পরত। উত্তর থেকে পাঠানো ঘূর্ণিঝড় ঘরের চাল উড়িয়ে নিয়ে দেয়ালগুলো করে ধ্বংস, আর শিকড়শুদ্ধ উপরে ফেলে আবাদের শেষ কলা গাছটিকেও। মনে পরে যায় উরসুলার সেই কথা, যেমনটি ঘটেছিল অনিদ্রা মহামারীর সময়, খোদ বিপর্যয়ই প্রতিরোধ গড়ে তুলেছিল একঘেয়েমীর বিরুদ্ধে। অলসতায় যাতে ভেঙে না পরে তার জন্য যারা সবচেয়ে বেশী কাজ করেছিল তাদের মধ্যে একজন ছিল আউরেলিয়ানো সেগুন্দো। যেদিন সেন্যর ব্রাউন ঝড়ের ঘোষনা দেয় সেদিন সাধারণ কোন ব্যাপারে বাড়িতে যায় সে, আর ফের্নান্দা দেয়ালকুঠুরীতে পাওয়া অর্ধেকটা শিক থেকে বেরিয়ে যাওয়া এক ছাতা দিয়ে তাকে সাহায্য করতে গিয়েছিলো যাতে সে বেরুতে পারে। &ldquo;দরকার নেই&rdquo; &ndash; বলে সে &ldquo;ঝড় থামা পর্যন্ত এখানেই থাকব আমি।&rdquo; অবশ্যই এটা কোন ধনুভঙ্গ পণ ছিল না কিন্তু আক্ষরিক অর্থেই সেটাকে পালন করে চলে সে। তার কাপড়চোপর পেত্রা কতেসের বাড়িতে থাকায় প্রতি তিনদিন অন্তর পরনের কাপড় খুলে শুধু জাঙ্গিয়া পরে অপেক্ষা করত ওগুলো ধোয়ার জন্য। একঘেয়েমী কাটাতে বাড়ির বিভিন্ন খুঁত মেরামতের কাজে লেগে পরে সে। কব্জাগুলোকে পুনর্বিন্যস্ত করে, তালাগুলোতে তেল দেয়, দরজার কড়ায় স্ক্রু আঁটে ও চৌকাঠ লেভেল করে। অনেক মাস যাবৎ, সম্ভবত হোসে আর্কাদিও বুয়েন্দিয়ার সময় জিপসীদের ভুলে ফেলে যাওয়া যন্ত্রপাতির এক বাক্স হাতে, ঘুরাঘুরি করতে দেখা যায় তাকে, আর কেউই বুঝতে পারে না যে তার অনিচ্ছাকৃত ব্যায়ামের কারনে, শীতকালীন ক্লান্তিতে, নাকি বাধ্যকৃত উপোসের ফলে, তার পেটটা চুপসে গিয়ে শুধু চামড়ায় পরিণত হয়, ভোজন তৃপ্ত কচ্ছপের মাখাটার রক্তাভা কমে আসে, গলার নীচের ঝোলা মাংশ আর তেমন চোখে পরে না, সর্বশেষে শরীরের সব জায়গার স্থুলত্ব কমে আসে আর পুনরায় সে নিজের জুতোর ফিতে বাঁধতে পারে। তাকে দরজার হুড়কো ঠিক করতে দেখেও ঘড়িগুলো খুলে ফেলতে দেখে ফের্নান্দার মনে প্রশ্ন জাগে কর্নেল আউরেলিয়ানো বুয়েন্দিয়ার মত সেও সোনার মাছ গলিয়ে পুনরায় তৈরীর বা আমারান্তার শবাচ্ছাদনের কাপড়ে বোতাম খোলা ও লাগানোর, হোসে আর্কাদিও সেগুন্দোর পার্চ</p>\r\n<p>&nbsp;</p>', '2016-06-27 00:00:00', 'dhaka 2', 23.8103, 90.4125, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `focus_event_image`
--

CREATE TABLE IF NOT EXISTS `focus_event_image` (
  `fei_id` int(11) NOT NULL,
  `event_image` varchar(300) NOT NULL,
  `focus_event_id` int(11) NOT NULL,
  `title` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` tinyint(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `focus_event_image`
--

INSERT INTO `focus_event_image` (`fei_id`, `event_image`, `focus_event_id`, `title`, `cover_image`) VALUES
(10, 'http://bhojonbilash.com/bdgs/upload/focus_event/Jamalpur-robbery.jpg', 18, '', 0),
(11, 'http://bhojonbilash.com/bdgs/upload/focus_event/132_76_5.jpg', 19, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `leaflet`
--

CREATE TABLE IF NOT EXISTS `leaflet` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `l_desc` text NOT NULL,
  `insert_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `next_event`
--

CREATE TABLE IF NOT EXISTS `next_event` (
  `next_event_id` int(11) NOT NULL,
  `headline` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` datetime NOT NULL,
  `location` varchar(1300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(200) NOT NULL,
  `elat` double NOT NULL,
  `elong` double NOT NULL,
  `image` varchar(300) NOT NULL,
  `insert_date` datetime NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `next_event`
--

INSERT INTO `next_event` (`next_event_id`, `headline`, `event_date`, `location`, `fb_link`, `elat`, `elong`, `image`, `insert_date`, `content`) VALUES
(13, 'বাবা দিবসে আশরাফ জুয়েলের লেখা: এশাহাক মণ্ডল এবং তাঁর আব্বার সাথে গল্প', '2016-07-01 00:00:00', 'dhaka 2', 'link', 23.810332, 90.41251809999994, 'http://bhojonbilash.com/bdgs/upload/next_event/132_74_6.jpg', '0000-00-00 00:00:00', '<p><big>য়েন্দিয়ার সময় জিপসীদের ভুলে ফেলে যাওয়া যন্ত্রপাতির এক বাক্স হাতে, ঘুরাঘুরি করতে দেখা যায় তাকে, আর কেউই বুঝতে পারে না যে তার অনিচ্ছাকৃত ব্যায়ামের কারনে, শীতকালীন ক্লান্তিতে, নাকি বাধ্যকৃত উপোসের ফলে, তার পেটটা চুপসে গিয়ে শুধু চামড়ায় পরিণত হয়, ভোজন তৃপ্ত কচ্ছপের মাখাটার রক্তাভা কমে আসে, গলার নীচের ঝোলা মাংশ আর তেমন চোখে পরে না, সর্বশেষে শরীরের সব জায়গার স্থু</big></p>'),
(14, 'অরণি সেমন্তি খানের অনুবাদে ব্ল্যাকহোল নিয়ে স্টিফেন হকিংয়ের সর্বসাম্প্রতিক বক্তৃতা', '2016-07-20 00:00:00', 'dhaka 2', 'link', 23.810332, 90.41251809999994, 'http://bhojonbilash.com/bdgs/upload/next_event/132_75_8.jpg', '0000-00-00 00:00:00', '<p>রেকর্ড।</p>\r\n<p>৭০তম মিনিটে বাঁ দিক থেকে আসা ক্রসে লাফিয়ে উঠে চমৎকার হেডে রেমোরোকে ফাঁকি দেন রনদোন। কিন্তু পরের মিনিটেই গোল করে ভেনেজুয়েলাকে খেলায় ফিরতে দেয়নি আর্জেন্টিনা।</p>\r\n<p>মেসির বাড়ানো বলে গোলরক্ষককে ফাঁকি দেন গাইতানের বদলি হিসেবে নামা এরিক লামেলা।</p>\r\n<p>হিউস্টনে বাংলাদেশ সময় বুধবার সকালে প্রথম সেমি-ফাইনালে স্বাগতিক যুক্তরাষ্ট্রের মুখোমুখি হবে ২৩ বছর পর বড় কোনো শিরোপা জয়ের লক্ষ্যে এগিয়ে চলা আর্জেন্টিনা।</p>'),
(15, 'কোহলিদের হারিয়ে চ্যাম্পিয়ন মুস্তাফিজের হায়দরাবাদ', '2016-08-11 00:00:00', 'dhaka 2', 'link', 23.810332, 90.41251809999994, 'http://bhojonbilash.com/bdgs/upload/next_event/132_70_3.png', '0000-00-00 00:00:00', '<p>৬০তম মিনিটে নিকোলাস গাইতানের সঙ্গে বল দেওয়া নেওয়া করে গোলরক্ষকের পায়ের নিচ দিয়ে জালে বল পাঠিয়ে টুর্নামেন্টে নিজের চতুর্থ গোলটি করেন মেসি। সঙ্গে লেগে থাকা সেন্টারব্যাক আউগুস্তো ভিসকারোনদো জোর চেষ্টাই করেননি।</p>\r\n<p>&nbsp;</p>\r\n<p>৫৪ নম্বর আন্তর্জাতিক গোল করে মেসি ছুঁলেন দেশের হয়ে গাব্রিয়েল বাতিস্তুতার সর্বোচ্চ গোলের রেকর্ড।</p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `poster`
--

CREATE TABLE IF NOT EXISTS `poster` (
  `id` int(11) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `title` varchar(300) NOT NULL,
  `p_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `lname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `join_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `last_edit` datetime NOT NULL,
  `about` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analysis`
--
ALTER TABLE `analysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centrl_comittee`
--
ALTER TABLE `centrl_comittee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constitution`
--
ALTER TABLE `constitution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_image`
--
ALTER TABLE `event_image`
  ADD PRIMARY KEY (`event_image_id`);

--
-- Indexes for table `event_video`
--
ALTER TABLE `event_video`
  ADD PRIMARY KEY (`event_video_id`);

--
-- Indexes for table `focus_event`
--
ALTER TABLE `focus_event`
  ADD PRIMARY KEY (`focus_event_id`);

--
-- Indexes for table `focus_event_image`
--
ALTER TABLE `focus_event_image`
  ADD PRIMARY KEY (`fei_id`);

--
-- Indexes for table `leaflet`
--
ALTER TABLE `leaflet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_event`
--
ALTER TABLE `next_event`
  ADD PRIMARY KEY (`next_event_id`);

--
-- Indexes for table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `analysis`
--
ALTER TABLE `analysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `centrl_comittee`
--
ALTER TABLE `centrl_comittee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `constitution`
--
ALTER TABLE `constitution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `event_image`
--
ALTER TABLE `event_image`
  MODIFY `event_image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `event_video`
--
ALTER TABLE `event_video`
  MODIFY `event_video_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `focus_event`
--
ALTER TABLE `focus_event`
  MODIFY `focus_event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `focus_event_image`
--
ALTER TABLE `focus_event_image`
  MODIFY `fei_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `leaflet`
--
ALTER TABLE `leaflet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `next_event`
--
ALTER TABLE `next_event`
  MODIFY `next_event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
