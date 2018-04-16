<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Data Design</title>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<h1>Data Design project</h1>
		<h2>Persona, Use Case, User story, and Interaction Flow</h2>
		<ul>
		<div id="myDiv" name="myDiv" title="Example Div Element">
		<h3>Persona</h3>
		<P>
			<img src="vector-characters-businessman2.jpg">
		<li><strong>Name:</strong>Michael Tucker</li>
		<li><strong>Personality:</strong> Solo Traveler, Confident, Ambitious, and Determined. Michael would love to travel the world worry-free.</li>
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
		<li><strong>Title:</strong> Graphic designing</li>
		<li><strong>Name of the user, or persona, and their role:</strong> Michael, a digital designer</li>
		<li><strong>Usage PreconditionsL:</strong> Michael needs to create a user account and has to have internet connection to make posts.</li>
		<li><strong>Usage Postconditions:</strong> Michael able to easily post and share his designs. At the comfort of his own home or wherever he has internet connection.</li>
		<li><strong>Frequency of Use:</strong> three-times-week</li>
		</p>
		<ul>
		<p>
		<h3>Interaction Flow</h3>
		<li>User Action 1: Michael signs up for an account and enters his email and creates a username.</li>
		<li>System Response 1: Dribble sends confirmation email with activation link </li>
		<li>User Action 2: Michael clicks on activation link and is now able to post.</li>
		<li>System Response 2:Dribbble displays a tutorial message to help create a first post to his account. </li>
		<li>User Action 3: Michael clicks on create first post</li>
		<li>System Response 3: Dribbble opens up a display box in which vishal can type his post, and a upload button to upload images</li>
		<li>User Action 4: Michael types content into his display box, and uploads an image and saves and submits post.</li>
		<li>System Response 4: Dribbble launches post, and members are able to view, like, share, and or follow.</li>
		<li>User Action 5: Michael clicks the logout button and signs out.</li>
		<li>System Response 5: Dribbble logs out Vishal.</li>
		</p>
		</ul>
		</ul>
		<h2>Entities and Attributes/Classes</h2>
		<h3>Classes</h3>
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
		<h3><strong>ERD for Dribbble website</strong></h3>
		<div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom layers lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile userAgent=\&quot;Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36\&quot; version=\&quot;8.5.9\&quot; editor=\&quot;www.draw.io\&quot; type=\&quot;device\&quot;&gt;&lt;diagram name=\&quot;Page-1\&quot; id=\&quot;c7558073-3199-34d8-9f00-42111426c3f3\&quot;&gt;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&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div>
		<script type="text/javascript" src="https://www.draw.io/js/viewer.min.js"></script>

	</body>
</html>