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
			<h3>Persona</h3>
			<P>
			<li>Name:Vishal Tucker</li>
			<li>Personality: Solo Traveler, Confident, Ambitious, and Determined. Vishal would love to travel the world worry-free.</li>
			<li>Gender: Male</li>
			<li>Age:27</li>
			<li>Technology: Computer wize in Windows, and Android. But terrible in Mac</li>
			<li>Device: Samsung Note 8, HP Envy x360 Convertible Laptop</li>
			<li>Proficiency: Highly skilled in all technology, and fast learner.</li>
			<li>Likes/Dislikes: Traveling, Cruise ships, Animals, languages. Dislikes manipulative people, and selfish people.</li>
			<li>Attitudes and Needs</li>
				<li>What need does this person have?
				</li>He'd like a simple site where he can post and share his designs, and gather as many likes and followers as possible.</li>
			<li>Why choose your site over other options?
				Dribbble is a user friendly site where designers can easily upload posts and get as many likes and shares as possible. Along with providing a platform for designers to search and apply for jobs.  </li>
			</P>
			<h3>User Story</h3>
			<li>As a member of Dribbble, I'd like to get as many likes and shares as possible.</li>
			<p>
			<li>Use Case</li>
			<li>Title: Graphic designing</li>
			<li>Name of the user, or persona, and their role: Vishal, a digital designer</li>
			<li>Usage PreconditionsL: Vishal needs to create a user account and has to have internet connection to make posts.</li>
			<li>Usage Postconditions: Vishal's able to easily post and share his designs. At the comfort of his own home or wherever he has internet connection.</li>
			<li>Frequency of Use: three-times-week</li>
			<li>Interaction Flow</li>
			</p>
		</ul>
		<h2>Entities and Attributes/Classes</h2>
		<h3>Classes:</h3>
		<ul>
			<li>Profile</li>
			<li>Post</li>
			<li>Likes</li>
		</ul>
		<h3><strong> Profile</strong></h3>
		<ul>
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
		<h3><strong>Post</strong></h3>
		<ul>
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
		<h3><strong>Likes</strong></h3>
		<ul>
			<li>likeProfileId (This is a foreign key. Both foreign keys make the primary key)</li>
			<li>likePostId (This is a foreign key. Both foreign keys make the primary key)</li>
		</ul>

	</body>
</html>