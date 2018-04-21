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

