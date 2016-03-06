<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 06/03/2016
 * Time: 20:13
 */

namespace ContactBookBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/*
 * @ORM\Table(name="groups")
 */
class Group
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


    /**
     * @var \Doctrine\Common\Collections\Collection|Contact[]
     *
     * @ORM\ManyToMany(targetEntity="Contact", mappedBy="Groups")
     */
    private $contacts;

}