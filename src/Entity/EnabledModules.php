<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnabledModules
 *
 * @ORM\Table(name="enabled_modules", indexes={@ORM\Index(name="enabled_modules_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class EnabledModules
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;


}
