-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 01, 2016 at 09:50 PM
-- Server version: 5.5.48-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mehandip_moneyworksdirect`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `fname`, `lname`, `email`) VALUES
(1, 'Julian ', 'Giannuzzi', 'julian@moneyworksdirect.com'),
(2, 'Pierre D', 'Villalona', 'pierre@moneyworksdirect.com'),
(3, 'Luciano ', 'Ferrito', 'luciano@moneyworksdirect.com'),
(4, 'Adrian', 'Pagani', 'adrian@moneyworksdirect.com'),
(5, 'George', 'Ruiz', 'george@moneyworksdirect.com'),
(6, 'Michelle', 'Jacks', 'michelle@moneyworksdirect.com'),
(7, 'Emely', 'Calcano', 'emely@moneyworksdirect.com'),
(8, 'Jolis', 'Rodriguez', 'jolis@moneyworksdirect.com'),
(9, 'Christina ', 'Impelletiere', 'christina@moneyworksdirect.com'),
(10, 'Anthony', 'Cardenas', 'anthony@moneyworksdirect.com'),
(11, 'Taj', 'Guerrier', 'taj@moneyworksdirect.com'),
(12, 'John', 'Taufa', 'john@moneyworksdirect.com'),
(13, 'Jonathan', 'Heyman', 'jonathan@moneyworksdirect.com'),
(14, 'Steve', 'Russo', 'steve@moneyworksdirect.com');

-- --------------------------------------------------------

--
-- Table structure for table `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('user', '1', NULL, 'N;'),
('user', '10', NULL, 'N;'),
('user', '11', NULL, 'N;'),
('user', '12', NULL, 'N;'),
('user', '13', NULL, 'N;'),
('user', '14', NULL, 'N;'),
('user', '15', NULL, 'N;'),
('user', '16', NULL, 'N;'),
('user', '17', NULL, 'N;'),
('user', '18', NULL, 'N;'),
('user', '19', NULL, 'N;'),
('user', '2', NULL, 'N;'),
('user', '20', NULL, 'N;'),
('user', '3', NULL, 'N;'),
('user', '4', NULL, 'N;'),
('user', '5', NULL, 'N;'),
('user', '6', NULL, 'N;'),
('user', '7', NULL, 'N;'),
('user', '8', NULL, 'N;'),
('user', '9', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItem`
--

CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('authenticated', 2, 'authenticated user', 'return !Yii::app()->user->isGuest;', 'N;'),
('guest', 2, 'guest user', 'return Yii::app()->user->isGuest;', 'N;'),
('superadmin', 2, 'administrator', NULL, 'N;'),
('user', 3, 'user', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItemChild`
--

CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE IF NOT EXISTS `configuration` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `display_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `label`, `keyword`, `value`, `display_order`) VALUES
(0, 'Site Mode', 'site_mode', 'Development', 1),
(2, 'Meta Title', 'meta_title', 'Paspic', 1),
(3, 'Meta Keywords', 'meta_keywords', 'Paspic', 2),
(4, 'Meta Description', 'meta_description', 'This site is for passport size photo.', 3),
(5, 'Facebook Url', 'facebook_link', 'facebook', 4),
(6, 'Twitter Url', 'twitter_link', 'twitter', 5),
(7, 'Google Plus Url', 'google_plus_link', 'google', 6),
(8, 'Youtube Url', 'youtube_link', 'youtube', 7),
(9, 'Contact Email', 'contact_email', 'support@paspic.co.uk', 16),
(11, 'Site Name', 'sitename', 'Paspic', 11),
(12, 'Email Signature', 'email_signature', 'Paspic Team', 12),
(13, 'Default Country', 'default_country', '77', 13),
(14, 'Facebook voucher amount', 'fb_like_amount', '0.50', 14),
(15, 'How many times facebook code be used', 'fb_like_max_user', '5', 15),
(16, 'Linked In Url', 'linked_in_link', 'Linked In', 8),
(17, 'Required Face Width For India', 'face_width_india', '70', 9),
(18, 'Cropped Face Width For India', 'cropped_face_width_india', '350', 10),
(19, 'From', 'from_email', 'support@paspic.co.uk', 17),
(20, 'From Name', 'from_name', 'Paspic', 18),
(21, 'Office Address', 'office_address', 'Registered Office: 168 CHURCH ROAD, HOVE, BN3 2DL, EAST SUSSEX', 19),
(22, 'Phone number', 'phone_number', '+44 (0)1273 704416', 20),
(23, 'Fax number', 'fax_number', '+44 (0)1273 704499', 21),
(24, 'Required Face Width For Uk', 'face_width_uk', '75', 0),
(25, 'Cropped Face Width For UK', 'cropped_face_width_uk', '350', 0),
(26, 'Baby under 12 month', 'baby_under_12', '<iframe width="300" height="225" src="https://www.youtube.com/embed/tRaw0vtMYcE" frameborder="0" allowfullscreen></iframe>', 22),
(27, 'Child under 6 years', 'child_under_6', '<iframe width="300" height="225" src="https://www.youtube.com/embed/wL29bhIsOxM" frameborder="0" allowfullscreen></iframe>', 23),
(28, 'Over 6 years', 'over_6_years', '<iframe width="300" height="225" src="https://www.youtube.com/embed/LejwmH6H0bs" frameborder="0" allowfullscreen></iframe>', 24);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE IF NOT EXISTS `email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `title`, `subject`, `content`) VALUES
(1, 'Registration Success Email', 'Welcome to Passpic', '<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />\r\n<title></title>\r\n<table border="0" width="700">\r\n	<tbody>\r\n		<tr>\r\n			<td align="center">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td align="left" style="text-align:left;"><a href="#"><img border="0" src="{SITE_URL}/images/header.gif" usemap="#Map" /></a></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#377fcb" height="42" style="color:#fff; font-size:20px; text-align:center; font-family:arial;">99.5% of all our passport photos are approved on first submission</td>\r\n		</tr>\r\n		<tr>\r\n			<td align="center" valign="top">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td style="color:#878787; font-size:14px; font-family:arial; line-height:20px; text-align:justify" valign="top">\r\n						<p><strong>Dear {FirstName},</strong><br />\r\n						<br />\r\n						Thank you for using <a href="{Sitename}">{Sitename}</a> Your e-photobooth!<br />\r\n						<br />\r\n						Email: {EMAIL}<br />\r\n						Password: {PASSWORD}<br />\r\n						<br />\r\n						As this is a brand new service that we are offering we would appreciate if you could let us know what you think about Paspic.<br />\r\n						If you are happy with <a href="{Sitename}">{Sitename}</a> please tell your friends.<br />\r\n						<br />\r\n						kind regards,<br />\r\n						{Signature}</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#878787" height="50" style="color:#fff; font-size:13px; text-align:center; font-family:arial; line-height:20px;">{OFFICE_ADDRESS}<br />\r\n			<strong>Email</strong>:<a href="mailto:{CONTACT_EMAIL}" style="color:#fff;">{CONTACT_EMAIL}</a>, Phone: {PHONE_NUMBER}, Fax: {FAX_NUMBER}</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><map id="Map" name="Map"><area coords="522,82,555,118" href="{facebook_url}" shape="rect" /> <area coords="563,83,595,117" href="{twitter_url}" shape="rect" /> <area coords="602,84,637,117" href="{gplus_url}" shape="rect" /> <area coords="641,83,674,117" href="{gplus_url}" shape="rect" /> <area coords="680,84,714,118" href="{youtube_url}" shape="rect" /></map></p>\r\n'),
(2, 'Old Registration Email', 'Old Welcome to Passpic', '<title></title>\r\n<meta charset="UTF-8" />\r\n<meta content="width=device-width, initial-scale=1.0" name="viewport" />\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">Hi {FirstName},</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">You have now completed the signup process and can login to your accounts using the following information.</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td width="100">URL:</td>\r\n			<td>{Sitename}</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Username:</td>\r\n			<td>{Registered Email}</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">Need some help straight away? Contact us directly at support@taload.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">Best regards,<br />\r\n			The Taload Team</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(3, 'Password Reset', 'Password Reset', '<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />\r\n<meta content="width=device-width, initial-scale=1.0" name="viewport" />\r\n<title></title>\r\n<table border="0" width="700">\r\n	<tbody>\r\n		\r\n		<tr>\r\n			<td align="left" valign="top">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td style="color:#878787; font-size:14px; font-family:arial; line-height:20px; text-align:justify" valign="top">\r\n						<p><strong>Dear {FirstName},</strong> &nbsp;</p>\r\n\r\n						<p>We have reset your password now. You can use below password to login</p>\r\n						\r\n						<p>Password: {Password}</p>\r\n						\r\n						\r\n						<p><a href="{ResetLink}">{ResetLink}</a></p>\r\n\r\n						\r\n						\r\n						Thank you for using moneyworksdirect!<br />\r\n						&nbsp;</p>\r\n						Kind regards,<br />\r\n						{Signature}\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#878787" height="50" style="color:#fff; font-size:13px; text-align:center; font-family:arial; line-height:20px;">{OFFICE_ADDRESS}<br />\r\n			<strong>Email</strong>:<a href="mailto:{CONTACT_EMAIL}" style="color:#fff;">{CONTACT_EMAIL}</a>, Phone: {PHONE_NUMBER}, Fax: {FAX_NUMBER}</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>'),
(4, 'Contact Us', 'Contact Detail', '<!DOCTYPE html><html><head><title>Welcome to Taload</title><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head><body><p>A person contacted you with the following details:-</p><table width="60%" border="0" cellpadding="3" cellspacing="3">  <tr>    <th scope="row">Name:</th>    <td>{Name}</td>  </tr>  <tr>    <th scope="row">Email:</th>    <td>{Email}</td>  </tr>  <tr>    <th scope="row">Subject:</th>    <td>{Subject}</td>  </tr>  <tr>    <th scope="row"  style="vertical-align: top;">Message:</th>    <td>{Message}</td>  </tr></table></body></html>'),
(5, 'Request to reupload image', 'Request to reupload image on Paspic', '<!DOCTYPE html>\r\n<html>\r\n    <head>\r\n        <title>Welcome to Paspic</title>\r\n        <meta charset="UTF-8">\r\n        <meta name="viewport" content="width=device-width, initial-scale=1.0">\r\n    </head>\r\n    <body>\r\n        <table>\r\n            <tr><td colspan="2">Hi {FirstName},</td></tr>\r\n            <tr><td colspan="2">&nbsp;</td></tr>\r\n            \r\n            \r\n            <tr>\r\n                <td colspan="2">\r\n                   We have checked your uploaded image and found that there was some issues with that. To upload a new image please click on below link.\r\n					\r\n                </td></tr>\r\n				<tr><td colspan="2">{Reupload Link}</td></tr>\r\n                <tr><td colspan="2">&nbsp;</td></tr>\r\n                <tr><td colspan="2">Thanks,</td></tr>\r\n				<tr><td colspan="2">{Signature}</td></tr>\r\n            <tr><td colspan="2">&nbsp;</td></tr>\r\n            \r\n            \r\n        </table>\r\n    </body>\r\n</html>'),
(6, 'Contact ticket', 'Contact ticket on Passpicdev', '<!DOCTYPE html><html><head><title>Welcome to Passpic</title><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head><body><p>An enquiry has been generated by the below user:-</p><table width="60%" border="0" cellpadding="3" cellspacing="3"><tr>    <th scope="row">Ticket No:</th>    <td>#{Mid}</td>  </tr>  <tr>    <th scope="row">Name:</th>    <td>{Name}</td>  </tr>  <tr>    <th scope="row">Email:</th>    <td>{Email}</td>  </tr>    <tr>    <th scope="row">URL:</th>    <td>{URL}</td>  </tr>  <tr>    <th scope="row">Enquire Type:</th>    <td>{Enquire Type}</td>  </tr>  <tr>    <th scope="row">Order No:</th>    <td>{Merchant cart ID}</td>  </tr>  <tr>    <th scope="row"  style="vertical-align: top;">Message:</th>    <td>{Message}</td>  </tr></table></body></html>'),
(7, 'Notification for reuploaded image to Admin', 'Customer has reuploaded image (Order - #{OrderId})', '<!DOCTYPE html>\r\n<html>\r\n    <head>\r\n        <title>Welcome to Paspic</title>\r\n        <meta charset="UTF-8">\r\n        <meta name="viewport" content="width=device-width, initial-scale=1.0">\r\n    </head>\r\n    <body>\r\n        <table>\r\n            <tr><td colspan="2">Hi {FirstName},</td></tr>\r\n            <tr><td colspan="2">&nbsp;</td></tr>\r\n            \r\n            \r\n            <tr>\r\n                <td colspan="2">\r\n                   A Customer has reuploaded a new image for the order #{OrderId}.\r\n				   Please check the new image by clicking on below url\r\n					\r\n                </td></tr>\r\n				<tr><td colspan="2">{Admin OrderLink}</td></tr>\r\n                <tr><td colspan="2">&nbsp;</td></tr>\r\n                <tr><td colspan="2">Thanks,</td></tr>\r\n				<tr><td colspan="2">{Signature}</td></tr>\r\n            <tr><td colspan="2">&nbsp;</td></tr>\r\n            \r\n            \r\n        </table>\r\n    </body>\r\n</html>'),
(8, 'Order Status Notification to Customer', 'Your order status changed', '<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />\r\n<title></title>\r\n<table border="0" width="700">\r\n	<tbody>\r\n		<tr>\r\n			<td align="center">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td align="left" style="text-align:left;"><a href="#"><img src="{SITE_URL}/images/header.gif" usemap="#Map" border="0" /></a></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#377fcb" height="42" style="color:#fff; font-size:20px; text-align:center; font-family:arial;">99.5% of all our passport photos are approved on first submission</td>\r\n		</tr>\r\n		<tr>\r\n			<td align="center" valign="top">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td style="color:#878787; font-size:14px; font-family:arial; line-height:20px; text-align:justify" valign="top">\r\n						<p><strong>Hi {FirstName},</strong><br />\r\n						<br />\r\n						Your paspic order status has been changed.<br />\r\n						<br />\r\n						Order Status :{OrderStatus}<br />\r\n						<br />\r\n						<br />\r\n						You can track your order by logging into your account. To know your account status, Please click on below link.<br />\r\n						{OrderLink}<br />\r\n						<br />\r\n						Need some help straight away? Contact us directly at <a href="mailto:{CONTACT_EMAIL}" style="color:#fff;">{CONTACT_EMAIL}</a><br />\r\n						<br />\r\n						Best regards,<br />\r\n						{Signature}</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#878787" height="50" style="color:#fff; font-size:13px; text-align:center; font-family:arial; line-height:20px;">{OFFICE_ADDRESS}<br />\r\n			<strong>Email</strong>:<a href="mailto:{CONTACT_EMAIL}" style="color:#fff;">{CONTACT_EMAIL}</a>, Phone: {PHONE_NUMBER}, Fax: {FAX_NUMBER}</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<map name="Map" id="Map">\r\n  <area shape="rect" coords="522,82,555,118" href="{facebook_url}" />\r\n  <area shape="rect" coords="563,83,595,117" href="{twitter_url}" />\r\n  <area shape="rect" coords="602,84,637,117" href="{gplus_url}" />\r\n  <area shape="rect" coords="641,83,674,117" href="{gplus_url}" />\r\n  <area shape="rect" coords="680,84,714,118" href="{youtube_url}" />\r\n</map>'),
(9, 'Order Confirmation Template', 'Paspic Photo Order - #{OrderId}', '<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />\r\n<meta content="width=device-width, initial-scale=1.0" name="viewport" />\r\n<title></title>\r\n<table border="0" width="700">\r\n	<tbody>\r\n		<tr>\r\n			<td align="left">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td align="left" style="text-align:left;"><a href="{SITE_URL}"><img src="{SITE_URL}/images/header.gif" usemap="#Map" border="0" /></a></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#377fcb" height="42" style="color:#fff; font-size:20px; text-align:center; font-family:arial;">99.5% of all our passport photos are approved on first submission</td>\r\n		</tr>\r\n		<tr>\r\n			<td align="left" valign="top">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td style="color:#878787; font-size:14px; font-family:arial; line-height:20px; text-align:justify" valign="top">\r\n						<p><strong>Dear {FirstName},</strong><br />\r\n						<br />\r\n						Thank you for your order placed on {ORDER_DATE}. We will endeavour to dispatch your photos within 2 working days..<br />\r\n						&nbsp;</p>\r\n\r\n						<table border="0" cellpadding="0" cellspacing="0" class="cart-table table">\r\n							<tbody>\r\n								<tr>\r\n									<th scope="col" width="15%">Description</th>\r\n									<th scope="col" width="35%">&nbsp;</th>\r\n									<th scope="col" width="18%">Quantity</th>\r\n									<th scope="col" width="22%">Unit Price (&pound;)</th>\r\n									<th scope="col" width="22%">Total (&pound;)</th>\r\n								</tr>\r\n								<tr>\r\n									<td colspan="4">{ORDER_ROWS}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						<br />\r\n						<br />\r\n						We have now launched a brand new FaceBook page.<br />\r\n						We would really appreciate it if you could let us know what you think about Paspic, by commenting on our Facebook page, &quot;Like&quot; us and share with your friends what we do.<br />\r\n						<br />\r\n						Please visit: <a href="http://www.facebook.com/Paspic.Photos">http://www.facebook.com/Paspic.Photos</a><br />\r\n						Thank you for using Paspic, your e-photobooth!<br />\r\n						<br />\r\n						Kind regards,<br />\r\n						{Signature}</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#878787" height="50" style="color:#fff; font-size:13px; text-align:center; font-family:arial; line-height:20px;">{OFFICE_ADDRESS}<br />\r\n			<strong>Email</strong>:<a href="mailto:{CONTACT_EMAIL}" style="color:#fff;">{CONTACT_EMAIL}</a>, Phone: {PHONE_NUMBER}, Fax: {FAX_NUMBER}</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<map name="Map" id="Map">\r\n  <area shape="rect" coords="522,82,555,118" href="{facebook_url}" />\r\n  <area shape="rect" coords="563,83,595,117" href="{twitter_url}" />\r\n  <area shape="rect" coords="602,84,637,117" href="{gplus_url}" />\r\n  <area shape="rect" coords="641,83,674,117" href="{gplus_url}" />\r\n  <area shape="rect" coords="680,84,714,118" href="{youtube_url}" />\r\n</map>'),
(10, 'Paspic Voucher Code', 'Paspic Voucher Code', '<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />\r\n<title></title>\r\n<table border="0" width="700">\r\n	<tbody>\r\n		<tr>\r\n			<td align="center">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td align="left" style="text-align:left;"><a href="#"><img border="0" src="{SITE_URL}/images/header.gif" usemap="#Map" /></a></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#377fcb" height="42" style="color:#fff; font-size:20px; text-align:center; font-family:arial;">99.5% of all our passport photos are approved on first submission</td>\r\n		</tr>\r\n		<tr>\r\n			<td align="center" valign="top">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td style="color:#878787; font-size:14px; font-family:arial; line-height:20px; text-align:justify" valign="top">\r\n						<p><strong>Hi {FirstName},</strong><br />\r\n						&nbsp;</p>\r\n\r\n						<p>As a valued customer Paspic is giving you to use or to share a discount voucher. The voucher number is <b>{VOUCHER_CODE}</b>. The value of the voucher is GBP <b>{VOUCHER_AMT}</b>.The voucher is valid until {VOUCHER_END_DATE} and is valid for {VOUCHER_COUNT} purchases.</p>\r\n\r\n						<p>Please use the discount for your next order and Enjoy!!!</p>\r\n\r\n						<p>{SITE_URL}</p>\r\n						Need some help straight away? Contact us directly at <a href="mailto:{CONTACT_EMAIL}">{CONTACT_EMAIL}</a><br />\r\n						<br />\r\n						Best regards,<br />\r\n						{Signature}\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#878787" height="50" style="color:#fff; font-size:13px; text-align:center; font-family:arial; line-height:20px;">{OFFICE_ADDRESS}<br />\r\n			<strong>Email</strong>:<a href="mailto:{CONTACT_EMAIL}" style="color:#fff;">{CONTACT_EMAIL}</a>, Phone: {PHONE_NUMBER}, Fax: {FAX_NUMBER}</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><map id="Map" name="Map"><area coords="522,82,555,118" href="{facebook_url}" shape="rect" /> <area coords="563,83,595,117" href="{twitter_url}" shape="rect" /> <area coords="602,84,637,117" href="{gplus_url}" shape="rect" /> <area coords="641,83,674,117" href="{gplus_url}" shape="rect" /> <area coords="680,84,714,118" href="{youtube_url}" shape="rect" /></map></p>\r\n'),
(11, 'Order Comment Notification Template', 'A new comment added on your order - #{OrderId}', '<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />\r\n<title></title>\r\n<table border="0" width="700">\r\n	<tbody>\r\n		<tr>\r\n			<td align="center">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td align="left" style="text-align:left;"><a href="{SITE_URL}"><img border="0" src="{SITE_URL}/images/header.gif" usemap="#Map" /></a></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#377fcb" height="42" style="color:#fff; font-size:20px; text-align:center; font-family:arial;">99.5% of all our passport photos are approved on first submission</td>\r\n		</tr>\r\n		<tr>\r\n			<td align="center" valign="top">\r\n			<table border="0" width="660">\r\n				<tbody>\r\n					<tr>\r\n						<td style="color:#878787; font-size:14px; font-family:arial; line-height:20px; text-align:justify" valign="top">\r\n						<p><strong>Hi {FirstName},</strong><br />\r\n						<br />\r\n						A new comment has been added by admin. Please see below :<br />\r\n						&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="color:#878787; font-size:14px; font-family:arial; line-height:20px; text-align:justify" valign="top">\r\n						<p><strong>Comment:</strong><br />\r\n						{comment}<br />\r\n						&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="color:#878787; font-size:14px; font-family:arial; line-height:20px; text-align:justify" valign="top">\r\n						<p>For more information, please login into your account and check it here :<br />\r\n						{Order Link}<br />\r\n						&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td bgcolor="#878787" height="50" style="color:#fff; font-size:13px; text-align:center; font-family:arial; line-height:20px;">{OFFICE_ADDRESS}<br />\r\n						<strong>Email</strong>:<a href="mailto:{CONTACT_EMAIL}" style="color:#fff;">{CONTACT_EMAIL}</a>, Phone: {PHONE_NUMBER}, Fax: {FAX_NUMBER}</td>\r\n					</tr>\r\n					<tr>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><map id="Map" name="Map"><area coords="522,82,555,118" href="{facebook_url}" shape="rect" /> <area coords="563,83,595,117" href="{twitter_url}" shape="rect" /> <area coords="602,84,637,117" href="{gplus_url}" shape="rect" /> <area coords="641,83,674,117" href="{gplus_url}" shape="rect" /> <area coords="680,84,714,118" href="{youtube_url}" shape="rect" /></map></p>\r\n'),
(12, 'Test mail Template', 'Test mail template', '<p>Test template content here</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` varchar(16) CHARACTER SET utf8 NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` enum('t','f') COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `locale_2` (`locale`),
  KEY `locale` (`locale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `locale`, `name`, `is_active`, `created`, `modified`) VALUES
(5, 'en_us', 'US', 't', 1375247219, 1390571799),
(8, 'De', 'German', 't', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(16) NOT NULL DEFAULT '',
  `translation` text,
  PRIMARY KEY (`id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `language`, `translation`) VALUES
(1, 'De', ''),
(1, 'en_us', ''),
(5, 'De', ''),
(5, 'en_us', ''),
(6, 'De', ''),
(6, 'en_us', ''),
(7, 'De', ''),
(7, 'en_us', ''),
(8, 'De', '<div class="rtf">\r\n<h2>With Paspic you only need to take your photo with your face in the middle of the picture, on a plain background. Paspic will take care of the rest!</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="How to take your photo?" border="0" height="" src="https://www.paspic.com/res/pictogram05.gif" width="" /></p>\r\n\r\n<p>Paspic.com is the online solution for all passport size photographs, just like a regular photobooth.</p>\r\n\r\n<p>Order your Passport Photo prints for:<br />\r\n- &pound;4.95 UK, AUS and/or EU style photos including free postage for a set of 4 photos<br />\r\n- &pound;5.00 US, China and India Visa compliant photos including free postage for a set of 3 photos<br />\r\nThe photos are printed on photo-quality paper.</p>\r\n\r\n<ol>\r\n	<li><a href="https://www.paspic.com/index.php?func=register1" id="Register" onclick="https://www.paspic.com/index.php?func=register1">Register</a></li>\r\n	<li>Upload your photo(s)</li>\r\n	<li>Paspic will check (for free) their suitability under the new Passport Office regulations</li>\r\n	<li>Order hard copies online</li>\r\n	<li>Prints will then be posted by Paspic to you within 2 working days</li>\r\n</ol>\r\n\r\n<p>However, all new passport photos now need to include unique, measurable physical characteristics (biometrics) which enable facial recognition technology to prevent fraud.<br />\r\nPaspic&#39;s automated platform will advise you whether your photos are compliant with the new standards set by the International Civil Aviation Organization (ICAO)or provide information as to why the photo may be rejected by the UK, EU, AUS, China, India or US Passport Office Authorities.*</p>\r\n\r\n<p><a href="http://www.passport.gov.uk/passport_online.asp"><img alt="Passport Office" border="0" class="left" height="" src="https://www.paspic.com/res/passport.gif" width="" /></a>When you have the correct photo you may continue and complete your passport application on-line at: <a href="http://www.passport.gov.uk/passport_online.asp" title="On-Line Passport application">http://www.passport.gov.uk/passport_online.asp</a><br />\r\n*In the unlikely event that your photo(s) are found to be biometrically incompliant by the passport authorities, Paspic will refund your photo(s) purchase price or work with you to provide another compliant photo, free of charge.</p>\r\n\r\n<p><sup>Paspic Vouchers Terms and Conditions:</sup></p>\r\n\r\n<p><sup>Only one Voucher code may be used per order.</sup><br />\r\n<sup>Only available online and must be entered at time of purchase</sup><br />\r\n<sup>*Find out more about biometric compliant photos on the UK Passport Authority(UKPA) website:<a href="http://www.passport.gov.uk/general_biometrics.asp" id="UKPA Biometric" title="Biometric Passport info">http://www.passport.gov.uk/general_biometrics.asp</a></sup></p>\r\n\r\n<p><strong>Passport photo size and countries to where WE POST FREE OF CHARGE TO:</strong></p>\r\n\r\n<p>Albania Passport photo size 5x4cm<br />\r\nArgentina Passport photo 1.5&quot;x1.5&quot;<br />\r\nAustralia Passport photo 3,5 x 4.5 cm<br />\r\nAustria Passport photo 3,5 x 4.5 cm<br />\r\nBahamas Passport photo size 2&quot;x2&quot;<br />\r\nBelarus Passport photo size 5x4cm<br />\r\nBelgium Passport photo 3,5 x 4.5 cm<br />\r\nBelize Passport photo size 2&quot;x2&quot;<br />\r\nBolivia Passport photo size 2&quot;x2&quot;<br />\r\nBrazil Passport photo size 7x5cm<br />\r\nBulgaria Passport photo 3,5 x 4.5 cm<br />\r\nCanada Passport photo size 7x5cm<br />\r\nChina Passport photo size 3.5x4.5cm<br />\r\nColombia Passport photo size 2.5x1.5&quot;<br />\r\nCosta Rica Pass photo 3,5 x 4.5 cm<br />\r\nCroatia Passport photo 3,5 x 4.5 cm<br />\r\nCzech Republic Passport 3,5 x 4.5 cm<br />\r\nDenmark Passport photo 3,5 x 4.5 cm<br />\r\nEstonia Passport photo size 5x4cm<br />\r\nFinland Passport photo 3,5 x 4.5 cm<br />\r\nFrance Passport photo 3,5 x 4.5 cm<br />\r\nGermany Passport photo 3,5 x 4.5 cm<br />\r\nGreece Passport photo size 6x4cm<br />\r\nHong Kong Passport photo size 5x4cm<br />\r\nHungary Passport photo 3,5 x 4.5 cm<br />\r\nIndia Visa photo size 5 x 5cm<br />\r\nIndonesia Passport photo size 2x2&quot;<br />\r\nIreland Passport photo 3,5 x 4.5 cm<br />\r\nIsrael Passport photo 3,5 x 4.5 cm<br />\r\nItaly Passport photo 3,5 x 4.5 cm<br />\r\nJamaica Passport photo size 2x2&quot;<br />\r\nJapan Passport photo 3,5 x 4.5 cm<br />\r\nKenya Passport photo 3,5 x 4.5 cm<br />\r\nLebanon Passport photo 2x2&quot;<br />\r\nMalaysia Passport photo 5x3.5cm<br />\r\nMexico Passport photo 3,5 x 4.5 cm<br />\r\nMorocco Passport photo 3,5 x 4.5 cm<br />\r\nNetherlands Pass photo 3,5 x 4.5 cm<br />\r\nNew Zealand Pass photo 3,5 x 4.5 cm<br />\r\nNigeria Passport photo 3,5 x 4.5 cm<br />\r\nNorway Passport photo 3,5 x 4.5 cm<br />\r\nPakistan Passport photo 2x2&quot;<br />\r\nPanama Passport photo 3,5 x 4.5 cm<br />\r\nPeru Passport photo 2x2&quot;<br />\r\nPhilippines Pass photo 3,5 x 4.5 cm<br />\r\nPoland Passport photo 3,5 x 4.5 cm<br />\r\nPortugal Passport photo 3,5 x 4.5 cm<br />\r\nRomania Passport photo 3,5 x 4.5 cm<br />\r\nRussia Passport photo 3,5 x 4.5 cm<br />\r\nSingapore Pass photo 3,5 x 4.5 cm<br />\r\nSouth Africa Passport 3,5 x 4.5 cm<br />\r\nSpain Passport photo 3,5 x 4.5 cm<br />\r\nSweden Passport photo 3,5 x 4.5 cm<br />\r\nSwitzerland Passport 3,5 x 4.5 cm<br />\r\nTaiwan Passport photo 5x5cm<br />\r\nTanzania Passport photo 3,5 x 4.5 cm<br />\r\nThailand Passport photo 2x2&quot;<br />\r\nTrinidad and Tobago 5.3x4.3cm<br />\r\nTurkey Passport photo 3,5 x 4.5 cm<br />\r\nUnited Kingdom Passport 3,5 x 4.5 cm<br />\r\nUnited States Passport photo 2x2&quot;<br />\r\nUK Passport photo size 3,5 x 4.5 cm<br />\r\nUS Passport photo size 2x2&quot;<br />\r\nVenezuela Passport photo 2x2&quot;<br />\r\nZimbabwe Pass photo 3,5 x 4.5 cm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n'),
(8, 'en_us', '<div class="rtf">\r\n<h2>With Paspic you only need to take your photo with your face in the middle of the picture, on a plain background. Paspic will take care of the rest!</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="How to take your photo?" border="0" height="" src="https://www.paspic.com/res/pictogram05.gif" width="" /></p>\r\n\r\n<p>Paspic.com is the online solution for all passport size photographs, just like a regular photobooth.</p>\r\n\r\n<p>Order your Passport Photo prints for:<br />\r\n- &pound;4.95 UK, AUS and/or EU style photos including free postage for a set of 4 photos<br />\r\n- &pound;5.00 US, China and India Visa compliant photos including free postage for a set of 3 photos<br />\r\nThe photos are printed on photo-quality paper.</p>\r\n\r\n<ol>\r\n	<li><a href="https://www.paspic.com/index.php?func=register1" id="Register" onclick="https://www.paspic.com/index.php?func=register1">Register</a></li>\r\n	<li>Upload your photo(s)</li>\r\n	<li>Paspic will check (for free) their suitability under the new Passport Office regulations</li>\r\n	<li>Order hard copies online</li>\r\n	<li>Prints will then be posted by Paspic to you within 2 working days</li>\r\n</ol>\r\n\r\n<p>However, all new passport photos now need to include unique, measurable physical characteristics (biometrics) which enable facial recognition technology to prevent fraud.<br />\r\nPaspic&#39;s automated platform will advise you whether your photos are compliant with the new standards set by the International Civil Aviation Organization (ICAO)or provide information as to why the photo may be rejected by the UK, EU, AUS, China, India or US Passport Office Authorities.*</p>\r\n\r\n<p><a href="http://www.passport.gov.uk/passport_online.asp"><img alt="Passport Office" border="0" class="left" height="" src="https://www.paspic.com/res/passport.gif" width="" /></a>When you have the correct photo you may continue and complete your passport application on-line at: <a href="http://www.passport.gov.uk/passport_online.asp" title="On-Line Passport application">http://www.passport.gov.uk/passport_online.asp</a><br />\r\n*In the unlikely event that your photo(s) are found to be biometrically incompliant by the passport authorities, Paspic will refund your photo(s) purchase price or work with you to provide another compliant photo, free of charge.</p>\r\n\r\n<p><sup>Paspic Vouchers Terms and Conditions:</sup></p>\r\n\r\n<p><sup>Only one Voucher code may be used per order.</sup><br />\r\n<sup>Only available online and must be entered at time of purchase</sup><br />\r\n<sup>*Find out more about biometric compliant photos on the UK Passport Authority(UKPA) website:<a href="http://www.passport.gov.uk/general_biometrics.asp" id="UKPA Biometric" title="Biometric Passport info">http://www.passport.gov.uk/general_biometrics.asp</a></sup></p>\r\n\r\n<p><strong>Passport photo size and countries to where WE POST FREE OF CHARGE TO:</strong></p>\r\n\r\n<p>Albania Passport photo size 5x4cm<br />\r\nArgentina Passport photo 1.5&quot;x1.5&quot;<br />\r\nAustralia Passport photo 3,5 x 4.5 cm<br />\r\nAustria Passport photo 3,5 x 4.5 cm<br />\r\nBahamas Passport photo size 2&quot;x2&quot;<br />\r\nBelarus Passport photo size 5x4cm<br />\r\nBelgium Passport photo 3,5 x 4.5 cm<br />\r\nBelize Passport photo size 2&quot;x2&quot;<br />\r\nBolivia Passport photo size 2&quot;x2&quot;<br />\r\nBrazil Passport photo size 7x5cm<br />\r\nBulgaria Passport photo 3,5 x 4.5 cm<br />\r\nCanada Passport photo size 7x5cm<br />\r\nChina Passport photo size 3.5x4.5cm<br />\r\nColombia Passport photo size 2.5x1.5&quot;<br />\r\nCosta Rica Pass photo 3,5 x 4.5 cm<br />\r\nCroatia Passport photo 3,5 x 4.5 cm<br />\r\nCzech Republic Passport 3,5 x 4.5 cm<br />\r\nDenmark Passport photo 3,5 x 4.5 cm<br />\r\nEstonia Passport photo size 5x4cm<br />\r\nFinland Passport photo 3,5 x 4.5 cm<br />\r\nFrance Passport photo 3,5 x 4.5 cm<br />\r\nGermany Passport photo 3,5 x 4.5 cm<br />\r\nGreece Passport photo size 6x4cm<br />\r\nHong Kong Passport photo size 5x4cm<br />\r\nHungary Passport photo 3,5 x 4.5 cm<br />\r\nIndia Visa photo size 5 x 5cm<br />\r\nIndonesia Passport photo size 2x2&quot;<br />\r\nIreland Passport photo 3,5 x 4.5 cm<br />\r\nIsrael Passport photo 3,5 x 4.5 cm<br />\r\nItaly Passport photo 3,5 x 4.5 cm<br />\r\nJamaica Passport photo size 2x2&quot;<br />\r\nJapan Passport photo 3,5 x 4.5 cm<br />\r\nKenya Passport photo 3,5 x 4.5 cm<br />\r\nLebanon Passport photo 2x2&quot;<br />\r\nMalaysia Passport photo 5x3.5cm<br />\r\nMexico Passport photo 3,5 x 4.5 cm<br />\r\nMorocco Passport photo 3,5 x 4.5 cm<br />\r\nNetherlands Pass photo 3,5 x 4.5 cm<br />\r\nNew Zealand Pass photo 3,5 x 4.5 cm<br />\r\nNigeria Passport photo 3,5 x 4.5 cm<br />\r\nNorway Passport photo 3,5 x 4.5 cm<br />\r\nPakistan Passport photo 2x2&quot;<br />\r\nPanama Passport photo 3,5 x 4.5 cm<br />\r\nPeru Passport photo 2x2&quot;<br />\r\nPhilippines Pass photo 3,5 x 4.5 cm<br />\r\nPoland Passport photo 3,5 x 4.5 cm<br />\r\nPortugal Passport photo 3,5 x 4.5 cm<br />\r\nRomania Passport photo 3,5 x 4.5 cm<br />\r\nRussia Passport photo 3,5 x 4.5 cm<br />\r\nSingapore Pass photo 3,5 x 4.5 cm<br />\r\nSouth Africa Passport 3,5 x 4.5 cm<br />\r\nSpain Passport photo 3,5 x 4.5 cm<br />\r\nSweden Passport photo 3,5 x 4.5 cm<br />\r\nSwitzerland Passport 3,5 x 4.5 cm<br />\r\nTaiwan Passport photo 5x5cm<br />\r\nTanzania Passport photo 3,5 x 4.5 cm<br />\r\nThailand Passport photo 2x2&quot;<br />\r\nTrinidad and Tobago 5.3x4.3cm<br />\r\nTurkey Passport photo 3,5 x 4.5 cm<br />\r\nUnited Kingdom Passport 3,5 x 4.5 cm<br />\r\nUnited States Passport photo 2x2&quot;<br />\r\nUK Passport photo size 3,5 x 4.5 cm<br />\r\nUS Passport photo size 2x2&quot;<br />\r\nVenezuela Passport photo 2x2&quot;<br />\r\nZimbabwe Pass photo 3,5 x 4.5 cm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n'),
(9, 'De', '<p>Gr&uuml;nder und Unternehmensleiter Yehuda gr&uuml;ndete und war Unternehmensleiter von PMI PhotoMagic Ltd., einer Joined Venture mit Photo-Me International Plc. 1994 erwarb Photo-Me alle PMI PhotoMagic Aktien.<br />\r\nEr ist der Co-Erfinder der patentierten PhotoMagic Technologie, die weltweit in fast allen der 20,000 digitalen Photo Maschinen genutzt wird.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Operations-Direktor</strong></p>\r\n\r\n<p>Momentan: Leitender Berater f&uuml;r IBM Business Consulting Services in Grossbrittanien, spezialisiert auf den Bereich Kommunikation.<br />\r\nVorherige Anstellungen: Direktor der Kundenbetreuung &ndash; N Brown Plc, Direktor der Globalen Operationen &ndash; Lastminute.com, Direktor der Kundenbetreuung (GBR) und Manager der Auslieferungszentrum &ndash; Amazon.com</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Finanzdirektor</strong></p>\r\n\r\n<p>Seitdem er UHY Hacker Young als Senior Partner nach 40 Jahren verlassen hat, hat er sich darauf spezialisiert Unternehmen bei der Beschaffung von Wachstumskapital zu beraten. W&auml;hrend seiner professionellen Karriere hat er viele Unternehmen mit Hinsicht auf deren Finanzen beraten.</p>\r\n\r\n<p>1995 wurde On-Line Agencies (holdings) Ltd unter anderem von Photo Me International Plc und Online Agencies Ltd f&uuml;r den prim&auml;ren Zweck gegr&uuml;nded, Photo Mes Business Card Kiosks mit dem Informations-Superhighway zu verbinden.</p>\r\n\r\n<p>Nach einem Aufkauf durch das Management im Jahr 2000 hat das Unternehmen den Namen Paspic Limited angenommen und sich weiterentwickelt. Anstelle der mit dem Internet verbundenen Kiosks bietet Paspic&reg; einen virtuellen Fotoservice direkt bei ihnen zu Hause an.<br />\r\nDer Markt f&uuml;r Paspic ist gro&szlig;. Jeder braucht mindestens einmal im Jahr einen Ausweis, eine Buskarte, einen Mitgliedsausweis, einen Lebenslauf, einen F&uuml;hrerschein, eine BahnCard, einen Ski Pass, einen Studenten Ausweis oder ein Visa. Paspic erstellt die ID Fotos f&uuml;r diese und viele weitere Anwendungen! Die Einf&uuml;hrung von Biometrischen Ausweisen hat au&szlig;erdem die T&uuml;r zu vielen weiteren M&ouml;glichkeiten ge&ouml;ffnet.</p>\r\n'),
(9, 'en_us', '<p>Yehuda Hecht - Founder and Managing Director Yehuda founded and was Managing Director of PMI PhotoMagic Ltd, a Joint Venture Company with Photo-Me International Plc. In 1994 Photo-Me purchased all the PMI PhotoMagic shares. He is the co-inventor of the patented PhotoMagic technology. This technology is used worldwide in nearly all of the 20,000 digital photo booths.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>T J Linzy - Operations Director</strong></p>\r\n\r\n<p>Currently - Managing Consultant for IBM Business Consulting Services in the UK working in the Communications sector. Previously: Head of Customer Services - N Brown PLC, Head of Global Operations - Lastminute.com, Head of UK Customer Services and Distribution Centre Manager - Amazon.com.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>John Guest FCA - Finance Director</strong></p>\r\n\r\n<p>Since leaving UHY Hacker Young (Chartered Accountants) as Senior Partner after 40 years in the profession he has concentrated on advising businesses on raising finance for future growth. During his professional career he advised many businesses on corporate finance.</p>\r\n\r\n<p>In 1995, On-Line Agencies (holdings) Ltd, was founded by, among others, Photo Me International Plc and Online Agencies Ltd, for the primary purpose of connecting to the &quot;Information Superhighway&quot; the Business Card kiosks operated by Photo Me on the high street.</p>\r\n\r\n<p>In 2000 following a management buyout the Company changed its name to Paspic Limited and has moved on. Now, rather than connecting the kiosk to the Internet, Paspic&reg; is placing the virtual Photo-Booth directly in your home.<br />\r\nThe market for Paspic&reg; is wide. Every individual needs, at least once a year, a passport, bus pass, club membership card, CV, driving licence, employee card, ID card, job application, membership card, rail pass, ski pass, student card or visa. Paspic&reg; delivers the ID photograph you need for these and many other applications.<br />\r\nNew opportunities have arisen with the introduction of Biometric Passports</p>\r\n'),
(10, 'De', '<p>Aus The Mirror (10. August 2001)</p>\r\n\r\n<p>CAROL Vordemann @ MIRROR. CO.UK : YOUR FAMILY PHOTO ALBUM ON THE WEB WE FOCUS ON SNAPSHOT SITES</p>\r\n\r\n<p>...AND THE QUIRKY</p>\r\n\r\n<p>(&Uuml;bersetzung) Kein Passfoto f&uuml;r einen neuen Reisepass oder eine Bahncard zur Hand? Normalerweise w&uuml;rden Sie jetzt eine Fotomaschine suchen und ewig auf Ihre Fotos warten &ndash; auf denen Sie dann doch wieder wie ein aufgeschreckter Hase aussehen.</p>\r\n\r\n<p>Das geht jetzt auch anders. Mit PasPic (<a href="http://www.paspic.com/">www.paspic.com</a>) k&ouml;nnen Sie einfach ein gutes Foto von Ihnen hochladen und bekommen sechs Passfotos direkt zu sich nach Hause geliefert. Sollten Sie kein passendes Foto auf Ihrem Computer haben, k&ouml;nnen Sie ein entwickeltes Bild zu PasPic schicken der Rest wird f&uuml;r Sie erledigt.</p>\r\n\r\n<p>&Uuml;berpr&uuml;fen Sie auch die Passfoto Standards der Ausweis Beh&ouml;rden, wenn Sie Ihren Ausweis oder F&uuml;hrerschein erneuern.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Aus Revolution (19. September 2001)</p>\r\n\r\n<p>TRAILBLAZER: PASSPORT CONTROL&nbsp; (&Uuml;bersetzung) PasPics Yehuda Hecht erkl&auml;rt Amanda Nottage wie man mit seiner Passfoto Website sein Lieblingsfoto wieder und wieder verwenden kann, von Amanda Nottage.</p>\r\n\r\n<p>Trotz der Aufregung die jeder anstehende Urlaub bringt, gibt es immer einen Moment den alle Urlauber f&uuml;rchten. Sicher, manche haben Flugangst, andere werden nerv&ouml;s wenn sie an den Trubel oder die stechende Insekten denken. Aber alle m&uuml;ssen den unangenehm peinlichen Moment mit einem uniformierten Beamten teilen den das Passfoto bringt.</p>\r\n\r\n<p>Und es wird schlimmer. Mit der steigenden Anzahl von Passfotos in Bahncard, F&uuml;hrerscheinen, Sicherheits- Ausweisen etc. nimmt auch die Anzahl dieser Momente zu und sie m&uuml;ssen ihr farbloses peinliches Bild Tag ein Tag aus mit sich herumtragen.</p>\r\n\r\n<p>PasPic hat eine L&ouml;sung zu dem Problem gefunden. Wenn Sie auch nur ein einziges Foto haben in dem Sie so jung/schlank/h&uuml;bsch aussehen wie Sie es gerne h&auml;tten, dann kann Ihnen paspic.com davon so viele Kopien machen wie Sie wollen. Sie k&ouml;nnen auf jedem Ihrer Passfotos aussehen als w&auml;ren Sie wieder 21.</p>\r\n\r\n<p>Paspic.com macht es m&ouml;glich sich umsonst zu registrieren und Fotos hochzuladen. Dann k&ouml;nnen so viele Kopien bestellt werden wie ben&ouml;tigt werden. Yehuda hecht, der die Firma leitet, nimmt die Angelegenheit ernst und hat Trademarks und Patente f&uuml;r sich gesichert. Er glaubt das seine Firma die Fotomaschinen ersetzen kann. Da ein anf&auml;nglicher Partner der Firma Photo-Me war und da die Fotos immer erst noch gemacht werden m&uuml;ssen, scheint dies ein weites Ziel zu sein, aber Yahuda hat offensichtlich Ambitionen.</p>\r\n\r\n<p>&bdquo;jedes Jahr werden etwa 2.5 Millionen Passfotos weltweit gemacht und der grossteil der Fotografierten ist unzufrieden mit dem Ergebnis,&rdquo; sagt er. &bdquo; Unser Dienst ist einmalig, da wir die Rechnung, die Adresse und die Fotos auf ein Blatt drucken. Das spart Geld und passt durch den Briefkasten.&rdquo;</p>\r\n\r\n<p>Das Marketing der Firma wird ausschlie&szlig;lich online sein und ist den erfahrenen H&auml;nden der Website Promotion Firma Scotti.co.uk.</p>\r\n\r\n<p>Professionelle Fotografen brauchen allerdings nicht direkt ihre Dunkelr&auml;ume schlie&szlig;en. Fotos k&ouml;nnen direkt auf paspic.com hochgeladen werden und das Einkommen wird mit PasPic geteilt. Von den &pound;4 gehen &pound;3.25 and den Fotografen.</p>\r\n\r\n<p>&bdquo;Anfangs werden wir einige entwickelte Bilder zugeschickt bekommen, da viele Fotos haben die sie vervielfachen oder verewigen wollen&rdquo;, sagt Hecht. &bdquo;Auf l&auml;ngere Sicht werden mehr und mehr Leute Digital Kameras besitzen.&rdquo; Paspic.com sucht momentan Partner und bietet ein Affiliationsprogramm mit 25% Provision.</p>\r\n\r\n<p>&bdquo;Wenn zwei Studenten sich zusammenschlie&szlig;en, sparen sie Geld,&rdquo; erkl&auml;rt er. &bdquo; Aber es ist nicht nur f&uuml;r Studenten gedacht. Jeder braucht Passbilder.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;Kommentare von unseren Kunden:</p>\r\n\r\n<p>(&uuml;bersetzt)</p>\r\n\r\n<p>Betreff: Super Seite und Service</p>\r\n\r\n<p>Gl&uuml;ckwunsch zu einem super Service!</p>\r\n\r\n<p>Ich war froh im Guardian von Ihrer Seite zu h&ouml;ren, da mir ein Fotograf 2 Stunden vorher &pound;10 f&uuml;r 2 Passbilder von einem Jpeg berechnen wollte. Ich habe meine Fotos heute erhalten und v&ouml;llig zufrieden. Die Idee f&uuml;r die Seite und das Format sind super.</p>\r\n\r\n<p>John D. Woods</p>\r\n\r\n<p>Belfast</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Betreff: Gl&uuml;ckwunsch</p>\r\n\r\n<p>Ich wollte nur schnell WOW sagen. War nie scharf darauf mich h&uuml;bsch zu machen und dann nach einer funktionierenden Fotomaschine zu suchen... Seit der Einf&uuml;hrung der Foto F&uuml;hrerscheine habe eine Erneuerung aufgeschoben... Warum? Fotomaschinen Phobie!.. Ich h&ouml;rte von Ihrer Seite in Praktical Internet und hab&rsquo;s einfach mal versucht... super!</p>\r\n\r\n<p>Schnell, sicher und gute Qualit&auml;t, was will man mehr! Mein bester online Kauf bisher!</p>\r\n\r\n<p>Weiter so!</p>\r\n\r\n<p>Tony</p>\r\n\r\n<p>Norwich UK</p>\r\n'),
(10, 'en_us', '<p>From The Mirror (10th August 2001):<br />\r\nCAROL Vordemann @ MIRROR. CO.UK : YOUR FAMILY PHOTO ALBUM ON THE WEB WE FOCUS ON SNAPSHOT SITES</p>\r\n\r\n<p>...AND THE QUIRKY<br />\r\nSHORT of a photo for a membership card or a rail pass? Usually, you seek out a photo booth and wait an age for a strip of prints to emerge - and still look like a startled rabbit.</p>\r\n\r\n<p>Well, here&#39;s a novel idea. With PasPic (www.paspic.com), you simply upload a picture that does you justice and in return get six, passport-sized prints. If you don&#39;t have a suitable picture already on your computer, send in a print and PasPic takes care of the upload for you.</p>\r\n\r\n<p>Do be sure to check the Passport Agency and DVLA&#39;s photograph requirements if you&#39;re renewing your passport or driving licence. PasPic provides links to the relevant pages.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>From Revolution (19th September 2001):<br />\r\nTRAILBLAZER: PASSPORT CONTROL - Paspic.com&#39;s Yehuda Hecht explains to Amanda Nottage that with the help of his photocopying site, your favourite pic can be used again and again, by Amanda Nottage</p>\r\n\r\n<p>For all the excitement that a prospective holiday generates in people, there is a moment that just about all travellers dread. Sure, some are nervous about the flight, others about the array of flying, biting, stinging creatures that might feast on them. But all will have to share with a uniformed official the stomach churning moment of shame that is the passport photo.</p>\r\n\r\n<p>&nbsp;It gets worse. With the increase in photo IDs (train pass, driver&#39;s licence, staff security card) those cringeworthy moments multiply, with photographic evidence of your squinting, colourless visage increasingly intruding on your everyday life.</p>\r\n\r\n<p>However, Paspic.com hopes to offer a solution. If you can secure one picture that you are happy with, in which you look young/slim/generously coiffed enough to be flashed to all and sundry, then Paspic.com will make you as many copies as you want. Forget those botox injections, this method of remaining 21 forever is much cheaper.</p>\r\n\r\n<p>Paspic.com enables users to register and send in their ID pictures or upload them digitally for free, so that they can buy as many copies as they need.</p>\r\n\r\n<p>Yehuda Hecht, who runs the company, is taking all this very seriously, with trademarks and patent pending, and claims that his company&#39;s process could make the high street photo booth obsolete. As a previous backer of the business was Photo-Me, and considering that the photos need to be taken in the first place, it seems a grand statement to make, but Hecht is clearly ambitious.</p>\r\n\r\n<p>&quot;Every year around two-and-a-half million ID photos are taken in the world, and most of those in front of the camera are unhappy with them,&quot; he jokes. &quot;Our service is unique because we print the invoice, the address and the photos all on the same sheet, which saves a lot of money, and it all fits through the letterbox.&quot;</p>\r\n\r\n<p>The company&#39;s marketing will be based online, and is being handled by web site promotion firm Scotti.co.uk. However, professional photographers need not lock up their dark rooms just yet. They can upload photos to the site for customers and split the cash with Paspic.com. Users will be charged &pound;4, with &pound;3.25 in royalties going to the photographer.</p>\r\n\r\n<p>&quot;There is going to be a fair amount of hard copies sent because people have photos they like and want to reproduce,&quot; says Hecht. &quot;But in the long term, more and more people will have digital cameras.&quot;</p>\r\n\r\n<p>Paspic.com is now on the hunt for partners, and has initiated an affiliate programme offering a 10 per cent commission.</p>\r\n\r\n<p>&quot;If two students group together it would save them money,&quot; he explains.</p>\r\n\r\n<p>&quot;But it&#39;s not only for students. At the end of the day, such a photo is a commodity. Everyone needs a passport.&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>From some of our grateful customers:</p>\r\n\r\n<p>Subject: Great site and service</p>\r\n\r\n<p>Congratulations on a great service!<br />\r\nHappily I read about your site in the Guardian about two hours after a photo retailer wanted to charge me &pound;10 to convert a Jpeg into two passport photos. I got my photos today and am very pleased. The idea for the site and photo format are excellent.</p>\r\n\r\n<p>John D. Woods<br />\r\nBelfast</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Subject: Congratulations</p>\r\n\r\n<p>I would just like to say WOW,</p>\r\n\r\n<p>I have never liked the hassle of getting dressed up, trudging the streets looking for a working photo booth....... With the introduction of photo driving licences I have put of applying for one........ Why, because of the photo booth phobia.......</p>\r\n\r\n<p>I heard about your site in Practical Internet, and tried your service........ Happy Happy Happy.......</p>\r\n\r\n<p>Speed, Security &amp; Quality all rolled into one Truely Amazing, the best purchase made over the internet</p>\r\n\r\n<p>Keep up the good work<br />\r\nTony<br />\r\nNorwich UK</p>\r\n'),
(12, 'De', '<p>services HU 1234567</p>\r\n'),
(12, 'en_us', '<p>services US1 1234</p>\r\n'),
(14, 'De', '<div class="rtf">\r\n<p>PasPic.com befolgt die relevanten Datenschutz Gesetze, so dass Ihre pers&ouml;nlichen Daten normalerweise nicht ohne Ihre Einwilligung and Dritte weitergeleitet werden. Sollten Ihre Daten allerdings f&uuml;r eine Untersuchung in illegale Aktivit&auml;ten in Verbindung mit Ihrer Nutzung von PasPic von offizieller Seite verlangt werden, werden wir Ihre Daten zur Verf&uuml;gung stellen. PasPic wird Ihre Date nur dann zur Verf&uuml;gung stellen wenn es uns rechtlich abverlangt wird. Jegliche Informationen die an Werbepartner oder Dritte weitergeleitet werden sind anonym und enthalten weder Ihren Namen noch Ihre E-Mail Adresse, Telefon Nummer, Fax Nummer oder Benutzername.</p>\r\n</div>\r\n'),
(14, 'en_us', '<div class="rtf">\r\n<p>PasPic.com will comply with relevant Data Protection laws, so normally any personal details provided to us will not be disclosed to third parties without your consent. You should be aware, however, that if we are requested by a regulatory or government authority investigating illegal activities to provide information concerning your activities whilst using PasPic.com, we shall do so. PasPic will disclose your personal data only if we are compelled to do so by law. PasPic may also disclose information and/or your use of the Service to advertisers or third parties but such information will not include your name, mailing address, e-mail address, telephone number, fax number or username.</p>\r\n</div>\r\n'),
(15, 'De', '<div class="row">\r\n<div class="col-md-100">\r\n<div class="body-heading"><span>Make your own passport photos here. Money back guarantee</span></div>\r\n\r\n<p class="text-center">We validate your Passport Photo on line in accordance with the UK, EU, AUS, US, China and India Visa Photo regulations - FREE OF CHARGE<br />\r\nTo learn how to make your passport photos please click ABOVE on &quot;TAKING YOUR PHOTO&quot; and &quot;PHOTO OF YOUR BABY&quot;.<br />\r\nAll you need is to take your photo with the face in the middle of the picture, on a light background. Paspic will take care of the rest!</p>\r\n\r\n<div class="col-md-40 col-md-push-30">\r\n<div class="free-postage blue-bg center-block text-center">FREE POSTAGE TO MORE THAN 65 COUNTRIES</div>\r\n</div>\r\n\r\n<div class="clearfix">&nbsp;</div>\r\n\r\n<div class="body-heading"><span>Why paspic.com?</span></div>\r\n\r\n<div class="col-md-33">\r\n<div class="service-box blue-bg">&nbsp;</div>\r\n\r\n<h3 class="text-center text-uppercase">Save time</h3>\r\n\r\n<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>\r\n</div>\r\n\r\n<div class="col-md-33">\r\n<div class="service-box blue-bg">&nbsp;</div>\r\n\r\n<h3 class="text-center text-uppercase">Save Money</h3>\r\n\r\n<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>\r\n</div>\r\n\r\n<div class="col-md-33">\r\n<div class="service-box blue-bg">&nbsp;</div>\r\n\r\n<h3 class="text-center text-uppercase">show best look</h3>\r\n\r\n<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>\r\n</div>\r\n</div>\r\n\r\n<div class="clearfix">&nbsp;</div>\r\n\r\n<div class="col-md-100">\r\n<div class="grey-box">\r\n<h2>Upload/Download the photo for free in three step</h2>\r\n\r\n<ul class="steps">\r\n	<li>Register and upload your photo;</li>\r\n	<li>Paspic&#39;s automated platform will advise you whether your photos are compliant with the <span>United Kingdom</span> (3.5cm x 4.5cm), <span>European Union</span> (3.5cm x 4.5cm), <span>Australia</span> (3.5cm x 4.5cm), <span>Nederland</span> (3.5cm x 4.5cm) and <span>United States</span> (2&quot; x 2&quot; = 50mm x 50mm), <span>Indian Visa</span> (2&quot; x 2&quot; = 50mm x 50mm), <span>Chinese Visa</span> (2&quot; x 2&quot; = 50mm x 50mm) Passport Photo size and regulations**</li>\r\n	<li>Order your Passport Photo prints for:<br />\r\n	- &pound;4.95 British, Australian, Dutch or EU passport photos including free postage for a set of 4<br />\r\n	- &pound;5.00 United States Passport photos, India Visa photos or Chinese Visa photos including free postage for a set of 3\r\n	<p>We print passport photos photo-quality paper. (QUALITY CONTROL: The Paspic team manually checks all passport photos ordered before posting them to our customers. If the photo is not compliant the customer is notified by email and asked to provide a new picture).</p>\r\n\r\n	<p><strong>When you have ordered your photo you may continue and complete here your Passport Application Form Online.</strong></p>\r\n	</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n'),
(15, 'en_us', '<div class="row">\r\n<div class="col-md-100">\r\n<div class="body-heading"><span>Make your own passport photos here. Money back guarantee</span></div>\r\n\r\n<p class="text-center">We validate your Passport Photo on line in accordance with the UK, EU, AUS, US, China and India Visa Photo regulations - FREE OF CHARGE<br />\r\nTo learn how to make your passport photos please click ABOVE on &quot;TAKING YOUR PHOTO&quot; and &quot;PHOTO OF YOUR BABY&quot;.<br />\r\nAll you need is to take your photo with the face in the middle of the picture, on a light background. Paspic will take care of the rest!</p>\r\n\r\n<div class="col-md-40 col-md-push-30">\r\n<div class="free-postage blue-bg center-block text-center">FREE POSTAGE TO MORE THAN 65 COUNTRIES</div>\r\n</div>\r\n\r\n<div class="clearfix">&nbsp;</div>\r\n\r\n<div class="body-heading"><span>Why paspic.com?</span></div>\r\n\r\n<div class="col-md-33">\r\n<div class="service-box blue-bg">&nbsp;</div>\r\n\r\n<h3 class="text-center text-uppercase">Save time</h3>\r\n\r\n<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>\r\n</div>\r\n\r\n<div class="col-md-33">\r\n<div class="service-box blue-bg">&nbsp;</div>\r\n\r\n<h3 class="text-center text-uppercase">Save Money</h3>\r\n\r\n<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>\r\n</div>\r\n\r\n<div class="col-md-33">\r\n<div class="service-box blue-bg">&nbsp;</div>\r\n\r\n<h3 class="text-center text-uppercase">show best look</h3>\r\n\r\n<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>\r\n</div>\r\n</div>\r\n\r\n<div class="clearfix">&nbsp;</div>\r\n\r\n<div class="col-md-100">\r\n<div class="grey-box">\r\n<h2>Upload/Download the photo for free in three step</h2>\r\n\r\n<ul class="steps">\r\n	<li>Register and upload your photo;</li>\r\n	<li>Paspic&#39;s automated platform will advise you whether your photos are compliant with the <span>United Kingdom</span> (3.5cm x 4.5cm), <span>European Union</span> (3.5cm x 4.5cm), <span>Australia</span> (3.5cm x 4.5cm), <span>Nederland</span> (3.5cm x 4.5cm) and <span>United States</span> (2&quot; x 2&quot; = 50mm x 50mm), <span>Indian Visa</span> (2&quot; x 2&quot; = 50mm x 50mm), <span>Chinese Visa</span> (2&quot; x 2&quot; = 50mm x 50mm) Passport Photo size and regulations**</li>\r\n	<li>Order your Passport Photo prints for:<br />\r\n	- &pound;4.95 British, Australian, Dutch or EU passport photos including free postage for a set of 4<br />\r\n	- &pound;5.00 United States Passport photos, India Visa photos or Chinese Visa photos including free postage for a set of 3\r\n	<p>We print passport photos photo-quality paper. (QUALITY CONTROL: The Paspic team manually checks all passport photos ordered before posting them to our customers. If the photo is not compliant the customer is notified by email and asked to provide a new picture).</p>\r\n\r\n	<p><strong>When you have ordered your photo you may continue and complete here your Passport Application Form Online.</strong></p>\r\n	</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n'),
(16, 'De', '<p>Bevor Sie Ihr Foto hochladen stellen Sie bitte sicher, dass Ihr Gesicht in der Mitte des Bildes und auf wei&szlig;em, cream farbenem oder hell grauem Hintergrund ist. Paspic erledigt den Rest!</p>\r\n\r\n<p>W&auml;hlen Sie ein Jpeg Foto, das kleiner als 1.5mb ist und Dimensionen zwischen 800x800 und 3000x3000 Pixeln hat. Pressen Sie den &bdquo;Upload&rdquo; Button. Paspic.coms patentierte automatische Plattform &uuml;berpr&uuml;ft GRATIS ob Ihr Bild den neuen Standards entspricht. Sollte Ihr Bild den Richtlinien der relevanten Beh&ouml;rden entsprechen, k&ouml;nnen Sie Drucke direkt von paspic.com bestellen. Diese werden Ihnen dann innerhalb von 2 Werktagen Lieferkostenfrei zugeschickt.</p>\r\n'),
(16, 'en_us', '<p>Before uploading your photo please make sure that you take your photo with your face in the middle of the picture, on a plain off-white, cream or light grey background. Paspic will take care of the rest!</p>\r\n\r\n<p>Select a JPEG format image file, which is smaller than 1.5MB and its dimensions within min. 800 x 800 and max. 3000 x 3000 pixels. Press the &quot;Upload&quot; button.</p>\r\n\r\n<p>Paspic.com Patent Pending automated platform will check for FREE whether or not your photos will meet the regulations</p>\r\n\r\n<p>After you are advised by Paspic&reg; that your photo will be accepted by the relevant passport authority, you may purchase on-line hardcopy prints of your Passport Photos from Paspic.com. These prints will then be posted by Paspic&reg; to you within 2 working day (FREE Postage &amp; Packaging)</p>\r\n'),
(17, 'De', '<p>Bevor Sie Ihr Foto hochladen stellen Sie bitte sicher, dass Ihr Gesicht in der Mitte des Bildes und auf wei&szlig;em, cream farbenem oder hell grauem Hintergrund ist. Paspic erledigt den Rest!</p>\r\n\r\n<p>W&auml;hlen Sie ein Jpeg Foto, das kleiner als 1.5mb ist und Dimensionen zwischen 800x800 und 3000x3000 Pixeln hat. Pressen Sie den &bdquo;Upload&rdquo; Button. Paspic.coms patentierte automatische Plattform &uuml;berpr&uuml;ft GRATIS ob Ihr Bild den neuen Standards entspricht. Sollte Ihr Bild den Richtlinien der relevanten Beh&ouml;rden entsprechen, k&ouml;nnen Sie Drucke direkt von paspic.com bestellen. Diese werden Ihnen dann innerhalb von 2 Werktagen Lieferkostenfrei zugeschickt.</p>\r\n\r\n'),
(17, 'en_us', '<p>Before uploading your photo please make sure that you take your photo with your face in the middle of the picture, on a plain off-white, cream or light grey background. Paspic will take care of the rest!</p>\r\n\r\n<p>Select a JPEG format image file, which is smaller than 1.5MB and its dimensions within min. 800 x 800 and max. 3000 x 3000 pixels. Press the &quot;Upload&quot; button.</p>\r\n\r\n<p>Paspic.com Patent Pending automated platform will check for FREE whether or not your photos will meet the regulations</p>\r\n\r\n<p>After you are advised by Paspic&reg; that your photo will be accepted by the relevant passport authority, you may purchase on-line hardcopy prints of your Passport Photos from Paspic.com. These prints will then be posted by Paspic&reg; to you within 2 working day (FREE Postage &amp; Packaging)</p>\r\n'),
(18, 'De', '<p>&Uuml;ber Uns</p>\r\n'),
(18, 'en_us', '<p>About Us</p>\r\n'),
(19, 'De', '<p>Affiliates</p>\r\n'),
(19, 'en_us', '<p>Affiliates</p>\r\n'),
(20, 'De', '<p><strong>Fangen Sie jetzt an Geld zu verdienen!</strong></p>\r\n\r\n<p>Paspic bietet jetzt ein Affilitationsprogramm, dass profitabel und einfach ist! Indem sie Ihre Website mit dem besten Passfoto Dienst im Internet verlinken, k&ouml;nnen sie Ihren eigenen Service verbessern und zur gleichen Zeit Ihr Einkommen steigern!</p>\r\n\r\n<p>Stellen sie die Paspic e-photo booth jetzt auf Ihre Seite! Komplett kostenfrei!<br />\r\nWir zahlen Ihnen 10% Provision!</p>\r\n\r\n<p>Indem sie dem Paspic Affiliationsprogramm beitreten k&ouml;nnen sie 10% Provision auf alle durch Ihre Website erworbenen Ums&auml;tze verdienen. Das hei&szlig;t: Wir zahlen Ihnen eine Provision f&uuml;r jeden Verkauf der der durch Ihren Link kam. Auch wenn der Kunde nicht sofort etwas erwirbt erhalten Sie trotzdem ihre Provision, solange der Kunde in den folgenden 45 Tagen zur&uuml;ck kommen. Sogar, wenn er nicht wieder durch ihren Link auf unsere Seite kommt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>TERMS AND CONDITIONS</strong></p>\r\n\r\n<p>VERBESSERN SIE IHRE WEBSEITE!<br />\r\nIndem sie Ihre Webseite mit PasPic verlinken, verbessern sie Ihren eigenen Service. Paspic erweitert Ihre Dienste mit der neuen E-Photo Booth. Treten sie unserem Affiliationsprogramm bei, bieten sie einen hochwertigen Dienst an und verdienen sie dabei Geld! Wir w&uuml;rden uns freuen mit Ihnen zusammen zu arbeiten und wissen, dass es eine beidseitig profitable Partnerschaft ist. Sollten sie unserem Team beitreten wollen oder wenn sie Fragen und Anregungen haben, k&ouml;nnen sie uns einfach durch die &rsquo;Kontakt&rsquo; Seite erreichen.<br />\r\nTerms &amp; Conditions</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(20, 'en_us', '<p><strong>START MAKING $&euro;&pound; NOW</strong></p>\r\n\r\n<p>Paspic&reg; is now offering an Affiliate Program that is both profitable and easy to join and administer. By simply linking your site to the best Passport Photo service on the Internet, you can add value to your service, and generate revenue at the same time!</p>\r\n\r\n<p>Add the Paspic&reg; e-photo booth to your site!!.<br />\r\nJOIN NOW - IT&#39;S FREE!<br />\r\nWe will pay you a 10% commission!</p>\r\n\r\n<p>By joining the Paspic&reg; Affiliate Program, you can earn a 10% commission on all sales generated through your site. That is, we pay you a commission for every customer click-through from your Web Pages to Paspic&reg; that results in a successful purchase. Even if your customer doesn&#39;t purchase services right away you still get paid. If your visitor returns to Paspic&reg; within 45 days we will still pay you the full 10% commission. That visitor doesn&#39;t even have to return through your site.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>ENHANCE YOUR WEBSITE!</strong><br />\r\nBy linking your site to Paspic&reg;, you are enhancing your services. Paspic&reg; is expanding the services you are offerings to your clients by this novel e-photo booth. By joining our Affiliate Program, you are providing access to great services and being financially rewarded for it.<br />\r\nWe look forward to working with you, knowing that we will both benefit from this partnership. If you would like to join us or would like to comment on matters that are not addressed here, please proceed to the Paspic&reg; &quot;Contact Us&quot; page and fill in your questions or comments.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(21, 'De', '<p>Passwort Vergessen?</p>\r\n'),
(21, 'en_us', '<p>Forgotten password</p>\r\n'),
(22, 'De', '<p>Bitte Foto ausw&auml;hlen</p>\r\n'),
(22, 'en_us', '<p>Select an image to process</p>\r\n'),
(23, 'De', '<p>Bitte w&auml;hlen sie ein Foto aus. Sollten Sie ein neues Foto hochladen wollen, l&ouml;schen Sie bitte ein oder mehrere der vorhandenen.</p>\r\n'),
(23, 'en_us', '<p>Select an image to process. If you want to upload a new image, please delete one or more of them.</p>\r\n'),
(24, 'De', '<p>&Auml;nderung der Sicherheitsfrage</p>\r\n'),
(24, 'en_us', '<p>Change reminder question</p>\r\n'),
(25, 'De', '<p>Sie sind eingelogged und haben Ihr Passwort. Hier k&ouml;nnen sie Ihre Sicherheitsfrage bearbeiten.</p>\r\n'),
(25, 'en_us', '<p>You are logged in, you have your password. However, here you can change the reminder answer and the question.</p>\r\n'),
(26, 'De', '<p>Bild l&ouml;schen</p>\r\n'),
(26, 'en_us', '<p>Delete image</p>\r\n'),
(27, 'De', '<p>Sind Sie sicher, dass Sie diese Bild l&ouml;schen m&ouml;chten?</p>\r\n'),
(27, 'en_us', '<p>Do you really want delete this image?</p>\r\n'),
(28, 'De', '<p>Kontakt</p>\r\n'),
(28, 'en_us', '<p>Contact Us</p>\r\n'),
(29, 'De', '<table border="" cellpadding="0" width="">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:259px;">\r\n			<p>Paspic Limited<br />\r\n			The Sussex Innovation Centre<br />\r\n			Science Park Square<br />\r\n			University of Sussex<br />\r\n			Falmer, Brighton<br />\r\n			East Sussex, BN1 9SB<br />\r\n			United Kingdom</p>\r\n\r\n			<p>Tel: +44 (0)1273 704416<br />\r\n			Fax: +44 (0)1273 704499</p>\r\n			</td>\r\n			<td style="width:226px;">\r\n			<p>Adresse:</p>\r\n\r\n			<p><br />\r\n			Paspic Limited<br />\r\n			PO Box 2481<br />\r\n			Hove<br />\r\n			BN3 2DP</p>\r\n\r\n			<p>Paspic Karte und Wegbeschreibungen</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nKundenbetreuung or Kundenbetreuung Deutschland</p>\r\n\r\n<p>Tel: +49 9230 3118</p>\r\n'),
(29, 'en_us', '<table border="" cellpadding="0" width="">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:259px;">\r\n			<p>Paspic Limited<br />\r\n			The Sussex Innovation Centre<br />\r\n			Science Park Square<br />\r\n			University of Sussex<br />\r\n			Falmer, Brighton<br />\r\n			East Sussex, BN1 9SB<br />\r\n			United Kingdom</p>\r\n\r\n			<p>Tel: +44 (0)1273 704416<br />\r\n			Fax: +44 (0)1273 704499</p>\r\n			</td>\r\n			<td style="width:226px;">\r\n			<p>Postal Address:</p>\r\n\r\n			<p><br />\r\n			Paspic Limited<br />\r\n			PO Box 2481<br />\r\n			Hove<br />\r\n			BN3 2DP</p>\r\n\r\n			<p><a href="http://www.sinc.co.uk/contact/sinc_map.pdf" title="map">Paspic map and directions</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nUK Customer Services</p>\r\n\r\n<p>Tel: 070 9230 3118</p>\r\n'),
(30, 'De', '<p>Identifizieren Sie sich bitte mit Ihrer Email Adresse und beantworten sie danach Ihre Sicherheitsfrage. Sie k&ouml;nnen dann ein neues Password erstellen.</p>\r\n'),
(30, 'en_us', '<p>Fill in your e-mail address. We present to you your reminder question. If you know the correct answer, we will enable you to choose a new password.</p>\r\n'),
(31, 'De', '<p>So Funktionierts</p>\r\n\r\n'),
(31, 'en_us', '<p>How it works</p>\r\n\r\n'),
(32, 'De', '<p><img alt="How to take your photo?" border="0" class="img-responsive" height="" src="/images/pictogram05.gif" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Paspic ist die online L&ouml;sung f&uuml;r Passfotos jeder Art, so einfach wie jede Fotomaschine.<br />\r\nAlle neuen Passfotos m&uuml;ssen jetzt zu neuen Standards gemacht werden und individuell messbare, physische Charakteristiken (Biometrik) beinhalten, so dass Gesichtserkennungstechnologie F&auml;lschungen verhindern kann.<br />\r\nPaspic.com bietet eine automatisierte Pattform die erkennt ob Ihre Fotos mit den neuen Standards der International Civil Aviation Organisation (ICAO) &uuml;bereinstimmen und zeigt ihnen, warum Ihre Bilder nicht von den GB, EU oder US Beh&ouml;rden angenommen werden.*</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ganz Einfach:<br />\r\nRegistrieren Sie sich<br />\r\nLaden Sie Ihre Fotos hoch<br />\r\nPaspic.com &uuml;berpr&uuml;ft ob Ihre Fotos den neuen Standards entsprechen<br />\r\nSie k&ouml;nnen die Fotos direkt online bestellen<br />\r\nSie erhalten Ihre Fotos innerhalb von 2 Werktagen.<br />\r\nWenn sie die korrekten Fotos haben k&ouml;nnen sie sich direkt hier f&uuml;r Ihren Ausweis bewerben: (german page)<br />\r\nSollten Ihre Fotos trotzdem aus biometrischen Gr&uuml;nden zur&uuml;ckgewiesen werden, bekommen Sie nat&uuml;rlich zur&uuml;ck, was sie f&uuml;r die Fotos gezahlt haben oder wir erstellen Ihnen umsonst ein neues.<br />\r\nPaspic Gutscheine, Terms &amp; Conditions<br />\r\nNur ein Gutschein pro Auftrag<br />\r\nNur online und zur Zeit des Auftrages g&uuml;ltig.<br />\r\n*Mehr Informationen &uuml;ber die neuen biometrischen Standards k&ouml;nnen auf der Website der UK Passport Authority (UKPA) gefunden werden: ....</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(32, 'en_us', '<p><img alt="How to take your photo?" border="0" class="img-responsive" height="" src="/images/pictogram05.gif" /></p>\r\n\r\n<p>Paspic.com is the online solution for all passport size photographs, just like a regular photobooth.</p>\r\n\r\n<p>However, all new-passport photos now need to include unique, measurable physical characteristics(biometrics) which enables facial recognition technology to prevent fraud.<br />\r\nPaspic.com&#39;s automated platform will advise you whether your photos are compliant with the new standards set by the International Civil Aviation Organization (ICAO)or provide information as to why the photo may be rejected by the UK, EU or US Passport Office Authorities.*</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Simply:<br />\r\nRegister<br />\r\nUpload your photo(s)<br />\r\nPaspic.com will check their suitability under the new Passport Office regulations<br />\r\nOrder hard copies online<br />\r\nPrints will then be posted by Paspic to you within 2 working days<br />\r\nWhen you have the correct photo you may continue and complete your passport application on-line at: http://www.passport.gov.uk/passport_online.asp<br />\r\nIn the unlikely event that your photo(s) are found to be biometrically incompliant by the passport authorities, Paspic will refund your photo(s) purchase price or work with you to provide another compliant photo, free of charge.<br />\r\nPaspic&reg; Vouchers Terms and Conditions:<br />\r\nOnly one Voucher code may be used per order.<br />\r\nOnly available online and must be entered at time of purchase<br />\r\n*Find out more about biometric compliant photos on the UK Passport Authority(UKPA) website:http://www.passport.gov.uk/general_biometrics.asp</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(33, 'De', '<p>Ihre Antwort war falsch, bitte versuchen Sie es erneut!</p>\r\n'),
(33, 'en_us', '<p>Sorry, your answer was not valid. Try again please.</p>\r\n'),
(34, 'De', '<p>Einloggen</p>\r\n'),
(34, 'en_us', '<p>Login</p>\r\n'),
(35, 'De', '<p>Registrierte Nutzer k&ouml;nnen sich hier einloggen und Fotos hochladen.</p>\r\n\r\n<p>Gratis Biometrie Check!</p>\r\n\r\n<p>Bestellen sie Ihre Passfotos f&uuml;r:</p>\r\n\r\n<p>- 3.50 f&uuml;r 4 GBR und/oder EU Fotos inklusive Lieferung</p>\r\n\r\n<p>- 4.20 f&uuml;r 3 US Fotos inklusive Lieferung</p>\r\n\r\n<p style="margin-left:2.25pt;"><strong>Bitte beachten</strong>:</p>\r\n\r\n<p>Sollten sie sich zuerst auf unsere alten Website registriert haben, ist Ihr Benutzername jetzt Ihre registrierte Email Adresse</p>\r\n');
INSERT INTO `message` (`id`, `language`, `translation`) VALUES
(35, 'en_us', '<p>Registered users login here to upload your photo</p>\r\n\r\n<p>FREE biometric compliance check</p>\r\n\r\n<p>Order your Biometric Passport Photo prints for:<br />\r\n- &pound;3.50 UK and/or EU style photos including P+P per for a set of 4 photos<br />\r\n- &pound;4.20 US style photos including P+P for a set of 3 photos</p>\r\n\r\n<p>PLEASE NOTE:<br />\r\nIf you are a registered user that first registered on our old web site, your username is now your registered email address.</p>\r\n'),
(36, 'De', '<p><strong>Terms &amp; Conditions</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sie m&uuml;ssen unsere Terms&amp;Conditions lesen und akzeptieren bevor sie fortfahren k&ouml;nnen. Die Nutzung des PasPic Service schlie&szlig;t Ihre Zustimmung ein.</p>\r\n\r\n<p>1.Definitionen: &bdquo;Sie&rdquo; bezieht sich auf den Nutzer oder des Nutzers Repr&auml;sentanten, &bdquo;Wir/Uns&rdquo; bezieht sich auf PasPic oder jegliche Muttergesellschaft oder Affiliationsfirma und deren von PasPic geleitete Websites, durch welche Sie auf unsere Dienste zugreifen k&ouml;nnen. &bdquo;Dienste&rdquo; bezieht sich auf&nbsp; den gesamten Inhalt, so wie Suchmaschinen, Adressverzeichnisse, pers&ouml;nlichen Webspace, E-Mail und andere unserer Dienste.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2.Wahl der Rechtssprechung: Diese Terms&amp;Conditions sollen unter englischer Rechtssprechung gef&uuml;hrt werden, und Sie akzeptieren hiermit unwiderruflich die Rechtssprechung der englischen Gerichte.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3. Vollst&auml;ndigkeit des Vertrages: Diese Terms&amp;Conditions sind ein vollst&auml;ndiges &Uuml;bereinkommen zweier Parteien bez&uuml;glich des Anliegens und respektieren keine vorherige Vereinbarungen oder Garantie, au&szlig;er fahrl&auml;ssiger oder absichtlicher Falschinterpretation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>4.Registrierung: Sie versichern, dass Sie wahre, treffende, aktuelle und vollst&auml;ndige Informationen bei Ihrer Registrierung als Nutzer von PasPic (Nutzer Informationen) angeben. Sie versichern uns umgehend &uuml;ber jegliche &Auml;nderungen Ihrer Nutzer Informationen in Kenntnis zu setzen. Sie versichern, dass weder vorgeben eine andere Person oder Einheit zu sein oder unter falschem Namen zu handeln.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5.Ihre Verantwortung: Sie akzeptieren die Verantwortung f&uuml;r alle Inhalte die Sie durch PasPic transferieren (inklusive E-Mails, Webseiten, Chat Dienste etc.). Sie versichern PasPic oder deren Dienste nicht zu illegalen Zwecken unter allen relevanten gesetzten zu Nutzen. Sie versichern PasPic oder deren Dienste nicht f&uuml;r das Versenden von Kettenbriefen, Promotion oder als Werbung zu missbrauchen. Sie versichern PasPic und deren Dienste nicht f&uuml;r die Verbreitung von Computerviren oder W&uuml;rmern zu missbrauchen. Sie versichern PasPic und deren Dienste nicht f&uuml;r die Verbreitung von rufsch&auml;digenden, anst&ouml;&szlig;igen, obsz&ouml;nen oder drohenden Materialien missbraucht, oder so verwendet wird, dass unn&ouml;tige Angst oder Unstimmigkeit hervorgerufen wird. Sie versichern PasPic und deren Dienste so zu nuten, dass weder PasPic noch Teile von PasPic unterbrochen, besch&auml;digt, behindert, oder auf jegliche weise angegriffen werden. Sie versichern PasPic und deren Dienste so zu nutzen, dass Sie keine Person oder Firma verletzen oder gegen deren Rechte versto&szlig;en. Sie versichern, dass sie nicht versuchen werden sich in PasPic, deren Dienste oder Dritten unautorisiert einzuw&auml;hlen. Sie versichern, dass Sie im Falle eines Rechtsanspruches gegen einen Nutzer PasPics Ihr Recht unabh&auml;ngig vertreten werden, mit oder ohne Regress zu uns. Sie versichern, dass sie das Folgende weder ausf&uuml;hren, noch daran Teil haben noch unterst&uuml;tzen:</p>\r\n\r\n<p>- Das Versenden un&uuml;berpr&uuml;fter Junk-Mail f&uuml;r kommerzielle oder unkommerzielle Zwecke. (Spamming)</p>\r\n\r\n<p>&nbsp;- Das Versenden von Kettenmails oder pyramidischen Verkaufsschemen.</p>\r\n\r\n<p>- Das Versenden von Mail Bomben (sehr viele oder sehr gro&szlig;e E-Mails die der vors&auml;tzlichen Sch&auml;digung des Empf&auml;ngers dienen). Sie versichern kein System zu besch&auml;digen oder dessen Internetverbindung zu blockieren. Sie versichern weder Kopfzeilen, noch Namen zu f&auml;lschen um Ihre Identit&auml;t zu verschleiern oder einer dritten Partei zu schaden. Sie versichern keine Dritten ohne ausdr&uuml;ckliche Erlaubnis der E-Mail liste zuzuf&uuml;gen. Sie versichern den Newsgruppen keine eigenen Bilder, Sounds etc. hinzuzuf&uuml;gen.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>6. Ihre Daten: PasPic.com befolgt die relevanten Datenschutz Gesetze, so dass Ihre pers&ouml;nlichen Daten normalerweise nicht ohne Ihre Einwilligung and Dritte weitergeleitet werden. Sollten Ihre Daten allerdings f&uuml;r eine Untersuchung in illegale Aktivit&auml;ten in Verbindung mit Ihrer Nutzung von PasPic von offizieller Seite verlangt werden, werden wir Ihre Daten zur Verf&uuml;gung stellen. PasPic wird Ihre Date nur dann zur Verf&uuml;gung stellen wenn es uns rechtlich abverlangt wird. Jegliche Informationen die an Werbepartner oder Dritte weitergeleitet werden sind anonym und enthalten weder Ihren Namen noch Ihre E-Mail Adresse, Telefon Nummer, Fax Nummer oder Username.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>7.Datensicherung: Sie sind f&uuml;r die F&uuml;hrung von Kopien f&uuml;r alle Ihre Publikationen in Verbindung mit PasPic und deren Dienste verantwortlich. Wir k&ouml;nnen nicht f&uuml;r Wiederherstellungen oder von Ihnen verlorene Daten zur Rechenschaft gezogen werden.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>8. PasPic und deren Dienste garantieren nicht, dass die Angebote Ihren W&uuml;nschen entsprechen oder ununterbrochen, p&uuml;nktlich oder fehlerfrei laufen</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>9.Wir haften in keinster Weise f&uuml;r die Informationen oder andere Materialien, die auf Ihrer unseren Dienst nutzenden Seite von Ihnen oder anderen ver&ouml;ffentlicht sind.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>11.Sie versichern, dass wir nicht f&uuml;r den Vertrag, Schadensersatz, Fahrl&auml;ssigkeit, Eid oder anders f&uuml;r jeglichen durch diesen Vertrag (inklusive, Ausfall von Profit, Operationsunterbrechungen, Verlust von Informationen und andere finanzielle Verluste) entstandenen Verlust haftbar sind (auch wenn wir vor den Verlusten im Voraus gewarnt wurden).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>11.Disclaimer: PasPic und deren Dienste werden als ein &bdquo;wenn m&ouml;glich&rdquo; Dienst unterhalten und wir stellen keinerlei Garantie aus. Das schlie&szlig;t Vollst&auml;ndigkeit, Genauigkeit, Qualit&auml;t oder G&uuml;ltigkeit ein.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>12. Wir behalten uns das Recht Ihren Account (inklusive Ihren Benutzernamen und Passwort) zu l&ouml;schen vor, sollten Ihre Nutzerinformationen falsch, ungenau, nicht aktuell oder unvollst&auml;ndig sein.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>13.Beschr&auml;nkte Haft: Sie akzeptieren, dass wir keinerlei Kontrolle &uuml;ber die Informationen haben zu denen sie &uuml;ber PasPic und deren Dienste Zugang haben und dass wir Ihre Nutzung von PasPic oder die Informationen die sie senden oder hochladen nicht &uuml;berpr&uuml;fen. Wir haften daher nicht f&uuml;r Datentransfer oder Datenempfang jeglicher Natur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>14. Wir sprechen keinerlei Garantie auf die Ergebnisse oder Genauigkeit jeglicher von PasPic erh&auml;ltliche Informationen aus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>15.Geistiges Eigentum und Nutzungsrecht. Sie akzeptieren, dass alle Copyrights, Trademarks und anderes geistiges Eigentum, das als Teil des Dienstes angeboten wird, rechtm&auml;&szlig;ig unseres oder das des Lizenzinhabers bleibt. Sie akzeptieren, dass Sie dieses Material nur mit ausdr&uuml;cklicher Genehmigung von uns oder dem Lizenzinhaber nutzen und nicht kopieren, reproduzieren, versenden oder bearbeiten d&uuml;rfen. Das Material und der Inhalt des PasPic Dienstes ist nur f&uuml;r Ihren pers&ouml;nlichen Gebrauch und sie versichern, dass Sie das Material nicht verbreiten, die Verbreitung nicht unterst&uuml;tzen und nicht kommerziell ausnutzen. Sollten Sie von solchen Verst&ouml;&szlig;en erfahren, m&uuml;ssen Sie uns umgehend unterrichten.<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>16.Unsere Rechte: Wir behalten uns das Zugangsrecht zu PasPic oder Teilen PasPics vor. Wir behalten uns vor Ihnen den Zugang zu Teilen PasPics zu verwehren, sollte Ihre Nutzung exzessiv oder nicht im Interesse PasPics oder anderer Nutzer sein. Wir behalten uns das Recht vor ohne Vorwarnung den Dienst zu ver&auml;ndern und vorl&auml;ufig oder permanent zu beenden und sind f&uuml;r keine dadurch entstehenden Kosten haftbar. Wir behalten uns das Recht vor die Terms&amp;Conditions ohne Vorwarnung zu &auml;ndern. Wir behalten uns das Recht vor Ihren Account ohne Vorwarnung zu l&ouml;schen, sollten Sie die Terms&amp;Conditions brechen.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>17.Ihre Beziehungen zu Werbepartnern und Anderen: Ihre Korrespondenz mit und Teilnahme an Reklame von auf PasPic gefundenen Werbern oder H&auml;ndlern (inklusive Lieferkosten, Dienste, deren Terms&amp;Conditions und Garantien) sind allein zwischen Ihnen und dem Werber oder H&auml;ndler. Wir k&ouml;nnen f&uuml;r keinerlei Schaden, der aus diesen Transaktionen oder aus der Pr&auml;senz der Werber oder H&auml;ndler auf PasPic, hervor geht haften.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>18.Sicherheit: W&auml;hrend des Anmeldevorgangs m&uuml;ssen Sie einen Benutzernamen und ein Passwort w&auml;hlen. Sie sind f&uuml;r die Sicherheit dieser Angaben verantwortlich und f&uuml;r alle Aktivit&auml;ten unter Ihrem Namen. Andere Nutzer Ihres Benutzernamens und Passwortes sind an die Terms&amp;Conditions gebunden wie Sie. Sie sind verpflichtet uns umgehend in Kenntnis zu setzen, sollten Sie von einer unautorisierten Nutzung Ihrer Informationen erfahren.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>19.Links: Sollten wir Ihnen Links zur Verf&uuml;gung stellen oder sollten Sie Links in E-Mails verschicken, versichern und verstehen Sie, dass wir nicht f&uuml;r die Nutzbarkeit solcher externem Seiten oder Ressourcen verantwortlich sind und nicht f&uuml;r deren Inhalt, Werbung, Produkte oder andere Materialien dieser Seiten haften. Sie versichern, dass wir weder verantwortlich, noch direkt oder indirekt haftbar sind, f&uuml;r jeglichen Schaden der in Verbindung mit der Nutzung dieser externen Seiten entsteht</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>20. PasPic stellt keinerlei Garantie f&uuml;r die Produkte oder Dienste, die durch PasPic erworben werden k&ouml;nnen, oder jegliche Transaktionen, die durch PasPic durchgef&uuml;hrt werden.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>21. Straflosigkeit: Sie versichern PasPic, deren Muttergesellschaft oder Affiliationsfirmen, deren Repr&auml;sentanten, Direktoren und Angestellte umg&auml;nglich in Bezug auf Sch&auml;den, Kosten, Haftbarkeit, Kosten und Ausgaben, die durch einen Bruch der Terms&amp;Conditions oder Ihre Haftbarkeit durch die Nutzung unserer Dienste entstehen, freizusprechen.<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>22.Kontakt: Jeglicher Kontakt und K&uuml;ndigung wird unter Nutzung Ihrer Nutzer Informationen per E-Mail oder Post gef&uuml;hrt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>23.Salvatorische Klausel: Jeder Teil dieses Vertrages soll unabh&auml;ngig g&uuml;ltig sein und &uuml;berleben, auch sollte ein Teil des Vertrages situationsbedingt unzutreffend oder nicht durchsetzbar sein und soll auch nach der K&uuml;ndigung walten.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>24. Bindung: Wir werden keine Vertragsentbindung w&auml;hrend eines laufenden oder mit folgendem Vertragsbruch erkl&auml;ren.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>25. K&uuml;ndigung: Sie akzeptieren, dass wir in den folgenden Situationen Ihren Account (Benutzername und Passwort) k&uuml;ndigen und Ihre E-Mail Adressen, E-Mails, Webspace und von uns gespeicherte Daten l&ouml;schen:</p>\r\n\r\n<ul>\r\n	<li>Sie brechen den Vertrag oder handeln gegen die Terms&amp;Conditions</li>\r\n	<li>Sie nutzen PasPic nicht f&uuml;r 365 Tage</li>\r\n</ul>\r\n\r\n<p>Sie Akzeptieren, dass wir Ihnen keine K&uuml;ndigungsfrist f&uuml;r diese K&uuml;ndigungsgr&uuml;nde geben.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Datenschutz: PasPic.com befolgt die relevanten Datenschutz Gesetze, so dass Ihre pers&ouml;nlichen Daten normalerweise nicht ohne Ihre Einwilligung and Dritte weitergeleitet werden. Sollten Ihre Daten allerdings f&uuml;r eine Untersuchung in illegale Aktivit&auml;ten in Verbindung mit Ihrer Nutzung von PasPic von offizieller Seite verlangt werden, werden wir Ihre Daten zur Verf&uuml;gung stellen. PasPic wird Ihre Date nur dann zur Verf&uuml;gung stellen wenn es uns rechtlich abverlangt wird. Jegliche Informationen die an Werbepartner oder Dritte weitergeleitet werden sind anonym und enthalten weder Ihren Namen noch Ihre E-Mail Adresse, Telefon Nummer, Fax Nummer oder Benutzername.</p>\r\n'),
(36, 'en_us', '<p><strong>Terms and Conditions.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You must read and accept our Terms and Conditions before proceeding. Use of the Paspic&reg; service implies acceptance of the Terms and Conditions</p>\r\n\r\n<p><br />\r\n1. Definitions: &quot;You&quot; means the user and / or the user&#39;s representative, &quot;We/us&quot; means Paspic&reg; or any parent company or affiliate company, and Paspic&reg; or any parent company or affiliate company&#39;s web site operated by us and through which you may access the Services. &quot;Services&quot; means the whole content e.g. search facilities, directory services, personal web space, email, newsgroups and other services provided by us.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2. Choice Of Law: These terms and conditions shall be governed by English law and you hereby irrevocably submit to the exclusive jurisdiction of the English courts.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3. Entire Agreement: These Terms and Conditions constitute the entire agreement between the parties with respect to their subject matter and exclude any representations and warranties previously given or made other than any negligent or fraudulent misrepresentation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>4. Registration: You agree to provide true, accurate, current and complete information which you are required to provide when you register as a User of Paspic&reg; (&quot;User Information&quot;). You agree to notify us immediately of any changes to the User Information. You agree not to impersonate any other person or entity or to use a false name or a name that you are not authorised to use.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5. Your Obligations: You accept responsibility for any content you transfer through Paspic&reg; or the Services (including, but not limited to, email, web pages, newsgroups or chat services). You agree not to use Paspic&reg; or the Services for any illegal purpose and in accordance with all relevant laws. You agree not to use Paspic&reg; or the Services to transmit or post any chain letters or any material for the purposes of publicity, promotion and / or advertising. You agree not to use Paspic&reg; or the Services to distribute by any means computer viruses or worms to third parties. You agree not to use Paspic&reg; or the Services to transmit or post any material which is defamatory, offensive, or of an obscene or menacing character, or in such a way as to cause annoyance, inconvenience or needless anxiety. You agree not to use Paspic&reg; or the Services such that the whole or part of Paspic&reg; or the Services is interrupted, damaged, rendered less efficient or such that the effectiveness or functionality of Paspic&reg; or the Services is in any way impaired. You agree not to use Paspic&reg; or the Services in any manner which constitutes a violation or infringement of any person, firm or company or the rights thereof (including, but not limited to, third party intellectual property rights or confidentiality); You agree not to use Paspic&reg; or the Services to attempt any unauthorised access to any part or component of Paspic&reg; or the Services or that of any third party to which you can connect via Paspic&reg; (or other directly or otherwise connected network). You agree that in the event that you have any right, claim or action against any user arising out of the use of Paspic&reg; or the Services, then you will pursue such right, claim or action independently of, or without recourse to us. You agree not to carry out or participate in or promote or facilitate the carrying out or participation in any of the following:<br />\r\ni) Sending unsolicited junk-mail or bulk email for commercial or non-commercial reasons (sometimes known as &quot;spamming&quot;);<br />\r\nii) Sending chain letters or pyramid-selling schemes (sometimes known as &quot;spamming&quot;);<br />\r\niii) Sending mail bombs (i.e. sending either many emails or very large emails to users with the express intention of annoying the recipient or to cause the systems of an Internet Service Provider to fail on receipt of such emails); You agree not to damage a system or block its access to the Internet. You agree not to forge or block headers and / or addresses or any other action the purpose of which is to hide your true identity or discredit a third party. You agree not to subscribe third parties to subscription based email lists unless you have express permission to do so. You agree not to post binaries (i.e. data such as images, sound clips, etc.) to newsgroups except those specifically created for binary postings.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>6. Your Data: We will comply with the relevant Data Protection laws, so normally any personal details to be provided to us will not be disclosed to third parties without your consent. You should be aware that if we are requested by the police or regulatory or government authority in investigating illegal activities to provide information concerning your activities whilst using the network we shall do so. Paspic&reg; will disclose your personal data if we are compelled to do so by law. Paspic&reg; may disclose information about you and your use of the Service to advertisers or third parties but such information will not include your name, mailing address, electronic address, telephone or fax number or username.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>7. Back-Up of Content: You shall be responsible for keeping your own copies of all content published by you in connection with Paspic&reg; or the Services. We will not be responsible for any file recovery or for files lost by you.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>8. Paspic&reg; make no warranty that Paspic&reg; or the Services will meet your requirements or will be uninterrupted, timely, secure or error-free.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>9. We exclude all liability of any kind for the information or any other material published or otherwise made available by you or any other person on any web site you establish using the Services.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>10. You agree that we shall not be liable in contract, tort, negligence, statutory duty or otherwise, for any loss or damage whatsoever arising from or in any way connected with this contract, including, without limitation, damage for loss of business, loss of profits, business interruption, loss of business information, or any other pecuniary loss (even where we have been advised of the possibility of such loss or damage).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>11. Disclaimer: Paspic&reg; and the Services are provided on an &quot;as is&quot; and &quot;as available&quot; basis and we make no warranties or representations, whether express or implied, in relation to Paspic&reg; or the Services, including but not limited to, implied warranties or conditions of completeness, accuracy, satisfactory quality and fitness for a particular purpose.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>12. We reserve the right to terminate your account (including user name and password) if any User Information is untrue, inaccurate, out-of-date or incomplete.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>13. Limitation of Liability: You acknowledge that we have no control over the information which can be accessed by using Paspic&reg; and the Services and that we do not examine the use to which you or other users put the Services or the nature of the information you or they are sending or uploading. We therefore exclude all liability of any kind for the transmission or reception or such information of whatever nature.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>14. No warranty is given by us as to results that may be obtained or the accuracy of any information obtained through Paspic&reg; or the Services.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>15. Intellectual Property and Right to Use. You acknowledge that all copyright, trademarks and all other intellectual property rights in any material supplied as part of the Services shall remain vested in us or our licensors. You acknowledge that you are permitted to use this material only as expressly authorised by us or our licensors and may not copy, reproduce, transmit, distribute or create derivative works of such material without express authorisation. The material and content contained with Paspic&reg; and the Services is for your personal use only and you agree not to (and agree not to assist or facilitate any third party to) distribute or commercially exploit such material and content. If you become aware of any such distribution or commercial exploitation, you will let us know immediately.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>16. Our Rights: We reserve the right to deny access to all or any part of Paspic&reg; or the Services. We reserve the right to close access to any features of the service if your usage of that feature is deemed excessive and against the interests of other users of Paspic&reg; or the Services. We reserve the right to modify or discontinue, temporarily or permanently, Paspic&reg; or the Services with or without notice to you and you confirm that we shall not be liable to you or any third party for any modification to or discontinuance of Paspic&reg; or the Services. We reserve the right to change the Terms and Conditions at any time with out prior notice to you. We reserve the right to terminate your account immediately without notice if you break any of the Terms Conditions herewith.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>17. Your Dealings With Advertisers and similar: Your correspondence with, or participation in promotions of, advertisers or merchants found on Paspic&reg;, including payment for and delivery of related goods, services and any other terms, conditions, warranties or representations, associated with such dealings, are solely between you and such advertiser or merchant. You agree not to hold us liable for any loss or damage of any sort incurred as the result of any such dealings or as the result of the presence of such advertisers or merchants on Paspic&reg;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>18. Security: You will be required to select a username and password during the registration process. You are responsible for maintaining the confidentiality of the username and password and are fully responsible for all activities which occur under them. Other users of your username and password shall be bound by these terms and conditions as if they were you. You agree to immediately notify us of any unauthorised use of your username or password or any other breach of security of which you become aware.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>19. Links: We may provide - or you may include in email - links to other web sites or resources. You acknowledge and agree that we are not responsible for the availability of such external sites or resources, and do not endorse and are not responsible or liable for any content, advertising, products or other materials on or available from such sites or resources. You agree that we will not be responsible or liable, directly or indirectly, for any damage or loss caused, or alleged to be caused, by or in connection with use of or reliance on any such content, goods or services available on such external sites or resources.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>20. Paspic&reg; make no warranty regarding any goods or services purchased or obtained through Paspic&reg; or any transactions entered into through Paspic&reg;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>21. Indemnity You agree to indemnify Paspic&reg;, or any parent company or affiliate company, and our and their officers, directors and employees, immediately on demand, against all claims, liability, damages, costs and expenses, including legal fees, arising out of any breach of these terms and conditions by you or any other liabilities arising out of your use of Paspic&reg; or the Services.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>22. Notices: Any notice which we are required to give to you regarding Paspic&reg; or the Services shall be made via either email or regular mail, to the address provided by you on the registration form.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>23. Severability: Each provision of these terms and conditions shall be construed as separately applying and surviving even if for any reason one or other of those provisions is held to be inapplicable or unenforceable in any circumstances and shall remain in force notwithstanding the termination of these terms and conditions howsoever occasioned.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>24. No Waiver: No waiver by us shall be construed as a waiver of any proceeding or succeeding breach of any provision.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>25. Termination: You agree that we may terminate your account (including your username and password) and delete your email addresses, emails, web space and other data stored on Paspic&reg; or the Services in the following situations:<br />\r\ni) If we believe that you have breached these terms and conditions or acted entirely with the spirit of these terms and conditions;<br />\r\nii) If you fail to use Paspic&reg; or the Services at least once during any 365 day period. You acknowledge that we do not have to give you prior notice of any such termination.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Confidentiality Conditions</p>\r\n\r\n<ol>\r\n	<li>Your Data: We will comply with the relevant Data Protection laws, so normally any personal details to be provided to us will not be disclosed to third parties without your consent. You should be aware that if we are requested by the police or regulatory or government authority in investigating illegal activities to provide information concerning your activities whilst using the network we shall do so. Paspic&reg; will disclose your personal data if we are compelled to do so by law. Paspic&reg; may disclose information about you and your use of the Service to advertisers or third parties but such information will not include your name, mailing address, electronic address, telephone or fax number or username.</li>\r\n</ol>\r\n'),
(37, 'De', '<p>So machen Sie Ihr Foto</p>\r\n'),
(37, 'en_us', '<p>How to take your photo</p>\r\n'),
(38, 'De', '<p>Mit Paspic brauchen Sie nur ein Foto mit Ihrem Gesicht in der Mitte auf einem wei&szlig;en, creme farbenen oder hell grauen Hintergrund zu machen. Paspic erledigt den Rest!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Paspic Tipps und Tricks</strong><br />\r\n1.&nbsp;&nbsp; &nbsp;W&auml;hlen Sie einen wei&szlig;en, cream farbenen oder hell grauen Hintergrund und machen Sie ein Foto mit Ihrem Kopf in der Mitte des Bildes.<br />\r\n2.&nbsp;&nbsp; &nbsp;Ihre Kamera sollte etwa 2 Meter von Ihnen entfernt sein.<br />\r\n3.&nbsp;&nbsp; &nbsp;Sie sollten einen neutralen Gesichtsausdruck mit geschlossenem Mund haben.<br />\r\n4.&nbsp;&nbsp; &nbsp;Schauen Sie direkt in die Kamera<br />\r\n5.&nbsp;&nbsp; &nbsp;Stellen Sie sicher, dass Ihre Brille einen schmalen Rahmen hat und nicht Ihre Augen verdeckt.<br />\r\n6.&nbsp;&nbsp; &nbsp;Stellen Sie sicher, dass Ihr Haar nicht Teile Ihres Gesichts verdeckt.<br />\r\n7.&nbsp;&nbsp; &nbsp;Tragen Sie keinen Hut, Kopftuch und keine Sonnenbrille.<br />\r\n8.&nbsp;&nbsp; &nbsp;Sie sollten die einzige Person in dem Bild sein.<br />\r\n9.&nbsp;&nbsp; &nbsp;Probieren Sie Reflektionen auf Haut und Brille zu vermeiden<br />\r\n10.&nbsp;&nbsp; &nbsp;Probieren Sie Schatten auf Ihrem Gesicht und hinter Ihrem Kopf zu vermeiden<br />\r\n11.&nbsp;&nbsp; &nbsp;Stellen Sie sicher, dass Licht gleichm&auml;&szlig;ig auf Ihr Gesicht f&auml;llt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>GB Passfotos</p>\r\n\r\n<p>Bitte besuchen Sie UKPA f&uuml;r die offizielle Passfoto-Anleitung zu einen g&uuml;ltigen GBR Passfoto.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>US Passfotos</p>\r\n\r\n<p>Bitte besuchen Sie US Travel f&uuml;r die offizielle Passfoto-Anleitung zu einem g&uuml;ltigen US Passfoto.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>US (Londoner Botschaft) Passfotos</p>\r\n\r\n<p>Bitte besuchen Sie US London Konsulate f&uuml;r die offizielle Anleitung zu einem g&uuml;ltigen US Passfoto.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(38, 'en_us', '<p>With Paspic you only need to take your photo with your face in the middle of the picture, on a plain off-white, cream or light grey background. Paspic will take care of the rest!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Paspic Hints and Tips</strong></p>\r\n\r\n<p>1. Pick a plain off-white, cream or light grey colored background and take your photo with head in the middle of the picture.<br />\r\n2. Camera distance about 2 meters (6-7 ft) from you.<br />\r\n3. You should have a neutral expression with your mouth closed<br />\r\n4. Look straight into the camera.<br />\r\n5. Make sure that the frame of your glasses is thin and do not cover your eyes.<br />\r\n6. Make sure your hair is not covering your face<br />\r\n7. Do not wear a hat or a head scarf - no sun glasses!<br />\r\n8. There should be nothing in the picture except you<br />\r\n9. Avoid flash reflection on your skin, glasses or red-eye effect<br />\r\n10. Avoid shadows across the your face and behind your head<br />\r\n11. Insure that the light on your face is even.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>UK passport photos</p>\r\n\r\n<p>Please visit <a href="http://www.ukpa.gov.uk/downloads/PLE01_may2004.pdf" title="UKPA">UKPA</a> for the official UK Passport Agency guide to a good passport photo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>US passport photos</p>\r\n\r\n<p>Please visit <a href="http://travel.state.gov/passport/guide/composition/composition_874.html" title="US Passport photo guide">US Travel </a>for the official US Passport Agency guide to a good passport photo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>US (London Cosulate) passport photos</p>\r\n\r\n<p>Please visit <a href="http://www.usembassy.org.uk/cons_new/acs/forms/usppt.pdf" title="US London Consulate">US London Consulate</a> for the official guide to a good passport photo.</p>\r\n'),
(39, 'De', '<p>Datenschutz</p>\r\n'),
(39, 'en_us', '<p>Privacy Policy</p>\r\n'),
(40, 'De', '<p>Home</p>\r\n'),
(40, 'en_us', '<p>Home</p>\r\n'),
(41, 'De', '<p>&Uuml;ber Uns</p>\r\n'),
(41, 'en_us', '<p>About Us</p>'),
(42, 'De', '<p>So Funktionierts</p>\r\n'),
(42, 'en_us', '<p>How its work</p>\r\n'),
(43, 'De', '<p>Kontakt</p>\r\n'),
(43, 'en_us', '<p>Contact Us</p>\r\n'),
(44, 'De', '<p>Mein Konto</p>\r\n'),
(44, 'en_us', '<p>My Account</p>\r\n'),
(45, 'De', '<p>Einloggen</p>\r\n'),
(45, 'en_us', '<p>Login</p>\r\n'),
(46, 'De', '<p>Ausloggen</p>\r\n'),
(46, 'en_us', '<p>Logout</p>\r\n'),
(47, 'De', '<p>willkommen bei</p>\r\n'),
(47, 'en_us', '<p>Welcome to</p>\r\n'),
(48, 'De', '<p>Wagen</p>\r\n'),
(48, 'en_us', '<p>Cart</p>\r\n'),
(49, 'De', '<p>Kundenreaktionen</p>\r\n'),
(49, 'en_us', '<p>Testimonials</p>\r\n'),
(50, 'De', '<p>Paspic ist ein eingetragenes Warenzeichen. Zum Patent angemeldet</p>\r\n'),
(50, 'en_us', '<p>Paspic is a Registered Trademark. Patent pending</p>\r\n'),
(51, 'De', '<p>Copyright</p>\r\n'),
(51, 'en_us', '<p>Copyright</p>\r\n'),
(52, 'De', '<p>Paspic Begrenzte</p>\r\n'),
(52, 'en_us', '<p>Paspic Limited</p>\r\n'),
(53, 'De', '<p>Folgen Sie Uns</p>\r\n'),
(53, 'en_us', '<p>Follow Us</p>\r\n'),
(54, 'De', '<p>W&auml;hlen Sie Land und Gr&ouml;&szlig;e</p>\r\n'),
(54, 'en_us', '<p>Select Country and Size</p>\r\n'),
(55, 'De', '<p>Foto Hochladen</p>\r\n'),
(55, 'en_us', '<p>Upload Photo</p>\r\n'),
(56, 'De', '<p>Stellen Sie Foto</p>\r\n'),
(56, 'en_us', '<p>Adjust Photo</p>\r\n'),
(57, 'De', '<p>Validate Foto</p>\r\n'),
(57, 'en_us', '<p>Validate Photo</p>\r\n'),
(58, 'De', '<p>Bestellen Foto</p>\r\n'),
(58, 'en_us', '<p>Order Photo</p>\r\n'),
(59, 'De', '<p>Machen Sie Ihre eigenen Reisepass</p>\r\n'),
(59, 'en_us', '<p>Make your own passport</p>\r\n'),
(60, 'De', '<p>foto hier</p>\r\n'),
(60, 'en_us', '<p>photos here</p>\r\n'),
(61, 'De', '<p>Geld-Zur&uuml;ck-Garantie</p>\r\n'),
(61, 'en_us', '<p>Money back guarantee</p>\r\n'),
(62, 'De', '<p>Ein JPEG-Foto hochladen</p>\r\n'),
(62, 'en_us', '<p>Upload a JPEG photo</p>\r\n'),
(63, 'De', '<p>Bild hochladen</p>\r\n'),
(63, 'en_us', '<p>Upload Picture</p>\r\n'),
(64, 'De', '<p>Upload / Download Foto kostenlos in drei Schritten</p>\r\n'),
(64, 'en_us', '<p>Upload/Download the photo for free in three step</p>\r\n'),
(65, 'De', '<p>Nehmen Sie Ihr Foto</p>\r\n'),
(65, 'en_us', '<p>Take your photo</p>\r\n'),
(66, 'De', '<p>&Uuml;berpr&uuml;fen Biometrische Validierung</p>\r\n'),
(66, 'en_us', '<p>Check Biometric Validation</p>\r\n'),
(67, 'De', '<p>Laden Sie Ihre Passbilder Blatt</p>\r\n'),
(67, 'en_us', '<p>Download your passport photos sheet</p>\r\n'),
(68, 'De', '<p>Passen Sie Ihr Foto Format</p>\r\n'),
(68, 'en_us', '<p>Adjust your photo format</p>\r\n'),
(69, 'De', '<p>W&auml;hlen Sie ein Fotoformat</p>\r\n'),
(69, 'en_us', '<p>Select your photo format</p>\r\n'),
(70, 'De', '<p>GRATIS Porto &amp; Verpackung</p>\r\n'),
(70, 'en_us', '<p>FREE Postage &amp; Packaging</p>\r\n'),
(71, 'De', '<p>W&auml;hlen Sie das Passfoto-Format, und geben Sie die Anzahl der Fotos</p>\r\n'),
(71, 'en_us', '<p>Select the passport photo format, and specify the number of photos</p>\r\n'),
(72, 'De', '<p>Das Alter</p>\r\n'),
(72, 'en_us', '<p>Age</p>\r\n'),
(73, 'De', '<p>Baby bis 12 Monate</p>\r\n'),
(73, 'en_us', '<p>Baby under 12 month</p>\r\n'),
(74, 'De', '<p>Kind unter 6 Jahren</p>\r\n'),
(74, 'en_us', '<p>Child under 6 years</p>\r\n'),
(75, 'De', '<p>Auf diesem Foto sehen Sie die Gl&auml;ser?</p>\r\n'),
(75, 'en_us', '<p>In this photo do you have glasses?</p>\r\n'),
(76, 'De', '<p>Ist Ihre Haare, die Augen / Gesicht?</p>\r\n'),
(76, 'en_us', '<p>Is your hair covering your eyes/face?</p>\r\n'),
(77, 'De', '<p>&Uuml;ber 6 Jahre</p>\r\n'),
(77, 'en_us', '<p>Over 6 years</p>\r\n'),
(78, 'De', '<p>Haben Sie einen neutralen Ausdruck haben, mit den Lippen geschlossen?</p>\r\n'),
(78, 'en_us', '<p>Do you have a neutral expression with your lips closed?</p>\r\n'),
(79, 'De', '<p>Face-Detection-Status</p>\r\n'),
(79, 'en_us', '<p>Face Detection Status</p>\r\n'),
(80, 'De', '<p>hochgeladen</p>\r\n'),
(80, 'en_us', '<p>Uploaded</p>\r\n'),
(81, 'De', '<p>Foto herunterladen</p>\r\n'),
(81, 'en_us', '<p>Download Photo</p>\r\n'),
(82, 'De', '<p>Foto l&ouml;schen</p>\r\n'),
(82, 'en_us', '<p>Delete Photo</p>\r\n'),
(83, 'De', '<p>Um Biometrische Einhaltung dieses Foto validieren wir auf die nachstehende Fragen zu beantworten</p>\r\n'),
(83, 'en_us', '<p>To validate Biometric Compliance of this photo please reply to the questions below</p>\r\n'),
(84, 'De', '<p>pr&uuml;fen</p>\r\n'),
(84, 'en_us', '<p>Validate</p>\r\n'),
(85, 'De', '<p>Biometrische Verifikation</p>\r\n'),
(85, 'en_us', '<p>Biometric Verification</p>\r\n'),
(86, 'De', '<p>Neues Foto hinzuf&uuml;gen</p>\r\n'),
(86, 'en_us', '<p>Add New Photo</p>\r\n'),
(87, 'De', '<p>bestellen</p>\r\n'),
(87, 'en_us', '<p>Order</p>\r\n'),
(88, 'De', '<p>ja</p>\r\n'),
(88, 'en_us', '<p>Yes</p>\r\n'),
(89, 'De', '<p>keine</p>\r\n'),
(89, 'en_us', '<p>No</p>\r\n'),
(90, 'De', '<p>Ihr Warenkorb</p>\r\n'),
(90, 'en_us', '<p>Your cart</p>\r\n'),
(91, 'De', '<p>Beschreibung</p>\r\n'),
(91, 'en_us', '<p>Description</p>\r\n'),
(92, 'De', '<p>Menge</p>\r\n'),
(92, 'en_us', '<p>Quantity</p>\r\n'),
(93, 'De', '<p>St&uuml;ckpreis</p>\r\n'),
(93, 'en_us', '<p>Unit Price</p>\r\n'),
(94, 'De', '<p>gesamt</p>\r\n'),
(94, 'en_us', '<p>Total</p>\r\n'),
(95, 'De', '<p>Zwischensumme</p>\r\n'),
(95, 'en_us', '<p>Sub-Total</p>\r\n'),
(96, 'De', '<p>Gutschein Rabatt</p>\r\n'),
(96, 'en_us', '<p>Voucher Discount</p>\r\n'),
(97, 'De', '<p>Gutschein / Promotion-Code</p>\r\n'),
(97, 'en_us', '<p>Voucher/Promotion Code</p>\r\n'),
(98, 'De', '<p>Wenn Sie einen Gutschein haben / Aktionscode schreiben Sie den Code hier</p>\r\n'),
(98, 'en_us', '<p>if you have a Voucher/Promotion code write the code here</p>\r\n'),
(99, 'De', '<p>Ihre Postadresse</p>\r\n'),
(99, 'en_us', '<p>Your Postal Address</p>\r\n'),
(100, 'De', '<p>Sie m&uuml;ssen alle mit einem Stern gekennzeichneten Felder ausf&uuml;llen</p>\r\n'),
(100, 'en_us', '<p>You must complete all fields marked with a star</p>\r\n'),
(101, 'De', '<p>Lieferadresse Gleich wie Postanschrift</p>\r\n'),
(101, 'en_us', '<p>Delivery Address Same as Postal Address</p>\r\n'),
(102, 'De', '<p>Abweichende Lieferadresse</p>\r\n'),
(102, 'en_us', '<p>Different Delivery Address</p>\r\n'),
(103, 'De', '<p>E-Mail</p>\r\n'),
(103, 'en_us', '<p>Email</p>\r\n'),
(104, 'De', '<p>Passwort</p>\r\n'),
(104, 'en_us', '<p>Password</p>\r\n'),
(105, 'De', '<p>Passwort vergessen&nbsp;</p>\r\n'),
(105, 'en_us', '<p>Forgot your Password</p>\r\n'),
(106, 'De', '<p>entfernen</p>\r\n'),
(106, 'en_us', '<p>Remove</p>\r\n'),
(107, 'De', '<p>Meine &Uuml;bersicht</p>\r\n'),
(107, 'en_us', '<p>My Dashboard</p>\r\n'),
(108, 'De', '<p>hallo</p>\r\n'),
(108, 'en_us', '<p>Hello</p>\r\n'),
(109, 'De', '<p>Benutzerkonto &Uuml;bersicht</p>\r\n'),
(109, 'en_us', '<p>Account Dashboard</p>\r\n'),
(110, 'De', '<p>Meine Fotos</p>\r\n'),
(110, 'en_us', '<p>My Photos</p>\r\n'),
(111, 'De', '<p>Meine Bestellungen</p>\r\n'),
(111, 'en_us', '<p>My Orders</p>\r\n'),
(112, 'De', '<p>Profil Bearbeiten</p>\r\n'),
(112, 'en_us', '<p>Edit Profile</p>\r\n'),
(113, 'De', '<p>Passwort &Auml;ndern</p>\r\n'),
(113, 'en_us', '<p>Change Password</p>\r\n'),
(114, 'De', '<p>abmelden</p>\r\n'),
(114, 'en_us', '<p>Logout</p>\r\n'),
(115, 'De', '<p>Es gibt keine Fotos hochgeladen</p>\r\n'),
(115, 'en_us', '<p>There are no photos uploaded</p>\r\n'),
(116, 'De', '<p>Datum</p>\r\n'),
(116, 'en_us', '<p>Date</p>\r\n'),
(117, 'De', '<p>Ausliefern</p>\r\n'),
(117, 'en_us', '<p>Ship To</p>\r\n'),
(118, 'De', '<p>Gesamtbestellung</p>\r\n'),
(118, 'en_us', '<p>Order Total</p>\r\n'),
(119, 'De', '<p>Bestellstatus</p>\r\n'),
(119, 'en_us', '<p>Order Status</p>\r\n'),
(120, 'De', '<p>Aktion</p>\r\n'),
(120, 'en_us', '<p>Action</p>\r\n'),
(121, 'De', '<p>Aktualisierung</p>\r\n'),
(121, 'en_us', '<p>Update</p>\r\n'),
(122, 'De', '<p>einreichen</p>\r\n'),
(122, 'en_us', '<p>Submit</p>\r\n'),
(123, 'De', '<p>Senden Sie uns eine E-Mail an</p>\r\n'),
(123, 'en_us', '<p>Send us an e-mail to</p>\r\n'),
(124, 'De', '<p>Die Unterst&uuml;tzung</p>\r\n'),
(124, 'en_us', '<p>Support</p>\r\n'),
(125, 'De', '<p>Wenn Sie eine Anfrage zu einem bestehenden Auftrag haben, bitte eMail</p>\r\n'),
(125, 'en_us', '<p>If you have an enquiry about an existing order, please send email to</p>\r\n'),
(126, 'De', '<p>Diese Form Mail kann uns in der Zeit nicht erreichen</p>\r\n'),
(126, 'en_us', '<p>This form mail may not reach us in time</p>\r\n'),
(127, 'De', '<p>Telefon</p>\r\n'),
(127, 'en_us', '<p><span style="color: rgb(103, 103, 103); font-family: MyriadProRegular; font-size: 15px; line-height: 25px; background-color: rgb(249, 249, 249);">Phone</span></p>\r\n'),
(128, 'De', '<p>Karte und Wegbeschreibung</p>\r\n'),
(128, 'en_us', '<p>map and directions</p>\r\n'),
(129, 'De', '<p>Dein Wagen ist leer</p>\r\n'),
(129, 'en_us', '<p>Your cart is empty</p>\r\n'),
(130, 'De', '<p>Machen Sie Ihren eigenen Passfotos hier. Geld-Zur&uuml;ck-Garantie</p>\r\n'),
(130, 'en_us', '<p>Make your own passport photos here. Money back guarantee</p>\r\n'),
(131, 'De', '<p>Wir best&auml;tigen Sie Ihre Passport Photo Online in &Uuml;bereinstimmung mit der EU, UK, AUS, USA, China und Indien Visa Foto Vorschriften - KOSTENLOS</p>\r\n'),
(131, 'en_us', '<p>We validate your Passport Photo online in accordance with the UK, EU, AUS, US, China and India Visa Photo regulations - FREE OF CHARGE</p>\r\n'),
(132, 'De', '<p>Um zu erfahren, wie Sie Ihre Passbilder machen Klicken Sie oben auf &quot;NEHMEN SIE IHR FOTO&quot; und &quot;Foto Ihres Babys&quot;</p>\r\n'),
(132, 'en_us', '<p>To learn how to make your passport photos please click ABOVE on &quot;TAKING YOUR PHOTO&quot; and &quot;PHOTO OF YOUR BABY&quot;</p>\r\n'),
(133, 'De', '<p>Alles was Sie brauchen ist, um das Foto mit dem Gesicht in der Mitte des Bildes auf einem hellen Hintergrund zu nehmen. Paspic k&uuml;mmern uns um den Rest</p>\r\n'),
(133, 'en_us', '<p>All you need is to take your photo with the face in the middle of the picture, on a light background. Paspic will take care of the rest</p>\r\n'),
(134, 'De', '<p>Warum Den</p>\r\n'),
(134, 'en_us', '<p>Why</p>\r\n'),
(135, 'De', '<p>Zeit sparen</p>\r\n'),
(135, 'en_us', '<p>Save time</p>\r\n'),
(136, 'De', '<p>Lorem Ipsum ist einfach Dummy-Text der Druck und Satz Industrie. Lorem Ipsum ist seit 1500, als ein unbekannter Drucker hat eine Galeere der war in der Branche Standard Demo-Text &uuml;berhaupt</p>\r\n'),
(136, 'en_us', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>\r\n'),
(137, 'De', '<p>Geld Sparen</p>\r\n'),
(137, 'en_us', '<p>Save Money</p>\r\n'),
(138, 'De', '<p>Lorem Ipsum ist einfach Dummy-Text der Druck und Satz Industrie. Lorem Ipsum ist seit 1500, als ein unbekannter Drucker hat eine Galeere der war in der Branche Standard Demo-Text &uuml;berhaupt</p>\r\n'),
(138, 'en_us', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>\r\n'),
(139, 'De', '<p>zeigen besten Blick</p>\r\n'),
(139, 'en_us', '<p>show best look</p>\r\n'),
(140, 'De', '<p>Lorem Ipsum ist einfach Dummy-Text der Druck und Satz Industrie. Lorem Ipsum ist seit 1500, als ein unbekannter Drucker hat eine Galeere der war in der Branche Standard Demo-Text &uuml;berhaupt</p>\r\n'),
(140, 'en_us', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>\r\n'),
(141, 'De', '<p>Registrieren Sie sich und laden Sie Ihre Fotos</p>\r\n'),
(141, 'en_us', '<p>Register and upload your photo</p>\r\n'),
(142, 'De', '<p>Holen Sie sich meinen Pa&szlig; Photo</p>\r\n'),
(142, 'en_us', '<p>Get my passport Photo</p>\r\n'),
(143, 'De', '<p>FREIES PORTO ZU mehr als 65 L&auml;ndern</p>\r\n'),
(143, 'en_us', '<p>FREE POSTAGE TO MORE THAN 65 COUNTRIES</p>\r\n'),
(144, 'De', '<p><span class="short_text" id="result_box" lang="de"><span class="hps">Einloggen</span></span></p>\r\n'),
(144, 'en_us', '<p>Sign In</p>\r\n'),
(145, 'De', '<p>Wenn Sie ein Konto bei uns haben, bitte anmelden.</p>\r\n'),
(145, 'en_us', '<p>If you have an account with us, please log in</p>\r\n'),
(146, 'De', '<p>Passwort Vergessen?</p>\r\n'),
(146, 'en_us', '<p>Forgot&nbsp; Password?</p>\r\n'),
(147, 'De', '<p>Wir schicken Ihnen ein Passwort-Reset Link zu Ihrer E-Mail-ID zu senden</p>\r\n'),
(147, 'en_us', '<p>We will send you a reset password link to your email id</p>\r\n'),
(148, 'De', '<p>Laden Sie Ihr Foto <strong> (bis zu einem maximalen 12 Fotos) </strong></p>\r\n'),
(148, 'en_us', '<p>Upload your photo <strong>(up to Maximum 12 Photos)</strong></p>\r\n'),
(149, 'De', '<p>So machen Sie Ihr Foto</p>\r\n'),
(149, 'en_us', '<p>Taking your photo</p>\r\n'),
(150, 'De', '<h3>See our video tutorial, how to take your photo.</h3>\r\n\r\n<div class="col-md-100 text-center">\r\n<div class="video-res"><iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/LejwmH6H0bs?rel=0" width="420"></iframe></div>\r\n</div>\r\n\r\n<h3>Mit Paspic brauchen Sie nur ein Foto mit Ihrem Gesicht in der Mitte auf einem wei&szlig;en, creme farbenen oder hell grauen Hintergrund zu machen. Paspic erledigt den Rest!</h3>\r\n\r\n<p>&gt;</p>\r\n\r\n<p><strong>Paspic Tipps und Tricks</strong></p>\r\n\r\n<div class="col-md-100">\r\n<div class="col-md-30"><img alt="" class="img-responsive" src="/uploads/editor/images/portrait.jpg" /></div>\r\n\r\n<div class="col-md-70">\r\n<p>1. W&auml;hlen Sie einen wei&szlig;en, cream farbenen oder hell grauen Hintergrund und machen Sie ein Foto mit Ihrem Kopf in der Mitte des Bildes.<br />\r\n2. Ihre Kamera sollte etwa 1 Meter von Ihnen entfernt sein.<br />\r\n3. Sie sollten einen neutralen Gesichtsausdruck mit geschlossenem Mund haben.<br />\r\n4. Schauen Sie direkt in die Kamera<br />\r\n5. Stellen Sie sicher, dass Ihre Brille einen schmalen Rahmen hat und nicht Ihre Augen verdeckt.<br />\r\n6. Stellen Sie sicher, dass Ihr Haar nicht Teile Ihres Gesichts verdeckt.<br />\r\n7. Tragen Sie keinen Hut, Kopftuch und keine Sonnenbrille.<br />\r\n8. Sie sollten die einzige Person in dem Bild sein.<br />\r\n9. Probieren Sie Reflektionen auf Haut und Brille zu vermeiden<br />\r\n10. Probieren Sie Schatten auf Ihrem Gesicht und hinter Ihrem Kopf zu vermeiden<br />\r\n11. Stellen Sie sicher, dass Licht gleichm&auml;&szlig;ig auf Ihr Gesicht f&auml;llt.</p>\r\n</div>\r\n</div>\r\n\r\n<p><strong>GB Passfotos</strong></p>\r\n\r\n<p>Bitte besuchen Sie <a href="http://www.passport.gov.uk/general_photos_standards.asp">UKPA</a> f&uuml;r die offizielle Passfoto-Anleitung zu einen g&uuml;ltigen GBR Passfoto.</p>\r\n'),
(150, 'en_us', '<h3>See our video tutorial, how to take your photo.</h3>\r\n\r\n<div class="col-md-100 text-center">\r\n<div class="video-res"><iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/LejwmH6H0bs?rel=0" width="420"></iframe></div>\r\n</div>\r\n\r\n<h3>How? If possible, always take photo WITHOUT YOUR GLASSES!</h3>\r\n\r\n<p><strong>With Paspic you only need to take your photo with your face in the middle of the picture, on a plain background. Paspic will take care of the rest!</strong></p>\r\n\r\n<p><strong>Paspic Hints and Tips</strong></p>\r\n\r\n<div class="col-md-100">\r\n<div class="col-md-30"><img alt="" class="img-responsive" src="/uploads/editor/images/portrait.jpg" /></div>\r\n\r\n<div class="col-md-70">\r\n<p>1. Pick a plain background and take your photo with <strong>the head in the middle of the picture.</strong><br />\r\n2. Camera distance about 1 metres (3 feet) from you.<br />\r\n3. You should have a neutral expression with your lips closed.<br />\r\n4. Look straight into the camera.<br />\r\n5. Do not wear glasses!<br />\r\n6. Make sure your hair is not covering part of your eyes/face.<br />\r\n7. Do not wear a hat or a head scarf - (no sun glasses)!<br />\r\n8. There should be nothing in the picture except you.<br />\r\n9. Avoid flash reflection on your skin, glasses or red-eye effect.<br />\r\n10. Avoid shadows across the face and behind your head.<br />\r\n11. Ensure that the light on your face is even.</p>\r\n</div>\r\n</div>\r\n'),
(151, 'De', '<p>So machen Sie Ihr Foto</p>\r\n'),
(151, 'en_us', '<p>Taking your photo</p>\r\n'),
(152, 'De', '<p>IHRE BABYFOTOS</p>\r\n'),
(152, 'en_us', '<p>Photo of your baby</p>\r\n'),
(153, 'De', '<p>IHRE BABYFOTOS</p>\r\n'),
(153, 'en_us', '<p>Photo of your baby</p>\r\n'),
(154, 'De', '<h3>Bitte schauen Sie sich unser Video &quot;So mache ich ein Foto meines Kindes&quot; an.</h3>\r\n\r\n<div class="col-md-100">\r\n<div class="col-md-50 col-sm-50 text-center">\r\n<div class="video-res"><iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/tRaw0vtMYcE?rel=0" width="420"></iframe></div>\r\n</div>\r\n\r\n<div class="col-md-50 col-sm-50 text-center">\r\n<div class="video-res"><iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/wL29bhIsOxM?rel=0" width="420"></iframe></div>\r\n</div>\r\n</div>\r\n\r\n<h3>Sie Ben&ouml;tigen ein Passfoto f&uuml;r Ihr Baby?</h3>\r\n\r\n<h4>Bei PasPic ben&ouml;tigen Sie nur ein Foto Ihres Babys, bei dem es den Kopf in der Mitte und auf einem wei&szlig;en, cremefarbenen, oder hellgrauen Hintergrund hat. Den Rest erledigen wir f&uuml;r Sie!</h4>\r\n\r\n<div class="col-md-100">\r\n<div class="col-md-40"><img alt="" class="img-responsive" src="/uploads/editor/images/baby8a.jpg" /></div>\r\n\r\n<div class="col-md-60">\r\n<p>Das sind die offiziellen Kriterien:<br />\r\n- Ein Kopf und Schulterbild Ihres Babys/Kindes auf wei&szlig;em, cremefarbenem oder hellgrauem Hintergrund. Bei sehr jungen Babys d&uuml;rfen Sie den Kopf st&uuml;tzen, Ihre Hand darf allerdings nicht sichtbar sein.<br />\r\n- Der Kopf muss in der Mitte des Bildes sein.<br />\r\n- Bei Kindern zwischen 1 und 6 m&uuml;ssen der Mund geschlossen und die Augen auf die Kamera gerichtet sein.<br />\r\n- Die Kamera sollte etwa 1,5m entfernt sein.<br />\r\n- Licht muss gleichm&auml;&szlig;ig auf das Gesicht fallen.</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>DE Passfotos</h4>\r\n\r\n<p>Bitte besuchen Sie <a href="http://www.bundesdruckerei.de/de/service/service_buerger/buerger_persdok/persdok_epassMstr.html" onclick="window.open(this.href);return false;" onkeypress="window.open(this.href);return false;">Foto-Mustertafe</a> &uuml;r die offizielle Passfoto-Anleitung zu einen g&uuml;ltigen Passfoto.</p>\r\n\r\n<h4>GB Passfotos</h4>\r\n\r\n<p>Bitte besuchen Sie <a href="http://www.passport.gov.uk/general_photos_babies.asp">UKPA</a> f&uuml;r die offizielle Passfoto-Anleitung zu einen g&uuml;ltigen GBR Passfoto.</p>\r\n\r\n<h4>US Visum / Passfotos</h4>\r\n\r\n<p>Bitte besuchen Sie <a href="http://travel.state.gov/passport/guide/composition/composition_874.html">US Travel</a> f&uuml;r die offizielle Passfoto-Anleitung zu einem g&uuml;ltigen US Passfoto.</p>\r\n');
INSERT INTO `message` (`id`, `language`, `translation`) VALUES
(154, 'en_us', '<h3>See our video tutorial, how to take a photo of your child</h3>\r\n\r\n<div class="col-md-100">\r\n<div class="col-md-50 col-sm-50 text-center">\r\n<div class="video-res"><iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/tRaw0vtMYcE?rel=0" width="420"></iframe></div>\r\n</div>\r\n\r\n<div class="col-md-50 col-sm-50 text-center">\r\n<div class="video-res"><iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/wL29bhIsOxM?rel=0" width="420"></iframe></div>\r\n</div>\r\n</div>\r\n\r\n<h3>You need a passport photo of your baby</h3>\r\n\r\n<h4>With Paspic you only need to take your photo with your baby&#39;s face in the middle of the picture, on a plain background. Paspic will take care of the rest!</h4>\r\n\r\n<div class="col-md-100">\r\n<div class="col-md-40"><img alt="" class="img-responsive" src="/uploads/editor/images/baby8a.jpg" /></div>\r\n\r\n<div class="col-md-60">\r\n<p>1. Head and shoulders photos of your baby/child, taken on a plain background. In the case of young babies, you are allowed to support the baby&#39;s head but an adult&#39;s hands showing in the photographs is not acceptable.</p>\r\n\r\n<p>2 Head in the middle of the picture.</p>\r\n\r\n<p>3. For children aged under one year, the requirements for mouths to be closed and eyes looking at the camera are waived.</p>\r\n\r\n<p>4. Camera distance about 1.5 meters (5 ft) from baby.</p>\r\n\r\n<p>5. Ensure light on the face is even.</p>\r\n</div>\r\n</div>\r\n'),
(155, 'De', '<p>Allgemeine Bedingungen</p>\r\n'),
(155, 'en_us', '<p>Terms &amp; Conditions</p>\r\n'),
(156, 'De', '<p>Bitte w&auml;hlen Alter</p>\r\n'),
(156, 'en_us', '<p>Please select Age</p>\r\n'),
(157, 'De', '<p><span style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: medium; line-height: normal;">Passwort Zur&uuml;cksetzen</span></p>\r\n'),
(157, 'en_us', '<p><span style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: medium; line-height: normal;">Reset&nbsp; Password</span></p>\r\n'),
(158, 'De', '<p><span style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: medium; line-height: normal;">Password Reset hier</span></p>\r\n'),
(158, 'en_us', '<p><span style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: medium; line-height: normal;">Reset Password here</span></p>\r\n'),
(159, 'De', '<p><span>99,5% </span> aller Passbilder werden auf ersten Einreichung zugelassen</p>\r\n'),
(159, 'en_us', '<p><span>99.5%</span> of all our passport photos are approved on first submission</p>\r\n'),
(160, 'De', '<p><span style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: medium; line-height: normal;">ALS N&Auml;CHSTES</span></p>\r\n'),
(160, 'en_us', '<p><span style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: medium; line-height: normal;">NEXT</span></p>\r\n'),
(161, 'De', '<p><span style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: medium; line-height: normal;">SICH BEWERBEN</span></p>\r\n'),
(161, 'en_us', '<p><span style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: medium; line-height: normal;">APPLY</span></p>\r\n'),
(162, 'De', '<p><span style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: medium; line-height: normal;">&Uuml;BERPR&Uuml;FEN</span></p>\r\n'),
(162, 'en_us', '<p><span style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: medium; line-height: normal;">CHECKOUT</span></p>\r\n'),
(163, 'De', '<p>Ihr Haar wird dabei deine Gesicht</p>\r\n'),
(163, 'en_us', '<p>Your hair is covering your face</p>\r\n'),
(164, 'De', '<p>Sie tr&auml;gt eine Brille</p>\r\n'),
(164, 'en_us', '<p>You are wearing glasses</p>\r\n'),
(165, 'De', '<p>Sie verf&uuml;gen nicht &uuml;ber einen neutralen Ausdruck oder die Lippen geschlossen sind</p>\r\n'),
(165, 'en_us', '<p>You do not have a neutral expression or your lips are closed</p>\r\n'),
(166, 'De', '<p>l&ouml;schen Photo</p>\r\n'),
(166, 'en_us', '<p>Delete Photo</p>\r\n'),
(167, 'De', '<p>Mein Warenkorb</p>\r\n'),
(167, 'en_us', '<p>My Cart</p>\r\n'),
(168, 'De', '<p>Bitte wie uns und wir werden eine Paspic Rabatt Gutschein auf Ihrer Wand zu stellen. Sie und Ihre Freunde k&ouml;nnen sie auf folgenden Kauf zu verwenden. Es ist g&uuml;ltig f&uuml;r 5 K&auml;ufe (first come - first served) in der n&auml;chsten 6 Monate. Ein Kauf pro Benutzer.</p>\r\n'),
(168, 'en_us', '<p>Please Like us and we will post a Paspic Discount Voucher on your wall. You and your friends can use it on next purchase. It is valid for 5 purchases (first come - first served) in the next 6 month. One purchase per user.</p>\r\n'),
(169, 'De', '<p>Hochladen</p>\r\n'),
(169, 'en_us', '<p>Upload</p>\r\n'),
(170, 'De', '<p>About Papsic|Make Passport Photos | Baby&#39;s First Passport</p>\r\n'),
(170, 'en_us', '<p>About Papsic|Make Passport Photos | Baby&#39;s First Passport</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE IF NOT EXISTS `meta_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`id`, `slug`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 'about', 'About Papsic|Make Passport Photos | Baby''s First Passport', '- Passport Photo Service, baby''s first passport,  passport photos in, baby passport photo, child passport photo, UK Passport Photograph , US Passport photo , British passport photo , How to make passport photos, UK Passport Photograph Sizepassport renewal photo for children,pioneering digital photographic technologies,Instant Passport Photos,Quick Passport Photos,Passport Renewal Photo,Passport Photos,Instant Photos,infant passport', '-Create your passport photos (passport pictures) online and validate passport photo compliance. Free postage to all countries. Money back guarantee- Instant Passport Photos, we provides quick passport photos services in all around world. Also providing passport renewal photo for children and for adults'),
(2, 'howdoesitwork', 'Passport Photo | Passport Photo Booth | How It Works|Make Passport Photos | Baby''s First Passport', '- Passport Photo Service, baby''s first passport,  passport photos in, baby passport photo, child passport photo, UK Passport Photograph , US Passport photo , British passport photo , How to make passport photos, UK Passport Photograph SizePassport Photo Booth,British passport photo,passport photo size,US Passport photo,passport photos online,How to make passport photos,Passport Photo,Visa photo,passport USA', '-Create your passport photos (passport pictures) online and validate passport photo compliance. Free postage to all countries. Money back guarantee- Online solution for all passport photos, just like a regular passport photo booth'),
(3, 'privacy_policy', 'Privacy at Paspic|Make Passport Photos | Baby''s First Passport', '- Passport Photo Service, baby''s first passport,  passport photos in, baby passport photo, child passport photo, UK Passport Photograph , US Passport photo , British passport photo , How to make passport photos, UK Passport Photograph Size', '-Create your passport photos (passport pictures) online and validate passport photo compliance. Free postage to all countries. Money back guarantee-'),
(4, 'affiliates', 'Affiliates at Paspic|Make Passport Photos | Baby''s First Passport', '- Passport Photo Service, baby''s first passport,  passport photos in, baby passport photo, child passport photo, UK Passport Photograph , US Passport photo , British passport photo , How to make passport photos, UK Passport Photograph Size', '-Create your passport photos (passport pictures) online and validate passport photo compliance. Free postage to all countries. Money back guarantee-'),
(5, 'testimonials', 'Testimonials at Paspic|Make Passport Photos | Baby''s First Passport', '- Passport Photo Service, baby''s first passport,  passport photos in, baby passport photo, child passport photo, UK Passport Photograph , US Passport photo , British passport photo , How to make passport photos, UK Passport Photograph Size', '-Create your passport photos (passport pictures) online and validate passport photo compliance. Free postage to all countries. Money back guarantee-'),
(6, 'home', 'Passport Photo Service |Make Passport Photos | Baby''s First Passport', '- Passport Photo Service, baby''s first passport,  passport photos in, baby passport photo, child passport photo, UK Passport Photograph , US Passport photo , British passport photo , How to make passport photos, UK Passport Photograph Size', '-Create your passport photos (passport pictures) online and validate passport photo compliance. Free postage to all countries. Money back guarantee-'),
(7, 'photo-upload-section', 'Paspic', 'This site is face detect from photos', 'paspic'),
(8, 'taking_your_photo', 'Take Passport Photos | passport photo template | infant passport|Make Passport Photos | Baby''s First Passport', '- Passport Photo Service, baby''s first passport,  passport photos in, baby passport photo, child passport photo, UK Passport Photograph , US Passport photo , British passport photo , How to make passport photos, UK Passport Photograph Sizepassport photos for babies,quick passport photographs,take passport photos,infant passport,passport photo size,Green Card photo,Visa photo', 'Taking your photo'),
(9, 'taking_baby_photo', 'Child Passport Photo | Children Passport | passport photo requirements|Make Passport Photos | Baby''s First Passport', '- Passport Photo Service, baby''s first passport,  passport photos in, baby passport photo, child passport photo, UK Passport Photograph , US Passport photo , British passport photo , How to make passport photos, UK Passport Photograph SizeChild passport photo,Baby Passport photo,passport photo requirements,passport photos online,British passport photo,baby passport photo requirements,Children Passport', 'Photo of your baby'),
(10, 'terms-conditions', 'Terms and Conditions', 'Terms and Conditions', 'Terms and Conditions');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_id` int(11) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `meta_id`, `is_active`, `created`, `modified`) VALUES
(1, 'About_Us_Title', 'about_us_page', 1, '1', 1421070095, 1439968934),
(2, 'how_it_works_title', 'how_it_works_description', 2, '1', 1421400353, 1438857230),
(3, 'privacy_policy_title', 'privacy-policy', 3, '1', 1421405160, 1438857266),
(4, 'affiliates_title', 'affiliates_page_content', 4, '1', 1421405225, 1438857298),
(5, 'testimonial_title', 'testimonials_page', 5, '1', 1421405225, 1438857324),
(6, 'home', 'home', 6, '1', 1426676635, 1438857357),
(7, 'photo_upload_title', 'photo_upload', 7, '1', 1426678578, 1428391561),
(8, 'Taking_your_photo_page_title', 'Taking_your_photo_page_description', 8, '1', 1428403624, 1439548800),
(9, 'Photo_of_your_baby_page_title', 'Photo_of_your_baby_page_description', 9, '1', 1428403752, 1438780009),
(10, 'term_and_conditions_title', 'term_and_conditions_description', 10, '1', 1428411121, 1428411121);

-- --------------------------------------------------------

--
-- Table structure for table `sourcemessage`
--

CREATE TABLE IF NOT EXISTS `sourcemessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(32) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=171 ;

--
-- Dumping data for table `sourcemessage`
--

INSERT INTO `sourcemessage` (`id`, `category`, `message`) VALUES
(1, 'paspic', 'about us'),
(5, 'paspic', 'How its work'),
(6, 'paspic', 'affiliates_page'),
(7, 'paspic', 'privacy_policy_page'),
(8, 'paspic', 'how_it_works_page'),
(9, 'paspic', 'about_us_page'),
(10, 'paspic', 'testimonials_page'),
(12, 'paspic', 'services'),
(14, 'paspic', 'privacy-policy'),
(15, 'paspic', 'home'),
(16, 'paspic', 'photo_upload'),
(17, 'paspic', 'photo-upload-section'),
(18, 'paspic', 'About_Us_Title'),
(19, 'paspic', 'affiliates_title'),
(20, 'paspic', 'affiliates_page_content'),
(21, 'paspic', 'forgot_password_title'),
(22, 'paspic', 'image_process_title'),
(23, 'paspic', 'image_process_description'),
(24, 'paspic', 'question_reminder_title'),
(25, 'paspic', 'change_question_description'),
(26, 'paspic', 'delete_image_title'),
(27, 'paspic', 'delete_image_description'),
(28, 'paspic', 'contact_us_title'),
(29, 'paspic', 'contact_us_description'),
(30, 'paspic', 'forgot_password_tagline'),
(31, 'paspic', 'how_it_works_title'),
(32, 'paspic', 'how_it_works_description'),
(33, 'paspic', 'forgot_error_message'),
(34, 'paspic', 'login_subtitle'),
(35, 'paspic', 'login_tagline'),
(36, 'paspic', 'term_and_conditions_description'),
(37, 'paspic', 'how_to_take_your_photo_title'),
(38, 'paspic', 'how_to_take_your_photo_description'),
(39, 'paspic', 'privacy_policy_title'),
(40, 'paspic', 'home_menu'),
(41, 'paspic', 'aboutus_menu'),
(42, 'paspic', 'how_it_work_menu'),
(43, 'paspic', 'contactus_menu'),
(44, 'paspic', 'myaccount_menu'),
(45, 'paspic', 'login_menu'),
(46, 'paspic', 'logout_menu'),
(47, 'paspic', 'welcome_title'),
(48, 'paspic', 'cart_title'),
(49, 'paspic', 'testimonial_title'),
(50, 'paspic', 'footer_trademark'),
(51, 'paspic', 'copyright_title'),
(52, 'paspic', 'paspic_limited_title'),
(53, 'paspic', 'follow_us_title'),
(54, 'paspic', 'select_country_stepmenu'),
(55, 'paspic', 'upload_photo_stepmenu'),
(56, 'paspic', 'adjust_photo_stepmenu'),
(57, 'paspic', 'validate_photo_stepmenu'),
(58, 'paspic', 'order_photo_stepmenu'),
(59, 'paspic', 'make_own_pass'),
(60, 'paspic', 'photos_here'),
(61, 'paspic', 'money_back_gaurantee'),
(62, 'paspic', 'upload_jpeg_photo'),
(63, 'paspic', 'upload_picture'),
(64, 'paspic', 'upload_download_tree_step'),
(65, 'paspic', 'take_your_photo'),
(66, 'paspic', 'check_bio_validation'),
(67, 'paspic', 'download_passphoto_sheet'),
(68, 'paspic', 'adjust_photo_format'),
(69, 'paspic', 'select_photo_format'),
(70, 'paspic', 'free_postage_packaging'),
(71, 'paspic', 'select_passport_photo_number_photos'),
(72, 'paspic', 'age'),
(73, 'paspic', 'baby_under_12_month'),
(74, 'paspic', 'child_under_6_years'),
(75, 'paspic', 'in_this_photo_do_you_have_glasses'),
(76, 'paspic', 'is_your+hair_covering_your_eyes_face'),
(77, 'paspic', 'over_6_years'),
(78, 'paspic', 'do_you_neutral_expression_lips_closed'),
(79, 'paspic', 'face_detection_tatus'),
(80, 'paspic', 'uploaded'),
(81, 'paspic', 'download_photo'),
(82, 'paspic', 'delete_photo'),
(83, 'paspic', 'to_validate_Biometric_Compliance_questions'),
(84, 'paspic', 'validate'),
(85, 'paspic', 'biometric_verification'),
(86, 'paspic', 'add_new_photo'),
(87, 'paspic', 'order'),
(88, 'paspic', 'yes'),
(89, 'paspic', 'no'),
(90, 'paspic', 'your_cart'),
(91, 'paspic', 'description'),
(92, 'paspic', 'quantity'),
(93, 'paspic', 'unit_price'),
(94, 'paspic', 'total'),
(95, 'paspic', 'sub_total'),
(96, 'paspic', 'voucher_discount'),
(97, 'paspic', 'voucher_promotion_code'),
(98, 'paspic', 'if_you_have_voucher_promotion_code'),
(99, 'paspic', 'your_postal_address'),
(100, 'paspic', 'you_must_complete _marked_star'),
(101, 'paspic', 'delivery_address_same_postal_address'),
(102, 'paspic', 'different_delivery_address'),
(103, 'paspic', 'email'),
(104, 'paspic', 'password'),
(105, 'paspic', 'forgot_your_password'),
(106, 'paspic', 'remove'),
(107, 'paspic', 'my_dashboard'),
(108, 'paspic', 'hello'),
(109, 'paspic', 'account_dashboard'),
(110, 'paspic', 'my_photos'),
(111, 'paspic', 'my_orders'),
(112, 'paspic', 'edit_profile'),
(113, 'paspic', 'change_password'),
(114, 'paspic', 'logout'),
(115, 'paspic', 'there_no_photos_uploaded'),
(116, 'paspic', 'date'),
(117, 'paspic', 'ship_to'),
(118, 'paspic', 'order_total'),
(119, 'paspic', 'order_status'),
(120, 'paspic', 'action'),
(121, 'paspic', 'update'),
(122, 'paspic', 'submit'),
(123, 'paspic', 'send_us_email_to'),
(124, 'paspic', 'support'),
(125, 'paspic', 'contact_us_enquiry_text_1'),
(126, 'paspic', 'contact_us_enquiry_text_2'),
(127, 'paspic', 'phone'),
(128, 'paspic', 'map_and_directions'),
(129, 'paspic', 'your_cart_empty'),
(130, 'paspic', 'make_own_passport_money_back_guarantee'),
(131, 'paspic', 'make_own_passport_money_back_guarantee_1'),
(132, 'paspic', 'make_own_passport_money_back_guarantee_2'),
(133, 'paspic', 'make_own_passport_money_back_guarantee_3'),
(134, 'paspic', 'why'),
(135, 'paspic', 'save_time'),
(136, 'paspic', 'save_time_1'),
(137, 'paspic', 'save_money'),
(138, 'paspic', 'save_money_1'),
(139, 'paspic', 'show_best_look'),
(140, 'paspic', 'show_best_look_1'),
(141, 'paspic', 'register__upload_your_photo'),
(142, 'paspic', 'get_my_passport_photo_button'),
(143, 'paspic', 'free_postage_more_65_countries'),
(144, 'paspic', 'signin'),
(145, 'paspic', 'signin_subtitle'),
(146, 'paspic', 'forgot_password'),
(147, 'paspic', 'we_will_send_you_reset_password_link_your_email'),
(148, 'paspic', 'photo_upload_title'),
(149, 'paspic', 'Taking_your_photo_page_title'),
(150, 'paspic', 'Taking_your_photo_page_description'),
(151, 'paspic', 'taking_your_photo_menu'),
(152, 'paspic', 'Photo_of_your_baby_page_title'),
(153, 'paspic', 'photo_of_your_baby_menu'),
(154, 'paspic', 'Photo_of_your_baby_page_description'),
(155, 'paspic', 'term_and_conditions_title'),
(156, 'paspic', 'please_select_age'),
(157, 'paspic', 'reset_password'),
(158, 'paspic', 'reset_password_here'),
(159, 'paspic', '99.5_passport_photos_approved_on_first_submission'),
(160, 'paspic', 'next'),
(161, 'paspic', 'apply'),
(162, 'paspic', 'checkout'),
(163, 'paspic', 'hair_validation_error'),
(164, 'paspic', 'glass_validation_error'),
(165, 'paspic', 'expression_validation_error'),
(166, 'paspic', 'remove_photo'),
(167, 'paspic', 'my_cart'),
(168, 'paspic', 'thankyou_like_message'),
(169, 'paspic', 'upload_menu'),
(170, 'paspic', 'about_page_meta_title');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `amount_needed` varchar(255) NOT NULL,
  `gross_annual_sales` varchar(255) NOT NULL,
  `years_in_business` varchar(255) NOT NULL,
  `funding_purpose` varchar(255) NOT NULL,
  `is_sole_owner` enum('0','1') NOT NULL,
  `does_lease_or_own` enum('0','1') NOT NULL,
  `is_current_with_payments` enum('0','1') NOT NULL,
  `has_federal_liens` enum('0','1') NOT NULL,
  `is_on_payment_plan` enum('0','1') NOT NULL,
  `has_current_balance` enum('0','1') NOT NULL,
  `balance_from_what_company` varchar(255) NOT NULL,
  `balance_outstanding` varchar(255) NOT NULL,
  `best_time` varchar(255) NOT NULL,
  `needs` text NOT NULL,
  `pdf_path` varchar(255) NOT NULL,
  `document_signed` enum('0','1') NOT NULL DEFAULT '0',
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `agent_id`, `business_name`, `email`, `password`, `fname`, `lname`, `phone_number`, `amount_needed`, `gross_annual_sales`, `years_in_business`, `funding_purpose`, `is_sole_owner`, `does_lease_or_own`, `is_current_with_payments`, `has_federal_liens`, `is_on_payment_plan`, `has_current_balance`, `balance_from_what_company`, `balance_outstanding`, `best_time`, `needs`, `pdf_path`, `document_signed`, `created`, `modified`) VALUES
(1, 0, 'Test', 'test@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'Lanst', 'test', 'test', '', '5000', '1215', '', '1', '1', '1', '0', '1', '1', 'asjdfksjd', '456', '', '', '', '0', 1460433248, 1460433248),
(2, 0, 'Test', 'dev@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'test', 'fdskajf', '546465', '$2,000', '500', '1234', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460604770, 1460604770),
(3, 0, 'Test', 'dev2@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'test', 'fdskajf', '546465', '$2,000', '500', '1234', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460604865, 1460604865),
(4, 0, 'Test', 'dev3@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'test', 'fdskajf', '546465', '$2,000', '500', '1234', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460605047, 1460605047),
(5, 0, 'Test', 'dev4@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'test', 'fdskajf', '546465', '$2,000', '500', '1234', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460605191, 1460605191),
(6, 0, 'Test', 'dev5@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'test', 'fdskajf', '546465', '$2,000', '500', '1234', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460605556, 1460605556),
(7, 0, 'Test', 'dev6@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'test', 'fdskajf', '546465', '$2,000', '500', '1234', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460605623, 1460605623),
(8, 0, 'test', 'vnkmrjain@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '1231546545', '$2,000', '4564', '2131', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460690205, 1460690205),
(9, 0, 'test', 'vnkmrjain2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '1231546545', '$2,000', '4564', '2131', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460690405, 1460690405),
(10, 0, 'Sr Trade', 'ghenu19@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '456454654', '$2,000', '5000', '1234', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460690508, 1460690508),
(11, 0, 'Sr Trade', 'ghenu1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '456454654', '$2,000', '5000', '1234', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460690641, 1460690641),
(12, 0, 'Sr Trade', 'ghenu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '456454654', '$2,000', '5000', '1234', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460690698, 1460690698),
(13, 0, 'Sr Trade', 'ghe@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '456454654', '$2,000', '5000', '1234', '', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1460690773, 1460690773),
(14, 0, 'MoneyWorks', 'vinay@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '1231321', '$6,489', '5000', '2222', 'Equipment', '1', '1', '1', '0', '0', '0', '', '', '', '', 'upload/test-pdf/7419d44d5d52d587985cfaef262bf84a.pdf', '1', 1460810299, 1461005831),
(15, 0, 'Money Works Direct', 'vnkmrjain@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vickey', 'Mehata', '45645456', '$2,000', '50000', '2010', 'Equipment', '1', '1', '1', '0', '0', '0', '', '', '', '', 'upload/test-pdf/96554629862cf25be92a3956fcdf44a4.pdf', '1', 1461006676, 1461007012),
(16, 0, 'MoneyWorks', 'vnkmr@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '546465', '$3,733', '4564', '1234', 'Other', '1', '1', '1', '0', '0', '1', 'asjdfksjd', '1500', '', '', 'upload/test-pdf/1e926f2929f1e5f00b54abe6aad3f223.pdf', '1', 1461175993, 1461176338),
(17, 6, 'MoneyWorks', 'jain.vinay@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', 'fsdfas fdasdfas', '$31,250', '5000', '1234', 'Equipment', '1', '1', '0', '0', '1', '0', '', '', '', '', 'upload/test-pdf/a4ee4b54fc5708fde549254c8a086c71.pdf', '1', 1461346096, 1461346973),
(18, 1, 'test', 'tt@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '(456) 456-4564', '$2,000', '5,000.00', '1234', 'Equipment', '0', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1461549499, 1461549499),
(19, 1, 'Test', 'testv@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '(445) 454-5545', '$18,250', '5,000.00', '2121', 'Equipment', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1461609406, 1461609406),
(20, 1, 'MoneyWorks', 'vnk@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vinay', 'Jain', '(445) 454-5545', '$21,417', '5,000.00', '2131', 'Equipment', '1', '1', '1', '0', '0', '0', '', '', '', '', '', '0', 1461727212, 1461727212);

-- --------------------------------------------------------

--
-- Table structure for table `users_biz_location`
--

CREATE TABLE IF NOT EXISTS `users_biz_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `business_home_based` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `lease_term` varchar(255) NOT NULL,
  `monthly_rent` varchar(255) NOT NULL,
  `landlord_mortgage_co` varchar(255) NOT NULL,
  `landlord_mortgage_co_contact` varchar(255) NOT NULL,
  `landlord_mortgage_co_contact_phone` varchar(255) NOT NULL,
  `landlord_mortgage_co_contact_cell` varchar(255) NOT NULL,
  `landlord_mortgage_co_contact_email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users_biz_location`
--

INSERT INTO `users_biz_location` (`id`, `user_id`, `business_home_based`, `location`, `lease_term`, `monthly_rent`, `landlord_mortgage_co`, `landlord_mortgage_co_contact`, `landlord_mortgage_co_contact_phone`, `landlord_mortgage_co_contact_cell`, `landlord_mortgage_co_contact_email`) VALUES
(1, 13, 'homeBased', 'homeBased', '12', '500', 'Test', 'Vinay', '21321232', '21321231', 'vnkmrjain@gmail.com'),
(2, 14, 'Yes', 'Leased', '5 Years', '2000', 'dfafg', 'fsakjdfklj', '45465456', '545645645', 'test@mail.com'),
(3, 15, 'Yes', 'Leased', '12', '34534', 'Test', 'Vinay', '45465456', '545645645', 'test@mail.com'),
(4, 16, 'Yes', 'Owned', '5 Years', '2000', 'dfafg', 'Vinay', 'fsadf', '545645645', 'fdks@x.com'),
(5, 17, 'Yes', 'Leased', '12', '2000', 'Test', 'Vinay', 'fsadf', '545645645', 'test@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users_business_info`
--

CREATE TABLE IF NOT EXISTS `users_business_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dba_name` varchar(255) NOT NULL,
  `legal_name` varchar(255) NOT NULL,
  `type_of_business` varchar(255) NOT NULL,
  `tax_id` varchar(255) NOT NULL,
  `business` varchar(255) NOT NULL,
  `business_address` text NOT NULL,
  `full_billing_address` text NOT NULL,
  `phone_at_location` varchar(255) NOT NULL,
  `best_phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `business_email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `years_in_business` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users_business_info`
--

INSERT INTO `users_business_info` (`id`, `user_id`, `dba_name`, `legal_name`, `type_of_business`, `tax_id`, `business`, `business_address`, `full_billing_address`, `phone_at_location`, `best_phone`, `fax`, `business_email`, `website`, `years_in_business`) VALUES
(1, 7, 'Test', 'test', '123154', '454564', 'Corp', 'test', 'test', 'test', 'fsdf', 'fsdaf', 'test@valid.com', 'sdfsd', ''),
(2, 13, 'Sr Trade', 'Vinay', 'Commercial', '12314564564564', 'Corp', 'test Address', 'C-93, Jaipur, Rajasthan, India', 'Jaipur', '1234564465', '4564564564', 'test@example.com', 'http://test.com', ''),
(3, 14, 'MoneyWorks', 'Vinay', 'Commercial', '23432423423', 'Corp', 'Jaipur, Rajasthan', 'C-93, Jaipur, Rajasthan, India', '456465456', '5454564564546', '4545645456', 'mail@mailinator.com', 'http://test.com', ''),
(4, 15, 'Money Works Direct', 'Vinay', 'Commercial', '12315465457987', 'Corp', 'Jaipur, Rajasthan', 'C-93, Jaipur, Rajasthan, India', '456465456', '5454564564546', '4545645456', 'mail@mailinator.com', 'http://test.com', ''),
(5, 16, 'MoneyWorks', 'Vinay', 'Commercial', '12315465457987', 'Corp', 'Jaipur, Rajasthan', 'C-93, Jaipur, Rajasthan, India', '456465456', '5454564564546', '4545645456', 'mail@mailinator.com', 'http://test.com', ''),
(6, 17, 'MoneyWorks', 'Vinay', 'Commercial', '12315465457987', 'Corp', 'Jaipur, Rajasthan', 'C-93, Jaipur, Rajasthan, India', '456465456', '5454564564546', '4545645456', 'mail@mailinator.com', 'http://test.com', ''),
(7, 20, 'MoneyWorks', 'Vinay', 'Commercial', '12315465457987', 'Corp', 'Jaipur, Rajasthan', 'C-93, Jaipur, Rajasthan, India', '(454) 564-5645', '(545) 456-4564', '(454) 564-5456', 'test@valid.com', 'http://test.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_financials`
--

CREATE TABLE IF NOT EXISTS `users_financials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gross_annual_sales` double NOT NULL,
  `cash_advance` varchar(255) NOT NULL,
  `cash_advance_with` varchar(255) NOT NULL,
  `balance` double NOT NULL,
  `current_credit_card_processor` varchar(255) NOT NULL,
  `avg_processing_volume` double NOT NULL,
  `last_month_vol` double NOT NULL,
  `second_month_vol` double NOT NULL,
  `third_month_vol` double NOT NULL,
  `fourth_month_vol` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users_financials`
--

INSERT INTO `users_financials` (`id`, `user_id`, `gross_annual_sales`, `cash_advance`, `cash_advance_with`, `balance`, `current_credit_card_processor`, `avg_processing_volume`, `last_month_vol`, `second_month_vol`, `third_month_vol`, `fourth_month_vol`) VALUES
(1, 7, 1232, 'fdg', 'fdsaf', 212, 'fdsadf', 212, 121, 212, 12, 12),
(2, 13, 5000, '4200', 'Viany', 800, 'CC AVe', 5000, 5222, 222, 222, 222),
(3, 14, 5000, 'Yes', 'Vinay', 2400, 'CC AVe', 1000, 456, 1213, 454, 1212),
(4, 15, 50000, 'Yes', 'Vinay', 4500, 'CC AVe', 1000, 456, 1213, 4564, 1212),
(5, 16, 4564, 'Yes', 'Vinay', 5200, 'CC AVe', 1000, 20, 1213, 4564, 1212),
(6, 17, 5000, 'Yes', 'Vinay', 5000, 'CC AVe', 1000, 20, 1213, 4564, 1212);

-- --------------------------------------------------------

--
-- Table structure for table `users_personal_info`
--

CREATE TABLE IF NOT EXISTS `users_personal_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `owner_1_name` varchar(255) NOT NULL,
  `owner_1_title` varchar(255) NOT NULL,
  `owner_1_dob` date NOT NULL,
  `owner_1_ssn` varchar(255) NOT NULL,
  `owner_1_home_address` varchar(255) NOT NULL,
  `owner_1_home_phone` varchar(255) NOT NULL,
  `owner_1_cell_phone` varchar(255) NOT NULL,
  `owner_1_email` varchar(255) NOT NULL,
  `owner_1_own_or_rent` varchar(255) NOT NULL,
  `owner_1_payment` double NOT NULL,
  `owner_1_years_there` varchar(255) NOT NULL,
  `owner_1_drivers_license` varchar(255) NOT NULL,
  `owner_1_drivers_license_state` varchar(255) NOT NULL,
  `owner_2_name` varchar(255) NOT NULL,
  `owner_2_title` varchar(255) NOT NULL,
  `owner_2_dob` date NOT NULL,
  `owner_2_ssn` varchar(255) NOT NULL,
  `owner_2_home_address` varchar(255) NOT NULL,
  `owner_2_home_phone` varchar(255) NOT NULL,
  `owner_2_cell_phone` varchar(255) NOT NULL,
  `owner_2_email` varchar(255) NOT NULL,
  `owner_2_own_or_rent` varchar(255) NOT NULL,
  `owner_2_payment` double NOT NULL,
  `owner_2_years_there` varchar(255) NOT NULL,
  `owner_2_drivers_license` varchar(255) NOT NULL,
  `owner_2_drivers_license_State` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users_personal_info`
--

INSERT INTO `users_personal_info` (`id`, `user_id`, `owner_1_name`, `owner_1_title`, `owner_1_dob`, `owner_1_ssn`, `owner_1_home_address`, `owner_1_home_phone`, `owner_1_cell_phone`, `owner_1_email`, `owner_1_own_or_rent`, `owner_1_payment`, `owner_1_years_there`, `owner_1_drivers_license`, `owner_1_drivers_license_state`, `owner_2_name`, `owner_2_title`, `owner_2_dob`, `owner_2_ssn`, `owner_2_home_address`, `owner_2_home_phone`, `owner_2_cell_phone`, `owner_2_email`, `owner_2_own_or_rent`, `owner_2_payment`, `owner_2_years_there`, `owner_2_drivers_license`, `owner_2_drivers_license_State`) VALUES
(1, 13, 'Vinay Jain', 'Sr. Business', '2016-12-05', '123-45-4564', 'Jaipur, Rajashtan, India', '213123131231', '546456456454', 'test@mail.inato.com', 'Own', 5000, '5 Years', '21312312311321', 'State', '', '', '0000-00-00', '--', '', '', '', '', '', 0, '', '', ''),
(2, 14, 'Vinay Jain', 'Sr. Business', '2016-12-12', '121-21-1214', 'Jaipur, Rajashtan, India', '1231321', '546456456454', 'test@mail.inato.com', 'Own', 4564, '456465', '21231', 'Raj', 'Kumar', 'Dear', '2013-02-12', '121-12-1212', '12', '456456465', '5445454654', 'test@mailinator.com', 'Own', 4564, 'dadfksj', '323', '3232323'),
(3, 15, 'Vickey Mehata', 'Sr. Business', '2013-12-12', '123-45-6564', 'Jaipur, Rajashtan, India', '45645456', '546456456454', 'test@mail.inato.com', 'Own', 4564, '5 Years', '21312312311321', 'Raj', '', '', '0000-00-00', '--', '', '', '', '', 'Own', 0, '', '', ''),
(4, 16, 'Vinay Jain', 'Sr. Business', '2121-12-12', '121-12-1212', 'jkasfjd', '546465', 'ksajfk', 'test@mail.inato.com', 'Own', 5000, '456465', 'fdsafs', 'fdsafs', '', '', '0000-00-00', '--', '', '', '', '', 'Own', 0, '', '', ''),
(5, 17, 'Vinay Jain', 'Sr. Business', '2016-12-12', '454-54-5456', 'fdg', 'fsdfas fdasdfas', 'gdfgfd', 'fdgdf@g.com', 'Own', 554654, '544', '45', 'dafg', '', '', '0000-00-00', '--', '', '', '', '', 'Own', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_references`
--

CREATE TABLE IF NOT EXISTS `users_references` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `bank_name_branch` varchar(255) NOT NULL,
  `bank_name_branch_contact` varchar(255) NOT NULL,
  `bank_name_branch_phone` varchar(255) NOT NULL,
  `trade_reference_1` varchar(255) NOT NULL,
  `trade_reference_1_contact` varchar(255) NOT NULL,
  `trade_reference_1_phone` varchar(255) NOT NULL,
  `trade_reference_2` varchar(255) NOT NULL,
  `trade_reference_2_contact` varchar(255) NOT NULL,
  `trade_reference_2_phone` varchar(255) NOT NULL,
  `trade_reference_3` varchar(255) NOT NULL,
  `trade_reference_3_contact` varchar(255) NOT NULL,
  `trade_reference_3_phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users_references`
--

INSERT INTO `users_references` (`id`, `user_id`, `bank_name_branch`, `bank_name_branch_contact`, `bank_name_branch_phone`, `trade_reference_1`, `trade_reference_1_contact`, `trade_reference_1_phone`, `trade_reference_2`, `trade_reference_2_contact`, `trade_reference_2_phone`, `trade_reference_3`, `trade_reference_3_contact`, `trade_reference_3_phone`) VALUES
(1, 13, 'ICICI BANK LTD', 'Vinay', '23432423423', 'test', '323423', '32423234', 'sfdadfjkj', 'asklfjsadkfj', '342342323', 'kjkjkjfsadf', 'fjaskfjsklj', '23432423423'),
(2, 13, 'ICICI BANK LTD', 'Vinay', '23432423423', 'test', '323423', '32423234', 'sfdadfjkj', 'asklfjsadkfj', '342342323', 'kjkjkjfsadf', 'fjaskfjsklj', '23432423423'),
(3, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(4, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(5, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(6, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(7, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(8, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(9, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(10, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(11, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(12, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(13, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(14, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(15, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(16, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(17, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(18, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(19, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(20, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(21, 14, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(22, 15, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'Methew', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(23, 16, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'test', '789798789', 'test', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879'),
(24, 17, 'ICICI BANK LTD', 'David', '23432423423', 'G & L Brothers', 'test', '789798789', 'A.P. Info', 'Vinay', '78798789', 'Dots Tech', 'Bahul', '7897897879');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AuthAssignment`
--
ALTER TABLE `AuthAssignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `AuthItemChild`
--
ALTER TABLE `AuthItemChild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE appmoneyworks.users_financials_documents (
	id int(11) NOT NULL AUTO_INCREMENT,
	user_id int(11) NULL,
	filename varchar(255) NULL,
	file_type varchar(255) NULL,
	filepath varchar(255) NULL,
	is_uploaded TINYINT(2) NULL,
	CONSTRAINT users_financials_documents_PK PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
