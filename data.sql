CREATE TABLE IF NOT EXISTS `phonebook` (

  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(75) NOT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB;

INSERT INTO `phonebook` (`id`, `name`, `email`, `mobile`) VALUES

(1, 'Zeus', 'zeus@olympus.mt.co', '666999555'),
(2, 'Anthena', 'anthena@olympus.mt.co', '555999222'),
(3, 'Jupiter', 'jupiter@planet.pt.co', '555444111'),
(4, 'Venus', 'venus@planet.pt.co', '111366999');