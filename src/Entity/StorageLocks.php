<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StorageLocks
 *
 * @ORM\Table(name="storage_locks", uniqueConstraints={@ORM\UniqueConstraint(name="token", columns={"token"})}, indexes={@ORM\Index(name="index_storage_locks_on_valid_until", columns={"valid_until"}), @ORM\Index(name="index_storage_locks_on_storage_node_id", columns={"storage_node_id"})})
 * @ORM\Entity
 */
class StorageLocks
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
     * @ORM\Column(name="storage_node_id", type="integer", nullable=false)
     */
    private $storageNodeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="creator_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $creatorId = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=36, nullable=false)
     */
    private $token;

    /**
     * @var string|null
     *
     * @ORM\Column(name="owner", type="string", length=1024, nullable=true, options={"default"="NULL"})
     */
    private $owner = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="timeout", type="integer", nullable=false)
     */
    private $timeout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_until", type="datetime", nullable=false)
     */
    private $validUntil;

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
     * @var bool|null
     *
     * @ORM\Column(name="recursive", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $recursive = 'NULL';


}
