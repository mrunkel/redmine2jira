<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChatLogEntries
 *
 * @ORM\Table(name="chat_log_entries", indexes={@ORM\Index(name="index_chat_log_entries_on_user_id", columns={"user_id"}), @ORM\Index(name="index_chat_log_entries_on_chat_log_id", columns={"chat_log_id"})})
 * @ORM\Entity
 */
class ChatLogEntries
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
     * @ORM\Column(name="body", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $body = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="chat_log_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $chatLogId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $userId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nickname", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nickname = 'NULL';

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
     * @ORM\Column(name="irc_reply", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $ircReply = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="action", type="boolean", nullable=true)
     */
    private $action = '0';


}
