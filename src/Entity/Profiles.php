<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProfilesRepository")
 */
class Profiles
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $name;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $nick;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $summary;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $tag;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $profilephoto;

	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $sex;

	/**
	 * @ORM\Column(type="decimal", scale=2, nullable=true)
	 */
	private $height;

	/**
	 * @ORM\Column(type="decimal", scale=3, nullable=true)
	 */
	private $mass;

	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $occupation;

	/**
	 * @ORM\Column(type="string", length=200, nullable=true)
	 */
	private $android;

	/**
	 * @ORM\Column(type="date", nullable=true)
	 */
	private $birthdate;

	/**
	 * @ORM\Column(type="decimal", scale=1, nullable=true)
	 */
	private $age;

	/**
	 * @ORM\Column(type="string", length=200, nullable=true)
	 */
	private $hair;

	/**
	 * @ORM\Column(type="string", length=200, nullable=true)
	 */
	private $eyes;



	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getNick() {
		return $this->nick;
	}

	/**
	 * @param mixed $nick
	 */
	public function setNick($nick) {
		$this->nick = $nick;
	}

	/**
	 * @return mixed
	 */
	public function getSummary() {
		return $this->summary;
	}

	/**
	 * @param mixed $summary
	 */
	public function setSummary($summary) {
		$this->summary = $summary;
	}

	/**
	 * @return mixed
	 */
	public function getTag() {
		return $this->tag;
	}

	/**
	 * @param mixed $tag
	 */
	public function setTag($tag) {
		$this->tag = $tag;
	}

	/**
	 * @return mixed
	 */
	public function getProfilephoto() {
		return $this->profilephoto;
	}

	/**
	 * @param mixed $profilephoto
	 */
	public function setProfilephoto($profilephoto) {
		$this->profilephoto = $profilephoto;
	}

	/**
	 * @return mixed
	 */
	public function getSex() {
		return $this->sex;
	}

	/**
	 * @param mixed $sex
	 */
	public function setSex($sex) {
		$this->sex = $sex;
	}

	/**
	 * @return mixed
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * @param mixed $height
	 */
	public function setHeight($height) {
		$this->height = $height;
	}

	/**
	 * @return mixed
	 */
	public function getMass() {
		return $this->mass;
	}

	/**
	 * @param mixed $mass
	 */
	public function setMass($mass) {
		$this->mass = $mass;
	}

	/**
	 * @return mixed
	 */
	public function getOccupation() {
		return $this->occupation;
	}

	/**
	 * @param mixed $occupation
	 */
	public function setOccupation($occupation) {
		$this->occupation = $occupation;
	}

	/**
	 * @return mixed
	 */
	public function getAndroid() {
		return $this->android;
	}

	/**
	 * @param mixed $android
	 */
	public function setAndroid($android) {
		$this->android = $android;
	}

	/**
	 * @return mixed
	 */
	public function getBirthdate() {
		return $this->birthdate;
	}

	/**
	 * @param mixed $birthdate
	 */
	public function setBirthdate($birthdate) {
		$this->birthdate = $birthdate;
	}

	/**
	 * @return mixed
	 */
	public function getAge() {
		return $this->age;
	}

	/**
	 * @param mixed $age
	 */
	public function setAge($age) {
		$this->age = $age;
	}

	/**
	 * @return mixed
	 */
	public function getHair() {
		return $this->hair;
	}

	/**
	 * @param mixed $hair
	 */
	public function setHair($hair) {
		$this->hair = $hair;
	}

	/**
	 * @return mixed
	 */
	public function getEyes() {
		return $this->eyes;
	}

	/**
	 * @param mixed $eyes
	 */
	public function setEyes($eyes) {
		$this->eyes = $eyes;
	}
}
