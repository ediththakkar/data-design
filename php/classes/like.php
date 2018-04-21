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