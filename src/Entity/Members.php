<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Members
 *
 * @ORM\Table(name="members", uniqueConstraints={@ORM\UniqueConstraint(name="index_members_on_user_id_and_project_id", columns={"user_id", "project_id"})}, indexes={@ORM\Index(name="index_members_on_user_id", columns={"user_id"}), @ORM\Index(name="index_members_on_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class Members
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
    private $userId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdOn = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="mail_notification", type="boolean", nullable=false)
     */
    private $mailNotification = '0';


}
