<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 *
 * @ORM\Entity
 */
class User
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    public $name;
	
	/**
     * @ORM\Column(type="string", length=100)
     */
    public $lastName;
	
	/**
     * @ORM\Column(type="integer", length=11)
     */
    public $active;

    /**
     * @ORM\Column(type="date")
     */
    public $creation;

}