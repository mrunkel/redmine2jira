<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StorageCheckouts
 *
 * @ORM\Table(name="storage_checkouts")
 * @ORM\Entity
 */
class StorageCheckouts
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
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="working_copy_id", type="integer", nullable=false)
     */
    private $workingCopyId;

    /**
     * @var int
     *
     * @ORM\Column(name="original_id", type="integer", nullable=false)
     */
    private $originalId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;


}
