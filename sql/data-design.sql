ALTER DATABASE your_DATA_CHANGE_ME CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS `like`;
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile (
	profileId BINARY (16) NOT NULL,
	profileEmail VARCHAR (120) NOT NULL,
	profileHash CHAR (97) NOT NULL,
	profileImage VARCHAR (120) NOT NULL,
	profileName CHAR (90) NOT NULL,
	profileUsername CHAR (98) NOT NULL,
	UNIQUE(profileUsername)
	UNIQUE(profileEmail)
	PRIMARY KEY(profileId)
);

CREATE TABLE post (
	postId BINARY (16) NOT NULL,
	postImage VARCHAR (120) NOT NULL,
	postDescription VARCHAR (120) NOT NULL,
	postTitle CHAR (90) NOT NULL,
	postProfileId BINARY (16) NOT NULL,
	INDEX (postProfileId)
	FOREIGN KEY (postProfileId) REFERENCES profile (profileId),
	PRIMARY KEY (postId)
);

CREATE TABLE `like` (
-- likeProfileId (This is a foreign key. Both foreign keys make the primary key)
-- likePostId (This is a foreign key. Both foreign keys make the primary key)
-- FOREIGN KEY(likeProfileId) REFERENCES like (profileId),
-- FOREIGN KEY(likePostId) REFERENCES post (postId),
-- PRIMARY KEY (likeProfileId, likePostId)
);