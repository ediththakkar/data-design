<?php
namespace Edu\Cnm\DataDesign;

require_once("autoload.php");
require_once(__DIR__,2) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;
/**
 * @author Edith Thakkar <ediththakkar@gmail.com>
 * @author Dylan McDonald <dmdonald21@cnm.edu>
 */

class Like implements \JsonSerializable {
	use ValidateUuid;

	/**
	 * This is the profile id for the like ; this is a foreign key
	 * @var Uuid $likeProfileId
	 */
	private $likeProfileId;

	/**  This is the post id for the like; this is a foreign key
	 * @var string $likePostId
	 */

	private $likePostId;


	/**
	 *Constructor for the profile
	 *
	 * @param string|Uuid $newlikeProfileId
	 * @param string|Uuid $newlikePostId
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 * @Documentation https://php.net/manual/en/language.oop5.decon.php
	 *
	 */
	public function __construct($newlikeProfileId, $newlikePostId){
		try{
			$this->setPostId($newlikeProfileId);
			$this->setPostImage($newlikePostId);

//determine what exception type was thrown
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}
}

	/**
	 *accessor method for like ProfileId
	 *
	 *@return Uuid value of Like profileId
	 */
	public function getLikeProfileId() : Uuid {
		return($this->likeProfileId);
	}

	/**
	 *mutator method for like ProfileId
	 *
	 *@param Uuid|string $newLikeProfileId new value of like ProfileId
	 *@throws \InvalidArgumentException if $newLikeProfileId is not a st
	 *@throws \RangeException if $newLikeProfileId is not positive
	 * @throws \TypeError if $newLikeProfileId is not a uuid or str:
	 */
	public function setProfileId ( $newLikeProfileId) : void {
		try {
			$uuid = self::validateUuid($newLikeProfileId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception-getMessage(), 0, $exception));
		}

		//convert and store the like ProfileId
		$this->likeProfileId = $uuid;
	}

	/**
	 *accessor method for like PostId
	 *
	 *@return Uuid value of like PostId
	 */
	public function getLikePostId() : Uuid {
		return($this->likeProfileId);
	}

	/**
	 *mutator method for like PostId
	 *
	 *@param Uuid|string $newLikePostId new value of like PostId
	 *@throws \InvalidArgumentException if $newLikePostId is not a st
	 *@throws \RangeException if $newLikePostId is not positive
	 * @throws \TypeError if $newLikePostId is not a uuid or str:
	 */
	public function setLikePostId ( $newLikePostId) : void {
		try {
			$uuid = self::validateUuid($newLikePostId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception-getMessage(), 0, $exception));
		}

		//convert and store the like PostId
		$this->likeProfileId = $uuid;
	}