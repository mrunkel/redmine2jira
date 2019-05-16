<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChatConfigurations
 *
 * @ORM\Table(name="chat_configurations")
 * @ORM\Entity
 */
class ChatConfigurations
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
     * @ORM\Column(name="project_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $projectId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="chat_log_retention_days", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $chatLogRetentionDays = 'NULL';

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
