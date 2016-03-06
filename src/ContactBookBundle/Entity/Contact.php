<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 06/03/2016
 * Time: 20:11
 */

namespace ContactBookBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;


/*
 * @ORM\Table(name="contacts")
 */
class Contact
{
    /*
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /*
     * @var string
     *
     * @ORM\Column(name="name", type="string", length="255", nullable=false)
     */
    private $name;

    /*
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length="255", nullable=false)
     */
    private $surname;

    /*
     * @var string
     *
     * @ORM\Column(name="email_address", type="string", length="255", nullable=false)
     */
    private $emailAddress;

    /*
     * @var string
     *
     * @ORM\Column(name="phone-number", type="string", length="255")
     */
    private $phoneNumber;


    /**
     * @var \Doctrine\Common\Collections\Collection|Group[]
     *
     * @ORM\ManyToMany(targetEntity="Group", inversedBy="Contacts")
     * @ORM\JoinTable(
     *  name="contact_contactgroup",
     *  joinColumns={
     *      @ORM\JoinColumn(name="contact_id", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="contact_group_id", referencedColumnName="id")
     *  }
     * )
     */
    private $groups;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param mixed $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }


    public function __toString()
    {
        return $this->getName();
    }

}