<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WikiContentVersions
 *
 * @ORM\Table(name="wiki_content_versions", indexes={@ORM\Index(name="index_wiki_content_versions_on_updated_on", columns={"updated_on"}), @ORM\Index(name="wiki_content_versions_wcid", columns={"wiki_content_id"})})
 * @ORM\Entity
 */
class WikiContentVersions
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
     * @ORM\Column(name="wiki_content_id", type="integer", nullable=false)
     */
    private $wikiContentId;

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
     * @ORM\Column(name="data", type="blob", length=0, nullable=true, options={"default"="NULL"})
     */
    private $data = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="compression", type="string", length=6, nullable=true, options={"default"="''"})
     */
    private $compression = '\'\'';

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
