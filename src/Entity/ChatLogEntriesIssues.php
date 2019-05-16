<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChatLogEntriesIssues
 *
 * @ORM\Table(name="chat_log_entries_issues", uniqueConstraints={@ORM\UniqueConstraint(name="index_chat_log_entries_issues_on_chat_log_entry_id_and_issue_id", columns={"chat_log_entry_id", "issue_id"})}, indexes={@ORM\Index(name="index_chat_log_entries_issues_on_issue_id", columns={"issue_id"})})
 * @ORM\Entity
 */
class ChatLogEntriesIssues
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
     * @ORM\Column(name="chat_log_entry_id", type="integer", nullable=false)
     */
    private $chatLogEntryId;

    /**
     * @var int
     *
     * @ORM\Column(name="issue_id", type="integer", nullable=false)
     */
    private $issueId;


}
