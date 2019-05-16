<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projects
 *
 * @ORM\Table(name="projects", indexes={@ORM\Index(name="index_projects_on_rgt", columns={"rgt"}), @ORM\Index(name="index_projects_on_lft", columns={"lft"})})
 * @ORM\Entity
 */
class Projects
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="homepage", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $homepage = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_public", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isPublic = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $parentId = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdOn = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $updatedOn = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="identifier", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $identifier = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1"})
     */
    private $status = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="lft", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $lft = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rgt", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $rgt = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="inherit_members", type="boolean", nullable=false)
     */
    private $inheritMembers = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_version_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $defaultVersionId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_assigned_to_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $defaultAssignedToId = 'NULL';


}
