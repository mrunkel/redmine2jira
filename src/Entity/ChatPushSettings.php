<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChatPushSettings
 *
 * @ORM\Table(name="chat_push_settings")
 * @ORM\Entity
 */
class ChatPushSettings
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
     * @ORM\Column(name="device_token", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $deviceToken = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $deviceName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $service = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="highlight_words", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $highlightWords = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="highlight_sound", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $highlightSound = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_sound", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $messageSound = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $userId = 'NULL';

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
     * @var string|null
     *
     * @ORM\Column(name="nickname", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nickname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ignore_words", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $ignoreWords = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="network", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $network = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="client_version", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $clientVersion = 'NULL';


}
