CREATE TABLE IF NOT EXISTS `users` (
`uid` int(11) NOT NULL AUTO_INCREMENT,
`email` varchar(300) NOT NULL UNIQUE,
`password` varchar(300) NOT NULL,
`activation` varchar(300) NOT NULL UNIQUE,
`status` enum('0','1') NOT NULL DEFAULT '0',
PRIMARY KEY (`uid`)
);