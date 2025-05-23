CREATE TABLE `user` (
  `username` varchar(40) NOT NULL PRIMARY KEY,
  `password` varchar(40) NOT NULL,
  `usertype` varchar(40) NOT NULL
);

INSERT INTO `user` (`username`, `password`, `usertype`) VALUES
('admin', '7dd12f3a9afa0282a575b8ef99dea2a0c1becb51', 'admin');