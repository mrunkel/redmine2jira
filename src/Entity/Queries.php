<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Queries
 *
 * @ORM\Table(name="queries", indexes={@ORM\Index(name="index_queries_on_user_id", columns={"user_id"}), @ORM\Index(name="index_queries_on_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class Queries
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
     * @var int|null
     *
     * @ORM\Column(name="project_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $projectId = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="filters", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $filters = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_names", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $columnNames = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sort_criteria", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $sortCriteria = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_by", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $groupBy = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="visibility", type="integer", nullable=true)
     */
    private $visibility = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="options", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $options = 'NULL';


}
