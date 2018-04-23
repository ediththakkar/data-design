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

	/**
	 * gets the Like by like ProfileId
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param Uuid|string $likeProfileId clap id to search for
	 * @return Blog|null Blog found or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when a variable are not the correct data type
	 **/
	public static function getClapbyClapId(\PDO $pdo, $likeProfileId) : ?Clap {
		// sanitize the clapId before searching
		try {
			$clapId = self::validateUuid($likeProfileId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
		// create query template
		$query = "SELECT likeProfileId, likePostId FROM like WHERE likeProfileId = :likeProfileId";
		$statement = $pdo->prepare($query);
		// bind the like id to the place holder in the template
		$parameters = ["likeProfileId" => $likeProfileId->getBytes()];
		$statement->execute($parameters);
		// grab the like from mySQL
		try {
			$like = null;
			$statement->setFetchMode(\PDO::FETCH_ASSOC);
			$row = $statement->fetch();
			if($row !== false) {
				$clap = new Clap($row["likeProfileId"], $row["likePostId"]);
			}
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
		return($like);
	}
	/**
	 * gets the Like by blog id
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param Uuid|string $likeProfileId blog id to search by
	 * @return \SplFixedArray SplFixedArray of Claps found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getClapByClapBlogId(\PDO $pdo, $clapBlogId) : \SplFixedArray {
		try {
			$clapBlogId = self::validateUuid($clapBlogId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
		// create query template
		$query = "SELECT clapId, clapBlogId, clapProfileId FROM clap WHERE clapBlogId = :clapBlogId";
		$statement = $pdo->prepare($query);
		// bind the clapBlogId to the place holder in the template
		$parameters = ["clapBlogId" => $clapBlogId->getBytes()];
		$statement->execute($parameters);
		// build an array of claps
		$claps = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$clap = new Clap($row["clapId"], $row["clapBlogId"], $row["clapProfileId"]);
				$claps[$claps->key()] = $clap;
				$claps->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return($claps);
	}
	/**
	 * gets the like by likePostId
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param Uuid|string $likePostId profile id to search by
	 * @return \SplFixedArray SplFixedArray of Claps found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when Profilevariables are not the correct data type
	 **/
	public static function getLikePostId(\PDO $pdo, $likePostId) : \SplFixedArray {
		try {
			$likePostId = self::validateUuid($likePostId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
		// create query template
		$query = "SELECT likeProfileID, likePostId FROM like WHERE likePostId = :likePostId";
		$statement = $pdo->prepare($query);
		// bind the clapProfileId to the place holder in the template
		$parameters = ["likePostId" => $likePostId->getBytes()];
		$statement->execute($parameters);
		// build an array of claps
		$claps = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$like = new Like($row["likeProfileId"], $row["likePostId"]);
				$likes[$likes->key()] = $like;
				$likes->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return($likes);
	}
	/**
	 * gets all Likes
	 *
	 * @param \PDO $pdo PDO connection object
	 * @return \SplFixedArray SplFixedArray of Likes found or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getAllLikes(\PDO $pdo) : \SPLFixedArray {
		// create query template
		$query = "SELECT likeProfileId, likePostId, likePostId FROM like";
		$statement = $pdo->prepare($query);
		$statement->execute();
// build an array of likes
		$likes = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$like = new Like ($row["likeProfileId"], $row["likePostId"]);
				$likes[$likes->key()] = $like;
				$likes->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return($likes);
	}
	/**
	 * formats the state variables for JSON serialization
	 *
	 * @return array resulting state variables to serialize
	 **/
	public function jsonSerialize() {
		$fields = get_object_vars($this);
		$fields["likeProfileId"] = $this->likeProfileId->toString();
		$fields["likePostId"] = $this->likePostId->toString();
		return($fields);
	}
}
}