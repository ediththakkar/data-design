<?php
namespace Edu\Cnm\DataDesign;

require_once("autoload.php");
require_once(__DIR__,2) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;
/**
 * @author Edith Thakkar <ediththakkar@gmail.com>
 * @author Dylan McDonald <dmdonald21@cnm.edu>
 */

class Post implements \JsonSerializable {
	use ValidateUuid;

	/**
	 * id for this post; this is the primary key
	 * @var Uuid $postId
	 */
	private $postId;

	/**  this is the image for this profile.
	 * @var string $postImage
	 */

	private $postImage;


	/** This is the description for the post.
	 * A hash
	 * @var string $profileDescription
	 */
	private $profileDescription;

	/**
	 * This is the title for this post.
	 * @var string $postTitle
	 */

	private $postTitle;

	/**
	 * This is the profileId for the post, this is the foreign key.
	 * @var string $postProfileId
	 */

	private $postProfileId;

	/**
	 *Constructor for the profile
	 *
	 * @param string|Uuid $newPostId
	 * @param string $newPostImage
	 * @param string $newPostDescription
	 * @param blob $newPostTitle
	 * @param string $newPostProfileId
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 * @Documentation https://php.net/manual/en/language.oop5.decon.php
	 *
	 */
	public function __construct($newPostId, $newPostImage, $newPostDescription, $newPostTitle, $newPostProfileId){
		try{
			$this->setPostId($newPostId);
			$this->setPostImage($newPostImage);
			$this->setPostDescription($newPostDescription);
			$this->setPostTitle($newPostTitle);
			$this->setPostProfileId($newPostProfileId);
		}
//determine what exception type was thrown
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}
}

/**
 *accessor method for post Id
 *
 *@return Uuid value of post Id
 */
public function getPostId() : Uuid {
	return($this->postId);
}

/**
 *mutator method for post Id
 *
 *@param Uuid|string $newPostId new value of post Id
 *@throws \InvalidArgumentException if $newPostId is not a st
 *@throws \RangeException if $newPostId is not positive
 * @throws \TypeError if $newPostId is not a uuid or str:
 */
public function setPostId ( $newPostId) : void {
	try {
		$uuid = self::validateUuid($newPostId);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception-getMessage(), 0, $exception));
	}

	//convert and store the postId
	$this->postId = $uuid;
}

/**
 *accessor method for postImage
 *
 *@return Uuid value of post Image
 */
public function getPostImage() : string {
	return($this->postImage);
}

/**
 *mutator method for post Image
 *
 *@param Uuid|string $newPostImage new value of post Image
 *@throws \InvalidArgumentException if $newPostImage is not a st
 *@throws \RangeException if $newPostImage is not positive
 * @throws \TypeError if $newPostImage is not a uuid or str:
 */
public function setPostImage ( $newPostImage) : void {
	try {
		$uuid = self::validateUuid($newPostImage);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception-getMessage(), 0, $exception));
	}

	//convert and store the post Image
	$this->postImage = $uuid;
}

/**
 *accessor method for post Description
 *
 *@return Uuid value of post Description
 */
public function getPostDescription() : Uuid {
	return($this->postDescription);
}

/**
 *mutator method for post Description
 *
 *@param Uuid|string $newPostDescription new value of post Description
 *@throws \InvalidArgumentException if $newPostDescription is not a st
 *@throws \RangeException if $newPostDescription is not positive
 * @throws \TypeError if $newPostDescription is not a uuid or str:
 */
public function setPostDescription ($newPostDescription) : void {
	try {
		$uuid = self::validateUuid($newPostDescription);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception-getMessage(), 0, $exception));
	}

	//convert and store the post Description
	$this->post Drescription = $uuid;
}

/**
 *accessor method for post Title
 *
 *@return Uuid value of post Title
 */
public function getPostTitle() : Uuid {
	return($this->postTitle;
}

/**
 *mutator method for post Title
 *
 *@param Uuid|string $newPostTitle new value of post Title
 *@throws \InvalidArgumentException if $newPostTitle is not a st
 *@throws \RangeException if $newPostTitle is not positive
 * @throws \TypeError if $newPostTitle is not a uuid or str:
 */
public function setPostTitle ( $newPostTitle) : void {
	try {
		$uuid = self::validateUuid($newPostTitle);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception-getMessage(), 0, $exception));
	}

	//convert and store the post Title
	$this->postTitle = $uuid;
}

/**
 *accessor method for postProfileId
 *
 *@return Uuid value of post ProfileId
 */
public function getPostProfileId() : Uuid {
	return($this->postProfileId);
}

