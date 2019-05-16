<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JournalDetails
 *
 * @ORM\Table(name="journal_details", indexes={@ORM\Index(name="journal_details_journal_id", columns={"journal_id"})})
 * @ORM\Entity
 */
class JournalDetails
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
     * @ORM\Column(name="journal_id", type="integer", nullable=false)
     */
    private $journalId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="property", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $property = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="prop_key", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $propKey = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="old_value", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $oldValue = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';


}
