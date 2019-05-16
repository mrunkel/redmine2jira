<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attachments
 *
 * @ORM\Table(name="attachments", indexes={@ORM\Index(name="index_attachments_on_container_id_and_container_type", columns={"container_id", "container_type"}), @ORM\Index(name="index_attachments_on_digest", columns={"digest"}), @ORM\Index(name="index_attachments_on_created_on", columns={"created_on"}), @ORM\Index(name="index_attachments_on_disk_filename", columns={"disk_filename"}), @ORM\Index(name="index_attachments_on_author_id", columns={"author_id"})})
 * @ORM\Entity
 */
class Attachments
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
     * @ORM\Column(name="container_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $containerId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="container_type", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $containerType = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $filename = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="disk_filename", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $diskFilename = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="filesize", type="bigint", nullable=false)
     */
    private $filesize = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_type", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $contentType = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="digest", type="string", length=40, nullable=false, options={"default"="''"})
     */
    private $digest = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="downloads", type="integer", nullable=false)
     */
    private $downloads = '0';

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
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="disk_directory", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $diskDirectory = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fulltext", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $fulltext = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="preview_attempted_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $previewAttemptedAt = 'NULL';


}
