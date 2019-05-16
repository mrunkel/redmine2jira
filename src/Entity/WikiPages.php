<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WikiPages
 *
 * @ORM\Table(name="wiki_pages", indexes={@ORM\Index(name="index_wiki_pages_on_wiki_id", columns={"wiki_id"}), @ORM\Index(name="wiki_pages_wiki_id_title", columns={"wiki_id", "title"}), @ORM\Index(name="index_wiki_pages_on_parent_id", columns={"parent_id"})})
 * @ORM\Entity
 */
class WikiPages
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
     * @ORM\Column(name="wiki_id", type="integer", nullable=false)
     */
    private $wikiId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=false)
     */
    private $createdOn;

    /**
     * @var bool
     *
     * @ORM\Column(name="protected", type="boolean", nullable=false)
     */
    private $protected = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $parentId = 'NULL';


}
