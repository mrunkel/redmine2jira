<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompaniesProjects
 *
 * @ORM\Table(name="companies_projects", indexes={@ORM\Index(name="index_companies_projects_on_project_id", columns={"project_id"}), @ORM\Index(name="index_companies_projects_on_company_id", columns={"company_id"})})
 * @ORM\Entity
 */
class CompaniesProjects
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
     * @var int|null
     *
     * @ORM\Column(name="company_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $companyId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $projectId = 'NULL';


}
