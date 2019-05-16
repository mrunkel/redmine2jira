<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discussions
 *
 * @ORM\Table(name="discussions", indexes={@ORM\Index(name="index_discussions_on_page_id", columns={"page_id"}), @ORM\Index(name="index_discussions_on_prototype_id", columns={"prototype_id"})})
 * @ORM\Entity
 */
class Discussions
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
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $title = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="prototype_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $prototypeId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="page_id", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $pageId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="entries", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $entries = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="timestamp", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $timestamp = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_discussed_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $lastDiscussedAt = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdAt = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $updatedAt = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="api_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $apiId = 'NULL';


}
