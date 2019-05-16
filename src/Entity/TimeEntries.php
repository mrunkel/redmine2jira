<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeEntries
 *
 * @ORM\Table(name="time_entries", indexes={@ORM\Index(name="index_time_entries_on_activity_id", columns={"activity_id"}), @ORM\Index(name="time_entries_issue_id", columns={"issue_id"}), @ORM\Index(name="index_time_entries_on_created_on", columns={"created_on"}), @ORM\Index(name="time_entries_project_id", columns={"project_id"}), @ORM\Index(name="index_time_entries_on_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class TimeEntries
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
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="issue_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $issueId = 'NULL';

    /**
     * @var float
     *
     * @ORM\Column(name="hours", type="float", precision=10, scale=0, nullable=false)
     */
    private $hours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="string", length=1024, nullable=true, options={"default"="NULL"})
     */
    private $comments = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="activity_id", type="integer", nullable=false)
     */
    private $activityId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="spent_on", type="date", nullable=false)
     */
    private $spentOn;

    /**
     * @var int
     *
     * @ORM\Column(name="tyear", type="integer", nullable=false)
     */
    private $tyear;

    /**
     * @var int
     *
     * @ORM\Column(name="tmonth", type="integer", nullable=false)
     */
    private $tmonth;

    /**
     * @var int
     *
     * @ORM\Column(name="tweek", type="integer", nullable=false)
     */
    private $tweek;

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


}
