<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enumerations
 *
 * @ORM\Table(name="enumerations", indexes={@ORM\Index(name="index_enumerations_on_id_and_type", columns={"id", "type"}), @ORM\Index(name="index_enumerations_on_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class Enumerations
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
     * @var bool
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $projectId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $parentId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="position_name", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $positionName = 'NULL';


}
