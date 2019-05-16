<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boards
 *
 * @ORM\Table(name="boards", indexes={@ORM\Index(name="index_boards_on_last_message_id", columns={"last_message_id"}), @ORM\Index(name="boards_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class Boards
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
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $position = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="topics_count", type="integer", nullable=false)
     */
    private $topicsCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="messages_count", type="integer", nullable=false)
     */
    private $messagesCount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_message_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $lastMessageId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $parentId = 'NULL';


}
