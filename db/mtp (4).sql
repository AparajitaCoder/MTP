-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2018 at 04:44 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.1.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `header_script` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `role_id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `picture`, `header_script`) VALUES
(1, 'Met', 'IP', '1', 'admin@metip.com', '$2y$10$DqbqPwj2QHMXvKAsd6K31O8Nb7Jp5dn00sSvJV5IyTJnY7GiDN33y', 'qsODOTGhCgDAFLxlrJdwP2VO4bEFPPNZ69eixxMzXL8GpYqg7Wr6MM1VHgPe', NULL, NULL, 1, NULL, ''),
(11, 'Innovation', 'Admin', '2', 'innovation@metip.com', '$2y$10$Lj9d0XXOzQKz23LjobSE3.GfHrdVJFUS9eUfNtFLPzFZ8UMd9ufIm', 'jBVyjPrzjXHdmegwMkdQmWBZ35KqVVeMBdDTLgy3ppVp42YrlFmu90t51zBz', '2018-02-23 20:27:45', '2018-02-23 20:27:45', 1, NULL, ''),
(12, 'MLT', 'Admin', '3', 'mlt@metip.com', '$2y$10$PS8kzzjU2VtpTCdIZzC4B.da7v9iOv/IdwB/ox0aKIIeOhZLWWqGO', '5rJeEG4Qg3NRanasZw43jf42UUylkculYaoQXZutTaKeQIwHgnABsqYLZTiT', '2018-02-23 20:28:01', '2018-02-23 20:28:01', 1, NULL, ''),
(13, 'Document', 'Admin', '4', 'document@metip.com', '$2y$10$hMcSfPhtGRnx0a2Ndm1DTOOkBwPAtcWqGAS8GevVnyQaVVBP27Fky', 'vz9re1K2xWZPnhY4yKqoB3jTIKvP9ugF4AqN7ZFEjJodVIzMNgwYRk4kAMso', '2018-02-23 20:28:14', '2018-02-23 20:28:14', 1, NULL, ''),
(14, 'Marketing', 'Admin', '5', 'marketing@metip.com', '$2y$10$GI32VxrbDOfe1RWHfHcHLO4sKgDTIG7tj6yKqp1yfY/GHEyhAQkR6', 'cFucPJNsEiJGPo9AIgbznLTV22fWP6Cojyj1uaTMyOjUHW1SFTzZhW4Ru7bh', '2018-02-23 20:28:35', '2018-02-23 20:28:35', 1, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_comment_settings`
--

CREATE TABLE `admin_comment_settings` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `id` int(11) NOT NULL,
  `script` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_settings`
--

INSERT INTO `admin_settings` (`id`, `script`, `created_at`, `updated_at`) VALUES
(1, '<script src=\'https://cdn.html5maker.com/embed.js?id=43401b5fbe3a3e950eb31b0945457573e93f6b79aff7&responsive=1&width=1200&height=300&h5mTag=html5maker\'></script>', '2018-04-11 10:28:53', '2018-04-13 07:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `total_comments` int(11) NOT NULL DEFAULT '0',
  `total_views` int(11) NOT NULL DEFAULT '0',
  `admin_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `category_id`, `total_comments`, `total_views`, `admin_id`, `status`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'The Foodie Bucket List for Delhieites!', '<p>If you are reading this you are probably the type of person who thinks that&nbsp;life&nbsp;in Delhi is just as good as the number of amazing food items you&rsquo;d had while you were here.</p>\r\n\r\n<p>Yes, Delhi has a big heart but it undoubtedly has a much bigger appetite! &nbsp;The passionate love affair we delhiites have with our&nbsp;food has made Delhi a food hub like none else in India.</p>\r\n\r\n<p>Here are some items from our bucket list that you simply have to cross off&nbsp;to call yourself a true Delhi foodie!</p>\r\n\r\n<h3>1- Anything Chocolate at Choco Vault, Hauz Khas</h3>\r\n\r\n<p><a href="https://i0.wp.com/blog.spooner.in/wp-content/uploads/Choco-Vault-e1449774337556.jpg"><img alt="Choco-Vault-e1449774337556" src="https://i0.wp.com/blog.spooner.in/wp-content/uploads/Choco-Vault-e1449774337556.jpg?resize=600%2C400" style="height:400px; width:600px" /></a></p>\r\n\r\n<h3>2- Peri Peri Chicken at Nando&rsquo;s,&nbsp;Vasant Kunj</h3>\r\n\r\n<p><a href="https://i2.wp.com/blog.spooner.in/wp-content/uploads/Nandos_Peri-peri-chicken.jpg"><img alt="Nandos_Peri-peri-chicken" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/Nandos_Peri-peri-chicken.jpg?resize=600%2C594" style="height:594px; width:600px" /></a></p>\r\n\r\n<h3>3- Kebab at Gulati, Pandara Road</h3>\r\n\r\n<p><a href="https://i0.wp.com/blog.spooner.in/wp-content/uploads/gulati1.jpg"><img alt="gulati1" src="https://i0.wp.com/blog.spooner.in/wp-content/uploads/gulati1.jpg?resize=600%2C400" style="height:400px; width:600px" /></a></p>\r\n\r\n<h3>4- Biryani at Beeryani, SDA</h3>\r\n\r\n<p><a href="https://i2.wp.com/blog.spooner.in/wp-content/uploads/Biryani_beeryani.jpg"><img alt="Biryani_beeryani" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/Biryani_beeryani.jpg?resize=600%2C600" style="height:600px; width:600px" /></a></p>\r\n\r\n<h3>5- Tandoori Momos at Hunger Strike,&nbsp;Amar Colony</h3>\r\n\r\n<p><a href="https://i2.wp.com/blog.spooner.in/wp-content/uploads/Hunger-Strike.jpg"><img alt="Hunger-Strike" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/Hunger-Strike.jpg?resize=600%2C350" style="height:350px; width:600px" /></a></p>\r\n\r\n<h3>6- Mughlai Parantha at Dadu&nbsp;Cutlet Shop, CR Park</h3>\r\n\r\n<p><a href="https://i2.wp.com/blog.spooner.in/wp-content/uploads/dadu1.jpg"><img alt="dadu" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/dadu1.jpg?resize=600%2C373" style="height:373px; width:600px" /></a></p>\r\n\r\n<p>&nbsp;</p>', 1, 0, 2, 14, 1, 'user/article/s8chE3xkt631kPWH5rRjF81gDCjIfIXRFDklOyKx.jpeg', '2018-04-06 19:42:11', '2018-04-16 05:01:59'),
