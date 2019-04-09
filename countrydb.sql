CREATE TABLE `country` (
  `id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `countryname` varchar(50) NOT NULL,
  `date_entry` datetime NOT NULL DEFAULT current_timestamp()
);