/**
 *mutator method for post ProfileId
 *
 *@param Uuid|string $newPostProfileId new value of post ProfileId
 *@throws \InvalidArgumentException if $newPostProfileId is not a st
 *@throws \RangeException if $newPostProfileId is not positive
 * @throws \TypeError if $newPostProfileId is not a uuid or str:
 */
public function setPostProfileId ( $newPostProfileId) : void {
	try {
		$uuid = self::validateUuid($newPostProfileId);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception-getMessage(), 0, $exception));
	}

	//convert and store the post ProfileId
	$this->postPorfileId = $uuid;
}

/**
 * inserts this Post into mySQL
 *
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 **/
	public function insert(\PDO $pdo) : void {
	// create query template (using the PDO prepare statement)
	$query = "INSERT INTO post(postId, postImage, postDescription, postTitle, postProfileId) VALUES(:postId, :postImage, :postDescription, :postTitle, :postProfileId)";
	$statement = $pdo->prepare($query);
	// bind the member variables to the place holders in the template (using PDO execute statement)
	$parameters = ["postId" => $this->postId->getBytes(), "postImage" => $this->postImage, "postDescription" => $this->postDescription, "postTitle" => $postTitle, "postProfileId" => $this->postProfileId];
	$statement->execute($parameters);
}
	/**
	 * deletes this Post from mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function delete(\PDO $pdo) : void {
	// create query template
	$query = "DELETE FROM blog WHERE postId = :postId";
	$statement = $pdo->prepare($query);
	// bind the member variables to the place holder in the template
	$parameters = ["postId" => $this->postId->getBytes()];
	$statement->execute($parameters);
}
	/**
	 * updates this Post in mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function update(\PDO $pdo) : void {
	// create query template
	$query = "UPDATE clap SET postId = :postId, postImage = :postImage, postDescription =:postDescription, postTitle = :postTitle, postProfileId = :postProfileId WHERE postId = :postId";
	$statement = $pdo->prepare($query);
	$parameters = ["postId" => $this->postId->getBytes()," postImage" => $this->postImage, "postDescription" => $this->postDescription, "postTitle" => $postTitle, "postProfileId" => $postProfileId, "postId" => $this->postId];
	$statement->execute($parameters);
}
	/**
	 * gets the Blog by post id
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param Uuid|string $postId post id to search for
	 * @return Blog|null post found or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when a variable are not the correct data type
	 **/
	public static function getpostByPostId(\PDO $pdo, $postId) : ?Blog {
	// sanitize the postId before searching
	try {
		$postId = self::validateUuid($postId);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	// create query template
	$query = "SELECT postId, postImage, postDescription, postTitle, postProfileId, postId FROM post WHERE postId = :postId";
	$statement = $pdo->prepare($query);
	// bind the post id to the place holder in the template
	$parameters = ["postId" => $postId->getBytes()];
	$statement->execute($parameters);
	// grab the post from mySQL
	try {
		$post = null;
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		$row = $statement->fetch();
		if($row !== false) {
			$post = new post($row["postId"], $row["postImage"], $row["postDescription"], $row["postTitle"],  $row["postProfileId"]);
		}
	} catch(\Exception $exception) {
		// if the row couldn't be converted, rethrow it
		throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	return($post);
}
	/**
	 * gets the Post by post Image
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param Uuid|string $postImage blog post image to search by
	 * @return \SplFixedArray SplFixedArray of post found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getPostByPostImage(\PDO $pdo, $postId) : \SplFixedArray {
	try {
		$postImage = self::validateUuid($postImage);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	// create query template
	$query = "SELECT postImage, postDescription, postTitle, postProfileId,  profileImage FROM post WHERE postImage = :postImage";
	$statement = $pdo->prepare($query);
	// bind the post post Image to the place holder in the template
	$parameters = ["postImage" => $postImage->getBytes()];
	$statement->execute($parameters);
	// build an array of posts
	$posts = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !== false) {
		try {
			$post = new Blog($row["postID"], $row["postImage"], $row["postDescription"], $row["postTitle"], $row["postProfileId"]);
			$posts[$posts->key()] = $post;
			$posts->next();
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
	return($posts);
}
	/**
	 * gets the posts by post Description
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param Uuid|string $postDescription post content to search by
	 * @return \SplFixedArray SplFixedArray of Posts found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getPostByPostDescription(\PDO $pdo, string $postDescription) : \SplFixedArray {
	// sanitize the description before searching
	$postDescription = trim($postDescription);
	$postDescription = filter_var($postDescription,FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($postDescription) === true) {
		throw(new \PDOException("post content is invalid"));
	}
// escape any mySQL wild cards
	$postDescription = str_replace("_", "\\_", str_replace("%", "\\%", $postDescription));
// create query template
	$query = "SELECT postId, postImage, postDescription, postTitle, postProfileId FROM post WHERE postDescription = :postDescription";
	$statement = $pdo->prepare($query);
// bind the post content content to the place holder in the template
	$postDescription = "%$postDescription%";
	$parameters = ["postDescription" => $postDescription];
	$statement->execute($parameters);
// build an array of posts
	$posts = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !== false) {
		try {
			$post = new Post ($row["postId"], $row["postImage"], $row["postDescription"], $row["postTitle"],  $row["postProfileId"]);
			$posts[$posts->key()] = $post;
			$posts->next();
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
	return($posts);
}
	/**
	 * gets the post by post Title
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param Uuid|string $postTitle post title to search by
	 * @return \SplFixedArray SplFixedArray of posts found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getPostByPostTitle(\PDO $pdo, string $postTitle) :\ SplFixedArray {
	// sanitize the description before searching
	$postTitle = trim($postTitle);
	$postTitle = filter_var($postTitle, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($postTitle) === true) {
		throw(new \PDOException("post title is invalid"));
	}
// escape any mySQL wild cards
	$postTitle = str_replace("_", "\\_", str_replace("%", "\\%", $postTitle));
// create query template
	$query = "SELECT postId, postImage, postDescription, postTitle, postProfileId FROM post WHERE postTitle = :postTitle";
	$statement = $pdo->prepare($query);
// bind the post title content to the place holder in the template
	$postTitle= "%$postTitle%";
	$parameters = ["postTitle" => $postTitle];
	$statement->execute($parameters);
// build an array of posts
	$posts = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !== false) {
		try {
			$posts = new Post ($row["postId"], $row["postImage"], $row["postDescription"], $row["postTitle"],  $row["postProfileId"]);
			$posts [$posts->key()] = $post;
			$posts->next();
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
	return($posts);
}

	/**
	 * gets the post by profile Id
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param Uuid|string $postProfileId post ProfileId to search by
	 * @return \SplFixedArray SplFixedArray of posts found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getPostByPostProfileId(\PDO $pdo, string $postProfileId) : \SplFixedArray {
	// sanitize the description before searching
	$postProfileId = trim($postProfileId);
	$postProfileId = filter_var($postProfileId, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($postProfileId) === true) {
		throw(new \PDOException("post title is invalid"));
	}
// escape any mySQL wild cards
	$postTitle = str_replace("_", "\\_", str_replace("%", "\\%", $postTitle));
// create query template
	$query = "SELECT postId, postImage, postDescription, postTitle, postProfileId FROM post WHERE postProfileId = :postProfileId";
	$statement = $pdo->prepare($query);
// bind the post ProfileId content to the place holder in the template
	$postTitle= "%$postProfileId%";
	$parameters = ["postProfileId" => $postProfileId];
	$statement->execute($parameters);
// build an array of posts
	$posts = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !== false) {
		try {
			$posts = new Post ($row["postId"], $row["postImage"], $row["postDescription"], $row["postTitle"],  $row["postProfileId"]);
			$posts [$posts->key()] = $post;
			$posts->next();
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
	return($posts);
	/**
	 * gets all Posts
	 *
	 * @param \PDO $pdo PDO connection object
	 * @return \SplFixedArray SplFixedArray of Posts found or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getAllPosts(\PDO $pdo) : \SPLFixedArray {
	// create query template
	$query = "SELECT postId, postImage, postDescription, postTitle, postProfileId FROM post";
	$statement = $pdo->prepare($query);
	$statement->execute();
// build an array of posts
	$posts = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !== false) {
		try {
			$post = new Post ($row["postId"], $row["postImage"], $row["postDescription"], $row["postTitle"],  $row["postProfileId"]);
			$posts[$posts->key()] = $post;
			$posts->next();
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
	return($posts);
}
	/**
	 * formats the state variables for JSON serialization
	 *
	 * @return array resulting state variables to serialize
	 **/
	public function jsonSerialize() {
	$fields = get_object_vars($this);
	$fields["postId"] = $this->postId->toString();
	$fields["postImage"] = $this->postImage->toString();
	$fields["postDescription"] = $this->postDescription->toString();
	$fields["postTitle"] = $this->postTitle->toString();
	$fields["postProfileId"] = $this->postProfileId->toString();
	return ($fields);
}
}
