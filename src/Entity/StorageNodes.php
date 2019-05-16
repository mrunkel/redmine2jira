<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StorageNodes
 *
 * @ORM\Table(name="storage_nodes", indexes={@ORM\Index(name="index_storage_nodes_on_sharing_key", columns={"sharing_key"}), @ORM\Index(name="index_storage_nodes_lookup", columns={"parent_id", "name"}), @ORM\Index(name="index_storage_nodes_on_project_id", columns={"project_id"}), @ORM\Index(name="index_storage_nodes_on_project_id_and_type", columns={"project_id", "type"})})
 * @ORM\Entity
 */
class StorageNodes
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $projectId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $parentId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="creator_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $creatorId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="updater_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $updaterId = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=512, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sharing_key", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $sharingKey = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=1024, nullable=true, options={"default"="NULL"})
     */
    private $title = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

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

    /**
     * @var string
     *
     * @ORM\Column(name="etag", type="string", length=128, nullable=false, options={"default"="'1'"})
     */
    private $etag = '\'1\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="protected", type="boolean", nullable=false)
     */
    private $protected = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="root_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $rootId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="filesize", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $filesize = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $contentType = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $deletedAt = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="properties", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $properties = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=true)
     */
    private $hidden = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="destination_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $destinationId = 'NULL';


}
