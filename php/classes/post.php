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
public function getPostImage() : Uuid {
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