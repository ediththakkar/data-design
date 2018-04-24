ALTER DATABASE egarcia262 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

-- INSERT
-- DELETE FROM card
-- WHERE cardCategoryId= UNHEX(REPLACE('30d28a7e-192b-4f54-b97d-ba6166eb7433', '-', ''));
--
-- insert example:
-- INSERT INTO card(cardId, cardCategoryId, cardAnswer, cardPoints, cardQuestion)
-- VALUES (UNHEX(REPLACE('c3d15b55-4cb6-40ce-9a43-2101b90587c7', '-', '')), UNHEX(REPLACE('c2a7af6e-e2b5-45fe-8c1e-b7300f85852c', '-', '')), 'Who is Ajit Pai?', 32, 'Reeses loving, net neutrality hating chairman');
--
-- -- update example:
-- UPDATE profile
-- SET profileId="12345",
-- profileLastName="Depperman"
-- WHERE profield ="12345";
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


