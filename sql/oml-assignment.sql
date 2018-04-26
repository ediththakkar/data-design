ALTER DATABASE egarcia262 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO profile (profileId, profileEmail, profileHash, profileImage, profileName, profileUsername)
VALUES (UNHEX(REPLACE('4b17a8b8-4760-11e8-842f-0ed5f89f718b', '-', '')), 'egarcia262@cnm.edu', '12345', jpeg, egarcia, egarcia262);

INSERT INTO post (postId, postImage, postDescription, postTitle, postProfileId)
VALUES (UNHEX(REPLACE ('7b27cd70-4761-11e8-842f-0ed5f89f718b', '-', '')), jpeg, 'animalpictures', 'zoo', (UNHEX(REPLACE('4b17a8b8-4760-11e8-842f-0ed5f89f718b', '-', '') );

UPDATE profile
SET profileName="pepper",
WHERE profileEmail="egarcia262@cnm.edu";

UPDATE post
SET postDescription="lovingflorida",
WHERE postID=(UNHEX(REPLACE ('7b27cd70-4761-11e8-842f-0ed5f89f718b', '-', ''));

DELETE FROM profile
WHERE profileName="pepper";

DELETE FROM post
WHERE postTitle="zoo";


