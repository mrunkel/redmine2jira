<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Issues
 *
 * @ORM\Table(name="issues", indexes={@ORM\Index(name="index_issues_on_priority_id", columns={"priority_id"}), @ORM\Index(name="index_issues_on_contact_id", columns={"contact_id"}), @ORM\Index(name="index_issues_on_category_id", columns={"category_id"}), @ORM\Index(name="index_issues_on_root_id_and_lft_and_rgt", columns={"root_id", "lft", "rgt"}), @ORM\Index(name="index_issues_on_company_cache_and_contact_cache", columns={"company_cache", "contact_cache"}), @ORM\Index(name="index_issues_on_tracker_id", columns={"tracker_id"}), @ORM\Index(name="index_issues_on_company_id", columns={"company_id"}), @ORM\Index(name="index_issues_on_status_id", columns={"status_id"}), @ORM\Index(name="index_issues_on_created_on", columns={"created_on"}), @ORM\Index(name="index_issues_on_contact_cache", columns={"contact_cache"}), @ORM\Index(name="index_issues_on_fixed_version_id", columns={"fixed_version_id"}), @ORM\Index(name="issues_project_id", columns={"project_id"}), @ORM\Index(name="index_issues_on_author_id", columns={"author_id"}), @ORM\Index(name="index_issues_on_company_cache", columns={"company_cache"}), @ORM\Index(name="index_issues_on_assigned_to_id", columns={"assigned_to_id"})})
 * @ORM\Entity
 */
class Issues
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
     * @ORM\Column(name="tracker_id", type="integer", nullable=false)
     */
    private $trackerId;

    /**
     * @var int
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $subject = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="due_date", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dueDate = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="category_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $categoryId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false)
     */
    private $statusId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="assigned_to_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $assignedToId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="priority_id", type="integer", nullable=false)
     */
    private $priorityId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fixed_version_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $fixedVersionId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="author_id", type="integer", nullable=false)
     */
    private $authorId;

    /**
     * @var int
     *
     * @ORM\Column(name="lock_version", type="integer", nullable=false)
     */
    private $lockVersion = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdOn = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $updatedOn = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="date", nullable=true, options={"default"="NULL"})
     */
    private $startDate = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="done_ratio", type="integer", nullable=false)
     */
    private $doneRatio = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="estimated_hours", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $estimatedHours = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $parentId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="root_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $rootId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="lft", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $lft = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rgt", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $rgt = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="company_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $companyId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $contactId = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_private", type="boolean", nullable=false)
     */
    private $isPrivate = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_cache", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $companyCache = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_cache", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $contactCache = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="closed_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $closedOn = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sender_contact_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $senderContactId = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_by_customer", type="boolean", nullable=true)
     */
    private $visibleByCustomer = '0';


}
