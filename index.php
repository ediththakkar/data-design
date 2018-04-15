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
		<div id="myDiv" name="myDiv" title="Example Div Element">
		<h3>Persona</h3>
		<P>
		<li><strong>Name:</strong>Vishal Tucker</li>
		<li><strong>Personality:</strong> Solo Traveler, Confident, Ambitious, and Determined. Vishal would love to travel the world worry-free.</li>
		<li><strong>Gender:</strong> Male</li>
		<li><strong>Age:</strong>27</li>
		<div id="myDiv" name="myDiv" title="Example Div Element">
		<li><strong>Technology:</strong> Computer wize in Windows, and Android. But terrible in Mac</li>
		<li><strong>Device:</strong> Samsung Note 8, HP Envy x360 Convertible Laptop</li>
		<li><strong>Proficiency:</strong> Highly skilled in all technology, and fast learner.</li>
		<li><strong>Likes/Dislikes:</strong> Traveling, Cruise ships, Animals, languages. Dislikes manipulative people, and selfish people.</li>
		</div>
		<li><strong>Attitudes and Needs</strong></li>
		<li><strong>What need does this person have?</strong> He'd like a simple site where he can post and share his designs, and gather as many likes and followers as possible.</li>
		<li><strong>Why choose your site over other options?</strong> Dribbble is a user friendly site where designers can easily upload posts and get as many likes and shares as possible. Along with providing a platform for designers to search and apply for jobs.</li>
		</P>
		<h3>User Story</h3>
		<li>As a member of Dribbble, I'd like to get as many likes and shares as possible.</li>
		<p>
		<h3>Use Case</h3>
		<li><strong>Title: Graphic designing</strong></li>
		<li><strong>Name of the user, or persona, and their role:</strong> Vishal, a digital designer</li>
		<li><strong>Usage PreconditionsL:</strong> Vishal needs to create a user account and has to have internet connection to make posts.</li>
		<li><strong>Usage Postconditions:</strong> Vishal's able to easily post and share his designs. At the comfort of his own home or wherever he has internet connection.</li>
		<li><strong>Frequency of Use:</strong> three-times-week</li>
		</p>
		<ul>
		<p>
		<h3>Interaction Flow</h3>
		<li>User Action 1: Vishal signs up for an account and enters his email and creates a username.</li>
		<li>System Response 1: Dribble sends confirmation email with activation link </li>
		<li>User Action 2: Vishal clicks on activation link and is now able to post.</li>
		<li>System Response 2:Dribbble displays a tutorial message to help create a first post to his account. </li>
		<li>User Action 3: Vishal clicks on create first post</li>
		<li>System Response 3: Dribbble opens up a display box in which vishal can type his post, and a upload button to upload images</li>
		<li>User Action 4: Vishal types content into his display box, and uploads an image and saves and submits post.</li>
		<li>System Response 4: Dribbble launches post, and members are able to view, like, share, and or follow.</li>
		<li>User Action 5: Vishal clicks the logout button and signs out.</li>
		<li>System Response 5: Dribbble logs out Vishal.</li>
		</p>
		</ul>
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