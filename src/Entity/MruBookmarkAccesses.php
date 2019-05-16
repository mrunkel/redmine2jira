<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MruBookmarkAccesses
 *
 * @ORM\Table(name="mru_bookmark_accesses", indexes={@ORM\Index(name="index_mru_bookmark_accesses_on_mru_bookmark_id_and_created_at", columns={"mru_bookmark_id", "created_at"}), @ORM\Index(name="index_mru_bookmark_accesses_on_mru_bookmark_id", columns={"mru_bookmark_id"})})
 * @ORM\Entity
 */
class MruBookmarkAccesses
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
     * @ORM\Column(name="mru_bookmark_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $mruBookmarkId = 'NULL';

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
