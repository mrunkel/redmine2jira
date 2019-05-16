<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wikis
 *
 * @ORM\Table(name="wikis", indexes={@ORM\Index(name="wikis_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class Wikis
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
    private $projectId;

    /**
     * @var string
     *
     * @ORM\Column(name="start_page", type="string", length=255, nullable=false)
     */
    private $startPage;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1"})
     */
    private $status = '1';


}
