<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmConfigurations
 *
 * @ORM\Table(name="crm_configurations", indexes={@ORM\Index(name="index_crm_configurations_on_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class CrmConfigurations
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
     * @ORM\Column(name="header_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $headerId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="footer_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $footerId = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_header_and_footer", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $useHeaderAndFooter = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $fromName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_mail", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $fromMail = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="from_mail_active", type="boolean", nullable=true)
     */
    private $fromMailActive = '0';

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="email_tracker_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $emailTrackerId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="autoreply_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $autoreplyId = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_autoreply", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $useAutoreply = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="update_notification_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $updateNotificationId = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_update_notification", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $useUpdateNotification = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="issue_attrs_for_tracking_page", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $issueAttrsForTrackingPage = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="task_tracker_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $taskTrackerId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="note_tracker_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $noteTrackerId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="reply_status_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $replyStatusId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="closed_status_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $closedStatusId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="spam_status_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $spamStatusId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_assignee_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $defaultAssigneeId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="answer_status_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $answerStatusId = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="reply_by_default", type="boolean", nullable=false)
     */
    private $replyByDefault = '0';


}
