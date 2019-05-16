<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Versions
 *
 * @ORM\Table(name="versions", indexes={@ORM\Index(name="index_versions_on_sharing", columns={"sharing"}), @ORM\Index(name="versions_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class Versions
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $description = '\'\'';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="effective_date", type="date", nullable=true, options={"default"="NULL"})
     */
    private $effectiveDate = 'NULL';

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
     * @ORM\Column(name="wiki_page_title", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $wikiPageTitle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true, options={"default"="'open'"})
     */
    private $status = '\'open\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sharing", type="string", length=255, nullable=false, options={"default"="'none'"})
     */
    private $sharing = '\'none\'';


}
