<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFieldsRoles
 *
 * @ORM\Table(name="custom_fields_roles", uniqueConstraints={@ORM\UniqueConstraint(name="custom_fields_roles_ids", columns={"custom_field_id", "role_id"})})
 * @ORM\Entity
 */
class CustomFieldsRoles
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
     * @ORM\Column(name="custom_field_id", type="integer", nullable=false)
     */
    private $customFieldId;

    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId;


}
