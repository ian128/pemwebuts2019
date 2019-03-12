CREATE TABLE `user` (
	`UserID` varchar(20),
	`ProfilePicture` blob,
	`Bio` varchar(140),
	`Web` varchar(80),
	`NamaDepan` varchar(50),
	`NamaBelakang` varchar(50),
	`JenisKelamin` varchar(1),
	`TanggalLahir` DATE,
	`TempatLahir` varchar(50),
	`Alamat` varchar(50),
	`Kota` varchar(50),
	`Provinsi` varchar(50),
	`hp` varchar(20),
	`email` varchar(50),
	`HashPass` varchar(200),
	`salt` varchar(16),
	PRIMARY KEY (`UserID`)
)Engine=InnoDB;

CREATE TABLE `post` (
	`PostID` varchar(20),
	`CreatorID` varchar(20),
	`DateCreated` TIMESTAMP,
	`content` varchar(480),
	PRIMARY KEY (`PostID`,`CreatorID`)
)Engine=InnoDB;

CREATE TABLE `comment` (
	`CommentID` varchar(20),
	`PostID` varchar(20),
	`CreatorID` varchar(20),
	`DateCreated` DATETIME,
	`content` varchar(480),
	PRIMARY KEY (`CommentID`,`PostID`,`CreatorID`)
)Engine=InnoDB;

ALTER TABLE `post` ADD CONSTRAINT `post_fk0` FOREIGN KEY (`CreatorID`) REFERENCES `user`(`UserID`);

ALTER TABLE `comment` ADD CONSTRAINT `comment_fk0` FOREIGN KEY (`PostID`) REFERENCES `post`(`PostID`);

ALTER TABLE `comment` ADD CONSTRAINT `comment_fk1` FOREIGN KEY (`CreatorID`) REFERENCES `user`(`UserID`);


INSERT INTO `user`
VALUES('10000000000000000000',NULL,'Ini Bio','www.123.com','Kuki','Kaki','L','2000-01-01','Jakarta','Jalan Kedutaan','Jakarta','DKI Jakarta','0812345','email@email.com','D5BE68F64D54FA6065DCC4308561A251','Kuki'),
('10000000000000000001',NULL,'Bio 2','www.456.com','Jaaka','Jajak','L','1990-01-01','Jakarta','Jalan Kebesaran','Jakarta','DKI Jakarta','0832983285','2email@email.com','2CFBAFD9CA89D5E887A1351DC246900C','Jaaka'),
('10000000000000000002',NULL,'Bio 3','www.789.com','Abadi','Jaya','L','1999-01-01','Jakarta','Jalan Kekecilan','Jakarta','DKI Jakarta','09748364455','3emails@email.com','A446A092795ED97FE8F10EF136765166','Abadi');


INSERT INTO `post`
VALUES('20000000000000000000','10000000000000000000','2019-03-12 10:56:00','Ahsiaaaap Ahsiaaaap Ahsiaaaap');

INSERT INTO `comment`
VALUES('30000000000000000000','20000000000000000000','10000000000000000001','2019-03-12 10:59:00','Bidadadadadadada'),
('30000000000000000001','20000000000000000000','10000000000000000002','2019-03-12 11:00:00','Kuakuwi Kuakuwi Kuakuwi');
