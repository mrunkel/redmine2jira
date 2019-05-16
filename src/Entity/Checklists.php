<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Checklists
 *
 * @ORM\Table(name="checklists")
 * @ORM\Entity
 */
class Checklists
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
     * @var bool|null
     *
     * @ORM\Column(name="is_done", type="boolean", nullable=true)
     */
    private $isDone = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", length=512, nullable=true, options={"default"="NULL"})
     */
    private $subject = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true, options={"default"="1"})
     */
    private $position = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="issue_id", type="integer", nullable=false)
     */
    private $issueId;

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
