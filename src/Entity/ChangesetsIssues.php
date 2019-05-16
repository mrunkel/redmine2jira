<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChangesetsIssues
 *
 * @ORM\Table(name="changesets_issues", uniqueConstraints={@ORM\UniqueConstraint(name="changesets_issues_ids", columns={"changeset_id", "issue_id"})})
 * @ORM\Entity
 */
class ChangesetsIssues
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="changeset_id", type="integer", nullable=false)
     */
    private $changesetId;

    /**
     * @var int
     *
     * @ORM\Column(name="issue_id", type="integer", nullable=false)
     */
    private $issueId;


}
