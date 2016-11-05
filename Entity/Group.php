<?php
/**
 * Created by PhpStorm.
 * User: peteratkins
 * Date: 09/05/2016
 * Time: 22:52
 */

namespace Oni\TravelPortBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Group
 *
 * @ORM\Table(name="oni_user_tp_groups")
 * @ORM\Entity(repositoryClass="Oni\TravelPortBundle\Entity\Repository\GroupRepository")
 */
class Group {

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

	/**
	 * @var string
	 * @Gedmo\Translatable
	 * @ORM\Column(name="name", type="string", length=50)
	 */
	private $name;

	/**
	 * @var array
	 *
	 * @ORM\Column(name="roles", type="array")
	 */
	private $roles;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="accessLevel", type="integer")
	 */
	private $accessLevel;



	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 *
	 * @return Group
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set roles
	 *
	 * @param array $roles
	 *
	 * @return Group
	 */
	public function setRoles($roles)
	{
		$this->roles = $roles;

		return $this;
	}

	/**
	 * Get roles
	 *
	 * @return array
	 */
	public function getRoles()
	{
		return $this->roles;
	}


	/**
	 * Set roles
	 *
	 * @param array $accessLevel
	 *
	 * @return Group
	 */
	public function setAccessLevel($accessLevel)
	{
		$this->accessLevel = $accessLevel;

		return $this;
	}

	/**
	 * Get roles
	 *
	 * @return array
	 */
	public function getAccessLevel()
	{
		return $this->accessLevel;
	}

}
