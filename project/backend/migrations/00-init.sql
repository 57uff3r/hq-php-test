CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL DEFAULT '0',
  `currency` varchar(4) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `cardholder_name` varchar(255) NOT NULL,
  `card_number` int(16) NOT NULL,
  `card_ccv` int(3) NOT NULL,
  `card_expiration_month` int(2) NOT NULL,
  `card_expiration_year` int(4) NOT NULL,
  `used_gateway` varchar(20) NOT NULL,
  `gateway_answer` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;