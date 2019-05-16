<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StorageFileVersions
 *
 * @ORM\Table(name="storage_file_versions", indexes={@ORM\Index(name="index_storage_file_versions_on_storage_file_id", columns={"storage_file_id"})})
 * @ORM\Entity
 */
class StorageFileVersions
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
     * @ORM\Column(name="storage_file_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $storageFileId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="creator_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $creatorId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="version", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $version = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=512, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attachment_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $attachmentId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="properties", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $properties = 'NULL';


}
