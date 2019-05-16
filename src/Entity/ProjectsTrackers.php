<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectsTrackers
 *
 * @ORM\Table(name="projects_trackers", uniqueConstraints={@ORM\UniqueConstraint(name="projects_trackers_unique", columns={"project_id", "tracker_id"})}, indexes={@ORM\Index(name="projects_trackers_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class ProjectsTrackers
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
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tracker_id", type="integer", nullable=false)
     */
    private $trackerId = '0';


}
