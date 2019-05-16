<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactsIssues
 *
 * @ORM\Table(name="contacts_issues", indexes={@ORM\Index(name="index_contacts_issues_on_issue_id_and_contact_id", columns={"issue_id", "contact_id"}), @ORM\Index(name="index_contacts_issues_on_contact_id_and_issue_id", columns={"contact_id", "issue_id"})})
 * @ORM\Entity
 */
class ContactsIssues
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
     * @var int|null
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $contactId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="issue_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $issueId = 'NULL';


}
