<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages", indexes={@ORM\Index(name="index_messages_on_last_reply_id", columns={"last_reply_id"}), @ORM\Index(name="messages_parent_id", columns={"parent_id"}), @ORM\Index(name="index_messages_on_created_on", columns={"created_on"}), @ORM\Index(name="messages_board_id", columns={"board_id"}), @ORM\Index(name="index_messages_on_author_id", columns={"author_id"})})
 * @ORM\Entity
 */
class Messages
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
     * @ORM\Column(name="board_id", type="integer", nullable=false)
     */
    private $boardId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $parentId = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $subject = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $content = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="author_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $authorId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="replies_count", type="integer", nullable=false)
     */
    private $repliesCount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_reply_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $lastReplyId = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=false)
     */
    private $createdOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=false)
     */
    private $updatedOn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="locked", type="boolean", nullable=true)
     */
    private $locked = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sticky", type="integer", nullable=true)
     */
    private $sticky = '0';


}
