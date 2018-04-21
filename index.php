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
		<li>System Response 3: Dribbble opens up a display box in which Michael can type his post, and a upload button to upload images</li>
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
		<li>profileHash (Use hash instead of password)</li>
		<li>profileImage</li>
		<li>profileName</li>
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
		<div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom layers lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile userAgent=\&quot;Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36\&quot; version=\&quot;8.5.9\&quot; editor=\&quot;www.draw.io\&quot; type=\&quot;device\&quot;&gt;&lt;diagram name=\&quot;Page-1\&quot; id=\&quot;c7558073-3199-34d8-9f00-42111426c3f3\&quot;&gt;7Ztbk6MoFIB/TR67S8BbHqdvO1u1WzVVXVs780grrWyrZJFMkvn1i4pRxHRmtsSZXPLSeEAQPg5wzqEX6D7f/sbxKv2TxSRbQCfeLtDDAkLgLJH8U0l2SuIvnUaScBorWSd4pt9I+6qSrmlMSq2gYCwTdKULI1YUJBKaDHPONnqxV5bpra5wQgzBc4QzU/o3jUXaSEPod/KPhCZp27LsYJPzgqO3hLN1odpbQPRa/5rsHLd1qY6WKY7ZpidCjwt0zxkTTSrf3pOsGtx22Jr3ng7k7r+bk0J8zwvQaT9E7NrOk1iOhXpkXKQsYQXOHjvpXSryTGYCmSRbKj7LtKPSX6r0LfTk4z9EiJ1ii9eCSVFX3R+MrVQVpeDsjdyzjPH6A5BT//Y5LQFXSl5ZIVSVIJTP9VCTWNXUdKX6/oPDoUQlW/OoLbUM1BTDPCFtuWW4xyHnOWE5EXwnC3GSYUG/6i1gNd+SfbluzGVCDfshBJ4NBCdPADpwNgK+DQLBGSAAsyEIpkEAzk0J0GwEQhsETn8ngI47FwLgWtuMZbf57vNeKerHL6roaeMBs61RCNjQkEDHo8E5gwUMOTPh2Tf/FWdrVe0C+pn8kLsXmUhE3bNGUPVfI+n/u2Ztxk1Zj8wHWQB6q22X2day4uyVyhdVZfLLmvr0NqS41+5g4nQDXgHapFSQ5xWuh3IjjSp94vwQWZplvZLS9IBRJOUJxzGV+Hp54dPT050zMhvUOBIuyPb9GWByVS8gBJtXlAl4A1xlaWw6gwq0ZlDaM6Z8Z4q5EBpzQUH7PTaVOMukYUmOc9C15ASpeDqTwEQSeiYRdwIi6ig5RuQjLtO5mYBfhwlCy6NUQGuhTI8FHl40+WC9e8wxzczcMcnF0gQeOE4TjCx709BEB5e9vHJ5XS4Xzzm+9lnk4h7i8ldJeIHzS0bjI0dH43smGtc10SBvAjRgIrPX9L6dg8kFHbU56SaXNw7UgkW8nIaO6RY6YzrBXHTa5nvLWkbfzLXs3I0dL9RXMOCZm4tva2+BE6mI0gOlJOCU1AC0MUJNDWYLH4AR04aVojT1IGX5y7q8gD09GGzpwFSIpS2FQMjGjj70oiLgD7eN+uET4VR+M+GntpcAOKJETcR7FueqFd/3AJqLgj60G+cWnCm32WIWaKrotbH99JUtvAhlm+3KAZoo4D0S6+tRC6Bxsj5HarMdt9vm3/fVyZPH//LRnfshHQ7cDP6MZ3TgGeQqQ+nTzwpJ/EInRXdgO+2vxh1zzKFJwJgxwxqMVKKLpjL0yc1LBY64SysijQ/7Gm3oog0OutX92mNh1uVITG8aTv44p/gKafezkJgLWoWkt9NcyXShVw8dVZ7ROwrToBq5oyBRPZAy4nQlKCuusPrntzYG/h4s1xas9jqLVTP3dAMR7RjrFyeX40At2LPO6DGu/B6z52J8sh7Uz3QjQQp7PllzWzIvU8quicGYk5J+wy91gWpUKh0o1ahUjxlNCpmO5AhU3oS7anxohLMPKiOncVxr4orRQtQd8O4W3sMASsEKYjBVQt0stmEALQe+8pGjNrK2rJl7UHHl0qhHoJ+sQ/NWgj0sZmD1qi4qFwwu8oCR2JI1MK650Vz1ReUObr4Ba/oiH7v/kKzzev+Hih7/Aw==&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div>
		<script type="text/javascript" src="https://www.draw.io/js/viewer.min.js"></script>
		<p>
		<body>
</html>