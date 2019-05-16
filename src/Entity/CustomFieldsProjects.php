<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFieldsProjects
 *
 * @ORM\Table(name="custom_fields_projects", uniqueConstraints={@ORM\UniqueConstraint(name="index_custom_fields_projects_on_custom_field_id_and_project_id", columns={"custom_field_id", "project_id"})})
 * @ORM\Entity
 */
class CustomFieldsProjects
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
    private $customFieldId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId = '0';


}
