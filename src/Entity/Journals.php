<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journals
 *
 * @ORM\Table(name="journals", indexes={@ORM\Index(name="index_journals_on_user_id", columns={"user_id"}), @ORM\Index(name="index_journals_on_created_on", columns={"created_on"}), @ORM\Index(name="journals_journalized_id", columns={"journalized_id", "journalized_type"}), @ORM\Index(name="index_journals_on_journalized_id", columns={"journalized_id"})})
 * @ORM\Entity
 */
class Journals
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
     * @ORM\Column(name="journalized_id", type="integer", nullable=false)
     */
    private $journalizedId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="journalized_type", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $journalizedType = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $notes = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=false)
     */
    private $createdOn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_by_customer", type="boolean", nullable=true)
     */
    private $visibleByCustomer = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="private_notes", type="boolean", nullable=false)
     */
    private $privateNotes = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sender_contact_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $senderContactId = 'NULL';


}
