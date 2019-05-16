<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberRoles
 *
 * @ORM\Table(name="member_roles", indexes={@ORM\Index(name="index_member_roles_on_role_id", columns={"role_id"}), @ORM\Index(name="index_member_roles_on_member_id", columns={"member_id"})})
 * @ORM\Entity
 */
class MemberRoles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     */
    private $memberId;

    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="inherited_from", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $inheritedFrom = 'NULL';


}
