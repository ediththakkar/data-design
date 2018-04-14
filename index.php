<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Data Design</title>
	</head>
	<body>
		<h1>Data Design project</h1>
		<h2>Persona, Use Case, User story, and Interaction Flow</h2>
		<ul>
			<li>Persona</li>
			<li>User Story</li>
			<li>Use Case</li>
			<li>Interaction Flow</li>
		</ul>
		<h2>Entities and Attributes/Classes</h2>
		<ul>
			<li>Profile</li>
			<li>Post</li>
			<li>Likes</li>
		</ul>
		<ul>
			<li>Class=Profile</li>
			<li>profileId (This is the primary key)</li>
			<li>profileEmail</li>
			<li>profileHash (Use hash and Salt instead of password)</li>
			<li>profileImage</li>
			<li>profileName</li>
			<li>profileSalt (Use hash and Salt instead of password)</li>
			<li>profileUsername</li>
		</ul>
		<p>
			The relationship from profile to post is a 1 to many (1-n). Because one profile can write many posts. But each post is only written by one person.
		</p>
		<ul>
			<li>Class=Post</li>
			<li>postId (This is the primary key)</li>
			<li>postImage</li>
			<li>postDescription</li>
			<li>postTitle</li>
			<li>postDate</li>
			<li>postProfileId (This is the foreign key)</li>
		</ul>
		<p>
			When profiles like posts it is a many to many (m-n) relationship. When you find that you have a many to many relationship you must make another table called a weak entity.
			In this case we are calling them likes.
		</p>
		<ul>
			<li>Class=Likes</li>
			<li>likeProfileId (This is a foreign key. Both foreign keys make the primary key)</li>
			<li>likePostId (This is a foreign key. Both foreign keys make the primary key)</li>
		</ul>

	</body>
</html>