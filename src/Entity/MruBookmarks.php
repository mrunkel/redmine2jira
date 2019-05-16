<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MruBookmarks
 *
 * @ORM\Table(name="mru_bookmarks", indexes={@ORM\Index(name="index_mru_bookmarks_on_user_id_and_uri_path", columns={"user_id", "uri_path"}), @ORM\Index(name="index_mru_bookmarks_on_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class MruBookmarks
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
     * @ORM\Column(name="uri_path", type="string", length=2048, nullable=true, options={"default"="NULL"})
     */
    private $uriPath = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $userId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $position = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="bookmarkable_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $bookmarkableId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="bookmarkable_type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $bookmarkableType = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $projectId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra_info", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $extraInfo = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;


}
