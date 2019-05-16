<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QueriesRoles
 *
 * @ORM\Table(name="queries_roles", uniqueConstraints={@ORM\UniqueConstraint(name="queries_roles_ids", columns={"query_id", "role_id"})})
 * @ORM\Entity
 */
class QueriesRoles
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
     * @ORM\Column(name="query_id", type="integer", nullable=false)
     */
    private $queryId;

    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId;


}
