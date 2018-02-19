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
}
