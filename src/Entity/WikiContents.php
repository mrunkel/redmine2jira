<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WikiContents
 *
 * @ORM\Table(name="wiki_contents", indexes={@ORM\Index(name="index_wiki_contents_on_author_id", columns={"author_id"}), @ORM\Index(name="wiki_contents_page_id", columns={"page_id"})})
 * @ORM\Entity
 */
class WikiContents
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
     * @ORM\Column(name="page_id", type="integer", nullable=false)
     */
    private $pageId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="author_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $authorId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $text = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="string", length=1024, nullable=true, options={"default"="''"})
     */
    private $comments = '\'\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=false)
     */
    private $updatedOn;

    /**
     * @var int
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version;


}
