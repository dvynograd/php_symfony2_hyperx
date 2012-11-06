<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aleksej
 * Date: 05.11.12
 * Time: 00:06
 * To change this template use File | Settings | File Templates.
 */

namespace Kingston\HyperxBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}