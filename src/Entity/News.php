<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news", indexes={@ORM\Index(name="index_news_on_created_on", columns={"created_on"}), @ORM\Index(name="index_news_on_author_id", columns={"author_id"}), @ORM\Index(name="news_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class News
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
     * @ORM\Column(name="title", type="string", length=60, nullable=false, options={"default"="''"})
     */
    private $title = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="summary", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $summary = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="author_id", type="integer", nullable=false)
     */
    private $authorId = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdOn = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="comments_count", type="integer", nullable=false)
     */
    private $commentsCount = '0';


}
