<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IssueStatuses
 *
 * @ORM\Table(name="issue_statuses", indexes={@ORM\Index(name="index_issue_statuses_on_is_closed", columns={"is_closed"}), @ORM\Index(name="index_issue_statuses_on_position", columns={"position"})})
 * @ORM\Entity
 */
class IssueStatuses
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_closed", type="boolean", nullable=false)
     */
    private $isClosed = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $position = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_done_ratio", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $defaultDoneRatio = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="on_activity_timer_start", type="boolean", nullable=false)
     */
    private $onActivityTimerStart = '0';


}
