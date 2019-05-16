<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */
class Roles
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $position = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="assignable", type="boolean", nullable=true, options={"default"="1"})
     */
    private $assignable = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="builtin", type="integer", nullable=false)
     */
    private $builtin = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="permissions", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $permissions = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="issues_visibility", type="string", length=30, nullable=false, options={"default"="'default'"})
     */
    private $issuesVisibility = '\'default\'';

    /**
     * @var string
     *
     * @ORM\Column(name="users_visibility", type="string", length=30, nullable=false, options={"default"="'members_of_visible_projects'"})
     */
    private $usersVisibility = '\'members_of_visible_projects\'';

    /**
     * @var string
     *
     * @ORM\Column(name="time_entries_visibility", type="string", length=30, nullable=false, options={"default"="'all'"})
     */
    private $timeEntriesVisibility = '\'all\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="all_roles_managed", type="boolean", nullable=false, options={"default"="1"})
     */
    private $allRolesManaged = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="settings", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $settings = 'NULL';


}
