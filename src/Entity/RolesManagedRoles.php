<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolesManagedRoles
 *
 * @ORM\Table(name="roles_managed_roles", uniqueConstraints={@ORM\UniqueConstraint(name="index_roles_managed_roles_on_role_id_and_managed_role_id", columns={"role_id", "managed_role_id"})})
 * @ORM\Entity
 */
class RolesManagedRoles
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
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId;

    /**
     * @var int
     *
     * @ORM\Column(name="managed_role_id", type="integer", nullable=false)
     */
    private $managedRoleId;


}