(2, 'Tricks to Eating Healthy When Eating Out', '<p>Going to a restaurant shouldn&rsquo;t be your excuse to eat unhealthy. Follow these tips and not only will you enjoy your meal more, you&rsquo;ll feel satisfied and happy when you&rsquo;re done.</p>\r\n\r\n<p>Some restaurants can be ticking time bombs when it comes to nutritional health, most restaurants do have healthier options in their menus &nbsp;&mdash; if you know how to look for them. You can also rely on these tips to help making eating out a healthier treat.</p>\r\n\r\n<p><strong>1. Ask for it your way.</strong>&nbsp;Dining out is no time to be a meek consumer, you need to be an assertive consumer by asking for changes on the menu. For instance, if an item is fried, ask for it grilled. If it comes with french fries, ask for a side of veggies instead. Ask for a smaller portion of the meat and a larger portion of the salad; for salad instead of coleslaw; baked potato instead of fried. Just assume you can have the food prepared the way you want it. Very often, the restaurant will cooperate.</p>\r\n\r\n<p><strong>2. Ask to &ldquo;triple the vegetables, please.&rdquo;</strong>&nbsp;Often a side of vegetables in a restaurant is really like garnish&mdash;a carrot and a forkful of squash. When ordering, ask for three or four times the normal serving of veggies, and offer to pay extra. You&rsquo;ll probably never be charged and won&rsquo;t get disappointed. Time to get full not fat!</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="tripple vege" src="https://i1.wp.com/blog.spooner.in/wp-content/uploads/tripple-vege.jpg?resize=676%2C380" style="height:369px; width:656px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3. Ask how the food was prepared.</strong>&nbsp;Don&rsquo;t go by the menu. For instance, cholesterol-free does not mean fat-free; the dish could still be filled with calorie-dense oil. Neither does &ldquo;lite&rdquo; necessarily mean light in calories or fat.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Couple cooking at home" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/how-was-it-cooked.jpg?resize=676%2C338" style="height:328px; width:656px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>4. Order from the &ldquo;healthy, light, low fat&rdquo; items on the menu.</strong>&nbsp;Some chains will even list the calories and nutritional content of such foods. Some restaurants like Nutritious Nation and Gyms Kook lists the nutritional information for its entire menu.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="low fat" src="https://i1.wp.com/blog.spooner.in/wp-content/uploads/low-fat.jpg?resize=676%2C338" style="height:328px; width:656px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>5. Eat Slow.</strong>&nbsp;Most people eat too fast, and, as a result, they take in too many calories before they realize they&rsquo;ve eaten enough. It takes approximately 20 minutes from the time you start eating for your brain to send out signals of fullness. Not only does eating slowly and mindfully help you eat less, it enhances the pleasure of the dining experience.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="eat slow 2" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/eat-slow-2.jpg?resize=676%2C468" style="height:454px; width:656px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>6. Split a entr&eacute;e/main course with your dining partner.</strong>&nbsp;A survey found that some restaurants often serve two to three times more than food labels list as a serving.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="share food" src="https://i0.wp.com/blog.spooner.in/wp-content/uploads/share-food.png?resize=630%2C400" style="height:400px; width:630px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>7. Try double appetizers.</strong>&nbsp;If there is a nice selection of seafood- and vegetable-based appetizers, consider skipping the main course and having two appetizers for your meal. Often, that is more than enough food to fill you up.</p>\r\n\r\n<p><strong>8. Order a salad before ordering anything else on the menu.</strong>&nbsp;Some scientific studies found out that those who ate a big veggie salad before the main course ate fewer calories overall than those who didn&rsquo;t have a first-course salad.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="salad" src="https://i1.wp.com/blog.spooner.in/wp-content/uploads/salad.jpg?resize=676%2C423" style="height:410px; width:656px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>9. But remember:</strong>&nbsp;Salads shouldn&rsquo;t be fatty. This is a vegetable course&mdash;keep it tasty but healthy. That means avoiding anything in a creamy sauce (coleslaw, pasta salads, and potato salads), and skipping the bacon bits and fried noodles. Instead, load up on the raw vegetables, treat yourself to a few well-drained marinated vegetables (artichoke hearts, red peppers, or mushrooms), and for a change, add in some fruit or nuts. Indeed, fruits such as mango, kiwi, cantaloupe, and pear are often the secret ingredient in four-star salads.</p>', 2, 0, 4, 14, 1, 'user/article/alk2QDreAuyYv8EWbFNdy3nqoBoG1rJysXcUhUZT.png', '2018-04-06 19:42:26', '2018-04-15 12:36:47'),
(3, 'Top Food Quotes of all time!', '<p>The next best thing to eating food, is talking about it. And we&rsquo;ve all done our fair share of that (well some of us).</p>\r\n\r\n<p>But there are some people who love food so much, who think about food in just the right way, that they put into words&nbsp;what we&rsquo;ve always felt but haven&rsquo;t been able to express out loud. Our team has put together some of the best such quotes below, enjoy!</p>\r\n\r\n<p><strong>Say Cheese!</strong></p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="cheese" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/cheese.jpg?resize=600%2C788" style="height:788px; width:600px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Mark Twain means&nbsp;&ldquo;Mark number two&rdquo;</strong></p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="cauliflower" src="https://i0.wp.com/blog.spooner.in/wp-content/uploads/cauliflower.jpg?resize=600%2C788" style="height:788px; width:600px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>And Julia was the best&hellip;</strong></p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="best people" src="https://i1.wp.com/blog.spooner.in/wp-content/uploads/best-people.jpg?resize=600%2C788" style="height:788px; width:600px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>May the force be with you!</strong></p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="egg" src="https://i1.wp.com/blog.spooner.in/wp-content/uploads/egg.jpg?resize=600%2C772" style="height:772px; width:600px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Universal experience:</strong>&nbsp;that comes from&nbsp;the state of mind called consciousness</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="food common ground" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/food-common-ground.jpg?resize=600%2C690" style="height:690px; width:600px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 1, 0, 4, 14, 1, 'user/article/7qPbo8T6wQAo83jGgjWXxuhPqaG5lgKUOTD8aZZi.jpeg', '2018-04-06 19:42:39', '2018-04-15 07:00:01'),
(4, '12 Brunches You Absolutely Must Try Out In Delhi NCR This Weekend', '<p>Recently, the most noticeable thing we&rsquo;ve seen&nbsp;about the weekends are Sunday brunches. Be it a special occasion or a pleasant start to a lazy Sunday, brunches are a perfect meal for celebration or unwinding after a hectic week.</p>\r\n\r\n<p>These siestas are attended religiously by true Delhi-wallas&nbsp;looking to soothe a hangover and probably make another for Monday. It&rsquo;s a perfect way to drown the sins of Saturday, get your belly bursting and your brain buzzing!</p>\r\n\r\n<p>Here&rsquo;s some of the coolest brunch buffets in Gurgaon (Gurugram now, why!) &nbsp;and Delhi</p>\r\n\r\n<p><strong>Zu Tisch</strong></p>\r\n\r\n<p>M 18, M Block Market, Greater Kailash (GK) 1, New Delhi<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;Get brunch at Rs. 1400 includes beer &amp; wine on all days between 12:00 PM to 11:30 PM. (all inclusive)&nbsp;<strong>or&nbsp;</strong>Get brunch at Rs. 1000 without drinks on all days between 12:00 PM to 11:30 PM. (all inclusive)</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Zu Tisch" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/Zu-Tisch.jpg?resize=670%2C446" style="height:436px; width:656px" /></a></p>\r\n\r\n<p><strong>Bistrot &ndash; Optus Sarovar Premiere</strong></p>\r\n\r\n<p>Optus Sarovar Premiere, 43 to 47, City Centre, Sector 29, Gurgaon<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;Get Sunday brunch offer at Rs. 925 on all days between 12:00 PM to 3:00 PM.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Bistrot - Optus Sarovar Premiere" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/Bistrot-Optus-Sarovar-Premiere.jpg?resize=650%2C349" style="height:349px; width:650px" /></a></p>\r\n\r\n<p><strong>Turquoise Cottage</strong></p>\r\n\r\n<p>Restaurant Block, DLF Place Mall, Saket, New Delhi 110017 and&nbsp;1st Floor, JMD Regent Square, DLF Phase 2, MG Road, Gurgaon<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;@ Saket:&nbsp;Get Sunday Brunch include only soft beverages with special price of Rs. 599 (taxes as applicable) from 12:00 PM to 4:00 PM&nbsp;<strong>or</strong>@Gurgaon:&nbsp;Get Sunday Brunch include only soft beverages and 1 pint of beer with special price of Rs. 399 (taxes as applicable) from 12:00 PM to 4:00 PM</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Turquoise Cottage" src="https://i1.wp.com/blog.spooner.in/wp-content/uploads/Turquoise-Cottage.jpg?resize=676%2C360" style="height:349px; width:656px" /></a></p>\r\n\r\n<p><strong>Sandys Cocktails &amp; Kitchen</strong></p>\r\n\r\n<p>SCO 388, Addacent to IFFCO Metro Station, Sector 29, Gurgaon<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;Get sunday brunch + alcohol (IMFL) at Rs. 1850 on all days between 12:00 PM to 11:30 PM</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Sandys Cocktails &amp; Kitchen" src="https://i1.wp.com/blog.spooner.in/wp-content/uploads/Sandys-Cocktails-Kitchen.jpg?resize=676%2C388" style="height:376px; width:656px" /></a></p>\r\n\r\n<p><strong>Smaaash</strong></p>\r\n\r\n<p>Cyber Hub, Phase 2, DLF Cyber City, Gurgaon<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;Get exclusive offer of Sunday brunch (Alcohol + Buffet) at Rs. 1149 on all days between 11:00 AM to 3:00 PM.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Smaaash" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/Smaaash.jpg?resize=650%2C379" style="height:379px; width:650px" /></a></p>\r\n\r\n<p><strong>Indijoe</strong></p>\r\n\r\n<p>3rd Floor, Ambience Mall, Gurgaon<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;Get exclusive offer of Sunday brunch at Rs. 750 on &nbsp;between 12:30 PM to 4:00 PM.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Indijoe" src="https://i0.wp.com/blog.spooner.in/wp-content/uploads/Indijoe.jpg?resize=676%2C379" style="height:368px; width:656px" /></a></p>\r\n\r\n<p><strong>Dine-Esty</strong></p>\r\n\r\n<p>Time Square Building, B Block, Sushant Lok 1, Sushant Lok, Gurgaon<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;Get 15% off on total bill on all days between 12:00 PM to 11:00 PM .</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Dine-Esty" src="https://i1.wp.com/blog.spooner.in/wp-content/uploads/Dine-Esty.jpg?resize=650%2C345" style="height:345px; width:650px" /></a></p>\r\n\r\n<p><strong>Jungle Jamboree</strong></p>\r\n\r\n<p>Sushant Lok, Gurgaon and&nbsp;Outer Circle, Connaught Place<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;@Connaught Place:&nbsp;Get exclusive offer of unlimited 7 course buffet + unlimited IMFL at Rs. 1450 all inclusive on all days between 12:00 PM to 11:30 PM &nbsp;<strong>or</strong>&nbsp;@Gurgaon:&nbsp;Get exclusive offer of 10% discount on 7 course buffet + drinks (non Alcohlic) on all days between 12:30 PM to 11:00 PM.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Jungle Jamboree" src="https://i2.wp.com/blog.spooner.in/wp-content/uploads/Jungle-Jamboree.jpg?resize=676%2C389" style="height:377px; width:656px" /></a></p>\r\n\r\n<p><strong>7 Degrees Brauhaus</strong></p>\r\n\r\n<p>310 &amp; 311, 3rd Floor, DLF South Point Mall, DLF Phase 5, Golf Course Road, Gurgaon<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;Get 15% off on total bill, all days from 12:00 PM to 10:30 PM.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="7 Degrees Brauhaus" src="https://i0.wp.com/blog.spooner.in/wp-content/uploads/7-Degrees-Brauhaus.jpg?resize=676%2C338" style="height:328px; width:656px" /></a></p>\r\n\r\n<p><strong>Ardor</strong></p>\r\n\r\n<p>N 55 to 56 &amp; 88 to 89, Outer Circle, Connaught Place, New Delhi<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;Get 20% off on total food bill and get 1+1 on IMFL on all days between 12:00 PM to 2:30 PM.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Ardor" src="https://i0.wp.com/blog.spooner.in/wp-content/uploads/Ardor.jpg?resize=650%2C355" style="height:355px; width:650px" /></a></p>\r\n\r\n<p>Kinbuck 2</p>\r\n\r\n<p>P-10/90, 1st &amp; 2nd floor Outer Circle, Connaught Place, New Delhi<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;Get 15% off on food bill on Friday, Saturday and Sunday between 12:00 PM to 11:30 PM.&nbsp;Note: Prior appointment is mandatory for this offer.</p>\r\n\r\n<p><a href="https://www.spooner.in/app"><img alt="Kinbuck 2" src="https://i1.wp.com/blog.spooner.in/wp-content/uploads/Kinbuck-2.jpg?resize=650%2C390" style="height:390px; width:650px" /></a></p>\r\n\r\n<p>Summer House Cafe</p>\r\n\r\n<p>1st Floor, DDA Shopping Complex, Aurobindo Place, Hauz Khas, New Delhi<br />\r\n<a href="https://www.spooner.in/app">Spooner Offer:</a>&nbsp;Get 15% off on food bill on all days between 12:00 PM to 11:30 PM.&nbsp;Also Get 1+1 on IMFL on all days between 12:00 PM to 9:00 PM.</p>', 1, 0, 11, 14, 1, 'user/article/wDiJcqidU6msKh30WdFoaON7glzu7WXb4C0W46Ec.png', '2018-04-10 06:24:30', '2018-04-16 05:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Software', '2018-03-30 14:38:35', '2018-03-30 14:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `branch_departments`
--

CREATE TABLE `branch_departments` (
  `id` int(11) NOT NULL,
  `branch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_departments`
--

INSERT INTO `branch_departments` (`id`, `branch_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2', 'Marketing', '2018-04-13 04:39:41', '2018-04-13 12:36:14'),
(2, '2', 'Sales', '2018-04-13 12:36:30', '2018-04-13 12:36:30'),
(3, '2', 'Operations', '2018-04-13 12:36:38', '2018-04-13 12:36:38'),
(4, '3', 'Technology', '2018-04-13 12:36:47', '2018-04-13 12:36:47'),
(5, '3', 'Computer Sciences', '2018-04-13 12:37:03', '2018-04-13 12:37:03'),
(6, '3', 'Mechanics', '2018-04-13 12:37:15', '2018-04-13 12:37:15'),
(7, '3', 'Civil Services', '2018-04-13 12:37:25', '2018-04-13 12:37:25'),
(8, '4', 'Human Resources', '2018-04-13 12:37:35', '2018-04-13 12:37:35'),
(9, '4', 'Operations Management', '2018-04-13 12:37:46', '2018-04-13 12:37:46'),
(10, '4', 'Safety', '2018-04-13 12:37:57', '2018-04-13 12:37:57'),
(11, '4', 'Maintenance', '2018-04-13 12:38:05', '2018-04-13 12:38:05'),
(12, '6', 'Software Development', '2018-04-13 12:38:14', '2018-04-13 12:38:14'),
(13, '6', 'Application development', '2018-04-13 12:38:24', '2018-04-13 12:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `branch_rules`
--

CREATE TABLE `branch_rules` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_rules`
--

INSERT INTO `branch_rules` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Dubai', '2018-04-13 04:17:08', '2018-04-13 12:35:21'),
(3, 'EIthopia', '2018-04-13 12:35:30', '2018-04-13 12:35:30'),
(4, 'Egypt', '2018-04-13 12:35:55', '2018-04-13 12:35:55'),
(5, 'India', '2018-04-13 12:36:03', '2018-04-13 12:36:03'),
(6, 'India', '2018-04-13 12:36:03', '2018-04-13 12:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Top News', '2018-02-23 20:31:47', '2018-02-23 20:31:47'),
(2, 'Innovation', '2018-02-23 20:31:59', '2018-02-23 20:31:59'),
(3, 'Achievements', '2018-02-23 20:32:18', '2018-02-23 20:32:18'),
(4, 'Hot News', '2018-02-23 20:32:37', '2018-02-23 20:32:37'),
(5, 'Testimonials', '2018-02-23 20:32:45', '2018-02-23 20:32:45'),
(6, 'Sharing Experience', '2018-02-23 20:32:53', '2018-02-23 20:32:53'),
(7, 'Changed name', '2018-02-23 20:33:04', '2018-03-29 18:40:00'),
(9, 'new cateogry', '2018-03-29 18:40:13', '2018-03-29 18:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `category_articles`
--

CREATE TABLE `category_articles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_articles`
--

INSERT INTO `category_articles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bucket List', '2018-04-09 00:01:22', '2018-04-10 07:33:14'),
(2, 'Foodgasm', '2018-04-09 00:02:51', '2018-04-10 07:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_products`
--

CREATE TABLE `category_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_products`
--

INSERT INTO `category_products` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tooling', '2018-04-11 12:36:54', '2018-04-11 12:36:54'),
(2, 'Machinery', '2018-04-11 12:36:44', '2018-04-11 12:36:44'),
(3, 'Electronics', '2018-04-11 12:37:17', '2018-04-11 12:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `category_tools`
--

CREATE TABLE `category_tools` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tools`
--

INSERT INTO `category_tools` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'EQUIPMENT', '2018-04-13 11:27:38', '2018-04-13 12:14:54'),
(2, 'TOOLS', '2018-04-13 12:11:17', '2018-04-13 12:14:38'),
(3, 'MACHINERY', '2018-04-13 12:14:22', '2018-04-13 12:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `category_videos`
--

CREATE TABLE `category_videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_videos`
--

INSERT INTO `category_videos` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Science and Technology', '2018-04-08 23:52:48', '2018-04-10 07:43:18'),
(3, 'Sports', '2018-04-08 23:53:44', '2018-04-10 07:43:06'),
(4, 'International News', '2018-04-09 00:01:03', '2018-04-10 07:42:58'),
(5, 'World politics', '2018-04-10 07:43:33', '2018-04-10 07:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` int(11) DEFAULT '0',
  `publish` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `approve` int(11) NOT NULL DEFAULT '0',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(1) NOT NULL DEFAULT '1',
  `user_id` int(10) DEFAULT '0',
  `category_id` int(10) DEFAULT '0',
  `industry_id` int(10) DEFAULT '0',
  `sent_sponsor_investor` int(1) NOT NULL DEFAULT '0',
  `total_solutions` int(10) NOT NULL DEFAULT '0',
  `solution_id` int(10) NOT NULL DEFAULT '0',
  `compid` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `title`, `description`, `admin_id`, `publish`, `active`, `approve`, `start_date`, `end_date`, `created_at`, `updated_at`, `picture`, `type`, `user_id`, `category_id`, `industry_id`, `sent_sponsor_investor`, `total_solutions`, `solution_id`, `compid`) VALUES
(1, 'Low energy devices', '<p>This is my own idea of replacing power plants to low energy devices what we can do is we can setup windmill in the deep oceans and they can produce high amount of energy which can help inn all says to mankind . Am looking for smart and enthusiastic gentleman to check my idea and allow my mind to explore more with helping in investors and sponsor my idea. Thanks.</p>', 0, 0, 0, 0, NULL, NULL, '2018-02-26 13:31:23', '2018-03-08 20:11:41', NULL, 1, 1, 0, 0, 0, 0, 0, ''),
(2, 'Idea posting website', 'Hello , This is for a demo purpose with the client.', 0, 0, 0, 0, NULL, NULL, '2018-03-08 20:27:23', '2018-03-08 20:30:40', NULL, 1, 1, 0, 0, 0, 0, 0, ''),
(3, 'Renewable Resources', '<p>A renewable resource is a resource which can be used repeatedly and replaced naturally. Examples include oxygen, fresh water, solar energy and biomass. New resources may include goods or commodities such as wood, paper and leather. Gasoline, coal, natural gas, diesel, plastics and other fossil fuels are not renewable. The five major renewable energy resources are solar, wind, water (hydro), biomass, and geothermal. Since the dawn of humanity people have used renewable sources of energy to survive &mdash; wood for cooking and heating, wind and water for milling grain, and solar for lighting fires.There are nine major areas of energy resources. They fall into two categories: nonrenewable and renewable. Nonrenewable energy resources, like coal, nuclear, oil, and natural gas, are available in limited supplies. This is usually due to the long time it takes for them to be replenished.</p>', 0, 1, 1, 1, '2018-03-14', '2018-03-30', '2018-03-14 18:54:36', '2018-03-20 19:19:19', NULL, 1, 37, 0, 0, 0, 0, 0, ''),
(4, 'Testing 1', '<p>test</p>', 11, 1, 1, 1, '2018-03-15', '2018-03-23', '2018-03-15 20:55:39', '2018-03-15 20:58:40', NULL, 1, 0, 0, 0, 0, 0, 0, ''),
(5, 'Mobile app development', '<p>Mobile app development is a term used to denote the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants, enterprise digital assistants or mobile phones.</p>\r\n\r\n<p>The official language for Android development is <strong>Java</strong>. Large parts of Android are written in <strong>Java</strong> and its APIs are designed to be called primarily from <strong>Java</strong>. It is possible to develop C and C++ app using the Android Native Development Kit (<strong>NDK</strong>), however it isn&#39;t something that Google promotes. <strong>Creating</strong> your own <strong>Mobile App</strong> with the Infinite Monkeys <strong>App</strong> Maker is super-easy. The entire site is drag-and-drop. You just pick what you want included your <strong>app</strong>, and then drag it in. However you define &quot;community&quot; we can help you connect with the people who are important to you.</p>\r\n\r\n<p>&nbsp;</p>', 11, 1, 1, 1, '2018-03-16', '2018-03-31', '2018-03-16 12:07:33', '2018-03-16 17:12:24', NULL, 1, 0, 0, 0, 0, 0, 0, ''),
(6, 'Water consumption', '<p>A number of factors can influence per capita <strong>consumption</strong> of <strong>water</strong>, including human rights concerns. The average per capita <strong>water consumption</strong> in Israel is about 280 litres. However, in the Israel occupied Palestinian Territories, the average Palestinian <strong>consumes</strong> only about 60 litres of <strong>water</strong> per day!</p>', 11, 1, 1, 1, '2018-03-15', '2018-03-31', '2018-03-16 17:20:48', '2018-03-16 17:24:16', NULL, 1, 0, 0, 0, 0, 0, 0, ''),
(7, 'Electricity Consumeptions', '<p>A number of factors can influence per capita <strong>consumption</strong> of <strong>water</strong>, including human rights concerns. The average per capita <strong>water consumption</strong> in Israel is about 280 litres. However, in the Israel occupied Palestinian Territories, the average Palestinian <strong>consumes</strong> only about 60 litres of <strong>water</strong> per day!</p>', 11, 1, 1, 1, '2018-03-20', '2018-03-20', '2018-03-16 17:21:52', '2018-03-16 17:24:07', NULL, 1, 0, 0, 0, 0, 0, 0, ''),
(8, 'Mankind needs and solutions', '<p>A number of factors can influence per capita <strong>consumption</strong> of <strong>water</strong>, including human rights concerns. The average per capita <strong>water consumption</strong> in Israel is about 280 litres. However, in the Israel occupied Palestinian Territories, the average Palestinian <strong>consumes</strong> only about 60 litres of <strong>water</strong> per day</p>', 11, 1, 1, 1, '2018-03-15', '2018-03-31', '2018-03-16 17:41:24', '2018-03-16 17:52:34', NULL, 1, 0, 0, 0, 0, 0, 0, ''),
(9, 'Computer and usages', '<p>From Engineers to Doctors, Students, Teachers, Government Organization they all <strong>use computers</strong> to perform specific tasks, for entertainment or just to finish office work. <strong>Computers</strong> have made our life easier. ... They are used at Home for work and entertainment purposes, at Office, In hospitals, in government organizations.</p>', 11, 1, 1, 1, '2018-03-22', '2018-03-16', '2018-03-16 17:42:25', '2018-03-16 17:52:27', NULL, 1, 0, 0, 0, 0, 0, 0, ''),
(10, 'Lack of economic opportunity and employment', '<p>Lack of economic opportunity and employment - how can we secure enought jobs?</p>', 11, 1, 1, 1, '2018-03-08', '2018-04-30', '2018-03-16 18:41:49', '2018-04-13 14:17:32', NULL, 1, 0, 0, 0, 0, 0, 0, 'vbmnghgf'),
(11, 'Safety / security / wellbeing', '<p>Safety / security / wellbeing - is one of the biggest challenges we face today</p>', 11, 1, 1, 1, '2018-03-16', '2018-04-30', '2018-03-16 19:05:35', '2018-04-13 14:17:02', NULL, 1, 0, 0, 0, 0, 0, 0, 'fgjgdjd'),
(12, 'Lack of education', '<p>Lack of education - there are just not enough schools&nbsp;</p>', 11, 1, 0, 1, '2018-03-16', '2018-04-30', '2018-03-16 19:06:25', '2018-04-13 14:16:31', NULL, 1, 0, 0, 0, 0, 0, 0, '123465'),
(13, 'Food and water security', '<p>Food and water security - how do we procure enough?</p>', 11, 1, 1, 1, '2018-03-15', '2018-04-27', '2018-03-20 19:28:31', '2018-04-13 14:16:15', NULL, 1, 0, 0, 0, 0, 0, 0, 'REF1010'),
(14, 'Government accountability and transparency / corruption', '<p>Government accountability and transparency / corruption&nbsp;- how to resolve the matters?</p>', 11, 1, 1, 1, '2018-03-19', '2018-04-30', '2018-03-20 20:15:50', '2018-04-13 14:15:19', NULL, 1, 0, 0, 0, 0, 0, 0, '321654'),
(15, 'Religious conflicts', '<p>Religious conflicts - how to resolve these matters?</p>', 11, 1, 1, 1, '2018-03-22', '2018-04-30', '2018-03-22 12:51:43', '2018-04-13 14:15:03', NULL, 1, 0, 0, 0, 0, 0, 0, '521'),
(16, 'Poverty', '<p>Poverty - how do we solve this?</p>', 11, 1, 1, 1, '2018-03-15', '2018-04-30', '2018-03-23 12:31:07', '2018-04-16 04:28:43', NULL, 1, 0, 0, 0, 0, 2, 0, 'REF2038'),
(17, 'Inequality (income, discrimination)', '<p>Inequality (income, discrimination) - how do we solve this?</p>', 11, 1, 1, 1, '2018-03-22', '2018-04-30', '2018-03-23 12:51:19', '2018-04-13 14:14:30', NULL, 1, 0, 0, 0, 0, 1, 0, 'ref230318'),
(18, 'This is the metec challenge', '<p>This is the metec challnege description</p>', 11, 1, 1, 1, '2018-03-28', '2018-03-30', '2018-03-27 12:45:19', '2018-03-27 12:45:19', NULL, 3, 0, 2, 0, 0, 0, 0, 'abcd'),
(19, 'Large scale conflict / wars', '<p>Large scale conflict / wars, how do we solve this?</p>', 11, 1, 1, 1, '2018-03-22', '2018-04-28', '2018-03-27 13:10:26', '2018-04-13 14:06:08', NULL, 1, 0, 0, 0, 0, 0, 0, '1123455'),
(20, 'Challenge 5', '<p>Put a dora doll in the middle of&amp;nbsp;Walmart.When someone tries to pick it up yell &quot;SWIPER NO SWIPING&quot;.</p>', 11, 1, 1, 1, '2018-03-15', '2018-05-31', '2018-03-27 13:52:20', '2018-04-16 10:30:51', NULL, 2, 0, 0, 0, 0, 2, 0, 'Ch293'),
(21, 'Challenge 4', '<p>Go to McDonalds and ask for a happy meal with extra happy.</p>', 11, 1, 1, 1, '2018-03-27', '2018-04-30', '2018-03-27 14:27:14', '2018-04-13 13:57:27', NULL, 2, 0, 0, 0, 0, 1, 0, 'abc132'),
(22, 'Challenge 3', '<p>Run up to someone random on the street and slap them with a loaf of bread.</p>', 11, 1, 1, 1, '2018-03-27', '2018-04-30', '2018-03-27 17:25:28', '2018-04-13 13:57:10', NULL, 2, 0, 0, 0, 0, 1, 0, 'CHL123'),
(23, 'Challenge 2', '<p>Look at see through glass and when someone is on the other side shout &quot;OH MY GOD, I&#39;M HIDEOUS!&quot;</p>', 11, 1, 1, 1, '2018-03-27', '2018-04-30', '2018-03-27 18:04:19', '2018-04-13 13:56:50', NULL, 2, 0, 0, 0, 0, 1, 0, 'CHD1236'),
(24, 'machine!', '<p>Does anyone know how to fix this machine</p>\r\n\r\n<p><img alt="" src="http://natijobs200054713.ipage.com/metip/img/machine_one.jpeg" style="height:194px; width:259px" /></p>', 11, 1, 1, 1, '2018-03-27', '2018-03-31', '2018-03-27 18:24:44', '2018-03-27 18:24:44', NULL, 3, 0, 3, 0, 0, 0, 0, 'Abcd'),
(25, 'Challenge 1', '<p>Point at someone and shout &quot;Your one of them!&quot; Run and pretend to trip. Crawl away slowly.</p>', 11, 1, 1, 1, '2018-04-06', '2018-05-31', '2018-03-27 18:26:31', '2018-04-13 13:56:17', NULL, 2, 0, 0, 0, 0, 0, 0, 'Challenge 1'),
(26, 'Climate change / destruction of nature', '<p>Climate change / destruction of nature - how to solve?</p>', 11, 1, 1, 1, '2018-04-02', '2018-05-05', '2018-04-02 22:55:51', '2018-04-13 14:05:49', NULL, 1, 0, 0, 0, 0, 0, 0, '661'),
(27, 'Challenge 8', '<p>Go to petsmart and buy bird seed. Then ask the clerk how long it will take the birds to grow.</p>', 11, 1, 1, 1, '2018-04-13', '2018-05-30', '2018-04-13 14:00:07', '2018-04-13 14:00:21', NULL, 2, 0, 0, 0, 0, 0, 0, '123456789'),
(28, 'Challenge 7', '<p>Bring a desk on an elevator. When people try to get on ask if they have an appointment.</p>', 11, 1, 1, 1, '2018-04-13', '2018-05-29', '2018-04-13 14:00:40', '2018-04-13 14:00:52', NULL, 2, 0, 0, 0, 0, 0, 0, 'poupiu'),
(29, 'Challenge 6', '<p>Go up to a random lady with a daughter and say her son is adorable.</p>', 11, 1, 1, 1, '2018-04-13', '2018-05-31', '2018-04-13 14:01:06', '2018-04-16 09:44:55', NULL, 2, 0, 0, 0, 0, 1, 0, 'fghfgjf');

-- --------------------------------------------------------

--
-- Table structure for table `idea_applicants`
--

CREATE TABLE `idea_applicants` (
  `id` int(10) UNSIGNED NOT NULL,
  `idea_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quotation` int(10) DEFAULT '0',
  `score` int(10) NOT NULL DEFAULT '0',
  `vote` int(5) NOT NULL DEFAULT '0',
  `total` int(5) NOT NULL DEFAULT '0',
  `sent_sponsor_investor` int(1) NOT NULL DEFAULT '0',
  `admin_comment` text COLLATE utf8_unicode_ci,
  `sent_date` date DEFAULT NULL,
  `total_invester` int(10) NOT NULL DEFAULT '0',
  `total_sponsor` int(10) NOT NULL DEFAULT '0',
  `total_sponsor_invester` int(10) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `idea_applicants`
--

INSERT INTO `idea_applicants` (`id`, `idea_id`, `user_id`, `comment`, `status`, `created_at`, `updated_at`, `quotation`, `score`, `vote`, `total`, `sent_sponsor_investor`, `admin_comment`, `sent_date`, `total_invester`, `total_sponsor`, `total_sponsor_invester`, `type`) VALUES
(1, 16, 34, 'This is idea on this competition.', 0, '2018-03-23 12:31:31', '2018-03-23 12:37:05', 0, 0, 0, 0, 1, 'This is a description to send this idea to sponsor and investor. Kindly check this description and provide me your best offer and description is it for sponsor or invester', '2018-03-23', 0, 1, 1, 1),
(2, 17, 34, 'This is my great idea!', 0, '2018-03-23 12:51:59', '2018-03-23 13:04:13', 0, 100, 23, 123, 1, 'Checkout this great idea', '2018-03-23', 0, 1, 1, 1),
(3, 20, 34, 'I want to post this solution. Kindly check and let me know if its fine. I don\'t want any reward for this one. This is only for test.', 0, '2018-03-27 13:55:18', '2018-03-27 13:59:43', 0, 3, 5, 8, 0, NULL, NULL, 0, 0, 0, 1),
(4, 21, 34, 'This is sandeep\'s solution!', 0, '2018-03-27 14:28:52', '2018-03-27 16:51:04', 0, 100, 10, 110, 1, 'awesome solution!', '2018-03-27', 0, 1, 1, 1),
(5, 22, 34, 'This is an awesome and super suggestion!', 0, '2018-03-27 17:26:49', '2018-03-27 17:27:59', 0, 99, 20, 119, 1, 'Awesome details', '2018-03-27', 0, 0, 0, 1),
(6, 23, 34, 'this is my solution!', 0, '2018-03-27 18:06:34', '2018-03-27 18:09:36', 0, 95, 30, 125, 1, 'Check it out!', '2018-03-27', 0, 1, 1, 1),
(7, 16, 60, '', 0, '2018-04-16 04:28:43', '2018-04-16 04:28:43', 0, 0, 0, 0, 0, NULL, NULL, 0, 0, 0, 1),
(8, 29, 60, '', 0, '2018-04-16 09:44:55', '2018-04-16 09:44:55', 0, 0, 0, 0, 0, NULL, NULL, 0, 0, 0, 1),
(9, 20, 60, '', 0, '2018-04-16 10:30:51', '2018-04-16 10:30:51', 0, 0, 0, 0, 0, NULL, NULL, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `idea_conversations`
--

CREATE TABLE `idea_conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `from_user_id` int(11) DEFAULT '0',
  `to_user_id` int(11) DEFAULT '0',
  `idea_id` int(11) DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `attach_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_admin_id` int(10) DEFAULT '0',
  `to_admin_id` int(10) DEFAULT '0',
  `wishlist_id` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `idea_conversations`
--

INSERT INTO `idea_conversations` (`id`, `from_user_id`, `to_user_id`, `idea_id`, `description`, `created_at`, `updated_at`, `attach_file`, `from_admin_id`, `to_admin_id`, `wishlist_id`) VALUES
(1, 34, 0, 16, 'My message on this idea', '2018-03-23 12:32:02', '2018-03-23 12:32:02', 'idea/convers/nPChe8H4VG7r8CnPy412yoV7TKDgZl0Gvue5tAJD.jpeg', 0, 11, 0),
(2, 59, 0, 0, 'Communication message from investor/sponsor to admin', '2018-03-23 12:38:17', '2018-03-23 12:38:17', NULL, 0, 11, 1),
(3, 0, 59, 0, 'Communicate from admin to invesor', '2018-03-23 12:38:40', '2018-03-23 12:38:40', NULL, 11, 0, 1),
(4, 34, 0, 17, 'Did you get it?', '2018-03-23 13:01:11', '2018-03-23 13:01:11', NULL, 0, 11, 0),
(5, 0, 34, 17, 'Yesi got it!', '2018-03-23 13:01:50', '2018-03-23 13:01:50', NULL, 11, 0, 0),
(6, 59, 0, 0, 'Good for the community!', '2018-03-23 13:05:07', '2018-03-23 13:05:07', NULL, 0, 11, 2),
(7, 0, 59, 0, 'look like a great offer!', '2018-03-23 13:05:41', '2018-03-23 13:05:41', NULL, 11, 0, 2),
(8, 34, 0, 20, 'test message', '2018-03-27 13:55:56', '2018-03-27 13:55:56', NULL, 0, 11, 0),
(9, 34, 0, 21, 'did you like it?', '2018-03-27 14:29:22', '2018-03-27 14:29:22', 'idea/convers/EW3Ems1xRX0VaxHTmIHznX3usIdfig40ORpJpzZ6.png', 0, 11, 0),
(10, 59, 0, 0, 'The cocept is good but I doubt', '2018-03-27 16:51:30', '2018-03-27 16:51:30', NULL, 0, 11, 3),
(11, 0, 34, 22, 'not too bad', '2018-03-27 17:27:45', '2018-03-27 17:27:45', NULL, 11, 0, 0),
(12, 34, 0, 23, 'this is messaGE', '2018-03-27 18:06:48', '2018-03-27 18:06:48', NULL, 0, 11, 0),
(13, 0, 34, 23, 'best of luck!', '2018-03-27 18:07:46', '2018-03-27 18:07:46', NULL, 11, 0, 0),
(14, 59, 0, 0, 'I want to invest so make sure I get my money doubled!', '2018-03-27 18:10:19', '2018-03-27 18:10:19', NULL, 0, 11, 4),
(15, 0, 59, 0, 'Sounds great! we look forward to spending your money!', '2018-03-27 18:10:45', '2018-03-27 18:10:45', NULL, 11, 0, 4),
(16, 34, 0, 23, 'This is the message', '2018-03-29 18:46:59', '2018-03-29 18:46:59', NULL, 0, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `idea_invitations`
--

CREATE TABLE `idea_invitations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `idea_wishlists`
--

CREATE TABLE `idea_wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `idea_applicant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `offer` int(11) NOT NULL,
  `lookingfor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `type` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `idea_wishlists`
--

INSERT INTO `idea_wishlists` (`id`, `idea_applicant_id`, `user_id`, `offer`, `lookingfor`, `created_at`, `updated_at`, `status`, `type`) VALUES
(1, 1, 59, 2000, 'Invest', '2018-03-23 12:37:05', '2018-03-23 14:10:05', 1, 1),
(2, 2, 59, 500, 'Sponsor', '2018-03-23 13:04:13', '2018-03-23 13:05:07', 0, 1),
(3, 4, 59, 5000, 'Invest', '2018-03-27 16:51:04', '2018-03-27 16:51:30', 0, 2),
(4, 6, 59, 3000, 'Invest', '2018-03-27 18:09:36', '2018-03-27 18:10:45', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dubai', '2018-03-29 18:31:38', '2018-03-29 18:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `manuals`
--

CREATE TABLE `manuals` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `admin_id` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manuals`
--

INSERT INTO `manuals` (`id`, `title`, `description`, `type`, `picture`, `user_id`, `admin_id`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Rishi\'s manual', '<p>This is the descritption for manual</p>', 1, 'mlt/manuals/aVn2TJqEfxjlsB11gjC6o951d27DyEH0qVs2Z5Pj.png', 0, 11, '2018-04-02 20:25:01', '2018-04-02 20:25:01', 3),
(2, 'This is a tank manual!', '<p>Awesome tank!</p>', 1, 'mlt/manuals/Cq9okHYmj5JYpTnGSTC1DRHWdImmfUM2xrUTfTSp.pdf', 0, 11, '2018-04-03 12:42:48', '2018-04-03 12:42:48', 3);

-- --------------------------------------------------------

--
-- Table structure for table `meticcomments`
--

CREATE TABLE `meticcomments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `meticpost_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meticcomments`
--

INSERT INTO `meticcomments` (`id`, `user_id`, `meticpost_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 60, 2, 'Yeah!!! you are right. This is gonna be a big story of this year.', '2018-03-29 16:23:53', '2018-03-29 16:23:53'),
(2, 60, 2, 'Really!', '2018-03-29 18:14:41', '2018-03-29 18:14:41'),
(3, 60, 3, 'this is the comment 1', '2018-03-29 18:36:59', '2018-03-29 18:36:59'),
(4, 60, 3, 'add a new comment!', '2018-03-29 18:37:57', '2018-03-29 18:37:57'),
(5, 38, 2, 'No.. It s not a wonder thing.. You can do it at yorur own also. This one was the nice solution but not possible now. You can post another comment and try to find the new solutin.', '2018-03-30 19:16:56', '2018-03-30 19:16:56'),
(6, 60, 5, 'hey there', '2018-04-02 20:16:34', '2018-04-02 20:16:34'),
(7, 60, 5, 'How is it going?', '2018-04-02 20:16:48', '2018-04-02 20:16:48'),
(8, 60, 6, 'This is the comment', '2018-04-03 12:15:20', '2018-04-03 12:15:20'),
(9, 60, 7, 'hello', '2018-04-03 12:15:54', '2018-04-03 12:15:54'),
(10, 60, 3, 'hellow!', '2018-04-03 12:16:44', '2018-04-03 12:16:44'),
(11, 60, 7, 'OK this is a good post', '2018-04-04 13:33:33', '2018-04-04 13:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `meticposts`
--

CREATE TABLE `meticposts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT '0',
  `admin_id` int(11) DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `metec_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correctans` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meticposts`
--

INSERT INTO `meticposts` (`id`, `title`, `category_id`, `user_id`, `admin_id`, `type`, `description`, `status`, `created_at`, `updated_at`, `metec_id`, `video_file`, `picture_file`, `correctans`) VALUES
(1, 'What is the best achievement in your life?', 3, 0, 11, 1, '<p>My sister told me about it, and it seemed too good to be true at first. But when she said that she had already received $20, I signed up. It was so easy and a monetary motivation really encouraged me to get up and get moving.</p>', 1, '2018-03-29 16:19:03', '2018-03-29 16:19:03', NULL, NULL, NULL, 0),
(2, '"Dawson\'s Creek" Stars Reunite For 20-Year Anniversary', 4, 60, 0, 2, '<p>Katie Holmes, Michelle Williams and more &quot;Dawson&#39;s Creek&quot; stars dish on dealing with the sudden fame of the show. Plus, see the cast all grown up.</p>', 1, '2018-03-29 16:22:55', '2018-03-30 19:17:45', NULL, NULL, NULL, 5),
(3, 'This is the title of the post', 2, 60, 0, 2, '<p>This is the description of the post.</p>', 1, '2018-03-29 18:34:56', '2018-03-29 18:35:45', NULL, NULL, NULL, 0),
(4, 'The lovely top news is notring for now', 1, 60, 0, 2, 'This is just for testing. You can ask for the team to update', 0, '2018-03-30 14:53:22', '2018-03-30 14:53:22', NULL, NULL, NULL, 0),
(5, 'abc', 2, 60, 0, 2, '<p>xyz</p>', 1, '2018-04-02 16:21:16', '2018-04-02 20:16:54', 'abcd12', 'metec/videos/r4LvsoZ5S5hjXid0CHMr7LBLFceX0yFF3R7raH1j.mp4', 'metec/pictures/0cAKYxFTxyv6XtCWLTkgivbY90O4wsHNaQMO5VFn.png', 6),
(6, 'this is the title', 2, 0, 11, 1, '<p>This is teh descirption</p>', 1, '2018-04-02 20:11:13', '2018-04-02 20:11:13', 'abc123', 'metec/videos/YHH0fjutKengDGQs1B6iMaaz8pcBlNTaqaSajfQ7.mp4', 'metec/pictures/AJYZi6NIvycwACXOqXg8PUntcPo8JpxDOENUeYkM.png', 0),
(7, 'sdfdsf', 4, 0, 11, 1, '<p>sdfdsfsdf</p>', 1, '2018-04-02 20:12:47', '2018-04-02 20:12:47', '333e3', NULL, 'metec/pictures/wKZgib4c9az4RXpUIVKkwikzoSoyQyvkAOyyJM10.png', 0),
(8, 'These are the acheivements', 3, 60, 0, 2, 'This is the description', 0, '2018-04-02 20:23:26', '2018-04-02 20:23:26', NULL, 'metec/videos/j52m5WInLM7ik23qZFPUymwTU2k3Z9prXfZV8XdS.mp4', 'metec/pictures/F0lh8bwQZalMmFME7sjwTV4n9aVRfgPlZOOxeNSU.png', 0),
(9, 'This is hot news!', 4, 60, 0, 2, 'Let\'s find some hot news here!', 3, '2018-04-04 13:16:59', '2018-04-16 06:06:27', NULL, 'metec/videos/1pIvcveZt1qdGr4q0Z2wuLjH7C6JblOIYlgJ4tcO.mp4', 'metec/pictures/Bil6MsKkTgg5DIpBDdOdDuNBN3lYQ31hc9HQSUQY.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_15_060710_create_contacts_table', 1),
(4, '2018_02_15_061609_create_admins_table', 1),
(5, '2018_02_15_115326_create_admin_password_resets_table', 1),
(6, '2018_02_19_053342_create_pages_table', 1),
(7, '2018_02_21_105928_create_ideas_table', 2),
(8, '2018_02_22_052350_create_categories_table', 3),
(9, '2018_02_22_052423_create_industries_table', 3),
(10, '2018_02_23_055511_create_manuals_table', 4),
(11, '2018_02_23_072511_create_products_table', 5),
(12, '2018_02_23_100738_create_videos_table', 6),
(13, '2018_02_23_100755_create_articles_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mltcomments`
--

CREATE TABLE `mltcomments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `mltpost_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mltcomments`
--

INSERT INTO `mltcomments` (`id`, `user_id`, `mltpost_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 61, 1, 'Hi This is my comment', '2018-04-03 18:16:46', '2018-04-03 18:16:46'),
(2, 61, 3, 'this is a challenge', '2018-04-03 18:16:57', '2018-04-03 18:16:57'),
(3, 61, 3, 'hello', '2018-04-03 18:39:52', '2018-04-03 18:39:52'),
(4, 61, 3, 'belay', '2018-04-04 16:15:07', '2018-04-04 16:15:07'),
(5, 61, 3, 'HI how are yoy', '2018-04-04 16:33:22', '2018-04-04 16:33:22'),
(6, 61, 3, 'testing', '2018-04-04 20:11:11', '2018-04-04 20:11:11'),
(7, 61, 3, 'testing testing testing testing testing testing testing', '2018-04-04 20:11:50', '2018-04-04 20:11:50'),
(8, 61, 3, 'testing testing testing testing testing testing testing testing testing testing testing testing testing testing', '2018-04-04 20:15:05', '2018-04-04 20:15:05'),
(9, 61, 3, 'testing testing testing testing testing testing testing', '2018-04-04 20:15:14', '2018-04-04 20:15:14'),
(10, 61, 3, 'kjkg sd', '2018-04-04 20:36:41', '2018-04-04 20:36:41'),
(11, 1, 3, 'hey', '2018-04-09 14:34:20', '2018-04-09 14:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `mltposts`
--

CREATE TABLE `mltposts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT '0',
  `admin_id` int(11) DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `mlt_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correctans` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mltposts`
--

INSERT INTO `mltposts` (`id`, `title`, `category_id`, `user_id`, `admin_id`, `type`, `description`, `status`, `mlt_id`, `video_file`, `picture_file`, `correctans`, `created_at`, `updated_at`) VALUES
(1, 'Test MLT Post', 3, 0, 11, 1, '<p>This is my desciion</p>', 1, NULL, NULL, 'mlt/pictures/X5quQDzwXIQboAzFCWDU4hrJxXC97rfC7Ls9X19Q.jpeg', 0, '2018-04-03 12:27:00', '2018-04-03 12:27:00'),
(2, 'Sharing experience Testing', 6, 61, 0, 2, 'This is just a sharing exp testing descirption', 0, NULL, NULL, NULL, 0, '2018-04-03 14:34:13', '2018-04-03 14:34:13'),
(3, 'This is an innovating challenge', 2, 61, 0, 2, '<p>This is the challenge description for the challenge</p>', 1, 'MTLID123', 'mlt/videos/GzzKBiXQVTmlZ6SUVCv7Is8OfgWBVkO6GEWxMc4d.mp4', 'mlt/pictures/dCaCOfdrlKhvBjJ2XXY701qNSUokAoWBOEz8NTa0.png', 2, '2018-04-03 18:15:44', '2018-04-03 19:44:46'),
(4, 'HI how are you', 1, 61, 0, 2, 'belay', 0, NULL, NULL, NULL, 0, '2018-04-04 16:17:29', '2018-04-04 16:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `mltsettings`
--

CREATE TABLE `mltsettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `picture_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mltsettings`
--

INSERT INTO `mltsettings` (`id`, `description`, `picture_file`, `created_at`, `updated_at`) VALUES
(1, '<h2>MTL</h2>\r\n\r\n<p>This page provides information about MTL. some brief desceription of how this will benefit the MLT users</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style="border-radius: 3px;\r\n    padding: 6px 17px;\r\n    background-color: #e7c62a;\r\n    color: white;\r\n    width: fit-content;"><a href="http://132.148.135.156/~mtp/public/user/login">Login</a></p>', 'mlt/banners/2rD0jIxESWO29ru4ngvD5i6L3UWTXA7o9VQdTpPS.jpeg', NULL, '2018-04-03 20:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `heading`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '<p>This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;This is a content of about us page. Change it from admin panel. This is a testing. Testing.&nbsp;</p>', 'about-us', NULL, '2018-02-20 04:40:10'),
(2, 'Innovation', 'this is my sample text', 'innovation', NULL, NULL),
(3, 'Marketing', 'This is my marketing text', 'marketing', NULL, NULL),
(4, 'mlt', 'this is for mlt text', 'mlt', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL DEFAULT '0',
  `pdf_link` text COLLATE utf8_unicode_ci NOT NULL,
  `total_views` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `picture`, `category_id`, `admin_id`, `is_featured`, `pdf_link`, `total_views`, `created_at`, `updated_at`, `url`) VALUES
(2, 'Huron NU3 Universal Milling Machine EXCELLENT CONDITION', '<p><strong>Huron NU3 Universal Milling Machine an excellent condition machine&nbsp;with 3 axis digital read out system, 40 int spindle.</strong></p>\r\n\r\n<p>Must be viewed to be appreciated !</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing="0" style="width:755px">\r\n	<tbody>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Manufacturer</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>Huron</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Model</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>NU3 Universal Milling Machine</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Table Size:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>1235 x 460 mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Long travel</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>900 mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Cross travel</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>700 mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Vertical travel</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>500 mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Rapid Travel Range:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>2800 mm / m</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Feed Range:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>6 &ndash; 800 mm / m</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Spindle taper</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>40 INT</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Features</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>*3 Axis Newall Topaz DRO no warranty on used DRO<br />\r\n			Power Feeds<br />\r\n			Coolant<br />\r\n			LVL<br />\r\n			Table Extensions</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Speed range</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>30 &ndash; 2066 r.p.m.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'user/product/KHcreKznTST6vJgJ5EU8qmRAvdSDbOKXkAWcINDL.jpeg', 1, 14, 0, 'user/pdf/KHcreKznTST6vJgJ5EU8qmRAvdSDbOKXkAWcINDL.jpeg', 7, '2018-04-06 19:56:14', '2018-04-16 06:13:23', '#'),
(3, 'Jones & Shipman 310T Tool & Cutter Grinder', '<p>203 x 406mm ( 8&Prime; x 16&Prime;) capacity</p>\r\n\r\n<table cellspacing="0" style="width:755px">\r\n	<tbody>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Manufacturer</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>Jones &amp; Shipman</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Model</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>310T Tool and Cutter Grinder</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Height of centres:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>16&Prime;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Swing over bed:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>8&Prime;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'user/product/PciQDduqeFIhZ05hYW5Nvz1G14g7aOQ9W1KfkN1H.jpeg', 1, 14, 0, 'user/pdf/PciQDduqeFIhZ05hYW5Nvz1G14g7aOQ9W1KfkN1H.jpeg', 6, '2018-04-06 20:03:16', '2018-04-15 12:16:31', '#'),
(4, 'Arboga Maskiner 40″ Radial Arm Drill', '<p>40&Prime; Radial Arm, 3 Morse Taper Spindle</p>\r\n\r\n<p>with removable box table</p>\r\n\r\n<table cellspacing="0" style="width:755px">\r\n	<tbody>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Manufacturer</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>Arboga Maskiner</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Model</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>RLM3508</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Capacity:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>40&Prime; Arm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Spindle:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>3 morse taper</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Speeds:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>80, 120, 160, 240, 285, 430, 570 &amp; 860 rpm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Features:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>Power Feed<br />\r\n			Coolant</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Equipment:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>20 x 24 x 19.5&rdquo; high Box Table</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Safety:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>Emergency Trip Switch</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Motor:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>2.5/1.7 hp Three Phase Electric&rsquo;s 415v 3.5 / 2.7 amps</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'user/product/nLPVrm8xXGawpKu8f0AkaSwu8V7LJbZvmenV4svl.jpeg', 1, 14, 1, 'user/pdf/nLPVrm8xXGawpKu8f0AkaSwu8V7LJbZvmenV4svl.jpeg', 3, '2018-04-06 20:03:36', '2018-04-16 05:04:44', '#'),
(5, 'Jones & Shipman 310T Tool & Cutter Grinder', '<p>203 x 406mm ( 8&Prime; x 16&Prime;) capacity</p>\r\n\r\n<p>Robust, compact quality machinein excellent condition invaluable wherecorrectly sharpened cutters &amp; tools</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing="0" style="width:755px">\r\n	<tbody>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Manufacturer</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>Jones &amp; Shipman</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Model</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>310T tool and cutter grinder</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">distance between tailstock centres</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>483mm (19&rdquo;)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">distance between cutter head and right hand tailstock</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>356mm (14&rdquo;)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">max diameter swing on standard centres</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>203mm (8&rdquo;)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">max diameter swing on cutter head</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>305mm (12&rdquo;)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">table working surface</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>759 x 108mm (29 &frac12;&rdquo; x 4 &frac14;&rdquo;)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Longitudinal Traverse</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>445mm (17 &frac12;&rdquo;)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Cross Traverse</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>187mm (7 3/8&rdquo;)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'user/product/1Ht7CRreNW6V1XnWzZqBTcbOGzRQtVJADBXtuHa0.jpeg', 1, 14, 0, 'user/pdf/1Ht7CRreNW6V1XnWzZqBTcbOGzRQtVJADBXtuHa0.jpeg', 3, '2018-04-06 20:03:56', '2018-04-16 05:02:55', '#'),
(6, 'Bauer SA320ZA Automatic Twin Column Bandsaw', '<div style="background:0px 0px #ffffff; border:0px; padding:0px">320mm diameter capacity<br />\r\nInfeed table, material specific programmable speeds and feeds</div>\r\n\r\n<div style="background:0px 0px #ffffff; border:0px; padding:0px">&nbsp;</div>\r\n\r\n<div style="background:0px 0px #ffffff; border:0px; padding:0px">Operator friendly controls</div>\r\n\r\n<div style="background:0px 0px #ffffff; border:0px; padding:0px">&nbsp;</div>\r\n\r\n<table cellspacing="0" style="width:755px">\r\n	<tbody>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Manufacturer</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>Bauer</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Capacity at 90 degrees:</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>320mm &Oslash; 340mm square</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th style="text-align:left !important; vertical-align:baseline">Information</th>\r\n			<td style="text-align:left !important; vertical-align:baseline">\r\n			<p>Infeed table, material specific programmable speeds and feeds<br />\r\n			Operator friendly controls</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'user/product/0NQDohLf29CeRMGN9pUUhOgar3y3V5AogGKNh1IN.png', 2, 14, 1, 'user/pdf/0NQDohLf29CeRMGN9pUUhOgar3y3V5AogGKNh1IN.png', 4, '2018-04-06 20:03:56', '2018-04-16 05:02:33', '#');

-- --------------------------------------------------------

--
-- Table structure for table `public_challenges`
--

CREATE TABLE `public_challenges` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `public_invitations`
--

CREATE TABLE `public_invitations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `public_invitations`
--

INSERT INTO `public_invitations` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 46, '2018-03-16 18:38:21', '2018-03-16 18:38:21'),
(2, 34, '2018-03-21 12:00:59', '2018-03-21 12:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `article_number` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `pdf` text NOT NULL,
  `private` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `branch_name`, `department_name`, `article_number`, `description`, `pdf`, `private`, `created_at`, `updated_at`) VALUES
(1, '2', 'NEW Rule', 'Article No. 5', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>', 'user/pdf/wfQDiAzEFtMZ7ibuyczdoAJbk4fAdTzuMlnlT3sw.pdf', 0, '2018-04-13 02:01:43', '2018-04-13 11:39:23'),
(4, '2', '1', 'A12326', '<p>The&nbsp;<strong>International Article Number</strong>&nbsp;(also known as&nbsp;<strong>European Article Number</strong>&nbsp;or&nbsp;<strong>EAN</strong>) is a standard describing a&nbsp;<a href="https://en.wikipedia.org/wiki/Barcode_symbology">barcode symbology</a>&nbsp;and numbering system used in global trade to identify a specific retail product type, in a specific packaging configuration, from a specific manufacturer. The standard has been subsumed in the&nbsp;<a href="https://en.wikipedia.org/wiki/Global_Trade_Item_Number">Global Trade Item Number</a>&nbsp;standard from the&nbsp;<a href="https://en.wikipedia.org/wiki/GS1">GS1</a>&nbsp;organization; the same numbers can be referred to as&nbsp;<strong>GTIN</strong>s and can be encoded other barcode symbologies defined by GS1. EAN barcodes are used worldwide for lookup at retail&nbsp;<a href="https://en.wikipedia.org/wiki/Point_of_sale">point of sale</a>, but can also be used as numbers for other purposes such as wholesale ordering or accounting.</p>', 'user/pdf/Ofk80BcLkHb7JrEaExGDj7B3InLBAvCBsjwLlmKt.pdf', 0, '2018-04-13 12:41:52', '2018-04-13 12:41:52'),
(5, '2', '1', 'DUB326', '<p>The most commonly used EAN standard is the thirteen-digit&nbsp;<strong>EAN-13</strong>, a superset of the original 12-digit&nbsp;<a href="https://en.wikipedia.org/wiki/Universal_Product_Code">Universal Product Code</a>&nbsp;(UPC-A) standard developed in 1970 by&nbsp;<a href="https://en.wikipedia.org/wiki/George_J._Laurer">George J. Laurer</a>.<a href="https://en.wikipedia.org/wiki/International_Article_Number#cite_note-UMalumni-1">[1]</a>&nbsp;An EAN-13 number includes a 3-digit&nbsp;<a href="https://en.wikipedia.org/wiki/List_of_GS1_country_codes">GS1 prefix</a>&nbsp;(indicating country of registration or special type of product). A prefix with a first digit of &quot;0&quot; indicates a 12-digit UPC-A code follows. A prefix with first two digits of &quot;45&quot; or &quot;49&quot; indicates a Japanese Article Number (JAN) follows.</p>', 'user/pdf/TPnlShkdENcKJEDalrULwMANu0LGYUVl4bF7hduu.pdf', 0, '2018-04-13 12:42:22', '2018-04-13 12:42:22'),
(6, '2', '1', 'DUB56896', '<p>The less commonly used 8-digit&nbsp;<strong><a href="https://en.wikipedia.org/wiki/EAN-8">EAN-8</a></strong>&nbsp;barcode was introduced for use on small packages, where EAN-13 would be too large. 2-digit&nbsp;<strong>EAN-2</strong>and 5-digit&nbsp;<strong><a href="https://en.wikipedia.org/wiki/EAN_5">EAN-5</a></strong>&nbsp;are supplemental barcodes, placed on the right-hand side of EAN-13 or UPC. These are generally used for periodicals like magazines<a href="https://en.wikipedia.org/wiki/International_Article_Number#cite_note-2">[2]</a>&nbsp;or books,<a href="https://en.wikipedia.org/wiki/International_Article_Number#cite_note-:0-3">[3]</a>&nbsp;to indicate the current year&#39;s issue number; and weighed products like food, to indicate the&nbsp;<a href="https://en.wikipedia.org/wiki/Manufacturer%27s_suggested_retail_price">manufacturer&#39;s suggested retail price</a>.</p>', 'user/pdf/wGIntOIk53E2ZW8gDFbDs1EncMl2na9n1NfQffFs.pdf', 0, '2018-04-13 12:42:52', '2018-04-13 12:42:52'),
(7, '3', '3', 'GS1 prefix', '<p>The first three digits of the EAN-13 (GS1 Prefix) usually identify the GS1 Member Organization which the manufacturer has joined (not necessarily where the product is actually made).<a href="https://en.wikipedia.org/wiki/International_Article_Number#cite_note-4">[4]</a>&nbsp;Note that EAN-13 codes beginning with 0 are actually 12-digit UPC codes with prepended 0 digit. In the last few years, more products sold by retailers outside United States and Canada have been using EAN-13 codes beginning with 0, since they were generated by GS1-US.</p>', 'user/pdf/TUbCRISIgEMKJKFDGvAt7tjhznYr9mblp5AE7wpk.pdf', 0, '2018-04-13 12:43:22', '2018-04-13 12:43:22'),
(8, '4', '7', 'EGY546', '<p>The 020-029 GS1 Prefixes are worth a special mention. GS1 defines this as being available for retailer internal use (or internal use by other types of business). Some retailers use this for proprietary (own brand or unbranded) products, although many retailers obtain their own manufacturer&#39;s code for their own brands. Other retailers use at least part of this prefix for products which are packaged in store, for example, items weighed and served over a counter for a customer. In these cases, the barcode may encode a price, quantity or weight along with a product identifier - in a retailer defined way. The product identifier may be one assigned by the Produce Electronic Identification Board (PEIB) or may be retailer assigned. Retailers who have historically used UPC barcodes tend to use GS1 prefixes starting with &quot;02&quot; for store-packaged products</p>', 'user/pdf/LG5n5RItHyw7P90LDQGU5wTfHgBjccd5S1Wk04xk.pdf', 0, '2018-04-13 12:43:58', '2018-04-13 12:43:58'),
(9, '4', '5', 'EGY9886', '<p>The EAN &quot;country code&quot; 978 (and later 979) has been allocated since the 1980s to reserve a Unique Country Code (UCC) prefix for EAN identifiers of published books, regardless of country of origin, so that the EAN space can catalog books by&nbsp;<a href="https://en.wikipedia.org/wiki/ISBN">ISBNs</a><a href="https://en.wikipedia.org/wiki/International_Article_Number#cite_note-:0-3">[3]</a>&nbsp;rather than maintaining a redundant parallel numbering system. This is informally known as &quot;<a href="https://en.wikipedia.org/wiki/Bookland">Bookland</a>&quot;. The prefix 979 with first digit 0 is used for&nbsp;<a href="https://en.wikipedia.org/wiki/ISMN">International Standard Music Number (ISMN)</a>&nbsp;and the prefix 977 indicates&nbsp;<a href="https://en.wikipedia.org/wiki/ISSN">International Standard Serial Number (ISSN)</a>.</p>', 'user/pdf/KHxWywsSf89aKjCiNUd7fWxk1fJlNehd7ZAzuUHD.pdf', 0, '2018-04-13 12:44:20', '2018-04-13 12:44:20'),
(10, '4', '4', 'Manufacturer code', '<p>The manufacturer code is a unique code assigned to each manufacturer by the numbering authority indicated by the GS1 Prefix. All products produced by a given company will use the same manufacturer code. EAN-13 uses what is called &quot;variable-length manufacturer codes.&quot; Assigning fixed-length 5-digit manufacturer codes, as the UCC has done until recently, means that each manufacturer can have up to 99,999 product codes--and many manufacturers don&#39;t have that many products, which means hundreds or even thousands of potential product codes are being wasted on manufacturers that only have a few products. Thus if a potential manufacturer knows that it is only going to produce a few products, EAN-13 may issue it a longer manufacturer code, leaving less space for the product code. This results in more efficient use of the available manufacturer and product codes</p>', 'user/pdf/4mcFSH4En1kEYzWpTOyYKQh2KMkm4t26SENrAII2.pdf', 0, '2018-04-13 12:44:42', '2018-04-13 12:44:42'),
(11, '3', '6', 'ISBN and ISSN', '<p>In ISBN and ISSN, this component is used to identify the language in which the publication was issued and managed by a transnational agency covering several countries, or to identify the country where the legal deposits are made by a publisher registered with a national agency, and it is further subdivided any allocating subblocks for publishers; many countries have several prefixes allocated in the ISSN and ISBN registries.</p>', 'user/pdf/r68LLYNqWBMi2XATv08NKx55gsCmImULLYeiLet3.pdf', 0, '2018-04-13 12:45:07', '2018-04-13 12:45:07'),
(12, '4', '5', 'Product code', '<p>The product code is assigned by the manufacturer. The product code immediately follows manufacturer code. The total length of manufacturer code plus product code should be 9 or 10 digits depending on the length of country code(2-3 digits).</p>\r\n\r\n<p>In ISBN, ISMN and ISSN, it uniquely identifies the publication from the same publisher; it should be used and allocated by the registered publisher in order to avoid creating gaps; however it happens that a registered book or serial never gets published and sold.</p>', 'user/pdf/rJVyRYd3wuyw1fxqyUo9mvI9q82BCX0a6i4zsfom.pdf', 0, '2018-04-13 12:45:29', '2018-04-13 12:45:29'),
(13, '3', '6', 'Check digit', '<p>The check digit is an additional digit, used to verify that a barcode has been scanned correctly. It is computed modulo 10, where the weights in the checksum calculation alternate 3 and 1. In particular, since the weights are relatively prime to 10, the EAN-13 system will detect all single digit errors. It also recognizes 90% of transposition errors (all cases, where the difference between adjacent digits is not 5</p>', 'user/pdf/95oumjxUNm6D9RN161lsMD90CAGc4vLkb8B7zjQj.pdf', 0, '2018-04-13 12:45:56', '2018-04-13 12:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `pdf` text NOT NULL,
  `private` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `title`, `description`, `category_id`, `pdf`, `private`, `created_at`, `updated_at`) VALUES
(1, 'Auto 8/10™ Platen Press', '<p>Auto 8/10&trade; Platen Press - 001102 - Equipment Manual</p>', 1, 'user/pdf/iXPtZ7Ns1l8LcPQhkkIHOuHkNxaOMiB1MOpOGd8C.pdf', 0, '2018-04-13 00:36:12', '2018-04-13 12:16:49'),
(2, 'Auto Roll Finish Press', '<p>Auto Roll Finish Press - Operation - 001113a - Equipment Manual</p>', 1, 'user/pdf/gTTPfM8X7gj0lb5KNMQLody0cxWUrhp9CLjlXE2o.pdf', 0, '2018-04-13 00:38:09', '2018-04-13 12:17:22'),
(5, 'Auto Roll™ Finish Press', '<p>Auto Roll&trade; Finish Press - Installation - 001113a - Equipment Manual</p>', 3, '/tmp/phpyq8FdF', 0, '2018-04-13 12:18:01', '2018-04-13 12:18:01'),
(6, 'AutoPress', '<p>AutoPress - 0001081 - Equipment Manual</p>', 3, '/tmp/phpNNx6Ac', 0, '2018-04-13 12:18:51', '2018-04-13 12:18:51'),
(7, '001080 MT', '<p>BLADE - Maintenance - 001080 MT - Equipment Manual</p>', 1, 'user/pdf/v3muhEw0S14VRsds1DyD7mYwvM6sNtF1fwpAhDcp.pdf', 0, '2018-04-13 12:19:35', '2018-04-13 12:20:50'),
(8, '001080-OP', '<p>BLADE - Operation - 001080-OP - Equipment Manual</p>', 1, '/tmp/phpPdH3no', 0, '2018-04-13 12:20:10', '2018-04-13 12:20:10'),
(9, 'BLADE', '<p>BLADE - TRAINING Manual Training manual to accompany the class on MiTek University.</p>', 1, '/tmp/phpKTKghS', 0, '2018-04-13 12:21:30', '2018-04-13 12:21:30'),
(10, 'BLADE Reports', '<p>BLADE Reports Software Manual 22 Sept 2017</p>', 2, '/tmp/phpPMZAKR', 0, '2018-04-13 12:22:02', '2018-04-13 12:22:02'),
(11, 'Board Stretcher', '<p>Board Stretcher - Manual on MiTek Univ</p>\r\n\r\n<p>&nbsp;</p>', 3, '/tmp/phpXP22xJ', 0, '2018-04-13 12:22:21', '2018-04-13 12:22:21'),
(12, '001055 rev D', '<p>Cyber A/T - Installation - 001055 rev D - Equipment Manual</p>', 1, '/tmp/phpQge7s7', 0, '2018-04-13 12:22:40', '2018-04-13 12:22:40'),
(13, 'Maintenance - 001055 rev D', '<p>Cyber A/T - Maintenance - 001055 rev D - Equipment Manual</p>', 1, '/tmp/phpLzZh7B', 0, '2018-04-13 12:23:06', '2018-04-13 12:23:06'),
(14, 'Cyber A/T', '<p>Cyber A/T - Training Manual Training manual to accompany the class on MiTek University.</p>', 3, '/tmp/phpkuz6zN', 0, '2018-04-13 12:23:47', '2018-04-13 12:23:47'),
(15, 'Cyber® and Cyber A/T saws', '<p>Cyber&reg; and Cyber A/T saws - Catcher Display Installation - 001057 rev H - Equipment Manual</p>', 3, '/tmp/phpOOwWGs', 0, '2018-04-13 12:24:21', '2018-04-13 12:24:21'),
(16, 'Finish Roller', '<p>Finish Roller - Operation and Maintenance - 001010 rev D - Equipment Manual</p>', 2, '/tmp/phpXYOWCZ', 0, '2018-04-13 12:24:46', '2018-04-13 12:24:46'),
(17, 'Finish Roller', '<p>Finish Roller - TRAINING Manual</p>\r\n\r\n<p>Training manual to accompany the class on MiTek University.</p>', 3, '/tmp/phpR7SsE8', 0, '2018-04-13 12:25:10', '2018-04-13 12:25:10'),
(18, 'FloorTracker™', '<p>FloorTracker&trade; - Operation and Maintenance - 001076 - Equipment Manual</p>', 2, '/tmp/phpEss4ZR', 0, '2018-04-13 12:25:39', '2018-04-13 12:25:39'),
(19, 'FT Splicer', '<p>FT Splicer - Equipment Manual - 001107revA</p>', 2, '/tmp/php4g3hIu', 0, '2018-04-13 12:26:31', '2018-04-13 12:26:31'),
(20, 'HammRR™ Press', '<p>HammRR&trade; Press - Operations and Maintenance - 001073 - Equipment Manual</p>', 1, '/tmp/phpKoDHKr', 0, '2018-04-13 12:26:55', '2018-04-13 12:26:55'),
(21, 'Horizontal Stacker', '<p>Horizontal Stacker - 001011 rev C - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 3, '/tmp/phpvip5So', 0, '2018-04-13 12:27:20', '2018-04-13 12:27:20'),
(22, 'Inker', '<p>Inker - Operation and Maintenance - 001070 rev E - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 3, '/tmp/php2ggDio', 0, '2018-04-13 12:27:45', '2018-04-13 12:27:45'),
(23, 'JackTable™', '<p>JackTable&trade; Platen Press - 001094 rev A - Equipment Manual</p>', 2, '/tmp/phpLaoqVg', 0, '2018-04-13 12:28:08', '2018-04-13 12:28:08'),
(24, 'Jigging', '<p>Jigging - 001097 - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 3, '/tmp/php3lh0fA', 0, '2018-04-13 12:28:29', '2018-04-13 12:28:29'),
(25, 'LSR™', '<p>LSR&trade; - 001093 - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 3, '/tmp/phpbhDzU7', 0, '2018-04-13 12:28:48', '2018-04-13 12:28:48'),
(26, 'Lumber Splicer', '<p>Lumber Splicer - Operation and Maintenance - 001074 - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 2, '/tmp/php3k5K0I', 0, '2018-04-13 12:29:07', '2018-04-13 12:29:07'),
(27, 'MH TrussMaker™', '<p>MH TrussMaker&trade; - Operation and Maintenance - 001082 rev B - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 1, '/tmp/php4QrPaZ', 0, '2018-04-13 12:29:31', '2018-04-13 12:29:31'),
(28, 'PLANX', '<p>PLANX - Installation - 001098 rev B - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 2, '/tmp/phpTxwwu9', 0, '2018-04-13 12:29:48', '2018-04-13 12:29:48'),
(29, 'PLANX - Maintenance', '<p>PLANX - Maintenance - 001098 rev B - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 3, '/tmp/phpCD6rj4', 0, '2018-04-13 12:30:11', '2018-04-13 12:30:11'),
(30, 'PLANX - Operation', '<p>PLANX - Operation - 001098 rev B - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 1, '/tmp/phpSWROKM', 0, '2018-04-13 12:30:30', '2018-04-13 12:30:30'),
(31, 'RailRider Pro', '<p>RailRider Pro - 001040revA - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 3, '/tmp/phpA86EDB', 0, '2018-04-13 12:30:52', '2018-04-13 12:30:52'),
(32, 'RailRider Pro', '<p>RailRider Pro - TRAINING Manual</p>\r\n\r\n<p>Training manual to accompany the class on MiTek University.</p>', 1, '/tmp/php7Eltr9', 0, '2018-04-13 12:31:18', '2018-04-13 12:31:18'),
(33, 'Roller Gantry', '<p>Roller Gantry - Operation and Maintenance - 001012 rev C - Equipment Manual</p>\r\n\r\n<p>&nbsp;</p>', 3, '/tmp/phpTz9DVl', 0, '2018-04-13 12:31:39', '2018-04-13 12:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `kebel_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `org_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `picture`, `mobile`, `sex`, `dob`, `kebel_id`, `cv`, `description`, `org_type`, `position`, `user_type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Niharika', 'Yadav', 'niharika.yadav@xicom.biz', '$2y$10$iORCBPlu9RsPngUkuG48BepjH9JpF.t6kyUMsG0FscXMzVvsgPWTC', NULL, '9540177583', 'Male', '1985-07-19', NULL, NULL, NULL, NULL, NULL, 1, 1, 'WYsZYmJq4dWmCdATaemSstVvWTVxZ3RVuCsqHni3HwRNxBBDEtKuarueHJe5', '2018-02-26 13:23:42', '2018-03-08 20:26:34'),
(34, 'sandeep', 'jain', 'sandeep@xicom.biz', '$2y$10$iORCBPlu9RsPngUkuG48BepjH9JpF.t6kyUMsG0FscXMzVvsgPWTC', 'user/pictures/oU8pmMhFcmKRHss3ZcMTTTTCiTa1sEl9u9IEbCqA.jpeg', '2342342342', 'Female', NULL, 'user/kebels/QG4bnOMvWm16oga9SfhyvuE0rZQpQyRM6oMgAK46.txt', 'user/cvs/HZaaJ81JzY3tCkmN4bP5BZfQmw6aXgTCcMecJy54.txt', NULL, NULL, NULL, 1, 1, 'ZP6ohCZuGjEZy2DAvhRh54Y8iXjYLxgkk6GnQNgggxLNhTwoWsje4pTN6BYX', '2018-02-26 20:48:08', '2018-03-29 18:47:46'),
(35, 'Natnael', 'worku', 'nashimind@gmail.com', '$2y$10$A.79q.RQBTOKwUW0qWh9be2.e79It1jDejhm9cfK6J.Wbdq2bm9Qu', NULL, '743847384', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2018-03-08 19:50:13', '2018-03-16 17:31:31'),
(36, 'Natnael', 'Shar', 'manoj.kumar@xicom.biz', '$2y$10$T95XKb9P7MYQPwW3u87vUuBNGKdNLvpr6uFtqcdddFf7OPOqQeKMu', NULL, '9560120169', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 'hbr0J6DQNlFoUS3Rglba1vfJ7xHJDXeUFZl1FjopOfvuBw9H7jOsBs4nrhWy', '2018-03-08 20:19:10', '2018-03-08 20:20:30'),
(37, 'Afrin', 'Hasan', 'afrin.hasan@xicom.biz', '$2y$10$4PV0IixIhhLKFUccV0IA/ubHUMtxCvIoXB8ON82Dp58.cnLcXnIIC', NULL, '9560120169', 'Female', '2018-03-21', 'user/kebels/aI2lcOpXjKM5fS5MgLJTfPOicG9FWjFNClMPYhA5.pdf', 'user/cvs/xeAJI36cwNOEG5cxyUbXanaZrKnv9IyzTDsMyxhR.pdf', 'Hi , My Name is Afrin and i am registered to this website as an user.', NULL, NULL, 1, 1, 'dWUSDUyGKFt8qhFjFkVajimBJXjeFY4urJ2zRMGb7vTx39O1uZ9w3CYEozIX', '2018-03-14 18:41:43', '2018-03-14 20:01:40'),
(38, 'Gagan', 'Bhatia', 'gaganpreet.kaur@xicom.biz', '$2y$10$LBAGAFHhCy1vs26NEI/EZubv20brJ/tqQRWq4dr2mkcDLBRc5yQae', NULL, '9911445636', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 'nQuwe7mqBbEBP0qepcw4f7k7wRgc2SRR00L3DHIH2O5zkurLUZVoyfeGeLW5', '2018-03-14 19:33:03', '2018-03-30 19:15:21'),
(39, 'Puneet', 'Kashyap', 'Puneet.kashyap@xicom.biz', '$2y$10$7mf55R1YDw7rhoyjPISK6ev5fbDcigtRSx6Qp..RTHn4rKbBraeMe', NULL, '098765432', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'eHSazzywLfMhUZ4BQbHHmTs5TetcrOriMnbjwtLgn5eQKOKkVnoY1LJla0rA', '2018-03-16 17:27:08', '2018-03-16 17:31:08'),
(40, 'pooja', 'choudhary', 'pooja.choudhary@xicom.biz', '$2y$10$UQIJ4RVk0V3/Nc9v9tceAeox1NzdimI6qg0GNR/538adSr5ypv0gO', NULL, '0987326222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'yYHrPAUHfvl7QO4yWCB0hdpboiUR7ygxukgfYbWTjbOvwKxphjA77rtchJnm', '2018-03-16 17:28:10', '2018-03-16 17:30:55'),
(41, 'Preet', 'singh', 'preet@xicom.biz', '$2y$10$Eg0Ae6xjiN3h8BsatF8zFOKnMpXvV9vJA0Hq8gm1ybreoI0RXBAAa', NULL, '676222882', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2018-03-16 17:28:59', '2018-03-16 17:30:44'),
(42, 'niharikay', 'y', 'niharika@xicom.biz', '$2y$10$oxtVLGouCi27nCXSIb9o2OLc/3QiNfJ.T/OwFYZK9S1tNvF.QOw.a', NULL, '56467784848', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2018-03-16 17:29:52', '2018-03-16 17:30:33'),
(43, 'Rishi', 'Malhotra', 'rishi@xicom.biz', '$2y$10$KhQjSbNxSSbDRC6z2P41ju2yJ8eSXjlQxDoMb6lJ55Oj5EhTWtHrG', NULL, '8787878777', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2XR7VvxRjioUrhBy3Xw7sBSZWnZGWZrAHCnUPcI4ymx4tKcJJDOn5leX9HAb', '2018-03-16 17:32:45', '2018-03-16 17:32:45'),
(44, 'Xicom', 'test', 'test@xicom.biz', '$2y$10$SjFLA/mZwmbIoT6LwKyTYuoB9mhJOEj4/n.DlUePKskVscLFm69fa', NULL, '536352662623', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2018-03-16 17:33:44', '2018-03-16 17:33:44'),
(45, 'niha', 'G', 'niharika.xicom@gmail.com', '$2y$10$OG4tUknMil/z73qW4IEkeel/05.cE.8muNHlTdcWPKyWIGvoS/2Om', NULL, '9999999999', 'Female', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2018-03-16 17:35:05', '2018-03-16 17:35:05'),
(46, 'Sandeep j', 'j', 'sandeep.xicom@gmail.com', '$2y$10$RjIFwllnBOi.TmwnPhSFgu4PM1zHkRNll97cvlIrV2eLnLA1elHg6', NULL, '786777777', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2018-03-16 17:35:46', '2018-03-16 17:35:46'),
(47, 'afreen', 'hasan', 'xicomtest12@gmail.com', '$2y$10$lqsK93pCi40e//U1nCtY..CYX6nImUGu1F8JKRPGkb.0Tflh8N9J2', NULL, '9958698945', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'bxMuPqAxl02rh5g7K4q8p75FcOEpUWfkt4CZseHS6pwCT3Nfb7vUOxZUB0i6', '2018-03-16 18:39:39', '2018-03-16 19:04:54'),
(48, 'Neha', 'sharma', 'xicomtest11@gmail.com', '$2y$10$9DAdUtzU.R/oT6KPTmyDaefrTOjOM8OTTHM2Jdyuoen/4HZrDTVPm', NULL, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '21vy98wBc6K53wPzbEEI5rwV7aCCTzEz53Lg5AnND1EcigNl35MC5X3Kjur9', '2018-03-16 18:45:54', '2018-03-16 19:04:36'),
(49, 'Vanya', 'sharma', 'xicomtest02@gmail.com', '$2y$10$Sog2riNhO6DlnF0F3mfLe./ESLBjDCkSdxxYNk6tpSAKVern.P9za', NULL, '1234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'eJm3PsK7lIvwD1tj60AjAGvu5prMihPFm0GvqZ1bFmbAs9KFpP3UHMZhCHwN', '2018-03-16 18:47:15', '2018-03-16 19:04:21'),
(50, 'srishti', 'verma', 'tester2k6@gmail.com', '$2y$10$DfvsuCUFQyMoxMNsP4/Fr.jiWDw8igIK4Mm2qOBTkyRsUYUiU09/K', NULL, '1234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'bhidW3s5CHkv9ZflYk5UYM6pT4t39InrrUaqqqsp96o2eUbovcd1S1SkiyDB', '2018-03-16 18:48:06', '2018-03-16 19:04:13'),
(51, 'shilpa', 'sharma', 'testxicom11@yahoo.com', '$2y$10$G0XcuL7fJfKRXjrZ05YEOOVQqWzLT0P/Cz2rn7/8yWHphc5X4pjrG', NULL, '1234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'KJWP9laM6oI4mIbhnoDs95xK6Vet8iCpCoxouV9s4X816jFHRmJdhNrCsKS7', '2018-03-16 18:49:09', '2018-03-16 19:03:50'),
(52, 'Ayushi', 'chaudhry', 'testxicom12@yahoo.com', '$2y$10$6ZPO8MzMwwnlnzqIcSzUGeSuTdoOlBEmzIYX4hijYfbiqwn9coGtu', NULL, '9958698945', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'fo3BAfP1at7hcBqQXwjL4sF8QsNkllJOEy9zl4HTScJVvGtWPHKKD0NHevKF', '2018-03-16 18:50:47', '2018-03-16 19:03:42'),
(53, 'neelu', 'saini', 'ravigupta44@yahoo.com', '$2y$10$iV4hYb.JrchoP3SwEiADY.vd5OigFuCMlXf2UsvrXCbRqS3QtFxA6', NULL, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'VOijwxmo7EOy8bhdDbL7j880o2o8CMzlrOk1s6gHQI3nfZujKujqb4ixk2hh', '2018-03-16 18:52:50', '2018-03-16 19:03:33'),
(54, 'shaheen', 'malik', 'vipul@xicom.biz', '$2y$10$ljQhe3MyAmcr8X.VZOlcqegjFFwYeY3YXCZBHooHYk55tZ7hWuWD.', NULL, '192178937', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'M2tQ41Jq0IrWnBxEfHaMC8ZeiX6gQsNi8Ng41Jx39n6XKy57fY8nSRo7FjIT', '2018-03-16 18:54:04', '2018-03-16 19:03:22'),
(55, 'Lavi', 'Goswami', 'xicombiz@yahoo.com', '$2y$10$9X6YlkwKPUU0N9py6Szg1OaCZ286EcezNXt1bc1w1PiwFoGoE2IiC', NULL, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'SIlC8GZrybrWdiYzXmPaIf5KQ7YWbDbWGTYPhYOLLgVHA67qESTk2qsAdKq1', '2018-03-16 18:55:06', '2018-03-16 19:03:13'),
(56, 'jai', 'bhardwaj', 'xicom.jugal@gmail.com', '$2y$10$z5VJRhaVTV0gqTiYxyXuseBP.bYlE5L5wt8SB3i5ht3gNEZhBxgoy', NULL, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'ol3thGffrHYdtdvs27yTjFoB0mnMjSHBcVFNeANqp705Q7zg0EXvYMVTusBl', '2018-03-16 18:55:51', '2018-03-16 19:03:01'),
(57, 'akash', 'sharma', 'test53802@gmail.com', '$2y$10$Id/Eyg2WIqX20gFyVHvVZ.6qhEsH2KypIQ13p/wrKoyGlqfHgaVle', NULL, '12345467', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'BIktGz7hrCZnKhDu3WicnMzpdHvmDFwf88FZejkujX3fKxc32GCOIuoVCU4Z', '2018-03-16 18:56:55', '2018-03-16 19:02:54'),
(58, 'ankit', 'rana', 'afreen.hasan23@gmail.com', '$2y$10$f7L6XD2HAK8SlSb0SZKeTegOghcs6jU7e.WOKoCceVCTRQRGyt0qy', NULL, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'M7JIfKcl8etYjCc0ZT6oP1xcYpWYZmECLtSJGviAOv0XA6YvyWgZf19ieGP6', '2018-03-16 18:57:40', '2018-03-16 19:02:46'),
(59, 'sandeep', 'kum', 'sponsor@xicom.biz', '$2y$10$nIbDSA3uKhZOImsmwKtPOeTRSY70wSkjyEPW4nltpxNCMU1diWN72', 'user/profile/mnWUYdGeZYvbr2BwMQYQhCCK8I9v1ESZFFSpLnTh.gif', '29349234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 'sNuTjnU0DH7Kg0JEzQuH6X5uKvAwS2UR3qiNC8iDUg1B74hpVjzE7Eze6pPj', '2018-03-22 21:06:19', '2018-03-23 14:59:48'),
(60, 'Sandy Metec', 'Singh', 'smetec@xicom.biz', '$2y$10$LBAGAFHhCy1vs26NEI/EZubv20brJ/tqQRWq4dr2mkcDLBRc5yQae', 'user/pictures/cj3Ph39BbzPxIlZvT9iyUVXmKAGRsRoeB2oR8LY3.jpeg', '2342342342', 'Male', NULL, NULL, NULL, NULL, 'Software', 'Senior Manager', 4, 1, 'yjPRnQyiXWeVjnOIlxilT5g9Rex5vekjBRS3ToFnsoMvI4ERe9uJQaKCodFN', '2018-03-29 16:19:56', '2018-03-30 14:52:35'),
(61, 'Sippy', 'Singh', 'sippy@xicom.biz', '$2y$10$3QkEhb.rlGOz9H5W/9LRfuPujLJKXuriiK7/iyKoX8kHEFfCOi40u', NULL, '29349244', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 'Y2dQ6qkv7CYZTmNVbKWP1TMfWfAR3mGeVeNAwKP5hqjyE91FsTqzAlCr1Tpf', '2018-04-03 14:31:52', '2018-04-03 14:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `embd_code` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `total_comments` int(11) NOT NULL DEFAULT '0',
  `total_views` int(11) NOT NULL DEFAULT '0',
  `admin_id` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL DEFAULT '0',
  `is_private` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `embd_code`, `category_id`, `total_comments`, `total_views`, `admin_id`, `is_featured`, `is_private`, `status`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Facebook takes on Russia\'s IRA but is it too late? (The 3:59, Ep. 380)', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'https://www.youtube.com/embed/VrwE9I1CJqw', 1, 0, 2, 14, 0, 0, 1, NULL, '2018-04-06 19:34:09', '2018-04-15 06:22:38'),
(2, 'Facebook takes on Russia\'s IRA but is it too late? (The 3:59, Ep. 380)', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'https://www.youtube.com/embed/gctirLd5Fts', 3, 0, 4, 14, 0, 0, 1, NULL, '2018-04-06 19:35:17', '2018-04-15 06:58:06'),
(3, 'Facebook takes on Russia\'s IRA but is it too late? (The 3:59, Ep. 380)', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'https://www.youtube.com/embed/gctirLd5Fts', 1, 0, 2, 14, 0, 0, 1, NULL, '2018-04-06 19:36:02', '2018-04-11 11:37:13'),
(4, 'Facebook takes on Russia\'s IRA but is it too late? (The 3:59, Ep. 380)', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><img alt="" src="https://wallpaperbrowse.com/media/images/soap-bubble-1958650_960_720.jpg" style="height:133px; width:200px" /></p>', 'https://www.youtube.com/embed/VrwE9I1CJqw', 1, 0, 4, 14, 0, 0, 1, NULL, '2018-04-06 19:36:36', '2018-04-15 12:36:57'),
(5, '10 AMAZING SCIENCE EXPERIMENTS!', '<p>10 AMAZING SCIENCE EXPERIMENTS! and TRICKS compilation they are awesome easy to do at home, using copper wire battery and magnets gyroscopes chain and ring, electric train etc.</p>', 'https://www.youtube.com/embed/2L0ZHxcoWhM', 1, 0, 6, 14, 1, 0, 1, NULL, '2018-04-10 07:44:59', '2018-04-15 06:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_comment_settings`
--
ALTER TABLE `admin_comment_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`),
  ADD KEY `admin_password_resets_token_index` (`token`);

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_departments`
--
ALTER TABLE `branch_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_rules`
--
ALTER TABLE `branch_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_articles`
--
ALTER TABLE `category_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_tools`
--
ALTER TABLE `category_tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_videos`
--
ALTER TABLE `category_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea_applicants`
--
ALTER TABLE `idea_applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea_conversations`
--
ALTER TABLE `idea_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea_invitations`
--
ALTER TABLE `idea_invitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea_wishlists`
--
ALTER TABLE `idea_wishlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manuals`
--
ALTER TABLE `manuals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meticcomments`
--
ALTER TABLE `meticcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meticposts`
--
ALTER TABLE `meticposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mltcomments`
--
ALTER TABLE `mltcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mltposts`
--
ALTER TABLE `mltposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mltsettings`
--
ALTER TABLE `mltsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_challenges`
--
ALTER TABLE `public_challenges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_invitations`
--
ALTER TABLE `public_invitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `admin_comment_settings`
--
ALTER TABLE `admin_comment_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `branch_departments`
--
ALTER TABLE `branch_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `branch_rules`
--
ALTER TABLE `branch_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `category_articles`
--
ALTER TABLE `category_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category_tools`
--
ALTER TABLE `category_tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category_videos`
--
ALTER TABLE `category_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `idea_applicants`
--
ALTER TABLE `idea_applicants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `idea_conversations`
--
ALTER TABLE `idea_conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `idea_invitations`
--
ALTER TABLE `idea_invitations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `idea_wishlists`
--
ALTER TABLE `idea_wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `manuals`
--
ALTER TABLE `manuals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `meticcomments`
--
ALTER TABLE `meticcomments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `meticposts`
--
ALTER TABLE `meticposts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `mltcomments`
--
ALTER TABLE `mltcomments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mltposts`
--
ALTER TABLE `mltposts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mltsettings`
--
ALTER TABLE `mltsettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `public_challenges`
--
ALTER TABLE `public_challenges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `public_invitations`
--
ALTER TABLE `public_invitations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
