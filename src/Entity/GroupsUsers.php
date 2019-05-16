<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupsUsers
 *
 * @ORM\Table(name="groups_users", uniqueConstraints={@ORM\UniqueConstraint(name="groups_users_ids", columns={"group_id", "user_id"})})
 * @ORM\Entity
 */
class GroupsUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;


}
