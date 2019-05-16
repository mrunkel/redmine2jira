<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WikiRedirects
 *
 * @ORM\Table(name="wiki_redirects", indexes={@ORM\Index(name="index_wiki_redirects_on_wiki_id", columns={"wiki_id"}), @ORM\Index(name="wiki_redirects_wiki_id_title", columns={"wiki_id", "title"})})
 * @ORM\Entity
 */
class WikiRedirects
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
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $title = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="redirects_to", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $redirectsTo = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=false)
     */
    private $createdOn;

    /**
     * @var int
     *
     * @ORM\Column(name="redirects_to_wiki_id", type="integer", nullable=false)
     */
    private $redirectsToWikiId;


}
