<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GitosisPublicKeys
 *
 * @ORM\Table(name="gitosis_public_keys")
 * @ORM\Entity
 */
class GitosisPublicKeys
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
     * @var string|null
     *
     * @ORM\Column(name="identifier", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $identifier = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="key", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $key = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $userId = 'NULL';

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


}
