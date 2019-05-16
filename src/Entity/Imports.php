<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imports
 *
 * @ORM\Table(name="imports")
 * @ORM\Entity
 */
class Imports
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
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $filename = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="settings", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $settings = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_items", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $totalItems = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="finished", type="boolean", nullable=false)
     */
    private $finished = '0';

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
