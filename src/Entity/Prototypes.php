<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prototypes
 *
 * @ORM\Table(name="prototypes")
 * @ORM\Entity
 */
class Prototypes
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="page_names", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $pageNames = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_modified", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $lastModified = 'NULL';

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
