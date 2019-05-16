<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IssueCategories
 *
 * @ORM\Table(name="issue_categories", indexes={@ORM\Index(name="index_issue_categories_on_assigned_to_id", columns={"assigned_to_id"}), @ORM\Index(name="issue_categories_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class IssueCategories
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
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="assigned_to_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $assignedToId = 'NULL';


}
