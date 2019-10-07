<?php
require_once('conn.php');
$create = "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
SET time_zone = \"+00:00\";

USE `test`;

CREATE TABLE `content` (
  `id` int(4) UNSIGNED NOT NULL,
  `pagename` varchar(30) NOT NULL,
  `pagetitle` varchar(30) NOT NULL,
  `pagecontent` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `content` (`id`, `pagename`, `pagetitle`, `pagecontent`) VALUES
(1, 'Home', 'Welcome to our homepage, yo!', '<p>This is the page content</p>'),
(2, 'About', 'A little about us. We are gr8', '<p>We started a simple idea: ball bearings. And then we made more ball barrings. The end.</p>'),
(3, 'Contact', 'How to get a hold of us.', '<p>Phone: </p><a href=\"tel:5598018442\">(559)555-1212</a><br/>\r\n<a href=\"mailto:bob@bob.com\">Bob</a>'),
(4, 'Features', 'Our Features', '<h2>These are our features</h2>\r\n<p>We kick ass</p>\r\np>We take names</p>\r\np>We sip tea</p>');


ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `content`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;";

  $result = $conn->query($create);