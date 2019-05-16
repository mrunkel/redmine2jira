<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PushNotifications
 *
 * @ORM\Table(name="push_notifications", indexes={@ORM\Index(name="index_push_notifications_on_seen_and_user_id_and_url", columns={"seen", "user_id", "url"}), @ORM\Index(name="index_push_notifications_on_sender_type", columns={"sender_type"}), @ORM\Index(name="index_push_notifications_on_sender_id", columns={"sender_id"}), @ORM\Index(name="index_push_notifications_on_user_id", columns={"user_id"}), @ORM\Index(name="index_push_notifications_on_user_id_and_seen_and_created_at", columns={"user_id", "seen", "created_at"})})
 * @ORM\Entity
 */
class PushNotifications
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
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $userId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $title = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=512, nullable=true, options={"default"="NULL"})
     */
    private $url = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="string", length=512, nullable=true, options={"default"="NULL"})
     */
    private $body = 'NULL';

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
     * @var int|null
     *
     * @ORM\Column(name="sender_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $senderId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sender_type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $senderType = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="seen", type="boolean", nullable=true)
     */
    private $seen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="assigned_to_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $assignedToId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $projectId = 'NULL';


}
